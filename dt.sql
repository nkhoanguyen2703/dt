-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 11, 2018 at 05:48 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietcombo`
--

CREATE TABLE `chitietcombo` (
  `ctcb_ma` int(255) NOT NULL,
  `ctcb_soluong` int(255) NOT NULL,
  `combo_ma` int(255) NOT NULL,
  `ta_ma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang1`
--

CREATE TABLE `chitietdonhang1` (
  `ct1_ma` int(255) NOT NULL,
  `ct1_soluong` int(255) NOT NULL,
  `dh_ma` int(255) NOT NULL,
  `ta_ma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang2`
--

CREATE TABLE `chitietdonhang2` (
  `ct2_ma` int(255) NOT NULL,
  `ct2_soluong` int(255) NOT NULL,
  `dh_ma` int(255) NOT NULL,
  `combo_ma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `combo`
--

CREATE TABLE `combo` (
  `combo_ma` int(255) NOT NULL,
  `combo_ten` varchar(255) NOT NULL,
  `combo_gia` int(255) NOT NULL,
  `combo_songuoi` int(255) NOT NULL,
  `combo_mota` varchar(10000) NOT NULL,
  `combo_hinhanh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `dh_ma` int(255) NOT NULL,
  `tongtien` int(255) NOT NULL,
  `tiencoc` int(255) NOT NULL,
  `ghichu` varchar(1000) NOT NULL,
  `trangthai` int(255) NOT NULL,
  `kh_ma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `kh_ma` int(11) NOT NULL,
  `kh_ten` varchar(255) NOT NULL,
  `kh_diachi` varchar(255) NOT NULL,
  `kh_sdt` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loaithucan`
--

CREATE TABLE `loaithucan` (
  `loai_ma` int(255) NOT NULL,
  `loai_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loaithucan`
--

INSERT INTO `loaithucan` (`loai_ma`, `loai_ten`) VALUES
(1, 'Loai1'),
(2, 'Loai2');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `nv_ma` varchar(255) NOT NULL,
  `nv_matkhau` varchar(255) NOT NULL,
  `nv_ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`nv_ma`, `nv_matkhau`, `nv_ten`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `thucan`
--

CREATE TABLE `thucan` (
  `ta_ma` int(255) NOT NULL,
  `ta_ten` varchar(255) NOT NULL,
  `ta_gia` int(255) NOT NULL,
  `ta_tinhtrang` tinyint(1) NOT NULL,
  `ta_hinhanh` varchar(255) NOT NULL,
  `ta_loai` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thucan`
--

INSERT INTO `thucan` (`ta_ma`, `ta_ten`, `ta_gia`, `ta_tinhtrang`, `ta_hinhanh`, `ta_loai`) VALUES
(1, 'ten1', 12, 1, '', 1),
(2, 'ten2', 2, 0, '', 1),
(3, 'Gà rán truyền thống ', 32000, 1, 'no_image.jpg', 2),
(4, 'asdasd', 12222, 1, '4', 1),
(5, 'asdfdsaf', 122323, 1, '5', 2),
(6, 'asdasd', 12000, 1, 'no_image.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietcombo`
--
ALTER TABLE `chitietcombo`
  ADD PRIMARY KEY (`ctcb_ma`),
  ADD KEY `combo_ma` (`combo_ma`),
  ADD KEY `ta_ma` (`ta_ma`);

--
-- Indexes for table `chitietdonhang1`
--
ALTER TABLE `chitietdonhang1`
  ADD PRIMARY KEY (`ct1_ma`),
  ADD KEY `dh_ma` (`dh_ma`),
  ADD KEY `ta_ma` (`ta_ma`);

--
-- Indexes for table `chitietdonhang2`
--
ALTER TABLE `chitietdonhang2`
  ADD PRIMARY KEY (`ct2_ma`),
  ADD KEY `dh_ma` (`dh_ma`),
  ADD KEY `combo_ma` (`combo_ma`);

--
-- Indexes for table `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`combo_ma`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`dh_ma`),
  ADD KEY `kh_ma` (`kh_ma`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`kh_ma`);

--
-- Indexes for table `loaithucan`
--
ALTER TABLE `loaithucan`
  ADD PRIMARY KEY (`loai_ma`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`nv_ma`);

--
-- Indexes for table `thucan`
--
ALTER TABLE `thucan`
  ADD PRIMARY KEY (`ta_ma`),
  ADD KEY `ta_loai` (`ta_loai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitietcombo`
--
ALTER TABLE `chitietcombo`
  MODIFY `ctcb_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietdonhang1`
--
ALTER TABLE `chitietdonhang1`
  MODIFY `ct1_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietdonhang2`
--
ALTER TABLE `chitietdonhang2`
  MODIFY `ct2_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `combo_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `dh_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loaithucan`
--
ALTER TABLE `loaithucan`
  MODIFY `loai_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thucan`
--
ALTER TABLE `thucan`
  MODIFY `ta_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietcombo`
--
ALTER TABLE `chitietcombo`
  ADD CONSTRAINT `chitietcombo_ibfk_1` FOREIGN KEY (`combo_ma`) REFERENCES `combo` (`combo_ma`),
  ADD CONSTRAINT `chitietcombo_ibfk_2` FOREIGN KEY (`ta_ma`) REFERENCES `thucan` (`ta_ma`);

--
-- Constraints for table `chitietdonhang1`
--
ALTER TABLE `chitietdonhang1`
  ADD CONSTRAINT `chitietdonhang1_ibfk_1` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`),
  ADD CONSTRAINT `chitietdonhang1_ibfk_2` FOREIGN KEY (`ta_ma`) REFERENCES `thucan` (`ta_ma`);

--
-- Constraints for table `chitietdonhang2`
--
ALTER TABLE `chitietdonhang2`
  ADD CONSTRAINT `chitietdonhang2_ibfk_1` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`),
  ADD CONSTRAINT `chitietdonhang2_ibfk_2` FOREIGN KEY (`combo_ma`) REFERENCES `combo` (`combo_ma`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`);

--
-- Constraints for table `thucan`
--
ALTER TABLE `thucan`
  ADD CONSTRAINT `thucan_ibfk_1` FOREIGN KEY (`ta_loai`) REFERENCES `loaithucan` (`loai_ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
