<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
</head>
<body >
		<header><h2><a href="3.php">back<h2><a href="index.php">log out</a></h2>
	</header>
	<div class="a">
		<form action="studentdetails.php" method="post">
		<h2>enter student details</h2>
		<p>student id</p>
		<input type="text" name="id" placeholder="student id">
		<p>enter student name</p>
		<input type="text" name="name" placeholder="student name">
		<p>enter father's name</p>
		<input type="text" name="father" placeholder="student's father name">
		<p>enter department name</p>
		<input type="text" name="department" placeholder="department">
		<p>enter age</p>
		<input type="text" name="age" placeholder="age">
		<p>enter date of birth</p>
		<input type="date" name="dob" placeholder=DOB>
		<p>enter email</p>
		<input type="text" name="email" placeholder=DOB>
		<input type="submit" name="studentdetsubmit" value="submit">
	</form>
		
	</div>
	<div class="b">
				<form action="employee.php" method="post">

		<h2>enter employee details</h2>
		<p>enter id</p>
		<input type="text" name="empid" placeholder="employee-id">
		<p>enter name</p>
		<input type="text" name="name" placeholder="employee-name">
		<p>enter salary</p>
		<input type="text" name="salary" placeholder="employee salary">
		<p>enter role</p>
		<input type="text" name="role" placeholder="role">
		<p>enter building number</p>
		<input type="text" name="building" placeholder="building number">
		<input type="submit" name="empsub" value="submit"></form>
	</div>
	<style>
		{
			box-sizing: border-box;
		}
		body{
			margin: 0px;
			padding: 10px;
			background-color: orange;
			text-align: center;
		}
		header,footer{
			padding: 20px;
			background:white;
			color:black;
			border-radius: 20px;
		}
		.a{
			width:65%;
			float: left;
			height:400px;
			
		}
		.b{
			width:35%;
			float: left;
			height: 400px;
		}
	</style>
</body>
</html>