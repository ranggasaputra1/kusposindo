-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Bulan Mei 2022 pada 08.44
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

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
  `ID_anggota` int(11) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `NIK_anggota` bigint(150) NOT NULL,
  `alamat_anggota` varchar(100) NOT NULL,
  `no_telp_anggota` bigint(50) NOT NULL,
  `pendidikan_terakhir` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`ID_anggota`, `nama_anggota`, `NIK_anggota`, `alamat_anggota`, `no_telp_anggota`, `pendidikan_terakhir`) VALUES
(1, 'Raka Ramadhan', 123456, 'cibantu', 81234567, 's1'),
(2, 'iwan', 653872325205367278, 'cia', 8123456789055343, 's1'),
(4, 'Tio Sondang Ulini Sikhen Sitanggang', 1234567, 'Ciburial', 81234567, 's1'),
(5, 'Septi Armanaa', 322342342342, 'cibaduyutaaa kp jalan duren', 8123456, 'sma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa_usaha`
--

CREATE TABLE `jasa_usaha` (
  `ID_jasa_usaha` int(11) NOT NULL,
  `ID_anggota` char(50) NOT NULL,
  `tanggal_bayar_jasa` date NOT NULL,
  `nominal_jasa` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jasa_usaha`
--

INSERT INTO `jasa_usaha` (`ID_jasa_usaha`, `ID_anggota`, `tanggal_bayar_jasa`, `nominal_jasa`) VALUES
(3, '2  |  ( iwan )', '2022-05-03', '1111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kredit`
--

CREATE TABLE `kredit` (
  `ID_kredit` int(11) NOT NULL,
  `ID_anggota` char(50) NOT NULL,
  `nama_barang_kredit` varchar(50) NOT NULL,
  `tanggal_kredit` date NOT NULL,
  `jangka_waktu_kredit` char(30) NOT NULL,
  `nominal` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kredit`
--

INSERT INTO `kredit` (`ID_kredit`, `ID_anggota`, `nama_barang_kredit`, `tanggal_kredit`, `jangka_waktu_kredit`, `nominal`) VALUES
(1, '4  |  ( Tio Sondang Ulini Sikhen Sitanggang )', 'motor', '2022-03-25', '7 Bulan', '50.000'),
(2, '2  |  ( iwan )', 'Baskom', '2022-03-25', '1 Bulan', '5.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `ID_produk` int(11) NOT NULL,
  `nama_produk` varchar(25) NOT NULL,
  `jumlah_masuk` varchar(25) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `sisa_produk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`ID_produk`, `nama_produk`, `jumlah_masuk`, `tanggal_masuk`, `sisa_produk`) VALUES
(1, 'meja besi', '1', '2022-03-30', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_pokok`
--

CREATE TABLE `simpanan_pokok` (
  `ID_simpanan_pokok` int(11) NOT NULL,
  `ID_anggota` char(50) NOT NULL,
  `tanggal_bayar_pokok` date NOT NULL,
  `nominal_pokok` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan_pokok`
--

INSERT INTO `simpanan_pokok` (`ID_simpanan_pokok`, `ID_anggota`, `tanggal_bayar_pokok`, `nominal_pokok`) VALUES
(1, '1  |  ( Raka Ramadhan )', '2022-03-25', '50.000'),
(2, '3  |  ( Sri Sukandi )', '2022-04-12', '50.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_sukarela`
--

CREATE TABLE `simpanan_sukarela` (
  `ID_simpanan_sukarela` int(11) NOT NULL,
  `ID_anggota` char(50) NOT NULL,
  `tanggal_bayar_sukarela` date NOT NULL,
  `nominal_sukarela` char(50) NOT NULL,
  `jangka_waktu_sukarela` char(30) NOT NULL,
  `jumlah_sukarela` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan_sukarela`
--

INSERT INTO `simpanan_sukarela` (`ID_simpanan_sukarela`, `ID_anggota`, `tanggal_bayar_sukarela`, `nominal_sukarela`, `jangka_waktu_sukarela`, `jumlah_sukarela`) VALUES
(1, '1  |  ( Raka Ramadhan )', '2022-03-25', '1.000', '1 hari', 1),
(2, '2  |  ( iwan )', '2022-03-25', '6.000', '1 hari', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan_wajib`
--

CREATE TABLE `simpanan_wajib` (
  `ID_simpanan_wajib` int(11) NOT NULL,
  `ID_anggota` char(50) NOT NULL,
  `tanggal_bayar_wajib` date NOT NULL,
  `nominal_wajib` char(50) NOT NULL,
  `jumlah_wajib` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan_wajib`
--

INSERT INTO `simpanan_wajib` (`ID_simpanan_wajib`, `ID_anggota`, `tanggal_bayar_wajib`, `nominal_wajib`, `jumlah_wajib`) VALUES
(1, '2  |  ( iwan )', '2022-03-25', '20.000', 1),
(2, '3  |  ( Sri Sukandi )', '2022-03-25', '100.000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` char(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'rangga', 'rangga@gmail.com', NULL, '$2y$10$8hOX/uaETrUYNEJz44dsmu8XE6CQWCERA6kf8Xowa.qWUkTkJkgwS', 'admin', NULL, '2022-04-07 19:34:27', '2022-04-07 19:34:27'),
(16, 'halo', 'halo@gmail.com', NULL, '$2y$10$Tf9BZQr4/VywVIWu1ls3TeohLockxY83AKxIB9w7iqdcH49qjKVMi', 'admin', NULL, '2022-04-21 23:39:57', '2022-04-21 23:39:57'),
(17, 'iwan', 'iwan@gmail.com', NULL, '$2y$10$R9VDqP5pfLkniwWE18IemeEAMLPIZKzIngpo/UFF7LIUtFsjwe2tu', 'admin', NULL, '2022-04-30 15:32:07', '2022-04-30 15:32:07'),
(18, 'kusposindo', 'kusposindo@gmail.com', NULL, '$2y$10$p2jMniA/jHS4LuHAZO/p8uER3jFEY/lgigQkorgzR5zD/ySlcxXf6', 'admin', NULL, '2022-05-02 23:42:41', '2022-05-02 23:42:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`ID_anggota`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jasa_usaha`
--
ALTER TABLE `jasa_usaha`
  ADD PRIMARY KEY (`ID_jasa_usaha`);

--
-- Indeks untuk tabel `kredit`
--
ALTER TABLE `kredit`
  ADD PRIMARY KEY (`ID_kredit`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pengelola`
--
ALTER TABLE `pengelola`
  ADD PRIMARY KEY (`ID_pengelola`),
  ADD UNIQUE KEY `ID_anggota` (`ID_anggota`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ID_produk`);

--
-- Indeks untuk tabel `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  ADD PRIMARY KEY (`ID_simpanan_pokok`),
  ADD UNIQUE KEY `ID_anggota` (`ID_anggota`);

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
  ADD PRIMARY KEY (`ID_simpanan_wajib`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `ID_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jasa_usaha`
--
ALTER TABLE `jasa_usaha`
  MODIFY `ID_jasa_usaha` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kredit`
--
ALTER TABLE `kredit`
  MODIFY `ID_kredit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `ID_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `simpanan_pokok`
--
ALTER TABLE `simpanan_pokok`
  MODIFY `ID_simpanan_pokok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `simpanan_sukarela`
--
ALTER TABLE `simpanan_sukarela`
  MODIFY `ID_simpanan_sukarela` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `simpanan_wajib`
--
ALTER TABLE `simpanan_wajib`
  MODIFY `ID_simpanan_wajib` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
