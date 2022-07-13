<?php

include 'db.php';

$search = $_REQUEST['search'];
$merge = "select * from crud where id like '%$search%' or
								fname like '%$search%' or
							  	lname like '%$search%' or
								dob like '%$search%' or
								phone like '%$search%' or
								email like '%$search%' or
								country like '%$search%' or
								source like '%$search%' or
								compaign like '%$search%' LIMIT " . $initial_page . ',' . $limit;
$query = mysqli_query($this->con,$merge);

$query1 = $query->fetch_object();

echo $query1;

?>