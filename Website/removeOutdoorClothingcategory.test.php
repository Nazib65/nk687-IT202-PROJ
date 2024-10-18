// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase01Assigment
// Email: nk687@njit.edu
<?php
require_once 'outdoorclothingcategory.php';
require_once 'database.php';

// Establish the database connection
$conn = getDB();  // Make sure you are using the connection here.

$category = new OutdoorClothingCategory($conn); // Pass the connection to the constructor
$category->OutdoorClothingCategoryID = $_GET['categoryID'];

if ($category->delete()) {
    echo "Category deleted successfully!";
} else {
    echo "Error deleting category.";
}
?>
