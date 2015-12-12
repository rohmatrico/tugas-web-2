-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 12, 2015 at 03:34 
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biodata`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(4) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `usia` varchar(2) NOT NULL,
  `kelamin` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `hobi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `usia`, `kelamin`, `alamat`, `hobi`) VALUES
(1111, 'Matt', '21', 'l', 'Bandung', 'Musik'),
(1212, 'duf', 'ui', 'l', 'owfj', 'od'),
(8761, 'fidq', 'du', 'l', 'ouhsc', 'ouh');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(4) NOT NULL,
  `naper` varchar(80) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `gaji` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `naper`, `jabatan`, `gaji`) VALUES
(1111, 'SCOVI Media', 'Designer', 5000000),
(1212, 'emira', 'dirut', 12000),
(8761, 'idf', 'ouh', 634714);

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(4) NOT NULL,
  `sd` varchar(80) NOT NULL,
  `smp` varchar(80) NOT NULL,
  `sma` varchar(80) NOT NULL,
  `perti` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `sd`, `smp`, `sma`, `perti`) VALUES
(1111, 'SDN Rancamanyar VI', 'SMPN 2 Dayeuhkolot', 'SMK Penida 2 Katapang', 'PPG'),
(1212, 'jnsfv', 'xkjcv', '', ''),
(8761, 'ouhef', 'oudfh', 'ouh', 'ouufh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
