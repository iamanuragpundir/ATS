<?php
	
	session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	

	mysqli_select_db($con,'ATS');

	$_SESSION['con']=$con;
	$result=mysqli_query($con,"select DISTINCT(class_name) from classes");		
	$num1=mysqli_num_rows($result);
	for($i=0;$i<$num1;$i++){
	$res=mysqli_fetch_array($result);
	$cnames[]= $res['class_name'];	//getting total number of  distinct classes from the database
	
	}	
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">

	<style type="text/css">
		
	*{
		
			padding:0px;
			background-image: url("../images/teacherbg.png");
			color: white;
		}
		.container{
			padding-left: 20px;
		}
		#submit{
			position: fixed;
			left:65%;
			top :83%;
			padding: 7px 16px; 
		}
		option{
			color:black;
		}
		input{
			padding:2px 4px;
		}
	</style>
	<title>Add Student</title>

	<script type="text/javascript">
		
		function assign_class(){

		var i;
		var n=<?php echo $num1; ?>;
	var cnames=<?php echo json_encode($cnames); ?>;    //converting array of php in jscript
	for(i=0;i<n;i++){

		ass_class=document.getElementById("sel_class");
		 ass_class.options[ass_class.options.length]=new Option(cnames[i],cnames[i]);
		}
	}

	</script>
</head>
<body onload="assign_class()">
	<div class="container">
		<h3 align="center">ADD STUDENT</h3><br>
	<form method="POST" action="insert_stu.php" id="add_student">
		name:<input type="text" name="stu_name" required><br><br>
		d.o.b. :<input type="date" name="stu_dob" required><br><br>
		Assign class::<select name="stu_class" id="sel_class">
			<option selected disabled>select</option>
		</select><br><br>
		semester:<select name="stu_sem">
			<option selected disabled>select</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
		</select><br><br>
		Mobile:<input type="text" name="stu_mobile"><br><br>

		<input type="submit" value="submit" id="submit">
	</form>
</div>
</body>
</html>