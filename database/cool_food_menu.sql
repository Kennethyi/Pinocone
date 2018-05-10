-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 01:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
-- Table structure for table `cool_food_menu`
--

CREATE TABLE `cool_food_menu` (
  `food_package` text NOT NULL,
  `description` text NOT NULL,
  `info` text NOT NULL,
  `price` text NOT NULL,
  `imgindex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cool_food_menu`
--

INSERT INTO `cool_food_menu` (`food_package`, `description`, `info`, `price`, `imgindex`) VALUES
('Food Package 1', 'egg tuna sandwich, lemon sorbet, papayas, banana cake', 'We serve common cold food like egg tuna sandwich and banana cake as they were never failed to make you embrace how delicious it is regardless of time', 'RM250 per 80 person', 0),
('Food Package 2', 'strawberry and chocolate marble cake,banana cake, fruit pie, cherry sorbet', 'The famous marble cake is currently available in Pinocone Catering. Besides, we also added banana cake, fruit pie and the mouthwashing dish cherry sorbet', 'RM250 per 80 person', 4),
('Food Package 3', 'Mango puding with pistacio, egg tart, kuih seri muka, mini chicken and cheese burger', 'Sweeten you palette with the mango puding and balance the sweetness with pistacio nuts. We also give local desert, kuih seri muka, egg tart and mini cheese and chicken burger', 'RM250 per 50 person', 8),
('Food Package 4', 'curry puff, coleslaws, apples,chicken burrito', 'Mix and match the taste between western and local dishes with our curry puff and chicken burritos. You can enjoy them with the apples and coleslaw too!', 'RM255 per 50 person', 12),
('Food Package 5', 'creme brulee, watermelon popsicle, kuih talam, oranges', 'Try out our creme brulee and watermelon popsicle. It will definitely melts in your mouth. Also, we add local desert, kuih talam and some oranges.', 'RM274 per 50 person', 16),
('Food Package 6', 'vegetables popiah, strawberry chocolate marble cake, watermelons, chicken bacon  pizza', 'The hotselling marble cakes are back! This time it is paired with the legendary vegetables popiah,some watermelons and our brand new chicken bacon pizza!', 'RM274 pr 50 person', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
