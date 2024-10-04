// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase01Assigment
// Email: nk687@njit.edu

<?php
session_start();
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session
header("Location: index.php"); // Redirect to login page
?>
