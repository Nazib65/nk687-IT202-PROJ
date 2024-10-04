// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase01Assigment
// Email: nk687@njit.edu


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
