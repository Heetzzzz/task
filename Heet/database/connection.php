<?php

	$conn = new mysqli("localhost", "root", "matrix@1" ,"myDB");

	// Check connection

	if ($conn->connect_error) {

	  	die("Connection failed: " . $conn->connect_error);
	}
?>