-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 09:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--
CREATE DATABASE IF NOT EXISTS `auction` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `auction`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_img` varchar(100) NOT NULL,
  `cat_desc` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_img`, `cat_desc`, `status`) VALUES
(1, 'Automobile', '', '', 0),
(2, 'Electronics', '', '', 0),
(3, 'Books', '', '', 0),
(4, 'Funitures', '', '', 0),
(5, 'Music', 'vlcsnap-2017-04-28-17h48m42s980.png', '', 0),
(6, 'Phone & Tablets', 'mobile.jpg', '', 0),
(7, 'Home & Kitchen', 'Dish-Drainer-Plate-Rack.jpg', '', 0),
(8, 'Computer & Accessories', 'best_laptop_2017_main_review_stuff - Copy.png', '', 0),
(1, 'Automobile', '', '', 0),
(2, 'Electronics', '', '', 0),
(3, 'Books', '', '', 0),
(4, 'Funitures', '', '', 0),
(5, 'Music', 'vlcsnap-2017-04-28-17h48m42s980.png', '', 0),
(6, 'Phone & Tablets', 'mobile.jpg', '', 0),
(7, 'Home & Kitchen', 'Dish-Drainer-Plate-Rack.jpg', '', 0),
(8, 'Computer & Accessories', 'best_laptop_2017_main_review_stuff - Copy.png', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Name', 'me@us.com', 'Number', 'Message'),
(2, 'Name', 'me@us.com', 'Number', 'Message'),
(3, 'Name', 'me@us.com', 'Number', 'Message'),
(4, 'Name', 'me@us.com', 'Number', 'Message'),
(5, 'this is me', 'epospiky@gmail.com', '4444', 'how can yu tell me that'),
(6, 'Name', 'me@us.com', 'Number', 'Message'),
(7, 'Name', 'me@rhe.com', 'Number', 'Message'),
(8, 'Name', 'me@rhe.com', 'Number', 'Message'),
(9, 'Name', 'me@rhe.com', 'Number', 'Message'),
(10, 'Name', 'me@rhe.com', 'Number', 'Message'),
(11, 'Name', 'epospiky@gmail.com', 'Number', 'Message'),
(12, 'Name', 'epospiky@gmail.com', 'Number', 'Message'),
(13, 'james', 'jd@yahoo.com', '33444444', 'this is a way of keeping me busy'),
(14, 'nbj', 'epospiky@gmail.com', 'gs', 'gdsg');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Angola'),
(2, 'Afghanistan');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_image` varchar(100) NOT NULL,
  `item_description` varchar(250) NOT NULL,
  `regular_price` int(11) NOT NULL,
  `start_bid` varchar(100) NOT NULL,
  `posted_date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `sellername` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `item_name`, `item_image`, `item_description`, `regular_price`, `start_bid`, `posted_date`, `due_date`, `sellername`, `status`) VALUES
