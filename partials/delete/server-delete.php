<?php

// Connect DB
include_once __DIR__ . '/../database.php';

// Get room id
if(empty($_POST['id'])) {
    die('id do not exists');
}

$id_room = $_POST['id'];

// Query

$sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
$result = $connection->query($sql);

var_dump($result);

if($result && $connection->affected_rows > 0) {
    header("Location: $base_path?del=1");
} elseif ($result) {
    echo 'No rooms found';
} else {
    echo 'Error';
}


