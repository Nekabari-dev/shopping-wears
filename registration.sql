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
(15, 15, 'Chisom', 'Nwachinemere', 'som344@gmail.com', '12345678', '2024-08-20 13:35:12');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
