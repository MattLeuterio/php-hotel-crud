<?php
// connect to DB
include_once __DIR__ . '/../database.php';

// Check ID
if(empty($_POST['id']) ) {
    die('id not found');
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

// perform Update
$sql = "UPDATE `stanze`
SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
WHERE `id` = $id_room";

$result = $connection->query($sql);


if($result && $connection->affected_rows > 0) {
    header("Location: $base_path/show.php?id=$id_room"); 
} else if($result) {
    die('room not found');
} else {
    die('error');
}
// Close connection
$connection->close();
?>