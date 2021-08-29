<?php

	session_start();
$old_pass=$_POST['i1'];
$new_pass=$_POST['i2'];
$conf_pass=$_POST['i3'];

	
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";
	
	mysqli_select_db($con,'ATS');

	$userid=$_COOKIE['userid'];

	$result=mysqli_query($con,"SELECT * FROM `authentication` WHERE userid=$userid AND password=\"$old_pass\"");
	if(mysqli_num_rows($result)==0)
	{	//if old password do not matches.
		echo "
		<script>
		alert('enter correct old password');			
		window.location='http://localhost/ATS/teacher/change_password.php';
		</script>";
	}

	//if old password matches then updating the new password in database.
	
	elseif (mysqli_num_rows($result)!=0){
			$res=mysqli_query($con,"UPDATE `authentication` SET `password`=\"$new_pass\" WHERE userid=$userid ");
	if($res)
	{
		echo "
		<script>
		alert('password changed');				
		window.location='http://localhost/ATS/teacher.php';
		</script>";
	}
	else
		echo "
		<script>
		alert('password not changed');				
		window.location='http://localhost/ATS/teacher/change_password.php';
		</script>";
	}



?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>

</body>
</html>