-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 01:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_catagory`
--

CREATE TABLE `tb_catagory` (
  `Id` int(11) NOT NULL,
  `dep_Name` varchar(255) NOT NULL,
  `cat_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_catagory`
--

INSERT INTO `tb_catagory` (`Id`, `dep_Name`, `cat_Name`) VALUES
(1, 'fashion', 'Shirt'),
(2, 'fashion', 'Men'),
(3, 'fashion', 'Women'),
(4, 'fashion', 'Boy'),
(5, 'fashion', 'Girl'),
(6, 'fashion', 'Shoes'),
(7, 'fashion', 'Bags'),
(8, 'fashion', 'Watch'),
(9, 'fashion', 'Glass'),
(10, 'Sport', 'Football'),
(11, 'Sport', 'Cricket'),
(12, 'Sport', 'Batmintor'),
(13, 'Sport', 'Cycling'),
(14, 'Sport', 'Exercise'),
(15, 'Sport', 'Basketball'),
(16, 'Electronic', 'TV'),
(17, 'Electronic', 'Mobail'),
(18, 'Electronic', 'Computer'),
(19, 'Electronic', 'Laptop'),
(20, 'Electronic', 'Light'),
(21, 'Electronic', 'Audio'),
(22, 'Electronic', 'Gaming'),
(23, 'Electronic', 'Tablet'),
(24, 'Groceries', 'Breakfast'),
(25, 'Groceries', 'Fruits'),
(26, 'Groceries', 'Meat'),
(27, 'Groceries', 'Dairy & Egg'),
(28, 'Groceries', 'Herbs'),
(29, 'Groceries', 'Candy'),
(30, 'Health & Beauty', 'Skil Care'),
(38, 'Health & Beauty', 'Mens Care'),
(39, 'Health & Beauty', 'Makeup'),
(40, 'Health & Beauty', 'Beauty'),
(41, 'Health & Beauty', 'Bathbody');

-- --------------------------------------------------------

--
-- Table structure for table `tb_department`
--

CREATE TABLE `tb_department` (
  `Id` int(11) NOT NULL,
  `dep_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_department`
--

INSERT INTO `tb_department` (`Id`, `dep_Name`) VALUES
(1, 'Fashion'),
(2, 'Sport'),
(3, 'Electronic'),
(4, 'Groceries'),
(5, 'Health & Beauty'),
(6, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `tb_productinfo`
--

CREATE TABLE `tb_productinfo` (
  `Id` int(11) NOT NULL,
  `ProductTitle` varchar(255) NOT NULL,
  `DepName` varchar(255) NOT NULL,
  `CatName` varchar(255) NOT NULL,
  `Manufacture` varchar(255) NOT NULL,
  `PurchasePrice` int(11) NOT NULL,
  `SalePrice` int(11) NOT NULL,
  `OfferPrice` int(11) NOT NULL,
  `Discription` varchar(255) DEFAULT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_productinfo`
--

INSERT INTO `tb_productinfo` (`Id`, `ProductTitle`, `DepName`, `CatName`, `Manufacture`, `PurchasePrice`, `SalePrice`, `OfferPrice`, `Discription`, `Image`) VALUES
(1, 'asdf', 'Sport', 'Computer', 'Uniliver', 3, 3, 3, '3', '2.3.jpg'),
(2, 'Aaa', 'Electronic', 'Mobail', 'Uniliver', 1000, 170, 165, '0', '7d22506969dc2c7e36a587ac50352f9d78dbab51.webp'),
(3, 'Aaa', 'Fashion', 'Laptop', 'Uniliver', 100, 120, 115, '0', 'asdfasdf.jpg'),
(4, 'AaaA', 'Sport', 'Computer', 'Uniliver', 444, 444, 444, '444', '1581695119.jpg'),
(5, 'AaaA', 'Electronic', 'Computer', 'Uniliver', 1111, 111, 111, '111', 'pngwing.com.png'),
(7, 'asdf', 'Fashion', 'Mobail', 'Uniliver', 2, 2, 2, '2', 'pngwing.com.png'),
(9, 'AaaA', 'Groceries', 'TV', 'Uniliver', 1, 1, 1, '1', 'IMG-.png'),
(10, 'AaaA', 'Groceries', 'TV', 'Uniliver', 1, 1, 1, '1', 'IMG-.png'),
(11, 'AaaA', 'Groceries', 'TV', 'Uniliver', 1, 1, 1, '1', 'IMG-65437673ae2fe9.80644740.png'),
(12, 'AaaA', 'Groceries', 'TV', 'Uniliver', 1, 1, 1, '1', 'IMG-65437685d24868.25319243.jpg'),
(13, 'AaaA', 'Groceries', 'TV', 'Uniliver', 1, 1, 1, '1', 'IMG-654376edeb65d0.11418471.webp'),
(14, 'Mouse', 'Electronic', 'Mobail', 'Uniliver', 33, 33, 33, '33', 'IMG-65439a06cf9d56.11408510.jpg'),
(15, 'asdf', 'Electronic', 'Basketball', 'Uniliver', 3, 3, 3, '3', 'IMG-654f4a5fc2e674.43594640.jpg'),
(16, 'Hunda Dream 110', 'Electronic', 'Computer', 'Uniliver', 95000, 125000, 100000, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Ipsum is simply dummy text of the printing and typesetting.', 'IMG-654f5fedc77189.67989462.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_userinfo`
--

CREATE TABLE `tb_userinfo` (
  `Id` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ShopName` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userinfo`
--

INSERT INTO `tb_userinfo` (`Id`, `fullName`, `userName`, `email`, `phone`, `password`, `ShopName`, `Address`) VALUES
(1, 'Shamim Hossain', 'samim1', 'asdf@gmail.com', 1762134746, 'a', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230'),
(9, 'Shamim Hossain', 'samim', 'samim.hossen5274@gmail.com', 1762134746, 'a', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230'),
(10, 'Indrojit Mondol', 'indrojit123', 'indrojit@gmail.com', 321654987, 'asdf', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230'),
(11, 'mamun hossain', 'mamun', 'mamun@gmail.com', 123456798, 'asdf', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230'),
(12, 'Atikur Islam', 'atik', 'atik@gmail.com', 123456789, 'asdf', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230'),
(13, 'abir Hossain', 'abir', 'abir@gmail.com', 456132798, 'asdf', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230'),
(18, 'kalam mia', 'kalam', 'kalam@gmail.com', 321654987, 'asdf', 'Diva Supper Shop', 'House#32, Road#10, Sector#4, Uttara, Dhaka-1230');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_catagory`
--
ALTER TABLE `tb_catagory`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_department`
--
ALTER TABLE `tb_department`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_productinfo`
--
ALTER TABLE `tb_productinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_catagory`
--
ALTER TABLE `tb_catagory`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tb_department`
--
ALTER TABLE `tb_department`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_productinfo`
--
ALTER TABLE `tb_productinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
