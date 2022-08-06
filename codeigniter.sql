-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 06:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(14, '2022-08-03-065922', 'App\\Database\\Migrations\\Peserta', 'default', 'App', 1659799668, 1),
(15, '2022-08-06-090301', 'App\\Database\\Migrations\\Todo', 'default', 'App', 1659799668, 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `name`, `email`, `created_at`, `update_at`) VALUES
(1, 'Alex Budiman', 'alex.budiman@gmail.com', '2022-08-06 10:52:41', NULL),
(2, 'Ivanka Putri', 'ivanka.putri@gmail.com', '2022-08-06 10:52:41', NULL),
(3, 'Sastro Wardoyo', 'sastro.wardoyo@gmail.com', '2022-08-06 10:52:41', NULL),
(4, 'Mahesa Gemilang', 'mahesa.gemilang@gmail.com', '2022-08-06 10:52:41', NULL),
(5, 'Randu Putri', 'randu.putri@gmail.com', '2022-08-06 10:52:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `task` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `task`, `start_date`, `end_date`, `status`, `created_at`, `update_at`) VALUES
(1, 'Ujian', '2022-08-06', '2022-08-07', 'Done', '2022-08-06 10:28:08', NULL),
(2, 'Kursus Bahasa Korea', '2022-08-07', '2022-08-08', 'Done', '2022-08-06 10:28:08', NULL),
(3, 'Dinas luar kota', '2022-08-08', '2022-08-09', 'Done', '2022-08-06 10:28:08', NULL),
(4, 'Reuni', '2022-08-09', '2022-08-10', 'Done', '2022-08-06 10:28:08', NULL),
(5, 'Apel Persiapan 17 Agustus', '2022-08-10', '2022-08-11', 'Done', '2022-08-06 10:28:08', NULL),
(9, 'Persiapan rapat internal', '2022-08-29', '2022-08-31', 'Ongoing', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
