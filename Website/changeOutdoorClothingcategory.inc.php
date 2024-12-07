<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
//include("OutdoorClothingCategory.php");
if (isset($_SESSION['login'])) {
    $OutdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID'];
    $answer = $_POST['answer'];

    if ($answer == "Update Category") {
        // Find the category by ID
        $category = OutdoorClothingCategory::find($OutdoorClothingCategoryID);

        if ($category) {
            // Update category attributes
            $category->OutdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID'];
            $category->OutdoorClothingCategoryCode = $_POST['OutdoorClothingCategoryCode'];
            $category->OutdoorClothingCategoryName = $_POST['OutdoorClothingCategoryName'];
            // Assuming you may need this field based on your previous code
            //$category->AisleNumber = $_POST['AisleNumber'];

            // Call the update method
            $result = $category->update();

            // Check if the update was successful
            if ($result) {
                echo "<h2> You have updated Category #$OutdoorClothingCategoryID successfully!</h2>\n";
            } else {
                echo "<h2> Something went wrong, we could not update Category #$OutdoorClothingCategoryID.</h2>\n";
            }
        } else {
            echo "<h2>Category #$OutdoorClothingCategoryID not found.</h2>\n";
        }
    } else {
        echo "<h2>Update Canceled for category #$OutdoorClothingCategoryID.</h2>\n";
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
