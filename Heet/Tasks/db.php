<?php
$con = new mysqli("localhost", "root", "matrix@1","Employee");

if ($con->connect_error) 
{
	die("Connection failed: " . $con->connect_error);
}
?>