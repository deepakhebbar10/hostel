<!DOCTYPE html>
<html>
<head>
	<title>hostel management</title>
</head>
<body>
	<header><h1 align="center">view stuent/employee/roomid</h1></header>
	<div class="b" >
		<nav>
			<ul>
				<li><a href="sineup.php">home</a></li>
				<li><a href="stdemproom.php">details of stuent/employee</a></li>
				<li><a href="mess.php">mess time table</a></li>
			</ul>
		</nav>
	</div>
	<div class="login">	
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

</body>
<style>
	body{
		margin:0;
		padding: 0;
		font-family: sans-serif;
		background-image: url(images/14.jpg);
		background-size: cover;
	}
	.login{
			width: 290px;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);
			color:white;
		}
	.login h1{
		float:left;
		font-size: 40px;
		border-bottom: 6px solid #4caf50;
		margin-bottom: 50px;
		padding: 13px 0

	}
	.textbox
	{
		width:100%;
		overflow: hidden;
		font-size: 22px;
		padding:8px 0;
		margin:8px 0;
		border-bottom:1px solid #4caf50;
	}
	*{
		margin:0;
		padding:0;
		font-family: verdana;

	}
	.b{
		width: 100%;
		height: 100vh;
		background-size: cover;
	}
	nav{
		width: 100%;
		height: 80px;
		background-color: #000;
	}
	nav ul li{
		list-style-type:none;
		display: inline-block;
		font-size: 24px;

transition: 0.8s;
	}
nav ul li:hover{
	background-color: #f39d1a;
}
	nav ul{
		float:right;
		margin-right: 100px;
	}
	nav ul li a{
		text-decoration: none;
		color: #fff;
		padding: 100px;
	}
</style>
</body>
</html>