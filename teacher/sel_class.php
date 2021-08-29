
<?php

session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	else 
			echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

?>
<!DOCTYPE html>
<html>
<head>
	<title>sel subject for attendance</title>
</head>
<body onload="sel_class">

	<form action="mark_attendance.php" method="POST">
		class<select id="sel_sub" name="subject"></select>
	</form>
</body>
</html>