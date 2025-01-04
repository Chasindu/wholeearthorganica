-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2024 at 10:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kbiibemy_organica`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `seller_id` int(11) NOT NULL,
  `cat` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `image`, `qty`, `seller_id`, `cat`) VALUES
(2, 'Chicken Drumsticks 12 Pack', 12, 'chicken2.png', 50, 2, 'chicken'),
(3, 'Chicken Legs 6 Pack', 6, 'chicken1.png', 97, 1, 'chicken'),
(4, 'New York Style Beef 2 Lbs', 16, 'beef2.jpg', 10, 2, 'beef'),
(5, 'Stake Beef 1 Lbs', 15, 'beef1.png', 100, 2, 'beef'),
(6, 'Brown Eggs 3 Pack', 4, 'egg1.jpeg', 16, 2, 'eggs'),
(7, 'White Eggs 3 Pack', 4, 'egg2.jpg', 25, 2, 'eggs'),
(8, 'Grass-Fed Organic Butter', 10, 'butter1.jpg', 33, 2, 'butter'),
(9, 'Cultured Organic Butter', 12, 'butter2.jpg', 31, 2, 'butter'),
(12, 'Gouda Cheese', 13, 'cheese1.jpg', 13, 1, 'cheese'),
(13, 'Swiss Cheese', 15, 'cheese2.jpg', 24, 2, 'cheese'),
(14, 'Seasonal Fruit Basket', 25, 'fruits1.jpg', 45, 1, 'fruits'),
(15, 'Tropical Fruit Basket', 35, 'fruits2.jpg', 47, 1, 'fruits'),
(16, 'Seasonal Veggie Basket', 15, 'vegetables1.jpg', 53, 1, 'vegitable'),
(17, 'Harvest Delight Basket', 20, 'vegetables2.jpg', 51, 2, 'vegitable'),
(18, 'Plain Yogurt', 6, 'yogurt1.jpg', 29, 2, 'yorgurt'),
(19, 'Greek Yogurt', 8, 'yogurt2.jpg', 62, 1, 'yorgurt'),
(20, 'Whole Milk', 5, 'milk1.png', 15, 1, 'milk'),
(21, 'Skim Milk', 5, 'milk2.jpg', 13, 2, 'milk');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(3) NOT NULL,
  `rand_order_id` int(11) NOT NULL,
  `cus_id` int(3) NOT NULL,
  `item` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'Paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `rand_order_id`, `cus_id`, `item`, `qty`, `date`, `status`) VALUES
(1, 19736, 2, '20', 1, '2024-12-21 08:49:35', 'Paid'),
(2, 39400, 2, '9', 3, '2024-12-21 10:43:09', 'shipped'),
(3, 17142, 1, '2', 3, '2024-12-21 09:39:34', 'Paid'),
(4, 74986, 1, '3', 3, '2024-12-21 09:42:19', 'Paid'),
(5, 20170, 1, '17', 4, '2024-12-21 11:02:37', 'shipped'),
(6, 81, 1, '6', 5, '2024-12-21 09:42:19', 'Paid'),
(7, 5876, 4, '4', 2, '2024-12-21 16:28:38', 'Paid'),
(8, 82096, 4, '21', 2, '2024-12-21 16:30:43', 'shipped'),
(9, 3312, 4, '9', 3, '2024-12-21 16:28:38', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `psw` varchar(50) NOT NULL,
  `auth` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `psw`, `auth`) VALUES
(1, 'Chasindu', '1', 'Toronto', '1', 'u'),
(2, 'Elif', 'seller@email.com', '2', '250', 's'),
(4, 'Chasindu', 'user@live.com', '56 Bowsfield Road', '555', 'u'),
(6, 'Elif', '123@email.com', 'Toronto, Canada', '123', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
