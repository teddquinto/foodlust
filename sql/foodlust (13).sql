-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2017 at 05:56 PM
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
(1, 'quinto teddy', '2017-07-09 08:56:26', 'Logged In', '0'),
(2, 'quinto teddy', '2017-07-11 16:41:52', 'Logged In', '0'),
(3, 'quinto teddy', '2017-07-12 08:38:45', 'Logged In', '0'),
(4, 'quinto teddy', '2017-07-12 10:21:50', 'Logged In', '0'),
(5, 'quinto teddy', '2017-07-12 10:41:54', 'Logged In', '0'),
(6, 'quinto teddy', '2017-07-12 11:04:02', 'Logout from foodlust', '0'),
(7, 'quinto teddy', '2017-07-12 11:04:32', 'Logged In', '0'),
(8, 'quinto teddy', '2017-07-12 13:43:43', 'Logged In', '0'),
(9, 'sam sam', '2017-07-12 13:56:49', 'Logged In', '0'),
(10, 'quinto teddy', '2017-07-13 01:03:42', 'Logged In', '0'),
(11, 'sam sam', '2017-07-13 01:16:33', 'Logged In', '0'),
(12, 'sam sam', '2017-07-13 02:17:12', 'Logout from foodlust', '0'),
(13, 'estacioosss JOAN', '2017-07-13 02:17:20', 'Logged In', '0'),
(14, 'estacioosss JOAN', '2017-07-13 02:18:30', 'Logout from foodlust', '0'),
(15, 'quinto teddy', '2017-07-13 08:53:09', 'Logged In', '0'),
(16, 'quinto teddy', '2017-07-13 08:53:44', 'Commented to a post', '0'),
(17, 'sam sam', '2017-07-13 09:31:22', 'Logged In', '0'),
(18, 'sam sam', '2017-07-13 09:34:37', 'Logout from foodlust', '0'),
(19, 'estacioosss JOAN', '2017-07-13 09:34:48', 'Logged In', '0'),
(20, 'quinto teddy', '2017-07-13 10:47:14', 'Logged In', '0'),
(21, 'estacioosss JOAN', '2017-07-13 10:48:01', 'Logged In', '0'),
(22, 'estacioosss JOAN', '2017-07-13 13:13:42', 'Logged In', '0'),
(23, 'quinto teddy', '2017-07-13 15:05:48', 'Logged In', '0'),
(24, 'estacioosss JOAN', '2017-07-13 15:33:36', 'Logged In', '0'),
(25, 'sam sam', '2017-07-15 09:42:26', 'Logged In', '0'),
(27, 'sam sam', '2017-07-15 09:45:58', 'Commented to a post', '0'),
(28, 'sam sam', '2017-07-15 09:46:50', 'added product', '0'),
(29, 'sam sam', '2017-07-15 10:02:08', 'Logout from foodlust', '0'),
(30, 'sam sam', '2017-07-16 03:54:20', 'Logged In', '0'),
(32, 'sam sam', '2017-07-16 04:08:48', 'Commented to a post', '0'),
(33, 'sam sam', '2017-07-16 04:09:25', 'Commented to a post', '0'),
(34, 'quinto teddy', '2017-07-16 05:59:28', 'Logged In', '0'),
(35, 'quinto teddy', '2017-07-16 06:21:43', 'Logout from foodlust', '0'),
(36, 'bustamante jab', '2017-07-16 06:22:58', 'Logged In', '0'),
(37, 'bustamante jab', '2017-07-16 06:23:30', 'Logout from foodlust', '0'),
(38, 'quinto teddy', '2017-07-16 07:06:42', 'Logged In', '0'),
(39, 'quinto teddy', '2017-07-16 09:50:13', 'Logout from foodlust', '0'),
(40, 'quinto teddy', '2017-07-16 10:04:54', 'Logged In', '0'),
(41, 'quinto teddy', '2017-07-17 17:17:06', 'Logged In', '0'),
(43, 'quinto teddy', '2017-07-17 18:09:21', 'Logout from foodlust', '0'),
(44, 'sam sam', '2017-07-17 18:09:31', 'Logged In', '0'),
(45, 'quinto teddy', '2017-07-18 14:15:26', 'Logged In', '0'),
(46, 'quinto teddy', '2017-07-19 02:34:55', 'Logged In', '0'),
(48, 'quinto teddy', '2017-07-19 08:18:20', 'added product', '0'),
(49, 'quinto teddy', '2017-07-19 08:20:43', 'Logout from foodlust', '0'),
(50, 'estacioosss JOAN', '2017-07-19 08:20:54', 'Logged In', '0'),
(51, 'estacioosss JOAN', '2017-07-19 08:21:24', 'added product', '0'),
(52, 'estacioosss JOAN', '2017-07-19 08:22:53', 'added product', '0'),
(53, 'estacioosss JOAN', '2017-07-19 08:23:16', 'deleted product', '0'),
(54, 'estacioosss JOAN', '2017-07-19 08:23:36', 'added product', '0'),
(55, 'estacioosss JOAN', '2017-07-19 08:26:21', 'added product', '0'),
(56, 'estacioosss JOAN', '2017-07-19 08:27:13', 'added product', '0'),
(57, 'estacioosss JOAN', '2017-07-19 08:31:44', 'added product', '0'),
(58, 'estacioosss JOAN', '2017-07-19 08:32:33', 'added product', '0'),
(59, 'estacioosss JOAN', '2017-07-19 08:32:43', 'deleted product', '0'),
(60, 'estacioosss JOAN', '2017-07-19 08:32:47', 'deleted product', '0'),
(61, 'estacioosss JOAN', '2017-07-19 08:32:48', 'deleted product', '0'),
(62, 'estacioosss JOAN', '2017-07-19 08:32:49', 'deleted product', '0'),
(63, 'estacioosss JOAN', '2017-07-19 08:32:50', 'deleted product', '0'),
(64, 'estacioosss JOAN', '2017-07-19 08:34:08', 'deleted product', '0'),
(65, 'estacioosss JOAN', '2017-07-19 08:34:32', 'added product', '0'),
(66, 'estacioosss JOAN', '2017-07-19 09:04:51', 'Logout from foodlust', '0'),
(67, 'bustamante jab', '2017-07-19 09:05:05', 'Logged In', '0'),
(78, 'bustamante jab', '2017-07-19 11:04:41', 'rated a Photo 4 star', '0'),
(79, 'bustamante jab', '2017-07-19 11:04:50', 'Logout from foodlust', '0'),
(80, 'quinto teddy', '2017-07-19 11:04:55', 'Logged In', '0'),
(81, 'quinto teddy', '2017-07-19 11:05:02', 'rated a Photo 1 star', '0'),
(82, 'quinto teddy', '2017-07-19 13:02:27', 'rated a Photo 5 star', '0'),
(83, 'quinto teddy', '2017-07-19 13:05:09', 'Commented to a post', '0'),
(84, 'estacioosss JOAN', '2017-07-19 14:54:55', 'Logged In', '0'),
(85, 'quinto teddy', '2017-07-20 15:44:26', 'Logged In', '0'),
(86, 'quinto teddy', '2017-07-20 15:45:04', 'rated a Photo 3 star', '0'),
(87, 'quinto teddy', '2017-07-24 03:01:53', 'Logged In', '0'),
(88, 'quinto teddy', '2017-07-24 03:09:50', 'rated a Photo 5 star', '0'),
(89, 'quinto teddy', '2017-07-24 05:24:01', 'rated a Photo 4 star', '0'),
(90, 'quinto teddy', '2017-07-24 05:25:51', 'Logout from foodlust', '0'),
(91, 'sam sam', '2017-07-24 05:26:00', 'Logged In', '0'),
(92, 'sam sam', '2017-07-24 05:41:21', 'rated a Photo 5 star', '0'),
(93, 'sam sam', '2017-07-24 05:41:25', 'rated a Photo 5 star', '0'),
(94, 'sam sam', '2017-07-24 05:41:32', 'rated a Photo 4 star', '0'),
(95, 'sam sam', '2017-07-24 05:41:35', 'Logout from foodlust', '0'),
(96, 'quinto teddy', '2017-07-24 05:41:42', 'Logged In', '0'),
(97, 'quinto teddy', '2017-07-24 05:44:30', 'Logout from foodlust', '0'),
(98, 'estacioosss JOAN', '2017-07-24 05:44:35', 'Logged In', '0'),
(99, 'estacioosss JOAN', '2017-07-24 05:44:44', 'rated a Photo 3 star', '0'),
(100, 'estacioosss JOAN', '2017-07-24 05:44:47', 'Logout from foodlust', '0'),
(101, 'quinto teddy', '2017-07-24 05:44:54', 'Logged In', '0'),
(102, 'quinto teddy', '2017-07-24 06:10:48', 'Logout from foodlust', '0'),
(103, 'bustamante jab', '2017-07-24 06:11:10', 'Logged In', '0'),
(104, 'bustamante jab', '2017-07-24 06:11:26', 'rated a Photo 5 star', '0'),
(105, 'bustamante jab', '2017-07-24 06:11:30', 'Logout from foodlust', '0'),
(106, 'quinto teddy', '2017-07-24 06:11:36', 'Logged In', '0'),
(107, 'quinto teddy', '2017-07-24 06:22:58', 'Commented to a post', '0'),
(108, 'quinto teddy', '2017-07-24 07:21:36', 'Commented to a post', '0'),
(109, 'quinto teddy', '2017-07-24 07:25:23', 'Commented to a post', '0'),
(110, 'quinto teddy', '2017-07-24 07:28:06', 'Logout from foodlust', '0'),
(111, 'estacioosss JOAN', '2017-07-24 07:28:15', 'Logged In', '0'),
(112, 'estacioosss JOAN', '2017-07-24 07:28:29', 'Commented to a post', '0'),
(113, 'estacioosss JOAN', '2017-07-24 07:28:32', 'Logout from foodlust', '0'),
(114, 'quinto teddy', '2017-07-24 07:28:37', 'Logged In', '0'),
(115, 'quinto teddy', '2017-07-24 07:43:06', 'Commented to a post', '0'),
(116, 'quinto teddy', '2017-07-24 07:48:23', 'Commented to a post', '0'),
(117, 'quinto teddy', '2017-07-24 07:48:51', 'Logout from foodlust', '0'),
(118, 'estacioosss JOAN', '2017-07-24 07:48:58', 'Logged In', '0'),
(119, 'estacioosss JOAN', '2017-07-24 07:58:00', 'Logout from foodlust', '0'),
(120, 'quinto teddy', '2017-07-24 07:58:06', 'Logged In', '0'),
(121, 'quinto teddy', '2017-07-24 07:58:17', 'Commented to a post', '0'),
(122, 'quinto teddy', '2017-07-24 07:58:20', 'Logout from foodlust', '0'),
(123, 'estacioosss JOAN', '2017-07-24 07:58:26', 'Logged In', '0'),
(124, 'estacioosss JOAN', '2017-07-24 08:06:58', 'Commented to a post', '0'),
(125, 'estacioosss JOAN', '2017-07-24 08:07:06', 'rated a Photo 4 star', '0'),
(126, 'estacioosss JOAN', '2017-07-24 08:07:10', 'Logout from foodlust', '0'),
(127, 'quinto teddy', '2017-07-24 08:07:15', 'Logged In', '0'),
(128, 'quinto teddy', '2017-07-24 08:11:00', 'Commented to a post', '0'),
(129, 'quinto teddy', '2017-07-24 08:11:02', 'Logout from foodlust', '0'),
(130, 'estacioosss JOAN', '2017-07-24 08:11:08', 'Logged In', '0'),
(131, 'estacioosss JOAN', '2017-07-24 08:12:12', 'Commented to a post', '0'),
(132, 'estacioosss JOAN', '2017-07-24 08:12:14', 'Logout from foodlust', '0'),
(133, 'quinto teddy', '2017-07-24 08:12:20', 'Logged In', '0'),
(134, 'quinto teddy', '2017-07-24 13:59:51', 'Logged In', '0'),
(135, 'quinto teddy', '2017-07-24 14:00:01', 'Logout from foodlust', '0'),
(136, 'quinto teddy', '2017-07-24 14:00:59', 'Logged In', '0'),
(137, 'quinto teddy', '2017-07-24 14:01:06', 'Logout from foodlust', '0'),
(138, 'quinto teddy', '2017-07-24 14:02:01', 'Logged In', '0'),
(139, 'quinto teddy', '2017-07-24 14:02:03', 'Logged In', '0'),
(140, 'quinto teddy', '2017-07-24 14:02:03', 'Logged In', '0'),
(141, 'quinto teddy', '2017-07-24 14:02:03', 'Logged In', '0'),
(142, 'quinto teddy', '2017-07-24 14:02:04', 'Logged In', '0'),
(143, 'quinto teddy', '2017-07-24 14:02:04', 'Logged In', '0'),
(144, 'quinto teddy', '2017-07-24 14:02:37', 'Logged In', '0'),
(145, 'quinto teddy', '2017-07-24 14:02:41', 'Logged In', '0'),
(146, 'quinto teddy', '2017-07-24 14:03:06', 'Logged In', '0'),
(147, 'quinto teddy', '2017-07-24 14:05:17', 'Logged In', '0'),
(148, 'quinto teddy', '2017-07-24 14:05:23', 'Logout from foodlust', '0'),
(149, 'quinto teddy', '2017-07-24 14:42:51', 'Logged In', '0'),
(150, 'quinto teddy', '2017-07-24 14:42:57', 'Logout from foodlust', '0'),
(151, 'quinto teddy', '2017-07-25 14:39:08', 'Logged In', '0'),
(152, 'quinto teddy', '2017-07-25 14:39:19', 'Logout from foodlust', '0'),
(153, 'quinto teddy', '2017-07-25 14:56:40', 'Logged In', '0'),
(154, 'quinto teddy', '2017-07-25 14:56:57', 'Logout from foodlust', '0'),
(155, 'quinto teddy', '2017-07-25 15:12:16', 'Logged In', '0'),
(156, 'quinto teddy', '2017-07-25 15:13:19', 'Logged In', '0'),
(157, 'quinto teddy', '2017-07-25 15:13:57', 'Logged In', '0'),
(158, 'quinto teddy', '2017-07-25 15:14:02', 'Logout from foodlust', '0'),
(159, 'quinto teddy', '2017-07-25 15:15:08', 'Logged In', '0'),
(160, 'quinto teddy', '2017-07-25 15:15:13', 'Logout from foodlust', '0'),
(161, 'quinto teddy', '2017-07-25 15:15:48', 'Logged In', '0'),
(162, 'quinto teddy', '2017-07-25 15:15:53', 'Logout from foodlust', '0'),
(163, 'quinto teddy', '2017-07-25 15:34:18', 'Logged In', '0'),
(164, 'quinto teddy', '2017-07-25 15:34:22', 'Logout from foodlust', '0'),
(165, 'quinto teddy', '2017-07-25 15:36:18', 'Logged In', '0'),
(166, 'quinto teddy', '2017-07-25 15:36:27', 'Logged In', '0'),
(167, 'quinto teddy', '2017-07-25 15:38:16', 'Logged In', '0'),
(168, 'quinto teddy', '2017-07-25 15:38:23', 'Logout from foodlust', '0'),
(169, 'quinto teddy', '2017-07-25 15:49:40', 'Logged In', '0'),
(170, 'quinto teddy', '2017-07-25 15:49:47', 'Logout from foodlust', '0'),
(171, 'quinto teddy', '2017-07-25 15:54:10', 'Logged In', '0'),
(172, 'quinto teddy', '2017-07-25 15:54:17', 'Logout from foodlust', '0'),
(173, 'quinto teddy', '2017-07-25 15:54:51', 'Logged In', '0'),
(174, 'quinto teddy', '2017-07-25 15:56:07', 'Logged In', '0'),
(175, 'quinto teddy', '2017-07-25 15:56:14', 'Logout from foodlust', '0'),
(176, 'quinto teddy', '2017-07-25 15:56:57', 'Logged In', '0'),
(177, 'quinto teddy', '2017-07-25 15:57:48', 'Logged In', '0'),
(178, 'quinto teddy', '2017-07-25 15:57:53', 'Logout from foodlust', '0'),
(179, 'quinto teddy', '2017-07-25 15:58:28', 'Logged In', '0'),
(180, 'quinto teddy', '2017-07-25 15:58:33', 'Logout from foodlust', '0'),
(181, 'quinto teddy', '2017-07-25 15:58:46', 'Logged In', '0'),
(182, 'quinto teddy', '2017-07-25 15:58:52', 'Logout from foodlust', '0'),
(183, 'quinto teddy', '2017-07-25 16:01:50', 'Logged In', '0'),
(184, 'quinto teddy', '2017-07-25 16:02:08', 'Logged In', '0'),
(185, 'quinto teddy', '2017-07-25 16:02:30', 'Logged In', '0'),
(186, 'quinto teddy', '2017-07-25 16:03:39', 'Logged In', '0'),
(187, 'quinto teddy', '2017-07-25 16:03:54', 'Logged In', '0'),
(188, 'quinto teddy', '2017-07-25 16:04:08', 'Logged In', '0'),
(189, 'quinto teddy', '2017-07-25 16:05:50', 'Logged In', '0'),
(190, 'quinto teddy', '2017-07-25 16:05:58', 'Logout from foodlust', '0'),
(191, 'quinto teddy', '2017-07-25 16:06:54', 'Logged In', '0'),
(192, 'quinto teddy', '2017-07-25 16:07:01', 'Logout from foodlust', '0'),
(193, 'quinto teddy', '2017-07-25 16:20:25', 'Logged In', '0'),
(194, 'quinto teddy', '2017-07-25 16:20:30', 'Logout from foodlust', '0'),
(195, 'quinto teddy', '2017-07-25 16:22:50', 'Logged In', '0'),
(196, 'quinto teddy', '2017-07-25 16:23:11', 'Logged In', '0'),
(197, 'quinto teddy', '2017-07-25 16:23:11', 'Logged In', '0'),
(198, 'quinto teddy', '2017-07-25 16:24:23', 'Logged In', '0'),
(199, 'quinto teddy', '2017-07-25 16:25:10', 'Logged In', '0'),
(200, 'quinto teddy', '2017-07-25 16:25:18', 'Logout from foodlust', '0'),
(201, 'quinto teddy', '2017-07-25 16:25:51', 'Logged In', '0'),
(202, 'quinto teddy', '2017-07-25 16:26:03', 'Logout from foodlust', '0'),
(203, 'quinto teddy', '2017-07-25 16:26:26', 'Logged In', '0'),
(204, 'quinto teddy', '2017-07-25 16:29:03', 'Logged In', '0'),
(205, 'quinto teddy', '2017-07-25 16:30:16', 'Logged In', '0'),
(206, 'quinto teddy', '2017-07-25 16:30:49', 'Logged In', '0'),
(207, 'quinto teddy', '2017-07-25 16:30:55', 'Logout from foodlust', '0'),
(208, 'quinto teddy', '2017-07-25 16:31:37', 'Logged In', '0'),
(209, 'quinto teddy', '2017-07-25 16:31:44', 'Logout from foodlust', '0'),
(210, 'quinto teddy', '2017-07-25 16:34:42', 'Logged In', '0'),
(211, 'quinto teddy', '2017-07-25 16:34:54', 'Logout from foodlust', '0'),
(212, 'quinto teddy', '2017-07-25 16:36:16', 'Logged In', '0'),
(213, 'quinto teddy', '2017-07-25 16:36:26', 'Logout from foodlust', '0'),
(214, 'quinto teddy', '2017-07-25 16:38:07', 'Logged In', '0'),
(215, 'quinto teddy', '2017-07-25 16:38:14', 'Logout from foodlust', '0'),
(216, 'quinto teddy', '2017-07-25 16:39:12', 'Logged In', '0'),
(217, 'quinto teddy', '2017-07-25 16:39:27', 'Logged In', '0'),
(218, 'quinto teddy', '2017-07-25 16:39:57', 'Logged In', '0'),
(219, 'quinto teddy', '2017-07-25 16:40:05', 'Logout from foodlust', '0'),
(220, 'quinto teddy', '2017-07-26 13:37:31', 'Logged In', '0'),
(221, 'quinto teddy', '2017-07-26 16:11:21', 'Logout from foodlust', '0'),
(222, 'quinto teddy', '2017-07-27 07:23:26', 'Logged In', '0'),
(223, 'quinto teddy', '2017-07-27 07:24:18', 'Updated his profile', '0'),
(224, 'quinto teddy', '2017-07-27 07:46:27', 'Logout from foodlust', '0'),
(225, 'rivera diaaa', '2017-07-27 07:46:53', 'Logged In', '0'),
(226, 'rivera diaaa', '2017-07-27 07:47:37', 'added product', '0'),
(227, 'rivera diaaa', '2017-07-27 07:59:10', 'rated a Photo 4 star', '0'),
(228, 'rivera diaaa', '2017-07-27 08:07:25', 'rated a Photo 3 star', '0'),
(229, 'rivera diaaa', '2017-07-27 08:30:33', 'Commented to a post', '0'),
(230, 'rivera diaaa', '2017-07-27 09:03:08', 'Updated his profile', '0'),
(231, 'rivera diaaa', '2017-07-27 09:03:38', 'added product', '0'),
(232, 'rivera diaaa', '2017-07-27 09:03:56', 'Updated product', '0'),
(235, 'quinto teddy', '2017-07-27 13:48:41', 'Logged In', '0'),
(236, 'quinto teddy', '2017-07-27 13:51:44', 'Updated product', '0'),
(237, 'quinto teddy', '2017-07-27 13:54:39', 'Updated product', '0'),
(238, 'quinto teddy', '2017-07-27 14:09:20', 'rated a user 5 star', '0'),
(239, 'quinto teddy', '2017-07-27 14:11:07', 'rated a user 5 star', '0'),
(240, 'quinto teddy', '2017-07-27 14:11:52', 'rated a Photo 5 star', '0'),
(241, 'quinto teddy', '2017-07-27 14:16:16', 'rated a user 5 star', '0'),
(242, 'quinto teddy', '2017-07-27 14:18:33', 'Logout from foodlust', '0'),
(243, 'rivera diaaa', '2017-07-27 14:18:42', 'Logged In', '0'),
(244, 'quinto teddy', '2017-07-29 06:00:48', 'Logged In', '0'),
(245, 'quinto teddy', '2017-07-29 06:09:17', 'deleted product', '0'),
(246, 'quinto teddy', '2017-07-29 06:12:02', 'Updated product', '0'),
(247, 'quinto teddy', '2017-07-29 06:19:05', 'deleted product', '0'),
(248, 'quinto teddy', '2017-07-29 06:19:24', 'Updated product', '0'),
(249, 'quinto teddy', '2017-07-29 06:23:01', 'deleted product', '0'),
(250, 'quinto teddy', '2017-07-29 06:23:11', 'deleted product', '0'),
(251, 'quinto teddy', '2017-07-29 06:24:02', 'added product', '0'),
(252, 'quinto teddy', '2017-07-29 06:24:09', 'deleted product', '0'),
(253, 'quinto teddy', '2017-07-29 06:24:59', 'added product', '0'),
(254, 'quinto teddy', '2017-07-29 06:37:41', 'deleted product', '0'),
(255, 'quinto teddy', '2017-07-29 06:38:23', 'added product', '0'),
(256, 'quinto teddy', '2017-07-29 06:38:44', 'Commented to a post', '0'),
(257, 'quinto teddy', '2017-07-29 06:44:12', 'rated a user 5 star', '0'),
(258, 'quinto teddy', '2017-07-29 06:45:42', 'rated a user 5 star', '0'),
(259, 'quinto teddy', '2017-07-29 06:46:34', 'rated a user 5 star', '0'),
(260, 'quinto teddy', '2017-07-29 06:47:50', 'rated a user 5 star', '0'),
(261, 'quinto teddy', '2017-07-29 06:48:46', 'rated a user 5 star', '0'),
(262, 'quinto teddy', '2017-07-29 06:50:17', 'rated a user 3 star', '0'),
(263, 'quinto teddy', '2017-07-29 06:51:33', 'rated a user 2 star', '0'),
(264, 'quinto teddy', '2017-07-29 06:53:05', 'rated a user 1 star', '0'),
(265, 'quinto teddy', '2017-07-29 06:53:33', 'rated a user 3 star', '0'),
(266, 'quinto teddy', '2017-07-29 06:56:01', 'rated a user 5 star', '0'),
(267, 'quinto teddy', '2017-07-29 06:58:03', 'rated a user 4 star', '0'),
(268, 'quinto teddy', '2017-07-29 07:03:15', 'rated a user 4 star', '0'),
(269, 'quinto teddy', '2017-07-29 07:04:40', 'rated a user 5 star', '0'),
(270, 'quinto teddy', '2017-07-29 07:07:15', 'Logout from foodlust', '0'),
(271, 'nar kin', '2017-07-29 07:07:26', 'Logged In', '0'),
(272, 'nar kin', '2017-07-29 07:07:39', 'rated a user 5 star', '0'),
(273, 'nar kin', '2017-07-29 07:09:16', 'rated a user 4 star', '0'),
(274, 'nar kin', '2017-07-29 07:11:06', 'rated a user 4 star', '0'),
(275, 'nar kin', '2017-07-29 07:14:37', 'Logout from foodlust', '0'),
(276, 'bustamante jab', '2017-07-29 07:14:44', 'Logged In', '0'),
(277, 'bustamante jab', '2017-07-29 07:17:29', 'Logout from foodlust', '0'),
(278, 'quinto teddy', '2017-07-29 07:17:35', 'Logged In', '0'),
(279, 'quinto teddy', '2017-07-29 07:24:00', 'Logout from foodlust', '0'),
(280, 'estacioosss JOAN', '2017-07-29 07:24:08', 'Logged In', '0'),
(281, 'estacioosss JOAN', '2017-07-29 07:26:48', 'Logout from foodlust', '0'),
(282, 'nar kin', '2017-07-29 07:26:56', 'Logged In', '0'),
(283, 'nar kin', '2017-07-29 07:32:57', 'Logout from foodlust', '0'),
(284, 'bustamante jab', '2017-07-29 07:33:04', 'Logged In', '0'),
(285, 'bustamante jab', '2017-07-29 07:34:15', 'Logout from foodlust', '0'),
(286, 'estacioosss JOAN', '2017-07-29 07:34:22', 'Logged In', '0'),
(287, 'estacioosss JOAN', '2017-07-29 07:35:04', 'Logout from foodlust', '0'),
(288, 'rivera diaaa', '2017-07-29 07:35:10', 'Logged In', '0'),
(289, 'rivera diaaa', '2017-07-29 07:36:09', 'Logout from foodlust', '0'),
(290, 'sam sam', '2017-07-29 07:36:17', 'Logged In', '0'),
(291, 'sam sam', '2017-07-29 07:37:23', 'Logout from foodlust', '0'),
(292, 'quinto teddy', '2017-07-29 07:37:29', 'Logged In', '0'),
(293, 'quinto teddy', '2017-07-29 07:46:41', 'Logout from foodlust', '0'),
(294, 'sam sam', '2017-07-29 07:46:52', 'Logged In', '0'),
(295, 'sam sam', '2017-07-29 07:47:26', 'Logout from foodlust', '0'),
(296, 'estacioosss JOAN', '2017-07-29 07:47:34', 'Logged In', '0'),
(297, 'estacioosss JOAN', '2017-07-29 07:48:13', 'Logout from foodlust', '0'),
(298, 'rivera diaaa', '2017-07-29 07:48:20', 'Logged In', '0'),
(299, 'rivera diaaa', '2017-07-29 07:48:47', 'Logout from foodlust', '0'),
(300, 'nar kin', '2017-07-29 07:48:55', 'Logged In', '0'),
(301, 'nar kin', '2017-07-29 07:49:03', 'Logged In', '0'),
(302, 'nar kin', '2017-07-29 07:49:14', 'Logged In', '0'),
(303, 'nar kin', '2017-07-29 07:49:49', 'Logged In', '0'),
(304, 'quinto teddy', '2017-07-29 07:50:28', 'Logged In', '0'),
(305, 'quinto teddy', '2017-07-29 07:50:35', 'Logout from foodlust', '0'),
(306, 'nar kin', '2017-07-29 07:50:42', 'Logged In', '0'),
(307, 'nar kin', '2017-07-29 07:51:14', 'Logout from foodlust', '0'),
(308, 'quinto teddy', '2017-07-29 07:51:22', 'Logged In', '0'),
(309, 'quinto teddy', '2017-07-29 08:03:57', 'Logout from foodlust', '0'),
(310, 'sam sam', '2017-07-29 08:04:02', 'Logged In', '0'),
(311, 'sam sam', '2017-07-29 08:05:08', 'Logout from foodlust', '0'),
(312, 'rivera diaaa', '2017-07-29 08:05:14', 'Logged In', '0'),
(313, 'rivera diaaa', '2017-07-29 08:05:35', 'Logout from foodlust', '0'),
(314, 'quinto teddy', '2017-07-29 08:05:41', 'Logged In', '0'),
(315, 'quinto teddy', '2017-07-29 08:06:26', 'Logout from foodlust', '0'),
(316, 'estacioosss JOAN', '2017-07-29 08:06:32', 'Logged In', '0'),
(317, 'estacioosss JOAN', '2017-07-29 08:12:26', 'Logout from foodlust', '0'),
(318, 'quinto teddy', '2017-07-29 08:12:31', 'Logged In', '0'),
(319, 'quinto teddy', '2017-07-29 08:13:22', 'Logout from foodlust', '0'),
(320, 'nar kin', '2017-07-29 08:13:30', 'Logged In', '0'),
(321, 'nar kin', '2017-07-29 08:17:08', 'Logout from foodlust', '0'),
(322, 'rivera diaaa', '2017-07-29 08:17:16', 'Logged In', '0'),
(323, 'rivera diaaa', '2017-07-29 08:26:35', 'Logout from foodlust', '0'),
(324, 'nar kin', '2017-07-29 08:26:44', 'Logged In', '0'),
(325, 'nar kin', '2017-07-29 08:29:51', 'rated a Photo 5 star', '0'),
(326, 'nar kin', '2017-07-29 08:29:54', 'rated a Photo 3 star', '0'),
(327, 'nar kin', '2017-07-29 08:29:57', 'rated a Photo 5 star', '0'),
(328, 'nar kin', '2017-07-29 08:30:21', 'Updated his profile', '0'),
(329, 'nar kin', '2017-07-29 08:31:13', 'Updated his profile', '0'),
(330, 'nar kin', '2017-07-29 08:31:41', 'Logout from foodlust', '0'),
(331, 'quinto teddy', '2017-07-29 08:31:48', 'Logged In', '0'),
(332, 'quinto teddy', '2017-07-29 08:32:13', 'Logout from foodlust', '0'),
(333, 'estacioosss JOAN', '2017-07-29 08:32:22', 'Logged In', '0'),
(334, 'estacioosss JOAN', '2017-07-29 08:35:05', 'rated a Photo 5 star', '0'),
(335, 'estacioosss JOAN', '2017-07-29 08:35:08', 'Logout from foodlust', '0'),
(336, 'quinto teddy', '2017-07-29 08:35:13', 'Logged In', '0'),
(337, 'quinto teddy', '2017-07-29 08:35:49', 'Logout from foodlust', '0'),
(338, 'estacioosss JOAN', '2017-07-29 08:35:55', 'Logged In', '0'),
(339, 'estacioosss JOAN', '2017-07-29 08:37:01', 'rated a Photo 3 star', '0'),
(340, 'quinto teddy', '2017-07-30 04:13:29', 'Logged In', '0'),
(341, 'quinto teddy', '2017-07-30 04:13:29', 'Logged In', '0'),
(342, 'quinto teddy', '2017-07-30 04:14:35', 'rated a Photo 5 star', '0'),
(343, 'quinto teddy', '2017-07-30 04:16:21', 'Updated his profile', '0'),
(345, 'quinto teddy', '2017-07-30 04:35:19', 'added product', '0'),
(346, 'quinto teddy', '2017-07-30 05:03:06', 'Logout from foodlust', '0'),
(347, 'quinto teddy', '2017-07-30 11:41:56', 'Logged In', '0'),
(348, 'quinto teddy', '2017-07-30 11:53:25', 'Logout from foodlust', '0'),
(349, 'nar kin', '2017-07-30 11:53:34', 'Logged In', '0'),
(350, 'nar kin', '2017-07-30 11:53:53', 'rated a Photo 5 star', '0'),
(351, 'nar kin', '2017-07-30 11:54:06', 'Logout from foodlust', '0'),
(352, 'estacioosss JOAN', '2017-07-30 11:54:13', 'Logged In', '0'),
(353, 'estacioosss JOAN', '2017-07-30 11:54:22', 'rated a Photo 5 star', '0'),
(354, 'estacioosss JOAN', '2017-07-30 12:36:54', 'Logout from foodlust', '0'),
(355, 'a a', '2017-07-31 23:57:55', 'Logged In', '0'),
(356, 'a a', '2017-07-31 23:58:07', 'Logout from foodlust', '0'),
(357, 'quinto teddy', '2017-08-01 14:13:51', 'Logged In', '0'),
(358, 'quinto teddy', '2017-08-01 15:16:02', 'Updated product', '0'),
(359, 'quinto teddy', '2017-08-01 15:16:07', 'deleted product', '0'),
(360, 'quinto teddy', '2017-08-01 15:16:25', 'added product', '0'),
(361, 'rivera diaaa', '2017-08-02 04:17:47', 'Logged In', '0'),
(362, 'rivera diaaa', '2017-08-02 04:17:58', 'rated a Photo 5 star', '0'),
(363, 'rivera diaaa', '2017-08-02 04:46:37', 'Updated product', '0'),
(364, 'rivera diaaa', '2017-08-02 10:06:11', 'Logout from foodlust', '0'),
(365, 'sam sam', '2017-08-02 10:06:22', 'Logged In', '0'),
(366, 'sam sam', '2017-08-02 10:07:01', 'Logout from foodlust', '0'),
(367, 'estacioosss JOAN', '2017-08-02 10:09:39', 'Logged In', '0'),
(368, 'quinto teddy', '2017-08-02 10:18:14', 'Logged In', '0'),
(369, 'quinto teddy', '2017-08-02 12:57:49', 'Logout from foodlust', '0'),
(370, 'estacioosss JOAN', '2017-08-02 14:05:04', 'Logout from foodlust', '0'),
(371, 'estacioosss JOAN', '2017-08-02 14:05:29', 'Logged In', '0'),
(372, 'estacioosss JOAN', '2017-08-02 14:36:35', 'Logout from foodlust', '0'),
(373, 'estacioosss JOAN', '2017-08-03 13:13:20', 'Logged In', '0'),
(374, 'estacioosss JOAN', '2017-08-03 13:19:01', 'Logout from foodlust', '0'),
(375, 'nar kin', '2017-08-03 14:11:17', 'Logged In', '0'),
(376, 'nar kin', '2017-08-03 14:18:09', 'rated a Photo 5 star', '0'),
(377, 'nar kin', '2017-08-03 15:19:16', 'rated a Photo 5 star', '0'),
(378, 'nar kin', '2017-08-03 15:23:06', 'Commented to a post', '0'),
(379, 'nar kin', '2017-08-03 15:24:22', 'added product', '0'),
(380, 'nar kin', '2017-08-03 15:24:36', 'added product', '0'),
(381, 'nar kin', '2017-08-03 15:24:43', 'deleted product', '0'),
(382, 'nar kin', '2017-08-03 15:24:53', 'rated a Photo 4 star', '0'),
(383, 'nar kin', '2017-08-03 15:25:50', 'rated a Photo 1 star', '0'),
(384, 'nar kin', '2017-08-03 15:30:37', 'Updated product', '0'),
(385, 'nar kin', '2017-08-03 16:08:06', 'rated a Photo 2 star', '0'),
(386, 'nar kin', '2017-08-03 16:42:44', 'Logout from foodlust', '0'),
(387, 'nar kin', '2017-08-03 16:42:54', 'Logged In', '0'),
(388, 'nar kin', '2017-08-03 16:43:01', 'Logout from foodlust', '0'),
(389, 'quinto teddy', '2017-08-03 16:43:08', 'Logged In', '0'),
(390, 'quinto teddy', '2017-08-03 16:43:29', 'rated a Photo 5 star', '0'),
(391, 'quinto teddy', '2017-08-03 17:10:19', 'Updated his profile', '0'),
(392, 'quinto teddy', '2017-08-03 17:12:37', 'Updated his profile', '0'),
(393, 'quinto teddy', '2017-08-03 17:15:30', 'Updated his profile', '0'),
(394, 'quinto teddy', '2017-08-03 17:16:43', 'Updated his profile', '0'),
(395, 'quinto teddy', '2017-08-03 17:17:46', 'Updated his profile', '0'),
(396, 'quinto teddy', '2017-08-03 17:19:26', 'Updated his profile', '0'),
(397, 'quinto teddy', '2017-08-03 17:20:15', 'Updated his profile', '0'),
(398, 'quinto teddy', '2017-08-03 17:21:20', 'Updated his profile', '0'),
(399, 'quinto teddy', '2017-08-03 17:22:04', 'Updated his profile', '0'),
(400, 'quinto teddy', '2017-08-03 17:22:57', 'Updated his profile', '0'),
(401, 'quinto teddy', '2017-08-03 17:30:40', 'Updated his profile', '0'),
(402, 'quinto teddy', '2017-08-03 17:30:55', 'Commented to a post', '0'),
(403, 'quinto teddy', '2017-08-03 17:31:33', 'Updated product', '0'),
(404, 'quinto teddy', '2017-08-03 17:36:41', 'Updated his profile', '0'),
(405, 'quinto teddy', '2017-08-03 17:38:26', 'Updated his profile', '0'),
(406, 'quinto teddy', '2017-08-03 17:38:34', 'Logout from foodlust', '0'),
(407, 'estacioosss JOAN', '2017-08-07 12:14:19', 'Logged In', '0'),
(408, 'nar kin', '2017-08-07 12:55:10', 'Logged In', '0'),
(409, 'nar kin', '2017-08-07 12:55:10', 'Logged In', '0'),
(410, 'nar kin', '2017-08-07 14:01:17', 'Logout from foodlust', '0'),
(411, 'estacioosss JOAN', '2017-08-11 13:30:21', 'Logged In', '0'),
(412, 'estacioosss JOAN', '2017-08-11 13:30:48', 'rated a Photo 4 star', '0'),
(413, 'estacioosss JOAN', '2017-08-11 13:49:13', 'Logout from foodlust', '0'),
(414, 'nar kin', '2017-08-11 13:49:21', 'Logged In', '0'),
(415, 'nar kin', '2017-08-11 14:44:58', 'Logout from foodlust', '0'),
(416, 'estacioosss JOAN', '2017-08-11 14:45:04', 'Logged In', '0'),
(417, 'estacioosss JOAN', '2017-08-11 15:03:06', 'Logout from foodlust', '0'),
(418, 'estacioosss JOAN', '2017-08-11 15:03:13', 'Logged In', '0'),
(419, 'nar kin', '2017-08-12 00:32:52', 'Logged In', '0'),
(420, 'estacioosss JOAN', '2017-08-12 00:34:37', 'Logged In', '0'),
(421, 'estacioosss JOAN', '2017-08-12 00:34:50', 'Logout from foodlust', '0'),
(422, 'estacioosss JOAN', '2017-08-12 00:53:00', 'Logged In', '0'),
(423, 'nar kin', '2017-08-12 01:56:09', 'Logout from foodlust', '0'),
(424, 'bustamante jab', '2017-08-12 01:56:16', 'Logged In', '0'),
(425, 'bustamante jab', '2017-08-12 01:57:55', 'added product', '0'),
(426, 'estacioosss JOAN', '2017-08-12 01:58:10', 'rated a Photo 5 star', '0'),
(427, 'bustamante jab', '2017-08-12 01:58:37', 'added product', '0'),
(428, 'estacioosss JOAN', '2017-08-12 01:58:43', 'rated a Photo 3 star', '0'),
(429, 'estacioosss JOAN', '2017-08-12 02:00:34', 'Logged In', '0'),
(430, 'estacioosss JOAN', '2017-08-12 02:00:52', 'Logout from foodlust', '0'),
(431, 'quinto teddy', '2017-08-12 02:00:57', 'Logged In', '0'),
(432, 'quinto teddy', '2017-08-12 02:01:04', 'rated a Photo 4 star', '0'),
(433, 'quinto teddy', '2017-08-12 02:01:07', 'rated a Photo 3 star', '0'),
(434, 'nar kin', '2017-08-12 06:33:37', 'Logged In', '0'),
(435, 'estacioosss JOAN', '2017-08-13 02:52:53', 'Logged In', '0'),
(436, 'quinto teddy', '2017-08-13 02:53:44', 'Logged In', '0'),
(437, 'quinto teddy', '2017-08-13 02:54:07', 'Logout from foodlust', '0'),
(438, 'nar kin', '2017-08-13 02:54:23', 'Logged In', '0'),
(439, 'nar kin', '2017-08-13 02:55:03', 'Logout from foodlust', '0'),
(440, 'estacioosss JOAN', '2017-08-13 03:19:30', 'Logout from foodlust', '0'),
(441, 'estacioosss JOAN', '2017-08-13 03:19:39', 'Logged In', '0'),
(442, 'quinto teddy', '2017-08-13 03:30:54', 'Logged In', '0'),
(443, 'estacioosss JOAN', '2017-08-13 03:43:42', 'Logged In', '0'),
(444, 'estacioosss JOAN', '2017-08-13 04:32:29', 'Logout from foodlust', '0'),
(445, 'quinto teddy', '2017-08-13 04:32:52', 'Logout from foodlust', '0'),
(446, 'estacioosss JOAN', '2017-08-13 04:33:03', 'Logged In', '0'),
(447, 'quinto teddy', '2017-08-13 04:33:09', 'Logged In', '0'),
(448, 'estacioosss JOAN', '2017-08-13 04:42:53', 'deleted product', '0'),
(449, 'estacioosss JOAN', '2017-08-13 04:43:25', 'deleted product', '0'),
(450, 'estacioosss JOAN', '2017-08-13 04:49:09', 'deleted product', '0'),
(451, 'estacioosss JOAN', '2017-08-13 04:49:30', 'added product', '0'),
(452, 'quinto teddy', '2017-08-13 06:58:25', 'Logout from foodlust', '0'),
(453, 'estacioosss JOAN', '2017-08-13 07:06:18', 'Logout from foodlust', '0'),
(454, 'estacioosss JOAN', '2017-08-13 07:18:32', 'Logged In', '0'),
(455, 'estacioosss JOAN', '2017-08-13 07:33:26', 'Logout from foodlust', '0'),
(456, 'estacioosss JOAN', '2017-08-13 08:43:38', 'Logged In', '0'),
(457, 'estacioosss JOAN', '2017-08-13 08:57:27', 'Logout from foodlust', '0'),
(458, 'quinto teddy', '2017-08-13 12:48:17', 'Logged In', '0'),
(459, 'estacioosss JOAN', '2017-08-13 12:48:53', 'Logged In', '0'),
(460, 'estacioosss JOAN', '2017-08-13 12:49:04', 'Logout from foodlust', '0'),
(461, 'bustamante jab', '2017-08-13 12:49:17', 'Logged In', '0'),
(462, 'bustamante jab', '2017-08-13 14:01:50', 'Logout from foodlust', '0'),
(463, 'bustamante jab', '2017-08-13 14:02:36', 'Logged In', '0'),
(464, 'bustamante jab', '2017-08-13 14:08:18', 'rated a Photo 3 star', '0'),
(465, 'bustamante jab', '2017-08-13 14:31:44', 'Logout from foodlust', '0'),
(466, 'estacioosss JOAN', '2017-08-13 14:32:25', 'Logged In', '0'),
(467, 'estacioosss JOAN', '2017-08-13 16:04:33', 'added product', '0'),
(468, 'estacioosss JOAN', '2017-08-13 16:05:40', 'added product', '0'),
(469, 'estacioosss JOAN', '2017-08-13 16:06:02', 'added product', '0'),
(470, 'estacioosss JOAN', '2017-08-13 16:06:10', 'deleted product', '0'),
(471, 'estacioosss JOAN', '2017-08-13 16:06:11', 'deleted product', '0'),
(472, 'estacioosss JOAN', '2017-08-13 16:06:13', 'deleted product', '0'),
(473, 'estacioosss JOAN', '2017-08-13 16:47:59', 'Logged In', '0'),
(474, 'estacioosss JOAN', '2017-08-13 16:48:10', 'Logout from foodlust', '0'),
(475, 'estacioosss JOAN', '2017-08-13 16:53:30', 'Logout from foodlust', '0'),
(476, 'nar kin', '2017-08-17 08:13:31', 'Logged In', '0'),
(477, 'estacioosss JOAN', '2017-08-17 08:31:30', 'Logged In', '0'),
(478, 'nar kin', '2017-08-17 08:33:46', 'Logout from foodlust', '0'),
(479, 'estacioosss JOAN', '2017-08-17 08:34:04', 'Logged In', '0'),
(480, 'estacioosss JOAN', '2017-08-17 08:34:11', 'Logout from foodlust', '0'),
(481, 'quinto teddy', '2017-08-17 08:39:44', 'Logged In', '0'),
(482, 'quinto teddy', '2017-08-17 09:09:15', 'Logout from foodlust', '0'),
(483, 'estacioosss JOAN', '2017-08-17 12:41:04', 'Logout from foodlust', '0'),
(484, 'estacioosss JOAN', '2017-08-17 12:46:34', 'Logged In', '0'),
(485, 'estacioosss JOAN', '2017-08-17 12:46:56', 'Logged In', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `u_name`, `pass`) VALUES
(1, 'admin', 'admin');

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
(1, 1, 2, 'unoppened'),
(2, 2, 3, 'unoppened'),
(3, 2, 4, 'unoppened'),
(4, 2, 5, 'unoppened'),
(5, 2, 6, 'unoppened'),
(6, 4, 1, 'unoppened'),
(7, 1, 3, 'unoppened'),
(8, 1, 5, 'unoppened'),
(9, 1, 6, 'unoppened'),
(10, 3, 4, 'unoppened'),
(11, 6, 4, 'unoppened');

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
(1, 'food bazaar', 'any product is allowed<br />\r\n<br />\r\nexclusive for foodlust members', 1502548380, 1502653500, 'foodlust', 'pm3.jpg');

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
(5, 2, 4, 'hi', 0),
(6, 2, 5, 'hi', 1),
(7, 2, 1, 'hi', 1),
(8, 4, 6, 'hi', 1),
(9, 1, 7, 'hey', 1),
(10, 1, 8, 'hey', 0),
(11, 1, 9, 'aw', 1),
(12, 3, 10, 'hry', 0),
(13, 6, 11, 'hey', 0);

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
(2, 3, 14, 'rated your photo 4 star', '2017-07-24 08:13:13', 1),
(3, 1, 16, 'commented on your manokings product ', '2017-07-24 08:16:18', 0),
(4, 3, 16, 'commented on your manokings product ', '2017-07-24 08:12:33', 1),
(5, 4, 16, 'rated your photo 4 star', '2017-07-29 06:01:29', 1),
(6, 4, 25, 'rated your photo 3 star', '2017-07-27 08:14:36', 1),
(7, 4, 5, 'commented on your fvegiess product ', '2017-07-27 08:30:33', 0),
(8, 4, 4, 'rated your photo undefined star', '2017-07-29 08:34:58', 1),
(9, 4, 4, 'rated your photo undefined star', '2017-07-29 08:34:58', 1),
(10, 1, 1, 'rated your account 5 star', '2017-07-27 14:09:20', 0),
(11, 1, 4, 'rated your account 5 star', '2017-07-30 12:34:59', 1),
(12, 1, 26, 'rated your photo 5 star', '2017-07-27 14:18:53', 1),
(13, 1, 4, 'rated your account 5 star', '2017-07-30 12:34:59', 1),
(14, 1, 29, 'commented on your fillet product ', '2017-07-29 06:38:44', 0),
(15, 1, 3, 'rated your account 5 star', '2017-07-29 08:36:23', 1),
(16, 1, 2, 'rated your account 5 star', '2017-07-29 06:45:42', 0),
(17, 1, 1, 'rated your account 5 star', '2017-07-29 06:46:34', 0),
(18, 1, 1, 'rated your account 5 star', '2017-07-29 06:47:50', 0),
(19, 1, 1, 'rated your account 5 star', '2017-07-29 06:48:46', 0),
(20, 1, 1, 'rated your account 3 star', '2017-07-29 06:50:17', 0),
(21, 1, 1, 'rated your account 2 star', '2017-07-29 06:51:33', 0),
(22, 1, 1, 'rated your account 1 star', '2017-07-29 06:53:05', 0),
(23, 1, 4, 'rated your account 3 star', '2017-07-30 12:34:59', 1),
(24, 1, 3, 'rated your account 5 star', '2017-07-29 08:36:23', 1),
(25, 1, 1, 'rated your account 4 star', '2017-07-29 06:58:03', 0),
(26, 1, 4, 'rated your account 4 star', '2017-07-30 12:34:59', 1),
(27, 1, 3, 'rated your account 5 star', '2017-07-29 08:36:23', 1),
(28, 6, 1, 'rated your account 5 star', '2017-07-29 07:07:39', 0),
(29, 6, 4, 'rated your account 4 star', '2017-07-29 08:36:32', 1),
(30, 6, 3, 'rated your account 4 star', '2017-07-29 08:36:05', 1),
(31, 6, 25, 'rated your photo 5 star', '2017-07-29 08:29:51', 0),
(32, 6, 26, 'rated your photo 3 star', '2017-07-29 08:29:54', 0),
(33, 6, 24, 'rated your photo 5 star', '2017-07-30 12:02:38', 1),
(34, 3, 29, 'rated your photo 5 star', '2017-07-29 08:35:39', 1),
(35, 3, 26, 'rated your photo 3 star', '2017-07-29 08:37:01', 0),
(36, 1, 25, 'rated your photo 5 star', '2017-07-30 04:14:35', 0),
(37, 1, 0, 'rated your photo  star', '2017-07-30 04:16:48', 0),
(38, 6, 15, 'rated your photo 5 star', '2017-07-30 11:53:53', 0),
(39, 3, 25, 'rated your photo 5 star', '2017-07-30 11:54:22', 0),
(40, 4, 30, 'rated your photo 5 star', '2017-08-02 10:25:45', 1),
(41, 6, 31, 'rated your photo 5 star', '2017-08-03 14:18:09', 0),
(42, 6, 30, 'rated your photo 5 star', '2017-08-13 13:32:11', 1),
(43, 6, 26, 'commented on your asd product ', '2017-08-03 15:23:06', 0),
(44, 6, 19, 'rated your photo 4 star', '2017-08-03 15:24:54', 0),
(45, 6, 13, 'rated your photo 1 star', '2017-08-03 15:25:50', 0),
(46, 6, 32, 'rated your photo 2 star', '2017-08-11 14:24:06', 1),
(47, 1, 32, 'rated your photo 5 star', '2017-08-11 14:24:31', 1),
(48, 1, 31, 'commented on your file product ', '2017-08-03 17:30:55', 0),
(49, 3, 32, 'rated your photo 4 star', '2017-08-11 14:24:26', 1),
(50, 3, 33, 'rated your photo 5 star', '2017-08-12 01:58:10', 0),
(51, 3, 34, 'rated your photo 3 star', '2017-08-12 01:58:43', 0),
(52, 1, 34, 'rated your photo 4 star', '2017-08-12 02:01:04', 0),
(53, 1, 33, 'rated your photo 3 star', '2017-08-12 02:01:07', 0),
(54, 5, 35, 'rated your photo 3 star', '2017-08-13 14:08:18', 0);

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
(1, 2, 'nice prod', 1, 0),
(2, 4, 'i want to inquire', 1, 0),
(3, 3, 'its fantastic', 1, 0),
(4, 5, 'wow', 1, 0),
(5, 2, 'superb', 1, 0),
(6, 3, 'gumana ka', 1, 0),
(7, 5, ' wow moto', 1, 0),
(8, 2, ' ay weh thanks', 3, 0),
(9, 2, 'want more?', 3, 0),
(10, 2, 'we want more', 3, 0),
(19, 2, 'sdsad ', 3, 0),
(20, 9, 'awtsu', 3, 0),
(21, 2, 'okay', 3, 0),
(22, 3, 'aws', 3, 0),
(23, 4, 'awww', 3, 0),
(24, 8, 'sabig', 3, 0),
(25, 9, 'ass', 3, 0),
(26, 12, 'PLS buy my product!', 2, 0),
(27, 13, 'inquuire NOW!', 2, 0),
(28, 13, 'OKAY', 2, 0),
(29, 11, 'pls share\n', 1, 0),
(30, 13, 'i want sonme', 1, 0),
(31, 13, 'WOW', 1, 0),
(32, 12, 'okay', 1, 0),
(33, 14, 'woq', 2, 0),
(34, 15, 's', 2, 0),
(35, 14, 'aw', 2, 0),
(36, 24, 'hi', 1, 0),
(37, 0, 'sdw', 1, 0),
(38, 0, 'aw', 1, 0),
(39, 24, 'dw', 1, 0),
(40, 16, 'WOW', 3, 0),
(41, 3, 'aw', 1, 0),
(42, 24, 'ddd', 1, 0),
(43, 24, 'sdw', 1, 0),
(44, 16, 'asd some', 3, 0),
(45, 16, 'wssws', 1, 0),
(46, 16, 'some', 3, 0),
(47, 5, 'hi', 4, 0),
(48, 29, 'PLS LIKE', 1, 0),
(49, 26, 'wow', 6, 0),
(50, 31, 'wew', 1, 0);

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
(1, 5, 24, 5, 0),
(2, 5, 19, 5, 0),
(3, 5, 16, 2, 0),
(4, 5, 13, 4, 0),
(5, 5, 15, 3, 0),
(6, 5, 3, 4, 0),
(7, 5, 12, 3, 0),
(8, 5, 5, 3, 0),
(9, 5, 11, 3, 0),
(10, 5, 14, 1, 0),
(11, 5, 4, 4, 0),
(12, 1, 24, 1, 0),
(13, 1, 19, 5, 0),
(14, 1, 3, 3, 0),
(15, 1, 16, 5, 0),
(16, 1, 15, 4, 0),
(17, 2, 16, 5, 0),
(18, 2, 14, 5, 0),
(19, 2, 11, 4, 0),
(20, 3, 16, 3, 0),
(21, 5, 2, 5, 0),
(22, 3, 14, 4, 0),
(23, 4, 16, 4, 0),
(24, 4, 25, 3, 0),
(27, 1, 26, 5, 0),
(28, 6, 25, 5, 0),
(29, 6, 26, 3, 0),
(30, 6, 24, 5, 0),
(31, 3, 29, 5, 0),
(32, 3, 26, 3, 0),
(33, 1, 25, 5, 0),
(34, 1, 0, 0, 0),
(35, 6, 15, 5, 0),
(36, 3, 25, 5, 0),
(37, 4, 30, 5, 0),
(38, 6, 31, 5, 0),
(39, 6, 30, 5, 0),
(40, 6, 19, 4, 0),
(41, 6, 13, 1, 0),
(42, 6, 32, 2, 0),
(43, 1, 32, 5, 0),
(44, 3, 32, 4, 0),
(45, 3, 33, 5, 0),
(46, 3, 34, 3, 0),
(47, 1, 34, 4, 0),
(48, 1, 33, 3, 0),
(49, 5, 35, 3, 0);

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
  `food_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_post`
