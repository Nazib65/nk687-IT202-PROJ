<?php
require_once 'database.php';
require_once 'OutdoorClothingProduct.php';

$db = getDB();
$product = new OutdoorClothingProduct($db);
$products = $product->getAll();

if (empty($products)) {
    echo "No products found.";
} else {
    foreach ($products as $prod) {
        echo "ID: " . htmlspecialchars($prod['OutdoorClothingProductID']) . "<br>";
        echo "Code: " . htmlspecialchars($prod['OutdoorClothingProductCode']) . "<br>";
        echo "Name: " . htmlspecialchars($prod['OutdoorClothingProductName']) . "<br>";
        echo "Description: " . htmlspecialchars($prod['OutdoorClothingDescription'] ?? 'N/A') . "<br>";
        echo "List Price: $" . htmlspecialchars($prod['OutdoorClothingListPrice']) . "<br>";
        echo "Wholesale Price: $" . htmlspecialchars($prod['OutdoorClothingWholesalePrice']) . "<br>";
        echo "Size: " . htmlspecialchars($prod['Size']) . "<br>";
        echo "Color: " . htmlspecialchars($prod['Color']) . "<br><br>";
    }
}

$db->close();
?>

