-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2015 at 12:09 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expen`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `breakfast` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lunch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dinner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `breakfast`, `lunch`, `dinner`, `created_at`, `updated_at`) VALUES
(1, 'florida', '10', '9', '110', '2015-08-07 19:23:57', '2015-08-07 19:23:57'),
(2, 'palestine', '12', '12', '10', '2015-08-07 20:05:28', '2015-08-07 20:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_07_19_201941_create_users_table', 1),
('2015_07_19_202118_create_roles_table', 1),
('2015_07_19_202225_create_role_user_table', 1),
('2015_07_19_204611_create_throttle_table', 1),
('2015_07_19_204651_create_profiles_table', 1),
('2015_08_05_192933_create_permissions_table', 1),
('2015_08_05_195440_create_permission_role_table', 1),
('2015_08_07_112747_create_locations_table', 1),
('2015_08_07_135342_create_reports_table', 2),
('2015_08_11_162013_create_times_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'read', 'adskhg lksdhlg ', '2015-08-22 17:13:19', '2015-08-22 17:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE IF NOT EXISTS `permission_role` (
  `id` int(10) unsigned NOT NULL,
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2015-08-22 17:13:32', '2015-08-22 17:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `first_name`, `last_name`, `user_id`, `location`, `avatar`, `created_at`, `updated_at`) VALUES
(1, '', '', 1, '', 'images/user.png', '2015-08-07 11:39:11', '2015-08-07 11:39:11'),
(2, '', '', 2, '', 'images/user.png', '2015-08-15 21:40:13', '2015-08-15 21:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE IF NOT EXISTS `reports` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `name`, `created_at`, `updated_at`) VALUES
(37, 1, 'Expense Report', '2015-08-11 19:15:45', '2015-08-11 19:15:45'),
(38, 1, 'Expense Report - (Tue/Aug/2015)', '2015-08-11 19:16:31', '2015-08-11 19:16:31'),
(39, 1, 'Expense Report - (Tue - Aug - 2015)', '2015-08-11 19:17:04', '2015-08-11 19:17:04'),
(40, 1, 'Expense Report - (Tue - Aug - 2015)', '2015-08-11 19:17:07', '2015-08-11 19:17:07'),
(41, 1, 'Expense Report - (Tue - Aug - 2015)', '2015-08-11 19:17:22', '2015-08-11 19:17:22'),
(42, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 10:42:10', '2015-08-12 10:42:10'),
(43, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 10:44:41', '2015-08-12 10:44:41'),
(44, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 10:57:34', '2015-08-12 10:57:34'),
(45, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 10:58:45', '2015-08-12 10:58:45'),
(46, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:00:55', '2015-08-12 11:00:55'),
(47, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:03:33', '2015-08-12 11:03:33'),
(48, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:05:05', '2015-08-12 11:05:05'),
(49, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:09:52', '2015-08-12 11:09:52'),
(50, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:10:56', '2015-08-12 11:10:56'),
(51, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:11:12', '2015-08-12 11:11:12'),
(52, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:11:39', '2015-08-12 11:11:39'),
(53, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:18:35', '2015-08-12 11:18:35'),
(54, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:19:30', '2015-08-12 11:19:30'),
(55, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:20:57', '2015-08-12 11:20:57'),
(56, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:29:53', '2015-08-12 11:29:53'),
(57, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:33:13', '2015-08-12 11:33:13'),
(58, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:33:54', '2015-08-12 11:33:54'),
(59, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:35:25', '2015-08-12 11:35:25'),
(60, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:35:42', '2015-08-12 11:35:42'),
(61, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:36:07', '2015-08-12 11:36:07'),
(62, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:44:52', '2015-08-12 11:44:52'),
(63, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:46:01', '2015-08-12 11:46:01'),
(64, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:48:23', '2015-08-12 11:48:23'),
(65, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:48:50', '2015-08-12 11:48:50'),
(66, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:50:22', '2015-08-12 11:50:22'),
(67, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:50:39', '2015-08-12 11:50:39'),
(68, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:51:31', '2015-08-12 11:51:31'),
(69, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:53:44', '2015-08-12 11:53:44'),
(70, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:55:19', '2015-08-12 11:55:19'),
(71, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:56:16', '2015-08-12 11:56:16'),
(72, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:57:16', '2015-08-12 11:57:16'),
(73, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:58:13', '2015-08-12 11:58:13'),
(74, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:58:32', '2015-08-12 11:58:32'),
(75, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:59:32', '2015-08-12 11:59:32'),
(76, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 11:59:49', '2015-08-12 11:59:49'),
(77, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:08:18', '2015-08-12 12:08:18'),
(78, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:10:12', '2015-08-12 12:10:12'),
(79, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:12:15', '2015-08-12 12:12:15'),
(80, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:13:56', '2015-08-12 12:13:56'),
(81, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:14:27', '2015-08-12 12:14:27'),
(82, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:15:49', '2015-08-12 12:15:49'),
(83, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:17:52', '2015-08-12 12:17:52'),
(84, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:18:10', '2015-08-12 12:18:10'),
(85, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 12:19:37', '2015-08-12 12:19:37'),
(86, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:17:28', '2015-08-12 15:17:28'),
(87, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:19:31', '2015-08-12 15:19:31'),
(88, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:21:17', '2015-08-12 15:21:17'),
(89, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:23:58', '2015-08-12 15:23:58'),
(90, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:24:48', '2015-08-12 15:24:48'),
(91, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:25:59', '2015-08-12 15:25:59'),
(92, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:28:06', '2015-08-12 15:28:06'),
(93, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:29:39', '2015-08-12 15:29:39'),
(94, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:31:40', '2015-08-12 15:31:40'),
(95, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:32:19', '2015-08-12 15:32:19'),
(96, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:33:06', '2015-08-12 15:33:06'),
(97, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:35:58', '2015-08-12 15:35:58'),
(98, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:38:16', '2015-08-12 15:38:16'),
(99, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:40:58', '2015-08-12 15:40:58'),
(100, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:45:06', '2015-08-12 15:45:06'),
(101, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:46:29', '2015-08-12 15:46:29'),
(102, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 15:52:27', '2015-08-12 15:52:27'),
(103, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 16:52:53', '2015-08-12 16:52:53'),
(104, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 16:54:12', '2015-08-12 16:54:12'),
(105, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 17:05:00', '2015-08-12 17:05:00'),
(106, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 17:06:55', '2015-08-12 17:06:55'),
(107, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 18:09:49', '2015-08-12 18:09:49'),
(108, 1, 'Expense Report - (Wed - Aug - 2015)', '2015-08-12 20:05:10', '2015-08-12 20:05:10'),
(109, 1, 'Expense Report - (Thu - Aug - 2015)', '2015-08-13 09:34:19', '2015-08-13 09:34:19'),
(110, 1, 'Expense Report - (Thu - Aug - 2015)', '2015-08-13 18:17:56', '2015-08-13 18:17:56'),
(111, 1, 'Expense Report - (Thu - Aug - 2015)', '2015-08-13 20:19:34', '2015-08-13 20:19:34'),
(112, 1, 'Expense Report - (Fri - Aug - 2015)', '2015-08-14 07:53:15', '2015-08-14 07:53:15'),
(113, 1, 'Expense Report - (Fri - Aug - 2015)', '2015-08-14 08:23:30', '2015-08-14 08:23:30'),
(114, 1, 'Expense Report - (Fri - Aug - 2015)', '2015-08-14 09:56:16', '2015-08-14 09:56:16'),
(115, 1, 'Expense Report - (Fri - Aug - 2015)', '2015-08-14 18:59:48', '2015-08-14 18:59:48'),
(116, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-15 09:39:22', '2015-08-15 09:39:22'),
(117, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-15 10:48:09', '2015-08-15 10:48:09'),
(118, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-15 10:48:09', '2015-08-15 10:48:09'),
(119, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-15 10:48:10', '2015-08-15 10:48:10'),
(120, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-15 11:04:28', '2015-08-15 11:04:28'),
(121, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-22 05:59:45', '2015-08-22 05:59:45'),
(122, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-22 17:07:05', '2015-08-22 17:07:05'),
(123, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-22 17:14:46', '2015-08-22 17:14:46'),
(124, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-22 17:15:43', '2015-08-22 17:15:43'),
(125, 1, 'Expense Report - (Sat - Aug - 2015)', '2015-08-22 17:32:03', '2015-08-22 17:32:03'),
(126, 1, 'Expense Report - (Sun - Sep - 2015)', '2015-09-13 18:31:15', '2015-09-13 18:31:15');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2015-08-07 11:38:52', '2015-08-07 11:38:52'),
(2, 'member', '2015-08-07 11:38:53', '2015-08-07 11:38:53'),
(3, 'manager', '2015-08-22 17:13:32', '2015-08-22 17:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2015-08-07 11:39:11', '2015-08-07 11:39:11'),
(2, 1, 1, '2015-08-06 21:00:00', '2015-08-06 21:00:00'),
(3, 2, 2, '2015-08-15 21:40:13', '2015-08-15 21:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_activity` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_attempt` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_activity`, `last_login`, `last_attempt`, `created_at`, `updated_at`) VALUES
(1, 1, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '2015-08-07 11:39:11', '2015-08-07 11:39:11'),
(2, 2, '', 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL, '2015-08-15 21:40:13', '2015-08-15 21:40:13');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE IF NOT EXISTS `times` (
  `id` int(10) unsigned NOT NULL,
  `location_id` int(10) unsigned NOT NULL,
  `report_id` int(10) unsigned NOT NULL,
  `days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dates` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=213 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `location_id`, `report_id`, `days`, `dates`, `created_at`, `updated_at`) VALUES
