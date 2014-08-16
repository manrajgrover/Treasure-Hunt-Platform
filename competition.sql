-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2014 at 03:25 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `conundra`
--
CREATE DATABASE IF NOT EXISTS `conundra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `conundra`;

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(50) NOT NULL,
  `level0attempts` int(11) NOT NULL,
  `level0answers` text NOT NULL,
  `level1attempts` int(11) NOT NULL,
  `level1answers` text NOT NULL,
  `level2attempts` int(11) NOT NULL,
  `level2answers` text NOT NULL,
  `level3attempts` int(11) NOT NULL,
  `level3answers` text NOT NULL,
  `level4attempts` int(11) NOT NULL,
  `level4answers` text NOT NULL,
  `level5attempts` int(11) NOT NULL,
  `level5answers` text NOT NULL,
  `level6attempts` int(11) NOT NULL,
  `level6answers` text NOT NULL,
  `level7attempts` int(11) NOT NULL,
  `level7answers` text NOT NULL,
  `level8attempts` int(11) NOT NULL,
  `level8answers` text NOT NULL,
  `level9attempts` int(11) NOT NULL,
  `level9answers` text NOT NULL,
  `level10attempts` int(11) NOT NULL,
  `level10answers` text NOT NULL,
  `level11attempts` int(11) NOT NULL,
  `level11answers` text NOT NULL,
  `level12attempts` int(11) NOT NULL,
  `level12answers` text NOT NULL,
  `level13attempts` int(11) NOT NULL,
  `level13answers` text NOT NULL,
  `level14attempts` int(11) NOT NULL,
  `level14answers` text NOT NULL,
  `level15attempts` int(11) NOT NULL,
  `level15answers` text NOT NULL,
  `level16attempts` int(11) NOT NULL,
  `level16answers` text NOT NULL,
  `level17attempts` int(11) NOT NULL,
  `level17answers` text NOT NULL,
  `level18attempts` int(11) NOT NULL,
  `level18answers` text NOT NULL,
  `level19attempts` int(11) NOT NULL,
  `level19answers` text NOT NULL,
  `level20attempts` int(11) NOT NULL,
  `level20answers` text NOT NULL,
  `level21attempts` int(11) NOT NULL,
  `level21answers` text NOT NULL,
  `level22attempts` int(11) NOT NULL,
  `level22answers` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `college` varchar(100) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `timestamp` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
