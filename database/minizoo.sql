-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 09:35 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minizoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `id_bayar` varchar(11) NOT NULL,
  `bayar_gambar` varchar(250) NOT NULL,
  `bayar_tgl` date NOT NULL,
  `bayar_total` int(15) NOT NULL,
  `id_pemesanan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`id_bayar`, `bayar_gambar`, `bayar_tgl`, `bayar_total`, `id_pemesanan`) VALUES
('BYR001', 'alur.jpg', '2021-02-06', 80000, 'PSN002'),
('BYR002', 'alur.jpg', '2021-02-06', 50000, 'PSN004'),
('BYR003', '4K-Nature-Phone-Wallpapers.jpg', '2021-02-10', 125000, 'PSN006');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fieldtrip`
--

CREATE TABLE `tbl_fieldtrip` (
  `id_fieldtrip` varchar(11) NOT NULL,
  `fieldtrip_nama` varchar(50) NOT NULL,
  `fieldtrip_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_fieldtrip`
--

INSERT INTO `tbl_fieldtrip` (`id_fieldtrip`, `fieldtrip_nama`, `fieldtrip_harga`) VALUES
('FLT001', ' PAUD & TK (FIELDTRIP)', 30000),
('FLT002', ' SD & SMP (FIELDTRIP)', 40000),
('FLT003', ' SMA, MAHASISWA & DEWASA (FIELDTRIP)', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` varchar(11) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `jumlah` int(15) NOT NULL,
  `id_produk` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_outbond`
--

CREATE TABLE `tbl_outbond` (
  `id_outbond` varchar(11) NOT NULL,
  `outbond_nama` varchar(50) NOT NULL,
  `outbond_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_outbond`
--

INSERT INTO `tbl_outbond` (`id_outbond`, `outbond_nama`, `outbond_harga`) VALUES
('OTB001', ' PUAD & TK (OUTBOND)', 45000),
('OTB002', ' SD & SMP (OUTBOND)', 55000),
('OTB003', '  SMA,MAHASISWA, & DEWASA (OUTBOND)', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemesanan`
--

CREATE TABLE `tbl_pemesanan` (
  `id_pemesanan` varchar(11) NOT NULL,
  `tgl_kegiatan` date NOT NULL,
  `item_pemesanan` varchar(50) NOT NULL,
  `harga_pemesanan` int(15) NOT NULL,
  `qty_peserta_pemesanan` int(15) NOT NULL,
  `total_pemesanan` int(15) NOT NULL,
  `id_pengunjung` varchar(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemesanan`
--

INSERT INTO `tbl_pemesanan` (`id_pemesanan`, `tgl_kegiatan`, `item_pemesanan`, `harga_pemesanan`, `qty_peserta_pemesanan`, `total_pemesanan`, `id_pengunjung`, `nama_user`) VALUES
('PSN001', '2021-02-04', 'Membajak Sawah', 10000, 3, 30000, 'PGN005', 'FRANCO '),
('PSN002', '2021-02-11', 'Menanam Padi', 10000, 3, 30000, 'PGN003', 'MAIMUN '),
('PSN003', '2021-02-18', 'Terapi Ikan', 5000, 3, 15000, 'PGN005', 'MAIMUN '),
('PSN004', '2021-02-06', 'Terapi Ikan', 5000, 4, 20000, 'PGN006', ''),
('PSN005', '2021-02-05', 'Renang ', 10000, 2, 20000, 'PGN006', ''),
('PSN006', '2021-02-08', 'Terapi Ikan', 5000, 25, 125000, 'PGN007', ''),
('PSN007', '2021-02-09', ' PAKET FIELDTRIP (PAUD & TK)', 30000, 40, 1200000, 'PGN008', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `id_pengunjung` varchar(11) NOT NULL,
  `nama_pengunjung` varchar(50) NOT NULL,
  `email_pengunjung` varchar(30) NOT NULL,
  `no_hp_pengunjung` varchar(15) NOT NULL,
  `alamat_pengunjung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`id_pengunjung`, `nama_pengunjung`, `email_pengunjung`, `no_hp_pengunjung`, `alamat_pengunjung`) VALUES
('PGN003', 'Nurjumiati', 'nurjumiati@gmail.com', '087766908826', 'jalan anyelitr, sendangadi, sleman, diy'),
('PGN004', 'HAMDANI H', 'dhani@gmail.com', '0852268522', 'Jl. Raya Lekok Pasuruan Jawa Timur'),
('PGN005', 'Zainul', 'zinu@yahoo.com', '08526262626', 'Surabaya'),
('PGN006', 'Lusylegia', 'Lusy@gmail.com', '0852226833360', 'Jakarta'),
('PGN007', 'Atunalina', 'atun@gmail.com', '087766999999', 'jalan dunia lagi'),
('PGN008', 'anya geraldi', 'anya@gmail.com', '8765543321', 'jakarta ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` varchar(11) NOT NULL,
  `id_fieldtrip` varchar(11) NOT NULL,
  `id_outbond` varchar(11) NOT NULL,
  `id_wahana` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(11) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_jns_kel` char(2) NOT NULL,
  `user_telp` varchar(15) NOT NULL,
  `user_level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `user_username`, `user_password`, `user_nama`, `user_jns_kel`, `user_telp`, `user_level`) VALUES
('USR001', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'FRANCO', 'L', '08558777296', 'admin'),
('USR002', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'MAIMUN', 'P', '0825554815', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wahana`
--

CREATE TABLE `tbl_wahana` (
  `id_wahana` varchar(11) NOT NULL,
  `wahana_nama` varchar(50) NOT NULL,
  `wahana_harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_wahana`
--

INSERT INTO `tbl_wahana` (`id_wahana`, `wahana_nama`, `wahana_harga`) VALUES
('WHN001', 'Tunggang Kuda', 15000),
('WHN002', 'Tubing', 10000),
('WHN003', 'Renang ', 10000),
('WHN004', 'Tangkap Ikan', 5000),
('WHN005', 'Terapi Ikan', 5000),
('WHN006', 'Tangkap Belut', 10000),
('WHN007', 'Membajak Sawah', 10000),
('WHN008', 'Menanam Padi', 10000),
('WHN009', 'Naik Gerobak Sapi', 10000),
('WHN010', 'Kemah', 25000),
('WHN011', ' PAKET FIELDTRIP (PAUD & TK)', 30000),
('WHN012', ' PAKET FIELDTRIP (SD & SMP)', 40000),
('WHN013', ' PAKET FIELDTRIP (SMA, MAHASISWA, & DEWASA)', 50000),
('WHN014', 'PAKET OUTBOND (PAUD & TK)', 45000),
('WHN015', 'PAKET OUTBOND (SD & SMP)', 55000),
('WHN016', 'PAKET OUTBOND (SMA, MAHASISWA, & DEWASA)', 65000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  ADD PRIMARY KEY (`id_bayar`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_fieldtrip`
--
ALTER TABLE `tbl_fieldtrip`
  ADD PRIMARY KEY (`id_fieldtrip`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_outbond`
--
ALTER TABLE `tbl_outbond`
  ADD PRIMARY KEY (`id_outbond`);

--
-- Indexes for table `tbl_pemesanan`
--
ALTER TABLE `tbl_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pengunjung` (`id_pengunjung`);

--
-- Indexes for table `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_wahana`
--
ALTER TABLE `tbl_wahana`
  ADD PRIMARY KEY (`id_wahana`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
