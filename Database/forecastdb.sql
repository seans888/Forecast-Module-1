-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 04:54 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forecastdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `actual`
--

CREATE TABLE `actual` (
  `id` int(11) NOT NULL,
  `roomsRevenue` float NOT NULL,
  `roomsIndividual` float NOT NULL,
  `roomsGroup` float NOT NULL,
  `roomsOthers` float NOT NULL,
  `roomsAvailable` float NOT NULL,
  `roomsSold` float NOT NULL,
  `occupancy` float NOT NULL,
  `adr` float NOT NULL,
  `roomsRevPar` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `averageroomrate`
--

CREATE TABLE `averageroomrate` (
  `id` int(11) NOT NULL,
  `growthRateARR` float NOT NULL,
  `actualARR` float NOT NULL,
  `budgetARR` float NOT NULL,
  `lastYearARR` float NOT NULL,
  `room_has_monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `id` int(11) NOT NULL,
  `roomsRevenue` float NOT NULL,
  `roomsIndividual` float NOT NULL,
  `roomsGroup` float NOT NULL,
  `roomsOthers` float NOT NULL,
  `roomsAvailable` float NOT NULL,
  `roomsSold` float NOT NULL,
  `occupancy` float NOT NULL,
  `adr` float NOT NULL,
  `roomsRevPar` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lastforecast`
--

CREATE TABLE `lastforecast` (
  `id` int(11) NOT NULL,
  `roomsRevenue` float NOT NULL,
  `roomsIndividual` float NOT NULL,
  `roomsGroup` float NOT NULL,
  `roomsOthers` float NOT NULL,
  `roomsAvailable` float NOT NULL,
  `roomsSold` float NOT NULL,
  `occupancy` float NOT NULL,
  `adr` float NOT NULL,
  `roomsRevPar` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lastyear`
--

CREATE TABLE `lastyear` (
  `id` int(11) NOT NULL,
  `roomsRevenue` float NOT NULL,
  `roomsIndividual` float NOT NULL,
  `roomsGroup` float NOT NULL,
  `roomsOthers` float NOT NULL,
  `roomsAvailable` float NOT NULL,
  `roomsSold` float NOT NULL,
  `occupancy` float NOT NULL,
  `adr` float NOT NULL,
  `roomsRevPar` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monthyear`
--

CREATE TABLE `monthyear` (
  `id` int(11) NOT NULL,
  `month` varchar(9) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `revenue`
--

CREATE TABLE `revenue` (
  `id` int(11) NOT NULL,
  `gRateRev` float NOT NULL,
  `actualRev` float NOT NULL,
  `budgetRev` float NOT NULL,
  `lastYearRev` float NOT NULL,
  `room_has_monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `roomType` varchar(10) NOT NULL,
  `roomSegment` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomnightssold`
--

CREATE TABLE `roomnightssold` (
  `id` int(11) NOT NULL,
  `gRateRNS` float NOT NULL,
  `actualRNS` float NOT NULL,
  `budgetRNS` float NOT NULL,
  `lastYearRNS` float NOT NULL,
  `room_has_monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_has_monthyear`
--

CREATE TABLE `room_has_monthyear` (
  `id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variancevsbudget`
--

CREATE TABLE `variancevsbudget` (
  `id` int(11) NOT NULL,
  `roomsRevenue` float NOT NULL,
  `roomsIndividual` float NOT NULL,
  `roomsGroup` float NOT NULL,
  `roomsOthers` float NOT NULL,
  `roomsAvailable` float NOT NULL,
  `roomsSold` float NOT NULL,
  `occupancy` float NOT NULL,
  `adr` float NOT NULL,
  `roomsRevPar` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `variancevslastyear`
--

CREATE TABLE `variancevslastyear` (
  `id` int(11) NOT NULL,
  `roomsRevenue` float NOT NULL,
  `roomsIndividual` float NOT NULL,
  `roomsGroup` float NOT NULL,
  `roomsOthers` float NOT NULL,
  `roomsAvailable` float NOT NULL,
  `roomsSold` float NOT NULL,
  `occupancy` float NOT NULL,
  `adr` float NOT NULL,
  `roomsRevPar` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actual`
--
ALTER TABLE `actual`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actual_monthYear1_idx` (`monthYear_id`);

--
-- Indexes for table `averageroomrate`
--
ALTER TABLE `averageroomrate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_averageRoomRate_room_has_monthYear1_idx` (`room_has_monthYear_id`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_budget_monthYear1_idx` (`monthYear_id`);

--
-- Indexes for table `lastforecast`
--
ALTER TABLE `lastforecast`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lastForecast_monthYear1_idx` (`monthYear_id`);

--
-- Indexes for table `lastyear`
--
ALTER TABLE `lastyear`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_lastYear_monthYear1_idx` (`monthYear_id`);

--
-- Indexes for table `monthyear`
--
ALTER TABLE `monthyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revenue`
--
ALTER TABLE `revenue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_revenue_room_has_monthYear1_idx` (`room_has_monthYear_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomnightssold`
--
ALTER TABLE `roomnightssold`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roomNightsSold_room_has_monthYear1` (`room_has_monthYear_id`);

--
-- Indexes for table `room_has_monthyear`
--
ALTER TABLE `room_has_monthyear`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_room_has_monthYear_monthYear1_idx` (`monthYear_id`),
  ADD KEY `fk_room_has_monthYear_room1_idx` (`room_id`);

--
-- Indexes for table `variancevsbudget`
--
ALTER TABLE `variancevsbudget`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_varianceVsBudget_monthYear1_idx` (`monthYear_id`);

--
-- Indexes for table `variancevslastyear`
--
ALTER TABLE `variancevslastyear`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_varianceVsLastYear_monthYear1_idx` (`monthYear_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actual`
--
ALTER TABLE `actual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `averageroomrate`
--
ALTER TABLE `averageroomrate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lastforecast`
--
ALTER TABLE `lastforecast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lastyear`
--
ALTER TABLE `lastyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `monthyear`
--
ALTER TABLE `monthyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `revenue`
--
ALTER TABLE `revenue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roomnightssold`
--
ALTER TABLE `roomnightssold`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_has_monthyear`
--
ALTER TABLE `room_has_monthyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `variancevsbudget`
--
ALTER TABLE `variancevsbudget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `variancevslastyear`
--
ALTER TABLE `variancevslastyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `actual`
--
ALTER TABLE `actual`
  ADD CONSTRAINT `fk_actual_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `averageroomrate`
--
ALTER TABLE `averageroomrate`
  ADD CONSTRAINT `fk_averageRoomRate_room_has_monthYear1` FOREIGN KEY (`room_has_monthYear_id`) REFERENCES `room_has_monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `fk_budget_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lastforecast`
--
ALTER TABLE `lastforecast`
  ADD CONSTRAINT `fk_lastForecast_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lastyear`
--
ALTER TABLE `lastyear`
  ADD CONSTRAINT `fk_lastYear_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `revenue`
--
ALTER TABLE `revenue`
  ADD CONSTRAINT `fk_revenue_room_has_monthYear1` FOREIGN KEY (`room_has_monthYear_id`) REFERENCES `room_has_monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `roomnightssold`
--
ALTER TABLE `roomnightssold`
  ADD CONSTRAINT `fk_roomNightsSold_room_has_monthYear1` FOREIGN KEY (`room_has_monthYear_id`) REFERENCES `room_has_monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `room_has_monthyear`
--
ALTER TABLE `room_has_monthyear`
  ADD CONSTRAINT `fk_room_has_monthYear_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_room_has_monthYear_room1` FOREIGN KEY (`room_id`) REFERENCES `room` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `variancevsbudget`
--
ALTER TABLE `variancevsbudget`
  ADD CONSTRAINT `fk_varianceVsBudget_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `variancevslastyear`
--
ALTER TABLE `variancevslastyear`
  ADD CONSTRAINT `fk_varianceVsLastYear_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
