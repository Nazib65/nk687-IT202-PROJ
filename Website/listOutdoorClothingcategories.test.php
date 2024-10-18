// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase02Assigment
// Email: nk687@njit.edu
<<?php
require_once 'database.php';
require_once 'OutdoorClothingCategory.php';

$db = getDB();
$category = new OutdoorClothingCategory($db);
$categories = $category->getAll();

foreach ($categories as $cat) {
    echo "ID: " . $cat['OutdoorClothingCategoryID'] . "<br>";
    echo "Code: " . $cat['OutdoorClothingCategoryCode'] . "<br>";
    echo "Name: " . $cat['OutdoorClothingCategoryName'] . "<br><br>";
}

$db->close();
?>