(21, 1, 88, '', '', '2015-08-12 15:21:24', '2015-08-12 15:21:24'),
(22, 1, 89, '08/09/2015', '', '2015-08-12 15:24:01', '2015-08-12 15:24:01'),
(23, 1, 89, '', '', '2015-08-12 15:24:01', '2015-08-12 15:24:01'),
(24, 1, 91, '', '', '2015-08-12 15:26:03', '2015-08-12 15:26:03'),
(25, 1, 91, '', '', '2015-08-12 15:26:03', '2015-08-12 15:26:03'),
(26, 1, 91, '', '', '2015-08-12 15:26:03', '2015-08-12 15:26:03'),
(27, 1, 91, '', '', '2015-08-12 15:26:04', '2015-08-12 15:26:04'),
(28, 1, 91, '', '', '2015-08-12 15:26:04', '2015-08-12 15:26:04'),
(29, 1, 91, '', '', '2015-08-12 15:26:04', '2015-08-12 15:26:04'),
(30, 1, 91, '', '', '2015-08-12 15:26:04', '2015-08-12 15:26:04'),
(31, 1, 98, '', '08/02/2015', '2015-08-12 15:38:19', '2015-08-12 15:38:19'),
(32, 1, 98, '', '08/03/2015', '2015-08-12 15:38:19', '2015-08-12 15:38:19'),
(33, 1, 98, '', '08/04/2015', '2015-08-12 15:38:19', '2015-08-12 15:38:19'),
(34, 1, 98, '', '08/05/2015', '2015-08-12 15:38:19', '2015-08-12 15:38:19'),
(35, 1, 98, '', '08/06/2015', '2015-08-12 15:38:20', '2015-08-12 15:38:20'),
(36, 1, 98, '', '08/07/2015', '2015-08-12 15:38:20', '2015-08-12 15:38:20'),
(37, 1, 98, '', '08/08/2015', '2015-08-12 15:38:20', '2015-08-12 15:38:20'),
(38, 1, 99, 'Su', '08/09/2015', '2015-08-12 15:41:01', '2015-08-12 15:41:01'),
(39, 1, 99, 'Mo', '08/10/2015', '2015-08-12 15:41:01', '2015-08-12 15:41:01'),
(40, 1, 99, 'Tu', '08/11/2015', '2015-08-12 15:41:01', '2015-08-12 15:41:01'),
(41, 1, 99, 'We', '08/12/2015', '2015-08-12 15:41:02', '2015-08-12 15:41:02'),
(42, 1, 99, 'Th', '08/13/2015', '2015-08-12 15:41:02', '2015-08-12 15:41:02'),
(43, 1, 99, 'Fr', '08/14/2015', '2015-08-12 15:41:02', '2015-08-12 15:41:02'),
(44, 1, 99, 'St', '08/15/2015', '2015-08-12 15:41:02', '2015-08-12 15:41:02'),
(45, 1, 100, 'Su', '08/09/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(46, 1, 100, 'Mo', '08/10/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(47, 1, 100, 'Tu', '08/11/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(48, 1, 100, 'We', '08/12/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(49, 1, 100, 'Th', '08/13/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(50, 1, 100, 'Fr', '08/14/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(51, 1, 100, 'St', '08/15/2015', '2015-08-12 15:45:10', '2015-08-12 15:45:10'),
(52, 1, 101, 'Su', '08/02/2015', '2015-08-12 15:46:31', '2015-08-12 15:46:31'),
(53, 1, 101, 'Mo', '08/03/2015', '2015-08-12 15:46:31', '2015-08-12 15:46:31'),
(54, 1, 101, 'Tu', '08/04/2015', '2015-08-12 15:46:32', '2015-08-12 15:46:32'),
(55, 1, 101, 'We', '08/05/2015', '2015-08-12 15:46:32', '2015-08-12 15:46:32'),
(56, 1, 101, 'Th', '08/06/2015', '2015-08-12 15:46:32', '2015-08-12 15:46:32'),
(57, 1, 101, 'Fr', '08/07/2015', '2015-08-12 15:46:32', '2015-08-12 15:46:32'),
(58, 1, 101, 'St', '08/08/2015', '2015-08-12 15:46:32', '2015-08-12 15:46:32'),
(59, 1, 102, 'Su', '07/26/2015', '2015-08-12 15:52:30', '2015-08-12 15:52:30'),
(60, 1, 102, 'Mo', '07/27/2015', '2015-08-12 15:52:30', '2015-08-12 15:52:30'),
(61, 1, 102, 'Tu', '07/28/2015', '2015-08-12 15:52:30', '2015-08-12 15:52:30'),
(62, 1, 102, 'We', '07/29/2015', '2015-08-12 15:52:30', '2015-08-12 15:52:30'),
(63, 1, 102, 'Th', '07/30/2015', '2015-08-12 15:52:30', '2015-08-12 15:52:30'),
(64, 1, 102, 'Fr', '07/31/2015', '2015-08-12 15:52:31', '2015-08-12 15:52:31'),
(65, 1, 102, 'St', '08/01/2015', '2015-08-12 15:52:31', '2015-08-12 15:52:31'),
(66, 1, 103, 'Su', '08/02/2015', '2015-08-12 16:52:59', '2015-08-12 16:52:59'),
(67, 1, 103, 'Mo', '08/03/2015', '2015-08-12 16:52:59', '2015-08-12 16:52:59'),
(68, 1, 103, 'Tu', '08/04/2015', '2015-08-12 16:52:59', '2015-08-12 16:52:59'),
(69, 1, 103, 'We', '08/05/2015', '2015-08-12 16:52:59', '2015-08-12 16:52:59'),
(70, 2, 103, 'Th', '08/06/2015', '2015-08-12 16:52:59', '2015-08-12 16:52:59'),
(71, 1, 103, 'Fr', '08/07/2015', '2015-08-12 16:53:00', '2015-08-12 16:53:00'),
(72, 1, 103, 'St', '08/08/2015', '2015-08-12 16:53:00', '2015-08-12 16:53:00'),
(73, 1, 104, 'Su', '08/02/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(74, 1, 104, 'Mo', '08/03/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(75, 1, 104, 'Tu', '08/04/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(76, 1, 104, 'We', '08/05/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(77, 1, 104, 'Th', '08/06/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(78, 1, 104, 'Fr', '08/07/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(79, 2, 104, 'St', '08/08/2015', '2015-08-12 16:54:17', '2015-08-12 16:54:17'),
(80, 1, 105, 'Su', '08/02/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(81, 1, 105, 'Mo', '08/03/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(82, 1, 105, 'Tu', '08/04/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(83, 1, 105, 'We', '08/05/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(84, 1, 105, 'Th', '08/06/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(85, 1, 105, 'Fr', '08/07/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(86, 1, 105, 'St', '08/08/2015', '2015-08-12 17:05:03', '2015-08-12 17:05:03'),
(87, 1, 106, 'Su', '08/02/2015', '2015-08-12 17:06:58', '2015-08-12 17:06:58'),
(88, 1, 106, 'Mo', '08/03/2015', '2015-08-12 17:06:58', '2015-08-12 17:06:58'),
(89, 1, 106, 'Tu', '08/04/2015', '2015-08-12 17:06:58', '2015-08-12 17:06:58'),
(90, 1, 106, 'We', '08/05/2015', '2015-08-12 17:06:59', '2015-08-12 17:06:59'),
(91, 1, 106, 'Th', '08/06/2015', '2015-08-12 17:06:59', '2015-08-12 17:06:59'),
(92, 1, 106, 'Fr', '08/07/2015', '2015-08-12 17:06:59', '2015-08-12 17:06:59'),
(93, 1, 106, 'St', '08/08/2015', '2015-08-12 17:06:59', '2015-08-12 17:06:59'),
(94, 1, 107, 'Su', '07/26/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(95, 1, 107, 'Mo', '07/27/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(96, 1, 107, 'Tu', '07/28/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(97, 1, 107, 'We', '07/29/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(98, 1, 107, 'Th', '07/30/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(99, 1, 107, 'Fr', '07/31/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(100, 1, 107, 'St', '08/01/2015', '2015-08-12 18:09:52', '2015-08-12 18:09:52'),
(101, 2, 108, 'Su', '09/20/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(102, 1, 108, 'Mo', '09/21/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(103, 2, 108, 'Tu', '09/22/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(104, 1, 108, 'We', '09/23/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(105, 1, 108, 'Th', '09/24/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(106, 2, 108, 'Fr', '09/25/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(107, 1, 108, 'St', '09/26/2015', '2015-08-12 20:05:29', '2015-08-12 20:05:29'),
(108, 1, 109, 'Su', '08/09/2015', '2015-08-13 09:34:22', '2015-08-13 09:34:22'),
(109, 1, 109, 'Mo', '08/10/2015', '2015-08-13 09:34:23', '2015-08-13 09:34:23'),
(110, 1, 109, 'Tu', '08/11/2015', '2015-08-13 09:34:23', '2015-08-13 09:34:23'),
(111, 1, 109, 'We', '08/12/2015', '2015-08-13 09:34:23', '2015-08-13 09:34:23'),
(112, 1, 109, 'Th', '08/13/2015', '2015-08-13 09:34:23', '2015-08-13 09:34:23'),
(113, 1, 109, 'Fr', '08/14/2015', '2015-08-13 09:34:23', '2015-08-13 09:34:23'),
(114, 1, 109, 'St', '08/15/2015', '2015-08-13 09:34:23', '2015-08-13 09:34:23'),
(115, 1, 110, 'Su', '08/02/2015', '2015-08-13 18:18:06', '2015-08-13 18:18:06'),
(116, 2, 110, 'Mo', '08/03/2015', '2015-08-13 18:18:06', '2015-08-13 18:18:06'),
(117, 1, 110, 'Tu', '08/04/2015', '2015-08-13 18:18:06', '2015-08-13 18:18:06'),
(118, 1, 110, 'We', '08/05/2015', '2015-08-13 18:18:07', '2015-08-13 18:18:07'),
(119, 2, 110, 'Th', '08/06/2015', '2015-08-13 18:18:07', '2015-08-13 18:18:07'),
(120, 1, 110, 'Fr', '08/07/2015', '2015-08-13 18:18:07', '2015-08-13 18:18:07'),
(121, 1, 110, 'St', '08/08/2015', '2015-08-13 18:18:07', '2015-08-13 18:18:07'),
(122, 1, 111, 'Su', '', '2015-08-13 20:19:45', '2015-08-13 20:19:45'),
(123, 2, 111, 'Mo', '', '2015-08-13 20:19:45', '2015-08-13 20:19:45'),
(124, 1, 111, 'Tu', '', '2015-08-13 20:19:45', '2015-08-13 20:19:45'),
(125, 1, 111, 'We', '', '2015-08-13 20:19:45', '2015-08-13 20:19:45'),
(126, 1, 111, 'Th', '', '2015-08-13 20:19:45', '2015-08-13 20:19:45'),
(127, 1, 111, 'Fr', '', '2015-08-13 20:19:45', '2015-08-13 20:19:45'),
(128, 1, 111, 'St', '', '2015-08-13 20:19:46', '2015-08-13 20:19:46'),
(129, 1, 112, 'Su', '08/23/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(130, 1, 112, 'Mo', '08/24/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(131, 1, 112, 'Tu', '08/25/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(132, 1, 112, 'We', '08/26/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(133, 1, 112, 'Th', '08/27/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(134, 1, 112, 'Fr', '08/28/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(135, 1, 112, 'St', '08/29/2015', '2015-08-14 07:53:22', '2015-08-14 07:53:22'),
(136, 1, 113, 'Su', '08/09/2015', '2015-08-14 08:23:37', '2015-08-14 08:23:37'),
(137, 1, 113, 'Mo', '08/10/2015', '2015-08-14 08:23:38', '2015-08-14 08:23:38'),
(138, 1, 113, 'Tu', '08/11/2015', '2015-08-14 08:23:38', '2015-08-14 08:23:38'),
(139, 1, 113, 'We', '08/12/2015', '2015-08-14 08:23:38', '2015-08-14 08:23:38'),
(140, 1, 113, 'Th', '08/13/2015', '2015-08-14 08:23:38', '2015-08-14 08:23:38'),
(141, 1, 113, 'Fr', '08/14/2015', '2015-08-14 08:23:38', '2015-08-14 08:23:38'),
(142, 1, 113, 'St', '08/15/2015', '2015-08-14 08:23:38', '2015-08-14 08:23:38'),
(143, 2, 114, 'Su', '08/02/2015', '2015-08-14 09:56:29', '2015-08-14 09:56:29'),
(144, 1, 114, 'Mo', '08/03/2015', '2015-08-14 09:56:29', '2015-08-14 09:56:29'),
(145, 1, 114, 'Tu', '08/04/2015', '2015-08-14 09:56:29', '2015-08-14 09:56:29'),
(146, 2, 114, 'We', '08/05/2015', '2015-08-14 09:56:30', '2015-08-14 09:56:30'),
(147, 1, 114, 'Th', '08/06/2015', '2015-08-14 09:56:30', '2015-08-14 09:56:30'),
(148, 1, 114, 'Fr', '08/07/2015', '2015-08-14 09:56:30', '2015-08-14 09:56:30'),
(149, 1, 114, 'St', '08/08/2015', '2015-08-14 09:56:30', '2015-08-14 09:56:30'),
(150, 1, 115, 'Su', '08/09/2015', '2015-08-14 18:59:51', '2015-08-14 18:59:51'),
(151, 1, 115, 'Mo', '08/10/2015', '2015-08-14 18:59:52', '2015-08-14 18:59:52'),
(152, 1, 115, 'Tu', '08/11/2015', '2015-08-14 18:59:52', '2015-08-14 18:59:52'),
(153, 1, 115, 'We', '08/12/2015', '2015-08-14 18:59:52', '2015-08-14 18:59:52'),
(154, 1, 115, 'Th', '08/13/2015', '2015-08-14 18:59:52', '2015-08-14 18:59:52'),
(155, 1, 115, 'Fr', '08/14/2015', '2015-08-14 18:59:52', '2015-08-14 18:59:52'),
(156, 1, 115, 'St', '08/15/2015', '2015-08-14 18:59:52', '2015-08-14 18:59:52'),
(157, 1, 116, 'Su', '08/02/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(158, 2, 116, 'Mo', '08/03/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(159, 1, 116, 'Tu', '08/04/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(160, 2, 116, 'We', '08/05/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(161, 1, 116, 'Th', '08/06/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(162, 1, 116, 'Fr', '08/07/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(163, 1, 116, 'St', '08/08/2015', '2015-08-15 09:39:33', '2015-08-15 09:39:33'),
(164, 1, 119, 'Su', '08/02/2015', '2015-08-15 10:48:13', '2015-08-15 10:48:13'),
(165, 1, 119, 'Mo', '08/03/2015', '2015-08-15 10:48:13', '2015-08-15 10:48:13'),
(166, 1, 119, 'Tu', '08/04/2015', '2015-08-15 10:48:13', '2015-08-15 10:48:13'),
(167, 1, 119, 'We', '08/05/2015', '2015-08-15 10:48:14', '2015-08-15 10:48:14'),
(168, 1, 119, 'Th', '08/06/2015', '2015-08-15 10:48:14', '2015-08-15 10:48:14'),
(169, 1, 119, 'Fr', '08/07/2015', '2015-08-15 10:48:14', '2015-08-15 10:48:14'),
(170, 1, 119, 'St', '08/08/2015', '2015-08-15 10:48:14', '2015-08-15 10:48:14'),
(171, 2, 120, 'Su', '08/16/2015', '2015-08-15 11:04:48', '2015-08-15 11:04:48'),
(172, 1, 120, 'Mo', '08/17/2015', '2015-08-15 11:04:48', '2015-08-15 11:04:48'),
(173, 2, 120, 'Tu', '08/18/2015', '2015-08-15 11:04:48', '2015-08-15 11:04:48'),
(174, 1, 120, 'We', '08/19/2015', '2015-08-15 11:04:48', '2015-08-15 11:04:48'),
(175, 1, 120, 'Th', '08/20/2015', '2015-08-15 11:04:49', '2015-08-15 11:04:49'),
(176, 1, 120, 'Fr', '08/21/2015', '2015-08-15 11:04:49', '2015-08-15 11:04:49'),
(177, 1, 120, 'St', '08/22/2015', '2015-08-15 11:04:49', '2015-08-15 11:04:49'),
(178, 2, 121, 'Su', '08/09/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(179, 1, 121, 'Mo', '08/10/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(180, 1, 121, 'Tu', '08/11/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(181, 1, 121, 'We', '08/12/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(182, 1, 121, 'Th', '08/13/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(183, 1, 121, 'Fr', '08/14/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(184, 1, 121, 'St', '08/15/2015', '2015-08-22 06:00:04', '2015-08-22 06:00:04'),
(185, 2, 123, 'Su', '08/09/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(186, 1, 123, 'Mo', '08/10/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(187, 2, 123, 'Tu', '08/11/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(188, 1, 123, 'We', '08/12/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(189, 2, 123, 'Th', '08/13/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(190, 1, 123, 'Fr', '08/14/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(191, 1, 123, 'St', '08/15/2015', '2015-08-22 17:15:11', '2015-08-22 17:15:11'),
(192, 1, 124, 'Su', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(193, 1, 124, 'Mo', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(194, 1, 124, 'Tu', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(195, 1, 124, 'We', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(196, 1, 124, 'Th', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(197, 1, 124, 'Fr', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(198, 1, 124, 'St', '', '2015-08-22 17:16:09', '2015-08-22 17:16:09'),
(199, 1, 125, 'Su', '08/02/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(200, 2, 125, 'Mo', '08/03/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(201, 1, 125, 'Tu', '08/04/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(202, 1, 125, 'We', '08/05/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(203, 1, 125, 'Th', '08/06/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(204, 1, 125, 'Fr', '08/07/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(205, 1, 125, 'St', '08/08/2015', '2015-08-22 17:32:38', '2015-08-22 17:32:38'),
(206, 1, 126, 'Su', '09/06/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24'),
(207, 1, 126, 'Mo', '09/07/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24'),
(208, 1, 126, 'Tu', '09/08/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24'),
(209, 1, 126, 'We', '09/09/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24'),
(210, 1, 126, 'Th', '09/10/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24'),
(211, 1, 126, 'Fr', '09/11/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24'),
(212, 1, 126, 'St', '09/12/2015', '2015-09-13 18:31:24', '2015-09-13 18:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `timezone` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'UTC',
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `timezone`, `password`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Mahmoud Nairat', 'admin@hotmail.com', 'UTC', '$2y$10$Rf.7gW.v264zKeWP9kKN6OqbV3lj0SH9gR8pMSdAccgTGLieME532', 'DbbBDe9VbUTNf4DsVybuwB218gFRmITmBGnK9wHn2xFgsII0rYbXnCNM893V', NULL, '2015-08-07 11:39:10', '2015-08-22 17:08:32'),
(2, 'Abu Sa''ed ', 'abusaed@hotmail.com', 'UTC', '$2y$10$88i6wLmut9TpcezpcSnN5eaWpQMVj8pArxl.fAboSSVztAqrnvb12', 'a3lxxyCyElDg7QtxiNBATHs5CfGyJc2oaxKD4QI3ZHxQgPa547MAwGs3hTMY', NULL, '2015-08-15 21:40:13', '2015-08-15 21:41:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `locations_location_unique` (`name`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`), ADD KEY `permission_role_permission_id_index` (`permission_id`), ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`), ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`), ADD KEY `reports_user_id_index` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`), ADD KEY `role_user_role_id_index` (`role_id`), ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`), ADD KEY `times_location_id_index` (`location_id`), ADD KEY `times_report_id_index` (`report_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
ADD CONSTRAINT `reports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `times`
--
ALTER TABLE `times`
ADD CONSTRAINT `times_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`),
ADD CONSTRAINT `times_report_id_foreign` FOREIGN KEY (`report_id`) REFERENCES `reports` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
