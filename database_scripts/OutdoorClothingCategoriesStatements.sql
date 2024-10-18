CREATE TABLE OutdoorClothingCategories (
    OutdoorClothingCategoryID INT(11) NOT NULL,
    OutdoorClothingCategoryCode VARCHAR(10) NOT NULL UNIQUE,
    OutdoorClothingCategoryName VARCHAR(255) NOT NULL,
    AisleNumber INT(11) NOT NULL,
    DateCreated DATETIME NOT NULL,
    PRIMARY KEY (OutdoorClothingCategoryID)
);
-- Insert Sample Data into Categories
INSERT INTO OutdoorClothingCategories
(OutdoorClothingCategoryID, OutdoorClothingCategoryCode, OutdoorClothingCategoryName, AisleNumber, DateCreated)
VALUES
(105, 'WTJCKT', 'Waterproof Jackets', 6, NOW()),
(202, 'HKBTS', 'Hiking Boots', 7,NOW()),
(303, 'UVPROHAT', 'UV Protection Hats',8, NOW()),
(404, 'INSGLO', 'Insulated Gloves', 9, NOW()),
(505, 'FLH', 'Fleece-lined Hoodies', 10, NOW());

SELECT * FROM OutdoorClothingCategories;

SELECT * FROM OutdoorClothingCategories WHERE OutdoorClothingCategoryID IN (100, 200, 300, 400, 500);




