<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$con = mysqli_connect("localhost:3306","root","","hostel");
if(isset($_POST['studentdetsubmit'])){
	$id=$_POST['id'];
	$name=$_POST['name'];
	$father=$_POST['father'];
	$department=$_POST['department'];
	$dob=$_POST['dob'];
	$age=$_POST['age'];
	$email=$_POST['email'];
	$query="insert into student values('$id','$name','$father','$department','$dob','$age','$email')";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:roompage.php");
	}
}
if(isset($_POST['getstudent'])){
		$id=$_POST['id'];
		$query="select id,name,father,department,dob,age,email from student where id='$id'";
		$result=mysqli_query($con,$query);
			echo "<table border='2'>
			<tr>
			<th>id</th>
			<th>name</th>
			<th>father</th>
			<th>department</th>
			<th>dob</th>
			<th>age</th>
			<th>email</th>
			
			</tr>";
			while($row=mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$row['id']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['father']."</td>";
				echo "<td>".$row['department']."</td>";
				echo "<td>".$row['dob']."</td>";
				echo "<td>".$row['age']."</td>";
				echo "<td>".$row['email']."</td>";

				echo "</tr>";
				

			}
			echo "</table>";

	}

?>
<style>
	table {
  border-collapse: collapse;
  background-color: orange;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

table th,
table td {
  padding: 12px 15px;
}

table tbody tr {
  border-bottom: 1px solid #dddddd;
}

table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}
	
	


	</style>
</body>
</html>