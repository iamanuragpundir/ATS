<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	
	<style type="text/css">
		 select{
			position: absolute;
			left: 34%;
			top: 40%;
			padding: 4px 8px;
			font-size: 20px;
		}
		#go{
			position: absolute;
			left: 55%;
			top: 40%;
			padding: 8px 8px;
		}
		label{
			position: absolute;
			left: 21%;
			top: 10%;
			padding: 10px 8px;
			color: black;
			font-size: 20px;
		}
		header{
			background-image:url("../images/teacherbg.jpg");
			background-size: cover;
		}
	</style>
</head>
<body>
	<div id="wrap">
	<header>
		<div class="container">
			<?php include('C:\xampp\htdocs\ATS\includes\subject1.php'); ?>
			<form action="mark_attendance.php" method="POST">
			<?php include('C:\xampp\htdocs\ATS\includes\subject2.php'); ?>
		</div>
	</header>
		</div>
</body>
</html>		
		
				