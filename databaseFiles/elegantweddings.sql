-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2013 at 06:04 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elegantweddings`
--
CREATE DATABASE IF NOT EXISTS `elegantweddings` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elegantweddings`;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

DROP TABLE IF EXISTS `album`;
CREATE TABLE IF NOT EXISTS `album` (
  `gal_Field_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Album_Name` varchar(255) NOT NULL,
  PRIMARY KEY (`gal_Field_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`gal_Field_ID`, `Album_Name`) VALUES
(8, 'Allo GuvNah'),
(9, 'Something'),
(10, 'Something2'),
(11, 'Andrea''s Wedding Album'),
(12, 'Album Pi'),
(13, 'New Pi'),
(14, 'Right Big Dink');

-- --------------------------------------------------------

--
-- Table structure for table `album_image_junction`
--

DROP TABLE IF EXISTS `album_image_junction`;
CREATE TABLE IF NOT EXISTS `album_image_junction` (
  `AIJ_album_id` int(11) NOT NULL,
  `AIJ_img_id` int(11) NOT NULL,
  PRIMARY KEY (`AIJ_album_id`,`AIJ_img_id`),
  KEY `AIJ_img_id` (`AIJ_img_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `authnav`
--

DROP TABLE IF EXISTS `authnav`;
CREATE TABLE IF NOT EXISTS `authnav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `authnav`
--

INSERT INTO `authnav` (`id`, `Name`) VALUES
(1, 'Link 1');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `img_Img_ID` int(11) NOT NULL AUTO_INCREMENT,
  `image_file` longblob NOT NULL,
  `Image_Name` varchar(255) NOT NULL,
  `Image_Description` text NOT NULL,
  `img_album_id` int(11) NOT NULL,
  PRIMARY KEY (`img_Img_ID`),
  KEY `img_album_id` (`img_album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_Img_ID`, `image_file`, `Image_Name`, `Image_Description`, `img_album_id`) VALUES
(1, '', '', '', 1),
(2, '', '', '', 0),
(3, '', '', '', 0),
(4, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `mem_name` varchar(255) NOT NULL,
  `mem_email` varchar(255) NOT NULL,
  `mem_SiteName` varchar(255) NOT NULL,
  `mem_password` varchar(255) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mem_id`, `mem_name`, `mem_email`, `mem_SiteName`, `mem_password`) VALUES
(1, 'Tylor Faoro', 'test@test.ca', 'Elegant Weddings & Events', 'fb6e3363a35960e5cc14bd0a1a3f1865');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

DROP TABLE IF EXISTS `navigation`;
CREATE TABLE IF NOT EXISTS `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `navLink` varchar(255) NOT NULL,
  `navName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id`, `navLink`, `navName`) VALUES
(1, 'index.php', 'Home'),
(2, 'index.php?page=story', 'Our Story'),
(3, 'index.php?page=portfolio', 'Portfolio'),
(4, 'index.php?page=testimonials', 'Testimonials'),
(5, 'index.php?page=packages', 'Packages'),
(6, 'index.php?page=contact-us', 'Contact Us');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album_image_junction`
--
ALTER TABLE `album_image_junction`
  ADD CONSTRAINT `album_image_junction_ibfk_1` FOREIGN KEY (`AIJ_img_id`) REFERENCES `images` (`img_Img_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `album_image_junction_ibfk_2` FOREIGN KEY (`AIJ_album_id`) REFERENCES `album` (`gal_Field_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
