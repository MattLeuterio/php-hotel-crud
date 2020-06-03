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
// $sql = "UPDATE `stanze`
// SET `room_number` = $room_number, `beds` = $beds, `floor` = $floor
// WHERE `id` = $id_room";
// $result = $connection->query($sql);

// UPDATE con prepared statements
$sql = "UPDATE `stanze`
SET `room_number` = ?, `beds` = ?, `floor` = ?
WHERE `id` = ?";
// ? -> placeholder


$statments = $connection->prepare($sql);
$statments->bind_param('iiii', $room_number, $beds, $floor, $id_room);
// le 4 i identificano che sono 4 number ->seguire l'ordine di inserimento è obbligatorio

$statments->execute();


if($statments && $statments->affected_rows > 0) {
    header("Location: $base_path" . "show.php?id=$id_room"); 
} else if($statments) {
    var_dump($statments);
    die('roooooooooooom not found');
} else {
    die('error');
}
// Close connection
$connection->close();
?>