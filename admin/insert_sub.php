<?php
	
	session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database


	mysqli_select_db($con,'ATS');

	$sub_code=$_POST['sub_code'];
	$sub_class=$_POST['sub_class'];
	$sub_sem=$_POST['sub_sem'];
	$sub_teacher=$_POST['sub_teacher'];
	//echo $sub_class;
	$sub_name=$_POST['sub_name'];
	

	$q="CREATE TABLE `ats`.`$sub_code` ( `sno` INT NOT NULL , `dates` DATE NOT NULL ,primary key(dates)) ENGINE = InnoDB; ";
		$r=mysqli_query($con,$q);

	$sql = "SELECT rollno from student where class=\"$sub_class\"";
		$result=mysqli_query($con,$sql);
		$n=mysqli_num_rows($result);
		echo $n;
		for($i=0;$i<$n;$i++){
			$res=mysqli_fetch_array($result);
			$rollno=$res['rollno'];
			//echo "<br>".$rollno."<br>";
			$sql = "ALTER TABLE `$sub_code`  ADD `$rollno` VARCHAR(1) NOT NULL ";
			$r=mysqli_query($con,$sql);
		}

	
		$sql = "SELECT id FROM `teacher` WHERE name=\"$sub_teacher\"";
		$result=mysqli_query($con,$sql);
		$res=mysqli_fetch_array($result);
		$id=$res['id'];

		$sql="INSERT INTO `subject`(`uni_code`, `name`, `teacher_id`, `class`, `semester`) VALUES ('$sub_code','$sub_name',$id,'$sub_class','$sub_sem') ";
		$result=mysqli_query($con,$sql);
		if($result==1)
			echo "
				<script>
				alert('Subject added successfully !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";
		else
			echo "
				<script>
				alert('Subject NOT added !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>Insert subject</title>
	</head>
	<body>
	
	</body>
	</html>