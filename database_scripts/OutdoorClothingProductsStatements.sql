-- Name: Nazib Irfan Khan
-- Date: 2024-10-02
-- Course: IT202
-- Section: 001
-- Assignment: Phase02Assignment
-- Email: nk687@njit.edu

CREATE TABLE OutdoorClothingProducts (
    OutdoorClothingProductID INT(11) NOT NULL,
    OutdoorClothingProductCode VARCHAR(15) NOT NULL UNIQUE,
    OutdoorClothingProductName VARCHAR(255) NOT NULL,
    OutdoorClothingDescription TEXT NOT NULL,
    Size VARCHAR(50) NOT NULL,
    Color VARCHAR(50) NOT NULL,
    OutdoorClothingCategoryID INT(11) NOT NULL,
    OutdoorClothingWholesalePrice DECIMAL(10,2) NOT NULL,
    OutdoorClothingListPrice DECIMAL(10,2) NOT NULL,
    DateCreated DATETIME NOT NULL,
    PRIMARY KEY (OutdoorClothingProductID)
);

-- Insert Sample Data into Products
INSERT INTO OutdoorClothingProducts (OutdoorClothingProductID, OutdoorClothingProductCode, OutdoorClothingProductName, OutdoorClothingDescription, Size, Color, OutdoorClothingCategoryID, OutdoorClothingWholesalePrice, OutdoorClothingListPrice, DateCreated) VALUES
(1001, 'WTJ001', 'Waterproof Jackets', 'This heavy-duty waterproof jacket is designed for extreme weather conditions. It features adjustable cuffs and multiple pockets for convenience.', 'M', 'Blue', 105, 70.00, 100.00, NOW()),
(1002, 'HKB002', 'Hiking Boots', 'These durable hiking boots provide excellent support for long treks. The rugged sole ensures good traction on various terrains.', 'L', 'Green', 202, 50.00, 80.00, NOW()),
(1003, 'UVP003', 'UV Protection Hats', 'Soft and adjustable, this hat is perfect for sunny days outdoors. Its UV-blocking fabric keeps you safe from harmful rays.', 'N/A', 'Red', 303, 100.00, 150.00, NOW()),
(1004, 'ING004', 'Insulated Gloves', 'Warm and lightweight, these gloves are perfect for chilly weather. They provide excellent grip without sacrificing comfort.', 'One Size', 'Gray', 404, 40.00, 60.00, NOW()),
(1005, 'FLH005', 'Fleece-Line Hoodies', 'Our thermal fleece-line hoodie offers warmth and comfort during cold days. Ideal for layering or wearing alone.', 'M', 'Black', 505, 200.00, 250.00, NOW()),
(1006, 'LTR006', 'Lightweight Rain Jacket', 'A lightweight rain jacket that provides protection against light showers. Its compact design makes it easy to pack and carry.', 'L', 'Yellow', 105, 30.00, 50.00, NOW()),
(1007, 'PCK007', 'Packable Windbreaker', 'This packable windbreaker is perfect for outdoor activities. It can be easily stored in your backpack when not in use.', 'S', 'Green', 105, 40.00, 70.00, NOW()),
(1008, 'TRR008', 'Trail Running Shoes', 'Lightweight trail running shoes designed for off-road conditions. They offer breathability and quick-drying features.', 'M', 'Black', 202, 60.00, 90.00, NOW()),
(1009, 'WPH009', 'Waterproof Hiking Shoes', 'These waterproof hiking shoes are ideal for wet conditions. They provide comfort and support on any trail.', '10', 'Brown', 202, 70.00, 110.00, NOW()),
(1010, 'WBS010', 'Wide Brim Sun Hat', 'This wide-brim sun hat offers maximum sun protection. Its lightweight material ensures comfort during hot days.', 'One Size', 'Beige', 303, 20.00, 40.00, NOW()),
(1011, 'BSC011', 'Baseball Cap', 'A classic baseball cap made with UV-protective fabric. Perfect for casual outings and outdoor activities.', 'Adjustable', 'Navy', 303, 15.00, 25.00, NOW()),
(1012, 'TCH012', 'Touchscreen Gloves', 'These touchscreen gloves allow you to use your devices without removing them. They keep your hands warm while being practical.', 'M', 'Black', 404, 25.00, 35.00, NOW()),
(1013, 'WSG013', 'Winter Ski Gloves', 'Designed for skiing, these gloves provide warmth and protection from the elements. They are waterproof and insulated for added comfort.', 'L', 'Blue', 404, 50.00, 80.00, NOW()),
(1014, 'ZFJ014', 'Zippered Fleece Jacket', 'This zippered fleece jacket provides additional warmth and style. It’s perfect for casual outings and outdoor adventures.', 'L', 'Gray', 505, 80.00, 120.00, NOW()),
(1015, 'PFL015', 'Pullover Fleece Hoodie', 'A classic pullover fleece hoodie that combines comfort and style. Great for everyday wear during the colder months.', 'S', 'Red', 505, 60.00, 90.00, NOW());

SELECT * FROM OutdoorClothingProducts;

