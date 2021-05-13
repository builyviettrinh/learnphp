-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2021 at 05:47 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hienmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE `userInfo` (
  `idUser` int(11) NOT NULL,
  `hoTen` varchar(255) NOT NULL,
  `namSinh` int(11) NOT NULL,
  `cmnd` int(255) NOT NULL,
  `queQuan` varchar(255) NOT NULL,
  `nhomMau` varchar(11) NOT NULL,
  `soLanHienMau` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userInfo`
--

INSERT INTO `userInfo` (`idUser`, `hoTen`, `namSinh`, `cmnd`, `queQuan`, `nhomMau`, `soLanHienMau`) VALUES
(1, 'Trinh bui', 1993, 151314234, 'Kien Giang', 'A', 1),
(2, 'User B', 1990, 1314234, 'Ho Chi minh', 'B', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userInfo`
--
ALTER TABLE `userInfo`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userInfo`
--
ALTER TABLE `userInfo`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
