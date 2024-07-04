-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2024 at 02:56 PM
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
-- Database: `diagnosa_penyakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pertanyaan1` varchar(10) NOT NULL,
  `pertanyaan2` varchar(10) NOT NULL,
  `pertanyaan3` varchar(10) NOT NULL,
  `pertanyaan4` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `pertanyaan5` enum('ya','tidak') NOT NULL DEFAULT 'tidak',
  `hasil` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `usia` int(11) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `nama`, `pertanyaan1`, `pertanyaan2`, `pertanyaan3`, `pertanyaan4`, `pertanyaan5`, `hasil`, `created_at`, `usia`, `alamat`) VALUES
(1, '', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'Kondisi Anda memerlukan pemeriksaan lebih lanjut oleh dokter gigi.', '2024-06-29 16:27:31', 0, ''),
(2, 'fatah', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'Anda mungkin mengalami periodontitis.', '2024-06-29 16:34:43', 0, ''),
(3, 'ragil', 'ya', 'tidak', 'ya', 'tidak', 'tidak', 'Anda mungkin mengalami karies gigi.', '2024-06-29 16:45:12', 30, 'pasar kemis'),
(4, 'agil', 'ya', 'tidak', 'tidak', 'tidak', 'tidak', 'Kondisi Anda memerlukan pemeriksaan lebih lanjut oleh dokter gigi.', '2024-06-29 17:04:49', 111, 'sini'),
(5, 'agil', 'ya', 'ya', 'tidak', 'tidak', 'tidak', 'Kondisi Anda memerlukan pemeriksaan lebih lanjut oleh dokter gigi.', '2024-06-29 17:05:09', 111, 'sini'),
(6, 'puki', 'ya', 'ya', 'ya', 'tidak', 'tidak', 'Anda mungkin mengalami periodontitis.', '2024-06-29 17:06:00', 10, 'tangerang'),
(7, 'pepek', 'ya', 'tidak', 'ya', 'tidak', 'ya', 'Kondisi Anda memerlukan pemeriksaan lebih lanjut oleh dokter gigi.', '2024-06-29 17:14:01', 20, 'kamis');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'fatah', '$2y$10$XzmHTkcjBY/XVwu7vdezZu8ay8Kx1d0Giog5tOmsDy9TDLnySIYWi', '2024-06-29 16:39:40'),
(2, 'agil', '$2y$10$858tbp.Hj3dE4dP45bVCIe7HmIg03lJFjeFxi01K0ovgPHibqO1gi', '2024-06-29 16:56:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
