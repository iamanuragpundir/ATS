<?php

$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	

	mysqli_select_db($con,'ATS');


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
			left:45%;
			top :83%;
			padding: 7px 16px; 
		}
		option{
			color:black;
		}
		input{
			padding:2px;
		}
	</style>
	<title>Add Teacher</title>
</head>
<body>
	<div class="container">
		<h3 align="center">ADD TEACHER</h3><br><br>
		<form method="POST" action="insert_teacher.php" id="add_teacher">
		Name:<input type="text" name="tname" required=""><br><br>
		Sex:<select name="sex">
			<option selected disabled>select</option>
			<option value="M">Male</option>
			<option value="F">Female</option>
			<option value="O">Others</option>
		</select><br><br>
		D.O.B. :<input type="date" name="tdob" required><br><br>
		Mobile:<input type="text" name="tmobile"><br><br>

		<input type="submit" name="" value="submit" id="submit">
	</form>
</div>
</body>
</html>