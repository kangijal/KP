-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2019 at 05:50 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ttl` varchar(225) NOT NULL,
  `jabatan` varchar(120) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `warganegara` varchar(20) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `alamat` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`NIP`, `nama`, `ttl`, `jabatan`, `jk`, `agama`, `warganegara`, `nope`, `alamat`) VALUES
('111122333444', 'Dini', 'Jogja 18-01-1986', 'Guru Bahasa Indonesia', 'L', '', '', '087333552222', 'Sleman'),
('111122333454', 'Diki', 'Bantul 29-01-1986', 'Guru IPS', 'L', '', '', '098764446333', 'Sleman'),
('19901210200912031', 'Niko Eriko', 'Sleman 10-12-1990', 'Guru Kelas', 'L', '', '', '089827878268', 'Surobayan Rt 09'),
('19960227201712102', 'Rika Kusumawati', 'Yogyakarta 27-02-1996', 'Guru Kelas', 'L', '', '', '08756576476', 'Perum Jatimas Asri');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `id` int(5) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id`, `hari`) VALUES
(1, 'senin'),
(2, 'selasa'),
(3, 'rabu'),
(4, 'kamis'),
(5, 'jumat'),
(6, 'sabtu');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_pelajaran`
--

CREATE TABLE `jadwal_pelajaran` (
  `id` int(5) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `hari` int(5) NOT NULL,
  `jam` int(5) NOT NULL,
  `nip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal_pelajaran`
--

INSERT INTO `jadwal_pelajaran` (`id`, `id_kelas`, `id_mapel`, `hari`, `jam`, `nip`) VALUES
(1, 1, 3, 1, 1, ''),
(2, 1, 1, 1, 2, ''),
(3, 1, 2, 1, 3, ''),
(4, 1, 2, 1, 4, ''),
(5, 1, 3, 1, 5, ''),
(6, 1, 3, 1, 6, ''),
(7, 1, 7, 1, 7, ''),
(8, 1, 5, 2, 1, ''),
(9, 1, 5, 2, 2, ''),
(10, 1, 5, 2, 3, ''),
(11, 1, 5, 2, 4, ''),
(12, 1, 5, 2, 5, ''),
(13, 1, 4, 2, 6, ''),
(14, 1, 4, 2, 7, ''),
(15, 1, 5, 3, 1, ''),
(16, 1, 5, 3, 2, ''),
(17, 1, 5, 3, 3, ''),
(18, 1, 5, 3, 4, ''),
(19, 1, 5, 3, 5, ''),
(20, 1, 4, 3, 6, ''),
(21, 1, 4, 3, 7, ''),
(22, 1, 5, 4, 1, ''),
(23, 1, 5, 4, 2, ''),
(24, 1, 5, 4, 3, ''),
(25, 1, 5, 4, 4, ''),
(26, 1, 5, 4, 5, ''),
(27, 1, 4, 4, 6, ''),
(28, 1, 4, 4, 7, ''),
(29, 1, 5, 5, 1, ''),
(30, 1, 5, 5, 2, ''),
(31, 1, 5, 5, 3, ''),
(32, 1, 5, 5, 4, ''),
(33, 1, 5, 5, 5, ''),
(34, 1, 4, 5, 6, ''),
(35, 1, 4, 5, 7, ''),
(36, 1, 5, 6, 1, ''),
(37, 1, 5, 6, 2, ''),
(38, 1, 5, 6, 3, ''),
(39, 1, 5, 6, 4, ''),
(40, 1, 5, 6, 5, ''),
(41, 1, 4, 6, 6, ''),
(42, 1, 4, 6, 7, ''),
(43, 2, 4, 1, 1, ''),
(44, 2, 1, 2, 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `id` int(5) NOT NULL,
  `waktu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id`, `waktu`) VALUES
(1, '07.00 - 07.35'),
(2, '07.35 - 08.10'),
(3, '08.10 - 08.45'),
(4, '09.35 - 10.10'),
(5, '10.10 - 10.45'),
(6, '10.45 - 11.20'),
(7, '11.20 - 11.55');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id` int(5) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id`, `nama_mapel`) VALUES
(1, 'Bahasa Indonesia'),
(2, 'Bahasa Inggris'),
(3, 'Bahasa Jawa'),
(4, 'Batik'),
(5, 'Ilmu Pengetahuan Alam'),
(6, 'Ilmu Pengetahuan Sosial'),
(7, 'Matematika'),
(8, 'Pendidikan Agama'),
(9, 'Pendidikan Jasmani, Olahraga, dan Kesehatan'),
(10, 'Pendidikan Kewarganegaraan'),
(11, 'Seni Budaya'),
(12, 'Seni Tari'),
(13, 'Seni Lukis');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `nis` varchar(15) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `id_mapel` int(5) NOT NULL,
  `semester` enum('Ganjil','Genap') NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL,
  `uts` decimal(10,0) NOT NULL,
  `uas` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`nis`, `id_kelas`, `id_mapel`, `semester`, `thn_ajaran`, `uts`, `uas`) VALUES
('12345', 1, 2, 'Ganjil', '', '87', '67'),
('12345', 3, 2, 'Ganjil', '', '67', '76');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `isi`, `tanggal`, `gambar`) VALUES
(8, 'testhhhhh', 'test cobababa', '1970-01-01', 'background.jpg'),
(9, 'blabla', 'blabla', '2019-05-02', 'Picture1.jpg'),
(10, 'cek', 'cek', '2019-05-09', 'fishbone3.png');

-- --------------------------------------------------------

--
-- Table structure for table `profil_siswa`
--

CREATE TABLE `profil_siswa` (
  `nis` int(11) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `p_ayah` varchar(20) NOT NULL,
  `p_ibu` varchar(20) NOT NULL,
  `g_ayah` int(11) NOT NULL,
  `g_ibu` int(11) NOT NULL,
  `pend_ayah` varchar(10) NOT NULL,
  `pend_ibu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_siswa`
--

INSERT INTO `profil_siswa` (`nis`, `ayah`, `ibu`, `p_ayah`, `p_ibu`, `g_ayah`, `g_ibu`, `pend_ayah`, `pend_ibu`) VALUES
(789, '', '', '', '', 0, 0, '', ''),
(12345, 'anto', 'supri', 'buruh', 'irt', 1000000, 0, 'SMP', 'SMP'),
(22331, '', '', '', '', 0, 0, '', ''),
(112222, '', '', '', '', 0, 0, '', ''),
(14876578, '', '', '', '', 0, 0, '', ''),
(146723893, '', '', '', '', 0, 0, '', ''),
(1598623872, '', '', '', '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ruang_kelas`
--

