<?php
session_start();
include 'database.php'; // Include your database connection

// Get form data
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare a statement to check user credentials
$stmt = $conn->prepare("SELECT * FROM OutdoorClothingManagers WHERE emailAddress = ? AND password = SHA2(?, 256)");
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
    
    // Redirect to main page
    header("Location: main.inc.php");
    exit(); // Ensure no further code is executed after redirection
} else {
    // Invalid credentials
    header("Location: index.php?error=incorrect"); // Redirect back to login with error
    exit(); // Ensure no further code is executed after redirection
}
?>
