<?php

//setup
include __DIR__ . '/../env.php';

// connection

$connection = new mysqli($server_name, $username, $password, $db_name);


// check connection
if($connection && $connection->connect_error) {
    die('Error');
};

// Query: lista stanze
$querySQL = "SELECT * FROM `stanze`";
$result = $connection->query($querySQL);

if ($result && $result->num_rows > 0) {
    $rooms = [];
    while($row = $result->fetch_assoc()) {
        
        $rooms[] = $row;

    }

} elseif ($result) {

    echo 'no records found';

} else {

    echo 'query failed';

};