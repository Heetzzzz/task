<?php

include 'connection.php';
 
$result = $conn->query("SELECT * FROM Testtable ORDER BY id, name desc");

$delete = $conn->query("DELETE FROM Testtable where id in(10 , 50)");

$update = $conn->query("UPDATE Testtable set name = 'rahul',address = 'parassnagar',email = 'rahul@mail.com' where id = 9");
$limit  = $conn->query("SELECT * FROM Testtable LIMIT 2 OFFSET 2");

//$row = $result->fetch_object();

// echo $row->id . "<br>";
// echo $row->name . "<br>";
// echo $row->address . "<br>";
// echo $row->email . "<br>";


//$sql = "SELECT id, name, address FROM Testtable";
//$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_object()) {
        // echo "id: ". $row["id"] . "<br> ";
        // echo "Name: ". $row["name"] . "<br> ";
        // echo "Address: " . $row["address"] . "<br><br>";
        echo $row->id."<br>";
        echo $row->name."<br>";
        echo $row->address."<br>";
        echo $row->email."<br>";
    }
}
if ($limit->num_rows > 0) {
    
    while($row1 = $limit->fetch_object()) {
        // echo "id: ". $row["id"] . "<br> ";
        // echo "Name: ". $row["name"] . "<br> ";
        // echo "Address: " . $row["address"] . "<br><br>";
        echo $row1->id."<br>";
        echo $row1->name."<br>";
        echo $row1->address."<br>";
        echo $row1->email."<br>";
    }
}

$conn->close();
?>