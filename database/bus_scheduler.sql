-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 11:46 AM
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
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `driver_age` int(11) NOT NULL,
  `driver_sex` varchar(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `passenger_id` int(11) NOT NULL,
  `passenger_fullname` varchar(255) NOT NULL,
  `passenger_address` varchar(255) NOT NULL,
  `passenger_profilePic` varchar(255) NOT NULL,
  `passenger_nationalId` varchar(255) NOT NULL,
  `passenger_contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `driver_id`, `driver_name`, `driver_age`, `driver_sex`, `bus_name`, `date`, `time`, `passenger_id`, `passenger_fullname`, `passenger_address`, `passenger_profilePic`, `passenger_nationalId`, `passenger_contact`) VALUES
(12, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-02', '13:02', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(13, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-02', '13:02', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(14, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-02', '13:02', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(15, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(16, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(17, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(18, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(19, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(20, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(21, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(22, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(23, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(24, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-04-21', '13:07', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(25, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-10', '15:03', 2, 'Alubske Futon', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/default.jpg', '09123587374'),
(26, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-10', '15:03', 3, 'Please put a data information..', 'Please put a data information..', '../profile_pictures/default.jpg', '../ids/default.jpg', '0000-000-0000'),
(27, 8, 'Donna Woods', 23, 'Female', 'Donskie', '2024-05-16', '16:54', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(28, 8, 'Donna Woods', 23, 'Female', 'Donskie', '2024-05-16', '16:54', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(29, 8, 'Donna Woods', 23, 'Female', 'Donskie', '2024-05-16', '16:54', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(30, 8, 'Donna Woods', 23, 'Female', 'Donskie', '2024-05-16', '16:54', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(31, 8, 'Donna Woods', 23, 'Female', 'Donskie', '2024-05-16', '16:54', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(32, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-05-09', '17:07', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(33, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-10', '15:03', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(34, 5, 'Ejie Cabales Florida', 19, 'Male', 'Ultra Bus ', '2024-05-10', '15:03', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(35, 6, 'Pupty Dumsy', 31, 'Male', 'Filtranco', '2024-05-09', '17:07', 4, 'dondon', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '../ids/images.jpg', '09123475648'),
(36, 9, 'Bea Enovero', 20, 'Female', 'Beaskie', '2024-05-13', '17:01', 5, 'Riza Gavilan', 'Hilongos , Leyte', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', '../ids/images.jpg', '09123547654'),
(37, 9, 'Bea Enovero', 20, 'Female', 'Beaskie', '2024-05-13', '17:01', 5, 'Riza Gavilan', 'Hilongos , Leyte', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', '../ids/images.jpg', '09123547654'),
(38, 9, 'Bea Enovero', 20, 'Female', 'Beaskie', '2024-05-13', '17:01', 5, 'Riza Gavilan', 'Hilongos , Leyte', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', '../ids/images.jpg', '09123547654'),
(39, 9, 'Bea Enovero', 20, 'Female', 'Beaskie', '2024-05-13', '17:01', 5, 'Riza Gavilan', 'Hilongos , Leyte', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', '../ids/images.jpg', '09123547654'),
(40, 9, 'Bea Enovero', 20, 'Female', 'Beaskie', '2024-05-13', '17:01', 5, 'Riza Gavilan', 'Hilongos , Leyte', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', '../ids/images.jpg', '09123547654');

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
(5, 'Ejie Cabales Florida', 'ejieflorida128@gmail.com', 19, 'ejie', 'Sogod Southern Leyte', '../license/images.jpg', 'Male', 'Ultra Bus ', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', '2004-09-17'),
(6, 'Pupty Dumsy', 'Driver1@gmail.com', 31, 'Driver1', 'Matalom Southern Leyte', '../license/default.jpg', 'Male', 'Filtranco', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', '2024-04-30'),
(7, 'Please put a data information..', 'Driver2@gmail.com', 0, '123', 'Please put a data information..', '../license/default.jpg', 'Please select gender..', 'Please add bus information..', '../profile_pictures/default.jpg', ''),
(8, 'Donna Woods', 'donna1@gmail.com', 23, '123', 'Pasay City , Manila E', '../license/download (2).jpg', 'Female', 'Donskie', '../profile_pictures/aiony-haust-3TLl_97HNJo-unsplash.jpg', '2043-02-01'),
(9, 'Bea Enovero', 'bea@gmail.com', 20, '123', 'Matalom Leyte ', '../license/download (2).jpg', 'Female', 'Beaskie', '../profile_pictures/ayo-ogunseinde-6W4F62sN_yI-unsplash.jpg', '2024-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `message`, `date`) VALUES
(1, 'New bus named Ultra Bus is looking for Passenger to depart!', '2024-05-02 14:37:06'),
(2, 'Driver named Ejie Cabales Florida cancelled his schedule!', '2024-05-02 14:40:33'),
(3, 'Bus named Filtrancohave max its passenger and ready to depart now!', '2024-05-02 14:45:49'),
(4, 'New bus named Please add bus information..is looking for Passenger to depart!', '2024-05-13 06:53:50'),
(5, 'Driver named Please put a data information.. cancelled his schedule!', '2024-05-13 06:54:03'),
(6, 'New bus named Donskieis looking for Passenger to depart!', '2024-05-13 06:54:23'),
(7, 'Bus named Donskie have max its passenger capacity and ready to depart now!', '2024-05-13 06:58:46'),
(8, 'New bus named Beaskieis looking for Passenger to depart!', '2024-05-13 08:01:14'),
(9, 'Bus named Beaskie have max its passenger capacity and ready to depart now!', '2024-05-13 08:05:10');

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
(2, 'Alubske Futon', 'ejieflorida123@gmail.com', '123', 'Pinaskohan Maasin City', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', 'Male', '2024-04-25', '../ids/default.jpg', 21, '09123587374'),
(3, 'Please put a data information..', 'Example1@gmail.com', '123', 'Please put a data information..', '../profile_pictures/default.jpg', 'Please select gender..', '', '../ids/default.jpg', 0, '0000-000-0000'),
(4, 'dondon', 'pass1@gmail.com', '123', 'Maasin City Southern Leyte', '../profile_pictures/ian-dooley-d1UPkiFd04A-unsplash.jpg', 'Male', '2024-05-29', '../ids/images.jpg', 20, '09123475648'),
(5, 'Riza Gavilan', 'pass2@gmail.com', '123', 'Hilongos , Leyte', '../profile_pictures/joseph-gonzalez-iFgRcqHznqg-unsplash.jpg', 'Female', '2024-05-15', '../ids/images.jpg', 21, '09123547654');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `report` varchar(255) NOT NULL,
  `reporter` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `driver_id` int(11) NOT NULL,
  `bus_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `report`, `reporter`, `date`, `driver_id`, `bus_name`) VALUES
