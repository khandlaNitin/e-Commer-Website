-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 10:52 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommer`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(55) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'Pendding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_data`
--

CREATE TABLE `order_data` (
  `id` int(11) NOT NULL,
  `user_id` int(55) NOT NULL,
  `product_id` int(55) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pincode` int(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `address` text NOT NULL,
  `mono` int(55) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'Pendding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_data`
--

INSERT INTO `order_data` (`id`, `user_id`, `product_id`, `product_name`, `product_price`, `product_image`, `name`, `gender`, `email`, `pincode`, `city`, `address`, `mono`, `status`) VALUES
(1, 2, 1, 'laptop', '85000', 'laptop.jpg', 'test', 'Male', 'test@gmail.com', 380012, 'Bombay', 'sadsadsad', 2147483647, 'Pendding'),
(2, 2, 3, 'Watch', '1599', 'watch.jpg', 'test', 'Male', 'test@gmail.com', 380012, 'Bombay', 'sadsadsad', 2147483647, 'Pendding'),
(3, 2, 4, 'Camera', '25000', 'canon.png', 'test', 'Male', 'test@gmail.com', 380012, 'Bombay', 'sadsadsad', 2147483647, 'Pendding'),
(4, 1, 4, 'Camera', '25000', 'canon.png', 'test-demo', 'Male', 't@gmail.com', 380123, 'Ahmebadab', 'qwewqeqwewqe', 1298567898, 'Pendding');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_sku` varchar(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_sku`, `product_desc`, `product_image`, `product_cat`, `status`) VALUES
(1, 'laptop', '85000', 'LPT-E51', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'laptop.jpg', '1', 'Active'),
(2, 'Mobile', '15999', 'MOB_i-14', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'iphone.jpeg', '2', 'Active'),
(3, 'Watch', '1599', 'WTC-E-12', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'watch.jpg', '3', 'Active'),
(4, 'Camera', '25000', 'CAM-d123', 'Test', 'canon.png', '3', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `cat_name`) VALUES
(1, 'Laptop'),
(2, 'Mobile'),
(3, 'Smart Watch');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `city` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `profile_image` text NOT NULL,
  `type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `city`, `gender`, `hobby`, `address`, `profile_image`, `type`) VALUES
(1, 'test', 'demo', 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Ahmebadab', 'Male', 'Sports,Reading', 'adasds', 'user5.jpg', 'User'),
(2, 'nitin', 'dalwadi', 'n@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Surat', 'Male', 'Sports,Music', 'wqeqwe', 'user1.jpg', 'User'),
(3, 'admin', 'work', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Amreli', 'Male', 'Sports,Music,Reading', 'xzczxc', 'user4.jpg', 'Admin'),
(4, 'mohit', 'wc', 'm@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Ahmebadab', 'Male', 'Sports,Reading', 'web creta ,ahmedabad', 'user1.jpg', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_data`
--
ALTER TABLE `order_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_data`
--
ALTER TABLE `order_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
