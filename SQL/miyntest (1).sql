-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 09:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miyntest`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `billing_infos`
--

CREATE TABLE `billing_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `service_name` text COLLATE utf8mb4_unicode_ci,
  `staff_name` text COLLATE utf8mb4_unicode_ci,
  `first_name` text COLLATE utf8mb4_unicode_ci,
  `last_name` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `subject` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `requested_date` text COLLATE utf8mb4_unicode_ci,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT 'upcoming',
  `slug` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `category_id`, `service_id`, `staff_id`, `service_name`, `staff_name`, `first_name`, `last_name`, `email`, `subject`, `message`, `requested_date`, `confirmed`, `status`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(41, 3, 7, 6, 'Database design edited again', 'Zim', 'Mark', 'Kevin', 'abc@abc.com', 'Need Database design', 'Hi,\nI need a database design for a system\nMark', 'a:2:{s:10:\"01/22/2019\";a:1:{i:0;s:8:\"09:10 AM\";}s:10:\"01/30/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c4042bfa57705c4042bfa57a85c4042bfa57df5c4042bfa58155c4042bfa584b', '2019-01-16 21:54:23', '2019-01-16 21:54:23', '0000-00-00 00:00:00'),
(42, 3, 7, 6, 'Database design edited again', 'Zim', 'Mark', 'Kevin', 'abc@abc.com', 'Need Database design', 'Hi,\nI need a database design for a system\nMark', 'a:2:{s:10:\"01/22/2019\";a:1:{i:0;s:8:\"09:10 AM\";}s:10:\"01/30/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c40431e4d6435c40431e4d67a5c40431e4d6b05c40431e4d6e75c40431e4d71d', '2019-01-16 21:55:58', '2019-01-16 21:55:58', '0000-00-00 00:00:00'),
(43, 3, 9, 6, 'Web design', 'Zim', 'Dev', 'Test', 'tst1@netmow.com', 'test', 'This is test msg', 'a:1:{s:10:\"01/19/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c42f496589f05c42f49658a285c42f49658a5e5c42f49658a945c42f49658acb', '2019-01-18 22:57:42', '2019-01-18 22:57:42', '0000-00-00 00:00:00'),
(44, 3, 9, 6, 'Web design', 'Zim', 'Dev', 'Test', 'tst1@netmow.com', 'test', 'This is test msg', 'a:1:{s:10:\"01/19/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c42f49c04be55c42f49c04c1c5c42f49c04c535c42f49c04c895c42f49c04cbf', '2019-01-18 22:57:48', '2019-01-18 22:57:48', '0000-00-00 00:00:00'),
(45, 3, 7, 6, 'Database design edited again', 'Zim', 'werwe', 'rwerw', 'erwer', 'rer', 'wrwerw', 'a:0:{}', 0, 'upcoming', '5c46a50deb1a85c46a50deb1df5c46a50deb2165c46a50deb24c5c46a50deb282', '2019-01-21 18:07:25', '2019-01-21 18:07:25', '0000-00-00 00:00:00'),
(46, 3, 7, 6, 'Database design edited again', 'Zim', 'werwe', 'rwerw', 'erwer', 'rer', 'wrwerw', 'a:0:{}', 0, 'upcoming', '5c46a50fe45045c46a50fe453b5c46a50fe455a5c46a50fe45915c46a50fe45c8', '2019-01-21 18:07:27', '2019-01-21 18:07:27', '0000-00-00 00:00:00'),
(47, 3, 7, 6, 'Database design edited again', 'Zim', 'gdfg', 'gdfg', 'fdgfg', 'drgrg', 'ergg', 'a:1:{s:10:\"01/22/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c46a59019eb25c46a59019eea5c46a59019f0f5c46a59019f465c46a59019f7f', '2019-01-21 18:09:36', '2019-01-21 18:09:36', '0000-00-00 00:00:00'),
(48, 3, 7, 6, 'Database design edited again', 'Zim', 'gdfg', 'gdfg', 'fdgfg', 'drgrg', 'ergg', 'a:1:{s:10:\"01/22/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c46a5d4254c35c46a5d4254fc5c46a5d4255325c46a5d4255685c46a5d42559f', '2019-01-21 18:10:44', '2019-01-21 18:10:44', '0000-00-00 00:00:00'),
(49, 3, 7, 6, 'Database design edited again', 'Zim', 'gdfg', 'gdfg', 'fdgfg', 'drgrg', 'ergg', 'a:1:{s:10:\"01/22/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5c46a5d4ddfd95c46a5d4de0185c46a5d4de0535c46a5d4de08d5c46a5d4de0c6', '2019-01-21 18:10:44', '2019-01-21 18:10:44', '0000-00-00 00:00:00'),
(50, 3, 7, 6, 'Database design edited again', 'Zim', 'ABC', 'EF', 'tst1@netmow.com', 'Test', 'hey this is a test', 'a:3:{s:10:\"02/26/2019\";a:1:{i:0;s:8:\"10:20 AM\";}s:10:\"02/28/2019\";a:1:{i:0;s:8:\"10:20 AM\";}s:10:\"02/27/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5c73603bcdcde5c73603bcdd1a5c73603bcdd545c73603bcdd8c5c73603bcddc2', '2019-02-24 16:25:47', '2019-02-24 16:25:47', '0000-00-00 00:00:00'),
(51, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'Jakarea', 'Parvez', 'sendinfo98@gmail.com', 'Hello bd', 'No message from here', 'a:1:{s:10:\"04/25/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cb735e75de4e5cb735e75de8b5cb735e75dec75cb735e75df035cb735e75df3f', '2019-04-17 04:19:19', '2019-04-17 04:19:19', '0000-00-00 00:00:00'),
(52, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'Jakarea', 'Parvez', 'sendinfo98@gmail.com', 'Hello bd', 'No message from here', 'a:1:{s:10:\"04/25/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cb735ea7238a5cb735ea723c55cb735ea723fc5cb735ea7243a5cb735ea72476', '2019-04-17 04:19:22', '2019-04-17 04:19:22', '0000-00-00 00:00:00'),
(53, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'Jakarea', 'Parvez', 'sendinfo98@gmail.com', 'Hello bd', 'No message from here', 'a:1:{s:10:\"04/25/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cb735f01b5775cb735f01b5af5cb735f01b5e65cb735f01b61c5cb735f01b652', '2019-04-17 04:19:28', '2019-04-17 04:19:28', '0000-00-00 00:00:00'),
(54, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'Jakarea', 'Parvez', 'sendinfo98@gmail.com', 'Hello bd', 'No message from here', 'a:1:{s:10:\"04/25/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cb735f3498c45cb735f3498fc5cb735f3499335cb735f34996a5cb735f3499a0', '2019-04-17 04:19:31', '2019-04-17 04:19:31', '0000-00-00 00:00:00'),
(55, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'Jakarea', 'Parvez', 'sendinfo98@gmail.com', 'Hello bd', 'No message from here', 'a:1:{s:10:\"04/25/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cb7360606b4d5cb7360606b885cb7360606bc25cb7360606bfb5cb7360606c34', '2019-04-17 04:19:50', '2019-04-17 04:19:50', '0000-00-00 00:00:00'),
(56, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbd857eded325cbd857eded6a5cbd857ededa15cbd857ededd75cbd857edee0e', '2019-04-21 23:12:30', '2019-04-21 23:12:30', '0000-00-00 00:00:00'),
(57, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbd85816c1fd5cbd85816c23a5cbd85816c2765cbd85816c2b15cbd85816c2ec', '2019-04-21 23:12:33', '2019-04-21 23:12:33', '0000-00-00 00:00:00'),
(58, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbd8582f24b15cbd8582f24ea5cbd8582f25205cbd8582f255e5cbd8582f2594', '2019-04-21 23:12:35', '2019-04-21 23:12:35', '0000-00-00 00:00:00'),
(59, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbda1b3cde1b5cbda1b3cde545cbda1b3cde8a5cbda1b3cdec15cbda1b3cdef8', '2019-04-22 01:12:51', '2019-04-22 01:12:51', '0000-00-00 00:00:00'),
(60, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbda1b4e073e5cbda1b4e077b5cbda1b4e07b65cbda1b4e07f15cbda1b4e0800', '2019-04-22 01:12:52', '2019-04-22 01:12:52', '0000-00-00 00:00:00'),
(61, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'rana', 'mia', 'shobujislam1989@gmail.com', 'no subject', 'no message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cbfcb55300465cbfcb553007f5cbfcb55300b55cbfcb55300ec5cbfcb5530122', '2019-04-23 16:35:01', '2019-04-23 16:35:01', '0000-00-00 00:00:00'),
(62, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'rana', 'mia', 'shobujislam1989@gmail.com', 'no subject', 'no message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cbfcb58e1cad5cbfcb58e1ce55cbfcb58e1d1c5cbfcb58e1d525cbfcb58e1d89', '2019-04-23 16:35:04', '2019-04-23 16:35:04', '0000-00-00 00:00:00'),
(63, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'rana', 'mia', 'shobujislam1989@gmail.com', 'no subject', 'no message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cbfcb5aa30285cbfcb5aa30655cbfcb5aa30a05cbfcb5aa30dc5cbfcb5aa3118', '2019-04-23 16:35:06', '2019-04-23 16:35:06', '0000-00-00 00:00:00'),
(64, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'rana', 'mia', 'shobujislam1989@gmail.com', 'no subject', 'no message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cbfcb5c0fb295cbfcb5c0fb615cbfcb5c0fb985cbfcb5c0fbce5cbfcb5c0fc05', '2019-04-23 16:35:08', '2019-04-23 16:35:08', '0000-00-00 00:00:00'),
(65, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'rana', 'mia', 'shobujislam1989@gmail.com', 'no subject', 'no message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cbfd2495e1025cbfd2495e13a5cbfd2495e1715cbfd2495e1a75cbfd2495e1de', '2019-04-23 17:04:41', '2019-04-23 17:04:41', '0000-00-00 00:00:00'),
(66, 3, 7, 6, 'Database design edited again', 'Zim', 'saa', 'sa', 'shobujsa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfd78b650655cbfd78b650a25cbfd78b650dd5cbfd78b651185cbfd78b65152', '2019-04-23 17:27:07', '2019-04-23 17:27:07', '0000-00-00 00:00:00'),
(67, 3, 7, 6, 'Database design edited again', 'Zim', 'saa', 'sa', 'shobujsa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfd78cef39b5cbfd78cef3d45cbfd78cef40a5cbfd78cef4415cbfd78cef477', '2019-04-23 17:27:08', '2019-04-23 17:27:08', '0000-00-00 00:00:00'),
(68, 3, 7, 6, 'Database design edited again', 'Zim', 'saa', 'sa', 'shobujsa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfd7c6284035cbfd7c6284415cbfd7c62847d5cbfd7c6284b75cbfd7c6284f0', '2019-04-23 17:28:06', '2019-04-23 17:28:06', '0000-00-00 00:00:00'),
(69, 3, 7, 6, 'Database design edited again', 'Zim', 'saa', 'sa', 'shobujsa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfd7c735b3e5cbfd7c735b7a5cbfd7c735bb45cbfd7c735bed5cbfd7c735c26', '2019-04-23 17:28:07', '2019-04-23 17:28:07', '0000-00-00 00:00:00'),
(70, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebe39623e5cbfebe3962775cbfebe3962ad5cbfebe3962e45cbfebe39631c', '2019-04-23 18:53:55', '2019-04-23 18:53:55', '0000-00-00 00:00:00'),
(71, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebe63a68a5cbfebe63a6c65cbfebe63a7015cbfebe63a73b5cbfebe63a776', '2019-04-23 18:53:58', '2019-04-23 18:53:58', '0000-00-00 00:00:00'),
(72, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebe7189415cbfebe71897f5cbfebe7189ba5cbfebe7189f55cbfebe718a31', '2019-04-23 18:53:59', '2019-04-23 18:53:59', '0000-00-00 00:00:00'),
(73, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebe77ba4c5cbfebe77ba845cbfebe77babb5cbfebe77baf15cbfebe77bb28', '2019-04-23 18:53:59', '2019-04-23 18:53:59', '0000-00-00 00:00:00'),
(74, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebed694b95cbfebed694f15cbfebed695285cbfebed6955e5cbfebed69595', '2019-04-23 18:54:05', '2019-04-23 18:54:05', '0000-00-00 00:00:00'),
(75, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebedd04215cbfebedd045e5cbfebedd049b5cbfebedd04d95cbfebedd0516', '2019-04-23 18:54:05', '2019-04-23 18:54:05', '0000-00-00 00:00:00'),
(76, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfebee110ed5cbfebee1112b5cbfebee111685cbfebee111a55cbfebee111e1', '2019-04-23 18:54:06', '2019-04-23 18:54:06', '0000-00-00 00:00:00'),
(77, 3, 13, 7, 'Test', 'Gilfoyle', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfec38e95645cbfec38e959c5cbfec38e95d35cbfec38e96095cbfec38e963f', '2019-04-23 18:55:20', '2019-04-23 18:55:20', '0000-00-00 00:00:00'),
(78, 3, 13, 7, 'Test', 'Gilfoyle', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfec398094f5cbfec39809885cbfec39809bf5cbfec39809f55cbfec3980a2b', '2019-04-23 18:55:21', '2019-04-23 18:55:21', '0000-00-00 00:00:00'),
(79, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:0:{}', 0, 'upcoming', '5cbfec43c8d2c5cbfec43c8d685cbfec43c8d915cbfec43c8dcc5cbfec43c8e08', '2019-04-23 18:55:31', '2019-04-23 18:55:31', '0000-00-00 00:00:00'),
(80, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfededaeff45cbfededaf02f5cbfededaf0685cbfededaf0a35cbfededaf0df', '2019-04-23 19:02:37', '2019-04-23 19:02:37', '0000-00-00 00:00:00'),
(81, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf0d14255cbfedf0d145d5cbfedf0d14935cbfedf0d14ca5cbfedf0d1500', '2019-04-23 19:02:40', '2019-04-23 19:02:40', '0000-00-00 00:00:00'),
(82, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf17d4fd5cbfedf17d53a5cbfedf17d5775cbfedf17d5b45cbfedf17d5f0', '2019-04-23 19:02:41', '2019-04-23 19:02:41', '0000-00-00 00:00:00'),
(83, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf1c1f2d5cbfedf1c1f695cbfedf1c1fa25cbfedf1c1fdc5cbfedf1c2016', '2019-04-23 19:02:41', '2019-04-23 19:02:41', '0000-00-00 00:00:00'),
(84, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf20e8215cbfedf20e8595cbfedf20e8905cbfedf20e8c65cbfedf20e8fd', '2019-04-23 19:02:42', '2019-04-23 19:02:42', '0000-00-00 00:00:00'),
(85, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf2337915cbfedf2337cf5cbfedf23380a5cbfedf2338465cbfedf233883', '2019-04-23 19:02:42', '2019-04-23 19:02:42', '0000-00-00 00:00:00'),
(86, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf242de55cbfedf242e1e5cbfedf242e555cbfedf242e8b5cbfedf242ec5', '2019-04-23 19:02:42', '2019-04-23 19:02:42', '0000-00-00 00:00:00'),
(87, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf2b308d5cbfedf2b30ca5cbfedf2b31085cbfedf2b31455cbfedf2b3181', '2019-04-23 19:02:42', '2019-04-23 19:02:42', '0000-00-00 00:00:00'),
(88, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf2c224c5cbfedf2c22845cbfedf2c22bb5cbfedf2c22f15cbfedf2c2327', '2019-04-23 19:02:42', '2019-04-23 19:02:42', '0000-00-00 00:00:00'),
(89, 3, 7, 6, 'Database design edited again', 'Zim', 'rana', 'mia', 'shobujsaa1993@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/24/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cbfedf2eeaf65cbfedf2eeb055cbfedf2eeb3c5cbfedf2eeb735cbfedf2eeba9', '2019-04-23 19:02:42', '2019-04-23 19:02:42', '0000-00-00 00:00:00'),
(90, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"05/23/2019\";a:3:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cbff9e073d1d5cbff9e073d595cbff9e073d925cbff9e073dca5cbff9e073e02', '2019-04-23 19:53:36', '2019-04-23 19:53:36', '0000-00-00 00:00:00'),
(91, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"05/23/2019\";a:3:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cbff9e0d713e5cbff9e0d717a5cbff9e0d71b45cbff9e0d71ee5cbff9e0d7227', '2019-04-23 19:53:36', '2019-04-23 19:53:36', '0000-00-00 00:00:00'),
(92, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"05/23/2019\";a:3:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cbff9e5b36a55cbff9e5b36dd5cbff9e5b37155cbff9e5b374f5cbff9e5b3787', '2019-04-23 19:53:41', '2019-04-23 19:53:41', '0000-00-00 00:00:00'),
(93, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, 'ss', NULL, 'a:1:{s:10:\"05/23/2019\";a:3:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cbff9e902f7e5cbff9e902fbc5cbff9e902ff75cbff9e9030335cbff9e90306f', '2019-04-23 19:53:45', '2019-04-23 19:53:45', '0000-00-00 00:00:00'),
(94, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbffbd409e445cbffbd409e7c5cbffbd409eb35cbffbd409edd5cbffbd409f14', '2019-04-23 20:01:56', '2019-04-23 20:01:56', '0000-00-00 00:00:00'),
(95, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbffbd5203e15cbffbd5204195cbffbd5204505cbffbd5204865cbffbd5204bc', '2019-04-23 20:01:57', '2019-04-23 20:01:57', '0000-00-00 00:00:00'),
(96, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbffbd5766a65cbffbd5766e25cbffbd57671c5cbffbd5767575cbffbd576792', '2019-04-23 20:01:57', '2019-04-23 20:01:57', '0000-00-00 00:00:00'),
(97, 3, 7, 6, 'Database design edited again', 'Zim', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5cbffc5b319ac5cbffc5b319e45cbffc5b31a1b5cbffc5b31a515cbffc5b31a88', '2019-04-23 20:04:11', '2019-04-23 20:04:11', '0000-00-00 00:00:00'),
(98, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc003116c3c75cc003116c4005cc003116c4375cc003116c46d5cc003116c4a3', '2019-04-23 20:32:49', '2019-04-23 20:32:49', '0000-00-00 00:00:00'),
(99, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc003126bb415cc003126bb7c5cc003126bbb65cc003126bbf15cc003126bc4d', '2019-04-23 20:32:50', '2019-04-23 20:32:50', '0000-00-00 00:00:00'),
(100, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc00312998c45cc00312998fe5cc00312999385cc00312999705cc00312999a9', '2019-04-23 20:32:50', '2019-04-23 20:32:50', '0000-00-00 00:00:00'),
(101, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc00312dd7775cc00312dd7b05cc00312dd7e75cc00312dd81d5cc00312dd854', '2019-04-23 20:32:50', '2019-04-23 20:32:50', '0000-00-00 00:00:00'),
(102, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc00313216215cc00313216595cc00313216905cc00313216c65cc00313216fc', '2019-04-23 20:32:51', '2019-04-23 20:32:51', '0000-00-00 00:00:00'),
(103, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc003dd76b395cc003dd76b785cc003dd76bb55cc003dd76bed5cc003dd76c26', '2019-04-23 20:36:13', '2019-04-23 20:36:13', '0000-00-00 00:00:00'),
(104, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc003ddaa85a5cc003ddaa8985cc003ddaa8d35cc003ddaa90b5cc003ddaa92e', '2019-04-23 20:36:13', '2019-04-23 20:36:13', '0000-00-00 00:00:00'),
(105, 3, 13, 7, 'Test', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc003ddd941b5cc003ddd94565cc003ddd94935cc003ddd94d05cc003ddd950c', '2019-04-23 20:36:13', '2019-04-23 20:36:13', '0000-00-00 00:00:00'),
(106, 3, 7, 7, 'Database design edited again', 'Gilfoyle', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"04/25/2019\";a:3:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";i:2;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc01d471ea225cc01d471ea5b5cc01d471ea925cc01d471eac95cc01d471eae5', '2019-04-23 22:24:39', '2019-04-23 22:24:39', '0000-00-00 00:00:00'),
(107, 3, 7, 6, 'Database design edited again', 'Zim', 'asdf', 'asdf', 'shobujsa93@gmail.com', 'asda', 'asdf', 'a:1:{s:10:\"04/24/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc0783838ef55cc0783838f355cc0783838f705cc0783838fab5cc0783838fef', '2019-04-24 04:52:40', '2019-04-24 04:52:40', '0000-00-00 00:00:00'),
(108, 3, 7, 6, 'Database design edited again', 'Zim', 'asdf', 'asdf', 'shobujsa93@gmail.com', 'asda', 'asdf', 'a:1:{s:10:\"04/24/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc0785a57a845cc0785a57ac15cc0785a57afd5cc0785a57b3a5cc0785a57b77', '2019-04-24 04:53:14', '2019-04-24 04:53:14', '0000-00-00 00:00:00'),
(109, 3, 7, 6, 'Database design edited again', 'Zim', 'asdf', 'asdf', 'shobujsa93@gmail.com', 'asda', 'asdf', 'a:1:{s:10:\"04/24/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc078ae90aa55cc078ae90adf5cc078ae90b185cc078ae90b525cc078ae90b8d', '2019-04-24 04:54:38', '2019-04-24 04:54:38', '0000-00-00 00:00:00'),
(110, 5, 8, 7, 'Home monitoring system edited', 'Gilfoyle', 'asdf', 'asdf', 'shobujsa93@gmail.com', 'asdf', 'asdf', 'a:1:{s:10:\"04/27/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc078fd222745cc078fd222b15cc078fd222ed5cc078fd2232a5cc078fd22368', '2019-04-24 04:55:57', '2019-04-24 04:55:57', '0000-00-00 00:00:00'),
(111, 3, 12, 7, 'Web design basic edited', 'Gilfoyle', 'rana', 'mia', 'shobujsa1993@gmail.com', 'sa subject', 'sa message', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc1216e628e65cc1216e629225cc1216e6295e5cc1216e629995cc1216e629d3', '2019-04-24 16:54:38', '2019-04-24 16:54:38', '0000-00-00 00:00:00'),
(112, 3, 12, 7, 'Web design basic edited', 'Gilfoyle', 'rana', 'mia', 'shobujsa1993@gmail.com', 'sa subject', 'sa message', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc12309a2f765cc12309a2fb15cc12309a2fea5cc12309a30235cc12309a305c', '2019-04-24 17:01:29', '2019-04-24 17:01:29', '0000-00-00 00:00:00'),
(113, 3, 12, 7, 'Web design basic edited', 'Gilfoyle', 'rana', 'mia', 'shobujsa1993@gmail.com', 'sa subject', 'sa message', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc125d00bd495cc125d00bd825cc125d00bdb95cc125d00bdef5cc125d00be25', '2019-04-24 17:13:20', '2019-04-24 17:13:20', '0000-00-00 00:00:00'),
(114, 3, 12, 7, 'Web design basic edited', 'Gilfoyle', 'rakib', 'khan', 'shobujislam1989@gmail.com', 'this is subject', 'this is message', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc13e551ec885cc13e551ecc05cc13e551ecf75cc13e551ed2d5cc13e551ed64', '2019-04-24 18:57:57', '2019-04-24 18:57:57', '0000-00-00 00:00:00'),
(115, 3, 12, 7, 'Web design basic edited', 'Gilfoyle', 'rakib2', 'khan2', 'shobujislam1989@gmail.com', 'this is subject2', 'this is message2', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc13f150193d5cc13f150197c5cc13f15019b95cc13f15019f65cc13f1501a32', '2019-04-24 19:01:09', '2019-04-24 19:01:09', '0000-00-00 00:00:00'),
(116, 3, 12, 7, 'Web design basic edited', 'Gilfoyle', 'ddd', 'ddd', 'ddd', 'ddd', 'ddd', 'a:1:{s:10:\"04/30/2019\";a:2:{i:0;s:8:\"11:30 AM\";i:1;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5cc142fd60d545cc142fd60d915cc142fd60dcc5cc142fd60e075cc142fd60e44', '2019-04-24 19:17:49', '2019-04-24 19:17:49', '0000-00-00 00:00:00'),
(117, 3, 9, 6, 'Web design', 'Zim', 'ggg', 'hhh', 'ggg@gmail.com', 'gg', 'gg', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc14a0d64b855cc14a0d64bbe5cc14a0d64bf55cc14a0d64c2b5cc14a0d64c63', '2019-04-24 19:47:57', '2019-04-24 19:47:57', '0000-00-00 00:00:00'),
(118, 3, 9, 6, 'Web design', 'Zim', 'ggg', 'hhh', 'ggg@gmail.com', 'gg', 'gg', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc14a695086d5cc14a69508a55cc14a69508dc5cc14a69509125cc14a6950948', '2019-04-24 19:49:29', '2019-04-24 19:49:29', '0000-00-00 00:00:00'),
(119, 3, 9, 6, 'Web design', 'Zim', 'rana', 'mia', 'shobujislam1989@gmail.com', 'this is subject', 'this is message from rana', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc14abf0e7ee5cc14abf0e8285cc14abf0e8405cc14abf0e8795cc14abf0e8b4', '2019-04-24 19:50:55', '2019-04-24 19:50:55', '0000-00-00 00:00:00'),
(120, 3, 9, 6, 'Web design', 'Zim', 'rana2', 'mia2', 'shobujislam1989@gmail.com', 'this is subject2', 'this is message from rana', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc17df5a84da5cc17df5a85125cc17df5a852f5cc17df5a85665cc17df5a859c', '2019-04-24 23:29:25', '2019-04-24 23:29:25', '0000-00-00 00:00:00'),
(121, 3, 9, 6, 'Web design', 'Zim', 'rana', 'mia', 'shobujislam1989@gmail.com', 'this is subject', 'this is message from rana', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc17e9b9f1b95cc17e9b9f1f55cc17e9b9f2325cc17e9b9f26e5cc17e9b9f2a8', '2019-04-24 23:32:11', '2019-04-24 23:32:11', '0000-00-00 00:00:00'),
(122, 3, 9, 6, 'Web design', 'Zim', 'rana', 'mia', 'shobujislam1989@gmail.com', 'this is subject', 'this is message from rana', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc17ebb995535cc17ebb9958b5cc17ebb995c25cc17ebb995f85cc17ebb9962f', '2019-04-24 23:32:43', '2019-04-24 23:32:43', '0000-00-00 00:00:00'),
(123, 3, 9, 6, 'Web design', 'Zim', 'rana', 'mia', 'shobujislam1989@gmail.com', 'this is subject', 'this is message from rana', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc1806de7b2c5cc1806de7b695cc1806de7ba55cc1806de7bdf5cc1806de7c19', '2019-04-24 23:39:57', '2019-04-24 23:39:57', '0000-00-00 00:00:00'),
(124, 3, 9, 6, 'Web design', 'Zim', 'shakib', 'hasan', 'shobujislam1989@gmail.com', 'subject area', 'message from shakib', 'a:1:{s:10:\"04/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc180ad219585cc180ad219945cc180ad219cf5cc180ad21a0b5cc180ad21a46', '2019-04-24 23:41:01', '2019-04-24 23:41:01', '0000-00-00 00:00:00'),
(125, 3, 7, 7, 'Database design edited again', 'Gilfoyle', 'rana', 'rana', 'rana', 'rana', 'rana', 'a:1:{s:10:\"05/08/2019\";a:2:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc2db22a81a95cc2db22a81e25cc2db22a82195cc2db22a824f5cc2db22a8286', '2019-04-26 00:19:14', '2019-04-26 00:19:14', '0000-00-00 00:00:00'),
(126, 3, 9, 6, 'Web design', 'Zim', 'rana', 'rana', 'rana', 'rana', 'rana', 'a:0:{}', 0, 'upcoming', '5cc2db66a034c5cc2db66a038a5cc2db66a03c75cc2db66a04045cc2db66a0442', '2019-04-26 00:20:22', '2019-04-26 00:20:22', '0000-00-00 00:00:00'),
(127, 3, 9, 6, 'Web design', 'Zim', 'rakib', 'khan', 'shobujislam1989@gmail.com', 'this is subject area', 'this is message area', 'a:1:{s:10:\"05/11/2019\";a:2:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc2dcf10c73c5cc2dcf10c77b5cc2dcf10c7ba5cc2dcf10c7f55cc2dcf10c830', '2019-04-26 00:26:57', '2019-04-26 00:26:57', '0000-00-00 00:00:00'),
(128, 3, 13, 6, 'Test', 'Zim', 'rakib', 'khan', 'shobujislam1989@gmail.com', 'this is subject area', 'this is message area', 'a:0:{}', 0, 'upcoming', '5cc2dd18d51915cc2dd18d51c95cc2dd18d52005cc2dd18d52365cc2dd18d526d', '2019-04-26 00:27:36', '2019-04-26 00:27:36', '0000-00-00 00:00:00'),
(129, 3, 7, 6, 'Database design edited again', 'Zim', 'rakib', 'khan', 'shobujislam1989@gmail.com', 'this is subject area', 'this is message area', 'a:1:{s:10:\"07/04/2019\";a:2:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc2dd3e3ffb45cc2dd3e3fff05cc2dd3e4002a5cc2dd3e400655cc2dd3e4009f', '2019-04-26 00:28:14', '2019-04-26 00:28:14', '0000-00-00 00:00:00'),
(130, 3, 7, 6, 'Database design edited again', 'shobuj', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/09/2019\";a:2:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc41c4c3db985cc41c4c3dbd05cc41c4c3dc065cc41c4c3dc3d5cc41c4c3dc73', '2019-04-26 23:09:32', '2019-04-26 23:09:32', '0000-00-00 00:00:00'),
(131, 5, 8, 6, 'Home monitoring system edited', 'shobuj', 'asdf', 'sadf', 'sadf', 'asdf', 'asdf', 'a:1:{s:10:\"05/02/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc41d67dbb125cc41d67dbb4a5cc41d67dbb805cc41d67dbbb75cc41d67dbbed', '2019-04-26 23:14:15', '2019-04-26 23:14:15', '0000-00-00 00:00:00'),
(132, 3, 7, 7, 'Database design edited again', 'rana', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/08/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc4213b8ff615cc4213b8ff9c5cc4213b8ffd65cc4213b9000e5cc4213b90047', '2019-04-26 23:30:35', '2019-04-26 23:30:35', '0000-00-00 00:00:00'),
(133, 3, 12, 6, 'Web design basic edited', 'shobuj', 'sadf', 'asdf', 'sadf', 'asdf', 'asdf', 'a:1:{s:10:\"05/02/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc42263992835cc42263992bd5cc42263992f55cc422639931f5cc4226399358', '2019-04-26 23:35:31', '2019-04-26 23:35:31', '0000-00-00 00:00:00'),
(134, 3, 9, 7, 'Web design', 'rana', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/02/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc426f9ebbe25cc426f9ebc1d5cc426f9ebc575cc426f9ebc8f5cc426f9ebcc8', '2019-04-26 23:55:05', '2019-04-26 23:55:05', '0000-00-00 00:00:00'),
(135, 3, 9, 7, 'Web design', 'rana', 'asd', 'asdf', 'asd', 'sd', 'asd', 'a:1:{s:10:\"05/09/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5cc4276da46135cc4276da464c5cc4276da46825cc4276da46b95cc4276da46cf', '2019-04-26 23:57:01', '2019-04-26 23:57:01', '0000-00-00 00:00:00'),
(136, 3, 12, 7, 'Web design basic edited', 'rana', 'asdf', 'sadf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/09/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc42b990ad515cc42b990ad895cc42b990adc05cc42b990adfb5cc42b990ae32', '2019-04-27 00:14:49', '2019-04-27 00:14:49', '0000-00-00 00:00:00'),
(137, 3, 13, 7, 'Test', 'rana', 'asdf', 'sdf', 'asdf', 'adf', 'asdf', 'a:1:{s:10:\"05/01/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc433dfc4f905cc433dfc4fcc5cc433dfc50085cc433dfc50455cc433dfc5082', '2019-04-27 00:50:07', '2019-04-27 00:50:07', '0000-00-00 00:00:00'),
(138, 3, 12, 7, 'Web design basic edited', 'rana', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/01/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc436c47415e5cc436c47419a5cc436c4741d35cc436c47420e5cc436c474249', '2019-04-27 01:02:28', '2019-04-27 01:02:28', '0000-00-00 00:00:00'),
(139, 3, 12, 6, 'Web design basic edited', 'shobuj', 'sasa', 'asas', 'assa', 'asas', 'saas', 'a:1:{s:10:\"05/09/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5cc6616fad7a15cc6616fad7db5cc6616fad8145cc6616fad84c5cc6616fad884', '2019-04-28 16:29:03', '2019-04-28 16:29:03', '0000-00-00 00:00:00'),
(140, 3, 12, 7, 'Web design basic edited', 'rana', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/08/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc67976701525cc67976701905cc67976701cd5cc679767020b5cc6797670248', '2019-04-28 18:11:34', '2019-04-28 18:11:34', '0000-00-00 00:00:00'),
(141, 3, 12, 6, 'Web design basic edited', 'shobuj', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/01/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc6800372c2a5cc6800372c695cc6800372ca65cc6800372ce45cc6800372d23', '2019-04-28 18:39:31', '2019-04-28 18:39:31', '0000-00-00 00:00:00'),
(142, 3, 9, 6, 'Web design', 'shobuj', 'we', 'we', 'we', 'we', 'we', 'a:1:{s:10:\"05/08/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc6dd3c9682e5cc6dd3c9686a5cc6dd3c968a45cc6dd3c968de5cc6dd3c96918', '2019-04-29 01:17:16', '2019-04-29 01:17:16', '0000-00-00 00:00:00'),
(143, 3, 12, 7, 'Web design basic edited', 'rana', 'ert', 'ert', 'ert', 'ert', 'ert', 'a:1:{s:10:\"05/02/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5cc6de59dd7ac5cc6de59dd7e45cc6de59dd81b5cc6de59dd8515cc6de59dd887', '2019-04-29 01:22:01', '2019-04-29 01:22:01', '0000-00-00 00:00:00'),
(144, 3, 9, 6, 'Web design', 'shobuj', 'sdf', 'sdf', 'sdf', 'sdf', 'sdf', 'a:0:{}', 0, 'upcoming', '5cc829f18be355cc829f18be715cc829f18beac5cc829f18bee75cc829f18bf21', '2019-04-30 00:56:49', '2019-04-30 00:56:49', '0000-00-00 00:00:00'),
(145, 3, 12, 6, 'Web design basic edited', 'shobuj', 'hello', 'hello', 'hello', 'hello', 'hello', 'a:1:{s:10:\"05/30/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5ccab438b6c265ccab438b6c5e5ccab438b6c945ccab438b6ccb5ccab438b6d02', '2019-05-01 23:11:20', '2019-05-01 23:11:20', '0000-00-00 00:00:00'),
(146, 3, 9, 6, 'Web design', 'shobuj', 'roni', 'mia', 'roni@gmail.com', 'subject area', 'message area', 'a:1:{s:10:\"05/30/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5ccabf55aef265ccabf55aef5e5ccabf55aef935ccabf55aefca5ccabf55af000', '2019-05-01 23:58:45', '2019-05-01 23:58:45', '0000-00-00 00:00:00'),
(147, 3, 12, 6, 'Web design basic edited', 'shobuj', 'wert', 'wert', 'wer', 'wer', 'wer', 'a:1:{s:10:\"06/06/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5ccbea55a40535ccbea55a40925ccbea55a40d35ccbea55a41135ccbea55a4152', '2019-05-02 21:14:29', '2019-05-02 21:14:29', '0000-00-00 00:00:00'),
(148, 3, 9, 7, 'Web design', 'rana', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"05/23/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5ccfc27f694715ccfc27f694a95ccfc27f694e05ccfc27f695165ccfc27f6954c', '2019-05-05 19:13:35', '2019-05-05 19:13:35', '0000-00-00 00:00:00'),
(149, 3, 9, 6, 'Web design', 'shobuj', 'Arif', 'Dev', 'arif@netmow.com', 'Test Booking', 'Hey this is for test only', 'a:0:{}', 0, 'upcoming', '5ce65ec2457805ce65ec2457bc5ce65ec2457cb5ce65ec2458055ce65ec24583e', '2019-05-22 22:50:10', '2019-05-22 22:50:10', '0000-00-00 00:00:00'),
(150, 3, 12, 7, 'Web design basic edited', 'rana', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce78e35c1a365ce78e35c1a395ce78e35c1a3a5ce78e35c1a3b5ce78e35c1a3c', '2019-05-24 00:24:53', '2019-05-24 00:24:53', '0000-00-00 00:00:00'),
(151, 3, 9, 7, 'Web design', 'rana', 'asdfasdf', 'asdfasdf', 'asdf', 'asdf', 'asdfasdf', 'a:1:{s:10:\"05/29/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce78ef86b26c5ce78ef86b2705ce78ef86b2725ce78ef86b2745ce78ef86b275', '2019-05-24 00:28:08', '2019-05-24 00:28:08', '0000-00-00 00:00:00'),
(152, 3, 9, 7, 'Web design', 'rana', 'ww', 'ww', 'test@gmail.com', 'ww', 'ww', 'a:1:{s:10:\"05/28/2019\";a:1:{i:0;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5ce791c5029315ce791c5029345ce791c5029355ce791c5029365ce791c502937', '2019-05-24 00:40:05', '2019-05-24 00:40:05', '0000-00-00 00:00:00'),
(153, 3, 13, 7, 'Test', 'rana', 'er', 'er', 'shobujsa1993@gmail.com', 'er', 'er', 'a:1:{s:10:\"05/29/2019\";a:3:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";i:2;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5ce792132417f5ce79213241815ce79213241825ce79213241835ce7921324184', '2019-05-24 00:41:23', '2019-05-24 00:41:23', '0000-00-00 00:00:00'),
(154, 3, 13, 7, 'Test', 'rana', 'er', 'er', 'shobujsa1993@gmail.com', 'er', 'er', 'a:1:{s:10:\"05/29/2019\";a:3:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";i:2;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5ce7921613a505ce7921613a525ce7921613a545ce7921613a555ce7921613a56', '2019-05-24 00:41:26', '2019-05-24 00:41:26', '0000-00-00 00:00:00'),
(155, 3, 13, 7, 'Test', 'rana', 'er', 'er', 'shobujsa1993@gmail.com', 'er', 'er', 'a:1:{s:10:\"05/29/2019\";a:3:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";i:2;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5ce7921776f375ce7921776f3a5ce7921776f3b5ce7921776f3c5ce7921776f3d', '2019-05-24 00:41:27', '2019-05-24 00:41:27', '0000-00-00 00:00:00'),
(156, 3, 12, 7, 'Web design basic edited', 'rana', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"05/29/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5ce793c10bfd65ce793c10bfdb5ce793c10bfdc5ce793c10bfde5ce793c10bfe1', '2019-05-24 00:48:33', '2019-05-24 00:48:33', '0000-00-00 00:00:00'),
(157, 3, 12, 7, 'Web design basic edited', 'rana', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"05/29/2019\";a:1:{i:0;s:8:\"10:20 AM\";}}', 0, 'upcoming', '5ce794899d3f15ce794899d3f35ce794899d3f45ce794899d3f55ce794899d3f6', '2019-05-24 00:51:53', '2019-05-24 00:51:53', '0000-00-00 00:00:00'),
(158, 3, 12, 7, 'Web design basic edited', 'rana', 'as', 'as', 'as', 'as', 'as', 'a:1:{s:10:\"05/29/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce794aa70a465ce794aa70a485ce794aa70a495ce794aa70a4a5ce794aa70a4b', '2019-05-24 00:52:26', '2019-05-24 00:52:26', '0000-00-00 00:00:00'),
(159, 3, 13, 6, 'Test', 'shobuj', 'rt', 'rt', 'rt', 'rt', 'rt', 'a:1:{s:10:\"05/28/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce79596d11795ce79596d117c5ce79596d117d5ce79596d117e5ce79596d117f', '2019-05-24 00:56:22', '2019-05-24 00:56:22', '0000-00-00 00:00:00'),
(160, 5, 8, 7, 'Home monitoring system edited', 'rana', 'as', 'as', 'as', 'as', 'as', 'a:1:{s:10:\"06/01/2019\";a:1:{i:0;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce796475b5425ce796475b5455ce796475b5465ce796475b5475ce796475b548', '2019-05-24 00:59:19', '2019-05-24 00:59:19', '0000-00-00 00:00:00'),
(161, 3, 12, 6, 'Web design basic edited', 'shobuj', NULL, NULL, NULL, NULL, NULL, 'a:1:{s:10:\"08/03/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce796baeb85e5ce796baeb8615ce796baeb8635ce796baeb8645ce796baeb865', '2019-05-24 01:01:14', '2019-05-24 01:01:14', '0000-00-00 00:00:00'),
(162, 3, 13, 7, 'Test', 'rana', NULL, NULL, NULL, NULL, NULL, 'a:0:{}', 0, 'upcoming', '5ce797bc95a115ce797bc95a145ce797bc95a155ce797bc95a165ce797bc95a17', '2019-05-24 01:05:32', '2019-05-24 01:05:32', '0000-00-00 00:00:00'),
(163, 3, 7, 6, 'Database design edited again', 'shobuj', 'we', 'we', 'we', 'we', 'we', 'a:1:{s:10:\"05/30/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce7984bdf98b5ce7984bdf9905ce7984bdf9945ce7984bdf9975ce7984bdf99b', '2019-05-24 01:07:55', '2019-05-24 01:07:55', '0000-00-00 00:00:00'),
(164, 3, 13, 7, 'Test', 'rana', 'ty', 'ty', 'ty', 'ty', 'ty', 'a:1:{s:10:\"05/29/2019\";a:3:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";i:2;s:8:\"12:40 PM\";}}', 0, 'upcoming', '5ce799264d5025ce799264d5045ce799264d5055ce799264d5065ce799264d507', '2019-05-24 01:11:34', '2019-05-24 01:11:34', '0000-00-00 00:00:00'),
(165, 3, 7, 7, 'Database design edited again', 'rana', 'qw', 'qw', 'wq', 'qw', 'qw', 'a:1:{s:10:\"06/06/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce7a5557a8d25ce7a5557a8d55ce7a5557a8d65ce7a5557a8d85ce7a5557a8d9', '2019-05-24 02:03:33', '2019-05-24 02:03:33', '0000-00-00 00:00:00'),
(166, 3, 12, 7, 'Web design basic edited', 'rana', 'ds', 'ds', 'ds', 'sd', 'sd', 'a:1:{s:10:\"05/30/2019\";a:3:{i:0;s:8:\"09:10 AM\";i:1;s:8:\"10:20 AM\";i:2;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce7a90270da65ce7a90270da95ce7a90270daa5ce7a90270dab5ce7a90270dac', '2019-05-24 02:19:14', '2019-05-24 02:19:14', '0000-00-00 00:00:00'),
(167, 3, 9, 7, 'Web design', 'rana', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', 'a:1:{s:10:\"05/29/2019\";a:2:{i:0;s:8:\"10:20 AM\";i:1;s:8:\"11:30 AM\";}}', 0, 'upcoming', '5ce8dec11261a5ce8dec11261c5ce8dec11261d5ce8dec11261e5ce8dec11261f', '2019-05-25 00:20:49', '2019-05-25 00:20:49', NULL),
(168, 3, 9, 7, 'Web design', 'rana', 'we', 'we', 'we', 'ew', 'we', 'a:1:{s:10:\"06/06/2019\";a:1:{i:0;s:8:\"09:10 AM\";}}', 0, 'upcoming', '5ce8e4d82d2c65ce8e4d82d2cb5ce8e4d82d2cc5ce8e4d82d2cd5ce8e4d82d2ce', '2019-05-25 00:46:48', '2019-05-25 00:46:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking_options`
--

CREATE TABLE `booking_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_policies`
--

CREATE TABLE `booking_policies` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `businesses`
--

CREATE TABLE `businesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `industry_id` int(10) UNSIGNED NOT NULL,
  `profession_id` int(10) UNSIGNED NOT NULL,
  `secret_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesses`
--

INSERT INTO `businesses` (`id`, `user_id`, `industry_id`, `profession_id`, `secret_key`, `name`, `logo`, `short_description`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 2, '5cbfe1efc60415cbfe1efc607a', 'Booking App', 'https://app.miyn.net/images/miynlogo.png', 'manage your bookings', '2018-10-15 22:33:05', '2019-04-23 18:11:27'),
(2, 6, 1, 1, '1234567', 'Booking Bussiness name(From business table)', 'https://app.miyn.net/images/miynlogo.png', 'We build home automation product with IOT support, nice and clean web and Android application', '2018-12-02 21:42:03', '2019-01-10 19:47:14');

-- --------------------------------------------------------

--
-- Table structure for table `business_hours`
--

CREATE TABLE `business_hours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sun_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sun_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mon_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tue_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wed_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thu_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fri_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_business_hours_am` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sat_business_hours_pm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_hours`
--

INSERT INTO `business_hours` (`id`, `slug`, `user_id`, `sun_business_hours_am`, `sun_business_hours_pm`, `mon_business_hours_am`, `mon_business_hours_pm`, `tue_business_hours_am`, `tue_business_hours_pm`, `wed_business_hours_am`, `wed_business_hours_pm`, `thu_business_hours_am`, `thu_business_hours_pm`, `fri_business_hours_am`, `fri_business_hours_pm`, `sat_business_hours_am`, `sat_business_hours_pm`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '214f24267a22492a43a3ceb7666fa3f7', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2019-05-19 22:10:56', '2019-05-19 22:10:56', NULL),
(2, '5e315ebd737c050cabf82cd7d14f9abd', 3, 'editor', 'editor', 'writter', 'editor', 'user', 'user', 'user', 'user', 'user', 'user', 'user', 'user', 'user', 'user', 1, '2019-05-19 22:12:14', '2019-05-19 22:12:14', NULL),
(3, '2982bc8cc05d18b3573364d813cc60a3', 3, '6:30am', '2:30pm', '7:00am', '3:00pm', '7:30am', '3:30pm', '8:00am', '4:00pm', '8:30am', '4:30pm', '9:00am', '5:00pm', '6:30am', '2:30pm', 1, '2019-05-19 22:18:56', '2019-05-19 22:18:56', NULL),
(4, 'fcc33726c9c36d33d147bd4313b87ab5', 3, '6:30am', '2:30pm', '7:00am', '3:00pm', '7:30am', '3:30pm', '8:00am', '4:00pm', '8:30am', '4:30pm', '9:00am', '5:00pm', '6:30am', '2:30pm', 1, '2019-05-19 22:29:58', '2019-05-19 22:29:58', NULL),
(5, '2fd0dba99ed049fdff15b55e4e3f86f9', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-19 22:58:55', '2019-05-19 22:58:55', NULL),
(6, 'b06c89db9ef6069a9289dcefff8ec6fd', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-19 23:00:08', '2019-05-19 23:00:08', NULL),
(7, '5903aa901e1e9ab17593638a55a642cd', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-19 23:12:25', '2019-05-19 23:12:25', NULL),
(8, '26e5d63222e3fa646a0deeb0f0031a8a', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-19 23:17:49', '2019-05-19 23:17:49', NULL),
(9, 'ac1283fa2129f5422d16da752a347c7f', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-19 23:19:13', '2019-05-19 23:19:13', NULL),
(10, 'cb12177651f9e58da0b0080b27ab046b', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-19 23:26:26', '2019-05-19 23:26:26', NULL),
(11, 'd31cf45d65c47ba7b4d341b0ecc499b9', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '7:00am', '3:00pm', 1, '2019-05-20 00:00:08', '2019-05-20 00:00:08', NULL),
(12, '9b1d46b12e999113f4959701b1b801ad', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '7:00am', '3:00pm', 1, '2019-05-20 00:00:32', '2019-05-20 00:00:32', NULL),
(13, 'b5f872170391e22c5b105a8a9165796b', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:01:44', '2019-05-20 00:01:44', NULL),
(14, '8f2a71f02e204d7948c535293f4fd497', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:03:14', '2019-05-20 00:03:14', NULL),
(15, 'b87870381101695db10eb99f9d5ddfb0', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:03:51', '2019-05-20 00:03:51', NULL),
(16, '5616727d929d0d661c0c1700c52a04ff', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:08:14', '2019-05-20 00:08:14', NULL),
(17, 'f0bc85e365e5b0a8ba3356c990b45d59', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:10:29', '2019-05-20 00:10:29', NULL),
(18, 'a8f90443a4d0a810feb4128adafcdccc', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:11:12', '2019-05-20 00:11:12', NULL),
(19, 'a4ef52ec896ae511c1ee4e06e3431905', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:11:34', '2019-05-20 00:11:34', NULL),
(20, 'f80e6f4d06c6d90090d521acbdbdbbe5', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:13:16', '2019-05-20 00:13:16', NULL),
(21, '7a37f66ad6cb9f98ac741f51ada3fd18', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:22:04', '2019-05-20 00:22:04', NULL),
(22, '40de502e56684013bac5e71e3ae18cf8', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:22:51', '2019-05-20 00:22:51', NULL),
(23, '6ad140b74ca4208cd714eed937bed408', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 00:23:08', '2019-05-20 00:23:08', NULL),
(24, '3192c50c9e7b1081d94f0cad645fed2c', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:08:21', '2019-05-20 01:08:21', NULL),
(25, '129a5781d4d5c4a05c07b03f8df08913', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:12:09', '2019-05-20 01:12:09', NULL),
(26, 'cace61dba774b973f4928c30e01b42c7', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:14:41', '2019-05-20 01:14:41', NULL),
(27, '9575f143a2e0e0ee08faa3540ea3d64e', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:16:38', '2019-05-20 01:16:38', NULL),
(28, '9b7adf6bd6a6c95351d68d08b06afa22', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:18:13', '2019-05-20 01:18:13', NULL),
(29, '23e37c72f27ffeb65804c917e17149b1', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:18:41', '2019-05-20 01:18:41', NULL),
(30, 'be6c9b0a634c85872ae9aa0281a8e92e', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:21:39', '2019-05-20 01:21:39', NULL),
(31, '7aa429fdaaa96f64aeb34cbaa7dba4b6', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:48:22', '2019-05-20 01:48:22', NULL),
(32, 'f6693cfddd4a4a1d4ee2f16671ec531e', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:48:50', '2019-05-20 01:48:50', NULL),
(33, '951c309749139f043fa0c70935aa74c5', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:49:46', '2019-05-20 01:49:46', NULL),
(34, 'dd08785f03248fbbac84759c37188480', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:50:36', '2019-05-20 01:50:36', NULL),
(35, '44a521f0848a6b01bf012d2ea1fe50b7', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:52:39', '2019-05-20 01:52:39', NULL),
(36, '567f15125802bfa1f2400950c858683b', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:56:19', '2019-05-20 01:56:19', NULL),
(37, 'f3061d95bd2da105c9a879d8b0b026c3', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:58:16', '2019-05-20 01:58:16', NULL),
(38, 'a7decd9a594b23fc928ab61f775a8b5d', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 01:58:55', '2019-05-20 01:58:55', NULL),
(39, '52271bec6a50e3be5bc064f2489c03dd', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 02:04:51', '2019-05-20 02:04:51', NULL),
(40, '06c5af4b5a0c33a9a672f8aac150ff78', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 02:06:01', '2019-05-20 02:06:01', NULL),
(41, '43daed00fe033d0ed4b41de0c067d24a', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 02:36:12', '2019-05-20 02:36:12', NULL),
(42, '07aec00622ae07ebbe574fefdc05d606', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 02:37:18', '2019-05-20 02:37:18', NULL),
(43, 'bd45f9aa210ce3273aafc2e9ff13c987', 3, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 02:41:55', '2019-05-20 02:41:55', NULL),
(44, 'd2637db1e0994042c79f0b301e8a0671', 3, '6:30am', '2:30pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 02:45:09', '2019-05-20 02:45:09', NULL),
(45, 'c72e92014ca73d8a432c575ce51f380d', 9, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-20 03:04:21', '2019-05-20 03:04:21', NULL),
(46, 'dadb3674a22dfac2ce097262474b50c3', 18, '6:30am', '5:00pm', '7:00am', '4:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-25 00:58:16', '2019-05-25 00:58:16', NULL),
(47, '30dbce915d665e61ec8e1b627854b166', 18, '6:30am', '2:30pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-25 01:00:35', '2019-05-25 01:00:35', NULL),
(48, '941d214ef65ac47ee502b1a8339cae63', 18, '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', '9:00am', '5:00pm', 1, '2019-05-25 01:01:55', '2019-05-25 01:01:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `business_profiles`
--

CREATE TABLE `business_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `industry_id` int(11) DEFAULT NULL,
  `profession_id` int(11) DEFAULT NULL,
  `country_with_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persons` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `present_number_address` int(11) NOT NULL DEFAULT '0',
  `manage_client_records` int(11) NOT NULL DEFAULT '0',
  `send_email_sms_promotions` int(11) NOT NULL DEFAULT '0',
  `send_email_sms_reminders` int(11) NOT NULL DEFAULT '0',
  `add_online_scheduling` int(11) NOT NULL DEFAULT '0',
  `invoices_estimates` int(11) NOT NULL DEFAULT '0',
  `accept_payments` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_profiles`
--

INSERT INTO `business_profiles` (`id`, `slug`, `user_id`, `industry_id`, `profession_id`, `country_with_code`, `phone_number`, `persons`, `web_url`, `address`, `present_number_address`, `manage_client_records`, `send_email_sms_promotions`, `send_email_sms_reminders`, `add_online_scheduling`, `invoices_estimates`, `accept_payments`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '95b996220977ad8381dd3483d63448c0', 3, 1, 1, 'country1 88', '88', '1', 'aass', 'asdf', 1, 1, 1, 0, 0, 0, 0, 1, '2019-05-17 00:14:27', '2019-05-17 00:14:27', NULL),
(2, 'aed1568a36f07053d87026e07fa76567', 6, 3, 3, 'country3 66', '66', '3', 'asdf', 'sdfsdaf', 0, 1, 0, 0, 0, 0, 0, 1, '2019-05-17 00:29:21', '2019-05-17 00:29:21', NULL),
(3, '683978e4b2e1ac8d9574c89764cfd1b3', 5, 1, 1, 'country1 88', '88', '1', 'asdfsadf', 'asdfsadf', 1, 1, 0, 0, 0, 0, 0, 1, '2019-05-17 02:31:33', '2019-05-17 02:31:33', NULL),
(4, 'debf525459437f46719895abb70c95b0', 4, 1, 1, 'country1 88', '88', '1', 'http://127.0.0.1:8000/dashboard/onboardings', 'sdfgsdf', 1, 1, 0, 0, 0, 0, 0, 1, '2019-05-17 03:02:12', '2019-05-17 03:02:12', NULL),
(5, 'bf5a10aff3efc45ed387f96d2bacecb7', 7, 1, 1, 'country1 88', '88', '1', 'asdfasdf', 'sadfsadf', 1, 1, 0, 0, 0, 0, 0, 1, '2019-05-17 03:49:49', '2019-05-17 03:49:49', NULL),
(6, '3380954f2fddf89931e51c8afa4ec9ea', 9, 1, 1, 'country1 88', '88232323', '1', NULL, NULL, 0, 1, 0, 0, 0, 0, 0, 1, '2019-05-20 03:02:05', '2019-05-20 03:02:05', NULL),
(7, '4d1f88e634606b81aa51782cd6e4989f', 13, 1, 1, 'country1 88', '88324324', '1', NULL, NULL, 0, 0, 0, 0, 0, 0, 1, 1, '2019-05-20 22:17:40', '2019-05-20 22:17:40', NULL),
(8, 'cfad4782e745e383d9f612a33646bb7f', 18, 1, 1, 'country1 88', '8834', '1', 'sdf', 'asdf', 1, 1, 1, 1, 1, 1, 1, 1, '2019-05-25 00:55:23', '2019-05-25 00:55:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `calendar_settings`
--

CREATE TABLE `calendar_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `week_start` int(10) UNSIGNED DEFAULT NULL,
  `increment_hour` int(10) UNSIGNED DEFAULT NULL,
  `increment_minute` int(10) UNSIGNED DEFAULT NULL,
  `weekly_off` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_hour_start` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_hour_end` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `local_time` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calendar_settings`
--

INSERT INTO `calendar_settings` (`id`, `business_id`, `created_at`, `updated_at`, `week_start`, `increment_hour`, `increment_minute`, `weekly_off`, `timezone`, `business_hour_start`, `business_hour_end`, `local_time`) VALUES
(1, 2, '2018-12-03 04:29:38', '2019-01-11 19:40:37', 6, 1, 10, 'a:1:{i:0;i:5;}', 'Asia/Dhaka', '08:00 AM', '1:30 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `business_id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 1, 'Premium Services', '5bdaab6e548aa', '2018-11-01 01:29:50', '2018-12-02 21:28:33'),
(3, 2, 'Web application', '5c04a8fb02634', '2018-12-02 21:54:35', '2018-12-02 21:54:35'),
(4, 2, 'Android application', '5c04a90bbe45b', '2018-12-02 21:54:51', '2018-12-02 21:54:51'),
(5, 2, 'IOT', '5c04a9128c52e', '2018-12-02 21:54:58', '2018-12-02 21:54:58'),
(6, 1, 'Super Services', '5c42fd4e7923d', '2019-01-18 23:34:54', '2019-01-18 23:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_infos`
--

CREATE TABLE `contact_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_phone` tinyint(1) DEFAULT '0',
  `display_address` tinyint(1) DEFAULT '0',
  `display_website_url` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_infos`
--

INSERT INTO `contact_infos` (`id`, `country_id`, `user_id`, `phone`, `address`, `website_url`, `display_phone`, `display_address`, `display_website_url`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '1736486064', 'Bokshibazar, Bogra', 'https://miyn.net/', 1, 1, NULL, '2018-10-16 04:04:31', '2019-04-23 18:12:15'),
(2, 1, 6, '1617308431', 'Bogura, Bangladesh', 'https://miyn.net/', 1, 1, 1, '2018-12-02 21:40:21', '2018-12-02 21:40:21');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dialing_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `dialing_code`, `created_at`, `updated_at`) VALUES
(1, 'BD', '+880', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(2, 'BE', '+32', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(3, 'BF', '+226', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(4, 'BG', '+359', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(5, 'BA', '+387', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(6, 'BB', '+1-246', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(7, 'WF', '+681', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(8, 'BL', '+590', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(9, 'BM', '+1-441', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(10, 'BN', '+673', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(11, 'BO', '+591', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(12, 'BH', '+973', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(13, 'BI', '+257', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(14, 'BJ', '+229', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(15, 'BT', '+975', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(16, 'JM', '+1-876', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(17, 'BW', '+267', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(18, 'WS', '+685', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(19, 'BQ', '+599', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(20, 'BR', '+55', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(21, 'BS', '+1-242', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(22, 'JE', '+44-1534', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(23, 'BY', '+375', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(24, 'BZ', '+501', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(25, 'RU', '+7', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(26, 'RW', '+250', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(27, 'RS', '+381', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(28, 'TL', '+670', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(29, 'RE', '+262', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(30, 'TM', '+993', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(31, 'TJ', '+992', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(32, 'RO', '+40', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(33, 'TK', '+690', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(34, 'GW', '+245', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(35, 'GU', '+1-671', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(36, 'GT', '+502', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(37, 'GR', '+30', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(38, 'GQ', '+240', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(39, 'GP', '+590', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(40, 'JP', '+81', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(41, 'GY', '+592', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(42, 'GG', '+44-1481', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(43, 'GF', '+594', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(44, 'GE', '+995', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(45, 'GD', '+1-473', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(46, 'GB', '+44', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(47, 'GA', '+241', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(48, 'SV', '+503', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(49, 'GN', '+224', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(50, 'GM', '+220', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(51, 'GL', '+299', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(52, 'GI', '+350', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(53, 'GH', '+233', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(54, 'OM', '+968', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(55, 'TN', '+216', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(56, 'JO', '+962', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(57, 'HR', '+385', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(58, 'HT', '+509', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(59, 'HU', '+36', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(60, 'HK', '+852', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(61, 'HN', '+504', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(62, 'HM', '+', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(63, 'VE', '+58', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(64, 'PR', '+1-787', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(65, 'PS', '+970', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(66, 'PW', '+680', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(67, 'PT', '+351', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(68, 'SJ', '+47', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(69, 'PY', '+595', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(70, 'IQ', '+964', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(71, 'PA', '+507', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(72, 'PF', '+689', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(73, 'PG', '+675', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(74, 'PE', '+51', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(75, 'PK', '+92', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(76, 'PH', '+63', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(77, 'PN', '+870', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(78, 'PL', '+48', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(79, 'PM', '+508', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(80, 'ZM', '+260', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(81, 'EH', '+212', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(82, 'EE', '+372', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(83, 'EG', '+20', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(84, 'ZA', '+27', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(85, 'EC', '+593', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(86, 'IT', '+39', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(87, 'VN', '+84', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(88, 'SB', '+677', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(89, 'ET', '+251', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(90, 'SO', '+252', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(91, 'ZW', '+263', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(92, 'SA', '+966', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(93, 'ES', '+34', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(94, 'ER', '+291', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(95, 'ME', '+382', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(96, 'MD', '+373', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(97, 'MG', '+261', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(98, 'MF', '+590', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(99, 'MA', '+212', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(100, 'MC', '+377', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(101, 'UZ', '+998', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(102, 'MM', '+95', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(103, 'ML', '+223', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(104, 'MO', '+853', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(105, 'MN', '+976', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(106, 'MH', '+692', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(107, 'MK', '+389', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(108, 'MU', '+230', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(109, 'MT', '+356', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(110, 'MW', '+265', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(111, 'MV', '+960', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(112, 'MQ', '+596', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(113, 'MP', '+1-670', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(114, 'MS', '+1-664', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(115, 'MR', '+222', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(116, 'IM', '+44-1624', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(117, 'UG', '+256', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(118, 'TZ', '+255', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(119, 'MY', '+60', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(120, 'MX', '+52', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(121, 'IL', '+972', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(122, 'FR', '+33', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(123, 'IO', '+246', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(124, 'SH', '+290', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(125, 'FI', '+358', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(126, 'FJ', '+679', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(127, 'FK', '+500', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(128, 'FM', '+691', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(129, 'FO', '+298', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(130, 'NI', '+505', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(131, 'NL', '+31', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(132, 'NO', '+47', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(133, 'NA', '+264', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(134, 'VU', '+678', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(135, 'NC', '+687', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(136, 'NE', '+227', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(137, 'NF', '+672', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(138, 'NG', '+234', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(139, 'NZ', '+64', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(140, 'NP', '+977', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(141, 'NR', '+674', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(142, 'NU', '+683', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(143, 'CK', '+682', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(144, 'CI', '+225', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(145, 'CH', '+41', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(146, 'CO', '+57', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(147, 'CN', '+86', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(148, 'CM', '+237', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(149, 'CL', '+56', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(150, 'CC', '+61', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(151, 'CA', '+1', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(152, 'CG', '+242', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(153, 'CF', '+236', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(154, 'CD', '+243', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(155, 'CZ', '+420', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(156, 'CY', '+357', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(157, 'CX', '+61', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(158, 'CR', '+506', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(159, 'CW', '+599', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(160, 'CV', '+238', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(161, 'CU', '+53', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(162, 'SZ', '+268', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(163, 'SY', '+963', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(164, 'SX', '+599', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(165, 'KG', '+996', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(166, 'KE', '+254', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(167, 'SS', '+211', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(168, 'SR', '+597', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(169, 'KI', '+686', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(170, 'KH', '+855', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(171, 'KN', '+1-869', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(172, 'KM', '+269', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(173, 'ST', '+239', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(174, 'SK', '+421', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(175, 'KR', '+82', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(176, 'SI', '+386', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(177, 'KP', '+850', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(178, 'KW', '+965', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(179, 'SN', '+221', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(180, 'SM', '+378', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(181, 'SL', '+232', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(182, 'SC', '+248', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(183, 'KZ', '+7', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(184, 'KY', '+1-345', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(185, 'SG', '+65', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(186, 'SE', '+46', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(187, 'SD', '+249', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(188, 'DO', '+1-809', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(189, 'DM', '+1-767', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(190, 'DJ', '+253', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(191, 'DK', '+45', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(192, 'VG', '+1-284', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(193, 'DE', '+49', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(194, 'YE', '+967', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(195, 'DZ', '+213', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(196, 'US', '+1', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(197, 'UY', '+598', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(198, 'YT', '+262', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(199, 'UM', '+1', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(200, 'LB', '+961', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(201, 'LC', '+1-758', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(202, 'LA', '+856', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(203, 'TV', '+688', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(204, 'TW', '+886', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(205, 'TT', '+1-868', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(206, 'TR', '+90', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(207, 'LK', '+94', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(208, 'LI', '+423', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(209, 'LV', '+371', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(210, 'TO', '+676', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(211, 'LT', '+370', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(212, 'LU', '+352', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(213, 'LR', '+231', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(214, 'LS', '+266', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(215, 'TH', '+66', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(216, 'TG', '+228', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(217, 'TD', '+235', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(218, 'TC', '+1-649', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(219, 'LY', '+218', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(220, 'VA', '+379', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(221, 'VC', '+1-784', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(222, 'AE', '+971', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(223, 'AD', '+376', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(224, 'AG', '+1-268', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(225, 'AF', '+93', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(226, 'AI', '+1-264', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(227, 'VI', '+1-340', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(228, 'IS', '+354', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(229, 'IR', '+98', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(230, 'AM', '+374', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(231, 'AL', '+355', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(232, 'AO', '+244', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(233, 'AS', '+1-684', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(234, 'AR', '+54', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(235, 'AU', '+61', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(236, 'AT', '+43', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(237, 'AW', '+297', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(238, 'IN', '+91', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(239, 'AX', '+358-18', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(240, 'AZ', '+994', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(241, 'IE', '+353', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(242, 'ID', '+62', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(243, 'UA', '+380', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(244, 'QA', '+974', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(245, 'MZ', '+258', '2018-10-15 22:30:03', '2018-10-15 22:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Web & Marketing', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(2, 'Financial & Legal', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(3, 'Healthcare', '2018-10-15 22:30:03', '2018-10-15 22:30:03');

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
(3, '2017_10_09_085318_create_industries_table', 1),
(4, '2017_10_10_073752_create_professions_table', 1),
(5, '2017_10_11_110157_create_countries_table', 1),
(6, '2018_10_04_053727_create_categories_table', 1),
(7, '2018_10_04_053739_create_services_table', 1),
(8, '2018_10_04_053807_create_service_locations_table', 1),
(9, '2018_10_04_063656_create_businesses_table', 1),
(10, '2018_10_04_063706_create_contact_infos_table', 1),
(11, '2018_10_04_063740_create_staff_assignments_table', 1),
(12, '2018_10_04_063806_create_billing_infos_table', 1),
(13, '2018_10_04_063844_create_email_settings_table', 1),
(14, '2018_10_04_063855_create_sms_settings_table', 1),
(15, '2018_10_04_063912_create_booking_options_table', 1),
(16, '2018_10_04_063919_create_booking_policies_table', 1),
(17, '2018_10_04_070844_create_service_availabilities_table', 1),
(18, '2018_10_04_070853_create_staff_availabilities_table', 1),
(19, '2018_10_04_071248_create_appointments_table', 1),
(20, '2018_10_04_071321_create_calendar_settings_table', 1),
(21, '2018_10_04_071330_create_payment_settings_table', 1),
(22, '2018_10_06_040326_create_permission_tables', 1),
(23, '2018_12_01_065920_create_appointments_table', 0),
(24, '2018_12_01_065920_create_billing_infos_table', 0),
(25, '2018_12_01_065920_create_booking_options_table', 0),
(26, '2018_12_01_065920_create_booking_policies_table', 0),
(27, '2018_12_01_065920_create_businesses_table', 0),
(28, '2018_12_01_065920_create_calendar_settings_table', 0),
(29, '2018_12_01_065920_create_categories_table', 0),
(30, '2018_12_01_065920_create_contact_infos_table', 0),
(31, '2018_12_01_065920_create_countries_table', 0),
(32, '2018_12_01_065920_create_email_settings_table', 0),
(33, '2018_12_01_065920_create_industries_table', 0),
(34, '2018_12_01_065920_create_model_has_permissions_table', 0),
(35, '2018_12_01_065920_create_model_has_roles_table', 0),
(36, '2018_12_01_065920_create_password_resets_table', 0),
(37, '2018_12_01_065920_create_payment_settings_table', 0),
(38, '2018_12_01_065920_create_permissions_table', 0),
(39, '2018_12_01_065920_create_professions_table', 0),
(40, '2018_12_01_065920_create_role_has_permissions_table', 0),
(41, '2018_12_01_065920_create_roles_table', 0),
(42, '2018_12_01_065920_create_service_availabilities_table', 0),
(43, '2018_12_01_065920_create_service_locations_table', 0),
(44, '2018_12_01_065920_create_services_table', 0),
(45, '2018_12_01_065920_create_sms_settings_table', 0),
(46, '2018_12_01_065920_create_staff_assignments_table', 0),
(47, '2018_12_01_065920_create_staff_availabilities_table', 0),
(48, '2018_12_01_065920_create_users_table', 0);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 6),
(3, 'App\\Models\\User', 7),
(1, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(3, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17);

-- --------------------------------------------------------

--
-- Table structure for table `onboard_services`
--

CREATE TABLE `onboard_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_price` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onboard_services`
--

INSERT INTO `onboard_services` (`id`, `slug`, `user_id`, `service_name`, `service_duration`, `service_price`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '8342e3625fc810f90452a74ef5fd499c', 3, 'asf', NULL, 0, 1, '2019-05-20 01:14:41', NULL, NULL),
(2, '9518a77bef9000a5e5539b8c9e2dce60', 3, '30 minutes', NULL, 0, 1, '2019-05-20 01:14:41', NULL, NULL),
(3, '64bcfe8d0ffefa0644992afa9b417f62', 3, '43', NULL, 0, 1, '2019-05-20 01:14:41', NULL, NULL),
(4, '65df79375aba04d16baaeb5338b52f8f', 3, 'awedf', NULL, 0, 1, '2019-05-20 01:14:41', NULL, NULL),
(5, '2709edbd9026829b1eb1bcb206cc2a4b', 3, '45 minutes', NULL, 0, 1, '2019-05-20 01:14:41', NULL, NULL),
(6, '12c72e6ac5f04589c043b2a5191fb9a4', 3, '44', NULL, 0, 1, '2019-05-20 01:14:41', NULL, NULL),
(7, '787e443e9c7dae6c29694a74e9893c4a', 3, 'aa', NULL, 0, 1, '2019-05-20 01:16:38', NULL, NULL),
(8, 'a2356cded9454ea0d140a1c17b560a07', 3, '15 minutes', NULL, 0, 1, '2019-05-20 01:16:38', NULL, NULL),
(9, '50dbf3825c5015e319eebc54bda56745', 3, '34', NULL, 0, 1, '2019-05-20 01:16:38', NULL, NULL),
(10, '9599fabde2e147e0d5f38906f005d213', 3, 'aa', NULL, 0, 1, '2019-05-20 01:18:13', NULL, NULL),
(11, '9599fabde2e147e0d5f38906f005d213', 3, 'aa', NULL, 0, 1, '2019-05-20 01:18:13', NULL, NULL),
(12, '72e93b07a4669d53707f4b589d2ee198', 3, '15 minutes', NULL, 0, 1, '2019-05-20 01:18:13', NULL, NULL),
(13, '9599fabde2e147e0d5f38906f005d213', 3, 'aa', NULL, 0, 1, '2019-05-20 01:18:13', NULL, NULL),
(14, '72e93b07a4669d53707f4b589d2ee198', 3, '15 minutes', NULL, 0, 1, '2019-05-20 01:18:13', NULL, NULL),
(15, 'a372d368dcf3e1fbee176b913f1ccd6b', 3, '34', NULL, 0, 1, '2019-05-20 01:18:13', NULL, NULL),
(16, '54f3825b4fd88c483b415bde1ddffa66', 3, 'aa', NULL, 0, 1, '2019-05-20 01:18:41', NULL, NULL),
(17, '16a86d3b81695d80a48972ba8201f0d6', 3, '15 minutes', NULL, 0, 1, '2019-05-20 01:18:41', NULL, NULL),
(18, '84377b6ee1b1616f7d554947c6a9a313', 3, '34', NULL, 0, 1, '2019-05-20 01:18:41', NULL, NULL),
(19, '1430568b4768c03d5add1cdbc1e1f881', 3, 'we', 'we', 9, 1, NULL, NULL, NULL),
(20, '7af9da6b6cbf916fce0636b044c819b2', 3, '30 minutes', '30 minutes', 9, 1, NULL, NULL, NULL),
(21, 'c1e439a02cae0061807db7a3c2ad1d45', 3, '4343', '4343', 9, 1, NULL, NULL, NULL),
(22, '20446c47164e4d0616ede6d358bb3794', 3, 'we', 'we', 9, 1, NULL, NULL, NULL),
(23, 'dadd89890295f087b588b9cc92120838', 3, '30 minutes', '30 minutes', 9, 1, NULL, NULL, NULL),
(24, '3118597bb31a18495f67f2382b72c1c1', 3, '4343', '4343', 9, 1, NULL, NULL, NULL),
(25, 'f92d0e18225430fdc8dbfba0c0a2ffd1', 3, 'we', 'service_name', 9, 1, NULL, NULL, NULL),
(26, '42f338f349cca677215da06b36be1250', 3, '30 minutes', 'service_duration', 9, 1, NULL, NULL, NULL),
(27, 'b5c72be03f8041915393212d0a70425d', 3, '4343', 'service_price', 9, 1, NULL, NULL, NULL),
(28, '808e44dbee3abcd40d459d132a0be75b', 3, 'sadf', 'sadf', 9, 1, NULL, NULL, NULL),
(29, 'c120fc232cd71a367944ca89657e53e6', 3, '15 minutes', '15 minutes', 9, 1, NULL, NULL, NULL),
(30, '2b5194e4ae4273eca375c1a74122e8ad', 3, '3443', '3443', 9, 1, NULL, NULL, NULL),
(31, 'aa6fe185395a9c00b52a91f65bde3f58', 3, 'er', '15 minutes', 3443, 1, NULL, NULL, NULL),
(32, '9fa99c4251f9abdcdb1aea58b9c6d7d5', 3, 'er', '15 minutes', 3443, 1, NULL, NULL, NULL),
(33, '3f300d6ce292d7741c7eec453e273da2', 3, 'wewe', '30 minutes', 4343, 1, NULL, NULL, NULL),
(34, '2d17c77be3b5f95379d43e6e8c1e3929', 3, 'asdf', '1 hour', 45, 1, NULL, NULL, NULL),
(35, 'cc015168634f9a6ed3096ee6fc20ce22', 3, 'asdf', '30 minutes', 3443, 1, NULL, NULL, NULL),
(36, '70e54fad2129915a89edaa9f230b20b8', 3, 'a', '15 minutes', 3, 1, NULL, NULL, NULL),
(37, 'aaaafba7fe15cd41d682ceced9577107', 3, 'b', '30 minutes', 4, 1, NULL, NULL, NULL),
(38, '979a661b0e3731b8ccc948b45e11e8ad', 9, 'asdf', '30 minutes', 44334, 1, NULL, NULL, NULL),
(39, 'c561cf5a39999f02ce6fb1ede936be7a', 9, 'asdf', '45 minutes', 456, 1, NULL, NULL, NULL),
(40, '79e1d49c58803b5e9660b5de9957368f', 18, 'adf', '15 minutes', NULL, 1, NULL, NULL, NULL),
(41, 'f44f6ebfe7c7554356b2e921b5894642', 18, 'er', '30 minutes', 34, 1, NULL, NULL, NULL),
(42, 'e1e4f4539ef8299d95788bc708158b35', 18, NULL, NULL, NULL, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `onboard_staff`
--

CREATE TABLE `onboard_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `onboard_staff_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onboard_staff_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `onboard_staff`
--

INSERT INTO `onboard_staff` (`id`, `slug`, `user_id`, `onboard_staff_name`, `onboard_staff_email`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '45aeb2259163d7d2cacec8924e0d5152', 3, 'name2', 'name2@gmail.com', 1, '2019-05-19 22:58:55', '2019-05-19 22:58:55', NULL),
(2, '8e3d391458cfbee5a759697081e21f82', 3, 'name3', 'name3@gmail.com', 1, '2019-05-19 23:00:08', '2019-05-19 23:00:08', NULL),
(3, '41f27af1ea971ae0fcc476b7c4b08a6b', 3, 's', 'f', 1, NULL, NULL, NULL),
(4, '2e4158899dc84f1bc615c6a08098e5f0', 3, 'a', 'd', 1, NULL, NULL, NULL),
(5, '455888edbfa993ed8759dd16fd3267f5', 3, 'test1', 'test1@gmail.com', 1, NULL, NULL, NULL),
(6, '0e55b1fb51454a1ba28493e3f22b9ab7', 3, 'test2', 'test2@gmail.com', 1, NULL, NULL, NULL),
(7, 'f57211ad1a1ad98d88c42851bdd4643e', 3, 'test3', 'test3@gmail.com', 1, NULL, NULL, NULL),
(8, '2da133550611cfb17c2f533bfa3a2ccd', 3, 'test4', 'test4@gmail.com', 1, '2019-05-19 23:26:26', NULL, NULL),
(9, 'c039532e34a03c3478a47e70215a951d', 3, 'test5', 'test5@gmail.com', 1, '2019-05-19 23:26:26', NULL, NULL),
(10, '82c4dbcf66607429b1920b963570ac9c', 3, 'we', 'we@sd', 1, '2019-05-20 00:00:08', NULL, NULL),
(11, 'c06356d0872bed6d700833d378fb2fcc', 3, 'as', 'as@asd', 1, '2019-05-20 00:00:08', NULL, NULL),
(12, '8abb69fffdc89321f19f401fc44a3224', 3, 'we', 'we@sd', 1, '2019-05-20 00:00:32', NULL, NULL),
(13, 'f8258c7dbcd01a138e96c72e9df5421f', 3, 'as', 'as@asd', 1, '2019-05-20 00:00:32', NULL, NULL),
(14, '472ab12eeccdd54286883a83f5cc5918', 3, 'a', 's', 1, '2019-05-20 00:01:44', NULL, NULL),
(15, '29a811cd0e2ccbd20809be07851da7f5', 3, 'a', 's', 1, '2019-05-20 00:03:14', NULL, NULL),
(16, 'a835f2091c3ec7b7085a9069868ff16c', 3, 'ew', 'ewew', 1, '2019-05-20 00:03:51', NULL, NULL),
(17, 'df7dcebb064be4635f34369919382eb7', 3, 'we', 'asd', 1, '2019-05-20 00:08:14', NULL, NULL),
(18, '4c4492b782fdf010ffeb6f007ab10a98', 3, 'asdf', 'asdf', 1, '2019-05-20 00:08:14', NULL, NULL),
(19, 'bb7cf1401e17d711287ca10117d605c1', 3, 'we', 'asd', 1, '2019-05-20 00:10:29', NULL, NULL),
(20, 'a8779a26152ea7278ad6d01ff7d9356b', 3, 'asdf', 'asdf', 1, '2019-05-20 00:10:29', NULL, NULL),
(21, 'cc450138c13a479d232336075e7f4ced', 3, 'we', 'asd', 1, '2019-05-20 00:11:12', NULL, NULL),
(22, '27852a1584bcaa13eb601ce8dd9a32b4', 3, 'asdf', 'asdf', 1, '2019-05-20 00:11:12', NULL, NULL),
(23, 'ae7dc1b144641712e086e2d052b0de11', 3, 'we', 'asd', 1, '2019-05-20 00:11:34', NULL, NULL),
(24, '2ac86899c59f2c45cc0380bddeb5a598', 3, 'asdf', 'asdf', 1, '2019-05-20 00:11:34', NULL, NULL),
(25, 'f04a29e15e58d783036f3f8da332134c', 3, 'we', 'asd', 1, '2019-05-20 00:13:16', NULL, NULL),
(26, '5aa77d14db8452c6f15162e2784cdc8c', 3, 'asdf', 'asdf', 1, '2019-05-20 00:13:16', NULL, NULL),
(27, '076e04d1295fc8477f4f3f9a47f69e3d', 3, 'sd', 'sd', 1, '2019-05-20 00:22:04', NULL, NULL),
(28, 'e2d7cf0d3af5b9648fe1fc374efafee9', 3, 'sd', 'sd', 1, '2019-05-20 00:22:51', NULL, NULL),
(29, '110ae2eb117866051444fbd2ca9db39e', 3, 'sd', 'sd', 1, '2019-05-20 00:23:08', NULL, NULL),
(30, '1498bf6257ab01b495a2587ad6ac6fbf', 3, 'sd', 'sdf', 1, '2019-05-20 01:08:21', NULL, NULL),
(31, 'd9fcd8493461c7b573f73fcad3824a02', 3, 'asdf', 'sdds', 1, '2019-05-20 01:08:21', NULL, NULL),
(32, '4fc3e85ea9e4cd7d34becacc7b1c9735', 3, 'sd', 'sdf', 1, '2019-05-20 01:12:09', NULL, NULL),
(33, '9eece9fffd86eddfb77344aeb51fa568', 3, 'asdf', 'sdds', 1, '2019-05-20 01:12:09', NULL, NULL),
(34, 'dc0ce4e18c1559c936f55fc46719e5ec', 3, 'sd', 'sdf', 1, '2019-05-20 01:14:41', NULL, NULL),
(35, '0181ce22b3a2e605d8501efdf271453b', 3, 'asdf', 'sdds', 1, '2019-05-20 01:14:41', NULL, NULL),
(36, '63a3f0b692f773407ecf33bd9b85d725', 3, 'rere', 'asdf', 1, '2019-05-20 01:16:38', NULL, NULL),
(37, '27c379931d8266d27e007cc0a5e61cc3', 3, 'rere', 'asdf', 1, '2019-05-20 01:18:13', NULL, NULL),
(38, '2a822f491633281c17582dad324f82be', 3, 'rere', 'asdf', 1, '2019-05-20 01:18:41', NULL, NULL),
(39, '2a96b2a0d342b410f78c641adbfa05ab', 3, 'rere', 'asdf', 1, '2019-05-20 01:21:39', NULL, NULL),
(40, 'd1d25522bc1951fb3636f28d3d72cad7', 3, 'rere', 'asdf', 1, '2019-05-20 01:48:22', NULL, NULL),
(41, '3474b1c288b7aef2867d0dfb910edd1c', 3, 'ewe', 'weewew', 1, '2019-05-20 01:48:50', NULL, NULL),
(42, '83e05380cc56f98662f399aba22b1c9e', 3, 'ewe', 'weewew', 1, '2019-05-20 01:49:46', NULL, NULL),
(43, 'd5fe6f68418984c502a1b5953b8fb82b', 3, 'sd', 'sdsd', 1, '2019-05-20 01:50:36', NULL, NULL),
(44, 'ad4be25712cb3c3850df6e8da75de61e', 3, 'ewwe', 'ssas', 1, '2019-05-20 01:52:39', NULL, NULL),
(45, 'ee39111ec7132511ad6e35de06d1cfdd', 3, 'ewwe', 'ssas', 1, '2019-05-20 01:56:19', NULL, NULL),
(46, 'df3230bd38f83a186d77e3c4aa7f5ae2', 3, 'ewwe', 'ssas', 1, '2019-05-20 01:58:16', NULL, NULL),
(47, 'ef5bad20ee6bb39606fe58abf366a4a9', 3, 'ewwe', 'ssas', 1, '2019-05-20 01:58:55', NULL, NULL),
(48, '384644929f8350011608604830def282', 3, 'weew', 'asdf', 1, '2019-05-20 02:04:51', NULL, NULL),
(49, '3639e54f11605ca86130a186058ac6e3', 3, '', NULL, 1, '2019-05-20 02:06:01', NULL, NULL),
(50, '05107e7435f77009486c16ec9fd06a3d', 3, 'sd', 'ewe', 1, '2019-05-20 02:36:12', NULL, NULL),
(51, 'edd983121963456c3b4d5de30eb2b69e', 3, 'sd', 'ewe', 1, '2019-05-20 02:37:18', NULL, NULL),
(52, '109a99e9a9fa520e24cba5623908f9d6', 3, 'ewew', 'ewew', 1, '2019-05-20 02:41:55', NULL, NULL),
(53, '956adfce35b202589f43ddc66d3293e2', 3, '', NULL, 1, '2019-05-20 02:41:55', NULL, NULL),
(54, '8d9725a3075c74c4775489499ae287a1', 3, 'a', 'b', 1, '2019-05-20 02:45:09', NULL, NULL),
(55, '2bc9a2352a739513b27f31ee18c49396', 3, 'c', 'd', 1, '2019-05-20 02:45:09', NULL, NULL),
(56, '95b7f370d7714150cc9ca44281a8d11c', 9, 'weew', 'weew', 1, '2019-05-20 03:04:21', NULL, NULL),
(57, '5b57fa4cff8142bc40c84b34126b47d1', 18, 'aaa', 'asas', 1, '2019-05-25 00:58:16', NULL, NULL),
(58, '7ea534dfa13a762dadd8a69d75d0cb7a', 18, 'adad', 'aadd', 1, '2019-05-25 00:58:16', NULL, NULL),
(59, 'cb5f953b746aa016223905ee1fa6a138', 18, 'we', 'we', 1, '2019-05-25 01:00:35', NULL, NULL),
(60, 'c4222f2151981ca43e4948f4b525d1f7', 18, 'eew', 'we', 1, '2019-05-25 01:00:35', NULL, NULL),
(61, 'b284de16c6387ee30faf3485dc5f1ec0', 18, 'asdf', NULL, 1, '2019-05-25 01:01:55', NULL, NULL),
(62, '8ea86741836542f8581379dfc7a133a6', 18, 'sadf', 'asdf', 1, '2019-05-25 01:01:55', NULL, NULL);

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
-- Table structure for table `payment_settings`
--

CREATE TABLE `payment_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paypal_subscriptions`
--

CREATE TABLE `paypal_subscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `transaction_subject` text COLLATE utf8mb4_unicode_ci,
  `txn_type` text COLLATE utf8mb4_unicode_ci,
  `type` text COLLATE utf8mb4_unicode_ci,
  `subscr_id` text COLLATE utf8mb4_unicode_ci,
  `item_name` text COLLATE utf8mb4_unicode_ci,
  `txn_id` text COLLATE utf8mb4_unicode_ci,
  `item_number` text COLLATE utf8mb4_unicode_ci,
  `payment_status` text COLLATE utf8mb4_unicode_ci,
  `payment_fee` text COLLATE utf8mb4_unicode_ci,
  `mc_fee` double(8,2) DEFAULT NULL,
  `mc_gross` double(8,2) DEFAULT NULL,
  `btn_id` int(11) DEFAULT NULL,
  `payment_date` text COLLATE utf8mb4_unicode_ci,
  `mc_currency` text COLLATE utf8mb4_unicode_ci,
  `payer_id` text COLLATE utf8mb4_unicode_ci,
  `first_name` text COLLATE utf8mb4_unicode_ci,
  `last_name` text COLLATE utf8mb4_unicode_ci,
  `payer_email` text COLLATE utf8mb4_unicode_ci,
  `receiver_id` text COLLATE utf8mb4_unicode_ci,
  `receiver_email` text COLLATE utf8mb4_unicode_ci,
  `business` text COLLATE utf8mb4_unicode_ci,
  `contact_phone` text COLLATE utf8mb4_unicode_ci,
  `residence_country` text COLLATE utf8mb4_unicode_ci,
  `payment_gross` text COLLATE utf8mb4_unicode_ci,
  `payment_type` text COLLATE utf8mb4_unicode_ci,
  `protection_eligibility` text COLLATE utf8mb4_unicode_ci,
  `verify_sign` text COLLATE utf8mb4_unicode_ci,
  `payer_status` text COLLATE utf8mb4_unicode_ci,
  `test_ipn` text COLLATE utf8mb4_unicode_ci,
  `charset` text COLLATE utf8mb4_unicode_ci,
  `notify_version` text COLLATE utf8mb4_unicode_ci,
  `ipn_track_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypal_subscriptions`
--

INSERT INTO `paypal_subscriptions` (`id`, `user_id`, `package_id`, `transaction_subject`, `txn_type`, `type`, `subscr_id`, `item_name`, `txn_id`, `item_number`, `payment_status`, `payment_fee`, `mc_fee`, `mc_gross`, `btn_id`, `payment_date`, `mc_currency`, `payer_id`, `first_name`, `last_name`, `payer_email`, `receiver_id`, `receiver_email`, `business`, `contact_phone`, `residence_country`, `payment_gross`, `payment_type`, `protection_eligibility`, `verify_sign`, `payer_status`, `test_ipn`, `charset`, `notify_version`, `ipn_track_id`, `created_at`, `updated_at`) VALUES
(15, 12, NULL, 'Basic Package', 'subscr_payment', 'subscription', 'I-XNHG6YY70NFX', 'Basic Package', '6NP9751063548041M', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '19:33:11 Dec 11, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', '036-523-8296', 'AU', NULL, 'instant', 'Eligible', 'A1Nay5pOodHNgZuhY.y4v.Fi6z0BAGPSd7bp0a0kCfw8IpElc6yVqja7', 'verified', '1', 'windows-1252', '3.9', '92040363500ef', '2018-12-11 16:37:05', '2018-12-11 16:37:05'),
(16, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2P0597238S4097036', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '01:08:16 Dec 12, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', '036-523-8296', 'AU', NULL, 'instant', 'Eligible', 'A9q33sUt.ixnFNZ.aBeeN0xayU2hA78uxhpE5BJO58dGa109dtzCgPi4', 'verified', '1', 'windows-1252', '3.9', '58346ad9c1f33', '2018-12-11 22:11:06', '2018-12-11 22:11:06'),
(17, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '8U002635E7700373R', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:30:42 Dec 13, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Af0wPJcHCLssKahnZoL3MMWXdhaEAkyjkcoi2biBT5x3L8fy2N79jZjj', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-13 05:31:10', '2018-12-13 05:31:10'),
(18, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '4JL605370X894323D', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:36:11 Dec 14, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A2IIkvl7SnmpoaFJ-CPJ2hYqF27CAEDt95WjpdKqWbTqL0uNUdiwfrrs', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-14 01:37:10', '2018-12-14 01:37:10'),
(19, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '72W54901F83061915', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:33:47 Dec 15, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A-z4EexJzYebDzdfXmanRJLeFcNDAu44dAGHmdoy28SguPqpls4Cc5Rr', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-15 01:34:08', '2018-12-15 01:34:08'),
(20, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '90M98711651204150', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:23:20 Dec 16, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A.pHE6kQt3KL-ifbh197SAudny1AAW5g8FqOvkiB7coiUYi.a9z7link', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-16 05:24:11', '2018-12-16 05:24:11'),
(21, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2JR62422X8692481P', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:41:47 Dec 18, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Agex0DUfI-XGWoaqh.2UMTJKeVZHAIkssYR50wMMujTc1I4iFwb7y4pN', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-18 05:42:08', '2018-12-18 05:42:08'),
(22, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '02K98927DF816344D', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:00:32 Dec 19, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ABNyKfSQPCVGhyivickm67aa2RqxAWoM5JN.T-ZBFc-EvC-a8FmVmXCO', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-19 05:00:56', '2018-12-19 05:00:56'),
(23, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '05E522954F8418817', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:58:10 Dec 20, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AwxPW2ytsIcGqA2BCFyBuPeBrrfwABekE2utY29Afy8wRXvMLoA65FMv', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-20 00:58:30', '2018-12-20 00:58:30'),
(24, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '39B91686F8812113C', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:03:00 Dec 21, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AynlJ2zsmflH.74VEfIBZZJsEArxAGtGgmF3VsIRBF43lIeMKr.uwp0Y', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-21 05:04:05', '2018-12-21 05:04:05'),
(25, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '26W11642L5300574G', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '10:47:16 Dec 22, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AnlkDhBYwCRZ4fplPqXSdkLuOQdmApw61Ym5e4jGQO8K7UIzzN1SCH70', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-22 07:48:06', '2018-12-22 07:48:06'),
(26, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '40117741G7926174V', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:58:50 Dec 23, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AKwVSAdKHfS2rPeRpMTEQpMZppwVAK0KX4748Gu0Ef67G2MMehsp24tN', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-23 00:00:07', '2018-12-23 00:00:07'),
(27, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7TG31152TT858641E', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '10:02:16 Dec 24, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AZuRXZRkuk7frhfirfxxTkj0BDJGAllVnQZbH0HVUYgXUc0bBVmrJNYN', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-24 07:02:40', '2018-12-24 07:02:40'),
(28, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7MF66738JX0444148', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:09:52 Dec 25, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AMXv0WG6E0oyHPtur6YqWGuOvwuMA.HVsDqe7JcwK9FwegIeRvyvt7hC', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-25 03:11:06', '2018-12-25 03:11:06'),
(29, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '99M714947A440581C', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:34:37 Dec 26, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AVTK0ZqBmBe4Ul3G.WJX.5KX5LeSAagLN657Rzj8vH50XzdYRVA3IE3Z', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-26 04:35:09', '2018-12-26 04:35:09'),
(30, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1ND88069GU308673R', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:25:54 Dec 27, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AJRV2DMR7mylHw1B8vR.TIGd8pbuAuKtYCMJA6TS5cA30zRftBXSrWAG', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-27 03:26:16', '2018-12-27 03:26:16'),
(31, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '9NB010185E3730156', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:48:21 Dec 28, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AjyhtKnl4WR9WjPMOHEiYVWCFxyzAiR6PshMAs-TNOjbZfFqUxFE-5fs', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-28 05:49:06', '2018-12-28 05:49:06'),
(32, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '98703633VK8171122', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:45:23 Dec 29, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A5FdWnj8RRqeGvuq3QjAa1GsBXEkA8X2OyyZDlki50R1ogV7ylvC5gUI', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-29 03:45:45', '2018-12-29 03:45:45'),
(33, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1BL58576SM882650Y', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:56:39 Dec 30, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AHVhnjrkRMXqHIKgvriean2lVvV3Ak4exoxvIxd1oDh.C4nZVM5BL4sV', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-29 23:57:02', '2018-12-29 23:57:02'),
(34, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1XC2515304025205N', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '09:06:55 Dec 31, 2018 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A.goQSt0j5GwaeC9B2UVbOPS0qcmA-cPKoXJJjcTfeDUrKhV2v9luNPu', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2018-12-31 06:08:05', '2018-12-31 06:08:05'),
(35, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7WV51679CA1656209', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:00:28 Jan 01, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AMxgdctOZK4r5RTtT5S6ip5K8tUvAE3xGwaYOYB-sW1vF7wLMAKuCZ-o', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-01 00:01:05', '2019-01-01 00:01:05'),
(36, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '14X86417NM383262K', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:32:10 Jan 02, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AEUblVGApeDlc5MS9x80Bi2Wu510AqwdeqdF8jkpXlxR2TIoG-.HSrSB', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-02 00:33:05', '2019-01-02 00:33:05'),
(37, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '97G10714P6210094D', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:49:10 Jan 03, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AQq9S7Ok-pw8oyfqd1s.l.8B2TrvAbuzVh-qtPtx7nT3oic64kiF.GcF', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-03 04:49:31', '2019-01-03 04:49:31'),
(38, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '32841500P94757916', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:10:54 Jan 04, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AH5KWvT4dFohK1fAIzgYkdnvlFH2AKkgaKohFd.Rgd8xmvtMSMYxLp44', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-04 04:12:06', '2019-01-04 04:12:06'),
(39, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '44014012U42645131', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:40:17 Jan 05, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Af1bo7kjUY-BUO3wz9VJnokdnPNYAdIIzXGO0evLd0U4MKHazAiOPLw2', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-05 04:41:08', '2019-01-05 04:41:08'),
(40, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '60P138562S841841V', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '11:06:13 Jan 06, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Auf.1K9ZUqgYUBGYRQ6OAIhONBIAAnzCmjluzZyzW7yeYiUEeWs9Ulj0', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-06 08:07:05', '2019-01-06 08:07:05'),
(41, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '0TJ093860U846105X', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:17:17 Jan 07, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AK3xJLZtUN1pP1CmulMf1V0ugf9HAbvphVEkGYKpz0ktAP2UNDim8vzn', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-07 04:18:08', '2019-01-07 04:18:08'),
(42, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '93M67155EH537253S', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:12:46 Jan 08, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ADeWYfUAnar02.lyDQ-2iQlOtBHDAuTLvBFJa0ucK89JlV5j.Pj0g97t', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-08 03:13:08', '2019-01-08 03:13:08'),
(43, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '8SJ59890AV517362T', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:43:59 Jan 09, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AtmqXvwwAHUoyjC3BckwsSWU31W0AgYQtMHGdexR5sCJiygZW7v8fX6E', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-09 03:45:05', '2019-01-09 03:45:05'),
(44, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1AX60096M0007310G', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '11:51:58 Jan 10, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AZxbwZ9bPVPFFf7hCCNemacLJwlCA6t6IIBY5NDGxiFaRmwV5WqaqTgo', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-10 08:52:19', '2019-01-10 08:52:19'),
(45, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '3PL516086R256763C', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '11:38:10 Jan 11, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A9wqb1wB2yeCO.jbe9.C9sMuvcu4AIze8WUZ2yS.Y827smh4eoNvqsPT', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-11 08:39:05', '2019-01-11 08:39:05'),
(46, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '4T151887E8995470L', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:51:32 Jan 12, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AVlpOpz96ozHZl00S2JWFGNmmuSmAQhVUV.9-qgDdQOlSxe49wKdbTC4', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-12 05:51:53', '2019-01-12 05:51:53'),
(47, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '9GV9928506244530G', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:02:09 Jan 13, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Ak94TBBVVaEGZP89tcv-BEF1UbMXAf43cYBUFy2CntV3ER9y18ZngkoB', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-13 00:03:08', '2019-01-13 00:03:08'),
(48, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '0R319686UH8979638', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '05:32:08 Jan 14, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A3jIMaG6G8pvXNOpDRbAwZKewTlZAZij3nLBycHFdP2ZqhSSkYTUMaAY', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-14 02:33:07', '2019-01-14 02:33:07'),
(49, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '30F33868X5218602D', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:45:05 Jan 15, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A4Mqf5cf8P7QgU4SRBC5RIAEbsuXAHt8ifQ6dNUgUhHemEtJRaFJhXGF', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-15 01:46:08', '2019-01-15 01:46:08'),
(50, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7G572087YN005715U', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:10:16 Jan 16, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AfDdcDwGFNNl9YX8sk3Oq5l8Xr6pAwm.udOkt36o8kwraZMlSe.QrXPb', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-16 05:11:08', '2019-01-16 05:11:08'),
(51, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '94253346BT633014W', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:05:15 Jan 17, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Aueowvee7t6wjo8K4T-GGs3wJvPQA6SGls2rXvJbBtgfI0Mjt-yzPUIZ', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-17 09:06:07', '2019-01-17 09:06:07'),
(52, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7FG92188F7504992A', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:22:51 Jan 18, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AGXT66oAmwth6Mv574mMl8vl9PeuA4TokRo5JkM5wjdV6yMZgbN.fZIQ', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-18 04:24:08', '2019-01-18 04:24:08'),
(53, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '307817368N076742Y', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '11:54:45 Jan 19, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AL82qxR3z7mhtwJZBjtNJQ1iFKKYAMPHSJ.kxvQgTzgT9Csvgof0OyCt', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-19 08:56:10', '2019-01-19 08:56:10'),
(54, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '40835692PR992900E', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:17:30 Jan 20, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AZyJIVtrKZJIFn35ToMVOPQoZ8ZAAypOmzLHaPsxf4fdXSIzIkHxuGpl', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-20 05:18:09', '2019-01-20 05:18:09'),
(55, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1GJ20129M0946662B', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:16:41 Jan 21, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AsM0z10xXFuZuI3iMp22lu4JOzbEAqY5I6f0waNHl6RwjBDkZxzWeEEj', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-21 09:17:05', '2019-01-21 09:17:05'),
(56, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '523382356D327140L', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:58:07 Jan 22, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AJ5elIYM5D9HHOkI9idy6dxdP9I3ARrT1FiCz-g.KhjJO98e5ljxpVhS', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-21 23:58:27', '2019-01-21 23:58:27'),
(57, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '5A995602VM006671F', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:21:30 Jan 23, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AFbtoae17G1snrl8ZQGTOr-6vaYpAisJt7ZRZ8F.Shu-fqPtRmfl-e9Y', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-23 04:22:07', '2019-01-23 04:22:07'),
(58, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '6S410758F7262580W', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:18:25 Jan 24, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A1y.b0gVWGfYS85ushon7njAx4FVAoHkqdD3kMLRL4k0B.ugD9C-iiEU', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-24 04:19:07', '2019-01-24 04:19:07'),
(59, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2G582687CF234091V', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:43:37 Jan 25, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AGfSKS1zcdhJM-C6l0DknJMIv8LLArOzQkD0VbYCeYuovPLtUNMIDypD', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-24 23:44:00', '2019-01-24 23:44:00'),
(60, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '5TX49440WP801712S', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:41:48 Jan 26, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AGfCgHuaezzsna7ic4RxRXfRLW-fAXJiULfXCk7Nk8U6Gee1P2ZdXb6C', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-25 23:43:05', '2019-01-25 23:43:05'),
(61, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '0NS45561972502207', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:33:32 Jan 27, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AUH6QQQ4Cq8gTpJ0PPLJ0MmEKKkfASPVP.O97Pt9S7Q9hET09YJJDAkY', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-27 04:34:08', '2019-01-27 04:34:08'),
(62, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '3RE7480310586515X', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:35:12 Jan 28, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AoTD.uallg-3k4aPdurPRuA08yNGARcJazeH3nN5mqsg1xRIpF9DSCdq', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-28 01:35:36', '2019-01-28 01:35:36'),
(63, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2M360316N1823190D', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:12:12 Jan 29, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AA1mu66Ytd3MFlfm-yObJ2fZhFinAL7yUchBqpDywQLyr9KMFOfZZ3cu', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-29 01:13:07', '2019-01-29 01:13:07'),
(64, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '5WV60115AJ8761447', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '09:22:36 Jan 30, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AEWexEu2HAXvtIxtV.FjJ4XDJIdfAktioghvP7QIbCP6KRGYlVM15.eL', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-30 06:22:57', '2019-01-30 06:22:57'),
(65, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '78C70693C2528525K', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '10:04:20 Jan 31, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Al3UTKLI1i68WmIDgQz7KCVQD1kLAvIoGBVDSk-1dSdgSLRHyzWJr7GJ', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-01-31 07:04:42', '2019-01-31 07:04:42'),
(66, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '6LU55842W3705345F', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '05:14:40 Feb 01, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AOcXUd3yW2gKCaOVH4o8CJ16NzJsAY3v2MVwNdjMjFpbV8NsJrSH-k-m', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-01 02:15:06', '2019-02-01 02:15:06'),
(67, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2YL05737J36083313', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '05:33:59 Feb 02, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AmExk4TF6ENwB5D1WRb3llSDGIIZAhLiOcu9fMLszfKhoA2tGWGpuP0T', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-02 02:35:05', '2019-02-02 02:35:05'),
(68, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '5XY39076VA318622F', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:18:44 Feb 03, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Ax3dV49r-Xv3p.xaEC4co6wHaFCZA6w15Yjz5cwCtqMw6cTZg0D8jxeK', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-03 00:19:09', '2019-02-03 00:19:09'),
(69, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '8U536971WN525050Y', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:21:42 Feb 04, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AGrQ4O-ktk7juq90QNZTDZ0rFCx2AQfQNXYwlH7oTBwWkte6Gi9ZAbuZ', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-04 03:22:05', '2019-02-04 03:22:05'),
(70, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '9L268966EU266804F', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '05:23:26 Feb 05, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AF1l47hXqbrLK1bZT.L1VpyhbO.XARsEXffXLc1zatUkIQ2XDRgbLqAr', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-05 02:23:48', '2019-02-05 02:23:48'),
(71, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '6GS395981L902612L', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:08:26 Feb 06, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AJk8QuV-taWzxKJWz2C0EDiEnfsEAEJ.uRnm0Gj4Gm8BHuVbD4kPbyXS', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-06 01:08:48', '2019-02-06 01:08:48'),
(72, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1UH953187D068754X', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '11:20:32 Feb 07, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AGdDhbqLhOGuxL72HCkHfEcIDjyXAWCW76NOGbwJVgu5jQRftNZWUtHP', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-07 08:21:06', '2019-02-07 08:21:06'),
(73, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '653632562M5269706', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:41:43 Feb 08, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A8-NxT4I1FSeVU-8p-dtqmcDYd81AShkmNgoTwm9ZYTJvu971B-SCV.U', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-08 00:42:09', '2019-02-08 00:42:09'),
(74, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '6JC902744L784401N', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:05:50 Feb 09, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AXWBkrlz2i-r4wVI-be0v2gEzKuUA1jEhME0HvFnPmTMf433rGr-Rxhr', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-09 05:06:12', '2019-02-09 05:06:12'),
(75, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '81W87200683023107', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:07:22 Feb 10, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A5uQFvjc.UJtfUjlRK-VIf9WWQ8HA3ZY1UlZqaiH-SiPitiuFhvsVw-w', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-10 09:08:08', '2019-02-10 09:08:08'),
(76, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '6WW22428PP396623Y', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:08:44 Feb 11, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AYYDYnDWyyxjrN63eaQ0pZU92uuJAdQwXc.O-bU8GStV43L9LBgNJfCI', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-11 00:10:06', '2019-02-11 00:10:06'),
(77, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7G46209557343273D', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:49:24 Feb 12, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A739FTSMk8kYJ.miuYv3SfmM-AuZAS17vsKAEnyHA1MeVOICqnMRvK-d', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-12 09:49:50', '2019-02-12 09:49:50'),
(78, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '4A272986X0397404U', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:29:24 Feb 13, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A8VZ08eNIUoTSTGnp-2oXhn5KPzHADkE4jzn-sVfAQAgWw-lbtFvRXds', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-12 23:30:05', '2019-02-12 23:30:05'),
(79, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '445868805X8758618', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '10:53:49 Feb 14, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AXBLrVJmA-PFtzNaYXEgSK0UIgknAqLnBAsKqLX4rS6XJInfcZbRf4p3', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-14 07:55:05', '2019-02-14 07:55:05'),
(80, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '3DN22608VU780321M', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '02:15:02 Feb 15, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AKKSHXpxD5JvZ2cl.XOgo1OD9YDZA..is2Ys-0GxNbFkdBukobSoKlzq', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-14 23:16:08', '2019-02-14 23:16:08'),
(81, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '8JC68670YJ694532N', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:19:48 Feb 16, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A.dJfNAHZaLFV9kyG4GBumBO4rM2Av5FiyKh9pUgdFenxAC8BiGEGr1x', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-16 03:21:05', '2019-02-16 03:21:05'),
(82, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7SD00368YF565574X', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:13:50 Feb 17, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AgsWp3re1wWkzZxrCraHGkQC6yZgAcUj8U21wrIH6Tg-s4X4CsnNKTqE', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-17 09:15:09', '2019-02-17 09:15:09'),
(83, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '3MV51638BF863804C', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:41:33 Feb 18, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Aq5laNfMA1jn2LiWpkqhx4ti3QXnA6wSwsP7znUIySVoCDZ8T1eSTsN1', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-18 09:42:09', '2019-02-18 09:42:09'),
(84, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1XB8568417764745F', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:31:06 Feb 19, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A-wfb8Q6pSREY6XrRXDk-aXSaf1SAuhMj-r2D1YcBPnJTKkK-Yql-qM3', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-19 04:31:29', '2019-02-19 04:31:29'),
(85, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '46657836JF813510C', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '17:17:14 Feb 20, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ABRY04NDJ5IIVhYiRS6ypLMkwmitA5N5Pdq7-PqiTDbg68-QpZ29bBv8', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-20 14:17:38', '2019-02-20 14:17:38'),
(86, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '14L7736593818982E', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '15:48:26 Feb 21, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AyX7eypgPsj4B5I1LHXmibJHF3sJAlmH0hXzpE10NjMBzhCpXlGRp2G9', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-21 12:49:06', '2019-02-21 12:49:06'),
(87, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '3LY574145G366551A', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:24:04 Feb 22, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AYfKdcGtVJXXDZMU-tUWWnIlU25cAtCbe7rzRhIVP13qINozqbq83jRa', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-22 01:24:26', '2019-02-22 01:24:26'),
(88, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2YV15839KM0572211', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:37:13 Feb 23, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AKGqiD9OpjlxVIn6rhtztPr0e1ZBAVQi3cu15Qmxjgezx4GlrmXo2.qA', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-23 09:38:08', '2019-02-23 09:38:08'),
(89, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '8KC41658VC558331S', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '05:45:02 Feb 24, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AmFFr0bosz5Hs4rdf8ZNRZol3G6SATL1I-I89aSk1yDr44UiXm.IzKgm', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-24 02:45:23', '2019-02-24 02:45:23'),
(90, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7K424714C3740602U', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '03:04:34 Feb 25, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A.CSYz4u5IILQm5wM0J0JbJiIcEuACDex4mdRddsgb7wSXwaZBwgnTp4', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-25 00:05:11', '2019-02-25 00:05:11'),
(91, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '2WG86778C82120617', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '04:38:46 Feb 26, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ArjI6wMRsBNWop-3NCMh8trd93GoAnNE2ln8sQ7viL902RowtX06q0Qy', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-26 01:40:09', '2019-02-26 01:40:09'),
(92, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '64275807XF162980N', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '12:58:36 Feb 27, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ABr7TF1VNJRHrFfJkVMfCcSa87ETAPYn3mFTlZvD1HyZ8jM9sGp4rsyP', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-27 09:59:06', '2019-02-27 09:59:06'),
(93, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '86807127UT8234402', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '07:08:39 Feb 28, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AxQXFQ8.eeoM6OdaDW-P2TjpuSG-AAgA4B6FJwDkUPDJXTCVSe9a.Lqf', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-02-28 04:09:05', '2019-02-28 04:09:05'),
(94, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '94X13703XR706892B', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '10:37:17 Mar 01, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Aa9sF8zb3bPu8tiasGbOEDXZz37SABFJLhm38YaxRelfZX38BJsMO6s8', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-01 07:38:05', '2019-03-01 07:38:05'),
(95, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '4EG76388R77306414', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '21:58:08 Mar 02, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AW2oZDucGH-5Ym-BKQKUagWqb7TKApc2-ULvSjxzwzYAF0bwiai7tQg.', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-02 18:59:06', '2019-03-02 18:59:06'),
(96, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1UD40883AL1603020', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '14:22:24 Mar 03, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AbiSe9l5i0GmURCvCGXabt063GVUA3XgmRQ2yUFH1bOUqpVJBpKAYfDR', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-03 11:23:09', '2019-03-03 11:23:09'),
(97, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '5V21538903271122N', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '19:23:20 Mar 04, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AZXrAH4PoVZ7ogQR8pJqtffjgabRATw-Ix3B2LRxt7ulhqd3HxYnJZPV', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-04 16:24:08', '2019-03-04 16:24:08'),
(98, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '3VP38639D0769235W', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '15:20:33 Mar 05, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AQtDkM8Dt3LMcxRgDM-bAWvelzMmAP3iejAKT9DJL7Zbn88xaEND0kNJ', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-05 12:21:01', '2019-03-05 12:21:01'),
(99, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '47L78270YN032583W', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '23:08:11 Mar 06, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Aa-ci.C6FQtla.XA6hWmpT38bErXAXnHAa2yD49MJEIxwabP0iIZ.vvX', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-06 20:08:37', '2019-03-06 20:08:37'),
(100, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '1YJ766837A8303009', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:30:30 Mar 07, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'A228FPMMYIKuyrZ277Y8QdISBSSnAHZ0XzA1SsfeJKeZ16bc-3Hs1564', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-07 05:30:53', '2019-03-07 05:30:53'),
(101, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '4BD400690W960314C', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '19:31:08 Mar 08, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ApnoOYwqA.72T-K.xuOpVNcY3l7FAmoPBp7CwyGNvGLxuBL9iqXaYdAL', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-08 16:31:32', '2019-03-08 16:31:32'),
(102, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '6W208799HC937871V', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '06:47:57 Mar 09, 2019 PST', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AxYKJeO2Da2B9Xf8TX6wOQE3eHq-AcpOH4mEAaRTypyfnVpiaWnmX67w', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-09 03:49:06', '2019-03-09 03:49:06');
INSERT INTO `paypal_subscriptions` (`id`, `user_id`, `package_id`, `transaction_subject`, `txn_type`, `type`, `subscr_id`, `item_name`, `txn_id`, `item_number`, `payment_status`, `payment_fee`, `mc_fee`, `mc_gross`, `btn_id`, `payment_date`, `mc_currency`, `payer_id`, `first_name`, `last_name`, `payer_email`, `receiver_id`, `receiver_email`, `business`, `contact_phone`, `residence_country`, `payment_gross`, `payment_type`, `protection_eligibility`, `verify_sign`, `payer_status`, `test_ipn`, `charset`, `notify_version`, `ipn_track_id`, `created_at`, `updated_at`) VALUES
(103, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '4W387708YR9082724', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '08:29:03 Mar 10, 2019 PDT', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AH.LfTX3NAFqdnkf40MAgGD0sk1zAl5uoUfAJqq4NHPB3qr.CDXuJqxc', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-10 04:30:06', '2019-03-10 04:30:06'),
(104, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '7A776451FG6735604', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '16:03:55 Mar 11, 2019 PDT', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'ADqCh3sdzD9y7mCEJnmwGAeOPUv6AqNozYD-YwMKEtiX3gjhPEjRvRGu', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-11 12:04:18', '2019-03-11 12:04:18'),
(105, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '79C02145PB461693H', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '19:17:48 Mar 12, 2019 PDT', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'AESwYdwIUh1Nyt6KaZSvO4H9FtUcAEBGe0riex0ry4BGXICYIeyk7GEq', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-12 15:19:07', '2019-03-12 15:19:07'),
(106, 12, NULL, 'Basic Package', 'subscr_payment', 'recurring_payment', 'I-523XXNVHNE7E', 'Basic Package', '8ET55651YK2727258', 'miynBasicPackage', 'Completed', NULL, 0.35, 2.00, 3929970, '14:23:25 Mar 13, 2019 PDT', 'AUD', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', '4TZA4Q5Y44SE2', 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, 'instant', 'Eligible', 'Ae5eSJQKcmMlRPleNRcieWxhxTQbAZNYVU506DH1oSZ3UHJnwm.rZZzw', 'verified', '1', 'windows-1252', '3.9', 'cfccad07f576c', '2019-03-13 10:24:05', '2019-03-13 10:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `paypal_unsubscriptions`
--

CREATE TABLE `paypal_unsubscriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `transaction_subject` text COLLATE utf8mb4_unicode_ci,
  `txn_type` text COLLATE utf8mb4_unicode_ci,
  `subscr_id` text COLLATE utf8mb4_unicode_ci,
  `item_name` text COLLATE utf8mb4_unicode_ci,
  `txn_id` text COLLATE utf8mb4_unicode_ci,
  `item_number` text COLLATE utf8mb4_unicode_ci,
  `payment_status` text COLLATE utf8mb4_unicode_ci,
  `payment_fee` text COLLATE utf8mb4_unicode_ci,
  `mc_fee` double(8,2) DEFAULT NULL,
  `mc_gross` double(8,2) DEFAULT NULL,
  `btn_id` int(11) DEFAULT NULL,
  `payment_date` text COLLATE utf8mb4_unicode_ci,
  `mc_currency` text COLLATE utf8mb4_unicode_ci,
  `recurring` int(11) DEFAULT NULL,
  `reattempt` int(11) DEFAULT NULL,
  `mc_amount3` double(8,2) DEFAULT NULL,
  `period3` text COLLATE utf8mb4_unicode_ci,
  `payer_id` text COLLATE utf8mb4_unicode_ci,
  `first_name` text COLLATE utf8mb4_unicode_ci,
  `last_name` text COLLATE utf8mb4_unicode_ci,
  `payer_email` text COLLATE utf8mb4_unicode_ci,
  `receiver_id` text COLLATE utf8mb4_unicode_ci,
  `receiver_email` text COLLATE utf8mb4_unicode_ci,
  `business` text COLLATE utf8mb4_unicode_ci,
  `contact_phone` text COLLATE utf8mb4_unicode_ci,
  `residence_country` text COLLATE utf8mb4_unicode_ci,
  `payment_gross` text COLLATE utf8mb4_unicode_ci,
  `payment_type` text COLLATE utf8mb4_unicode_ci,
  `protection_eligibility` text COLLATE utf8mb4_unicode_ci,
  `verify_sign` text COLLATE utf8mb4_unicode_ci,
  `payer_status` text COLLATE utf8mb4_unicode_ci,
  `test_ipn` text COLLATE utf8mb4_unicode_ci,
  `charset` text COLLATE utf8mb4_unicode_ci,
  `notify_version` text COLLATE utf8mb4_unicode_ci,
  `ipn_track_id` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypal_unsubscriptions`
--

INSERT INTO `paypal_unsubscriptions` (`id`, `user_id`, `package_id`, `transaction_subject`, `txn_type`, `subscr_id`, `item_name`, `txn_id`, `item_number`, `payment_status`, `payment_fee`, `mc_fee`, `mc_gross`, `btn_id`, `payment_date`, `mc_currency`, `recurring`, `reattempt`, `mc_amount3`, `period3`, `payer_id`, `first_name`, `last_name`, `payer_email`, `receiver_id`, `receiver_email`, `business`, `contact_phone`, `residence_country`, `payment_gross`, `payment_type`, `protection_eligibility`, `verify_sign`, `payer_status`, `test_ipn`, `charset`, `notify_version`, `ipn_track_id`, `created_at`, `updated_at`) VALUES
(1, 12, NULL, NULL, 'subscr_cancel', 'I-XNHG6YY70NFX', 'Basic Package', NULL, 'miynBasicPackage', NULL, NULL, NULL, NULL, NULL, NULL, 'AUD', 1, 1, 2.00, '1 D', 'EZNNPHFGBD894', 'test', 'buyer', 'biz-buyer@netmow.com', NULL, 'biz-facilitator@netmow.com', 'biz-facilitator@netmow.com', NULL, 'AU', NULL, NULL, NULL, 'Abb-F1pDodxd694ER0mz3-tE1yi7AGUbxs-7oFKVvZaDDmHDM.IJ9QKO', 'verified', '1', 'windows-1252', '3.8', 'f731a071bd9ec', '2018-12-11 21:59:22', '2018-12-11 21:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` int(10) UNSIGNED NOT NULL,
  `industry_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `industry_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Web Development', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(2, 1, 'Web Design', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(3, 1, 'Marketing & Social Media', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(4, 1, 'Advertising', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(5, 1, 'Consulting', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(6, 1, 'Web Hosting', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(7, 1, 'Consumer Servie / Support', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(8, 1, 'IT Services', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(9, 1, 'Other', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(10, 2, 'Accounting', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(11, 2, 'Tax Services', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(12, 2, 'Law Firm', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(13, 2, 'Legal Services', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(14, 2, 'Financial Advisor', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(15, 2, 'Investment Manager', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(16, 2, 'Mortgage Broker', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(17, 2, 'Insurance', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(18, 2, 'Other', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(19, 3, 'Doctor', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(20, 3, 'Medical Center', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(21, 3, 'Dentist', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(22, 3, 'Veterinarian', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(23, 3, 'Optometrist', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(24, 3, 'Nutritionist', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(25, 3, 'Chiropractor', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(26, 3, 'Therapist', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(27, 3, 'Surgeon', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(28, 3, 'Naturopathic', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(29, 3, 'Reflexology', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(30, 3, 'Counseling & Mental Health', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(31, 3, 'Alternative Medicine', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(32, 3, 'Other', '2018-10-15 22:30:03', '2018-10-15 22:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(2, 'business-admin', 'web', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(3, 'staff', 'web', '2018-10-15 22:30:03', '2018-10-15 22:30:03'),
(4, 'client', 'web', '2018-10-15 22:30:03', '2018-10-15 22:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_on_booking_form` tinyint(1) NOT NULL DEFAULT '0',
  `duration_hours` int(10) UNSIGNED DEFAULT NULL,
  `duration_minutes` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `method` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `contact_number` text COLLATE utf8mb4_unicode_ci,
  `online_method` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `slug`, `business_id`, `name`, `fee`, `description`, `show_on_booking_form`, `duration_hours`, `duration_minutes`, `category_id`, `image`, `location`, `method`, `address`, `contact_number`, `online_method`, `created_at`, `updated_at`) VALUES
(1, '5bdc1a70881c7', 1, 'Free Intro Meeting', 0, 'Lorem ipsum dolor sit amet', 1, 0, 20, 1, '/images/services/5bdc1a70881c75bdc1a70890701541151344.png', NULL, NULL, NULL, NULL, NULL, '2018-11-02 03:35:44', '2018-11-02 03:35:44'),
(3, '5bdc1e6c0a31c', 1, 'Paid Intro Meeting', 1000, 'Lorem ipsum dolor sit amet', 1, 0, 20, 2, NULL, NULL, NULL, NULL, NULL, NULL, '2018-11-02 03:52:44', '2018-11-02 03:52:44'),
(4, '5c04a8d59e3dc', 2, 'Web application', 100000, 'Scalable web application', 1, 0, 20, 0, '/images/services/5c04a8d59e3dc5c04a8d59f6cc1543809237.png', NULL, NULL, NULL, NULL, NULL, '2018-12-02 21:53:57', '2018-12-02 21:53:57'),
(5, '5c04a8e0e55dc', 2, 'Web application', 100000, 'Scalable web application', 1, 0, 20, 0, '/images/services/5c04a8e0e55dc5c04a8e0e7afc1543809248.png', NULL, NULL, NULL, NULL, NULL, '2018-12-02 21:54:08', '2018-12-02 21:54:08'),
(7, '5c04bb3786cd9', 2, 'Database design edited again', 10000000, 'Database designing for web application', 0, 40, 30, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-02 23:12:23', '2018-12-03 02:28:29'),
(8, '5c04e97b71da7', 2, 'Home monitoring system edited', 1000000000, 'Home monitoring system', 0, 30, 20, 5, NULL, NULL, NULL, NULL, NULL, NULL, '2018-12-03 02:29:47', '2018-12-03 02:30:04'),
(9, '5c061318dde06', 2, 'Web design', 10000, 'Web design', 1, 1, 20, 3, NULL, 1, 'client', NULL, NULL, NULL, '2018-12-03 23:39:36', '2018-12-03 23:39:36'),
(12, '5c07421e68e99', 2, 'Web design basic edited', 20000000, 'Web design basic edited', 1, 12, 20, 3, NULL, 1, 'business', NULL, '+8801617308431', NULL, '2018-12-04 21:12:30', '2018-12-04 22:01:28'),
(13, '5c075dd0c57ad', 2, 'Test', 10000000, 'test', 0, 12, 20, 3, NULL, 2, 'client', NULL, NULL, 'Facebook', '2018-12-04 23:10:41', '2018-12-04 23:21:55');

-- --------------------------------------------------------

--
-- Table structure for table `service_availabilities`
--

CREATE TABLE `service_availabilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_locations`
--

CREATE TABLE `service_locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sms_settings`
--

CREATE TABLE `sms_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_provide_service` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `send_email_with_inst` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `slug`, `user_id`, `staff_name`, `staff_email`, `staff_role`, `staff_provide_service`, `send_email_with_inst`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '4f9cb26896614d8bf8f7bcebb0cdc14c', 3, 'rana', 'rana@gmail.com', 'user', 'services', 1, 1, '2019-05-17 00:24:46', '2019-05-17 00:24:46', NULL),
(2, 'd28d8fe5f9b22a38852205cf5a22794c', 3, 'staff2', 'staff2@gmail.com', 'editor', 'services2', 1, 1, '2019-05-17 00:25:52', '2019-05-17 00:25:52', NULL),
(3, 'af84e7ae173eab5a81bbdbe5877626fe', 6, 'teststaff', 'teststaff@gmail.com', 'user', 'services', 1, 1, '2019-05-17 00:29:54', '2019-05-17 00:29:54', NULL),
(4, 'a5a8ed0f9543f50d14ef972a2f1d1699', 5, 'hello', 'hello', 'user', 'services', 1, 1, '2019-05-17 02:51:04', '2019-05-17 02:51:04', NULL),
(5, '181a07e93e643fb01a78935896d59d36', 4, 'dsfgdsf', 'dsfg', 'user', 'services', 1, 1, '2019-05-17 03:02:32', '2019-05-17 03:02:32', NULL),
(6, '48d2e65368986832aed5b2428e1d1453', 7, 'eewew', 'ewewew', 'writter', 'services2', 1, 1, '2019-05-17 03:55:39', '2019-05-17 03:55:39', NULL),
(7, '2d6013aea59f45f1e923a082019ab07a', 9, 'asdfsd', 'ewrt', 'user', 'services', NULL, 1, '2019-05-20 03:03:54', '2019-05-20 03:03:54', NULL),
(8, '414ab20b742fb9fa2599e3e3da66532f', 18, 'a', 'a', 'user', 'services', 1, 1, '2019-05-25 00:56:39', '2019-05-25 00:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_assignments`
--

CREATE TABLE `staff_assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_availabilities`
--

CREATE TABLE `staff_availabilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_email` tinyint(1) NOT NULL DEFAULT '0',
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_id` int(10) UNSIGNED DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `slug`, `firstname`, `lastname`, `display_name`, `display_email`, `country_id`, `phone`, `professional_title`, `language`, `color`, `business_id`, `avatar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '5bc5694a0b890', 'Website', 'Admin', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'faysal@netmow.com', '2018-10-15 22:30:02', '$2y$10$2RYyDKO0zEO8799mo9Pc8OWi1kCLpOk2mdnSBhAR5BBvyDyGJliDO', 'JS3vgUFETv9yszPFqgnMjM2fpW6MXaeH5aklG4n3Jzm8TgIQvFfXiY5PHtaU', '2018-10-15 22:30:02', '2018-10-15 22:30:02'),
(2, '5bc5694a1f2a9', 'Faysal', 'Rabby', 'Faysal Ishtiaq Rabby', 0, 1, '01736486064', 'Web Developer', NULL, '#07EAD4', 1, 'https://app.miyn.net/images/avatars/5bc5694a1f2a95bc5acb1f0c8f1539681457.png', 'f.i.rabby@gmail.com', '2018-10-15 22:30:02', '$2y$10$26QQMwg7ywUVk6ijEqZpYOJHQJFTyetCOULtKa3EYMHyXNY39h9/u', 'DQkUT3QfW97pb0fnQDCQYiXWMrlc5HNO8Ij5cNnk4AOsfNjZZpQgFLU8Tnl2', '2018-10-15 22:30:02', '2018-10-16 03:54:30'),
(4, '5bdc254463f33', 'Faysal', 'Rabby', 'Faysal Ishtiaq Rabby', 0, NULL, NULL, 'Web Developer', NULL, '#07EAD4', 1, 'https://app.miyn.net/images/miynlogo.png', 'fi.rabby@gmail.com', NULL, '$2y$10$sgFbRoufhibMniq7Z9FEneK.THJspMXzxd.ejyZmPWgzaGlsf5cF2', NULL, '2018-11-02 04:21:56', '2018-11-02 04:21:56'),
(5, '5bdc25dac43bb', 'Faysal', 'Rabby', 'Faysal I Rabby', 0, NULL, NULL, 'Web Developer', NULL, '#07EAD4', 1, 'https://app.miyn.net/images/miynlogo.png', 'frabby@gmail.com', NULL, '$2y$10$cRNHYVAzT3FGhhBAAOrdmOb4ArlK1rCql1VeA3xt2enlQmCEQ05Hm', NULL, '2018-11-02 04:24:26', '2018-11-02 04:24:26'),
(6, '5c04a3a1cfcc3', 'Shobuj', 'mia', 'shobuj', 0, 1, '1617308431', 'Web developer', NULL, '#07EAD4', 2, 'https://app.miyn.net/images/miynlogo.png', 'cybertronix.4406@gmail.com', '2018-12-02 22:12:08', '$2y$10$Cz4eMZXE/S6bbF/XnMZTBebob8SWg.RnbmylaRljgN.I2R/wWqF6K', 'dMPohoUNNI4UavdRpvLL6MbQJw4GVLFLSxx9fWLcPgr87TFDf4uT2swIO7e7', '2018-12-02 21:31:45', '2018-12-02 21:42:04'),
(7, '5c04a7336a4b3', 'Rana', 'Khan', 'rana', 0, NULL, '4564787878', 'Devops', NULL, '#048074', 2, 'https://app.miyn.net/images/miynlogo.png', 'xyz@xyz.com', '2018-12-03 22:08:00', '$2y$10$DPHCCIJWUAp07U0q9VO3quiSB/JW0oeynlpPh8vHclQmbBPDcfQmi', 'm4rvgT0ilOdPfQQx4KVkUOIfjOonztuzVhYZUo06F5HgAEQlEdGyMmPgUX11', '2018-12-02 21:46:59', '2018-12-02 21:46:59'),
(9, '5c0ddced946b0', 'Test', 'User1', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test1@test.com', '2018-12-09 19:18:27', '$2y$10$8XyQO2g.Z3Bax2L5lD3.L.WwcJjTQB/yssCUZmADFZK3rtsgPhQQm', 'zEJuY7GE4tj7bfauQK6SBXdcpgZe2nYzSHj3gJ6QCekvew6jgZpDAA87rbjV', '2018-12-09 16:26:37', '2018-12-09 16:26:37'),
(10, '5c0dddf1eb9a4', 'Test', 'User2', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test2@test.com', '2018-12-10 01:20:25', '$2y$10$nBf.Qyu95EVtkjmPmMQ49u5ECgKnLJQaTelklzD8TNj2QRDTOPmqa', 'CfJbu9fOFMHSEkc5yhGIxedCU3Vwx8FMm8C38aobVkZl7lsL9SbN3vBFISde', '2018-12-09 16:30:58', '2018-12-09 16:30:58'),
(11, '5c0ddf6e1d96e', 'Test', 'User3', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test3@test.com', '2018-12-10 03:11:32', '$2y$10$Tn/uSPaUOv0ArdmWZKsSruIkz7uCuvcz6yZ9V7YUE7CfKhtgokzai', 'qz7je9v5t59G9lHkpn6z8vowBohQVqBKMFnmZSKwYJpjRNqpBuanVRLK657U', '2018-12-09 16:37:18', '2018-12-09 16:37:18'),
(12, '5c0f6972472c1', 'Test', 'User4', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test4@test.com', '2018-12-10 22:20:15', '$2y$10$Muw3WvvLGXTNCpA2lsXoNuHNfpYbdaw3lWc5oEebGnX5PH/mPYVDS', 'UMBDjJ5r7sakTgcoW4awHx0whXK8I8QOlziqWrX0A8lij1mgdWsbFTbQyRCw', '2018-12-10 20:38:26', '2018-12-10 20:38:26'),
(13, '5c29b00c1b083', 'Nannas', 'Planner', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tst2@netmow.com', '2018-12-30 19:04:03', '$2y$10$VUMNWsUEOUxRGbfhqB1W8.5pXngEZ4bQ6kgbynhO.bAZTgy.E391m', NULL, '2018-12-30 18:58:36', '2018-12-30 19:04:03'),
(14, '5c398568978cd', 'Dev', 'User', 'Dev', 0, 1, '1617308431', 'Bac-end developer', NULL, NULL, NULL, 'https://app.miyn.net/images/miynlogo.png', 'dev@dev.com', '2019-01-11 20:17:18', '$2y$10$9QxYuqxzXz7O/tDtDpHIDOuCii4SyWnIcrJZc8dEMuyh4J3gNbPKG', '2shO4uIrrT5uaTEmxOeYF2q5CuMVTJ5EGwHfbCk9vuWoYKt3nYwMpscwbiGZ', '2019-01-11 19:12:56', '2019-01-11 19:18:03'),
(15, '5cb734c034690', 'Jakarea', 'Parvez', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'sendinfo98@gmail.com', '2019-04-17 04:15:35', '$2y$10$47aGk4QZkv/UDl97ee0z6Obg/TNrVTUEE9Ba/z778O6MhQM6ayQAe', 'ZozzDnWKNwIPYpQsV4VQcZg11oNSjL4dFsSctRrDmAGmS0Otk1TjDVdg4P8p', '2019-04-17 04:14:24', '2019-04-17 04:15:35'),
(16, '5cbfe2cea73f1', 'shobuj', 'mia', 'shobuj', 0, NULL, NULL, 'Laravel Developer', NULL, '#07EAD4', 1, '/images/miynlogo.png', 'shobujsa1993@gmail.com', '2019-04-23 18:19:49', '$2y$10$OHoqczYrwCixT9dYLoJcL.8pRhFLvHED036sa.KRjyIFnbVeDfQG.', 'fivrNah1v4tEIgW3OB7ojhDyHZg1vi6r2hirrvlOfXAqFTk0BVwrtkXY4Nzz', '2019-04-23 18:15:10', '2019-04-23 18:19:49'),
(17, '5ccc10329bb5f', 'Dev', 'Test', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'support@netmow.com', '2019-05-02 23:59:11', '$2y$10$LcX34ci0le/0Dm4fonckhOs49YwnajBzNHvoD.53w.X/i6taNfkfW', 'zFD7CvT2oXFf53ToYZRfgnTRBI2ZENcyUDWL0qLxFtQszSKsOpxjZv19SNS3', '2019-05-02 23:56:02', '2019-05-02 23:59:11'),
(18, '12cc4b70aefb7024f8f14bd02ea9d491', 'shobuj', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'shobujsa93@gmail.com', '2019-05-25 00:51:11', '$2y$10$k04vy960yt4XM0/pBO71ouqiBSl7PzQxBsu7BpxMPonbpRMxD.8Q6', NULL, '2019-05-25 00:48:55', '2019-05-25 00:51:11');

-- --------------------------------------------------------

--
-- Table structure for table `website_widgets`
--

CREATE TABLE `website_widgets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action_type` text COLLATE utf8mb4_unicode_ci,
  `schedule` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `youtube` text COLLATE utf8mb4_unicode_ci,
  `call_us` text COLLATE utf8mb4_unicode_ci,
  `make_payment` text COLLATE utf8mb4_unicode_ci,
  `map` text COLLATE utf8mb4_unicode_ci,
  `invitation_label` text COLLATE utf8mb4_unicode_ci,
  `invitation_title` text COLLATE utf8mb4_unicode_ci,
  `invitation_text` text COLLATE utf8mb4_unicode_ci,
  `desktop_view` tinyint(1) DEFAULT NULL,
  `auto_desktop_view` tinyint(1) DEFAULT NULL,
  `auto_desktop_view_after` int(11) DEFAULT NULL,
  `mobile_view` tinyint(1) DEFAULT NULL,
  `auto_mobile_view` tinyint(1) DEFAULT NULL,
  `auto_mobile_view_after` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_widgets`
--

INSERT INTO `website_widgets` (`id`, `user_id`, `action_type`, `schedule`, `details`, `content`, `youtube`, `call_us`, `make_payment`, `map`, `invitation_label`, `invitation_title`, `invitation_text`, `desktop_view`, `auto_desktop_view`, `auto_desktop_view_after`, `mobile_view`, `auto_mobile_view`, `auto_mobile_view_after`, `created_at`, `updated_at`) VALUES
(4, 2, 'inline', 'this is text', 'this is drop line', 'this is content', 'How to build a successful brand', '012365478', 'Make a payment', 'Get direction', 'Contact Me', 'Schedule a Free Intro Meeting', '<p>Thank You For Visiting James Noble Law. We\'re here to help, please don\'t hesitate to reach out and book a free 20-Minute <strong>Family Law Appointment</strong> or Seek a set-rate, low-fee initial advice today.</p>', 0, 0, 10, 0, 0, 10, '2018-12-05 19:49:31', '2019-04-23 18:07:34'),
(5, 6, 'floating', 'Schedule a Free Intro Meeting', 'Drop us a line', 'Customer Testimonials', 'How to build a successful brand', 'Call us', 'Make a payment', 'Get direction', 'Contact Us', 'Lets go and make some robots or app', '<p>From Website widget table invitation_text data here or appLets go and make some robots or appLets go and make some robots</p>', 0, 0, 10, 0, 0, 10, '2018-12-27 18:24:18', '2018-12-27 18:24:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_infos`
--
ALTER TABLE `billing_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_options`
--
ALTER TABLE `booking_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_policies`
--
ALTER TABLE `booking_policies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `businesses`
--
ALTER TABLE `businesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `businesses_user_id_foreign` (`user_id`),
  ADD KEY `businesses_industry_id_foreign` (`industry_id`),
  ADD KEY `businesses_profession_id_foreign` (`profession_id`);

--
-- Indexes for table `business_hours`
--
ALTER TABLE `business_hours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_profiles`
--
ALTER TABLE `business_profiles`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_infos_country_id_foreign` (`country_id`),
  ADD KEY `contact_infos_user_id_foreign` (`user_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboard_services`
--
ALTER TABLE `onboard_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `onboard_staff`
--
ALTER TABLE `onboard_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_settings`
--
ALTER TABLE `payment_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_subscriptions`
--
ALTER TABLE `paypal_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paypal_unsubscriptions`
--
ALTER TABLE `paypal_unsubscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_widgets`
--
ALTER TABLE `website_widgets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing_infos`
--
ALTER TABLE `billing_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `booking_options`
--
ALTER TABLE `booking_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_policies`
--
ALTER TABLE `booking_policies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `businesses`
--
ALTER TABLE `businesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `business_hours`
--
ALTER TABLE `business_hours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `business_profiles`
--
ALTER TABLE `business_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `calendar_settings`
--
ALTER TABLE `calendar_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_infos`
--
ALTER TABLE `contact_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `onboard_services`
--
ALTER TABLE `onboard_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `onboard_staff`
--
ALTER TABLE `onboard_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `payment_settings`
--
ALTER TABLE `payment_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paypal_subscriptions`
--
ALTER TABLE `paypal_subscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `paypal_unsubscriptions`
--
ALTER TABLE `paypal_unsubscriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `website_widgets`
--
ALTER TABLE `website_widgets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
