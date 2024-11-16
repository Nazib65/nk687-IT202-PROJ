<table width="100%" cellpadding="5">
    <?php if (!isset($_SESSION['login'])): ?>
        <tr>
            <td> 
                 <!-- <hr /> -->
            </td>
        </tr>
    <?php else: ?>
        <td><h3>Welcome, <?php echo $_SESSION['login']; ?></h3></td>
        <tr>
            <td><img src="images/home.png" alt="Home Icon" width="12" height="12">&nbsp;
            <a href="index.php"><strong>Home</strong></a></td>
        </tr>
        <tr>
            <td><img src="images/categories.png" alt="Categories Icon" width="12" height="12">&nbsp;
            <strong>Categories</strong></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listOutdoorClothingCategories"><strong>List Categories</strong></a></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newOutdoorClothingCategory"><strong>Add New Category</strong></a></td>
        </tr>
        <tr>
            <td><img src="images/items.png" alt="Items Icon" width="12" height="12">&nbsp;
            <strong>Products</strong></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listOutdoorClothingProducts"><strong>List Products</strong></a></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newOutdoorClothingProduct"><strong>Add New Product</strong></a></td>
        </tr>
        <tr>
            <td><a href="index.php?content=logout">
            <img src="images/logout.png" alt="Logout Icon" width="12" height="12"></a>&nbsp;
            <a href="index.php?content=logout"><strong>Logout</strong></a></td>
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
