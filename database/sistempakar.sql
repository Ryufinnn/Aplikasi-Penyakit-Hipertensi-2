-- phpMyAdmin SQL Dump
-- version 3.1.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2016 at 10:29 PM
-- Server version: 5.1.35
-- PHP Version: 5.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistempakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namalengkap` varchar(30) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `master_gejala`
--

CREATE TABLE IF NOT EXISTS `master_gejala` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `master_gejala` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gejala` (`master_gejala`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `master_gejala`
--

INSERT INTO `master_gejala` (`id`, `master_gejala`) VALUES
(1, 'Nadi berdenyut cepat'),
(2, 'Mata berkunang-kunang'),
(3, 'Jantung berdebar-debar'),
(4, 'Rasa pegal di bahu'),
(5, 'Sesak nafas'),
(6, 'Sakit kepala yang parah'),
(7, 'Dunia terasa berputar (vertigo)'),
(8, 'sakit kepala, biasanya dipagi hari sewaktu bangun tidur'),
(9, 'Kebingungan'),
(10, 'Telinga berdenging'),
(11, 'Hematuria (darah dalam urin)'),
(12, 'Penglihatan kabur'),
(13, 'Sakit kepala akut da tiba-tiba'),
(14, 'Emosi labil'),
(15, 'Keringat berlebihan'),
(17, 'Cepat Lelah'),
(16, 'Wajah Pucat'),
(18, 'Kesulitan Bernapas'),
(19, 'Pusing'),
(20, 'Mengantuk');

-- --------------------------------------------------------

--
-- Table structure for table `master_penyakit`
--

CREATE TABLE IF NOT EXISTS `master_penyakit` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `master_penyakit` varchar(50) NOT NULL,
  `nilai_temuan` smallint(6) DEFAULT NULL,
  `definisi` text NOT NULL,
  `solusi` text NOT NULL,
  `nilai` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `master_penyakit` (`master_penyakit`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `master_penyakit`
--

INSERT INTO `master_penyakit` (`id`, `master_penyakit`, `nilai_temuan`, `definisi`, `solusi`, `nilai`) VALUES
(1, 'Hipertensi Sistolik Terisolasi', 29, 'Hipertensi sistolik terisolasi adalah suatu kondisi spesifik yang ditandai dengan tekanan darah sistolik lebih dari 140 mmHg dan tekanan dara diastolik kurang dari 90 mmHg atau normal. Biasanya kondisi ini sering terjadi pada usia lanjut. Seiring dengan pertambahan usia, hampir setiap orang mengalami kenaikan tekanan darah, dimana tekanan sistolik terus meningkat hingga usia 80 tahun dan tekanan diastolik terus meningkat hingga 55-60 tahun.', '<br>1.	Jangan merokok dan hindari asap rokok.<br>\r\n2.	Hindari stres dengan gaya hidup yang lebih santai<br>\r\n3.	Hindari obesitas atau kegemukan<br>\r\n4.	Hindari makanan yang mengandung garam.<br>\r\n5.	Berolahraga secara teratur.<br>\r\n6.	Hindari minuman beralkohol<br>\r\n', 65),
(2, 'Hipertensi Primer', 41, 'Hipertensi primer adalah peningkatan tekanan darah di atas normal untuk usianya karena efek penuaan. Hal ini menyumbang lebih dari 95% dari kasus. Hilangnya elastisitas dinding pembuluh darah adalah fitur esensial yang menandai hipertensi. Banyak orang menemukan bahwa mereka memiliki tekanan darah tinggi meskipun mereka tidak memiliki riwayat, ada riwayat keluarga atau faktor risiko. Jenis tekanan darah tinggi ini adalah idiopatik, dan menanggapi perubahan gaya hidup sederhana dan terapi obat.', '<br>1.Kurangi makanan berkolestrol dan perbanyak beraktifitas fisik untuk mengurangi berat badan.<br>\r\n2.Kurangi konsumsi alkohol<br>\r\n3.Tidur yang cukup, antara 6-8 jam perhari\r\n', 0),
(3, 'Hipertensi Sekunder', 75, 'Hipertensi sekunder adalah hipertensi yang terjadi karena peningkatan darah diatas normal karena penyebab klinis yang sebelumnya memang sudah terdeteksi. Penyebab utama penyakit sekunder  adalah menimbulkan beberapa keluhan penyakit seperti penyakit ginjal, endrokrin, keamilan dan obat-obatan', '<br>1.Berolahraga secara teratur.<br>\r\n2.Atur pola makan<br>\r\n3.Mengurangi Alkohol.<br>\r\n4.Berhenti merokok<br>\r\n5.Kurangi makanan yang mengandung garam', 0),
(4, 'Hipertensi Maligna', 99, 'Hipertensi maligna, juga disebut hipertensi darurat atau hipertensi emerjensi adalah tekanan darah yang sangat tinggi dan berkembang cepat. Tekanan diastolik yang biasanya sekitar 80 mmHg, seringkali melonjak sampai diatas 130 mmHg. Hipertensi maligna dapat merusak organ-organ internal, terutama berkaitan dengan sistem saraf pusat, sistem kardiovaskuler, dan sistem ginjal, sehingga harus segera ditangani', '<br>\r\n1.Meningkatkan aktifitas.<br>\r\n2.Atur pola makan.<br>\r\n3.Meningkatkan konsumsi buah dan sayur.<br>\r\n4.Meningkatkan konsumsi padi-padian.<br>\r\n5.Lakukan diet sehat untuk mengembalikan berat badan \r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `idmember` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL DEFAULT '0000-00-00',
  `jk` char(1) NOT NULL,
  `alamat` text NOT NULL,
  `notelp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `tgldaftar` date NOT NULL DEFAULT '0000-00-00',
  `login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`idmember`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `username`, `password`, `namalengkap`, `tempatlahir`, `tgllahir`, `jk`, `alamat`, `notelp`, `email`, `foto`, `tgldaftar`, `login`) VALUES
(1, 'ras', 'ras', 'rahmat', 'padang', '1990-08-28', 'L', 'jalan jamal jamil no 17 siteba', '085766494713', 'as1245rahmat@gmail.com', '374113_289644967741415_1022734636_n.jpg', '2014-05-12', '2015-11-30 21:11:30'),
(2, 'nia', 'nia', 'rahmi putri kurnia', 'padang', '1993-08-27', 'L', 'jalan jamal jamin no 17 surau gadang, siteba , padang', '0856685423', 'rahmiputrik@gmail.com', '12101152630285.jpg', '2014-05-26', '2015-11-15 20:09:12'),
(3, 'ikhlas', 'ikhlas', 'ikhlas hidayatullah', 'padang', '1988-09-03', 'L', 'jalan jamal jamil no 17 siteba surga', '082368894390', 'daya@gmail.com', '', '2014-05-28', '2014-05-28 07:31:24'),
(4, 'ras1245', 'ras', 'rahmat', 'padang', '1990-08-28', 'L', 'jalan jamal jamil no 17 siteba ', '085766494713', 'a.srahmat@ymail.com', '', '2014-06-02', '0000-00-00 00:00:00'),
(5, 'nanda', 'nanda', 'nanda perdana', 'pariaman', '1990-08-09', 'L', 'gurun laweh', '085263636363', 'nanda@gmail.com', '', '2014-06-02', '2014-06-02 12:09:01'),
(6, 'popoto', 'popoto', 'surya kharisma', 'tebo', '1993-02-10', 'L', 'arai pinang', '081930303030', 'popo@gmail.com', '', '2014-06-02', '2014-06-02 11:49:49'),
(7, 'hary', 'hary', 'harianto', 'pesisir', '1993-02-11', 'L', 'pengambiran', '081930003030', 'hary@ymail.com', '', '2014-06-02', '2015-11-27 09:42:55'),
(8, 'adr', 'adr', 'andri maulana ibrahim', 'padang', '1990-07-29', 'L', 'berok', '08193030303030', 'adr@ymail.com', 'keranjang.jpg', '2014-06-02', '2014-06-12 11:05:31'),
(9, 'angga', 'angga', 'angga ferdian', 'sulik aia', '1992-06-18', 'L', 'lolong', '0821686868686', 'angga@gmail.com', '', '2014-06-02', '2014-06-02 11:54:30'),
(10, 'lala', 'lala', 'lala kurnia', 'padang', '1988-12-14', 'L', 'Jl.Berok Raya No 40', '082170217012', 'lala@gmail.com', 'f.png', '2015-11-27', '2015-11-30 21:15:14'),
(11, 'wawan', '12345', 'wawan hermawan', 'padang', '1992-08-13', 'L', 'jl.Berok Raya No 40 Siteba', '082170214495', 'wawan@gmail.com', '', '2015-12-07', '2015-12-07 19:36:30'),
(12, 'ferri', '12345', 'Ferri Achmad Effindri', 'Padang', '1998-10-16', 'L', 'Jl.Berok Raya no 40 Siteba', '082170214475', 'vendry7@gmail.com', '', '2016-05-09', '2016-05-09 21:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `id_penyakit` smallint(6) DEFAULT NULL,
  `id_gejala` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_penyakit` (`id_penyakit`),
  KEY `id_gejala` (`id_gejala`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `id_penyakit`, `id_gejala`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13),
(14, 2, 1),
(15, 2, 3),
(16, 2, 5),
(17, 2, 8),
(18, 2, 9),
(19, 2, 10),
(20, 2, 12),
(21, 2, 13),
(22, 2, 14),
(23, 2, 15),
(24, 2, 16),
(25, 3, 1),
(26, 3, 3),
(27, 3, 5),
(28, 3, 8),
(29, 3, 9),
(30, 3, 10),
(31, 3, 17),
(58, 5, 19),
(57, 5, 18),
(59, 5, 20),
(35, 6, 21),
(36, 6, 22),
(37, 6, 1),
(38, 7, 1),
(39, 7, 2),
(40, 7, 3),
(64, 9, 1),
(65, 9, 2),
(66, 9, 3),
(78, 11, 18),
(79, 11, 19),
(80, 11, 20),
(81, 0, 18),
(82, 0, 19),
(83, 0, 20),
(99, 12, 20),
(98, 12, 4),
(87, 13, 2),
(88, 13, 3),
(89, 13, 4),
(90, 14, 8),
(91, 14, 10),
(92, 14, 15),
(95, 15, 1),
(94, 13, 1),
(96, 15, 8),
(97, 15, 15);
