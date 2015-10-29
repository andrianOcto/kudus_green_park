-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 29, 2015 at 02:33 PM
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
-- Table structure for table `m_kegiatan`
--

CREATE TABLE IF NOT EXISTS `m_kegiatan` (
`id_event` int(11) NOT NULL,
  `kategori` int(2) NOT NULL DEFAULT '1',
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_kegiatan`
--

INSERT INTO `m_kegiatan` (`id_event`, `kategori`, `judul`, `deskripsi`, `foto`, `created_at`, `updated_at`) VALUES
(24, 1, 'test update', 'hehehe hahaha', '1445876303_2dsI8RJQujLC.JPG', '2015-10-26 16:18:24', '0000-00-00 00:00:00'),
(25, 1, 'huhuhuh', 'asdfadf', '1445679175_Q1ORCJXe6xoH.jpeg', '2015-10-24 09:32:55', '0000-00-00 00:00:00'),
(29, 0, 'tuck', 'you', '1445679121_M5paOqtXHL64.jpeg', '2015-10-27 06:22:27', '0000-00-00 00:00:00'),
(30, 2, 'valentino', 'RTH bagus sekali', '1445926837_bxVcqcurWeWZ.JPG', '2015-10-27 06:20:38', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_kegiatan`
--
ALTER TABLE `m_kegiatan`
 ADD PRIMARY KEY (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_kegiatan`
--
ALTER TABLE `m_kegiatan`
MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
