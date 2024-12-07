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

class OutdoorClothingCategory {
    public $OutdoorClothingCategoryID;
    public $OutdoorClothingCategoryCode;
    public $OutdoorClothingCategoryName;
    public $AisleNumber;
    public $DateCreated;

    // Constructor
    public function __construct($OutdoorClothingCategoryID, $OutdoorClothingCategoryCode, $OutdoorClothingCategoryName, $AisleNumber, $DateCreated = null) {
        $this->OutdoorClothingCategoryID = $OutdoorClothingCategoryID;
        $this->OutdoorClothingCategoryCode = $OutdoorClothingCategoryCode;
        $this->OutdoorClothingCategoryName = $OutdoorClothingCategoryName;
        $this->AisleNumber = $AisleNumber;
        $this->DateCreated = $DateCreated ?? date('Y-m-d H:i:s');
    }

    // Save new category
    public function save() {
        $db = getDB();
        $query = "INSERT INTO OutdoorClothingCategories (OutdoorClothingCategoryID, OutdoorClothingCategoryCode, OutdoorClothingCategoryName, AisleNumber, DateCreated) 
                  VALUES (?, ?, ?, ?, ?)";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "issss",
            $this->OutdoorClothingCategoryID,
            $this->OutdoorClothingCategoryCode,
            $this->OutdoorClothingCategoryName,
            $this->AisleNumber,
            $this->DateCreated
        );
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    // Retrieve all categories
    public static function retrieve() {
        $db = getDB();
        $query = "SELECT * FROM OutdoorClothingCategories";
        $result = $db->query($query);

        if ($result->num_rows > 0) {
            $categories = [];
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $category = new OutdoorClothingCategory(
                    $row['OutdoorClothingCategoryID'],
                    $row['OutdoorClothingCategoryCode'],
                    $row['OutdoorClothingCategoryName'],
                    $row['AisleNumber'],
                    $row['DateCreated']
                );
                $categories[] = $category;
            }
            $db->close();
            return $categories;
        } else {
            $db->close();
            return null;
        }
    }

    // Find a category by ID
    public static function find($OutdoorClothingCategoryID) {
        $db = getDB();
        $query = "SELECT * FROM OutdoorClothingCategories WHERE OutdoorClothingCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $OutdoorClothingCategoryID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);

        if ($row) {
            $category = new OutdoorClothingCategory(
                $row['OutdoorClothingCategoryID'],
                $row['OutdoorClothingCategoryCode'],
                $row['OutdoorClothingCategoryName'],
                $row['AisleNumber'],
                $row['DateCreated']
            );
            $stmt->close();
            $db->close();
            return $category;
        } else {
            $stmt->close();
            $db->close();
            return null;
        }
    }

    // Update category details
    public function update() {
        $db = getDB();
        $query = "UPDATE OutdoorClothingCategories 
                  SET OutdoorClothingCategoryCode = ?, OutdoorClothingCategoryName = ?, AisleNumber = ? 
                  WHERE OutdoorClothingCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param(
            "ssii",
            $this->OutdoorClothingCategoryCode,
            $this->OutdoorClothingCategoryName,
            $this->AisleNumber,
            $this->OutdoorClothingCategoryID
        );
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    // Delete a category
    public function remove() {
        $db = getDB();
        $query = "DELETE FROM OutdoorClothingCategories WHERE OutdoorClothingCategoryID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->OutdoorClothingCategoryID);
        $result = $stmt->execute();
        $stmt->close();
        $db->close();
        return $result;
    }

    // Get total categories count
    public static function getTotalCategories() {
        $db = getDB();
        $query = "SELECT COUNT(OutdoorClothingCategoryID) AS total FROM OutdoorClothingCategories";
        $result = $db->query($query);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $db->close();
        return $row ? $row['total'] : null;
    }

    // Convert object to string
    public function __toString() {
        return "Category ID: $this->OutdoorClothingCategoryID, Name: $this->OutdoorClothingCategoryName, Aisle: $this->AisleNumber";
    }
}
?>
