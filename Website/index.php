<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
session_start();
include("OutdoorClothingCategory.php");
include("OutdoorClothingProduct.php");

$storename="Naz";
?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $storename; ?> Inventory Helper</title>
    <link rel="stylesheet" type="text/css" href="ih_styles.css">
   <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
<header>
       <?php include("header.inc.php"); ?>
   </header>
   <section style="height: 525px;">
       <nav style="float: left; height: 100%;">
           <?php include("nav.inc.php"); ?>
       </nav>
       <main>
           <?php
           if (isset($_REQUEST['content'])) {
               include($_REQUEST['content'] . ".inc.php");
           } else {
               include("main.inc.php");
           }
           ?>
       </main>
   </section>
   <footer>
       <?php include("footer.inc.php"); ?>
   </footer>
</body>
</html>