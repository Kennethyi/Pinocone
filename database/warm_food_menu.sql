-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2018 at 06:21 PM
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
-- Table structure for table `warm_food_menu`
--

CREATE TABLE `warm_food_menu` (
  `food_package` text NOT NULL,
  `description` text NOT NULL,
  `info` text NOT NULL,
  `price` text NOT NULL,
  `imgindex` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warm_food_menu`
--

INSERT INTO `warm_food_menu` (`food_package`, `description`, `info`, `price`, `imgindex`) VALUES
('Food Package 1', 'White rice, fried bee hoon, seafood tom yam, roasted chicken', 'Lunch or dinner set is served with seafood tomyam and comes with fried beehoon  and roasted chicken set', 'RM500 per 80 person', 0),
('Food Package 2', 'White rice, mamak style fried noodles, chicken buttermilk, roasted fish with sambal', 'Chicken buttermilk is currently a hotselling meal among Malaysians. Here, in Pinocone Catering, we served the dish together with a set of rice, mamak style fried noodels and roasted fish with it sambal', 'RM500 per 80 person', 4),
('Food Package 3', 'White rice, mixed vegetables, chicken curry, fried chicken wings', 'This lunch or dinner set comes with mixed vegetables, chicken curry and fried chicken', 'RM550 per 50 person', 8),
('Food Package 4', 'nasi lemak, nasi ayam penyet, laksa sarawak, beef satay', '4 sets of most popular dish in Malaysia is package together as one bombastic set', 'RM 1250 per 80 person', 12),
('Food Package 5', 'nasi kerabu, pasta carbonara, salmon with crispy skin and rubarb puree,long beans with eggs and carrots', 'local favourites, nasi kerabu and long beans with eggs and carrots are served in this set alongside with western food sets, salmon with crispy skin and pasta carbonara', 'RM 1260 per 80 person', 16),
('Food Package 6', 'spaghetti bolognaise, fried chicken, salmon with crispy skin and rubarb puree,chicken satay', 'The sweet and savoury taste of spaghetti bolognaise being outstanding together with the juicy taste of fried chicken and chicken satay with its peanut sauce. The salmon flesh is tender when it is eaten with the rubarb puree', 'RM 1260 per 80 person', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
