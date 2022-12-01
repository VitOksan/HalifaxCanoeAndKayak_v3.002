-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2022 at 03:38 AM
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
-- Database: `halifaxcanoeandkayak`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginName` varchar(6) NOT NULL,
  `password` varchar(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `loginName`, `password`) VALUES
(1, 'Chris', 'Halifax');

-- --------------------------------------------------------

--
-- Table structure for table `adventures`
--

DROP TABLE IF EXISTS `adventures`;
CREATE TABLE IF NOT EXISTS `adventures` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `heading` varchar(50) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adventures`
--

INSERT INTO `adventures` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(12, 'Somewhere', '2022-12-03', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae ducimus cum totam porro expedita cumque itaque molestiae earum, rem tempore enim laboriosam eaque qui deleniti voluptas. Qui nam labore voluptate vero dolores iusto magni, nihil saepe incidunt atque, cupiditate natus quos accusantium voluptatem est aliquid. Earum nulla illum commodi!'),
(13, 'Halifax', '2023-05-17', 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae ducimus cum totam porro expedita cumque itaque molestiae earum, rem tempore enim laboriosam eaque qui deleniti voluptas. Qui nam labore voluptate vero dolores iusto magni, nihil saepe incidunt atque, cupiditate natus quos accusantium voluptatem est aliquid. Earum nulla illum commodi!'),
(14, 'Sydney', '2023-06-02', 2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo beatae ducimus cum totam porro expedita cumque itaque molestiae earum, rem tempore enim laboriosam eaque qui deleniti voluptas. Qui nam labore voluptate vero dolores iusto magni, nihil saepe incidunt atque, cupiditate natus quos accusantium voluptatem est aliquid. Earum nulla illum commodi!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
