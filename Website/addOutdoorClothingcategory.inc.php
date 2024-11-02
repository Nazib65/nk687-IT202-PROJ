// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu

<?php
if (isset($_SESSION['login'])) { // Check if the user is logged in
    if (isset($_POST['OutdoorClothingCategoryID'])) { // Check if the category ID is provided
        $OutdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID']; // Get the category ID
        if ((trim($OutdoorClothingCategoryID) == '') || (!is_numeric($OutdoorClothingCategoryID))) { // Validate ID
            echo "<h2>Sorry, you must enter a valid Outdoor Clothing Category ID number</h2>\n";
        } else {
            // Collect other form inputs
            $OutdoorClothingCategoryCode = $_POST['OutdoorClothingCategoryCode'];
            $OutdoorClothingCategoryName = $_POST['OutdoorClothingCategoryName'];
            $AisleNumber = $_POST['AisleNumber'];

            include('database.php');
            $db = getDB(); // Get the database connection

            // Create a new category object
            $outdoorClothingCategory = new OutdoorClothingCategory($db); // Pass the DB connection to the constructor
            // Set properties
            $outdoorClothingCategory->OutdoorClothingCategoryID = $OutdoorClothingCategoryID;
            $outdoorClothingCategory->OutdoorClothingCategoryCode = $OutdoorClothingCategoryCode;
            $outdoorClothingCategory->OutdoorClothingCategoryName = $OutdoorClothingCategoryName;
            $outdoorClothingCategory->AisleNumber = $AisleNumber;

            $result = $outdoorClothingCategory->save(); // Attempt to save the category

            if ($result) {
                echo "<h2>New Outdoor Clothing Category #$outdoorClothingCategoryID successfully added</h2>\n";
            } else {
                echo "<h2>Sorry, there was a problem adding that Outdoor Clothing Category</h2>\n";
            }
        }
    } else {
        echo "<h2>Outdoor Clothing Category ID is required.</h2>\n"; // Error if ID is not provided
    }
} else {
    echo "<h2>Please log in first</h2>\n"; // Message if the user is not logged in
}
?>
