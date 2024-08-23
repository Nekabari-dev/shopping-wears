-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2024 at 12:47 PM
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
(27, 'women gown', 'XXL, 2XL,  3XL', '4300', 'Women Collcetion', '15', 0x636f6465362e6a7067, 0x636f6465312e6a706567, 0x636f706965642e77656270, 'yeh yeh yeh eyhe', '2024-08-20 06:21:16'),
(28, 'women gown', 'L, XL', '41500', 'Women Collcetion', '9', 0x70696331322e6a706567, 0x70696331342e6a706567, 0x70696331362e6a706567, 'versace laced short gowns', '2024-08-22 06:30:02'),
(29, 'Men top', 'L, XL, XXL, 3XL', '6200', 'Men Collection', '15', 0x67796d31332e6a7067, 0x67796d31302e77656270, 0x67796d31382e6a7067, 'Men\'s up and down combo', '2024-08-22 06:38:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
