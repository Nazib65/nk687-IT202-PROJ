// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'database.php';
require_once 'OutdoorClothingProduct.php';

// Ensure the user is logged in
if (isset($_SESSION['login'])) {
    // Retrieve form input values
    $outdoorClothingProductID = $_POST['OutdoorClothingProductID']; 
    $answer = $_POST['answer'];

    // Validate the Product ID
    if (!is_numeric($outdoorClothingProductID)) {
        echo "<h2>Outdoor Clothing Product ID is required and must be numeric.</h2>\n";
        exit; // Stop execution if the ID is invalid
    }

    // Check if the answer corresponds to the action to update the product
    if ($answer === 'Update Product') {
        // Proceed with the update process
        if ($outdoorClothingProductID) {
            // Initialize the database connection
            $db = getDB();
            
            // Retrieve and sanitize other input values
            $outdoorClothingProductCode = $_POST['OutdoorClothingProductCode'];
            $outdoorClothingProductName = $_POST['OutdoorClothingProductName'];
            $outdoorClothingDescription = $_POST['OutdoorClothingDescription'];
            $outdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID'];
            $outdoorClothingWholesalePrice = $_POST['OutdoorClothingWholesalePrice'];
            $outdoorClothingListPrice = $_POST['OutdoorClothingListPrice'];
            $Size = $_POST['Size'];
            $Color = $_POST['Color'];

            // Create an instance of the product
            $outdoorClothingProduct = new OutdoorClothingProduct(
                $db, // Pass the database connection here
                $outdoorClothingProductID,
                $outdoorClothingProductCode,
                $outdoorClothingProductName,
                $outdoorClothingDescription,
                $Size,
                $Color,
                $outdoorClothingCategoryID,
                $outdoorClothingWholesalePrice,
                $outdoorClothingListPrice
            );

            // Perform the update
            if ($outdoorClothingProduct->update()) {
                echo "<h2>Outdoor Clothing Product $outdoorClothingProductID updated successfully!</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem updating outdoor clothing product $outdoorClothingProductID</h2>\n";
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
