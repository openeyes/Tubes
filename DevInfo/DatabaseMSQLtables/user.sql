-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 30, 2011 at 04:27 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `title` enum('Dr','Miss','Mr','Prof') DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `profile` text,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `title`, `first_name`, `last_name`, `profile`, `email`) VALUES
(1, 'BartonK', '58e3395e58e621fb7ca5de18db13a81a', 'Dr', 'Keith', 'Barton', 'Principal Investigator', 'keithbarton@keithbarton.com'),
(2, 'Userg', 'ee11cbb19052e40b07aac0ca060c23ee', 'Dr', 'General', 'User', '', 'tubeuser@tube.com'),
(3, 'clarkej', 'da8817b01acc833d91408281f84cb470', 'Dr', 'Clark', 'Jonathan', '', 'clarkj@test.com'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Dr', 'Ernest', 'Elikem', '', 'admin@test.com'),
(5, 'strouthidisn', 'd32b0b1e0607d224e9d76d810394a53c', 'Dr', 'Nicolas', 'Strouthidis', '', 'strouthidisn@test.com'),
(6, 'puertasr', '7248adcf6b44eccc436946f9bbc07269', 'Dr', 'Puertas', 'Renata', '', 'puertasr@test.com'),
(7, 'elkarmoutya', '5ac943b61d2689fd0fb8db1ef6643bf4', 'Prof', 'Ahmed', 'Elkarmouty', '', 'ea@tube.com'),
(8, 'karamirise', 'cf483d3542ccd0f34bfd6c2ae0d1097c', 'Dr', 'Themis', 'Karamiris', '', 'ks@test.com'),
(9, 'raip', 'b931d19d003ecc794ff4df2874733628', 'Dr', 'Poornima', 'Rai', '', 'raip@tube.com');
