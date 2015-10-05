-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 07:56 AM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$bM8bP0EXbMykKKVF9k8JhO71uz2Oyn8G6JyIKKI5HZlW2ZaIBoHKe'),
('valen', 'asdfad');

-- --------------------------------------------------------

--
-- Table structure for table `park`
--

CREATE TABLE IF NOT EXISTS `park` (
`idpark` int(11) NOT NULL,
  `nama_park` varchar(45) DEFAULT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `park`
--

INSERT INTO `park` (`idpark`, `nama_park`, `alamat`, `latitude`, `longitude`, `deskripsi`) VALUES
(12, 'tets', 'test', '224', '23', 'test'),
(13, 'ahahah', 'heheheh', '2308', '3928', 'kjadsfha;djksfhakjdsfalkjsdflakjdsf'),
(14, 'taman cinta', 'semarang', 'asdf', 'asdf', 'asdf'),
(15, 'taman KB', 'semarang barat', '29329', '292939', 'hehehe');

-- --------------------------------------------------------

--
-- Stand-in structure for view `park_liked`
--
CREATE TABLE IF NOT EXISTS `park_liked` (
`idpark` int(11)
,`nama_park` varchar(45)
,`numliked` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `park_liked_visited`
--
CREATE TABLE IF NOT EXISTS `park_liked_visited` (
`idpark` int(11)
,`nama_park` varchar(45)
,`numliked` bigint(21)
,`numvisited` bigint(21)
);
-- --------------------------------------------------------

--
-- Stand-in structure for view `park_visited`
--
CREATE TABLE IF NOT EXISTS `park_visited` (
`idpark` int(11)
,`nama_park` varchar(45)
,`numvisited` bigint(21)
);
-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
`idphoto` int(11) NOT NULL,
  `idpark` int(11) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`idphoto`, `idpark`, `fileName`, `time`) VALUES
(1, 7, '', '2015-03-25 09:08:35'),
(2, 8, '1427352064_E8RWTurKg8hq.jpeg', '2015-03-26 06:41:04'),
(3, 8, '1427352064_GxFVUIZcDUDc.jpeg', '2015-03-26 06:41:04'),
(4, 9, '1427352961_AAn5T399bQzg.jpeg', '2015-03-26 06:56:01'),
(5, 10, '1427357421_N1x3oP9jRL2n.jpeg', '2015-03-26 08:10:22'),
(6, 10, '1427357421_spqtC7DqtEBY.jpeg', '2015-03-26 08:10:22'),
(7, 10, '1427357421_1OTrVUGQH4bk.jpeg', '2015-03-26 08:10:22'),
(8, 10, '1427357421_TXHRbCToNSq9.jpeg', '2015-03-26 08:10:22'),
(9, 10, '1427357421_ekgemjGsPaNp.jpeg', '2015-03-26 08:10:22'),
(10, 11, '1427785251_jRnSvi9BN9uH.jpeg', '2015-03-31 07:00:51'),
(11, 11, '1427785251_1p7hYbrRLvWW.jpg', '2015-03-31 07:00:51'),
(12, 11, '1427785251_ZAJvCXUWhW9M.jpeg', '2015-03-31 07:00:51'),
(13, 13, '1427788877_juEHTul0acWX.jpeg', '2015-03-31 08:01:18'),
(14, 13, '1427788877_FL236JpImV7q.jpeg', '2015-03-31 08:01:18'),
(15, 13, '1427788877_AeteAwcuolnp.jpeg', '2015-03-31 08:01:18'),
(16, 13, '1427788877_G3InbjfdCuLP.jpeg', '2015-03-31 08:01:18'),
(17, 13, '1427788878_M87WM9eU2IUM.jpeg', '2015-03-31 08:01:18'),
(18, 12, '1427792037_4jCgqUfljeBH.jpeg', '2015-03-31 08:53:57'),
(24, 15, '1444023245_lcxpmfv3g1y8.jpg', '2015-10-05 05:34:06'),
(25, 15, '1444023245_M7s1FZEV9Kfu.jpg', '2015-10-05 05:34:06'),
(26, 15, '1444023246_HwXQVQoDkBrC.jpg', '2015-10-05 05:34:06'),
(27, 15, '1444023246_3EiO1WfcwD9s.jpg', '2015-10-05 05:34:06'),
(28, 14, '1444024337_W8FFKwbqzBXz.jpg', '2015-10-05 05:52:18'),
(29, 14, '1444024337_2j3w0zH00vq4.jpg', '2015-10-05 05:52:18'),
(30, 14, '1444024337_GXWSqFJau0dx.jpg', '2015-10-05 05:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_park_liked`
--

CREATE TABLE IF NOT EXISTS `tbl_park_liked` (
`idlike` int(10) NOT NULL,
  `idpark` int(10) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_park_liked`
--

INSERT INTO `tbl_park_liked` (`idlike`, `idpark`, `iduser`) VALUES
(1, 12, 1),
(2, 12, 2),
(3, 12, 3),
(4, 12, 4),
(6, 12, 6),
(7, 12, 7),
(8, 12, 8),
(9, 12, 9),
(10, 12, 10),
(11, 13, 1),
(12, 13, 2),
(13, 13, 3),
(14, 13, 4),
(15, 13, 5),
(16, 13, 6),
(17, 13, 7),
(18, 13, 8),
(19, 13, 9),
(20, 13, 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_park_visited`
--

CREATE TABLE IF NOT EXISTS `tbl_park_visited` (
`idvisited` int(10) NOT NULL,
  `idpark` int(10) NOT NULL,
  `iduser` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_park_visited`
--

INSERT INTO `tbl_park_visited` (`idvisited`, `idpark`, `iduser`) VALUES
(1, 12, 7),
(2, 12, 16),
(3, 12, 15),
(4, 12, 14),
(5, 12, 2),
(6, 12, 33),
(7, 13, 1),
(8, 13, 99),
(9, 13, 98),
(10, 13, 78),
(11, 13, 44);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`iduser` int(11) NOT NULL,
  `nama_lengkap` varchar(60) NOT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact` varchar(70) NOT NULL,
  `bio` varchar(100) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama_lengkap`, `username`, `email`, `password`, `contact`, `bio`, `role`, `foto`) VALUES
(20, 'test', 'ananana', 've.febrian@gmail.com', '$2y$10$GZvS3pDc5f.kz2ZUe0YxqumUwCJ4Qwu22Qn/Z0mILJUxSPHBnny6y', 'adsf', 'adf', NULL, '1433264687_iZHzUD44XNTB.jpg'),
(23, 'valentino', 'valent', 've.febrian@gmail.com', '$2y$10$0RtZED7Dfu/EDRwAm4T1bOZvt9XKTTotzyJveT3fpfA7HYnqnrH/e', 'hehhee', 'hahahaha', NULL, '1433264709_M3j7LmVdi1qR.jpg');

-- --------------------------------------------------------

--
-- Structure for view `park_liked`
--
DROP TABLE IF EXISTS `park_liked`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `park_liked` AS select `park`.`idpark` AS `idpark`,`park`.`nama_park` AS `nama_park`,count(`tbl_park_liked`.`idpark`) AS `numliked` from (`park` join `tbl_park_liked`) where (`park`.`idpark` = `tbl_park_liked`.`idpark`) group by `tbl_park_liked`.`idpark`;

-- --------------------------------------------------------

--
-- Structure for view `park_liked_visited`
--
DROP TABLE IF EXISTS `park_liked_visited`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `park_liked_visited` AS select `park_liked`.`idpark` AS `idpark`,`park_liked`.`nama_park` AS `nama_park`,`park_liked`.`numliked` AS `numliked`,`park_visited`.`numvisited` AS `numvisited` from (`park_liked` join `park_visited`) where (`park_liked`.`idpark` = `park_visited`.`idpark`);

-- --------------------------------------------------------

--
-- Structure for view `park_visited`
--
DROP TABLE IF EXISTS `park_visited`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `park_visited` AS select `park`.`idpark` AS `idpark`,`park`.`nama_park` AS `nama_park`,count(`tbl_park_visited`.`idpark`) AS `numvisited` from (`park` join `tbl_park_visited`) where (`park`.`idpark` = `tbl_park_visited`.`idpark`) group by `tbl_park_visited`.`idpark`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`username`), ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- Indexes for table `park`
--
ALTER TABLE `park`
 ADD PRIMARY KEY (`idpark`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
 ADD PRIMARY KEY (`idphoto`);

--
-- Indexes for table `tbl_park_liked`
--
ALTER TABLE `tbl_park_liked`
 ADD PRIMARY KEY (`idlike`);

--
-- Indexes for table `tbl_park_visited`
--
ALTER TABLE `tbl_park_visited`
 ADD PRIMARY KEY (`idvisited`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `park`
--
ALTER TABLE `park`
MODIFY `idpark` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tbl_park_liked`
--
ALTER TABLE `tbl_park_liked`
MODIFY `idlike` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tbl_park_visited`
--
ALTER TABLE `tbl_park_visited`
MODIFY `idvisited` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
