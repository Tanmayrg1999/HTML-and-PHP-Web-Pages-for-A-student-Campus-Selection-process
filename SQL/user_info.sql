-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 09:32 AM
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
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `dob`, `city`, `gender`, `dept`, `phone`, `email`, `password`) VALUES
(6, 'tanmay gaurkar', '1999-10-30', 'chandrapur', 'male', 'Computer-Science', 2147483647, 'tanmayrgaurkar@gmail.com', 'tanmay1999'),
(7, 'aarya', '1999-10-30', 'pune', 'female', 'Computer-Science', 2147483647, 'tanmayrg4u@gmail.com', 'aarya'),
(8, 'rahul', '1999-10-30', 'chandrapur', 'male', 'Computer-Science', 2147483647, 'tanmayrgaurkar@gmail.com', 'tanmay1'),
(9, 'arnav gaurkar', '2008-03-17', 'bhadravati', 'male', 'Computer-Science', 2147483647, 'trgaurkar@mitaoe.ac.in', '123456'),
(10, 'tanmay gaurkar', '2021-04-13', 'chandrapur', 'female', 'Computer-Science', 2147483647, 'erfegh@mtty.ac.in', '12345'),
(11, 'Sumit', '1999-11-08', 'Ako', 'male', 'Mechanical Engineering', 2147483647, 'usgdks@ac.in', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
