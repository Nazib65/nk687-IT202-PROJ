<?php
$servername = "sql1.njit.edu"; 
$username = "nk687"; 
$password = "NazibIrfan1@"; 
$database = "nk687"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
