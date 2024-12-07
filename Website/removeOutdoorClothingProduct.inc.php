<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
// include("OutdoorClothingCategory.php");
if (isset($_SESSION['login'])) {
    $OutdoorClothingProductID = $_POST['OutdoorClothingProductID'];
    $product = OutdoorClothingProduct::find($OutdoorClothingProductID);
    $result = $product->remove();

    if ($result)
        echo "<h2>You have removed product $OutdoorClothingProductID</h2>\n";
    else
        echo "<h2>We couldn't remove product $OutdoorClothingProductID</h2>\n";
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
