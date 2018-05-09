-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 10 Mei 2018 pada 03.37
-- Versi Server: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tokoon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Rafi Halilintar', 'masitingss@gmail.com', 'masiting', '3fc0a7acf087f549ac2b266baf94b8b1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `invoice_id` varchar(10) NOT NULL,
  `item` varchar(225) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `nama_br` varchar(100) NOT NULL,
  `kategori_br` varchar(100) NOT NULL,
  `harga_br` varchar(100) NOT NULL,
  `stok_br` varchar(10) NOT NULL,
  `gambar_br` varchar(100) NOT NULL,
  `ket_br` text NOT NULL,
  `status_br` varchar(2) NOT NULL,
  `tanggal_up` varchar(200) NOT NULL,
  `uplby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `item`
--

INSERT INTO `item` (`id`, `nama_br`, `kategori_br`, `harga_br`, `stok_br`, `gambar_br`, `ket_br`, `status_br`, `tanggal_up`, `uplby`) VALUES
(10, 'Rendang Asli Padang', '3', '200000', '10', 'rendang-asli-padang-912175.jpg', '<p>Rendang atau randang adalah masakan daging bercita rasa pedas yang menggunakan campuran dari berbagai bumbu dan rempah-rempah. Masakan ini dihasilkan dari proses memasak yang dipanaskan berulang-ulang dengan santan kelapa. Proses memasaknya memakan waktu berjam-jam (biasanya sekitar empat jam) hingga kering dan berwarna hitam pekat. Dalam suhu ruangan, rendang dapat bertahan hingga berminggu-minggu. Rendang yang dimasak dalam waktu yang lebih singkat dan santannya belum mengering disebut kalio, berwarna coklat terang keemasan.</p>', '1', '2018-03-15', 'masiting'),
(14, 'Abon Kentang Teri', '3', '40000', '100', 'abon-kentang-teri-801609.jpg', '<p>Makanan adalah bahan, biasanya berasal dari hewan atau tumbuhan, yang dimakan oleh makhluk hidup mendapatkan tenaga dan nutrisi. Cairan yang dipakai untuk maksud ini sering disebut minuman, tetapi kata \'makanan\' juga bisa dipakai. Istilah ini kadang-kadang dipakai dengan kiasan, seperti \"makanan untuk pemikiran\".</p>', '1', '2018-03-15', 'masiting');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kat` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kat`, `slug`, `keterangan`) VALUES
(3, 'Dinner Food', 'dinner-food', '<p>This was dinner food category</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama_usr` varchar(250) NOT NULL,
  `username_usr` varchar(100) NOT NULL,
  `password_usr` varchar(250) NOT NULL,
  `email_usr` varchar(250) NOT NULL,
  `alamat_usr` text NOT NULL,
  `kota_usr` varchar(100) NOT NULL,
  `telp_usr` varchar(20) NOT NULL,
  `status_usr` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama_usr`, `username_usr`, `password_usr`, `email_usr`, `alamat_usr`, `kota_usr`, `telp_usr`, `status_usr`) VALUES
(1, 'Rafi Bagaskara H', 'masiting', '0525120f61ddb4d567a711e60e27c6cd', 'rafibagaskaraha@gmail.com', 'Perumnas Nikan Blok A5 No.71', 'Lubuklinggau', '', '1'),
(2, 'Rafi Bagaskara Halilintar', 'moska', 'd41d8cd98f00b204e9800998ecf8427e', 'masitingss@gmail.com', 'Perumnas nikan Blok A5', 'Lubuklinggau', '08816766460', '0'),
(3, 'Rafi Bagaskara Halilintar', 'moskass', '3fc0a7acf087f549ac2b266baf94b8b1', 'masitingsssss@gmail.com', 'Perumnas nikan Blok A5', 'Lubuklinggau', '08816766460', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;