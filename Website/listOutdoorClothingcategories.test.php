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
