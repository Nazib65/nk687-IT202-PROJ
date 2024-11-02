// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu

<h2>Enter New Outdoor Clothing Category Information</h2>
<form name="newOutdoorClothingcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Outdoor Clothing Category ID:</td>
           <td><input type="text" name="OutdoorClothingCategoryID" size="4"></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Category Code:</td>
           <td><input type="text" name="OutdoorClothingCategoryCode" size="20"></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Category Name:</td>
           <td><input type="text" name="OutdoorClothingCategoryName" size="50"></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Aisle Number:</td>
           <td><input type="text" name="AisleNumber" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Outdoor Clothing Category">
   <input type="hidden" name="content" value="addOutdoorClothingcategory">
</form>
