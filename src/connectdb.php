<?php
$connection = new mysqli("db", "root", "", "dbproject");

if ($connection->connect_error) {
    die("error: " . $connection->connect_error);
}
?>
