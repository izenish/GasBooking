-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 06:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gassakyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `username` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `address` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`username`, `brand`, `quantity`, `address`) VALUES
('s', 'd', 2, 's'),
('aman', 'bharatgas', 10, 'biratnagar');

-- --------------------------------------------------------

--
-- Table structure for table `gas`
--

CREATE TABLE `gas` (
  `location` varchar(40) NOT NULL,
  `stock` int(6) NOT NULL,
  `brand` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gas`
--

INSERT INTO `gas` (`location`, `stock`, `brand`, `status`, `id`) VALUES
('Bhaktapur', 100, 'surya', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `SN` int(15) NOT NULL,
  `Brand` varchar(15) NOT NULL,
  `Capacity` int(3) NOT NULL DEFAULT 15,
  `Availability` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Brands with their stock for individual product';

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`SN`, `Brand`, `Capacity`, `Availability`) VALUES
(1, 'HP Gas', 10, 150),
(2, 'Nepal Gas', 15, 18),
(3, 'Nepal Gas', 15, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` enum('normal_user','admin','super_admin','guest') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'normal_user',
  `secret_key` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postby_id` int(6) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `is_verified` tinyint(1) DEFAULT 0,
  `verifiedby_id` int(6) DEFAULT 1,
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `status` tinyint(1) DEFAULT 1,
  `firstname` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `user_type`, `secret_key`, `remarks`, `postby_id`, `created_at`, `is_verified`, `verifiedby_id`, `updated_at`, `status`, `firstname`, `lastname`) VALUES
(3, '', 'izenish', 'zenish77@gmail.com', '9fa28e85e8e8f2de2a31de1492534750', 'super_admin', NULL, NULL, 1, '2019-08-07 06:41:39', 1, 1, '2019-08-07 12:27:29', 1, NULL, NULL),
(5, '', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'super_admin', NULL, NULL, 1, '2019-08-07 13:08:41', 1, 1, '2019-08-07 19:01:46', 1, NULL, NULL),
(8, '', 'asdsdd', 'aasd@gmail.com', 'c96c3afd1fa8d358596fd82a4f3d8d94', 'normal_user', NULL, NULL, 1, '2019-08-08 13:21:19', 0, 1, NULL, 1, 'asdsad', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gas`
--
ALTER TABLE `gas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `verifiedby_id` (`verifiedby_id`),
  ADD KEY `postby_id` (`postby_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gas`
--
ALTER TABLE `gas`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `SN` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
