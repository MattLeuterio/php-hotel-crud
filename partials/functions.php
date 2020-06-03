<?php

// GET ALL RECORDS FROM A DB TABLE

function getAll($connection, $table) {
    $querySQL = "SELECT * FROM `$table`";
    $result = $connection->query($querySQL);

    if ($result && $result->num_rows > 0) {
        $rooms = [];
        while($row = $result->fetch_assoc()) {

            $records[] = $row;

        }

    } elseif ($records) {

        $records = [];

    } else {

        $records = false;

    };

    $connection->close();

    return $records;
}

// GET A SINGLE RECORD BY ID
function getById($connection, $table, $id) {
    // Query: lista stanze
    $sql = "SELECT * FROM `$table` WHERE `id` = '$id'";

    $result = $connection->query($sql);

    if ($connection && $result->num_rows > 0) {

        $record = $result->fetch_assoc(); 



    } elseif ($result) {

        $record = [];

    } else {

        $record = false;

    };

    $connection->close();

    return $record;
}

// DELETE RECORD BY ID
function removeById($connection, $table, $id, $url) {
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $connection->query($sql);

    var_dump($result);

    if($result && $connection->affected_rows > 0) {
        header("Location: $url");
    } elseif ($result) {
        echo 'No rooms found';
    } else {
        echo 'Error';
}
}