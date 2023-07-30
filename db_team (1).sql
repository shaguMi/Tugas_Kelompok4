-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2023 at 03:17 PM
-- Server version: 8.0.33
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_team`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `getUser`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getUser` (IN `id` VARCHAR(10))   SELECT * FROM pengguna WHERE pengguna.IdPengguna = id$$

DROP PROCEDURE IF EXISTS `getUserAksesId`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getUserAksesId` (IN `userId` VARCHAR(50), IN `pass` VARCHAR(50), OUT `aksesId` VARCHAR(50))   SELECT pengguna.IdAkses INTO aksesId FROM pengguna
WHERE pengguna.IdPengguna = userId AND pengguna.Password = pass$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `IdBarang` varchar(10) NOT NULL,
  `NamaBarang` text,
  `Keterangan` text,
  `Satuan` text,
  `IdPengguna` varchar(10) DEFAULT NULL,
  `hargaJual` int DEFAULT NULL,
  `hargaBeli` int DEFAULT NULL,
  PRIMARY KEY (`IdBarang`),
  KEY `IdPengguna` (`IdPengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `IdPengguna`, `hargaJual`, `hargaBeli`) VALUES
('INV-011', 'Mouse Logitech G102', 'Old', 'Pcs', '2023-AA01', 300000, 250000),
('INV-012', 'Mouse Logitech G300S', 'Old', 'Pcs', '2023-AB01', 250000, 225000),
('INV-013', 'Mouse Fantech', 'New', 'Pcs', '2023-AC01', 275000, 300000),
('INV-014', 'Keyboard Logitech', 'Old', 'Pcs', '2023-AB01', 350000, 325000),
('INV-015', 'Keyboard Fantech', 'New', 'Pcs', '2023-AD01', 325000, 300000),
('INV-016', 'Cooling Pad Kingfisher', 'New', 'Pcs', '2023-AE01', 150000, 125000),
('INV-017', 'Cooling Pad Thunder', 'New', 'Pcs', '2023-AA01', 125000, 100000),
('INV-018', 'Headset Gaming Rexus', 'New', 'Pcs', '2023-AB01', 900000, 850000),
('INV-019', 'Headset Gaming Vonix', 'New', 'Pcs', '2023-AE01', 925000, 900000),
('INV-020', 'Headset Gaming Imperion', 'New', 'Pcs', '2023-AE01', 850000, 825000);

-- --------------------------------------------------------

--
-- Table structure for table `hakakses`
--