--

INSERT INTO `product_post` (`prod_id`, `user_seller_id`, `prod_name`, `prod_pic`, `price`, `category`, `food_desc`) VALUES
(3, 3, 'KITAKAT', '10563132_867513169943233_6555984114860061583_n[1].png', 455, 'cakes', ' soo msarap'),
(4, 3, 'chikssss', 'received_1730219487006788[1].jpeg', 50000, 'raw foods', ' one only'),
(12, 2, 'burgerrrrr', 'received_1730202440341826[1].jpeg', 124, 'raw foods', 'sad sd'),
(13, 2, 'piggy bank', 'received_1730198107008926[1].jpeg', 7000, 'raw foods', ' so yummy and affordablae'),
(15, 2, 'meat', 'logo.png', 123, 'raw foods', 'sarap to the bones'),
(25, 4, 'asdw', '6.jpg', 2, 'raw foods', 'a'),
(26, 4, 'asd', 'we.jpg', 2, 'raw foods', 'sdwa'),
(30, 1, 'Catering prod', '7.jpg', 1000, 'catering_service', 'asdwd'),
(31, 1, 'file', '16649461_628243337368303_2945714002656439269_n.jpg', 12, 'product', 'asd'),
(32, 6, 'chicken', '1.jpg', 1232, 'raw meat', 'awdwds'),
(33, 5, 'X', 'sd.png', 12, 'product', 'asdw'),
(34, 5, 'sdw', 'we.jpg', 23, 'raw meat', 'awds'),
(35, 3, 'foodito', 'sim.jpg', 123, 'product', 'asdwd');

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
(1, 1, 1, 1, ' asdw', 0),
(2, 1, 4, 1, ' asd', 0),
(3, 1, 3, 1, ' asdw', 0),
(4, 4, 1, 1, ' scam', 0),
(5, 4, 3, 1, ' ', 0),
(6, 4, 2, 1, ' ', 0);

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

