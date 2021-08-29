<?php

$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database

		$_SESSION['con']=$con;

	mysqli_select_db($con,'ATS');

	$tname=$_POST['tname'];
	$tmobile=$_POST['tmobile'];
	$tdob=$_POST['tdob'];
	$sex=$_POST['sex'];

	function gen_id()
	{
		$uni=rand(1000,9999);
		$res=mysqli_query($_SESSION['con'],"select id from teacher where id=$uni ");
		if(mysqli_num_rows($res)==0)
			return $uni;
		else 
			gen_id();
	}
						 
		$new_id=gen_id();					//generated id of the teacher to be added 
	
		$q="INSERT INTO `teacher`(`id`, `name`,`sex`, `dob`, `mobile`) VALUES ($new_id,'$tname','$sex','$tdob','$tmobile')";
		$success=mysqli_query($con,$q);

		$strdate=strval($tdob);
		$split_date=explode("-",$strdate);
		//echo $split_date[0];
		$password="$new_id"."$split_date[0]";
		//echo "<br>".$password;
		
		mysqli_query($con,"INSERT INTO `authentication` (`userid`, `password`) VALUES ($new_id,'$password')"); 

		if($success==1)
			echo "
				<script>
				alert('teacher added successfully !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";
		else
			echo "
				<script>
				alert('teacher NOT added !');
				window.location='http://localhost/ATS/admin/admin_home.php';
				</script>";
?>