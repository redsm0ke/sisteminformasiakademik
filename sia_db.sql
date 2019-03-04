-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2019 at 08:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `no_urut` int(5) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `penulis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_berita`
--

INSERT INTO `tbl_berita` (`no_urut`, `judul`, `isi`, `tanggal`, `penulis`) VALUES
(2, 'KEGIATAN ESA 16', 'Semangat pagi, Acara puncak ESA akan di adakan hari Sabtu, 23 Februari 2019. Terimakasih.', '2019-02-21', 'administrator'),
(4, 'DIANEME GANTENG', 'TESTTTTTTTTTTTTT', '2019-02-21', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calonsiswaterdaftar`
--

CREATE TABLE `tbl_calonsiswaterdaftar` (
  `no_urut` int(5) NOT NULL,
  `no_pendaftaran` varchar(15) NOT NULL,
  `pilihan_jurusan_1` varchar(15) NOT NULL,
  `pilihan_jurusan_2` varchar(15) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `asal_smp` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `no_urut` int(11) NOT NULL,
  `judul` text NOT NULL,
  `kategori_event` varchar(15) NOT NULL,
  `isi` text NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `penulis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`no_urut`, `judul`, `kategori_event`, `isi`, `tanggal_mulai`, `tanggal_selesai`, `penulis`) VALUES
