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
    $outdoorClothingProductID = $_POST['OutdoorClothingProductID'];
    $outdoorClothingProduct = $productInstance->find($outdoorClothingProductID); 
    if ($outdoorClothingProduct) {
?>
       <h2>Update Outdoor Clothing Product <?php echo $outdoorClothingProduct->OutdoorClothingProductID; ?></h2><br>
       <form name="outdoorClothing" action="index.php" method="post">
           <table>
               <tr>
                   <td>Product ID</td>
                   <td><?php echo $outdoorClothingProduct->OutdoorClothingProductID; ?></td>
               </tr>
               <tr>
                   <td>Product Code</td>
                   <td><input type="text" name="OutdoorClothingProductCode" value="<?php echo $outdoorClothingProduct->OutdoorClothingProductCode; ?>"></td>
               </tr>
               <tr>
                   <td>Name</td>
                   <td><input type="text" name="OutdoorClothingProductName" value="<?php echo $outdoorClothingProduct->OutdoorClothingProductName; ?>"></td>
               </tr>
               <tr>
                   <td>Description</td>
                   <td><input type="text" name="OutdoorClothingDescription" value="<?php echo $outdoorClothingProduct->OutdoorClothingDescription; ?>"></td>
               </tr>
               <tr>
                   <td>Category ID</td>
                   <td><input type="text" name="OutdoorClothingCategoryID" value="<?php echo $outdoorClothingProduct->OutdoorClothingCategoryID; ?>"></td>
               </tr>
               <tr>
                   <td>Wholesale Price</td>
                   <td><input type="text" name="OutdoorClothingWholesalePrice" value="<?php echo $outdoorClothingProduct->OutdoorClothingWholesalePrice; ?>"></td>
               </tr>
               <tr>
                   <td>List Price</td>
                   <td><input type="text" name="OutdoorClothingListPrice" value="<?php echo $outdoorClothingProduct->OutdoorClothingListPrice; ?>"></td>
               </tr>
               <tr>
                   <td>Size</td>
                   <td><input type="text" name="Size" value="<?php echo $outdoorClothingProduct->Size; ?>"></td>
               </tr>
               <tr>
            <td>Color</td>
            <td><input type="text" name="Color" value="<?php echo $outdoorClothingProduct->Color; ?>"></td>
        </tr>
           </table><br><br>
           <input type="submit" name="answer" value="Update Product">
           <input type="submit" name="answer" value="Cancel">
           <input type="hidden" name="OutdoorClothingProductID" value="<?php echo $outdoorClothingProductID; ?>">
           <input type="hidden" name="content" value="changeOutdoorClothingproduct">
       </form>
<?php
    } else {
?>
        <h2>Sorry, outdoor clothing product <?php echo $outdoorClothingProductID; ?> not found</h2>
        <a href="index.php?content=listOutdoorClothingProducts">List Outdoor Clothing Products</a>
<?php
    }
}
?>
