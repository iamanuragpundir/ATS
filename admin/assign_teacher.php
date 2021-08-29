<?php
	
	session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database


	mysqli_select_db($con,'ATS');

	$result=mysqli_query($con,"select name from teacher");
	$num1=mysqli_num_rows($result);
	for($i=0;$i<$num1;$i++){
	$res=mysqli_fetch_array($result);
	$tnames[]= $res['name'];
	}
	//print_r($tnames);

	$result=mysqli_query($con,"select name from subject");
	$num2=mysqli_num_rows($result);
	for($i=0;$i<$num2;$i++){
	$res=mysqli_fetch_array($result);
	$snames[]= $res['name'];
	}
	//print_r($snames);

?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="../css/login.css">

	<style type="text/css">
		
		*{
		
			padding:0px;
			background-image: url("../images/teacherbg.png");
			color: white;
		}
		.container{
			padding-left: 20px;
		}
		#submit{
			position: fixed;
			left:40%;
			top :83%;
			padding: 7px 16px; 
		}
		option{
			color:black;
		}
		input{
			padding:2px 4px;
		}
	</style>

	<title>assign teacher to a subject</title>

	<script type="text/javascript">
		

		function subject(){

		var i;
		var n=<?php 	echo $num2; ?>;
	var snames=<?php echo json_encode($snames); ?>;    //converting array of php in jscript
	for(i=0;i<n;i++){

		select1=document.getElementById("select1");
		 select1.options[select1.options.length]=new Option(snames[i],snames[i]);
		}
	}

		function assign_teacher(){

		var i;
		var n=<?php 	echo $num1; ?>;
	var tnames=<?php echo json_encode($tnames); ?>;    //converting array of php in jscript
	for(i=0;i<n;i++){

		select2=document.getElementById("select2");
		 select2.options[select2.options.length]=new Option(tnames[i],tnames[i]);
		}
	}


		

	function both(){
		subject();
		assign_teacher();
	}
	</script>
</head>
<body onload="both()">
	<div class="container">
		<h3 align="center">ASSIGN TEACHER</h3><br><br>
	<form action="assign_effect.php" method="POST">

	Subject:<select id="select1" name="subject" required>
			<option selected disabled>select</option><br>
		</select><br><br>

	<br>Assign Teacher:<select id="select2" name="teacher" required>
			<option selected disabled>select</option>
			</select><br><br>
			<input type="submit" value="submit" id="submit">
	</form>
</div>
</body>
</html>