-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 10:56 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemarketstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_number` int(5) NOT NULL,
  `SID` int(5) NOT NULL,
  `Item_Name` varchar(20) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Unit_Price` float NOT NULL,
  `Discount` float DEFAULT NULL,
  `Category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_number`, `SID`, `Item_Name`, `Description`, `Quantity`, `Unit_Price`, `Discount`, `Category`) VALUES
(5, 6, 'Wireless Mouse', 'Logitech Wireless Mouse', 100, 1000, 0, 'Electronics'),
(6, 6, 'Micro SD card 64GB', 'Micro SD card 64GB', 150, 1000, 0, 'Electronics'),
(8, 6, 'Gaming Console', 'Xbox', 5, 0, 0, 'Electronics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_number`),
  ADD KEY `FK_SItem` (`SID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `Item_number` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `FK_SItem` FOREIGN KEY (`SID`) REFERENCES `seller` (`SID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
