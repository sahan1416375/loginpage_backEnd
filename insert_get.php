<?php
include("db.php");

if (isset($_POST['Submit'])) {

	$NAME=$_POST['Name'];
	$PASSWORD=$_POST['Password'];
	$insert="INSERT INTO users(name, password) VALUES('$NAME','$PASSWORD')";
	$query=mysqli_query($con, $insert);

	if ($query) {
		echo "<script>alert('Inserted')</script>";
	}
}

if (isset($_POST['Search'])) {
	
	$get_detail="select * from users";
	$run_details=mysqli_query($con, $get_detail);

	while ($row_details=mysqli_fetch_array($run_details)) {
		$Name=$row_details['name'];
		$Password=$row_details['password'];

		echo "<table>
				<tr>
				<td>".$Name."</td>
				<td>".$Password."</td>
				</tr>";
	}
}


?>