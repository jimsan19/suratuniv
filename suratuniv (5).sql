-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2022 at 05:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suratuniv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cutialasan`
--

CREATE TABLE `cutialasan` (
  `alasancuti` varchar(140) NOT NULL,
  `nip` varchar(90) NOT NULL,
  `alamatcuti` varchar(90) NOT NULL,
  `tglsur` datetime NOT NULL DEFAULT current_timestamp(),
  `tglselesai` date NOT NULL,
  `tglmulai` date NOT NULL,
  `idfak` int(11) NOT NULL,
  `nocut` char(50) NOT NULL,
  `nomor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cutialasan`
--

INSERT INTO `cutialasan` (`alasancuti`, `nip`, `alamatcuti`, `tglsur`, `tglselesai`, `tglmulai`, `idfak`, `nocut`, `nomor`) VALUES
(' dadada', '', 'a', '2022-11-12 11:26:44', '2022-12-09', '2022-11-10', 1, ' 001', '/UN56/CO6/KP.10.02/2022'),
(' menemani istri yang sakit', 'Muh RIdho Ws', 'SDFS', '2022-11-12 11:27:56', '2022-11-19', '2022-11-11', 1, ' 002', '/UN56/CO6/KP.10.02/2022'),
(' sdadadsa', '21', 'waea', '2022-11-12 11:33:29', '2022-12-07', '2022-11-10', 1, ' 003', '/UN56/CO6/KP.10.02/2022');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `iddosen` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nip` int(20) NOT NULL,
  `jabatan` varchar(10) NOT NULL,
  `notlp` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`iddosen`, `nama`, `nip`, `jabatan`, `notlp`) VALUES
