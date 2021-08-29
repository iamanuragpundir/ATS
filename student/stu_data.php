<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<style type="text/css">
		
		body{
			background-image:url("../images/teacherbg.jpg");
			background-size: cover;
			margin-top: 0px;
		}
		 #rollno{
			position: absolute;
			left: 36%;
			top: 40%;
			padding: 1px 4px;
			font-size: 17px;
			width: 100px;
		}
		#go{
			position: absolute;
			left: 58%;
			top: 40%;
			padding: 3px 8px;
		}
		label{
			position: absolute;
			left: 21%;
			top: 15%;
			padding: 10px 8px;
			color: black;
			font-size: 20px;
		}
	</style>

</head>
<body>	
		<div class="container">
	<form action="display_stu_data.php" method="POST">
		<label><h3>☺☻ Student's Panel ☺☻</h3></label>
		<input type="text" id="rollno" name="rollno" placeholder="enter rollno" required>
		<input type="submit" id="go" value="OK">
	</form>
	<a href="http://localhost/ATS/home.php"><button>EXIT</button></a>
	</div>
</body>
</html>