CREATE TABLE `ruang_kelas` (
  `id` int(5) NOT NULL,
  `nama_ruangan` varchar(6) NOT NULL,
  `jumlah_siswa` int(2) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang_kelas`
--

INSERT INTO `ruang_kelas` (`id`, `nama_ruangan`, `jumlah_siswa`, `status`) VALUES
(1, 'I A', 12, 1),
(2, 'I B', 1, 1),
(3, 'II A', 1, 2),
(4, 'II B', 1, 2),
(5, 'III A', 1, 3),
(6, 'III B', 1, 3),
(7, 'IV A', 1, 4),
(8, 'IV B', 1, 4),
(9, 'V A', 1, 5),
(10, 'V B', 1, 5),
(11, 'VI A', 1, 6),
(12, 'VI B', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `th_masuk` varchar(15) NOT NULL,
  `nope` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jk`, `ttl`, `id_kelas`, `th_masuk`, `nope`, `alamat`) VALUES
('0146723893', 'Antoni Saputra', 'L', 'Bantul 15-07-2008', 8, '2014', '08989862789', 'Argodadi'),
('014876578', 'Gwenerero', 'L', 'Sleman 30-12-2009', 2, '2014', '088808080808', 'Argorejo'),
('01598623872', 'Rahmat Badriansyah', 'L', 'Bantul 27-01-2009', 6, '2015', '08978786833', 'Argosari'),
('112222', 'Catur', 'L', 'Jogja 30-12-2008', 4, '2010', '0876664644444', 'bantul'),
('12345', 'Aceng Mutollib', 'L', 'Jogja 29-01-1986', 1, '2014', '087778899999', 'smp'),
('22331', 'nono', 'L', 'Jogja 02-01-2009', 6, '2010', '976663333332', 'Sleman'),
('789', 'Poni', 'L', 'Jogja 18-12-2008', 6, '2012', '098766444', 'bantul');

