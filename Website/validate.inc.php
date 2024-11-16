<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>

<?php
require_once('database.php');
$emailAddress = htmlspecialchars($_POST['emailAddress']);
$password = $_POST['password'];
if (filter_var($emailAddress, FILTER_VALIDATE_EMAIL)) {
$query = "SELECT firstName, lastName, pronouns FROM OutdoorClothingManagers " .
        "WHERE emailAddress = ? AND password = SHA2(?,256)";
$db = getDB();
$stmt = $db->prepare($query);
$stmt->bind_param("ss", $emailAddress, $password);
$stmt->execute();
$stmt->bind_result($firstName, $lastName, $pronouns);
$fetched = $stmt->fetch();
$name = "$firstName $lastName";
$pronouns="$pronouns";
if ($fetched && isset($name)) {
   echo "<h2>Welcome to the OutdoorClothing Store, $name</h2>\n";
   $_SESSION['login'] = $name;
   $_SESSION['emailAddress']=$emailAddress;
   $_SESSION['firstName']=$firstName;
   $_SESSION['lastName']=$lastName;
   $_SESSION['pronouns']=$pronouns;


   header("Location: index.php");
} else {
   echo "<h2>Sorry, login incorrect for OutdoorClothing Store</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
} else {
   echo "<h2>Please enter a valid email address</h2>\n";
   echo "<a href=\"index.php\">Please try again</a>\n";
}
?>
