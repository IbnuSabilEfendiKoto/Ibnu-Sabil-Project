-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 02:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rooftop_car`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nm_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nm_kategori`) VALUES
(1, 'Toyota'),
(2, 'Mitsubishi'),
(3, 'Daihatsu'),
(7, 'Hyundai'),
(9, 'Mercedes-Benz'),
(11, 'Nissan');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id_klien` int(11) NOT NULL,
  `nm_klien` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `gmbr_klien` varchar(255) NOT NULL,
  `desk_klien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id_klien`, `nm_klien`, `pekerjaan`, `gmbr_klien`, `desk_klien`) VALUES
(1, 'Ibnu Sabil', 'Student', 'ibnu.jpeg', 'Saya akan merekomendasikan perusahaan mobil Anda kepada teman dan keluarga.Terima kasih atas layanan mobil yang luar biasa!'),
(2, 'Efendi Koto', 'Businessman', 'ibnu.jpeg', 'Mobil Anda sangat nyaman untuk dikendarai, sangat memuaskan. Terimakasih atas mobil yang handal dan berkualitas.'),
(3, 'Syaifull Al Aziz', 'CEO', 'ibnu.jpeg', 'Terima kasih atas layanan yang luar biasa dari RoofTop Car! Tim Anda sangat profesional dan membantu saya dengan baik.'),
(4, 'Yogie Kurniawan', 'Manager IT', 'ibnu.jpeg', 'Perusahaan mobil Anda memberikan pengalaman yang luar biasa. Saya sangat terkesan dengan pelayanan pelanggan yang ramah dan responsif.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `pesan`) VALUES
(5, 'ibnu sabil', 'ibnu@gmail.com', 'saya ingin membeli mobil sport untuk istri saya.'),
(6, 'indah safitri', 'indah1999@gmail.com', 'Saya ingin membeli mobil agya'),
(7, 'agus saputra', 'agus2004@gmail.com', 'Saya menginginkan sebuah mobil yang dapat dipakai untuk keluarga saya'),
(8, 'yogii kurniawan', 'yogi@gmail.com', 'Saya ingin mobil yang memiliki mesin bertenaga kuda'),
(9, 'syaifull aziz', 'aziz@gmail.com', 'Saya ingin suatu mobil yang dapat dipakai disegala medan');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nm_mobil` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gmbr_mobil` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `id_kategori`, `nm_mobil`, `harga`, `gmbr_mobil`, `deskripsi`) VALUES
(9, 2, 'Mitsubishi Xpander Cross', 316750000, 'xpander.jpg', '|| Body Berwarna Hitam || Kursi 6 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.500 mm P x 1.800 mm L x 1.750 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan || Mesin: 1,5L 4-silinder ||'),
(12, 1, 'Toyota Agya', 167900000, 'agya.jpg', '|| Body Berwarna Merah || Kursi 4 || Model bodi: Hatchback || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 3.760-3.830 mm P x 1.665 mm L x 1.505 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan || Mesin: 1,2L 3-silinder ||'),
(14, 1, 'Toyota Kijang Inova ', 371200000, 'inova.jpg', '|| Body Berwarna Putih || Kursi 6 || Model bodi: Minivan || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.735 mm P x 1.830 mm L x 1.795 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda belakang || Mesin: 2L 4-silinder, 2,4L 4-silinder diesel ||'),
(17, 1, 'Toyota Yaris', 326700000, 'yaris.jpg', '|| Body Berwarna Putih || Kursi 4 || Model bodi: Sporty || Konfigurasi silinder mesin: Mesin Double || Dimensi: 4.145 mm P x 1.730 mm L x 1.500 mm T || Sistem penggerak roda: Penggerak roda depan ||  Kapasitas tangki BBM: 42 L || Mesin: 1,5L 4-silinder ||'),
(18, 2, 'New Triton  ', 287250000, 'triton.jpg', '||Body Berwarna Putih || Kursi 4 || Model bodi: Sporty || Konfigurasi silinder mesin: Mesin Double || Dimensi: 5.145 mm P x 1.830 mm L x 1.600 mm T || Sistem penggerak roda: Penggerak roda depan dan belakang || Kapasitas tangki BBM: 50 L || Mesin: 1,5L 6-silinder ||'),
(19, 2, ' New Pajero Sport', 552500000, 'pajero.jpg', '|| Body Berwarna Putih || Kursi 6 || Model bodi: Sport Utility Vehicle || Volume kargo: 131 l, 1.488 l termasuk area penumpang || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.825 mm P x 1.815 mm L x 1.835 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak 4 roda,Penggerak roda belakang ||'),
(20, 2, 'Outlander PHEV', 898100000, 'outlander.jpg', '|| Body Berwarna Hitam || Kursi 6 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.695 mm P x 1.800 mm L x 1.710 mm T || Mesin: 2,4L 4-silinder Elektrik || Kapasitas tempat duduk: 5 || Kapasitas tangki BBM: 45 l || Daya kuda: 224 HP || Spesifikasi baterai: 13,8 kWh 300 V ion litium ||'),
(21, 3, 'Grand New Xenia', 221450000, 'xenia.jpg', '|| Body Berwarna Abu-Abu || Kursi 6 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.735 mm P x 1.795 mm L x 1.715 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan || Mesin: 1,7L 4-silinder ||'),
(22, 3, 'New Terios', 238100000, 'terios.jpg', '|| Body Berwarna Abu-Abu || Kursi 6 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.435 mm P x 1.695 mm L x 1.705 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda belakang || Mesin: 1,5L 4-silinder ||'),
(23, 3, 'All New Alya', 135400000, 'ayla.jpg', '|| Body Berwarna Putih || Kursi 4 || Model bodi: Hatchback || Volume kargo: 265 l || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 3.760 mm P x 1.665 mm L x 1.515 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan ||'),
(25, 7, 'New Hyundai Palisade', 855500000, 'palisade.jpg', '|| Body Berwarna HItam || Kursi 7 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.995 mm P x 1.975 mm L x 1.750 mm T || Mesin: 2,2L 4-silinder diesel || Daya kuda: 200 HP || Kapasitas tangki BBM: 71 l ||'),
(26, 7, 'Hyundai Creta', 291100000, 'creta.jpg', '|| Body Berwarna Abu-Abu || Kursi 6 || Model bodi: SUV || Volume kargo: 416 l, 1.384 l termasuk area penumpang || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.315 mm P x 1.790 mm L x 1.630 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan ||'),
(27, 7, 'Drive Santa Fe', 575100000, 'santa_fe.jpg', '|| Body Berwarna Hitam || Kursi 7 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Daya kuda: 180 sampai 202 HP || Dimensi: 4.785 mm P x 1.900 mm L x 1.710 mm T || Mesin: 2,2L 4-silinder diesel, 2,5L 4-silinder Torsi: 232 sampai 441 N·m ||'),
(30, 9, 'Mercedes Benz G Class SUV', 1930000000, 'g_class_suv.jpg', '|| Body Berwarna Abu-Abu || Kursi 4 || Model bodi: Sport Utility Vehicle || Konfigurasi silinder mesin: Mesin segaris || Daya kuda: 160 sampai 222 HP || Dimensi: 4.185 mm P x 1.500 mm L x 1.310 mm T || Mesin: 3,2L 4-silinder diesel, 1,5L 4 ||'),
(31, 9, 'Mercedes Benz GLE', 2110000000, 'gle.jpg', '|| Body Berwarna Putih || Kursi 4 || Model bodi: Sporty || Konfigurasi silinder mesin: Mesin Double || Daya kuda: 220 sampai 252 HP || Dimensi: 4.785 mm P x 1.600 mm L x 1.610 mm T || Mesin: 2,2L 5-silinder diesel, 1,5L 5 ||'),
(32, 11, 'Nissan X Trail', 576100000, 'xtrail.jpg', '|| Body Berwarna Putih || Kursi 4 || Model bodi: Sport Utility Vehicle || Volume kargo: 135 l, 1.996 l termasuk area penumpang || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.690 mm P x 1.830 mm L x 1.740 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan || Mesin: 2,5L 4-silinder ||'),
(33, 11, 'Nissan Livina', 287200000, 'livina.jpg', '|| Body Berwarna Biru || Kursi 4 || Model bodi: Wagon || Konfigurasi silinder mesin: Mesin segaris || Dimensi: 4.510 mm P x 1.750 mm L x 1.695-1.700 mm T || Jumlah pintu: 5 || Sistem penggerak roda: Penggerak roda depan || Mesin: 1,5L 4-silinder ||');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nm_perusahaan` varchar(50) NOT NULL,
  `desk_perusahaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`id_perusahaan`, `nm_perusahaan`, `desk_perusahaan`) VALUES
(1, 'Toyota', 'Salah satu produsen mobil terbesar di dunia. Perusahaan yang bermarkas di Tokyo (Jepang) ini didirikan pada 28 Agustus 1937, 82 tahun lalu.'),
(3, 'Mitsubishi', 'Produsen otomotif multinasional yang berkantor pusat di Minato, Tokyo, Jepang. Perusahaan yang mampu menyaingi produk otomotif.'),
(4, 'Daihatsu', 'Perusahaan otomotif dengan kapasitas produksi terbesar dan memiliki fasilitas Research and Development Center pertama dan terlengkap di Indonesia.'),
(5, 'Hyundai', 'Perusahaan mobil multinasional asal Korea Selatan yang didirikan pada tahun 1967 oleh Chung Ju-Yung. Perusahaan ini merupakan salah satu produsen mobil terbesar di dunia.'),
(6, 'Mercedes-Benz', 'Perusahaan mobil paling dikenal di dunia dan juga perusahaan mobil tertua di dunia yang bertahan sampai sekarang.'),
(7, 'Nissan', 'Produsen mobil terbesar keenam di dunia, di belakang Toyota, General Motors, Volkswagen AG, Hyundai Motor Group, dan Ford pada tahun 2010.');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL,
  `nm_tim` varchar(50) NOT NULL,
  `gmbr_tim` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id_tim`, `nm_tim`, `gmbr_tim`, `pekerjaan`) VALUES
(1, 'Ibnu Sabil', 'ibnu.jpeg', 'Tim IT'),
(10, 'Ilham Fullyadi', 'ilham.jpg', 'Tim Pelayanan'),
(11, 'Nabil Basalamah', 'ibnu.jpeg', 'Tim Pemasaraan'),
(12, 'Ravit Kartono ', 'ibnu.jpeg', 'Tim Penjualan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'ibnu', 'c30a173ec3f657420609bf9eec2f5eb1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id_klien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id_mobil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_tim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
