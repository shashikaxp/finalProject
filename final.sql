-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 10:07 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `amenities_id` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`amenities_id`, `pic`, `des`) VALUES
(1, 'amenities/IconAC.jpg', 'Every room in the Tamera Plaza Inn has Air Conditioning. Each room has an easy-to-use remote control to set your comfort level without having to leave the bed.'),
(2, 'amenities/IconBkfst.jpg', 'Upon your arrival, you will recieve a complimentary "Welcome Drink" for your travel here. Also, there is Free Breakfast for all accomodations.'),
(3, 'amenities/IconCocktail.jpg', 'Located in the lobby, we offer a full-service Bar & Coffee Shop with a variety of beverages. '),
(4, 'amenities/IconFunction.jpg', 'Located on the 4th floor, we hold many activities for all occasions here in the Function Room. One can reserve this room for conferences, parties, and more.'),
(5, 'amenities/IconGen.jpg', 'We have generators on standby 24 hours a day, 7 days a week in an event of a "Brown Out", providing uninterrupted electricity service to the building.'),
(6, 'amenities/IconLaundry.jpg', 'Whether on business or pleasure, we provide laundry and pressing service here. We deliver your clothes to your room, or in person to accomodate your schedule.'),
(7, 'amenities/IconLongDist.jpg', 'Need to call home or send documents? We provide Fax services and phones equipped for Long Distance calls to home, the office, or anywhere in between.'),
(8, 'amenities/restaurantLG.jpg', 'Not only a great place to eat, but has great street-side view of Bacolod City. Try the famous "Tamera Chicken", great for the whole family!'),
(9, 'amenities/IconShower.jpg', 'Every room is individualy equipped with personal water heaters in the showers. Fully adjustable, you''ll always have a comfortable shower without burning or freezing yourself.'),
(10, 'amenities/IconTaxi.jpg', 'Have a meeting to go to or just want to go out? You can schedule trips anywhere around Bacolod City by utilizing our transportation service offered here.'),
(11, 'amenities/IconTV.jpg', 'No room would be complete without complimentary Cable TV and telephone service in every room. Channels may vary.'),
(12, 'amenities/SmIconWiFi.png', 'All area of Tamera Plaza Inn is wifi ready');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `name`, `email`, `content`) VALUES
(15, 'mecile', 'mecile_26oligo@yahoo.com', 'bhjkadgasj,dsads'),
(14, 'arlene', 'arlenepasigado@yahoo.com', 'ka gamai ka bed....\r\n\r\n\r\n\r\n\r\n'),
(13, 'qke.weqe', 'hannah@hotmail.com', 'wala ko mai e komment'),
(12, 'jhgjhgjhgjh', 'jhg', 'jhgjhg'),
(11, 'ttuyt', 'tuyt', 'uytuy'),
(10, 'gf', 'hfhgfhgfh', 'gfhgf');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `addr_line1` text NOT NULL,
  `addr_line2` text NOT NULL,
  `city` text NOT NULL,
  `zip_code` text NOT NULL,
  `country` text NOT NULL,
  `contact` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `f_name`, `l_name`, `addr_line1`, `addr_line2`, `city`, `zip_code`, `country`, `contact`, `email`) VALUES
