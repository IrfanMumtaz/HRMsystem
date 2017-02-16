-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2016 at 03:11 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auth`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_09_30_155643_orders', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `orderID` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `educationLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serviceLevel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topicTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `furtherDetails` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fileAttach` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numberOfPages` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pricePerPage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `totalAmount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orderID`, `email`, `educationLevel`, `serviceLevel`, `topicTitle`, `furtherDetails`, `fileAttach`, `numberOfPages`, `deadline`, `pricePerPage`, `totalAmount`, `created_at`, `updated_at`) VALUES
(1, 15354, 'irfan@pixeldivine.com', 'Degree / Undergrad', 'Platinum', 'testing', 'testing', 'admissionessayscontentframework-RAW.xlsx', '2', '6 Hours', '35.45', '70.9', '2016-09-30 13:28:36', '2016-09-30 13:28:36'),
(2, 15355, 'irfan@pixeldivine.com', 'Ph.D', 'Gold', 'another order', ' asdas as dmaskdm  as as', 'credentials.xlsx', '5', '6 Hours', '34.45', '172.25', '2016-09-30 13:34:05', '2016-09-30 13:34:05'),
(3, 15355, 'irfan@pixeldivine.com', 'Masters/PostGrad', 'Platinum', 'sad asdas', 'sa dasdas', 'admissionessayscontentframework-RAW.xlsx', '2', '6 Hours', '37.45', '74.9', '2016-10-01 09:26:28', '2016-10-01 09:26:28'),
(4, 15355, 'irfan@pixeldivine.com', 'Degree / Undergrad', 'Platinum', 'a dsa das', ' asdasd', 'credentials.xlsx', '6', '6 Hours', '35.45', '212.70000000000002', '2016-10-01 09:27:35', '2016-10-01 09:27:35'),
(5, 15356, 'irfan@pixeldivine.com', 'Degree / Undergrad', 'Platinum', 'as das das', 'as das das', 'MIS.xlsx', '3', '6 Hours', '35.45', '106.35000000000001', '2016-10-01 09:29:01', '2016-10-01 09:29:01'),
(6, 15357, 'irfan@pixeldivine.com', 'Degree / Undergrad', 'Platinum', 'as dasd as', 'dasdsad', 'job.docx', '8', '6 Hours', '35.45', '283.6', '2016-10-01 09:29:50', '2016-10-01 09:29:50'),
(7, 15358, 'irfan@pixeldivine.com', 'Masters/PostGrad', 'Platinum', 'asd asd', 'as dasd', 'leads.txt', '3', '6 Hours', '37.45', '112.35000000000001', '2016-10-01 09:31:32', '2016-10-01 09:31:32'),
(15360, 15359, 'arsalan@pixeldivine.com', 'Ph.D', 'Gold', 'topic', 'details', 'company ppt.pptm', '5', '5 Days', '20.45', '102.25', '2016-10-01 10:10:25', '2016-10-01 10:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profilePic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coverPic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fbLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gpLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inLink` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aim` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `profilePic`, `coverPic`, `fbLink`, `twLink`, `gpLink`, `inLink`, `skype`, `aim`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Irfan Mumtaz', 'irfan@pixeldivine.com', '$2y$10$JA5M1G2bxyEdubGTaNLoo.fLMHEQ5Al7IITuYtpBgDYyrI3/jfhwe', '03333672457', 'profile.png', 'cover.png', 'http://facebook.com', 'http://twitter.com', 'http://plus.google.com', 'http://linkedin.com', 'Skype', 'Aim', 1, 'XHLPhzyAsbtsBoh3MhIclRGg9cAWeJQgmH88gDbVPf3JaUBErLYwOoTE0wNi', '2016-09-30 13:25:02', '2016-10-03 12:09:21'),
(2, 'Arsalan', 'arsalan@pixeldivine.com', '$2y$10$4g2uSC9bySi7KJWBT83P2umgcXAd/sDu5dRKdw/R/wB.YQxQen3Xe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2016-10-01 10:09:46', '2016-10-01 10:09:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15361;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
