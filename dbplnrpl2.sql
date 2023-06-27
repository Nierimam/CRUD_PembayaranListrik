-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2023 at 04:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbplnrpl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpembayaran`
--

CREATE TABLE `tbpembayaran` (
  `KodePembayaran` int(10) NOT NULL,
  `NoTagihan` varchar(15) NOT NULL,
  `JenisPembayaran` varchar(15) NOT NULL,
  `NoRek` varchar(20) NOT NULL,
  `AtasNama` varchar(30) NOT NULL,
  `TglTransfer` date NOT NULL,
  `Nominal` double(10,0) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `KodeTagihan` varchar(20) NOT NULL,
  `UploadBukti` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbpembayaran`
--

INSERT INTO `tbpembayaran` (`KodePembayaran`, `NoTagihan`, `JenisPembayaran`, `NoRek`, `AtasNama`, `TglTransfer`, `Nominal`, `Status`, `KodeTagihan`, `UploadBukti`) VALUES
(1, '234', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-20', 32019200, 'Lunas', '1', 'dekorasi.jpg'),
(2, '234', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-20', 996800, 'Lunas', '4', 'dekorasi.jpg'),
(3, '234', 'Transfer', '23432434', 'Imam Mukhlash', '2019-10-31', 395200, 'Lunas', '5', 'dekorasi.jpg'),
(4, '234', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-28', 947200, 'Lunas', '3', 'dekorasi.jpg'),
(5, '123', 'Transfer', '23432434', 'Imam Mukhlash', '0000-00-00', 614400, 'Lunas', '2', 'dekorasi.jpg'),
(6, '234', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-18', 947200, 'Lunas', '3', 'dekorasi.jpg'),
(7, '234', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-18', 947200, 'Lunas', '3', 'dekorasi.jpg'),
(8, '123', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-11', 655200, 'Lunas', '8', 'dekorasi.jpg'),
(9, '123', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-11', 655200, 'Lunas', '8', 'dekorasi.jpg'),
(10, '123', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-19', 655200, 'Lunas', '8', 'dekorasi.jpg'),
(11, '123', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-20', 655200, 'Lunas', '8', 'dekorasi.jpg'),
(12, '123', 'Transfer', '23432434', 'Imam Mukhlash', '2019-11-12', 655200, 'Lunas', '8', 'dekorasi.jpg'),
(13, '123', 'Transfer', '2232324', 'asjaojsmma', '2019-11-19', 2575200, 'Terkirim', '9', 'dekorasi.jpg'),
(14, '234', '', '', '', '0000-00-00', 217600, 'Terkirim', '6', ''),
(15, '234', '', '', '', '0000-00-00', 217600, 'Terkirim', '6', ''),
(16, '123', '', '', '', '0000-00-00', 295200, 'Terkirim', '10', ''),
(17, '234', '', '', '', '0000-00-00', 217600, 'Terkirim', '6', ''),
(18, '234', '', '', '', '0000-00-00', 217600, 'Terkirim', '6', ''),
(19, '234', '', '', '', '0000-00-00', 217600, 'Terkirim', '6', ''),
(20, '234', 'Transfer', '23432434', 'JDJD', '2019-11-28', 947200, 'Lunas', '3', 'dekorasi.jpg'),
(21, '234', 'Transfer', '4333231', 'julian', '2019-11-18', 355580800, 'Lunas', '18', 'dekorasi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbtagihan`
--

CREATE TABLE `tbtagihan` (
  `KodeTagihan` int(10) NOT NULL,
  `NoTagihan` varchar(12) NOT NULL,
  `KodeUser` varchar(10) NOT NULL,
  `KodeTarif` varchar(10) NOT NULL,
  `BulanTagih` varchar(20) NOT NULL,
  `TahunTagih` varchar(6) NOT NULL,
  `Pemakaian` int(10) NOT NULL,
  `TotalBayar` double(10,0) NOT NULL,
  `Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbtagihan`
--

INSERT INTO `tbtagihan` (`KodeTagihan`, `NoTagihan`, `KodeUser`, `KodeTarif`, `BulanTagih`, `TahunTagih`, `Pemakaian`, `TotalBayar`, `Status`) VALUES
(1, '201911FKWD4V', '42', '3', '3', '2019', 19987, 32019200, 'Lunas'),
(2, '201911JC86WI', '44', '1', '11', '2019', 487, 614400, 'Lunas'),
(3, '201911IVRETF', '42', '3', '12', '2019', 567, 947200, 'Lunas'),
(4, '2019119WIQGY', '42', '3', '', '2019', 598, 996800, 'Lunas'),
(5, '201911PHX359', '42', '3', '10', '2019', 222, 395200, 'Lunas'),
(6, '20191191WFY3', '42', '3', '', '2019', 111, 217600, 'Belum'),
(21, '2019119KNRMY', '42', '3', 'september', '2019', 123421, 197513600, 'Belum');

-- --------------------------------------------------------

--
-- Table structure for table `tbtarif`
--

CREATE TABLE `tbtarif` (
  `KodeTarif` int(10) NOT NULL,
  `Daya` varchar(10) NOT NULL,
  `TarifPerKWH` double(10,0) NOT NULL,
  `Beban` double(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbtarif`
--

INSERT INTO `tbtarif` (`KodeTarif`, `Daya`, `TarifPerKWH`, `Beban`) VALUES
(1, '450', 1200, 30000),
(2, '900', 1500, 35000),
(3, '1200', 1600, 40000),
(4, '1700', 1900, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `KodeUser` int(10) NOT NULL,
  `NoMeter` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `NamaLengkap` varchar(50) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Telp` varchar(15) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `KodeTarif` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`KodeUser`, `NoMeter`, `Username`, `Password`, `NamaLengkap`, `Alamat`, `Telp`, `Email`, `Level`, `KodeTarif`) VALUES
(18, '', 'nierimam', 'admin', 'nierimam', 'Denpasar', '082199', 'Nierimam@gmail.com', 'Admin', ''),
(20, '', 'huda ', 'admin', 'huda sasmita', 'Bandung', '082199', 'huda@gmail.com', 'Pelanggan', ''),
(42, '234', 'ary', '8UEVP6', 'ary', 'Bandung', '082199', 'ary@gmail.com', 'Pelanggan', '3'),
(44, '123', 'nierimam', '8UEVP6', 'Surya', 'Bandung', '082199', 'Surya@gmail.com', 'Pelanggan', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD PRIMARY KEY (`KodePembayaran`);

--
-- Indexes for table `tbtagihan`
--
ALTER TABLE `tbtagihan`
  ADD PRIMARY KEY (`KodeTagihan`);

--
-- Indexes for table `tbtarif`
--
ALTER TABLE `tbtarif`
  ADD PRIMARY KEY (`KodeTarif`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`KodeUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  MODIFY `KodePembayaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbtagihan`
--
ALTER TABLE `tbtagihan`
  MODIFY `KodeTagihan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbtarif`
--
ALTER TABLE `tbtarif`
  MODIFY `KodeTarif` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `KodeUser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
