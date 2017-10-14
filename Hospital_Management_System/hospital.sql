-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 09:26 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `apt_date` varchar(255) NOT NULL,
  `serial_no` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `patient`, `doctor`, `category`, `apt_date`, `serial_no`, `unique_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(6, 'rahim', 'Mr.sohag', 'Neurology', '2017-08-03', ' 2', '55191f1fe7e8dec84c719f953fb4f6a7', '2017-10-11 02:16:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'rahima', 'Mrs.Riya', 'Eye', '2017-08-11', ' 1', '395a3141482dde2e15e2601cef033872', '2017-10-11 02:17:08', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `address`, `contact`, `email`, `gender`, `image`, `category`, `unique_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'Mr.sohag', 'Dhaka', '0111111111', 'ccc@mail.com', 'Male', '381377e879.jpg', 'Neurology', 2147483647, '2017-10-07 02:55:29', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Mrs.Riya', 'Feni', '03443444547', 'vv@mail.com', 'Female', '0421ef3fe1.jpg', 'Eye', 421, '2017-10-07 02:56:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Mr.masud', 'comilla', '01899999999', 'bb@gmail.com', 'Male', 'af70d0e79b.jpg', 'Medicine', 732, '2017-10-07 01:17:05', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `labortorist`
--

CREATE TABLE IF NOT EXISTS `labortorist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `labortorist`
--

INSERT INTO `labortorist` (`id`, `name`, `address`, `contact`, `email`, `gender`, `image`, `unique_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(1, 'mr.sephard', 'Dhaka', '0566868612', 'ss@mail.com', 'Male', '34dd2f534c.png', 34, '2017-10-11 06:49:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'mr.sujon', 'syllhet', '0171233444444', 'aa@gmail.com', 'Male', '64f8f9fc24.png', 1, '2017-10-11 07:06:45', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'mrs maria', 'feni', '04436467437437437', 'ccm@mail.com', 'Female', '64c6b857ae.png', 64, '2017-10-11 07:12:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE IF NOT EXISTS `nurse` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`id`, `name`, `address`, `contact`, `email`, `image`, `unique_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(3, 'mrs maria', 'Chittagong', '045467474848', 'zz@gmail.com', '1f4980bd30.jpg', '1f4980bd30550151201dd50b86c627c5', '2017-10-08 21:40:11', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'mrs.sima', 'Rajshahi', '0343444444', 'ccc@mail.com', '05481738a3.jpg', '05481738a39e0ccedfe314e62813daed', '2017-10-10 08:20:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `address`, `contact`, `email`, `gender`, `image`, `unique_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(3, 'rahim', 'rr@gmail.com', '03443444547', 'rr@mail.com', 'Male', '622b473f2d.jpg', 4, '2017-10-07 02:53:50', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'rahima', 'Feni', '0994949', 'mm@gmail.com', 'Female', '7a7fa9a8a4.png', 7, '2017-10-07 02:56:04', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password`) VALUES
(1, 'admin', 'aa@mail.com', '3434');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`id`, `user`, `email`, `password`) VALUES
(1, 'avijit', 'fffff@mail', '123'),
(10, 'masum', 'kk@mail.com', '345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
