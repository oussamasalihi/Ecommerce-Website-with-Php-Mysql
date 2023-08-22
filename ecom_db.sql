-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 19, 2023 at 12:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_db`
--
 
-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(45) NOT NULL,
  `subject` varchar(128) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'oussama', 'salihioussama1@gmail.com', 'Shipping', 'shipping issue'),
(2, 'badr', 'badr@gmail.com', 'issue in shipping', 'i didn\"t recieve my product');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `p_id` int(8) NOT NULL,
  `p_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` int(8) NOT NULL,
  `u_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(8) NOT NULL,
  `u_address` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_contact` varchar(16) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `p_id`, `p_name`, `u_id`, `u_name`, `quantity`, `u_address`, `u_contact`) VALUES
(1, 1, 'YSL Jacket', 1, 'johny', 1, 'California', '34324143243'),
(3, 1, 'YSL Jacket', 2, 'admin', 1, 'Sydney', '6473758362'),
(4, 1, 'YSL Jacket', 3, 'oussama', 1, 'azeazeaezae', 'azeaze'),
(5, 1, 'YSL Jacket', 3, 'oussama', 1, 'dddd', 'sqsqsqs'),
(6, 1, 'YSL Jacket', 3, 'oussama', 1, '121', '12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(32) NOT NULL,
  `detail` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `brand`, `price`, `detail`, `img`) VALUES
(1, 'YSL Jacket', 'YSL', 400, 'Black saint laurant jacket 2020', 'ysl-jacket.jpg'),
(2, 'Crop Trop', 'Talentless', 69, 'For new generation fashionista', 'womenshort.jpg'),
(4, 'Pink Hoodie', 'Pink Talent', 32332, 'asdfsaf', 'pink.jpg'),
(5, 'Black sleeve', 'long sleeve', 213, 'marketma ayp', 'sleeve.png'),
(7, 'Shadow Cloth', 'Shadow ', 3234, 'adsffsa', 'sleeve.png'),
(8, 'Beast Product', 'sdaf', 3234, 'adfaf', 'goldwatch.jpg'),
(9, 'Yellow TSHirt', 'ello', 345, 'This color suits the dirty fellows', 'yellowt.jpg'),
(10, 'Men White T-Shirt with print', 'Adidas', 782, 'smooth and quality clothes', 'tshirt.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'salihi@gmail.Com'),
(2, 'badr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'buyer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `role`) VALUES
(1, 'johny', '$2y$10$v9rF8ZMOtjRw43i3XSwz1ezLLDGtGgg9HewOdwMI/G3wOlj9AqhFm', '2020-04-17 17:42:21', 'buyer'),
(2, 'admin', '$2y$10$xJVDq3HjKeYFd3jqJU6XTuxXtjaK5sVYVtYE4BM4vh.UJpPC9JI6.', '2020-04-19 05:39:04', 'admin'),
(3, 'oussama', '$2y$10$Dt14S1KN3i1uONuvGHdjuuzWZSEQHZQE0t8gJq0VDGAvfyvlPPXAS', '2022-02-24 05:54:51', 'buyer'),
(4, 'badr', '$2y$10$yW1ZRZSh.SrrxCtUoxoF3ue3LpnwoSMZ3NP.NRnOz4YDKwwrc8KCW', '2022-02-25 05:20:18', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_name` (`p_name`),
  ADD KEY `u_name` (`u_name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `p_name` FOREIGN KEY (`p_name`) REFERENCES `products` (`name`),
  ADD CONSTRAINT `prod_id` FOREIGN KEY (`p_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `u_id` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `u_name` FOREIGN KEY (`u_name`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
