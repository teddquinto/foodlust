-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2017 at 03:38 PM
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
(1, 'quinto ted', '2017-06-22 04:37:10', 'Logged In', '0'),
(2, 'sam sam', '2017-06-22 04:37:44', 'Logged In', '0'),
(3, 'sam sam', '2017-06-22 04:47:20', 'Logged In', '0'),
(4, 'sam sam', '2017-06-22 04:47:34', 'Logged In', '0'),
(5, 'quinto ted', '2017-06-22 04:48:06', 'Logged In', '0'),
(6, 'sam sam', '2017-06-22 04:48:47', 'Logged In', '0'),
(7, 'sam sam', '2017-06-22 12:04:02', 'Logged In', '0'),
(8, 'sam sam', '2017-06-22 13:08:38', 'Logged In', '0'),
(9, 'sam sam', '2017-06-23 12:25:02', 'Logged In', '0'),
(10, 'quinto ted', '2017-06-23 12:26:09', 'Logged In', '0'),
(11, 'sam sam', '2017-06-23 12:27:02', 'Logged In', '0'),
(12, 'sam sam', '2017-06-23 12:27:56', 'Logged In', '0'),
(13, 'quinto ted', '2017-06-23 14:00:38', 'Logged In', '0'),
(14, 'quinto ted', '2017-06-23 14:21:07', 'Logged In', '0'),
(15, 'sam sam', '2017-06-24 06:34:42', 'Logged In', '0'),
(16, 'sam sam', '2017-06-24 06:56:54', 'Logged In', '0'),
(17, 'sam sam', '2017-06-24 08:16:33', 'Logged In', '0'),
(18, 'sam sam', '2017-06-24 08:24:15', 'Logged In', '0'),
(19, 'quinto teddy', '2017-06-24 09:03:16', 'Logged In', '0'),
(20, 'quinto teddy', '2017-06-24 09:03:35', 'Logged In', '0'),
(21, 'quinto teddy', '2017-06-24 09:04:05', 'Logged In', '0'),
(22, '', '2017-06-24 09:15:46', 'Logged In', '0'),
(23, '', '2017-06-24 09:16:03', 'Logged In', '0'),
(24, 'quinto teddy', '2017-06-24 09:19:27', 'Logged In', '0'),
(25, 'quinto teddy', '2017-06-24 09:24:59', 'Logged In', '0'),
(26, 'quinto teddy', '2017-06-24 09:25:25', 'Logged In', '0'),
(27, 'sam sam', '2017-06-26 01:53:38', 'Logged In', '0'),
(28, 'sam sam', '2017-06-26 08:53:40', 'Logged In', '0'),
(29, 'sam sam', '2017-06-26 11:22:13', 'Logged In', '0'),
(30, 'sam sam', '2017-06-26 12:50:16', 'Logged In', '0'),
(31, 'sam sam', '2017-06-26 15:31:49', 'Logged In', '0'),
(32, 'rivera Yab', '2017-06-26 16:03:06', 'Logged In', '0'),
(33, 'sam sam', '2017-06-26 16:05:49', 'Logged In', '0'),
(34, 'sam sam', '2017-06-27 12:53:58', 'Logged In', '0'),
(35, 'sam sam', '2017-06-28 06:02:19', 'Logged In', '0'),
(36, 'estacio joo', '2017-06-28 06:31:30', 'Logged In', '0'),
(37, ' ', '2017-06-28 10:11:34', 'Logged In', '0'),
(38, 'quinto teddy', '2017-06-28 10:37:41', 'Logged In', '0'),
(39, 'quinto teddy', '2017-06-30 01:56:13', 'Logged In', '0'),
(40, 'quinto teddy', '2017-07-01 00:38:20', 'Logged In', '0'),
(41, 'estacioosss JOAN', '2017-07-01 03:16:50', 'Logged In', '0'),
(42, 'quinto teddy', '2017-07-01 12:49:49', 'Logged In', '0'),
(43, ' ', '2017-07-01 12:50:09', 'Logged In', '0'),
(44, 'quinto teddy', '2017-07-01 13:27:14', 'Logged In', '0'),
(45, 'estacioosss JOAN', '2017-07-01 13:27:35', 'Logged In', '0'),
(46, 'sam sam', '2017-07-01 13:47:53', 'Logged In', '0'),
(47, 'quinto teddy', '2017-07-02 13:35:41', 'Logged In', '0');

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
-- Table structure for table `product_comments`
--

