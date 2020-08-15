-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 11:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isp`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user', 'u@gmail.com', NULL, '$2y$10$N5Rikc1eAt1NfLSusXk3k.WgORTIfMAEPQlhXqWcXeGLW3fPW4Xim', NULL, '2020-04-01 22:30:31', '2020-04-01 22:30:31'),
(2, 'Client', 'client@gmail.com', NULL, '$2y$10$mAFGzTwO4ZmBM7E1dr.d0ezPCh1EDydj/N4NXI.JnTyCGg7CoWA7O', NULL, '2020-04-02 22:54:17', '2020-04-02 22:54:17'),
(3, 'cd', 'cd@gmail.com', NULL, '$2y$10$RP4KG3nc96Vi8OkJtYycEunj6CJEf6J2uyNQTDUfNLv8DiMJflsoG', NULL, '2020-04-03 21:45:50', '2020-04-03 21:45:50'),
(4, 'aaaa', 'co@gmail.com', NULL, '$2y$10$m.ERZpVnmaaCnwHOTdNYP.6qjbTszQNyi0nQSVaYPViZDSVlOZHG.', NULL, '2020-04-03 21:49:14', '2020-04-03 21:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_11_085131_create_pakages_table', 1),
(4, '2020_03_11_093707_create_user_clients_table', 1),
(5, '2020_03_11_093721_create_payments_table', 1),
(6, '2020_03_14_075522_create_contacts_table', 1),
(7, '2020_03_16_111424_create_poweradmins_table', 1),
(8, '2020_03_19_042348_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pakages`
--

CREATE TABLE `pakages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pakage_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pakage_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `speed` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pakage_price` int(11) NOT NULL,
  `connection_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pakages`
--

INSERT INTO `pakages` (`id`, `pakage_name`, `pakage_type`, `speed`, `pakage_price`, `connection_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Regular', '2Mbpc', '2024kps', 500, 'PPOE', 1, '2020-04-01 22:37:03', '2020-04-02 22:01:33'),
(2, 'Regular', '4Mbps', '4048kps', 700, 'PPOE', 1, '2020-04-01 22:40:22', '2020-04-01 22:50:18'),
(3, 'Regular', '6Mbps', '6267kps', 1000, 'PPOE', 1, '2020-04-01 22:40:50', '2020-04-01 22:50:21'),
(4, 'Super Pakage', '12Mbps', '12000kbps', 1500, 'PPOE', 1, '2020-04-05 00:03:57', '2020-04-05 00:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `month_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `short_note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paid_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_name`, `month_name`, `price`, `short_note`, `paid_date`, `payment_method`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 500, '5gg', '2020-04-03', 'Cash', 1, '2020-04-01 22:59:49', '2020-04-02 22:01:45'),
(2, '2', '1', 800, 'ff', '2020-04-01', 'Roket', 1, '2020-04-01 23:00:21', '2020-04-02 00:28:15'),
(3, '3', '1', 400, 'ww', '2020-04-03', 'Nagad', 1, '2020-04-01 23:00:46', '2020-04-02 00:28:21'),
(4, '1', '2', 300, 'ww', '2020-04-18', 'Roket', 1, '2020-04-01 23:22:37', '2020-04-02 00:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `poweradmins`
--

CREATE TABLE `poweradmins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_show` varchar(2555) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `poweradmins`
--

INSERT INTO `poweradmins` (`id`, `name`, `email`, `password`, `password_show`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'a@gmail.com', '$2y$10$X63K530RUwpqPV07Ik7/IOdwug2tQjcw81kVafxTVXe5LlQTUvrdK', '', NULL, NULL, '2020-04-01 22:29:17', '2020-04-01 22:29:17'),
(2, 'Super Power', 'super@gmail.com', '$2y$10$CYgQfVl5f6FL9Kq29sM3Ru8J38dFNo1o6kF.btqOZ4oGDJPNCWzTS', 'ssssssss', NULL, NULL, '2020-04-03 21:17:53', '2020-04-03 21:17:53'),
(3, 'ggg', 'gg@gmail.com', '$2y$10$90AyiMAJL2EFJrQ2LMHgl.bKAjJFwcLXj6V5olQlKEToVyYC1mnAu', 'gggggg', NULL, NULL, '2020-04-03 23:40:30', '2020-04-03 23:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$qZ2Z/FMgx.llWrVmPHTHUuWjcee7fXRB.1qUjv4n/15ikEHuIE1ku', NULL, '2020-04-01 22:35:39', '2020-04-01 22:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_clients`
--

CREATE TABLE `user_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pakage_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mitrotik_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `customer_address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_clients`
--

INSERT INTO `user_clients` (`id`, `customer_name`, `pakage_type`, `customer_phone`, `customer_email`, `mitrotik_password`, `user_name`, `customer_address`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ajh', '1', '0198988997777', 'aa@gmail.com', '', 'A12', 'ss sssg', '', 0, '2020-04-01 22:50:04', '2020-04-04 00:39:15'),
(2, 'B2', '2', '01899768565765', 'b@gmail.com', '', 'B21', 'bogora', '', 1, '2020-04-01 22:50:58', NULL),
(3, 'C2', '3', '017087098079', 'c@mail.com', '', 'c23', 'cad bakk', '', 1, '2020-04-01 22:51:45', NULL),
(11, 'Sp', '2', '22211', 's@gmail.com', 'ssssss', '22w', 'sds', '$2y$10$B.uatSRNISUT4l7.PS71b.YUkb5gfXqMCiiojLBgwPMzjw/oKwKpm', 0, '2020-04-04 00:51:45', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clients_email_unique` (`email`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakages`
--
ALTER TABLE `pakages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poweradmins`
--
ALTER TABLE `poweradmins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `poweradmins_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_clients`
--
ALTER TABLE `user_clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pakages`
--
ALTER TABLE `pakages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `poweradmins`
--
ALTER TABLE `poweradmins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_clients`
--
ALTER TABLE `user_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
