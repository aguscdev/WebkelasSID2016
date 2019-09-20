-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2019 at 08:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agus`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `dosen_id` int(11) NOT NULL,
  `nama_dosen` varchar(55) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `matkul_id` varchar(55) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `nama_dosen`, `no_telp`, `email`, `matkul_id`, `foto`) VALUES
(1, 'Mustar', '234567', 'mustar@gmail.com', '1', 'img/ayanta.jpg'),
(2, 'Jumiran skom', '456789123456', 'jumiran@gamil.com', '1', 'img/Untitled.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(11) NOT NULL,
  `kategori_id` varchar(55) NOT NULL,
  `hari` varchar(55) NOT NULL,
  `matkul_id` varchar(55) NOT NULL,
  `ruang` varchar(55) NOT NULL,
  `jam` varchar(55) NOT NULL,
  `dosen_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`jadwal_id`, `kategori_id`, `hari`, `matkul_id`, `ruang`, `jam`, `dosen_id`) VALUES
(1, '2', 'Selasa', '1', 'R', '09:49', '1'),
(2, '2', 'sabtu', '1', '201', '18:30', '1'),
(4, '2', 'sabtu', '1', 'W', '22:02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_malam`
--

CREATE TABLE `jadwal_malam` (
  `jadwal_id` int(11) NOT NULL,
  `kategori_id` varchar(55) NOT NULL,
  `hari` varchar(55) NOT NULL,
  `matkul_id` varchar(55) NOT NULL,
  `ruang` varchar(55) NOT NULL,
  `jam` varchar(55) NOT NULL,
  `dosen_id` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_malam`
--

INSERT INTO `jadwal_malam` (`jadwal_id`, `kategori_id`, `hari`, `matkul_id`, `ruang`, `jam`, `dosen_id`) VALUES
(1, '3', 'Selasa', '1', 'R', '09:49', '2'),
(2, '3', 'Rabu', '1', '201', '18:30', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori`) VALUES
(2, 'Kelas Pagi'),
(3, 'Kelas Malem');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `npm` varchar(255) NOT NULL,
  `nama_mahasiswa` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `npm`, `nama_mahasiswa`, `email`, `no_telp`, `alamat`, `foto`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`) VALUES
(1, '2017804042', 'Agus Cahyadi', 'agusc.dev02@gmail.com', '085778783602', 'Kp.Guha Pabuaran Rt.17/05 Ds.Guha Pabuaran Kec.Rajeg Kab.Tangerang Prop.Banten.', 'img/agus.jpeg', '2019-04-05 06:44:05', '2019-09-17 11:26:44', 1, 1, 1),
(4, '2016804', 'Eko AS', 'eko@gmail.com', '087877177321', 'Cikpua, Tangerang.', 'img/eko.jpg', '2019-04-17 18:49:17', '2019-09-17 11:28:02', 1, 4, 1),
(5, '2017804043', 'Safarudin Sidik', 'safar@gmail.com', '085591181559', 'Suka Bumi, Jawa Barat.', 'img/agus.jpeg', '2019-09-17 11:29:27', '2019-09-17 11:29:27', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `matkul_id` int(11) NOT NULL,
  `matkul` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`matkul_id`, `matkul`) VALUES
(1, 'Ecommerce'),
(2, 'Data Mining');

-- --------------------------------------------------------

--
-- Table structure for table `umum`
--

CREATE TABLE `umum` (
  `umum_id` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `umum`
--

INSERT INTO `umum` (`umum_id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'Pengambilan KHS', 'Pengambilan KHS paling lambat tanggal 21', 'img/token.jpg'),
(2, 'Mengerjakan Tugas', 'mengerjakan Tugas', 'img/jadwal.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `email`, `password`, `level`) VALUES
(1, 'Agus cahyadi', 'agus', 'agus@gmail.com', 'fdf169558242ee051cca1479770ebac3', 'ADMIN'),
(2, 'Pujiyati', 'pujiyati', 'pujiyati@gmail.com', '83d4bf0a6c7ed9878f4165390afcd0ad', 'USER'),
(3, 'Anis Hidayat', 'anis', 'anis@gmail.com', '38a1ffb5ccad9612d3d28d99488ca94b', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `jadwal_malam`
--
ALTER TABLE `jadwal_malam`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`matkul_id`);

--
-- Indexes for table `umum`
--
ALTER TABLE `umum`
  ADD PRIMARY KEY (`umum_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jadwal_malam`
--
ALTER TABLE `jadwal_malam`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `umum`
--
ALTER TABLE `umum`
  MODIFY `umum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
