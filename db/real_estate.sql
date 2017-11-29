-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 02:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `area_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `district_id`, `area_name`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Savar', 1, '2017-10-26 10:39:06', '2017-10-26 10:39:06'),
(2, 1, 'Shamoli', 1, '2017-10-26 10:40:36', '2017-10-26 10:42:34'),
(3, 3, 'Rangpur', 1, '2017-10-26 10:40:50', '2017-10-26 10:57:44'),
(4, 2, 'khulna Sador', 1, '2017-10-26 10:42:12', '2017-10-26 10:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Sadia', 'sadia@gmail.com', '01721401722', 'The Laravel query builder uses PDO parameter binding to protect your application against SQL injection attacks. There is no need to clean strings being passed as bindings.', '2017-10-28 00:15:20', '2017-10-28 00:15:20');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `district_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `district_name`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', 1, '2017-10-25 21:25:30', '2017-10-26 10:41:32'),
(2, 'Khulna', 1, '2017-10-25 21:25:43', '2017-10-25 21:25:43'),
(3, 'Rangpur', 1, '2017-10-25 21:25:54', '2017-10-25 21:26:10'),
(4, 'Comilla', 0, '2017-10-26 10:03:25', '2017-10-26 10:04:48');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit.', 'gallery-image/12.jpg', '2017-10-27 09:23:28', '2017-10-27 09:23:28'),
(2, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit.', 'gallery-image/13.jpg', '2017-10-27 09:23:37', '2017-10-27 09:23:37'),
(3, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit.', 'gallery-image/6.jpg', '2017-10-27 09:23:46', '2017-10-27 09:23:46'),
(4, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit.', 'gallery-image/7.jpg', '2017-10-27 09:24:08', '2017-10-27 09:24:08'),
(5, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit.', 'gallery-image/14.jpg', '2017-10-27 09:24:23', '2017-10-27 09:24:23'),
(6, 'E-commerce', 'gallery-image/6.jpg', '2017-10-28 03:34:10', '2017-10-28 03:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `land_owners`
--

CREATE TABLE `land_owners` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `land_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `land_owners`
--

INSERT INTO `land_owners` (`id`, `name`, `email`, `number`, `owner_address`, `land_area`, `land_size`, `land_address`, `created_at`, `updated_at`) VALUES
(1, 'Afia', 'afia@gmail.com', '01721441722', 'Savar,Dhaka', 'Savar', '50katha', 'Savar new market, Dhaka', '2017-10-28 03:09:53', '2017-10-28 03:09:53');

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
(3, '2017_10_25_142026_create_projecttypes_table', 2),
(4, '2017_10_25_142635_create_projectstatuses_table', 3),
(5, '2017_10_25_171512_create_districts_table', 4),
(6, '2017_10_25_171703_create_areas_table', 5),
(7, '2017_10_25_172048_create_projects_table', 6),
(8, '2017_10_25_172835_create_galleries_table', 7),
(9, '2017_10_27_041019_create_sliders_table', 8),
(10, '2017_10_28_054616_create_contacts_table', 9),
(11, '2017_10_28_085715_create_land_owners_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) NOT NULL,
  `project_status_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_description` text COLLATE utf8mb4_unicode_ci,
  `squre_fit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bath_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `type_id`, `project_status_id`, `district_id`, `area_id`, `image`, `project_description`, `squre_fit`, `floor`, `bed_no`, `bath_no`, `parking_no`, `publication_status`, `created_at`, `updated_at`) VALUES
(8, 'Anwar Group of Industries', 1, 1, 1, 1, 'project-image/11.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1800fit', '2nd Floor', '3bed', '2Bath', '2 Car', 1, '2017-10-27 20:19:06', '2017-10-30 00:51:19'),
(9, 'Anwar Group of Industries', 2, 2, 1, 1, 'project-image/12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1800fit', '3rd Floor', '4bed', '2Bath', '2 Car', 1, '2017-10-27 20:19:46', '2017-10-27 20:19:46'),
(10, 'Anwar Group of Industries', 2, 3, 1, 1, 'project-image/14.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1500fit', '5th Floor', '4bed', '2Bath', '2 Car', 1, '2017-10-27 20:20:19', '2017-10-27 20:20:19'),
(11, 'Equity Arunima', 1, 2, 3, 3, 'project-image/10.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1500fit', '5th Floor', '3bed', '2Bath', '2 Car', 1, '2017-10-27 20:21:14', '2017-10-27 20:21:14'),
(12, 'Equity Arunimas', 2, 2, 3, 3, 'project-image/5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1800fit', '2nd Floor', '4bed', '2Bath', '2 Car', 1, '2017-10-28 03:21:58', '2017-10-30 01:36:47'),
(13, 'Equity Kohinoor', 1, 1, 2, 4, 'project-image/8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '1200fit', '3rd Floor', '4bed', '2Bath', '2 Car', 1, '2017-10-28 03:23:02', '2017-10-27 20:23:02');

-- --------------------------------------------------------

--
-- Table structure for table `projectstatuses`
--

CREATE TABLE `projectstatuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `projectstatus_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projectstatuses`
--

INSERT INTO `projectstatuses` (`id`, `projectstatus_name`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Upcomming', 1, '2017-10-25 10:57:51', '2017-10-25 10:57:51'),
(2, 'Ongoing', 1, '2017-10-25 10:58:05', '2017-10-25 10:58:05'),
(3, 'Completed', 1, '2017-10-25 10:58:50', '2017-10-25 10:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `projecttypes`
--

CREATE TABLE `projecttypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projecttypes`
--

INSERT INTO `projecttypes` (`id`, `type_name`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Residential', 1, '2017-10-25 08:58:14', '2017-10-25 08:58:14'),
(2, 'Commercial', 1, '2017-10-25 09:00:11', '2017-10-25 09:00:11'),
(3, 'Combos', 0, '2017-10-25 09:00:22', '2017-10-25 09:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `caption`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Beautiful House', 'slider-image/banner.jpg', '2017-10-27 08:42:27', '2017-10-27 08:42:27'),
(2, 'New Banner', 'slider-image/banner1.jpg', '2017-10-27 08:44:05', '2017-10-27 08:44:05'),
(5, 'New Banner', 'slider-image/slider4.jpg', '2017-10-27 08:58:03', '2017-10-27 08:58:03'),
(6, 'New Banner', 'slider-image/slide3.jpg', '2017-10-27 08:58:11', '2017-10-27 08:58:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$evDPNqVynolIkCdU0zMq0ufMsCSdFzs7yyZzLx8rXLsAH1PngHBjC', 'RQdshU0gQYBpQNu5dfarWHbE2uMOwMhGnVvvdst3AMygM2prHlKSKhlfuSWp', '2017-10-25 07:34:41', '2017-10-25 07:34:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `land_owners`
--
ALTER TABLE `land_owners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `land_owners_email_unique` (`email`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectstatuses`
--
ALTER TABLE `projectstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecttypes`
--
ALTER TABLE `projecttypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `land_owners`
--
ALTER TABLE `land_owners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `projectstatuses`
--
ALTER TABLE `projectstatuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projecttypes`
--
ALTER TABLE `projecttypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
