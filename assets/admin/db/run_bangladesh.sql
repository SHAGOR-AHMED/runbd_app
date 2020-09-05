-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2019 at 01:18 AM
-- Server version: 10.1.37-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `runbflyg_dbrunbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `account_id` int(3) NOT NULL,
  `biker_name` int(3) NOT NULL,
  `from_date` varchar(15) NOT NULL,
  `to_date` varchar(15) NOT NULL,
  `total_payable` int(11) NOT NULL,
  `total_deposite` int(11) NOT NULL,
  `total_incentive` int(11) NOT NULL,
  `loan` int(11) NOT NULL,
  `subsciption_fees` int(11) NOT NULL,
  `net_amount` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bikers`
--

CREATE TABLE `tbl_bikers` (
  `biker_id` int(3) NOT NULL,
  `biker_name` varchar(32) NOT NULL,
  `bike_name` varchar(32) NOT NULL,
  `bike_no` varchar(15) NOT NULL,
  `distribution_date` varchar(15) NOT NULL,
  `kilometer` int(11) NOT NULL,
  `security_money` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bikers`
--

INSERT INTO `tbl_bikers` (`biker_id`, `biker_name`, `bike_name`, `bike_no`, `distribution_date`, `kilometer`, `security_money`, `status`) VALUES
(1, '58', 'RKS', '47', '', 0, 0, 1),
(2, '43', 'RKS', '60', '', 0, 0, 1),
(3, '55', 'RKS', '52', '', 0, 0, 1),
(4, '56', 'RKS', '53', '', 0, 0, 1),
(5, '44', 'RKS', '43', '', 0, 0, 1),
(6, '45', 'RKS', '48', '', 0, 0, 1),
(7, '46', 'RKS', '58', '', 0, 0, 1),
(8, '47', 'RKS', '44', '', 0, 0, 1),
(9, '48', 'RKS', '59', '', 0, 0, 1),
(10, '49', 'RKS', '54', '', 0, 0, 1),
(11, '50', 'RKS', '56', '', 0, 0, 1),
(12, '51', 'RKS', '57', '', 0, 0, 1),
(13, '52', 'RKS', '45', '', 0, 0, 1),
(14, '53', 'RKS', '51', '', 0, 0, 1),
(15, '57', 'RKS', '42', '', 0, 0, 1),
(16, '6', 'TVS', '19', '', 0, 0, 1),
(17, '7', 'TVS', '13', '', 0, 0, 1),
(18, '8', 'TVS', '16', '', 0, 0, 1),
(19, '9', 'TVS', '11', '', 0, 0, 1),
(20, '10', 'TVS', '14', '', 0, 0, 1),
(21, '11', 'TVS', '15', '', 0, 0, 1),
(22, '12', 'TVS', '12', '', 0, 0, 1),
(23, '13', 'TVS', '18', '', 0, 0, 1),
(24, '14', 'TVS', '20', '', 0, 0, 1),
(25, '15', 'TVS', '17', '', 0, 0, 1),
(26, '16', 'RUNNER BULET', '26', '', 0, 0, 1),
(27, '17', 'RUNNER BULET', '27', '', 0, 0, 1),
(28, '18', 'RUNNER BULET', '30', '', 0, 0, 1),
(29, '19', 'RUNNER BULET', '33', '', 0, 0, 1),
(30, '20', 'RUNNER BULET', '24', '', 0, 0, 1),
(31, '21', 'RUNNER BULET', '21', '', 0, 0, 1),
(32, '22', 'RUNNER BULET', '22', '', 0, 0, 1),
(33, '23', 'RUNNER BULET', '40', '', 0, 0, 1),
(34, '25', 'RUNNER BULET', '36', '', 0, 0, 1),
(35, '26', 'RUNNER BULET', '31', '', 0, 0, 1),
(36, '27', 'RUNNER BULET', '37', '', 0, 0, 1),
(37, '28', 'RUNNER BULET', '25', '', 0, 0, 1),
(38, '54', 'RUNNER BULET', '32', '', 0, 0, 1),
(39, '29', 'RUNNER BULET', '38', '', 0, 0, 1),
(40, '30', 'RUNNER BULET', '39', '', 0, 0, 1),
(41, '31', 'RUNNER BULET', '34', '', 0, 0, 1),
(42, '32', 'RUNNER BULET', '29', '', 0, 0, 1),
(43, '33', 'SUZUKI HAYATE', '1', '', 0, 0, 1),
(44, '34', 'SUZUKI HAYATE', '2', '', 0, 0, 1),
(45, '35', 'SUZUKI HAYATE', '3', '', 0, 0, 1),
(46, '36', 'SUZUKI HAYATE', '4', '', 0, 0, 1),
(47, '37', 'SUZUKI HAYATE', '6', '', 0, 0, 1),
(48, '38', 'SUZUKI HAYATE', '16', '', 0, 0, 1),
(49, '39', 'SUZUKI HAYATE', '8', '', 0, 0, 1),
(50, '40', 'SUZUKI HAYATE', '9', '', 0, 0, 1),
(51, '41', 'SUZUKI HAYATE', '5', '', 0, 0, 1),
(52, '42', 'SUZUKI HAYATE', '10', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bikes`
--

CREATE TABLE `tbl_bikes` (
  `bike_id` int(3) NOT NULL,
  `bike_category` int(2) NOT NULL,
  `bike_no` varchar(15) NOT NULL,
  `chasis_no` varchar(55) NOT NULL,
  `engine_no` varchar(55) NOT NULL,
  `stored_date` varchar(15) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bikes`
--

INSERT INTO `tbl_bikes` (`bike_id`, `bike_category`, `bike_no`, `chasis_no`, `engine_no`, `stored_date`, `img`) VALUES
(1, 4, 'DM-HA-575913', '', '', '2019-01-05', './assets/admin/uploads/hayat1.jpg'),
(2, 4, 'DM-HA-575914', '', '', '2019-01-05', './assets/admin/uploads/hayat11.jpg'),
(3, 4, 'DM-HA-575915', '', '', '2019-01-05', './assets/admin/uploads/hayat12.jpg'),
(4, 4, 'DM-HA-575916', '', '', '2019-01-05', './assets/admin/uploads/hayat13.jpg'),
(5, 4, 'DM-HA-575917', '', '', '2019-01-05', './assets/admin/uploads/hayat14.jpg'),
(6, 4, 'DM-HA-575918', '', '', '2019-01-05', './assets/admin/uploads/hayat15.jpg'),
(7, 4, 'DM-HA-575919', '', '', '2019-01-05', './assets/admin/uploads/hayat16.jpg'),
(8, 4, 'DM-HA-575920', '', '', '2019-01-05', './assets/admin/uploads/hayat17.jpg'),
(9, 4, 'DM-HA-575921', '', '', '2019-01-05', './assets/admin/uploads/hayat18.jpg'),
(10, 4, 'DM-HA-575963', '', '', '2019-01-05', './assets/admin/uploads/hayat19.jpg'),
(11, 1, 'DM-HA-556514', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault.jpg'),
(12, 1, 'DM-HA-556515', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault1.jpg'),
(13, 1, 'DM-HA-556516', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault2.jpg'),
(14, 1, 'DM-HA-556517', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault3.jpg'),
(15, 1, 'DM-HA-556518', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault4.jpg'),
(16, 1, 'DM-HA-556519', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault5.jpg'),
(17, 1, 'DM-HA-556520', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault6.jpg'),
(18, 1, 'DM-HA-556521', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault7.jpg'),
(19, 1, 'DM-HA-556524', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault8.jpg'),
(20, 1, 'DM-HA-556550', '', '', '2018-10-15', './assets/admin/uploads/maxresdefault9.jpg'),
(21, 2, 'DM-HA-362147', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet.jpg'),
(22, 2, 'DM-HA-362148', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet1.jpg'),
(23, 2, 'DM-HA-362149', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet2.jpg'),
(24, 2, 'DM-HA-362150', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet3.jpg'),
(25, 2, 'DM-HA-362151', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet4.jpg'),
(26, 2, 'DM-HA-362152', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet5.jpg'),
(27, 2, 'DM-HO 362153', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet6.jpg'),
(28, 2, 'DM-HA-362154', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet7.jpg'),
(29, 2, 'DM-HA-362155', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet8.jpg'),
(30, 2, 'DM-HA-362156', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet9.jpg'),
(31, 2, 'DM-HA-362157', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet10.jpg'),
(32, 2, 'DM-HA-362158', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet11.jpg'),
(33, 2, 'DM-HA-362159', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet12.jpg'),
(34, 2, 'DM-HA-362160', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet13.jpg'),
(35, 2, 'DM-HA-362161', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet14.jpg'),
(36, 2, 'DM-HA-362162', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet15.jpg'),
(37, 2, 'DM-HA-362163', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet16.jpg'),
(38, 2, 'DM-HA-362164', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet17.jpg'),
(39, 2, 'DM-HA-362165', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet18.jpg'),
(40, 2, 'DM-HA-362166', '', '', '2019-01-01', './assets/admin/uploads/dayang-runner-bullet19.jpg'),
(41, 3, 'DM-HA-324406', '', '', '2019-01-01', './assets/admin/uploads/rksv3.jpg'),
(42, 3, 'DM HA 32-4412', '', '', '2019-01-01', './assets/admin/uploads/rksv31.jpg'),
(43, 3, 'DM HA 32-4413', '', '', '2019-01-01', './assets/admin/uploads/rksv32.jpg'),
(44, 3, 'DM HA 32-4414', '', '', '2019-01-01', './assets/admin/uploads/rksv33.jpg'),
(45, 3, 'DM HA 32-4415', '', '', '2019-01-01', './assets/admin/uploads/rksv34.jpg'),
(46, 3, 'DM HA 32-4416', '', '', '2019-01-01', './assets/admin/uploads/rksv35.jpg'),
(47, 3, 'DM HA 32-4462', '', '', '2019-01-01', './assets/admin/uploads/rksv36.jpg'),
(48, 3, 'DM HA 32-4464', '', '', '2019-01-01', './assets/admin/uploads/rksv37.jpg'),
(49, 3, 'DM HA 32-4497', '', '', '2019-01-01', './assets/admin/uploads/rksv38.jpg'),
(50, 3, 'DM HA 32-4498', '', '', '2019-01-01', './assets/admin/uploads/rksv39.jpg'),
(51, 3, 'DM HA 32-6646', '', '', '2019-01-01', './assets/admin/uploads/rksv310.jpg'),
(52, 3, 'DM HA 32-6648', '', '', '2019-01-01', './assets/admin/uploads/rksv311.jpg'),
(53, 3, 'DM HA 32-6649', '', '', '2019-01-01', './assets/admin/uploads/rksv312.jpg'),
(54, 3, 'DM HA 32-6650', '', '', '2019-01-01', './assets/admin/uploads/rksv313.jpg'),
(55, 3, 'DM HA 32-6657', '', '', '2019-01-01', './assets/admin/uploads/rksv314.jpg'),
(56, 3, 'DM HA 32-6661', '', '', '2019-01-01', './assets/admin/uploads/rksv315.jpg'),
(57, 3, 'DM HA 32-6665', '', '', '2019-01-01', './assets/admin/uploads/rksv316.jpg'),
(58, 3, 'DM HA 32-6669', '', '', '2019-01-01', './assets/admin/uploads/rksv317.jpg'),
(59, 3, 'DM HA 32-6673', '', '', '2019-01-01', './assets/admin/uploads/rksv318.jpg'),
(60, 3, 'DM HA 32-8260', '', '', '2019-01-01', './assets/admin/uploads/rksv319.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_daily_payment`
--

CREATE TABLE `tbl_daily_payment` (
  `payment_id` int(3) NOT NULL,
  `biker_name` varchar(32) NOT NULL,
  `payment_date` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_method` tinyint(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_daily_payment`
--

INSERT INTO `tbl_daily_payment` (`payment_id`, `biker_name`, `payment_date`, `amount`, `payment_method`, `timestamp`) VALUES
(1, '8', '2019-02-02', 200, 2, '2019-02-02 06:06:18'),
(2, '27', '2019-02-02', 250, 1, '2019-02-02 06:07:08'),
(3, '16', '2019-02-02', 500, 1, '2019-02-02 06:10:31'),
(4, '13', '2019-02-02', 400, 1, '2019-02-02 07:03:33'),
(5, '39', '2019-02-02', 300, 1, '2019-02-02 07:07:45'),
(6, '33', '2019-02-02', 200, 1, '2019-02-02 07:11:29'),
(7, '45', '2019-02-02', 300, 1, '2019-02-02 07:15:17'),
(8, '9', '2019-02-02', 300, 1, '2019-02-02 07:35:56'),
(9, '34', '2019-02-02', 200, 1, '2019-02-02 07:41:26'),
(10, '17', '2019-02-02', 300, 1, '2019-02-02 07:45:34'),
(11, '14', '2019-02-02', 350, 1, '2019-02-02 08:34:53'),
(12, '43', '2019-02-02', 250, 1, '2019-02-02 08:35:57'),
(13, '19', '2019-02-02', 300, 2, '2019-02-02 11:21:35'),
(14, '23', '2019-02-02', 200, 2, '2019-02-02 12:18:31'),
(15, '51', '2019-02-02', 200, 2, '2019-02-02 12:19:09'),
(16, '35', '2019-02-02', 400, 1, '2019-02-02 12:21:34'),
(17, '37', '2019-02-02', 200, 1, '2019-02-02 12:22:06'),
(18, '55', '2019-02-02', 250, 2, '2019-02-02 12:24:16'),
(19, '57', '2019-02-02', 300, 1, '2019-02-02 12:30:21'),
(20, '40', '2019-02-02', 200, 2, '2019-02-02 12:36:53'),
(21, '18', '2019-02-02', 400, 1, '2019-02-02 12:51:08'),
(24, '29', '2019-02-02', 200, 2, '2019-02-02 13:13:09'),
(25, '53', '2019-02-02', 300, 2, '2019-02-02 13:15:41'),
(26, '20', '2019-02-02', 400, 2, '2019-02-02 13:21:32'),
(27, '30', '2019-02-02', 300, 2, '2019-02-02 13:26:24'),
(28, '46', '2019-02-02', 300, 2, '2019-02-02 14:00:52'),
(29, '28', '2019-02-02', 800, 2, '2019-02-02 14:01:26'),
(30, '11', '2019-02-02', 300, 2, '2019-02-02 14:02:44'),
(31, '47', '2019-02-02', 600, 1, '2019-02-02 14:03:05'),
(32, '12', '2019-02-02', 300, 2, '2019-02-02 14:04:11'),
(33, '56', '2019-02-02', 200, 2, '2019-02-02 16:41:34'),
(34, '24', '2019-02-02', 400, 2, '2019-02-02 16:42:00'),
(35, '26', '2019-02-02', 250, 2, '2019-02-02 16:42:57'),
(36, '41', '2019-02-02', 300, 2, '2019-02-03 06:51:47'),
(37, '38', '2019-02-03', 500, 2, '2019-02-03 06:53:53'),
(38, '17', '2019-02-03', 400, 1, '2019-02-03 06:54:19'),
(39, '44', '2019-02-03', 300, 2, '2019-02-03 11:33:29'),
(40, '39', '2019-02-03', 250, 2, '2019-02-03 11:33:45'),
(41, '14', '2019-02-03', 200, 1, '2019-02-03 11:34:39'),
(42, '42', '2019-02-03', 400, 2, '2019-02-03 11:35:32'),
(43, '22', '2019-02-03', 500, 2, '2019-02-03 11:59:11'),
(44, '33', '2019-02-03', 300, 2, '2019-02-03 12:05:16'),
(45, '30', '2019-02-03', 300, 2, '2019-02-03 13:02:19'),
(46, '6', '2019-02-03', 650, 2, '2019-02-03 13:03:10'),
(47, '12', '2019-02-03', 400, 2, '2019-02-03 13:03:53'),
(48, '43', '2019-02-03', 300, 2, '2019-02-03 13:07:14'),
(49, '9', '2019-02-03', 300, 1, '2019-02-03 13:37:58'),
(51, '32', '2019-02-03', 300, 2, '2019-02-03 13:38:49'),
(52, '55', '2019-02-03', 300, 2, '2019-02-03 14:07:44'),
(53, '15', '2019-02-03', 100, 2, '2019-02-03 14:43:02'),
(54, '21', '2019-02-03', 400, 2, '2019-02-03 14:40:22'),
(55, '29', '2019-02-03', 300, 2, '2019-02-03 14:53:48'),
(56, '40', '2019-02-03', 200, 2, '2019-02-03 15:05:01'),
(57, '34', '2019-02-03', 400, 2, '2019-02-03 15:20:50'),
(58, '56', '2019-02-03', 300, 2, '2019-02-03 17:07:42'),
(59, '48', '2019-02-03', 200, 2, '2019-02-03 17:08:28'),
(60, '27', '2019-02-03', 200, 2, '2019-02-03 17:09:08'),
(61, '20', '2019-02-03', 400, 2, '2019-02-03 17:09:36'),
(62, '41', '2019-02-03', 250, 2, '2019-02-04 08:06:01'),
(63, '58', '2019-02-03', 300, 2, '2019-02-04 08:06:19'),
(64, '51', '2019-02-03', 250, 2, '2019-02-04 08:13:06'),
(65, '13', '2019-02-03', 300, 2, '2019-02-04 08:13:32'),
(66, '37', '2019-02-03', 200, 2, '2019-02-04 08:14:20'),
(67, '17', '2019-02-04', 400, 1, '2019-02-04 08:21:29'),
(68, '6', '2019-02-04', 500, 1, '2019-02-04 08:21:54'),
(69, '48', '2019-02-04', 200, 1, '2019-02-04 08:22:14'),
(70, '39', '2019-02-04', 300, 1, '2019-02-04 08:22:32'),
(71, '50', '2019-02-04', 5000, 1, '2019-02-04 08:23:16'),
(72, '46', '2019-02-04', 300, 2, '2019-02-04 08:23:44'),
(73, '28', '2019-02-04', 400, 2, '2019-02-04 08:24:01'),
(74, '18', '2019-02-04', 800, 2, '2019-02-04 08:24:19'),
(75, '52', '2019-02-04', 300, 2, '2019-02-04 08:24:35'),
(76, '58', '2019-02-04', 300, 1, '2019-02-04 08:49:05'),
(77, '15', '2019-02-04', 500, 1, '2019-02-04 11:37:46'),
(78, '57', '2019-02-04', 300, 1, '2019-02-04 11:38:04'),
(79, '23', '2019-02-04', 300, 2, '2019-02-04 11:38:30'),
(80, '35', '2019-02-04', 400, 2, '2019-02-04 11:38:52'),
(81, '16', '2019-02-04', 400, 2, '2019-02-04 11:48:54'),
(82, '13', '2019-02-04', 300, 2, '2019-02-04 11:52:42'),
(83, '44', '2019-02-04', 200, 2, '2019-02-04 12:34:29'),
(84, '40', '2019-02-04', 200, 2, '2019-02-04 12:34:47'),
(85, '27', '2019-02-04', 100, 2, '2019-02-04 13:18:48'),
(86, '12', '2019-02-04', 400, 1, '2019-02-04 13:19:11'),
(87, '34', '2019-02-04', 400, 2, '2019-02-04 13:49:51'),
(88, '42', '2019-02-04', 300, 2, '2019-02-04 13:50:17'),
(89, '43', '2019-02-04', 300, 2, '2019-02-04 14:16:48'),
(90, '9', '2019-02-04', 300, 1, '2019-02-04 14:17:05'),
(91, '29', '2019-02-04', 300, 2, '2019-02-04 14:31:12'),
(92, '8', '2019-02-04', 200, 2, '2019-02-04 15:01:07'),
(93, '41', '2019-02-04', 300, 2, '2019-02-05 06:30:43'),
(94, '14', '2019-02-04', 200, 2, '2019-02-05 06:31:09'),
(95, '45', '2019-02-04', 350, 2, '2019-02-05 06:31:30'),
(96, '51', '2019-02-04', 300, 2, '2019-02-05 06:31:51'),
(97, '38', '2019-02-04', 200, 2, '2019-02-05 06:32:19'),
(98, '36', '2019-02-04', 400, 2, '2019-02-05 06:32:50'),
(99, '20', '2019-02-04', 400, 2, '2019-02-05 06:33:10'),
(100, '17', '2019-02-05', 400, 1, '2019-02-05 08:00:25'),
(101, '57', '2019-02-05', 200, 1, '2019-02-05 08:00:49'),
(102, '55', '2019-02-05', 300, 1, '2019-02-05 08:01:11'),
(103, '25', '2019-02-05', 300, 2, '2019-02-05 08:01:34'),
(104, '56', '2019-02-05', 500, 2, '2019-02-05 08:01:50'),
(105, '9', '2019-02-05', 300, 1, '2019-02-05 09:23:01'),
(106, '43', '2019-02-05', 300, 2, '2019-02-05 09:51:45'),
(107, '6', '2019-02-05', 300, 1, '2019-02-05 10:05:46'),
(108, '45', '2019-02-05', 300, 2, '2019-02-05 10:06:05'),
(109, '30', '2019-02-05', 600, 1, '2019-02-05 10:42:42'),
(110, '20', '2019-02-05', 300, 1, '2019-02-05 11:07:56'),
(111, '11', '2019-02-05', 650, 2, '2019-02-05 11:21:46'),
(113, '15', '2019-02-05', 200, 1, '2019-02-06 07:24:19'),
(114, '12', '2019-02-05', 700, 1, '2019-02-06 07:24:46'),
(115, '27', '2019-02-05', 200, 1, '2019-02-06 07:25:03'),
(116, '46', '2019-02-05', 300, 2, '2019-02-06 07:25:31'),
(117, '23', '2019-02-05', 300, 2, '2019-02-06 07:25:51'),
(118, '58', '2019-02-05', 300, 2, '2019-02-06 07:26:07'),
(119, '51', '2019-02-05', 250, 2, '2019-02-06 07:26:23'),
(120, '40', '2019-02-05', 200, 2, '2019-02-06 07:26:38'),
(121, '34', '2019-02-05', 400, 2, '2019-02-06 07:26:58'),
(122, '13', '2019-02-05', 300, 2, '2019-02-06 07:27:15'),
(123, '29', '2019-02-05', 197, 2, '2019-02-06 07:27:33'),
(124, '52', '2019-02-05', 300, 2, '2019-02-06 07:27:51'),
(125, '19', '2019-02-05', 300, 2, '2019-02-06 07:28:07'),
(126, '14', '2019-02-05', 400, 2, '2019-02-06 07:28:24'),
(127, '33', '2019-02-05', 200, 2, '2019-02-06 07:28:39'),
(128, '38', '2019-02-05', 300, 2, '2019-02-06 07:29:03'),
(129, '39', '2019-02-05', 200, 2, '2019-02-06 07:29:20'),
(130, '41', '2019-02-05', 300, 2, '2019-02-06 07:29:36'),
(131, '34', '2019-02-06', 300, 1, '2019-02-06 07:47:27'),
(132, '28', '2019-02-06', 400, 2, '2019-02-06 07:48:01'),
(133, '22', '2019-02-06', 500, 2, '2019-02-06 07:49:21'),
(134, '23', '2019-02-06', 300, 2, '2019-02-06 08:02:48'),
(135, '6', '2019-02-06', 400, 2, '2019-02-06 11:09:06'),
(136, '17', '2019-02-06', 400, 1, '2019-02-06 11:09:32'),
(137, '39', '2019-02-06', 250, 1, '2019-02-06 12:08:04'),
(138, '9', '2019-02-06', 300, 1, '2019-02-06 12:12:42'),
(139, '37', '2019-02-06', 300, 1, '2019-02-06 12:58:06'),
(140, '40', '2019-02-06', 200, 2, '2019-02-06 13:06:23'),
(141, '48', '2019-02-06', 300, 2, '2019-02-06 13:06:54'),
(144, '53', '2019-02-06', 300, 2, '2019-02-06 13:08:45'),
(145, '43', '2019-02-06', 300, 2, '2019-02-06 13:09:12'),
(146, '46', '2019-02-06', 300, 2, '2019-02-06 13:10:04'),
(147, '57', '2019-02-06', 300, 1, '2019-02-06 14:05:20'),
(148, '51', '2019-02-06', 250, 1, '2019-02-06 14:05:37'),
(149, '12', '2019-02-06', 200, 1, '2019-02-06 14:23:56'),
(150, '36', '2019-02-06', 600, 2, '2019-02-06 14:24:29'),
(151, '18', '2019-02-06', 400, 2, '2019-02-06 14:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE `tbl_expense` (
  `expense_id` int(3) NOT NULL,
  `expense_date` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_expense`
--

INSERT INTO `tbl_expense` (`expense_id`, `expense_date`, `amount`, `purpose`) VALUES
(1, '2019-02-02', 180, 'TEA PACK ,SUGAR,GINGER,LEMON PURCHASE FOR OFFICE'),
(2, '2019-02-02', 70, 'Officesnacks'),
(3, '2019-02-04', 50, 'Peon Mamun Lunch'),
(4, '2019-02-04', 50, 'Mobile recharge for 01947000013'),
(6, '2019-02-04', 100, 'Mobile recharge 01968800522'),
(7, '2019-02-05', 100, 'Mobile recharge for 01947000013'),
(8, '2019-02-05', 100, 'Wastage bill'),
(9, '2019-02-06', 200, 'conveyance bill (Simon)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_loan`
--

CREATE TABLE `tbl_loan` (
  `loan_id` int(3) NOT NULL,
  `biker_name` varchar(32) NOT NULL,
  `payment_date` varchar(15) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_method` tinyint(4) NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_loan`
--

INSERT INTO `tbl_loan` (`loan_id`, `biker_name`, `payment_date`, `amount`, `payment_method`, `purpose`) VALUES
(1, '10', '2019-02-05', 1000, 1, 'Learner card re new');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_members`
--

CREATE TABLE `tbl_members` (
  `member_id` int(3) NOT NULL,
  `member_name` varchar(55) NOT NULL,
  `official_number` varchar(15) NOT NULL,
  `personal_number` varchar(15) NOT NULL,
  `joining_date` varchar(15) NOT NULL,
  `alternative_mobile` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_members`
--

INSERT INTO `tbl_members` (`member_id`, `member_name`, `official_number`, `personal_number`, `joining_date`, `alternative_mobile`, `img`) VALUES
(6, 'MASUM HAYDER MITHU', '01880004860', '01906561079', '', '01995360384 wife', './assets/admin/uploads/'),
(7, 'NIJHU RIDOY	', '01877739624', '01676365977', '', '01989669318 Mom', './assets/admin/uploads/'),
(8, 'JAMIL	', '1877739637', '1731188924', '', '', './assets/admin/uploads/'),
(9, 'PINTU	', '1877719737', '1711221345', '', '1642453344', './assets/admin/uploads/'),
(10, 'MOSTOFA	', '1880087049', '1723302371', '', '1942801775', './assets/admin/uploads/'),
(11, 'TOUHID	', '1880087024', '1641845790', '', '1615828477 wife', './assets/admin/uploads/'),
(12, 'SALIM RAJ	', '1880004854', '1717709675', '', '1913017184 D', './assets/admin/uploads/'),
(13, 'AL AMIN	MOLLA', '1880087021', '1885614971', '', '1738961284', './assets/admin/uploads/'),
(14, 'ANAWAR	', '1877719748', '1943428528', '', '1763286635', './assets/admin/uploads/'),
(15, 'SOHEL AHMED BAPPI	', '1880004847', '1771542825', '', '1857018663', './assets/admin/uploads/'),
(16, 'MISHU	', '1736984096', '1878296226', '', '1812272145 mama 1914537305 abbu', './assets/admin/uploads/'),
(17, 'SAHIN	', '1880004868', '1682521029', '', '1687711871', './assets/admin/uploads/'),
(18, 'ILIAS	', '1814454628', '1710478653', '', '1815225848 cousin', './assets/admin/uploads/'),
(19, 'RUBEL	(REJAUL RANA)', '1877719734', '1717017524', '', '1856761376', './assets/admin/uploads/'),
(20, 'HIRA	', '1855745751', '1746124167', '', '1712200610 friend', './assets/admin/uploads/'),
(21, 'DIPU HAQ	', '1874296282', '1919814997', '', '1961560197 wife', './assets/admin/uploads/'),
(22, 'MAMUN	HUJUR', '1877719749', '1851259487', '', '1915159661 room mate  01812153557 apu', './assets/admin/uploads/'),
(23, 'ARAFAT  SHARIF	', '1880003695', '1858421004', '', '1787508102 wife', './assets/admin/uploads/'),
(24, 'TAMIM	', '1915667316', '1935790029', '', '1911221403 Dulavai', './assets/admin/uploads/'),
(25, 'MEHEDI	lALBAG', '1880087016', '1643570174', '', '1771728256 Wife', './assets/admin/uploads/'),
(26, 'BAKI BILLAH', '1880087015', '1684125290', '', '1685640406 wife', './assets/admin/uploads/'),
(27, 'SAYEM	', '1880087034', '1984381175', '', '1711174113 boro vai', './assets/admin/uploads/'),
(28, 'RASEL	', '1880003693', '1621214683', '', '1918902352 mama', './assets/admin/uploads/'),
(29, 'KHALIL	', '1880087011', '1916269406', '', '1921248547 wife', './assets/admin/uploads/'),
(30, 'TAJUL ISLAM', '1877719744', '1647418047', '', '1860456631 arman', './assets/admin/uploads/'),
(31, 'ATIK	', '1880087036', '1995311594', '', '1941946171 vai', './assets/admin/uploads/'),
(32, 'SHARIF	', '1880003696', '1708558765', '', '1856754804 baba', './assets/admin/uploads/'),
(33, 'AMDADUL HAQUE	', '1877719738', '1971111476', '', '1747394904 mom', './assets/admin/uploads/'),
(34, 'RIFAT AHMED	', '1880003698', '1915681036', '', '1953618272mom', './assets/admin/uploads/'),
(35, 'ANI	', '1856245313', '1551612278', '', '1850162129 wife', './assets/admin/uploads/'),
(36, 'SUMON BEPARI	', '1920266946', '1880003697', '', '1998117413 wife', './assets/admin/uploads/'),
(37, 'RASHID	SZK', '1877719735', '1735421401', '', '1748952977 apu', './assets/admin/uploads/'),
(38, 'KAZI SABBIR	', '1752986478', '1839328321', '', '1923715037 abbu', './assets/admin/uploads/'),
(39, 'MONG	', '1877719732', '1986782294', '', '1553280133 mama', './assets/admin/uploads/'),
(40, 'PRINCE	', '1877719731', '1619464384', '', '1534921105 sahin', './assets/admin/uploads/'),
(41, 'MD SELIM	', '1872432334', '1903994849', '', '1989198088 apu', './assets/admin/uploads/'),
(42, 'MOHIN	', '1877719747', '1927913787', '', '1731587255', './assets/admin/uploads/'),
(43, 'IFTEKHAR	', '1880087040', '1638794059', '', '1718964692', './assets/admin/uploads/'),
(44, 'RONY	', '1880087007', '1676935656', '', '1822722773', './assets/admin/uploads/'),
(45, 'SUJON	', '1600102599', '1985917432', '', '1630843388 ma', './assets/admin/uploads/'),
(46, 'ABU RASEL	', '1880004849', '1869131567', '', '1864844072', './assets/admin/uploads/'),
(47, 'ARAFAT	', '1877739649', '1775403677', '', '1711733636', './assets/admin/uploads/'),
(48, 'MOSARROF	', '1877719746', '1878467643', '', '1880817372 wife', './assets/admin/uploads/'),
(49, 'TUSHAR	', '1880087038', '1730213561', '', '1711353250 abbu', './assets/admin/uploads/'),
(50, 'MAHFUZUR RAHMAN	', '1880004848', '1778787864', '', '1715219121 Dad', './assets/admin/uploads/'),
(51, 'KAZI	 ALAMIN', '1880087004', '1914589334', '', '1926186445', './assets/admin/uploads/'),
(52, 'HABIBUR	', '1874285165', '1978076905', '', '1787110043 ma', './assets/admin/uploads/'),
(53, 'RABIUL	', '1877719740', '1684099790', '', '1936902357', './assets/admin/uploads/'),
(54, 'SIHAB 	', '1', '1304054515', '', '1', './assets/admin/uploads/'),
(55, 'PAPEL', '1877719742', '1777452361', '2018-12-17', '1914168688 shakil', './assets/admin/uploads/'),
(56, 'NOYON	', '1880087039', '1711101268', '', '1749630315', './assets/admin/uploads/'),
(57, 'ALAM', '1880087025', '1880087025', '', '1880087025', './assets/admin/uploads/'),
(58, 'PAPPU', '1911088302', '1675680736', '', '1718269406 apu', './assets/admin/uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_fees`
--

CREATE TABLE `tbl_membership_fees` (
  `fees_id` int(3) NOT NULL,
  `member_id` int(3) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penalty`
--

CREATE TABLE `tbl_penalty` (
  `penalty_id` int(3) NOT NULL,
  `biker_name` tinyint(4) NOT NULL,
  `joining_date` varchar(15) NOT NULL,
  `release_date` varchar(15) NOT NULL,
  `working_days` int(11) NOT NULL,
  `total_deposite` int(11) NOT NULL,
  `late_deposite` int(11) NOT NULL,
  `depreciation` int(11) NOT NULL,
  `total_fine` int(11) NOT NULL,
  `purpose` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_return_bikes`
--

CREATE TABLE `tbl_return_bikes` (
  `return_id` int(3) NOT NULL,
  `biker_name` int(3) NOT NULL,
  `bike_no` varchar(15) NOT NULL,
  `last_kilometer` int(11) NOT NULL,
  `distribution_date` varchar(15) NOT NULL,
  `return_date` varchar(15) NOT NULL,
  `purpose` text NOT NULL,
  `total_days` int(3) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_servicing`
--

CREATE TABLE `tbl_servicing` (
  `servicing_id` int(3) NOT NULL,
  `biker_name` varchar(55) NOT NULL,
  `bike_no` varchar(15) NOT NULL,
  `next_servicing_date` varchar(15) NOT NULL,
  `next_km` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1=done,0=not done',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login_type` tinyint(2) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `password`, `login_type`, `created_date`) VALUES
(1, 'Run Bangladesh', 'runbd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2019-01-24 08:48:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_bikers`
--
ALTER TABLE `tbl_bikers`
  ADD PRIMARY KEY (`biker_id`);

--
-- Indexes for table `tbl_bikes`
--
ALTER TABLE `tbl_bikes`
  ADD PRIMARY KEY (`bike_id`);

--
-- Indexes for table `tbl_daily_payment`
--
ALTER TABLE `tbl_daily_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `tbl_loan`
--
ALTER TABLE `tbl_loan`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `tbl_members`
--
ALTER TABLE `tbl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_membership_fees`
--
ALTER TABLE `tbl_membership_fees`
  ADD PRIMARY KEY (`fees_id`);

--
-- Indexes for table `tbl_penalty`
--
ALTER TABLE `tbl_penalty`
  ADD PRIMARY KEY (`penalty_id`);

--
-- Indexes for table `tbl_return_bikes`
--
ALTER TABLE `tbl_return_bikes`
  ADD PRIMARY KEY (`return_id`);

--
-- Indexes for table `tbl_servicing`
--
ALTER TABLE `tbl_servicing`
  ADD PRIMARY KEY (`servicing_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `account_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bikers`
--
ALTER TABLE `tbl_bikers`
  MODIFY `biker_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tbl_bikes`
--
ALTER TABLE `tbl_bikes`
  MODIFY `bike_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `tbl_daily_payment`
--
ALTER TABLE `tbl_daily_payment`
  MODIFY `payment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  MODIFY `expense_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_loan`
--
ALTER TABLE `tbl_loan`
  MODIFY `loan_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_members`
--
ALTER TABLE `tbl_members`
  MODIFY `member_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_membership_fees`
--
ALTER TABLE `tbl_membership_fees`
  MODIFY `fees_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_penalty`
--
ALTER TABLE `tbl_penalty`
  MODIFY `penalty_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_return_bikes`
--
ALTER TABLE `tbl_return_bikes`
  MODIFY `return_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_servicing`
--
ALTER TABLE `tbl_servicing`
  MODIFY `servicing_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
