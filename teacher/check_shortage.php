<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<style type="text/css">
		header{
			background-image: url("../images/teacherbg.jpg");
		}
		form{
			position: absolute;
			left:22%;
			top: 35%;
		}
		select{
			background-color: transparent;
			border:solid 0.5px;
		}
		input{
			background-color: transparent;
			border:solid 0.5px;
		}
		#go:hover{
			border:black solid 0.6px;
			padding: 3px 3px;
			cursor: pointer;
			background-color: cyan;
		}
	</style>
</head>
<body>
	<header>
		<h2>CHECK ATTENDANCE SHORTAGE</h2>
		<div class="container">
			<h3 style="text-align: center;position: absolute;top: 15%;left: 30%;">FILL UP DETAILS</h3>
	<?php include('C:\xampp\htdocs\ATS\includes\subject1.php'); ?>

		<form action="display_shortage.php" method="POST" id="myform">
	<?php include('C:\xampp\htdocs\ATS\includes\shortage_also.php'); ?>
		</div>
		</header>
</body>
</html>
	