-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2020 pada 09.57
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `belajar`
--

CREATE TABLE `belajar` (
  `id_belajar` int(11) NOT NULL,
  `nama_pelajar` varchar(30) NOT NULL,
  `jk_pelajar` varchar(30) NOT NULL,
  `jurusan_pelajar` varchar(30) NOT NULL,
  `email_pelajar` varchar(30) NOT NULL,
  `nohp_pelajar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bio`
--

CREATE TABLE `bio` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `jurusan` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `bio`
--

INSERT INTO `bio` (`id`, `nama`, `jk`, `jurusan`, `email`, `no_hp`) VALUES
(5, 'ihsan', 'Laki-laki', 'tkj', 'ihsan.com', '09'),
(6, 'tes', 'Laki-laki', 'TKJ', 'ihsan@gmail', '08888888888888');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL,
  `nama_materi` varchar(30) NOT NULL,
  `isi_materi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `nama_materi`, `isi_materi`) VALUES
(4, 'matematika', 'Trigonometri adalah ilmu matematika yang mempelajari tentang sudut, sisi, dan perbandingan antara sudut terhadap sisi. Dasarnya menggunakan bangun datar segitiga. Hal ini karena arti dari kata trigonometri sendiri yang dalam bahasa Yunani yang berarti ukuran-ukuran dalam sudut tiga atau segitiga.'),
(5, 'fisika', 'Jangka sorong adalah alat ukur yang mampu mengukur jarak, kedalaman, maupun ‘diameter dalam’ suatu objek dengan tingkat akurasi dan presisi yang sangat baik (±0,05 mm). Hasil pengukuran dari ketiga fungsi alat tersebut dibaca dengan cara yang sama.\r\nAlat ini dipakai secara luas pada berbagai bidang industri enjiniring (teknik), mulai dari proses desain/perancangan, manufaktur/pembuatan, hingga pengecekan akhir produk. Alat ini dipakai luas karena memiliki tingkat akurasi dan presisi yang cukup tinggi, mudah digunakan, mudah dibawa-bawa, dan tidak membutuhkan perawatan khusus. Karena alasan inilah jangka sorong lebih disukai insinyur (enjinir) dibandingkan alat ukur konvensional seperti penggaris.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesan` int(11) NOT NULL,
  `nama_pemesan` varchar(30) NOT NULL,
  `alamat_pemesan` varchar(30) NOT NULL,
  `jumlah_pemesanan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(13, 'ihsan', '$2y$10$VOOls6jdSOOnmd7FcJKJKuhVJGSpPrRfSMrrM95X6ZG7BHMb4B/hC'),
(14, 'admin', '$2y$10$oOB6MEffo7pBoBWFkDNvReNdDtbs3z1spiDSR6gzhTzNzR1VCssBG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `belajar`
--
ALTER TABLE `belajar`
  ADD PRIMARY KEY (`id_belajar`);

--
-- Indeks untuk tabel `bio`
--
ALTER TABLE `bio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id_materi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `belajar`
--
ALTER TABLE `belajar`
  MODIFY `id_belajar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bio`
--
ALTER TABLE `bio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
