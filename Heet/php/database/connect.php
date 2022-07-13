<?php

$conn = new mysqli("localhost","root","matrix@1","myDB2");

	if($conn->connect_error)
	{
		die("Connection failed".$conn->connect_error);
	}
	else
	{
		echo "Successfully Connected with Database<br>";
	}

// $sql = $conn->query("CREATE DATABASE myDB2");

// 	if($sql == TRUE)
// 	{
// 		echo "Successfully Created Database<br>";
// 	}
// 	else
// 	{
// 		echo "Error in creating Databases<br>";
// 	}

// $cre = $conn->query("create table student
// 		(
// 			id INT(6) AUTO_INCREMENT PRIMARY KEY,
// 			firstname VARCHAR(30) NOT NULL,
// 			lastname VARCHAR(30) NOT NULL,
// 			email VARCHAR(50)
// 		)");

// 	if($cre == TRUE)
// 	{
// 		echo "Table Created Successfully<br>";
// 	}
// 	else
// 	{
// 		echo "Error in Creating<br>";
// 	}

// $ins = $conn->query("insert into student(firstname,lastname,email) values('Heet','Patel','Heet@gmail.com')");

// 	$last_id = $conn->insert_id;

// 	if($ins == TRUE)
// 	{
// 		echo "Data Inserted Successfully ".$last_id."<br>";
// 	}
// 	else
// 	{
// 		echo "Error in Inserting<br>";
// 	}

$sel = $conn->query("select * FROM student where id=2");
$sel1 = $conn->query("select * FROM student order by id desc limit 2 offset 1");

while($fetch = $sel->fetch_assoc())
{
	echo $fetch["id"];
	echo $fetch["firstname"];
	echo $fetch['lastname'];
	echo $fetch['email']."<br>";
}

while($fetch1 = $sel1->fetch_object())
{
	echo "ID:-".$fetch1->id." ";
	echo $fetch1->firstname." ";
	echo $fetch1->lastname." ";
	echo $fetch1->email."<br>";
}

$del = $conn->query("delete from student where id = 1");

	if($del == TRUE)
	{
		echo "Data Deleted Successfully <br>";
	}
	else
	{
		echo "Error in Deleting<br>";
	}

$upd = $conn->query("update student set firstname = 'Urvish',email = 'urvish@gmail.com' where id  = 3");

	if($upd == TRUE)
	{
		echo "Data Updated Successfully <br>";
	}
	else
	{
		echo "Error in Updating<br>";
	}

?>