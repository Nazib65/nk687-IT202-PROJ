<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>

<h2>Enter New Outdoor Clothing Product Information</h2>
<form name="newOutdoorClothingProduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Outdoor Clothing Product ID:</td>
           <td><input type="text" name="OutdoorClothingProductID" size="4" minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Ouutdoor Clothing Product Code:</td>
           <td><input type="text" name="OutdoorClothingProductCode" size="20" minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Product Name:</td>
           <td><input type="text" name="OutdoorClothingProductName" size="20" minlength="10" maxlength="100" ></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Description:</td>
           <td><input type="text" name="OutdoorClothingDescription" size="20" minlength="100" maxlength="255" ></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="OutdoorClothingCategoryID" size="4" minlength="3" maxlength="10"></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Wholesale Price:</td>
           <td><input type="number" name="OutdoorClothingWholesalePrice" size="10" min="0.01" max="10000" step="0.01" ></td>
       </tr>
       <tr>
           <td>Outdoor Clothing List Price:</td>
           <td><input type="number" name="OutdoorClothingListPrice" size="10"  min="0.01" max="10000" step="0.01"></td>
       </tr>
       <tr>
           <td>Size:</td>
           <td><input type="text" name="Size" size="10" minlength="1" maxlength="5"></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="Color" size="10" minlength="1" maxlength="5"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Outdoor Clothing Product">
   <input type="hidden" name="content" value="addOutdoorClothingproduct">
</form>
