// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase02Assigment
// Email: nk687@njit.edu
<?php
require_once 'database.php';
require_once 'OutdoorClothingCategory.php';

$db = getDB();
$category = new OutdoorClothingCategory($db);

if (isset($_GET['categoryID'], $_GET['categoryCode'], $_GET['categoryName'], $_GET['aisleNumber'])) {
    $category->OutdoorClothingCategoryID = $_GET['categoryID'];
    $category->OutdoorClothingCategoryCode = $_GET['categoryCode'];
    $category->OutdoorClothingCategoryName = $_GET['categoryName'];
    $category->AisleNumber = $_GET['aisleNumber']; // New parameter

    if ($category->update()) {
        echo "Category updated successfully!";
    } else {
        echo "Failed to update category.";
    }
} else {
    echo "Invalid input.";
}

$db->close();
?>
