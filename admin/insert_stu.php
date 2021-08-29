<?php

session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	

	mysqli_select_db($con,'ATS');

$stu_name=$_POST['stu_name'];
$stu_class=$_POST['stu_class'];
$stu_mobile=$_POST['stu_mobile'];
$stu_dob=$_POST['stu_dob'];
$stu_sem=$_POST['stu_sem'];

	mysqli_select_db($con,'ATS');

		//echo $stu_class."<br>";
	$result=mysqli_query($con,"select MAX(rollno) from student where class='$stu_class';");
	$res=mysqli_fetch_array($result);
	if($res[0]==NULL)
	{
		//echo "enterred";
		$result=mysqli_query($con,"select roll_series from classes where class_name='$stu_class'; ");
		$res=mysqli_fetch_array($result);
		$stu_rollno=intval($res['roll_series'])+1;
		$stu_rollno=strval($stu_rollno);
		//echo $stu_rollno;
	}
	else
	{	
		$max_rollno=intval($res[0]);    		//getting the rollno of the previously added student to the same class
		$stu_rollno=strval($max_rollno +1);		//generating rollno of the student to be added into database
		//echo $stu_rollno;	
	}	

		$q="INSERT INTO `student`(`rollno`, `name`, `class`, `sem`, `mobile`, `dob`) VALUES ('$stu_rollno','$stu_name','$stu_class',$stu_sem,'$stu_mobile','$stu_dob')";
		$r=mysqli_query($con,$q);

		

		$result=mysqli_query($con,"select uni_code from ats.subject where class='$stu_class';" );
		for($i=0;$i<mysqli_num_rows($result);$i++)
		{
			$subject=mysqli_fetch_array($result);
			//echo $subject[0];
			mysqli_query($con,"ALTER TABLE `$subject[0]` ADD `$stu_rollno` VARCHAR(1) NULL DEFAULT NULL;");
		}
			
		if($r==1)
					echo 
				"
				<script>
				alert('student added successfully !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";
		else
			echo "
				<script>
				alert('Student NOT added !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";

?>