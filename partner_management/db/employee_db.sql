-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 12:17 PM
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
-- Database: `employee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `p_id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `count` int(11) NOT NULL,
  `request` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `key` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`p_id`, `name`, `date_time`, `count`, `request`, `username`, `key`) VALUES
(1, 'sandeep nath', '2020-06-24 08:42:04', 0, 0, 'sandeepnath41@gmail.com', '15939891352020Jun24'),
(3, 'sandeep nath', '2020-06-24 08:58:55', 0, 0, 'devtechnogaze@gmail.com', '15929891352020Jun24'),
(4, 'sandeep nath', '2020-06-24 10:08:52', 0, 0, '2020-06-24 01:58:55', ''),
(6, 'sandeep nath', '2020-06-24 10:15:51', 0, 0, 'sandeepnath41222@gmail.com', '15929937512020Jun24');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `p_id`, `date_time`) VALUES
(1, 1, '2020-06-24 02:26:15'),
(2, 1, '2020-06-24 02:26:16'),
(3, 1, '2020-06-24 02:32:06'),
(4, 1, '2020-06-24 02:34:31'),
(5, 1, '2020-06-24 02:34:31'),
(6, 1, '2020-06-24 02:35:23'),
(7, 1, '2020-06-24 02:35:23'),
(8, 1, '2020-06-24 02:36:59'),
(9, 1, '2020-06-24 02:37:22'),
(10, 1, '2020-06-24 02:37:23'),
(11, 1, '2020-06-24 02:39:15'),
(12, 1, '2020-06-24 02:39:15'),
(13, 1, '2020-06-24 02:39:27'),
(14, 1, '2020-06-24 02:39:27'),
(15, 1, '2020-06-24 02:39:56'),
(16, 1, '2020-06-24 02:39:57'),
(17, 1, '2020-06-24 02:42:14'),
(18, 1, '2020-06-24 02:42:14'),
(19, 2, '2020-06-24 02:42:31'),
(20, 2, '2020-06-24 02:42:32'),
(21, 1, '2020-06-24 02:42:41'),
(22, 1, '2020-06-24 02:42:41'),
(23, 1, '2020-06-24 02:49:06'),
(24, 1, '2020-06-24 02:49:25'),
(25, 1, '2020-06-24 02:49:25'),
(26, 1, '2020-06-24 02:49:41'),
(27, 1, '2020-06-24 02:49:41'),
(28, 1, '2020-06-24 02:50:01'),
(29, 1, '2020-06-24 02:50:02'),
(30, 3, '2020-06-24 02:50:19'),
(31, 3, '2020-06-24 02:50:20'),
(32, 1, '2020-06-24 02:50:35'),
(33, 1, '2020-06-24 02:50:35'),
(34, 1, '2020-06-24 02:51:11'),
(35, 1, '2020-06-24 02:51:11'),
(36, 1, '2020-06-24 02:52:32'),
(37, 1, '2020-06-24 02:52:32'),
(38, 1, '2020-06-24 02:53:24'),
(39, 1, '2020-06-24 02:53:25'),
(40, 3, '2020-06-24 03:00:49'),
(41, 3, '2020-06-24 03:00:50'),
(42, 3, '2020-06-24 03:01:00'),
(43, 3, '2020-06-24 03:01:01'),
(44, 1, '2020-06-24 03:01:20'),
(45, 1, '2020-06-24 03:01:20'),
(46, 1, '2020-06-24 03:04:51'),
(47, 1, '2020-06-24 03:08:09'),
(48, 1, '2020-06-24 03:08:09'),
(49, 5, '2020-06-24 03:09:25'),
(50, 5, '2020-06-24 03:09:25'),
(51, 3, '2020-06-24 03:09:33'),
(52, 3, '2020-06-24 03:09:34'),
(53, 6, '2020-06-24 03:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
