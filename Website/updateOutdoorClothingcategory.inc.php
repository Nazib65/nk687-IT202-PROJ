<style>
   form[name="OutdoorClothingCategory"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="OutdoorClothingCategory"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="OutdoorClothingCategory"] input[type="text"] {
       width: 100%;
   }
   form[name="OutdoorClothingCategory"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>

<?php
$OutdoorClothingCategoryID = $_POST['OutdoorClothingCategoryID'];
$category = OutdoorClothingCategory::find($OutdoorClothingCategoryID);
if ($category) {
?>
   <h2>Update Category <?php echo $OutdoorClothingCategoryID; ?></h2><br>
   <form name="OutdoorClothingCategory" action="index.php" method="post">
       <label for="OutdoorClothingCategoryCode">Category Code:</label>
       <input type="text" name="OutdoorClothingCategoryCode" id="OutdoorClothingCategoryCode" value="<?php echo $category->OutdoorClothingCategoryCode; ?>">
       <label for="OutdoorClothingCategoryName">Category Name:</label>
       <input type="text" name="OutdoorClothingCategoryName" id="OutdoorClothingCategoryName" value="<?php echo $category->OutdoorClothingCategoryName; ?>">
       <input type="submit" name="answer" value="Update Category">
       <input type="submit" name="answer" value="Cancel">
       <input type="hidden" name="OutdoorClothingCategoryID" value="<?php echo $OutdoorClothingCategoryID; ?>">
       <input type="hidden" name="content" value="changeOutdoorClothingcategory">
   </form>
<?php
} else {
?>
   <h2>Sorry, category <?php echo $OutdoorClothingCategoryID; ?> not found</h2>
<?php
}
?>

<script language="javascript">
   document.OutdoorClothingCategory.OutdoorClothingCategoryCode.focus();
   document.OutdoorClothingCategory.OutdoorClothingCategoryCode.select();
</script>
