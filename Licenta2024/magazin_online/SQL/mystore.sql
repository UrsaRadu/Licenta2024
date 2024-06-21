-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 09:17 PM
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
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tabel`
--

CREATE TABLE `admin_tabel` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_image` varchar(255) NOT NULL,
  `role` varchar(50) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tabel`
--

INSERT INTO `admin_tabel` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_image`, `role`) VALUES
(1, 'Radu', 'radu01@gmail.com', '$2y$10$jVXk/v6STEQJx3VE.AHblut6EwjF.Cz4P8btPTVIppscvU4g.1ss6', '', 'user'),
(4, 'radudan', 'radudan01@gmail.com', '$2y$10$1BaNat43ZgCr4/ZVImodsukwYbQkn7kEq6ho/nJWu/EgjAKZJisXa', '', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(7, 'Stupina Ursului'),
(10, 'Stupina din Padure'),
(11, 'Lactate Naturale'),
(12, 'Lactate Bio'),
(13, 'Fructe Bio'),
(14, 'Legume Naturale');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(14, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(5, 'Legume si Fructe'),
(6, 'Produse Apicole'),
(7, 'Produse Lactate');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `order_status`) VALUES
(3, 1, 1138418806, 5, 1, 'pending'),
(4, 1, 850494002, 5, 1, 'pending'),
(5, 2, 271552062, 6, 1, 'pending'),
(6, 2, 683388000, 3, 3, 'pending'),
(7, 2, 1839369639, 6, 4, 'pending'),
(8, 2, 1824937492, 2, 6, 'pending'),
(9, 3, 239499579, 15, 1, 'pending'),
(10, 3, 244421810, 4, 44, 'pending'),
(11, 3, 2092511803, 10, 1, 'pending'),
(12, 3, 361623618, 11, 3, 'pending'),
(13, 3, 269970874, 17, 6, 'pending'),
(14, 3, 124186343, 17, 3, 'pending'),
(15, 3, 850314286, 16, 1, 'pending'),
(16, 3, 1993406854, 16, 5, 'pending'),
(17, 3, 1039825990, 17, 5, 'pending'),
(18, 3, 711281036, 17, 1, 'pending'),
(19, 3, 752091292, 13, 1, 'pending'),
(20, 3, 619390645, 20, 1, 'pending'),
(21, 3, 1747518920, 23, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `product_price`, `date`, `status`) VALUES
(12, 'Miere de Albine', 'Miere Naturala', 'miere, naturala', 6, 10, 'miere3.jpg', '', '', '14', '2024-06-18 16:41:30', 'true'),
(13, 'Fagure de Miere', 'Faguri de Miere de Munte', 'faguri, munte', 6, 7, 'fagure1.jpg', '', '', '21', '2024-06-18 16:42:20', 'true'),
(14, 'Faguri de Miere', 'Faguri de Miere Naturali', 'faguri, naturali', 6, 10, 'fagure2.jpg', '', '', '23', '2024-06-18 20:02:36', 'true'),
(15, 'Polen de Albine', 'Polen de Munte', 'polen, munte', 6, 7, 'polen1.jpg', '', '', '30', '2024-06-18 16:43:48', 'true'),
(16, 'Polen de Albine', 'Polen de Albine - Naturala', 'polen, natural', 6, 10, 'polen2.jpg', '', '', '33', '2024-06-18 16:44:33', 'true'),
(17, 'Miere de Albine', 'Miere de Munte', 'miere, munte', 6, 7, 'miere1.jpg', '', '', '15', '2024-06-18 19:59:59', 'true'),
(18, 'Gutui', 'Gutui Natural', 'gutui natural', 5, 13, 'gutui.jpg', '', '', '15', '2024-06-21 16:13:47', 'true'),
(19, 'Nuci', 'Nuci naturale', 'nuci naturale', 5, 13, 'nuci.jpg', '', '', '23', '2024-06-21 16:48:41', 'true'),
(20, 'Rosii', 'Rosii de Tara', 'rosii tara', 5, 14, 'rosii.jpg', '', '', '9', '2024-06-21 16:15:44', 'true'),
(21, 'Usturoi', 'Usturoi de Tara', 'usturoi tara', 5, 14, 'usturoi.jpeg', '', '', '12', '2024-06-21 16:16:18', 'true'),
(22, 'Lapte', 'Lapte de Tara', 'lapte tara', 7, 11, 'lapt2.jpg', '', '', '9', '2024-06-21 16:16:56', 'true'),
(23, 'Cas', 'Cas de Oaie', 'cas oaie', 7, 11, 'cas1.jpg', '', '', '12', '2024-06-21 16:17:37', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `user_id`, `username`, `message`, `ip_address`, `timestamp`) VALUES
(13, 0, '', 'ceau', '::1', '2024-06-19 08:00:59'),
(14, 0, '', 'ceau\r\n', '::1', '2024-06-19 08:11:36'),
(27, 3, '', 'Ceau', '::1', '2024-06-19 13:35:13'),
(28, 3, '', 'Ceau', '::1', '2024-06-19 13:35:25'),
(30, 3, '', 'ceau buna', '::1', '2024-06-19 17:45:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` int(255) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `order_status`) VALUES
(2, 1, 400, 850494002, 2, '2024-06-07 20:14:00', 'pending'),
(3, 2, 350, 271552062, 1, '2024-06-08 07:49:50', 'Complete'),
(4, 2, 450, 683388000, 1, '2024-06-10 10:22:39', 'pending'),
(5, 2, 1400, 1839369639, 1, '2024-06-10 10:33:28', 'Complete'),
(6, 2, 1200, 1824937492, 1, '2024-06-10 10:31:26', 'pending'),
(7, 3, 10, 239499579, 1, '2024-06-13 20:22:09', 'pending'),
(8, 3, 968, 244421810, 2, '2024-06-19 10:33:31', 'Complete'),
(9, 3, 38, 2092511803, 3, '2024-06-19 10:33:39', 'Complete'),
(10, 3, 0, 361623618, 1, '2024-06-19 11:02:58', 'Complete'),
(11, 3, 174, 269970874, 2, '2024-06-19 05:42:19', 'pending'),
(12, 3, 45, 124186343, 1, '2024-06-19 08:44:50', 'pending'),
(14, 3, 86, 850314286, 3, '2024-06-19 13:29:12', 'Complete'),
(15, 3, 165, 1993406854, 1, '2024-06-19 16:55:27', 'Complete'),
(16, 3, 75, 1039825990, 1, '2024-06-19 17:46:21', 'Complete'),
(17, 3, 45, 711281036, 2, '2024-06-20 18:24:07', 'pending'),
(18, 3, 21, 752091292, 1, '2024-06-20 18:25:30', 'pending'),
(19, 3, 30, 619390645, 2, '2024-06-21 17:23:07', 'pending'),
(20, 3, 21, 1747518920, 2, '2024-06-21 19:09:17', 'Complet');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_mode` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `invoice_number`, `amount`, `payment_mode`, `date`) VALUES
(2, 1, 1138418806, 300, 'Netbanking', '2024-06-07 23:21:42'),
(3, 3, 271552062, 350, 'Paypal', '2024-06-08 07:49:50'),
(4, 5, 1839369639, 1400, 'Paypal', '2024-06-10 10:33:28'),
(5, 8, 244421810, 968, 'Select Payment Mode', '2024-06-19 10:33:31'),
(6, 9, 2092511803, 38, 'Paypal', '2024-06-19 10:33:39'),
(7, 10, 361623618, 50, 'Paypal', '2024-06-19 11:02:58'),
(8, 14, 850314286, 86, 'Transfer Bancar', '2024-06-19 13:29:12'),
(9, 15, 1993406854, 165, 'Transfer Bancar', '2024-06-19 16:55:27'),
(10, 16, 1039825990, 75, 'Cash la Livrare', '2024-06-19 17:46:21'),
(11, 20, 1747518920, 21, 'Cash la Livrare', '2024-06-21 19:09:17');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(3, 'Radu', 'radu01@gmail.com', '$2y$10$vbLzLjMw9DmjqWqXAQamru1xQ925j95ZXVXTwF2GQqOZsqTb8aH4.', 'logo5.png', '::1', 'Arad', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tabel`
--
ALTER TABLE `admin_tabel`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tabel`
--
ALTER TABLE `admin_tabel`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
