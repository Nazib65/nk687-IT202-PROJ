// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase02Assigment
// Email: nk687@njit.edu
<?php
require_once 'database.php';
require_once 'OutdoorClothingProduct.php';

$db = getDB();
$product = new OutdoorClothingProduct($db);

if (isset($_GET['productID'], $_GET['productCode'], $_GET['productName'], $_GET['productDescription'], $_GET['size'], $_GET['color'], $_GET['categoryID'], $_GET['wholesalePrice'], $_GET['listPrice'])) {
    $product->OutdoorClothingProductID = $_GET['productID'];
    $product->OutdoorClothingProductCode = $_GET['productCode'];
    $product->OutdoorClothingProductName = $_GET['productName'];
    $product->OutdoorClothingDescription = $_GET['productDescription'];
    $product->Size = $_GET['size']; // New parameter
    $product->Color = $_GET['color']; // New parameter
    $product->OutdoorClothingCategoryID = $_GET['categoryID'];
    $product->OutdoorClothingWholesalePrice = $_GET['wholesalePrice'];
    $product->OutdoorClothingListPrice = $_GET['listPrice'];

    if ($product->save()) {
        echo "Product added successfully!";
    } else {
        echo "Failed to add product.";
    }
} else {
    echo "Invalid input.";
}

$db->close();
?>
