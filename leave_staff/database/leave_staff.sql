-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2023 at 06:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `departmentName` varchar(150) DEFAULT NULL,
  `departmentShortName` varchar(100) NOT NULL,
  `idHOD` int(11) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `empID` int(11) NOT NULL,
  `depID` int(11) NOT NULL,
  `firstName` varchar(150) NOT NULL,
  `lastName` varchar(150) NOT NULL,
  `fullName` varchar(120) NOT NULL,
  `emailID` varchar(200) NOT NULL,
  `password` varchar(180) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dateBirth` varchar(100) NOT NULL,
  `religion` varchar(120) NOT NULL,
  `address` varchar(255) NOT NULL,
  `avLeave` int(3) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(30) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `leaveID` int(11) NOT NULL,
  `empID` int(11) NOT NULL,
  `empName` varchar(120) CHARACTER SET latin1 NOT NULL,
  `department` varchar(120) CHARACTER SET latin1 NOT NULL,
  `role` varchar(150) CHARACTER SET latin1 NOT NULL,
  `fromDate` varchar(120) CHARACTER SET latin1 NOT NULL,
  `toDate` varchar(120) CHARACTER SET latin1 NOT NULL,
  `numberDays` int(11) NOT NULL,
  `leaveType` varchar(120) CHARACTER SET latin1 NOT NULL,
  `leaveReason` mediumtext CHARACTER SET latin1 NOT NULL,
  `appliedDate` date NOT NULL,
  `hrRemark` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `hrStatus` int(1) DEFAULT NULL,
  `hrDate` datetime DEFAULT NULL,
  `hrName` varchar(120) CHARACTER SET latin1 NOT NULL,
  `hodRemark` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `hodStatus` int(1) DEFAULT NULL,
  `hodDate` datetime DEFAULT NULL,
  `hodName` varchar(120) CHARACTER SET latin1 NOT NULL,
  `gmRemark` mediumtext CHARACTER SET latin1 DEFAULT NULL,
  `gmStatus` int(1) DEFAULT NULL,
  `gmDate` datetime DEFAULT NULL,
  `gmName` varchar(120) CHARACTER SET latin1 NOT NULL,
  `leaveStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `leaveType` varchar(200) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE `tblrole` (
  `id` int(11) NOT NULL,
  `role` varchar(120) CHARACTER SET latin1 NOT NULL,
  `password` varchar(180) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`id`, `role`, `password`) VALUES
(1, 'admin', '9f283dfd6c90afec4a2154097ed05d33'),
(2, 'hr', '50e90877060f178bec0feb469d849bfb'),
(3, 'random', 'b9e9b8a5fcbcf50da1ec38714cd11e73');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`empID`);

--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`leaveID`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `empID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `leaveID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
