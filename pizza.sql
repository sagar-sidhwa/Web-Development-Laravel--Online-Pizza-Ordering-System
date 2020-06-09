-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 04:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `category`, `type`, `size`, `quantity`, `created_at`, `updated_at`) VALUES
(9, 1, 'New York Pizza', 'Veg', 'Large 299/-Rs', 1, '2019-10-08 07:09:04', '2019-10-08 07:09:04'),
(12, 2, 'Neapolitan Pizza', 'Veg', 'Small 99/-Rs', 41, '2019-10-08 07:10:45', '2019-10-08 07:10:45'),
(13, 2, 'Margherita Pizza', 'Veg', 'Small 99/-Rs', 47, '2019-10-08 07:50:21', '2019-10-08 07:50:21'),
(14, 1, 'California Pizza', 'Non-Veg', 'Large 299/-Rs', 3, '2019-10-08 08:17:47', '2019-10-08 08:17:47'),
(15, 1, 'Greek Pizza', 'Non-Veg', 'Medium 199/-Rs', 5, '2019-10-08 08:31:16', '2019-10-08 08:31:16'),
(18, 1, 'Sicilian Pizza', 'Non-Veg', 'Large 299/-Rs', 4, '2019-10-08 08:38:45', '2019-10-08 08:38:45'),
(20, 3, 'New York Pizza', 'Non-Veg', 'Large 299/-Rs', 9, '2019-10-08 08:42:28', '2019-10-08 08:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unusers`
--

CREATE TABLE `unusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unusers`
--

INSERT INTO `unusers` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'zsdgsdv', 'vsdvsdv', '2017.sagar.sidhwa@ves.ac.in', 6516515, 'DVDSFBVDF', '2019-10-08 04:17:40', '2019-10-08 04:17:40'),
(2, 'zsdgsdv', 'vsdvsdv', '2017.sagar.sidhwa@ves.ac.in', 6516515, 'WEGFERG', '2019-10-08 04:18:52', '2019-10-08 04:18:52'),
(3, 'zsdgsdv', 'vsdvsdv', '2017.jayesh.samtani@ves.ac.in', 72742, 'sdvdfsb', '2019-10-08 08:21:40', '2019-10-08 08:21:40');

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
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `address`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sagar Sidhwa', '2017.sagar.sidhwa@ves.ac.in', NULL, '$2y$10$u6P1WKStY9VODPJDiPdud.WbMsLjrASO5bIXWFza4Su0UdRUFrTyO', '8237688658', 'asdjhqfhgpwoeifhopweihfoiwehfoihweoiwqimxecoiempwoecpmoqupowmuv', NULL, '2019-10-07 23:55:53', '2019-10-07 23:55:53'),
(2, 'Kushal Dayani', '2017.kushal.dayani@ves.ac.in', NULL, '$2y$10$Fflby4KKkuQlam.aoUGRfeybzcz680bIIBcfiyJqNOYBbQ1sTPDPa', '9028613156', 'ffffknclwkrn;oihpowergvorehfpowerugheoruvou', NULL, '2019-10-08 00:24:41', '2019-10-08 07:50:01'),
(3, 'DevendraSingh Labana', '2017.devendrasingh.labana@ves.ac.in', NULL, '$2y$10$C.GXWmFswQRHpYeWEvSfkOzBxn6wY5gh4WgPxb5oFxpfJ1WNIcK7u', '7841014145', 'dfnxxxnsgfdzfdjngfjdfngfmscsdoiwehfohodchweouivhwojbckjwb', NULL, '2019-10-08 08:40:00', '2019-10-08 08:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `unusers`
--
ALTER TABLE `unusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `unusers`
--
ALTER TABLE `unusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
