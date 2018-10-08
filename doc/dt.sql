-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 11:23 AM
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

--
-- Dumping data for table `chitietcombo`
--

INSERT INTO `chitietcombo` (`ctcb_ma`, `ctcb_soluong`, `combo_ma`, `ta_ma`) VALUES
(22, 1, 11, 19),
(23, 1, 11, 13);

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

--
-- Dumping data for table `chitietdonhang1`
--

INSERT INTO `chitietdonhang1` (`ct1_ma`, `ct1_soluong`, `dh_ma`, `ta_ma`) VALUES
(2, 1, 3, 8),
(5, 1, 6, 13),
(7, 1, 8, 13),
(8, 2, 10, 13);

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

--
-- Dumping data for table `combo`
--

INSERT INTO `combo` (`combo_ma`, `combo_ten`, `combo_gia`, `combo_songuoi`, `combo_mota`, `combo_hinhanh`) VALUES
(11, 'Combo Gà Pizza Xúc Xích', 42000, 2, '', 'no_image.png');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `dh_ma` int(255) NOT NULL,
  `tongtien` int(255) NOT NULL,
  `tiencoc` int(255) DEFAULT NULL,
  `ghichu` varchar(1000) NOT NULL,
  `thoigian` datetime NOT NULL,
  `trangthai` int(255) NOT NULL,
  `kh_ma` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`dh_ma`, `tongtien`, `tiencoc`, `ghichu`, `thoigian`, `trangthai`, `kh_ma`) VALUES
(1, 93000, 40000, 'Gà cay ', '0000-00-00 00:00:00', 0, 1),
(2, 93000, NULL, '', '2018-09-16 00:00:00', 0, 1),
(3, 75000, 123213, '23123213', '2018-09-16 11:48:26', 0, 23),
(4, 33000, 0, '123123', '2018-09-16 11:51:08', 0, 26),
(5, 45000, 122121, '123123', '2018-09-16 11:51:24', 0, 27),
(6, 44000, 0, '123123213', '2018-09-16 11:53:04', 0, 28),
(7, 27000, 0, '3123123123', '2018-09-16 11:59:37', 0, 32),
(8, 44000, 0, '7868768', '2018-09-16 12:14:40', 1, 33),
(9, 90000, 30000, 'Không hành ', '2018-09-16 14:38:25', 1, 34),
(10, 103000, 40000, 'kajfkjsdfdsf', '2018-09-16 15:00:28', 1, 35),
(11, 100000, 20000, 'Nhanh giups ', '2018-09-18 09:00:23', 1, 36);

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

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`kh_ma`, `kh_ten`, `kh_diachi`, `kh_sdt`) VALUES
(1, 'Đức', '128 Nguyễn Văn Cừ ', 1234111222),
(2, 'Hải', '12312312312', 938272333),
(3, 'Hải', '12312312312', 938272333),
(4, 'Hải', '12321312 ', 938272333),
(5, 'Hải', '12321312 ', 938272333),
(6, 'Đức', '23123 123aasdasd ', 1234111222),
(7, 'Hải', '128 Nguyễn Văn Cừ ', 938272333),
(8, 'Hải', '128 Nguyễn Văn Cừ ', 938272333),
(9, 'Hải', '128 Nguyễn Văn Cừ ', 938272333),
(10, 'sdfsdaf', '34234asdfasfdas', 5645645),
(11, 'sdfsdaf', '34234asdfasfdas', 5645645),
(12, 'Đức', '23123 123aasdasd ', 1234111222),
(13, 'Đức', '23123 123aasdasd ', 1234111222),
(14, 'Đức', '23123 123aasdasd ', 1234111222),
(15, 'Đức', '23123123213', 8756),
(16, 'Đức', '23123123213', 8756),
(17, 'Hải', '213123123', 123123213),
(18, 'Hải', '213123123', 123123213),
(19, 'Hải', '213123123', 123123213),
(20, 'asdfasdf', '123 dsdfdsf', 213213213),
(21, 'asdfasdf', '123 dsdfdsf', 213213213),
(22, 'Hằng', '2232 trtrtrtrt', 938272333),
(23, '21123213', '1232131', 2147483647),
(24, '123213', '123123', 123123213),
(25, '312312', '123123', 12312213),
(26, '2424213', '123123', 123123),
(27, '2312321', '23213', 123213213),
(28, '312312', '123123', 123123213),
(29, '756765765', '56756756', 567567567),
(30, '756765765', '56756756', 567567567),
(31, '435345', '43754754', 345345),
(32, '213213125', '123123', 123123),
(33, '78687687', '786876', 87687678),
(34, 'Thủy', '33 Ngô Đức Kế', 999888999),
(35, 'Hao', '2032123123 skjdfkjsf', 999888999),
(36, 'Đức', '128 Nguyễn Văn Cừ ', 1234111222);

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
(1, 'Gà'),
(2, 'Bò'),
(3, 'Pizza '),
(4, 'Thức ăn nhẹ '),
(5, 'Tráng miệng'),
(6, 'Thức uống ');

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
(8, 'Pizza Hải Sản', 75000, 1, '8.png', 3),
(13, 'Pizza Xúc Xích ', 44000, 0, '13.png', 3),
(18, 'Gà A', 23000, 1, 'no_image.png', 1),
(19, 'Gà B', 33000, 1, 'no_image.png', 1);

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
  ADD UNIQUE KEY `ct1_ma` (`ct1_ma`),
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
  MODIFY `ctcb_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chitietdonhang1`
--
ALTER TABLE `chitietdonhang1`
  MODIFY `ct1_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chitietdonhang2`
--
ALTER TABLE `chitietdonhang2`
  MODIFY `ct2_ma` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `combo`
--
ALTER TABLE `combo`
  MODIFY `combo_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `dh_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `kh_ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `loaithucan`
--
ALTER TABLE `loaithucan`
  MODIFY `loai_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `thucan`
--
ALTER TABLE `thucan`
  MODIFY `ta_ma` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietcombo`
--
ALTER TABLE `chitietcombo`
  ADD CONSTRAINT `chitietcombo_ibfk_1` FOREIGN KEY (`combo_ma`) REFERENCES `combo` (`combo_ma`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitietcombo_ibfk_2` FOREIGN KEY (`ta_ma`) REFERENCES `thucan` (`ta_ma`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chitietdonhang1`
--
ALTER TABLE `chitietdonhang1`
  ADD CONSTRAINT `chitietdonhang1_ibfk_1` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdonhang1_ibfk_2` FOREIGN KEY (`ta_ma`) REFERENCES `thucan` (`ta_ma`) ON DELETE CASCADE;

--
-- Constraints for table `chitietdonhang2`
--
ALTER TABLE `chitietdonhang2`
  ADD CONSTRAINT `chitietdonhang2_ibfk_1` FOREIGN KEY (`dh_ma`) REFERENCES `donhang` (`dh_ma`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdonhang2_ibfk_2` FOREIGN KEY (`combo_ma`) REFERENCES `combo` (`combo_ma`) ON DELETE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`kh_ma`) REFERENCES `khachhang` (`kh_ma`);

--
-- Constraints for table `thucan`
--
ALTER TABLE `thucan`
  ADD CONSTRAINT `thucan_ibfk_1` FOREIGN KEY (`ta_loai`) REFERENCES `loaithucan` (`loai_ma`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
