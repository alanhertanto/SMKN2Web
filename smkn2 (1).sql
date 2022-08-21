-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2022 at 10:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smkn2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `nama` text NOT NULL,
  `matpel` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal`
--

CREATE TABLE `data_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `starting_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `ulanganke` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jadwal`
--

INSERT INTO `data_jadwal` (`id_jadwal`, `starting_time`, `end_time`, `ulanganke`) VALUES
(2, '2022-05-19 01:09:21', '2022-05-25 07:49:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_jawaban`
--

CREATE TABLE `data_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `status` text NOT NULL,
  `ulanganke` text NOT NULL,
  `jenis_ujian` enum('UAS','UTS','Ulangan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE `data_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `nilai` text NOT NULL,
  `ulanganke` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id_nilai`, `id_siswa`, `nilai`, `ulanganke`) VALUES
(2, 2, '25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelajaran`
--

CREATE TABLE `data_pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `nama_materi` text NOT NULL,
  `pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pelajaran`
--

INSERT INTO `data_pelajaran` (`id_pelajaran`, `nama_materi`, `pdf`) VALUES
(1, 'Seni Budaya Kelas 10', 'http://sman1kotatangsel.com/pusdatin/downloads/Kelas%20X%20Seni%20Budaya%20BS%20Sem%201.pdf'),
(2, 'Bahasa Indonesia Kelas 10', 'http://staffnew.uny.ac.id/upload/131873960/pengabdian/buku-pelajaran-bahasa-indonesia-smk-kelas-10.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn` varchar(16) NOT NULL,
  `nama` text NOT NULL,
  `kelas` text NOT NULL,
  `alamat` text NOT NULL,
  `jk` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` text NOT NULL,
  `foto` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nisn`, `nama`, `kelas`, `alamat`, `jk`, `tanggal_lahir`, `tempat_lahir`, `foto`, `id_user`) VALUES
