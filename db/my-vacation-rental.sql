-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2016 at 03:48 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-vacation-rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `navi_items`
--

CREATE TABLE IF NOT EXISTS `navi_items` (
  `page-id` int(2) NOT NULL,
  `item` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navi_items`
--

INSERT INTO `navi_items` (`page-id`, `item`) VALUES
(1, 'HOME'),
(2, 'ABOUT THE PROPERTY'),
(3, 'GALLERY'),
(4, 'LOCATION'),
(5, 'RATES & RESERVATIONS'),
(6, 'CONTACT US');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `navi_items`
--
ALTER TABLE `navi_items`
  ADD PRIMARY KEY (`page-id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
