<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} // Start the session if not already started
require_once 'OutdoorClothingCategory.php'; // Include necessary class

if (isset($_SESSION['login'])) { // Check if the user is logged in
    $OutdoorClothingCategoryID = filter_input(INPUT_POST, 'OutdoorClothingCategoryID', FILTER_VALIDATE_INT); // Get the category ID

    if ((trim($OutdoorClothingCategoryID) == '') || (!is_int($OutdoorClothingCategoryID))) { // Validate ID
        echo "<h2>Sorry, you must enter a valid Outdoor Clothing Category ID number</h2>\n";
    } else {
        include('database.php');
        $db = getDB(); // Get the database connection
        $outdoorClothingCategory = new OutdoorClothingCategory($db);

        // Check if the category already exists
        if ($outdoorClothingCategory->find($OutdoorClothingCategoryID)) {
            echo "<h2>Sorry, a category with the ID #$OutdoorClothingCategoryID already exists</h2>\n"; 
        } else {
            // Collect other form inputs
            $OutdoorClothingCategoryCode = htmlspecialchars(filter_input(INPUT_POST,'OutdoorClothingCategoryCode',FILTER_SANITIZE_STRING));
            $OutdoorClothingCategoryName = htmlspecialchars(filter_input(INPUT_POST,'OutdoorClothingCategoryName',FILTER_SANITIZE_STRING ));
            $AisleNumber = filter_input(INPUT_POST,'AisleNumber',FILTER_VALIDATE_INT);

            // Set properties
            $outdoorClothingCategory->OutdoorClothingCategoryID = $OutdoorClothingCategoryID;
            $outdoorClothingCategory->OutdoorClothingCategoryCode = $OutdoorClothingCategoryCode;
            $outdoorClothingCategory->OutdoorClothingCategoryName = $OutdoorClothingCategoryName;
            $outdoorClothingCategory->AisleNumber = $AisleNumber;

            $result = $outdoorClothingCategory->save(); // Attempt to save the category

            if ($result) {
                echo "<h2>New Outdoor Clothing Category #$OutdoorClothingCategoryID successfully added</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that Outdoor Clothing Category</h2>\n";
            }
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n"; // Message if the user is not logged in
}
?>
