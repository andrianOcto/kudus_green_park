-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 06, 2015 at 08:15 AM
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
  `bentuk` int(10) NOT NULL,
  `kecamatan` varchar(10) NOT NULL,
  `desa` varchar(10) NOT NULL,
  `status_lahan` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `luas` double NOT NULL,
  `jenis_tanaman` varchar(200) NOT NULL,
  `fungsi` varchar(300) NOT NULL,
  `detail_peta` varchar(100) NOT NULL,
  `pengelola` varchar(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_info_rth`
--

INSERT INTO `m_info_rth` (`id_rth`, `bentuk`, `kecamatan`, `desa`, `status_lahan`, `jenis`, `luas`, `jenis_tanaman`, `fungsi`, `detail_peta`, `pengelola`, `nama`, `alamat`, `deskripsi`) VALUES
('12', 0, '0', '0', 0, 0, 0, '', '', '', '', 'tets', 'test', 'test'),
('13', 0, '0', '0', 0, 0, 0, '', '', '', '', 'ahahah', 'heheheh', 'kjadsfha;djksfhakjdsfalkjsdflakjdsf'),
('14', 0, '0', '0', 0, 0, 0, '', '', '', '', 'taman cinta', 'semarang', 'asdf'),
('16', 0, '0', '0', 0, 0, 0, '', '', '', '', 'hehehe', 'hahaha', 'hhehehe');

-- --------------------------------------------------------

--
-- Table structure for table `m_photo`
--

CREATE TABLE IF NOT EXISTS `m_photo` (
`idphoto` int(11) NOT NULL,
  `id_rth` varchar(20) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_photo`
--

INSERT INTO `m_photo` (`idphoto`, `id_rth`, `fileName`, `time`) VALUES
(1, '7', '', '2015-03-25 09:08:35'),
(2, '8', '1427352064_E8RWTurKg8hq.jpeg', '2015-03-26 06:41:04'),
(3, '8', '1427352064_GxFVUIZcDUDc.jpeg', '2015-03-26 06:41:04'),
(4, '9', '1427352961_AAn5T399bQzg.jpeg', '2015-03-26 06:56:01'),
(5, '10', '1427357421_N1x3oP9jRL2n.jpeg', '2015-03-26 08:10:22'),
(6, '10', '1427357421_spqtC7DqtEBY.jpeg', '2015-03-26 08:10:22'),
(7, '10', '1427357421_1OTrVUGQH4bk.jpeg', '2015-03-26 08:10:22'),
(8, '10', '1427357421_TXHRbCToNSq9.jpeg', '2015-03-26 08:10:22'),
(9, '10', '1427357421_ekgemjGsPaNp.jpeg', '2015-03-26 08:10:22'),
(10, '11', '1427785251_jRnSvi9BN9uH.jpeg', '2015-03-31 07:00:51'),
(11, '11', '1427785251_1p7hYbrRLvWW.jpg', '2015-03-31 07:00:51'),
(12, '11', '1427785251_ZAJvCXUWhW9M.jpeg', '2015-03-31 07:00:51'),
(13, '13', '1427788877_juEHTul0acWX.jpeg', '2015-03-31 08:01:18'),
(14, '13', '1427788877_FL236JpImV7q.jpeg', '2015-03-31 08:01:18'),
(15, '13', '1427788877_AeteAwcuolnp.jpeg', '2015-03-31 08:01:18'),
(16, '13', '1427788877_G3InbjfdCuLP.jpeg', '2015-03-31 08:01:18'),
(17, '13', '1427788878_M87WM9eU2IUM.jpeg', '2015-03-31 08:01:18'),
(18, '12', '1427792037_4jCgqUfljeBH.jpeg', '2015-03-31 08:53:57'),
(24, '15', '1444023245_lcxpmfv3g1y8.jpg', '2015-10-05 05:34:06'),
(25, '15', '1444023245_M7s1FZEV9Kfu.jpg', '2015-10-05 05:34:06'),
(26, '15', '1444023246_HwXQVQoDkBrC.jpg', '2015-10-05 05:34:06'),
(27, '15', '1444023246_3EiO1WfcwD9s.jpg', '2015-10-05 05:34:06'),
(28, '14', '1444024337_W8FFKwbqzBXz.jpg', '2015-10-05 05:52:18'),
(29, '14', '1444024337_2j3w0zH00vq4.jpg', '2015-10-05 05:52:18'),
(30, '14', '1444024337_GXWSqFJau0dx.jpg', '2015-10-05 05:52:18'),
(31, '16', '1444104258_bHnbkNEiGmMi.jpg', '2015-10-06 04:04:18'),
(32, '16', '1444104258_HOFcEJh8EwTj.jpeg', '2015-10-06 04:04:18'),
(33, '16', '1444104258_O4KQXNM36IaE.jpeg', '2015-10-06 04:04:18');

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
-- Table structure for table `s_bentuk`
--

CREATE TABLE IF NOT EXISTS `s_bentuk` (
  `id` int(10) NOT NULL,
  `bentuk` varchar(50) NOT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `s_kecamatan`
--

CREATE TABLE IF NOT EXISTS `s_kecamatan` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
