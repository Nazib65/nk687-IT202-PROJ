<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
if (!isset($_REQUEST['OutdoorClothingCategoryID']) or (!is_numeric($_REQUEST['OutdoorClothingCategoryID']))) {
?>
   <h2>You did not select a valid categoryID to view.</h2>
   <a href="index.php?content=listOutdoorClothingCategories">List Categories</a>
<?php
} else {
   // Retrieve and validate the category ID
   $OutdoorClothingCategoryID = $_REQUEST['OutdoorClothingCategoryID'];
   $category = OutdoorClothingCategory::find($OutdoorClothingCategoryID);

   if ($category) {
       // Display the category information
       echo $category;
       echo "<br><br>\n";
   } else {
       // Handle the case where the category isn't found
       echo "<h2>Sorry, category #$OutdoorClothingCategoryID not found</h2>\n";
   }
}
?>
