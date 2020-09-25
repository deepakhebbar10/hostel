<?php
	$con = mysqli_connect("localhost:3306","root","","hostel"); 
		$query="delete from student where id='$_get[id]' ";
		$result=mysqli_query($con,$query);
		if($result){
		header("Location:adminpage.php");
	}
?>