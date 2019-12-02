-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 10:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `email_cust` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`email_cust`, `nama`, `password`, `foto_profile`) VALUES
('yafiesetyo@gmail.com', 'yafi aja', 'yafieaja', 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276551/2c75fbc41d1305fea37b17763148d140eef7e080_dgcenx.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `memiliki`
--

CREATE TABLE `memiliki` (
  `email_owner` varchar(255) NOT NULL,
  `id_mobil` varchar(255) NOT NULL,
  `id_memiliki` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memiliki`
--

INSERT INTO `memiliki` (`email_owner`, `id_mobil`, `id_memiliki`) VALUES
('yafiesiapaaja@ymail.com', 'PK 5542 SW', 1),
('rehanbudiman@gmail.com', 'L 1234 AGG', 2),
('bangun@gmail.com', 'D 12 AS', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE `mobil` (
  `id_mobil` varchar(255) NOT NULL,
  `jenis_mobil` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id_mobil`, `jenis_mobil`, `golongan`, `status`, `harga`, `foto`) VALUES
('D 12 AS', 'Truk', '3', 'kosong', 250000, 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276537/index1_dtr5x1.jpg'),
('L 1234 AGG', 'sport', '1', 'kosong', 1000000, 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276536/GV16EEZ-1_wozko0.jpg'),
('PK 5542 SW', 'Pesawat Kertas', '1', 'kosong', 10000000, 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276774/222_dpzvbl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `email_owner` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_garasi` varchar(255) NOT NULL,
  `foto_profile` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`email_owner`, `nama`, `password`, `nama_garasi`, `foto_profile`, `alamat`) VALUES
('bangun@gmail.com', 'bangun setiawan', 'bangunaja', 'bukit cemara tujuh rent car', 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276939/IMG-20160111-WA0006_ee7ci2.jpg', 'Jl. Apel, Malang'),
('hahaha@gmail.com', 'abah lala', 'duduklambianyar', 'abah transport', 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276778/hqdefault_jukyry.jpg', 'Jl. Jendral Sudirman, Ponorogo'),
('rehanbudiman@gmail.com', 'rayhan ', 'furqon', 'binomo transport', 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276778/FErkOLb1_400x400_aqooz8.jpg', 'Jl. Mamasuka, Bandung'),
('yafiesiapaaja@ymail.com', 'cak usman', '12345678', 'usman cars', 'https://res.cloudinary.com/dxu5plhcg/image/upload/v1575276559/Angkot_Bandung_Sadang_Serang-Caringin_jgmaec.jpg', 'Jl. Ajinomoto, Subang');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `email_cust` varchar(255) NOT NULL,
  `id_memiliki` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `email_cust`, `id_memiliki`, `tgl_transaksi`, `total_bayar`, `metode`, `durasi`, `status`) VALUES
(24, 'yafiesetyo@gmail.com', 1, '2019-12-02', 20000000, 'cash', 2, 'lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email_cust`);

--
-- Indexes for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD PRIMARY KEY (`id_memiliki`),
  ADD KEY `fk_owner` (`email_owner`),
  ADD KEY `fk_mobil` (`id_mobil`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`email_owner`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_customer` (`email_cust`),
  ADD KEY `fk_memiliki` (`id_memiliki`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `memiliki`
--
ALTER TABLE `memiliki`
  ADD CONSTRAINT `fk_mobil` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id_mobil`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_owner` FOREIGN KEY (`email_owner`) REFERENCES `owner` (`email_owner`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_customer` FOREIGN KEY (`email_cust`) REFERENCES `customer` (`email_cust`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_memiliki` FOREIGN KEY (`id_memiliki`) REFERENCES `memiliki` (`id_memiliki`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
