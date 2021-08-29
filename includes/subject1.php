<?php
	
	session_start();

	$userid=$_SESSION['userid'];

	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	else 
			//echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');

	$result=mysqli_query($con,"select * from subject where teacher_id='$userid' ");

	$num=mysqli_num_rows($result);

	for($i=0;$i<$num;$i++)
	{
		$res=mysqli_fetch_array($result);
		$subs[]=$res['uni_code'];
	}

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Attendance Subject</title>

		<script type="text/javascript">
		
		function select_sub(){

		var i;
		var n=<?php echo $num; ?>;
	var subs=<?php echo json_encode($subs); ?>;    //converting array of php in jscript
	for(i=0;i<n;i++){

		sel_subject=document.getElementById("sel_sub");
		sel_subject.options[sel_subject.options.length]=new Option(subs[i],subs[i]);
		}
	}

	</script>
	</head>
	<body onload="select_sub()">
