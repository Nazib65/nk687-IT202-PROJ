
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
<script language="javascript">
   function listbox_dblclick() {
       document.OutdoorClothingCategory.displayOutdoorClothingCategory.click()
   }

   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) OutdoorClothingCategory.action = "index.php?content=displayOutdoorClothingCategory";
           if (target == 1) OutdoorClothingCategory.action = "index.php?content=removeOutdoorClothingCategory";
           if (target == 2) OutdoorClothingCategory.action = "index.php?content=updateOutdoorClothingCategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>
<form name="OutdoorClothingCategory" method="post">
   <select ondblclick="listbox_dblclick()" name="OutdoorClothingCategoryID" size="20">
       <?php
   //    include("category.php");
       $categories = OutdoorClothingCategory::retrieve();
       foreach ($categories as $category) {
           $OutdoorClothingCategoryID = $category->OutdoorClothingCategoryID;
           $name = $OutdoorClothingCategoryID . " - " . $category->OutdoorClothingCategoryCode . ", " . $category->OutdoorClothingCategoryName;
           echo "<option value=\"$OutdoorClothingCategoryID\">$name</option>\n";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displayOutdoorClothingCategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="removeOutdoorClothingCategory" value="Remove Category">
   <input type="submit" onClick="button_click(2)" name="updateOutdoorClothingCategory" value="Update Category">
</form>
