-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2019 at 07:49 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studio_tmm`
--
CREATE DATABASE IF NOT EXISTS `studio_tmm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `studio_tmm`;

-- --------------------------------------------------------

--
-- Table structure for table `bedrijven`
--

CREATE TABLE `bedrijven` (
  `ID` int(99) NOT NULL,
  `Bedrijfsnaam` varchar(99) NOT NULL,
  `Bedrijfsland` varchar(99) NOT NULL,
  `Bedrijfsstad` varchar(99) NOT NULL,
  `Bedrijfsaddress` varchar(99) NOT NULL,
  `Bedrijfspostcode` varchar(99) NOT NULL,
  `bedrijfslogo` blob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bedrijven`
--

INSERT INTO `bedrijven` (`ID`, `Bedrijfsnaam`, `Bedrijfsland`, `Bedrijfsstad`, `Bedrijfsaddress`, `Bedrijfspostcode`, `bedrijfslogo`) VALUES
(1, 'echtbedrijf', 'nederland', 'nedervroom', 'straatnaam 34', '8447FD', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deelnemers`
--

CREATE TABLE `deelnemers` (
  `ID` int(99) NOT NULL,
  `UserID` int(99) NOT NULL,
  `OpdrachtID` int(99) NOT NULL,
  `cv` varchar(99) NOT NULL,
  `cvloc` varchar(99) NOT NULL,
  `motievatie` varchar(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deelnemers`
--

INSERT INTO `deelnemers` (`ID`, `UserID`, `OpdrachtID`, `cv`, `cvloc`, `motievatie`) VALUES
(7, 14, 1, 'dbs pat s1op2 Wesley Vink.docx', 'cvs/dbs pat s1op2 Wesley Vink.docx', 'ik wil werken'),
(6, 14, 1, 'CV Wesley vink.pdf', 'cvs/CV Wesley vink.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `ID` int(99) NOT NULL,
  `OpdrachtID` int(99) NOT NULL,
  `foto` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opdrachten`
--

CREATE TABLE `opdrachten` (
  `ID` int(99) NOT NULL,
  `BedrijfsID` int(99) NOT NULL,
  `Opdrachtnaam` varchar(99) NOT NULL,
  `Opdrachtbeschrijving` varchar(99) NOT NULL,
  `afgerond` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opdrachten`
--

INSERT INTO `opdrachten` (`ID`, `BedrijfsID`, `Opdrachtnaam`, `Opdrachtbeschrijving`, `afgerond`) VALUES
(1, 1, 'test opdracht', 'maak iets', 0),
(2, 1, 'opdracht 2', 'test opdracht 2 ', 0),
(3, 1, 'opdracht afgemaakt', 'afgemaakte opdracht', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(99) NOT NULL,
  `VoorNaam` varchar(99) NOT NULL,
  `AchterNaam` varchar(99) NOT NULL,
  `Geboortedatum` varchar(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Wachtwoord` varchar(255) NOT NULL,
  `BedrijfsID` int(99) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `VoorNaam`, `AchterNaam`, `Geboortedatum`, `Email`, `Wachtwoord`, `BedrijfsID`) VALUES
(16, '123', '213', '2019-05-31', '213@1231.43', '$2y$10$yp4txlDIpjHYC5wtG7d/SOXcjRrS5xUJfjklv0VMsXLeUIEDkmGOG', 1),
(15, '1111', '123', '2019-05-31', '1@34124.142', '$2y$10$.gfSrIlpKOk30BqB43I2EevG4thnfxpO9kExCY.c3uJpzcvWcSA6a', 1),
(13, '31', '3123', '2019-05-25', '421@124.124', '$2y$10$sA2mC4BZyB3wKdIPOR.PXeJyIvEJQTMZgcMVxqlULdW49wgd7/8U.', NULL),
(14, 'wesley', 'vink', '2019-05-24', '1@1.1', '$2y$10$OEso48y3SN4XP6A4nelCvOyigtmtPcWDzzhBY8yPZxxFbsABPbIsy', NULL),
(17, '1321', '132', '2019-05-10', '123rf2@41.51', '$2y$10$5Q0GlmnV7CYLrQzJ2P/uSOArOMR8Lfz3OZvZWJuzenBWWyN13pMZ2', NULL),
(18, '132', '123', '2019-05-16', '1fwfe@31231.1323', '$2y$10$7e2O9JO8Zr4dR.rgOQj/p.v.n8DOEzjG3j9Vim8wF4TxMgTf8Qviq', NULL),
(19, '123', '3123', '2019-05-24', '12312f2@231.51', '$2y$10$YfGFWzqR.IAad4vwGfJomOMom1Z5F0SEfgmv28Tlzi3gP0ZnX11N2', 1),
(21, '3123', '213', '2019-05-16', '123fe2@21412.fw', '$2y$10$xSxZz7qAxy4L6T.dOsoB1O1gsoOAkUqJmQjRUEHt.537hflNai1Aa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bedrijven`
--
ALTER TABLE `bedrijven`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `deelnemers`
--
ALTER TABLE `deelnemers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `opdrachten`
--
ALTER TABLE `opdrachten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bedrijven`
--
ALTER TABLE `bedrijven`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `deelnemers`
--
ALTER TABLE `deelnemers`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opdrachten`
--
ALTER TABLE `opdrachten`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
