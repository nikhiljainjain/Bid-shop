-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2019 at 08:51 PM
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
-- Database: `bidbynj`
--

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `ITEMID` int(11) DEFAULT NULL,
  `USER` varchar(26) NOT NULL,
  `BPRICE` int(11) NOT NULL,
  `ADD_TIME` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`ITEMID`, `USER`, `BPRICE`, `ADD_TIME`) VALUES
(3, 'unknown', 3489, '2019-11-11'),
(3, 'musicnj', 999, '2019-09-26'),
(3, 'musicnj', 23233, '2019-09-26'),
(3, 'musicnj', 555, '2019-09-26'),
(3, 'musicnj', 9798, '2019-09-26'),
(3, 'unknown', 9899, '2019-09-26'),
(3, 'unknown', 100000, '2019-09-26'),
(3, 'musicnj', 998, '2019-09-26'),
(3, 'musicnj', 9888, '2019-09-26'),
(3, 'unknown', 29832, '2019-09-26'),
(3, 'unknown', 99999, '2019-09-26'),
(3, 'unknown', 9898, '2019-09-26'),
(3, 'unknown', 998, '2019-09-26'),
(3, 'unknown', 38, '2019-09-26'),
(4, 'unknown', 9, '2019-09-26'),
(4, 'unknown', 9, '2019-09-26'),
(4, 'unknown', 123, '2019-09-26'),
(4, 'unknown', 11, '2019-09-26'),
(4, 'unknown', 122, '2019-09-26'),
(4, 'unknown', 23, '2019-09-26'),
(4, 'unknown', 999, '2019-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ITEMID` int(11) NOT NULL,
  `PNAME` varchar(26) NOT NULL,
  `PPRICE` int(11) NOT NULL,
  `PDESCP` varchar(100) NOT NULL,
  `OWNER` varchar(26) NOT NULL,
  `EXIT_TIME` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ITEMID`, `PNAME`, `PPRICE`, `PDESCP`, `OWNER`, `EXIT_TIME`) VALUES
(2, 'arduino', 999, 'arduino board', 'musicnj', '2019-09-09'),
(3, 'nodemcu', 9, 'new nodemcu', 'musicnj', '2019-10-10'),
(4, 'AMazon Kindle', 99, 'Latest amazon kindle for book reading', 'unknown', '2019-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(26) NOT NULL,
  `NAME` varchar(26) NOT NULL,
  `PASSWORD` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `NAME`, `PASSWORD`) VALUES
('musicnj', 'unknown', 'password'),
('unknown', 'unknown', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD KEY `ITEMID` (`ITEMID`),
  ADD KEY `USER` (`USER`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ITEMID`),
  ADD KEY `OWNER` (`OWNER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ITEMID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`ITEMID`) REFERENCES `items` (`ITEMID`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`USER`) REFERENCES `user` (`USERNAME`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`OWNER`) REFERENCES `user` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
