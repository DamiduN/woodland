-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 19, 2020 at 07:35 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(40) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_email`, `item_id`, `price`, `quantity`) VALUES
(1, 'test@test.com', 1, '25500', 1),
(2, 'test@test.com', 1, '25500', 1),
(3, 'test@test.com', 3, '25500', 1),
(4, 'hirusha@123', 1, '25500', 1),
(5, '123', 1, '25500', 1),
(6, 'test@test.com', 7, '12500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(40) DEFAULT NULL,
  `type` varchar(2) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `prices` decimal(10,0) NOT NULL,
  `warennty` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `code`, `type`, `image`, `prices`, `warennty`) VALUES
(1, 'Pirelli 65 Series 185/65 R15 88H ', 't', 'tyre/p1.jpg', '25500', '6-12'),
(2, 'Pirelli 66 Series 185/65 R15 88H ', 't', 'tyre/p1.jpg', '25500', '6-12'),
(3, 'Pirelli 67 Series 185/65 R15 88H ', 't', 'tyre/p1.jpg', '25500', '6-12'),
(4, 'Pirelli 68 Series 185/65 R15 88H ', 't', 'tyre/p1.jpg', '25500', '6-12'),
(5, 'Pirelli 69 Series 185/65 R15 88H ', 't', 'tyre/p1.jpg', '25500', '6-12'),
(6, 'Pirelli 70 Series 185/65 R15 88H ', 't', 'tyre/p1.jpg', '25500', '6-12'),
(7, 'Caltex oil 40', 'o', 'lubricants/1.jpg', '12500', '6-12'),
(8, 'Amaron', 'b', 'battery/1.jpeg', '43500', '6-12');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `psw`) VALUES
('test@test.com', 'test'),
('test@test.com', 'test'),
('test@test.com', 'test'),
('test@test.com', 'test'),
('test@test.com', 'hfhgsjdssajkd'),
('test@test.com', 'sdsfdd'),
('fdsfs', 'sdfds'),
('sgwe', 'twewe'),
('dsfs', 'sdfs'),
('dsfs', 'fsdfs'),
('test@test.com', 'test123'),
('hirusha@123', '123'),
('123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
