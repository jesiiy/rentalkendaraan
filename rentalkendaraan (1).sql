-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 04:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalkendaraan`
--

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `merk` varchar(255) NOT NULL,
  `nomor_plat` varchar(255) NOT NULL,
  `harga_perhari` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `foto`, `tipe`, `merk`, `nomor_plat`, `harga_perhari`, `status`) VALUES
(3, 'nissan.jpg', 'Mobil', 'Nissan Kicks e-Power', 'BP 1121 JP', '300000', 1),
(4, 'cx.jpg', 'Mobil', 'Mazda CX-8', 'BP 8790 KP', '280000', 0),
(5, 'gac.jpg', 'Mobil', 'GAC Aion V', 'BP 3278 AM', '300000', 0),
(6, 'hondacity.jpg', 'Mobill', 'Honda City', 'BP 5541 BV', '300000', 0),
(7, 'panamera.jpg', 'Mobil', 'Porsche Panamera', 'BP 6577 CG', '380000', 0),
(8, 'rolls.jpg', 'Mobil', 'Rolls Royce Phantom', 'BP 7712 QO', '400000', 0),
(9, 'loniq.jpg', 'Mobil', 'Hyundai Ioniq 6', 'BP 9917 CM', '300000', 0),
(10, 'denza.jpg', 'Mobil', 'BYD Denza Z9 GT', 'BP 6675 HJ', '380000', 0),
(11, 'corolla.jpg', 'Mobil', 'Toyota Corolla Altis', 'BP 3277 GH', '400000', 0),
(12, 'gmw.jpg', 'Mobil', 'GWM Haval Jolion', 'BP 1012 PL', '320000', 0),
(13, 'en1.jpg', 'Mobil', 'Honda e:N1', 'BP 6473 AC', '350000', 0),
(14, 'ev2.jpg', 'Mobil', 'VinFast VF 5', 'BP 8897 PO', '280000', 0),
(15, 'ev7.jpg', 'Mobil', 'Wuling Cloud EV', 'BP 5543 FH', '320000', 0),
(16, 'ev11.jpg', 'Mobil', 'Neta V-II', 'BP 1203 QY', '350000', 0),
(17, 'ev12.jpg', 'Mobil', 'BYD Seal', 'BP 7687 KM', '280000', 0),
(18, 'mg5bt.jpg', 'Mobil', 'MG 5 BT', 'BP 1121 SD', '220000', 0),
(19, 'bydseal.jpg', 'Mobil', 'BYD Seal', 'BP 9907 NB', '250000', 0),
(20, 'mazda.jpg', 'Mobil', 'Mazda 3 Sedan', 'BP 6657 ZL', '280000', 0),
(21, 'civicrs.jpg', 'Mobil', 'Civic RS', 'BP 2321 IU', '280000', 0),
(22, 'vios.jpg', 'Mobil', 'Toyota Vios', 'BP 7657 FP', '320000', 0),
(23, 'mercedes.jpg', 'Mobil', 'Mercedes Benz C-Class', 'BP 9546 GL', '380000', 0),
(24, 'm1.jpg', 'Motor', 'Honda CBR150R', 'Bp 0217 YU', '150000', 0),
(25, 'm4.jpg', 'Motor', 'Benelli Motobi 200 Evo', 'BP 7745 OL', '120000', 0),
(26, 'm9.jpg', 'Motor', 'Honda Vario 125', 'BP 1221 GU', '60000', 0),
(27, 'm10.jpg', 'Motor', 'Honda Scoopy', 'BP 9909 SC', '50000', 0),
(28, 'm11.jpg', 'Motor', 'Honda PCX160', 'BP 6657 HU', '100000', 0),
(29, 'm12.jpg', 'Motor', 'Yamaha Fazzio', 'BP 4312 XL', '80000', 0),
(30, 'm13.jpg', 'Motor', 'Yamaha Grand Filano Hybrid', 'BP 0010 JK', '80000', 0),
(31, 'm14.jpg', 'Motor', 'Yamaha Nmax Turbo', 'BP 9807 AP', '70000', 0),
(32, 'm15.jpg', 'Motor', 'Piaggio Medley', 'BP 2190 NH', '80000', 0),
(33, 'm16.jpg', 'Motor', 'Honda Stylo 160', 'BP 7789 JI', '80000', 0),
(34, 'm17.jpg', 'Motor', 'Yamaha Fino 125', 'BP 3214 OK', '50000', 0),
(35, 'm4.jpg', 'Motor', 'Benelli Motobi 200', 'BP 7601 SP', '280000', 0),
(36, 'van1.jpg', 'Van', 'Daihatsu Gran Max M', 'BP 0912 JK', '300000', 0),
(37, 'van2.jpg', 'Van', 'Daihatsu Luxio', 'BP 0900 IO', '300000', 0),
(38, 'van3.jpg', 'Van', 'DFSK Gelora', 'BP 8766 HY', '380000', 0),
(39, 'van4.jpg', 'Van', 'Volkswagen ID Buzz', 'BP 6574 XP', '300000', 0),
(40, 'van5.jpg', 'Van', 'Mercedes Benz Sprinter', 'BP 4344 ZY', '380000', 0),
(41, 'van6.jpg', 'Van', 'Suzuki Carry Blind Van', 'BP 1399 JB', '370000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laporankeuangan`
--

