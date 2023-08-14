-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 08:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedulemanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `start_date`, `end_date`, `completed`, `created_at`, `updated_at`) VALUES
(1, 'date', 'gftyht', '2023-08-08 11:22:00', '2023-08-23 11:22:00', 1, '2023-08-12 15:00:21', '2023-08-14 00:28:09'),
(2, 'hjgj', 'jhnjhk', '2023-08-13 10:38:00', '2023-08-14 10:39:00', 0, '2023-08-13 23:39:08', '2023-08-13 23:39:08'),
(3, 'hjgj', 'jhnjhk', '2023-08-13 10:38:00', '2023-08-14 10:39:00', 0, '2023-08-13 23:43:35', '2023-08-13 23:43:35'),
(4, 'hjgj', 'jhnjhk', '2023-08-13 10:38:00', '2023-08-14 10:39:00', 0, '2023-08-13 23:48:04', '2023-08-13 23:48:04'),
(5, 'hjgj', 'jhnjhk', '2023-08-13 10:38:00', '2023-08-14 10:39:00', 0, '2023-08-13 23:49:19', '2023-08-13 23:49:19'),
(6, 'fggh', 'vhjyg', '2023-08-11 10:52:00', '2023-08-14 10:52:00', 0, '2023-08-13 23:52:46', '2023-08-13 23:52:46'),
(7, 'fggh', 'vhjyg', '2023-08-11 10:52:00', '2023-08-14 10:52:00', 0, '2023-08-13 23:54:40', '2023-08-13 23:54:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
