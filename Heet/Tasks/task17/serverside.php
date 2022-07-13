<?php
 
$table = 'crud';
 
$primaryKey = 'id';
 
$columns = array(
    array( 'db' => 'id', 'dt' => 0 ),
    array( 'db' => 'fname', 'dt' => 1 ),
    array( 'db' => 'lname',  'dt' => 2 ),
    array( 'db' => 'dob','dt' => 3,
        'formatter' => function( $d, $row ) {
            return date( 'd-m-Y', strtotime($d));
        }
    ),
    array( 'db' => 'phone', 'dt' => 4),
    array( 'db' => 'email',   'dt' =>  5),
    array('db' => 'country','dt' =>  6),
    array('db' => 'source', 'dt' =>  7),
    array('db' => 'compaign','dt'=>  8)
   
);

$sql_details = array(
    'user' => 'root',
    'pass' => 'matrix@1',
    'db'   => 'Employee',
    'host' => 'localhost'
);
 
require( 'ssp.class.php');
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);