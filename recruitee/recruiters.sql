-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 23, 2025 at 02:51 PM
-- Server version: 5.7.39
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruiters`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_certification`
--

CREATE TABLE `candidate_certification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `started_date` date NOT NULL,
  `completed_date` date NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_certification`
--

INSERT INTO `candidate_certification` (`id`, `user_id`, `school`, `started_date`, `completed_date`, `degree`, `area`, `description`, `created_at`) VALUES
(10, 13, 'University Of Sargodha', '2021-12-12', '2025-12-12', 'BS', 'Information Technology', 'I have done my BS in Information Tehnology form the university of Sargodha', '2024-12-07 15:26:18'),
(11, 15, 'University Of Sargodha', '2006-12-23', '2007-12-02', 'BS', 'Computer Sciene', 'amsdckjdhk', '2024-12-07 20:02:29'),
(12, 26, 'hjdgvchxlz', '2025-02-15', '2025-02-19', 'jkhfdips;', 'huf;jsd', 'xjvhbvgfsdzj', '2025-02-19 11:30:14');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_experience`
--

CREATE TABLE `candidate_experience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL DEFAULT '5',
  `started_date` date NOT NULL,
  `completed_date` date NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_experience`
--

INSERT INTO `candidate_experience` (`id`, `user_id`, `company`, `city`, `country`, `degree`, `experience`, `started_date`, `completed_date`, `description`, `created_at`) VALUES
(9, 13, 'Xecuters Pvt Limited', 'Chakwal', 'Pakistan', 'Senior Software Developer', 5, '2024-03-06', '2025-12-12', 'I have done a huge work on AI and ML in Xecuters Pvt Limited', '2024-12-07 15:27:58'),
(10, 15, 'NexHire', 'Sargodha', 'Pakistan', 'BS', 5, '2007-12-02', '2009-12-02', 'adnskfhlkd', '2024-12-07 20:02:49'),
(11, 26, 'bdsaljfb', 'nvzm;x', 'ljzdbk;v', 'kljnvcxklzc', 5, '2025-02-13', '2025-02-12', 'm,bz;', '2025-02-19 11:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg`
--

CREATE TABLE `candidate_reg` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` bigint(20) NOT NULL,
  `father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`id`, `user_id`, `first_name`, `middle_name`, `last_name`, `cnic`, `father_name`, `dob`, `nationality`, `phone`, `email`, `gender`, `religion`, `section`, `address`, `image`, `created_at`) VALUES
