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

    if ($category->save()) {
        echo "Category added successfully!";
    } else {
        echo "Failed to add category.";
    }
} else {
    echo "Invalid input.";
}

$db->close();
?>
