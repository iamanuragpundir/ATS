<?php 
	session_start();

	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	else 
			//echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

	$sub=$_POST['sub'];
	$percent=$_POST['percent'];

	$sql = "SELECT * FROM `$sub`";
	$result=mysqli_query($con,$sql);
	$k=0;
	for($i=0;$i< mysqli_num_fields($result);$i++)
		{
			$key=mysqli_fetch_field($result);			//getting the rollnos of the whole class from database
			$cols[$k++]=$key->name;
		}
		$_SESSION['cols']=$cols;
		//print_r($cols);
		$n=count($cols);  $_SESSION['num']=$n;

	$total_classes=mysqli_num_rows($result);

	$count=0;
	for($i=2;$i<$n;$i++)
	{
		$sql = "SELECT `$cols[$i]` FROM `$sub` where `$cols[$i]`='P' ";
		$result=mysqli_query($con,$sql);
		$res=mysqli_num_rows($result);				//getting Present% of all students under that subject
		$stu_per=($res/$total_classes)*100;
		if($stu_per<$percent)
		{		
			$count++;
			$r1=mysqli_query($con,"SELECT `name` FROM `student` where `rollno`=$cols[$i] "); 	
			$res1=mysqli_fetch_array($r1);
			$names[]=$res1['name'];
				$filtered_rollno[]=$cols[$i];	//shortlisting students based on %age of presents
				$shortlisted_per[]=$stu_per;
		}
	}

	//if no such record found
	if($count==0)
		echo "
				<script>
					alert('No such Student Found');
					window.location='http://localhost/ATS/teacher/check_shortage.php';
				</script>
				";

	$r1=mysqli_query($con,"SELECT `name` FROM `subject` where `uni_code`=\"$sub\" ");
	$rr=mysqli_fetch_array($r1);
		$subname=$rr['name'];


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="tcss/mark_attendance.css">
	<style type="text/css">
		#mrkatt{
			width:30%;
			position: absolute;
			left: 35%;
			top: 20%;
		}
	</style>
</head>
<body>
	<table id="mrkatt">
		<tr><h2 align="center">Students with Attendance < <?php echo $percent."% in ".strtoupper($subname)."(".strtoupper($sub).")"; ?><h2></tr>
		<tr>
			<td>RollNo
			<td>Name
			<td>Attendance(%)
		</tr>
		<?php $y=0;
		while($y<$count) 
		{ ?>
			<tr>
				<td> <?php echo $filtered_rollno[$y]; ?>
				<td><?php echo $names[$y]; ?>
				<td><?php echo round($shortlisted_per[$y])."%"; ?>
			</tr>

		<?php $y++;
		} ?>
	</table>

	<center>
			<br>
			<a href="http://localhost/ATS/teacher/check_shortage.php"><button>Check Another</button></a>
			<a href="http://localhost/ATS/teacher.php"><button>Home</button></a>
		</center>

</body>
</html>