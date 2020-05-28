<?php

//setup
include __DIR__ . '/../env.php';

// connection

$connection = new mysqli($server_name, $username, $password, $db_name);


// check connection
if($connection && $connection->connect_error) {
    die('Error');
};

