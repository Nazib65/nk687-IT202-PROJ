<?php
session_start();
include 'database.php'; // Include your database connection

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Query to check user credentials
$stmt = $conn->prepare("SELECT * FROM ShopManagers WHERE emailAddress = ? AND password = SHA2(?, 256)");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch user data
    $user = $result->fetch_assoc();
    $_SESSION['login'] = true;
    $_SESSION['emailAddress'] = $user['emailAddress'];
    $_SESSION['firstName'] = $user['firstName'];
    $_SESSION['lastName'] = $user['lastName'];
    $_SESSION['pronouns'] = $user['pronouns'];
    header("Location: main.inc.php"); // Redirect to main page
} else {
    // Invalid credentials
    header("Location: index.php?error=incorrect"); // Redirect back to login
}
?>
