-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 24. Juni 2021 jam 19:49
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `anekaperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE IF NOT EXISTS `identitas` (
  `id_identitas` int(5) NOT NULL AUTO_INCREMENT,
  `nama_aplikasi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `denda` varchar(10) NOT NULL,
  PRIMARY KEY (`id_identitas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_aplikasi`, `email`, `tlp`, `alamat`, `denda`) VALUES
(1, 'Aplikasi Siswa', 'ashyck_81@yahoo.com.id', '085694871343', 'Kalibata Selatan', '1500');


--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nisn` varchar(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11685 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nisn`, `nama`, `tanggal_lahir`, `jk`, `kelas`, `alamat`) VALUES
(11566, '134747642', 'Alexander Chalvin Prince ', '03-10-13', 'Laki-Laki', '2A', 'Jln. Gunung Andakasa gg Tegal Dukuh 2B No. 8'),
(11568, '133064550', 'Chatarina Gabriela Daviana ', '06-09-13', 'Perempuan', '2A', 'Jln Raya Tuka No.72, Tuka,Kuta Utara'),
(11569, '134727983', 'Chrisnanda Wildan Caesario ', '04-02-13', 'Laki-Laki', '2A', 'Banjar Lebak Dalung, Kuta Utara'),
(11573, '133559488', 'Eldha gloria Nayaka Tanaob ', '04-06-13', 'Perempuan ', '2A', 'Jln Raya Sempidi Br. Uma gunung,Sempidi'),
(11577, '131050533', 'Gde Arjuna Prabasutha ', '03-29-13', 'Laki-Laki', '2A', 'Jln Raya Dalung No 46, Untal-Untal, Dalung'),
(11578, '132483425', 'Gede Eldrian Jubilant Editya ', '05-11-13', 'Laki -laki ', '2A', 'Perum Graha Della No 5, Banjar Gede , Abianbase'),
(11580, '121772950', 'Gizelle Michaelova Chendikiawan ', '11-11-12', 'Perempuan', '2A', 'Jln. Panji No 10 A, Kwanji, Badung'),
(11584, '135476416', 'I Gede Divya Maha Dika Susila ', '05-10-13', 'Laki -laki ', '2A', 'Perum Multi Permai II / 7 Br. Dajan Bingin Sading'),
(11585, '135988413', 'I Gusti Agung Ngurah Prabu Adhistana', '03-25-13', 'Laki -laki ', '2A', 'Jln Arjuna gg Nakula No. 2, Ujung Sari, Sading'),
(11586, '125861967', 'I Komang Yabez Gregory Xasmika ', '08-10-12', 'Laki-Laki', '2A', 'Br. Gede Abianbase gg. Hawai VIII/2 Mengwi, Badung'),
(11588, '137108750', 'I Made Prada Wasista Pramana', '06-21-13', 'Laki -laki ', '2A', 'Dangin Pangkung Kekeran, Mengwi Badung'),
(11589, '135972919', 'I Made Wistara Adiarta ', '06-19-13', 'Laki-Laki', '2A', 'Perum Taman Cipta Pesona B3 Uma Gunung Sempidi'),
(11590, '129425533', 'I Nyoman Gede Prasetya Wicaksana', '07-26-12', 'Laki-Laki', '2A', 'Br. Dangin Pangkung, Kekeran, Mengwi, Badung'),
(11592, '128708372', 'Kadek Andre Arya Sudharma ', '11-23-12', 'Laki-Laki', '2A', 'Perum Bernasi Permai, Jln Rahayu Pesona II  Buduk'),
(11593, '3136504683', 'Keysha Angelina Amanda Sujati ', '06-18-13', 'Perempuan', '2A', 'Campuan Asri IV C Blok BB / 37'),
(11595, '129644642', 'Komang Fiola Amara Martha Kusuma', '12-06-12', 'Perempuan', '2A', 'Banjar Dangin Pangkung Kekeran, Mengwi, Badung'),
(11596, '133552077', 'Komang Marvel Christian Diputra', '05-17-13', 'Laki-Laki', '2A', 'Jln. Raya Babakan No. 107 Canggu'),
(11598, '128837007', 'Leonard Tunggadewa Simanjuntak', '10-24-12', 'Laki -laki ', '2A', 'Puri Ayodya Residence Blok B No 9 Pandak Gede Kediri'),
(11601, '127483099', 'Luh Kadek Puteri Nadyantari ', '10-01-12', 'Perempuan ', '2A', 'Jln Betaka Umasari VI No. 24, Pengilian, Dalung'),
(11602, '123494416', 'Made Laras Susrani Suwarso ', '09-07-12', 'Perempuan ', '2A', 'Jln. Griya Nambi Permai No 15, Anyar, Ubung Kaja'),
(11603, '3129176559', 'Ni Kadek Dyah Udarathi Varayosita', '01-19-12', 'Perempuan', '2A', 'Perum Taman Sri Kandi Residence D6, Kwanji, Dalung'),
(11605, '131104543', 'Ni Putu Aurell Christyana', '06-08-13', 'Perempuan ', '2A', 'Perum Wahyu Graha No. 5 Buduk'),
(11606, '124448204', 'Ni Putu Ayu Utari Dewi ', '09-24-12', 'Perempuan', '2A', 'Jln. Raya Uma Gunung Sempidi gg 36 No.4'),
(11608, '139276843', 'Ni Putu Kiran Masyarani Pramana ', '03-21-13', 'Perempuan ', '2A', 'Jln. Ilalang II No 17 Sempidi'),
(11609, '135448434', 'Paula Gaby Valleria Bigo ', '05-31-13', 'Perempuan ', '2A', 'Jln. Kunyit Tawah Sari gg 3 No 4, Kwanji, Dalung'),
(11613, '139895907', 'Putu Michelle Afreen Saraswati ', '01-10-13', 'Perempuan', '2A', 'Jln. Nusa Indah No 35 Negara Kaja Sading'),
(11614, '123129830', 'Rafael Theo Jelahu ', '10-26-12', 'Laki -laki ', '2A', 'Jln Patih Nambi gg Bulan No 2 , Ubung Kaja'),
(11619, '137699493', 'Vincensius Steve Imanuel Fernanda ', '06-16-13', 'Laki-Laki', '2A', 'Jln. I. Gst. Gentuh Br. Lebak, Dalung'),
(11682, '', 'Berlian Gracia Anindya Gayatri ', '06-16-12', 'Perempuan ', '2A', 'Jl Melati Ds Gulingan '),
(11684, '136518872', 'I Putu Dena Aditya Daniswara', '07-17-13', 'Laki-Laki', '2A', '');

-- --------------------------------------------------------


--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('Administrator','Karyawan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `gender` enum('Laki laki','Perempuan') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `alamat`, `telp`, `gender`) VALUES
(1, 'Dedi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Kalibata Selatan 1b', '085694871343', 'Laki laki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
