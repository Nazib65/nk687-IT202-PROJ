-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Nov 16, 2024 at 12:04 AM
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
-- Table structure for table `OutdoorClothingCategories`
--

CREATE TABLE IF NOT EXISTS `OutdoorClothingCategories` (
  `OutdoorClothingCategoryID` int(11) NOT NULL,
  `OutdoorClothingCategoryCode` varchar(10) NOT NULL,
  `OutdoorClothingCategoryName` varchar(255) NOT NULL,
  `AisleNumber` int(11) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `OutdoorClothingCategories`
--

INSERT INTO `OutdoorClothingCategories` (`OutdoorClothingCategoryID`, `OutdoorClothingCategoryCode`, `OutdoorClothingCategoryName`, `AisleNumber`, `DateCreated`) VALUES
(105, 'WTJCKT', 'Waterproof Jackets', 6, '2024-10-18 11:28:56'),
(202, 'HKBTS', 'Hiking Boots', 7, '2024-10-18 11:28:56'),
(303, 'UVPROHAT', 'UV Protection Hats', 8, '2024-10-18 11:28:56'),
(404, 'INSGLO', 'Insulated Gloves', 9, '2024-10-18 11:28:56'),
(505, 'FLH', 'Fleece-lined Hoodies', 10, '2024-10-18 11:28:56'),
(606, 'FLNSHRT', 'Flannel Shirt ', 13, '2024-11-02 02:19:01'),
(707, 'BMBJCKT', 'Bomber Jacket', 11, '2024-11-15 01:23:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OutdoorClothingCategories`
--
ALTER TABLE `OutdoorClothingCategories`
 ADD PRIMARY KEY (`OutdoorClothingCategoryID`), ADD UNIQUE KEY `OutdoorClothingCategoryCode` (`OutdoorClothingCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
