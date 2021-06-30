-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Waktu pembuatan: 30 Jun 2021 pada 10.49
-- Versi server: 5.7.32
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_quiz_uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id` int(11) NOT NULL,
  `kode_buku` varchar(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `jenis_buku` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `ketebalan_buku` varchar(100) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id`, `kode_buku`, `judul_buku`, `jenis_buku`, `penulis`, `penerbit`, `ketebalan_buku`, `tahun_terbit`) VALUES
(2, 'B001', 'KKN Desa Penari', 'Novel', 'Raditya Dika', 'Kompas Gramedia', '117 Halaman', '2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hp`
--

CREATE TABLE `tb_hp` (
  `id` int(11) NOT NULL,
  `kode_hp` varchar(50) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `jenis_hp` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `berat` varchar(100) NOT NULL,
  `ukuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_hp`
--

INSERT INTO `tb_hp` (`id`, `kode_hp`, `merk`, `jenis_hp`, `warna`, `harga`, `berat`, `ukuran`) VALUES
(2, 'Redmi Note 10 ', 'Xiaomi', 'Smartphone', 'Mate Blue', '2499999', '168', '6.7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `kode_kar` varchar(50) NOT NULL,
  `nama_kar` varchar(50) NOT NULL,
  `alamat_kar` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `telp_kar` varchar(50) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `tahun_masuk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `kode_kar`, `nama_kar`, `alamat_kar`, `jenis_kelamin`, `telp_kar`, `pengalaman`, `tahun_masuk`) VALUES
(3, '002', 'Echa', 'Kp bendungan batik', 'transgender', '02149568677', 'Tukang Kebun', '2015');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laptop`
--

CREATE TABLE `tb_laptop` (
  `id` int(11) NOT NULL,
  `kode_laptop` varchar(20) NOT NULL,
  `prosesor` varchar(50) NOT NULL,
  `tahun_pembuatan` varchar(50) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `ukuran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mobil`
--

CREATE TABLE `tb_mobil` (
  `id` int(11) NOT NULL,
  `kode_mobil` varchar(50) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `tahun_pembuatan` varchar(10) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `nomor_mesin` varchar(100) NOT NULL,
  `jenis_bensin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tb_mobil`
--

INSERT INTO `tb_mobil` (`id`, `kode_mobil`, `merk`, `tahun_pembuatan`, `warna`, `harga`, `nomor_mesin`, `jenis_bensin`) VALUES
(2, 'M7', 'Toyota', '2018', 'Mate Black', '170.000.000', 'T7163MGE', 'Pertalite');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_hp`
--
ALTER TABLE `tb_hp`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_laptop`
--
ALTER TABLE `tb_laptop`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_hp`
--
ALTER TABLE `tb_hp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_laptop`
--
ALTER TABLE `tb_laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_mobil`
--
ALTER TABLE `tb_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;