-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 25, 2017 at 07:22 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_customer`
--

CREATE TABLE `mst_customer` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_customer`
--

INSERT INTO `mst_customer` (`id`, `nama`, `alamat`, `no_telp`, `no_ktp`, `foto`) VALUES
(999, 'admin', 'admin', 'admin', 'admin', '1168-quick.png'),
(1007, 'eep', 'ciwastra', '08986185858', '0192873721', 'IMG_0782-r44.jpg'),
(1008, 'andy', 'aa', '12', '1321', '24667_100623336640638_5643900_n.jpg'),
(1009, 'Jono', 'bogor', '01213', '1321', '485336_446598305421532_1353186816_n.jpg'),
(1010, 'alay', 'aa', '123', '0321', '485336_446598305421532_1353186816_n.jpg'),
(1011, 'user', 'user', 'user', 'user', 'LOGO_2.png'),
(1012, 'uuser', 'uuser', 'uuser', 'uuser', 'LOGO_2.png'),
(1013, 'udin', 'udin', 'udin', 'udin', 'LOGO_2.png'),
(1014, 'andy ', 'andy', 'andy', 'andy', 'LOGO_2.png'),
(1015, 'UCOK', 'UCOK', 'UCOK', 'UCOK', 'LOGO_2.png'),
(1016, 'RENDI GIANTARA', 'CIWIDEY', '08996174355', '12345678910', 'LOGO_2.png'),
(1017, 'udin', 'udin', 'udin', 'udin', 'LOGO_2.png'),
(1018, 'admin', 'admin', 'admin', 'admin', 'LOGO_2.png'),
(1019, 'tarjo', 'tarjo', 'tarjo', 'tarjo', 'LOGO_2.png'),
(1020, 'uu', 'uu', 'uu', 'uu', 'LOGO_2.png'),
(1021, 'uus', 'uus', 'uus', 'uus', 'LOGO_2.png'),
(1022, 'terbaik', 'terbaik', 'terbaik', 'terbaik', 'Womens-Long-Sleeve-Tops-2015-Korean-Fashion-Graphic-Tees-Women-T-shirt-Casual-White-Blue-Cotton.jpg'),
(1023, 'ridhwangs', 'alamat', '08986185858', '0192873721', '1 (1).jpg'),
(1024, 'aku', 'aku', 'aku', 'aku', '511cfb08153828efdbad430ef35e1d3a.png'),
(1025, 'ramdhan', 'ramdhan', 'ramdhan', '0192873721', '16105658_255983138157162_1346523800084793871_n.png'),
(1026, '1', '1', '1', '1', '4222.jpg'),
(1027, '2', '2', '2', '2', '4224.jpg'),
(1028, '3', '3', '3', '3', '4223.jpg'),
(1029, '4', '4', '4', '4', '4223.jpg'),
(1030, '5', '5', '5', '5', '4223.jpg'),
(1031, 'a', 'a', 'a', 'a', '4222.jpg'),
(1032, '0', '0', '0', '0', 'Welcome-to-CodeIgniter.png'),
(1033, 'eep', 'eep', 'eep', 'eep', '511cfb08153828efdbad430ef35e1d3a.png'),
(1034, 'dono', 'dono', '43213', '4132165', 'Penguins.jpg'),
(1035, 'kuncen', 'kuncen', '165123284', '123513213', 'Desert.jpg'),
(1036, 'lola', 'lola', '02656210', '025120', 'Tulips.jpg'),
(1037, 'admin', 'admin', '0813231', '15286586532', 'Penguins.jpg'),
(1038, 'kusno', 'kusno', '98561651', '6512313', 'Tulips.jpg'),
(1039, 'jojo', 'jojo', '455613', '42131532', 'Tulips.jpg'),
(1040, 'soni', 'soni', '454321', '/978645321', 'Tulips.jpg'),
(1041, 'adit', 'adit', '1354135412', '45321685321', 'Penguins.jpg'),
(1042, 'teddy', 'teddy', '21305632', '84568465123', 'Koala.jpg'),
(1043, 'monik', 'monik', '78456132', '987645312', 'Lighthouse.jpg'),
(1044, 'rona', 'rona', '05120.84561230', '21231564', 'Penguins.jpg'),
(1045, 'amrul', 'amrul', '1320684584', '123156885', 'Penguins.jpg'),
(1046, 'dora', 'adawda', '13251', '123123', 'Penguins.jpg'),
(1047, 'laska', 'laska', '984561238465123', '89645128465312', 'Penguins.jpg'),
(1048, 'jarwo', 'jarwo', '152356123', '651235623', 'Koala.jpg'),
(1049, 'kokom', 'kokom', '846513284653', '8931289653', 'Penguins.jpg'),
(1050, 'kokom', 'kokom', '45123654312', '654319132', 'Penguins.jpg'),
(1051, 'jojon', 'jojon', '5+62364513', '5613248651', 'Tulips.jpg'),
(1052, 'karen', 'karen', '485123', '54132', 'Lighthouse.jpg'),
(1053, 'admin', 'admin', '41', '5412', 'Tulips.jpg'),
(1054, 'otu', 'otu', '41239645123', '8465129865123', 'Tulips.jpg'),
(1055, 'teddy', 'udin', '/98645123', '9865230.', 'Lighthouse.jpg'),
(1056, 'ANDY', 'BOGOR', '085123123', '13232136', 'Penguins.jpg'),
(1057, 'a', 'a', 'a', 'a', 'Welcome-to-CodeIgniter.png'),
(1058, 'b', 'b', 'b', 'b', 'Welcome-to-CodeIgniter.png');

