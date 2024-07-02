-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02 Jul 2024 pada 08.46
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umkm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`, `level`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Putra', 'administrator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgldaftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`idanggota`, `username`, `password`, `namalengkap`, `jk`, `nohp`, `alamat`, `tgldaftar`) VALUES
(1, 'member1', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'agung', 'L', '085364668303', 'Jl. Baru andlas ', '2019-05-11'),
(2, 'qweqwe', 'efe6398127928f1b2e9ef3207fb82663', 'Surya Agung', 'L', '085364668303', 'Jl.Baru Andalas No 17A', '2019-05-12'),
(3, 'zzz', 'zzz', 'zzz', 'L', '0812323123131', 'zzz', '2019-05-12'),
(8, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'Putra', 'L', '081239393919', 'jl.andalas', '2019-05-13'),
(9, 'sultan', '9af82031d374b97c9e73132a413cbdf5', 'Sultan', 'L', 'weqe', 'fdsf', '2020-03-16'),
(11, 'ee', '08a4415e9d594ff960030b921d42b91e', 'Ee', 'L', 'ee', 'ee', '2020-06-15'),
(12, 'putra', '5e0c5a0bf82decdd43b2150b622c66c5', 'Putra', 'L', '08238584654', 'Padang', '2020-08-03'),
(13, 'jiji', 'b19f854c93aa7330289ce0325c7b81ec', 'Jiji', 'L', '99898989', 'jiji', '2020-08-09'),
(14, 'budi', '00dfc53ee86af02e742515cdcf075ed3', 'Budi11', 'L', '082165443677', 'Lhoksuemawe', '2024-07-02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idanggota` int(11) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `tglcart` date NOT NULL,
  `idmerchant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfimasibayar`
--

