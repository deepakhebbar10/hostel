<!DOCTYPE html>
<html>
<head>
	<title>admin page</title>
</head>
<body >
		<header><h2><a href="3.php">back<h2><a href="index.php">log out</a></h2>
	</header>
	<div class="a">
	 <form action="roomdetails.php" method="post">
		<h2>enter room no</h2>
		<p>room id</p>
		<input type="text" name="roomid" placeholder="roomid">
		<p>enter building number</p>
		<input type="text" name="buildingnumber" placeholder="buildingnumber">
		<p>student id</p>
		<input type="text" name="studentid" placeholder="studentid">
		<input type="submit" name="roomsubmit" value="roomsubmit">
	</forms>
</div>
	<style>
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
	</style>

</body>
</html>