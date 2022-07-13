<?php

include 'connection.php';

	"CREATE TABLE Testtable(
	id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(20) NOT NULL,
	address TEXT NOT NULL,
	email VARCHAR(50))";

	$sql = "INSERT INTO Testtable (name,address,email) VALUES('Heet','isanpur','heet@gmail.com')";

	if ($conn->query($sql) === TRUE) {
		  $last_id = $conn->insert_id;
	  echo "Inserted successfully:-".$last_id;
	} else {
	  echo "Error!!!!: " . $conn->error;
	}
	echo "<pre>";
	print_r($conn);

?>