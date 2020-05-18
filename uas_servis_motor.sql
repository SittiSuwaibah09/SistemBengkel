-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Nov 2019 pada 10.21
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_servis_motor`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `jumlahtransaksi` (OUT `data1` INT)  BEGIN SELECT COUNT(*) INTO data1 FROM detail_service; 
END$$

--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `tmbhmekanik` (`nama` VARCHAR(20)) RETURNS VARCHAR(50) CHARSET latin1 RETURN CONCAT("mekanik ",nama)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `ID_ADMIN` varchar(5) NOT NULL,
  `NAMA_LENGKAP_AD` varchar(30) DEFAULT NULL,
  `JENIS_KELAMIN_AD` varchar(15) DEFAULT NULL,
  `ALAMAT_AD` varchar(20) DEFAULT NULL,
  `TGL_LAHIR_AD` date DEFAULT NULL,
  `NO_TLP_AD` varchar(12) DEFAULT NULL,
  `USERNAME` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `NAMA_LENGKAP_AD`, `JENIS_KELAMIN_AD`, `ALAMAT_AD`, `TGL_LAHIR_AD`, `NO_TLP_AD`, `USERNAME`, `PASSWORD`) VALUES
('A01', 'firman darussalam', 'laki-laki', 'jalan', '2004-03-11', '081974675947', 'firman', 'firman'),
('A02', 'devi kurnia', 'perempuan', 'jalan', '2000-03-30', '087750286534', 'devi', 'devi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_service`
--

CREATE TABLE `detail_service` (
  `NO_NOTA` int(11) NOT NULL,
  `KODE_JASA` varchar(5) DEFAULT NULL,
  `ID_MEKANIK` varchar(5) DEFAULT NULL,
  `KODE_MOTOR` varchar(5) DEFAULT NULL,
  `NO_URUT` varchar(5) DEFAULT NULL,
  `KODE_PART` varchar(5) DEFAULT NULL,
  `SUBTOTAL` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_service`
--

INSERT INTO `detail_service` (`NO_NOTA`, `KODE_JASA`, `ID_MEKANIK`, `KODE_MOTOR`, `NO_URUT`, `KODE_PART`, `SUBTOTAL`) VALUES
(1, 'J02', 'MK01', 'M03', 'S01', 'P02', '100000');

--
-- Trigger `detail_service`
--
DELIMITER $$
CREATE TRIGGER `update_servis` BEFORE UPDATE ON `detail_service` FOR EACH ROW BEGIN 
UPDATE service SET total_bayar = NEW.subtotal WHERE no_urut = NEW.no_urut; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `KODE_JASA` varchar(5) NOT NULL,
  `NAMA_JS` varchar(50) DEFAULT NULL,
  `HARGA_JS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`KODE_JASA`, `NAMA_JS`, `HARGA_JS`) VALUES
