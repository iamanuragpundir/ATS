<?php
	session_start();

	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	else 
			//echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

	
		session_destroy();
		header('location:http://localhost/ATS/home.php');	

?>
