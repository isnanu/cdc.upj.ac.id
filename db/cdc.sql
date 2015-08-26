-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Agu 2015 pada 03.54
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cdc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ad_category_id` int(11) NOT NULL,
  `study_program` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `salary_min` varchar(255) NOT NULL,
  `salary_max` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`ad_category_id`),
  KEY `user_username` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`),
  KEY `ad_category_id` (`ad_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ad_categories`
--

CREATE TABLE IF NOT EXISTS `ad_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `ad_categories`
--

INSERT INTO `ad_categories` (`id`, `name`) VALUES
(1, 'Campus Hiring'),
(2, 'Online Recruitment'),
(3, 'Internship Program'),
(4, 'Job Training');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alumni`
--

CREATE TABLE IF NOT EXISTS `alumni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `study_program` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `graduated` date NOT NULL,
  `ipk` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `citizen` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `civil_status` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `web` varchar(255) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `cp_name` varchar(255) NOT NULL,
  `cp_position` varchar(255) NOT NULL,
  `cp_phone` varchar(255) NOT NULL,
  `cp_email` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `address`, `phone`, `fax`, `email`, `web`, `industry`, `logo`, `cp_name`, `cp_position`, `cp_phone`, `cp_email`, `created`, `modified`) VALUES
(6, 83, 'PT Adicipta Carsani Ekakarya', 'Jl. Suryopranoto 1-9, Central Jakarta, Jakarta, Indonesia', '021-6386.6880', '021-6386.6880', 'Adicipta_Carsani@yahoo.co.id', 'http://www.ace.co.id', 'Human Resources Management / Consulting', 'C:\\xampp\\htdocs\\aa\\webroot\\img\\uploads/reg_companies\\1668d9cd-ba35-48f7-bc88-b568cd711fa1-daftar 1.png', 'Siswanto', 'Kepala Bagian HRD', '085882911826', 'siswanto@gmail.com', '2015-08-24 09:20:20', '2015-08-24 09:20:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reg_companies`
--

CREATE TABLE IF NOT EXISTS `reg_companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `approval` tinyint(1) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` text,
  `phone` varchar(30) DEFAULT NULL,
  `fax` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `industry` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `cp_name` varchar(255) DEFAULT NULL,
  `cp_position` varchar(255) DEFAULT NULL,
  `cp_phone` varchar(255) DEFAULT NULL,
  `cp_email` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data untuk tabel `reg_companies`
--

INSERT INTO `reg_companies` (`id`, `approval`, `username`, `password`, `name`, `address`, `phone`, `fax`, `email`, `web`, `industry`, `logo`, `cp_name`, `cp_position`, `cp_phone`, `cp_email`, `created`, `modified`) VALUES
(30, 1, 'eYoBoQe0', '78g1BFuf', 'PT Adicipta Carsani Ekakarya', 'Jl. Suryopranoto 1-9, Central Jakarta, Jakarta, Indonesia', '021-6386.6880', '021-6386.6880', 'Adicipta_Carsani@yahoo.co.id', 'http://www.ace.co.id', 'Human Resources Management / Consulting', 'fc27c6b2-5f86-407d-8941-5e9e35d17aa4-daftar 1.png', 'Siswanto', 'Kepala Bagian HRD', '085882911826', 'siswanto@gmail.com', '2015-08-24 08:45:06', '2015-08-24 09:20:19'),
(31, 0, '', '', 'PT Bank ANZ Indonesia', 'ANZ Tower, Jl. Jend. Sudirman Kav 33A, Jakarta 10220', '62-21-5750300', '62-21-5750300', 'anz_bank@anz.com', 'http://anz.co.id', 'Banking / Financial Services', 'a9c8325d-e837-4605-b59a-e4f96c5d1795-daftar 2.jpg', 'Franki Steven', 'Staff Management', '62-21-5750300', 'Franki_Stev@anz.com', '2015-08-24 08:49:59', '2015-08-24 08:49:59'),
(32, 0, '', '', 'Sinar Mas Land', 'Sinar Mas Land Plaza BSD, Jl. Grand Boulevard, BSD Green Office Park, BSD City - Tangerang', '62-21-50368368', '62-21-50368368', 'Sinar_masLand@snm.com', 'http://sinarmasland.com', 'Property / Real Estate', '21395d86-4f4d-4e93-9c32-60e16dc1459a-daftar 3.jpg', 'Fransisco', 'Staff HRD', '08622716635', 'fransisco@gmail.com', '2015-08-24 08:54:14', '2015-08-24 08:54:14'),
(33, 0, '', '', 'PT. SUKSES ABADI KARYA INTI', 'Gedung Plaza Mutiara Kuningan Jakarta Selatan', '0271-8822412', '0271-8822412', 'karya_inti@gmail.com', 'http://www.tigapilar.com', 'Consumer Products / FMCG', '5d487afb-1848-4c2f-b001-86ed1c2d9156-daftar 4.jpg', 'Sukirman', 'Staff HRD', '082663577162', 'sukirman@tpsfood.com', '2015-08-24 08:56:52', '2015-08-24 08:56:52'),
(34, 0, '', '', 'PT Cahaya Sakti Multi Intraco (olympic)', 'Jl. Kaum Sari, Kota Bogor, Jawa Barat, Indonesia', '(0251) 8663741 - 44', '(0251) 8663741 - 44', 'multi_intraco@olympic.com', 'http://www.olympicfurniture.co.id/id', 'Manufacturing / Production', 'da0585ed-9754-42ad-9131-55e8f7329cf9-daftar 5.jpg', 'Supraman', 'Staff HRD', '0826637263', 'supraman@olympic.com', '2015-08-24 09:00:16', '2015-08-24 09:00:16'),
(35, 0, '', '', 'PT Graha Technosoft Informatika', 'Jalan Panjang, West Jakarta, DKI Jakarta, Indonesia', '021-5658566', '021-5658566', 'graha_tec@tecnosoft.com', 'http://www.technosoft.com.sg', 'Consulting (IT, Science, Engineering & Technical)', '54427f48-1b02-4a60-a6d0-5aeda23b30b2-daftar 6.jpg', 'suparman', 'Staff HRD', '082663711826', 'suparman@tecnosoft.com', '2015-08-24 09:02:47', '2015-08-24 09:02:47'),
(36, 0, '', '', 'PT Bonecom Servistama Compindo (BOSCO)', 'Jl. Muara Baru Ujung Blok T No. 1 Penjaringan Jakarta Utara 14440', '021-6626688', '021-6626688', 'bonecom_servista@bosco.com', 'http://www.bonecom.co.id', 'General & Wholesale Trading', 'd0862bd3-4b62-447f-9742-ea8f09bcdf8e-daftar 7.jpg', 'Supirman', 'Staff HRD', '082663711524', 'supirman@bonecom.com', '2015-08-24 09:10:07', '2015-08-24 09:10:07'),
(37, 0, '', '', 'PT Asuransi Bintang, Tbk', 'Jl. RS Fatmawati No.32, Cilandak Barat, Jakarta Selatan, DKI Jakarta 12430, Indonesia', '+62 21 75902777', '+62 21 75902777', 'ansuran_bin@bintang.com', 'http://www.asuransibintang.com', 'Insurance', '1f119aba-8a7d-4bb3-bf35-56fe158364cd-daftar 8.png', 'Bintang', 'Staff Management', '0827736447721', 'bintang@bintang.com', '2015-08-24 09:12:39', '2015-08-24 09:12:39'),
(38, 0, '', '', 'PT Menjangan Sakti', 'Gedung Mensa, Jl. HR Rasuna Said Kav. B - 34 - 35, Jakarta 12940', '62-21-5222468', '62-21-5222468', 'mensa@menjangan.com', 'http://mensa-group.com', 'BioTechnology / Pharmaceutical / Clinical research', 'ca27b35b-8554-4b05-8016-1bf2e2c13ed5-daftar 9.png', 'Nopi', 'Staff HRD', '089338277647', 'nopi@menjangan.com', '2015-08-24 09:15:38', '2015-08-24 09:15:38'),
(39, 0, '', '', 'Parastar Distrindo', 'Mangga Dua Plaza Blok E-15 Harco Mangga Dua Jakarta 10730', '021 6505211', '021 6505211', 'parastar@distrindo.com', 'www.distrindo.co.id', 'Telecommunication', '94254a26-a209-4c60-a633-2df1e419b451-daftar 10.jpg', 'Debby', 'Staff HRD', '082773655425', 'punya_debby@parastar.com', '2015-08-24 09:18:11', '2015-08-24 09:18:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Perusahaan'),
(3, 'Alumni'),
(4, 'Staff');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `created`, `modified`) VALUES
(7, 'admin', '$2y$10$fSqsSnyU0UZbRdyYklRQD.c10T/81Q22LPXELXllsdsA4gWGGwbOW', '1', '2015-07-24 02:09:21', '2015-07-24 02:09:21'),
(83, 'eYoBoQe0', '$2y$10$WOq7B9GGj04hJZ18LdhvrOarmTiXyoPvkgyTQvn4lAOnIb7k.5jvm', '2', '2015-08-24 09:20:20', '2015-08-24 09:20:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
