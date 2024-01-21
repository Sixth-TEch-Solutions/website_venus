-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jan 2024 pada 18.54
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
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(250) NOT NULL,
  `product_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `product_image`) VALUES
(1, 'Full Talas Keju', 'Rp32.000', 'assets\\uploads\\Full Talas Keju.jpg'),
(2, 'kue balok lembang', 'Rp32.000', 'assets\\uploads\\kue balok lembang.jpg'),
(3, 'pie susu lembang -Coklat', 'Rp18.000', 'assets\\uploads\\pie susu lembang - Coklat.jpg'),
(4, 'Bolu Susu Asli Lembang Rasa Pandan', 'Rp28.000', 'assets\\uploads\\Bolu Susu Asli Lembang Rasa Pandan.jpeg'),
(5, 'Bakpia Pathok 653 Aristi Rasa Durian', 'Rp20.000', 'assets\\uploads\\Bakpia Pathok 653 Aristi Rasa Durian.jpeg'),
(6, 'Brownies Pastry Kampoeng Susu ', 'Rp28.000', 'assets\\uploads\\Brownies Pastry Kampoeng Susu.jpeg'),
(7, 'Brownies Jakarta Cheese Factory original', 'Rp28.000', 'assets\\uploads\\Brownies Jakarta Cheese Factory Original.jpeg'),
(8, 'Pie Susu Lembang Mix Kunang', 'Rp20.000', 'assets\\uploads\\Pie Susu Lembang Mix Kunang.jpeg'),
(9, 'Bolen Lembang Rasa Pisang Cokelat', 'Rp28.000', 'assets\\uploads\\Bolen Lembang Rasa Pisang Cokelat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
