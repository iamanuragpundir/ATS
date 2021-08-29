<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<style type="text/css">
		*{
			margin:0px;
			padding:0px;
			background-image: url("../images/teacherbg.png");

		}
		button{
			padding:20px 20px;
			font-size: 20px;
		}
		
		#b1{
			width: 200px;
			height: 100px;
			position: fixed;
			left: 43%;
			top:15%;
		}
		#b2{
			width: 200px;
			height: 100px;
			position: fixed;
			left: 25%;
			top:35%;
		}
		#b3{
			width: 200px;
			height: 100px;
			position: fixed;
			left: 60%;
			top:35%;
		}
		#b4{
			width: 400px;
			height: 100px;
			position: fixed;
			left: 35%;
			top:60%;
		}
		h2{
			text-align: center;
			font-size: 35px;
			text-decoration: underline;
		}
		button:hover{
			color: white;
			cursor: pointer;
		}
		#logout {
			
			position: fixed;
			left: 90%;
			top:1%;
			width: 100px;
			height: 12px;
			padding-top: 0px;
			border:none;
		}
	</style>
</head>
<body>
	<h2>ADMIN'S PANEL</h2>
	<a href="../logout.php" onclick="return confirm('Are you sure?');" ><button id="logout">Logout</button></a>
	<div class="container">
	<table>
	
	<tr><a href="add_student.php"><button id="b1">Add Student</button></a><br></tr>
	<tr><a href="add_teacher.php"><button id="b2">Add Teacher</button></a><br></tr>
	<tr><a href="add_subject.php"><button id="b3">Add Subject</button></a><br></tr>
	<tr><a href="assign_teacher.php"><button id="b4">Assign teacher to a subject</button></a><br></tr>

</table>
	</div>

</body>
</html>