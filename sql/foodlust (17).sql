-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2017 at 08:51 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodlust`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(255) NOT NULL,
  `push` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `name`, `date`, `action`, `push`) VALUES
(1, 'bustamante jab', '2017-08-22 04:03:32', 'added product', '0'),
(2, 'bustamante jab', '2017-08-22 04:04:03', 'added product', '0'),
(3, 'bustamante jab', '2017-08-22 04:28:03', 'added photo to a product', '0'),
(4, 'bustamante jab', '2017-08-22 04:37:16', 'added product', '0'),
(5, 'bustamante jab', '2017-08-22 04:37:38', 'added photo to a product', '0'),
(6, 'bustamante jab', '2017-08-22 04:42:26', 'added photo to a product', '0'),
(7, 'bustamante jab', '2017-08-22 04:42:42', 'added product', '0'),
(8, 'bustamante jab', '2017-08-22 04:42:54', 'added photo to a product', '0'),
(9, 'estacioosss JOAN', '2017-08-22 05:06:31', 'Logged In', '0'),
(10, 'estacioosss JOAN', '2017-08-22 05:07:04', 'added product', '0'),
(11, 'bustamante jab', '2017-08-22 06:30:18', 'added photo to a product', '0'),
(12, 'bustamante jab', '2017-08-22 06:30:22', 'added photo to a product', '0'),
(13, 'bustamante jab', '2017-08-22 06:31:29', 'added photo to a product', '0'),
(14, 'estacioosss JOAN', '2017-08-22 06:33:42', 'added photo to a product', '0'),
(15, 'bustamante jab', '2017-08-22 09:59:04', 'rated a Photo 5 star', '0'),
(16, 'estacioosss JOAN', '2017-08-22 10:16:14', 'Logout from foodlust', '0'),
(17, 'quinto teddy', '2017-08-22 10:16:33', 'Logged In', '0'),
(18, 'quinto teddy', '2017-08-22 10:42:58', 'rated a Photo 3 star', '0'),
(19, 'quinto teddy', '2017-08-22 10:46:12', 'added product', '0'),
(20, 'quinto teddy', '2017-08-22 10:49:40', 'added photo to a product', '0'),
(21, 'quinto teddy', '2017-08-22 12:13:52', 'rated a Photo 5 star', '0'),
(22, 'quinto teddy', '2017-08-22 14:05:01', 'Logout from foodlust', '0'),
(23, 'bustamante jab', '2017-08-22 14:06:07', 'Logout from foodlust', '0'),
(24, 'estacioosss JOAN', '2017-08-25 14:17:42', 'Logged In', '0'),
(25, 'estacioosss JOAN', '2017-08-25 15:03:24', 'Updated product', '0'),
(26, 'quinto teddy', '2017-08-25 15:17:54', 'Logged In', '0'),
(27, 'quinto teddy', '2017-08-25 15:18:54', 'Updated product', '0'),
(28, 'estacioosss JOAN', '2017-08-25 17:01:08', 'Logout from foodlust', '0'),
(29, 'quinto teddy', '2017-08-25 17:01:12', 'Logout from foodlust', '0'),
(30, 'estacioosss JOAN', '2017-08-26 02:31:49', 'Logged In', '0'),
(31, 'estacioosss JOAN', '2017-08-26 03:00:28', 'added business inq', '0'),
(32, 'quinto teddy', '2017-08-26 03:25:55', 'Logged In', '0'),
(33, 'quinto teddy', '2017-08-26 03:26:13', 'added product', '0'),
(34, 'estacioosss JOAN', '2017-08-26 03:26:51', 'added business inq', '0'),
(35, 'estacioosss JOAN', '2017-08-26 03:27:20', 'added business inq', '0'),
(36, 'estacioosss JOAN', '2017-08-26 03:27:43', 'deleted product', '0'),
(37, 'estacioosss JOAN', '2017-08-26 03:29:50', 'added business inq', '0'),
(38, 'estacioosss JOAN', '2017-08-26 03:36:09', 'added business inq', '0'),
(39, 'estacioosss JOAN', '2017-08-26 03:36:37', 'added business inq', '0'),
(40, 'estacioosss JOAN', '2017-08-26 03:36:43', 'deleted product', '0'),
(41, 'estacioosss JOAN', '2017-08-26 03:36:44', 'deleted product', '0'),
(42, 'estacioosss JOAN', '2017-08-26 03:36:46', 'deleted product', '0'),
(43, 'estacioosss JOAN', '2017-08-26 03:41:01', 'added business inq', '0'),
(44, 'estacioosss JOAN', '2017-08-26 03:45:39', 'deleted product', '0'),
(45, 'estacioosss JOAN', '2017-08-26 03:45:40', 'deleted product', '0'),
(46, 'estacioosss JOAN', '2017-08-26 03:45:42', 'deleted product', '0'),
(47, 'estacioosss JOAN', '2017-08-26 04:25:30', 'added photo to a product', '0'),
(48, 'estacioosss JOAN', '2017-08-26 04:27:28', 'added photo to a product', '0'),
(49, 'estacioosss JOAN', '2017-08-26 04:29:10', 'added photo to a product', '0'),
(50, 'quinto teddy', '2017-08-26 04:30:12', 'added photo to a product', '0'),
(51, 'estacioosss JOAN', '2017-08-26 04:32:06', 'added photo to a product', '0'),
(52, 'estacioosss JOAN', '2017-08-26 04:34:20', 'added photo to a product', '0'),
(53, 'estacioosss JOAN', '2017-08-26 04:38:57', 'added photo to a product', '0'),
(54, 'estacioosss JOAN', '2017-08-26 04:41:28', 'added business inq', '0'),
(55, 'estacioosss JOAN', '2017-08-26 04:41:38', 'added photo to a product', '0'),
(56, 'estacioosss JOAN', '2017-08-26 04:52:47', 'added photo to a product', '0'),
(57, 'estacioosss JOAN', '2017-08-26 04:53:17', 'added photo to a product', '0'),
(58, 'estacioosss JOAN', '2017-08-26 04:53:24', 'added photo to a product', '0'),
(59, 'estacioosss JOAN', '2017-08-26 05:44:19', 'added photo to a product', '0'),
(60, 'estacioosss JOAN', '2017-08-26 05:44:36', 'added photo to a product', '0'),
(61, 'estacioosss JOAN', '2017-08-26 05:48:40', 'added photo to a product', '0'),
(62, 'quinto teddy', '2017-08-26 06:10:18', 'Updated product', '0'),
(63, 'estacioosss JOAN', '2017-08-26 06:19:02', 'Updated product', '0'),
(64, 'quinto teddy', '2017-08-26 06:19:38', 'Updated product', '0'),
(65, 'quinto teddy', '2017-08-26 06:19:50', 'Updated product', '0'),
(66, 'estacioosss JOAN', '2017-08-26 13:19:36', 'Logged In', '0'),
(67, 'estacioosss JOAN', '2017-08-26 13:51:10', 'Commented to a post', '0'),
(68, 'nar kin', '2017-08-26 15:37:09', 'Logged In', '0'),
(69, 'nar kin', '2017-08-26 16:03:27', 'Logout from foodlust', '0'),
(70, 'nar kin', '2017-08-27 02:22:25', 'Logged In', '0'),
(71, 'nar kin', '2017-08-27 02:23:13', 'added business inq', '0'),
(72, 'nar kin', '2017-08-27 05:22:34', 'Logged In', '0'),
(73, 'quinto teddy', '2017-08-27 06:42:16', 'Logged In', '0'),
(74, 'nar kin', '2017-08-27 06:45:17', 'Logout from foodlust', '0'),
(75, 'nar kin', '2017-08-27 06:45:25', 'Logged In', '0'),
(76, 'nar kin', '2017-08-27 06:46:50', 'Logout from foodlust', '0'),
(77, ' ', '2017-08-27 06:46:56', 'Logged In', '0'),
(78, 'estacioosss JOAN', '2017-08-27 06:47:05', 'Logged In', '0'),
(79, 'estacioosss JOAN', '2017-08-27 06:47:26', 'Logout from foodlust', '0'),
(80, 'nar kin', '2017-08-27 06:47:41', 'Logged In', '0'),
(81, 'nar kin', '2017-08-27 06:47:48', 'Logged In', '0'),
(82, 'estacioosss JOAN', '2017-08-27 06:47:54', 'Logged In', '0'),
(83, 'bustamante jab', '2017-08-27 06:49:53', 'Logged In', '0'),
(84, 'bustamante jab', '2017-08-27 06:50:03', 'Logout from foodlust', '0'),
(85, 'quinto teddy', '2017-08-27 06:50:14', 'Logout from foodlust', '0'),
(86, 'estacioosss JOAN', '2017-08-27 06:50:49', 'Logged In', '0'),
(87, 'estacioosss JOAN', '2017-08-27 06:51:07', 'Logout from foodlust', '0'),
(88, 'nar kin', '2017-08-27 06:51:40', 'Logged In', '0'),
(89, 'nar kin', '2017-08-27 06:51:48', 'Logout from foodlust', '0'),
(90, 'estacioosss JOAN', '2017-08-27 06:52:10', 'Logged In', '0'),
(91, 'quinto teddy', '2017-08-27 06:52:50', 'Logged In', '0'),
(92, 'estacioosss JOAN', '2017-08-27 06:53:08', 'Logged In', '0'),
(93, 'estacioosss JOAN', '2017-08-27 06:53:25', 'Logged In', '0'),
(94, 'estacioosss JOAN', '2017-08-27 06:53:45', 'Logged In', '0'),
(95, 'estacioosss JOAN', '2017-08-27 06:54:15', 'Logged In', '0'),
(96, 'estacioosss JOAN', '2017-08-27 06:54:27', 'Logout from foodlust', '0'),
(97, 'quinto teddy', '2017-08-27 06:54:41', 'Logged In', '0'),
(98, 'quinto teddy', '2017-08-27 06:54:47', 'Logout from foodlust', '0'),
(99, 'quinto teddy', '2017-08-27 06:55:10', 'Logged In', '0'),
(100, 'quinto teddy', '2017-08-27 06:55:35', 'Logged In', '0'),
(101, 'quinto teddy', '2017-08-27 06:57:22', 'Logged In', '0'),
(102, 'quinto teddy', '2017-08-27 06:57:22', 'Logged In', '0'),
(103, 'quinto teddy', '2017-08-27 06:57:29', 'Logout from foodlust', '0'),
(104, 'quinto teddy', '2017-08-27 08:48:05', 'Logged In', '0'),
(105, 'quinto teddy', '2017-08-27 10:07:23', 'Logout from foodlust', '0'),
(106, 'estacioosss JOAN', '2017-08-28 10:40:45', 'Logged In', '0'),
(107, 'estacioosss JOAN', '2017-08-28 11:41:34', 'interested in a inquery', '0'),
(108, 'estacioosss JOAN', '2017-08-28 11:44:32', 'interested in a inquery', '0'),
(109, 'estacioosss JOAN', '2017-08-28 11:44:59', 'interested in a inquery', '0'),
(110, 'estacioosss JOAN', '2017-08-28 11:51:36', 'interested in a inquery', '0'),
(111, 'estacioosss JOAN', '2017-08-28 11:52:07', 'interested in a inquery', '0'),
(112, 'estacioosss JOAN', '2017-08-28 11:52:13', 'interested in a inquery', '0'),
(113, 'estacioosss JOAN', '2017-08-28 11:52:16', 'interested in a inquery', '0'),
(114, 'estacioosss JOAN', '2017-08-28 11:56:01', 'interested in a inquery', '0'),
(115, 'estacioosss JOAN', '2017-08-28 11:56:02', 'interested in a inquery', '0'),
(116, 'estacioosss JOAN', '2017-08-28 11:56:02', 'interested in a inquery', '0'),
(117, 'estacioosss JOAN', '2017-08-28 11:56:14', 'interested in a inquery', '0'),
(118, 'estacioosss JOAN', '2017-08-28 11:56:15', 'interested in a inquery', '0'),
(119, 'estacioosss JOAN', '2017-08-28 11:56:15', 'interested in a inquery', '0'),
(120, 'estacioosss JOAN', '2017-08-28 12:11:49', 'interested in a inquery', '0'),
(121, 'estacioosss JOAN', '2017-08-28 12:11:53', 'interested in a inquery', '0'),
(122, 'estacioosss JOAN', '2017-08-28 12:12:24', 'interested in a inquery', '0'),
(123, 'estacioosss JOAN', '2017-08-28 12:27:42', 'interested in a inquery', '0'),
(124, 'estacioosss JOAN', '2017-08-28 14:32:56', 'interested in a inquery', '0'),
(125, 'estacioosss JOAN', '2017-08-28 14:33:04', 'interested in a inquery', '0'),
(126, 'estacioosss JOAN', '2017-08-28 14:33:24', 'interested in a inquery', '0'),
(127, 'estacioosss JOAN', '2017-08-28 14:34:53', 'interested in a inquery', '0'),
(128, 'estacioosss JOAN', '2017-08-28 14:42:09', 'interested in a inquery', '0'),
(129, 'estacioosss JOAN', '2017-08-28 14:42:12', 'interested in a inquery', '0'),
(130, 'estacioosss JOAN', '2017-08-28 14:42:31', 'interested in a inquery', '0'),
(131, 'estacioosss JOAN', '2017-08-28 14:43:30', 'interested in a inquery', '0'),
(132, 'estacioosss JOAN', '2017-08-28 14:43:59', 'interested in a inquery', '0'),
(133, 'estacioosss JOAN', '2017-08-28 14:44:28', 'interested in a inquery', '0'),
(134, 'quinto teddy', '2017-08-28 15:02:48', 'Logged In', '0'),
(135, 'quinto teddy', '2017-08-28 15:05:09', 'Logout from foodlust', '0'),
(136, 'nar kin', '2017-08-28 15:05:21', 'Logged In', '0'),
(137, 'nar kin', '2017-08-28 15:06:33', 'Logout from foodlust', '0'),
(138, 'quinto teddy', '2017-08-28 15:06:39', 'Logged In', '0'),
(139, 'estacioosss JOAN', '2017-08-28 15:09:02', 'rated a Photo 5 star', '0'),
(140, 'estacioosss JOAN', '2017-08-28 15:10:00', 'interested in a inquery', '0'),
(141, 'quinto teddy', '2017-08-28 15:43:24', 'interested in a inquery', '0'),
(142, 'estacioosss JOAN', '2017-08-28 15:46:37', 'Logout from foodlust', '0'),
(143, 'quinto teddy', '2017-08-28 15:46:42', 'Logout from foodlust', '0'),
(144, 'nar kin', '2017-08-30 02:47:30', 'Logged In', '0'),
(145, 'nar kin', '2017-08-30 05:16:31', 'interested in a inquery', '0'),
(146, 'nar kin', '2017-08-30 05:25:51', 'Commented to a post', '0'),
(147, 'nar kin', '2017-08-30 05:28:06', 'Commented to a post', '0'),
(148, 'quinto teddy', '2017-08-30 05:29:01', 'Logged In', '0'),
(149, 'quinto teddy', '2017-08-30 05:29:22', 'interested in a inquery', '0'),
(150, 'nar kin', '2017-08-30 05:53:19', 'interested in a inquery', '0'),
(151, 'quinto teddy', '2017-08-30 06:01:34', 'interested in a inquery', '0'),
(152, 'quinto teddy', '2017-08-30 06:33:33', 'Logout from foodlust', '0'),
(153, 'rivera diaaa', '2017-08-30 06:33:53', 'Logged In', '0'),
(154, 'rivera diaaa', '2017-08-30 06:34:06', 'interested in a inquery', '0'),
(155, 'rivera diaaa', '2017-08-30 07:51:52', 'Logout from foodlust', '0'),
(156, 'nar kin', '2017-08-30 08:27:29', 'Logout from foodlust', '0'),
(157, 'nar kin', '2017-08-30 11:41:14', 'Logged In', '0'),
(158, 'nar kin', '2017-08-30 11:44:27', 'Logout from foodlust', '0'),
(159, 'quinto teddy', '2017-08-30 11:49:59', 'Logged In', '0'),
(160, 'quinto teddy', '2017-08-30 11:51:06', 'Logout from foodlust', '0'),
(161, 'Quinto Ted', '2017-08-30 12:04:56', 'Logged In', '0'),
(162, 'estacioosss JOAN', '2017-08-30 12:35:00', 'Logged In', '0'),
(163, 'estacioosss JOAN', '2017-08-30 12:35:07', 'Logged In', '0'),
(164, 'estacioosss JOAN', '2017-08-30 12:35:32', 'Logged In', '0'),
(165, 'Quinto Ted', '2017-08-30 12:43:04', 'Logout from foodlust', '0'),
(166, 'estacioosss JOAN', '2017-08-30 12:43:10', 'Logged In', '0'),
(167, 'estacioosss JOAN', '2017-08-30 12:43:15', 'Logout from foodlust', '0'),
(168, 'estacioosss JOAN', '2017-08-30 12:43:20', 'Logout from foodlust', '0'),
(169, 'rivera diaaa', '2017-08-30 12:43:45', 'Logged In', '0'),
(170, 'bustamante jab', '2017-08-30 12:44:04', 'Logged In', '0'),
(171, 'bustamante jab', '2017-08-30 12:44:36', 'Logout from foodlust', '0'),
(172, 'rivera diaaa', '2017-08-30 12:44:44', 'Logout from foodlust', '0'),
(173, 'nar kin', '2017-08-30 12:45:03', 'Logged In', '0'),
(174, 'Quinto Ted', '2017-08-30 12:45:08', 'Logged In', '0'),
(175, 'Quinto Ted', '2017-08-30 12:45:26', 'Logged In', '0'),
(176, 'Quinto Ted', '2017-08-30 12:45:45', 'Logged In', '0'),
(177, 'Quinto Ted', '2017-08-30 12:46:06', 'Logged In', '0'),
(178, 'nar kin', '2017-08-30 12:46:09', 'Logout from foodlust', '0'),
(179, 'Quinto Ted', '2017-08-30 12:46:21', 'Logged In', '0'),
(180, 'Quinto Ted', '2017-08-30 12:46:52', 'Logout from foodlust', '0'),
(181, 'estacioosss JOAN', '2017-08-30 12:47:04', 'Logged In', '0'),
(182, 'estacioosss JOAN', '2017-08-30 12:47:09', 'Logout from foodlust', '0'),
(183, 'estacioosss JOAN', '2017-09-03 06:18:00', 'Logged In', '0'),
(184, 'estacioosss JOAN', '2017-09-03 06:29:17', 'added business inq', '0'),
(185, 'Quinto Ted', '2017-09-03 06:33:23', 'Logged In', '0'),
(186, 'Quinto Ted', '2017-09-03 06:41:57', 'added product', '0'),
(187, 'Quinto Ted', '2017-09-03 12:32:05', 'Logout from foodlust', '0'),
(188, 'nar kin', '2017-09-06 14:17:28', 'Logged In', '0'),
(189, 'sam sam', '2017-09-06 14:18:17', 'Logged In', '0'),
(190, 'sam sam', '2017-09-06 14:18:28', 'Logout from foodlust', '0'),
(191, 'sam sam', '2017-09-06 14:18:35', 'Logged In', '0'),
(192, 'sam sam', '2017-09-06 14:19:25', 'Logout from foodlust', '0'),
(193, 'estacioosss JOAN', '2017-09-06 14:19:31', 'Logged In', '0'),
(194, 'estacioosss JOAN', '2017-09-06 14:19:36', 'Logout from foodlust', '0'),
(195, 'nar kin', '2017-09-06 14:19:51', 'Logout from foodlust', '0'),
(196, 'estacioosss JOAN', '2017-09-06 14:20:59', 'Logged In', '0'),
(197, 'sam sam', '2017-09-06 14:21:37', 'Logged In', '0'),
(198, 'sam sam', '2017-09-06 14:21:42', 'Logout from foodlust', '0'),
(199, ' ', '2017-09-06 14:22:04', 'Logged In', '0'),
(200, 'Quinto Ted', '2017-09-06 14:22:12', 'Logged In', '0'),
(201, 'Quinto Ted', '2017-09-06 14:22:19', 'Logout from foodlust', '0'),
(202, ' ', '2017-09-06 14:22:25', 'Logged In', '0'),
(203, 'estacioosss JOAN', '2017-09-06 14:22:32', 'Logged In', '0'),
(204, 'estacioosss JOAN', '2017-09-06 14:22:43', 'Logged In', '0'),
(205, 'sam sam', '2017-09-06 14:22:50', 'Logged In', '0'),
(206, 'rivera diaaa', '2017-09-06 14:23:03', 'Logged In', '0'),
(207, 'rivera diaaa', '2017-09-06 14:23:10', 'Logged In', '0'),
(208, 'rivera diaaa', '2017-09-06 14:23:19', 'Logged In', '0'),
(209, 'estacioosss JOAN', '2017-09-06 14:24:13', 'Logout from foodlust', '0'),
(210, 'estacioosss JOAN', '2017-09-06 14:25:02', 'Logged In', '0'),
(211, 'rivera diaaa', '2017-09-06 14:25:34', 'Logged In', '0'),
(212, 'rivera diaaa', '2017-09-06 14:25:40', 'Logout from foodlust', '0'),
(213, 'Quinto Ted', '2017-09-06 14:25:46', 'Logged In', '0'),
(214, 'estacioosss JOAN', '2017-09-06 14:26:01', 'Logout from foodlust', '0'),
(215, 'Quinto Ted', '2017-09-06 14:26:37', 'Logged In', '0'),
(216, 'Quinto Ted', '2017-09-06 14:26:37', 'Logged In', '0'),
(217, 'Quinto Ted', '2017-09-06 14:30:44', 'Logged In', '0'),
(218, 'Quinto Ted', '2017-09-06 14:30:49', 'Logout from foodlust', '0'),
(219, 'rivera diaaa', '2017-09-06 14:31:25', 'Logged In', '0'),
(220, 'rivera diaaa', '2017-09-06 14:31:33', 'Logged In', '0'),
(221, 'rivera diaaa', '2017-09-06 14:31:47', 'Logged In', '0'),
(222, 'estacioosss JOAN', '2017-09-06 14:33:08', 'Logged In', '0'),
(223, 'Quinto Ted', '2017-09-06 14:34:39', 'Logout from foodlust', '0'),
(224, 'rivera diaaa', '2017-09-06 14:35:03', 'Logged In', '0'),
(225, 'rivera diaaa', '2017-09-06 14:36:44', 'added product', '0'),
(226, 'rivera diaaa', '2017-09-06 14:40:45', 'Logout from foodlust', '0'),
(227, 'estacioosss JOAN', '2017-09-06 14:41:42', 'Logged In', '0'),
(228, 'estacioosss JOAN', '2017-09-06 14:43:08', 'Logout from foodlust', '0'),
(229, 'estacioosss JOAN', '2017-09-06 14:43:19', 'Logout from foodlust', '0'),
(230, 'bustamante jab', '2017-09-06 14:43:30', 'Logged In', '0'),
(231, 'rivera diaaa', '2017-09-06 14:43:38', 'Logged In', '0'),
(232, 'rivera diaaa', '2017-09-06 14:44:59', 'rated a Photo 5 star', '0'),
(233, 'bustamante jab', '2017-09-06 14:45:16', 'Logout from foodlust', '0'),
(234, 'Quinto Ted', '2017-09-06 15:14:37', 'Logged In', '0'),
(235, 'Quinto Ted', '2017-09-06 15:15:55', 'Logout from foodlust', '0'),
(236, 'rivera diaaa', '2017-09-06 15:39:17', 'Logout from foodlust', '0'),
(237, 'Quinto Ted', '2017-09-07 07:32:10', 'Logged In', '0'),
(238, 'Quinto Ted', '2017-09-07 08:02:58', 'Logout from foodlust', '0'),
(239, 'estacioosss JOAN', '2017-09-07 08:03:18', 'Logged In', '0'),
(240, 'Quinto Ted', '2017-09-07 12:01:35', 'Logged In', '0'),
(241, 'Quinto Ted', '2017-09-10 02:35:51', 'Logged In', '0'),
(242, 'Quinto Ted', '2017-09-10 07:55:27', 'Logout from foodlust', '0'),
(243, 'Quinto Ted', '2017-09-10 08:47:57', 'Logged In', '0'),
(244, 'Quinto Ted', '2017-09-10 09:43:00', 'Logged In', '0'),
(245, 'nar kin', '2017-09-10 11:19:35', 'Logged In', '0'),
(246, 'estacioosss JOAN', '2017-09-10 13:52:01', 'Logged In', '0'),
(247, 'estacioosss JOAN', '2017-09-10 13:52:10', 'Logout from foodlust', '0'),
(248, 'Quinto Ted', '2017-09-10 13:52:24', 'Logged In', '0'),
(249, 'Quinto Ted', '2017-09-10 13:52:35', 'Logout from foodlust', '0'),
(250, 'nar kin', '2017-09-10 13:52:57', 'Logout from foodlust', '0'),
(251, 'Quinto Ted', '2017-09-14 12:23:45', 'Logged In', '0'),
(252, 'Quinto Ted', '2017-09-14 13:09:32', 'Logout from foodlust', '0'),
(253, 'estacioosss JOAN', '2017-09-14 13:09:41', 'Logged In', '0'),
(254, 'Quinto Ted', '2017-09-18 12:06:36', 'Logged In', '0'),
(255, 'Quinto Ted', '2017-09-18 12:08:05', 'added product', '0'),
(256, 'Quinto Ted', '2017-09-18 12:16:39', 'Logout from foodlust', '0'),
(257, 'estacioosss JOAN', '2017-09-18 12:39:48', 'Logged In', '0'),
(258, 'estacioosss JOAN', '2017-09-18 14:58:12', 'Logout from foodlust', '0'),
(259, 'Quinto Ted', '2017-09-19 15:01:08', 'Logged In', '0'),
(260, 'Quinto Ted', '2017-09-19 15:09:16', 'rated a Photo 4 star', '0'),
(261, 'Quinto Ted', '2017-09-19 15:11:05', 'interested in a inquery', '0'),
(262, 'rivera diaaa', '2017-09-19 17:14:14', 'Logged In', '0'),
(263, 'Quinto Ted', '2017-09-19 17:25:08', 'rated a user 5 star', '0'),
(264, 'rivera diaaa', '2017-09-19 17:28:58', 'rated a user 3 star', '0'),
(265, 'rivera diaaa', '2017-09-19 17:29:31', 'Logout from foodlust', '0'),
(266, 'rivera diaaa', '2017-09-19 17:29:38', 'Logged In', '0'),
(267, 'rivera diaaa', '2017-09-19 18:46:37', 'Logged In', '0'),
(268, 'rivera diaaa', '2017-09-19 18:50:34', 'Logout from foodlust', '0'),
(269, 'Quinto Ted', '2017-09-19 18:50:37', 'Logout from foodlust', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `conversation`
--

CREATE TABLE `conversation` (
  `c_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conversation`
--

INSERT INTO `conversation` (`c_id`, `from_id`, `to_id`, `status`) VALUES
(3, 4, 7, 'open');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `start_d` bigint(20) NOT NULL,
  `end_d` bigint(20) NOT NULL,
  `organizer` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `details`, `start_d`, `end_d`, `organizer`, `photo`) VALUES
(3, 'tradex', 'sscr food expo', 1505893500, 1505999100, 'sscr', 'xcg4gXkcA.png');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `m_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `m_content` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`m_id`, `from_id`, `c_id`, `m_content`, `status`) VALUES
(1, 1, 1, 'hi', 1),
(2, 2, 1, 'yow', 1),
(3, 2, 2, 'hi', 1),
(4, 2, 3, 'yeh', 1),
(5, 2, 4, 'hi', 1),
(6, 2, 5, 'hi', 1),
(7, 2, 1, 'hi', 1),
(8, 4, 6, 'hi', 1),
(9, 1, 7, 'hey', 1),
(10, 1, 8, 'hey', 1),
(11, 1, 9, 'aw', 1),
(12, 3, 10, 'hry', 0),
(13, 6, 11, 'hey', 0),
(14, 7, 12, 'hi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `push` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `prod_id`, `action`, `date`, `push`) VALUES
(1, 4, 4, 'interested to have transaction with your products', '2017-09-19 18:50:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `comment_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `c_content` text NOT NULL,
  `user_c_id` int(11) NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`comment_id`, `prod_id`, `c_content`, `user_c_id`, `notif`) VALUES
(1, 13, 'me pls', 3, 0),
(2, 12, 'very mush interested', 6, 0),
(3, 12, 'ready for offer', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_likes`
--

CREATE TABLE `product_likes` (
  `l_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_likes`
--

INSERT INTO `product_likes` (`l_id`, `user_id`, `prod_id`, `rating`, `notif`) VALUES
(1, 5, 3, 5, 0),
(2, 1, 3, 3, 0),
(3, 1, 1, 5, 0),
(31, 3, 6, 5, 0),
(32, 3, 14, 0, 0),
(33, 1, 13, 0, 0),
(34, 6, 13, 0, 0),
(35, 1, 14, 0, 0),
(36, 6, 12, 0, 0),
(37, 1, 12, 0, 0),
(38, 4, 14, 0, 0),
(39, 4, 2, 5, 0),
(40, 7, 3, 4, 0),
(41, 7, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_post`
--

CREATE TABLE `product_post` (
  `prod_id` int(11) NOT NULL,
  `user_seller_id` int(11) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `prod_pic` varchar(255) NOT NULL,
  `price` int(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `food_desc` varchar(255) NOT NULL,
  `extra_pic` varchar(255) NOT NULL,
  `cat_inq` varchar(255) NOT NULL,
  `price_r_1` int(11) NOT NULL,
  `price_r_2` int(11) NOT NULL,
  `inq_pic` varchar(255) NOT NULL,
  `inq_desc` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_post`
--

INSERT INTO `product_post` (`prod_id`, `user_seller_id`, `prod_name`, `prod_pic`, `price`, `category`, `food_desc`, `extra_pic`, `cat_inq`, `price_r_1`, `price_r_2`, `inq_pic`, `inq_desc`, `date`) VALUES
(1, 3, '', '', 0, '', '', '', 'raw meat', 12, 14, 'xcg4gXkcA.png', 'food negotiable', '2017-09-03 06:29:17'),
(2, 7, 'soup', '5-384747156.jpg', 123, 'fruits', ' for catering', '', '', 0, 0, '', '', '2017-09-03 06:41:57'),
(3, 4, 'best meal', '7.jpg', 1234, 'catering service', 'for family and friends', '', '', 0, 0, '', '', '2017-09-06 14:36:44'),
(4, 7, 'sisig', 'images.jpg', 142, 'product', 'sisg pork for bulk order', '', '', 0, 0, '', '', '2017-09-18 12:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `reported_users`
--

CREATE TABLE `reported_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reported_users`
--

INSERT INTO `reported_users` (`id`, `email`) VALUES
(1, 'tedd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reports_user`
--

CREATE TABLE `reports_user` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `r_user_id` int(11) NOT NULL,
  `report` int(11) NOT NULL,
  `user_reason` text NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports_user`
--

INSERT INTO `reports_user` (`id`, `user_id`, `r_user_id`, `report`, `user_reason`, `notif`) VALUES
(1, 7, 7, 1, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `temp_user`
--

CREATE TABLE `temp_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(205) NOT NULL,
  `email` varchar(255) NOT NULL,
  `security_code` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `cp_num` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type_of_user` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `b_info` varchar(255) NOT NULL,
  `date_created` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lname`, `fname`, `address`, `business_name`, `cp_num`, `email`, `type_of_user`, `pass`, `user_profile`, `b_info`, `date_created`, `status`) VALUES
(3, 'estacioosss', 'JOAN', 'pasig city,philippines', 'sabogan', 123123, 'jojo@gmail.com', 'buyer', '7815696ecbf1c96e6894b779456d330e', '16807466_628294070696563_3289982794662611934_n.jpg', 'salamaig sjfjs sfhasdjwqiax sadajsdqwjdzk sdas                                    ', 2016, 0),
(4, 'rivera', 'diaaa', 'pasig city, philippines', 'sabogan', 1234354, 'r@gnail.com', 'seller', '7815696ecbf1c96e6894b779456d330e', '16649461_628243337368303_2945714002656439269_n.jpg', 'asddwdd  ', 2016, 0),
(5, 'bustamante', 'jab', 'binangonan Rizal, philippines', 'jabbs food', 12356, 'jab@gmail.com', 'seller', '7815696ecbf1c96e6894b779456d330e', 'default.jpg', 'veeery tasty foods', 2017, 0),
(6, 'nar', 'kin', 'recto, manila', 'asd', 123, 'janjanquinto13@gmail.com', 'buyer', '86baf0fec9c756d3d7670284e5913adf', 'sim.jpg', 'wewe    ', 2017, 0),
(7, 'Quinto', 'Ted', 'bacoor cavite', 'Foodlust', 123456, 'janjanquinto@gmail.com', 'seller', '7815696ecbf1c96e6894b779456d330e', '1544294_10206567469372983_941518988370992856_n[1]-1341903066.jpg', 'We Love Foods!', 2017, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_rating`
--

CREATE TABLE `users_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_rated_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `notif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_rating`
--

INSERT INTO `users_rating` (`id`, `user_id`, `user_rated_id`, `rating`, `notif`) VALUES
(1, 1, 1, 4, 0),
(2, 1, 4, 4, 0),
(3, 1, 3, 5, 0),
(4, 6, 1, 5, 0),
(5, 6, 4, 4, 0),
(6, 6, 3, 4, 0),
(7, 7, 4, 5, 0),
(8, 4, 7, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_vid`
--

CREATE TABLE `user_vid` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vid_name` varchar(255) NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `v_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_vid`
--

INSERT INTO `user_vid` (`id`, `user_id`, `vid_name`, `b_name`, `address`, `v_info`) VALUES
(2, 3, '22025.mp4', 'sabogan', 'sa kanto', 'our products');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `conversation`
--
ALTER TABLE `conversation`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_comments`
--
ALTER TABLE `product_comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `product_likes`
--
ALTER TABLE `product_likes`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `product_post`
--
ALTER TABLE `product_post`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `reported_users`
--
ALTER TABLE `reported_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports_user`
--
ALTER TABLE `reports_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_user`
--
ALTER TABLE `temp_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_rating`
--
ALTER TABLE `users_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_vid`
--
ALTER TABLE `user_vid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=270;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `reported_users`
--
ALTER TABLE `reported_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reports_user`
--
ALTER TABLE `reports_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_rating`
--
ALTER TABLE `users_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_vid`
--
ALTER TABLE `user_vid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
