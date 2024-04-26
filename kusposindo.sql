-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2022 pada 13.11
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kusposindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `ID_anggota` int(8) NOT NULL,
  `nama_anggota` varchar(25) NOT NULL,
  `NIK_anggota` char(16) NOT NULL,
  `alamat_anggota` varchar(100) NOT NULL,
  `no_telp_anggota` varchar(13) NOT NULL,
  `pendidikan_terakhir` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`ID_anggota`, `nama_anggota`, `NIK_anggota`, `alamat_anggota`, `no_telp_anggota`, `pendidikan_terakhir`) VALUES
(1, 'bambang', '123456', 'dawdas', '1234566', 's1'),
(3, 'bakwan', '768554', 'dawdadaw', '082321', 'sma'),
(434, '342', '424', '424', '423423', '424'),
(5435, '453', '535', '4535', '3453', '355435'),
(5656, '65', '656', '5656', '656', '656'),
(12345, 'bambang', '12345', 'kp.baduy', '0812345', 's8'),
(54545, '545', '545', '45', '45', '4545'),
(54546, 'iwan', '212321', 'BANDUNG', '1232123', 'S1'),
(54547, 'Rangga Saepuloh', '123231', '321311', '23131', '312131');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `ID_kredit` int(20) NOT NULL,
  `ID_anggota` char(8) NOT NULL,
  `nama_barang_kredit` varchar(25) NOT NULL,
  `tanggal_kredit` date NOT NULL,
  `jangka_waktu_kredit` varchar(16) NOT NULL,
  `nominal` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`ID_kredit`, `ID_anggota`, `nama_barang_kredit`, `tanggal_kredit`, `jangka_waktu_kredit`, `nominal`) VALUES
(53, '545', 'kutu', '2022-03-20', '2020', 6446),
(656, '656', '656', '0656-05-06', '2020', 6565),
(657, 'bambang', 'bakso', '2022-03-21', '5 Bulan', 123000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelola`
--

CREATE TABLE `pengelola` (
  `ID_pengelola` char(8) NOT NULL,
  `ID_anggota` char(8) NOT NULL,
  `nama_pengelola` varchar(25) NOT NULL,
  `NIK_pengelola` char(16) NOT NULL,
  `alamat_pengelola` varchar(30) NOT NULL,
  `no_telp_pengelola` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_pokok`
--

CREATE TABLE `simpanan_pokok` (
  `ID_simpanan_pokok` char(8) NOT NULL,
  `tanggal_bayar_pokok` date NOT NULL,
  `nominal_pokok` int(25) NOT NULL,
  `jumlah_pokok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_sukarela`
--

CREATE TABLE `simpanan_sukarela` (
  `ID_simpanan_sukarela` int(20) NOT NULL,
  `ID_anggota` char(8) NOT NULL,
  `tanggal_bayar_sukarela` date NOT NULL,
  `nominal_sukarela` int(25) NOT NULL,
  `jangka_waktu_sukarela` char(30) NOT NULL,
  `jumlah_sukarela` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan_sukarela`
--

INSERT INTO `simpanan_sukarela` (`ID_simpanan_sukarela`, `ID_anggota`, `tanggal_bayar_sukarela`, `nominal_sukarela`, `jangka_waktu_sukarela`, `jumlah_sukarela`) VALUES
(446, '4646', '4646-06-04', 464, '2bulan', 3535),
(454, '454', '2022-03-20', 454, '2022-03-20', 54544);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_wajib`
--

CREATE TABLE `simpanan_wajib` (
  `ID_simpanan_wajib` int(20) NOT NULL,
  `ID_anggota` char(8) NOT NULL,
  `tanggal_bayar_wajib` date NOT NULL,
  `nominal_wajib` int(25) NOT NULL,
  `jumlah_wajib` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan_wajib`
--

INSERT INTO `simpanan_wajib` (`ID_simpanan_wajib`, `ID_anggota`, `tanggal_bayar_wajib`, `nominal_wajib`, `jumlah_wajib`) VALUES
(12, '43', '2022-03-09', 21000, 12312),
(35, '5453', '0005-05-05', 545, 5455),
(54, '5345', '2022-03-20', 545435, 5453),
(454, '545', '0554-04-05', 454, 454),
(455, 'bambang', '0004-02-01', 34242, 242342);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indeks untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`ID_kredit`),
  ADD UNIQUE KEY `ID_anggota` (`ID_anggota`);

--
-- Indeks untuk tabel `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`ID_pengelola`),
  ADD UNIQUE KEY `ID_anggota` (`ID_anggota`);

--
-- Indeks untuk tabel `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  ADD PRIMARY KEY (`ID_simpanan_pokok`);

--
-- Indeks untuk tabel `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  ADD PRIMARY KEY (`ID_simpanan_sukarela`),
  ADD UNIQUE KEY `ID_anggota` (`ID_anggota`);

--
-- Indeks untuk tabel `simpanan_wajib`
--
ALTER TABLE `simpanan_wajib`
  ADD PRIMARY KEY (`ID_simpanan_wajib`),
  ADD UNIQUE KEY `ID_anggota` (`ID_anggota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `ID_anggota` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54548;

--
-- AUTO_INCREMENT untuk tabel `kredit`
--
ALTER TABLE `kredit`
  MODIFY `ID_kredit` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=658;

--
-- AUTO_INCREMENT untuk tabel `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  MODIFY `ID_simpanan_sukarela` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=455;

--
-- AUTO_INCREMENT untuk tabel `simpanan_wajib`
--
ALTER TABLE `simpanan_wajib`
  MODIFY `ID_simpanan_wajib` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=456;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
