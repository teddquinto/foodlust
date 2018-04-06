-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 05:14 PM
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
(84, 'estacioosss JOAN', '2017-07-19 14:54:55', 'Logged In', '0');

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
(8, 1, 7, 'aw', 0),
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
(51, 3, 1, 'fwfw', 0);

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
(31, 13, 'WOW', 1),
(32, 12, 'okay', 1),
(33, 14, 'woq', 2),
(34, 15, 's', 2),
(35, 14, 'aw', 2),
(36, 24, 'hi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_likes`
--

CREATE TABLE `product_likes` (
  `l_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_likes`
--

INSERT INTO `product_likes` (`l_id`, `user_id`, `prod_id`, `rating`) VALUES
(1, 5, 24, 5),
(2, 5, 19, 5),
(3, 5, 16, 2),
(4, 5, 13, 4),
(5, 5, 15, 3),
(6, 5, 3, 4),
(7, 5, 12, 3),
(8, 5, 5, 3),
(9, 5, 11, 3),
(10, 5, 14, 1),
(11, 5, 4, 4),
(12, 1, 24, 1),
(13, 1, 19, 5);

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
(5, 'bustamante', 'jab', 'sa pasig', 'jabbs food', 12356, 'jab@gmail.com', 'seller', 'asd', 'default.jpg', 'veeery tasty foods', 2017);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
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
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
