-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 27, 2013 at 03:35 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kdprodi` int(11) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `kdprodi`) VALUES
('110533406970', 'ika', 'LUMAJANG', 334),
('110533406989', 'IMAN BUDI HUTOMO', 'MALANG', 334),
('110533406975', 'IKA RIZKI CHOIRUNNISAA', 'MALANG', 334),
('110533406961', 'indri', 'LUMAJANG', 334),
('110533406972', 'nana', 'MALANG', 334),
('110533406960', 'nanananana', 'MALANG', 334),
('110533406974', 'dkajdjd', 'skhd', 334);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa2`
--

CREATE TABLE IF NOT EXISTS `mahasiswa2` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `namaprodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa2`
--

INSERT INTO `mahasiswa2` (`nim`, `nama`, `alamat`, `namaprodi`) VALUES
('110533406970', 'ika', 'LUMAJANG', 'Pendidikan Teknik Informatika'),
('110533406989', 'IMAN BUDI HUTOMO', 'MALANG', 'Pendidikan Teknik Informatika'),
('110533406975', 'IKA RIZKI CHOIRUNNISAA', 'MALANG', 'Pendidikan Teknik Informatika'),
('110533406961', 'indri', 'LUMAJANG', 'Pendidikan Teknik Informatika'),
('110533406972', 'nana', 'MALANG', 'Pendidikan Teknik Informatika'),
('110533406960', 'nanananana', 'MALANG', 'Pendidikan Teknik Informatika'),
('110533406974', 'dkajdjd', 'skhd', 'Pendidikan Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
  `kdprodi` int(11) NOT NULL,
  `namaprodi` varchar(50) NOT NULL,
  PRIMARY KEY (`kdprodi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kdprodi`, `namaprodi`) VALUES
(334, 'Pendidikan Teknik Informatika'),
(344, 'Pendidikan Teknik Elektro');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