CREATE TABLE `product_comments` (
  `comment_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `c_content` text NOT NULL,
  `user_c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_comments`
--

INSERT INTO `product_comments` (`comment_id`, `prod_id`, `c_content`, `user_c_id`) VALUES
(1, 2, 'nice prod', 1),
(2, 4, 'i want to inquire', 1),
(3, 3, 'its fantastic', 1),
(4, 5, 'wow', 1),
(5, 2, 'superb', 1),
(6, 3, 'gumana ka', 1),
(7, 5, ' wow moto', 1),
(8, 2, ' ay weh thanks', 3),
(9, 2, 'want more?', 3),
(10, 2, 'we want more', 3),
(19, 2, 'sdsad ', 3),
(20, 9, 'awtsu', 3),
(21, 2, 'okay', 3),
(22, 3, 'aws', 3),
(23, 4, 'awww', 3),
(24, 8, 'sabig', 3),
(25, 9, 'ass', 3),
(26, 12, 'PLS buy my product!', 2),
(27, 13, 'inquuire NOW!', 2);

-- --------------------------------------------------------

--
-- Table structure for table `product_likes`
--

CREATE TABLE `product_likes` (
  `l_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_likes`
--

INSERT INTO `product_likes` (`l_id`, `user_id`, `prod_id`) VALUES
(1, 3, 2),
(2, 3, 4),
(3, 3, 3),
(4, 3, 9),
(5, 1, 2),
(6, 2, 2),
(7, 2, 3),
(8, 2, 12),
(9, 3, 12),
(10, 3, 11),
(11, 3, 5),
(12, 2, 11),
(13, 2, 9),
(14, 1, 13),
(15, 1, 12);

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
(2, 1, 'pray meat s', 'sim.jpg', 123, 'raw foods', 'so good'),
(3, 3, 'choco cake', 'stats.jpg', 455, 'cakes', ' soo msarap'),
(4, 3, 'dd duo', '16833174_1868585923423781_938503451_o (1).jpg', 50000, 'catering_service', ' one only'),
(5, 3, 'fresh itlog', '16010444_10206727342256081_137395642_o.jpg', 123, 'raw foods', 'so yummy'),
(8, 3, 'awakida', '003.jpg', 123, 'raw foods', 'asd'),
(9, 3, 'fsfds', '15493939_10206512069874406_1306885364_n.jpg', 21, 'raw foods', 'sad'),
(11, 1, 'add', 'add.png', 21, 'cakes', 'sd'),
(12, 2, 'sahwn', 'images.png', 124, 'raw foods', 'asdcsfrsfs sd'),
(13, 2, 'piggy bank', '003.jpg', 7000, 'raw foods', ' so yummy and affordablae');

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
  `b_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `lname`, `fname`, `address`, `business_name`, `cp_num`, `email`, `type_of_user`, `pass`, `user_profile`, `b_info`) VALUES
(1, 'quinto', 'teddy', 'sa manila', 'shmawow', 1234454, 'jan@gmail.com', 'seller', 'asd', '16807466_628294070696563_3289982794662611934_n.jpg', 'Young wild and free    '),
(2, 'sam', 'sam', 'sa tondo', 'samahan', 1234566, 'tedd@gmail.com', 'buyer', 'asd', '16508375_1538912792804198_3816185325084682921_n.jpg', ' sham law aki dot  '),
(3, 'estacioosss', 'JOAN', 'sa kanto', 'sabogan', 123123, 'jojo@gmail.com', 'buyer', 'asd', '16807466_628294070696563_3289982794662611934_n.jpg', 'salamaig sjfjs sfhasdjwqiax sadajsdqwjdzk sdas                                    ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
