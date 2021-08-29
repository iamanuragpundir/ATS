<?php
	
	session_start();

	$userid=$_SESSION['userid'];

	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database

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
		<link rel="stylesheet" type="text/css" href="../css/login.css">
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

	<style type="text/css">
		header{
			background-image: url(../images/teacherbg.jpg);
		}
		.inner{
			text-align: center;
			position: absolute;
			left: 35%;
			top:34%;
			color: black;
		}
		select,input{
			padding: 5px 5px;
			background-color: transparent;
			border:solid 1px;
		}
		#go{
			padding: 5px 5px;
		}
		#go:hover{
			cursor: pointer;
			background-color: cyan;
		}
		input{
			padding: 5px 5px;
			background-color: transparent;
		}

	</style>
	</head>
	<body onload="select_sub()">
		<header>
			<h2 style="text-decoration: underline;"> ATTENDANCE VIEWING PANEL</h2>
			<div class="container">
				<label style="text-decoration: underline;"><h3 align="center">SELECT DETAILS</h3></label>
		<form action="display_attendance.php" method="POST" class="inner">
				select subject--<select required id="sel_sub" name="sub">
				<option selected disabled>select</option>
			</select><br>
			From--<input type="date" name="start_date"><br>
			To--<input type="date" name="end_date"><br><br>
			<input type="submit" name="" value="SUBMIT" id="go">
		</form>
	</div>
		</header>
	</body>
	</html>