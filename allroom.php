<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$con = mysqli_connect("localhost:3306","root","","hostel");
		$query="CALL `abcde`(); ";
		$result=mysqli_query($con,$query);
		echo "<table border='2'>
			<tr>
			<th>roomid</th>
			<th>buildingnumber</th>
			<th>studentid</th>
			</tr>";
			while($row=mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>".$row['roomid']."</td>";
				echo "<td>".$row['buildingnumber']."</td>";
				echo "<td>".$row['studentid']."</td>";
				echo "</tr>";			
			}
			echo "</table>";


?>
		<a href="adminpage.php"><h2>back</h2></a>
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
