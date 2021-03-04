-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Mar 2021 pada 02.52
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `folosofi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `harga` bigint(20) NOT NULL,
  `carousel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `carousel3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_spesifikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar_spesifikasi2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_spesifikasi3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_spesifikasi4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_ukuran` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_ukuran2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_bahan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar_warna` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `kategori_id`, `deskripsi`, `harga`, `carousel`, `carousel2`, `carousel3`, `gambar_spesifikasi`, `gambar_spesifikasi2`, `gambar_spesifikasi3`, `gambar_spesifikasi4`, `gambar_ukuran`, `gambar_ukuran2`, `gambar_bahan`, `gambar_warna`, `created_at`, `updated_at`) VALUES
(13, 'Jaket Boomber', 'Jaket', 'Bla.....Blaaa.bla.....', 40000, 'e23cfa40ec0c22843a34e6f0e360738f.png', 'a5d266cadca15c23742f95d6fef0222a.png', '9f806e81a2c1f864b7be9c662399520c.png', '8b20cd4b670c572e49b9fc07aded5def.png', '5d0a4ebcf490ad0952047327ee5eaad3.png', '42ef84cbc77d405d5eb66c6d766e8afe.png', '75053c91f62d2286240a3350d2a2a1d4.png', '07faf018fa2de0e0e389336e547a5818.png', '3e864d68c65087f45e7b7a95d1d0d286.png', '937785ebd4a69645f7dc908ca9a10eff.png', 'd55072b4d77911230ba2dcdfd96cdeb3.png', '2021-02-28 01:50:31', '2021-02-28 01:50:31'),
(14, 'Jaket Jumper Hoodie', 'Jaket', 'bla,,,,bla,,,blaaa', 60000, 'c571dcadb286744be38235fbec20463c.png', 'f3b622b8e0c6e558e623d9ca3abdf863.png', '5fdbc8c8ba8e64d86b5071dedb728730.png', 'b50d8a9d9485219483c873c586e07b82.png', 'd474c6c7c40207ea2aa6ece169a2fa4c.png', '23b9e3e0fe08c01e31c8da46fcf7d3c0.png', '9e95a57fee766ae783d147d9828a9304.png', '98702e18a0dd5203b57015dc1d323c11.png', '6832fc080834738292ed8f9389791477.png', '6407270d9498cf21f2104e7745cfb297.png', '8941830894ff558e836837f4a146db72.png', '2021-03-02 08:48:25', '2021-03-02 08:48:25'),
(15, 'Jaket Varsity', 'Jaket', NULL, 55000, 'ac50f1dc0bdc67a62829ab80ae6ec7fe.png', '4e5025fb5f043c9a72fe81bc7ceb154f.png', 'ee5c72dd1d269d0c3c3b1086b603e1f5.png', '8c7ca7cd4163a40c01fbe639984e1272.png', 'f5dead1cf82e0c16380b70f2d81d7bb0.png', '38748ea0218077653063bf50bb8e7a77.png', 'f066a4ff517fb1c1629a52c161a70694.png', '1cb05e8da6b761d8a57fabed1569b068.png', '3dac7dd9d9e3f771bf28035d39c951a2.png', '5ce930da17b5ed4c492725d7743ac8bc.png', '8b989bf62a4aac7caded08c503eb5ea3.png', '2021-03-02 08:54:00', '2021-03-02 08:54:00'),
(16, 'Kemeja Tactical', 'Kemeja', 'bla....', 65000, 'e8fd6ab61d39ddeb7381d194a62987df.png', 'd251c092d943afe5700c4ca4e301523f.png', 'e8c1f0d0c0278b231c18232a54c01c98.png', '83acd94012402e0198c65a709c0be696.png', '9b3560ab7594811603404ca884209d53.png', '18799794ab952d532cc1e06b632ea8a1.png', '600df11260478f4df6c91f84d5954d66.png', '7d1324c29248e403ea684318501667f6.png', 'fdef1d420332430efb27d90f27d9018a.png', '4f318e6ae75d64091efa631bd1693ba8.png', '42ce6c46276c2987b0b86d39a4060349.png', '2021-03-02 09:13:31', '2021-03-02 09:13:31');

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
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(81, 'Goodie Bag', '2021-02-28 01:43:25', '2021-02-28 01:43:25'),
(82, 'Hazmat Suit', '2021-02-28 01:43:35', '2021-02-28 01:43:35'),
(83, 'Jaket', '2021-02-28 01:43:44', '2021-02-28 01:43:44'),
(92, 'Kaos', '2021-02-28 01:45:15', '2021-02-28 01:45:15'),
(98, 'Kemeja', '2021-02-28 01:46:08', '2021-02-28 01:46:08'),
(103, 'Masker', '2021-02-28 01:46:48', '2021-02-28 01:46:48'),
(104, 'Sweatcrewneck', '2021-02-28 01:46:57', '2021-02-28 01:46:57'),
(105, 'Sweatshirt Zip', '2021-02-28 01:47:06', '2021-02-28 01:47:06'),
(110, 'Track Jacket', '2021-02-28 01:47:58', '2021-02-28 01:47:58');

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
(4, '2021_01_23_152909_create_barang_table', 1),
(5, '2021_01_23_152936_create_kategori_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'yogaprayoga', 'yogaprayoga@gmail.com', NULL, '$2y$10$.tArcZ84PswSS7aoEYqD2.vzIl0t22HigQpxiPZiYWcsy3ghzL51K', NULL, '2021-03-03 15:34:56', '2021-03-03 15:34:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
