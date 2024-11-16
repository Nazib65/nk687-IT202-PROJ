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
$product = new OutdoorClothingProduct($db);

// Fetch all products
$products = $product->getAll();
?>

<h2>Select Product</h2>
<form name="OutdoorClothingProducts" method="post" action="index.php"> 
   <label for="OutdoorClothingProductID">Choose a product:</label>
   <select name="OutdoorClothingProductID" id="OutdoorClothingProductID" size="20">
       <option value="">-- Please select a product --</option>
       <?php
       if (empty($products)) {
           echo "<option value=''>No products available</option>";
       } else {
           foreach ($products as $prod) {
               $OutdoorClothingProductID = htmlspecialchars($prod['OutdoorClothingProductID']);
               $OutdoorClothingProductName = htmlspecialchars($prod['OutdoorClothingProductName']);
               $OutdoorClothingProductListPrice = number_format($prod['OutdoorClothingListPrice'], 2);
               $option = "$OutdoorClothingProductID - $OutdoorClothingProductName - $$OutdoorClothingProductListPrice"; 
               echo "<option value=\"$OutdoorClothingProductID\">$option</option>\n"; 
           }
       }
       ?>
   </select>
   <input type="submit" value="Select Product"> 
</form>

<?php
// Close the database connection
$db->close();
?>


