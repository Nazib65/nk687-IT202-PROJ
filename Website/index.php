<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Please Login to the [Your Store Name] Inventory Website</title>
</head>
<body>
    <h1>Please Login to the [Your Store Name] Inventory Website</h1>
    <form action="validate.inc.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
