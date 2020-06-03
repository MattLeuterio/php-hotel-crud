<?php

//database
include __DIR__ . '/../database.php';

// Utilities
include __DIR__ . '/../functions.php';


// Query: lista stanze

$rooms = getAll($connection, 'stanze');




// $querySQL = "SELECT * FROM `stanze`";
// $result = $connection->query($querySQL);

// if ($result && $result->num_rows > 0) {
//     $rooms = [];
//     while($row = $result->fetch_assoc()) {
        
//         $rooms[] = $row;

//     }

// } elseif ($result) {

//     echo 'no records found';

// } else {

//     echo 'query failed';

// };

// $connection->close();