(1, '12345789', 'Test 1', 'RPL2', 'Pliss', 'Laki-laki', '2021-06-13', 'Kuningan', 'Marker Implan.png', 0),
(2, '12345791', 'Test 2', 'RPL2', 'Plisszz', 'Perempuan', '2021-02-01', 'Cirebon', 'Marker IUD.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `data_soal`
--

CREATE TABLE `data_soal` (
  `id_soal` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihanA` text NOT NULL,
  `pilihanB` text NOT NULL,
  `pilihanC` text NOT NULL,
  `pilihanD` text NOT NULL,
  `jawaban` text NOT NULL,
  `ulanganke` text NOT NULL,
  `jenis_ujian` enum('UAS','UTS','Ulangan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_soal`
--

INSERT INTO `data_soal` (`id_soal`, `id_guru`, `soal`, `pilihanA`, `pilihanB`, `pilihanC`, `pilihanD`, `jawaban`, `ulanganke`, `jenis_ujian`) VALUES
(1, 1, 'Siapakah Test 1', 'Test1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(2, 1, 'Soal Test.0', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(3, 1, 'Soal Test.1', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(4, 1, 'Soal Test.2', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(5, 1, 'Soal Test.3', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(6, 1, 'Soal Test.4', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(7, 1, 'Soal Test.5', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(8, 1, 'Soal Test.6', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(9, 1, 'Soal Test.7', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(10, 1, 'Soal Test.8', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(11, 1, 'Soal Test.9', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(12, 1, 'Soal Test.10', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(13, 1, 'Soal Test.11', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(14, 1, 'Soal Test.12', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(15, 1, 'Soal Test.13', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(16, 1, 'Soal Test.14', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(17, 1, 'Soal Test.15', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(18, 1, 'Soal Test.16', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(19, 1, 'Soal Test.17', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(20, 1, 'Soal Test.18', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(21, 1, 'Soal Test.19', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(22, 1, 'Soal Test.20', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(23, 1, 'Soal Test.21', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(24, 1, 'Soal Test.22', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(25, 1, 'Soal Test.23', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(26, 1, 'Soal Test.24', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(27, 1, 'Soal Test.25', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(28, 1, 'Soal Test.26', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(29, 1, 'Soal Test.27', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(30, 1, 'Soal Test.28', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(31, 1, 'Soal Test.29', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(32, 1, 'Soal Test.30', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(33, 1, 'Soal Test.31', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(34, 1, 'Soal Test.32', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(35, 1, 'Soal Test.33', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(36, 1, 'Soal Test.34', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(37, 1, 'Soal Test.35', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(38, 1, 'Soal Test.36', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(39, 1, 'Soal Test.37', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(40, 1, 'Soal Test.38', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(41, 1, 'Soal Test.39', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(42, 1, 'Soal Test.40', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(43, 1, 'Soal Test.41', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(44, 1, 'Soal Test.42', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(45, 1, 'Soal Test.43', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(46, 1, 'Soal Test.44', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(47, 1, 'Soal Test.45', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(48, 1, 'Soal Test.46', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(49, 1, 'Soal Test.47', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(50, 1, 'Soal Test.48', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(51, 1, 'Soal Test.49', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(52, 1, 'Soal Test.50', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(53, 1, 'Soal Test.51', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(54, 1, 'Soal Test.52', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(55, 1, 'Soal Test.53', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(56, 1, 'Soal Test.54', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(57, 1, 'Soal Test.55', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(58, 1, 'Soal Test.56', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(59, 1, 'Soal Test.57', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(60, 1, 'Soal Test.58', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(61, 1, 'Soal Test.59', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(62, 1, 'Soal Test.60', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(63, 1, 'Soal Test.61', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(64, 1, 'Soal Test.62', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(65, 1, 'Soal Test.63', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(66, 1, 'Soal Test.64', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(67, 1, 'Soal Test.65', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(68, 1, 'Soal Test.66', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(69, 1, 'Soal Test.67', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(70, 1, 'Soal Test.68', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(71, 1, 'Soal Test.69', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(72, 1, 'Soal Test.70', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(73, 1, 'Soal Test.71', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(74, 1, 'Soal Test.72', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(75, 1, 'Soal Test.73', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(76, 1, 'Soal Test.74', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(77, 1, 'Soal Test.75', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(78, 1, 'Soal Test.76', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(79, 1, 'Soal Test.77', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(80, 1, 'Soal Test.78', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(81, 1, 'Soal Test.79', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(82, 1, 'Soal Test.80', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(83, 1, 'Soal Test.81', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(84, 1, 'Soal Test.82', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(85, 1, 'Soal Test.83', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(86, 1, 'Soal Test.84', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(87, 1, 'Soal Test.85', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(88, 1, 'Soal Test.86', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(89, 1, 'Soal Test.87', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(90, 1, 'Soal Test.88', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(91, 1, 'Soal Test.89', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(92, 1, 'Soal Test.90', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(93, 1, 'Soal Test.91', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(94, 1, 'Soal Test.92', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(95, 1, 'Soal Test.93', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(96, 1, 'Soal Test.94', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(97, 1, 'Soal Test.95', 'Test 1', 'Test2', 'Test3', 'Test4', 'A', '1', 'Ulangan'),
(98, 1, 'Soal Test.96', 'Test 1', 'Test2', 'Test3', 'Test4', 'C', '1', 'Ulangan'),
(99, 1, 'Soal Test.97', 'Test 1', 'Test2', 'Test3', 'Test4', 'D', '1', 'Ulangan'),
(100, 1, 'Soal Test.98', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan'),
(101, 1, 'Soal Test.99', 'Test 1', 'Test2', 'Test3', 'Test4', 'B', '1', 'Ulangan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` text NOT NULL,
  `hak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `hak`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 0),
(2, 'siswa1', '013f0f67779f3b1686c604db150d12ea', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `data_jawaban`
--
ALTER TABLE `data_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal` (`id_soal`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `data_pelajaran`
--
ALTER TABLE `data_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nisn` (`nisn`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_soal`
--
ALTER TABLE `data_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_jadwal`
--
ALTER TABLE `data_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_jawaban`
--
ALTER TABLE `data_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_pelajaran`
--
ALTER TABLE `data_pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_soal`
--
ALTER TABLE `data_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
