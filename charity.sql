-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 19 Jul 2020 pada 17.39
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `charities`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `idComment` bigint(20) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `idUser` bigint(20) NOT NULL,
  `commentDate` date NOT NULL,
  `idPengumuman` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`idComment`, `comment`, `idUser`, `commentDate`, `idPengumuman`) VALUES
(1, 'Testing', 14, '2020-05-07', 1),
(7, 'testing87', 13, '2020-05-29', 1),
(8, 'op', 13, '2020-05-29', 1),
(9, 'DAA', 14, '2020-07-11', 1),
(10, 'testing 76', 13, '2020-07-16', 2),
(11, 'ds', 13, '2020-07-16', 2),
(12, 'fefe', 13, '2020-07-16', 2),
(13, 'sfsdfs', 13, '2020-07-16', 2),
(14, 'sasas', 13, '2020-07-16', 2),
(15, 'abtr', 13, '2020-07-16', 2),
(16, 'dsdsd', 13, '2020-07-16', 2),
(17, 'dssfsf', 13, '2020-07-16', 2),
(18, 'a', 13, '2020-07-16', 2),
(19, 'sdf', 13, '2020-07-16', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `donatur`
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
-- Dumping data untuk tabel `donatur`
--

INSERT INTO `donatur` (`idDonatur`, `angkatan`, `jenisKeanggotaan`, `gender`, `birthDate`, `id_user`, `image`) VALUES
(13, '', 0, 'Perempuan', '1994-02-20', 1, '1588963247background_phone.jpg'),
(14, '2010', NULL, 'Laki-laki', '2020-05-28', 2, ''),
(15, '2012', NULL, 'Perempuan', '2020-07-29', 3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
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
-- Struktur dari tabel `penerima_beasiswa`
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
-- Dumping data untuk tabel `penerima_beasiswa`
--

INSERT INTO `penerima_beasiswa` (`id_beasiswa`, `angkatan`, `jenjang_studi`, `status`, `gender`, `alamat`, `tgl_bergabung`, `semester`, `anak_ke`, `jmlh_saudara`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `rekening`, `keterangan`, `birth_date`, `nama`) VALUES
(3, '2010', 'S1 Sistem Informasi', 1, 'Laki-laki', 'karet', '2020-04-25', 1, 2, 3, 'test1', 'test2', 'polisi', 'ibu rumah tangga', '1000000', '500000', '12312312131', 'penerima beasiswa', '2020-04-25', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
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
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `pengarang`, `createdDate`, `isi`, `status`, `createdBy`) VALUES
(1, 'Test', 'Testing', '2020-05-07', '<p>Testing saja ya</p>\r\n', 1, 14),
(2, 'testing123', 'rere', '2020-07-16', '<p>teadwe</p>\n', 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id_role` bigint(20) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin'),
(2, 'Non Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_keluar`
--

CREATE TABLE `transaksi_keluar` (
  `idTransaksiKeluar` bigint(20) NOT NULL,
  `jenisTransaksiKeluar` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `penerimaBeasiswa` bigint(20) NOT NULL,
  `tanggalTransaksi` date NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_keluar`
--

INSERT INTO `transaksi_keluar` (`idTransaksiKeluar`, `jenisTransaksiKeluar`, `jumlah`, `penerimaBeasiswa`, `tanggalTransaksi`, `keterangan`) VALUES
(2, 1, 100000, 3, '2020-05-01', 'test'),
(3, 2, 3000000, 3, '2020-04-09', 'panti asuhan'),
(4, 1, 10000, 3, '2020-04-07', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_masuk`
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
  `bankDonatur` varchar(200) NOT NULL,
  `noRekTujuan` varchar(200) NOT NULL,
  `noRekPengirim` varchar(200) NOT NULL,
  `namaPengirim` varchar(200) NOT NULL,
  `namaPenerima` varchar(200) NOT NULL,
  `read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi_masuk`
--

INSERT INTO `transaksi_masuk` (`idTransaksiMasuk`, `idDonatur`, `jumlah`, `description`, `bankTransferTujuan`, `transferDate`, `jenisTransaksi`, `buktiBayar`, `status_approve`, `bankDonatur`, `noRekTujuan`, `noRekPengirim`, `namaPengirim`, `namaPenerima`, `read`) VALUES
(21, 14, 1, '1', '1', '2020-07-24', 1, '1594920285ny.jpg', 2, '1', '1', '1', '1', '1', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `nama`, `alamat`, `phone`, `joinDate`, `email`, `password`, `role`, `username`) VALUES
(1, 'admin1', 'balige', '0813231312312', '2010-02-05', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 'admin'),
(2, 'test', 'balige', '081231231213', '2020-05-05', 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'test'),
(3, 'tesre', 'dsd', '0213123', '2020-07-31', 'friscasagala41@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'tesre');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`);

--
-- Indeks untuk tabel `donatur`
--
ALTER TABLE `donatur`
  ADD PRIMARY KEY (`idDonatur`);

--
-- Indeks untuk tabel `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`idEmail`);

--
-- Indeks untuk tabel `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  ADD PRIMARY KEY (`idTransaksiKeluar`);

--
-- Indeks untuk tabel `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  ADD PRIMARY KEY (`idTransaksiMasuk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `donatur`
--
ALTER TABLE `donatur`
  MODIFY `idDonatur` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `email`
--
ALTER TABLE `email`
  MODIFY `idEmail` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penerima_beasiswa`
--
ALTER TABLE `penerima_beasiswa`
  MODIFY `id_beasiswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id_role` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi_keluar`
--
ALTER TABLE `transaksi_keluar`
  MODIFY `idTransaksiKeluar` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaksi_masuk`
--
ALTER TABLE `transaksi_masuk`
  MODIFY `idTransaksiMasuk` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `idUser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
