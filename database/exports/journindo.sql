-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2024 at 06:35 PM
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
-- Database: `journindo`
--

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
-- Table structure for table `islands`
--

CREATE TABLE `islands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `islands`
--

INSERT INTO `islands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sumatra', NULL, NULL),
(2, 'Jawa', NULL, NULL),
(3, 'Nusa Tenggara', NULL, NULL),
(4, 'Kalimantan', NULL, NULL),
(5, 'Sulawesi', NULL, NULL),
(6, 'Kepulauan Maluku', NULL, NULL),
(7, 'Papua', NULL, NULL);

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
(5, '2024_02_08_133905_create_islands_table', 1),
(6, '2024_02_08_134053_create_regions_table', 1),
(7, '2024_02_09_121336_create_places_table', 1);

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
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `path`, `region_id`, `created_at`, `updated_at`) VALUES
(1, 'Masjid Raya Baiturrahman', 'img/masjid-raya-baiturrahman.webp', 1, NULL, NULL),
(2, 'Danau Toba', 'img/danau-toba.jpg', 2, NULL, NULL),
(3, 'Jam Gadang', 'img/jam-gadang.jpg', 3, NULL, NULL),
(4, 'Istana Siak Sri Indrapura', 'img/istana-siak-sri-indrapura.jpeg', 4, NULL, NULL),
(5, 'Tugu Keris Siginjai', 'img/tugu-keris-siginjai.jpeg', 5, NULL, NULL),
(6, 'Benteng Malborough', 'img/benteng-malborough.jpg', 6, NULL, NULL),
(7, 'Taman Nasional Way Kambas', 'img/taman-nasional-way-kambas.jpeg', 7, NULL, NULL),
(8, 'Danau Kaolin', 'img/danau-kaolin.jpg', 8, NULL, NULL),
(9, 'Gurun Pasir Bintan', 'img/gurun-pasir-bintan.jpg', 9, NULL, NULL),
(10, 'Monas', 'img/monas.jpg', 10, NULL, NULL),
(11, 'Kebun Raya Bogor', 'img/kebun-raya-bogor.webp', 11, NULL, NULL),
(12, 'Candi Borobudur', 'img/candi-borobudur.jpeg', 12, NULL, NULL),
(13, 'Taman Sari', 'img/taman-sari.webp', 13, NULL, NULL),
(14, 'Gunung Bromo', 'img/gunung-bromo.jpg', 14, NULL, NULL),
(15, 'Tanah Lot', 'img/tanah-lot.jpg', 15, NULL, NULL),
(16, 'Bukit Merese', 'img/bukit-merese.avif', 16, NULL, NULL),
(17, 'Pulau Komodo', 'img/pulau-komodo.jpg', 17, NULL, NULL),
(18, 'Taman Alun Kapuas', 'img/taman-alun-kapuas.jpeg', 18, NULL, NULL),
(19, 'Taman Nasional Tanjung Puting', 'img/taman-nasional-tanjung-puting.jpeg', 19, NULL, NULL),
(20, 'Bukit Matang Kaladan', 'img/bukit-matang-kaladan.jpg', 20, NULL, NULL),
(21, 'Pantai Kemala', 'img/pantai-kemala.jpg', 21, NULL, NULL),
(22, 'Taman Nasional Bunaken', 'img/taman-nasional-bunaken.jpg', 22, NULL, NULL),
(23, 'Air Terjun Saluopa', 'img/air-terjun-saluopa.jpg', 23, NULL, NULL),
(24, 'Fort Rotterdam', 'img/fort-rotterdam.jpg', 24, NULL, NULL),
(25, 'Pulau Labengki', 'img/pulau-labengki.jpg', 25, NULL, NULL),
(26, 'Pantai Manakarra', 'img/pantai-manakarra.jpg', 26, NULL, NULL),
(27, 'Pantai Jikomalamo', 'img/pantai-jikomalamo.jpg', 27, NULL, NULL),
(28, 'Pantai Liang', 'img/pantai-liang.jpeg', 28, NULL, NULL),
(29, 'Pantai Base-G', 'img/pantai-base-g.jpg', 29, NULL, NULL),
(30, 'Pantai Batu Kotak Abasi', 'img/pantai-batu-kotak-abasi.jpg', 30, NULL, NULL),
(31, 'Teluk Cendrawasih', 'img/teluk-cendrawasih.jpg', 31, NULL, NULL),
(32, 'Telaga Biru', 'img/telaga-biru.jpg', 32, NULL, NULL),
(33, 'Monumen Kapsul Waktu', 'img/monumen-kapsul-waktu.jpg', 33, NULL, NULL),
(34, 'Kepulauan Raja Ampat', 'img/raja-ampat.webp', 34, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `island_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `island_id`, `created_at`, `updated_at`) VALUES
(1, 'Aceh', 1, NULL, NULL),
(2, 'Sumatra Utara', 1, NULL, NULL),
(3, 'Sumatra Barat', 1, NULL, NULL),
(4, 'Riau', 1, NULL, NULL),
(5, 'Jambi', 1, NULL, NULL),
(6, 'Bengkulu', 1, NULL, NULL),
(7, 'Lampung', 1, NULL, NULL),
(8, 'Bangka Belitung', 1, NULL, NULL),
(9, 'Kepulauan Riau', 1, NULL, NULL),
(10, 'DKI Jakarta', 2, NULL, NULL),
(11, 'Jawa Barat', 2, NULL, NULL),
(12, 'Jawa Tengah', 2, NULL, NULL),
(13, 'Daerah Istimewa Yogyakarta', 2, NULL, NULL),
(14, 'Jawa Timur', 2, NULL, NULL),
(15, 'Bali', 3, NULL, NULL),
(16, 'Nusa Tenggara Barat', 3, NULL, NULL),
(17, 'Nusa Tenggara Timur', 3, NULL, NULL),
(18, 'Kalimantan Barat', 4, NULL, NULL),
(19, 'Kalimantan Tengah', 4, NULL, NULL),
(20, 'Kalimantan Selatan', 4, NULL, NULL),
(21, 'Kalimantan Timur', 4, NULL, NULL),
(22, 'Sulawesi Utara', 5, NULL, NULL),
(23, 'Sulawesi Tengah', 5, NULL, NULL),
(24, 'Sulawesi Selatan', 5, NULL, NULL),
(25, 'Sulawesi Tenggara', 5, NULL, NULL),
(26, 'Sulawesi Barat', 5, NULL, NULL),
(27, 'Maluku Utara', 6, NULL, NULL),
(28, 'Maluku', 6, NULL, NULL),
(29, 'Papua', 7, NULL, NULL),
(30, 'Papua Barat', 7, NULL, NULL),
(31, 'Papua Tengah', 7, NULL, NULL),
(32, 'Papua Pegunungan', 7, NULL, NULL),
(33, 'Papua Selatan', 7, NULL, NULL),
(34, 'Papua Barat Daya', 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `islands`
--
ALTER TABLE `islands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`),
  ADD KEY `places_region_id_foreign` (`region_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_island_id_foreign` (`island_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `islands`
--
ALTER TABLE `islands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `places`
--
ALTER TABLE `places`
  ADD CONSTRAINT `places_region_id_foreign` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `regions_island_id_foreign` FOREIGN KEY (`island_id`) REFERENCES `islands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
