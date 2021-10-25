-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 03:35 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysj`
--

-- --------------------------------------------------------

--
-- Table structure for table `check_in`
--

CREATE TABLE `check_in` (
  `ci_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `check_in_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check_in`
--

INSERT INTO `check_in` (`ci_id`, `user_id`, `company_id`, `check_in_time`) VALUES
(1, 1, 1, '2021-10-22 21:31:17'),
(2, 2, 1, '2021-10-25 08:37:22'),
(3, 2, 1, '2021-10-25 08:38:09'),
(4, 2, 1, '2021-10-25 08:41:41'),
(5, 2, 1, '2021-10-25 08:43:58'),
(6, 2, 1, '2021-10-25 08:44:27'),
(7, 2, 1, '2021-10-25 08:45:07'),
(8, 2, 3, '2021-10-25 08:47:52'),
(9, 2, 1, '2021-10-25 08:48:15'),
(10, 2, 2, '2021-10-25 08:48:18'),
(11, 2, 1, '2021-10-25 08:50:16'),
(12, 3, 3, '2021-10-25 08:51:28'),
(13, 3, 2, '2021-10-25 08:51:29'),
(14, 3, 2, '2021-10-25 08:51:30'),
(15, 3, 1, '2021-10-25 08:52:36'),
(16, 4, 1, '2021-10-25 08:55:53'),
(17, 4, 1, '2021-10-25 08:56:02'),
(18, 4, 2, '2021-10-25 08:56:08'),
(19, 4, 2, '2021-10-25 09:26:23'),
(20, 4, 3, '2021-10-25 09:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `location`) VALUES
(1, 'Invoke', 'Sungai Besi'),
(2, 'Zimbabwe', 'Africa'),
(3, 'Mekdi', 'Subang Jaya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_tac` int(6) NOT NULL,
  `user_joined` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_phone`, `user_password`, `user_tac`, `user_joined`) VALUES
(1, 'Hafiy', 108960641, '$2y$10$6O25NmHZPpiCSMVVN1vIpuhX6xpSwDlPYeFOhJm3xNqMJBT2P67yq', 423394, '2021-10-22 21:30:51'),
(2, 'Hafiy', 108960641, '$2y$10$t5o8EsAI/aNFeUJ731oYmOPx/eXkEfBkUt.U7o0a0D2UFyi7brTCC', 683811, '2021-10-25 08:36:27'),
(3, 'Jamal', 129711214, '$2y$10$Wpi9cK44jNZhnORoFIGz0Ooibmi0wAWdYFBOoKE1ti57h/52uubNq', 900193, '2021-10-25 08:51:11'),
(4, 'Syamsul', 999, '$2y$10$lsgXUg0HphcR0RxbfbcOr.D.v/XThV4V6X77SRbFSsT8de.wpwkhy', 870441, '2021-10-25 08:55:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `check_in`
--
ALTER TABLE `check_in`
  ADD PRIMARY KEY (`ci_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_in`
--
ALTER TABLE `check_in`
  MODIFY `ci_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
