<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to OutdoorClothing Inventory Helper</title>
</head>
<body>
    <h1>Welcome <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName'] . " (" . $_SESSION['pronouns'] . ")"; ?></h1>
    <a href="logout.inc.php">Logout</a>
</body>
</html>
