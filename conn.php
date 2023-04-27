<?php

$conn = new mysqli('localhost', 'root', '', 'foodsys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>