<!DOCTYPE html>
<html>
<head>
	<title>hostel management</title>
</head>
<body>
	<header><h1 align="center">HOSTEL MANAGEMENT SYSTEM</h1></header>
	<div class="b" >
		<nav>
			<ul>
				<li><a href="login.php">Admin login</a></li>
				<li><a href="stdemproom.php">details of stuent/employee</a></li>
				<li><a href="mess.php">mess time table</a></li>
			</ul>
		</nav>
	</div>
</body>
<style>
	*{
		margin:0;
		padding:0;
		font-family: verdana;

	}
	.b{
		width: 100%;
		height: 100vh;
		background-image: url(images/1.jpg);
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