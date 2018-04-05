-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 09:41 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_menu`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_menu`
--

CREATE TABLE `food_menu` (
  `food_name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_menu` (`food_name`, `description`) VALUES
('Food Menu 1', 'Spaghetti made from whole grain wheat with peas.'),
('Food Menu 1', 'Spaghetti made from whole grain wheat with peas.'),
('Food Menu 2', 'Fresh strawberries with cucumber for dessert.'),
('Food Menu 3', 'Beef meatball made from real beef with no crushed bone.'),
('Food Menu 4', 'Beef slice made from real beef with chicken slice made from real chicken.'),
('Food Menu 5', 'Biryani rice cooked with pineapple for additional flavour.'),
('Food Menu 6', 'Assorted fresh fruit for desserts.'),
('Food Menu 7', 'Assorted peas and peanuts.'),
('Food Menu 8', 'Homemade salad with bread made from natural ingredients.'),
('Food Menu 9', 'Homemade meat pie made from natural ingredients.'),
('Food Menu 10', 'Freshly prepared scallops and shrimp.'),
('Food Menu 11', 'Assorted pickled fruits.'),
('Food Menu 12', 'Ham made from real pork with eggs, olives and dessert.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
