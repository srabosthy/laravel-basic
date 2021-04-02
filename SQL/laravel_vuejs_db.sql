-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 08:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sd_sec_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'category061', 1, 4, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(2, 'category345', 1, 5, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(3, 'category361', 1, 8, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(4, 'category296', 1, 6, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(5, 'category869', 1, 5, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(6, 'category396', 1, 5, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(7, 'category405', 1, 7, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(8, 'category414', 1, 8, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(9, 'category697', 1, 4, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(10, 'category748', 1, 2, '2021-04-01 13:08:54', '2021-04-01 13:08:54');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `gender`, `dob`, `role`, `is_active`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Srabosthy Das Prama', 'srabosthy@gmail.com', 'female', '2020-09-01', 'admin', 1, '12345', '2021-02-06 19:57:30', '2021-02-07 19:15:02'),
(6, 'Mohsin Riad', 'mohsin@gmail.com', 'male', '2021-02-01', 'employee', 1, '12345', '2021-02-06 16:03:29', '2021-02-07 15:36:39'),
(8, 'Joyita das gupta', 'joyita@gmail.com', 'female', '2021-02-06', 'employee', 1, '12345', '2021-02-08 17:26:35', '2021-02-08 17:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `image_models`
--

CREATE TABLE `image_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2021_02_28_141832_create_categories_table', 1),
(43, '2021_02_28_142015_create_products_table', 1),
(44, '2021_02_28_184035_create_students_table', 1),
(45, '2021_03_08_143127_create_image_models_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `price`, `status`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Tea', 'tea is a drinks', 111, 1, 4, '2021-04-01 13:08:54', '2021-04-01 14:22:33'),
(2, 'vegetables', 'good for health', 800, 1, 3, '2021-04-01 13:08:54', '2021-04-01 14:24:24'),
(3, 'Lays', 'chips', 60, 1, 1, '2021-04-01 13:08:54', '2021-04-02 12:35:25'),
(4, 'Pepsi', 'quality drinks', 120, 1, 8, '2021-04-01 13:08:54', '2021-04-02 12:33:24'),
(5, 'product616', 'Assumenda quidem labore placeat et in.', 1228, 1, 6, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(6, 'product649', 'Ut sit recusandae id aut voluptates et.', 1472, 1, 5, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(7, 'product097', 'Laborum modi adipisci laborum nemo vel.', 1348, 1, 10, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(8, 'product077', 'Et assumenda assumenda non.', 1442, 1, 7, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(9, 'product243', 'Maiores odio enim sunt.', 1017, 1, 10, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(10, 'product633', 'Ipsam at ut cumque.', 1156, 1, 10, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(11, 'product336', 'Debitis quae sit vero non voluptatem.', 1099, 1, 7, '2021-04-01 13:08:54', '2021-04-01 13:08:54'),
(12, 'product509', 'Consequuntur velit praesentium et quo.', 1184, 1, 7, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(13, 'product631', 'Occaecati molestiae minus vero vel vel.', 1426, 1, 10, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(14, 'product763', 'Ea aut quod veniam.', 1413, 1, 7, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(15, 'product790', 'Autem et alias et.', 1472, 1, 7, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(16, 'product899', 'Et libero architecto consequatur.', 1472, 1, 1, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(17, 'product356', 'Ex quos dolorem nihil magnam.', 1018, 1, 7, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(18, 'product884', 'Voluptatibus totam sit facere maiores.', 1025, 1, 5, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(19, 'product501', 'Eos doloremque aut facilis quaerat aut.', 1451, 1, 8, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(20, 'product583', 'Quis possimus nihil occaecati et rerum.', 1408, 1, 7, '2021-04-01 13:08:55', '2021-04-01 13:08:55'),
(21, 'pepsi', 'qwertyu', 111, 1, 1, '2021-04-01 13:09:29', '2021-04-01 14:21:23'),
(22, 'Milk', NULL, 1000, 1, 4, '2021-04-01 13:47:52', '2021-04-01 13:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_models`
--
ALTER TABLE `image_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_index` (`category_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `image_models`
--
ALTER TABLE `image_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
