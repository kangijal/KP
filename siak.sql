-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 08:55 PM
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
('111122333444', 'Dini', 'Jogja 18-01-1986', 'Guru Bahasa Indonesia', 'P', '', '', '087333552222', 'Sleman'),
('111122333454', 'Diki', 'Bantul 29-01-1986', 'Guru IPS', 'L', '', '', '098764446333', 'Sleman'),
('196001301982012006', 'Martina Helena, S. Pd. ', ' 30-01-1960', 'Guru Mapel', 'P', '', '', '', ''),
('196005231981012001', 'Vincentia Ken Tjahjani, S. Pd. SD.', 'Kediri 23-05-1960', 'Guru Kelas', 'P', '', '', '', ''),
('196109081983041003', 'Wajiman, S. Pd.', 'Bantul 08-09-1961', 'Kepsek', 'L', '', '', '', ''),
('196204041984031011', 'Suhartana, S. Pd.', 'Kulon Progo 04-04-1962', 'Guru Mapel', 'L', '', '', '', ''),
('196208051993022002', 'Hartatik, S. Pd.', 'Sleman 05-08-1962', 'Guru Kelas', 'P', '', '', '088', ''),
('196505302019052001', 'Marnani', 'Sleman 30-05-1965', 'Guru Mapel', 'P', '', '', '', ''),
('197108192019052001', 'Sri Wahyuni', 'Sleman 19-08-1971', 'Guru Ekstra', 'P', '', '', '', ''),
('197403241999032003', 'Elis Subartini, S. Pd.', 'Bantul 24-03-1974', 'Guru Kelas', 'P', '', '', '', ''),
('197501262019052001', 'Hasti, S. Ag.', 'Sleman 26-01-1975', 'Guru Mapel', 'P', '', '', '', ''),
('197711202019052001', 'Asri Asiyah, S. Pd.', 'Sleman 20-11-1977', 'Guru Kelas', 'P', '', '', '', ''),
('197801302014062001', 'Siti Nurrohmah, S. Pd.', 'Sleman 30-01-1978', 'Guru Kelas', 'P', '', '', '', ''),
('198309182006042010', 'Ch. Dwi Astuti, S. Pd.', 'Kulon Progo 18-09-1983', 'Guru Kelas', 'P', '', '', '', ''),
('198607202019052001', 'Sarwanta, S. Pd., Jas.', 'Bantul 20-07-1986', 'Guru Ekstra', 'L', '', '', '', ''),
('198805312019052001', 'Yuki Mijayati, M. Hum.', 'Bantul 31-05-1988', 'Guru Ekstra', 'P', '', '', '', ''),
('198903122019052001', 'Amalia Ekawati, S. Pd.', 'Sleman 12-03-1989', 'Guru Kelas', 'P', '', '', '', ''),
('198905052019052001', 'Andrias Susanto', 'Bantul 05-05-1989', 'Tata Usaha', 'L', '', '', '', ''),
('19901210200912031', 'Niko Eriko', 'Sleman 10-12-1990', 'Guru Kelas', 'L', '', '', '089827878268', 'Surobayan Rt 09'),
('199312072019052001', 'Farida Dwi Utami, S. Pd.', 'Sleman 07-12-1993', 'Guru Kelas', 'P', '', '', '', ''),
('199402182019052001', 'Dyah Maya Rikawati, S. Pd. ', 'Bantul 18-02-1994', 'Guru Kelas', 'P', '', '', '', ''),
('19960227201712102', 'Rika Kusumawati', 'Yogyakarta 27-02-1996', 'Guru Kelas', 'P', '', '', '08756576476', 'Perum Jatimas Asri');

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
  `id` int(11) NOT NULL,
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

