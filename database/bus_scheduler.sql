-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2024 at 02:47 PM
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
-- Database: `bus_scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_account`
--

CREATE TABLE `driver_account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `license` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `bus` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_account`
--

INSERT INTO `driver_account` (`id`, `fullname`, `gmail`, `age`, `password`, `address`, `license`, `sex`, `bus`, `profile_picture`, `birthday`) VALUES
(5, 'Ejie Cabales Florida', 'ejieflorida128@gmail.com', 19, 'ejie', 'be guided through journey blah blah chu chu....', '../license/download (4).jpg', 'Male', 'Ultra Bus ', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '2004-09-17');

-- --------------------------------------------------------

--
-- Table structure for table `passenger_account`
--

CREATE TABLE `passenger_account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passenger_account`
--

INSERT INTO `passenger_account` (`id`, `fullname`, `gmail`, `password`, `address`, `profile_picture`, `sex`, `birthday`, `national_id`, `age`, `contact`) VALUES
(2, 'Please put a data information..', 'ejieflorida123@gmail.com', '123', 'Please put a data information..', '../profile_pictures/default.jpg', 'Please select gender..', '', '../ids/default.jpg', 0, '0000-000-0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_account`
--
ALTER TABLE `driver_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_account`
--
ALTER TABLE `passenger_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `driver_account`
--
ALTER TABLE `driver_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `passenger_account`
--
ALTER TABLE `passenger_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
