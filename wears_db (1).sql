-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2024 at 11:30 PM
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
-- Database: `wears_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `date`) VALUES
(9, 'Admin', '12345', '2024-08-31 18:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `cloth_size` varchar(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `prod_id` varchar(50) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `main_price` varchar(100) NOT NULL,
  `prod_price` varchar(50) NOT NULL,
  `prod_img` longblob NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `color`, `cloth_size`, `quantity`, `prod_id`, `prod_name`, `main_price`, `prod_price`, `prod_img`, `added_date`) VALUES
(106, 17, 'White', 'XL', '1', '55', 'peerch wears', '2300', '2300', 0x616972666f7263652e6a666966, '2024-08-31 18:05:59'),
(107, 17, 'Black', 'XL', '1', '47', 'Men suit', '25000', '25000', 0x796f6761372e77656270, '2024-08-31 18:06:55'),
(108, 17, 'Red', 'XL', '2', '52', 'Palm slippers', '4700', '9400', 0x64702e77656270, '2024-08-31 18:07:24'),
(119, 13, 'Black', 'XL', '1', '54', 'Male cap', '7250', '7250', 0x6d617263656c6f2e706e67, '2024-09-04 22:45:23'),
(130, 11, 'Black', 'XL', '3', '58', 'Women mini skirt', '11500', '34500', 0x696d67312e706e67, '2024-09-07 21:16:15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `aval_sizes` varchar(50) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_type` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `image1` longblob NOT NULL,
  `image2` longblob NOT NULL,
  `image3` longblob NOT NULL,
  `product_det` varchar(100) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `product_name`, `aval_sizes`, `product_price`, `product_type`, `quantity`, `image1`, `image2`, `image3`, `product_det`, `upload_date`) VALUES
(52, 'Palm slippers', '45 and 46', '4700', 'Footwear', '14', 0x64702e77656270, 0x6470312e6a7067, 0x6470322e6a7067, 'Louis Vuitton Cross Palms', '2024-08-29 10:01:24'),
(53, 'Men sneakers', '45', '6800', 'Footwear', '14', 0x74616c6b696e672e6a666966, 0x74616c6b696e67312e6a666966, 0x74616c6b696e67322e6a666966, '', '2024-08-30 20:55:31'),
(54, 'Male cap', '45 and 46', '7250', 'Top', '29', 0x6d617263656c6f2e706e67, 0x696d67382e706e67, 0x6d62617070652e6a7067, '', '2024-08-30 20:57:31'),
(56, 'Men Versace shorts', '45 and 46', '12000', 'Bottom', '40', 0x706963352e6a706567, 0x706963362e6a706567, 0x706963382e6a706567, '', '2024-08-30 21:00:34'),
(57, 'Female joggers', '2xl', '20300', 'Bottom', '14', 0x67796d362e6a7067, 0x67796d31352e6a7067, 0x67796d31392e6a7067, '', '2024-08-30 21:01:47'),
(58, 'Women mini skirt', '45', '11500', 'Bottom', '40', 0x696d67312e706e67, 0x696d67322e706e67, 0x696d67332e706e67, 'Channel mini skirts and gowns', '2024-09-03 10:14:37'),
(59, 'Fuse Sandals', '45 and 46', '4500', 'Footwear', '14', 0x79616d382e6a7067, 0x79616d392e6a7067, 0x79616d31302e6a7067, 'Big and small size availaible', '2024-09-03 10:16:15'),
(60, 'Backwoods hoodie', '2xl', '6500', 'Top', '29', 0x74616c6b696e67312e6a666966, 0x6772696c6c732e706e67, 0x6a656c6c6f662e706e67, '', '2024-09-03 10:17:27'),
(64, 'Louis Vuitton Jacket', '45', '12400', 'Jacket', '14', 0x61756469636172732e6a666966, 0x6175646963617273332e6a666966, 0x6175646963617273312e6a666966, 'Pablo Jacket', '2024-09-05 18:34:17'),
(65, '', '', '', 'Bags', '', '', '', '', '', '2024-09-06 00:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(100) NOT NULL,
  `my_id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `address` varchar(70) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `image` longblob NOT NULL,
  `order_note` varchar(100) NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `my_id`, `first_name`, `last_name`, `email`, `contact`, `address`, `city`, `state`, `zip_code`, `country`, `pword`, `image`, `order_note`, `upload_date`) VALUES
(4, 17, 'Emmanuel', 'John', 'emmy.neka@gmail.com', '07046837453', '14 Anyaogwu street', 'Port Harcourt', 'rivers state', '76678753', 'Nigeria', 'vvv', 0x62657374332e77656270, 'I need 5 pieces', '2024-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `user_id`, `first_name`, `last_name`, `email`, `pword`, `date`) VALUES
(11, 11, 'Jay ', 'Bright', 'kelechi53@yahoo.com', 'ccc', '2024-08-13 02:12:33'),
(12, 12, 'Jay', 'Sandra', 'kelechi50@yahoo.com', 'aaa', '2024-08-13 12:58:32'),
(13, 13, 'Divine', 'Sandra', 'kelechi5@yahoo.com', '1111', '2024-08-13 16:41:50'),
(14, 14, 'Emmanuel', 'John', 'kelechi22@yahoo.com', 'neka123', '2024-08-20 13:06:50'),
(15, 15, 'Chisom', 'Nwachinemere', 'som344@gmail.com', '12345678', '2024-08-20 13:35:12'),
(16, 16, 'Divine', 'Sandra', 'kelech5@yahoo.com', 'iii', '2024-08-23 13:12:44'),
(17, 17, 'Emmanuel', 'John', 'keleci@yahoo.com', 'zzz', '2024-08-31 18:04:59');

--
-- Triggers `registration`
--
DELIMITER $$
CREATE TRIGGER `set_user_id` BEFORE INSERT ON `registration` FOR EACH ROW SET NEW.user_id = NEW.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `set_user_id_trigger` BEFORE INSERT ON `registration` FOR EACH ROW SET NEW.user_id = NEW.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `id` int(100) NOT NULL,
  `my_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(50) NOT NULL,
  `order_note` varchar(100) NOT NULL,
  `shipping_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `my_id`, `first_name`, `last_name`, `address`, `city`, `postal_code`, `order_note`, `shipping_date`) VALUES
(1, '17', 'Joy', 'Angel', '14 Anyaogwu street', 'Port Harcourt', '100200', 'ship to aba', '2024-09-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
