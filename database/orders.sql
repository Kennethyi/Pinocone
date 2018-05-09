-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2018 at 01:13 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pinocone`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `username` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address1` text NOT NULL,
  `address2` text NOT NULL,
  `city` text NOT NULL,
  `statee` text NOT NULL,
  `postcode` mediumint(9) NOT NULL,
  `foodpackage` text NOT NULL,
  `orderid` text NOT NULL,
  `Foodpackp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`username`, `first_name`, `last_name`, `address1`, `address2`, `city`, `statee`, `postcode`, `foodpackage`, `orderid`, `Foodpackp`) VALUES
('ky96', 'Ken', 'Yii', 'dfafadsfaf', 'sdfafadfsafaf', 'George Town', 'Johor', 9856, 'Food Package 1', '1525782308593', ''),
('ky96', 'hththt', 'htsfgs', 'adfaf', 'sfsdfererewrr', 'Petaling Jaya', 'Johor', 8388607, 'Food Package 2', '1525783334105', ''),
('ky96', 'adfad', 'adfffffff', '355545454', '54454554554', 'Kuala Lumpur', 'Perak', 8388607, 'Food Package 3', '1525784177871', 'Buffet style'),
('ky96', 'David', 'Tan', 'adfafads', 'fewfwfw', 'Kuala Lumpur', 'Sarawak', 8388607, 'Food Package 1', '1525784687704', 'Lunch Box style'),
('ky96', 'Jasen', 'Tan', 'fasdfsafasdf', 'dfasfsfsf', 'Petaling Jaya', 'Kelantan', 5345535, 'Food Package 1', '1525784789193', 'Buffet style'),
('ky96', 'hi', 'lhk', 'dfsadfffwt', 'ryyhtryt', 'Kuala Lumpur', 'Perak', 52525, 'Food Package 1', '1525786751431', 'Buffet style'),
('ky96', 'chai', 'muimui', 'dfafdsfa', 'fdafsaf', 'Kota Kinabalu', 'Malacca', 8388607, 'Food Package 1', '1525787563719', 'Buffet style');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
