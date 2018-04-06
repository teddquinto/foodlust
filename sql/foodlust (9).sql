-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 03:25 PM
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
(26, 'sam sam', '2017-07-15 09:45:46', 'Liked a Photo', '0'),
(27, 'sam sam', '2017-07-15 09:45:58', 'Commented to a post', '0'),
(28, 'sam sam', '2017-07-15 09:46:50', 'added product', '0'),
(29, 'sam sam', '2017-07-15 10:02:08', 'Logout from foodlust', '0'),
(30, 'sam sam', '2017-07-16 03:54:20', 'Logged In', '0'),
(31, 'sam sam', '2017-07-16 03:54:33', 'Liked a Photo', '0'),
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
(42, 'quinto teddy', '2017-07-17 17:23:45', 'Liked a Photo', '0'),
(43, 'quinto teddy', '2017-07-17 18:09:21', 'Logout from foodlust', '0'),
(44, 'sam sam', '2017-07-17 18:09:31', 'Logged In', '0'),
(45, 'quinto teddy', '2017-07-18 14:15:26', 'Logged In', '0'),
(46, 'quinto teddy', '2017-07-19 02:34:55', 'Logged In', '0'),
(47, 'quinto teddy', '2017-07-19 04:54:43', 'Liked a Photo', '0'),
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
(68, 'bustamante jab', '2017-07-19 09:34:21', 'Liked a Photo', '0'),
(69, 'bustamante jab', '2017-07-19 09:34:40', 'Liked a Photo', '0'),
(70, 'bustamante jab', '2017-07-19 09:34:48', 'Liked a Photo', '0'),
(71, 'bustamante jab', '2017-07-19 10:02:51', 'Liked a Photo', '0'),
(72, 'bustamante jab', '2017-07-19 10:16:08', 'Liked a Photo', '0'),
(73, 'bustamante jab', '2017-07-19 10:16:31', 'Liked a Photo', '0'),
(74, 'bustamante jab', '2017-07-19 10:27:37', 'Liked a Photo', '0'),
(75, 'bustamante jab', '2017-07-19 10:37:31', 'Liked a Photo', '0'),
(76, 'bustamante jab', '2017-07-19 10:37:36', 'Liked a Photo', '0'),
(77, 'bustamante jab', '2017-07-19 10:43:32', 'rated a Photo 1', '0'),
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
(219, 'quinto teddy', '2017-07-25 16:40:05', 'Logout from foodlust', '0');

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
(1, 1, 3, 'unoppened'),
(2, 1, 4, 'unoppened'),
(3, 1, 0, 'unoppened'),
(4, 1, 1, 'unoppened'),
(5, 3, 4, 'unoppened'),
(6, 3, 3, 'unoppened'),
(7, 1, 2, 'unoppened'),
(8, 2, 3, 'unoppened'),
(9, 2, 2, 'unoppened'),
(10, 1, 5, 'unoppened');

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
(1, 3, 5, 'hey', 0),
(2, 1, 1, 'hey', 1),
(3, 3, 1, 'hey', 1),
(4, 3, 6, 'hey', 0),
(5, 3, 1, 'het', 1),
(6, 3, 1, 'aw', 1),
(7, 1, 1, 'why', 1),
(8, 1, 7, 'aw', 1),
(9, 3, 5, 'aw', 0),
(10, 3, 1, 'hi', 1),
(11, 1, 1, 'hello', 1),
(12, 1, 1, 'aw', 1),
(13, 1, 4, 's', 0),
(14, 3, 1, 'aw', 1),
(15, 1, 1, 'aw', 1),
(16, 1, 1, 'fe', 1),
(17, 1, 1, 'wa', 1),
(18, 1, 1, 'aw', 1),
(19, 1, 1, 'dw', 1),
(20, 1, 1, 'aw', 1),
(21, 1, 1, 'fe', 1),
(22, 1, 1, 'ge', 1),
(23, 1, 1, 'aw', 1),
(24, 3, 1, 'dw', 1),
(25, 1, 1, 'dw', 1),
(26, 3, 1, 'a', 1),
(27, 1, 1, 's', 1),
(28, 1, 1, 'ss', 1),
(29, 3, 1, 'aw', 1),
(30, 1, 1, 'awds', 1),
(31, 2, 8, 'hi', 0),
(32, 2, 9, 'hry', 0),
(33, 2, 8, 'g\n', 0),
(34, 2, 7, 'hety', 1),
(35, 2, 8, 'aw', 0),
(36, 2, 7, 'hy', 1),
(37, 2, 7, 'w', 1),
(38, 2, 8, 'aw', 0),
(39, 2, 7, 'aw', 1),
(40, 1, 2, 'e', 0),
(41, 1, 10, 'hry', 0),
(42, 1, 1, 'hey', 1),
(43, 3, 1, 'aw', 1),
(44, 3, 1, 'fwfw', 1),
(45, 1, 1, 'fw', 1),
(46, 3, 1, 'awd', 1),
(47, 1, 1, 'gege', 1),
(48, 3, 1, 'fef', 1),
(49, 3, 1, 'awdw', 1),
(50, 3, 1, 'dwdw', 1),
(51, 3, 1, 'fwfw', 1);

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
(4, 3, 16, 'commented on your manokings product ', '2017-07-24 08:12:33', 1);

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
(46, 16, 'some', 3, 0);

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
(22, 3, 14, 4, 0);

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
(2, 1, 'cupcakes', 'received_1736200043061180[1].jpeg', 123, 'cakes', 'so good'),
(3, 3, 'KITAKAT', '10563132_867513169943233_6555984114860061583_n[1].png', 455, 'cakes', ' soo msarap'),
(4, 3, 'chikssss', 'received_1730219487006788[1].jpeg', 50000, 'raw foods', ' one only'),
(5, 3, 'fvegiess', 'received_1730219490340121[1].jpeg', 123, 'vegatables', 'so yummy'),
(11, 1, 'doughnuts', '14398135_120300000244250602_558706130_n.jpg', 21, 'cakes', 'colorful'),
(12, 2, 'burgerrrrr', 'received_1730202440341826[1].jpeg', 124, 'raw foods', 'sad sd'),
(13, 2, 'piggy bank', 'received_1730198107008926[1].jpeg', 7000, 'raw foods', ' so yummy and affordablae'),
(14, 1, 'fish', '1f9W9[1].png', 12, 'raw foods', ' price is negotianble'),
(15, 2, 'meat', 'logo.png', 123, 'raw foods', 'sarap to the bones'),
(16, 1, 'manokings', 'a.jpg', 1233, 'catering_service', 'sssawwdw'),
(19, 3, 'sd', '4.jpg', 123, 'cakes', 'asdwd'),
(24, 3, 'asdw', '10.jpg', 12, 'raw foods', 'adw');

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
(1, 'asd', 'asd', 'janjanquinto@gmail.com', '2f63ddcde318cf9b3e20b41e8bb3c79c', 'asd', 'asd123');

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
  `date_created` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lname`, `fname`, `address`, `business_name`, `cp_num`, `email`, `type_of_user`, `pass`, `user_profile`, `b_info`, `date_created`) VALUES
(1, 'quinto', 'teddy', 'sa manila', 'shmawow', 1234454, 'jan@gmail.com', 'seller', 'asd', 'we.jpg', 'Young wild and freed        ', 2017),
(2, 'sam', 'sam', 'sa tondo', 'samahan', 1234566, 'tedd@gmail.com', 'buyer', 'asd', '16508375_1538912792804198_3816185325084682921_n.jpg', ' sham law aki dot  ', 2017),
(3, 'estacioosss', 'JOAN', 'sa kanto', 'sabogan', 123123, 'jojo@gmail.com', 'buyer', 'asd', '16807466_628294070696563_3289982794662611934_n.jpg', 'salamaig sjfjs sfhasdjwqiax sadajsdqwjdzk sdas                                    ', 2017),
(4, 'rivera', 'diaaa', 'sa pasig', 'sabogan', 1234354, 'r@gnail.com', 'seller', 'asd', 'default.jpg', 'asddwdd', 2016),
(5, 'bustamante', 'jab', 'sa pasig', 'jabbs food', 12356, 'jab@gmail.com', 'seller', 'asd', 'default.jpg', 'veeery tasty foods', 2017),
(6, 'nar', 'kin', 'sad', 'asd', 123, 'janjanquinto13@gmail.com', 'buyer', 'asd', 'default.jpg', 'wewe', 2017);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=220;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `temp_user`
--
ALTER TABLE `temp_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
