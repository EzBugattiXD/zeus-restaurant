-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 16, 2022 at 08:30 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semestralka2`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `quantity`) VALUES
(1, 'Spicey meatballs', 11.99, 1),
(2, 'Fruity Dream', 8.99, 1),
(3, 'Chicken Plate', 16.99, 1),
(4, 'Fishy Cloud', 15.99, 1),
(5, 'Vegetarian Heaven', 14.99, 1),
(6, 'American Burger', 13.99, 1),
(7, 'Homemade Pot', 25.99, 1),
(8, 'Pizza Capri', 9.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meal` varchar(70) NOT NULL,
  `price` float(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(90) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `meal`, `price`, `quantity`, `name`, `phone`, `address`) VALUES
(2, 'Fruity Dream', 8.99, 1, 'Robert', '966553322', 'Univerzitna'),
(3, 'Spicey meatballs', 11.99, 1, 'Admin', '0944224722', 'Univerzitna 7'),
(4, 'Vegetarian Heaven', 14.99, 3, 'Andrej', '0988776632', 'Skolska 7'),
(5, 'Spicey meatballs', 11.99, 1, 'Admin', '2', ''),
(6, 'Homemade Pot', 25.99, 1, 'Admin', '0966338799', 'fgh'),
(7, 'Spicey meatballs', 11.99, 1, 'Robert', '0966553322', 'dsg');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

DROP TABLE IF EXISTS `reserve`;
CREATE TABLE IF NOT EXISTS `reserve` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `people` int(11) NOT NULL,
  `date` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `time` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `message` varchar(255) COLLATE utf8_slovak_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `name`, `email`, `phone`, `people`, `date`, `time`, `message`) VALUES
(19, 'Robert', 'mail@mail.com', 988776632, 5, '2022-05-19', '10:05', 'Not entered'),
(17, 'Final', 'Final@Final.com', 966338799, 7, '2022-05-24', '21:23', 'asdfgh'),
(18, 'Admin', 'admin@admin.com', 966553322, 5, '2022-05-20', '10:28', 'Not entered'),
(15, 'Janko', 'Not entered', 966335544, 7, '2022-05-18', '20:00', 'Not entered'),
(14, 'Robert', 'Not entered', 944665588, 6, '2022-05-11', '13:51', 'fgfh'),
(13, 'Adam', 'a@a.sk', 944224722, 6, '2022-05-03', '20:10', 'segtdgfhytjytd'),
(12, 'Test', 't@t.sk', 944224722, 5, '2022-05-18', '15:40', 'Testing 123'),
(10, 'Robert', 'Not entered', 966553321, 4, '2022-05-05', '17:20', 'Not entered');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) COLLATE utf8_slovak_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_slovak_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_slovak_ci NOT NULL,
  `role` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_slovak_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `role`) VALUES
(1, 'Robert', 'Hornik', 'r@r.com', '$argon2id$v=19$m=65536,t=4,p=1$VVJxTWNVYllGdDBEQnVTdQ$5WZMqOMpKFy7VWbBC7f7j0miU0AKH6GEAy74TOFD/nY', 0),
(2, 'Admin', 'Admin', 'admin@admin.com', '$argon2id$v=19$m=65536,t=4,p=1$NEh4aDliZGVmVnRzWFliZA$Ig/bBxzQi70KNCFeDunLpcsOi/ZAoSL5avVGP3IRQ6E', 1),
(3, 'Final', 'Final', 'final@final.com', '$argon2id$v=19$m=65536,t=4,p=1$a0E3VmJkOFBPRXJnZURCVw$nrU729fgzjKjILehYvqQROSIvKTqfABnwDnRj45xcQs', 0),
(4, 'Robert', 'Hornik', 'mail@mail.com', '$argon2id$v=19$m=65536,t=4,p=1$Z254Ti5taEdaTWJnY3Yueg$2VwqCKPeTHuxkBJiGxspcBh87Y5IyDuqI7InJJowWA8', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
