# FPMPPLA06

Database :
**db_spkt.sql**
```
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2022 at 05:35 AM
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
-- Database: `db_spkt`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` varchar(3) NOT NULL,
  `Jenis_barang` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `Jenis_barang`, `harga`, `stok`) VALUES
('B01', 'Deterjen', 40000, 97),
('B02', 'Fabric Softener', 50000, 98),
('B03', 'Parfum Laundry', 140000, 99);

-- --------------------------------------------------------

--
-- Table structure for table `catatan_keuangan`
--

CREATE TABLE `catatan_keuangan` (
  `id` int(11) NOT NULL,
  `total_pemasukan` double NOT NULL,
  `total_pengeluaran` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catatan_keuangan`
--

INSERT INTO `catatan_keuangan` (`id`, `total_pemasukan`, `total_pengeluaran`) VALUES
(1, 1000000, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `username`, `password`) VALUES
(1, 'karyawan1', 'tes1234'),
(2, 'karyawan2', 'pwd123'),
(3, 'karyawan3', 'abcd1234');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`username`, `password`) VALUES
('pemilik', 'tes1234');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `Tanggal` date NOT NULL,
  `Nama_customer` varchar(50) NOT NULL,
  `Alamat` varchar(500) NOT NULL,
  `No_telp` varchar(20) NOT NULL,
  `Marketplace` varchar(50) NOT NULL,
  `No_resi` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `kode_barang` varchar(3) NOT NULL,
  `pencatat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `Tanggal`, `Nama_customer`, `Alamat`, `No_telp`, `Marketplace`, `No_resi`, `payment_method`, `qty`, `kode_barang`, `pencatat`) VALUES
(1, '2022-11-29', 'Anya Forger', 'westalis', '08123456789', 'N/A', 'N/A', 'CASH', 2, 'B01', 'karyawan1'),
(2, '2022-11-29', 'Anya Forger', 'westalis', '08123456789', 'N/A', 'N/A', 'CASH', 1, 'B02', 'karyawan1'),
(3, '2022-11-29', 'Hasna', 'ITS', '08181818181', 'N/A', 'N/A', 'CASH', 1, 'B01', 'karyawan1'),
(4, '2022-11-29', 'Hasna', 'ITS', '08181818181', 'N/A', 'N/A', 'CASH', 1, 'B02', 'karyawan1'),
(5, '2022-11-29', 'Hasna', 'ITS', '08181818181', 'N/A', 'N/A', 'CASH', 1, 'B03', 'karyawan1'),
(6, '2022-11-29', 'Loid Forger', 'Rungkut', '0810101010', 'N/A', 'N/A', 'CASH', 1, 'B02', 'karyawan1'),
(8, '2022-11-29', 'Lathifah', 'JL. Mayor Sunaryo', '081122334455', 'N/A', 'N/A', 'CASH', 1, 'B03', 'karyawan2'),
(9, '2022-12-01', 'Anya Forger', 'westalis', '08123456789', 'N/A', 'N/A', 'CASH', 1, 'B01', 'karyawan1'),
(10, '2022-12-01', 'Anya Forger', 'westalis', '08123456789', 'N/A', 'N/A', 'CASH', 1, 'B02', 'karyawan1'),
(11, '2022-12-01', 'Nana', 'Wonorejo Indah Timur I/14', '083824849669', 'Shopee', '6364175461', 'transfer bank', 2, 'B01', 'karyawan3'),
(12, '2022-12-01', 'Nana', 'Wonorejo Indah Timur I/14', '083824849669', 'Shopee', '6364175461', 'transfer bank', 1, 'B02', 'karyawan3'),
(13, '2022-12-01', 'Nana', 'Wonorejo Indah Timur I/14', '083824849669', 'Shopee', '6364175461', 'transfer bank', 1, 'B03', 'karyawan3'),
(14, '2022-12-03', 'Cedric Diggory', 'Diagon Alley', '08112374267', 'Tokopedia', '634183648', 'transfer bank', 1, 'B01', 'karyawan1'),
(15, '2022-12-03', 'Cedric Diggory', 'Diagon Alley', '08112374267', 'Tokopedia', '634183648', 'transfer bank', 1, 'B02', 'karyawan1'),
(16, '2022-12-06', 'Loid Forger', 'Ostania', '08122344566', 'Shopee', 'N/A', 'transfer bank', 3, 'B01', 'karyawan2'),
(17, '2022-12-06', 'Loid Forger', 'Ostania', '08122344566', 'N/A', '2374236487348', 'transfer bank', 2, 'B02', 'karyawan2'),
(18, '2022-12-06', 'Loid Forger', 'Ostania', '08122344566', 'N/A', '67284682734', 'gopay', 1, 'B03', 'karyawan2'),
(19, '2022-12-06', 'Hasna', 'ITS', '087853801120', 'Shopee', '326418764', 'transfer bank', 1, 'B02', 'karyawan2'),
(20, '2022-12-06', 'Hasna', 'ITS', '087853801120', 'N/A', '61767814681', 'gopay', 1, 'B03', 'karyawan2'),
(21, '2022-12-06', 'Cedric Diggory', 'Diagon Alley', '08123454321', 'N/A', '776317623', 'transfer bank', 1, 'B03', 'karyawan3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catatan_keuangan`
--
ALTER TABLE `catatan_keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
```
