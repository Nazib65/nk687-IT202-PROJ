// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu

<?php
include_once('OutdoorClothingProduct.php'); // Ensure this class is included if not already done.
if (isset($_SESSION['login'])) { // Check if the user is logged in
    
    if (isset($_POST['OutdoorClothingProductID'])) { // Check if the product ID is provided
        $OutdoorClothingProductID = $_POST['OutdoorClothingProductID'];
        if ((trim($OutdoorClothingProductID) == '') || (!is_numeric($OutdoorClothingProductID))) { // Validate ID
            echo "<h2>Sorry, you must enter a valid Outdoor Clothing Product ID number</h2>\n";
        } else {
            // Collect other product information from the form
            $OutdoorClothingProductCode = $_POST['OutdoorClothingProductCode'];
            $OutdoorClothingProductName = $_POST['OutdoorClothingProductName'];
            $OutdoorClothingDescription = $_POST['OutdoorClothingDescription'];
            $OutdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID'];
            $OutdoorClothingWholesalePrice = $_POST['OutdoorClothingWholesalePrice'];
            $OutdoorClothingListPrice = $_POST['OutdoorClothingListPrice'];
            $Size = $_POST['Size'];
            $Color = $_POST['Color'];

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
        echo "<h2>Outdoor Clothing Product ID is not set.</h2>\n"; // Error if ID is not provided
    }
} else {
    echo "<h2>Please log in first</h2>\n"; // Message if the user is not logged in
}
?>