-- --------------------------------------------------------

--
-- Table structure for table `tugas`
--

CREATE TABLE `tugas` (
  `id` int(5) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `id_kelas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas`
--

INSERT INTO `tugas` (`id`, `deskripsi`, `photo`, `id_kelas`) VALUES
(1, 'Tugas dikumpul Senin 20 Mei 2019\r\nMencari berita kehilangan di koran', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(255) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(10) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `username`, `password`, `level`, `photo`) VALUES
('Antoni Saputra', '0146723893', 'e5b36e2434fb42f18c0e709539c2ffa3', 'siswa', 'fishbone1.png'),
('Gwenerero', '014876578', '18198423dcf168e2fff4618544f6b8a2', 'siswa', 'user42.png'),
('Rahmat Badriansyah', '015986238724', 'af30e53a72d5fb148740cd31972dd56f', 'siswa', 'fishbone3.png'),
('Dini', '111122333444', '8c54075c0a435bd6101abd0589bdb8e2', 'guru', 'Artboard_9@4x.png'),
('Diki', '111122333454', '431c77df35f31fabacd64014bd13fd7c', 'guru', 'dfadfa6.png'),
('Catur', '112222', '6bb00cab07e6495bd5b2b005483dc4bb', 'siswa', 'logo.jpg'),
('Nani', '12222', '6a694fd4f9dea2fa4f19ea62568cb30c', 'siswa', '522_Converted1.png'),
('Aceng', '12345', '431c77df35f31fabacd64014bd13fd7c', 'siswa', '522_Converted.png'),
('Niko Eriko', '19901210200912031', '2c8032c062c5c6d5e77862bff9d750aa', 'guru', 'fishbone2.png'),
('Rika Kusumawati', '19960227201712102', '3466442f1732de7da3e6a1b4c1ad9fa0', 'guru', 'ijazah6.png'),
('nono', '22331', '83114db0c3d783f7aee5b40e50f97c80', 'siswa', '14273.jpg'),
('Poni', '789', '4832b238aae10022505814c7256081c9', 'siswa', 'Panemu1.jpg'),
('Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', ''),
('guru', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru', ''),
('siswa', 'siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa', '');

-- --------------------------------------------------------

--
-- Table structure for table `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `id` int(5) NOT NULL,
  `id_guru` varchar(25) NOT NULL,
  `id_kelas` int(5) NOT NULL,
  `thn_ajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali_kelas`
--

INSERT INTO `wali_kelas` (`id`, `id_guru`, `id_kelas`, `thn_ajaran`) VALUES
(1, '111122333454', 1, '2019-2020'),
(2, '111122333444', 6, '2019-2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jadwal_kode_mapel_mapel` (`id_mapel`),
  ADD KEY `jadwal_kelas_kelas` (`id_kelas`),
  ADD KEY `id_kelas` (`id_kelas`,`id_mapel`),
  ADD KEY `hari` (`hari`,`jam`),
  ADD KEY `jam` (`jam`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD KEY `nik_siswa` (`nis`),
  ADD KEY `kode_mapel` (`id_mapel`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `profil_siswa`
--
ALTER TABLE `profil_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `NIP` (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ruang_kelas`
--
ALTER TABLE `ruang_kelas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal_pelajaran`
--
ALTER TABLE `jadwal_pelajaran`
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id`),
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `ruang_kelas` (`id`),
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_3` FOREIGN KEY (`jam`) REFERENCES `jam` (`id`),
  ADD CONSTRAINT `jadwal_pelajaran_ibfk_4` FOREIGN KEY (`hari`) REFERENCES `hari` (`id`);

--
-- Constraints for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `nilai_siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `ruang_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `wali_kelas_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `ruang_kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
