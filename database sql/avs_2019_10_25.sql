-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2019 at 12:50 PM
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
-- Database: `avs`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `address_line1` varchar(45) DEFAULT NULL,
  `address_line2` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `phone_no` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nic_no` varchar(45) DEFAULT NULL,
  `service_supplier` varchar(20) DEFAULT NULL,
  `area_office` varchar(45) DEFAULT NULL,
  `ebill_name` varchar(45) DEFAULT NULL,
  `account_no` varchar(45) DEFAULT NULL,
  `gps_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `project_id`, `first_name`, `last_name`, `address_line1`, `address_line2`, `city`, `phone_no`, `mobile_no`, `email`, `nic_no`, `service_supplier`, `area_office`, `ebill_name`, `account_no`, `gps_location`) VALUES
(14, 1, 'Saugat', 'Aryal', 'Kiribathgalawatta Road', 'Pittugala', 'Colombo', '99999999', '0766948707', 'saugat.aryl@gmail.com', '06922401', 'ceb', 'Malabe', 'Saugat Aryal', '99999', '999,999'),
(15, 2, 'Test', 'Test', 'test', 'test', 'test', '123456789', '0777777777', 'test@gmail.com', '12345', 'leco', 'Matara', 'test', '232545', '3434.43');

-- --------------------------------------------------------

--
-- Table structure for table `inverter`
--