('J01', 'ganti oli', '55000'),
('J02', 'turun mesin', '50000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mekanik`
--

CREATE TABLE `mekanik` (
  `ID_MEKANIK` varchar(5) NOT NULL,
  `NAMA_MK` varchar(20) DEFAULT NULL,
  `JENIS_KELAMIN_MK` varchar(15) DEFAULT NULL,
  `ALAMAT_MK` varchar(15) DEFAULT NULL,
  `TGL_LAHIR_MK` date DEFAULT NULL,
  `NO_TLP_MK` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mekanik`
--

INSERT INTO `mekanik` (`ID_MEKANIK`, `NAMA_MK`, `JENIS_KELAMIN_MK`, `ALAMAT_MK`, `TGL_LAHIR_MK`, `NO_TLP_MK`) VALUES
('MK01', 'zainuddin', 'laki-laki', 'jalan', '2010-06-16', '081287634587'),
('MK02', 'safdi', 'laki-laki', 'jalan', '2014-07-24', '082736547655'),
('MK03', 'rizal', 'laki-laki', 'jalan', '2010-05-10', '081736548765');

-- --------------------------------------------------------

--
-- Struktur dari tabel `motor`
--

CREATE TABLE `motor` (
  `KODE_MOTOR` varchar(5) NOT NULL,
  `NO_REGISTER` varchar(15) DEFAULT NULL,
  `TIPE_MTR` varchar(10) DEFAULT NULL,
  `NAMA_PEMILIK_MTR` varchar(10) DEFAULT NULL,
  `ALAMAT_PEMILIK_MTR` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `motor`
--

INSERT INTO `motor` (`KODE_MOTOR`, `NO_REGISTER`, `TIPE_MTR`, `NAMA_PEMILIK_MTR`, `ALAMAT_PEMILIK_MTR`) VALUES
('M01', 'M 3554 DG', 'CBR ', 'yuda', 'jalan'),
('M02', 'M 2444 SG', 'BEAT ESP', 'samsul', 'jalan'),
('M03', 'W 2533 HK', 'VARIO CBS', 'rihan', 'jalan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `part`
--

CREATE TABLE `part` (
  `KODE_PART` varchar(5) NOT NULL,
  `NAMA_PRT` varchar(20) DEFAULT NULL,
  `QUANTITY_PRT` int(11) DEFAULT NULL,
  `HARGA_PRT` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `part`
--

INSERT INTO `part` (`KODE_PART`, `NAMA_PRT`, `QUANTITY_PRT`, `HARGA_PRT`) VALUES
('P01', 'oli', 1, '40000'),
('P02', 'seker', 1, '150000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `NO_URUT` varchar(5) NOT NULL,
  `ID_ADMIN` varchar(5) DEFAULT NULL,
  `TGL_SERVIS` date DEFAULT NULL,
  `JENIS_SERVIS` varchar(10) DEFAULT NULL,
  `TOTAL_BAYAR` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`NO_URUT`, `ID_ADMIN`, `TGL_SERVIS`, `JENIS_SERVIS`, `TOTAL_BAYAR`) VALUES
('S01', 'A01', '2019-11-06', 'berat', '100000');

-- --------------------------------------------------------

--
-- Stand-in structure for view `servis_view`
--
CREATE TABLE `servis_view` (
`nama_js` varchar(50)
,`jumlah_jasa` bigint(21)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `servis_view`
--
DROP TABLE IF EXISTS `servis_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `servis_view`  AS  select `jasa`.`NAMA_JS` AS `nama_js`,count(`detail_service`.`KODE_JASA`) AS `jumlah_jasa` from (`detail_service` join `jasa` on((`detail_service`.`KODE_JASA` = `jasa`.`KODE_JASA`))) group by `detail_service`.`KODE_JASA` order by count(`detail_service`.`KODE_JASA`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_ADMIN`);

--
-- Indexes for table `detail_service`
--
ALTER TABLE `detail_service`
  ADD PRIMARY KEY (`NO_NOTA`),
  ADD KEY `FK_MEBUTUHKAN` (`NO_URUT`),
  ADD KEY `FK_MEMBUTUHKAN3` (`KODE_MOTOR`),
  ADD KEY `FK_MEMBUTUHKAN5` (`ID_MEKANIK`),
  ADD KEY `FK_RELATIONSHIP_5` (`KODE_PART`),
  ADD KEY `FK_RELATIONSHIP_6` (`KODE_JASA`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`KODE_JASA`);

--
-- Indexes for table `mekanik`
--
ALTER TABLE `mekanik`
  ADD PRIMARY KEY (`ID_MEKANIK`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`KODE_MOTOR`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`KODE_PART`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`NO_URUT`),
  ADD KEY `FK_MELAYANI_TRANSAKSI` (`ID_ADMIN`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_service`
--
ALTER TABLE `detail_service`
  ADD CONSTRAINT `FK_MEBUTUHKAN` FOREIGN KEY (`NO_URUT`) REFERENCES `service` (`NO_URUT`),
  ADD CONSTRAINT `FK_MEMBUTUHKAN3` FOREIGN KEY (`KODE_MOTOR`) REFERENCES `motor` (`KODE_MOTOR`),
  ADD CONSTRAINT `FK_MEMBUTUHKAN5` FOREIGN KEY (`ID_MEKANIK`) REFERENCES `mekanik` (`ID_MEKANIK`),
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`KODE_PART`) REFERENCES `part` (`KODE_PART`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`KODE_JASA`) REFERENCES `jasa` (`KODE_JASA`);

--
-- Ketidakleluasaan untuk tabel `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_MELAYANI_TRANSAKSI` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
