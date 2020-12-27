-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2018 at 06:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkomsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `datas`
--

CREATE TABLE `datas` (
  `id` int(11) NOT NULL,
  `cluster` text NOT NULL,
  `msidn` varchar(100) NOT NULL,
  `content_id` text NOT NULL,
  `rev` int(100) NOT NULL,
  `aktif_paket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datas`
--

INSERT INTO `datas` (`id`, `cluster`, `msidn`, `content_id`, `rev`, `aktif_paket`) VALUES
(1, 'BOGOR', '6285212612643', 'Acq1Area2_SP_UMB_ZP__Acq1Area2_SP1_Zn1', 22, 'ada'),
(2, 'BOGOR', '6281398190010', 'Acq1Area2_SP_UMB_ZP__Acq1Area2_SP1_Zn1', 22, 'ada'),
(3, 'BOGOR', '6281398190011', 'Acq1Area2_SP_UMB_ZP__Acq1Area2_SP1_Zn1', 22, 'ada'),
(4, 'BOGOR', '6281398190012', 'Acq1Area2_SP_UMB_ZP__Acq1Area2_SP1_Zn1', 22, 'ada'),
(5, 'BOGOR', '6281398190013', 'Acq1Area2_SP_UMB_ZP__Acq1Area2_SP1_Zn1', 22, 'ada');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id` int(11) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id`, `tanggal_upload`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(1, '2018-06-28', 'test', 'xlsx', '8887', '../crud/crudserver/files/test.xlsx'),
(2, '2018-06-28', 'test', 'xlsx', '37297', '../crud/crudserver/files/test.xlsx'),
(3, '2018-06-28', 'test', 'csv', '435', '../crud/crudserver/files/test.csv'),
(4, '2018-06-28', 'data', 'csv', '335', '../crud/crudserver/files/data.csv'),
(5, '2018-06-28', 'csv', 'csv', '139', '../crud/crudserver/files/csv.csv'),
(6, '2018-06-28', 'tt', 'csv', '139', '../crud/crudserver/files/tt.csv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
