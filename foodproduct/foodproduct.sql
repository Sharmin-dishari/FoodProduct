-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2018 at 05:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodproduct`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `password`, `contact`, `address`) VALUES
(15103032, 'mimi', '15103032', '01817612003', 'mirpur');

-- --------------------------------------------------------

--
-- Table structure for table `internet_shop`
--

CREATE TABLE `internet_shop` (
  `id` int(6) NOT NULL,
  `img` varchar(32) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `internet_shop`
--

INSERT INTO `internet_shop` (`id`, `img`, `name`, `description`, `price`) VALUES
(27, 'hor.jpg', ' Horlicks', '', 375),
(28, 'ova.jpg', 'Ovalteen', '', 365),
(29, 'cho.jpg', 'Chocolate', '', 89),
(30, 'bis.jpg', 'Romania Biscuit', '', 70);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  `total` varchar(100) NOT NULL,
  `design` varchar(300) NOT NULL,
  `note` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `qty`, `confirmation`, `total`, `design`, `note`) VALUES
(1, ' Horlicks', 2, 'MYIV-A64', '750', 'design/', ''),
(2, 'Ovalteen', 3, 'MYIV-A64', '1095', 'design/', ''),
(3, 'Chocolate', 6, 'MYIV-A64', '534', 'design/', ''),
(4, 'Romania Biscuit', 4, 'IEA-W5R', '280', 'design/', ''),
(5, 'Chocolate', 3, 'IEA-W5R', '267', 'design/', ''),
(6, 'Ovalteen', 2, 'IEA-W5R', '730', 'design/', '');

-- --------------------------------------------------------

--
-- Table structure for table `paymentm`
--

CREATE TABLE `paymentm` (
  `id` int(11) NOT NULL,
  `dmethodid` varchar(30) NOT NULL,
  `methodname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentm`
--

INSERT INTO `paymentm` (`id`, `dmethodid`, `methodname`) VALUES
(1, '1', 'Cash On Delivery'),
(2, '2', 'BDO'),
(3, '2', 'Metro Bank'),
(4, '2', 'Smart Padala'),
(5, '3', 'BDO'),
(6, '3', 'Metro Bank'),
(7, '3', 'Smart Padala');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  `payable` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `confirmation` varchar(20) NOT NULL,
  `delivery` varchar(300) NOT NULL,
  `date` varchar(30) NOT NULL,
  `time` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `delivery_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `firstname`, `lastname`, `city`, `address`, `country`, `email`, `contact`, `payable`, `status`, `confirmation`, `delivery`, `date`, `time`, `payment`, `delivery_type`) VALUES
(16, 'su', 'kk', 'dhaka', 'jkhjgh', '', 'hhjghg@ee.com', 8786757, 731, 'Delivered', 'BRFL-RWN', 'kallo', '$NewDate', '', 'Cash On Delivery', 'Cash On delivery'),
(17, 'jiu', 'yy', 'uttara', 'sector 10', '', 'qq@w.m', 87867, 1461, 'Delivered', 'ENV-TGN', 'uttara', '$NewDate', '', 'Cash On Delivery', 'Cash On delivery'),
(18, 'io', 'gh', 'dfgdgdf', 'ghff', '', 'gfdfgd', 887657, 2379, 'Delivered', 'MYIV-A64', 'dsfdsfr', '$NewDate', '', 'Cash On Delivery', 'Cash On delivery'),
(19, 'rr', 'yy', 'rtyre', 'fgdsfsd', '', 'fghff', 67675657, 1277, 'Pending', 'IEA-W5R', 'sdfswerw', '$NewDate', '', 'Cash On Delivery', 'Cash On delivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `internet_shop`
--
ALTER TABLE `internet_shop`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `img` (`img`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentm`
--
ALTER TABLE `paymentm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `internet_shop`
--
ALTER TABLE `internet_shop`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `paymentm`
--
ALTER TABLE `paymentm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
