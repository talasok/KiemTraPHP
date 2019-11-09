-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 06:08 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mainmanager`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhba`
--

CREATE TABLE `danhba` (
  `ID` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhba`
--

INSERT INTO `danhba` (`ID`, `Name`, `Email`, `Phone`) VALUES
(1, 'Cá viên chiên', 'cvc@gmail.com', '06789567483'),
(2, 'Mẹ', 'me@gmail.com', '0678904567'),
(3, 'bố', 'bo@gmail.com', '034567890'),
(7, 'Lê Tùng Khánh', 'me@gmail.com', '03456789'),
(12, 'Nguyễn Văn Heo', '', '03456789'),
(14, 'Lê Tùng Khánh', '', '06728903242'),
(15, 'Nguyễn Văn ', 'me@gmail.com', '0672890324'),
(17, 'Nguyễn Văn Phi', 'nvPhi@gmail.com', '03456789');

-- --------------------------------------------------------

--
-- Table structure for table `danhba_lable`
--

CREATE TABLE `danhba_lable` (
  `ID` int(11) NOT NULL,
  `IDLable` int(11) NOT NULL,
  `Name` text COLLATE utf8_unicode_ci NOT NULL,
  `Email` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Phone` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhba_lable`
--

INSERT INTO `danhba_lable` (`ID`, `IDLable`, `Name`, `Email`, `Phone`) VALUES
(7, 1, 'Lê Tùng Khánh', 'me@gmail.com', '03456789'),
(7, 5, 'Lê Tùng Khánh', 'me@gmail.com', '03456789'),
(14, 1, 'Lê Tùng Khánh', '', '06728903242'),
(14, 2, 'Lê Tùng Khánh', '', '06728903242'),
(14, 5, 'Lê Tùng Khánh', '', '06728903242');

-- --------------------------------------------------------

--
-- Table structure for table `lable`
--

CREATE TABLE `lable` (
  `ID` int(11) NOT NULL,
  `Lable` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lable`
--

INSERT INTO `lable` (`ID`, `Lable`) VALUES
(1, 'GD'),
(2, 'Friends'),
(5, 'team');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhba`
--
ALTER TABLE `danhba`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `danhba_lable`
--
ALTER TABLE `danhba_lable`
  ADD PRIMARY KEY (`ID`,`IDLable`);

--
-- Indexes for table `lable`
--
ALTER TABLE `lable`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhba`
--
ALTER TABLE `danhba`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `lable`
--
ALTER TABLE `lable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `danhba_lable`
--
ALTER TABLE `danhba_lable`
  ADD CONSTRAINT `kt1` FOREIGN KEY (`ID`) REFERENCES `danhba` (`ID`),
  ADD CONSTRAINT `kt2` FOREIGN KEY (`IDLable`) REFERENCES `lable` (`ID`);

--
-- Constraints for table `lable`
--
ALTER TABLE `lable`
  ADD CONSTRAINT `lable_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `danhba_lable` (`IDLable`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
