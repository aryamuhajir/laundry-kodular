-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 29, 2021 at 01:49 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17807774_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(32) NOT NULL,
  `nama` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `alamat`, `username`, `password`) VALUES
(4, 'admin', 'admin', 'armin', 'admin', '$2y$10$BLZUTWpUYw7E3YwZOrWyuOxeTXPtDhpDqYECeLgHE0agDulsA4en.');

-- --------------------------------------------------------

--
-- Table structure for table `fd`
--

CREATE TABLE `fd` (
  `id_fd` int(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_pesanan` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fd`
--

INSERT INTO `fd` (`id_fd`, `nama`, `email`, `alamat`, `username`, `password`, `id_pesanan`) VALUES
(2, 'www', 'www', 'www', 'www', '$2y$10$ixKqhgXl6u8VSSlhLX4KfeVJc/cOxkZuM7Pj3jW1h6vOqcPg1HH4y', NULL),
(3, 'Ahmad', 'ahmad@gmail.com', 'Kebon Asri Gang 2. RT 15 RW 04', 'ggg', '$2y$10$7UxCqII1B.XPxbjGODmsNeYz8b3KkCTi1gN1nbagSMQh8mPQKYyMC', 36),
(4, 'Muhammad Dimas', 'dimas@gmail.com', 'Buduran, sidoarjo', 'ahmad', '$2y$10$uFIkiZ5hdHNYWYT9Wygj0O3Z2v91ZzrNQlBSOTfd8QMvlXWYJFzce', NULL),
(5, 'qqqsj', 'djksks', 'znns', 'sss', '$2y$10$EYVxEM4Kg8RvO0pG1jTUIemUF7NnQc1X8wlNDct74l1AW4/62VSUq', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id_kurir` int(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_pesanan` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id_kurir`, `nama`, `email`, `alamat`, `username`, `password`, `id_pesanan`) VALUES
(5, 'Arya Muhajir', 'arya888@gmail.com', 'Bangkalan', 'aryam', '$2y$10$6HkTFv1sOHFMfRf7QRtqQ.cdqg7cwk/WvURFcb/mdPawXCRmOilcW', 49);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama`, `email`, `alamat`, `username`, `password`) VALUES
(4, 'hajir', 'ekobbb', 'lamg', 'eko123', '$2y$10$YQkmluLszrSqwi/ovfMKq.V/U9rOaqQ1eWF32CAyvVzPzcq4/uZCS'),
(14, 'dimas', 'arya@gmail.com', 'sidoarjo', 'dimas', '$2y$10$/zqcCncYIgFEGNv1Z8ejDe/3Lx6tAbxuA3zEjwKAb7NuNfiD30rxy'),
(15, 'eee', 'eee', 'eee', 'eee', '$2y$10$/qIwNcSqdgssdbp31BQrzeFbXNOeqw7v9pQ9XsK6T51mwd4cLKVoG'),
(16, 'zzx', 'xxz', 'xxc', 'sds', '$2y$10$/tLXJu.PPQwUR3IFYAuHBuIFu.llLFyoXbtpIJ98Iz2CV0WCbdrbi'),
(17, 'andi', 'andi@gmail.com', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n', 'andi', '$2y$10$S/kQcd.5es3t2KoXr4qt8eJ1fE64cvmqKEhIm6SUZia1WRv2BMG4u'),
(18, 'yuri', 'yuti@gmail.xom', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n', 'yuri', '$2y$10$bxA6l5sx4h6BV.YbkWdEIO9aUuqRnch21fUK8yuDnLrqDv/E.8hzy'),
(19, 'yuri', 'yuti@gmail.xom', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n', 'yuri', '$2y$10$kPKjwHCCmDQi/jXt9aJ2meT6zqhQTiOoj3dn6sp5cTJGl40qccxvq');

-- --------------------------------------------------------

--
-- Table structure for table `pencuci`
--

CREATE TABLE `pencuci` (
  `id_pencuci` int(3) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(322) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_pesanan` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencuci`
--

INSERT INTO `pencuci` (`id_pencuci`, `nama`, `email`, `alamat`, `username`, `password`, `id_pesanan`) VALUES
(2, 'sinta', 'sinta@gmail.com', 'depok', 'sinta', '$2y$10$dsHq8uJN6c14Ikg/JdpuguHILmTT47hSLlvCRDUlitv9bmHhLwXBm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penyetrika`
--

CREATE TABLE `penyetrika` (
  `id_penyetrika` int(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(322) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(300) NOT NULL,
  `id_pesanan` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyetrika`
--

INSERT INTO `penyetrika` (`id_penyetrika`, `nama`, `email`, `alamat`, `username`, `password`, `id_pesanan`) VALUES
(1, 'Ridho', 'arya', 'qqqaaaqwer', 'qqq', '$2y$10$C23gVrgn/z8h3KYSDRdhMe9BLwvf6j4aYpoVRaP31TKA6tTnlbDRi', NULL),
(2, 'diany', 'diany@gmail.com', 'malang', 'diany', '$2y$10$mqN/atHqr3ZTZdm3rZs.ke6EIpndQHhnu3S/BM/VQa6YaIXO/kaC2', 34);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(32) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ambil` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `antar` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `berat` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_pencuci` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_penyetrika` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pembayaran` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `biaya` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `status_pembayaran` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_pesanan` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `username`, `alamat`, `telepon`, `ambil`, `antar`, `berat`, `detail`, `id_pencuci`, `id_penyetrika`, `pembayaran`, `biaya`, `status_pembayaran`, `status_pesanan`) VALUES
(14, 'dimas', 'sidoarjo', '089678394723', 'Dijemput ke alamat', 'Langsung di Kantor', '4Kg', 'celana kaos kemeja', NULL, NULL, 'COD', '20000', 'Lunas', 'Sedang disetrika'),
(15, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '2Kg', 'hdjs', NULL, NULL, 'COD', '10000', 'Lunas', 'Kurir OTW ke kantor'),
(17, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '5Kg', 'jskaja', NULL, NULL, 'COD', '25000', 'Lunas', 'Kurir OTW ke kantor'),
(18, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '5Kg', 'jskaja', NULL, NULL, 'COD', '25000', 'Lunas', 'Kurir OTW ke kantor'),
(19, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '5Kg', 'jskaja', NULL, NULL, 'COD', '25000', 'Lunas', 'Kurir OTW ke kantor'),
(20, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '5Kg', 'jskaja', NULL, NULL, 'COD', '25000', 'Lunas', 'Kurir OTW ke kantor'),
(22, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '5Kg', 'jskaja', NULL, NULL, 'COD', '25000', 'Lunas', 'Sedang disetrika'),
(23, 'dimas', 'sidoarjo', '', 'Dijemput ke alamat', 'Langsung di Kantor', '5Kg', 'jskajasjjs', NULL, NULL, 'COD', '25000', 'Lunas', 'Sedang dicuci'),
(24, 'hajir', 'porong', '', 'Langsung di Kantor', 'Dikirim ke alamat', '5Kg', 'djsj', NULL, NULL, 'COD', '25000', 'Lunas', 'Sedang dicuci'),
(25, 'hajir', 'porong', '', 'Langsung di Kantor', 'Dikirim ke alamat', '5Kg', 'djsj', NULL, NULL, 'COD', '25000', 'Lunas', 'Siap kirim'),
(26, 'hajir', 'porong', '', 'Langsung di Kantor', 'Dikirim ke alamat', '5Kg', 'djsj', NULL, NULL, 'COD', '25000', 'Lunas', 'Sedang dicuci'),
(27, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '1Kg', 'fff', NULL, NULL, 'COD', '5000', 'Lunas', 'Sedang disetrika'),
(28, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '1Kg', 'fff', NULL, NULL, 'COD', '5000', 'Lunas', 'Sedang disetrika'),
(30, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Langsung di Kantor', '2Kg', '', NULL, NULL, 'Transfer Cek Otomatis', '10000', 'Lunas', 'Siap kirim'),
(31, 'hajir', 'porong', '', 'Langsung di Kantor', 'Langsung di Kantor', '3Kg', '', NULL, NULL, 'COD', '15000', 'Lunas', 'Sedang dicuci'),
(32, 'hajir', 'porong', '', 'Langsung di Kantor', 'Langsung di Kantor', '3Kg', '', NULL, NULL, 'COD', '15000', 'Lunas', 'Siap diambil'),
(33, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Langsung di Kantor', '3Kg', '', NULL, NULL, 'COD', '15000', 'Lunas', 'Sedang dicuci'),
(34, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '3Kg', '', NULL, NULL, 'COD', '15000', 'Lunas', 'Sedang disetrika'),
(35, 'hajir', 'porong', '', 'Langsung di Kantor', 'Dikirim ke alamat', '6Kg', '', NULL, NULL, 'COD', '30000', 'Lunas', 'Menunggu disetrika'),
(36, 'hajir', 'porong', '', 'Langsung di Kantor', 'Dikirim ke alamat', '6Kg', '', NULL, NULL, 'COD', '30000', 'Lunas', 'Sedang disetrika'),
(38, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Langsung di Kantor', '1Kg', '', NULL, NULL, 'COD', '5000', 'Lunas', 'Menunggu Pencuci'),
(39, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Langsung di Kantor', '1Kg', '', NULL, NULL, 'COD', '5000', 'Lunas', 'Menunggu kurir mengambil Laundry'),
(40, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Langsung di Kantor', '1Kg', '', NULL, NULL, 'COD', '5000', 'Lunas', 'Menunggu kurir mengambil Laundry'),
(41, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Langsung di Kantor', '1Kg', '', NULL, NULL, 'COD', '5000', 'Lunas', 'Menunggu kurir mengambil Laundry'),
(42, 'andi', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n', '', 'Dijemput ke alamat', 'Langsung di Kantor', '2Kg', 'kaos 10', NULL, NULL, 'COD', '10000', 'Lunas', 'Menunggu Pencuci'),
(43, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '5Kg', 'kaoss', NULL, NULL, 'COD', '25000', 'Lunas', 'Menunggu kurir mengambil Laundry'),
(44, 'hajir', 'porong', '', 'Langsung di Kantor', 'Langsung di Kantor', '2Kg', 'r', NULL, NULL, 'COD', '10000', 'Lunas', 'Menunggu Pencuci'),
(45, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '2Kg', '', NULL, NULL, 'COD', '10000', 'Lunas', 'Menunggu disetrika'),
(46, 'hajir', 'porong', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '3Kg', '5 kaos', NULL, NULL, 'COD', '15000', 'Belum Lunas', 'Menunggu kurir mengambil Laundry'),
(47, 'hajir', 'porong', '', 'Langsung di Kantor', 'Dikirim ke alamat', '1Kg', '1 celana', NULL, NULL, 'COD', '5000', 'Belum Lunas', 'Menunggu disetrika'),
(48, 'yuri', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n19', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '3Kg', 'kaos 5', NULL, NULL, 'COD', '15000', 'Belum Lunas', 'Menunggu kurir mengambil Laundry'),
(49, 'yuri', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n19', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '5Kg', 'kaoa', NULL, NULL, 'COD', '25000', 'Lunas', 'Selesai'),
(50, 'yuri', 'SMP Muhamadiyah 4, Dusun Pojok, Lajuk, Kec. Porong, Kabupaten Sidoarjo, Jawa Timur 61274, Indonesia\n19', '', 'Dijemput ke alamat', 'Dikirim ke alamat', '2Kg', 'celana sleimt', NULL, NULL, 'COD', '10000', 'Belum Lunas', 'Menunggu kurir mengambil Laundry');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tugas`
-- (See below for the actual view)
--
CREATE TABLE `tugas` (
`idpesanan` int(32)
,`id_pesanan` int(32)
,`nama` varchar(32)
,`status_pesanan` varchar(32)
,`status_pembayaran` varchar(32)
,`berat` varchar(32)
,`detail` varchar(200)
);

-- --------------------------------------------------------

--
-- Structure for view `tugas`
--
DROP TABLE IF EXISTS `tugas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`id17807774_aryamuhajir`@`%` SQL SECURITY DEFINER VIEW `tugas`  AS  select `a`.`id_pesanan` AS `idpesanan`,`b`.`id_pesanan` AS `id_pesanan`,`b`.`nama` AS `nama`,`a`.`status_pesanan` AS `status_pesanan`,`a`.`status_pembayaran` AS `status_pembayaran`,`a`.`berat` AS `berat`,`a`.`detail` AS `detail` from (`pesanan` `a` join `kurir` `b`) where `a`.`id_pesanan` = `b`.`id_pesanan` and `a`.`status_pesanan` = 'kurir OTW ke kantor' or `a`.`status_pesanan` = 'Kurir OTW kirim ke alamat' or `a`.`status_pesanan` = 'Selesai' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd`
--
ALTER TABLE `fd`
  ADD PRIMARY KEY (`id_fd`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id_kurir`),
  ADD KEY `id_pesanan` (`id_pesanan`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `pencuci`
--
ALTER TABLE `pencuci`
  ADD PRIMARY KEY (`id_pencuci`);

--
-- Indexes for table `penyetrika`
--
ALTER TABLE `penyetrika`
  ADD PRIMARY KEY (`id_penyetrika`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fd`
--
ALTER TABLE `fd`
  MODIFY `id_fd` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id_kurir` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pencuci`
--
ALTER TABLE `pencuci`
  MODIFY `id_pencuci` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyetrika`
--
ALTER TABLE `penyetrika`
  MODIFY `id_penyetrika` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
