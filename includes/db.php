<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "pastel_dream_bakery";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>