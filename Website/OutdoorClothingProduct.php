<?
// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
?>
<?php
require_once("database.php");

class OutdoorClothingProduct {
    public $OutdoorClothingProductID;
    public $OutdoorClothingProductCode;
    public $OutdoorClothingProductName;
    public $OutdoorClothingDescription;
    public $Size;
    public $Color;
    public $OutdoorClothingCategoryID;
    public $OutdoorClothingWholesalePrice;
    public $OutdoorClothingListPrice;
    public $DateCreated;

    function __construct(
        $OutdoorClothingProductID,
        $OutdoorClothingProductCode,
        $OutdoorClothingProductName,
        $OutdoorClothingDescription,
        $Size,
        $Color,
        $OutdoorClothingCategoryID,
        $OutdoorClothingWholesalePrice,
        $OutdoorClothingListPrice
    ) {
        $this->OutdoorClothingProductID = $OutdoorClothingProductID;
        $this->OutdoorClothingProductCode = $OutdoorClothingProductCode;
        $this->OutdoorClothingProductName = $OutdoorClothingProductName;
        $this->OutdoorClothingDescription = $OutdoorClothingDescription;
        $this->Size = $Size;
        $this->Color = $Color;
        $this->OutdoorClothingCategoryID = $OutdoorClothingCategoryID;
        $this->OutdoorClothingWholesalePrice = $OutdoorClothingWholesalePrice;
        $this->OutdoorClothingListPrice = $OutdoorClothingListPrice;
        $this->DateCreated = date('Y-m-d H:i:s');
    }

    static function getTotalProducts()
    {
        $db = getDB();
        $query = "SELECT count(OutdoorClothingProductID) FROM OutdoorClothingProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }

    static function getTotalWholesalePrice()
    {
        $db = getDB();
        $query = "SELECT sum(OutdoorClothingWholesalePrice) FROM OutdoorClothingProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }

    static function getTotalListPrice()
    {
        $db = getDB();
        $query = "SELECT sum(OutdoorClothingListPrice) FROM OutdoorClothingProducts";
        $result = $db->query($query);
        $row = $result->fetch_array();
        if ($row) {
            return $row[0];
        } else {
            return NULL;
        }
    }

    function save()
    {
        $db = getDB();
        $query = "INSERT INTO OutdoorClothingProducts (OutdoorClothingProductID, OutdoorClothingProductCode, OutdoorClothingProductName, OutdoorClothingDescription, Size, Color, OutdoorClothingCategoryID, OutdoorClothingWholesalePrice, OutdoorClothingListPrice, DateCreated) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param("issssiidss", 
            $this->OutdoorClothingProductID,
            $this->OutdoorClothingProductCode,
            $this->OutdoorClothingProductName,
            $this->OutdoorClothingDescription,
            $this->Size,
            $this->Color,
            $this->OutdoorClothingCategoryID,
            $this->OutdoorClothingWholesalePrice,
            $this->OutdoorClothingListPrice,
            $this->DateCreated
        );
        try {
            $result = $stmt->execute();
            return $result;
        } catch (mysqli_sql_exception $e) {
            return "We encountered an Error: " . $e->getMessage();
        } finally {
            $stmt->close();
            $db->close();
        }
    }

    static function retrieve()
    {
        $db = getDB();
        $query = "SELECT * FROM OutdoorClothingProducts";
        $result = $db->query($query);

        if (mysqli_num_rows($result) > 0) {
            $products = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $product = new OutdoorClothingProduct(
                    $row['OutdoorClothingProductID'],
                    $row['OutdoorClothingProductCode'],
                    $row['OutdoorClothingProductName'],
                    $row['OutdoorClothingDescription'],
                    $row['Size'],
                    $row['Color'],
                    $row['OutdoorClothingCategoryID'],
                    $row['OutdoorClothingWholesalePrice'],
                    $row['OutdoorClothingListPrice']
                );
                array_push($products, $product);
            }
            $db->close();
            return $products;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function find($OutdoorClothingProductID)
    {
        $db = getDB();
        $query = "SELECT * FROM OutdoorClothingProducts WHERE OutdoorClothingProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $OutdoorClothingProductID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $product = new OutdoorClothingProduct(
                $row['OutdoorClothingProductID'],
                $row['OutdoorClothingProductCode'],
                $row['OutdoorClothingProductName'],
                $row['OutdoorClothingDescription'],
                $row['Size'],
                $row['Color'],
                $row['OutdoorClothingCategoryID'],
                $row['OutdoorClothingWholesalePrice'],
                $row['OutdoorClothingListPrice']
            );
            $db->close();
            return $product;
        } else {
            $db->close();
            return NULL;
        }
    }

    function update()
    {
        $db = getDB();
        $query = "UPDATE OutdoorClothingProducts SET OutdoorClothingProductCode = ?, OutdoorClothingProductName = ?, OutdoorClothingDescription = ?, Size = ?, Color = ?, OutdoorClothingCategoryID = ?, OutdoorClothingWholesalePrice = ?, OutdoorClothingListPrice = ? WHERE OutdoorClothingProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "sssssiiii", 
            $this->OutdoorClothingProductCode,
            $this->OutdoorClothingProductName,
            $this->OutdoorClothingDescription,
            $this->Size,
            $this->Color,
            $this->OutdoorClothingCategoryID,
            $this->OutdoorClothingWholesalePrice,
            $this->OutdoorClothingListPrice,
            $this->OutdoorClothingProductID
        );
        try {
            $result = $stmt->execute();
            return $result;
        } catch (mysqli_sql_exception $e) {
            return "There is an Error: " . $e->getMessage();
        } finally {
            $stmt->close();
            $db->close();
        }
    }

    function remove()
    {
        $db = getDB();
        $query = "DELETE FROM OutdoorClothingProducts WHERE OutdoorClothingProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->OutdoorClothingProductID);
        $result = $stmt->execute();
        $db->close();
        return $result;
    }
}
?>