-- --------------------------------------------------------

--
-- Table structure for table `mst_driver`
--

CREATE TABLE `mst_driver` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mst_mobil`
--

CREATE TABLE `mst_mobil` (
  `kode_mobil` varchar(25) NOT NULL,
  `jenis_mobil` varchar(20) NOT NULL,
  `nama_mobil` varchar(50) NOT NULL,
  `tahun_mobil` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_mobil`
--

INSERT INTO `mst_mobil` (`kode_mobil`, `jenis_mobil`, `nama_mobil`, `tahun_mobil`) VALUES
('AFZ', 'Matic', 'Avanza', 2017),
('AGC', 'Manual', 'Agya', 2015),
('JOX', 'Matic', 'BMW', 2015),
('LOX', 'Matic', 'Lexus', 2017),
('MBA', 'Manual', 'Mobilio', 2014),
('MRG', 'Manual', 'MIRAGE', 2013),
('PJR1', 'Manual', 'PAJERO SPORT', 2015),
('RE', 'Matic', 'Toyota Rush', 2015),
('RI', 'Manual', 'Toyota Rush', 2016),
('RIZ', 'Matic', 'terios', 2014),
('ROK', 'Matic', 'Sienta', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `mst_paket`
--

CREATE TABLE `mst_paket` (
  `id_paket` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `biaya` double NOT NULL,
  `pertemuan` int(11) NOT NULL,
  `jenis_mobil` enum('Matic','Manual') NOT NULL,
  `kode_mobil_1` varchar(30) NOT NULL,
  `kode_mobil_2` varchar(30) NOT NULL,
  `kode_mobil_3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_paket`
--

INSERT INTO `mst_paket` (`id_paket`, `nama`, `deskripsi`, `biaya`, `pertemuan`, `jenis_mobil`, `kode_mobil_1`, `kode_mobil_2`, `kode_mobil_3`) VALUES
(6, 'Paket Matic 2 jam x 8 hari', '2 jam x 8 hari', 1500000, 8, 'Matic', 'AFZ', 'RI', 'LOX'),
(7, 'Paket Matic 2 jam x 6 hari', '2 jam x 6 hari', 1300000, 6, 'Matic', 'AFZ', 'AFZ', 'JOX'),
(8, 'Paket Matic 2 jam x 4 hari', '2 jam x 4 hari', 900000, 4, 'Matic', 'AFZ', 'JOX', 'LOX'),
(9, 'Paket Manual 2 jam x 8 hari', '2 jam x 8 hari', 1300000, 8, 'Manual', 'AGC', 'RI', 'MBA'),
(10, 'Paket Manual 2 jam x 6 hari', '2 jam x 6 hari', 1000000, 6, 'Manual', 'AGC', 'RI', 'MBA'),
(11, 'Paket Manual 2 jam x 4 hari', '2 jam x 4 hari', 800000, 4, 'Manual', 'PJR1', 'MBA', 'RI'),
(35, 'PAKET MANUAL ', 'MANUAL SPORT', 100000, 2, 'Manual', 'PJR1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `trx_daftar`
--

CREATE TABLE `trx_daftar` (
  `id_daftar` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `kode_mobil` varchar(20) NOT NULL,
  `created_by` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_daftar`
--

INSERT INTO `trx_daftar` (`id_daftar`, `id_customer`, `tanggal`, `status`, `id_paket`, `kode_mobil`, `created_by`) VALUES
(28, 1051, '2017-10-08', 'Daftar', 10, 'JOX', 'jojon'),
(29, 1050, '2017-09-08', 'Daftar', 8, 'JOX', 'kokom'),
(30, 1052, '2017-10-18', 'Daftar', 8, 'JOX', 'karen'),
(31, 1054, '2017-10-18', 'Daftar', 8, '', 'otu'),
(33, 1055, '2017-10-19', 'Daftar', 8, 'LOX', 'jancok'),
(36, 1056, '2017-09-19', 'Daftar', 7, '', 'ANDY'),
(37, 1057, '2017-09-22', 'Daftar', 8, '', 'a'),
(39, 1057, '2017-09-25', 'Daftar', 11, '', 'a'),
(40, 1057, '2017-09-25', 'Daftar', 8, '', 'A'),
(41, 1057, '2017-09-25', 'Daftar', 9, '', 'A'),
(42, 1057, '2017-09-25', 'Daftar', 11, '', 'a'),
(43, 1057, '2017-09-25', 'Daftar', 35, '', 'a'),
(44, 1057, '2017-09-25', 'Daftar', 35, 'PJR1', 'a'),
(45, 1058, '2017-09-25', 'Daftar', 35, '', 'b'),
(50, 1058, '2017-09-25', 'Daftar', 35, 'PJR1', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `trx_jadwal`
--

CREATE TABLE `trx_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_jadwal`
--

INSERT INTO `trx_jadwal` (`id_jadwal`, `id_daftar`, `tanggal`, `status`, `username`) VALUES
(26, 28, '2017-09-08 05:25:53', 'Request', 'jojon'),
(27, 28, '2017-09-08 05:26:03', 'Request', 'jojon'),
(28, 29, '2017-09-08 05:38:04', 'Request', 'kokom'),
(29, 29, '2017-09-08 05:38:13', 'Request', 'kokom'),
(30, 30, '2017-09-18 08:43:36', 'Request', 'karen'),
(31, 30, '2017-09-18 08:45:02', 'Request', 'karen'),
(33, 33, '2017-09-19 10:00:46', 'Request', 'jancok'),
(34, 44, '2017-09-25 19:13:58', 'Request', 'a'),
(39, 50, '2017-09-25 19:18:25', 'Request', 'b'),
(40, 50, '2017-09-25 19:18:57', 'Request', 'b'),
(41, 50, '2017-09-25 19:18:58', 'Request', 'b'),
(42, 50, '2017-09-25 19:19:16', 'Request', 'b'),
(43, 50, '2017-09-25 19:19:17', 'Request', 'b'),
(44, 50, '2017-09-25 19:19:21', 'Request', 'b'),
(45, 50, '2017-09-25 19:20:08', 'Request', 'b'),
(46, 50, '2017-09-25 19:20:09', 'Request', 'b'),
(47, 50, '2017-09-25 19:20:24', 'Request', 'b'),
(48, 50, '2017-09-25 19:20:30', 'Request', 'b'),
(49, 50, '2017-09-25 19:20:30', 'Request', 'b'),
(50, 50, '2017-09-25 19:21:07', 'Request', 'b'),
(51, 50, '2017-09-25 19:21:09', 'Request', 'b'),
(52, 50, '2017-09-25 19:21:13', 'Request', 'b'),
(53, 50, '2017-09-25 19:21:46', 'Request', 'b'),
(54, 50, '2017-09-25 19:21:56', 'Request', 'b'),
(55, 50, '2017-09-25 19:22:16', 'Request', 'b'),
(56, 50, '2017-09-25 19:22:24', 'Request', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `trx_konfirmasi`
--

CREATE TABLE `trx_konfirmasi` (
  `id` int(11) NOT NULL,
  `kode_daftar` varchar(32) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `biaya` double NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created_by` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_konfirmasi`
--

INSERT INTO `trx_konfirmasi` (`id`, `kode_daftar`, `id_daftar`, `tanggal`, `biaya`, `no_rek`, `atas_nama`, `status`, `created_by`) VALUES
(11, 'KD090805528', 28, '2017-09-08', 500000, '1321231231', 'RENALDI', 'Accept', 'jojon'),
(12, 'KD090805428', 28, '2017-09-08', 400000, '1321231231', 'RENALDI', 'Accept', 'jojon'),
(13, 'KD0908051029', 29, '2017-09-08', 500000, '123456789010', 'RENALDI', 'Accept', 'kokom'),
(14, 'KD091808230', 30, '2017-09-18', 500000, '1321231231', 'RENALDI', 'Accept', 'karen'),
(15, 'KD092507944', 44, '2017-09-25', 100000, 'a', 'a', 'Accept', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `trx_notifikasi`
--

CREATE TABLE `trx_notifikasi` (
  `id` int(11) NOT NULL,
  `pesan` varchar(256) NOT NULL,
  `username` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `trx_notifikasi`
--

INSERT INTO `trx_notifikasi` (`id`, `pesan`, `username`, `status`, `created_at`) VALUES
(1, 'Pembayaran dengan kode transaksi KD090805528 sudah di Request, terima kasih.', 'jojon', 1, '2017-09-24 12:37:30'),
(2, 'Pembayaran dengan kode transaksi KD090805528 sudah di Accept, terima kasih.', 'jojon', 1, '2017-09-24 12:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `trx_notifikasi_admin`
--

CREATE TABLE `trx_notifikasi_admin` (
  `id` int(11) NOT NULL,
  `pesan` varchar(128) NOT NULL,
  `link` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `trx_pertemuan`
--

CREATE TABLE `trx_pertemuan` (
  `id_pertemuan` int(11) NOT NULL,
  `id_daftar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` int(11) NOT NULL,
  `status` enum('aktif','batal','ubah') NOT NULL,
  `created_by` varchar(32) NOT NULL,
  `created_at` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_pertemuan`
--

INSERT INTO `trx_pertemuan` (`id_pertemuan`, `id_daftar`, `tanggal`, `jam`, `status`, `created_by`, `created_at`) VALUES
(62, 28, '2017-09-08', 8, 'aktif', 'jojon', '2017-09-08 05:25:53'),
(63, 28, '2017-09-09', 8, 'aktif', 'jojon', '2017-09-08 05:25:53'),
(64, 28, '2017-09-09', 10, 'aktif', 'jojon', '2017-09-08 05:25:53'),
(65, 28, '2017-09-09', 13, 'aktif', 'jojon', '2017-09-08 05:26:03'),
(66, 29, '2017-09-15', 15, 'aktif', 'kokom', '2017-09-08 05:38:04'),
(67, 29, '2017-09-13', 13, 'aktif', 'kokom', '2017-09-08 05:38:04'),
(68, 29, '2017-09-12', 10, 'aktif', 'kokom', '2017-09-08 05:38:04'),
(69, 29, '2017-09-15', 17, 'aktif', 'kokom', '2017-09-08 05:38:13'),
(70, 30, '2017-09-19', 10, 'aktif', 'karen', '2017-09-18 08:43:36'),
(71, 30, '2017-09-20', 13, 'aktif', 'karen', '2017-09-18 08:43:36'),
(72, 30, '2017-10-04', 15, 'aktif', 'karen', '2017-09-18 08:43:36'),
(73, 30, '2017-09-14', 8, 'aktif', 'karen', '2017-09-18 08:45:02'),
(78, 33, '2017-09-28', 15, 'aktif', 'jancok', '2017-09-19 10:00:46'),
(79, 33, '2017-09-29', 10, 'aktif', 'jancok', '2017-09-19 10:00:46'),
(80, 33, '2017-09-30', 13, 'aktif', 'jancok', '2017-09-19 10:00:46'),
(81, 33, '2017-10-01', 8, 'aktif', 'jancok', '2017-09-19 10:00:46'),
(82, 44, '2017-09-26', 8, 'aktif', 'a', '2017-09-25 19:13:58'),
(83, 44, '2017-09-26', 10, 'aktif', 'a', '2017-09-25 19:13:58'),
(96, 50, '2017-09-26', 13, 'aktif', 'b', '2017-09-25 19:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `trx_user`
--

CREATE TABLE `trx_user` (
  `id` int(11) NOT NULL,
  `id_usr` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trx_user`
--

INSERT INTO `trx_user` (`id`, `id_usr`, `username`, `password`, `role`) VALUES
(34, 1050, 'kokom', 'kokom', 'user'),
(35, 1051, 'jojon', 'jojon', 'user'),
(36, 1052, 'karen', 'karen', 'user'),
(37, 1053, 'admin', 'admin', 'admin'),
(38, 1054, 'otu', 'otu', 'user'),
(39, 1055, 'jancok', 'jancok', 'user'),
(40, 1056, 'ANDY', 'ANDY', 'user'),
(41, 1057, 'a', 'a', 'user'),
(42, 1058, 'b', 'b', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_customer`
--
ALTER TABLE `mst_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_driver`
--
ALTER TABLE `mst_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_mobil`
--
ALTER TABLE `mst_mobil`
  ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `mst_paket`
--
ALTER TABLE `mst_paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `kode_mobil_1` (`kode_mobil_1`),
  ADD KEY `kode_mobil_2` (`kode_mobil_2`),
  ADD KEY `kode_mobil_3` (`kode_mobil_3`);

--
-- Indexes for table `trx_daftar`
--
ALTER TABLE `trx_daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indexes for table `trx_jadwal`
--
ALTER TABLE `trx_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `trx_konfirmasi`
--
ALTER TABLE `trx_konfirmasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `trx_notifikasi`
--
ALTER TABLE `trx_notifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_notifikasi_admin`
--
ALTER TABLE `trx_notifikasi_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trx_pertemuan`
--
ALTER TABLE `trx_pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`),
  ADD KEY `id_daftar` (`id_daftar`);

--
-- Indexes for table `trx_user`
--
ALTER TABLE `trx_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_customer`
--
ALTER TABLE `mst_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1059;

--
-- AUTO_INCREMENT for table `mst_driver`
--
ALTER TABLE `mst_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_paket`
--
ALTER TABLE `mst_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `trx_daftar`
--
ALTER TABLE `trx_daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `trx_jadwal`
--
ALTER TABLE `trx_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `trx_konfirmasi`
--
ALTER TABLE `trx_konfirmasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trx_notifikasi`
--
ALTER TABLE `trx_notifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trx_notifikasi_admin`
--
ALTER TABLE `trx_notifikasi_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trx_pertemuan`
--
ALTER TABLE `trx_pertemuan`
  MODIFY `id_pertemuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `trx_user`
--
ALTER TABLE `trx_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trx_daftar`
--
ALTER TABLE `trx_daftar`
  ADD CONSTRAINT `trx_daftar_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `mst_paket` (`id_paket`);

--
-- Constraints for table `trx_jadwal`
--
ALTER TABLE `trx_jadwal`
  ADD CONSTRAINT `trx_jadwal_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `trx_daftar` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trx_konfirmasi`
--
ALTER TABLE `trx_konfirmasi`
  ADD CONSTRAINT `trx_konfirmasi_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `trx_daftar` (`id_daftar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trx_pertemuan`
--
ALTER TABLE `trx_pertemuan`
  ADD CONSTRAINT `trx_pertemuan_ibfk_1` FOREIGN KEY (`id_daftar`) REFERENCES `trx_daftar` (`id_daftar`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
