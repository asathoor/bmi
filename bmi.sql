-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 02, 2015 at 08:35 PM
-- Server version: 5.5.44-0+deb8u1
-- PHP Version: 5.6.13-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wordpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `vaegt`
--

CREATE TABLE IF NOT EXISTS `vaegt` (
`id` int(11) NOT NULL,
  `vaegt` decimal(10,0) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaegt`
--

INSERT INTO `vaegt` (`id`, `vaegt`, `date`) VALUES
(1, 63, '2015-11-02 16:51:12'),
(4, 63, '2015-11-02 19:22:40'),
(5, 63, '2015-11-02 19:23:23'),
(6, 99, '2015-11-02 19:23:58'),
(7, 66, '2015-11-02 19:24:41'),
(8, 99, '2015-11-02 19:25:21'),
(9, 66, '2015-11-02 19:26:05'),
(10, 66, '2015-11-02 19:27:30'),
(11, 77, '2015-11-02 19:27:55'),
(12, 66, '2015-11-02 19:28:38'),
(13, 78, '2015-11-02 19:29:39'),
(14, 99, '2015-11-02 19:30:15'),
(15, 166, '2015-11-02 19:31:48'),
(16, 166, '2015-11-02 19:33:06'),
(17, 0, '2015-11-02 19:33:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vaegt`
--
ALTER TABLE `vaegt`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vaegt`
--
ALTER TABLE `vaegt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
