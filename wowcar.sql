-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 08:04 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wowcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('08e83fab8280ea70957df8c39526881e2a64b7a660cef7761ba273b6055a116ff21bc80e7c5ddc60', 5, 3, 'authToken', '[]', 0, '2021-05-09 18:14:34', '2021-05-09 18:14:34', '2022-05-09 11:14:34'),
('2e8a34790140a9355a247dbfa5b6336fe6d223291672e042db05e4e28364eecf188e50e76a5be4f2', 1, 3, 'authToken', '[]', 0, '2021-05-09 15:47:43', '2021-05-09 15:47:43', '2022-05-09 08:47:43'),
('52ccc1a6a299f634f856c4b2905bd4c72e4a7114fc79ecdab6d300d899b451996d414394d7c38e90', 5, 3, 'authToken', '[]', 0, '2021-05-09 18:14:34', '2021-05-09 18:14:34', '2022-05-09 11:14:34'),
('7420b6e609de4871684ec2e0e313b2969749cd0306f3ab4ea1bb89104ae20e4c43946c1dcf3d2010', 1, 3, 'authToken', '[]', 0, '2021-05-09 15:43:07', '2021-05-09 15:43:07', '2022-05-09 08:43:07'),
('ae83ce2b3c7ce58eda49f56997ac86b71253b1d50f44c3725946faf1ba3ecb881b770f7700249e3d', 1, 3, 'authToken', '[]', 0, '2021-05-09 18:01:06', '2021-05-09 18:01:06', '2022-05-09 11:01:06'),
('b10cc85c260a458374f9f0f77f7caa8a2f615105382bf80bb3eba03430003e7255f6b2cbe1cbd0d4', 2, 3, 'authToken', '[]', 0, '2021-05-09 18:09:51', '2021-05-09 18:09:51', '2022-05-09 11:09:51'),
('c9f4cc4fb3e71eca0dda28295ab99ab97134bb4a63cda4e7677e4182c2f4e6c156753cb66b174d8b', 4, 3, 'authToken', '[]', 0, '2021-05-09 18:13:29', '2021-05-09 18:13:29', '2022-05-09 11:13:29'),
('cb6536826608173385973f523e677473cc3ac9d1fd933e8b597014d2059590a80a49c8da18d38a8d', 3, 3, 'authToken', '[]', 0, '2021-05-09 18:12:24', '2021-05-09 18:12:24', '2022-05-09 11:12:24'),
('d3cbace0ee4535c2e715395a1db5869e57a10bff39444eefba81fc2502842961e3d707b85c57a336', 1, 3, 'authToken', '[]', 0, '2021-05-09 15:48:27', '2021-05-09 15:48:27', '2022-05-09 08:48:27'),
('d9780bb529d48ecd70964323e2178aab0044b7bc7d30a2cbe77566a3a269231575f716f39fcf1a51', 1, 3, 'authToken', '[]', 0, '2021-05-09 15:48:10', '2021-05-09 15:48:10', '2022-05-09 08:48:10'),
('db28b10162edc3d8e7cd91de15d44020a07579799e4e475076261a17125e3811af60fd4d623e59d4', 2, 3, 'authToken', '[]', 0, '2021-05-09 18:09:51', '2021-05-09 18:09:51', '2022-05-09 11:09:51'),
('f0027caee8a9b087d97c92510a03b1c5a87379a2c4dbf4d97fa7e2da006b309b71bb88e233d37a54', 4, 3, 'authToken', '[]', 0, '2021-05-09 18:13:30', '2021-05-09 18:13:30', '2022-05-09 11:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'CpqeKvuvxnVKxzeshqFWxb24SHMa5CfH0uREu5mu', NULL, 'http://localhost', 1, 0, 0, '2021-04-27 22:22:43', '2021-04-27 22:22:43'),
(2, NULL, 'Laravel Password Grant Client', 'VSH33nFjTT4I4bavN1Qys3NPSitq92YzVFMaOfwu', 'users', 'http://localhost', 0, 1, 0, '2021-04-27 22:22:43', '2021-04-27 22:22:43'),
(3, NULL, 'Laravel Personal Access Client', 'r1uYC2XxSTevsCJOdxyPizUrigDFGSpC3EgqUkJR', NULL, 'http://localhost', 1, 0, 0, '2021-05-09 14:50:36', '2021-05-09 14:50:36'),
(4, NULL, 'Laravel Password Grant Client', 'uiooce8dPtNOWSGa6NABVxj8cG6mthN5RkeiPohx', 'users', 'http://localhost', 0, 1, 0, '2021-05-09 14:50:36', '2021-05-09 14:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-04-27 22:22:43', '2021-04-27 22:22:43'),
(2, 3, '2021-05-09 14:50:36', '2021-05-09 14:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(111) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `phone`, `vehicle_name`, `email_verified_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Khawar', 'khawar@hwryk.com', '', '324234234', NULL, NULL, 1, NULL, NULL, NULL),
(2, 'Khawar Waraich', 'khawar1@hwryk.com', 'khawar_waraich', '324234234', 'Ciaz', NULL, 1, NULL, '2021-05-09 18:09:49', '2021-05-09 18:09:49'),
(3, 'Khawar Waraich', 'khawarq1@hwryk.com', 'q', '324234234', 'Ciaz', NULL, 1, NULL, '2021-05-09 18:12:24', '2021-05-09 18:12:24'),
(4, 'Khawar Waraich', 'khawarq1s@hwryk.com', 'qs', '324234234', 'Ciaz', NULL, 1, NULL, '2021-05-09 18:13:29', '2021-05-09 18:13:29'),
(5, 'Khawar Waraich', 'khawarsq1s@hwryk.com', 'qss', '324234234', 'Ciaz', NULL, 1, NULL, '2021-05-09 18:14:34', '2021-05-09 18:14:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
