<!DOCTYPE html>
<html>
<head>
	<title>hostel management</title>
</head>
<body>
	<header><h1 align="center">student dtail</h1></header>
	<div class="b" >
		<nav>
			<ul>
				<li><a href="adminpage.php">home</a></li>
				<li><a href="allstudent.php">student details</a></li>
				<li><a href="allemployee.php">employee details</a></li>
				<li><a href="allroom.php">room details</a></li>
				<li><a href="stddetail.php">new student</a></li>
				<li><a href="empdetails.php">new employee</a></li>
				<li><a href="sineup.php">log out</a></li>
			</ul>
		</nav>
	</div>
	<div class="a">
		<form action="employee.php" method="post">

		<h1>enter employee details</h1>
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
		<input type="submit" name="empsub" value="submit">
	</form>
		
	</div>
</body>
<style>
	body{
		margin:0;
		padding: 0;
		font-family: sans-serif;
		background-image: url(images/13.jpg);
		background-size: cover;
	}
	.a{
			width: 290px;
			position: absolute;
			top:50%;
			left:50%;
			transform: translate(-50%,-50%);
			color:white;
		}
	.a h1{
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
		font-size: 16px;

transition: 0.8s;
	}
nav ul li:hover{
	background-color: #f39d1a;
}
	nav ul{
		float:right;
		margin-right: 50px;
	}
	nav ul li a{
		text-decoration: none;
		color: #fff;
		padding: 50px;
	}
</style>
</body>
</html>