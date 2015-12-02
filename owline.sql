-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2015 at 05:54 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owline`
--

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE IF NOT EXISTS `developer` (
  `nama_dev` varchar(140) NOT NULL,
  `email_dev` varchar(140) NOT NULL,
  `link_fb` varchar(140) NOT NULL,
  `link_github` varchar(140) NOT NULL,
  `no.hp` varchar(140) NOT NULL,
  `skill` varchar(140) NOT NULL,
  `profil` varchar(200) NOT NULL,
  `uname_dev` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `kode_project` int(11) NOT NULL,
  `jenis_project` varchar(140) NOT NULL,
  `nama_project` varchar(140) NOT NULL,
  `uname_developer` varchar(140) NOT NULL,
  `durasi_pengerjaan` varchar(140) NOT NULL,
  `nama_klien` varchar(140) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `deadline` date NOT NULL,
  `dokumentasi` blob NOT NULL,
  `biaya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `test aja`
--
CREATE TABLE IF NOT EXISTS `test aja` (
`kode_timeline` int(11)
,`nama_project` varchar(140)
,`uname_developer` varchar(140)
);

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
  `kode_timeline` int(11) NOT NULL,
  `kode_project` int(11) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `deadline` date NOT NULL,
  `uraian` varchar(140) NOT NULL,
  `screenshot` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `test aja`
--
DROP TABLE IF EXISTS `test aja`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test aja` AS select `timeline`.`kode_timeline` AS `kode_timeline`,`project`.`nama_project` AS `nama_project`,`project`.`uname_developer` AS `uname_developer` from ((`timeline` join `project`) join `developer`) where ((`project`.`kode_project` = `timeline`.`kode_project`) and (`project`.`uname_developer` = `developer`.`uname_dev`));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD PRIMARY KEY (`uname_dev`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`kode_project`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`kode_timeline`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
