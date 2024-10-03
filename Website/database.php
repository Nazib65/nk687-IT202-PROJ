<?php
$servername = "your_server_name"; // e.g., localhost
$username = "your_username"; // e.g., root
$password = "your_password"; // e.g., empty string for XAMPP
$database = "your_database"; // e.g., your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
