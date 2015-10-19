-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 19, 2015 at 08:51 PM
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
  `jenis` varchar(10) NOT NULL,
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
('K1.DK1.J1.0001', 'K1', 'DK4', 1, 'J1', '0,78 ha', 'Glodogan pecut, angsana, mahoni, tombak raja, bunga-bungaan', 'Taman rekreatif wisata', '', 'Dinas Pariwisata, Seni dan Budaya', 'Taman Krida Wisata,Taman Parkir, GOR dan Stadion', 'Desa Werguwetan Kecamatan Kota'),
('K1.DK1.J7.0001', 'K1', 'DK1', 1, 'J7', 'Persegi / 1,3 ha', 'Angsana, Mahoni', 'Lapangan olahraga', '', 'Kelurahan', 'Lapangan Kelurahan Purwosari', 'Purwosari'),
('K1.DK1.J7.0002', 'K3', 'DK12', 1, 'J1', 'Persegi / 1,3 ha', 'Angsana, Mahoni, Mangga, Bunga-bungaan', 'Taman Kota', '', 'DCKTR', 'Taman Gondang Manis', 'Desa Gondang Manis'),
('K1.DK1.J7.0003', 'K1', 'DK11', 2, 'J7', 'Persegi/0,55 ha', 'Mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Pedawang', 'Desa Pedawang Kecamatan Kota'),
('K10.DK1.J7.0001', 'K10', 'DK50', 2, 'J7', 'Persegi/ 0,78', 'Angsana, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Besito', 'Desa sebelah SMP 1 Bae, Kecamatan Bae'),
('K2.DK1.J1.0001', 'K2', 'DK9', 1, 'J1', '4,25 ha', 'Glodogan pecut, Angsana, mahoni, mangga', 'Penunjang aktivitas sosial dan budaya tingkat daerah', '', 'Dinas Pariwisata, Seni dan Budaya', 'Taman Budaya Cendono', 'Cendono Kecamatan Bae'),
('K2.DK1.J7.0001', 'K2', 'DK9', 2, 'J7', 'Persegi/ 0,72', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa sebelah SMP 1 Bae', 'Kecamatan Bae, sebelah SMP 1 Bae'),
('K2.DK1.J7.0002', 'K2', 'DK8', 2, 'J7', 'Persegi/1,1 ha', 'Angsana, talok', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Bacin', 'Desa Bacin Kecamatan Bae'),
('K2.DK9.J1.0001', 'K2', 'DK9', 4, 'J1', '1,17 ha', 'Palem moreli, pisang kipas, tanaman hias', 'Taman kota', '', 'PT. Djarum', 'Taman Oasis', 'Bae Kudus'),
('K3.DK1.J1.0001', 'K3', 'DK18', 1, 'J1', '0,1 ha', 'Tombak raja, cana, bunga-bungaan', 'Mempercantik wajah perkantoran', '', 'DCKTR', 'Taman Depan kantor pemerintah', 'Taman depan DPRD'),
('K3.DK1.J1.0002', 'K3', 'DK18', 1, 'J1', '3,09 ha', 'Angsana, mangga, glodogan, cana, bunga-bungaan', 'Taman rekreatif dan taman bermain skala kota/kabupaten', '', 'Dinas Pariwisata, Seni dan Budaya', 'Taman Museum Kretek', 'Desa Getas Pejaten Kec. Jati'),
('K3.DK1.J7.0001', 'K3', 'DK18', 2, 'J7', 'Persegi/ 1,06 ha', 'Angsana, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Getas Pejaten', 'Getas Pejaten\nKecamatan Jati'),
('K3.DK1.J7.0002', 'K3', 'DK13', 2, 'J7', 'Persegi/ 0,85', 'Glodogan, waru', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Tanjungkarang', 'Desa Tanjungkarang Kec. Jati'),
('K3.DK1.J7.0003', 'K3', 'DK14', 2, 'J7', 'Persegi/0,92 ha', 'Angsana, talok', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Loram Kulon', 'Desa Loram Kulon'),
('K3.DK1.J7.0004', 'K3', 'DK19', 4, 'J7', 'Persegi/0,86 ha', 'Waru', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Megawon', 'Desa Megawon Kec. Jati'),
('K4.DK1.J7.0001', 'K4', '0', 2, 'J7', 'Persegi / 1,49 ha', 'Angsana, Glodokan', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa depan SMP 1', 'Kecamatan Kaliwungu'),
('K4.DK1.J7.0002', 'K4', 'DK23', 3, 'J7', 'Persegi / 1,24', 'Angsana, Glodokan, mahoni', 'Lapangan Olahraga', '', 'Sekolah', 'Lapangan Prambatan', 'Jalan Jepara  Prambatan Lor Kecamatan Kaliwungu (depan PTP)'),
('K4.DK1.J7.0003', 'K4', 'DK21', 2, 'J7', 'Persegi / 0,62 ha', 'Angsana, Glodokan, mahoni', 'lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Mijen', 'Kecamatan Kaliwungu'),
('K4.DK25.J1.0001', 'K4', 'DK25', 1, 'J1', '3,8 ha', 'Relatif kurang tanaman peneduh', 'Parkir wisata, sector informal, dan lahan kosong', '', 'Dinas Perhubungan', 'Taman dan lapangan parkir Wisata dan Lapangan', 'taman rumah susun Bakalan Krapyak Kec. Kaliwungu'),
('K6.DK1.J7.0001', 'K11', 'DK52', 2, 'J7', 'Persegi / 0,78 ha', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa depan kantor Kecamatan', 'Kecamatan Mejobo'),
('K6.DK52.J2.0001', 'K11', 'DK52', 1, 'J2', '0,44 ha', 'angsana, mahoni,', 'Penghubung jalur Kecamatan, peneduh pejalan kaki', '', 'Pemda', 'Koridor jalan depan samsat Mejobo', 'Jalan menuju samsat'),
('K7.DK1.J7.0001', 'K7', 'DK35', 1, 'J7', 'Persegi / 1 ha', 'Angsana', 'Lapangan interaksi sosial tingkat desa, kegiatan mix use', '', '-', 'Lapangan Bekas Lokasi Pasar', 'Kecamatan Jekulo'),
('K7.DK1.J7.0002', 'K7', 'DK36', 2, 'J7', 'Persegi / 0,86', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa sebelah SPBU', 'sebelah SPBU Desa Hadipolo\nKecamatan Jekulo'),
('K7.DK1.J7.0003', 'K7', 'DK34', 2, 'J7', 'Persegi / 0,72', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Desa Klaling', 'Desa Klaling\nKecamatan Jekulo'),
('K7.DK1.J7.0004', 'K7', 'DK38', 2, 'J7', 'Persegi/ 1,03', 'Angsana, mahoni', 'Lapangan Olahraga', '', 'Pemerintah Desa', 'Lapangan desa Pladen', 'Desa Pladen Kecamatan Jekulo'),
('K7.DK1.J7.0005', 'K7', 'DK37', 2, 'J7', 'Persegi / 0,86 ha', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa Sidomulyo', 'Desa Tanjungrejo Kecamatan Jekulo'),
('K7.DK35.J1.0001', 'K7', 'DK35', 1, 'J1', '1 ha', 'Angsana', 'Lapangan interaksi sosial tingkat desa, kegiatan mix use', '', '-', 'Lapangan / taman bekas lokasi Pasar', 'Pasar Jekulo dan Kantor PDAM Kec. Jekulo'),
('K7.DK35.J1.0002', 'K7', 'DK34', 1, 'J1', '1,88 ha', 'Angsana, glodokan', 'Area  pemberhentian truk antar kota', '', 'Dinas Perhubungan', 'Pangkalan truk Klaling', 'Klaling Kecamatan Jekulo'),
('K8.DK1.J7.0001', 'K8', 'DK39', 2, 'J7', 'Persegi/ 1,28 ha', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa Cendono', 'Desa Cendono Kecamatan Dawe'),
('K8.DK1.J7.0002', 'K8', 'DK42', 2, 'J7', 'Persegi/ 1,2 ha', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa Lau', 'Desa Lau Kecamatan Dawe'),
('K8.DK1.J7.0003', 'K8', 'DK40', 2, 'J7', 'Persegi/ 1,03 ha', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan Piji', 'Desa Piji Kecamatan Dawe'),
('K8.DK40.J1.0001', 'K8', 'DK40', 2, 'J1', '0,29 ha', 'Angsana', 'Area PKL dan parkir', '', 'Pengelola pasar', 'Taman Pasar Piji', 'Desa Piji Kecamatan Dawe'),
('K9.DK1.J7.0001', 'K9', 'DK44', 2, '0', 'Persegi/ 1,2 ha', 'Angsana, Glodokan, mahoni', 'Lapangan olahraga', '', 'Pemerintah Desa', 'Lapangan desa Undaan Kidul', 'Desa Undaan Kidul Kecamatan Undaan');

-- --------------------------------------------------------

--
-- Table structure for table `m_photo`
--

CREATE TABLE IF NOT EXISTS `m_photo` (
`idphoto` int(11) NOT NULL,
  `id_rth` varchar(20) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `m_photo`
--

INSERT INTO `m_photo` (`idphoto`, `id_rth`, `fileName`, `time`) VALUES
(56, 'K1.DK1.J7.0001', '1444616512_lVOsfW08b1Ab.jpg', '2015-10-12 02:21:52'),
(57, 'K1.DK1.J7.0002', '1444617115_MVT16z33hg7e.jpg', '2015-10-12 02:31:56'),
(58, 'K7.DK1.J7.0001', '1444619428_Ld4vTQU9k2tU.JPG', '2015-10-12 03:10:29'),
(59, 'K4.DK1.J7.0001', '1444620509_TKbpZZRcPIZ6.JPG', '2015-10-12 03:28:30'),
(60, 'K4.DK1.J7.0001', '1444620510_t9O7QChRw4n3.JPG', '2015-10-12 03:28:30'),
(61, 'K4.DK1.J7.0001', '1444620510_Xoe2186TvKao.JPG', '2015-10-12 03:28:30'),
(62, 'K4.DK1.J7.0002', '1444621110_Zr9z1P4k3wqz.jpg', '2015-10-12 03:38:31'),
(63, 'K4.DK1.J7.0002', '1444621110_HacIhSr11hks.jpg', '2015-10-12 03:38:31'),
(64, 'K4.DK1.J7.0002', '1444621111_nPP435KNewVD.jpg', '2015-10-12 03:38:31'),
(65, 'K4.DK1.J7.0003', '1444621444_5EZYeEqojN92.JPG', '2015-10-12 03:44:05'),
(66, 'K4.DK1.J7.0003', '1444621444_9lKK43ar8U4e.JPG', '2015-10-12 03:44:05'),
(67, 'K4.DK1.J7.0003', '1444621445_h0CrpATurVaW.JPG', '2015-10-12 03:44:05'),
(68, 'K2.DK1.J7.0001', '1444621628_cF80M5B1Ll9g.JPG', '2015-10-12 03:47:09'),
(69, 'K2.DK1.J7.0001', '1444621628_acemGcBVFY3G.JPG', '2015-10-12 03:47:09'),
(70, 'K2.DK1.J7.0001', '1444621628_sz6sLkWyk66u.JPG', '2015-10-12 03:47:09'),
(71, 'K10.DK1.J7.0001', '1444622300_CztxOjo2NVLh.JPG', '2015-10-12 03:58:21'),
(72, 'K10.DK1.J7.0001', '1444622300_9AQhZgY11mbE.JPG', '2015-10-12 03:58:21'),
(73, 'K10.DK1.J7.0001', '1444622300_0J2XsQDIV1Lp.JPG', '2015-10-12 03:58:21'),
(74, 'K7.DK1.J7.0002', '1444622714_2zRKp8S1H0cF.jpg', '2015-10-12 04:05:15'),
(75, 'K7.DK1.J7.0002', '1444622715_11lWieAR5DMR.jpg', '2015-10-12 04:05:15'),
(76, 'K7.DK1.J7.0003', '1444622862_YUlel8RxMPfG.jpg', '2015-10-12 04:07:42'),
(77, 'K7.DK1.J7.0003', '1444622862_YXvrjVV09uvv.jpg', '2015-10-12 04:07:42'),
(78, 'K7.DK1.J7.0004', '1444623001_4bEUj03VMCsq.jpg', '2015-10-12 04:10:01'),
(79, 'K7.DK1.J7.0004', '1444623001_40slabeMHppF.jpg', '2015-10-12 04:10:01'),
(80, 'K7.DK1.J7.0005', '1444623138_j7F8MJDP6oOI.jpg', '2015-10-12 04:12:19'),
(81, 'K7.DK1.J7.0005', '1444623139_JMnOXIlKsdYn.jpg', '2015-10-12 04:12:19'),
(82, 'K6.DK1.J7.0001', '1444623514_SOrKxxC8aAUR.JPG', '2015-10-12 04:18:34'),
(83, 'K6.DK1.J7.0001', '1444623514_E6sXO1uA7LWN.JPG', '2015-10-12 04:18:34'),
(84, 'K6.DK1.J7.0001', '1444623514_hCZOiM7LhtiU.jpg', '2015-10-12 04:18:34'),
(85, 'K9.DK1.J7.0001', '1444623785_RVpF8MK23Nkg.JPG', '2015-10-12 04:23:05'),
(86, 'K9.DK1.J7.0001', '1444623785_viX5IxjejNhL.JPG', '2015-10-12 04:23:05'),
(87, 'K9.DK1.J7.0001', '1444623785_tWAP6IzugunT.jpg', '2015-10-12 04:23:05'),
(88, 'K3.DK1.J7.0001', '1444625237_YSrqtPKL0k4o.JPG', '2015-10-12 04:47:18'),
(89, 'K3.DK1.J7.0001', '1444625237_c7mtyXuOUTmS.JPG', '2015-10-12 04:47:18'),
(90, 'K3.DK1.J7.0001', '1444625237_s8B9QvmRh4mH.jpg', '2015-10-12 04:47:18'),
(91, 'K8.DK1.J7.0001', '1444625373_jGSWCf8zbH8n.JPG', '2015-10-12 04:49:33'),
(92, 'K8.DK1.J7.0001', '1444625373_n3XQ4xKWABaV.JPG', '2015-10-12 04:49:33'),
(93, 'K8.DK1.J7.0001', '1444625373_yE4TC7NRPYuJ.jpg', '2015-10-12 04:49:33'),
(94, 'K8.DK1.J7.0002', '1444625690_PKhpfsqqhEok.JPG', '2015-10-12 04:54:50'),
(95, 'K8.DK1.J7.0002', '1444625690_L8DbGMVPTxf3.JPG', '2015-10-12 04:54:50'),
(96, 'K8.DK1.J7.0002', '1444625690_4Yfa8dPDoN4Q.jpg', '2015-10-12 04:54:50'),
(97, 'K8.DK1.J7.0003', '1444626409_1AwPOEy10kNR.JPG', '2015-10-12 05:06:49'),
(98, 'K8.DK1.J7.0003', '1444626409_kmUreyDcHUDM.JPG', '2015-10-12 05:06:49'),
(99, 'K8.DK1.J7.0003', '1444626409_04x520cVJKsQ.jpg', '2015-10-12 05:06:49'),
(100, 'K3.DK1.J7.0002', '1444626860_4Y9WVMUTAUlq.JPG', '2015-10-12 05:14:20'),
(101, 'K3.DK1.J7.0002', '1444626860_PT4DVeRG8Ohy.JPG', '2015-10-12 05:14:20'),
(102, 'K3.DK1.J7.0002', '1444626860_GkwuiabqBtmp.jpg', '2015-10-12 05:14:20'),
(103, 'K3.DK1.J7.0003', '1444627028_NoRC1GpvbOyl.JPG', '2015-10-12 05:17:09'),
(104, 'K3.DK1.J7.0003', '1444627028_cecVEVUk90KS.JPG', '2015-10-12 05:17:09'),
(105, 'K3.DK1.J7.0003', '1444627028_Wr17HQiVDmSC.jpg', '2015-10-12 05:17:09'),
(106, 'K3.DK1.J7.0004', '1444627438_QZ2WsSD92McG.JPG', '2015-10-12 05:23:58'),
(107, 'K3.DK1.J7.0004', '1444627438_SZdzvVHsC3JS.JPG', '2015-10-12 05:23:58'),
(108, 'K3.DK1.J7.0004', '1444627438_x9wRuC8bqQVO.jpg', '2015-10-12 05:23:58'),
(109, 'K1.DK1.J7.0003', '1444627593_L8f5XDoaEnmq.JPG', '2015-10-12 05:26:33'),
(110, 'K1.DK1.J7.0003', '1444627593_K95kV2aAtMDu.JPG', '2015-10-12 05:26:33'),
(111, 'K2.DK1.J7.0002', '1444627767_jcbtAeqZAzDo.JPG', '2015-10-12 05:29:27'),
(112, 'K2.DK1.J7.0002', '1444627767_BTvrpbDvrSs6.jpg', '2015-10-12 05:29:27'),
(113, 'K1.DK1.J1.0001', '1444631478_SqL0ilxL5fR6.JPG', '2015-10-12 06:31:20'),
(114, 'K1.DK1.J1.0001', '1444631479_KibmuebBGUmS.JPG', '2015-10-12 06:31:20'),
(115, 'K1.DK1.J1.0001', '1444631479_Ye3Jf7BxNZiU.JPG', '2015-10-12 06:31:20'),
(116, 'K2.DK1.J1.0001', '1444631884_Fv0nKKLNZS2R.JPG', '2015-10-12 06:38:05'),
(117, 'K2.DK1.J1.0001', '1444631884_D6Wkwras860C.JPG', '2015-10-12 06:38:05'),
(118, 'K2.DK1.J1.0001', '1444631885_GjhWUwrVW4Xf.JPG', '2015-10-12 06:38:05'),
(119, 'K3.DK1.J1.0001', '1444633412_VphhKnj1CwYI.JPG', '2015-10-12 07:03:32'),
(120, 'K3.DK1.J1.0001', '1444633412_4sOcR3aIQg6j.JPG', '2015-10-12 07:03:32'),
(121, 'K3.DK1.J1.0002', '1444633823_LfF1bXI0Odyo.JPG', '2015-10-12 07:10:24'),
(122, 'K3.DK1.J1.0002', '1444633823_JGl6OoWE08DG.JPG', '2015-10-12 07:10:24'),
(123, 'K3.DK1.J1.0002', '1444633823_VU8VB59lrz5f.JPG', '2015-10-12 07:10:24'),
(124, 'K4.DK25.J1.0001', '1444636527_I5dKeFZsFDWj.JPG', '2015-10-12 07:55:28'),
(125, 'K4.DK25.J1.0001', '1444636528_hx1nVP8klak8.JPG', '2015-10-12 07:55:28'),
(126, 'K7.DK35.J1.0001', '1444636655_MIrAwihzOAzZ.JPG', '2015-10-12 07:57:36'),
(127, 'K8.DK40.J1.0001', '1444636810_iWffp3Ox6SRs.JPG', '2015-10-12 08:00:10'),
(128, 'K7.DK35.J1.0002', '1444636967_laPECrp4cm70.JPG', '2015-10-12 08:02:48'),
(129, 'K2.DK9.J1.0001', '1444637303_zwPCFtyXq6wx.JPG', '2015-10-12 08:08:25'),
(130, 'K2.DK9.J1.0001', '1444637303_dxtn5oRUTvr7.JPG', '2015-10-12 08:08:25'),
(131, 'K2.DK9.J1.0001', '1444637304_OW5T6pbQ7lE7.JPG', '2015-10-12 08:08:25'),
(132, 'K2.DK9.J1.0001', '1444637304_c7pxIg9ILASi.JPG', '2015-10-12 08:08:25'),
(133, 'K6.DK52.J2.0001', '1444637673_pNGvYyslkQjJ.JPG', '2015-10-12 08:14:33'),
(134, 'K6.DK52.J2.0001', '1444637673_IKvXJKoOg8gV.JPG', '2015-10-12 08:14:33'),
(135, 'K6.DK52.J2.0001', '1444637673_AX4zZCGseAjd.JPG', '2015-10-12 08:14:33');

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
(3, 'Tanah Perorangan', '2015-10-12 01:22:35', '0000-00-00 00:00:00'),
(4, 'Swasta', '2015-10-12 05:20:52', '0000-00-00 00:00:00');

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
MODIFY `idphoto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=136;
--
-- AUTO_INCREMENT for table `s_user`
--
ALTER TABLE `s_user`
MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
