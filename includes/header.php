<style type="text/css">

*{
	margin:0px;
	padding: 0px;
}
nav{
	width: 100%;
	height: 60px;
	background-color: gray;
	position: fixed;
	left:0%;
}
.nav_table{
	border: 1px;
	width: 1000px;
	height: 60px;
}
.nav_table td a{
	text-decoration: none;
	font-size: 20px;
	color: white;
}
.nav_table td{
	color: black;
	font-size: 20px;
	font-family: cursive;
}

.nav_table td a:hover{
	background-color: #000;
	transition: 0.4s all;
}
#logout{
	position: fixed;
	left:90%;
	top: 2%;
	text-decoration:underline;
}
#change{
	position: fixed;
	left:79%;
	top: 2%;
	text-decoration:underline;
}

</style>

<nav>
		<table class="nav_table">
			<tr>
			<td>&nbsp&nbsp&nbsp&nbsp
			<td><?php  echo "Welcome ".$_SESSION['desg']." ".$_SESSION['nam'] ; ?>				<!--navigation bar on top -->
			<td><a href="http://localhost/ATS/teacher.php">Home &nbsp&nbsp</a>
			<td><a href="teacher/sel_subject.php">Mark Attendance</a>
			<td><a href="http://localhost/ATS/teacher/view_attendance.php">View Attendance</a>
			<td><a href="http://localhost/ATS/teacher/check_shortage.php">Check Shortage</a>
			<td><a id="change" href="http://localhost/ATS/teacher/change_password.php">Change Password/</a>
			<td><a  id="logout" href="http://localhost/ATS/logout.php" onclick="return confirm('Are you sure?');">&nbsp;Logout</a>	
	</tr>
		</table>
	</nav>