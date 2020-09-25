<!DOCTYPE html>
<html>
<head>
	<title>hostel management</title>
</head>
<body>
	<header><h1 align="center">ADMIN options</h1></header>
	<div class="b" >
		<nav>
			<ul>
				<li><a href="allstudent.php">student details</a></li>
				<li><a href="allemployee.php">employee details</a></li>
				<li><a href="allroom.php">room details</a></li>
				<li><a href="stddetail.php">new student</a></li>
				<li><a href="empdetails.php">new employee</a></li>
				<li><a href="del.php">delete</a></li>
				<li><a href="sineup.php">log out</a></li>

			</ul>
		</nav>
	</div>
</body>
<style>
	body{
		margin:0;
		padding: 0;
		font-family: sans-serif;
		background-image: url(images/3.jpg);
		background-size: cover;
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
		font-size: 21px;

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
		padding: 35px;
	}
</style>
</body>
</html>