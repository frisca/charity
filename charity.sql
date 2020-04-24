-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 10:40 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charity`
--

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE `approve` (
  `idApprove` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `idDonatur` bigint(20) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `jenisKeanggotaan` bigint(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birthDate` date NOT NULL,
  `id_user` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`idDonatur`, `angkatan`, `jenisKeanggotaan`, `gender`, `birthDate`, `id_user`) VALUES
(4, '2010', 1, 'Laki-laki', '2019-01-12', 9),
(7, '2010', 2, 'Laki-laki', '2019-01-12', 12),
(8, '2010', 3, 'Perempuan', '2019-01-12', 13);

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `idIuran` bigint(20) NOT NULL,
  `idDonatur` bigint(20) NOT NULL,
  `dueMonth` date NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `createdDate` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `bankDonatur` varchar(200) NOT NULL,
  `bankTransferTujuan` varchar(200) NOT NULL,
  `noRekTujuan` varchar(50) NOT NULL,
  `noRekPengirim` varchar(50) NOT NULL,
  `namaPengirim` varchar(200) NOT NULL,
  `buktiTransfer` varchar(200) NOT NULL,
  `idTransaksiMasuk` bigint(20) NOT NULL,
  `idApprove` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komplain`
--

CREATE TABLE `komplain` (
  `idKomplain` bigint(20) NOT NULL,
  `idDonatur` bigint(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `jenisKomplain` varchar(200) NOT NULL,
  `idTransaksiMasuk` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_bursa`
--

CREATE TABLE `konfirmasi_bursa` (
  `id_konfirmasi_bursa` int(11) NOT NULL,
  `id_penerima_beasiswa` bigint(20) NOT NULL,
  `total_dana` int(11) NOT NULL,
  `lembar_kontrol_pembayaran` varchar(200) NOT NULL,
  `tgl_bursa` date NOT NULL,
  `created_date` date NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_transaksi`
--

CREATE TABLE `log_transaksi` (
  `idLogTransaksi` bigint(20) NOT NULL,
  `jenisTransaksi` varchar(200) NOT NULL,
  `description` int(11) NOT NULL,
  `idUser` bigint(20) NOT NULL,
  `idTransaksi` bigint(20) NOT NULL,
  `typeTransaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penerima_beasiswa`
--

CREATE TABLE `penerima_beasiswa` (
  `id_beasiswa` bigint(20) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `jenjang_studi` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_bergabung` date NOT NULL,
  `semester` int(11) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jmlh_saudara` int(11) NOT NULL,
  `nama_ayah` varchar(200) NOT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `pekerjaan_ayah` varchar(200) NOT NULL,
  `pekerjaan_ibu` varchar(200) NOT NULL,
  `penghasilan_ayah` varchar(200) NOT NULL,
  `penghasilan_ibu` varchar(200) NOT NULL,
  `rekening` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `birth_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_masuk`
--

CREATE TABLE `transaksi_masuk` (
  `idTransaksiMasuk` bigint(20) NOT NULL,
  `idDonatur` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `createdBy` varchar(200) NOT NULL,
  `bankTransfer` varchar(200) NOT NULL,
  `transferDate` date NOT NULL,
  `jenisTransaksi` varchar(50) NOT NULL,
  `buktiBayar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_masuk`
--

INSERT INTO `transaksi_masuk` (`idTransaksiMasuk`, `idDonatur`, `jumlah`, `description`, `createdBy`, `bankTransfer`, `transferDate`, `jenisTransaksi`, `buktiBayar`) VALUES
(7, 7, 3000, 'test', '2019-10-12', 'BRI', '2019-01-12', 'Transfer', '1584903906background_phone.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` bigint(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `joinDate` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `role` int(11) NOT NULL,
  `username` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `alamat`, `phone`, `joinDate`, `email`, `password`, `role`, `username`) VALUES
(1, 'admin', 'balige', '0813231312312', '2020-03-15', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'admin'),
(9, 'test', 'balige', '081231231213', '2019-01-20', 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'test'),
(12, 'test1', 'test1', '081231231214', '2019-01-20', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2, 'test'),
(13, 'test3', 'test2', '081231231235', '2019-01-20', 'test2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'test2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approve`
--
ALTER TABLE `approve`
  ADD PRIMARY KEY (`idApprove`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`idDonatur`);

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`idIuran`);

--
-- Indexes for table `komplain`
--
ALTER TABLE `komplain`
  ADD PRIMARY KEY (`idKomplain`);

--
-- Indexes for table `konfirmasi_bursa`
--
ALTER TABLE `konfirmasi_bursa`
  ADD PRIMARY KEY (`id_konfirmasi_bursa`);

--
-- Indexes for table `log_transaksi`
--
ALTER TABLE `log_transaksi`
  ADD PRIMARY KEY (`idLogTransaksi`);

--
-- Indexes for table `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  ADD PRIMARY KEY (`idTransaksiMasuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approve`
--
ALTER TABLE `approve`
  MODIFY `idApprove` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `idDonatur` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `iuran`
--
ALTER TABLE `iuran`
  MODIFY `idIuran` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komplain`
--
ALTER TABLE `komplain`
  MODIFY `idKomplain` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `konfirmasi_bursa`
--
ALTER TABLE `konfirmasi_bursa`
  MODIFY `id_konfirmasi_bursa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_transaksi`
--
ALTER TABLE `log_transaksi`
  MODIFY `idLogTransaksi` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  MODIFY `id_beasiswa` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  MODIFY `idTransaksiMasuk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
