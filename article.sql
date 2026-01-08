-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2025 pada 09.56
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'Upacara 17 Agustus 2025, Universitas Dian Nuswantoro', 'Peringatan HUT ke-80 RI kali ini terasa istimewa karena jumlah organisasi mahasiswa yang berpartisipasi sejalan dengan tahun peringatan kemerdekaan. Melalui acara ini, diharapkan mahasiswa termotivasi untuk menjadi pengisi kemerdekaan demi Indonesia yang lebih baik.\r\n\r\n', 'Upacara17.jpg', '2025-08-17', 'admin'),
(2, 'Sidang Umum 2025', 'Majelis Permusyawaratan Mahasiswa Keluarga Mahasiswa (MPM KM) Universitas Dian Nuswantoro (Udinus) menyelenggarakan Sidang Umum MPM KM pada Senin-Selasa, 4–5 Agustus 2025, di Aula Gedung E.3 Udinus. Sidang ini digelar untuk membahas dan menetapkan rancangan keputusan (pleno) yang ditujukan kepada Dewan Perwakilan Mahasiswa Keluarga Mahasiswa (DPM KM), Badan Eksekutif Mahasiswa Keluarga Mahasiswa (BEM KM), dan Komisi Pemilihan Umum Raya (KPUR).', 'SUmpm.jpg', '2025-08-05', 'admin'),
(3, 'Panitia Wisuda\r\n', 'Universitas Dian Nuswantoro Semarang telah menyelenggarakan Wisuda ke-85 pada tanggal 27-28 Agustus 2025, dengan meluluskan sebanyak 1.350 wisudawan. Acara yang diadakan selama dua hari di Patra Semarang Hotel & Convention ini menyoroti fokus kampus pada inovasi digital, kolaborasi strategis, dan penyiapan lulusan untuk dunia kerja.\r\n\r\n', 'panitiawisuda.jpg', '2025-08-27', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
