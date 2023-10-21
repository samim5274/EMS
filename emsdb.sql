-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 02:02 PM
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
-- Table structure for table `tb_userinfo`
--

CREATE TABLE `tb_userinfo` (
  `Id` int(11) NOT NULL,
  `fullName` varchar(250) NOT NULL,
  `userName` varchar(40) NOT NULL,
  `email` varchar(90) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_userinfo`
--

INSERT INTO `tb_userinfo` (`Id`, `fullName`, `userName`, `email`, `phone`, `password`) VALUES
(1, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf'),
(2, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf'),
(3, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf'),
(4, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf'),
(5, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf'),
(6, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf'),
(7, 'Shamim Hossain', 'samim', 'banglarcele1122@gmail.com', 1762134746, 'asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_userinfo`
--
ALTER TABLE `tb_userinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
