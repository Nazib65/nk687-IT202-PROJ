<?php
require_once 'database.php';
require_once 'OutdoorClothingProduct.php';

$db = getDB();
$product = new OutdoorClothingProduct($db);

if (isset($_GET['productID'])) {
    $product->OutdoorClothingProductID = $_GET['productID'];

    if ($product->delete()) {
        echo "Product deleted successfully!";
    } else {
        echo "Failed to delete product.";
    }
} else {
    echo "Invalid input.";
}

$db->close();
?>