(21, 'shashika', 'lakma', 'adsadsa', 'sadasd', 'maharagama', '65465', 'sri lanka', 710174439, 'shashikaxp@gmail.com'),
(22, 'shashika', 'lakma', 'adsadsa', 'sadasd', 'maharagama', '65465', 'sri lanka', 710174439, 'shashikaxp@gmail.com'),
(23, 'shashika', 'lakma', 'adsadsa', 'sadasd', 'maharagama', '65465', 'sri lanka', 710174439, 'shashikaxp@gmail.com'),
(24, 'shashika', 'lakma', 'adsadsa', 'sadasd', 'maharagama', '65465', 'sri lanka', 710174439, 'shashikaxp@gmail.com'),
(25, 'yasheera', 'dilibu', '115', 'highlevel rd', 'maharagama', '1234657', 'sri lanka', 710174439, 'hydmendis@gmail.com'),
(26, 'qq', 'q', 'q', 'q', 'q', 'q', 'q', 0, 'q@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(11) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `adults` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `arrival`, `departure`, `adults`, `child`, `status`, `customer_id`) VALUES
(5, '01 October 2016', '24 September 2016', 2, 3, 'pending', 21),
(6, '01 October 2016', '24 September 2016', 2, 3, 'pending', 22),
(7, '01 October 2016', '24 September 2016', 2, 3, 'pending', 23),
(8, '01 October 2016', '24 September 2016', 2, 3, 'pending', 24),
(9, '15 September 2016', '25 September 2016', 2, 3, 'pending', 25),
(10, '21 September 2016', '25 September 2016', 2, 3, 'pending', 26);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `rate` int(11) NOT NULL,
  `description` varchar(300) NOT NULL,
  `description_large` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `max_adult` int(11) NOT NULL,
  `max_child` int(11) NOT NULL,
  `bed` varchar(50) NOT NULL,
  `view` varchar(50) NOT NULL,
  `sqm` int(11) NOT NULL,
  `wifi` text NOT NULL,
  `room_service` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `type`, `rate`, `description`, `description_large`, `image`, `qty`, `max_adult`, `max_child`, `bed`, `view`, `sqm`, `wifi`, `room_service`) VALUES
(6, 'Superior', 15000, 'ras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et m..Fully air conditioned', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'images/DeLuxe.jpg', 12, 4, 4, '2 Double Beds', 'Beach', 80, 'yes', 'yes'),
(7, 'Deluxe', 1300, 'Fully air conditioned..ras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et mdsa', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'images/DeLuxe.jpg', 5, 2, 2, '1 King Bed', 'Beach', 75, 'yes', 'yes'),
(8, 'Standard Single', 950, 'Fully air conditioned..ras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et mdsaf', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'images/DeLuxe.jpg', 3, 1, 1, '1 Single Bed', 'Beach', 50, 'yes', 'yes'),
(9, 'Standard Double', 1100, 'Fully air conditioned.ras justo odio, dapibus ac facilisis in, egestas eget quam. Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et m', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don''t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn''t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'images/DeLuxe.jpg', 3, 2, 2, '2 Single Beds', 'Beach', 60, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `roominventory`
--

CREATE TABLE `roominventory` (
  `roominventory_id` int(11) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `departure` varchar(30) NOT NULL,
  `qty_reserve` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL,
  `max_adult` int(3) NOT NULL,
  `max_child` int(3) NOT NULL,
  `reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roominventory`
--

INSERT INTO `roominventory` (`roominventory_id`, `arrival`, `departure`, `qty_reserve`, `room_id`, `status`, `max_adult`, `max_child`, `reservation_id`) VALUES
(1, '01 October 2016', '24 September 2016', 1, 6, 'confirm', 1, 0, 8),
(2, '15 September 2016', '25 September 2016', 1, 6, 'canceled', 1, 1, 9),
(3, '15 September 2016', '25 September 2016', 1, 7, 'confirm', 1, 0, 9),
(4, '21 September 2016', '25 September 2016', 1, 6, 'confirm', 1, 0, 10),
(5, '21 September 2016', '25 September 2016', 1, 7, 'confirm', 2, 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `position`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'argie', 'argie', 'frontdesk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`amenities_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `roominventory`
--
ALTER TABLE `roominventory`
  ADD PRIMARY KEY (`roominventory_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `amenities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `roominventory`
--
ALTER TABLE `roominventory`
  MODIFY `roominventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`cus_id`);

--
-- Constraints for table `roominventory`
--
ALTER TABLE `roominventory`
  ADD CONSTRAINT `roominventory_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `reservation` (`reservation_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
