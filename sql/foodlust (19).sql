-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2017 at 03:30 PM
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
  `user_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `action` varchar(255) NOT NULL,
  `push` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `name`, `user_id`, `date`, `action`, `push`) VALUES
(1, 'Quinto Ted', 7, '2017-10-01 05:23:23', 'Updated product', '0'),
(2, 'Quinto Ted', 7, '2017-10-01 05:23:23', 'Updated product', '0'),
(3, 'Quinto Ted', 7, '2017-10-01 05:24:07', 'Logout from foodlust', '0'),
(4, 'estacioosss joana', 3, '2017-10-01 05:24:14', 'Logged In', '0'),
(5, 'estacioosss joana', 3, '2017-10-01 05:40:54', 'Logout from foodlust', '0'),
(6, 'rivera diaaa', 4, '2017-10-01 05:41:00', 'Logged In', '0'),
(7, 'rivera diaaa', 4, '2017-10-01 08:43:32', 'rated a Photo 3 star', '0'),
(8, 'estacioosss joana', 3, '2017-10-01 08:44:10', 'Logged In', '0'),
(9, 'estacioosss joana', 3, '2017-10-01 08:59:42', 'Logout from foodlust', '0'),
(10, 'Quinto Ted', 7, '2017-10-01 08:59:51', 'Logged In', '0'),
(11, 'Quinto Ted', 7, '2017-10-01 09:01:04', 'Updated his profile', '0'),
(12, 'rivera diaaa', 4, '2017-10-01 12:33:20', 'Logout from foodlust', '0'),
(13, 'bustamante jab', 5, '2017-10-01 12:33:28', 'Logged In', '0'),
(14, 'bustamante jab', 5, '2017-10-01 12:35:07', 'added product', '0'),
(15, 'Quinto Ted', 7, '2017-10-01 12:45:46', 'rated a Photo 4 star', '0'),
(16, 'Quinto Ted', 7, '2017-10-01 13:27:45', 'Logout from foodlust', '0'),
(17, 'bustamante jab', 5, '2017-10-01 13:27:49', 'Logout from foodlust', '0'),
(18, 'nar kin', 6, '2017-10-01 14:29:28', 'Logged In', '0'),
(19, 'nar kin', 6, '2017-10-01 14:30:54', 'added business inq', '0'),
(20, 'nar kin', 6, '2017-10-01 14:31:40', 'rated a Photo 5 star', '0'),
(21, 'nar kin', 6, '2017-10-01 14:31:48', 'rated a Photo 3 star', '0'),
(22, 'nar kin', 6, '2017-10-01 14:33:47', 'Logout from foodlust', '0');

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
(3, 4, 7, 'open'),
(4, 7, 3, 'open'),
(5, 4, 3, 'open'),
(8, 5, 3, 'unopened'),
(11, 7, 5, 'open'),
(12, 6, 5, 'unopened');

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
(1, 7, 6, 'interested to have transaction with your business', '2017-10-01 12:51:34', 0),
(5, 6, 6, 'rated your photo 5 star', '2017-10-01 14:31:40', 0),
(6, 6, 4, 'rated your photo 3 star', '2017-10-01 14:31:48', 0),
(7, 6, 6, 'interested to have transaction with your business', '2017-10-01 14:32:12', 0);

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
(41, 7, 1, 0, 0),
(42, 3, 3, 3, 0),
(43, 4, 4, 3, 0),
(44, 7, 6, 4, 0),
(45, 6, 6, 5, 0),
(46, 6, 4, 3, 0);

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
(2, 7, 'pancake', 'received_1653218554697999.jpeg', 123, 'fruits', ' for catering', '', '', 0, 0, '', '', '2017-10-01 05:23:23'),
(3, 4, 'best meal', '7.jpg', 1234, 'catering service', 'for family and friends', '', '', 0, 0, '', '', '2017-09-06 14:36:44'),
(4, 7, 'doughnut', 'received_1730202463675157[1].jpeg', 142, 'product', 'sisg pork for bulk order', '', '', 0, 0, '', '', '2017-09-28 15:10:29'),
(5, 3, '', '', 0, '', '', '', 'catering_service', 21, 25, '7.jpg', 'sdas dsd asd', '2017-09-28 15:07:28'),
(6, 5, 'sprite', 'sprite.jpg', 45, 'catering service', 'swak na swak', '', '', 0, 0, '', '', '2017-10-01 12:35:07'),
(7, 6, '', '', 0, '', '', '', 'cakes', 23, 44, 'buko-pandan.jpg', 'fds', '2017-10-01 14:30:54');

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
(3, 'estacioosss', 'joana', 'pasig city,philippines', 'sabogan', 123123, 'jojo@gmail.com', 'buyer', '7815696ecbf1c96e6894b779456d330e', 'received_1653218554697999.jpeg', 'salamaig sjfjs sfhasdjwqiax sadajsdqwjdzk sdas                                          ', 2016, 0),
(4, 'rivera', 'diaaa', 'pasig city, philippines', 'sabogan', 1234354, 'r@gnail.com', 'seller', '7815696ecbf1c96e6894b779456d330e', '16649461_628243337368303_2945714002656439269_n.jpg', 'asddwdd  ', 2016, 0),
(5, 'bustamante', 'jab', 'binangonan Rizal, philippines', 'jabbs food', 12356, 'jab@gmail.com', 'seller', '7815696ecbf1c96e6894b779456d330e', 'default.jpg', 'veeery tasty foods', 2017, 0),
(6, 'nar', 'kin', 'recto, manila', 'asd', 123, 'janjanquinto13@gmail.com', 'buyer', '86baf0fec9c756d3d7670284e5913adf', 'sim.jpg', 'wewe    ', 2017, 0),
(7, 'Quinto', 'Ted', 'bacoor cavite', 'Foodlust', 123456, 'janjanquinto@gmail.com', 'seller', '7815696ecbf1c96e6894b779456d330e', '16508375_1538912792804198_3816185325084682921_n.jpg', '    We Love Foods!        ', 2017, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `conversation`
--
ALTER TABLE `conversation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product_comments`
--
ALTER TABLE `product_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_likes`
--
ALTER TABLE `product_likes`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `product_post`
--
ALTER TABLE `product_post`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
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
