-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Bulan Mei 2023 pada 18.33
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(25) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `telepon_admin` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `email_admin`, `username`, `password`, `nama_lengkap`, `telepon_admin`) VALUES
(1, NULL, 'baskoroadi', '827ccb0eea8a706c4c34a16891f84e7b', 'Baskoro Adi', NULL),
(3, NULL, 'ibnu', '202cb962ac59075b964b07152d234b70', 'ibnurepan', NULL),
(4, 'iya12@gmail.com', 'a', 'a', 'a', 2),
(5, 'ibnuu23@gmail.com', 'ibnu', '999', 'ibnuu', 81872467);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(25) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email_karyawan` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `phone` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `username`, `email_karyawan`, `password`, `phone`) VALUES
(1, 'ibnuu', 'nunu', 'ibnu31@gmail.com', '321', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(25) NOT NULL,
  `nama_lengkap` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `email_kasir` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `telp_kasir` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_lengkap`, `username`, `password`, `email_kasir`, `telp_kasir`) VALUES
(1, 'w', 's', 'w', 'iya12@gmail.com', 2),
(2, 'w', 's', 'w', 'iya12@gmail.com', 2),
(3, 'ibnu', 'ibnu', '888', 'pradityaaa77@gmail.com', 845644453),
(4, 'fajar', 'fajar', '000', 'fajar34@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `id_likes` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `email_pelanggan` varchar(100) DEFAULT NULL,
  `password_pelanggan` varchar(50) DEFAULT NULL,
  `nama_pelanggan` varchar(100) DEFAULT NULL,
  `telepon_pelanggan` varchar(15) DEFAULT NULL,
  `alamat_pelanggan` varchar(100) NOT NULL,
  `foto_profil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `email_pelanggan`, `password_pelanggan`, `nama_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `foto_profil`) VALUES
(7, 'ibnu12@gmail.com', '202cb962ac59075b964b07152d234b70', 'ibnu', '082312268750', 'Jalan Lambung Mangkurat', ''),
(9, 'refan12@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9', 'refan', '08234128943', 'Jalan Lambung Mangkurat', ''),
(10, 'iya12@gmail.com', 'fae0b27c451c728867a567e8c1bb4e53', 'musang', '0814238947237', 'Gatau', ''),
(11, 'fajar34@gmail.com', 'f1c1592588411002af340cbaedd6fc33', 'fajar', '082341847823', 'Panjaitan', ''),
(14, 'bila12@gmail.com', '123', 'bila', '0823427348', 'lambung', ''),
(15, 'harist34@gmail.com', 'c6f057b86584942e415435ffb1fa93d4', 'harist', '085432345523', 'Lambung', ''),
(16, 'abc@gmail.com', '202cb962ac59075b964b07152d234b70', 'Oneal Efrata', '082153535462', 'Jl. Suwandi 3 ', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `tanggal_pembelian` date DEFAULT NULL,
  `jumlah_pembelian` int(11) NOT NULL,
  `ongkir` int(11) NOT NULL,
  `total_pembelian` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `tanggal_pembelian`, `jumlah_pembelian`, `ongkir`, `total_pembelian`, `id_pelanggan`) VALUES
(28, '2023-05-03', 27000, 2000, 29000, 7),
(29, '2023-05-03', 60000, 3000, 63000, 10),
(30, '2023-05-03', 20000, 2000, 22000, 11),
(31, '2023-05-03', 42000, 3000, 45000, 11),
(32, '2023-05-09', 15000, 2000, 17000, 14),
(33, '2023-05-09', 5000, 1000, 6000, 14),
(34, '2023-05-09', 35000, 2000, 37000, 14),
(35, '2023-05-10', 10000, 1000, 11000, 14),
(36, '2023-05-10', 30000, 2000, 32000, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_pembelian` int(11) DEFAULT NULL,
  `id_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `jumlah`, `id_pembelian`, `id_produk`) VALUES
