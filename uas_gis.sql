-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 01 Jul 2024 pada 02.28
-- Versi server: 8.0.36
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumlah_penduduk`
--

CREATE TABLE `jumlah_penduduk` (
  `id` int NOT NULL,
  `wilayah` varchar(255) NOT NULL,
  `tahun_2023` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jumlah_penduduk`
--

INSERT INTO `jumlah_penduduk` (`id`, `wilayah`, `tahun_2023`) VALUES
(1, 'Bambanglipuro', 1),
(2, 'Banguntapan', 5),
(3, 'Bantul', 4),
(4, 'Dlingo', 1),
(5, 'Imogiri', 6),
(6, 'Jetis', 2),
(7, 'Kasihan', 3),
(8, 'Kretek', 3),
(9, 'Pajangan', 17),
(10, 'Pandak', 5),
(11, 'Piyungan', 7),
(12, 'Pleret', 8),
(13, 'Pundong', 4),
(14, 'Sanden', 3),
(15, 'Sedayu', 2),
(16, 'Sewon', 11),
(17, 'Srandakan', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peternakan`
--

CREATE TABLE `peternakan` (
  `id` int NOT NULL,
  `objek` varchar(255) NOT NULL,
  `alamat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` enum('peternakan ayam','peternakan sapi','peternakan ikan','peternakan') NOT NULL,
  `latitude` float NOT NULL,
  `lng` float NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peternakan`
--

INSERT INTO `peternakan` (`id`, `objek`, `alamat`, `kategori`, `latitude`, `lng`, `foto`) VALUES
(1, 'Rafy Bantul Farm', 'Jl. Imogiri Barat Jl. Ponggok I No.RT.07, Denokan, Trimulyo, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55284', 'peternakan ayam', -7.88348, 110.375, NULL),
(2, 'Maha Farm - Ternak Ayam KUB (Kampung Unggul Balitbangtan)', 'Klodran RT 01, Ngringinan, Palbapang, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55713', 'peternakan ayam', -7.90625, 110.321, NULL),
(3, 'Quick Bird Farm Bantul', 'Beji, Sumberagung, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', 'peternakan', -7.90573, 110.359, NULL),
(5, 'Peternak Sapi Bantul', 'Sumber, Dk, RT.2/RW.0, Balakan, Sumberagung, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', 'peternakan sapi', -7.90607, 110.36, NULL),
(6, 'Royhan Farm \'Wisata Kasih Makan Ayam\'', 'Puton RT 03, Ponggok I, Trimulyo, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', 'peternakan ayam', -7.9028, 110.381, NULL),
(7, 'Kandang Kelompok Podjok Mapan Lestari', 'Sompok, RT 05, Sampok, Sriharjo, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782', 'peternakan sapi', -7.94189, 110.406, NULL),
(8, 'Kandang kub jogja', 'Cangapan, dk, Boto, Patalan, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta', 'peternakan ayam', -7.93957, 110.339, NULL),
(9, 'Wisang geni farm', 'Bakulan - Barongan No.rt 04, Sumber Batikan, Trirenggo, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55714', 'peternakan ayam', -7.90715, 110.346, NULL),
(10, 'Sabdodadi farm', 'Kadibeso, Sabdodadi, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', 'peternakan', -7.89873, 110.358, 'add modal.png'),
(11, 'HAMAIDA Guppy', 'Wonokromo II, Wonokromo, Kec. Pleret, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55791', 'peternakan ikan', -7.86898, 110.394, NULL),
(12, 'Jago Kluruk Farm', 'Jl. Sitimulyo Segoroyoso Jl. Ngablak, Banyakan 3, Sitimulyo, Kec. Piyungan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55792', 'peternakan ayam', -7.85797, 110.427, NULL),
(13, 'Asia Goat Farm', 'Jl. Keongan - Jogroho, Dukuh, Sabdodadi, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55715', 'peternakan', -7.89155, 110.359, NULL),
(14, 'SAPI IDAMAN FARM', 'Banguntapan, Kepuh Wetan, Wirokerten, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55194', 'peternakan sapi', -7.84733, 110.406, NULL),
(15, 'Pak AR Farm', 'Jl. Karangtengah No.RT 05, Karang Tengah, Karangtengah, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782', 'peternakan', -7.93466, 110.381, NULL),
(16, 'Kandang Kelompok HANDOKO SARI', 'Canden, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', 'peternakan sapi', -7.92089, 110.365, NULL),
(17, 'ROSSTER FIGHTER FARM', 'Jl. Serayu, Serayu, Bantul, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55711', 'peternakan ayam', -7.89743, 110.341, NULL),
(18, 'Dicky Imogiri Farm', 'Jl. Nogosari, Nogosari I, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782', 'peternakan', -7.90643, 110.412, NULL),
(19, 'Panuntun Farm', 'Jl. Pramuka, Area Sawah, Trirenggo, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55714', 'peternakan sapi', -7.87923, 110.353, NULL),
(20, 'Rojo Farm', 'Kadirejo, Palbapang, Kec. Bantul, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55713', 'peternakan sapi', -7.89869, 110.317, NULL),
(21, 'Lintang Panjalu Yogyakarta', 'Paten Rt.02, Sumberagung, Kec. Jetis, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55781', 'peternakan ayam', -7.90412, 110.367, NULL),
(22, 'tambah dewe', 'jalanan', 'peternakan ayam', -8.0071, 110.288, 'FSL00339.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `joindate` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `joindate`) VALUES
(1, 'admin', '$2y$10$6YyH6jYPYkWz8cVfOFzqg.EEE6mVHr/sujGd4vWzBuzhmbY/inkwK', 'ADMIN', 'admin@mail.com', '2024-06-29 18:54:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jumlah_penduduk`
--
ALTER TABLE `jumlah_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peternakan`
--
ALTER TABLE `peternakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jumlah_penduduk`
--
ALTER TABLE `jumlah_penduduk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `peternakan`
--
ALTER TABLE `peternakan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
