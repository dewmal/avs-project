-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2019 at 08:30 AM
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
  `gps_location` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `project_id`, `first_name`, `last_name`, `address_line1`, `address_line2`, `city`, `phone_no`, `mobile_no`, `email`, `nic_no`, `service_supplier`, `area_office`, `ebill_name`, `account_no`, `gps_location`, `postal_code`) VALUES
(19, 6, 'Saugat', 'Aryal', 'Malabe', 'Pittugala', 'Colombo', '99999999', '0766948707', 'saugat.aryl@gmail.com', '787878', 'leco', 'Malabe', 'Saugat Aryal', '99999', '999,999', '10115'),
(20, 7, 'svvx', 'gfd', 'sdfsdf', 'dsfsg', 'dsfsg', '23242432', '0777777777', 'sdf@fg.com', 'fgsg3', 'ceb', 'regdg', 'gfdg', '533', '3434.43', 'gfgdfg'),
(24, 11, 'Pending', 'Status', 'fdd', 'fhgfh', 'ffdh', '34543654', '4354654', 'test@gmail.com', '3453453', 'ceb', 'Malabe ', 'Test Test', '4535', '999,999', '54635'),
(25, 12, 'Pending', 'Status', 'gdf', 'fdgfd', 'dfhgh', '3453534', '5435345', 'test@gmail.com', '06922401', 'ceb', 'Matara', 'test', '232545', '999,999', '433');

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
  `project_no` int(11) DEFAULT NULL,
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
  `createdAt` datetime NOT NULL,
  `createdBy` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `accept_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `project_no`, `projectDocuments`, `projectPhotos`, `agreementDate`, `installationCompletion`, `noOfPanels`, `totalPanelCapacity`, `inverterCapacity`, `installerName`, `installerID`, `connectionPayment`, `scheme`, `meterFixing`, `onlinePortalUsername`, `onlinePortalPassword`, `offlineGridVoltage`, `groundResistance`, `setVoltageRangeLow`, `setVoltageRangeHigh`, `setFreqRangeLow`, `setFreqRangeHigh`, `inverterStartupTime`, `onlineGridVoltage`, `routerUsername`, `routerPassword`, `routerSerialNo`, `latitude`, `longitude`, `serviceDuration`, `serviceFreq`, `comments`, `createdAt`, `createdBy`, `status`, `accept_status`) VALUES
(6, 10, 'test', 'test', '2019-10-31', '2019-10-31', 1, 999, 999, 'Test', '11111', '2019-10-31', 'plus', '2019-10-30', 'test@test.com', 'test', 1, 1, 1, 1, 1, 1, 1, 1, 'test@test.com', 'test', '11111', 99.99, 99.99, 1, 1, 'dsdgdfgdfg', '2019-10-31 00:00:00', 1, 1, 'approved'),
(7, 894, 'dfg', 'fgfd', '2019-10-31', '2019-10-31', 3, 3, 4, 'dsfs', 'dsgsdg', '2019-10-31', 'account', '2019-10-31', 'operations@avs.com', 'avs', 1, 1, 1, 1, 1, 1, 1, 1, 'sdfds', 'dsfdsf', '323', 99.99, 123.89, 5, 4, 'Dummy comment', '2019-10-31 00:00:00', 13, 1, 'approved'),
(11, 456, '', '', '2019-11-01', '0000-00-00', 0, 0, 0, '', '', '0000-00-00', 'meter', '0000-00-00', 'operations@avs.com', 'avs', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, '', '2019-11-01 12:56:46', 13, 1, 'approved'),
(12, 456, '', '', '2019-11-01', '0000-00-00', 0, 0, 0, '', '', '0000-00-00', 'meter', '0000-00-00', 'operations@avs.com', 'avs', 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', 0, 0, 0, 0, '', '2019-11-01 12:59:46', 13, 1, 'pending');

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
(13, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-25 14:37:51'),
(14, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 10:03:43'),
(15, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 11:29:55'),
(16, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 15:46:38'),
(17, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 15:53:48'),
(18, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 16:04:27'),
(19, 13, '{\"role\":\"2\",\"roleText\":\"Operations Team Member\",\"name\":\"Operations\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 16:06:50'),
(20, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 16:39:58'),
(21, 13, '{\"role\":\"2\",\"roleText\":\"Operations Team Member\",\"name\":\"Operations\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 16:49:15'),
(22, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-10-31 16:57:48'),
(23, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 12:25:46'),
(24, 13, '{\"role\":\"2\",\"roleText\":\"Operations Team Member\",\"name\":\"Operations\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 12:26:24'),
(25, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 12:34:43'),
(26, 13, '{\"role\":\"2\",\"roleText\":\"Operations Team Member\",\"name\":\"Operations\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 12:55:54'),
(27, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 12:57:17'),
(28, 13, '{\"role\":\"2\",\"roleText\":\"Operations Team Member\",\"name\":\"Operations\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 12:58:57'),
(29, 1, '{\"role\":\"1\",\"roleText\":\"Administrator\",\"name\":\"System Administrator\"}', '::1', 'Chrome 77.0.3865.90', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36', 'Linux', '2019-11-01 13:00:08');

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

--
-- Dumping data for table `tbl_reset_password`
--

INSERT INTO `tbl_reset_password` (`id`, `email`, `activation_id`, `agent`, `client_ip`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'saugat.aryl@gmail.com', '2G9A0urJlLDhx7I', 'Chrome 77.0.3865.90', '::1', 0, 1, '2019-10-31 11:17:51', NULL, NULL),
(2, 'saugat.aryl@gmail.com', '6u74Zbpv2Hzt1fD', 'Chrome 77.0.3865.90', '::1', 0, 1, '2019-10-31 11:18:13', NULL, NULL);

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
(1, 'admin@avs.com', '$2y$10$Qv02BOD4hnE0DJmXMVDpGukuoZrQVBtrBr8OY/0zZzHQGQ8TiZnK2', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2019-10-31 11:16:14'),
(2, 'manager@example.com', '$2y$10$quODe6vkNma30rcxbAHbYuKYAZQqUaflBgc4YpV9/90ywd.5Koklm', 'Manager', '9890098900', 2, 1, 1, '2016-12-09 17:49:56', 1, '2019-10-31 11:12:36'),
(10, 'test@gmail.com', '$2y$10$AfhCctNIBn5lrUyQnA5jfuM8Sm4Ubs58xURidCZLIlwjJD1r.fk8G', 'Test', '123456789', 2, 1, 1, '2019-09-29 08:59:30', 1, '2019-10-25 13:27:28'),
(12, 'saugat@avs.com', '$2y$10$329vmfySJJneJEsKz4K6U.pN3vsBLosqodP0VwyWpJ4FkqybNdSpa', 'Saugat Aryal', '0766948707', 1, 0, 1, '2019-10-31 11:27:40', NULL, NULL),
(13, 'operations@avs.com', '$2y$10$QJnU6tB8bcjl1LfqOAe/hOjGIk3dzBJv0BcYrUuqdR19WibiVcYty', 'Operations', '0766948707', 2, 0, 1, '2019-10-31 11:36:40', NULL, NULL);

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
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_last_login`
--
ALTER TABLE `tbl_last_login`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
