-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 12:47 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `empmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `role`) VALUES
(26, 'saurabh24', 'saurabh24', 'Admin'),
(28, 'robinsingh', 'robinsingh', 'Admin'),
(29, 'ashutosh_saurabh update', 'ashutoshsaurabh', 'User'),
(36, 'rahul24', 'rahul24', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `marketing`
--

CREATE TABLE `marketing` (
  `markId` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketing`
--

INSERT INTO `marketing` (`markId`, `designation`, `address`, `email`) VALUES
(1, 'Photoshop123', 'ahxahoichihcwich wdowpjwo 222', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `oId` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `salary` double NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`oId`, `designation`, `salary`, `age`) VALUES
(1, 'Data Management', 100, 20);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` double NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `School` varchar(20) NOT NULL,
  `College` varchar(30) NOT NULL,
  `bloodgrp` varchar(2) NOT NULL,
  `permanentAddress` varchar(20) NOT NULL,
  `localAddress` varchar(20) NOT NULL,
  `hometown` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userId`, `name`, `username`, `phone`, `email`, `password`, `gender`, `School`, `College`, `bloodgrp`, `permanentAddress`, `localAddress`, `hometown`) VALUES
(30, 'Yadvendu Priyadarshi Rai', 'yadu_rai_136', 8867358780, 'yadu@gmail.com', 'yadu', 'male', 'KV', 'SIMSS', 'B+', 'Bihar', 'Dawangere', 'Bihar'),
(31, 'Robin SIngh', 'robinsingh', 9901752301, 'robinsingh@gmail.com', 'robin', 'male', 'KV', '', 'A+', 'Bihar', 'Bangalore', 'Bihar'),
(32, 'Ashutosh Saurabh', 'ashutosh_saurabh', 8147960401, 'ashutoshsaurabh@gmail.com', 'ashutosh', 'male', 'KV', 'Ramiah', 'B+', 'Bihar', 'Bangalore', 'Bihar');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `saleId` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `bloodgrp` varchar(255) NOT NULL,
  `phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`saleId`, `designation`, `bloodgrp`, `phone`) VALUES
(1, 'JAVA DEVELOPER', 'B+ve', 8151849266),
(3, 'WEB DEVELOPER', 'B+ve', 8151849266),
(4, 'Android developer', 'A+ve', 1234566),
(5, 'JAVA DEVELOPER', 'B+ve', 12345);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing`
--
ALTER TABLE `marketing`
  ADD PRIMARY KEY (`markId`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`oId`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`saleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `marketing`
--
ALTER TABLE `marketing`
  MODIFY `markId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `oId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `saleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
