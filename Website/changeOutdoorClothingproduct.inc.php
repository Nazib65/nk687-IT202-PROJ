<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php 

//require_once("OutdoorClothingProduct.php");
if (isset($_SESSION['login'])) {
    $OutdoorClothingProductID = filter_input(INPUT_POST, 'OutdoorClothingProductID', FILTER_VALIDATE_INT);
    $answer = $_POST['answer'];

    if ($answer == "Update Product") {
        // Find the product by ID
        $OutdoorClothingProduct = OutdoorClothingProduct::find($OutdoorClothingProductID);

        if ($OutdoorClothingProduct) {
            // Retrieve input values
            $OutdoorClothingProductCode = htmlspecialchars($_POST['OutdoorClothingProductCode']);
            $OutdoorClothingProductName = htmlspecialchars($_POST['OutdoorClothingProductName']);
            $OutdoorClothingDescription = htmlspecialchars($_POST['OutdoorClothingDescription']);
            $OutdoorClothingCategoryID = filter_input(INPUT_POST, 'OutdoorClothingCategoryID', FILTER_VALIDATE_INT);
            $OutdoorClothingWholesalePrice = filter_input(INPUT_POST, 'OutdoorClothingWholesalePrice', FILTER_VALIDATE_INT);
            $OutdoorClothingListPrice = filter_input(INPUT_POST, 'OutdoorClothingListPrice', FILTER_VALIDATE_INT);
            $Color = htmlspecialchars($_POST['Color']);
            $Size = htmlspecialchars($_POST['Size']); // Added size field

            // Validate input
            if (empty($OutdoorClothingProductCode)) {
                echo "<h2> You must enter a valid Product Code.</h2>";
                exit;
            }
            if (empty($OutdoorClothingProductName)) {
                echo "<h2>You must enter the Product Name.</h2>";
                exit;
            }
            if ($OutdoorClothingListPrice == false || $OutdoorClothingListPrice <= 0) {
                echo "<h2>The List Price must be greater than 0.</h2>";
                exit;
            }

            // Update the product attributes
            $OutdoorClothingProduct->OutdoorClothingProductCode = $OutdoorClothingProductCode;
            $OutdoorClothingProduct->OutdoorClothingProductName = $OutdoorClothingProductName;
            $OutdoorClothingProduct->OutdoorClothingDescription = $OutdoorClothingDescription;
            $OutdoorClothingProduct->OutdoorClothingCategoryID = $OutdoorClothingCategoryID;
            $OutdoorClothingProduct->OutdoorClothingWholesalePrice = $OutdoorClothingWholesalePrice;
            $OutdoorClothingProduct->OutdoorClothingListPrice = $OutdoorClothingListPrice; 
            $OutdoorClothingProduct->Color = $Color;
            $OutdoorClothingProduct->Size = $Size; // Updating size

            // Update the product in the database
            if ($OutdoorClothingProduct->update()) {
                echo "<h2> You have updated Product #$OutdoorClothingProductID successfully!</h2>\n";
            } else {
                echo "<h2> Product #$OutdoorClothingProductID could not be updated, please try again.</h2>\n";
            }
        } else {
            echo "<h2> We couldn't find Product #$OutdoorClothingProductID.</h2>\n";
        }
    } else {
        echo "<h2> You have canceled the Update for Product #$OutdoorClothingProductID.</h2>\n";
    }
} else {
    echo "<h2>You must log in first.</h2>\n";
}
?>

