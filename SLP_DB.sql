-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 07:21 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slp`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(191) NOT NULL,
  `subject_hosted` varchar(191) NOT NULL,
  `college_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `sd_coordinator_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `school_year_id` int(11) NOT NULL,
  `semester` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0-in Progress\r\n1-Finished\r\n2-TBD\r\n3-Cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `type`, `subject_hosted`, `college_id`, `department_id`, `sd_coordinator_id`, `partner_id`, `school_year_id`, `semester`, `status`) VALUES
(1, 'Test Project', 'Test Description', 'Test Type', 'ITCC', 1, 1, 1, 1, 1, 2, 0),
(2, 'Test Project 2', 'Test Type 2', 'Test Type 2', 'CSCC', 0, 0, 0, 0, 1, 2, 0),
(3, 'Test Project 3', 'Test Type 3', 'Test Type 3', 'CSCC', 0, 0, 0, 0, 2, 2, 0),
(4, 'Test Project 4', 'Test 4', 'Test Type 3', 'ENGE 1', 3, 3, 1, 1, 2, 2, 1),
(27, 'NEW PROJECT', 'THIS IS A NEW RESEARCH PROJECT', 'RESEARCH', 'ITCC 69', 1, 1, 1, 1, 1, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
