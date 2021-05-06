-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 06:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `C_id` int(11) NOT NULL,
  `C_Name` varchar(100) NOT NULL,
  `Emp_type` varchar(20) DEFAULT NULL,
  `Position` varchar(50) DEFAULT NULL,
  `C_Description` varchar(500) DEFAULT NULL,
  `CTC` varchar(20) DEFAULT NULL,
  `Schedule` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`C_id`, `C_Name`, `Emp_type`, `Position`, `C_Description`, `CTC`, `Schedule`) VALUES
(2, 'Abzooba India', 'Regular', 'Data Analyst', 'At Abzooba our mission is to reduce cognitive overload within enterprises by augmenting Human Intelligence with Machine Intelligence', '6 LPA', 'Pune'),
(3, 'Xorient', 'Regular', 'Software Engineer', 'US-based software development, technology services company helping ISVs, large enterprises with product engineering solutions, professional & managed', '4. LPA', 'Pune'),
(4, 'Zs Associate', 'Intern', 'Data Scientist', 'ZS is a professional services firm that works side by side with companies to help develop and deliver products that drive customer value and company results', ' 8.93 LPA', 'Mumbai'),
(5, 'Infosys', 'Full Time', 'System engineer', 'Infosys Limited is an Indian multinational information technology company that provides business consulting, information technology and outsourcing services', ' 4.2 LPA', 'delhi'),
(6, 'Amdocs', 'Full Time', 'Software Developer', 'Amdocs is a multinational corporation that was founded in Israel and currently headquartered in Chesterfield, Missouri, with support and development centers located worldwide. The company specializes in software and services for communications, media and financial services providers and digital enterprises', ' 5 LPA', 'Pune');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`C_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
