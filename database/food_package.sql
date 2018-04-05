-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 02:16 PM
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
-- Table structure for table `food_package`
--

CREATE TABLE `food_package` (
  `food_package` text NOT NULL,
  `description` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_menu`
--

INSERT INTO `food_package` (`food_package`, `description`, `info`) VALUES
('Food Package 1', 'Spaghetti, Peas, Meatball, and Sunkist & Strawberries.', 'Spaghetti coupled with meatball & peas for wonderful dish finished off with sunkist & strawberries as dessert.'),
('Food Package 2', 'Biryani Rice, Beef Meat, Boiled Eggs and Blueberries', 'Biryani Rice coupled with beef meat slice & boiled egg for wonderful dish finished off with blueberries as dessert.'),
('Food Package 3', 'Beef Pie, Garlic Bread Mix, Scallop & Shrimp, and Cranberries', 'Beef Pie, garlic bread mix, scallop & shrimp for variety of taste finished off with cranberries for dessert.'),
('Food Package 4', 'Onigiri Set, Sushi Set, Chicken Drumsticks, and Apples.', 'Onigiri, sushi & chicken drumstick for wonderful meal finished off with apples as dessert.'),
('Food Package 5', 'Beef Satay, Whole Turkey, Assorted Sunkist, and Strawberry Dessert.', 'Whole turkey & beef satay as main dish while assorted sunkist & strawberry flavoured ice-cream as dessert.'),
('Food Package 6', 'Tuna Sandwhich, Boiled Shrimp, Sushi Set, White beans, Red Beans, and Kiwi Fruit.', 'Tuna sandwhich, boiled shrimp, and sushi set as main dish while red beans and white beans as a snack and finish it off with kiwi fruits as dessert.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
