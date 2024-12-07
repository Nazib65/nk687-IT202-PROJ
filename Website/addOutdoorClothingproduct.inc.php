<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
//include ("OutdoorClothingProduct.php");
if (isset($_SESSION['login'])) {
    if (isset($_POST['OutdoorClothingProductID'])) {
        $OutdoorClothingProductID = filter_input(INPUT_POST, 'OutdoorClothingProductID', FILTER_VALIDATE_INT);
        
        // Validate the product ID input
        if ((trim($OutdoorClothingProductID) == '') || (!is_int($OutdoorClothingProductID))) {
            echo "<h2>We weren't able to add that Product, please try again.</h2>\n";
        } 
        // Check if the product already exists
        else if (OutdoorClothingProduct::find($OutdoorClothingProductID)) {
            echo "<h2>Sorry, An item with the ID #$OutdoorClothingProductID already exists</h2>\n";
        } else {
            // Sanitize other inputs
            $OutdoorClothingProductCode = htmlspecialchars($_POST['OutdoorClothingProductCode']);
            $OutdoorClothingProductName = htmlspecialchars($_POST['OutdoorClothingProductName']);
            $OutdoorClothingDescription = htmlspecialchars($_POST['OutdoorClothingDescription']);
            $OutdoorClothingCategoryID = filter_input(INPUT_POST, 'OutdoorClothingCategoryID', FILTER_VALIDATE_INT);
            $OutdoorClothingWholesalePrice = filter_input(INPUT_POST, 'OutdoorClothingWholesalePrice', FILTER_VALIDATE_INT);
            $OutdoorClothingListPrice = filter_input(INPUT_POST, 'OutdoorClothingListPrice', FILTER_VALIDATE_INT);
            $Color = htmlspecialchars($_POST['Color']);
            $Size = htmlspecialchars($_POST['Size']);


            // Create a new product object
            $OutdoorClothingProduct = new OutdoorClothingProduct(
                $OutdoorClothingProductID,
                $OutdoorClothingProductCode,
                $OutdoorClothingProductName,
                $OutdoorClothingDescription,
                $OutdoorClothingCategoryID,
                $OutdoorClothingWholesalePrice,
                $OutdoorClothingListPrice,
                $Color,
                $Size
            );

            // Save the new product
            $result = $OutdoorClothingProduct->save();

            if ($result == true) {
                echo "<h2>You have added a New Product #$OutdoorClothingProductID</h2>\n";
            } else {
                echo "<h2>We could not add the New Product, please try again.</h2>\n";
            }
        }
    }
}
?>
