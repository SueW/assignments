-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 28, 2012 at 06:47 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wood0022`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `release_date` date NOT NULL,
  `director` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `motion_picture_rating` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `release_date`, `director`, `motion_picture_rating`) VALUES
(1, 'Pretty in Pink', '1986-02-28', 'Howard Deutch', 'PG-13'),
(2, 'The Breakfast Club', '1985-02-15', 'John Hughes', 'R'),
(3, 'Sixteen Candles', '1984-05-04', 'John Hughes', 'PG'),
(4, 'Ferris Bueller''s Day Off', '1986-06-11', 'John Hughes', 'PG-13'),
(5, 'St. Elmo''s Fire', '1985-06-28', 'Joel Schumacher', 'R');
