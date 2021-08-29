<?php
	session_start();
	$con=mysqli_connect('localhost','root');
	if(!$con)
		echo"connection failed";		//establishing connection with database
	else 
			//echo"conection established<br><br>";

	mysqli_select_db($con,'ATS');
	$sub=$_POST['sub'];
	$_SESSION['sub']=$sub;


	$check=mysqli_query($con,"SELECT MAX(dates) FROM `$sub`");
	$match=mysqli_fetch_array($check);

	if(strval($match[0])==strval(date('Y-m-d')))
		echo" 	<script>
				alert('Todays Attendance already marked');
				window.location='http://localhost/ATS/teacher.php' ;
				</script> ";
	
	$sql = "SELECT * FROM `$sub`";
	$result=mysqli_query($con,$sql);


	$k=0;
	for($i=0;$i< mysqli_num_fields($result);$i++)
		{
			$key=mysqli_fetch_field($result);			//getting the rollnos of the whole class 	from database
			$cols[$k++]=$key->name;
		}
		$_SESSION['cols']=$cols;
		//print_r($cols);
		$n=count($cols);  $_SESSION['num']=$n;
		$ub=intval($cols[$n-1]);
		$lb=intval($cols[2]);
//		echo $ub,$lb,$n;
		$obj=mysqli_query($con,"select name from student where rollno>=$lb AND rollno<=$ub ;");
						for($i=0;$i<$n-2;$i++){
							$name=mysqli_fetch_array($obj);
							$names[]= strtoupper($name['name']);
						}

		$result=mysqli_query($con,"SELECT name,class FROM `subject` WHERE uni_code=\"$sub\"");
		$row=mysqli_fetch_array($result);
		$class=$row['class'];
		$sub_name=$row['name'];

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="tcss\mark_attendance.css">
	<title>mark attendance</title>
	<script>
		function addfield(){

			var i; 
			var arr=<?php  echo json_encode($cols); ?>;
			var names=<?php echo json_encode($names); ?>;
			var roll_start=<?php  echo $lb; ?>;

			for(i=2;i< <?php echo $n; ?>;i++){
				var k=0;
				t=document.getElementById("mrkatt");
				r=document.createElement("tr");			//creating row through jscript
				td0=document.createElement("td");
				td1=document.createElement("td");		//creating row data enteries through jscript
				td2=document.createElement("td");
				td3=document.createElement("td");
				
				td1A=document.createElement("td");
				td2A=document.createElement("td");
				td3A=document.createElement("td");
				
				rb1=document.createElement('input');
				rb1.setAttribute("type","radio");			//creating radio buttons through jscript
				rb1.setAttribute("name",arr[i]);
				rb1.setAttribute("value","P");
				td1.appendChild(rb1);

				rb2=document.createElement('input');
				rb2.setAttribute("type","radio");
				rb2.setAttribute("name",arr[i]);
				rb2.setAttribute("value","A");
				td2.appendChild(rb2);

				rb3=document.createElement('input');
				rb3.setAttribute("type","radio");
				rb3.setAttribute("name",arr[i]);
				rb3.setAttribute("value","L");
				td3.appendChild(rb3);
				
				td0.innerHTML=[roll_start++]+"--"+ names[i-2];		//stuffing name of the student before the radio buttons in a row
				td1A.innerHTML="Present";			
				td2A.innerHTML="Absent";
				td3A.innerHTML="Leave";

				r.appendChild(td0);
				r.appendChild(td1);
				r.appendChild(td1A);
				r.appendChild(td2);        //entering data into table->tr->td->radio button
				r.appendChild(td2A);
				r.appendChild(td3);
				r.appendChild(td3A);
				t.appendChild(r);			
		}
	}	
	function validate(){
		valid=true;
		var arr=<?php  echo json_encode($cols); ?>;
		for (var i = 2; i< <?php echo $n; ?> ; i++) {
			var radbtns=document.getElementsByName(arr[i]);
				if(radbtns[0].checked || radbtns[1].checked || radbtns[2].checked)	//checking whether attendance marked for all or not
					var k;
				else
				{
					alert("Attendance not marked for some students");
					valid=false;
					break;
				}
		}

		if(valid==true)
			myform.submit();	
	}	
</script>
</head>

<body onload="addfield()" >

	<h2 style="text-align:center ;color:white;text-decoration: underline;">MARKING TODAY'S ATTENDANCE</h2>

		<form action="insert_attendance.php" method="POST" name="myform">
	
		<table id="t1" align="center" border="0px">
		<tr><th><?php echo strtoupper($class);  ?></th></tr>
		<tr><th><?php echo strtoupper($sub_name)."(".strtoupper($sub).")" ;  ?></th></tr>

		<table id="mrkatt" >
			<div class=" btns">
			<input type="button" value="submit" onclick="validate()">
				<input type="reset" name="">
				<a href="http://localhost/ATS/teacher.php"><input type="button" value="cancel"></a>
			</div>
		</table>
		</table><br>

		

		</form>
</body>
</html>