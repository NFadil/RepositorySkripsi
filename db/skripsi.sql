-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2023 pada 09.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `informatika`
--

CREATE TABLE `informatika` (
  `id_jurnal` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `tahun_publis` varchar(20) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `informatika`
--

INSERT INTO `informatika` (`id_jurnal`, `nama`, `judul`, `jurusan`, `angkatan`, `tahun_publis`, `url`) VALUES
(4, 'Nurul Fadhilah Anwar', 'ANALISIS SENTIMEN TERHADAP TEMPAT WISATA DI KABUPATEN REMBANG MENGGUNAKAN METODE NAIVE BAYES CLASSIFIER', 'Informatika', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/statnikov2008.pdf'),
(5, 'Kukuh Yulion', 'Prediksi KN', 'Informatika', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/01_-_Pendahuluan_SW_Testing,_Tingkat_Atas_(BARU).pdf'),
(6, 'Bili', 'Forecash', 'Informatika', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/01_-_Pendahuluan_SW_Testing,_Tingkat_Atas_(BARU).pdf'),
(8, 'Rasyid', 'Analisis', 'Informatika', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/01_-_Pendahuluan_SW_Testing,_Tingkat_Atas_(BARU).pdf'),
(9, 'Syafik Zausayak', 'Analisa', 'Informatika', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/01_-_Pendahuluan_SW_Testing,_Tingkat_Atas_(BARU).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kimia`
--

CREATE TABLE `kimia` (
  `id_jurnal` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `tahun_publis` varchar(20) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kimia`
--

INSERT INTO `kimia` (`id_jurnal`, `nama`, `judul`, `jurusan`, `angkatan`, `tahun_publis`, `url`) VALUES
(2, 'Nurul Fahilah Anwar', 'Analisi Senyama E=M2 dengan PM10', 'Kimia', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/8_MOBILE_PROGRAMMING.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `level`, `foto`) VALUES
(1, 'Fadil1', '123', 'user', 'http://localhost/RepositorySkripsi/Asset/img/pet-boarding.png'),
(2, 'admin', '123', 'admin', 'http://localhost/RepositorySkripsi/Asset/img/—Pngtree—dog_cat_pet_shovel_officer_39344364.png'),
(3, 'adhani', '123', 'user', 'http://localhost/RepositorySkripsi/Asset/img/veterinarian.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sisteminformasi`
--

CREATE TABLE `sisteminformasi` (
  `id_jurnal` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `tahun_publis` varchar(20) NOT NULL,
  `url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sisteminformasi`
--

INSERT INTO `sisteminformasi` (`id_jurnal`, `nama`, `judul`, `jurusan`, `angkatan`, `tahun_publis`, `url`) VALUES
(5, 'Nurul Fadhilah Anwar', 'Prediksi KN', 'Sistem Informasi', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/Modul_5_DSE-B_Nurul_Fadhilah_Anwar_3411201095.pdf'),
(7, 'Kukuh Yulion', 'Analisis Dan Implemntasi Refactoring pada Web Native', 'Sistem Informasi', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/1095-3991-1-PB3.pdf'),
(8, 'Syafiq Zausyak', 'Analisi Senyama E=M2 dengan PM10', 'Sistem Informasi', '20', '2024', 'http://localhost/RepositorySkripsi/Asset/doc/8_MOBILE_PROGRAMMING.pdf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `informatika`
--
ALTER TABLE `informatika`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indeks untuk tabel `kimia`
--
ALTER TABLE `kimia`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `sisteminformasi`
--
ALTER TABLE `sisteminformasi`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `informatika`
--
ALTER TABLE `informatika`
  MODIFY `id_jurnal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kimia`
--
ALTER TABLE `kimia`
  MODIFY `id_jurnal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sisteminformasi`
--
ALTER TABLE `sisteminformasi`
  MODIFY `id_jurnal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
