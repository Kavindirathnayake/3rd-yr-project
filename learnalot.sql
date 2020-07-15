-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 10:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnalot`
--

-- --------------------------------------------------------

--
-- Table structure for table `acceptvehicles`
--

CREATE TABLE `acceptvehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acceptvehicles`
--

INSERT INTO `acceptvehicles` (`id`, `message`, `created_at`, `updated_at`) VALUES
(3, 'dfcgvhbjnk', '2020-05-23 04:36:05', '2020-05-23 04:36:05');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$3fT8WXkbEIv7lk7tx.hgb.ruMZnSi.oykllvyZaIJBhgq16XhxYie', NULL, '2020-05-22 10:56:00', '2020-05-22 10:56:00');

-- --------------------------------------------------------

--
-- Table structure for table `a_s_announses`
--

CREATE TABLE `a_s_announses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_s_announses`
--

INSERT INTO `a_s_announses` (`id`, `message`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Special Notice', '711253898.JPG', '2020-07-04 06:55:15', '2020-07-04 06:55:15'),
(3, 'Annual Day Cellebration 2020', '1460479818.jpg', '2020-07-04 07:07:34', '2020-07-04 07:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `a_t_announses`
--

CREATE TABLE `a_t_announses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `a_t_announses`
--

INSERT INTO `a_t_announses` (`id`, `message`, `image`, `created_at`, `updated_at`) VALUES
(3, 'We have taken the difficult decision to postpone all driving lessons and training with the exception of teaching key workers where necessary.', '1154340224.jpg', '2020-07-05 00:59:19', '2020-07-05 00:59:19');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(10) UNSIGNED NOT NULL,
  `material_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `material_type`, `title`, `description`, `created_at`, `updated_at`, `picture`) VALUES
(35, 'R', 'first chapter', '<p><strong>This is basic road signs for your exam.learn it well</strong></p>\r\n\r\n<p><a href=\"http://www.signs.lk\">www.signs.lk</a>&nbsp;can get further details</p>', '2020-06-30 22:42:14', '2020-06-30 22:42:14', 'Facebook (1)_1593576734.png'),
(36, 'R', 'second chapter', '<p>This is second chapter about road signs</p>', '2020-06-30 23:18:25', '2020-06-30 23:18:25', 'Facebook (2)_1593578904.png'),
(37, 'R', 'third chapter', '<p>this helful for your exam</p>', '2020-06-30 23:24:37', '2020-06-30 23:24:37', 'unnamed_1593579277.png');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_19_142239_create_vehicles_table', 1),
(5, '2020_05_21_171831_create_admins_table', 1),
(6, '2020_05_22_164655_create_reqvehicles_table', 2),
(7, '2020_05_22_182733_create_adminchats_table', 3),
(8, '2020_05_22_195004_create_students_table', 4),
(9, '2020_05_23_093359_create_acceptvehicles_table', 5),
(10, '2020_06_25_165325_create_crud_table', 6),
(11, '2020_06_25_165721_create_cruds_table', 7),
(12, '2020_07_01_102817_create_a_s_announses_table', 8),
(13, '2020_07_01_105821_create_a_t_announses_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reqvehicles`
--

CREATE TABLE `reqvehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pno` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usedyears` bigint(20) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reqvehicles`
--

INSERT INTO `reqvehicles` (`id`, `uname`, `email`, `pno`, `class`, `make`, `number`, `usedyears`, `description`, `price`, `image`, `action`, `created_at`, `updated_at`) VALUES
(5, 'Suraj', 'user@gmail.com', '0712345678', 'Motor Car', 'MG Hector', 'G400C MOTORCYCLE', 15, 'MG Hector comes with many safety features like ESP, TCS, Brake Assist.This comes with a massive dual pane sunroof which helps in bringing the airy feel of the cabin.', 1500000, 'abcd.jpg', NULL, '2020-07-02 12:23:47', '2020-07-02 12:23:47'),
(6, 'Suraj', 'user@gmail.com', '0712345678', 'Motorcycle', 'G400C MOTORCYCLE', 'WPCBA0001', 15, 'Warranty -	2-year / 24,000 Miles , Displacement - 397cc ,Valves - 4 per, Cylinder	Horsepower-	26 HP\r\nTorque -	22 lbft ,	Wheel Size - F/R: 19\" / 18\" , Seat Height - 31\" , Top Speed	80+ mph', 1500000, 'images.jfif', NULL, '2020-07-02 12:30:03', '2020-07-02 12:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `avatar`, `created_at`, `updated_at`) VALUES
(3, 'student', 'student@gmail.com', 'profile.jpg', '2020-05-22 14:06:19', '2020-05-22 14:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(4, 'trainer', 'trainer@gmail.com', '2020-07-05 05:05:21', '2020-05-16 04:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$3fT8WXkbEIv7lk7tx.hgb.ruMZnSi.oykllvyZaIJBhgq16XhxYie', NULL, '2020-05-22 10:56:00', '2020-05-22 10:56:00'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$KHzpRw9tg3Ly3WqicHlCrOU.QmKQhApqPWzPRrlDYuM8/oRGNRM/u', NULL, '2020-05-22 10:59:23', '2020-05-22 10:59:23'),
(3, 'student', 'student@gmail.com', NULL, '$2y$10$IL3Ktk3BMl/XD1QG/kIYIe5eUKKLyhNvifu9YNazgpx6TxwswKrR2', NULL, '2020-05-22 14:06:19', '2020-05-22 14:06:19'),
(4, 'trainer', 'trainer@gmail.com', NULL, '$2y$10$eVyhkwKUxWrgYL1.N2NC5.C2H2tsg6vZzweRrseEs1wtvU.S8Bnye', NULL, '2020-07-01 05:58:29', '2020-07-01 05:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `make` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `class`, `make`, `number`, `color`, `enumber`, `description`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Motor Car', 'MG Hector', 'WJ59FHA', '#a60707', 'O5AE-6015E', 'MG Hector comes with many safety features like ESP, TCS, Brake Assist.This comes with a massive dual pane sunroof which helps in bringing the airy feel of the cabin.', '1892071578.jpg', '2020-07-02 11:49:53', '2020-07-02 11:49:53'),
(10, 'Motorcycle', 'G400C MOTORCYCLE', 'WPCBA0001', '#0e0101', 'O5AE-6015E', 'Warranty -	2-year / 24,000 Miles , Displacement - 397cc ,Valves - 4 per, Cylinder	Horsepower-	26 HP\r\nTorque -	22 lbft ,	Wheel Size - F/R: 19\" / 18\" , Seat Height - 31\" , Top Speed	80+ mph', '1962950730.jfif', '2020-07-02 11:59:01', '2020-07-02 11:59:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acceptvehicles`
--
ALTER TABLE `acceptvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `a_s_announses`
--
ALTER TABLE `a_s_announses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `a_t_announses`
--
ALTER TABLE `a_t_announses`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reqvehicles`
--
ALTER TABLE `reqvehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acceptvehicles`
--
ALTER TABLE `acceptvehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `a_s_announses`
--
ALTER TABLE `a_s_announses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `a_t_announses`
--
ALTER TABLE `a_t_announses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `reqvehicles`
--
ALTER TABLE `reqvehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
