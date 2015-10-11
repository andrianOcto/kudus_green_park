-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2015 at 06:51 PM
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

--
-- Dumping data for table `s_desa`
--

INSERT INTO `s_desa` (`id`, `id_kecamatan`, `nama`, `created`, `updated`) VALUES
('1', '1', 'Kelurahan Purwosari', '2015-10-11 07:48:03', '0000-00-00 00:00:00'),
('2', '1', 'Janggalan', '2015-10-11 07:48:03', '0000-00-00 00:00:00'),
('3', '1', 'Demangan', '2015-10-11 07:48:03', '0000-00-00 00:00:00'),
('4', '2', 'Getaspejaten', '2015-10-11 07:49:39', '0000-00-00 00:00:00'),
('5', '2', 'Jati Kulon', '2015-10-11 07:49:39', '0000-00-00 00:00:00'),
('6', '3', 'Wonosoco', '2015-10-11 07:50:23', '0000-00-00 00:00:00'),
('7', '3', 'Lambangan', '2015-10-11 07:50:23', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `s_kecamatan`
--

INSERT INTO `s_kecamatan` (`id`, `nama`, `created`, `updated`) VALUES
('1', 'Kota', '2015-10-11 07:46:51', '0000-00-00 00:00:00'),
('2', 'Undaan', '2015-10-11 07:46:51', '0000-00-00 00:00:00'),
('3', 'Demangan', '2015-10-11 07:46:51', '0000-00-00 00:00:00'),
('4', 'Bae', '2015-10-11 07:46:51', '0000-00-00 00:00:00'),
('5', 'Gebog', '2015-10-11 07:46:51', '0000-00-00 00:00:00');

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
-- Indexes for table `s_desa`
--
ALTER TABLE `s_desa`
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
