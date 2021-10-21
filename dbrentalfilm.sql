-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 11:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrentalfilm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbfilm`
--

CREATE TABLE `tbfilm` (
  `idfilm` varchar(5) NOT NULL,
  `judulfilm` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `produser` varchar(40) NOT NULL,
  `produksi` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbpeminjam`
--

CREATE TABLE `tbpeminjam` (
  `idpeminjam` varchar(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpeminjam`
--

INSERT INTO `tbpeminjam` (`idpeminjam`, `nama`, `jeniskelamin`, `alamat`, `status`) VALUES
('PM003', 'gasgasgasg', 'Wanita', 'asgasgasg', 'Tidak Meminjam'),
('PM004', 'asgasgasg', 'Wanita', 'asgasg', 'Tidak Meminjam');

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `idtransaksi` varchar(5) NOT NULL,
  `idpeminjam` varchar(5) NOT NULL,
  `idfilm` varchar(5) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbfilm`
--
ALTER TABLE `tbfilm`
  ADD PRIMARY KEY (`idfilm`);

--
-- Indexes for table `tbpeminjam`
--
ALTER TABLE `tbpeminjam`
  ADD PRIMARY KEY (`idpeminjam`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`idtransaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
