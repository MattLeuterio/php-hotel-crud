<?php

//database
include __DIR__ . '/../database.php';

// Utilities
include __DIR__ . '/../functions.php';

$bookings = getAll($connection, 'prenotazioni');