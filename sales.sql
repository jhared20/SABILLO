-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2025 at 02:17 AM
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
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` float NOT NULL,
  `price` float NOT NULL,
  `total` float NOT NULL,
  `payment_mode` varchar(255) DEFAULT NULL,
  `member_type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `customer`, `product`, `quantity`, `price`, `total`, `payment_mode`, `member_type`, `created_at`) VALUES
(1, 'Jun', 'Max', 2, 4, 8, 'Cash', 'Bronze', '2025-12-07 03:57:41'),
(2, 'Jhared', 'Piatos', 5, 20, 100, 'Cash', 'Gold', '2025-12-07 03:58:09'),
(3, 'Rushed', 'Coca-Cola', 2, 90, 180, 'GCash', 'Silver', '2025-12-07 04:02:05'),
(4, 'Jl', 'V-cut', 1, 25, 25, 'Cash', 'Silver', '2025-12-07 04:04:17'),
(5, 'James', 'Piatos', 3, 20, 60, 'Debit Card', 'Gold', '2025-12-07 04:04:27'),
(6, 'Jhared', 'Nips', 10, 10, 100, 'Gcash', 'Gold', '2025-12-07 04:08:48'),
(7, 'Earl', 'Chippy', 1, 23, 23, 'Cash', 'Bronze', '2025-12-07 04:11:45'),
(8, 'Daniel', 'Royal', 5, 90, 450, 'Debit Card', 'Gold', '2025-12-07 04:14:11'),
(9, 'Keiji', 'Piatos', 2, 20, 40, 'Cash', 'Bronze', '2025-12-07 04:14:52'),
(10, 'Jl', 'Martys', 5, 15, 75, 'Debit Card', 'Silver', '2025-12-07 04:16:02'),
(11, 'Xean', 'V-cut', 7, 25, 175, 'GCash', 'Silver', '2025-12-07 12:16:30'),
(12, 'Jhared', 'Chippy', 10, 23, 230, 'Debit Card', 'Gold', '2025-12-07 12:25:29'),
(13, 'Ean', 'Silka', 2, 23, 46, 'GCash', 'Bronze', '2025-12-08 02:02:58'),
(14, 'Jun', 'Clover', 2, 47, 94, 'Cash', 'Bronze', '2025-12-08 02:03:52'),
(15, 'Rushed', 'Oishi', 3, 35, 105, 'GCash', 'Silver', '2025-12-08 02:04:48'),
(16, 'Daniel', 'Mountain Dew', 2, 95, 190, 'Cash', 'Gold', '2025-12-08 02:05:43'),
(17, 'Kae', 'Piatos', 15, 20, 300, 'Debit Card', 'Silver', '2025-12-08 02:06:46'),
(18, 'Earl', 'Cream', 6, 23, 138, 'GCash', 'Bronze', '2025-12-08 02:07:28'),
(19, 'Con', 'V-cut', 8, 25, 200, 'GCash', 'Silver', '2025-12-08 02:08:24'),
(20, 'Shaq', 'Pepsi', 4, 90, 360, 'Debit Card', 'Gold', '2025-12-08 02:09:12'),
(21, 'Jhared', 'Tuna Sisig', 2, 52, 104, 'Cash', 'Gold', '2025-12-08 02:10:05'),
(22, 'James', 'Bread Pan', 9, 30, 270, 'GCash', 'Gold', '2025-12-08 02:11:21'),
(23, 'Eggy', 'Lays', 3, 63, 189, 'Cash', 'Bronze', '2025-12-08 02:14:04'),
(24, 'Keiji', 'Toasted Sandwiches', 5, 75, 375, 'Debit Card', 'Bronze', '2025-12-08 02:15:10'),
(25, 'Jl', 'Clover', 13, 47, 611, 'Cash', 'Silver', '2025-12-08 02:16:52'),
(26, 'Jhared', 'Lays', 3, 63, 189, 'Cash', 'Gold', '2025-12-09 03:00:54'),
(27, 'Jl', 'Piatos', 1, 20, 20, 'GCash', 'Silver', '2025-12-09 03:01:53'),
(28, 'Kae', 'Royal', 1, 90, 90, 'Cash', 'Silver', '2025-12-09 03:02:10'),
(29, 'Jun', 'Chippy', 7, 23, 161, 'GCash', 'Bronze', '2025-12-09 03:05:54'),
(30, 'Rushed', 'Cream', 5, 23, 115, 'Cash', 'Silver', '2025-12-09 03:06:52'),
(31, 'Keiji', 'V-cut', 3, 25, 75, 'Cash', 'Bronze', '2025-12-09 04:45:16'),
(32, 'Reily', 'Lays', 7, 63, 441, 'Cash', 'Silver', '2025-12-09 12:19:49'),
(33, 'Jhared', 'Chippy', 7, 23, 161, 'Cash', 'Gold', '2025-12-09 14:42:03'),
(34, 'Shaq', 'Royal', 5, 90, 450, 'Debit Card', 'Gold', '2025-12-09 14:45:16'),
(35, 'Earl', 'Sprite', 4, 90, 360, 'Cash', 'Bronze', '2025-12-09 14:46:05'),
(36, 'Con', 'Nips', 2, 10, 20, 'Cash', 'Silver', '2025-12-09 15:11:58'),
(37, 'Xean', 'Cream', 3, 23, 69, 'Gcash', 'Silver', '2025-12-09 15:14:16'),
(38, 'Jl', 'Max', 3, 4, 12, 'Cash', 'Silver', '2025-12-10 01:14:23'),
(39, 'Kae', 'Mountain Dew', 2, 90, 180, 'Cash', 'Silver', '2025-12-10 01:14:25'),
(40, 'Jun', 'Toasted Sandwiches', 3, 75, 225, 'Gcash', 'Bronze', '2025-12-10 01:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
