-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 05:23 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `kontak_id` varchar(10) NOT NULL,
  `profile_id` int(10) DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL,
  `instagram` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`kontak_id`, `profile_id`, `no_telp`, `instagram`, `email`) VALUES
('KT-110', 5, '085220180298', 'ghulam_ak', 'ghulay_akk099@gmail.'),
('KT-111', 6, '0895364506121', 'benjesicaa', 'benjes123@gmail.com'),
('KT-112', 7, '082215709630', 'joo_clvn', 'vinn111@gmail.com'),
('KT-113', 8, '0895616549095', 'melaniyanti_', 'cimenggg01@gmail.com'),
('KT-114', 9, '08976802503', 'pritiotvni', 'prittsyalala@gmail.c'),
('KT-115', 10, '085317948663', 'nindyputrilestarii_', 'ninput_@gmail.com'),
('KT-116', 1, '08889594342', 'sherinanatasyaa', 'shernatasya01@gmail.'),
('KT-117', 2, '089660176406', 'yohanesprass', 'prasticio12@gmail.co'),
('KT-118', 3, '082117731993', 'anggitafebriantyy', 'anggifebbb09@gmail.c');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `pkj_id` varchar(10) NOT NULL,
  `profile_id` int(10) DEFAULT NULL,
  `jabatan` varchar(15) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`pkj_id`, `profile_id`, `jabatan`, `waktu`) VALUES
('SP1', 1, 'SPV', '3 bulan'),
('SP10', 6, 'SPV', '2 tahun'),
('SP2', 10, 'ADMIN', '1 Tahun'),
('SP3', 2, 'SALES', '1 Bulan'),
('SP4', 9, 'SALES', '8 bulan'),
('SP5', 3, 'ADMIN', '2 bulan'),
('SP6', 8, 'ADMIN', '3 bulan'),
('SP7', 4, 'SPV', '9 bulan'),
('SP8', 7, 'KORLAP', '10 bulan'),
('SP9', 5, 'KORLAP', '1 Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `pend_id` varchar(10) NOT NULL,
  `profile_id` int(10) DEFAULT NULL,
  `jenjang` varchar(20) DEFAULT NULL,
  `nama_sekolah` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`pend_id`, `profile_id`, `jenjang`, `nama_sekolah`) VALUES
('PD-01', 6, 'SMA', 'SMA Putra Nirmala'),
('PD-02', 4, 'S1', 'Akademi IMC'),
('PD-03', 3, 'S1', 'STMIK IKMI '),
('PD-04', 2, 'SMA', 'SMA Negeri 3'),
('PD-05', 5, 'D3', 'Universitas CIC'),
('PD-06', 1, 'S1', 'Universitas CIC'),
('PD-07', 8, 'SMA', 'SMA Negeri 7 Cirebon'),
('PD-08', 7, 'S1', 'Universitas CIC'),
('PD-09', 6, 'S1', 'Universitas Atmajaya'),
('PD-10', 10, 'SMA', 'SMA Negeri 6 Cirebon');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(10) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `nama`, `tgl_lahir`, `jk`, `alamat`) VALUES
(1, 'Sherina Natasya', '2001-06-18', 'Perempuan', 'Jalan Pekalipan Utara'),
(2, 'Prasticio', '2002-03-15', 'Perempuan', 'Jalan Raya Cigugur'),
(3, 'Anggita Febrianti', '2001-02-17', 'Perempuan', 'Jalan Cigendeng'),
(4, 'Ghulam', '2002-08-24', 'Laki-Laki', 'Jalan Raya Sumber'),
(5, 'Wisnu', '1998-10-21', 'Laki-Laki', 'Jalan Tentara Pelajar'),
(6, 'Benedicta Jesica', '2001-04-21', 'Perempuan', 'Jalan Pemuda Raya'),
(7, 'Calvin', '2001-12-02', 'Laki-Laki', 'Jalan Warnasari'),
(8, 'Melani Yanti', '2001-05-27', 'Perempuan', 'Jalan Ceremai Giri'),
(9, 'Priti Oktaviani', '2001-10-22', 'Perempuan', 'Jalan Lawanggada'),
(10, 'Nindy', '2001-08-02', 'Perempuan', 'Jalan Wahidin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`kontak_id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`pkj_id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`pend_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
