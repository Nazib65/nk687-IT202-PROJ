<table width="100%" cellpadding="5">
    <?php if (!isset($_SESSION['login'])): ?>
        <tr>
            <td><hr /></td>
        </tr>
    <?php else: ?>
        <td><h3>Welcome, <?php echo $_SESSION['login']; ?></h3></td>
        <tr>
            <td><a href="index.php"><strong>Home</strong></a></td>
        </tr>
        <tr>
            <td><strong>Categories</strong></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listOutdoorClothingCategories"><strong>List Categories</strong></a></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newOutdoorClothingCategory"><strong>Add New Category</strong></a></td>
        </tr>
        <tr>
            <td><strong>Products</strong></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listOutdoorClothingProducts"><strong>List Products</strong></a></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newOutdoorClothingProduct"><strong>Add New Product</strong></a></td>
        </tr>
        <tr>
            <td><a href="index.php?content=logout"><strong>Logout</strong></a></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>
                <form action="index.php" method="post">
                    <label>Search for Product:</label><br>
                    <input type="text" name="OutdoorClothingProductID" size="14" />
                    <input type="submit" value="find" />
                    <input type="hidden" name="content" value="updateOutdoorClothing" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form action="index.php" method="post">
                    <label>Search for Category:</label><br>
                    <input type="text" name="OutdoorClothingCategoryID" size="14" />
                    <input type="submit" value="find" />
                    <input type="hidden" name="content" value="displayOutdoorClothingCategory" />
                </form>
            </td>
        </tr>
    <?php endif; ?>
</table>
