<?php  
	session_start(); 
	
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";
	mysqli_select_db($con,'ATS');

	$sql = "SELECT * FROM `authentication`";
	$result=mysqli_query($con,$sql);
	$num=mysqli_num_rows($result);
	for($i=0;$i<$num;$i++)
	{
		$res=mysqli_fetch_array($result);
		$uids[]=$res['userid'];
		$pswds[]=$res['password'];
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title >login form</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">

	<script type="text/javascript">

		function setfields()
		{
			var cookie_user="userid="+document.getElementById('user').value;
			document.cookie=cookie_user;											//setting up cookies for userid and password 

			var cookie_pswd="password="+document.getElementById('pswd').value;
			document.cookie=cookie_pswd;
			window.location="http://localhost/ATS/teacher.php"

		}

		function verify()
		{
			var uids=<?php  echo json_encode($uids); ?>;
			var pswds=<?php  echo json_encode($pswds); ?>;
			var n=<?php echo $num ?>;
			var flag=-1;

			for(var i=0;i<n;i++)
			{
				if(uids[i]==document.getElementById('user').value && pswds[i]==document.getElementById('pswd').value)
					{	
						var admin=6773;
						if(uids[i]==admin)
							{window.location="http://localhost/ATS/admin/admin_home.php";break;}
					 	else
					 	{setfields();
					 		break;
					 	}
					}

				else if(i==n-1)
					alert("Invalid credentials !");	
			}
		}
		
		
	</script>
</head>
<body>
	
	<header>
	<div class="wrapper">
		<div class="container">
			<input type="text" id="user" name="userid" placeholder="username" required>
			<input type="password" id="pswd" name="password" placeholder="password" >
			<input id="btn" type="button" name="" value="Log In" onclick="verify()">
		</div>
	</div>
	</header>
</body>

</html>