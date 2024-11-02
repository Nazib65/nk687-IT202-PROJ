// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
<?php
require_once 'database.php';
require_once 'OutdoorClothingCategory.php';

// Check if a valid category ID is provided
if (!isset($_REQUEST['OutdoorClothingCategoryID']) || !is_numeric($_REQUEST['OutdoorClothingCategoryID'])) {
    echo "<h2>You did not select a valid Outdoor Clothing Category ID to view.</h2>";
    echo '<a href="index.php?content=listoutdoorclothingcategories">List Categories</a>';
} else {
    // Use the correct variable name from the request
    $outdoorClothingCategoryID = $_REQUEST['OutdoorClothingCategoryID']; 

    // Initialize the database connection
    $db = getDB();
    $category = new OutdoorClothingCategory($db);

    // Find the category based on the provided ID
    $categoryData = $category->find($outdoorClothingCategoryID);

    // Display the category details if found
    if ($categoryData) {
        echo "<h2>Outdoor Clothing Category Details</h2>";
        echo "<p><strong>Code:</strong> " . htmlspecialchars($categoryData['OutdoorClothingCategoryCode']) . "</p>"; // Use array syntax
        echo "<p><strong>Name:</strong> " . htmlspecialchars($categoryData['OutdoorClothingCategoryName']) . "</p>"; // Use array syntax
        echo "<p><strong>Aisle Number:</strong> " . htmlspecialchars($categoryData['AisleNumber'] ?? 'N/A') . "</p>"; // Use array syntax
    } else {
        // Error message if the category is not found
        echo "<h2>Sorry, outdoor clothing category $outdoorClothingCategoryID not found</h2>";
    }

    // Close the database connection if needed
    $db->close();
}
?>
