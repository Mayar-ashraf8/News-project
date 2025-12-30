<?php
$connection = new mysqli("localhost", "root", "", "dbproject");

if ($connection->connect_error) {
    die("error: " . $connection->connect_error);
}
?>