(33, 1, 28, 12),
(34, 1, 28, 3),
(35, 1, 29, 2),
(36, 1, 29, 4),
(37, 3, 29, 1),
(38, 1, 30, 1),
(39, 1, 30, 4),
(40, 1, 31, 2),
(41, 1, 31, 5),
(42, 1, 31, 3),
(43, 1, 32, 2),
(44, 1, 32, 4),
(45, 1, 33, 4),
(46, 3, 34, 4),
(47, 1, 34, 3),
(48, 1, 35, 2),
(49, 1, 36, 2),
(50, 1, 36, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga_produk` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `foto_produk` varchar(100) DEFAULT NULL,
  `deskripsi_produk` text DEFAULT NULL,
  `likes` int(11) NOT NULL,
  `id_warung` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `stok`, `foto_produk`, `deskripsi_produk`, `likes`, `id_warung`) VALUES
(1, 'Spaghetti Carbonara', 20000, 2, '7.jpg', 'Spaghetti carbonara is a classic Italian pasta dish that is beloved for its rich and creamy sauce made with eggs, cheese, pancetta (or bacon), and black pepper. It is a simple yet incredibly flavorful dish that can be prepared in a relatively short amount of time.		', 2, 1),
(2, 'Steak Tenderloin', 10000, 6, '9.jpg', 'Tenderloin steak, also known as filet mignon, is a popular and highly regarded cut of beef. It is known for its tenderness, buttery texture, and rich flavor. The tenderloin is a muscle located along the spine of the cow and is not a heavily worked muscle, which contributes to its tenderness.', 1, 2),
(3, 'Shrimp Pasta', 20000, 6, '6.jpg', 'Shrimp spaghetti, also known as shrimp pasta, is a delicious and flavorful dish that combines tender shrimp with al dente spaghetti noodles in a savory sauce. It is a popular seafood pasta dish enjoyed by many seafood lovers.', 1, 3),
(4, 'Ice Tea', 5000, 5, '11.jpg', 'Tea with ice', 2, 3),
(5, 'Baked Salmon', 12000, 8, '5.jpg', 'Baked salmon is a delicious and nutritious dish that is easy to prepare and can be enjoyed for a variety of occasions. ', 3, 1),
(6, 'Orange Juice', 4000, 16, '12.jpg', 'Made from natural oranges that are healthy and sweet', 2, 1),
(7, 'Mineral Water', 6000, 0, '16.jpg', 'Mineral water that you can choose cold or hot', 1, 2),
(8, 'Cheese Cake', 15000, 16, '10.jpg', 'Cheesecake is a rich and creamy dessert that is beloved by many people around the world. It typically consists of a crust made from crushed cookies or graham crackers, and a smooth, creamy filling made primarily from cream cheese, eggs, sugar, and vanilla extract. ', 0, 2),
(9, 'Soup Buah', 15000, 16, '13.jpg', 'Ice fruit with a mixture of various fruits and syrup soup', 0, 3),
(11, 'Ayam Hainan', 14000, 10, '2.jpg', 'Hainan rice, also known as Hainanese chicken rice, is a popular dish that originated from the Hainan province in China but has become a beloved staple in many Southeast Asian countries, particularly in Singapore, Malaysia, and Thailand. It is a flavorful and comforting dish consisting of poached or steamed chicken served with fragrant rice cooked in chicken broth and accompanied by various condiments.', 0, 2),
(12, 'Nasi Campur Bali', 7000, 9, '1.jpg', 'Nasi Campur Bali, also known as Balinese mixed rice, is a traditional and popular dish from the island of Bali in Indonesia. It showcases the unique flavors and ingredients of Balinese cuisine, offering a delightful combination of various dishes on a single plate of steamed rice. 	', 0, 3),
(15, 'Ice cream', 7000, 14, '15.jpg', 'Ice cream with strawberry topping', 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(25) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `warung`
--

CREATE TABLE `warung` (
  `id_warung` int(11) NOT NULL,
  `nama_warung` varchar(50) DEFAULT NULL,
  `alamat_warung` varchar(100) NOT NULL,
  `telepon_warung` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `warung`
--

INSERT INTO `warung` (`id_warung`, `nama_warung`, `alamat_warung`, `telepon_warung`) VALUES
(1, 'Warung Ijay', 'Jalan Lambung Mangkurat', '081234567888'),
(2, 'Restoran Aston', 'Jalan Pramuka', '081234567990'),
(3, 'Restoran Padang', 'Jalan Perjuangan 7', '085324543166');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_likes`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_warung` (`id_warung`);

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warung`
--
ALTER TABLE `warung`
  ADD PRIMARY KEY (`id_warung`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `id_likes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `role`
--
ALTER TABLE `role`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `warung`
--
ALTER TABLE `warung`
  MODIFY `id_warung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);

--
-- Ketidakleluasaan untuk tabel `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD CONSTRAINT `pembelian_produk_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `pembelian_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_warung`) REFERENCES `warung` (`id_warung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
