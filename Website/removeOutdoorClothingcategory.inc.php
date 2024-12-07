<?// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
// include("OutdoorClothingCategory.php");
if (isset($_SESSION['login'])) {
    $OutdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID'];
    $category = OutdoorClothingCategory::find($OutdoorClothingCategoryID);
    $result = $category->remove();

    if ($result)
        echo "<h2>You have removed Category $OutdoorClothingCategoryID</h2>\n";
    else
        echo "<h2>We couldn't remove Category $OutdoorClothingCategoryID</h2>\n";
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