CREATE TABLE `inverter` (
  `inverterID` int(11) NOT NULL,
  `projectID_inv` int(11) DEFAULT NULL,
  `inverterType` varchar(45) DEFAULT NULL,
  `seriealNo` varchar(45) DEFAULT NULL,
  `checkCode` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `panels`
--

CREATE TABLE `panels` (
  `projectID_pan` int(11) DEFAULT NULL,
  `panelID` int(11) NOT NULL,
  `panelType` varchar(45) DEFAULT NULL,
  `serialNo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectID` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `projectDocuments` varchar(45) DEFAULT NULL,
  `projectPhotos` varchar(500) NOT NULL,
  `agreementDate` date DEFAULT NULL,
  `installationCompletion` date DEFAULT NULL,
  `noOfPanels` int(11) DEFAULT NULL,
  `totalPanelCapacity` float DEFAULT NULL,
  `inverterCapacity` float DEFAULT NULL,
  `installerName` varchar(45) DEFAULT NULL,
  `installerID` varchar(45) DEFAULT NULL,
  `connectionPayment` date DEFAULT NULL,
  `scheme` varchar(20) DEFAULT NULL,
  `meterFixing` date DEFAULT NULL,
  `onlinePortalUsername` varchar(45) DEFAULT NULL,
  `onlinePortalPassword` varchar(45) DEFAULT NULL,
  `offlineGridVoltage` float DEFAULT NULL,
  `groundResistance` float DEFAULT NULL,
  `setVoltageRangeLow` float DEFAULT NULL,
  `setVoltageRangeHigh` float DEFAULT NULL,
  `setFreqRangeLow` float DEFAULT NULL,
  `setFreqRangeHigh` float DEFAULT NULL,
  `inverterStartupTime` float DEFAULT NULL,
  `onlineGridVoltage` float DEFAULT NULL,
  `routerUsername` varchar(45) DEFAULT NULL,
  `routerPassword` varchar(45) DEFAULT NULL,
  `routerSerialNo` varchar(45) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `serviceDuration` int(11) DEFAULT NULL,
  `serviceFreq` int(11) DEFAULT NULL,
  `comments` varchar(1000) NOT NULL,
  `createdAt` date NOT NULL,
  `createdBy` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `accept_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `project_id`, `projectDocuments`, `projectPhotos`, `agreementDate`, `installationCompletion`, `noOfPanels`, `totalPanelCapacity`, `inverterCapacity`, `installerName`, `installerID`, `connectionPayment`, `scheme`, `meterFixing`, `onlinePortalUsername`, `onlinePortalPassword`, `offlineGridVoltage`, `groundResistance`, `setVoltageRangeLow`, `setVoltageRangeHigh`, `setFreqRangeLow`, `setFreqRangeHigh`, `inverterStartupTime`, `onlineGridVoltage`, `routerUsername`, `routerPassword`, `routerSerialNo`, `latitude`, `longitude`, `serviceDuration`, `serviceFreq`, `comments`, `createdAt`, `createdBy`, `status`, `accept_status`) VALUES
(1, NULL, 'test', 'test', '2019-10-31', '2019-10-31', 1, 999, 999, 'Test', '12345', '2019-10-31', 'meter', '2019-10-31', 'saugat', 'saugat', 9, 9, 9, 9, 9, 9, 9, 9, 'test', 'test', '99999', 99.99, 99.99, 9, 9, 'This is a dummy data ', '2019-10-25', 1, 0, NULL),
(2, 1, 'drive', 'drive', '2019-10-30', '2019-10-30', 5, 5555, 5555, 'Test', '7884232', '2019-10-30', 'account', '2019-10-30', 'test', 'test', 5, 5, 5, 5, 5, 5, 5, 5, 'test', 'test', '3243543', 123.44, 123.89, 5, 5, 'This is final submitted dummy data', '2019-10-25', 1, 1, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `serviceID` int(11) NOT NULL,
  `projectID_ser` int(11) DEFAULT NULL,
  `serviceDate` date DEFAULT NULL,
  `nextService` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_last_login`
--

CREATE TABLE `tbl_last_login` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `sessionData` varchar(2048) NOT NULL,
  `machineIp` varchar(1024) NOT NULL,
  `userAgent` varchar(128) NOT NULL,
  `agentString` varchar(1024) NOT NULL,
  `platform` varchar(128) NOT NULL,
  `createdDtm` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_last_login`
--

INSERT INTO `tbl_last_login` (`id`, `userId`, `sessionData`, `machineIp`, `userAgent`, `agentString`, `platform`, `createdDtm`) VALUES
(1, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Linux', '2019-09-04 15:40:29'),
(2, 2, '{\"role\":\"2\",\"roleText\":\"Manager\",\"name\":\"Manager\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Linux', '2019-09-04 15:43:16'),
(3, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Linux', '2019-09-04 15:43:50'),
(4, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 75.0.3770.142', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3770.142 Safari/537.36', 'Linux', '2019-09-04 16:03:05'),
(5, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 10', '2019-09-26 23:02:17'),
(6, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 10', '2019-09-27 09:01:46'),
(7, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Windows 10', '2019-09-27 09:58:28'),
(8, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-09-27 12:01:36'),
(9, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-09-29 12:19:30'),
(10, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.120', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', 'Windows 10', '2019-10-16 21:39:08'),
(11, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.120', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.120 Safari/537.36', 'Windows 10', '2019-10-17 05:29:04'),
(12, 1, '{\"role\":\"1\",\"roleText\":\"System Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-25 10:21:49'),
(13, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-25 14:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'Administrator'),
(2, 'Operations Team Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT 'login email',
  `password` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) CHARACTER SET utf8 DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@example.com', '$2y$10$6NOKhXKiR2SAgpFF2WpCkuRgYKlSqFJaqM0NgIM3PT1gKHEM5/SM6', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2018-01-05 05:56:34'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2018-01-12 07:22:11'),
(9, 'saugat.aryl@gmail.com', '$2y$10$drRBsX.dHO15jz./5Ii26Ok.scXK4epYTAWWl/zgu8LmChHFN00WS', 'Saugat Aryal', '0766948707', 2, 0, 1, '2019-09-27 09:43:49', NULL, NULL),
(10, 'test@gmail.com', '$2y$10$AfhCctNIBn5lrUyQnA5jfuM8Sm4Ubs58xURidCZLIlwjJD1r.fk8G', 'Test', '123456789', 2, 0, 1, '2019-09-29 08:59:30', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `projectId_idx` (`project_id`);

--
-- Indexes for table `inverter`
--
ALTER TABLE `inverter`
  ADD PRIMARY KEY (`inverterID`),
  ADD KEY `projectID_idx` (`projectID_inv`);

--
-- Indexes for table `panels`
--
ALTER TABLE `panels`
  ADD PRIMARY KEY (`panelID`),
  ADD KEY `projectID_pan_idx` (`projectID_pan`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectID`),
  ADD KEY `FK_CreatedBy` (`createdBy`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`serviceID`),
  ADD KEY `projectID_ser_idx` (`projectID_ser`);

--
-- Indexes for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `projectId_cus` FOREIGN KEY (`project_id`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `inverter`
--
ALTER TABLE `inverter`
  ADD CONSTRAINT `projectID_inv` FOREIGN KEY (`projectID_inv`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `panels`
--
ALTER TABLE `panels`
  ADD CONSTRAINT `projectID_pan` FOREIGN KEY (`projectID_pan`) REFERENCES `project` (`projectID`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `FK_CreatedBy` FOREIGN KEY (`createdBy`) REFERENCES `tbl_users` (`userId`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `projectID_ser` FOREIGN KEY (`projectID_ser`) REFERENCES `project` (`projectID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
