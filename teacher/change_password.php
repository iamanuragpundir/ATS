<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<style type="text/css">
		
		header{
	background-image: url(../images/teacherbg.jpg);
	height: 100vh;
	width: 100%;
	background-size: cover;
	background-position: center;
	scroll-behavior: smooth;
	}
	#chng_form{
		position: absolute;
		left:35%;
		top: 30%;
	}
	#btn{
		position: fixed;
		left:45%;
		top: 65%;
		width: 70px;
		height: 30px;
		background-color: transparent;
		text-decoration: underline;
		transition: 0.4s all;
	}
	input{
		padding: 3px 3px;
	}
	h2{
		position: fixed;
		left:25%;
		top: 10%;
	}

	</style>
	<script type="text/javascript">
		function check()
		{	
				if(document.getElementById('old').value=="")
					{alert("fill all the details"); exit();}
				if(document.getElementById('new').value=="")
					{alert("fill all the details"); exit();}
				if(document.getElementById('conf_new').value=="")
					{alert("fill all the details"); exit();}

			else if(document.getElementById('new').value!=document.getElementById('conf_new').value)
				alert("Invalid credentials");
	
			else
				chng_form.submit();
				
		}
	</script>
</head>
<body>	
	<header>
	<div class="container">
		<h2>CHANGE PASSWORD</h2>
	<form id="chng_form" action="apply_change.php" method="POST">
		<input type="text" name="i1" id="old" required placeholder="enter old password"><br>
		<input type="text" name="i2" id="new" required placeholder="enter new password"><br>
		<input type="text" name="i3" id="conf_new" required placeholder="re-enter new password"><br>
		<input type="button" name="" id="btn" value="change" onclick="check()">
	</form>
	 </div>
	</header>
</body>
</html>