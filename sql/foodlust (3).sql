-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2017 at 04:22 PM
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
(9, 'sam sam', '2017-07-12 13:56:49', 'Logged In', '0');

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

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `m_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `m_content` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`m_id`, `from_id`, `to_id`, `m_content`, `status`) VALUES
(1, 1, 0, 's', 0),
(2, 1, 0, 'ds', 0),
(3, 1, 2, 'dsd', 0),
(4, 1, 2, 'dsds', 0),
(5, 1, 4, 'ssss', 0),
(6, 1, 1, 'dsds', 0),
(7, 1, 2, 'ddwd', 0),
(8, 1, 2, 'ss', 0),
(9, 1, 2, 'ddw', 0),
(10, 1, 2, 'ddw', 0),
(11, 1, 2, 'deefw', 0),
(12, 1, 2, 'hi', 0),
(13, 1, 2, 'dsdw', 0),
(14, 1, 2, 'hki', 0),
(15, 1, 2, 'sa', 0),
(16, 1, 2, 'dw', 0),
(17, 1, 2, 'gi', 0),
(18, 1, 2, 'se', 0),
(19, 1, 2, 'ss', 0),
(20, 1, 0, 'sws', 0),
(21, 1, 2, 's', 0),
(22, 1, 2, 'sd', 0),
(23, 1, 2, 'dsdw', 0),
(24, 1, 0, 'asdw', 0),
(25, 1, 3, 'hi', 0),
(26, 1, 0, 'hu', 0),
(27, 1, 3, 'asd', 0),
(28, 1, 0, 'asd', 0),
(29, 1, 2, 'asd', 0),
(30, 1, 3, 'sd', 0),
(31, 1, 2, 'dsd', 0),
(32, 1, 2, 'dsd', 0),
(33, 1, 2, 'dsd', 0),
(34, 1, 2, 'dsd', 0),
(35, 1, 2, 'dsd', 0),
(36, 1, 2, 's', 0),
(37, 1, 2, 'aw', 0),
(38, 1, 2, 'sey', 0),
(39, 1, 2, 'asd', 0),
(40, 1, 2, 'd', 0),
(41, 1, 3, 'asd', 0),
(42, 1, 2, 'ss', 0),
(43, 1, 2, 'ss', 0),
(44, 1, 2, 'saw', 0),
(45, 1, 2, 'asd', 0),
(46, 1, 2, 'saw', 0),
(47, 1, 3, 'sss', 0),
(48, 1, 3, 'asdw', 0),
(49, 1, 2, 'sdw', 0),
(50, 1, 2, 'aw', 0),
(51, 2, 1, 'ss', 0),
(52, 2, 2, 'asd', 0),
(53, 2, 1, 'dd', 0),
(54, 1, 2, 'asd', 0),
(55, 1, 2, 'hry', 0),
(56, 2, 1, 'okay', 0),
(57, 1, 2, 'hry', 0),
(58, 2, 1, 'asd', 0),
(59, 2, 2, 'asd', 0),
(60, 2, 1, 'asdw', 0),
(61, 2, 1, 'asd', 0),
(62, 2, 1, 'asd', 0),
(63, 2, 2, 'ds', 0),
(64, 2, 2, 'ad', 0),
(65, 2, 2, 'asd', 0);

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
(27, 13, 'inquuire NOW!', 2),
(28, 13, 'OKAY', 2),
(29, 11, 'pls share\n', 1),
(30, 13, 'i want sonme', 1),
(31, 13, 'WOW', 1);

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
(15, 1, 12),
(16, 2, 13),
(17, 2, 4),
(18, 2, 8),
(19, 2, 5),
(20, 1, 11),
(21, 1, 9),
(22, 1, 14);

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
(8, 3, 'mcdonalds', '1544294_10206567469372983_941518988370992856_n[1].jpg', 123, 'raw foods', 'we offer business for others\r\n'),
(11, 1, 'doughnuts', '14398135_120300000244250602_558706130_n.jpg', 21, 'cakes', 'colorful'),
(12, 2, 'burgerrrrr', 'received_1730202440341826[1].jpeg', 124, 'raw foods', 'sad sd'),
(13, 2, 'piggy bank', 'received_1730198107008926[1].jpeg', 7000, 'raw foods', ' so yummy and affordablae'),
(14, 1, 'fish', '1f9W9[1].png', 12, 'raw foods', ' price is negotianble');

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
(1, 'quinto', 'teddy', 'sa manila', 'shmawow', 1234454, 'jan@gmail.com', 'seller', 'asd', 'we.jpg', 'Young wild and freed        '),
(2, 'sam', 'sam', 'sa tondo', 'samahan', 1234566, 'tedd@gmail.com', 'buyer', 'asd', '16508375_1538912792804198_3816185325084682921_n.jpg', ' sham law aki dot  '),
(3, 'estacioosss', 'JOAN', 'sa kanto', 'sabogan', 123123, 'jojo@gmail.com', 'buyer', 'asd', '16807466_628294070696563_3289982794662611934_n.jpg', 'salamaig sjfjs sfhasdjwqiax sadajsdqwjdzk sdas                                    '),
(4, 'rivera', 'diaaa', 'sa pasig', 'sabogan', 1234354, 'r@gnail.com', 'seller', 'asd', 'default.jpg', 'asddwdd');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
