<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con = mysqli_connect("localhost:3306","root","","hostel");
if(isset($_POST['deleteemp'])){
	$empid=$_POST['empid'];
	$query="delete from employee where empid='$empid'";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:adminpage.php");
	}
}
?>
</body>
</html>
