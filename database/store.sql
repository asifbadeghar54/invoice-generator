-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 10:04 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `authId` bigint(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`authId`, `username`, `password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `bId` bigint(11) NOT NULL,
  `bImage` text DEFAULT NULL,
  `bDescription` text DEFAULT NULL,
  `bTitle` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`bId`, `bImage`, `bDescription`, `bTitle`) VALUES
(5, 'http://localhost/unixcomputers/uploads/unix/banners/5.jpg', 'Computers Repair', 'our build own software company'),
(6, 'http://localhost/unixcomputers/uploads/unix/banners/6.png', 'banner details 123', 'make a work easy 121');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cId` bigint(11) NOT NULL,
  `cName` varchar(100) DEFAULT NULL,
  `divisible` int(1) DEFAULT NULL,
  `approved` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cId`, `cName`, `divisible`, `approved`) VALUES
(1, 'Electronics', 1, 1),
(2, 'Service', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `featureimages`
--

CREATE TABLE `featureimages` (
  `featureId` bigint(20) NOT NULL,
  `imageId` bigint(20) NOT NULL,
  `featureImage` text DEFAULT NULL,
  `productId` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featureimages`
--

INSERT INTO `featureimages` (`featureId`, `imageId`, `featureImage`, `productId`) VALUES
(1, 285481, 'http://localhost/unixcomputers/uploads/unix/featureImages/285481.png', 69),
(2, 773508, 'http://localhost/unixcomputers/uploads/unix/featureImages/773508.png', 69),
(3, 157605, 'http://localhost/unixcomputers/uploads/unix/featureImages/157605.png', 69),
(6, 771780, 'http://localhost/unixcomputers/uploads/unix/featureImages/771780.png', 70),
(7, 921603, 'http://localhost/unixcomputers/uploads/unix/featureImages/921603.png', 70),
(8, 722296, 'http://localhost/unixcomputers/uploads/unix/featureImages/722296.png', 70);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pId` bigint(11) NOT NULL,
  `pStoreId` bigint(11) DEFAULT NULL,
  `pName` varchar(100) DEFAULT NULL,
  `pCategory` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `pImage` varchar(100) DEFAULT NULL,
  `discount` int(5) DEFAULT NULL,
  `pVisible` int(1) DEFAULT NULL,
  `stock` int(1) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pId`, `pStoreId`, `pName`, `pCategory`, `description`, `price`, `pImage`, `discount`, `pVisible`, `stock`, `created_date`) VALUES
(1, 1, 'Mouse', '1', 'ZEBRONICS ZEB-TRANSFORMER-M Wired Optical Gaming Mouse  (USB 3.0, Black)', 375.00, 'http://localhost/unixcomputers/uploads/unix/1.jpeg', 0, 1, 1, '2022-08-31 16:06:55'),
(2, 1, 'Keyboard', '1', 'ZEBRONICS ZEB-TRANSFORMER-M Wired Optical Gaming Mouse  (USB 3.0, Black)', 900.00, 'http://localhost/unixcomputers/uploads/unix/2.jpeg', 0, 1, 1, '2022-08-30 00:00:00'),
(3, 1, 'Earphones', '1', 'boAt Bassheads 100 in Ear Wired Earphones with Mic(Black)', 375.00, 'http://localhost/unixcomputers/uploads/unix/3.jpeg', 0, 1, 1, '2022-08-30 00:00:00'),
(4, 1, 'Earphones', '1', 'Oneplus Bullets Z2 Bluetooth Wireless in Ear Earphones with Mic,', 375.00, 'http://localhost/unixcomputers/uploads/unix/4.jpeg', 0, 1, 1, '2022-08-30 00:00:00'),
(5, 1, 'Earphones', '1', 'boAt Bassheads 900 Wired On Ear Headphones with Mic (Carbon Black)', 849.00, 'http://localhost/unixcomputers/uploads/unix/5.jpeg', 0, 1, 1, '2022-08-30 00:00:00'),
(6, 1, 'PowerBuds', '1', 'truke Buds S1 with Quad Mic ENC|6-8 hours Playtime|Sliding Design | AAC codec Bluetooth Headset  (Blue, True Wireless)', 1299.00, 'http://localhost/unixcomputers/uploads/unix/5.jpeg', 0, 1, 1, '2022-08-30 00:00:00'),
(69, 1, 'Adapter Data card', '2', 'BUNAS Low Cost 2.4GHz MTK7601Mini Wifi Dongle 150Mbps Wireless Usb Adapter Data Card  (Black)', 399.00, 'http://localhost/unixcomputers/uploads/unix/69.png', 0, 1, 1, '2022-09-01 13:46:13'),
(70, 1, 'EVM sata 256 GB Desktop', '2', 'EVM sata 256 GB Desktop', 1684.00, 'http://localhost/unixcomputers/uploads/unix/70.png', 0, 1, 1, '2022-09-01 16:45:44');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `sId` bigint(11) NOT NULL,
  `subDomain` varchar(50) DEFAULT NULL,
  `number` bigint(11) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `storeName` varchar(50) DEFAULT NULL,
  `storeIcon` varchar(50) DEFAULT NULL,
  `storeLogo` varchar(100) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  `approve` int(1) DEFAULT NULL,
  `createdDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sCId` bigint(11) NOT NULL,
  `sName` varchar(100) DEFAULT NULL,
  `parentCategory` bigint(11) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  `approved` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sCId`, `sName`, `parentCategory`, `visible`, `approved`) VALUES
(1, 'Laptops', 1, 1, 1),
(2, 'Laptop   Accessories', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`authId`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `featureimages`
--
ALTER TABLE `featureimages`
  ADD PRIMARY KEY (`featureId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sCId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `authId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `bId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `featureimages`
--
ALTER TABLE `featureimages`
  MODIFY `featureId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `sId` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sCId` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;