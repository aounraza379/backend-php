<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'backendphp';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connection_error) {
    die("Connection failed:". $conn->connection_error);
}

?>