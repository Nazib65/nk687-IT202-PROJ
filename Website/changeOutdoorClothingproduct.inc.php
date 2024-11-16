<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';
require_once 'OutdoorClothingProduct.php';

// Ensure the user is logged in
if (isset($_SESSION['login'])) {
    // Retrieve form input values
    $OutdoorClothingProductID = filter_input(INPUT_POST, 'OutdoorClothingProductID', FILTER_VALIDATE_INT);
    $answer = $_POST['answer'];

    // Validate the Product ID
    if (!is_numeric($OutdoorClothingProductID)) {
        echo "<h2>Outdoor Clothing Product ID is required and must be numeric.</h2>\n";
        exit; // Stop execution if the ID is invalid
    }

    // Check if the answer corresponds to the action to update the product
    if ($answer === 'Update Product') {
        if ($OutdoorClothingProductID) {
            // Initialize the database connection
            $db = getDB();

            // Retrieve and sanitize other input values
            $OutdoorClothingProductCode = htmlspecialchars(filter_input(INPUT_POST, 'OutdoorClothingProductCode', FILTER_SANITIZE_STRING));
            $OutdoorClothingProductName = htmlspecialchars(filter_input(INPUT_POST, 'OutdoorClothingProductName', FILTER_SANITIZE_STRING));
            $OutdoorClothingDescription = htmlspecialchars(filter_input(INPUT_POST, 'OutdoorClothingDescription', FILTER_SANITIZE_STRING));
            $OutdoorClothingCategoryID = filter_input(INPUT_POST, 'OutdoorClothingCategoryID', FILTER_VALIDATE_INT);
            $OutdoorClothingWholesalePrice = filter_input(INPUT_POST, 'OutdoorClothingWholesalePrice', FILTER_VALIDATE_FLOAT);
            $OutdoorClothingListPrice = filter_input(INPUT_POST, 'OutdoorClothingListPrice', FILTER_VALIDATE_FLOAT);
            $Size = htmlspecialchars(filter_input(INPUT_POST, 'Size', FILTER_SANITIZE_STRING));
            $Color = htmlspecialchars(filter_input(INPUT_POST, 'Color', FILTER_SANITIZE_STRING));

            // Validate inputs
            if (empty($OutdoorClothingProductCode) || strlen($OutdoorClothingProductCode) > 50) {
                echo "<h2>Sorry, invalid Product Code. It is required and must not exceed 50 characters.</h2>";
                exit;
            }
            if (empty($OutdoorClothingProductName)) {
                echo "<h2>Sorry, Product Name is required.</h2>";
                exit;
            }
            if ($OutdoorClothingWholesalePrice <= 0) {
                echo "<h2>Sorry, the Wholesale Price must be greater than zero.</h2>";
                exit;
            }
            if ($OutdoorClothingListPrice <= 0) {
                echo "<h2>Sorry, the List Price must be greater than zero.</h2>";
                exit;
            }
            if (!is_numeric($OutdoorClothingCategoryID) || $OutdoorClothingCategoryID <= 0) {
                echo "<h2>Sorry, invalid Category ID. It must be a positive number.</h2>";
                exit;
            }

            // Create an instance of the product
            $OutdoorClothingProduct = new OutdoorClothingProduct(
                $db, 
                $OutdoorClothingProductID,
                $OutdoorClothingProductCode,
                $OutdoorClothingProductName,
                $OutdoorClothingDescription,
                $Size,
                $Color,
                $OutdoorClothingCategoryID,
                $OutdoorClothingWholesalePrice,
                $OutdoorClothingListPrice
            );

            // Perform the update
            if ($OutdoorClothingProduct->update()) {
                echo "<h2>Outdoor Clothing Product $OutdoorClothingProductID updated successfully!</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem updating outdoor clothing product $OutdoorClothingProductID</h2>\n";
            }

            // Close the database connection
            $db->close();
        } else {
            echo "<h2>Outdoor Clothing Product ID is required.</h2>\n";
        }
    } else {
        echo "<h2>Update canceled.</h2>\n";
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}

?>
