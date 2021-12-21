-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 03:07 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campingstore`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `campingstore` ()  SELECT * FROM categories WHERE cat_id=cid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Camping Tent mh100 - 2 Person', 'tent01', 399.00, 'product-images/tent1.png'),
(2, 'Trekking Freestanding 2-Person', 'trekking01', 399.00, 'product-images/tent2.jpg'),
(3, 'Camping Tent mh100 - 3 Person', 'tent02', 499.00, 'product-images/tent.jpg'),
(4, 'Trekking Sleeping Bag Trek 500 light', 'trekkingbag01', 199.00, 'product-images/bag.jpg'),
(5, 'Trekking Sleeping Bag Trek 500 cosy', 'sleeping01', 299.00, 'product-images/bag1.png'),
(6, 'Trekking Mummy Pairable Sleeping Bag', 'pairable01', 169.00, 'product-images/bag2.jpg'),
(7, 'Wood Stove MH500', 'stove01', 249.00, 'product-images/stove.jpg'),
(8, 'Camping Lantern BL40', 'latern01', 39.00, 'product-images/lantern.jpg'),
(9, 'One Person Hammock - Basic 30', 'hammock01', 59.00, 'product-images/hammock.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`) VALUES
(2, 'faten@gmail.com', 'faten'),
(3, 'kamal@gmail.com', 'hesmes'),
(4, 'haise@gmail.com', 'wow'),
(5, 'afif', 'afif'),
(6, 'abu@gmail.com', 'abu'),
(7, 'ali@gmail.com', 'ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
