<?php
include 'db.php';

	$state_id = (int) $_GET['state_id'];

	$sql = "SELECT * FROM cities WHERE state_id = $state_id";

	$result = mysqli_query($con, $sql);

		echo "<option selected>Please Select City</option>";

	while($row = mysqli_fetch_assoc($result)){
		echo "<option value='" . $row['id'] . "'>" . $row['name'] ."</option>";
	}
 
?>