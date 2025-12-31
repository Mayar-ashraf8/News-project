<?php
$connection = new mysqli("host.docker.internal", "root", "", "dbproject");

if ($connection->connect_error) {
    die("error: " . $connection->connect_error);
}
?>
