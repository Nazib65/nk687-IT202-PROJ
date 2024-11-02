// Name: Nazib Irfan Khan
// Date: 2024-10-02
// Course: IT202
// Section: 001
// Assignment: Phase03Assigment
// Email: nk687@njit.edu
<?php
class OutdoorClothingCategory {
    public $OutdoorClothingCategoryID;
    public $OutdoorClothingCategoryCode;
    public $OutdoorClothingCategoryName;
    public $AisleNumber; // New property
    public $DateCreated;

    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function save() {
        $sql = "INSERT INTO OutdoorClothingCategories (OutdoorClothingCategoryID, OutdoorClothingCategoryCode, OutdoorClothingCategoryName, AisleNumber, DateCreated)
                VALUES (?, ?, ?, ?, NOW())";
        $stmt = $this->conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing the statement: " . $this->conn->error);
        }

        $stmt->bind_param('issi', $this->OutdoorClothingCategoryID, $this->OutdoorClothingCategoryCode, $this->OutdoorClothingCategoryName, $this->AisleNumber);
        return $stmt->execute();
    }

    public function getAll() {
        $sql = "SELECT OutdoorClothingCategoryID, OutdoorClothingCategoryCode, OutdoorClothingCategoryName, AisleNumber FROM OutdoorClothingCategories";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id) {
        $sql = "SELECT * FROM OutdoorClothingCategories WHERE OutdoorClothingCategoryID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update() {
        $sql = "UPDATE OutdoorClothingCategories SET OutdoorClothingCategoryCode = ?, OutdoorClothingCategoryName = ?, AisleNumber = ? WHERE OutdoorClothingCategoryID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('ssii', $this->OutdoorClothingCategoryCode, $this->OutdoorClothingCategoryName, $this->AisleNumber, $this->OutdoorClothingCategoryID);
        return $stmt->execute();
    }

    public function delete() {
        $sql = "DELETE FROM OutdoorClothingCategories WHERE OutdoorClothingCategoryID = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $this->OutdoorClothingCategoryID);
        return $stmt->execute();
    }
}
?>