(1, 'Too many seats to recieve , In my case it takes 3 hours before the take time depart so i am super disapointed!', 'Alubske Futon', '2024-05-02 15:08:15', 0, ''),
(2, 'this bus have damage and its currently on operate', 'Please put a data information..', '2024-05-13 06:46:44', 0, ''),
(12, 'This bus have difficult gearing sessions', 'dondon', '2024-05-13 07:23:49', 8, 'Donskie'),
(13, 'This bus have flat tires and it is uncomfortable to ride', 'dondon', '2024-05-13 07:25:14', 8, 'Donskie'),
(14, 'nay suka', 'Riza Gavilan', '2024-05-13 08:06:24', 9, 'Beaskie');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `booked_ticket` int(11) NOT NULL,
  `max_passenger` int(11) NOT NULL,
  `driver_name` varchar(255) NOT NULL,
  `driver_age` varchar(255) NOT NULL,
  `driver_sex` varchar(255) NOT NULL,
  `bus_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `driver_id`, `booked_ticket`, `max_passenger`, `driver_name`, `driver_age`, `driver_sex`, `bus_name`, `date`, `time`) VALUES
(10, 5, 3, 3, 'Ejie Cabales Florida', '19', 'Male', 'Ultra Bus ', '2024-05-02', '13:02'),
(11, 5, 4, 10, 'Ejie Cabales Florida', '19', 'Male', 'Ultra Bus ', '2024-05-10', '15:03'),
(12, 5, 0, 25, 'Ejie Cabales Florida', '19', 'Male', 'Ultra Bus ', '2024-04-30', '17:03'),
(13, 5, 0, 30, 'Ejie Cabales Florida', '19', 'Male', 'Ultra Bus ', '2024-05-07', '12:03'),
(15, 6, 0, 20, 'Pupty Dumsy', '31', 'Male', 'Filtranco', '2024-05-01', '15:06'),
(16, 6, 2, 40, 'Pupty Dumsy', '31', 'Male', 'Filtranco', '2024-05-09', '17:07'),
(17, 6, 10, 10, 'Pupty Dumsy', '31', 'Male', 'Filtranco', '2024-04-21', '13:07'),
(21, 8, 5, 5, 'Donna Woods', '23', 'Female', 'Donskie', '2024-05-16', '16:54'),
(22, 9, 5, 5, 'Bea Enovero', '20', 'Female', 'Beaskie', '2024-05-13', '17:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_account`
--
ALTER TABLE `driver_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passenger_account`
--
ALTER TABLE `passenger_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `driver_account`
--
ALTER TABLE `driver_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `passenger_account`
--
ALTER TABLE `passenger_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