(17, 0, 'this is me', 'Images/item_img/Ernest Cstmt 20160907_155308.jpg', 'the man', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(19, 0, 'pc', 'Images/item_img/IMG_20170219_153607.jpg', 'nice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pcnice pc', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(21, 0, 'this is a hot one', 'Images/item_img/C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_unnamed(2).jpg', 'just feel the difference', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(22, 0, 'home made', 'Images/item_img/IMAG3385.jpg', 'home made goods are very important goods', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(23, 0, 'honda', 'Images/item_img/honda-jazz.jpg', 'this is a nice car. just bid on it and it will be yours', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(24, 0, 'this is me', 'Images/item_img/Subaru-WRX.jpg', 'get it', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(25, 0, 'honda', 'Images/item_img/porsche1.jpg', 'he is me', 0, '', '2017-10-06 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(26, 0, 'honda', 'Images/item_img/porsche1.jpg', 'get it', 0, '', '2017-10-06 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(27, 0, 'hot one', 'Images/item_img/Toyota-Camry-Hybrid.jpg', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(28, 1, 'honda', 'Images/item_img/Porsche.jpg', 'this is the man', 0, '', '2017-08-10 00:00:00', '2017-09-12 00:00:00', '0', '0'),
(29, 0, 'honda', 'Images/item_img/peugeot-exalt.jpg', 'get the item', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(30, 0, 'honda', 'Images/item_img/mazda-mazda3.jpg', 'nice is the car', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(31, 0, 'madza', 'Images/item_img/mazda-3s.jpg', 'get the mazda', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0', '0'),
(32, 0, 'this is me', 'Images/item_img/porsche1.jpg', 'take the porche', 0, '', '2017-10-09 00:00:00', '0000-00-00 00:00:00', '0', '1'),
(40, 0, '', '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0'),
(41, 0, '', '', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Epospiky', '0'),
(42, 0, '', '', '', 0, '', '2017-08-12 00:00:00', '2017-08-14 00:00:00', '', '0'),
(45, 2, 'itel', 'picture065.jpg', 'ITEL is one of the best phone to use. It has a battery capacity of 4000amh, a camera size of 20mg(very good for photogenics) and a wooping storage of 100gb with 6gb of ram.', 150, '100', '2017-08-13 00:00:00', '2017-08-14 00:00:00', '', '0'),
(46, 1, 'mazda', 'mazda-3s.jpg', 'this is mazda', 170, '150', '2017-08-13 00:00:00', '2017-08-13 00:00:00', '', '0'),
(47, 1, 'honda', 'honda-jazz.jpg', 'this is the best honda', 150, '120', '2017-08-13 00:00:00', '2017-08-13 00:00:00', '', '0'),
(48, 1, 'honda', 'honda-accord.jpg', 'this is the best product of honda in the world', 150, '150', '2017-08-13 00:00:00', '2017-08-13 00:00:00', '', '0'),
(49, 1, 'mazda', 'mazda-3s.jpg', 'mazda rules the world', 170, '150', '2017-08-13 00:00:00', '2017-08-13 00:00:00', '', '0'),
(50, 1, 'honda', 'mazda6.jpg', 'my madza my own', 150, '100', '2017-08-13 00:00:00', '2017-08-13 00:00:00', '', '0'),
(51, 1, 'honda', 'car3.jpg', 'honda the road master', 170, '100', '2017-08-13 00:00:00', '2017-08-13 00:00:00', '', '0'),
(52, 1, 'toyota', 'Toyota-Camry-Hybrid.jpg', 'toyota the withstander', 220, '200', '2017-08-13 00:00:00', '2017-08-14 00:00:00', '', '0'),
(53, 1, 'Ducati', '31feaf58b496d02eb407f7d9af78ce8f.jpg', 'Ducati is the best motorcycle', 210, '200', '2017-08-14 00:00:00', '2017-08-15 00:00:00', '', '0'),
(54, 1, 'Honda', 'car3.jpg', 'Get a honda and enjoy your ride', 120, '100', '2017-09-13 00:00:00', '2017-09-14 00:00:00', '', '0'),
(55, 5, 'hi', 'vlcsnap-2017-03-27-23h00m34s197.png', 'dsa', 0, '8777', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'abi-g', '0'),
(56, 1, 'honda', 'Porsche-911.jpg', 'nice to take for a ride', 0, '100', '2017-10-06 00:00:00', '0000-00-00 00:00:00', 'abi-g', '1'),
(57, 2, 'tecno', 'WP_20170219_14_38_45_Pro.jpg', 'tecno the master of all mobile phones', 0, '130', '2017-10-06 00:00:00', '0000-00-00 00:00:00', 'abi-g', '1'),
(58, 2, 'tecno', 'WP_20160908_001.jpg', 'great phone to use and please yourself', 0, '100', '2017-10-06 00:00:00', '0000-00-00 00:00:00', 'sultana', '1'),
(59, 1, 'mazda', 'toyota-camry-sx.jpg', 'the fastest car in the world. get it an be in your destination within minutes', 200, '150', '2017-10-06 00:00:00', '2017-10-06 00:00:00', '', '1'),
(60, 7, 'Whistlin kettle', '6L-Whistling-Kettle-7672782.jpg', 'a nice ketttle to use at home. No need to check whether the water is boiling as it whistles when the water starts boiling', 0, '140', '2017-10-10 17:13:55', '1970-01-02 00:00:00', 'af', '1'),
(61, 1, 'toyota', 'toyota-camry-6.jpg', 'a very nice car to own', 0, '200', '2017-10-11 13:05:44', '2017-10-12 00:00:00', 'sultana', '1'),
(0, 1, 'toyota', '03_cobra_black_001.jpg', 'great product', 0, '200', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'hookben', '0');

-- --------------------------------------------------------

--
-- Table structure for table `needtopay`
--

CREATE TABLE `needtopay` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `date_added` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`duration`) VALUES
('2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `contct-no` varchar(11) NOT NULL,
  `contct-address` text NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `country` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `gender`, `email`, `username`, `password`, `user_image`, `contct-no`, `contct-address`, `billing_address`, `country`) VALUES
(1, 'Ernest ', 'Paul oganji', 'Male', 'epospiky@gmail.com', 'Epospiky', '', '', '08066676683', 'las vegas', '', 1),
(2, 'elijah', 'elayo', 'Male', 'oyigotu@gmail.com', 'eje', '', 'Ernest Cstmt 20170116_205438.jpg', '', '', '', 0),
(3, 'abigail', 'james', 'Female', 'abi@gmail.com', 'abi-g', '12345', '', '', 'highcourt keffi', '', 0),
(4, 'queen', 'Agina', '', 'qagina@gmail.com', 'sultana', '55555', 'C__Data_Users_DefApps_AppData_INTERNETEXPLORER_Temp_Saved Images_0a58610e-24d0-42aa-8b61-5654934d4b8', '', '', '', 0),
(7, 'a', 'af', '', 'af', 'af', 'af', 'BIGBROSS.JPG', '', '', '', 0),
(0, 'Benjamin', 'hook', '', 'give@gmail.com', 'hookben', '93279e3308bdbbeed946fc965017f67a', '', '', '', '', 0),
(0, 'great', 'me', 'male', 'email@gmail.com', 'mefor', '12345', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Database: `delmo`
--
CREATE DATABASE IF NOT EXISTS `delmo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `delmo`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(NULL, 'delmo', '12345'),
(NULL, 'delmo', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `song` varchar(255) NOT NULL,
  `Artist` text NOT NULL,
  `Album_art` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `Title`, `song`, `Artist`, `Album_art`) VALUES
(6, 'Love Gangstar', '02.mp3', 'Swaggzy', 'cover4.jpg'),
(7, 'Femi', '07.mp3', 'Delmo', 'cover7.jpg'),
(8, 'Change', 'Swaggzy _Change.mp3', 'Delmo', 'cover7.jpg'),
(9, 'na u', 'Swaggzy_Na_U.mp3', 'Swaggzy', 'cover6.jpg'),
(10, 'roman kiss', 'Swaggzy -Roman Kiss.mp3', 'Swaggzy', 'IMG_20160717_091257.jpg'),
(11, 'oluwa', 'Swaggzy _ Oluwa Frestyl.mp3', 'Swaggzy', 'cover5.jpg'),
(12, 'oluwa', 'Oluwa.mp3', 'Swaggzy', 'cover4.jpg'),
(13, 'Love Gangstar', '02.mp3', 'Swaggzy', 'cover4.jpg'),
(14, 'forget the matters', 'Oluwa.mp3', 'Delmo', 'cover6.jpg'),
(15, 'Change', 'IMG_20160717_091257.jpg', 'Swaggzy', 'Swaggzy _Change.mp3'),
(16, 'Love Gangstar', '06.mp3', 'Delmo', 'cover4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;--
-- Database: `hng6`
--
CREATE DATABASE IF NOT EXISTS `hng6` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hng6`;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Lastname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Firstname`, `Lastname`, `Username`, `Email`, `Password`) VALUES
(1, 'Ernest', 'paul', '', 'epospiky@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(2, 'Ernest', 'paul', '', 'epospiky1@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(3, 'Ernest', 'paul', '', 'epospiky2@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(4, 'Ernest', 'paul', '', 'epospiky3@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f'),
(5, 'austine', 'agabi', '', 'jagabi@dik', 'c5fe25896e49ddfe996db7508cf00534'),
(6, 'Ernest', 'paul', '', 'epospiky@gmail', '79b7cdcd14db14e9cb498f1793817d69'),
(7, 'great', 'man', '', 'man@ggd', 'c5fe25896e49ddfe996db7508cf00534'),
(8, 'Ernest', 'paul', '', 'ep@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(9, 'Ernest', 'paul', '', 'eyfskjfkld@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(10, 'hgkljsd', 'hgkjalsdhk', '', 'y@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(11, 'Ernest', 'paul', '', 'ty@gmail.com', 'c5fe25896e49ddfe996db7508cf00534'),
(12, 'Ernest', 'paul', '', 'eppiky@gmail.com', '96e79218965eb72c92a549dd5a330112'),
(13, 'Ernest', 'paul', '', 'epospiy@gmail.com', 'f379eaf3c831b04de153469d1bec345e'),
(14, 'Ernest', 'paul', '', 'epiy@gmail.com', '73882ab1fa529d7273da0db6b49cc4f3'),
(15, 'Ernest', 'paul', '', 'epuospiky@gmail.com', 'f379eaf3c831b04de153469d1bec345e'),
(16, 'Ernest', 'paul', '', 'epuottspiky@gmail.com', 'bcc720f2981d1a68dbd66ffd67560c37'),
(17, 'Ernest', 'paul', '', 'epospgdgiky@gmail.com', '21218cca77804d2ba1922c33e0151105'),
(18, 'Ernest', 'paul', '', 'epos45piky@gmail.com', '96e79218965eb72c92a549dd5a330112'),
(19, 'jake', 'sam', '', 'emal@gmail.com', '5b1b68a9abf4d2cd155c81a9225fd158'),
(20, 'Ernest', 'paul', '', 'epospikcby@gmail.com', 'f63f4fbc9f8c85d409f2f59f2b9e12d5'),
(21, 'Ernest', 'paul', '', 'eposwerewpiky@gmail.com', '96e79218965eb72c92a549dd5a330112'),
(22, 'great', 'paul', '', 'epospiewewky@gmail.com', '9cafeef08db2dd477098a0293e71f90a'),
(23, 'Ernest', 'paul', '', 'epospihjkky@gmail.com', '3abf00fa61bfae2fff9133375e142416');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;--
-- Database: `hng_fun`
--
CREATE DATABASE IF NOT EXISTS `hng_fun` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hng_fun`;

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `question`, `answer`) VALUES
(1, 'i deserve', 'some accolades');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Ernest', 'Paul', 'epospiky@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `hngtask1`
--
CREATE DATABASE IF NOT EXISTS `hngtask1` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hngtask1`;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`id`, `username`, `token`) VALUES
(1, 'epospiky@gmail.com', '32'),
(2, 'epospiky@gmail.com', '3233'),
(3, 'epospiky@gmail.com', '33'),
(4, 'epospiky@gmail.com', '32383032303332'),
(5, 'epospiky@gmail.com', '33373936353639'),
(6, 'epospiky@gmail.com', '31313930303633'),
(7, 'epospiky@gmail.com', '35353739393235'),
(8, 'epospiky@gmail.com', '39323139393730'),
(9, 'epospiky@gmail.com', '32353535363634'),
(10, 'epospiky@gmail.com', '37343538303338'),
(11, 'epospiky@gmail.com', '38343236323038'),
(12, 'epospiky@gmail.com', '33373432343632'),
(13, 'epospiky@gmail.com', '36333738363331');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'acushla', '$2y$10$vzvzzqMyQrZaGAvXG0oeteHG3ZO3Ze3YM32e1Ha4OEmItRKGBOHzC', '2019-09-18 23:17:37'),
(2, 'fatih', '$2y$10$dwpYafEFu672iTigQqIV7.aXrtYA1Ok9Hkrh69AUiLspDa9xxkUZW', '2019-09-18 23:20:05'),
(3, 'smartgig', '$2y$10$4M.E4nhEMUBpUfS.o9lz6uDma6gq7i6fAiGWwu55oLf8A0UUiQ5uu', '2019-09-19 15:53:00'),
(4, 'epospiky@gmail.com', '$2y$10$ZxxQL7UBCo08.zUH2N/swO08xJHSeZP6Y535Kovnbm8urAcwW.sli', '2019-10-05 17:04:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(9) NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(9) NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wrong_logins` int(9) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_role` int(9) NOT NULL DEFAULT '1',
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirm_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `wrong_logins`, `password`, `user_role`, `confirmed`, `confirm_code`) VALUES
(1, 'james', 'bond', 'jb@gmail.com', 0, '11111', 1, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;--
-- Database: `login_course`
--
CREATE DATABASE IF NOT EXISTS `login_course` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `login_course`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) UNSIGNED NOT NULL COMMENT 'User Id',
  `email` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Users email address',
  `password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'User password',
  `reg_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'The time and date the user registered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Users table';
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'database', 'stallions', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["password_reset","user"],"table_structure[]":["password_reset","user"],"table_data[]":["password_reset","user"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(2, 'root', 'database', 'hngtask1', '{"quick_or_custom":"quick","what":"sql","structure_or_data_forced":"0","table_select[]":["password_resets","users"],"table_structure[]":["password_resets","users"],"table_data[]":["password_resets","users"],"output_format":"sendit","filename_template":"@DATABASE@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"structure_and_data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"structure_and_data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","xml_structure_or_data":"data","xml_export_events":"something","xml_export_functions":"something","xml_export_procedures":"something","xml_export_tables":"something","xml_export_triggers":"something","xml_export_views":"something","xml_export_contents":"something","yaml_structure_or_data":"data","":null,"lock_tables":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_create_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}'),
(3, 'root', 'server', 'hngtask1', '{"quick_or_custom":"quick","what":"sql","db_select[]":["auction","delmo","hng6","hng_fun","hngtask1","login","login_course","phpmyadmin","ponzi","rem-dev","request","test","upload"],"output_format":"sendit","filename_template":"@SERVER@","remember_template":"on","charset":"utf-8","compression":"none","maxsize":"","codegen_structure_or_data":"data","codegen_format":"0","csv_separator":",","csv_enclosed":"\\"","csv_escaped":"\\"","csv_terminated":"AUTO","csv_null":"NULL","csv_structure_or_data":"data","excel_null":"NULL","excel_edition":"win","excel_structure_or_data":"data","htmlword_structure_or_data":"structure_and_data","htmlword_null":"NULL","json_structure_or_data":"data","latex_caption":"something","latex_structure_or_data":"structure_and_data","latex_structure_caption":"Structure of table @TABLE@","latex_structure_continued_caption":"Structure of table @TABLE@ (continued)","latex_structure_label":"tab:@TABLE@-structure","latex_relation":"something","latex_comments":"something","latex_mime":"something","latex_columns":"something","latex_data_caption":"Content of table @TABLE@","latex_data_continued_caption":"Content of table @TABLE@ (continued)","latex_data_label":"tab:@TABLE@-data","latex_null":"\\\\textit{NULL}","mediawiki_structure_or_data":"data","mediawiki_caption":"something","mediawiki_headers":"something","ods_null":"NULL","ods_structure_or_data":"data","odt_structure_or_data":"structure_and_data","odt_relation":"something","odt_comments":"something","odt_mime":"something","odt_columns":"something","odt_null":"NULL","pdf_report_title":"","pdf_structure_or_data":"data","phparray_structure_or_data":"data","sql_include_comments":"something","sql_header_comment":"","sql_compatibility":"NONE","sql_structure_or_data":"structure_and_data","sql_create_table":"something","sql_auto_increment":"something","sql_create_view":"something","sql_procedure_function":"something","sql_create_trigger":"something","sql_backquotes":"something","sql_type":"INSERT","sql_insert_syntax":"both","sql_max_query_size":"50000","sql_hex_for_binary":"something","sql_utc_time":"something","texytext_structure_or_data":"structure_and_data","texytext_null":"NULL","yaml_structure_or_data":"data","":null,"as_separate_files":null,"csv_removeCRLF":null,"csv_columns":null,"excel_removeCRLF":null,"excel_columns":null,"htmlword_columns":null,"json_pretty_print":null,"ods_columns":null,"sql_dates":null,"sql_relation":null,"sql_mime":null,"sql_use_transaction":null,"sql_disable_fk":null,"sql_views_as_tables":null,"sql_metadata":null,"sql_drop_database":null,"sql_drop_table":null,"sql_if_not_exists":null,"sql_truncate":null,"sql_delayed":null,"sql_ignore":null,"texytext_columns":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{"db":"hngtask1","table":"users"},{"db":"hngtask1","table":"password_resets"},{"db":"hng6","table":"password_reset"},{"db":"hng6","table":"user"},{"db":"request","table":"my_friends"},{"db":"request","table":"friend_request"},{"db":"request","table":"friendship_system_users_table"},{"db":"rem-dev","table":"developer"},{"db":"rem-dev","table":"client"},{"db":"remdev","table":"developer"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'delmo', 'admin', '{"sorted_col":"`admin`.`id` ASC"}', '2019-01-14 15:14:19'),
('root', 'upload', 'users', '{"CREATE_TIME":"2019-03-15 11:12:18","col_visib":["1","1","1","1","1","1","1"]}', '2019-03-15 18:46:58');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-01-11 12:28:14', '{"collation_connection":"utf8mb4_unicode_ci"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;--
-- Database: `ponzi`
--
CREATE DATABASE IF NOT EXISTS `ponzi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ponzi`;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(30) NOT NULL,
  `author` varchar(80) NOT NULL,
  `postedon` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `sender` varchar(80) NOT NULL,
  `reciever` varchar(80) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `payedon` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merge`
--

CREATE TABLE `merge` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `sender` varchar(80) NOT NULL,
  `reciever` varchar(80) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `xtime` varchar(255) NOT NULL DEFAULT '0',
  `mergeon` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(60) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `title` varchar(150) NOT NULL,
  `fb` varchar(60) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `disc` text NOT NULL,
  `keyword` text NOT NULL,
  `perpage` int(10) NOT NULL DEFAULT '10',
  `automerge` int(10) NOT NULL DEFAULT '0',
  `autopurge` int(10) NOT NULL DEFAULT '0',
  `notification` text NOT NULL,
  `memberallowed` varchar(30) NOT NULL,
  `rules` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `url`, `name`, `email`, `slug`, `phone`, `title`, `fb`, `twitter`, `author`, `disc`, `keyword`, `perpage`, `automerge`, `autopurge`, `notification`, `memberallowed`, `rules`) VALUES
(1, 'http://globalreward.org', 'Springlers', 'support@springlers.com', 'springlers.com', '+234 12876343', ' Springlers A Place to refill your wallet', 'springlersinc', 'springlersinc', 'Springlers Inc', 'Best Ponzi site for member-to-member  donation', 'member-to-member,donation', 5, 0, 0, 'This System marge user Automatically badge-by-badge if your match does not pay you in the next 1 Hour He will be deleted and be Replaced By another . But if User Contact Not Ready Try Switch Him/Her  ,\r\nInstantly  switch your match to another thanks!', '0', 'We d not Allow Hacking or Fake Alert Notification, etc else you get banned! Thats All.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(100) UNSIGNED NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `accname` varchar(100) NOT NULL,
  `accno` varchar(80) NOT NULL,
  `right` int(10) NOT NULL DEFAULT '0',
  `plan` varchar(50) NOT NULL DEFAULT '0',
  `tomerge` int(10) NOT NULL DEFAULT '0',
  `mergesince` varchar(80) NOT NULL,
  `totaltomerge` int(50) NOT NULL DEFAULT '0',
  `switched` int(10) NOT NULL DEFAULT '0',
  `switch` int(10) NOT NULL DEFAULT '0',
  `referral` varchar(80) NOT NULL,
  `refstat` int(10) NOT NULL DEFAULT '0',
  `refbonus` int(100) NOT NULL DEFAULT '0',
  `location` varchar(100) NOT NULL,
  `extra` text NOT NULL,
  `token` varchar(255) NOT NULL,
  `joined` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merge`
--
ALTER TABLE `merge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `user` ADD FULLTEXT KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `merge`
--
ALTER TABLE `merge`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;--
-- Database: `rem-dev`
--
CREATE DATABASE IF NOT EXISTS `rem-dev` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rem-dev`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(10) UNSIGNED NOT NULL,
  `admin_First_Name` varchar(30) NOT NULL,
  `admin_Last_Name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  `date_Of_Account_Creation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_ID` int(10) UNSIGNED NOT NULL,
  `category_Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_ID`, `category_Name`) VALUES
(1, 'Back-end Developer'),
(2, 'Front-end Developer'),
(3, 'Digital Marketer'),
(4, 'Python'),
(5, 'Vue Js'),
(6, 'React');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_ID` int(10) UNSIGNED NOT NULL,
  `client_First_Name` varchar(30) NOT NULL,
  `client_Last_Name` varchar(30) NOT NULL,
  `client_Email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_Number` char(11) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_ID`, `client_First_Name`, `client_Last_Name`, `client_Email`, `password`, `phone_Number`, `location`) VALUES
(1, 'john', 'jacob', 'jjacob@gmail.com', 'c5fe25896e49ddfe996db7508cf005', '', ''),
(2, 'dave', 'alvin', 'alvin@gmail.com', 'c5fe25896e49ddfe996db7508cf005', '', ''),
(3, 'dave', 'man', 'man@gmail.com', '827ccb0eea8a706c4c34a16891f84e', '', ''),
(4, 'great', ' man', 'great@gmail.com', 'c5fe25896e49ddfe996db7508cf005', '', ''),
(5, 'great', ' man', 'great1@gmail.com', 'c5fe25896e49ddfe996db7508cf005', '', ''),
(6, 'great', ' man', 'great2@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `clientdevchat`
--

CREATE TABLE `clientdevchat` (
  `chat_ID` int(10) UNSIGNED NOT NULL,
  `client_ID` int(11) NOT NULL,
  `developer_ID` int(11) NOT NULL,
  `chat_Date` datetime NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `dev_ID` int(10) UNSIGNED NOT NULL,
  `developer_First_Name` varchar(30) NOT NULL,
  `developer_Last_Name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_Name` varchar(30) NOT NULL,
  `password` char(100) NOT NULL,
  `tracks` varchar(200) NOT NULL,
  `developer_Profile` text NOT NULL,
  `proficiency` varchar(30) NOT NULL,
  `average_Rating` varchar(10) NOT NULL,
  `location` varchar(30) NOT NULL,
  `phone_Number` char(11) NOT NULL,
  `github_Url` varchar(150) NOT NULL,
  `img_Url` varchar(200) NOT NULL,
  `category_Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`dev_ID`, `developer_First_Name`, `developer_Last_Name`, `email`, `user_Name`, `password`, `tracks`, `developer_Profile`, `proficiency`, `average_Rating`, `location`, `phone_Number`, `github_Url`, `img_Url`, `category_Name`) VALUES
(1, 'Nnamdi', 'Obiesie', 'nnamdi@gmail.com', 'nado', '51dc30ddc473d43a6011e9ebba6ca7', '', 'I am an analytical thinker with an eye for detail, with ability to thrive in a challenging and busy environment. A team player with excellent interpersonal, verbal and written communication skills', '', '$15/hr', 'Lagos', '0907373733', '', './asset/pic1.jpg', 'Front-end Devel'),
(2, 'Ralp', 'Olie', 'jo@jnsjs', 'ghost', '8ff32489f92f33416694be8fdc2d4c', '', 'Mad ass problem solver solver with an eye for detail, with ability to thrive in a challenging and busy environment. A team player with excellent interpersonal, verbal and written communication skills', '', '$20/hr', 'Port Harcourt', '1122333', '', './asset/pic2.jpg', 'Front-end Devel'),
(3, 'Chinene', 'Joeee', 'chi@gmail.com', 'maraj', '4a0b0dcedd48f780778d1cd1bb8f98', '', 'I am a problem solver with an eye for detail, with ability to thrive in a challenging and busy environment. A team player with excellent interpersonal, verbal and written communication skills', '', '$30/hr', 'Abuja', '09099w3', '', './asset/pic4.jpg', 'Front-end Devel'),
(4, 'Chinene', 'Joeee', 'cgghi@gmail.com', '', '22c276a05aa7c90566ae2175bcc2a9', '', '', '', '0', '', '09099w3', '', './asset/pic1.jpg', 'Front-end Devel'),
(5, 'Sarah', 'Connor', 'co@jsjsjs', '', 'c12e01f2a13ff5587e1e9e4aedb824', '', '', '', '0', '', '22333', '', './asset/pic1.jpg', '0'),
(6, 'John', 'HHHJ', 'klsl@mmsms', '', 'ff1ccf57e98c817df1efcd9fe44a8a', '', '', '', '0', '', '222323', '', './asset/pic1.jpg', '0'),
(7, 'kdfkdkq', 'kdkedk', 'kdksd@kekwe1q', '', '1fdc0f893412ce55f0d2811821b84d', '', '', '', '0', '', '33333', '', './asset/pic1.jpg', '0'),
(8, 'jjsdj', 'KSKSK', 'KSKS!@MWW', '', '3acf83834396fa1c878707132ead62', '', '', '', '0', '', 'KWKW', '', './asset/pic1.jpg', '0'),
(9, 'Show', 'jsjsj', 'jsjs@jsjsj', '', 'eff7d5dba32b4da32d9a67a519434d', '', '', '', '0', '', '2i2i2', '', './asset/pic1.jpg', '0'),
(12, 'nam', 'nam', 'nam@gmail.com', '', '51dc30ddc473d43a6011e9ebba6ca7', '', '', '', '', '', '929292', '', '', ''),
(13, 'nado', 'obi', 'nado@gmail.com', '', 'dd07de8561395a7c37f8fcc1752d45', '', '', '', '', '', '89399w3', '', '', ''),
(14, 'mini', 'mie', 'me@gmail.com', '', 'ab86a1e1ef70dff97959067b723c5c24', '', '', '', '', '', '892929', '', '', ''),
(15, 'ernest', 'paul', 'me@gmail.com', 'epo', '55555', '', '', '', '', '', '', '', '', ''),
(16, 'ernest', 'paul', 'samben@g.com', '', 'c5fe25896e49ddfe996db7508cf00534', '', '', '', '', '', '55555', '', '', ''),
(17, 'ernest', 'paul', 'me1@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'ernest', 'paul', 'me2@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'ernest', 'paul', 'me3@gmail.com', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'ernest', 'paul', 'me4@gmail.com', '', '73882ab1fa529d7273da0db6b49cc4f3', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `devreview`
--

CREATE TABLE `devreview` (
  `dev_Review_ID` int(10) UNSIGNED NOT NULL,
  `admin_ID` int(10) UNSIGNED NOT NULL,
  `developer_ID` int(10) UNSIGNED NOT NULL,
  `status_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `devstatus`
--

CREATE TABLE `devstatus` (
  `status_ID` int(11) NOT NULL,
  `status_Name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `job_ID` int(10) UNSIGNED NOT NULL,
  `job_Title` varchar(30) NOT NULL,
  `description` varchar(300) NOT NULL,
  `start_Date` datetime NOT NULL,
  `end_Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_ID` int(11) NOT NULL,
  `job_ID` int(11) UNSIGNED NOT NULL,
  `client_ID` int(11) UNSIGNED NOT NULL,
  `client_Review` varchar(150) NOT NULL,
  `developer_ID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_ID` int(10) UNSIGNED NOT NULL,
  `skill_Name` varchar(10) NOT NULL,
  `developer_ID` int(11) NOT NULL,
  `category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_ID`, `skill_Name`, `developer_ID`, `category_ID`) VALUES
(1, 'HTML', 1, 0),
(2, 'CSS', 1, 0),
(3, 'JavaScript', 0, 0),
(4, 'Django', 0, 0),
(5, 'VueJs', 0, 0),
(6, 'Python', 0, 0),
(7, 'React', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teammembers`
--

CREATE TABLE `teammembers` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `sheet_no` varchar(50) NOT NULL,
  `image_Url` varchar(250) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `cv_Link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teammembers`
--

INSERT INTO `teammembers` (`member_id`, `name`, `sheet_no`, `image_Url`, `specialization`, `cv_Link`) VALUES
(1, '', '', '', '', ''),
(2, '', '', '', '', ''),
(3, '', '', '', '', ''),
(4, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'github.com'),
(5, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'github.com'),
(6, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'jlk;s'),
(7, '', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'github.com'),
(8, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'github.com'),
(9, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'github.com'),
(10, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', '', 'github.com'),
(11, '', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'UI/UX', 'github.com'),
(12, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Frontend', 'github.com'),
(13, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(14, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(15, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(16, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(17, 'Oganji Ernest Paul', 'okla;sd', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(18, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(19, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Select your track...', 'github.com'),
(20, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Frontend', 'github.com'),
(21, 'ERNEST PAUL', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'UI/UX', 'github.com'),
(22, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Digital Marketing', 'github.com'),
(23, 'ERNEST PAUL', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'select your track', 'github.com'),
(24, 'James Jon', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Backend', 'github.com'),
(25, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Frontend', 'github.com'),
(26, 'Oganji Ernest Paul', 'shn02002', 'https://res.cloudinary.com/epospiky/image/upload/v1566660711/IMG_20190811_132111.jpg', 'Frontend', 'github.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_ID`);

--
-- Indexes for table `clientdevchat`
--
ALTER TABLE `clientdevchat`
  ADD PRIMARY KEY (`chat_ID`);

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`dev_ID`);

--
-- Indexes for table `devreview`
--
ALTER TABLE `devreview`
  ADD PRIMARY KEY (`dev_Review_ID`);

--
-- Indexes for table `devstatus`
--
ALTER TABLE `devstatus`
  ADD PRIMARY KEY (`status_ID`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`job_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_ID`);

--
-- Indexes for table `teammembers`
--
ALTER TABLE `teammembers`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clientdevchat`
--
ALTER TABLE `clientdevchat`
  MODIFY `chat_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `dev_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `devreview`
--
ALTER TABLE `devreview`
  MODIFY `dev_Review_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `devstatus`
--
ALTER TABLE `devstatus`
  MODIFY `status_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `job_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `teammembers`
--
ALTER TABLE `teammembers`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;--
-- Database: `request`
--
CREATE DATABASE IF NOT EXISTS `request` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `request`;

-- --------------------------------------------------------

--
-- Table structure for table `friend_request`
--

CREATE TABLE `friend_request` (
  `id` int(12) NOT NULL,
  `username` varchar(200) NOT NULL,
  `friend` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_request`
--

INSERT INTO `friend_request` (`id`, `username`, `friend`) VALUES
(3, 'delmo', 'Elijahelayo'),
(5, 'jake', 'delmo'),
(6, 'jake', 'Elijahelayo');

-- --------------------------------------------------------

--
-- Table structure for table `friendship_system_users_table`
--

CREATE TABLE `friendship_system_users_table` (
  `id` int(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friendship_system_users_table`
--

INSERT INTO `friendship_system_users_table` (`id`, `fullname`, `username`, `email`, `password`, `date`) VALUES
(1, 'Ernest Paul', 'Epospiky', 'me@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', '07-09-2019'),
(2, 'Ernest James', 'Elijahelayo', 'mfdde@gmail.com', 'ae8b5aa26a3ae31612eec1d1f6ffbce9', '07-09-2019'),
(3, 'Paul James', 'delmo', 'mhgkgje@gmail.com', '22a4d9b04fe95c9893b41e2fde83a427', '07-09-2019'),
(4, 'Go', 'jake', 'me1@gmail.com', 'c5fe25896e49ddfe996db7508cf00534', '15-09-2019');

-- --------------------------------------------------------

--
-- Table structure for table `my_friends`
--

CREATE TABLE `my_friends` (
  `id` int(12) NOT NULL,
  `username` varchar(200) NOT NULL,
  `friend` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_friends`
--

INSERT INTO `my_friends` (`id`, `username`, `friend`) VALUES
(1, 'Epospiky', 'Elijahelayo'),
(2, 'Elijahelayo', 'Epospiky'),
(3, 'Epospiky', 'delmo'),
(4, 'delmo', 'Epospiky'),
(5, 'Epospiky', 'jake'),
(6, 'jake', 'Epospiky');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `friend_request`
--
ALTER TABLE `friend_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friendship_system_users_table`
--
ALTER TABLE `friendship_system_users_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_friends`
--
ALTER TABLE `my_friends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `friend_request`
--
ALTER TABLE `friend_request`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `friendship_system_users_table`
--
ALTER TABLE `friendship_system_users_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `my_friends`
--
ALTER TABLE `my_friends`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `upload`
--
CREATE DATABASE IF NOT EXISTS `upload` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `upload`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Middlename` varchar(255) DEFAULT NULL,
  `Surname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Verification_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Firstname`, `Middlename`, `Surname`, `Username`, `Email`, `Password`, `Verification_code`) VALUES
(1, 'Ernest', 'Paul', 'Oganji', 'epospiky', 'epospiky@gmail.com', '121212', ''),
(2, '', NULL, '', 'was', '', '11111', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
