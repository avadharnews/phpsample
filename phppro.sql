-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 12:29 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppro`
--

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `did` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`did`, `userid`, `designation`, `status`, `updatedby`) VALUES
(1, 6, 'Marketing Executive', 1, 0),
(2, 6, 'Accountant', 1, 0),
(3, 6, 'Web Developer ', 1, 0),
(4, 6, 'python developer', 1, 0),
(5, 6, 'java developer', 1, 0),
(6, 6, 'php developer ', 1, 0),
(7, 9, 'Accountant', 1, 0),
(8, 9, 'Marketing Executive ', 1, 0),
(9, 9, 'Marketing manager', 1, 0),
(10, 6, 'Salesman ', 1, 0),
(11, 10, 'Accountant', 1, 0),
(12, 10, 'Marketing executive', 1, 0),
(13, 10, 'Web Developer', 1, 0),
(14, 10, 'Web designer', 1, 0),
(15, 10, 'Worker', 1, 0),
(16, 11, 'python developer', 1, 0),
(17, 18, 'Accountant', 1, 0),
(18, 18, 'Marketing executive', 1, 0),
(19, 18, 'Web designer', 1, 0),
(20, 18, 'Web developer', 1, 0),
(21, 21, 'Accountant', 1, 0),
(22, 21, 'Marketing executive', 1, 0),
(23, 21, 'Designers', 1, 0),
(24, 21, 'Office staff', 1, 0),
(25, 23, 'Accountant', 1, 0),
(26, 23, 'Web designer', 1, 0),
(27, 23, 'Web Developer', 1, 0),
(28, 23, 'PA', 1, 0),
(29, 23, 'Office staff', 1, 0),
(30, 23, 'SEO', 1, 0),
(31, 23, 'Marketing Staff', 1, 0),
(32, 26, 'Accountant', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `empid` int(11) NOT NULL,
  `emp_type` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `emp_name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `employeeid` varchar(20) NOT NULL,
  `emp_contact` varchar(25) NOT NULL,
  `emp_address` text DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `basic_pay` varchar(10) NOT NULL,
  `pf` varchar(10) NOT NULL,
  `esi` varchar(10) NOT NULL,
  `emp_desc` text DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `dateofjoining` date DEFAULT NULL,
  `dateofresignation` date DEFAULT NULL,
  `restype` varchar(30) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `blood` varchar(10) DEFAULT NULL,
  `emergency_contact` varchar(20) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`empid`, `emp_type`, `user_id`, `emp_name`, `dob`, `employeeid`, `emp_contact`, `emp_address`, `designation`, `basic_pay`, `pf`, `esi`, `emp_desc`, `email`, `dateofjoining`, `dateofresignation`, `restype`, `reason`, `blood`, `emergency_contact`, `status`, `updatedby`) VALUES
(107, 1, 47, 'fghfgh', '2020-11-11', '1605092617', '1234567890', '123', '1', '12', '12', '123', NULL, 'spegatech@gmail.com', '2020-12-10', NULL, NULL, NULL, 'a positive', '1212121212', 1, 0),
(108, 1, 47, 'ghjghjghj', '2020-11-11', '1605093216', '1234567890', '123', '18', '12123', '123123', '12312', NULL, 'spegatech@gmail.com', '2020-11-25', NULL, NULL, NULL, 'a positive', '1212121212', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `gstno` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `watermark` varchar(30) NOT NULL,
  `invoiceinitial` varchar(30) NOT NULL,
  `panno` varchar(30) NOT NULL,
  `bankname` varchar(30) NOT NULL,
  `acno` varchar(30) NOT NULL,
  `bank_ifsc` varchar(30) NOT NULL,
  `bank_branch` varchar(30) NOT NULL,
  `authorization` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `expiredate` date NOT NULL,
  `seal` varchar(50) NOT NULL,
  `sign` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `browser_red_id` varchar(50) NOT NULL,
  `req_id` int(11) NOT NULL DEFAULT 0,
  `updatedby` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `address`, `gstno`, `email`, `watermark`, `invoiceinitial`, `panno`, `bankname`, `acno`, `bank_ifsc`, `bank_branch`, `authorization`, `code`, `phone`, `expiredate`, `seal`, `sign`, `status`, `company_id`, `browser_red_id`, `req_id`, `updatedby`) VALUES
(47, 'admin', 'admin', 'admin', '123456', 'admin@admin.com', 'admin', 'admin', '', '', '', '', '', '', '', '', '0000-00-00', '', '', 2, 0, '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
