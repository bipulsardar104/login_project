<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "login";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "connection succeed";
}