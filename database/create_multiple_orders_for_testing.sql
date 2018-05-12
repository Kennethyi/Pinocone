-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 02:10 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
('chung', 'aaa', 'bbb', 'ccc', 'ddd', 'Kuala Lumpur', 'Penang', 111, 'Food Package 1', '1526126908044', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style'),
('chung', 'bb', 'cc', 'dd', 'ee', 'Ipoh', 'Terengganu', 22, 'Food Package 2', '1526127040259', 'Buffet style');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
