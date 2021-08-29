<?php
	session_start();
	$con=mysqli_connect('localhost','root');
//	if(!$con)
//		echo"connection failed";
//	else 
//			echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

		$cols=$_SESSION['cols']; $n=$_SESSION['num']; $sub=$_SESSION['sub'];

		$result=mysqli_query($con,"select MAX(sno) from `$sub`;");
		$res=mysqli_fetch_array($result);
		$max_sno=$res['MAX(sno)'];
		$new_sno=$max_sno+1;

		for($i=2;$i<$n;$i++){
		
			$status=$_POST["$cols[$i]"];    
		
			if($i==2)
				$ins1=mysqli_query($con,"INSERT INTO `$sub` (`sno`, `dates`, `$cols[$i]`) VALUES ('$new_sno', CURRENT_DATE(), '$status'); ");

			else
				$ins2=mysqli_query($con,"UPDATE `$sub` SET `$cols[$i]`='$status' WHERE sno=$new_sno");	
			}

		if($ins1==1)
			{
				
			echo "<script>
			alert('record submitted successfully');
			window.location='http://localhost/ATS/teacher.php';
		 	</script>";

		}

		else
		{
			echo "<script>
			alert('record not submitted');
			window.location='location:http://localhost/ATS/teacher/sel_subject.php';
		 	</script>";

		}
?>			
