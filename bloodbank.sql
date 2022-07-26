-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 03:17 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(50) UNSIGNED NOT NULL,
  `donor_id` bigint(20) NOT NULL,
  `name` text NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `blood_group` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `donor_id`, `name`, `DOB`, `email`, `phone`, `blood_group`, `gender`, `date`) VALUES
(1, 0, 'Chidike Divine', '2022-06-28', 'chidikedvine@gmail.com', 8086733467, 'B+', '', '2022-07-25 02:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalinfo`
--

CREATE TABLE `hospitalinfo` (
  `id` bigint(20) NOT NULL,
  `Hospital_id` bigint(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalinfo`
--

INSERT INTO `hospitalinfo` (`id`, `Hospital_id`, `name`, `email`, `password`, `Date`) VALUES
(1, 0, 'Navy Reference', 'navy@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-07-25 00:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Date` varchar(11) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `user_id`, `username`, `email`, `phone`, `password`, `Date`) VALUES
(1, 0, 'Dvine', 'chidikedvine@gmail.com', '08086733467', '25d55ad283aa400af464c76d713c07ad', '2022-0'),
(2, 0, 'DvineCee', 'dvinecee@gmail.com', '08086733468', '5e8667a439c68f5145dd2fcbecf02209', '2022-06-22 '),
(3, 0, 'DeeVine', 'chidikedee@gmail.com', '09073024734', '0569b25937d06321066e1f8f97cffef3', '2022-07-10 '),
(4, 0, '090765432123456jhgfd', 'sdVinee', 'chgidike@gm', '827ccb0eea8a706c4c34a16891f84e7b', '2022-07-22 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `hospitalinfo`
--
ALTER TABLE `hospitalinfo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `Hospital_id` (`Hospital_id`),
  ADD KEY `name` (`name`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`),
  ADD KEY `Date` (`Date`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `email` (`email`),
  ADD KEY `username` (`username`),
  ADD KEY `phone` (`phone`),
  ADD KEY `password` (`password`),
  ADD KEY `Date` (`Date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospitalinfo`
--
ALTER TABLE `hospitalinfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
