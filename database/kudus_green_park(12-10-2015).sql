-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 12, 2015 at 03:31 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kudus_green_park`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_info_rth`
--

CREATE TABLE IF NOT EXISTS `m_info_rth` (
  `id_rth` varchar(20) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `desa` varchar(10) NOT NULL,
  `status_lahan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `luas` varchar(150) NOT NULL,
  `jenis_tanaman` varchar(200) NOT NULL,
  `fungsi` text NOT NULL,
  `detail_peta` varchar(100) NOT NULL,
  `pengelola` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_info_rth`
--

INSERT INTO `m_info_rth` (`id_rth`, `kecamatan`, `desa`, `status_lahan`, `jenis`, `luas`, `jenis_tanaman`, `fungsi`, `detail_peta`, `pengelola`, `nama`, `alamat`) VALUES
('12333', '1', '1', 1, 1, '3888', 'rumput', 'tongkrongan', '', 'pemerintah', 'alun alun', 'depan ramayana');

-- --------------------------------------------------------

--
-- Table structure for table `m_photo`
--

CREATE TABLE IF NOT EXISTS `m_photo` (
`idphoto` int(11) NOT NULL,
  `id_rth` varchar(20) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_photo`
--

INSERT INTO `m_photo` (`idphoto`, `id_rth`, `fileName`, `time`) VALUES
(38, '12333', '1444577139_2lNw63dGIkW9.JPG', '2015-10-11 15:25:41'),
(39, '12333', '1444577140_dVzLfxoRoKU3.JPG', '2015-10-11 15:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `m_testimoni`
--

CREATE TABLE IF NOT EXISTS `m_testimoni` (
  `id` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `s_desa`
--

CREATE TABLE IF NOT EXISTS `s_desa` (
  `id` varchar(20) NOT NULL,
  `id_kecamatan` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_desa`
--

INSERT INTO `s_desa` (`id`, `id_kecamatan`, `nama`, `created`, `updated`) VALUES
('DK1', 'K1', 'Purwosari', '2015-10-11 18:12:25', '0000-00-00 00:00:00'),
('DK10', 'K2', 'Dersalam', '2015-10-12 00:39:05', '0000-00-00 00:00:00'),
('DK11', 'K2', 'Pedawang', '2015-10-12 00:39:05', '0000-00-00 00:00:00'),
('DK12', 'K2', 'Gondangmanis', '2015-10-12 00:39:45', '0000-00-00 00:00:00'),
('DK13', 'K3', 'Tanjungkarang', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK14', 'K3', 'Loram Kulon', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK15', 'K3', 'Jati Wetan', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK16', 'K3', 'Jati Kulon', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK17', 'K3', 'Pasuruhan Lor', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK18', 'K3', 'Getas Pejaten', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK19', 'K3', 'Megawon', '2015-10-12 00:42:38', '0000-00-00 00:00:00'),
('DK2', 'K1', 'Sunggungan', '2015-10-11 18:12:25', '0000-00-00 00:00:00'),
('DK20', 'K4', 'Kedungdowo', '2015-10-12 00:45:27', '0000-00-00 00:00:00'),
('DK21', 'K4', 'Mijen', '2015-10-12 00:45:27', '0000-00-00 00:00:00'),
('DK22', 'K4', 'Garung Lor', '2015-10-12 00:45:27', '0000-00-00 00:00:00'),
('DK23', 'K4', 'Prambatan Lor', '2015-10-12 00:45:27', '0000-00-00 00:00:00'),
('DK24', 'K4', 'Prambatan Kidul', '2015-10-12 00:45:27', '0000-00-00 00:00:00'),
('DK25', 'K4', 'Bakalan Krapyak', '2015-10-12 00:45:27', '0000-00-00 00:00:00'),
('DK26', 'K5', 'Getasrabi', '2015-10-12 00:46:55', '0000-00-00 00:00:00'),
('DK27', 'K5', 'Klumpit', '2015-10-12 00:46:55', '0000-00-00 00:00:00'),
('DK28', 'K5', 'Gribig', '2015-10-12 00:46:55', '0000-00-00 00:00:00'),
('DK29', 'K5', 'Karangmalang', '2015-10-12 00:46:55', '0000-00-00 00:00:00'),
('DK3', 'K1', 'Panjunan', '2015-10-11 18:12:25', '0000-00-00 00:00:00'),
('DK30', 'K5', 'Padurenan', '2015-10-12 00:47:15', '0000-00-00 00:00:00'),
('DK31', 'K6', 'Gulang', '2015-10-12 00:48:24', '0000-00-00 00:00:00'),
('DK32', 'K6', 'Jepang', '2015-10-12 00:48:24', '0000-00-00 00:00:00'),
('DK33', 'K6', 'Payaman', '2015-10-12 00:48:24', '0000-00-00 00:00:00'),
('DK34', 'K7', 'Klaling', '2015-10-12 00:50:30', '0000-00-00 00:00:00'),
('DK35', 'K7', 'Jekulo', '2015-10-12 00:50:30', '0000-00-00 00:00:00'),
('DK36', 'K7', 'Hadipolo', '2015-10-12 00:50:30', '0000-00-00 00:00:00'),
('DK37', 'K7', 'Tanjungrejo', '2015-10-12 00:50:30', '0000-00-00 00:00:00'),
('DK38', 'K7', 'Pladen', '2015-10-12 00:50:30', '0000-00-00 00:00:00'),
('DK39', 'K8', 'Cendono', '2015-10-12 00:52:07', '0000-00-00 00:00:00'),
('DK4', 'K1', 'Wergu Wetan', '2015-10-11 18:12:25', '0000-00-00 00:00:00'),
('DK40', 'K8', 'Piji', '2015-10-12 00:52:07', '0000-00-00 00:00:00'),
('DK41', 'K8', 'Samirejo', '2015-10-12 00:52:07', '0000-00-00 00:00:00'),
('DK42', 'K8', 'Lau', '2015-10-12 00:52:07', '0000-00-00 00:00:00'),
('DK43', 'K9', 'Undaan Tengah', '2015-10-12 00:53:28', '0000-00-00 00:00:00'),
('DK44', 'K9', 'Undaan Kidul', '2015-10-12 00:53:28', '0000-00-00 00:00:00'),
('DK45', 'K9', 'Sambung', '2015-10-12 00:53:28', '0000-00-00 00:00:00'),
('DK46', 'K9', 'Medini', '2015-10-12 00:53:28', '0000-00-00 00:00:00'),
('DK47', 'K9', 'Terangmas', '2015-10-12 00:53:28', '0000-00-00 00:00:00'),
('DK48', 'K10', 'Gondosari', '2015-10-12 00:56:14', '0000-00-00 00:00:00'),
('DK49', 'K10', 'Jurang', '2015-10-12 00:56:14', '0000-00-00 00:00:00'),
('DK5', 'K1', 'Mlati Lor', '2015-10-11 18:12:25', '0000-00-00 00:00:00'),
('DK50', 'K10', 'Besito', '2015-10-12 00:56:14', '0000-00-00 00:00:00'),
('DK51', 'K10', 'Kedungsari', '2015-10-12 00:56:14', '0000-00-00 00:00:00'),
('DK52', 'K11', 'Mejobo', '2015-10-12 00:57:16', '0000-00-00 00:00:00'),
('DK53', 'K12', 'Golatepus', '2015-10-12 00:57:16', '0000-00-00 00:00:00'),
('DK54', 'K11', 'Tenggeles', '2015-10-12 00:57:16', '0000-00-00 00:00:00'),
('DK6', 'K1', 'Rendeng', '2015-10-11 18:12:25', '0000-00-00 00:00:00'),
('DK7', 'K2', 'Panjang', '2015-10-11 18:17:55', '0000-00-00 00:00:00'),
('DK8', 'K2', 'Bacin', '2015-10-11 18:17:55', '0000-00-00 00:00:00'),
('DK9', 'K2', 'Bae', '2015-10-12 00:39:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_jenis_rth`
--

CREATE TABLE IF NOT EXISTS `s_jenis_rth` (
  `id` varchar(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_jenis_rth`
--

INSERT INTO `s_jenis_rth` (`id`, `jenis`, `created`, `updated`) VALUES
('J1', 'Taman Kota', '2015-10-12 01:00:32', '0000-00-00 00:00:00'),
('J2', 'Hutan Kota', '2015-10-12 01:00:32', '0000-00-00 00:00:00'),
('J3', 'Pulau Jalan dan Median Jalan', '2015-10-12 01:00:32', '0000-00-00 00:00:00'),
('J4', 'Sempadan Sungai dan Mata Air', '2015-10-12 01:00:32', '0000-00-00 00:00:00'),
('J5', 'Pemakaman', '2015-10-12 01:00:32', '0000-00-00 00:00:00'),
('J6', 'Fungsi Tertentu', '2015-10-12 01:00:32', '0000-00-00 00:00:00'),
('J7', 'Lapangan Olahraga', '2015-10-12 01:00:32', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_kecamatan`
--

CREATE TABLE IF NOT EXISTS `s_kecamatan` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_kecamatan`
--

INSERT INTO `s_kecamatan` (`id`, `nama`, `updated`, `created`) VALUES
('K1', 'Kota', '2015-10-11 18:04:10', '2015-10-11 18:04:10'),
('K10', 'Gebog', '2015-10-12 00:54:03', '2015-10-12 00:54:03'),
('K11', 'Mejobo', '2015-10-12 00:54:03', '2015-10-12 00:54:03'),
('K2', 'Bae', '2015-10-11 18:06:48', '2015-10-11 18:06:48'),
('K3', 'Jati', '2015-10-11 18:06:48', '2015-10-11 18:06:48'),
('K4', 'Kaliwungu', '2015-10-11 18:06:48', '2015-10-11 18:06:48'),
('K5', 'Gebog', '2015-10-11 18:06:48', '2015-10-11 18:06:48'),
('K6', 'Mejobo', '2015-10-11 18:06:48', '2015-10-11 18:06:48'),
('K7', 'Jekulo', '2015-10-11 18:07:50', '2015-10-11 18:07:50'),
('K8', 'Dawe', '2015-10-11 18:07:50', '2015-10-11 18:07:50'),
('K9', 'Undaan', '2015-10-11 18:07:50', '2015-10-11 18:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `s_status_lahan`
--

CREATE TABLE IF NOT EXISTS `s_status_lahan` (
  `id` int(5) NOT NULL,
  `status` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_status_lahan`
--

INSERT INTO `s_status_lahan` (`id`, `status`, `created`, `updated`) VALUES
(1, 'Tanah Pemda', '2015-10-12 01:22:35', '0000-00-00 00:00:00'),
(2, 'Tanah Desa', '2015-10-12 01:22:35', '0000-00-00 00:00:00'),
(3, 'Tanah Perorangan', '2015-10-12 01:22:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `s_user`
--

CREATE TABLE IF NOT EXISTS `s_user` (
`iduser` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `s_user`
--

INSERT INTO `s_user` (`iduser`, `nama_lengkap`, `username`, `password`, `role`) VALUES
(20, 'test', 'ananana', '$2y$10$GZvS3pDc5f.kz2ZUe0YxqumUwCJ4Qwu22Qn/Z0mILJUxSPHBnny6y', NULL),
(23, 'valentino', 'valent', '$2y$10$0RtZED7Dfu/EDRwAm4T1bOZvt9XKTTotzyJveT3fpfA7HYnqnrH/e', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_info_rth`
--
ALTER TABLE `m_info_rth`
 ADD PRIMARY KEY (`id_rth`);

--
-- Indexes for table `m_photo`
--
ALTER TABLE `m_photo`
 ADD PRIMARY KEY (`idphoto`);

--
-- Indexes for table `s_desa`
--
ALTER TABLE `s_desa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_kecamatan`
--
ALTER TABLE `s_kecamatan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_user`
--
ALTER TABLE `s_user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_photo`
--
ALTER TABLE `m_photo`
MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
