<?php

// Connect DB 
include __DIR__ . '/../database.php';

if(empty ( $_POST['room_number'] ) || empty( $_POST['beds'] ) || empty( $_POST['floor'] ) ) {
    die('incomplete fields');
}

$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

// Insert New Room in Db
$sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) 
        VALUES (?, ?, ?, NOW(), NOW());";

    $statments = $connection->prepare($sql);
    $statments->bind_param('iii', $room_number, $beds, $floor);
    $statments->execute();

    //var_dump($statments);

    if($statments && $statments->insert_id) {
        $id_room = $statments->insert_id;
        header("Location: $base_path" . "show.php?id=$id_room");
    } else {
        die("Creation Room ERROR");
    }

// Close connection
$connection->close();


