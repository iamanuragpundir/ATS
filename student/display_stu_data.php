<?php 
	session_start();

	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	else 
			//echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

	$rollno=$_POST['rollno'];

	$sql = "SELECT * FROM `student` WHERE rollno=\"$rollno\"";   //getting details of student using $rollno
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)==0)
	{
		echo "<script>
			alert('Student not Found');
			window.location='http://localhost/ATS/student/stu_data.php';
		 	</script>";
	}

	$row=mysqli_fetch_array($result);
	$name=$row['name'];$class=$row['class'];

	$sql = "SELECT name,uni_code FROM `subject` WHERE class=\"$class\"";
	$result=mysqli_query($con,$sql);			//getting uni_code and names of subject that belongs to the class of that student
	while($row=mysqli_fetch_array($result))
	{
		$sub_code[]=$row['uni_code'];
		$sub_name[]=$row['name'];
	}

	$n=count($sub_name);
	for($i=0;$i<$n;$i++)
	{
		//getting attendance details for each subject.
		$total_classes[]=mysqli_num_rows(mysqli_query($con,"SELECT * from `$sub_code[$i]`"));
		$resP[]=mysqli_num_rows(mysqli_query($con,"SELECT `$rollno` from `$sub_code[$i]` where `$rollno`='P' "));
		$resA[]=mysqli_num_rows(mysqli_query($con,"SELECT `$rollno` from `$sub_code[$i]` where `$rollno`='A' "));	 
		$resL[]=mysqli_num_rows(mysqli_query($con,"SELECT `$rollno` from `$sub_code[$i]` where `$rollno`='L' "));
	}
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="display_stu_data.css">
	<h2>STUDENT'S ATTENDANCE CHART</h2>
</head>
<body>
	<div class="stu">
	<table align="center">
		<tr><th>Name:&nbsp<?php echo strtoupper($name); ?></th></tr>
		<tr><th>Roll No:&nbsp<?php echo $rollno ;?></th></tr>
		<tr><th>Class:&nbsp<?php echo strtoupper($class) ?></th></tr>

		<table align="center" border="1px" >
		<tr>
			<td><h3>Subject</td>
			<td><h3>Total Classes</td>
			<td><h3>Presents</td>
			<td><h3>Absents</td>
			<td><h3>Leaves</td>
			<td><h3>Attendance(%)</td>
		</tr><br>
		<?php $s=0;
		while($s<$n)
		{ ?>
			<tr>
				<td><?php echo $sub_name[$s]."(".$sub_code[$s].")"; ?>
				<td><?php echo $total_classes[$s] ?>
				<td><?php echo $resP[$s] ;?>				<!--making rows with attendance details in various subjects -->
				<td><?php echo $resA[$s] ;?>
				<td><?php echo $resL[$s] ;?>
				<td><?php 
					if($total_classes[$s]!=0)
						 echo round(($resP[$s]/$total_classes[$s])*100)."%" ; 
					else
						echo "N.A.";		//if no class taken yet by teacher
					?>	
			</tr>
			<?php  $s++;
		}  ?>
		</table>
	</table>

		<br><br>
		<center>
			<a href="http://localhost/ATS/home.php"><button>EXIT</button></a>
			<a href="http://localhost/ATS/student/stu_data.php"><button>CHECK OTHER</button></a>
		</center>
	</div>
</body>
</html>