-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 05:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `advanceyii4`
--

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1502803676),
('m130524_201442_init', 1502803681);

-- --------------------------------------------------------

--
-- Table structure for table `monthyear`
--

CREATE TABLE `monthyear` (
  `id` int(11) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `monthyear`
--

INSERT INTO `monthyear` (`id`, `month`, `year`) VALUES
(1, 'January', '2016'),
(2, 'February', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `roomflash`
--

CREATE TABLE `roomflash` (
  `id` int(11) NOT NULL,
  `roomOtherActual` float NOT NULL,
  `roomAvailableActual` float NOT NULL,
  `roomIndividualLF` float NOT NULL,
  `roomGroupLF` float NOT NULL,
  `roomOtherLF` float NOT NULL,
  `roomAvailableLF` float NOT NULL,
  `roomSoldLF` float NOT NULL,
  `roomIndividualBudget` float NOT NULL,
  `roomGroupBudget` float NOT NULL,
  `roomOtherBudget` float NOT NULL,
  `roomAvailableBudget` float NOT NULL,
  `roomSoldBudget` float NOT NULL,
  `roomIndividualLY` float NOT NULL,
  `roomGroupLY` float NOT NULL,
  `roomOtherLY` float NOT NULL,
  `roomAvailableLY` float NOT NULL,
  `roomSoldLY` float NOT NULL,
  `roomRevenueActual` float NOT NULL,
  `roomIndividualActual` float NOT NULL,
  `roomGroupActual` float NOT NULL,
  `roomSoldActual` float NOT NULL,
  `occupancyActual` float NOT NULL,
  `adrActual` float NOT NULL,
  `roomRevParActual` float NOT NULL,
  `roomRevenueLF` float NOT NULL,
  `occupancyLF` float NOT NULL,
  `adrLF` float NOT NULL,
  `roomRevParLF` float NOT NULL,
  `roomRevenueBudget` float NOT NULL,
  `occupancyBudget` float NOT NULL,
  `adrBudget` float NOT NULL,
  `roomRevParBudget` float NOT NULL,
  `roomRevenueLY` float NOT NULL,
  `occupancyLY` float NOT NULL,
  `adrLY` float NOT NULL,
  `roomRevParLY` float NOT NULL,
  `roomRevenueVVB` float NOT NULL,
  `roomIndividualVVB` float NOT NULL,
  `roomGroupVVB` float NOT NULL,
  `roomOtherVVB` float NOT NULL,
  `roomAvailableVVB` float NOT NULL,
  `roomSoldVVB` float NOT NULL,
  `occupancyVVB` float NOT NULL,
  `adrVVB` float NOT NULL,
  `roomRevParVVB` float NOT NULL,
  `roomRevenueVVLY` float NOT NULL,
  `roomIndividualVVLY` float NOT NULL,
  `roomGroupVVLY` float NOT NULL,
  `roomOtherVVLY` float NOT NULL,
  `roomAvailableVVLY` float NOT NULL,
  `roomSoldVVLY` float NOT NULL,
  `occupancyVVLY` float NOT NULL,
  `adrVVLY` float NOT NULL,
  `roomRevParVVLY` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roomsegmentation`
--

CREATE TABLE `roomsegmentation` (
  `id` int(11) NOT NULL,
  `roomType` varchar(45) NOT NULL,
  `actualRNS` float NOT NULL,
  `budgetRNS` float NOT NULL,
  `lastYearRNS` float NOT NULL,
  `actualARR` float NOT NULL,
  `budgetARR` float NOT NULL,
  `lastYearARR` float NOT NULL,
  `growthRateRNS` float NOT NULL,
  `growthRateARR` float NOT NULL,
  `actualR` float NOT NULL,
  `budgetR` float NOT NULL,
  `lastYearR` float NOT NULL,
  `growthRateR` float NOT NULL,
  `monthYear_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'eugene', 'b9B65rsIDGBIdLNIwh5_wOSqVbDcOxjM', '$2y$13$J14X7BdkJC8di4mfZaMd7upZMYeZ.KOzI7uSiKb3BlM0Nl1PY.MYS', NULL, 'eugenebdelfin@gmail.com', 10, 1502803712, 1502803712);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `monthyear`
--
ALTER TABLE `monthyear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomflash`
--
ALTER TABLE `roomflash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roomFlash_monthYear1_idx` (`monthYear_id`);

--
-- Indexes for table `roomsegmentation`
--
ALTER TABLE `roomsegmentation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roomSegmentation_monthYear_idx` (`monthYear_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monthyear`
--
ALTER TABLE `monthyear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roomflash`
--
ALTER TABLE `roomflash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roomsegmentation`
--
ALTER TABLE `roomsegmentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `roomflash`
--
ALTER TABLE `roomflash`
  ADD CONSTRAINT `fk_roomFlash_monthYear1` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `roomsegmentation`
--
ALTER TABLE `roomsegmentation`
  ADD CONSTRAINT `fk_roomSegmentation_monthYear` FOREIGN KEY (`monthYear_id`) REFERENCES `monthyear` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