(1, 'Anjar Pradipta, S.kom., M.Kom ', 21, 'Kaprodi', '0927222');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `idfak` int(11) NOT NULL,
  `namafak` text NOT NULL,
  `dekanfak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`idfak`, `namafak`, `dekanfak`) VALUES
(1, 'FAKULTAS SAINS DAN TEKNOLOGI', 'Dr. Agus Qomaruddin Munir., S.T., M.Csi');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` char(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` char(2) NOT NULL,
  `notlp` char(16) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `jk`, `notlp`, `email`, `alamat`) VALUES
('19240015', 'Muh RIdho Ws', 'L', '081249429071', '@gmail.com', 'hayo dimana ya');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `idprodi` int(11) NOT NULL,
  `namaprodi` varchar(50) NOT NULL,
  `kaprodi` varchar(50) NOT NULL,
  `idfak` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`idprodi`, `namaprodi`, `kaprodi`, `idfak`) VALUES
(1, 'Teknologi Informasi', 'Anjar Pradipta, S.kom., M.Kom ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suratcuti`
--

CREATE TABLE `suratcuti` (
  `idcuti` int(11) NOT NULL,
  `alasancuti` varchar(40) NOT NULL,
  `nip` varchar(90) NOT NULL,
  `alamatcuti` varchar(90) NOT NULL,
  `tglsur` datetime NOT NULL DEFAULT current_timestamp(),
  `jeniscuti` varchar(30) NOT NULL,
  `tglselesai` date NOT NULL,
  `tglmulai` date NOT NULL,
  `idfak` int(11) NOT NULL,
  `nocut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suratcutistaff`
--

CREATE TABLE `suratcutistaff` (
  `idcuti` int(11) NOT NULL,
  `alasancuti` varchar(40) NOT NULL,
  `nip` varchar(90) NOT NULL,
  `alamatcuti` varchar(90) NOT NULL,
  `tglsur` datetime NOT NULL DEFAULT current_timestamp(),
  `jeniscuti` varchar(30) NOT NULL,
  `tglselesai` date NOT NULL,
  `tglmulai` date NOT NULL,
  `idfak` int(11) NOT NULL,
  `nocut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suratpen`
--

CREATE TABLE `suratpen` (
  `idpen` int(11) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `pembimbing1` varchar(40) NOT NULL,
  `pembimbing2` varchar(40) NOT NULL,
  `judul` varchar(225) NOT NULL,
  `nomorsurat` varchar(30) NOT NULL,
  `perihal` varchar(40) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `fakultas` varchar(40) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suratpen`
--

INSERT INTO `suratpen` (`idpen`, `nim`, `pembimbing1`, `pembimbing2`, `judul`, `nomorsurat`, `perihal`, `prodi`, `fakultas`, `tanggal`) VALUES
(2, '19240015', 'Muh RIdho Ws', 'Muh RIdho Ws', 'SISTEM', '', '', '', '', '2022-10-31'),
(4, '19240015', 'Muh RIdho Ws', 'Muh RIdho Ws', 'cxcxcxccx', '0001/UN56.C06/PN.03.00/2022', 'xxxzxzcxx', 'Teknologi Informasi', 'FAKULTAS SAINS DAN TEKNOLOGI', '2022-11-07'),
(5, '19240015', 'Muh RIdho Ws', 'Muh RIdho Ws', 'A', '0005/UN56.C06/PN.03.00/2022', 'A', 'Teknologi Informasi', 'FAKULTAS SAINS DAN TEKNOLOGI', '2022-11-12');

-- --------------------------------------------------------

--
-- Table structure for table `suratsakit`
--

CREATE TABLE `suratsakit` (
  `idsakit` int(11) NOT NULL,
  `alasancuti` varchar(40) NOT NULL,
  `nip` varchar(90) NOT NULL,
  `alamatcuti` varchar(90) NOT NULL,
  `tglsur` datetime NOT NULL DEFAULT current_timestamp(),
  `tglselesai` date NOT NULL,
  `tglmulai` date NOT NULL,
  `idfak` int(11) NOT NULL,
  `nocut` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suratsakit`
--

INSERT INTO `suratsakit` (`idsakit`, `alasancuti`, `nip`, `alamatcuti`, `tglsur`, `tglselesai`, `tglmulai`, `idfak`, `nocut`) VALUES
(2, ' asdasdasd', '21', 'asdsad', '2022-11-12 10:31:14', '2022-11-27', '2022-11-12', 1, '0002/UN56/CO6/KP.10.02/2022');

-- --------------------------------------------------------

--
-- Table structure for table `surattugas`
--

CREATE TABLE `surattugas` (
  `idsuratt` int(11) NOT NULL,
  `namasurat` varchar(20) NOT NULL,
  `nomor` varchar(30) NOT NULL,
  `iddosen` int(11) NOT NULL,
  `isi` varchar(40) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `surattugas`
--

INSERT INTO `surattugas` (`idsuratt`, `namasurat`, `nomor`, `iddosen`, `isi`, `tanggal`) VALUES
(1, 'surat tugas', '323nddn', 21, 'ada', '2022-10-31'),
(3, 'aa', '0001/UN56.C06/KP.08/2022', 1, 'ddsdsds', '2022-11-07'),
(4, 'bbbb', '0023/UN56.C06/KP.08/2022', 1, 'hffhhfjhjfjh', '2022-11-07'),
(5, 'asddad', '0005/UN56.C06/KP.08/2022', 21, 'dsasdasddaasd', '2022-11-19');

-- --------------------------------------------------------

--
-- Table structure for table `tatausaha`
--

CREATE TABLE `tatausaha` (
  `idtu` int(11) NOT NULL,
  `namatu` varchar(100) NOT NULL,
  `nip` char(18) NOT NULL,
  `create` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tatausaha`
--

INSERT INTO `tatausaha` (`idtu`, `namatu`, `nip`, `create`) VALUES
(1, 'agus', '12121', '2022-11-12 11:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
(1, 'adm', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cutialasan`
--
ALTER TABLE `cutialasan`
  ADD PRIMARY KEY (`nocut`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`iddosen`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`idfak`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`idprodi`);

--
-- Indexes for table `suratcuti`
--
ALTER TABLE `suratcuti`
  ADD PRIMARY KEY (`idcuti`);

--
-- Indexes for table `suratcutistaff`
--
ALTER TABLE `suratcutistaff`
  ADD PRIMARY KEY (`idcuti`);

--
-- Indexes for table `suratpen`
--
ALTER TABLE `suratpen`
  ADD PRIMARY KEY (`idpen`);

--
-- Indexes for table `suratsakit`
--
ALTER TABLE `suratsakit`
  ADD PRIMARY KEY (`idsakit`);

--
-- Indexes for table `surattugas`
--
ALTER TABLE `surattugas`
  ADD PRIMARY KEY (`idsuratt`);

--
-- Indexes for table `tatausaha`
--
ALTER TABLE `tatausaha`
  ADD PRIMARY KEY (`idtu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `iddosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `idfak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `idprodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratcuti`
--
ALTER TABLE `suratcuti`
  MODIFY `idcuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `suratcutistaff`
--
ALTER TABLE `suratcutistaff`
  MODIFY `idcuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suratpen`
--
ALTER TABLE `suratpen`
  MODIFY `idpen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suratsakit`
--
ALTER TABLE `suratsakit`
  MODIFY `idsakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surattugas`
--
ALTER TABLE `surattugas`
  MODIFY `idsuratt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tatausaha`
--
ALTER TABLE `tatausaha`
  MODIFY `idtu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
