// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu

<h2>Enter New Outdoor Clothing Product Information</h2>
<form name="newOutdoorClothingProduct" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="OutdoorClothingProductID" size="4"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="OutdoorClothingProductCode" size="20"></td>
       </tr>
       <tr>
           <td>Name:</td>
           <td><input type="text" name="OutdoorClothingProductName" size="20"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="OutdoorClothingDescription" size="20"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="OutdoorClothingCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="text" name="OutdoorClothingWholesalePrice" size="10"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="OutdoorClothingListPrice" size="10"></td>
       </tr>
       <tr>
           <td>Size:</td>
           <td><input type="text" name="Size" size="10"></td>
       </tr>
       <tr>
           <td>Color:</td>
           <td><input type="text" name="Color" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Outdoor Clothing Product">
   <input type="hidden" name="content" value="addOutdoorClothingproduct">
</form>