INSERT INTO `nilai_siswa` (`id`, `nis`, `id_kelas`, `id_mapel`, `semester`, `thn_ajaran`, `uts`, `uas`) VALUES
(1, '12345', 1, 2, 'Ganjil', '', '87', '67'),
(2, '12345', 3, 2, 'Ganjil', '', '67', '76');

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
(39632775, '', '', '', '', 0, 0, '', ''),
(51345297, '', '', '', '', 0, 0, '', ''),
(53629203, '', '', '', '', 0, 0, '', ''),
(68784096, '', '', '', '', 0, 0, '', ''),
(69447823, '', '', '', '', 0, 0, '', ''),
(71414504, '', '', '', '', 0, 0, '', ''),
(71524241, '', '', '', '', 0, 0, '', ''),
(71650088, '', '', '', '', 0, 0, '', ''),
(72104912, '', '', '', '', 0, 0, '', ''),
(72434828, '', '', '', '', 0, 0, '', ''),
(72436504, '', '', '', '', 0, 0, '', ''),
(72553119, '', '', '', '', 0, 0, '', ''),
(72945080, '', '', '', '', 0, 0, '', ''),
(72976951, '', '', '', '', 0, 0, '', ''),
(73023338, '', '', '', '', 0, 0, '', ''),
(73179604, '', '', '', '', 0, 0, '', ''),
(73452359, '', '', '', '', 0, 0, '', ''),
(73745447, '', '', '', '', 0, 0, '', ''),
(75187003, '', '', '', '', 0, 0, '', ''),
(75434841, '', '', '', '', 0, 0, '', ''),
(75991352, '', '', '', '', 0, 0, '', ''),
(76164030, '', '', '', '', 0, 0, '', ''),
(76187083, '', '', '', '', 0, 0, '', ''),
(76230404, '', '', '', '', 0, 0, '', ''),
(76887524, '', '', '', '', 0, 0, '', ''),
(77440162, '', '', '', '', 0, 0, '', ''),
(77657374, '', '', '', '', 0, 0, '', ''),
(77658744, '', '', '', '', 0, 0, '', ''),
(77842798, '', '', '', '', 0, 0, '', ''),
(78022549, '', '', '', '', 0, 0, '', ''),
(78114870, '', '', '', '', 0, 0, '', ''),
(78264862, '', '', '', '', 0, 0, '', ''),
(78468976, '', '', '', '', 0, 0, '', ''),
(78515056, '', '', '', '', 0, 0, '', ''),
(81217356, '', '', '', '', 0, 0, '', ''),
(81463441, '', '', '', '', 0, 0, '', ''),
(81496366, '', '', '', '', 0, 0, '', ''),
(81703314, '', '', '', '', 0, 0, '', ''),
(81997418, '', '', '', '', 0, 0, '', ''),
(82056715, '', '', '', '', 0, 0, '', ''),
(82338584, '', '', '', '', 0, 0, '', ''),
(82441329, '', '', '', '', 0, 0, '', ''),
(82507511, '', '', '', '', 0, 0, '', ''),
(82695354, '', '', '', '', 0, 0, '', ''),
(82723577, '', '', '', '', 0, 0, '', ''),
(83096400, '', '', '', '', 0, 0, '', ''),
(83210630, '', '', '', '', 0, 0, '', ''),
(83450257, '', '', '', '', 0, 0, '', ''),
(83697205, '', '', '', '', 0, 0, '', ''),
(83753548, '', '', '', '', 0, 0, '', ''),
(84559659, '', '', '', '', 0, 0, '', ''),
(84573900, '', '', '', '', 0, 0, '', ''),
(84603792, '', '', '', '', 0, 0, '', ''),
(84879896, '', '', '', '', 0, 0, '', ''),
(84883497, '', '', '', '', 0, 0, '', ''),
(85031611, '', '', '', '', 0, 0, '', ''),
(85108536, '', '', '', '', 0, 0, '', ''),
(85401109, '', '', '', '', 0, 0, '', ''),
(85401645, '', '', '', '', 0, 0, '', ''),
(85548211, '', '', '', '', 0, 0, '', ''),
(85754648, '', '', '', '', 0, 0, '', ''),
(85801586, '', '', '', '', 0, 0, '', ''),
(86003698, '', '', '', '', 0, 0, '', ''),
(86268355, '', '', '', '', 0, 0, '', ''),
(86311709, '', '', '', '', 0, 0, '', ''),
(86417750, '', '', '', '', 0, 0, '', ''),
(86756647, '', '', '', '', 0, 0, '', ''),
(86963150, '', '', '', '', 0, 0, '', ''),
(87559952, '', '', '', '', 0, 0, '', ''),
(87666450, '', '', '', '', 0, 0, '', ''),
(88019401, '', '', '', '', 0, 0, '', ''),
(88275621, '', '', '', '', 0, 0, '', ''),
(88625037, '', '', '', '', 0, 0, '', ''),
(89097325, '', '', '', '', 0, 0, '', ''),
(89411757, '', '', '', '', 0, 0, '', ''),
(89414833, '', '', '', '', 0, 0, '', ''),
(89610997, '', '', '', '', 0, 0, '', ''),
(89844135, '', '', '', '', 0, 0, '', ''),
(89960419, '', '', '', '', 0, 0, '', ''),
(91576006, '', '', '', '', 0, 0, '', ''),
(91671608, '', '', '', '', 0, 0, '', ''),
(91709001, '', '', '', '', 0, 0, '', ''),
(91912133, '', '', '', '', 0, 0, '', ''),
(92111712, '', '', '', '', 0, 0, '', ''),
(92193280, '', '', '', '', 0, 0, '', ''),
(92213964, '', '', '', '', 0, 0, '', ''),
(92249308, '', '', '', '', 0, 0, '', ''),
(92405360, '', '', '', '', 0, 0, '', ''),
(92429917, '', '', '', '', 0, 0, '', ''),
(92536695, '', '', '', '', 0, 0, '', ''),
(93158026, '', '', '', '', 0, 0, '', ''),
(93594348, '', '', '', '', 0, 0, '', ''),
(94989580, '', '', '', '', 0, 0, '', ''),
(95097910, '', '', '', '', 0, 0, '', ''),
(95320346, '', '', '', '', 0, 0, '', ''),
(95405486, '', '', '', '', 0, 0, '', ''),
(96477917, '', '', '', '', 0, 0, '', ''),
(96552169, '', '', '', '', 0, 0, '', ''),
(97033160, '', '', '', '', 0, 0, '', ''),
(97273142, '', '', '', '', 0, 0, '', ''),
(97296782, '', '', '', '', 0, 0, '', ''),
(97401186, '', '', '', '', 0, 0, '', ''),
(97438372, '', '', '', '', 0, 0, '', ''),
(97654468, '', '', '', '', 0, 0, '', ''),
(97661517, '', '', '', '', 0, 0, '', ''),
(97873426, '', '', '', '', 0, 0, '', ''),
(98055907, '', '', '', '', 0, 0, '', ''),
(98274377, '', '', '', '', 0, 0, '', ''),
(98404535, '', '', '', '', 0, 0, '', ''),
(98420022, '', '', '', '', 0, 0, '', ''),
(99503692, '', '', '', '', 0, 0, '', ''),
(101162430, '', '', '', '', 0, 0, '', ''),
(101407377, '', '', '', '', 0, 0, '', ''),
(102947120, '', '', '', '', 0, 0, '', ''),
(103397252, '', '', '', '', 0, 0, '', ''),
(104078895, '', '', '', '', 0, 0, '', ''),
(104690075, '', '', '', '', 0, 0, '', ''),
(104690744, '', '', '', '', 0, 0, '', ''),
(104863476, '', '', '', '', 0, 0, '', ''),
(105348031, '', '', '', '', 0, 0, '', ''),
(105627817, '', '', '', '', 0, 0, '', ''),
(105660076, '', '', '', '', 0, 0, '', ''),
(105700442, '', '', '', '', 0, 0, '', ''),
(105929737, '', '', '', '', 0, 0, '', ''),
(106050191, '', '', '', '', 0, 0, '', ''),
(106530032, '', '', '', '', 0, 0, '', ''),
(106911412, '', '', '', '', 0, 0, '', ''),
(107701054, '', '', '', '', 0, 0, '', ''),
(107811752, '', '', '', '', 0, 0, '', ''),
(107813945, '', '', '', '', 0, 0, '', ''),
(108310329, '', '', '', '', 0, 0, '', ''),
(108617021, '', '', '', '', 0, 0, '', ''),
(108720043, '', '', '', '', 0, 0, '', ''),
(108765251, '', '', '', '', 0, 0, '', ''),
(108904551, '', '', '', '', 0, 0, '', ''),
(109063911, '', '', '', '', 0, 0, '', ''),
(109215981, '', '', '', '', 0, 0, '', ''),
(109398763, '', '', '', '', 0, 0, '', ''),
(109440470, '', '', '', '', 0, 0, '', ''),
(109519326, '', '', '', '', 0, 0, '', ''),
(109668333, '', '', '', '', 0, 0, '', ''),
(109735857, '', '', '', '', 0, 0, '', ''),
(109779597, '', '', '', '', 0, 0, '', ''),
(111356014, '', '', '', '', 0, 0, '', ''),
(111468881, '', '', '', '', 0, 0, '', ''),
(112378362, '', '', '', '', 0, 0, '', ''),
(112986041, '', '', '', '', 0, 0, '', ''),
(113444816, '', '', '', '', 0, 0, '', ''),
(113502009, '', '', '', '', 0, 0, '', ''),
(113920716, '', '', '', '', 0, 0, '', ''),
(113949941, '', '', '', '', 0, 0, '', ''),
(114204092, '', '', '', '', 0, 0, '', ''),
(114273292, '', '', '', '', 0, 0, '', ''),
(114470702, '', '', '', '', 0, 0, '', ''),
(114493050, '', '', '', '', 0, 0, '', ''),
(114664105, '', '', '', '', 0, 0, '', ''),
(114924108, '', '', '', '', 0, 0, '', ''),
(115233816, '', '', '', '', 0, 0, '', ''),
(115456630, '', '', '', '', 0, 0, '', ''),
(115494314, '', '', '', '', 0, 0, '', ''),
(115621738, '', '', '', '', 0, 0, '', ''),
(115629622, '', '', '', '', 0, 0, '', ''),
(115729079, '', '', '', '', 0, 0, '', ''),
(116063552, '', '', '', '', 0, 0, '', ''),
(116188888, '', '', '', '', 0, 0, '', ''),
(116221677, '', '', '', '', 0, 0, '', ''),
(116493358, '', '', '', '', 0, 0, '', ''),
(116596294, '', '', '', '', 0, 0, '', ''),
(116673129, '', '', '', '', 0, 0, '', ''),
(116840260, '', '', '', '', 0, 0, '', ''),
(116971508, '', '', '', '', 0, 0, '', ''),
(117385020, '', '', '', '', 0, 0, '', ''),
(117735892, '', '', '', '', 0, 0, '', ''),
(118130529, '', '', '', '', 0, 0, '', ''),
(118241265, '', '', '', '', 0, 0, '', ''),
(118453395, '', '', '', '', 0, 0, '', ''),
(118914593, '', '', '', '', 0, 0, '', ''),
(119807028, '', '', '', '', 0, 0, '', ''),
(121090127, '', '', '', '', 0, 0, '', ''),
(121759199, '', '', '', '', 0, 0, '', ''),
(122512906, '', '', '', '', 0, 0, '', ''),
(122580451, '', '', '', '', 0, 0, '', ''),
(123008471, '', '', '', '', 0, 0, '', ''),
(123290717, '', '', '', '', 0, 0, '', ''),
(123801119, '', '', '', '', 0, 0, '', ''),
(124753679, '', '', '', '', 0, 0, '', ''),
(124759068, '', '', '', '', 0, 0, '', ''),
(124813794, '', '', '', '', 0, 0, '', ''),
(125188371, '', '', '', '', 0, 0, '', ''),
(125547644, '', '', '', '', 0, 0, '', ''),
(125633329, '', '', '', '', 0, 0, '', ''),
(126558625, '', '', '', '', 0, 0, '', ''),
(127771329, '', '', '', '', 0, 0, '', ''),
(128138686, '', '', '', '', 0, 0, '', ''),
(128940790, '', '', '', '', 0, 0, '', ''),
(129669114, '', '', '', '', 0, 0, '', ''),
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
  `nama` varchar(50) NOT NULL,
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
('0039632775', 'Atha Rafie', 'L', ' ', 9, '2014', '', ''),
('0051345297', 'Nuva Riyanto', 'L', ' ', 9, '2014', '', ''),
('0053629203', 'Andriyono', 'L', ' ', 9, '2012', '', ''),
('0068784096', 'Nur Andi', 'L', ' ', 10, '2014', '', ''),
('0069447823', 'Arfin Radit Prasetya', 'L', ' ', 9, '2013', '', ''),
('0071414504', 'Mega Fauzia Sefa', 'P', ' ', 9, '2014', '', ''),
('0071524241', 'Ashil Zaky Nurcahyo', 'L', ' ', 10, '2014', '', ''),
('0071650088', 'Ivanado Ezra Pradipta', 'L', ' ', 9, '2014', '', ''),
('0072104912', 'Vincent Darrell Arfandi', 'L', ' ', 8, '2015', '', ''),
('0072434828', 'Widyaningtyas', 'P', ' ', 10, '2014', '', ''),
('0072436504', 'Rezal Fauzi', 'L', ' ', 7, '2015', '', ''),
('0072553119', 'Nayla Pingka Riandina', 'P', ' ', 10, '2014', '', ''),
('0072945080', 'Ardhika Dwi Yudha Saputra', 'L', ' ', 10, '2014', '', ''),
('0072976951', 'Bahrur Rosyidul Haqqi', 'L', ' ', 10, '2014', '', ''),
('0073023338', 'Widi Setyaningsih', 'P', ' ', 9, '2014', '', ''),
('0073179604', 'Ar Rahma Intan', 'P', ' ', 10, '2014', '', ''),
('0073452359', 'Candra Muhammad Rizqi', 'L', ' ', 9, '2014', '', ''),
('0073745447', 'Anggraeni Puspitasari', 'P', ' ', 9, '2014', '', ''),
('0075187003', 'Nicolla Paganini', 'P', ' ', 9, '2014', '', ''),
('0075434841', 'Rasendriya Alva Pradana', 'L', ' ', 10, '2014', '', ''),
('0075991352', 'Akbar Prastio', 'L', ' ', 10, '2014', '', ''),
('0076164030', 'Muhammad Irsyad Syarief', 'L', ' ', 10, '2014', '', ''),
('0076187083', 'Fajar Zuliana Safitri', 'P', ' ', 9, '2014', '', ''),
('0076230404', 'Nuria Akbar Danurdara', 'L', ' ', 10, '2014', '', ''),
('0076887524', 'Nawa Sandria Malakiano', 'P', ' ', 9, '2014', '', ''),
('0077440162', 'Anggun Puspita Sari', 'P', ' ', 10, '2014', '', ''),
('0077657374', 'Keysha Ardian Allfani', 'P', ' ', 9, '2014', '', ''),
('0077658744', 'Herfino Abi Marlon', 'L', ' ', 9, '2014', '', ''),
('0077842798', 'Okta Diana Nazalia', 'P', ' ', 9, '2014', '', ''),
('0078022549', 'Elsya Vinantasya Agustin', 'P', ' ', 10, '2014', '', ''),
('0078114870', 'Amna Septiani Linailil Azizah', 'P', ' ', 9, '2014', '', ''),
('0078264862', 'Salvia Nur Ihsani', 'P', ' ', 9, '2014', '', ''),
('0078468976', 'Rasya Ananda Putra', 'L', ' ', 9, '2014', '', ''),
('0078515056', 'Elin Setia Aji Hayati', 'P', ' ', 9, '2014', '', ''),
('0081217356', 'Fandhan Maulana Adrian', 'L', ' ', 8, '2015', '', ''),
('0081463441', 'Zaskia Dwi Rahmawati', 'P', ' ', 9, '2014', '', ''),
('0081496366', 'Ocha Alesia', 'P', ' ', 9, '2014', '', ''),
('0081703314', 'Galih Amra Fattachry', 'L', ' ', 10, '2014', '', ''),
('0081997418', 'Hasna Putri Oktariani', 'P', ' ', 7, '2015', '', ''),
('0082056715', 'Syifa Febrianti', 'P', ' ', 10, '2014', '', ''),
('0082338584', 'Leon Alfarel Pramayudha', 'L', ' ', 9, '2014', '', ''),
('0082441329', 'Seisha Neea Chandra', 'P', ' ', 8, '2015', '', ''),
('0082507511', 'Narendra Phaksi Vito Radytha', 'L', ' ', 8, '2015', '', ''),
('0082695354', 'Indriana Ayu Sawastika', 'P', ' ', 7, '2015', '', ''),
('0082723577', 'Wisnu Garindra Pratama', 'L', ' ', 8, '2015', '', ''),
('0083096400', 'Muchammad A\'zan Ringgo Syahputra', 'L', ' ', 7, '2015', '', ''),
('0083210630', 'Wahib Prasetyo', 'L', ' ', 7, '2015', '', ''),
('0083450257', 'Sakha Nayra', 'P', ' ', 8, '2015', '', ''),
('0083697205', 'Dhea Erlynda', 'P', ' ', 9, '2014', '', ''),
('0083753548', 'Wendy Arya Pratama', 'L', ' ', 8, '2015', '', ''),
('0084559659', 'Januarianto', 'L', ' ', 8, '2015', '', ''),
('0084573900', 'Kheyla Punditya Nugroho', 'P', ' ', 10, '2014', '', ''),
('0084603792', 'Putri Nadelia Arifiani', 'P', ' ', 8, '2015', '', ''),
('0084879896', 'Kharisa Naya Intan Khirani', 'P', ' ', 8, '2015', '', ''),
('0084883497', 'Iviana Larasati', 'P', ' ', 8, '2015', '', ''),
('0085031611', 'Alma Fitri Lestari', 'P', ' ', 8, '2015', '', ''),
('0085108536', 'Veilician Eren Venianto', 'L', ' ', 7, '2015', '', ''),
('0085401109', 'Arkyan Henda Hafidz Stiyawan', 'L', ' ', 7, '2015', '', ''),
('0085401645', 'Muhammad Fachri', 'L', ' ', 9, '2014', '', ''),
('0085548211', 'Patrisia Candika Milliandari', '', ' ', 0, '2014', '', ''),
('0085754648', 'Restu Janua Kesya Setya Amir Razak', 'P', ' ', 10, '2014', '', ''),
('0085801586', 'Amanda Artalia Puspitasari', 'P', ' ', 7, '2015', '', ''),
('0086003698', 'Fatimah Atika Syahr Banu', 'P', ' ', 10, '2014', '', ''),
('0086268355', 'Jovanda Amalia Adyaputri', 'P', ' ', 7, '2015', '', ''),
('0086311709', 'Deni Apriansyah', 'L', ' ', 7, '2015', '', ''),
('0086417750', 'Farrel Dian Sulistyo', 'L', ' ', 10, '2014', '', ''),
('0086756647', 'Riffa Dwi Anjaeni', 'P', ' ', 7, '2015', '', ''),
('0086963150', 'Muhammad Faisal Alfaridzi', 'L', ' ', 7, '2015', '', ''),
('0087559952', 'Muhammad Shobirin Pratama', 'L', ' ', 10, '2014', '', ''),
('0087666450', 'Doriel Ekaraditya Quaresma', 'L', ' ', 7, '2015', '', ''),
('0088019401', 'Arini Tri Rahma', 'P', ' ', 7, '2015', '', ''),
('0088275621', 'Nasywa Raya Priyadi', 'P', ' ', 8, '2015', '', ''),
('0088625037', 'Muhamad Arif Hidayat', 'L', ' ', 10, '2014', '', ''),
('0089097325', 'Anysa Nur Wijayanti', 'P', ' ', 9, '2014', '', ''),
('0089411757', 'Azhar Mutiara Mufida', 'P', ' ', 7, '2015', '', ''),
('0089414833', 'Qonita Noverinda Saputri', 'P', ' ', 8, '2015', '', ''),
('0089610997', 'Devi Anjasmoro', 'P', ' ', 7, '2015', '', ''),
('0089844135', 'Defanda Atharafi Putra Zuka', 'L', ' ', 10, '2014', '', ''),
('0089960419', 'Alfaridho Ramadan Afinza', 'L', ' ', 7, '2016', '', ''),
('0091576006', 'Rafeyfa Fadila Meysun', 'P', ' ', 7, '2015', '', ''),
('0091671608', 'Norma Liawati', 'P', ' ', 7, '2015', '', ''),
('0091709001', 'Almira Asfa Hani', 'P', ' ', 7, '2015', '', ''),
('0091912133', 'Muhammad Fatih Fahrisalam', 'L', ' ', 8, '2015', '', ''),
('0092111712', 'Citra Larasati', 'P', ' ', 8, '2015', '', ''),
('0092193280', 'Diamas Rakha Putra', 'L', ' ', 5, '2016', '', ''),
('0092213964', 'Abimanyu Satya Mahacara', 'L', ' ', 5, '2016', '', ''),
('0092249308', 'Alifa Putri Noviani', 'P', ' ', 5, '2016', '', ''),
('0092405360', 'Regzanathan Yafi Winarno', 'L', ' ', 8, '2015', '', ''),
('0092429917', 'Latifah Nur Azizah ', 'P', ' ', 5, '2016', '', ''),
('0092536695', 'Roffi Yashira Nur Idhar', 'L', ' ', 5, '2016', '', ''),
('0093158026', 'Fitri Adi Syaputra', 'L', ' ', 5, '2016', '', ''),
('0093594348', 'Joel Leonard Susanto', 'L', ' ', 5, '2016', '', ''),
('0094989580', 'Sifa Kirana Putri', 'P', ' ', 5, '2016', '', ''),
('0095097910', 'Muhammad Ilham Dhiyaa Ul Haq', 'L', ' ', 5, '2016', '', ''),
('0095320346', 'Raffa Putra Surya Radiva', 'L', ' ', 8, '2015', '', ''),
('0095405486', 'Arif Fahrudin', 'L', ' ', 5, '2016', '', ''),
('0096477917', 'Arkan Rizaldy Prasetyo', 'L', ' ', 5, '2016', '', ''),
('0096552169', 'Cahya Kurnia Larasti', 'P', ' ', 5, '2016', '', ''),
('0097033160', 'Angellita Indah Cahyani', 'P', ' ', 8, '2015', '', ''),
('0097273142', 'Lutfian Aditya Atha S ', 'L', ' ', 5, '2016', '', ''),
('0097296782', 'Celfia Nurotul Aini', 'P', ' ', 5, '2016', '', ''),
('0097401186', 'Muhammad Rasyid Novianto', 'L', ' ', 5, '2016', '', ''),
('0097438372', 'Zidan Aghshan Aravega', 'L', ' ', 5, '2016', '', ''),
('0097654468', 'Herlino Galeh Wicaksono', 'L', ' ', 5, '2016', '', ''),
('0097661517', 'Chantika Caesariyana', 'P', ' ', 7, '2015', '', ''),
('0097873426', 'Adliansyah Dyan Satriatama', 'L', ' ', 5, '2016', '', ''),
('0098055907', 'Aisyah Dafa Pradita', 'P', ' ', 5, '2016', '', ''),
('0098274377', 'Apuila Sasuke Alamanda Juno', 'L', ' ', 5, '2016', '', ''),
('0098404535', 'Alfarenza Purnama Putra', 'L', ' ', 5, '2017', '', ''),
('0098420022', 'Wanda Cintya Sari', 'P', ' ', 5, '2016', '', ''),
('0099503692', 'Zahra Putri Amelia', 'P', ' ', 8, '2015', '', ''),
('0101162430', 'Herlambang Putra Pamungkas', 'L', ' ', 3, '2017', '', ''),
('0101407377', 'Bihal Erta Aditya', 'L', ' ', 5, '2016', '', ''),
('0102947120', 'Farhan Isthafa', 'L', ' ', 3, '2017', '', ''),
('0103397252', 'Hafid Nur Qolis', 'L', ' ', 5, '2016', '', ''),
('0104078895', 'Sagita Nawanda Hutami', 'P', ' ', 3, '2017', '', ''),
('0104690075', 'Raditya Farid Hermansyah', 'L', ' ', 5, '2016', '', ''),
('0104690744', 'Bulan Jingga Maharani', 'P', ' ', 5, '2016', '', ''),
('0104863476', 'Choirul Adzan Ramadhan', 'L', ' ', 3, '2017', '', ''),
('0105348031', 'Rakha Setyawan', 'L', ' ', 3, '2017', '', ''),
('0105627817', 'Agel Saptoaji', 'L', ' ', 2, '2018', '', ''),
('0105660076', 'Ega Putra Nurizqi', 'L', ' ', 3, '2017', '', ''),
('0105700442', 'Raisya Putri Azzahra', 'P', ' ', 3, '2017', '', ''),
('0105929737', 'Yaya Mavita Uliani', 'P', ' ', 3, '2017', '', ''),
('0106050191', 'Zivana Cynthia Febrinsa', 'P', ' ', 5, '2016', '', ''),
('0106530032', 'Ahlan Nauvakerill Fidel', 'L', ' ', 5, '2016', '', ''),
('0106911412', 'Nashhah Uvaira Valerie Awathif', 'P', ' ', 5, '2016', '', ''),
('0107701054', 'Ivander Joshua Alston Radytha', 'L', ' ', 3, '2017', '', ''),
('0107811752', 'Anindya Andi Kusuma', 'P', ' ', 3, '2017', '', ''),
('0107813945', 'Laili Manda Priyadi', 'P', ' ', 3, '2017', '', ''),
('0108310329', 'Eka Aprillia Putri', 'P', ' ', 3, '2017', '', ''),
('0108617021', 'Revalina Luthfi Mulativia', 'P', ' ', 5, '2016', '', ''),
('0108720043', 'Danish Muhammad Fakhri', 'L', ' ', 3, '2017', '', ''),
('0108765251', 'Fulvia Novaliza Putri', 'P', ' ', 3, '2017', '', ''),
('0108904551', 'Yasmin Aurelia Aqilla Syafa', 'P', ' ', 5, '2016', '', ''),
('0109063911', 'Safa Khoirunnisa', 'P', ' ', 3, '2017', '', ''),
('0109215981', 'Ahmad Hanifan', 'L', ' ', 3, '2017', '', ''),
('0109398763', 'Lemnya Sayiddina', 'P', ' ', 5, '2016', '', ''),
('0109440470', 'Shalahudin Saka Sangkara', 'L', ' ', 3, '2017', '', ''),
('0109519326', 'Hana Septi Khairunnisa Priyanto', 'P', ' ', 3, '2017', '', ''),
('0109668333', 'Reina Eka Widiyawati', 'P', ' ', 3, '2017', '', ''),
('0109735857', 'Ihsan Arya Adinata', 'L', ' ', 3, '2017', '', ''),
('0109779597', 'Sutan Ibrahim Alhasdi', 'P', ' ', 3, '2017', '', ''),
('0111356014', 'Ridwan Zaii Abidin', 'L', ' ', 3, '2017', '', ''),
('0111468881', 'Rio Syafiq Fahrian', 'L', ' ', 1, '2018', '', ''),
('0112378362', 'Chaerunisa Riyadi', 'P', ' ', 1, '2018', '', ''),
('0112986041', 'Maria Risna Dwithalia', 'P', ' ', 3, '2017', '', ''),
('0113444816', 'Nabila Fitri Fadlilah', 'P', ' ', 2, '2018', '', ''),
('0113502009', 'Vianifa Kheyzha Putri Ayudewi', 'P', ' ', 1, '2018', '', ''),
('0113920716', 'Wiliam Surya Chandra', 'L', ' ', 2, '2018', '', ''),
('0113949941', 'Danish Azka Rafandra', 'L', ' ', 2, '2018', '', ''),
('0114204092', 'Ridwan Maulana', 'L', ' ', 1, '2018', '', ''),
('0114273292', 'Safa Aulia Khunsa', 'P', ' ', 1, '2018', '', ''),
('0114470702', 'Azra Azana Putra Rahmadillah', 'L', ' ', 1, '2018', '', ''),
('0114493050', 'Ach Fasihul Lisan ', 'L', ' ', 2, '2018', '', ''),
('0114664105', 'Citra Dewi Muhdir', 'P', ' ', 2, '2018', '', ''),
('0114924108', 'Adzriel Fadhil Alfareza', 'L', ' ', 2, '2018', '', ''),
('0115233816', 'Akhmad Prima Nur Rohim', 'L', ' ', 3, '2017', '', ''),
('0115456630', 'Achmad Mustofa Ramadhani', 'L', ' ', 1, '2018', '', ''),
('0115494314', 'Ahmad Dhani Syaifudin', 'L', ' ', 1, '2018', '', ''),
('0115621738', 'Ghizel Yahnas Fahreza', 'L', ' ', 1, '2018', '', ''),
('0115629622', 'Miftah Reyhana Pratama', 'L', ' ', 3, '2017', '', ''),
('0115729079', 'Syahril Anwar Syafi\'i', 'L', ' ', 2, '2018', '', ''),
('0116063552', 'Rhino Fabyand', 'L', ' ', 3, '2017', '', ''),
('0116188888', 'Erina Janeta', 'P', ' ', 1, '2018', '', ''),
('0116221677', 'Citra Oliviesya Putri Nirinda', 'P', ' ', 3, '2017', '', ''),
('0116493358', 'Muhammad Luthfi Afandi', 'L', ' ', 3, '2017', '', ''),
('0116596294', 'Rizkya Putri Tama', 'P', ' ', 3, '2017', '', ''),
('0116673129', 'Dea Ayu Natasha Putri', 'P', ' ', 2, '2018', '', ''),
('0116840260', 'Ikmal Naisha Fauziyah', 'P', ' ', 1, '2018', '', ''),
('0116971508', 'Adeka Nur Firdaningsih', 'P', ' ', 2, '2018', '', ''),
('0117385020', 'Nur Rohmat Ridho Jati', 'L', ' ', 2, '2018', '', ''),
('0117735892', 'Muhammad Alfito Ammar Maulana', 'L', ' ', 1, '2018', '', ''),
('0118130529', 'Silvi Emilia Geovanny', 'P', ' ', 1, '2018', '', ''),
('0118241265', 'Rifa Eka Nur Hanifah', 'P', ' ', 1, '2018', '', ''),
('0118453395', 'Keisya Ayu Oktaviana', 'P', ' ', 1, '2018', '', ''),
('0118914593', 'Bima Lintang Pradana', 'L', ' ', 2, '2018', '', ''),
('0119807028', 'Noffita Eka Sarie', 'P', ' ', 2, '2018', '', ''),
('0121090127', 'Diera Ayu Aldeana Ardani', 'P', ' ', 2, '2018', '', ''),
('0121759199', 'Vania Hanggara Pertiwi', 'P', ' ', 2, '2018', '', ''),
('0122512906', 'Aqila Raka Alvaro', 'L', ' ', 2, '2018', '', ''),
('0122580451', 'Farhat Mardani', 'L', ' ', 1, '2018', '', ''),
('0123008471', 'Akbar Woro Dumadi', 'L', ' ', 2, '2018', '', ''),
('0123290717', 'Andra Almas Anjasmoro', 'L', ' ', 2, '2018', '', ''),
('0123801119', 'Aima Pramudia Wati', 'P', ' ', 1, '2018', '', ''),
('0124753679', 'Sekarayu Roullatama Putri', 'P', ' ', 2, '2018', '', ''),
('0124759068', 'Arya Bryan Kurniawan', 'L', ' ', 1, '2018', '', ''),
('0124813794', 'Solehatun Qur\'aini An Na\'im', 'P', ' ', 2, '2018', '', ''),
('0125188371', 'Alexis Marley Derio Rahardjo', 'L', ' ', 2, '2018', '', ''),
('0125547644', 'Intan Nirmala Sari', 'P', ' ', 1, '2018', '', ''),
('0125633329', 'Vike Alfindra Dwi Yuliani', 'P', ' ', 2, '2018', '', ''),
('0126558625', 'Andra Putra Irawan', 'L', ' ', 1, '2018', '', ''),
('0127771329', 'Nurul Asifa', 'P', ' ', 1, '2018', '', ''),
('0128138686', 'Naila Azzahra', 'P', ' ', 1, '2018', '', ''),
('0128940790', 'Aulia Rizqi Agung', 'P', ' ', 1, '2018', '', ''),
('0129669114', 'Bagus Raihan Khoirul Anam', 'L', ' ', 1, '2018', '', ''),
('0146723893', 'Antoni Saputra', 'L', 'Bantul 15-07-2008', 8, '2014', '08989862789', 'Argodadi'),
('014876578', 'Gwenerero', 'L', 'Sleman 30-12-2009', 2, '2014', '088808080808', 'Argorejo'),
('01598623872', 'Rahmat Badriansyah', 'L', 'Bantul 27-01-2009', 6, '2015', '08978786833', 'Argosari'),
('112222', 'Catur', 'L', 'Jogja 30-12-2008', 4, '2010', '0876664644444', 'bantul'),
('12345', 'Aceng Mutollib', 'L', 'Jogja 29-01-1986', 1, '2014', '087778899999', 'smp'),
('22331', 'nono', 'L', 'Jogja 02-01-2009', 6, '2010', '976663333332', 'Sleman');

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
(1, 'Tugas dikumpul Senin 20 Mei 2019\r\nMencari berita kehilangan di koran', '', 1),
(2, 'tes', 'project-8.jpg', 5);

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
('Atha Rafie', '0039632775', 'fbd67a444ee0a81cfbf8fdb3432c7fe9', 'siswa', 'guestduo77.png'),
('Nuva Riyanto', '0051345297', '3da55118bd44c9ac239caa96f827c74f', 'siswa', 'guestduo90.png'),
('Andriyono', '0053629203', '459d4d714f6bf7d9db5ad8c6cc89aa13', 'siswa', 'guestduo73.png'),
('Nur Andi', '0068784096', '66aecd3791012beffb791b85a0cc93e0', 'siswa', 'guesttrio13.png'),
('Arfin Radit Prasetya', '0069447823', '7fc3c511bb9d124c782a870fb07a5a61', 'siswa', 'guestduo76.png'),
('Mega Fauzia Sefa', '0071414504', '94e18aae170e55b15201e07aba3df52b', 'siswa', 'guestduo86.png'),
('Ashil Zaky Nurcahyo', '0071524241', '1a1edb03b6b2ebc70b56ca782457582b', 'siswa', 'guesttrio1.png'),
('Ivanado Ezra Pradipta', '0071650088', '1ae86dc67443ec7ccd285ebf905c997a', 'siswa', 'guestduo83.png'),
('Vincent Darrell Arfandi', '0072104912', 'a88ae9e68edbb7740f54673f0902891a', 'siswa', 'guestduo68.png'),
('Widyaningtyas', '0072434828', '1aaa56ad589bb3353520189549380f8c', 'siswa', 'guesttrio19.png'),
('Rezal Fauzi', '0072436504', 'dd7a8b5f461ef3d50b23157dee1b6ab2', 'siswa', 'guestduo48.png'),
('Nayla Pingka Riandina', '0072553119', 'c8a03e24ec697c0abc173c5d4df064a9', 'siswa', 'guesttrio12.png'),
('Ardhika Dwi Yudha Saputra', '0072945080', 'f1ad84ce80c52a87e638b6116b760a6e', 'siswa', 'guesttrio.png'),
('Bahrur Rosyidul Haqqi', '0072976951', 'ea0e52b30b0c4f7b4de507c0ab286769', 'siswa', 'guesttrio2.png'),
('Widi Setyaningsih', '0073023338', '5b6e6eb132578aba874c170af82840a9', 'siswa', 'guestduo95.png'),
('Ar Rahma Intan', '0073179604', '3aa4f2aaefbb618b4887d8a998596f70', 'siswa', 'guestduo99.png'),
('Candra Muhammad Rizqi', '0073452359', '6a3a64c76efab9c12922c0d706ca3fdc', 'siswa', 'guestduo78.png'),
('Anggraeni Puspitasari', '0073745447', '740f362ca0ef087c09513662e7b8982f', 'siswa', 'guestduo74.png'),
('Nicolla Paganini', '0075187003', '2a8926c38e16700c8874213cf1f0d4b8', 'siswa', 'guestduo89.png'),
('Rasendriya Alva Pradana', '0075434841', '11f081b1af913bfa6c3164c13c5f2421', 'siswa', 'guesttrio16.png'),
('Akbar Prastio', '0075991352', 'ac8df82ea640aac9ecfc1e3ae3d8f726', 'siswa', 'guestduo98.png'),
('Muhammad Irsyad Syarief', '0076164030', '795c9eaaa4d04086c2aad3606d55460a', 'siswa', 'guesttrio10.png'),
('Fajar Zuliana Safitri', '0076187083', 'e6ed54eeeb54d597c72f973abad35691', 'siswa', 'guestduo81.png'),
('Nuria Akbar Danurdara', '0076230404', '8378d87002afd1ebbb95a82e615a4d54', 'siswa', 'guesttrio14.png'),
('Nawa Sandria Malakiano', '0076887524', '3f864cc30c533619d9123c88813dc616', 'siswa', 'guestduo88.png'),
('Anggun Puspita Sari', '0077440162', '1f25c1abcb263d5b5438a30078636113', 'siswa', 'guestduo97.png'),
('Keysha Ardian Allfani', '0077657374', '605063475f84fe32ecd1537e52d50d0a', 'siswa', 'guestduo84.png'),
('Herfino Abi Marlon', '0077658744', 'e3f629820b516f90acb1acf031aacd69', 'siswa', 'guestduo82.png'),
('Okta Diana Nazalia', '0077842798', '95937f230b63bf61b83bcdc45df3676d', 'siswa', 'guestduo92.png'),
('Elsya Vinantasya Agustin', '0078022549', '3fc5be9ed2d24a95c565c989f8e1bec4', 'siswa', 'guesttrio4.png'),
('Amna Septiani Linailil Azizah', '0078114870', 'f9ac363a8a8902a87f0d637e00509136', 'siswa', 'guestduo72.png'),
('Salvia Nur Ihsani', '0078264862', '1c3f127095fbbca3e2d5a46c0885f1a6', 'siswa', 'guestduo94.png'),
('Rasya Ananda Putra', '0078468976', 'b9ac13901c2e6be7d0c0ab2dc9765a54', 'siswa', 'guestduo93.png'),
('Elin Setia Aji Hayati', '0078515056', '29c2c13243ac12a85f57003a4da245b7', 'siswa', 'guestduo80.png'),
('Fandhan Maulana Adrian', '0081217356', '59a09f1fcab7689ea1e933d1cb533b60', 'siswa', 'guestduo55.png'),
('Zaskia Dwi Rahmawati', '0081463441', '17576ffbcdb810fd460b40ce7f98c1cd', 'siswa', 'guestduo96.png'),
('Ocha Alesia', '0081496366', '9fa7bce0142bb9121fd7f9be467055a2', 'siswa', 'guestduo91.png'),
('Galih Amra Fattachry', '0081703314', '7b76451deb7c10022ec0d38a931343e6', 'siswa', 'guesttrio7.png'),
('Hasna Putri Oktariani', '0081997418', 'f6d922006b6eae421b2baa5e7af0c21e', 'siswa', 'guestduo41.png'),
('Syifa Febrianti', '0082056715', 'ccdc71a45fc1497da53d78efa64ae898', 'siswa', 'guesttrio18.png'),
('Leon Alfarel Pramayudha', '0082338584', 'dd10c545359dd26334da7ba06a8c7281', 'siswa', 'guestduo85.png'),
('Seisha Neea Chandra', '0082441329', '9cc6e737597c24cca26c7edd1256e449', 'siswa', 'guestduo67.png'),
('Narendra Phaksi Vito Radytha', '0082507511', 'ef32bb884223fbafe6818071e6da5076', 'siswa', 'guestduo60.png'),
('Indriana Ayu Sawastika', '0082695354', '76ccea718fcd607823b0f8a5aaf86ac2', 'siswa', 'guestduo42.png'),
('Wisnu Garindra Pratama', '0082723577', '782e719db94ba3e5bf10df5a2c1dcd20', 'siswa', 'guestduo70.png'),
('Muchammad A\'zan Ringgo Syahputra', '0083096400', 'd2f3528891cd91935274ac30ceeafe53', 'siswa', 'guestduo44.png'),
('Wahib Prasetyo', '0083210630', 'b2cc4cb64c3b86f9c8a76703986e5465', 'siswa', 'guestduo51.png'),
('Sakha Nayra', '0083450257', '4e3ff9ca2408c044442fb989539d8252', 'siswa', 'guestduo66.png'),
('Dhea Erlynda', '0083697205', '5e52b0e984aefe44d959bf6f24312fb0', 'siswa', 'guestduo79.png'),
('Wendy Arya Pratama', '0083753548', '0faf604ff8b60490a1571788e9255efa', 'siswa', 'guestduo69.png'),
('Januarianto', '0084559659', 'f88ce0717e60b71695d9941481b12e34', 'siswa', 'guestduo57.png'),
('Kheyla Punditya Nugroho', '0084573900', 'c60b8604a243a33c7e7e81baf6e863f8', 'siswa', 'guesttrio8.png'),
('Putri Nadelia Arifiani', '0084603792', '3fb57568deb1a8ed2f74251073a4b827', 'siswa', 'guestduo62.png'),
('Kharisa Naya Intan Khirani', '0084879896', '49e3221265ed5f9eae658473fbeb12d1', 'siswa', 'guestduo58.png'),
('Iviana Larasati', '0084883497', '95594ad46c22a4fc028176c5197524c5', 'siswa', 'guestduo56.png'),
('Alma Fitri Lestari', '0085031611', '71b8cac5a1cdb3b1733d29845578654f', 'siswa', 'guestduo52.png'),
('Veilician Eren Venianto', '0085108536', 'ee2ea8347e95bbfb8afd2be6f0a2dd19', 'siswa', 'guestduo50.png'),
('Arkyan Henda Hafidz Stiyawan', '0085401109', '76a755533fc876f558929ea781477143', 'siswa', 'guestduo35.png'),
('Muhammad Fachri', '0085401645', '8886f47a330f7fa7c0c4c60876cabea4', 'siswa', 'guestduo87.png'),
('Patrista Candika Milliandari', '0085548211', '50690222d0d3b95fb1123570faaf8c8c', 'siswa', 'guesttrio15.png'),
('Restu Janua Kesya Setya Amir Razak', '0085754648', '5e251b60f722817e0d358dc50e44f8db', 'siswa', 'guesttrio17.png'),
('Amanda Artalia Puspitasari', '0085801586', '186570ecb83e87e78c5e912506d0c134', 'siswa', 'guestduo33.png'),
('Fatimah Atika Syahr Banu', '0086003698', 'ba567715bc42a23008fac6799ca0e38a', 'siswa', 'guesttrio6.png'),
('Jovanda Amalia Adyaputri', '0086268355', 'c7e8eacc619c9512bdc98e3ba6c83557', 'siswa', 'guestduo43.png'),
('Deni Apriansyah', '0086311709', '6ecd28b36f36edde1d8ea9ff5966e7a4', 'siswa', 'guestduo38.png'),
('Farrel Dian Sulistyo', '0086417750', 'af3ca8f4325479177e89422ec6d7b2dc', 'siswa', 'guesttrio5.png'),
('Riffa Dwi Anjaeni', '0086756647', '0765bde1aa24354f64e45849c12c28da', 'siswa', 'guestduo49.png'),
('Muhammad Faisal Alfaridzi', '0086963150', 'f51c942c064835425af33def330c0746', 'siswa', 'guestduo45.png'),
('Muhammad Shobirin Pratama', '0087559952', '468939099742be07d01d3a354dba981e', 'siswa', 'guesttrio11.png'),
('Doriel Ekaraditya Quaresma', '0087666450', '699c96dde85836594e782f28f7230890', 'siswa', 'guestduo40.png'),
('Arini Tri Rahma', '0088019401', '306a302b91295c958162ddb09f1e594e', 'siswa', 'guestduo34.png'),
('Nasywa Raya Priyadi', '0088275621', '2839cf4727e0ebc63128c55f295c2adc', 'siswa', 'guestduo61.png'),
('Muhamad Arif Hidayat', '0088625037', 'b1909ff1ee52ddfc80f8b6025cdbb009', 'siswa', 'guesttrio9.png'),
('Anysa Nur Wijayanti', '0089097325', 'cce7ca9d9c6149947a16b82ba414663d', 'siswa', 'guestduo75.png'),
('Azhar Mutiara Mufida', '0089411757', '5d3c7bf839189a1cd03f6fd003b60a21', 'siswa', 'guestduo36.png'),
('Qonita Noverinda Saputri', '0089414833', '2a01a555effbc464e1d52d299eae1cb5', 'siswa', 'guestduo63.png'),
('Devi Anjasmoro', '0089610997', '637c37ee6fdf3de109db6761354ba15a', 'siswa', 'guestduo39.png'),
('Defanda Atharafi Putra Zuka', '0089844135', 'd942a1c6ca926f3ee75a914ac27a347f', 'siswa', 'guesttrio3.png'),
('Alfaridho Ramadan Afinza', '0089960419', 'a646aef83126e04d1ebc852c0f2ebef4', 'siswa', 'guestduo31.png'),
('Rafeyfa Fadila Meysun', '0091576006', 'f9d756293809d9f125782d9bca69f6ee', 'siswa', 'guestduo47.png'),
('Norma Liawati', '0091671608', '142369ce1514a0941a125f036185897b', 'siswa', 'guestduo46.png'),
('Almira Asfa Hani', '0091709001', '85cbcaad606455eceaaa0465b9146daa', 'siswa', 'guestduo32.png'),
('Muhammad Fatih Fahrisalam', '0091912133', 'de40a44cf87f8ad1c607785e0db95170', 'siswa', 'guestduo59.png'),
('Citra Larasati', '0092111712', '59dffdb41a894dabd67a02bd5a0efecf', 'siswa', 'guestduo54.png'),
('Diamas Rakha Putra', '0092193280', '4fa68027073ef6b60312cfad47976ce2', 'siswa', 'guest88.png'),
('Abimanyu Satya Mahacara', '0092213964', '83b9500db8d53a9173be5df32d694880', 'siswa', 'guest75.png'),
('Alifa Putri Noviani', '0092249308', 'f1cec458aee7ca78d1a3afaef1f5b5e0', 'siswa', 'guest80.png'),
('Regzanathan Yafi Winarno', '0092405360', '8985d280a48f31b64fb568430a5ca6e5', 'siswa', 'guestduo65.png'),
('Latifah Nur Azizah ', '0092429917', 'eb24f86e05c1464a8d77eae55a9a4d54', 'siswa', 'guest95.png'),
('Roffi Yashira Nur Idhar', '0092536695', 'a226bfdb35e4c769786754662b3a0df2', 'siswa', 'guestduo22.png'),
('Fitri Adi Syaputra', '0093158026', 'b2c507552b8da77c833520fa79c78a94', 'siswa', 'guest89.png'),
('Joel Leonard Susanto', '0093594348', 'd4f833ac5bc127e25a2c9a1fb157feda', 'siswa', 'guest93.png'),
('Sifa Kirana Putri', '0094989580', '85c46c9d413f2700b16b5dece540cda8', 'siswa', 'guestduo25.png'),
('Muhammad Ilham Dhiyaa Ul Haq', '0095097910', '01a94e68662923697cd744893eb5a0d3', 'siswa', 'guest98.png'),
('Raffa Putra Surya Radiva', '0095320346', '775555517bede28c23e5edd61627bf76', 'siswa', 'guestduo64.png'),
('Arif Fahrudin', '0095405486', '4fec09db1d94d24c3b0366ddc9924e18', 'siswa', 'guest82.png'),
('Arkan Rizaldy Prasetyo', '0096477917', '5b33b1311603a9aebe537603b215a1e9', 'siswa', 'guest83.png'),
('Cahya Kurnia Larasti', '0096552169', '79ce5197cf819981201808a13a7841ca', 'siswa', 'guest86.png'),
('Angellita Indah Cahyani', '0097033160', '8ee6b5f266bf8c67dc25902895c84e6f', 'siswa', 'guestduo53.png'),
('Lutfian Aditya Atha S ', '0097273142', 'f700f45cd781723441c6946d03c4ae48', 'siswa', 'guest97.png'),
('Celfia Nurotul Aini', '0097296782', '2192a9923c0a8edcdb8b24b4021bcdc8', 'siswa', 'guest87.png'),
('Muhammad Rasyid Novianto', '0097401186', '4af79c2ac756eaed88169d68da92a612', 'siswa', 'guest99.png'),
('Zidan Aghshan Aravega', '0097438372', '2a471b4ec9cf6fce8ed1fe4809a7f3ad', 'siswa', 'guestduo29.png'),
('Herlino Galeh Wicaksono', '0097654468', '26fa136d97d4305573a690dd1a02917d', 'siswa', 'guest92.png'),
('Chantika Caesariyana', '0097661517', '22346176c6566246df29255c6a642a88', 'siswa', 'guestduo37.png'),
('Adliansyah Dyan Satriatama', '0097873426', '8173765335f8ee963d1f551918b034fc', 'siswa', 'guest76.png'),
('Aisyah Dafa Pradita', '0098055907', '8cb20005dcdde8bb83d76df61ddaa332', 'siswa', 'guest78.png'),
('Apuila Sasuke Alamanda Juno', '0098274377', '5e0c0727fd34075f73c2e331ef389c99', 'siswa', 'guest81.png'),
('Alfarenza Purnama Putra', '0098404535', 'd28f0165498a91f0f66edc3a701e8ebf', 'siswa', 'guest79.png'),
('Wanda Cintya Sari', '0098420022', 'f53b34f09de8a739dba22fce0f4f23e6', 'siswa', 'guestduo26.png'),
('Zahra Putri Amelia', '0099503692', 'c87e780c524f1fd8f07b8a063ce5c716', 'siswa', 'guestduo71.png'),
('Herlambang Putra Pamungkas', '0101162430', 'a51e05ee14886c607a92e88db34c2383', 'siswa', 'guest57.png'),
('Bihal Erta Aditya', '0101407377', '3765a8e1cb88ab2be1d7cb5789d768b8', 'siswa', 'guest84.png'),
('Farhan Isthafa', '0102947120', 'd7233d3fd6129e2999e7b5a3f0f0b898', 'siswa', 'guest54.png'),
('Hafid Nur Qolis', '0103397252', '035565f0b3cbe0efa0f87687a538db58', 'siswa', 'guest90.png'),
('Sagita Nawanda Hutami', '0104078895', '5e1269c590f30362f87268dd3ad4a3f9', 'siswa', 'guest71.png'),
('Raditya Farid Hermansyah', '0104690075', '10b06f1c7c7ec429b559a1e8569d8ece', 'siswa', 'guestduo19.png'),
('Bulan Jingga Maharani', '0104690744', 'b9d38fda4aa2424f247056e80eb89147', 'siswa', 'guest85.png'),
('Choirul Adzan Ramadhan', '0104863476', 'd5a04ab523c5e8bebf83833328495b47', 'siswa', 'guest49.png'),
('Rakha Setyawan', '0105348031', '59eb57d6e76a28616786393834d70d4a', 'siswa', 'guest65.png'),
('Agel Saptoaji', '0105627817', '3a3c5e1843f0e105966aa1c7009c318d', 'siswa', 'guest27.png'),
('Ega Putra Nurizqi', '0105660076', 'a16aa8fa0a8576820b6d03d62a4ff63a', 'siswa', 'guest52.png'),
('Raisya Putri Azzahra', '0105700442', 'ee73e130a32075bb8126dd3c404b3616', 'siswa', 'guest64.png'),
('Yaya Mavita Uliani', '0105929737', 'fa92126b55594c1525dbbe5dadfdba85', 'siswa', 'guest74.png'),
('Zivana Cynthia Febrinsa', '0106050191', '1c0772d9f5d8a5b955b0af6e4910082b', 'siswa', 'guestduo30.png'),
('Ahlan Nauvakerill Fidel', '0106530032', '20dc28832da09bcaeb2f1da8e7f910c2', 'siswa', 'guest77.png'),
('Nashhah Uvaira Valerie Awathif', '0106911412', '5f5fd14e8ac40b7e53adb056b7e0f40d', 'siswa', 'guestduo18.png'),
('Ivander Joshua Alston Radytha', '0107701054', 'c37376eaf643f2b77647a75fd27f4bf4', 'siswa', 'guest59.png'),
('Anindya Andi Kusuma', '0107811752', 'c01fa4601be4c6d1cb406bfe0a33cc0f', 'siswa', 'guest48.png'),
('Laili Manda Priyadi', '0107813945', '2df3ab3bc2b1590e5f668caae8fa5c69', 'siswa', 'guest60.png'),
('Eka Aprillia Putri', '0108310329', 'c4d8bac18dd52c2b351cbe5161c71dd0', 'siswa', 'guest53.png'),
('Revalina Luthfi Mulativia', '0108617021', 'a12d50b8aef94e20e05b67a7155de19f', 'siswa', 'guestduo21.png'),
('Danish Muhammad Fakhri', '0108720043', 'cc761ca9839521a5fb84f6acc2eee240', 'siswa', 'guest51.png'),
('Fulvia Novaliza Putri', '0108765251', 'c4479bf42389333b5b82ac5a3692d26c', 'siswa', 'guest55.png'),
('Yasmin Aurelia Aqilla Syafa', '0108904551', 'bf2e86a1452419de8a3df415af9270f3', 'siswa', 'guestduo28.png'),
('Safa Khoirunnisa', '0109063911', 'd03423352ec8649c4194619a0039c69a', 'siswa', 'guest70.png'),
('Ahmad Hanifan', '0109215981', 'cc2f5dbf94c8bff915acde8568ea3d39', 'siswa', 'guest46.png'),
('Lemnya Sayiddina', '0109398763', '2cb919000e19ed94027169e7a6f5ac3d', 'siswa', 'guest96.png'),
('Shalahudin Saka Sangkara', '0109440470', '366529b7f145197b6ff5c45dde891e7e', 'siswa', 'guest72.png'),
('Hana Septi Khairunnisa Priyanto', '0109519326', 'c7c1388fa6da804d48613ecbb7722e5f', 'siswa', 'guest56.png'),
('Reina Eka Widiyawati', '0109668333', '9736ba637982610030d5630c5b1ac13e', 'siswa', 'guest66.png'),
('Ihsan Arya Adinata', '0109735857', 'b2005ca2f0e3e42862bc4bd1c5631532', 'siswa', 'guest58.png'),
('Sutan Ibrahim Alhasdi', '0109779597', 'ab7925e5b24e2fd07288a25cfe5e7db0', 'siswa', 'guest73.png'),
('Ridwan Zaii Abidin', '0111356014', '4832f37d3c79e55d75890c795c994bfd', 'siswa', 'guest68.png'),
('Rio Syafiq Fahrian', '0111468881', '74e3ece77b5a6dbdc03a3272962bcda6', 'siswa', 'guest20.png'),
('Chaerunisa Riyadi', '0112378362', 'e287d249cad6956821dbb353addf709d', 'siswa', 'guest8.png'),
('Maria Risna Dwithalia', '0112986041', '3ea11ff068b1683c18349b97610e8555', 'siswa', 'guest61.png'),
('Nabila Fitri Fadlilah', '0113444816', '211bae60c3bcd778b6336bd4216ca4af', 'siswa', 'guest37.png'),
('Vianifa Kheyzha Putri Ayudewi', '0113502009', '30dd41d097747e28dae45f93dd776edf', 'siswa', 'guest23.png'),
('Wiliam Surya Chandra', '0113920716', 'a1c7e8b8b2a5a48338ddb74ab42c9392', 'siswa', 'guest45.png'),
('Danish Azka Rafandra', '0113949941', 'd7e1adf1a530be685dd316f7d0e1d388', 'siswa', 'guest34.png'),
('Ridwan Maulana', '0114204092', 'a9725f6f18409e74a0db474d5d0bc61b', 'siswa', 'guest18.png'),
('Safa Aulia Khunsa', '0114273292', 'b6097091eee884acfa670dd9f21bcf68', 'siswa', 'guest21.png'),
('Azra Azana Putra Rahmadillah', '0114470702', '93f155ce71820a70baba3354c8db8908', 'siswa', 'guest6.png'),
('Ach Fasihul Lisan ', '0114493050', '804e354b02e3a5bcc177481cd1b176ef', 'siswa', 'guest24.png'),
('Citra Dewi Muhdir', '0114664105', '8a2484a0dc6dcc964faf65f369071df1', 'siswa', 'guest33.png'),
('Adzriel Fadhil Alfareza', '0114924108', 'cb5a0536bf28a399cf8cef76c27984b4', 'siswa', 'guest26.png'),
('Akhmad Prima Nur Rohim', '0115233816', '976423c540e43382048fc5ba0ad30cf6', 'siswa', 'guest47.png'),
('Achmad Mustofa Ramadhani', '0115456630', '05b585f3303ebed7e307d2df459b8783', 'siswa', 'guest.png'),
('Ahmad Dhani Syaifudin', '0115494314', '5bcf9c485173bd4747fe650f932ba1d3', 'siswa', 'guest1.png'),
('Ghizel Yahnas Fahreza', '0115621738', '0ee22a954ef3deb31f5defb949e51f31', 'siswa', 'guest11.png'),
('Miftah Reyhana Pratama', '0115629622', '5aabef22d0e0b7a884863558c8da6a68', 'siswa', 'guest62.png'),
('Syahril Anwar Syafi\'i', '0115729079', '2a1bd150f743d15dce7188a7cc819676', 'siswa', 'guest42.png'),
('Rhino Fabyand', '0116063552', 'ccdcdde246672d7814f6e4666b69346c', 'siswa', 'guest67.png'),
('Erina Janeta', '0116188888', '1a55622f31c424a1a4314b7ae7dae91d', 'siswa', 'guest9.png'),
('Citra Oliviesya Putri Nirinda', '0116221677', '58a9cd6a0df00f326924b676fca179c8', 'siswa', 'guest50.png'),
('Muhammad Luthfi Afandi', '0116493358', '8b6323133975e9e8d03afd9a3c3db86b', 'siswa', 'guest63.png'),
('Rizkya Putri Tama', '0116596294', '0eebb7ea5d87b034298fa600d184f6c9', 'siswa', 'guest69.png'),
('Dea Ayu Natasha Putri', '0116673129', '3b3b63808eb741774d9c05efe912a886', 'siswa', 'guest35.png'),
('Ikmal Naisha Fauziyah', '0116840260', 'bc3f6ed5cf55c605c7080c76a1b76478', 'siswa', 'guest12.png'),
('Adeka Nur Firdaningsih', '0116971508', '6daa8a44632994c59f4f57ccaf4dbaee', 'siswa', 'guest25.png'),
('Nur Rohmat Ridho Jati', '0117385020', '1389046debba1637c233792340403982', 'siswa', 'guest39.png'),
('Muhammad Alfito Ammar Maulana', '0117735892', 'dd5c17c3472ea373ebee61326e2a734e', 'siswa', 'guest15.png'),
('Silvi Emilia Geovanny', '0118130529', 'd420361967d4e43775948291c0d4abb4', 'siswa', 'guest22.png'),
('Rifa Eka Nur Hanifah', '0118241265', 'b1c44acc19e446090f9891b45adda3f8', 'siswa', 'guest19.png'),
('Keisya Ayu Oktaviana', '0118453395', 'c422f150dc9f7014989110260a3b1e11', 'siswa', 'guest14.png'),
('Bima Lintang Pradana', '0118914593', '0b85d36a4e18ee0bf1c91a76539278be', 'siswa', 'guest32.png'),
('Noffita Eka Sarie', '0119807028', '075d09fe7586c6ca8d7a68a6563e2cf5', 'siswa', 'guest38.png'),
('Diera Ayu Aldeana Ardani', '0121090127', 'c84b2bc4b9488823ca8749133163d34d', 'siswa', 'guest36.png'),
('Vania Hanggara Pertiwi', '0121759199', '0f7291606eb23fce4ea04cbc1eac4574', 'siswa', 'guest43.png'),
('Aqila Raka Alvaro', '0122512906', 'cb774b53aa4220c27d1f6377d64e7af2', 'siswa', 'guest31.png'),
('Farhat Mardani', '0122580451', '0e4b4d5dcb644807a74c464f1c0737f7', 'siswa', 'guest10.png'),
('Akbar Woro Dumadi', '0123008471', '4532cd79fa0cd4dd32e8aae7bab696ca', 'siswa', 'guest28.png'),
('Andra Almas Anjasmoro', '0123290717', '0cfdc65e7b6f434859f74418e63d2719', 'siswa', 'guest30.png'),
('Aima Pramudia Wati', '0123801119', 'eeacb3575b142f75794ad5858af35a91', 'siswa', 'guest2.png'),
('Sekarayu Roullatama Putri', '0124753679', '2452971a2dfb3cb24156c7282200c1ac', 'siswa', 'guest40.png'),
('Arya Bryan Kurniawan', '0124759068', 'c1cfac4425891cbd119743f4670fb83a', 'siswa', 'guest4.png'),
('Solehatun Qur\'aini An Na\'im', '0124813794', 'be256cd3029335a66ee05accd499d2a7', 'siswa', 'guest41.png'),
('Alexis Marley Derio Rahardjo', '0125188371', '3bba087cd5918846afbb79bc9d8beb84', 'siswa', 'guest29.png'),
('Intan Nirmala Sari', '0125547644', 'f86aab3243c29f8d66186b7f83fb45b5', 'siswa', 'guest13.png'),
('Vike Alfindra Dwi Yuliani', '0125633329', '35169332038f9f96a2d870cb785d00b8', 'siswa', 'guest44.png'),
('Andra Putra Irawan', '0126558625', '9d9282417e343b6a5faa4b1069969333', 'siswa', 'guest3.png'),
('Nurul Asifa', '0127771329', '723e7222304670c7bb4a12a3141c2470', 'siswa', 'guest17.png'),
('Naila Azzahra', '0128138686', 'd1bb907537f22880d48a2be971542681', 'siswa', 'guest16.png'),
('Aulia Rizqi Agung', '0128940790', 'd0ab4228861baeb5722fd1c2d75166c3', 'siswa', 'guest5.png'),
('Bagus Raihan Khoirul Anam', '0129669114', '0a13b4f944bb4a7bed8768ed87f65670', 'siswa', 'guest7.png'),
('Antoni Saputra', '0146723893', 'e5b36e2434fb42f18c0e709539c2ffa3', 'siswa', 'fishbone1.png'),
('Gwenerero', '014876578', '18198423dcf168e2fff4618544f6b8a2', 'siswa', 'user42.png'),
('Rahmat Badriansyah', '015986238724', 'af30e53a72d5fb148740cd31972dd56f', 'siswa', 'fishbone3.png'),
('Dini', '111122333444', '8c54075c0a435bd6101abd0589bdb8e2', 'guru', 'Artboard_9@4x.png'),
('Diki', '111122333454', '431c77df35f31fabacd64014bd13fd7c', 'guru', 'dfadfa6.png'),
('Catur', '112222', '6bb00cab07e6495bd5b2b005483dc4bb', 'siswa', 'logo.jpg'),
('Nani', '12222', '6a694fd4f9dea2fa4f19ea62568cb30c', 'siswa', '522_Converted1.png'),
('Aceng', '12345', '431c77df35f31fabacd64014bd13fd7c', 'siswa', '522_Converted.png'),
('Martina Helena, S. Pd. ', '196001301982012006', '0d460f9129675f99baf386ff12387eea', 'guru', 'guestduo15.png'),
('Vincentia Ken Tjahjani', '196005231981012001', 'bcd69235c0039f5619f5c172bbfa1fbf', 'guru', 'guestduo1.png'),
('Wajiman, S. Pd.', '196109081983041003', '8958a70043c40e124fd935e75483f97e', 'guru', 'guestduo.png'),
('Suhartana, S. Pd.', '196204041984031011', '2e2f6ec2ee61c990203f59e6f153884a', 'guru', 'guestduo2.png'),
('Hartatik, S. Pd.', '196208051993022002', '95a00bf733c2c6b60a17e50894b907cd', 'guru', 'guestduo4.png'),
('Marnani', '196505302019052001', '5910373720ffaa37c5af1f34196898a0', 'guru', 'guestduo14.png'),
('Sri Wahyuni', '197108192019052001', '15959512b47736762e0b121a67acebbb', 'guru', 'guestduo13.png'),
('Elis Subartini, S. Pd.', '197403241999032003', '98ac5fe9ef76aa2a92f0feb460774b11', 'guru', 'guestduo3.png'),
('Hasti, S. Ag.', '197501262019052001', 'ba14711684e7fb93a2e8d7adfc0e57dc', 'guru', 'guestduo7.png'),
('Asri Asiyah, S. Pd.', '197711202019052001', '07efffc643e4db23a800e56d614b1e04', 'guru', 'guestduo8.png'),
('Siti Nurrohmah, S. Pd.', '197801302014062001', 'e354ba753e5db6b30d2aa858c1c40b5e', 'guru', 'guestduo6.png'),
('Ch. Dwi Astuti, S. Pd.', '198309182006042010', 'a3151406994248ccc3221bedc9cad562', 'guru', 'guestduo5.png'),
('Sarwanta, S. Pd., Jas.', '198607202019052001', '860b4654a7a4677339210e19368194d6', 'guru', 'guestduo17.png'),
('Yuki Mijayati, M. Hum.', '198805312019052001', '2eb04f9fa1f7eed0cffa008f8fbdc0c6', 'guru', 'guestduo12.png'),
('Amalia Ekawati, S. Pd.', '198903122019052001', 'd2102a19ffd69de9fdd0ed8de9d60f94', 'guru', 'guestduo9.png'),
('Andrias Susanto', '198905052019052001', '023698c5a1ac9095b6629d1659b8871e', 'guru', 'guestduo16.png'),
('Niko Eriko', '19901210200912031', '2c8032c062c5c6d5e77862bff9d750aa', 'guru', 'fishbone2.png'),
('Farida Dwi Utami, S. Pd.', '199312072019052001', '04ada058e91e28476da6d614d6e81583', 'guru', 'guestduo10.png'),
('Dyah Maya Rikawati, S. Pd. ', '199402182019052001', '52dc93809284d6ab67ba3b2c502feb32', 'guru', 'guestduo11.png'),
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
(3, '198309182006042010', 10, ''),
(4, '197801302014062001', 11, ''),
(5, '197403241999032003', 3, ''),
(6, '196208051993022002', 5, ''),
(7, '196005231981012001', 7, ''),
(8, '198903122019052001', 8, ''),
(9, '197711202019052001', 9, '');

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
  ADD PRIMARY KEY (`id`),
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
-- AUTO_INCREMENT for table `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wali_kelas`
--
ALTER TABLE `wali_kelas`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
