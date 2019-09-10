-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2016 at 11:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mahindatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `playersdata`
--

CREATE TABLE IF NOT EXISTS `playersdata` (
  `Name` varchar(11) NOT NULL,
  `Position` varchar(11) NOT NULL,
  `Club` varchar(11) NOT NULL,
  `Scoring Chance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playersdata`
--

INSERT INTO `playersdata` (`Name`, `Position`, `Club`, `Scoring Chance`) VALUES
('Courtois', 'GK', 'Chelsea', 0),
('Begovic', 'GK', 'Chelsea', 0),
('Costa', 'F', 'Chelsea', 30),
('Remy', 'F', 'Chelsea', 50),
('Pato', 'F', 'Chelsea', 60),
('Hazard', 'M', 'Chelsea', 70),
('Matic', 'M', 'Chelsea', 75),
('Oscar', 'M', 'Chelsea', 85),
('Willian', 'M', 'Chelsea', 95),
('Cahill', 'D', 'Chelsea', 105),
('Zouma', 'D', 'Chelsea', 110),
('Baba', 'D', 'Chelsea', 115),
('Miazga', 'D', 'Chelsea', 120),
('Sommer', 'GK', 'BorrusiaM', 0),
('Sippel', 'GK', 'BorrusiaM', 0),
('Raffael', 'F', 'BorrusiaM', 20),
('Stindl', 'F', 'BorrusiaM', 40),
('Drmic', 'F', 'BorrusiaM', 50),
('Xhaka', 'M', 'BorrusiaM', 60),
('Traore', 'M', 'BorrusiaM', 70),
('Johnson', 'M', 'BorrusiaM', 80),
('Hofmann', 'M', 'BorrusiaM', 85),
('Stranzl', 'D', 'BorrusiaM', 90),
('Jantschke', 'D', 'BorrusiaM', 95),
('Wendt', 'D', 'BorrusiaM', 97),
('Korb', 'D', 'BorrusiaM', 100),
('Frei', 'GK', 'Seattle', 0),
('Perkins', 'GK', 'Seattle', 0),
('Lyon', 'GK', 'Seattle', 0),
('Dempsey', 'F', 'Seattle', 30),
('Valdez', 'F', 'Seattle', 50),
('Pappa', 'M', 'Seattle', 60),
('Neagle', 'M', 'Seattle', 65),
('Alonso', 'M', 'Seattle', 68),
('Pineda', 'M', 'Seattle', 70),
('Rose', 'M', 'Seattle', 72),
('Mears', 'D', 'Seattle', 74),
('Evans', 'D', 'Seattle', 76),
('Jones', 'D', 'Seattle', 78),
('Remick', 'D', 'Seattle', 80);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
