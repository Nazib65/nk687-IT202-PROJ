// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
<?php
class OutdoorClothingProduct {
    public $OutdoorClothingProductID;
    public $OutdoorClothingProductCode;
    public $OutdoorClothingProductName;
    public $OutdoorClothingDescription;
    public $Size;  // New property
    public $Color;  // New property
    public $OutdoorClothingCategoryID;
    public $OutdoorClothingWholesalePrice;
    public $OutdoorClothingListPrice;
    public $DateCreated;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function save() {
        $sql = "INSERT INTO OutdoorClothingProducts (OutdoorClothingProductID, OutdoorClothingProductCode, OutdoorClothingProductName, OutdoorClothingDescription, Size, Color, OutdoorClothingCategoryID, OutdoorClothingWholesalePrice, OutdoorClothingListPrice, DateCreated)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt === false) {
            die("Error preparing the statement: " . $this->conn->error);
        }
    
        $stmt->bind_param('issssiiid', 
            $this->OutdoorClothingProductID, 
            $this->OutdoorClothingProductCode, 
            $this->OutdoorClothingProductName, 
            $this->OutdoorClothingDescription, 
            $this->Size, 
            $this->Color, 
            $this->OutdoorClothingCategoryID, 
            $this->OutdoorClothingWholesalePrice, 
            $this->OutdoorClothingListPrice
        );
        return $stmt->execute();
    }
    
    public function getAll() {
        $sql = "SELECT 
                    OutdoorClothingProductID, 
                    OutdoorClothingProductCode, 
                    OutdoorClothingProductName, 
                    OutdoorClothingDescription, 
                    Size, 
                    Color, 
                    OutdoorClothingCategoryID, 
                    OutdoorClothingWholesalePrice, 
                    OutdoorClothingListPrice 
                FROM 
                    OutdoorClothingProducts";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function find($id) {
        $sql = "SELECT * FROM OutdoorClothingProducts WHERE OutdoorClothingProductID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object();
    }

    public function update() {
        $sql = "UPDATE OutdoorClothingProducts SET OutdoorClothingProductCode = ?, OutdoorClothingProductName = ?, OutdoorClothingDescription = ?, Size = ?, Color = ?, OutdoorClothingCategoryID = ?, OutdoorClothingWholesalePrice = ?, OutdoorClothingListPrice = ? WHERE OutdoorClothingProductID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('sssssiiii', $this->OutdoorClothingProductCode, $this->OutdoorClothingProductName, $this->OutdoorClothingDescription, $this->Size, $this->Color, $this->OutdoorClothingCategoryID, $this->OutdoorClothingWholesalePrice, $this->OutdoorClothingListPrice, $this->OutdoorClothingProductID);
        return $stmt->execute();
    }

    public function delete() {
        $sql = "DELETE FROM OutdoorClothingProducts WHERE OutdoorClothingProductID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $this->OutdoorClothingProductID);
        return $stmt->execute();
    }
}
?>
