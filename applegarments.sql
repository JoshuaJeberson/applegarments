-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 01:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_huq`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_name`, `cat_img`) VALUES
('Checked', 'images/checked.jpg'),
('Plain', 'images/plain.jpg'),
('T-Shirts', 'images/t-shirts.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_name` varchar(200) NOT NULL,
  `cust_cont` varchar(200) NOT NULL,
  `cust_email` varchar(200) NOT NULL,
  `timestamp` varchar(100) DEFAULT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_name`, `cust_cont`, `cust_email`, `timestamp`, `pro_id`) VALUES
('joshuajeberson', '25525', 'joshuha@gmai.com', '2021-07-10 08:53:29', 1),
('joshuajeberson', '25525', 'joshuha@gmai.com', '2021-07-10 08:53:34', 1),
('joshuajeberson', '25525', 'joshuha@gmai.com', '2021-07-10 08:53:37', 1),
('kamal shareek', '9249637463764', 'kamal@gmail.com', '2021-07-10 14:45:10', 2),
('joshua', '3434', '', '2021-07-10 14:45:48', 1),
('kamal shareek', '9249637463764', 'kamal@gmail.com', '2021-07-10 14:50:50', 2),
('nekjhf', '145545', ',snkgs@gbhdjkea.vomc', '2021-07-10 14:51:04', 2),
('MOHAMED KAMAL', '866449922', 'kamal@gmail.com', '2021-07-10 15:31:40', 2),
('joshua', '343784634', 'sbkagd', '2021-07-14 11:26:31', 2),
('stanly raja', '34567678', 'stanlyraja@gmail.com', '2021-07-20 16:29:20', 2),
('algorythms', '9080208688', 'algorythms@gmail.com', '2021-08-04 10:05:10', 2),
('joshua', '7500337129', '', '2021-09-06 15:46:20', 2),
('sandeep', '1234567', 'sdf@gmail.com', '2021-09-06 15:47:15', 2),
('girish  sairam ', '9094448088', '', '2021-09-13 07:06:11', 2),
('narasiman hero', '1234567654321', '', '2021-09-15 09:21:52', 1),
('narasiman', '342355', '', '2021-09-23 07:24:58', 2),
('vijay', '123445', '', NULL, 0),
('ajith', '', '', NULL, 0),
('joshua', '7550337129', '', '2021-11-03 17:01:52', 2);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_cats` varchar(500) NOT NULL,
  `pro_name` varchar(500) NOT NULL,
  `pro_desp` varchar(500) NOT NULL,
  `img1` varchar(500) NOT NULL,
  `img2` varchar(500) NOT NULL,
  `img3` varchar(500) NOT NULL,
  `img4` varchar(500) NOT NULL,
  `img5` varchar(500) NOT NULL,
  `img6` varchar(500) NOT NULL,
  `price1` varchar(300) NOT NULL,
  `price2` int(11) NOT NULL,
  `active` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_cats`, `pro_name`, `pro_desp`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `price1`, `price2`, `active`) VALUES
(1, 'plain', 'shirt', 'Cotton|Plain|Twill|Regular Fit|38-44', 'test.jpeg', 'test2.jpeg', 'test3.jpeg', 'test4.jpeg', 'test5.jpeg', 'test6.jpeg', '100', 200, 'y'),
(2, 'plain|T-shirts', 'tshirt', 'Lenin|Print|Stretch|Slim Fit|40-44', 'pic1.jpeg', 'pic2.jpeg', 'pic3.jpeg', 'pic4.jpeg', 'pic5.jpeg', 'pic6.jpeg', '1000', 2000, 'n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