(6, 'ESA 16', 'Kegiatan Siswa', 'Kegiatan ESA 16<br><br>\r\n\r\nHari : Sabtu, 22 Februari 2019\r\n\r\nTerimakasihs', '2019-02-22', '2019-02-22', 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `no_urut` int(5) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `wali_kelas` varchar(50) NOT NULL,
  `nip_wali_kelas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`no_urut`, `nama_kelas`, `wali_kelas`, `nip_wali_kelas`) VALUES
(1, 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Erick Fitra Wijayanto', 9858208),
(2, 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Rahmi Lubis', 9898090);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keuangan`
--

CREATE TABLE `tbl_keuangan` (
  `no_urut` int(5) NOT NULL,
  `no_tagihan` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jenis_tagihan` text NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `jumlah_tagihan` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keuangan`
--

INSERT INTO `tbl_keuangan` (`no_urut`, `no_tagihan`, `nama_siswa`, `jenis_tagihan`, `tahun_ajaran`, `semester`, `jumlah_tagihan`, `status`) VALUES
(2, '30272549', 'DEDY SYAHPUTRA RIZKI HARAHAP', 'Nembak di kantins', '2018/2019', 'Genap', '12,000', 'LUNAS'),
(3, '40530308', 'DEDY SYAHPUTRA RIZKI HARAHAP', 'Beli rokok gak bayar', '2018/2019', 'Genap', '20,000', 'BELUM LUNAS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mutasi`
--

CREATE TABLE `tbl_mutasi` (
  `no_urut` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` text NOT NULL,
  `jenis_mutasi` varchar(30) NOT NULL,
  `tanggal_mutasi` date NOT NULL,
  `no_surat` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mutasi`
--

INSERT INTO `tbl_mutasi` (`no_urut`, `nis`, `nama`, `kelas`, `jenis_mutasi`, `tanggal_mutasi`, `no_surat`, `keterangan`) VALUES
(2, 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Dikeluarkan', '2019-02-20', 'XI/SMK-Jamaludin/001', 'Siswa dikeluarkan karena menghisap rokok daging dikelas');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_keterampilan`
--

CREATE TABLE `tbl_nilai_keterampilan` (
  `no_urut` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` text NOT NULL,
  `PAI` int(5) NOT NULL DEFAULT '0',
  `PKN` int(5) NOT NULL DEFAULT '0',
  `BI` int(5) NOT NULL DEFAULT '0',
  `MM` int(5) NOT NULL DEFAULT '0',
  `PBO` int(5) NOT NULL DEFAULT '0',
  `PPL` int(5) NOT NULL DEFAULT '0',
  `BD` int(5) NOT NULL DEFAULT '0',
  `DESK` int(5) NOT NULL DEFAULT '0',
  `PAK` int(5) NOT NULL DEFAULT '0',
  `ENG` int(5) NOT NULL DEFAULT '0',
  `PJOK` int(5) NOT NULL DEFAULT '0',
  `MDRN` int(5) NOT NULL DEFAULT '0',
  `KREL` int(5) NOT NULL DEFAULT '0',
  `KWUH` int(5) NOT NULL DEFAULT '0',
  `OFFL` int(5) NOT NULL DEFAULT '0',
  `WEBN` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_keterampilan`
--

INSERT INTO `tbl_nilai_keterampilan` (`no_urut`, `nis`, `nama`, `kelas`, `PAI`, `PKN`, `BI`, `MM`, `PBO`, `PPL`, `BD`, `DESK`, `PAK`, `ENG`, `PJOK`, `MDRN`, `KREL`, `KWUH`, `OFFL`, `WEBN`) VALUES
(4, 175429, 'ABDURAHMAN FARWAZ', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 175434, 'ALFATTAH ATALARAIS', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 175435, 'ANANCHY DWI GUSNANDA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 175436, 'BEBY SHAFFIRA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 175437, 'BOBBY SEPTIANANDA RAJA MUNTHE', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 175438, 'BRIAN JAFRIANDO PURBA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 175444, 'DHIMAS ARYO WICAKSONO', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 175446, 'DINA BERLIANA BR SITOHANG', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 175448, 'EDWIN EFRAJADO SUMBAYAK', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 175450, 'FAHRA MAISYA PUTRI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 175455, 'FITRI INDRIANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 175456, 'GALIH ATHA FAYI KHANSA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 175462, 'ISHAD ANSHAR', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 175463, 'JOICE KRISTIANI TELAUMBANUA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 175464, 'JONATHAN ANDREW', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 175465, 'KEN EL RIDHO FAJDUANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 175466, 'KIKY ANSARA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 175468, 'MARZUQ MUADZ DIAZ LUTHFI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 175469, 'MAYA ANGELIA BR SURBAKTI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 175467, 'MUHAMMAD ICHSAN BRILIAN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 175477, 'NATHASYA PUTRI AMELIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 175479, 'NISFA AMALIA RAHMADANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 175480, 'NURUL AINI PERANGIN-ANGIN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 175481, 'OKY ALEXANDER SIHOTANG', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 175482, 'PUTRI LOLA AMALIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 175484, 'RAIHAN ISRAQ ZABRAN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 175486, 'RICHARD EKIN PRANANTA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 175487, 'RIRIS RIZKY ANGELLINA SITIO', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 175490, 'RUDVI SONIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 175491, 'SABILLAH SAKTI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 175493, 'SAMUEL GUNAWAN MARTUA MARBUN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 175494, 'SITI MASITAH ARNESIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 175495, 'SRI KARINA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 175497, 'SYAKHIRA SALSABIELLAH', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 175499, 'URMILA PRAMITHA SARI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 175502, 'ZULQHI FAHRI MUDA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 175430, 'ADELIA DWI PUTRI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 175431, 'AGI FADLAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 175432, 'AHMAD RIDHO MADEARDO SITORUS', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 175433, 'ALDO BEVINDRA. M', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 175439, 'CHRISTOPHER ANDREAN M.SEMBIRIN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 10, 0, 0, 0, 0, 0, 0, 50, 80, 40, 0, 0, 0, 0, 0),
(45, 175440, 'DARAM PATUIH TONGGA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 175442, 'DEEF SIHOMBING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 175443, 'DENPUDAN MOMPANG JOSE MANALU', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 175527, 'DIANEME STEFANUS TARIGAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 175445, 'DICKY SURYA AMANDA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 175447, 'DIVA FAHREZI PURBA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 175449, 'ERIC PRADANA NASUTION', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 165332, 'FAHREZANANDA RANGKUTI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 175451, 'FAIS ADRIAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 175452, 'FARHAN ALVINDRA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 175453, 'FERI WENDI PURBA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 186174, 'FIRZA AKBAR FATRIA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 175457, 'GILBERT PARISMA HIZKIA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 175459, 'HANES GERALDO GINTING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 175460, 'HANIF NAUFAL ANNAFI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 175461, 'IRA MAHARANI SIREGAR', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 165344, 'MEIDY FAHRIZA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 175470, 'MOHD FAUZAN AZMI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 175471, 'MUHAMMAD ALBI AL MAHDY', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 175472, 'MUHAMMAD FIRZA YAFI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 175473, 'MUHAMMAD NAUFAL MUBARAK', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 175474, 'MUHAMMAD NAUVAL AZZAKY', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 175475, 'MUHAMMAD RISKI RINALDI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 175476, 'MUHAMMAD RIZKY FAJRI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 175478, 'NIRWANA SITUMORANG', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 175483, 'RAHMAT WIJAYA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 175485, 'RICHA ANASTASYA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 175489, 'ROLINTON NATANAEL SINAGA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 175492, 'SALEH HUSIN SIREGAR', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 175496, 'STEPHANIE FIRMA KRISTINA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 175498, 'TENGKU DAFFA SYAUKY GHIFARI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 175500, 'YUDIA FITRI ANGGRENI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 175501, 'ZULFA RIZKI ZULKARNAEN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_pengetahuan`
--

CREATE TABLE `tbl_nilai_pengetahuan` (
  `no_urut` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` text NOT NULL,
  `PAI` int(5) NOT NULL DEFAULT '0',
  `PKN` int(5) NOT NULL DEFAULT '0',
  `BI` int(5) NOT NULL DEFAULT '0',
  `MM` int(5) NOT NULL DEFAULT '0',
  `PBO` int(5) NOT NULL DEFAULT '0',
  `PPL` int(5) NOT NULL DEFAULT '0',
  `BD` int(5) NOT NULL DEFAULT '0',
  `DESK` int(5) NOT NULL DEFAULT '0',
  `PAK` int(5) NOT NULL DEFAULT '0',
  `ENG` int(5) NOT NULL DEFAULT '0',
  `PJOK` int(5) NOT NULL DEFAULT '0',
  `MDRN` int(5) NOT NULL DEFAULT '0',
  `KREL` int(5) NOT NULL DEFAULT '0',
  `KWUH` int(5) NOT NULL DEFAULT '0',
  `OFFL` int(5) NOT NULL DEFAULT '0',
  `WEBN` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai_pengetahuan`
--

INSERT INTO `tbl_nilai_pengetahuan` (`no_urut`, `nis`, `nama`, `kelas`, `PAI`, `PKN`, `BI`, `MM`, `PBO`, `PPL`, `BD`, `DESK`, `PAK`, `ENG`, `PJOK`, `MDRN`, `KREL`, `KWUH`, `OFFL`, `WEBN`) VALUES
(4, 175429, 'ABDURAHMAN FARWAZ', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 175434, 'ALFATTAH ATALARAIS', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 175435, 'ANANCHY DWI GUSNANDA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 175436, 'BEBY SHAFFIRA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 175437, 'BOBBY SEPTIANANDA RAJA MUNTHE', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 175438, 'BRIAN JAFRIANDO PURBA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 175444, 'DHIMAS ARYO WICAKSONO', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 175446, 'DINA BERLIANA BR SITOHANG', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(12, 175448, 'EDWIN EFRAJADO SUMBAYAK', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(13, 175450, 'FAHRA MAISYA PUTRI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(14, 175455, 'FITRI INDRIANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(15, 175456, 'GALIH ATHA FAYI KHANSA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(16, 175462, 'ISHAD ANSHAR', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(17, 175463, 'JOICE KRISTIANI TELAUMBANUA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 175464, 'JONATHAN ANDREW', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(19, 175465, 'KEN EL RIDHO FAJDUANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(20, 175466, 'KIKY ANSARA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(21, 175468, 'MARZUQ MUADZ DIAZ LUTHFI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(22, 175469, 'MAYA ANGELIA BR SURBAKTI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(23, 175467, 'MUHAMMAD ICHSAN BRILIAN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(24, 175477, 'NATHASYA PUTRI AMELIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(25, 175479, 'NISFA AMALIA RAHMADANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(26, 175480, 'NURUL AINI PERANGIN-ANGIN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(27, 175481, 'OKY ALEXANDER SIHOTANG', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(28, 175482, 'PUTRI LOLA AMALIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(29, 175484, 'RAIHAN ISRAQ ZABRAN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(30, 175486, 'RICHARD EKIN PRANANTA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 175487, 'RIRIS RIZKY ANGELLINA SITIO', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(32, 175490, 'RUDVI SONIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(33, 175491, 'SABILLAH SAKTI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(34, 175493, 'SAMUEL GUNAWAN MARTUA MARBUN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 175494, 'SITI MASITAH ARNESIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(36, 175495, 'SRI KARINA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(37, 175497, 'SYAKHIRA SALSABIELLAH', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(38, 175499, 'URMILA PRAMITHA SARI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 175502, 'ZULQHI FAHRI MUDA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 175430, 'ADELIA DWI PUTRI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(41, 175431, 'AGI FADLAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(42, 175432, 'AHMAD RIDHO MADEARDO SITORUS', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(43, 175433, 'ALDO BEVINDRA. M', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(44, 175439, 'CHRISTOPHER ANDREAN M.SEMBIRIN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 10, 0, 0, 0, 0, 0, 0, 50, 80, 40, 0, 0, 0, 0, 0),
(45, 175440, 'DARAM PATUIH TONGGA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(46, 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 175442, 'DEEF SIHOMBING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(48, 175443, 'DENPUDAN MOMPANG JOSE MANALU', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(49, 175527, 'DIANEME STEFANUS TARIGAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(50, 175445, 'DICKY SURYA AMANDA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 175447, 'DIVA FAHREZI PURBA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(52, 175449, 'ERIC PRADANA NASUTION', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(53, 165332, 'FAHREZANANDA RANGKUTI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(54, 175451, 'FAIS ADRIAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(55, 175452, 'FARHAN ALVINDRA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 175453, 'FERI WENDI PURBA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 186174, 'FIRZA AKBAR FATRIA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 175457, 'GILBERT PARISMA HIZKIA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 175459, 'HANES GERALDO GINTING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 175460, 'HANIF NAUFAL ANNAFI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 175461, 'IRA MAHARANI SIREGAR', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 165344, 'MEIDY FAHRIZA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 175470, 'MOHD FAUZAN AZMI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(64, 175471, 'MUHAMMAD ALBI AL MAHDY', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(65, 175472, 'MUHAMMAD FIRZA YAFI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(66, 175473, 'MUHAMMAD NAUFAL MUBARAK', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(67, 175474, 'MUHAMMAD NAUVAL AZZAKY', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(68, 175475, 'MUHAMMAD RISKI RINALDI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(69, 175476, 'MUHAMMAD RIZKY FAJRI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(70, 175478, 'NIRWANA SITUMORANG', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(71, 175483, 'RAHMAT WIJAYA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(72, 175485, 'RICHA ANASTASYA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(73, 175489, 'ROLINTON NATANAEL SINAGA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(74, 175492, 'SALEH HUSIN SIREGAR', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(75, 175496, 'STEPHANIE FIRMA KRISTINA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 175498, 'TENGKU DAFFA SYAUKY GHIFARI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(77, 175500, 'YUDIA FITRI ANGGRENI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(78, 175501, 'ZULFA RIZKI ZULKARNAEN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `no_urut` int(11) NOT NULL,
  `nip` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `pelajaran` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`no_urut`, `nip`, `nama`, `tempat_lahir`, `tanggal_lahir`, `agama`, `jenis_kelamin`, `alamat`, `no_hp`, `pelajaran`) VALUES
(2, 1000027, 'Muhammad Yusrizal', 'Medan', '1986-10-27', 'Islam', 'Laki-laki', 'Jl. Prof HM. Yamin 318', '0813-6145-6253', 'Pemrograman Web'),
(7, 9730695, 'Jamaludin', 'Bahjambi', '1973-01-11', 'Islam', 'Laki-laki', 'Jl. Pintu Air I Medan Johor', '0811-2222-3333', 'Pemrograman Berorientasi Objek'),
(8, 9730695, 'Jamaludin', 'Bahjambi', '1973-01-11', 'Islam', 'Laki-laki', 'Jl. Pintu Air I Medan Johor', '0811-2222-3333', 'Pemodelan Perangkat Lunak'),
(9, 9730695, 'Jamaludin', 'Bahjambi', '1973-01-11', 'Islam', 'Laki-laki', 'Jl. Pintu Air I Medan Johor', '0811-2222-3333', 'Pemrograman Desktop'),
(10, 9730695, 'Jamaludin', 'Bahjambi', '1973-01-11', 'Islam', 'Laki-laki', 'Jl. Pintu Air I Medan Johor', '0811-2222-3333', 'Basis Data'),
(12, 9898090, 'Rahmi Lubis', 'Medan', '1989-01-15', 'Islam', 'Perempuan', 'Jl. Gurilla Gg Waspada Pancing', '0852-7522-6644', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `no_urut` int(5) NOT NULL,
  `kode_pelajaran` varchar(5) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL,
  `sifat_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`no_urut`, `kode_pelajaran`, `nama_pelajaran`, `sifat_pelajaran`) VALUES
(1, 'PAI', 'Pendidikan Agama Islam dan Budi Pekerti', 'Wajib'),
(3, 'PKN', 'Pendidikan Pancasila dan Kewarganegaraan', 'Wajib'),
(4, 'BI', 'Bahasa Indonesia', 'Wajib'),
(5, 'MM', 'Matematika', 'Wajib'),
(6, 'PBO', 'Pemrograman Berbasis Objek', 'Paket Keahlian RPL'),
(7, 'PPL', 'Pemodelan Perangkat Lunak', 'Paket Keahlian RPL'),
(10, 'BD', 'Basis Data', 'Paket Keahlian RPL'),
(12, 'DESK', 'Pemrograman Desktop', 'Paket Keahlian RPL'),
(13, 'PAK', 'Pendidikan Agama Kristen dan Budi Pekerti', 'Wajib'),
(15, 'ENG', 'English', 'Wajib'),
(16, 'PJOK', 'Pendidikan Jasmani Olahraga dan Kesehatan', 'Wajib'),
(17, 'MDRN', 'Bahasa Mandarin', 'Wajib'),
(18, 'KREL', 'Produk Kreatif RPL', 'Paket Keahlian RPL'),
(19, 'KWUH', 'Kewirausahaan RPL', 'Paket Keahlian RPL'),
(20, 'OFFL', 'Microsoft Office', 'Wajib'),
(21, 'WEBN', 'Pemrograman Web', 'Paket Keahlian RPL');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggaran`
--

CREATE TABLE `tbl_pelanggaran` (
  `no_urut` int(5) NOT NULL,
  `tahun_ajaran` varchar(40) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `kelas` varchar(40) NOT NULL,
  `tanggal` varchar(25) NOT NULL,
  `jenis_pelanggaran` varchar(40) NOT NULL,
  `poin` varchar(15) NOT NULL,
  `sanksi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggaran`
--

INSERT INTO `tbl_pelanggaran` (`no_urut`, `tahun_ajaran`, `semester`, `nis`, `nama_siswa`, `kelas`, `tanggal`, `jenis_pelanggaran`, `poin`, `sanksi`) VALUES
(1, 'Tahun Ajaran: 2018/2019', 'Semester Genap', 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', '2019-02-21', 'Merokok di kelas', '50', 'Dikeluarkan'),
(2, 'Tahun Ajaran: 2018/2019', 'Genap', 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', '2019-02-20', 'Merokok di kelas', '50', 'Dikeluarkan'),
(3, 'Tahun Ajaran: 2018/2019', 'Genap', 175475, 'MUHAMMAD RISKI RINALDI	', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', '2019-02-20', 'Merokok di kelas', '50', 'Dikeluarkan'),
(4, 'Tahun Ajaran: 2018/2019', 'Genap', 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', '2019-02-19', 'Terlambat 10-15 menit', '20', 'Peringatan'),
(5, 'Tahun Ajaran 2018/2019', 'Semester Genap', 175527, 'DIANEME STEFANUS TARIGAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', '2019-02-24', 'Terlambat 10-15 menit', '15', 'Peringatan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertanyaan`
--

CREATE TABLE `tbl_pertanyaan` (
  `no_urut` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `pertanyaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `no_urut` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` text NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(40) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `asal_smp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`no_urut`, `nis`, `nama`, `kelas`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_hp`, `asal_smp`) VALUES
(1, 175429, 'ABDURAHMAN FARWAZ', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Binjai  ', 'Rabu, 23 Januari 2002', 'Islam', '', '', 'SMP-IT AL FITYAH BIN'),
(2, 175434, 'ALFATTAH ATALARAIS', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Binjai', 'Sabtu, 02 Maret 2002', 'Islam', 'Jl. T. Amaluddin No.23 Limau Sundai Binjai Barat', '', 'SMPIT Swasta Al Fity'),
(3, 175435, 'ANANCHY DWI GUSNANDA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Sugiharjo', 'Kamis, 04 April 2002', 'Islam', NULL, NULL, 'SMPN 3 PANTAI LABU'),
(4, 175436, 'BEBY SHAFFIRA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan  ', 'Sabtu, 26 Juli 2003', 'Islam', 'Jl. Ayahanda No.11 A Medan', '', 'SMPN 19 MEDAN'),
(5, 175437, 'BOBBY SEPTIANANDA RAJA MUNTHE', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Pekan Baru', 'Kamis, 12 September 2002', 'Kristen', NULL, NULL, 'SMPS SANTA MARIA'),
(6, 175438, 'BRIAN JAFRIANDO PURBA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Jambi', 'Rabu, 22 Januari 2003', 'Kristen', NULL, NULL, 'SMPN 30 MEDAN'),
(7, 175444, 'DHIMAS ARYO WICAKSONO', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Sabtu, 22 Juni 2002', 'Islam', NULL, NULL, 'MTS ISLAMIYAH GUPPI'),
(8, 175446, 'DINA BERLIANA BR SITOHANG', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Bagan Batu', 'Jumat, 07 September 2001', 'Kristen', NULL, NULL, 'SMP NEGERI 1 BAGAN S'),
(9, 175448, 'EDWIN EFRAJADO SUMBAYAK', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Pematang Raya', 'Selasa, 29 Januari 2002', 'Kristen', 'Jl. Rondahim P. Raya Simalungun ', NULL, 'SMPN 1 RAYA'),
(10, 175450, 'FAHRA MAISYA PUTRI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Rabu, 10 Oktober 2001', 'Islam', NULL, NULL, 'SMP ISLAM KHAIRUL IM'),
(11, 175455, 'FITRI INDRIANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Jumat, 21 Desember 2001', 'Islam', NULL, NULL, 'SMP NEGERI 27 MEDAN'),
(12, 175456, 'GALIH ATHA FAYI KHANSA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Selasa, 30 April 2002', 'Islam', 'Jl. Lintas Sumatera Aek Ledong ', NULL, 'SMPS SYAFIATUL'),
(13, 175462, 'ISHAD ANSHAR', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Kutacane', 'Rabu, 05 Juni 2002', 'Islam', 'Dusun Psr Lama Kota Blangkejeren Aceh', NULL, 'SMP Negeri 1 Blangke'),
(14, 175463, 'JOICE KRISTIANI TELAUMBANUA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Nias', 'Jumat, 09 Agustus 2002', 'Kristen', NULL, NULL, 'SMP SANTO THOMAS 3 M'),
(15, 175464, 'JONATHAN ANDREW', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Jumat, 19 April 2002', 'Kristen', NULL, NULL, 'SMPS ST THOMAS'),
(16, 175465, 'KEN EL RIDHO FAJDUANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Pematangsiantar', 'Jumat, 01 November 2002', 'Islam', NULL, NULL, 'SMP NEGERI 2 PEMATAN'),
(17, 175466, 'KIKY ANSARA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Selasa, 30 Juli 2002', 'Islam', NULL, NULL, 'SMPN 39 MEDAN'),
(18, 175468, 'MARZUQ MUADZ DIAZ LUTHFI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Padang Halaban', 'Jumat, 22 Maret 2002', 'Islam', NULL, NULL, 'SMPN 1 KOTA BATU'),
(19, 175469, 'MAYA ANGELIA BR SURBAKTI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Sabtu, 11 Mei 2002', 'Kristen', NULL, NULL, 'SMPS BETHANY MEDAN'),
(20, 175467, 'MUHAMMAD ICHSAN BRILIAN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Selasa, 01 Januari 2002', 'Islam', NULL, NULL, 'MTs Mesra P.Siantar'),
(21, 175477, 'NATHASYA PUTRI AMELIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Minggu, 10 Februari 2002', 'Islam', 'JL. HM PUNASEMBIRING KOMPL. GRIYA PERMATA 2 BLOK F', NULL, 'SMP SWASTA MUHAMMADI'),
(22, 175479, 'NISFA AMALIA RAHMADANI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Bahung Kahean', 'Kamis, 05 Desember 2002', 'Islam', 'Huta Mahai Dolok Hilir II Simalungun', NULL, 'SMP MUHAMMMADIYAH 21'),
(23, 175480, 'NURUL AINI PERANGIN-ANGIN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Sabtu, 08 Juni 2002', 'Islam', NULL, NULL, 'SMPN1 TIGA PANAH'),
(24, 175481, 'OKY ALEXANDER SIHOTANG', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Senin, 07 Oktober 2002', 'Kristen', 'Jl. Luku II Gg. Anggrek No.9 Medan Johor ', NULL, 'SMP Swasta Budi Murn'),
(25, 175482, 'PUTRI LOLA AMALIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Marindal', 'Selasa, 02 Juli 2002', 'Islam', 'Jl. Sejati Pasar V marindal I ', NULL, 'SMPN 22 MEDAN'),
(26, 175484, 'RAIHAN ISRAQ ZABRAN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Jumat, 04 Oktober 2002', 'Islam', NULL, NULL, 'SMP SWASTA AL ULUM'),
(27, 175486, 'RICHARD EKIN PRANANTA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Selasa, 19 Februari 2002', 'Kristen', 'JL. BUNGA KEMUNING GG TERATAI TUNTUNGAN', NULL, 'SMPS METHODIST-AN P.'),
(28, 175487, 'RIRIS RIZKY ANGELLINA SITIO', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Jumat, 17 Mei 2002', 'Kristen', 'JL. PANCING KOMP.MMTC NO. 46 D MEDAN ESTE', NULL, 'SMPN11 MEDAN'),
(29, 175490, 'RUDVI SONIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Bekasi', 'Jumat, 23 Agustus 2002', 'Islam', NULL, NULL, 'SMP SWASTA PRIMBANA'),
(30, 175491, 'SABILLAH SAKTI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Padang', 'Jumat, 10 Mei 2002', 'Islam', NULL, NULL, 'SMP NEGERI 1 PANTAI '),
(31, 175493, 'SAMUEL GUNAWAN MARTUA MARBUN', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Minggu, 23 Juni 2002', 'Kristen', NULL, NULL, 'SMPS ST.THOMAS 3 MED'),
(32, 175494, 'SITI MASITAH ARNESIA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Tanjung Morawa', 'Jumat, 02 November 2001', 'Islam', 'JL. BATANG KUIS DUSUN II GG. ISLAMI BUNTU BEDIMBAR', NULL, 'SMPN I TANJUNG MORAW'),
(33, 175495, 'SRI KARINA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Jakarta', 'Minggu, 06 Januari 2002', 'Islam', NULL, NULL, 'SMP NEGERI 1 PANCUR '),
(34, 175497, 'SYAKHIRA SALSABIELLAH', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Selasa, 07 Mei 2002', 'Islam', NULL, NULL, 'SMPN 1 MEDAN'),
(35, 175499, 'URMILA PRAMITHA SARI', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Jakarta', 'Minggu, 09 Juni 2002', 'Islam', NULL, NULL, 'SMPN 26 BOGOR'),
(36, 175502, 'ZULQHI FAHRI MUDA', 'XI - RPL - 1 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Jumat, 01 Februari 2002', 'Islam', 'Dsn Umah Naru Ds kerukunan Kutapanjang  Aceh', NULL, 'SMP Negeri 16 Medan'),
(37, 175430, 'ADELIA DWI PUTRI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Sabtu, 11 Oktober 2003', 'Islam', NULL, NULL, 'SMP DARUSSALAM'),
(38, 175431, 'AGI FADLAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Minggu, 09 Februari 2003', 'Islam', 'Jl. Bunga Wijaya Kusuma', NULL, 'SMP SWASTA NURCAHAYA'),
(39, 175432, 'AHMAD RIDHO MADEARDO SITORUS', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Tembilahan', 'Rabu, 18 September 2002', 'Islam', 'Jl. Mawar Batam', NULL, 'SMP NEGERI 1 SIDAMAN'),
(40, 175433, 'ALDO BEVINDRA. M', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Jumat, 26 April 2002', 'Islam', 'Jl. Setia Budi Tj.Sari Psr I Gg Garuda No.5 Medan', NULL, 'SMP SWASTA BHAYANGKA'),
(41, 175439, 'CHRISTOPHER ANDREAN M.SEMBIRING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Sukatendel', 'Jumat, 22 November 2002', 'Kristen', 'Jl. Serba Guna Gg Beringin No.973 Helvetia', NULL, 'SMP METHODIST 8'),
(42, 175440, 'DARAM PATUIH TONGGA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Rabu, 17 Juli 2002', 'Islam', NULL, NULL, 'SMPS MUHAMMADYAH UNG'),
(43, 175441, 'DEDY SYAHPUTRA RIZKI HARAHAP', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Rabu, 07 Mei 2003', 'Islam', 'Sri Gunting, Bespa Residence', NULL, 'MTSN 3 HELVETIA'),
(44, 175442, 'DEEF SIHOMBING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Selasa, 04 Juni 2002', 'Islam', 'Jl. Kapas 8 No.15 P.Simalingkar ', NULL, 'SMPS SITI HAJAR'),
(45, 175443, 'DENPUDAN MOMPANG JOSE MANALU', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Pematang Sianta', 'Jumat, 05 Juli 2002', 'Kristen', 'Jl. Sejahtera No.49 Pematang Siantar', NULL, 'SMP CINTA RAKYAR 2 P'),
(46, 175527, 'DIANEME STEFANUS TARIGAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Pontianak', 'Senin, 13 Mei 2002', 'Kristen', 'Jl. Bunga Kesuma Gg Perbesi No.1 Medan Selayang', NULL, 'SMP KRISTEN IMMANUEL'),
(47, 175445, 'DICKY SURYA AMANDA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Jumat, 17 Agustus 2001', 'Islam', NULL, NULL, 'SMPS RAKSANA'),
(48, 175447, 'DIVA FAHREZI PURBA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Galang', 'Minggu, 19 Januari 2003', 'Islam', 'Desa Kulasari Dsn III Sergei', NULL, 'SMP SWASTA SILINDA'),
(49, 175449, 'ERIC PRADANA NASUTION', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Rabu, 02 Oktober 2002', 'Islam', 'Jl. Garuda Gg Pertama No.5 Medan ', NULL, 'SMPS DARUSSALAM'),
(50, 165332, 'FAHREZANANDA RANGKUTI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Senin, 06 November 2000', 'Islam', NULL, NULL, 'SMP. S TAMORA'),
(51, 175451, 'FAIS ADRIAN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Minggu, 07 Juli 2002', 'Islam', 'JL. DELITUA GG. CEMPAKA DUSUN 5 NO.38 DELI TUA', NULL, 'SMP SWASTA PRIMBANA'),
(52, 175452, 'FARHAN ALVINDRA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Kisaran', 'Sabtu, 04 Januari 2003', 'Islam', NULL, NULL, 'SMPN 1 SEI SUKA'),
(53, 175453, 'FERI WENDI PURBA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Luppat Nihirik', 'Minggu, 17 Maret 2002', 'Kristen', 'Desa Luppat Nihirik P. Siantar', NULL, 'SMP SW GKPS SINDAR R'),
(54, 186174, 'FIRZA AKBAR FATRIA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Jumat, 28 Februari 2003', 'Islam', 'komp de zuri no. 1, pasar 2 Tj sari', NULL, 'SMK NAMIRA'),
(55, 175457, 'GILBERT PARISMA HIZKIA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Sabtu, 27 April 2002', 'Kristen', NULL, NULL, 'SMP SANTA MARIA'),
(56, 175459, 'HANES GERALDO GINTING', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Kamis, 20 Juni 2002', 'Kristen', 'Jl. Dr. Mansyur No.75 Medan', NULL, 'SMP DHARMA PANCASILA'),
(57, 175460, 'HANIF NAUFAL ANNAFI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Kamis, 05 September 2002', 'Islam', 'JL. BUNGA SEDAP MALAM XVI MEDAN SELAYANG', NULL, 'SMP MUHAMMADIYAH 3 M'),
(58, 175461, 'IRA MAHARANI SIREGAR', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Huta Baru ', 'Minggu, 14 Juli 2002', 'Islam', NULL, NULL, 'MTSS DARUL ULUM SIPA'),
(60, 165344, 'MEIDY FAHRIZA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Senin, 21 Mei 2001', 'Islam', 'JL. DWIKORA PERUMAHAN D BELLAGIO NO. 1 A MEDAN SUN', NULL, 'SMP S. NAMIRA'),
(61, 175470, 'MOHD FAUZAN AZMI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Selasa, 20 Agustus 2002', 'Islam', 'Jl. Seroja Gg Kecil No.10 B Medan', NULL, 'SMPS NAMIRA MEDAN'),
(62, 175471, 'MUHAMMAD ALBI AL MAHDY', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Cairo', 'Jumat, 13 Desember 2002', 'Islam', 'DUSUN VII GG. DARMO LR. FAMILI TANJUNG MORAWA', NULL, 'MTS. HIDAYATULLAH TA'),
(63, 175472, 'MUHAMMAD FIRZA YAFI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Kamis, 30 Januari 2003', 'Islam', 'JL. MESJID NO.18 DESA LAMA PANCUR BATU', NULL, 'MTS SWASTA AL WASHLI'),
(64, 175473, 'MUHAMMAD NAUFAL MUBARAK', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Sabtu, 20 April 2002', 'Islam', NULL, NULL, 'AL-FITYAN'),
(65, 175474, 'MUHAMMAD NAUVAL AZZAKY', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Petatal', 'Sabtu, 23 November 2002', 'Islam', 'Desa Petatal Kab. Batu Bara', NULL, 'MTS NEGERI LIMA PULU'),
(66, 175475, 'MUHAMMAD RISKI RINALDI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Tanjung Morawa', 'Rabu, 07 Agustus 2002', 'Islam', 'JL. S. BLUMAI HILIR TANJUNG MORAWA', NULL, 'SMPS NUR AZIZI TANJU'),
(67, 175476, 'MUHAMMAD RIZKY FAJRI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Mataram', 'Kamis, 10 Oktober 2002', 'Islam', 'Jl. Flamboyan Raya Debang Taman Sari', NULL, 'SMPN 7 MATARAM'),
(68, 175478, 'NIRWANA SITUMORANG', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Huta Ginjang', 'Minggu, 03 November 2002', 'Kristen', 'Sidikalang', NULL, 'SMP NEGERI 1 TIGALIN'),
(69, 175483, 'RAHMAT WIJAYA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Belawan', 'Minggu, 04 November 2001', 'Islam', 'Jl. Abdul Sani Muthalib Komp.Citra Anugrah Permai ', NULL, 'SMPN 38 MEDAN'),
(70, 175485, 'RICHA ANASTASYA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Kota Cane', 'Rabu, 08 Mei 2002', 'Katolik', 'Jl. A. Yani No.53 Kota Cane', NULL, 'SMPN PRISAI KOTA CAN'),
(71, 175489, 'ROLINTON NATANAEL SINAGA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Senin, 23 Desember 2002', 'Kristen', NULL, NULL, 'SMPN 19 MEDAN'),
(72, 175492, 'SALEH HUSIN SIREGAR', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Selasa, 19 Februari 2002', 'Islam', 'JL. PERTAHANAN NO.71 A SIMP.AMPLAS MEDAN', NULL, 'SMPS MUHAMMADYAH 01'),
(73, 175496, 'STEPHANIE FIRMA KRISTINA', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Kamis, 12 September 2002', 'Kristen', 'Jl. Jermal Raya Lk.15 Sei Mati ', NULL, 'SMP YASPEN HAN'),
(74, 175498, 'TENGKU DAFFA SYAUKY GHIFARI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Belum di set', 'Islam', NULL, NULL, 'ISLAMIC FULL DAY SCH'),
(75, 175500, 'YUDIA FITRI ANGGRENI', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Perempuan', 'Medan', 'Kamis, 19 Desember 2002', 'Islam', NULL, NULL, 'SMPN1 P,BATU'),
(77, 175501, 'ZULFA RIZKI ZULKARNAEN', 'XI - RPL - 2 (Rekayasa Perangkat Lunak)', 'Laki-laki', 'Medan', 'Minggu, 24 Februari 2002', 'Islam', 'Griya Karya Sejahtera Blok B 5 Sumsel', '', 'MTS INAYATULLAH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `no_urut` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`no_urut`, `username`, `password`, `level`) VALUES
(1, 'administrator', 'dianemeganteng', 'Administrator'),
(3, 'guru', '123456', 'Guru'),
(4, 'murid', '123456', 'Siswa'),
(5, '175429', '1754292002', 'Siswa'),
(6, '175434', '1754342002', 'Siswa'),
(7, '175435', '1754352002', 'Siswa'),
(8, '175436', '1754362003', 'Siswa'),
(9, '175437', '1754372002', 'Siswa'),
(10, '175438', '1754382003', 'Siswa'),
(11, '175444', '1754442002', 'Siswa'),
(12, '175446', '1754462001', 'Siswa'),
(13, '175448', '1754482002', 'Siswa'),
(14, '175450', '1754502001', 'Siswa'),
(15, '175455', '1754552001', 'Siswa'),
(16, '175456', '1754562002', 'Siswa'),
(17, '175462', '1754622002', 'Siswa'),
(18, '175463', '1754632002', 'Siswa'),
(19, '175464', '1754642002', 'Siswa'),
(20, '175465', '1754652002', 'Siswa'),
(21, '175466', '1754662002', 'Siswa'),
(22, '175468', '1754682002', 'Siswa'),
(23, '175469', '1754692002', 'Siswa'),
(24, '175467', '1754672002', 'Siswa'),
(25, '175477', '1754772002', 'Siswa'),
(26, '175479', '1754792002', 'Siswa'),
(27, '175480', '1754802002', 'Siswa'),
(28, '175481', '1754812002', 'Siswa'),
(29, '175482', '1754822002', 'Siswa'),
(30, '175484', '1754842002', 'Siswa'),
(31, '175486', '1754862002', 'Siswa'),
(32, '175487', '1754872002', 'Siswa'),
(33, '175490', '1754902002', 'Siswa'),
(34, '175491', '1754912002', 'Siswa'),
(35, '175493', '1754932002', 'Siswa'),
(36, '175494', '1754942001', 'Siswa'),
(37, '175495', '1754952002', 'Siswa'),
(38, '175497', '1754972002', 'Siswa'),
(39, '175499', '1754992002', 'Siswa'),
(40, '175502', '1755022002', 'Siswa'),
(41, '175430', '1754302003', 'Siswa'),
(42, '175431', '1754312003', 'Siswa'),
(43, '175432', '1754322002', 'Siswa'),
(44, '175433', '1754332002', 'Siswa'),
(45, '175439', '1754392002', 'Siswa'),
(46, '175440', '1754402002', 'Siswa'),
(47, '175441', '1754412003', 'Siswa'),
(48, '175442', '1754422002', 'Siswa'),
(49, '175443', '1754432002', 'Siswa'),
(50, '175527', '1755272002', 'Siswa'),
(51, '175445', '1754452001', 'Siswa'),
(52, '175447', '1754472003', 'Siswa'),
(53, '175449', '1754492002', 'Siswa'),
(54, '165332', '1653322000', 'Siswa'),
(55, '175451', '1754512002', 'Siswa'),
(56, '175452', '1754522003', 'Siswa'),
(57, '175453', '1754532002', 'Siswa'),
(58, '186174', '1861742003', 'Siswa'),
(59, '175457', '1754572002', 'Siswa'),
(60, '175459', '1754592002', 'Siswa'),
(61, '175460', '1754602002', 'Siswa'),
(62, '175461', '1754612002', 'Siswa'),
(63, '165344', '1653442001', 'Siswa'),
(64, '175470', '1754702002', 'Siswa'),
(65, '175471', '1754712002', 'Siswa'),
(66, '175472', '1754722003', 'Siswa'),
(67, '175473', '1754732002', 'Siswa'),
(68, '175474', '1754742002', 'Siswa'),
(69, '175475', '1754752002', 'Siswa'),
(70, '175476', '1754762002', 'Siswa'),
(71, '175478', '1754782002', 'Siswa'),
(72, '175483', '1754832001', 'Siswa'),
(73, '175485', '1754852002', 'Siswa'),
(74, '175489', '1754892002', 'Siswa'),
(75, '175492', '1754922002', 'Siswa'),
(76, '175496', '1754962002', 'Siswa'),
(77, '175498', '1754982002', 'Siswa'),
(78, '175500', '1755002002', 'Siswa'),
(79, '175501', '1755012002', 'Siswa'),
(80, '9898090', '123456', 'Guru'),
(81, '9730695', '123456', 'Guru'),
(82, '1000027', '123456', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website`
--

CREATE TABLE `tbl_website` (
  `nama_sekolah` varchar(30) NOT NULL,
  `web_sekolah` varchar(30) NOT NULL,
  `tahun_ajaran` text NOT NULL,
  `semester` varchar(30) NOT NULL,
  `manage_dir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_website`
--

INSERT INTO `tbl_website` (`nama_sekolah`, `web_sekolah`, `tahun_ajaran`, `semester`, `manage_dir`) VALUES
('SMK JAMALUDIN', 'https://smkjamaludin.sch.id', 'Tahun Ajaran 2018/2019', 'Semester Genap', 'manage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tbl_calonsiswaterdaftar`
--
ALTER TABLE `tbl_calonsiswaterdaftar`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `no_pendaftaran` (`no_pendaftaran`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `no_tagihan` (`no_tagihan`);

--
-- Indexes for table `tbl_mutasi`
--
ALTER TABLE `tbl_mutasi`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tbl_nilai_keterampilan`
--
ALTER TABLE `tbl_nilai_keterampilan`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tbl_nilai_pengetahuan`
--
ALTER TABLE `tbl_nilai_pengetahuan`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `kode_pelajaran` (`kode_pelajaran`);

--
-- Indexes for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`nama_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_calonsiswaterdaftar`
--
ALTER TABLE `tbl_calonsiswaterdaftar`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_keuangan`
--
ALTER TABLE `tbl_keuangan`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mutasi`
--
ALTER TABLE `tbl_mutasi`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nilai_keterampilan`
--
ALTER TABLE `tbl_nilai_keterampilan`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_nilai_pengetahuan`
--
ALTER TABLE `tbl_nilai_pengetahuan`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `no_urut` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_pelanggaran`
--
ALTER TABLE `tbl_pelanggaran`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pertanyaan`
--
ALTER TABLE `tbl_pertanyaan`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `no_urut` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
