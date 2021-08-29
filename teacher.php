<?php

session_start();
	
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";
	
	mysqli_select_db($con,'ATS');

	$userid=$_COOKIE['userid'];
	$_SESSION['userid']=$userid;

$result=mysqli_query($con,"SELECT * FROM `teacher` WHERE id=$userid ");
$res=mysqli_fetch_array($result);
if($res['sex']=='M')
	$desg="Mr.";
else
	$desg="Ms.";
	
	$nam=$res['name'];
	//setcookie("desg","$desg");
	//setcookie("nam","$nam");
	$_SESSION['desg']="$desg";$_SESSION['nam']="$nam";
?>

<!DOCTYPE html>
<html>
<head>

	<style type="text/css">
		.content{
			position: absolute;
			left:10%;
			top:15%;
			font-family: sans-serif;
			font-size: 20px;
		}
		li{
			color: white;
		}
	</style>

	<title></title>
	<link rel="stylesheet" type="text/css" href="css/teacher.css">

</head>
<body>
	<?php include('includes/header.php'); ?>

	<div class="content">
		<marquee style="color:solid black;text-decoration: underline; font-size: 25px;">Must Read </marquee><br><br><br>
		<p>
			This System provides you with the attorney to mark attendance of every student who fall under your subjects.<br>
			The College has now bolstered the rules of attendance and its record maintenance, keeping in view the degrading<br>
			strength of classes.This Attendance tracking system is specially designed to ease out the process of keeping <br>
			attendance records.To work efficiently with the system, teacher must remember some key points and must adhere to <br>some technical constraints. These are :-
			<ul>
				<br><br>
				<li>Attendance of a particular day cannot be marked on any other day.</li><br>
				<li>Attendance once submitted will not be changed or altered.</li><br>
				<li>Subjects and students will automatically be updated time to time from Admin's side.</li><br>
				<li>None of the student will be left unattended in attendance marking scheme.
				


			</ul>
		</p>
	</div>
	
	</body>
</html>