CREATE TABLE `laporankeuangan` (
  `id_laporan` int(11) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `total_pendapatan` varchar(255) NOT NULL,
  `jumlah_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporankeuangan`
--

INSERT INTO `laporankeuangan` (`id_laporan`, `periode`, `total_pendapatan`, `jumlah_transaksi`) VALUES
(1, '2025-01', '6000000', '3'),
(2, '2025-02', '7500000', '2');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `aktivitas` text DEFAULT NULL,
  `ip_address` varchar(50) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `nomor_ktp` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_sim` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `nama_pelanggan`, `jenis_kelamin`, `nomor_ktp`, `no_hp`, `alamat`, `nomor_sim`, `status`) VALUES
(2, 9, 'nat', 'perempuan', '9827392', '082392916473', 'baloi view', '873872', 0),
(3, 10, 'oppa', 'laki-laki', '9887676', '082392916473', 'jalan mbek', 'SIM321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `metode` varchar(255) NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `status` enum('lunas','belum lunas') NOT NULL,
  `id_laporan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_sewa`, `metode`, `nominal`, `tanggal_bayar`, `status`, `id_laporan`) VALUES
(1, 1, 'transfer bank', '2000000', '2025-01-10', 'lunas', 1),
(2, 2, 'cash', '2500000', '2025-01-20', 'belum lunas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_petugas` varchar(255) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `no_hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(11) NOT NULL,
  `nama_pelanggan` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `sim` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_kendaraan` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `durasi` enum('1 hari','2 hari','3 hari','4 hari','5 hari','6 hari','7 hari') NOT NULL,
  `metode` enum('Transfer Bank','Ovo','Gopay','Dana') NOT NULL,
  `bukti` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `nama_pelanggan`, `jenis_kelamin`, `ktp`, `sim`, `no_hp`, `alamat`, `id_kendaraan`, `tanggal_peminjaman`, `total_harga`, `durasi`, `metode`, `bukti`) VALUES
(6, 'jep', 'perempuan', '1744709209_5fa5bd2490efd59aae52.png', '1744709209_2c3074dc7c082927257c.png', '0987654345678', 'batams', 20, '2025-04-15', 'IDR 1.400.000', '5 hari', '', '1744709209_1824674f38a6a17e0e41.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(2, 'meita@m', '2', '2'),
(5, 'budisiregar@gmail.com', '1', '1'),
(9, '@meyy02', '3', '3'),
(11, 'jesyy@j', '1', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `laporankeuangan`
--
ALTER TABLE `laporankeuangan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `laporankeuangan`
--
ALTER TABLE `laporankeuangan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
