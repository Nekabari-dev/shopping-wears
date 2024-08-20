-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2024 at 09:30 PM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `cloth_size` varchar(11) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `prod_price` varchar(50) NOT NULL,
  `prod_img` longblob NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `color`, `cloth_size`, `quantity`, `prod_name`, `prod_price`, `prod_img`, `added_date`) VALUES
(57, 12, 'Black', 'XL', '4', 'women gown', '37300', 0x6d697373696f6e312e77656270, '2024-08-19 11:43:21'),
(58, 12, 'Black', 'L', '3', 'women gown', '4300', 0x636f6465362e6a7067, '2024-08-20 07:18:19'),
(59, 14, 'White', 'L', '5', 'women gown', '4300', 0x636f6465362e6a7067, '2024-08-20 13:31:53'),
(60, 15, 'Red', 'L', '2', 'women gown', '4300', 0x636f6465362e6a7067, '2024-08-20 13:36:38'),
(64, 14, 'White', 'XL', '2', 'women gown', '4300', 0x636f6465362e6a7067, '2024-08-20 19:22:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
