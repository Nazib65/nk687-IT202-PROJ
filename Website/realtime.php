<?php
include("OutdoorClothingCategory.php");
include("OutdoorClothingProduct.php");

// Fetching total counts and prices for Outdoor Clothing categories and products
$totalCategories = OutdoorClothingCategory::getTotalCategories();
$totalProducts = OutdoorClothingProduct::getTotalProducts();
$listpricetotal = OutdoorClothingProduct::getTotalListPrice();
$wholesalepricetotal = OutdoorClothingProduct::getTotalWholesalePrice();

// Creating the XML document
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);

// Creating and appending category total
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);

// Creating and appending product total
$products = $doc->createElement("products", $totalProducts);
$products = $inventory->appendChild($products);

// Creating and appending list price total
$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);

// Creating and appending wholesale price total
$wholesaleprice = $doc->createElement("wholesalepricetotal", $wholesalepricetotal);
$wholesaleprice = $inventory->appendChild($wholesaleprice);

// Generating the XML output
$output = $doc->saveXML();

// Sending the XML output as a response
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>


