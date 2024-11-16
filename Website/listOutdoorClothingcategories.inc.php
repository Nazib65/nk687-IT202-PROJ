<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
require_once 'database.php';
require_once 'OutdoorClothingCategory.php';

// Establish a database connection
$db = getDB();
$category = new OutdoorClothingCategory($db);

// Fetch all categories
$categories = $category->getAll();

// Check if there are categories to display
if (empty($categories)) {
    echo "<h2>No categories found.</h2>";
} else {
    foreach ($categories as $cat) {
        echo "ID: " . htmlspecialchars($cat['OutdoorClothingCategoryID']) . "<br>";
        echo "Code: " . htmlspecialchars($cat['OutdoorClothingCategoryCode']) . "<br>";
        echo "Name: " . htmlspecialchars($cat['OutdoorClothingCategoryName']) . "<br><br>";
    }
}

// Close the database connection
$db->close();
?>
