<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con = mysqli_connect("localhost:3306","root","","hostel");
if(isset($_POST['adminlogin'])){
	$user=$_POST['user'];
	$password=$_POST['password'];
	$query="select * from admin where user='$user' and password='$password'";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result)){
	if($row['user'] == $user and $row['password']==$password){
		header("Location:adminpage.php");
	}
}

}
?>
</body>
</html>
