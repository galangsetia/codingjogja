-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 04:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding_jogja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`) VALUES
(1, 'sdsdsdsd', 'ssss', 'ssss'),
(2, 'dcscc', 'ccc', 'cccs');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `jadwal_bimbel` varchar(50) NOT NULL,
  `jumlah_pertemuan` int(12) NOT NULL,
  `harga_kelas` int(12) NOT NULL,
  `ruang_kelas` varchar(50) NOT NULL,
  `status_delete` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `nama_pengajar`, `jadwal_bimbel`, `jumlah_pertemuan`, `harga_kelas`, `ruang_kelas`, `status_delete`) VALUES
(1, 'php', 'galang', 'senin', 2, 200000, '4.6.7', 0),
(2, 'java', 'galaxy', 'selasa', 3, 400000, '2.3.4', 0),
(3, 'javascript', 'Budiono', 'Senin 21 mei 2020', 4, 500000, 'Ruang 9', 0),
(4, 'javascript', 'hjhj', 'ssss', 7, 2, 'ssss', 1),
(5, 'CSS & HTML', 'Doni, Skom', 'Rabu ,21 mei 2020', 2, 200000, 'Ruang 13', 0),
(6, 'Golang', 'Budi S.kom', '22 Juni 2020', 12, 1200000, 'Ruang 11', 0),
(7, 'Vue.js', 'kiki', 'rabu', 3, 300000, 'ruang 16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `status_delete` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pendaftar`, `tanggal_pembayaran`, `status_delete`) VALUES
(1, 1, '2020-04-06', 0),
(2, 2, '2020-04-07', 0),
(3, 0, '0000-00-00', 0),
(4, 0, '2022-11-15', 0),
(5, 0, '2020-06-09', 0),
(6, 0, '2020-05-11', 1),
(7, 0, '2020-06-16', 1),
(8, 0, '2020-06-15', 1),
(9, 0, '2020-06-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `tempat_tanggal_lahir` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `usia` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `id_kelas`, `nama_peserta`, `tempat_tanggal_lahir`, `alamat`, `usia`, `email`, `no_telp`) VALUES
(1, 1, 'galang', 'bantul,02-03-2000', 'bantul', '18', 'galaxy@gmail.com', '089777890765'),
(2, 2, 'galaxy', 'bulan,03-02-1998', 'bulan sabit', '18', 'bulanku@gmail.com', '089777890799'),
(8, 0, 'aaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'bbbbkl');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_pendaftar` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_peserta` varchar(50) NOT NULL,
  `nama_pengajar` varchar(50) NOT NULL,
  `jadwal_bimbel` varchar(50) NOT NULL,
  `jumlah_pertemuan` int(12) NOT NULL,
  `ruang_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `id_pendaftar`, `id_kelas`, `nama_peserta`, `nama_pengajar`, `jadwal_bimbel`, `jumlah_pertemuan`, `ruang_kelas`) VALUES
(1, 1, 1, 'galang', 'budi', 'senin dan selasa', 3, '3.6.7'),
(2, 2, 2, 'putra', 'sakti', 'rabu', 3, '2.3.4'),
(3, 0, 0, 'upin', 'budi', '22224445', 2, '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `status_delete` (`status_delete`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
