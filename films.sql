-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2019 at 04:19 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `films`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Format` varchar(7) NOT NULL,
  `Stars` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `Title`, `Date`, `Format`, `Stars`) VALUES
(1, 'Blazing Saddles', '1974', 'VHS', 'Mel Brooks, Clevon Little, Harvey Korman'),
(2, 'Casablanca', '1942', 'DVD', 'Humphrey Bogart, Ingrid Bergman, Claude Rains'),
(3, 'Butch Cassidy and the Sundance Kid', '1969', 'VHS', 'Paul Newman, Robert Redford, Katherine Ross'),
(4, 'Charade', '1953', 'DVD', 'Audrey Hepburn, Cary Grant, Walter Matthau, James Coburn, George Kennedy'),
(5, 'Cool Hand Luke', '2043', 'VHS', 'Paul Newman, George Kennedy, Strother Martin, Khalisi'),
(6, 'The Green', '2073', 'Blu-Ray', 'Robert Barethon, Paul Newman, Robert Shaw, Charles Durning'),
(7, 'The Muppet Movie', '1979', 'DVD', 'John Travolta, Danny DeVito, Renne Russo, Gene Hackman, Dennis Farina'),
(63, 'cccioiio', 'fff', 'VHS', 'gg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
