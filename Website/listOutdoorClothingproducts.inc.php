<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>

<script language="javascript">
   function listbox_dblclick() {
       document.OutdoorClothingProduct.updateOutdoorClothingProduct.click()
   }

   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this product?");
       }
       if (userConfirmed) {
           if (target == 1) OutdoorClothingProduct.action = "index.php?content=removeOutdoorClothingProduct";
           if (target == 2) OutdoorClothingProduct.action = "index.php?content=updateOutdoorClothingProduct";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Outdoor Clothing Product</h2>
<form name="OutdoorClothingProduct" method="post" action="index.php">
    <select ondblclick="listbox_dblclick()" name="OutdoorClothingProductID" size="20">
        <?php
        // include ("OutdoorClothingProduct.php");
        $products = OutdoorClothingProduct::retrieve();
        foreach($products as $product){
            $OutdoorClothingProductID = $product->OutdoorClothingProductID;
            $OutdoorClothingProductCode = $product->OutdoorClothingProductCode;
            $OutdoorClothingProductName = $product->OutdoorClothingProductName;
            $OutdoorClothingProductListPrice = $product->OutdoorClothingListPrice;
            $option = "$OutdoorClothingProductID - $OutdoorClothingProductName - $OutdoorClothingProductListPrice";
            echo "<option value=\"$OutdoorClothingProductID\">$option</option>\n";
        }
        ?>
    </select>
    <br>
    <input type="submit" onClick="button_click(1)" name="removeOutdoorClothingProduct" value="Remove Product">
    <input type="submit" onClick="button_click(2)" name="updateOutdoorClothingProduct" value="Update Product">
</form>
