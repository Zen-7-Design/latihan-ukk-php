-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 01:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_santri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_santri`
--

CREATE TABLE `tb_santri` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_santri`
--

INSERT INTO `tb_santri` (`id`, `nama`, `alamat`, `no_telp`, `nama_ayah`, `nama_ibu`) VALUES
(1, 'Zakia Al Wahidin', 'Lampung', '087183131', 'Yanto', 'Aminah'),
(3, 'asasas', 'asasas', 'asasa', 'sasasa', 'asasas'),
(4, 'asas', 'asasa', 'efefef', 'swfefefee', 'defswf'),
(5, 'asasas', 'sfsfsff', 'trhtr', 'ergrefrg', 'egegregre'),
(13, 'ZZZZZZZZZZZZZZZZZZZZZZ', 'ZZZZZZZZZZZZ', 'ZZZZZZZZZZZZ', 'ZZZZZZZZZ', 'ZZZZZZZZZZ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_santri`
--
ALTER TABLE `tb_santri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_santri`
--
ALTER TABLE `tb_santri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
