-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2016 at 03:13 AM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.8-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `funnyblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `berria`
--

CREATE TABLE `berria` (
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berria`
--

INSERT INTO `berria` (`ID`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `erabiltzaileak`
--

CREATE TABLE `erabiltzaileak` (
  `Izena` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Pasahitza` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erabiltzaileak`
--

INSERT INTO `erabiltzaileak` (`Izena`, `Email`, `Pasahitza`) VALUES
('Thadah', 'ju', '1234abcd');

-- --------------------------------------------------------

--
-- Table structure for table `iruzkina`
--

CREATE TABLE `iruzkina` (
  `ID` int(11) NOT NULL,
  `Iruzkina` varchar(1024) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BerriaID` int(11) NOT NULL,
  `Egilea` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berria`
--
ALTER TABLE `berria`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `erabiltzaileak`
--
ALTER TABLE `erabiltzaileak`
  ADD PRIMARY KEY (`Izena`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `iruzkina`
--
ALTER TABLE `iruzkina`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BerriaID` (`BerriaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `iruzkina`
--
ALTER TABLE `iruzkina`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `iruzkina`
--
ALTER TABLE `iruzkina`
  ADD CONSTRAINT `BerriarenID` FOREIGN KEY (`BerriaID`) REFERENCES `berria` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
