<?php

//database
include __DIR__ . '/../database.php';

//room id
$id_room = $_GET['id'];

// Query: lista stanze
$querySQL = "SELECT * FROM `stanze` WHERE `id` = '$id_room'";

$result = $connection->query($querySQL);

if ($result && $result->num_rows > 0) {
    
    $room = $result->fetch_assoc(); 
        


} elseif ($result) {

    echo 'no records found';

} else {

    echo 'query failed';

};

$connection->close();