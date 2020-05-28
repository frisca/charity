-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2020 at 07:44 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idComment` bigint(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `idUser` bigint(20) NOT NULL,
  `commentDate` date NOT NULL,
  `idPengumuman` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idComment`, `comment`, `idUser`, `commentDate`, `idPengumuman`) VALUES
(1, 'Testing', 9, '2020-05-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `donatur`
--

CREATE TABLE `donatur` (
  `idDonatur` bigint(20) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `jenisKeanggotaan` bigint(20) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `birthDate` date NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donatur`
--

INSERT INTO `donatur` (`idDonatur`, `angkatan`, `jenisKeanggotaan`, `gender`, `birthDate`, `id_user`, `image`) VALUES
(13, '', 0, 'Perempuan', '1994-02-20', 1, '1588963247background_phone.jpg'),
(14, '2010', NULL, 'Laki-laki', '2020-05-28', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `idEmail` bigint(20) NOT NULL,
  `toUser` bigint(20) NOT NULL,
  `message` varchar(200) NOT NULL,
  `dateEmail` date NOT NULL,
  `status` int(11) NOT NULL,
  `fromUser` varchar(20) NOT NULL,
  `judul` varchar(200) NOT NULL
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
  `birth_date` date NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerima_beasiswa`
--

INSERT INTO `penerima_beasiswa` (`id_beasiswa`, `angkatan`, `jenjang_studi`, `status`, `gender`, `alamat`, `tgl_bergabung`, `semester`, `anak_ke`, `jmlh_saudara`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `rekening`, `keterangan`, `birth_date`, `nama`) VALUES
(3, '2010', 'S1 Sistem Informasi', 1, 'Laki-laki', 'karet', '2020-04-25', 1, 2, 3, 'test1', 'test2', 'polisi', 'ibu rumah tangga', '1000000', '500000', '12312312131', 'penerima beasiswa', '2020-04-25', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` bigint(20) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(200) NOT NULL,
  `createdDate` date NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `createdBy` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `pengarang`, `createdDate`, `isi`, `status`, `createdBy`) VALUES
(1, 'Test', 'Testing', '2020-05-07', '<p>Testing saja ya</p>\r\n', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Non Admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_keluar`
--

CREATE TABLE `transaksi_keluar` (
  `idTransaksiKeluar` bigint(20) NOT NULL,
  `jenisTransaksiKeluar` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerimaBeasiswa` varchar(50) NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_keluar`
--

INSERT INTO `transaksi_keluar` (`idTransaksiKeluar`, `jenisTransaksiKeluar`, `jumlah`, `penerimaBeasiswa`, `tanggalTransaksi`, `keterangan`) VALUES
(2, 1, 100000, 'test123', '2020-05-01', 'test'),
(3, 2, 3000000, 'testing65', '2020-04-09', 'panti asuhan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_masuk`
--

CREATE TABLE `transaksi_masuk` (
  `idTransaksiMasuk` bigint(20) NOT NULL,
  `idDonatur` bigint(20) NOT NULL,
  `jumlah` bigint(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `bankTransferTujuan` varchar(200) NOT NULL,
  `transferDate` date NOT NULL,
  `jenisTransaksi` int(50) NOT NULL,
  `buktiBayar` varchar(250) NOT NULL,
  `status_approve` int(11) NOT NULL,
  `month` varchar(10) NOT NULL,
  `bankDonatur` varchar(200) NOT NULL,
  `noRekTujuan` varchar(200) NOT NULL,
  `noRekPengirim` varchar(200) NOT NULL,
  `namaPengirim` varchar(200) NOT NULL,
  `namaPenerima` varchar(200) NOT NULL,
  `read` int(11) NOT NULL,
  `year` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_masuk`
--

INSERT INTO `transaksi_masuk` (`idTransaksiMasuk`, `idDonatur`, `jumlah`, `description`, `bankTransferTujuan`, `transferDate`, `jenisTransaksi`, `buktiBayar`, `status_approve`, `month`, `bankDonatur`, `noRekTujuan`, `noRekPengirim`, `namaPengirim`, `namaPenerima`, `read`, `year`) VALUES
(15, 14, 100000, 'test', 'BCA', '2020-04-07', 1, '1590676266background_phone.jpg', 2, '05', 'BNI', '1342213121', '123456', 'Test', 'Test1', 0, '2020'),
(16, 14, 100000, 'testing', 'BCA', '2020-05-07', 2, '1590677864background_phone.jpg', 2, '0', 'BNI', '1342213121', '123456', 'Test', 'Test1', 0, '0'),
(17, 14, 80000, 'test', 'BCA', '2020-05-08', 1, '1590684960united-kingdom.png', 1, '02', 'BNI', '1342213121', '123456', 'Test', 'Test1', 1, '2020');

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
(1, 'admin1', 'balige', '0813231312312', '2010-02-05', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'admin'),
(2, 'test', 'balige', '081231231213', '2020-05-05', 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Indexes for table `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`idDonatur`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`idEmail`);

--
-- Indexes for table `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  ADD PRIMARY KEY (`idTransaksiKeluar`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donatur`
--
ALTER TABLE `donatur`
  MODIFY `idDonatur` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `idEmail` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  MODIFY `id_beasiswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  MODIFY `idTransaksiKeluar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  MODIFY `idTransaksiMasuk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
