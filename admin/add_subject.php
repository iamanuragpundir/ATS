<?php
	
	session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	
	mysqli_select_db($con,'ATS');

	$_SESSION['con']=$con;
	$result=mysqli_query($con,"select * from teacher");		
	$num1=mysqli_num_rows($result);			//getting total number of teachers in the database
		
//creating array of teacher's names to be used in select tag
	$result=mysqli_query($con,"select name from teacher");
	for($i=0;$i<$num1;$i++){
	$res=mysqli_fetch_array($result);
	$tnames[]= $res['name'];
	}
	//print_r($tnames);

//creating array of class names to be used in select tag
	$result=mysqli_query($con,"select DISTINCT(class_name) from classes");
	$num2=mysqli_num_rows($result);
	for($i=0;$i<$num2;$i++){
	$res=mysqli_fetch_array($result);
	$cnames[]= $res['class_name'];
	}
	//print_r($cnames);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<title>Add Subject</title>

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
			left:45%;
			top :83%;
			padding: 7px 16px; 
		}
		option{
			color:black;
		}
	</style>
<script type="text/javascript">
	
	function assign_teacher(){

		var i;
		var n=<?php 	echo $num1; ?>;
	var tnames=<?php echo json_encode($tnames); ?>;    //converting array of php in jscript
	for(i=0;i<n;i++){

		select1=document.getElementById("sel_teach");
		 select1.options[select1.options.length]=new Option(tnames[i],tnames[i]);
		}
	}

	function assign_class(){

		var i;
		var n=<?php echo $num2; ?>;
	var cnames=<?php echo json_encode($cnames); ?>;    //converting array of php in jscript
	for(i=0;i<n;i++){

		select2=document.getElementById("sel_class");
		 select2.options[select2.options.length]=new Option(cnames[i],cnames[i]);
		}
	}

	function assign_both(){

		assign_class();
		assign_teacher();
	}

</script>
</head>
<body onload="assign_both()">
	<div class="container">
		<h3 align="center">ADD SUBJECT</h3><br>
	<form id="sub_form" action="insert_sub.php" method="POST" required>
		subject name:<input type="text" name="sub_name" required><br><br>
		subject code:<input type="text" name="sub_code" required><br><br>
	Assign Class:<select id="sel_class" name="sub_class" required>
			<option selected disabled>select</option>
		</select><br><br>
		Assign Semester:<select name="sub_sem" required>
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
		Assign teacher:<select id="sel_teach" name="sub_teacher" required>
			<option selected disabled>select</option>
		</select><br><br>
		<input type="submit" value="submit" id="submit">
	</form>
</div>
</body>
</html>