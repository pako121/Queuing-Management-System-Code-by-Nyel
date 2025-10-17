<?php

define('DB_SERVER', ('localhost'));
define('DB_USER', ('root'));
define('DB_PASSWORD', (''));
define('DB_NAME', ('queuing_database'));

$connection = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

// Check connection
if ($connection->connect_error) {
    die('Connection failed: ' . htmlspecialchars($connection->connect_error));
}

$connection->set_charset('utf8mb4');
