-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2019 at 07:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miynnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `staff_id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` int(11) NOT NULL DEFAULT 0,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `slug`, `category_id`, `service_id`, `staff_id`, `client_id`, `service_name`, `staff_name`, `first_name`, `last_name`, `phone`, `email`, `subject`, `requested_date`, `confirmed`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '367d1258d77f75fd6d313b53945c0e74', 6, 5, 5, 7, 'Initial Advice Session 3', 'Test', 'asdf', 'asdf', '+8801305105764', 'ranamia.bd2019@gmail.com', 'df', 'a:2:{s:10:\"08/10/2019\";a:1:{i:0;s:8:\"02:00 PM\";}s:10:\"08/17/2019\";a:2:{i:0;s:8:\"03:00 PM\";i:1;s:8:\"02:00 PM\";}}', 0, '0', '2019-08-05 04:15:20', '2019-08-05 04:15:20', NULL),
(2, '1c5a3efd9ebd1aa31ab1fefb8ade2e2b', 5, 4, 4, 7, 'Initial Advice Session 2', 'User', 'asdf', 'asdf', '+8801305105764', 'ranamia.bd2019@gmail.com', 'asdf', 'a:3:{s:10:\"08/10/2019\";a:1:{i:0;s:8:\"09:20 AM\";}s:10:\"08/17/2019\";a:1:{i:0;s:8:\"10:20 AM\";}s:10:\"08/24/2019\";a:1:{i:0;s:8:\"11:20 AM\";}}', 0, '0', '2019-08-05 04:17:50', '2019-08-05 04:17:50', NULL),
(3, 'cf03d45f66300493356990c2e7c5c04b', 1, 3, 2, 7, 'Initial Advice Session', 'Business_Admin', 'wewe', 'wee', '+8801305105764', 'ranamia.bd2019@gmail.com', 'we', 'a:1:{s:10:\"08/17/2019\";a:3:{i:0;s:8:\"02:30 PM\";i:1;s:8:\"04:00 PM\";i:2;s:8:\"11:30 AM\";}}', 0, '0', '2019-08-05 04:34:16', '2019-08-05 04:34:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `industry_id` int(10) UNSIGNED NOT NULL,
  `profession_id` int(10) UNSIGNED NOT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `slug`, `user_id`, `industry_id`, `profession_id`, `secret_key`, `name`, `short_description`, `logo`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'a30d63e93939c8c7737765f444422729', 2, 1, 1, '1234567', 'AYLWARD GAME SOLICITORS', 'FREE 20 MINUTES CONSULTATION', NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, 'c2f20301d72147a9f291d041935a7d49', 4, 1, 1, '1234568', 'AYLWARD GAME SOLICITORS 2', 'FREE 20 MINUTES CONSULTATION 2', NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, 'ca037db02e7749c49958d02f3a360e70', 5, 1, 1, '15649784625d47ad1e5ee8a', 'AYLWARD GAME SOLICITORS 3', 'FREE 20 MINUTES CONSULTATION 3', NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `calendar_settings`
--

CREATE TABLE `calendar_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `business_id` int(10) UNSIGNED DEFAULT NULL,
  `week_start` int(11) DEFAULT NULL,
  `weekly_off` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `increment_hour` int(11) DEFAULT NULL,
  `increment_minute` int(11) DEFAULT NULL,
  `timezone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_hour_start` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_hour_end` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendar_settings`
--

INSERT INTO `calendar_settings` (`id`, `slug`, `user_id`, `business_id`, `week_start`, `weekly_off`, `increment_hour`, `increment_minute`, `timezone`, `business_hour_start`, `business_hour_end`, `local_time`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'sdfg5r', 2, 1, 6, 's:14:\"a:1:{i:0;i:0;}\";', 0, 30, 'Asia/Dhaka', '08:00 AM', '4:30 PM', '1', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, '5c075dd0c57ad', 2, 1, 6, 's:14:\"a:1:{i:0;i:0;}\";', 1, 30, 'Asia/Dhaka', '08:30 AM', '4:30 PM', '1', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, '03f423f9d0e97132c5defff4db825956', 4, 2, 6, 's:14:\"a:1:{i:0;i:0;}\";', 0, 20, 'Asia/Dhaka', '08:00 AM', '5:00 PM', '1', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(4, 'a1b0b0a671df2ffbd50592164da639e2', 5, 3, 5, 's:13:\"a:1:{i:;i:2;}\";', 1, 0, 'Asia/Dhaka', '10:00 AM', '03:00 PM', '1', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` int(10) UNSIGNED DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expired_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `slug`, `name`, `business_id`, `start_date`, `expired_date`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'e2b126ba819674bedb3d773f1fb00b67', 'Premium Services', 1, NULL, NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, '1ff977d7ee3dbb6cdf3f3260a1176b3a', 'Brisbane Family Lawyers', 1, NULL, NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, '3cdb962cc9dcba9f27744ac15981da99', 'Super Services', 1, NULL, NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(4, 'b9501c1d6a45f8666157dc2d7cd01efa', 'Fee 15 Days', 1, NULL, NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(5, 'a9ef8dbba203cf635023361ba5ae2b5c', 'Fee 15 Days', 2, NULL, NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(6, '5d17e6f9de0f9661417cffa64da09e0e', 'Premium Services', 3, NULL, NULL, '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_phone` int(11) DEFAULT NULL,
  `display_address` int(11) DEFAULT NULL,
  `display_website_url` int(11) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `slug`, `user_id`, `phone`, `address`, `website_url`, `display_phone`, `display_address`, `display_website_url`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'b890350e799823f6588189c6330f5cb7', 2, '+8801305105764', 'Bogura', 'https://test.miyn.net', NULL, NULL, NULL, NULL, '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, 'cf73b624305cd8b1623a82698b4bedd2', 4, '+8801305105764', 'Bogura 2', 'https://test.miyn.net', NULL, NULL, NULL, NULL, '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, 'c20927d0e718e185d2e5a71e2237ff64', 5, '+8801305105764', 'Bogura 3', 'https://test.miyn.net', NULL, NULL, NULL, NULL, '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `slug`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '922014844981a85ecd733307874cd31e', 'Web & Marketing', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, 'c58bbf4f9adeb00beb4178ceecd3f837', 'Financial & Legal', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, 'b878b9bc8bca1e510e179fcf2c9ad77b', 'Healthcare', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(10) UNSIGNED DEFAULT NULL,
  `recipient_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `recipient_id`, `role_id`, `body`, `attachment`, `read_at`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 5, 4, 'asdf', NULL, NULL, 0, '2019-08-05 04:15:20', '2019-08-05 04:15:20', NULL),
(2, 7, 4, 4, 'asdf', NULL, NULL, 0, '2019-08-05 04:17:50', '2019-08-05 04:17:50', NULL),
(3, 7, 2, 4, 'wewe', NULL, NULL, 0, '2019-08-05 04:34:16', '2019-08-05 04:34:16', NULL);

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
(659, '2019_08_03_105911_create_messages_table', 1),
(736, '2014_10_12_000000_create_users_table', 2),
(737, '2014_10_12_100000_create_password_resets_table', 2),
(738, '2019_05_16_065845_create_roles_table', 2),
(739, '2019_05_17_054028_create_industries_table', 2),
(740, '2019_05_17_054124_create_professions_table', 2),
(741, '2019_07_31_155756_create_businesses_table', 2),
(742, '2019_07_31_155814_create_categories_table', 2),
(743, '2019_07_31_161647_create_services_table', 2),
(744, '2019_08_01_084905_create_calendar_settings_table', 2),
(745, '2019_08_01_094639_create_contact_infos_table', 2),
(746, '2019_08_01_102047_create_website_widgets_table', 2),
(747, '2019_08_03_120739_create_messages_table', 2),
(748, '2019_08_03_155819_create_bookings_table', 2);

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
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `slug`, `industry_id`, `name`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'c269eb471338d382390e52742ed83a06', 1, 'Web Development', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, '9bdb82b16a21b73c6b98e3227259d8c2', 1, 'Web Design', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, 'bc066ce72bbbe3bc7c55db340a13a29d', 1, 'Marketing & Social Media', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(4, '496bd2ceef68a54696260c58b85ebfe2', 1, 'Advertising', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(5, 'c0f81437508459f77fc64562de80fa0e', 1, 'Consulting', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(6, 'db728fdfa730327c23cbb0de30972f33', 1, 'Web Hosting', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(7, '14a15ea91f266f080f4e32cf7b1ea7a6', 1, 'Consumer Servie / Support', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(8, '10a6839613b63920c0794db9ff4b1fda', 1, 'IT Services', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(9, '0609fac48b28160dee381ebf2fa119ca', 1, 'Other', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(10, '86ce15f6620c4ac5b733048b0c93df19', 2, 'Accounting', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(11, 'e720045e447f2e58ee6e477eda79a5d4', 2, 'Tax Services', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(12, '4b152baaa035cd138eba09e3180274cb', 2, 'Law Firm', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(13, 'b60e08eded4431a4cfec7cde0c3993ad', 2, 'Legal Services', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(14, 'b7bf2d182750a2cf486b42bd8482ca3d', 2, 'Financial Advisor', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(15, '16cc4d24beac74c03fc398a865b65bdc', 2, 'Investment Manager', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(16, '5086fca93363c9dd4d02f3a03762055d', 2, 'Mortgage Broker', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(17, '2fa0447819617cf52e836f1b9cb7a3c4', 2, 'Insurance', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(18, '28fca216a3fd691018a7a6d088412700', 2, 'Other', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(19, '857b47cd8d12b28c35ed81d0eac7488f', 3, 'Doctor', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(20, '976fa7c21370958a1f7d22fa8d93f13b', 3, 'Medical Center', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(21, '37514e055bd8b9cfd1dc62768d43caf6', 3, 'Dentist', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(22, '3aa4605c79771b9d9c9e4d41800e8795', 3, 'Veterinarian', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(23, '3e58d8b6d32eea24b57bd3ede68ba31e', 3, 'Optometrist', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(24, 'f801bf257e901d676a5ffaf85fa69b9a', 3, 'Nutritionist', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(25, '29adaebc6fd90d1f08e7c103016e9400', 3, 'Chiropractor', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(26, 'aa754b08b63b7347a658cdea8c710dca', 3, 'Therapist', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(27, 'edb34713cdc1d7fed703da8538f28f54', 3, 'Surgeon', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(28, '73a6b5fe72c447cff07c8bdededc2ece', 3, 'Naturopathic', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(29, 'd141475cde5e787cb551a974395a1653', 3, 'Reflexology', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(30, 'fb78e969da47e0bf962c53a590bd78f5', 3, 'Counseling & Mental Health', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(31, 'a046f084a73cad1c4c8a252bd63ce39b', 3, 'Alternative Medicine', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(32, 'f34a6004bbd3915c9718d1704ffbbc3e', 3, 'Other', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `role`, `permission`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'afd6d6d46d8e3e1e248628cd8143a343', 'Root User', 'root', '0', NULL, NULL, NULL),
(2, '6d1f31187fd436d7b7fe94c345aa379c', 'Business Admin', 'business_admin', '0', NULL, NULL, NULL),
(3, 'c4c6482a0fe8d47771fc58b39194420d', 'staff', 'staff', '0', NULL, NULL, NULL),
(4, 'b2c48b05fb0c3c4f6bf55a0a6c4e8a3c', 'user', 'user', '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `calendar_setting_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration_hours` int(11) DEFAULT NULL,
  `duration_minutes` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slug`, `user_id`, `business_id`, `category_id`, `calendar_setting_id`, `name`, `fee`, `description`, `duration_hours`, `duration_minutes`, `image`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '15945e29bafbbab9f2bb05f937f39f1c', 2, 1, 1, 1, 'In-office Appointment (20 Mins FREE)', 'Free', 'Pop in and meet with a qualified lawyer for free to gain an understanding of your situation and options available to move forward.', 0, 20, 'http://127.0.0.1:8000/images/In-office-appointment.png', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, 'c4584368e35feca0e35662fe86d62034', 2, 1, 1, 1, 'Telephone Appointment (20mins FREE)', 'Free', 'Speak with a knowledgeable lawyer over the phone for free and gain an understanding of your situation and options to move forward.', 0, 20, 'http://127.0.0.1:8000/images/Telephone-appionments.png', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, 'd8dbf0566ae7ec2c35f0aa8a64193b5b', 2, 1, 1, 2, 'Initial Advice Session', '$440 AUD', 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution.', 1, 30, 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(4, '0f41097a6e49990834f476f24007b884', 4, 2, 5, 3, 'Initial Advice Session 2', '$500 AUD', 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution 2.', 0, 20, 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(5, 'f787ba47e0e99aab0a73cbf52bb49acf', 5, 3, 6, 4, 'Initial Advice Session 3', '$500 AUD', 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution 3.', 1, 0, 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(6, '3aab28ac91ae1110ec8dcae521acfe23', 5, 3, 6, 4, 'Initial Advice Session 4', '$100 AUD', 'Get initial advice on your legal matter with our set rate service and discover your pathway toward resolution 4.', 1, 0, 'http://127.0.0.1:8000/images/90-minute-initial--advice-session.png', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `business_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `professional_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `slug`, `role_id`, `category_id`, `business_id`, `first_name`, `last_name`, `phone`, `email`, `email_verified_at`, `professional_title`, `color`, `avatar`, `status`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '91883c7e6d0971bfe808b5c66460d167', 1, 0, 0, 'Admin', NULL, NULL, 'shobujsa1993@gmail.com', '2019-08-05 04:14:21', NULL, NULL, NULL, '0', '$2y$10$o3.3nfGJ6Y.foEWKu6CyGuni07DjyTfYQfU7jPV.x1cFjGS0UTbl2', NULL, '2019-08-05 04:14:21', '2019-08-05 04:14:21', NULL),
(2, '5ce7ad61fdca678062353578ee7101fc', 2, 1, 1, 'Business_Admin', NULL, NULL, 'shobujislam1989@gmail.com', '2019-08-05 04:14:21', NULL, NULL, NULL, '0', '$2y$10$VQjcYkzL7VHpRt71GWXZ.ODY8TtOFNX9ZzhzHtP4doIwUMPeZ/zmi', NULL, '2019-08-05 04:14:21', '2019-08-05 04:14:21', NULL),
(3, '759726aa2872ed028931712eaa03536a', 3, 0, 0, 'Staff', NULL, NULL, 'staff@gmail.com', '2019-08-05 04:14:21', NULL, NULL, NULL, '0', '$2y$10$MKXYBkae4XPQF25ioIrHIuzUB4o6z8V1VCr9pT90aaRj0/HFfjsym', NULL, '2019-08-05 04:14:21', '2019-08-05 04:14:21', NULL),
(4, '885281dedfd626939b5ec1043de8eb0c', 2, 0, 2, 'User', NULL, NULL, 'user@gmail.com', '2019-08-05 04:14:21', NULL, NULL, NULL, '0', '$2y$10$ovsH7IIZoyJhgYYcxqcKkO5MDjZck1MniQIAt1/lV4n7/zG9YzZ9.', NULL, '2019-08-05 04:14:21', '2019-08-05 04:14:21', NULL),
(5, 'f4efad63c8fb97dc1281b2ced67f63d3', 2, 0, 3, 'Test', NULL, NULL, 'test@gmail.com', '2019-08-05 04:14:21', NULL, NULL, NULL, '0', '$2y$10$xTQplY8bkCE8PdlFi2Waj.CvPufB9tmElYg4Phdk07ulb2HOEiB8G', NULL, '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(6, 'cef616895ebac483ed24bd03cf9f42ef', 4, 0, 0, 'Client', NULL, NULL, 'client@gmail.com', '2019-08-05 04:14:22', NULL, NULL, NULL, '0', '$2y$10$sE71wzaSK1CN8UeEAN8dTOy08JpmVDhnt9/f4GmWc71CApNMH.Ggi', NULL, '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(7, '546d95efb76e46e3385ff70fa80e9e92', 4, NULL, NULL, 'asdf', 'asdf', '+8801305105764', 'ranamia.bd2019@gmail.com', '2019-08-05 04:15:19', NULL, '#07EAD4', NULL, '0', '$2y$10$LLR.nPGEc/rgmGNsXXxlueSpqBZCMpEsxAFbsHQ3Q49mZPlebqNTq', NULL, '2019-08-05 04:15:19', '2019-08-05 04:15:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `website_widgets`
--

CREATE TABLE `website_widgets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `action_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call_us` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_lebel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invitation_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_widgets`
--

INSERT INTO `website_widgets` (`id`, `slug`, `user_id`, `action_type`, `schedule`, `details`, `contents`, `call_us`, `payment`, `invitation_lebel`, `invitation_title`, `invitation_text`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '176be26f247412d2a38c037fdfb9e13c', 2, 'floating', 'BOOK AN APPOINTMENT NOW HERE', 'Drop us a line', 'Customer Testimonials', 'Call Us', 'Make Payment', 'Contact Us', 'HOW CAN WE HELP YOU TODAY? PICK A SERVICE', 'Thank you for visiting our site', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(2, '7d686093f04b22862c487a7d09c566c9', 4, 'floating', 'BOOK AN APPOINTMENT NOW HERE 2', 'Drop us a line', 'Customer Testimonials', 'Call Us', 'Make Payment', 'Contact Us', 'HOW CAN WE HELP YOU TODAY? PICK A SERVICE 2', 'Thank you for visiting our site', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL),
(3, '4885bc5d5554348b1bf043604636282d', 5, 'floating', 'BOOK AN APPOINTMENT NOW HERE 3', 'Drop us a line', 'Customer Testimonials', 'Call Us', 'Make Payment', 'Contact Us', 'HOW CAN WE HELP YOU TODAY? PICK A SERVICE 3', 'Thank you for visiting our site', '0', '2019-08-05 04:14:22', '2019-08-05 04:14:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_settings`
--
ALTER TABLE `calendar_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_infos`
--
ALTER TABLE `contact_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `website_widgets`
--
ALTER TABLE `website_widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `calendar_settings`
--
ALTER TABLE `calendar_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=749;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `website_widgets`
--
ALTER TABLE `website_widgets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
