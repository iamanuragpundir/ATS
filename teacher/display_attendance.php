<?php
	session_start();
	$con=mysqli_connect('localhost','root');
//	if(!$con)
//		echo"connection failed";
//	else 
//			echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

	$sub=$_POST['sub'];
	$start_date=$_POST['start_date'];
	$end_date=$_POST['end_date'];
	$sql = "SELECT * FROM `$sub` WHERE dates BETWEEN \"$start_date\" AND \"$end_date\"";
	$result=mysqli_query($con,$sql);

	if(mysqli_num_rows($result)==0)
		echo "<script>
			alert('no record found');
			window.location='http://localhost/ATS/teacher/view_attendance.php';
			</script>";

	$nfields=mysqli_num_fields($result);
	$nrows=mysqli_num_rows($result);

	$r=mysqli_query($con,"SELECT name FROM `subject` WHERE uni_code=\"$sub\" ");
	$res=mysqli_fetch_array($r);
	$sub_name=$res['name'];

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="tcss\mark_attendance.css">
		<title>displaying attendance</title>
	</head>
	<body>
		<table id="mrkatt" style="position: absolute;left:3%;top:16%;">
				<tr><h2 align="center">ATTENDANCE RECORD FOR <?php echo strtoupper($sub_name)."(".strtoupper($sub).")" ; ?> <h2></tr>
				<tr>
					<?php
					for($i=0;$i<$nfields;$i++){
							$key=mysqli_fetch_field($result);  
						?>
					<td> <?php   
							echo $key->name;?> </td>
				<?php } ?>
				</tr>
	
				<?php 
				while($nrows>0)	
				{ ?>
					<tr>
					<?php
					$res=mysqli_fetch_row($result);
					for($i=0;$i<$nfields;$i++){
					  ?>
					<td><?php echo $res[$i];?> </td>
				<?php } ?>
				</tr>	
				<?php 
				$nrows--;
				} ?>
				
		
		</table>

		<center>
			<br>
			<a href="http://localhost/ATS/teacher/view_attendance.php"><button>View Another</button></a>
			<a href="http://localhost/ATS/teacher.php"><button>Home</button></a>
		</center>

	</body>
	</html>