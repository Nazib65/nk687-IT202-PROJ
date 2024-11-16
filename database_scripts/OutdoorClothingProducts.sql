-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 16, 2024 at 12:03 AM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nk687`
--

-- --------------------------------------------------------

--
-- Table structure for table `OutdoorClothingProducts`
--

CREATE TABLE IF NOT EXISTS `OutdoorClothingProducts` (
  `OutdoorClothingProductID` int(11) NOT NULL,
  `OutdoorClothingProductCode` varchar(10) NOT NULL,
  `OutdoorClothingProductName` varchar(255) NOT NULL,
  `OutdoorClothingDescription` text NOT NULL,
  `Size` varchar(50) NOT NULL,
  `Color` varchar(50) NOT NULL,
  `OutdoorClothingCategoryID` int(11) NOT NULL,
  `OutdoorClothingWholesalePrice` decimal(10,2) NOT NULL,
  `OutdoorClothingListPrice` decimal(10,2) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `OutdoorClothingProducts`
--

INSERT INTO `OutdoorClothingProducts` (`OutdoorClothingProductID`, `OutdoorClothingProductCode`, `OutdoorClothingProductName`, `OutdoorClothingDescription`, `Size`, `Color`, `OutdoorClothingCategoryID`, `OutdoorClothingWholesalePrice`, `OutdoorClothingListPrice`, `DateCreated`) VALUES
(1001, 'WTJ001', 'Waterproof Jackets', 'This heavy-duty waterproof jacket is designed for extreme weather conditions. It features adjustable cuffs and multiple pockets for convenience.', 'M', 'Blue', 105, 70.00, 100.00, '2024-10-18 13:56:31'),
(1002, 'HKB002', 'Hiking Boots', 'These durable hiking boots provide excellent support for long treks. The rugged sole ensures good traction on various terrains.', 'L', 'Green', 202, 50.00, 80.00, '2024-10-18 13:56:31'),
(1003, 'UVP003', 'UV Protection Hats', 'Soft and adjustable, this hat is perfect for sunny days outdoors. Its UV-blocking fabric keeps you safe from harmful rays.', 'N/A', 'Red', 303, 100.00, 150.00, '2024-10-18 13:56:31'),
(1004, 'ING004', 'Insulated Gloves', 'Warm and lightweight, these gloves are perfect for chilly weather. They provide excellent grip without sacrificing comfort.', 'One Size', 'Gray', 404, 40.00, 60.00, '2024-10-18 13:56:31'),
(1005, 'FLH005', 'Fleece-Line Hoodies', 'Our thermal fleece-line hoodie offers warmth and comfort during cold days. Ideal for layering or wearing alone.', 'M', 'Black', 505, 200.00, 250.00, '2024-10-18 13:56:31'),
(1006, 'LTR006', 'Lightweight Rain Jacket', 'A lightweight rain jacket that provides protection against light showers. Its compact design makes it easy to pack and carry.', 'L', 'Yellow', 105, 30.00, 50.00, '2024-10-18 13:56:31'),
(1007, 'PCK007', 'Packable Windbreaker', 'This packable windbreaker is perfect for outdoor activities. It can be easily stored in your backpack when not in use.', 'S', 'Green', 105, 40.00, 70.00, '2024-10-18 13:56:31'),
(1008, 'TRR008', 'Trail Running Shoes', 'Lightweight trail running shoes designed for off-road conditions. They offer breathability and quick-drying features.', 'M', 'Black', 202, 60.00, 90.00, '2024-10-18 13:56:31'),
(1009, 'WPH009', 'Waterproof Hiking Shoes', 'These waterproof hiking shoes are ideal for wet conditions. They provide comfort and support on any trail.', '10', 'Brown', 202, 70.00, 110.00, '2024-10-18 13:56:31'),
(1010, 'WBS010', 'Wide Brim Sun Hat', 'This wide-brim sun hat offers maximum sun protection. Its lightweight material ensures comfort during hot days.', 'One Size', 'Beige', 303, 20.00, 40.00, '2024-10-18 13:56:31'),
(1011, 'BSC011', 'Baseball Cap', 'A classic baseball cap made with UV-protective fabric. Perfect for casual outings and outdoor activities.', 'Adjustable', 'Navy', 303, 15.00, 25.00, '2024-10-18 13:56:31'),
(1012, 'TCH012', 'Touchscreen Gloves', 'These touchscreen gloves allow you to use your devices without removing them. They keep your hands warm while being practical.', 'M', 'Black', 404, 25.00, 35.00, '2024-10-18 13:56:31'),
(1013, 'WSG013', 'Winter Ski Gloves', 'Designed for skiing, these gloves provide warmth and protection from the elements. They are waterproof and insulated for added comfort.', 'L', 'Blue', 404, 50.00, 80.00, '2024-10-18 13:56:31'),
(1014, 'ZFJ014', 'Zippered Fleece Jacket', 'This zippered fleece jacket provides additional warmth and style. It’s perfect for casual outings and outdoor adventures.', 'L', 'Gray', 505, 80.00, 120.00, '2024-10-18 13:56:31'),
(1015, 'PFL015', 'Pullover Fleece Hoodie', 'A classic pullover fleece hoodie that combines comfort and style. Great for everyday wear during the colder months.', 'S', 'Red', 505, 60.00, 90.00, '2024-10-18 13:56:31'),
(1016, 'BMBJCKT016', 'Bomber Jacket', 'A bomber jacket is a timeless fashion staple that effortlessly blends style, comfort, and versatility. Originally designed for pilots, this jacket has evolved into a must-have for modern wardrobes.', 'M', '0', 607, 78.00, 99.00, '2024-11-15 01:43:37'),
(1017, 'FLNL016', 'Flannel Shirt ', 'Good to wear ', 'M', '0', 607, 44.00, 66.00, '2024-11-02 02:58:51'),
(1018, 'FLNL017', 'Flannel S', 'Warm to wear ', 'M', '0', 608, 45.00, 65.00, '2024-11-02 03:01:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OutdoorClothingProducts`
--
ALTER TABLE `OutdoorClothingProducts`
 ADD PRIMARY KEY (`OutdoorClothingProductID`), ADD UNIQUE KEY `OutdoorClothingProductCode` (`OutdoorClothingProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
