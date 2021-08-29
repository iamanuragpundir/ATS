

<?php
	
	session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database


	mysqli_select_db($con,'ATS');

	$teacher=$_POST['teacher'];
	$subject=$_POST['subject'];

	$result=mysqli_query($con,"select id from teacher where name=\"$teacher\"");
	$res=mysqli_fetch_array($result);
	$id=$res['id'];

	$sql = "UPDATE `subject` SET `teacher_id`=$id WHERE name=\"$subject\"";
	$r=mysqli_query($con,$sql);
	if($r==1)
			echo "
				<script>
				alert('Teacher assigned successfully !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";
		else
			echo "
				<script>
				alert('teacher NOT assigned !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";
?>


<!DOCTYPE html>
<html>
<head>
	<title>Assigning Teacher</title>
</head>
<body>

</body>
</html>