--
-- Dumping data for table `temp_user`
--

INSERT INTO `temp_user` (`id`, `fname`, `lname`, `email`, `security_code`, `pass`, `address`) VALUES
(1, '', '', '', '509b0a510813935951262856c729a39f', '', ''),
(2, 'asds', 'asd', 'sam@gmail.com', '027c67a83fa03f482cd80616c5b4174f', 'asd', 'asd'),
(3, 'asds', 'asd', 'a@gmail.com', '6b100d09ae65dde93ef73b00674ca31f', 'asd', 'asd2'),
(4, 'qw', 'asd1wead123sd', 'asd1@gmail.com', '7983c3cebc66645ed0e8926673664d6d', 'asd', 'q');

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
  `pass` varchar(10) NOT NULL,
  `user_profile` varchar(255) NOT NULL,
  `b_info` varchar(255) NOT NULL,
  `date_created` int(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lname`, `fname`, `address`, `business_name`, `cp_num`, `email`, `type_of_user`, `pass`, `user_profile`, `b_info`, `date_created`, `status`) VALUES
(1, 'quinto', 'teddy', 'sa manila', 'shmawow', 1234454, 'janjanquinto@gmail.com', 'seller', 'asd', '16997103_10207041239143307_489602940_n.jpg', 'fifty shades of grey                                   ', 2017, 0),
(2, 'sam', 'sam', 'sa tondo', 'samahan', 1234566, 'tedd@gmail.com', 'buyer', 'asd', '16508375_1538912792804198_3816185325084682921_n.jpg', ' sham law aki dot  ', 2017, 2),
(3, 'estacioosss', 'JOAN', 'sa kanto', 'sabogan', 123123, 'jojo@gmail.com', 'buyer', 'sd', '16807466_628294070696563_3289982794662611934_n.jpg', 'salamaig sjfjs sfhasdjwqiax sadajsdqwjdzk sdas                                    ', 2016, 1),
(4, 'rivera', 'diaaa', 'sa pasig', 'sabogan', 1234354, 'r@gnail.com', 'seller', 'asd', '16649461_628243337368303_2945714002656439269_n.jpg', 'asddwdd  ', 2016, 0),
(5, 'bustamante', 'jab', 'sa pasig', 'jabbs food', 12356, 'jab@gmail.com', 'seller', 'asd', 'default.jpg', 'veeery tasty foods', 2017, 0),
(6, 'nar', 'kin', 'sad', 'asd', 123, 'janjanquinto13@gmail.com', 'buyer', 'ddd', 'sim.jpg', 'wewe    ', 2017, 0);

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
(6, 6, 3, 4, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=486;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `reports_user`
--
ALTER TABLE `reports_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_rating`
--
ALTER TABLE `users_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_vid`
--
ALTER TABLE `user_vid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