(11, 13, 'Malik', 'Mohsin', 'Azhar', 3720177498293, 'Azhar Mehmood', '2004-07-31', 'Pakistani', 3358300378, 'malikmohsinazhar@gmail.com', 'Male', 'Islam', 'Sunni', 'House # 83Street #B5 NCC Chakwal', NULL, '2024-12-07 15:25:11'),
(12, 15, 'Waqas', 'Ur', 'Haider', 762467213, 'Azhar Mehmood', '2005-01-21', 'Pakistani', 65372185837921, 'mehbbobali1@gmail.com', 'Male', 'islam', 'Sunni', 'jkladgshfadslkgwqdkj.gjk', NULL, '2024-12-07 20:02:02'),
(13, 26, 'Bilal', 'Ur', 'Rehman', 63274692387, 'dfgb', '2025-02-13', 'LNJK;HSDJI', 87320856, 'malikmohsinazhar@gmail.com', 'mALE', 'Islam', 'Sunni', 'ejiejwoifndhjkdsfhjka', NULL, '2025-02-19 11:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_skill`
--

CREATE TABLE `candidate_skill` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` bigint(20) NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` int(11) NOT NULL DEFAULT '5',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_skill`
--

INSERT INTO `candidate_skill` (`id`, `user_id`, `job_title`, `work_location`, `company`, `full_time`, `salary`, `resume`, `skills`, `experience`, `created_at`) VALUES
(10, 13, 'Developer', 'Sargodha', 'Software', 'Full-Time,Permanent', 200000, NULL, 'Laravel, HTML ,CSS ,Java Script and Adobe and Sql', 5, '2024-12-07 15:29:15'),
(11, 26, 'bvkjlzg', 'klxcvnzjk', 'kvnckxl', 'Full-Time', 8743829017, NULL, 'jkcxbvfdzkj', 5, '2025-02-19 11:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `id` int(11) NOT NULL,
  `test` int(11) NOT NULL DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `billing_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `charges`
--

INSERT INTO `charges` (`id`, `test`, `status`, `name`, `type`, `price`, `billing_on`, `plan_id`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 0, 'Paid', 'BUSINESS', 'Employer', 45, '2024-12-02 19:07:35', 3, 1, '2024-12-02 19:07:35', '2024-12-02 19:07:35'),
(11, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 16:05:59', 4, 4, '2024-11-22 16:05:59', '2024-11-22 16:05:59'),
(14, 0, 'Paid', 'BUSINESS', 'Employee', 45, '2024-11-22 16:13:20', 6, 4, '2024-11-22 16:13:20', '2024-11-22 16:13:20'),
(16, 0, 'Paid', 'BUSINESS', 'Employee', 45, '2024-11-22 16:14:34', 6, 4, '2024-11-22 16:14:34', '2024-11-22 16:14:34'),
(17, 0, 'Paid', 'BUSINESS', 'Employee', 45, '2024-11-22 16:14:36', 6, 4, '2024-11-22 16:14:36', '2024-11-22 16:14:36'),
(27, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 23:02:41', 4, 7, '2024-11-22 23:02:41', '2024-11-22 23:02:41'),
(28, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 23:03:24', 4, 7, '2024-11-22 23:03:24', '2024-11-22 23:03:24'),
(29, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 23:14:06', 4, 7, '2024-11-22 23:14:06', '2024-11-22 23:14:06'),
(30, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 23:17:24', 4, 7, '2024-11-22 23:17:24', '2024-11-22 23:17:24'),
(31, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 23:17:25', 4, 7, '2024-11-22 23:17:25', '2024-11-22 23:17:25'),
(32, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-22 23:29:46', 4, 7, '2024-11-22 23:29:46', '2024-11-22 23:29:46'),
(33, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-23 13:21:45', 4, 8, '2024-11-23 13:21:45', '2024-11-23 13:21:45'),
(34, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-23 13:46:21', 4, 8, '2024-11-23 13:46:21', '2024-11-23 13:46:21'),
(35, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-23 13:57:45', 4, 8, '2024-11-23 13:57:45', '2024-11-23 13:57:45'),
(36, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-23 13:57:46', 4, 8, '2024-11-23 13:57:46', '2024-11-23 13:57:46'),
(37, 0, 'Paid', 'STARTER', 'Employee', 10, '2024-11-23 13:59:15', 4, 8, '2024-11-23 13:59:15', '2024-11-23 13:59:15'),
(47, 0, 'Paid', 'PROFESSIONAL', 'Employer', 25, '2024-12-02 19:17:57', 2, 1, '2024-12-02 19:17:57', '2024-12-02 19:17:57'),
(48, 0, 'Paid', 'PROFESSIONAL', 'Employer', 25, '2024-12-02 19:34:40', 2, 1, '2024-12-02 19:34:40', '2024-12-02 19:34:40'),
(49, 0, 'Paid', 'STARTER', 'Employer', 10, '2024-12-02 19:38:27', 1, 1, '2024-12-02 19:38:27', '2024-12-02 19:38:27'),
(50, 0, 'Paid', 'BUSINESS', 'Employer', 45, '2024-12-02 19:48:32', 3, 1, '2024-12-02 19:48:32', '2024-12-02 19:48:32'),
(51, 0, 'Paid', 'BUSINESS', 'Employer', 45, '2024-12-02 19:48:34', 3, 1, '2024-12-02 19:48:34', '2024-12-02 19:48:34'),
(52, 0, 'Paid', 'PROFESSIONAL', 'Employer', 25, '2024-12-02 19:50:57', 2, 1, '2024-12-02 19:50:57', '2024-12-02 19:50:57'),
(53, 0, 'Paid', 'PROFESSIONAL', 'Employer', 25, '2024-12-07 14:55:36', 2, 11, '2024-12-07 14:55:36', '2024-12-07 14:55:36'),
(54, 0, 'Paid', 'STARTER', 'employer', 10, '2024-12-07 17:28:27', 1, 14, '2024-12-07 17:28:27', '2024-12-07 17:28:27'),
(55, 0, 'Paid', 'STARTER', 'employer', 10, '2024-12-07 17:28:27', 1, 14, '2024-12-07 17:28:27', '2024-12-07 17:28:27'),
(56, 0, 'Paid', 'STARTER', 'employer', 10, '2024-12-07 17:28:52', 1, 14, '2024-12-07 17:28:52', '2024-12-07 17:28:52'),
(57, 0, 'Paid', 'STARTER', 'employer', 10, '2024-12-07 17:28:53', 1, 14, '2024-12-07 17:28:53', '2024-12-07 17:28:53'),
(58, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 17:39:20', 2, 14, '2024-12-07 17:39:20', '2024-12-07 17:39:20'),
(59, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 17:39:20', 2, 14, '2024-12-07 17:39:20', '2024-12-07 17:39:20'),
(60, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 17:39:20', 2, 14, '2024-12-07 17:39:20', '2024-12-07 17:39:20'),
(61, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 17:39:21', 2, 14, '2024-12-07 17:39:21', '2024-12-07 17:39:21'),
(62, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 17:39:21', 2, 14, '2024-12-07 17:39:21', '2024-12-07 17:39:21'),
(63, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 17:39:21', 2, 14, '2024-12-07 17:39:21', '2024-12-07 17:39:21'),
(64, 0, 'Paid', 'BUSINESS', 'employer', 45, '2024-12-07 19:08:49', 3, 14, '2024-12-07 19:08:49', '2024-12-07 19:08:49'),
(65, 0, 'Paid', 'BUSINESS', 'employer', 45, '2024-12-07 19:08:51', 3, 14, '2024-12-07 19:08:51', '2024-12-07 19:08:51'),
(66, 0, 'Paid', 'PROFESSIONAL', 'employer', 25, '2024-12-07 19:18:37', 2, 14, '2024-12-07 19:18:37', '2024-12-07 19:18:37');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `tittle` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sub_category` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marital_status` int(11) NOT NULL,
  `experience` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` bigint(20) NOT NULL,
  `discipline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discipline_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `uid`, `tittle`, `location`, `job_category`, `job_sub_category`, `job_desc`, `job_type`, `marital_status`, `experience`, `salary`, `discipline`, `discipline_category`, `skills`, `created_at`) VALUES
(7, 14, 'Android Developer', 'Sargodha', 'Management', 'Miantenence', 'I need a developer in my software house near university road sargodha', 'Permanent', 0, '1', 200000, 'BS', 'Information Technology', 'Android Developer', '2024-12-07 15:32:42'),
(8, 14, 'Android Developer', 'Sargodha', 'Management', 'Miantenence', 'I need a developer in my software house near university road sargodha', 'Permanent', 0, '1', 200000, 'BS', 'Information Technology', 'Android Developer', '2024-12-07 15:46:52'),
(9, 14, 'Android Developer', 'Sargodha City', 'Management', 'Miantenence', 'I need a android developer', 'Full-Time', 0, '1', 200000, 'BS', 'Information Technology', 'I just need a best android developer in sargodha city', '2024-12-07 17:36:09'),
(10, 14, 'Android Developer', 'Sargodha City', 'Management', 'Miantenence', 'I need a android developer', 'Full-Time', 0, '1', 200000, 'BS', 'Information Technology', 'I just need a best android developer in sargodha city', '2024-12-07 17:36:10'),
(11, 25, 'Backend Developer', 'Sargodha', 'Full Time', 'Miantenence', 'ugfuidsf', 'Full-Time', 0, '5', 100000, 'BS', 'Information Technology', 'bhsgdh;i', '2025-02-19 11:16:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `test` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `type`, `name`, `price`, `test`, `created_at`, `updated_at`) VALUES
(1, 'employer', 'STARTER', 10, 0, '2024-12-07 17:24:40', '2024-12-07 17:24:40'),
(2, 'employer', 'PROFESSIONAL', 25, 0, '2024-12-07 17:33:23', '2024-12-07 17:33:23'),
(3, 'employer', 'BUSINESS', 45, 0, '2024-12-07 17:34:23', '2024-12-07 17:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `status_paid` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `type`, `plan_id`, `status_paid`, `created_at`) VALUES
(13, 'Malik Mohsin Azhar', 'malikmohsinazhar@gmail.com', '$2y$12$aZOfnQ9f4sfqqcFCnM7ZCeNKN8FziGgizXFdSt.2AAARSS/5F.KyS', 1, 'employee', NULL, 0, '2024-12-07 15:22:57'),
(14, 'MalikAzhar Awan', 'malikmohsinazhar.1@gmail.com', '$2y$12$a08J1VJIWzI06XiA9RiDbulZR1qenDgRFVF/GQgQ1FIOb82gTHKGi', 1, 'employer', 2, 1, '2024-12-07 15:30:54'),
(15, 'Malik Mohsin Azhar', 'nabeelabbas123@gmail.com', '$2y$12$BlQ6T3eC1gnx5Zt21Gunpu39c/qzntHGTBE/2Nmdh0lgf/falwWVu', 1, 'employee', NULL, 0, '2024-12-07 20:00:07'),
(16, 'Mehboob Ali', 'mehboobali8044@gmail.com', '$2y$12$L51NBzZoBa96ZKNV2oYWMemQVn73CwjvX4XhxK5xw8FGE3GXlanYu', 1, 'employee', NULL, 0, '2024-12-31 18:45:52'),
(17, '787789', '76796@gmail.com', '$2y$12$QQcbUhuomHRIhZZZllYCdO2fCpUryl5DWKL.B3ovCpHbIx0NNp7ni', 1, 'employee', NULL, 0, '2024-12-31 18:51:54'),
(18, 'Sunbal Nawaz', 'sunbalnawaz@gmail.com', '$2y$12$5aZ06FiWsVyQVpEORPis9u2LTUUZKh.IMiGmUD0s9mOM2tA2x/TyS', 1, 'employer', NULL, 0, '2024-12-31 23:08:44'),
(19, 'Sunbal Nawaz', 'sunbalnawaz@gail.com', '$2y$12$YaYsnrUGv6z/RU7Rr2YaBeBVDuc8LA0jsTQ/MQtsQLUzb5Y7Wjny2', 1, 'employer', NULL, 0, '2024-12-31 23:12:13'),
(20, 'Bilal Rehman', 'rehmanbilal010@gmail.com', '$2y$12$G/sqcCCS.qZhaowVLGcupe8OoxuQ9akKlurT/tUxUGrqJIrFKXega', 1, 'employee', NULL, 0, '2025-01-01 08:55:13'),
(21, 'Azmat Ali', 'azmatali123@gmail.com', '$2y$12$jcy0RNlTut9.GrIfRKo8bu5z1H0SB1wSQCkVsAwGcJytALc1bnHg2', 1, 'employer', NULL, 0, '2025-01-01 11:09:27'),
(22, 'Quratulain', 'quratulain.1@gmail.com', '$2y$12$yzA3ob8TDgqYiAXA/s1A8.KKfidQjtHnngU5IXDsSSMPcTNMGQJpC', 1, 'employee', NULL, 0, '2025-01-27 11:16:33'),
(23, 'Sunbal', 'sunbalnawaz.1@gmail.com', '$2y$12$vFHDEurk7/DxdjGf9V/QL.xykOQOeKRq2jKlkL1cjNCqpDIcch3WO', 1, 'employer', NULL, 0, '2025-02-19 11:09:56'),
(24, 'Sunbal Nawaz', 'sunbal.1@gmail.com', '$2y$12$78vX1ZK5CqqjhLukTirBIe9tXPgMMZyQXIfVLuQlMADRZy.GS8ccm', 1, 'employer', NULL, 0, '2025-02-19 11:12:40'),
(25, 'Sunbal Nawaz', 'sunbal11@gmail.com', '$2y$12$W3gYkctt5GddG19LpmJ7heKz060Wojk7Z.uEQGKCjc8EgBROMATOm', 1, 'employer', NULL, 0, '2025-02-19 11:14:00'),
(26, 'Sunbal Nawaz', 'Sunbal123@gmail.com', '$2y$12$BtokQbFmuhefQFG3FRm55e3qlLVRCuWKtfBKwS7IpYK.ccE1lQs1G', 1, 'employee', NULL, 0, '2025-02-19 11:20:45'),
(27, 'Anmol', 'anmol@gmail.com', '$2y$12$.twwhH3/9eT.qK5L5.s1ee3Td4Vu1JVHdE/ecrA6eS4IVikI0wlqq', 1, 'employee', NULL, 0, '2025-02-19 21:53:07'),
(28, 'hello', 'hello@mail.com', '$2y$12$HailNtao5ZaMJz5sttIl6eP88dtcCR/TkIA2Tze283VNEXkJbkFEi', 1, 'employee', NULL, 0, '2025-02-20 15:33:34');

-- --------------------------------------------------------

--
-- Table structure for table `zoom_meetings`
--

CREATE TABLE `zoom_meetings` (
  `id` int(11) NOT NULL,
  `orgId` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `host_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `candidate_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host_url` longtext COLLATE utf8mb4_unicode_ci,
  `candidate_url` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zoom_meetings`
--

INSERT INTO `zoom_meetings` (`id`, `orgId`, `uid`, `host_email`, `topic`, `start_time`, `timezone`, `candidate_email`, `host_url`, `candidate_url`, `created_at`) VALUES
(1, 8, 14, 'malikmohsinazhar.1@gmail.com', 'Android Developer', '2024-12-09T19:57', 'Pacific/Pago_Pago', 'malikmohsinazhar@gmail.com', 'https://us05web.zoom.us/s/83889977976?zak=eyJ0eXAiOiJKV1QiLCJzdiI6IjAwMDAwMSIsInptX3NrbSI6InptX28ybSIsImFsZyI6IkhTMjU2In0.eyJpc3MiOiJ3ZWIiLCJjbHQiOjAsIm1udW0iOiI4Mzg4OTk3Nzk3NiIsImF1ZCI6ImNsaWVudHNtIiwidWlkIjoidVFDZjhsT2xTcldWei1Va1YwNVlGdyIsInppZCI6ImI0NjkyOTZiMDYzZjQ3YTY4N2I5OGEzN2ZlM2QyNTEzIiwic2siOiIwIiwic3R5IjoxLCJ3Y2QiOiJ1czA1IiwiZXhwIjoxNzMzNTkwNDA0LCJpYXQiOjE3MzM1ODMyMDQsImFpZCI6Inh0UGpuYlZzVDVDNkU1Z3d6RGQ1TEEiLCJjaWQiOiIifQ.amFDbhokw9qT7ryOvSERUmftvfqLAo54gpIyaZ2y5a4', 'https://us05web.zoom.us/j/83889977976?pwd=bSBnLchSZqcbxleo1BmHEFaWuBGZ82.1', '2024-12-07 19:53:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_certification`
--
ALTER TABLE `candidate_certification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_skill`
--
ALTER TABLE `candidate_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zoom_meetings`
--
ALTER TABLE `zoom_meetings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_certification`
--
ALTER TABLE `candidate_certification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candidate_experience`
--
ALTER TABLE `candidate_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `candidate_skill`
--
ALTER TABLE `candidate_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `zoom_meetings`
--
ALTER TABLE `zoom_meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