DROP TABLE IF EXISTS `hakakses`;
CREATE TABLE IF NOT EXISTS `hakakses` (
  `IdAkses` varchar(10) NOT NULL,
  `NamaAkses` text,
  `keterangan` text,
  PRIMARY KEY (`IdAkses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hakakses`
--

INSERT INTO `hakakses` (`IdAkses`, `NamaAkses`, `keterangan`) VALUES
('AKSES-001', 'AKS-202301', 'User'),
('AKSES-002', 'AKS-202302', 'User'),
('AKSES-003', 'AKS-202303', 'Administrator'),
('AKSES-004', 'AKS-202304', 'Administrator'),
('AKSES-005', 'AKS-202305', 'Administrator'),
('AKSES-006', 'AKS-202306', 'Super User'),
('AKSES-007', 'AKS-202307', 'Super User'),
('AKSES-008', 'AKS-202308', 'Administrator'),
('AKSES-009', 'AKS-202309', 'User'),
('AKSES-010', 'AKS-202310', 'Super User');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

DROP TABLE IF EXISTS `pembelian`;
CREATE TABLE IF NOT EXISTS `pembelian` (
  `IdPembelian` int NOT NULL,
  `IdBarang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `JumlahPembelian` int DEFAULT NULL,
  `HargaBeli` int DEFAULT NULL,
  `IdPengguna` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdPembelian`),
  KEY `IdPengguna` (`IdPengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`IdPembelian`, `IdBarang`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`) VALUES
(20230001, 'INV-011', 200, 250000, '2023-AA01'),
(20230002, 'INV-012', 100, 230000, '2023-AB01'),
(20230003, 'INV-014', 100, 550000, '2023-AC01'),
(20230004, 'INV-015', 200, 500000, '2023-AD01'),
(20230005, 'INV-018', 200, 100000, '2023-AE01'),
(20230006, 'INV-019', 200, 200000, '2023-AF01'),
(20230007, 'INV-016', 300, 220000, '2023-AG01'),
(20230008, 'INV-016', 50, 220000, '2023-AH01'),
(20230009, 'INV-017', 100, 225000, '2023-AI01'),
(20230010, 'INV-017', 100, 225000, '2023-AJ01'),
(20230011, 'INV-014', 100, 550000, '2023-AD01'),
(20230012, 'INV-012', 100, 230000, '2023-AE01'),
(20230013, 'INV-012', 100, 230000, '2023-AF01'),
(20230014, 'INV-014', 20, 550000, '2023-AH01'),
(20230015, 'INV-017', 20, 225000, '2023-AI01'),
(20230016, 'INV-013', 200, 120000, '2023-AJ01'),
(20230017, 'INV-012', 150, 230000, '2023-AH01'),
(20230018, 'INV-014', 200, 550000, '2023-AA01'),
(20230019, 'INV-012', 50, 230000, '2023-AB01'),
(20230020, 'INV-020', 100, 50000, '2023-AC01');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE IF NOT EXISTS `pengguna` (
  `IdPengguna` varchar(10) NOT NULL,
  `NamaPengguna` text,
  `Password` text,
  `NamaDepan` text,
  `NamaBelakang` text,
  `NoHp` text,
  `Alamat` text,
  `IdAkses` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdPengguna`),
  KEY `IdAkses` (`IdAkses`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHp`, `Alamat`, `IdAkses`) VALUES
('2023-AA01', 'Andi_Aryawan', 'PA-001', 'Andi', 'Aryawan', '8156565656', 'Jalan Pagarsih 1 Bandung', 'AKSES-001'),
('2023-AB01', 'Andi_Briyani', 'PA-002', 'Andi', 'Briyani', '813563563', 'Jalan Pagarsih 15 Bandung', 'AKSES-002'),
('2023-AC01', 'Aci_Cinta', 'PA-003', 'Achi', 'Chantika', '8128283783', 'Jalan Melong 25 Bandung', 'AKSES-003'),
('2023-AD01', 'Ana_Danu', 'PA-004', 'Ana', 'Danu', '8128288282', 'Jalan Melong 3 Bandung', 'AKSES-004'),
('2023-AE01', 'Shelo_Ka', 'PA-005', 'Ari', 'Eka', '81237737444', 'Jalan Margahayu Bandung', 'AKSES-002'),
('2023-AF01', 'Afia_Fia', 'PA-006', 'Alfi', 'Fea', '81292992922', 'Jalan Tenggong 5 Bandung', 'AKSES-001'),
('2023-AG01', 'Gha_Gha', 'PA-007', 'Arya', 'Graha', '8127277375', 'Jalan Merak 5 Bandung', 'AKSES-008'),
('2023-AH01', 'Hadiah_ku', 'PA-008', 'Ahmad', 'Heri', '8127277225', 'Jalan Banteng 7 Bandung', 'AKSES-006'),
('2023-AI01', 'Ayana_Iman', 'PA-009', 'Ayana', 'Iman', '85123456789', 'Jalan Pelita 1 Bandung', 'AKSES-003'),
('2023-AJ01', 'Ahmad_Jaidi', 'PA-007', 'Ahmad', 'Jaidi', '85123400089', 'Jalan Bintang 1 Bandung', 'AKSES-009');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

DROP TABLE IF EXISTS `penjualan`;
CREATE TABLE IF NOT EXISTS `penjualan` (
  `IdPenjualan` int NOT NULL,
  `IdBarang` varchar(10) DEFAULT NULL,
  `JumlahPenjualan` int DEFAULT NULL,
  `Hargajual` int DEFAULT NULL,
  `IdPengguna` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`IdPenjualan`),
  KEY `IdPengguna` (`IdPengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`IdPenjualan`, `IdBarang`, `JumlahPenjualan`, `Hargajual`, `IdPengguna`) VALUES
(23240001, 'INV-011', 100, 300000, '2023-AD01'),
(23240002, 'INV-017', 100, 350000, '2023-AE01'),
(23240003, 'INV-012', 200, 330000, '2023-AF01'),
(23240004, 'INV-014', 200, 650000, '2023-AG01'),
(23240005, 'INV-020', 100, 600000, '2023-AH01'),
(23240006, 'INV-018', 100, 200000, '2023-AI01'),
(23240007, 'INV-017', 20, 350000, '2023-AJ01'),
(23240008, 'INV-016', 100, 320000, '2023-AH01'),
(23240009, 'INV-016', 100, 320000, '2023-AI01'),
(23240010, 'INV-018', 100, 200000, '2023-AJ01'),
(23240011, 'INV-017', 50, 350000, '2023-AD01'),
(23240012, 'INV-014', 200, 650000, '2023-AE01'),
(23240013, 'INV-016', 70, 320000, '2023-AF01'),
(23240014, 'INV-015', 100, 325000, '2023-AH01'),
(23240015, 'INV-011', 100, 300000, '2023-AI01'),
(23240016, 'INV-020', 100, 600000, '2023-AJ01'),
(23240017, 'INV-019', 150, 220000, '2023-AH01'),
(23240018, 'INV-015', 100, 325000, '2023-AA01'),
(23240019, 'INV-012', 300, 330000, '2023-AB01'),
(23240020, 'INV-017', 25, 350000, '2023-AC01'),
(23240025, 'INV-013', 100, 100000, '2023-AA01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`IdAkses`) REFERENCES `hakakses` (`IdAkses`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `pengguna` (`IdPengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
