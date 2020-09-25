<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con = mysqli_connect("localhost:3306","root","","hostel");
if(isset($_POST['deletestudent'])){
	$id=$_POST['id'];
	$query="delete from student where id='$id'";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:adminpage.php");
	}
}
?>
</body>
</html>
