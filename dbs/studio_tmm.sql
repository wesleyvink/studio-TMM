-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 09:08 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `deelnemers`
--

CREATE TABLE `deelnemers` (
  `ID` int(99) NOT NULL,
  `UserID` int(99) NOT NULL,
  `OpdrachtID` int(99) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(99) NOT NULL,
  `VoorNaam` varchar(99) NOT NULL,
  `AchterNaam` varchar(99) NOT NULL,
  `Geboortedatum` int(99) NOT NULL,
  `Email` varchar(99) NOT NULL,
  `Wachtwoord` varchar(99) NOT NULL,
  `BedrijfsID` int(99) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opdrachten`
--
ALTER TABLE `opdrachten`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
