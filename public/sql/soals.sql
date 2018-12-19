-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 06:25 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp`
--

-- --------------------------------------------------------

--
-- Table structure for table `soals`
--

CREATE TABLE `soals` (
  `id` int(10) UNSIGNED NOT NULL,
  `Kode_Soal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soal` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `A` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `D` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soals`
--

INSERT INTO `soals` (`id`, `Kode_Soal`, `soal`, `A`, `B`, `C`, `D`, `E`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'B1', '<p>Andri gemar bermain basket. Setiap minggu ia berolahraga di lapangan. Rudi setiap minggu berolahraga, tetapi ia tidak gemar bermain basket.</p>\r\n\r\n<p>Simpulan yang paling tepat adalah &hellip;</p>', 'Andri dan Rudi gemar bermain basket setiap minggu di lapangan', 'Andri dan Rudi gemar bermain basket di lapangan', 'Andri dan Rudi berolahraga setiap minggu', 'Andri dan Rudi berolahraga setiap minggu di lapangan', 'Andri dan Rudi berolahraga di lapangan', 'C', '2018-12-18 22:22:01', '2018-12-18 22:22:01'),
(2, 'B2', '<p>Kegiatan ekstrakurikuler dilakukan di luar ruangan, jika diadakan pada hari Minggu. Jika kegiatan ekstrakurikuler dilakukan di luar ruangan, siswa mengenakan pakaian dinas lapangan.</p>\r\n\r\n<p>Simpulan yang paling tepat adalah &hellip;</p>', 'jika kegiatan tidak diadakan pada hari Minggu, siswa tidak mengenakan pakaian dinas lapangan', 'jika siswa tidak mengenakan pakaian dinas lapangan, kegiatan ekstrakurikuler tidak diadakan pada hari Minggu', 'jika kegiatan ekstrakurikuler tidak dilakukan di luar ruangan, siswa tidak mengenakan pakaian dinas lapangan', 'jika siswa mengenakan pakaian dinas lapangan, kegiatan ekstrakurikuler diadakan pada hari Minggu', 'jika kegiatan ekstrakurikuler dilakukan di luar ruangan, kegiatan tersebut tidak diadakan  pada hari Minggu', 'E', '2018-12-18 22:22:41', '2018-12-18 22:22:41'),
(3, 'B3', '<p>Deni berencana membeli komputer pada akhir tahun nanti. Jika Deni menabung dari uang saku hariannya, dia akan membeli komputer dengan memori besar. Jika Deni mendapatkan tambahan uang dari orang tuanya, ia akan membeli komputer layar datar dengan resolusi tinggi. Pada akhir tahun, ternyata Deni tidak membeli komputer dengan memori besar atau komputer layar datar dengan resolusi tinggi.</p>\r\n\r\n<p>Simpulan yang paling tepat adalah &hellip;</p>', 'Deni tidak menabung dari uang saku hariannya atau tidak mendapatkan tambahan uang dari orang tuanya', 'Deni menabung dari uang saku hariannya atau mendapatkan tambahan uang dari orang tuanya', 'Deni tidak menabung dari uang saku hariannya, tetapi mendapatkan tambahan uang dari orang tuanya', 'Deni menabung dari uang saku hariannya, tetapi tidak mendapatkan tambahan uang dari orang tuanya', 'Deni tidak jadi membeli komputer pada akhir tahun', 'B', '2018-12-18 22:23:26', '2018-12-18 22:23:26'),
(4, 'B4', '<p>Sebagian pegawai negeri bukan guru sekolah dasar. Semua peserta seminar adalah guru sekolah dasar.</p>\r\n\r\n<p>Simpulan yang paling tepat adalah &hellip;</p>', 'semua guru sekolah dasar adalah peserta seminar', 'semua pegawai negeri bukan peserta seminar', 'sebagian pegawai negeri adalah guru sekolah dasar', 'sebagian pegawai negeri bukan peserta seminar', 'sebagian guru sekolah dasar bukan peserta seminar', 'A', '2018-12-18 22:24:02', '2018-12-18 22:24:02'),
(5, 'B5', '<p>Tidak ada hutan lindung yang mengalami kebakaran di Pulau A.</p>\r\n\r\n<p>Beberapa hutan lindung di Pulau A adalah kawasan wisata.</p>\r\n\r\n<p>Simpulan yang paling tepat adalah &hellip;</p>', 'beberapa kawasan wisata tidak mengalami kebakaran', 'beberapa hutan lindung yang mengalami kebakaran adalah kawasan wisata', 'beberapa hutan lindung yang mengalami kebakaran bukan kawasan wisata', 'tidak ada hutan lindung di Pulau A yang merupakan kawasan wisata', 'tidak ada kawasan wisata yang mengalami kebakaran', 'D', '2018-12-18 22:24:53', '2018-12-18 22:24:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soals`
--
ALTER TABLE `soals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `soals_kode_soal_unique` (`Kode_Soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soals`
--
ALTER TABLE `soals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
