-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2017 lúc 07:40 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnhankhau`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kb_nhankhau`
--

CREATE TABLE `kb_nhankhau` (
  `id` int(11) NOT NULL,
  `quanhevoichuho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hovaten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hotenkhac` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `noisinh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quequan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dantoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tongiao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quoctich` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `CMND` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `hochieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noithuongtru` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `chohiennay` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdohocvan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdochuyenmon` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trinhdongoaingu` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nghenghiep` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `kb_nhankhau`
--

INSERT INTO `kb_nhankhau` (`id`, `quanhevoichuho`, `hovaten`, `hotenkhac`, `ngaysinh`, `gioitinh`, `noisinh`, `quequan`, `dantoc`, `tongiao`, `quoctich`, `CMND`, `hochieu`, `noithuongtru`, `chohiennay`, `trinhdohocvan`, `trinhdochuyenmon`, `trinhdongoaingu`, `nghenghiep`) VALUES
(3, '', 'lực', 'loe', '1999-02-23', '2', 'thanh hóa ', 'thanh hóa', 'Kinh', 'không', 'Viêt nam ', '231232131', 'không', 'Hà tĩnh', 'hà nội', 'đại học', 'không ', 'không ', 'sinh viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kb_tamtru`
--

CREATE TABLE `kb_tamtru` (
  `id` int(11) NOT NULL,
  `conganquan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `conganphuong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hovaten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `quequan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tamtrutai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tungay` date NOT NULL,
  `denngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kb_tamvang`
--

CREATE TABLE `kb_tamvang` (
  `id` int(11) NOT NULL,
  `hovaten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `CMND` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `noicutru` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tungay` date NOT NULL,
  `denngay` date NOT NULL,
  `lydo` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sohokhau`
--

CREATE TABLE `sohokhau` (
  `hokhauso` int(11) NOT NULL,
  `id_nhankhau` int(11) NOT NULL,
  `quanhevoichuho` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hovaten` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `hovatenkhac` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `Ngyenquan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dantoc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `quoctich` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nghenghiep` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `noithuongtru` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lydo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `username` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `kb_nhankhau`
--
ALTER TABLE `kb_nhankhau`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kb_tamtru`
--
ALTER TABLE `kb_tamtru`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `kb_tamvang`
--
ALTER TABLE `kb_tamvang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sohokhau`
--
ALTER TABLE `sohokhau`
  ADD PRIMARY KEY (`hokhauso`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `kb_nhankhau`
--
ALTER TABLE `kb_nhankhau`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `kb_tamtru`
--
ALTER TABLE `kb_tamtru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `kb_tamvang`
--
ALTER TABLE `kb_tamvang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
