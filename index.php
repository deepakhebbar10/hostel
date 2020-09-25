<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style>
		.login{
			width: 690px;
			float: left;

		}
		.leftside,.a{
			width: 690px;
			float:right;
		}

		</style>

</head>
<body style="background: url('images/14.jpg');">
	<head><h1 align="center">Hostel Database</h1></head>
	<div class="login">
	<form action="admin.php" method="post">
	
			<h1>admin login</h1>
			
				<p>admin id</p>
				<input type="text" name="user" placeholder="enter adminid">
				<p>password</p>
					<input type="password" name="password" placeholder="password">
					<input type="submit" name="adminlogin" value="login">	
				</form>
			
	</div>
	<div class="leftside">	
			<form action="studentdetails.php" method="post">

				<p>student id</p>
				<input type="text" name="id" placeholder="student id">
				<input type="submit" name="getstudent" value="getdetails">
			</form>
			<form action="employee.php" method="post">
				<p>employee id</p>
				<input type="text" name="empid" placeholder="emp id">
				<input type="submit" name="getemp" value="getdetails">
			</form>
			<form action="roomdetails.php" method="post">
				<p>room no</p>
				<input type="text" name="roomid" placeholder="roomid">
				<input type="submit" name="viewroom" value="viewroom">
			</form>
		<form action="mess.php"      method="post">
		<h2><a href="mess.php">mess food for 2 week</a></h2>
	</form>
	</div>
		
</body>
</html>