<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
require_once 'database.php';
require_once 'OutdoorClothingProduct.php';

// Establish a database connection
$db = getDB();

// Create an instance of OutdoorClothingProduct, passing the database connection
$productInstance = new OutdoorClothingProduct($db);

if (!isset($_POST['OutdoorClothingProductID']) || !is_numeric($_POST['OutdoorClothingProductID'])) {
?>
   <h2>You did not select a valid Outdoor Clothing Product ID</h2>
   <a href="index.php?content=listoutdoorclothingproducts">List Outdoor Clothing Products</a>
<?php
} else {
    $OutdoorClothingProductID = $_POST['OutdoorClothingProductID'];
    $OutdoorClothingProduct = $productInstance->find($OutdoorClothingProductID); 
    if ($OutdoorClothingProduct) {
?>
       <h2>Update Outdoor Clothing Product <?php echo $OutdoorClothingProduct->OutdoorClothingProductID; ?></h2><br>
       <form name="changeOutdoorClothingproduct" action="index.php" method="post">
           <table>
               <tr>
                   <td>Product ID</td>
                   <td><?php echo $OutdoorClothingProduct->OutdoorClothingProductID; ?></td>
               </tr>
               <tr>
                   <td>Product Code</td>
                   <td><input type="text" name="OutdoorClothingProductCode" value="<?php echo $OutdoorClothingProduct->OutdoorClothingProductCode; ?>" minlength="3" maxlength="10"></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="OutdoorClothingProductName" value="<?php echo $OutdoorClothingProduct->OutdoorClothingProductName; ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
                   <td><input type="text" name="OutdoorClothingDescription" value="<?php echo $OutdoorClothingProduct->OutdoorClothingDescription; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                   <td><input type="text" name="OutdoorClothingCategoryID" value="<?php echo $OutdoorClothingProduct->OutdoorClothingCategoryID; ?>"></td>
               </tr>
               <tr>
                   <td>Wholesale Price</td>
                   <td><input type="number" name="OutdoorClothingWholesalePrice" value="<?php echo $OutdoorClothingProduct->OutdoorClothingWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                   <td><input type="number" name="OutdoorClothingListPrice" value="<?php echo $OutdoorClothingProduct->OutdoorClothingListPrice; ?>"></td>
               </tr>
               <tr>
                   <td>Size</td>
                   <td><input type="text" name="Size" value="<?php echo $OutdoorClothingProduct->Size; ?>"></td>
               </tr>
               <tr>
            <td>Color</td>
            <td><input type="text" name="Color" value="<?php echo $OutdoorClothingProduct->Color; ?>"></td>
        </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="OutdoorClothingProductID" value="<?php echo $OutdoorClothingProductID; ?>">
           <input type="hidden" name="content" value="changeOutdoorClothingproduct">
       </form>
<?php
    } else {
?>
        <h2>Sorry, outdoor clothing product <?php echo $OutdoorClothingProductID; ?> not found</h2>
        <a href="index.php?content=listOutdoorClothingProducts">List Outdoor Clothing Products</a>
<?php
    }
}
?>
