<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
include_once('OutdoorClothingProduct.php'); // Ensure this class is included if not already done.

if (isset($_SESSION['login'])) { // Check if the user is logged in
    $OutdoorClothingProductID = filter_input(INPUT_POST, 'OutdoorClothingProductID', FILTER_VALIDATE_INT); // Get and validate the product ID

    if ((trim($OutdoorClothingProductID) === '') || (!is_int($OutdoorClothingProductID))) { // Validate ID
        echo "<h2>Sorry, you must enter a valid Outdoor Clothing Product ID number</h2>\n";
    } else {
        // Collect other product information from the form
        $OutdoorClothingProductCode = htmlspecialchars(filter_input(INPUT_POST, 'OutdoorClothingProductCode', FILTER_SANITIZE_STRING));
        $OutdoorClothingProductName = htmlspecialchars(filter_input(INPUT_POST, 'OutdoorClothingProductName', FILTER_SANITIZE_STRING));
        $OutdoorClothingDescription = htmlspecialchars(filter_input(INPUT_POST, 'OutdoorClothingDescription', FILTER_SANITIZE_STRING));
        $OutdoorClothingCategoryID = filter_input(INPUT_POST, 'OutdoorClothingCategoryID', FILTER_VALIDATE_INT);
        $OutdoorClothingWholesalePrice = filter_input(INPUT_POST, 'OutdoorClothingWholesalePrice', FILTER_VALIDATE_FLOAT);
        $OutdoorClothingListPrice = filter_input(INPUT_POST, 'OutdoorClothingListPrice', FILTER_VALIDATE_FLOAT);
        $Size = htmlspecialchars(filter_input(INPUT_POST, 'Size', FILTER_SANITIZE_STRING));
        $Color = htmlspecialchars(filter_input(INPUT_POST, 'Color', FILTER_SANITIZE_STRING));
    
        include_once('database.php');
        $db = getDB(); // Get the database connection

        // Create a new product object
        $outdoorClothingProduct = new OutdoorClothingProduct($db); // Pass the DB connection to the constructor

        // Set properties
        $outdoorClothingProduct->OutdoorClothingProductID = $OutdoorClothingProductID;
        $outdoorClothingProduct->OutdoorClothingProductCode = $OutdoorClothingProductCode;
        $outdoorClothingProduct->OutdoorClothingProductName = $OutdoorClothingProductName;
        $outdoorClothingProduct->OutdoorClothingDescription = $OutdoorClothingDescription;
        $outdoorClothingProduct->OutdoorClothingCategoryID = $OutdoorClothingCategoryID;
        $outdoorClothingProduct->OutdoorClothingWholesalePrice = $OutdoorClothingWholesalePrice;
        $outdoorClothingProduct->OutdoorClothingListPrice = $OutdoorClothingListPrice;
        $outdoorClothingProduct->Size = $Size;
        $outdoorClothingProduct->Color = $Color;

        // Attempt to save the product
        $result = $outdoorClothingProduct->save();
        if ($result) {
            echo "<h2>New Outdoor Clothing Product #$OutdoorClothingProductID successfully added</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that Outdoor Clothing Product</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n"; // Message if the user is not logged in
}
?>
