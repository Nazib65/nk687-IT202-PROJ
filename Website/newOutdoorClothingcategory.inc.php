<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>

<h2>Enter New Outdoor Clothing Category Information</h2>
<form name="newOutdoorClothingcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Outdoor Clothing Category ID:</td>
           <td><input type="number" name="OutdoorClothingCategoryID" size="4" minlength="3" maxlength="10" placeholder="Enter the categoryID" required ></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Category Code:</td>
           <td><input type="text" name="OutdoorClothingCategoryCode" size="20" placeholder="Enter code" minlength="3" maxlength="10" required></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Category Name:</td>
           <td><input type="text" name="OutdoorClothingCategoryName" size="50" minlength="10" maxlength="100" placeholder="Enter cat name"  required ></td>
       </tr>
       <tr>
           <td>Outdoor Clothing Aisle Number:</td>
           <td><input type="text" name="AisleNumber" size="10" minlength="1" maxlength="5" placeholder="Enter Aisle Number" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Outdoor Clothing Category">
   <input type="hidden" name="content" value="addOutdoorClothingcategory">
</form>
