-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dutaryana`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `idt_admin` int(10) UNSIGNED NOT NULL,
  `namaAdmin` varchar(50) DEFAULT NULL,
  `noTelfon` varchar(50) DEFAULT NULL,
  `status_2` varchar(25) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password_2` varchar(50) DEFAULT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`idt_admin`, `namaAdmin`, `noTelfon`, `status_2`, `username`, `password_2`, `level`) VALUES
(1, 'Sefrika', '123456', 'aktif', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(3, 'super', '0819229292929', 'Aktif', 'SuperAdmin', '0b28a5799a32c687dad2c5183718ceac', 'SuperAdmin');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_has_t_gpstracker`
--

CREATE TABLE `t_admin_has_t_gpstracker` (
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `t_gpsTracker_idt_gpsTracker` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_admin_has_t_user`
--

CREATE TABLE `t_admin_has_t_user` (
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `t_user_idt_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_armada`
--

CREATE TABLE `t_armada` (
  `idt_armada` int(10) UNSIGNED NOT NULL,
  `namaArmada` varchar(50) DEFAULT NULL,
  `noKendaraan` varchar(50) DEFAULT NULL,
  `tahunKendaraan` varchar(50) DEFAULT NULL,
  `kapasitasSeat` varchar(50) DEFAULT NULL,
  `statusKendaraan` varchar(50) DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_armada`
--

INSERT INTO `t_armada` (`idt_armada`, `namaArmada`, `noKendaraan`, `tahunKendaraan`, `kapasitasSeat`, `statusKendaraan`, `gambar`) VALUES
(25, 'Avanza', 'B 8884 BL', '2020', '12 Orang', 'tersewa huhu', 'avanza.jpg'),
(26, 'Bis Medium', 'B 8884 BL', '2018', '10 orang', 'Dalam Service', 'sewa-medium-bus-jogja.png'),
(27, 'Xenia', 'B 1254 LS', '2018', '10 orang', 'tersewa', 'sigra.png'),
(28, 'Inova', 'B 4565 LJ', '2018', '6 orang', 'Belum Tersewa', 'inova.png'),
(30, 'Elf Long', 'B 4565 LJ', '2020', '12 Orang', 'Dalam Service', 'elf-long.png'),
(31, 'Calya', 'B 8884 BL', '2018', '10 orang', 'Dalam Service', 'New_Calya.png');

-- --------------------------------------------------------

--
-- Table structure for table `t_armada_has_t_service`
--

CREATE TABLE `t_armada_has_t_service` (
  `t_service_idt_service` int(10) UNSIGNED NOT NULL,
  `t_armada_idt_armada` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_armada_has_t_transaksi`
--

CREATE TABLE `t_armada_has_t_transaksi` (
  `t_armada_idt_armada` int(10) UNSIGNED NOT NULL,
  `t_transaksi_idt_transaksi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_laporanservice`
--

CREATE TABLE `t_laporanservice` (
  `idt_laporanService` int(10) UNSIGNED NOT NULL,
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `namaArmada` varchar(50) DEFAULT NULL,
  `noKendaraan` varchar(50) DEFAULT NULL,
  `terakhirService` date DEFAULT NULL,
  `biayaService` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_laporantransaksi`
--

CREATE TABLE `t_laporantransaksi` (
  `idt_laporanTransaksi` int(10) UNSIGNED NOT NULL,
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `tanggalTransaksi` date DEFAULT NULL,
  `namaPenyewa` varchar(50) DEFAULT NULL,
  `lamaSewa` varchar(50) DEFAULT NULL,
  `totalHarga` varchar(50) DEFAULT NULL,
  `statusPembayaran` varchar(50) DEFAULT NULL,
  `keteranganSewa` varchar(255) DEFAULT NULL,
  `alamatPenyewa` varchar(255) DEFAULT NULL,
  `teleponPenyewa` varchar(50) DEFAULT NULL,
  `namaArmada` varchar(50) DEFAULT NULL,
  `noKendaraan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_service`
--

CREATE TABLE `t_service` (
  `idt_service` int(10) UNSIGNED NOT NULL,
  `t_laporanService_idt_laporanService` int(10) UNSIGNED NOT NULL,
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `namaArmada` varchar(50) DEFAULT NULL,
  `noKendaraan` varchar(50) DEFAULT NULL,
  `tanggalService` date DEFAULT NULL,
  `biayaService` varchar(50) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_service`
--

INSERT INTO `t_service` (`idt_service`, `t_laporanService_idt_laporanService`, `t_admin_idt_admin`, `namaArmada`, `noKendaraan`, `tanggalService`, `biayaService`, `keterangan`) VALUES
(2, 0, 0, 'Bis Medium', 'B 4565 LJ', '2021-03-19', '1500000', 'ganti ban'),
(7, 0, 0, 'Avanza', 'B 8674 BC', '2021-06-04', '700000', 'ganti oli');

-- --------------------------------------------------------

--
-- Table structure for table `t_sopir`
--

CREATE TABLE `t_sopir` (
  `idt_sopir` int(10) UNSIGNED NOT NULL,
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `namaSopir` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `noTelfon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_sopir`
--

INSERT INTO `t_sopir` (`idt_sopir`, `t_admin_idt_admin`, `namaSopir`, `alamat`, `noTelfon`) VALUES
(4, 0, 'Supardi', 'Ngawi', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `t_sopir_has_t_transaksi`
--

CREATE TABLE `t_sopir_has_t_transaksi` (
  `t_sopir_idt_sopir` int(10) UNSIGNED NOT NULL,
  `t_transaksi_idt_transaksi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `idt_transaksi` int(10) UNSIGNED NOT NULL,
  `t_laporanTransaksi_idt_laporanTransaksi` int(10) UNSIGNED NOT NULL,
  `t_admin_idt_admin` int(10) UNSIGNED NOT NULL,
  `tanggalTransaksi` date DEFAULT NULL,
  `namaPenyewa` varchar(50) DEFAULT NULL,
  `lamaSewa` varchar(50) DEFAULT NULL,
  `totalHarga` varchar(50) DEFAULT NULL,
  `statusPembayaran` varchar(50) DEFAULT NULL,
  `keteranganSewa` varchar(255) DEFAULT NULL,
  `alamatPenyewa` varchar(255) DEFAULT NULL,
  `telponPenyewa` varchar(50) DEFAULT NULL,
  `namaArmada` varchar(50) DEFAULT NULL,
  `noKendaraan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`idt_transaksi`, `t_laporanTransaksi_idt_laporanTransaksi`, `t_admin_idt_admin`, `tanggalTransaksi`, `namaPenyewa`, `lamaSewa`, `totalHarga`, `statusPembayaran`, `keteranganSewa`, `alamatPenyewa`, `telponPenyewa`, `namaArmada`, `noKendaraan`) VALUES
(2, 0, 0, '2021-03-19', 'sefrika', '2 Hari', '800000', 'Lunas', 'Jemput Airport', 'Balerejo', '0978364728', 'Bis Medium', 'B 1254 LS'),
(4, 0, 0, '2021-05-02', 'sefrika', '2 Hari', '500000', 'Lunas', 'Jemput Airport', 'Ngawi', '0978364728', 'Bis Medium', 'B 8884 BL');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `idt_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`idt_user`, `name`, `username`, `password`, `latitude`, `longitude`) VALUES
(32, 'Avanza AE 1638 BC', 'avanza', '8d5f9196cab04b0acc736b0b2fe74843', '-7.6471781', '111.5288786');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`idt_admin`);

--
-- Indexes for table `t_admin_has_t_gpstracker`
--
ALTER TABLE `t_admin_has_t_gpstracker`
  ADD PRIMARY KEY (`t_admin_idt_admin`,`t_gpsTracker_idt_gpsTracker`),
  ADD KEY `t_admin_has_t_gpsTracker_FKIndex1` (`t_admin_idt_admin`),
  ADD KEY `t_admin_has_t_gpsTracker_FKIndex2` (`t_gpsTracker_idt_gpsTracker`);

--
-- Indexes for table `t_admin_has_t_user`
--
ALTER TABLE `t_admin_has_t_user`
  ADD PRIMARY KEY (`t_admin_idt_admin`,`t_user_idt_user`),
  ADD KEY `t_admin_has_t_user_FKIndex1` (`t_admin_idt_admin`),
  ADD KEY `t_admin_has_t_user_FKIndex2` (`t_user_idt_user`);

--
-- Indexes for table `t_armada`
--
ALTER TABLE `t_armada`
  ADD PRIMARY KEY (`idt_armada`);

--
-- Indexes for table `t_armada_has_t_service`
--
ALTER TABLE `t_armada_has_t_service`
  ADD PRIMARY KEY (`t_service_idt_service`,`t_armada_idt_armada`),
  ADD KEY `t_armada_has_t_service_FKIndex1` (`t_service_idt_service`),
  ADD KEY `t_armada_has_t_service_FKIndex2` (`t_armada_idt_armada`);

--
-- Indexes for table `t_armada_has_t_transaksi`
--
ALTER TABLE `t_armada_has_t_transaksi`
  ADD PRIMARY KEY (`t_armada_idt_armada`,`t_transaksi_idt_transaksi`),
  ADD KEY `t_armada_has_t_transaksi_FKIndex1` (`t_armada_idt_armada`),
  ADD KEY `t_armada_has_t_transaksi_FKIndex2` (`t_transaksi_idt_transaksi`);

--
-- Indexes for table `t_laporanservice`
--
ALTER TABLE `t_laporanservice`
  ADD PRIMARY KEY (`idt_laporanService`),
  ADD KEY `t_laporanService_FKIndex1` (`t_admin_idt_admin`);

--
-- Indexes for table `t_laporantransaksi`
--
ALTER TABLE `t_laporantransaksi`
  ADD PRIMARY KEY (`idt_laporanTransaksi`),
  ADD KEY `t_laporanTransaksi_FKIndex1` (`t_admin_idt_admin`);

--
-- Indexes for table `t_service`
--
ALTER TABLE `t_service`
  ADD PRIMARY KEY (`idt_service`),
  ADD KEY `t_service_FKIndex1` (`t_admin_idt_admin`),
  ADD KEY `t_service_FKIndex2` (`t_laporanService_idt_laporanService`);

--
-- Indexes for table `t_sopir`
--
ALTER TABLE `t_sopir`
  ADD PRIMARY KEY (`idt_sopir`),
  ADD KEY `t_sopir_FKIndex1` (`t_admin_idt_admin`);

--
-- Indexes for table `t_sopir_has_t_transaksi`
--
ALTER TABLE `t_sopir_has_t_transaksi`
  ADD PRIMARY KEY (`t_sopir_idt_sopir`,`t_transaksi_idt_transaksi`),
  ADD KEY `t_sopir_has_t_transaksi_FKIndex1` (`t_sopir_idt_sopir`),
  ADD KEY `t_sopir_has_t_transaksi_FKIndex2` (`t_transaksi_idt_transaksi`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`idt_transaksi`),
  ADD KEY `t_transaksi_FKIndex1` (`t_admin_idt_admin`),
  ADD KEY `t_transaksi_FKIndex2` (`t_laporanTransaksi_idt_laporanTransaksi`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`idt_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `idt_admin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_armada`
--
ALTER TABLE `t_armada`
  MODIFY `idt_armada` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `t_laporanservice`
--
ALTER TABLE `t_laporanservice`
  MODIFY `idt_laporanService` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_laporantransaksi`
--
ALTER TABLE `t_laporantransaksi`
  MODIFY `idt_laporanTransaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `t_service`
--
ALTER TABLE `t_service`
  MODIFY `idt_service` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_sopir`
--
ALTER TABLE `t_sopir`
  MODIFY `idt_sopir` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `idt_transaksi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `idt_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
