-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2024 at 06:10 PM
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
-- Database: `fyp.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_models`
--

CREATE TABLE `class_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_models`
--

INSERT INTO `class_models` (`id`, `name`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'BSIT 7th Evening', '0', 0, 1, '2024-03-18 16:14:21', '2024-03-18 16:28:49'),
(2, 'BSIT 8th Morning', '0', 1, 1, '2024-03-18 16:29:43', '2024-03-18 17:25:01'),
(3, NULL, NULL, 1, 1, '2024-03-18 16:30:56', '2024-03-18 16:31:00'),
(4, 'BSIT 8th Morning', '0', 0, 1, '2024-03-18 16:33:49', '2024-03-18 17:14:57'),
(5, 'BSIT 8th Evening', '0', 0, 1, '2024-03-18 17:15:25', '2024-03-18 17:15:25'),
(6, 'BSIT 5th Morning', '0', 0, 1, '2024-03-19 04:42:36', '2024-03-19 07:06:59'),
(7, 'BSIT 5th Evening', '0', 0, 1, '2024-03-19 04:42:56', '2024-03-19 04:42:56'),
(8, 'BSIT 1st Morning', NULL, 0, 1, '2024-04-01 03:02:30', '2024-04-01 03:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `task_date` date DEFAULT NULL,
  `submission_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `student_id`, `teacher_id`, `file`, `description`, `task_date`, `submission_date`, `created_at`, `updated_at`) VALUES
(6, 6, 5, '2024032304285284tlgthgdn0rvgz06xeb.ppt', '<p>hello student</p>', '2024-03-23', '2024-03-22', '2024-03-23 23:28:52', '2024-03-24 13:18:48'),
(7, 12, 5, '20240323050141e8ylaf52brtbvpauu86k.ppt', '<p>hyy</p>', '2024-03-23', '2024-03-29', '2024-03-24 00:01:41', '2024-03-24 00:16:05'),
(8, 11, 5, '20240324045522zulxnm0imeznbwda7qzl.ppt', '<p style=\"text-align: left; \">Submit this task till before date.</p>', '2024-03-24', '2024-03-27', '2024-03-24 11:55:22', '2024-03-24 11:55:22'),
(9, 6, 5, '202403240456248ym0zglqkqssawkyhkod.ppt', '<p>hello babar</p>', '2024-03-23', '2024-03-25', '2024-03-24 11:56:24', '2024-03-24 11:56:24'),
(11, 11, 5, '20240324062332eq9or9e01oeuqtewb1bm.pdf', '<p>submit it</p>', '2024-03-23', '2024-03-23', '2024-03-24 13:23:32', '2024-03-24 13:23:32'),
(12, 6, 5, '20240324102750ed8cmuundrnmkkjz7yyv.jpg', '<p>submit this pic again me</p>', '2024-03-24', '2024-03-25', '2024-03-24 17:27:50', '2024-03-24 17:27:50'),
(13, 14, 10, '20240324104322nniykiqwbj7lt5w7pg44.jpg', '<p>hello student from sehrish</p>', '2024-03-24', '2024-03-25', '2024-03-24 17:43:22', '2024-03-24 17:43:22'),
(14, 11, 5, '20240404054411gni0hbztvkqoov9vk2n4.png', NULL, '2024-04-04', '2024-04-05', '2024-04-05 01:44:11', '2024-04-05 01:44:11'),
(15, 23, 5, NULL, '<p>hhhh</p>', '2024-04-05', '2024-04-06', '2024-04-05 03:26:54', '2024-04-05 03:26:54');

-- --------------------------------------------------------

--
-- Table structure for table `logsubmits`
--

CREATE TABLE `logsubmits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logsubmits`
--

INSERT INTO `logsubmits` (`id`, `task_id`, `student_id`, `file`, `description`, `created_at`, `updated_at`) VALUES
(1, 10, 14, '20240324054708hfee35b31nddfvkxu6xf.docx', '<h4 style=\"text-align: left; \">hi sir I have submitted my task please check it.<span style=\"font-family: Helvetica;\">﻿</span></h4>', '2024-03-24 12:47:08', '2024-03-24 12:47:08'),
(2, 8, 11, '20240324055853hpdutpccksyqmszj0ilq.ppt', '<ol><li>submitted work.</li></ol>', '2024-03-24 12:58:53', '2024-03-24 12:58:53'),
(3, 6, 11, '202403240619100fgrrbad1iexfykw8lyq.ppt', '<p>Yes sirr!!</p>', '2024-03-24 13:19:10', '2024-03-24 13:19:10'),
(4, 12, 6, '20240324102915c0mx1hroqzspadfshejp.jpg', '<p>please check it .</p>', '2024-03-24 17:29:15', '2024-03-24 17:29:15'),
(5, 13, 14, '20240324104408mncy6ldsylutpwqdc5lq.jpg', '<p>submitted from anas&nbsp;</p>', '2024-03-24 17:44:08', '2024-03-24 17:44:08'),
(6, 11, 11, '20240325045211wf8v2lr6fxsq1hbszawd.jpg', '<p>sub</p>', '2024-03-25 11:52:11', '2024-03-25 11:52:11'),
(7, 14, 11, NULL, '<p>submitted</p>', '2024-04-05 03:27:55', '2024-04-05 03:27:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_18_085825_create_class_models_table', 2),
(7, '2024_03_19_004346_create_proposals_table', 3),
(8, '2024_03_20_070234_create_noticeboards_table', 4),
(9, '2024_03_20_072529_create_notice_board_message_table', 5),
(10, '2024_03_22_081050_create_logs_table', 6),
(11, '2024_03_22_081812_create_logs_table', 7),
(12, '2024_03_23_111035_create_logs_table', 8),
(13, '2024_03_24_053704_create_logsubmits_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `noticeboards`
--

CREATE TABLE `noticeboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `notice_date` date DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noticeboards`
--

INSERT INTO `noticeboards` (`id`, `created_by`, `title`, `notice_date`, `publish_date`, `message`, `created_at`, `updated_at`) VALUES
(3, 1, 'hy', '2024-03-22', '2024-03-22', '<p>hy</p>', '2024-03-23 12:51:01', '2024-03-23 12:51:01'),
(4, 1, 'Meeting Notice', '2024-04-04', '2024-04-05', '<h4 style=\"text-align: left; \"><b>dear students tomorrow at 11 AM we will have a meeeting regarding project report.</b></h4>', '2024-04-05 03:24:34', '2024-04-05 03:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `notice_board_message`
--

CREATE TABLE `notice_board_message` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noticeboards_id` int(11) DEFAULT NULL,
  `message_to` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notice_board_message`
--

INSERT INTO `notice_board_message` (`id`, `noticeboards_id`, `message_to`, `created_at`, `updated_at`) VALUES
(17, 2, 3, '2024-03-20 17:05:20', '2024-03-20 17:05:20'),
(18, 2, 2, '2024-03-20 17:05:20', '2024-03-20 17:05:20'),
(20, 3, 3, '2024-03-23 12:51:01', '2024-03-23 12:51:01'),
(21, 1, 3, '2024-03-23 17:49:05', '2024-03-23 17:49:05'),
(22, 1, 2, '2024-03-23 17:49:05', '2024-03-23 17:49:05'),
(23, 4, 3, '2024-04-05 03:24:34', '2024-04-05 03:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proposals`
--

CREATE TABLE `proposals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `feature` text DEFAULT NULL,
  `methodology` text DEFAULT NULL,
  `tools` text DEFAULT NULL,
  `suggestion` text DEFAULT NULL,
  `status` varchar(255) DEFAULT 'waiting',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proposals`
--

INSERT INTO `proposals` (`id`, `student_id`, `title`, `description`, `feature`, `methodology`, `tools`, `suggestion`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'FYP Management', '<p>This is my final year project.</p>', 'chat App', 'Sdlc', 'Laravel and bootstrap', 'tools', 'waiting', '2024-03-19 08:58:03', '2024-03-19 09:20:10'),
(2, NULL, 'Ecommerce', '<p>Ecommerce<br></p>', 'Ecommerce', 'Ecommerce', 'Ecommerce', NULL, 'waiting', '2024-03-19 12:46:46', '2024-03-19 12:46:46'),
(4, 13, 'FYP Management', '<p>Heyy this is my final year project.</p>', 'chat app', 'sdlc', 'laravel and bootstrap', NULL, 'waiting', '2024-03-19 14:14:19', '2024-03-19 14:14:19'),
(5, 11, 'Ecommerce Project (Selling CLothes)', '<h4><span style=\"color: rgb(0, 0, 0); font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque quam, efficitur id purus ac, tempus ultrices nibh. Aliquam gravida cursus auctor. In porta, diam bibendum fermentum mollis, leo erat bibendum orci, a imperdiet nibh nibh facilisis orci. Mauris faucibus sagittis quam ac faucibus. Suspendisse potenti. Maecenas eleifend neque tempor mauris ornare, sodales iaculis ex rutrum. Donec tincidunt ex eu nisl aliquam, at dictum velit accumsan. In hac habitasse platea dictumst. Nullam interdum ipsum a urna tincidunt, et commodo sapien ultricies. Integer eget velit augue. Fusce euismod augue imperdiet, vestibulum mi vel, vestibulum purus. Sed blandit at erat vitae ullamcorper. Suspendisse potenti. Phasellus tellus nisi, euismod ut lectus nec, eleifend consequat dui. Proin faucibus mauris dui, sed venenatis elit porttitor sit amet.</span></h4>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque quam, efficitur id purus ac, tempus ultrices nibh. Aliquam gravida cursus auctor. In porta, diam bibendum fermentum mollis, leo erat bibendum orci, a imperdiet nibh nibh facilisis orci. Mauris faucibus sagittis quam ac faucibus. Suspendisse potenti. Maecenas eleifend neque tempor mauris ornare, sodales iaculis ex rutrum. Donec tincidunt ex eu nisl aliquam, at dictum velit accumsan. In hac habitasse platea dictumst. Nullam interdum ipsum a urna tincidunt, et commodo sapien ultricies. Integer eget velit augue. Fusce euismod augue imperdiet, vestibulum mi vel, vestibulum purus. Sed blandit at erat vitae ullamcorper. Suspendisse potenti. Phasellus tellus nisi, euismod ut lectus nec, eleifend consequat dui. Proin faucibus mauris dui, sed venenatis elit porttitor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque quam, efficitur id purus ac, tempus ultrices nibh. Aliquam gravida cursus auctor. In porta, diam bibendum fermentum mollis, leo erat bibendum orci, a imperdiet nibh nibh facilisis orci. Mauris faucibus sagittis quam ac faucibus. Suspendisse potenti. Maecenas eleifend neque tempor mauris ornare, sodales iaculis ex rutrum. Donec tincidunt ex eu nisl aliquam, at dictum velit accumsan. In hac habitasse platea dictumst. Nullam interdum ipsum a urna tincidunt, et commodo sapien ultricies. Integer eget velit augue. Fusce euismod augue imperdiet, vestibulum mi vel, vestibulum purus. Sed blandit at erat vitae ullamcorper. Suspendisse potenti. Phasellus tellus nisi, euismod ut lectus nec, eleifend consequat dui. Proin faucibus mauris dui, sed venenatis elit porttitor sit amet.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque quam, efficitur id purus ac, tempus ultrices nibh. Aliquam gravida cursus auctor. In porta, diam bibendum fermentum mollis, leo erat bibendum orci, a imperdiet nibh nibh facilisis orci. Mauris faucibus sagittis quam ac faucibus. Suspendisse potenti. Maecenas eleifend neque tempor mauris ornare, sodales iaculis ex rutrum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur neque quam, efficitur id purus ac, tempus ultrices nibh. Aliquam gravida cursus auctor. In porta, diam bibendum fermentum mollis, leo erat bibendum orci, a imperdiet nibh nibh facilisis orci. Mauris faucibus sagittis quam ac faucibus. Suspendisse potenti. Maecenas eleifend neque tempor mauris ornare, sodales iaculis ex rutrum. Donec tincidunt ex eu nisl aliquam, at dictum velit accumsan. In hac habitasse platea dictumst. Nullam interdum ipsum a urna tincidunt, et commodo sapien ultricies. Integer eget velit augue. Fusce euismod augue imperdiet, vestibulum mi vel, vestibulum purus. Sed blandit at erat.', 'Rejected', '2024-03-19 14:16:10', '2024-03-31 14:03:45'),
(6, 12, 'Chat App', '<p>This is Chat App</p>', 'This is Chat App', 'This is Chat App', 'This is Chat App', 'Mention Your tools', 'Approved', '2024-03-19 16:14:36', '2024-03-19 16:36:52'),
(7, 14, 'Ecommerce Website', '<p>hello This is my fyp</p>', 'real time communication', 'sdlc\r\n                                     approcah', 'laravel', NULL, 'Approved', '2024-03-24 12:14:57', '2024-03-24 12:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL DEFAULT 3 COMMENT '1:admin,2:teacher,3:Student',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `class_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `status`, `class_id`, `teacher_id`, `is_delete`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', 1, NULL, '$2y$10$OQv8fHrDsvg2xXO9OPvw0e0Oi1C1or.EWuEbWuqufO.BrtbK6HfBy', 0, NULL, NULL, 0, NULL, '2024-03-13 04:44:30', '2024-03-23 14:38:35'),
(2, 'Teacher', 'teacher@gmail.com', 2, NULL, '$2y$10$86iNafL60y1TmpPiPIB47eP6Wz/zvRLNDd2lRgSYEo6NnTmLF8/9S', 0, NULL, NULL, 0, NULL, NULL, NULL),
(3, 'Student', 'student@gmail.com', 3, NULL, '$2y$10$5xEFtS3pCsnzudLV63pFJOJt8nn0i1oC5oCg2sOeDqLvYMqS2nnBS', 0, 1, 10, 1, NULL, NULL, '2024-03-23 17:06:32'),
(4, 'Babar Ali', 'babar@gmail.com', 1, NULL, '$2y$10$Ao3wx3BuSLaXqt1kxHY8zu/HCh990PD4kFJtfGc1TY/M1wEdpLd/2', 1, NULL, NULL, 0, NULL, '2024-03-18 14:59:08', '2024-03-22 19:54:07'),
(5, 'Muhammad Furqan', 'furqan@gmail.com', 2, NULL, '$2y$10$8yDspjyJtP4BN7w8A5mP0.NSivx.MqhfgnAlWxERmniDHGf3deSpy', 0, NULL, NULL, 0, NULL, '2024-03-18 15:53:50', '2024-03-19 17:41:41'),
(6, 'Babar Ali', 'bob@gmail.com', 3, NULL, '$2y$10$W2sgt3hfdgRRsh.f8zV4K.KaflUdjfXxSQG4w/E7/oSK1uaH64IzO', 0, 1, 5, 0, NULL, '2024-03-18 17:19:26', '2024-03-24 11:57:28'),
(7, 'Iqra', 'iqra@gmail.com', 3, NULL, '$2y$10$H4slaKZ2JCouslPLMH.EO.eJMLl4BHnYuVEiqykNI02Io2WD0yrs2', 0, 2, 2, 0, NULL, '2024-03-18 17:22:51', '2024-03-18 23:49:57'),
(8, 'Muhammad ALi', 'ali@gmail.com', 3, NULL, '$2y$10$tDmo1gC6C8v.7GFUzjrjQuZzxjNILo3n35HtfKa6ag8iQsQcS6NJq', 0, 5, 2, 0, NULL, '2024-03-18 17:25:32', '2024-03-19 07:05:19'),
(9, 'Admin Two', 'admin2@gmail.com', 1, NULL, '$2y$10$2ThVeTHXo/ApL3eg79o4buSOCWx0dFNqQn/TUaKNf4ojKgRPfMtTq', 0, NULL, NULL, 0, NULL, '2024-03-19 04:33:40', '2024-03-19 04:33:54'),
(10, 'Sehrish Zafar', 'sherish@gmail.com', 2, NULL, '$2y$10$BRo45JGNLqoMSV.CYdtoUOvbeT8d8JUTwxHzvstSsMsx0iGiYRpFC', 0, NULL, NULL, 0, NULL, '2024-03-19 04:35:47', '2024-03-24 11:35:36'),
(11, 'Kiran', 'kiran@gmail.com', 3, NULL, '$2y$10$LQJuSCGWluyY0Obl9K0d8.v974drAG79JJmjW3IcEFwvuVc.oMSeS', 0, 6, 5, 0, NULL, '2024-03-19 05:14:48', '2024-03-19 17:42:33'),
(12, 'Laiba', 'laiba@gmail.com', 3, NULL, '$2y$10$x1U4A4ExXm2fQquMDxD/6eotxPGDW.FBoCyX9pcj1eioJ6MYhYdQi', 0, 6, 5, 0, NULL, '2024-03-19 05:15:17', '2024-03-19 06:27:48'),
(13, 'Bisma', 'bisma@gmail.com', 3, NULL, '$2y$10$E2IyY5ROzYtRSCiRXdFlF.lZXXcfqs8wpHZlSsZuu1vGZD1c2zPQy', 0, 7, 2, 0, NULL, '2024-03-19 05:15:42', '2024-03-18 23:50:00'),
(14, 'Anas', 'anas@gmail.com', 3, NULL, '$2y$10$J8iE5iqDljtAkQmIWaun3e44bhZo1vrT5.YpWhH4gKUIM2bMjLRJ6', 0, 7, 10, 0, NULL, '2024-03-19 05:16:06', '2024-03-24 12:09:52'),
(15, 'Muhammad Azam', 'azam@gmail.com', 3, NULL, '$2y$10$SvXnN0nZjQ7hxymz5ZW3c.16qZUKwNYZSLOaErqkBPW1exnvzjOP6', 0, 4, NULL, 0, NULL, '2024-03-18 19:52:35', '2024-03-18 23:48:59'),
(16, 'Zahra', 'zahra@gmail.com', 3, NULL, '$2y$10$Zq.o5UG3yr34rQov0nGbiOyXVxEqo3/fxOeA9IBpcAgfHi8uh01H2', 0, 4, NULL, 0, NULL, '2024-03-23 13:19:15', '2024-03-23 13:19:15'),
(17, 'Ikram', 'ikram@gmail.com', 3, NULL, '12345', 0, 8, NULL, 0, NULL, '2024-04-01 03:11:13', '2024-04-01 03:11:13'),
(18, 'Karan', 'karan@gmail.com', 3, NULL, '$2y$10$yWcHos8Tp9p7deRDCYVEHuiD1wwqXJuv/ZQRKFEFEaTravp0q5HB.', 0, 5, NULL, 0, NULL, '2024-04-01 07:48:31', '2024-04-01 07:52:25'),
(19, 'Raju', 'raju@gmail.com', 3, NULL, '12345', 0, NULL, NULL, 0, NULL, '2024-04-01 07:48:31', '2024-04-01 07:48:31'),
(22, 'Rock', 'rock@gmail.com', 3, NULL, '12345', 0, NULL, NULL, 0, NULL, '2024-04-01 08:07:24', '2024-04-01 08:07:24'),
(23, 'John', 'john@gmail.com', 3, NULL, '12345', 0, NULL, 5, 0, NULL, '2024-04-01 08:07:24', '2024-04-05 03:19:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_models`
--
ALTER TABLE `class_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logsubmits`
--
ALTER TABLE `logsubmits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticeboards`
--
ALTER TABLE `noticeboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_board_message`
--
ALTER TABLE `notice_board_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `proposals`
--
ALTER TABLE `proposals`
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
-- AUTO_INCREMENT for table `class_models`
--
ALTER TABLE `class_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `logsubmits`
--
ALTER TABLE `logsubmits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `noticeboards`
--
ALTER TABLE `noticeboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notice_board_message`
--
ALTER TABLE `notice_board_message`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proposals`
--
ALTER TABLE `proposals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
