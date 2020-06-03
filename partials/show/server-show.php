<?php

//database
include __DIR__ . '/../database.php';

// Utilities
include __DIR__ . '/../functions.php';

//get room ID from
$id_room = $_GET['id'];

// Query: lista stanze
$room = getById($connection, 'stanze', $id_room);


// $querySQL = "SELECT * FROM `stanze` WHERE `id` = '$id_room'";

// $result = $connection->query($querySQL);

// if ($result && $result->num_rows > 0) {
    
//     $room = $result->fetch_assoc(); 
        


// } elseif ($result) {

//     echo 'no records found';

// } else {

//     echo 'query failed';

// };

// $connection->close();