CREATE TABLE `konfimasibayar` (
  `idkonfirmasi` int(11) NOT NULL,
  `idorder` varchar(50) NOT NULL,
  `namabankpengirim` varchar(50) NOT NULL,
  `jumlahtransfer` int(11) NOT NULL,
  `tgltransfer` date NOT NULL,
  `namabanktujuan` varchar(50) NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfimasibayar`
--

INSERT INTO `konfimasibayar` (`idkonfirmasi`, `idorder`, `namabankpengirim`, `jumlahtransfer`, `tgltransfer`, `namabanktujuan`, `idmerchant`, `bukti`) VALUES
(1, '20200606175053', 'Agung', 25000, '2020-06-05', 'Nagari', 1, '8_2020-06-06_2_2019-05-14_5-0.jpg'),
(2, '20200606175053', 'Fredy', 13000, '2020-06-05', 'Nagari', 2, '8_2020-06-06_8_2020-06-06_2_2019-05-14_IMG_0882.JPG'),
(3, '20200803112350', 'BRI', 190000, '0000-00-00', 'BRI', 0, '12_2020-08-03_struktur.PNG'),
(4, '20200809203609', 'Sdad', 3333333, '0000-00-00', 'BRI', 0, '13_2020-08-09_181321015 RISA PERMATA SARI_32A.jpg'),
(5, '20240702103843', 'BNI', 120000, '2024-07-02', 'Nagari', 0, '14_2024-07-02_WhatsApp Image 2024-06-27 at 14.47.28_867165a9.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `idkota` int(11) NOT NULL,
  `namakota` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`idkota`, `namakota`, `tarif`) VALUES
(1, 'Padang', 10000),
(2, 'Pesisir Selatan', 25000),
(3, 'Bukittinggi', 22000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchant`
--

CREATE TABLE `merchant` (
  `idmerchant` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `namatoko` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `tgldaftar` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merchant`
--

INSERT INTO `merchant` (`idmerchant`, `username`, `password`, `namatoko`, `jk`, `nohp`, `alamat`, `tgldaftar`, `status`) VALUES
(1, 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'Penjual Satu', 'L', '082338183818', 'Jl. Penjual Raya', '2020-06-06', 1),
(2, 'zxczxc', 'ecb97ffafc1798cd2f67fcbc37226761', 'Penjual Dua', 'L', '083535153531', 'Jl. Kemana mana', '2020-06-06', 1),
(3, 'rebecca', '25ed1bcb423b0b7200f485fc5ff71c8e', 'Zzz', 'L', '08111212454', 'andlas', '2020-06-06', 1),
(4, 'risa', '735c9c3675eaba16bfbec5913174067e', 'Risaku', 'L', '082385848382', 'padang', '2020-06-15', 0),
(5, 'ipon', 'ae309b0a21c79398478df76b7c0eb24f', 'Risa', 'L', '87878787', 'jhjhj', '2020-06-15', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `idorder` varchar(100) NOT NULL,
  `idanggota` int(11) NOT NULL,
  `alamatkirim` text NOT NULL,
  `total` int(11) NOT NULL,
  `tglorder` date NOT NULL,
  `tglPengembalian` date NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `idstatusorder` int(11) NOT NULL COMMENT '1=tunggubayar. 2=konfirmasiadmin. 3=diterima. 0=cancel',
  `status_pengembalian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`idorder`, `idanggota`, `alamatkirim`, `total`, `tglorder`, `tglPengembalian`, `idmerchant`, `idstatusorder`, `status_pengembalian`) VALUES
('20200606175053', 8, 'aaaaa', 25000, '2020-06-05', '2024-07-02', 1, 4, 'Berhasil Dijemput'),
('20200606175053', 8, 'aaaaa', 13000, '2020-06-05', '2024-07-02', 2, 4, 'Berhasil Dijemput'),
('20200803112350', 12, 'Lubuk Buaya', 190000, '2020-08-03', '0000-00-00', 0, 4, ''),
('20200809203609', 13, 'sdadsd', 30000, '2020-08-09', '0000-00-00', 0, 4, ''),
('20240702100643', 14, 'Padang barang', 5010000, '2024-07-02', '0000-00-00', 0, 1, ''),
('20240702103843', 14, 'Padang Kota', 5025000, '2024-07-02', '0000-00-00', 0, 4, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orderdetail`
--

CREATE TABLE `orderdetail` (
  `idorder` varchar(50) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `idkota` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `idmerchant` int(11) NOT NULL,
  `idstatusorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orderdetail`
--

INSERT INTO `orderdetail` (`idorder`, `idproduk`, `idkota`, `jumlah`, `subtotal`, `idmerchant`, `idstatusorder`) VALUES
('20200606175053', 4, 1, 10, 15000, 1, 4),
('20200606175053', 5, 1, 1, 3000, 2, 4),
('20200803112350', 1, 1, 9, 180000, 0, 0),
('20200809203609', 1, 1, 1, 20000, 0, 0),
('20240702100643', 2, 1, 1, 5000000, 0, 0),
('20240702103843', 2, 2, 1, 5000000, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(100) NOT NULL,
  `hargaproduk` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `detailproduk` text NOT NULL,
  `foto` text NOT NULL,
  `idmerchant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `hargaproduk`, `stok`, `detailproduk`, `foto`, `idmerchant`) VALUES
(2, 'Baju Pengantin', 5000000, 9, 'Baju Batabue memiliki arti baju bertabur. Sesuai dengan artinya, baju ini ditaburi oleh benang emas yang menjadi simbolik kekayaan alam. Banyaknya taburan emas di sekujur baju mengisyaratkan banyaknya kekayaan alam yang dimiliki olehÂ SumateraÂ Barat.', 'WhatsApp Image 2024-06-27 at 14.47.28_867165a9.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `statusorder`
--

CREATE TABLE `statusorder` (
  `idstatusorder` int(11) NOT NULL,
  `namastatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statusorder`
--

INSERT INTO `statusorder` (`idstatusorder`, `namastatus`) VALUES
(1, 'Tunggu Pembayaran'),
(2, 'Konfirmasi Admin'),
(3, 'Pengiriman'),
(4, 'Berhasil'),
(5, 'Cancel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`);

--
-- Indexes for table `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  ADD PRIMARY KEY (`idkonfirmasi`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`idkota`);

--
-- Indexes for table `merchant`
--
ALTER TABLE `merchant`
  ADD PRIMARY KEY (`idmerchant`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`,`idmerchant`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`);

--
-- Indexes for table `statusorder`
--
ALTER TABLE `statusorder`
  ADD PRIMARY KEY (`idstatusorder`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `konfimasibayar`
--
ALTER TABLE `konfimasibayar`
  MODIFY `idkonfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `idkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `merchant`
--
ALTER TABLE `merchant`
  MODIFY `idmerchant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `statusorder`
--
ALTER TABLE `statusorder`
  MODIFY `idstatusorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
