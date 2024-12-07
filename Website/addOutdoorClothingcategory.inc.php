<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
// include("category.php");
if (isset($_SESSION['login'])) {
    if (isset($_POST['OutdoorClothingCategoryID'])) {
        $OutdoorClothingCategoryID = filter_input(INPUT_POST, 'OutdoorClothingCategoryID', FILTER_VALIDATE_INT);
        
        // Validate the category ID input
        if ((trim($OutdoorClothingCategoryID) == '') || (!is_int($OutdoorClothingCategoryID))) {
            echo "<h2>Sorry, you must enter a valid category ID number</h2>\n";
        } 
        // Check if the category already exists
        else if (OutdoorClothingCategory::find($OutdoorClothingCategoryID)) {
            echo "<h2>Sorry, A category with the ID #$OutdoorClothingCategoryID already exists</h2>\n";
        } else {
            // Sanitize other inputs
            $OutdoorClothingCategoryCode = htmlspecialchars($_POST['OutdoorClothingCategoryCode']);
            $OutdoorClothingCategoryName = htmlspecialchars($_POST['OutdoorClothingCategoryName']);
            $OutdoorClothingAisleNumber = htmlspecialchars($_POST['OutdoorClothingAisleNumber']);
            $DateCreated = date('Y-m-d H:i:s');

            // Create a new category object
            $OutdoorClothingCategory = new OutdoorClothingCategory($OutdoorClothingCategoryID, $OutdoorClothingCategoryCode, $OutdoorClothingCategoryName, $OutdoorClothingAisleNumber);

            // Save the new category
            $result = $OutdoorClothingCategory->save();

            if ($result) {
                echo "<h2>New Category #$OutdoorClothingCategoryID successfully added</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that category</h2>\n";
            }
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
