-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2024 lúc 07:52 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webgiay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giay`
--

CREATE TABLE `giay` (
  `IDGiay` int(11) NOT NULL,
  `TenGiay` varchar(100) NOT NULL,
  `Gia` double NOT NULL,
  `HieuGiay` int(11) NOT NULL,
  `HinhAnh` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giay`
--

INSERT INTO `giay` (`IDGiay`, `TenGiay`, `Gia`, `HieuGiay`, `HinhAnh`) VALUES
(1, 'Giày Bóng Đá Unisex Nike Legend 9 Academy', 1200000, 1, 'Giày Bóng Đá Unisex Nike Legend 9 Academy.jpg'),
(2, 'Giày Chạy Bộ Nam Nike Air Zoom Pegasus 40 Wide - Xanh Dương', 1500000, 1, 'Giày Chạy Bộ Nam Nike Air Zoom Pegasus 40 Wide - Xanh Dương.jpg'),
(3, 'Giày Đá Bóng Nam Nike Vapor 15 Academy Mercurial Dream Speed - Hồng', 1500000, 1, 'Giày Đá Bóng Nam Nike Vapor 15 Academy Mercurial Dream Speed - Hồng.jpg'),
(4, 'Giày Tennis Nam Nike Court Zoom Vapor Cage 4 Rafa - Trắng', 999000, 1, 'Giày Tennis Nam Nike Court Zoom Vapor Cage 4 Rafa - Trắng.jpg'),
(5, 'Giày Thời Trang Nữ Nike Phoenix Waffle - Trắng', 1200000, 1, 'Giày Thời Trang Nữ Nike Phoenix Waffle - Trắng.jpg'),
(6, 'Giày Chạy Bộ Nam Adidas Supernova Rise - Xám', 986000, 2, 'Giày Chạy Bộ Nam Adidas Supernova Rise - Xám.jpg'),
(7, 'Giày Chạy Bộ Nam Adidas Supernova Rise - Xanh Dương', 2990000, 2, 'Giày Chạy Bộ Nam Adidas Supernova Rise - Xanh Dương.jpg'),
(8, 'Giày Chạy Bộ Nam Adidas Supernova Stride - Xanh Dương', 1499000, 2, 'Giày Chạy Bộ Nam Adidas Supernova Stride - Xanh Dương.jpg'),
(9, 'Giày Chạy Bộ Nữ Adidas Supernova Stride - Hồng', 999000, 2, 'Giày Chạy Bộ Nữ Adidas Supernova Stride - Hồng.jpg'),
(10, 'Giày Sneaker Nữ Adidas Grand Court Cloudfoam Lifestyle Court Comfort - Trắng', 890000, 2, 'Giày Sneaker Nữ Adidas Grand Court Cloudfoam Lifestyle Court Comfort - Trắng.jpg'),
(11, 'Giày Thể Thao Nam Biti’s Hunter Street', 899000, 3, 'Giày Thể Thao Nam Biti’s Hunter Street.jpg'),
(12, 'Giày Thể Thao bittis', 699000, 3, 'Giày Thể Thao bittis.jpg'),
(13, '[Tặng Áo Thun] Giày Thể Thao Nam Biti’s Hunter X Dune - 4 Nguyên Tố Nước', 1500000, 3, '[Tặng Áo Thun] Giày Thể Thao Nam Biti’s Hunter X Dune - 4 Nguyên Tố Nước.jpg'),
(14, '[Tặng Áo Thun] Giày Thể Thao Nam Biti’s Hunter X Dune - 4 Nguyên Tố Lửa', 999000, 3, '[Tặng Áo Thun] Giày Thể Thao Nam Biti’s Hunter X Dune - 4 Nguyên Tố Lửa.jpg'),
(15, 'Giày Thể Thao Nam Biti’s Hunter HSM002900', 1300000, 3, 'Giày Thể Thao Nam Biti’s Hunter HSM002900.jpg'),
(16, 'Giày đi bộ nữ Better Foam Prowl Alt', 1999000, 4, 'Giày đi bộ nữ Better Foam Prowl Alt.jpg'),
(17, 'Giày chạy bộ nữ Softride Pro Echo Slip Metal', 2000000, 4, 'Giày chạy bộ nữ Softride Pro Echo Slip Metal.jpg'),
(18, 'Giày sneakers unisex cổ thấp Puma x The Smurfs', 3999000, 4, 'Giày sneakers unisex cổ thấp Puma x The Smurfs.jpg'),
(19, 'Giày sneakers unisex cổ thấp RS X Forward History', 3.899, 4, 'Giày sneakers unisex cổ thấp RS X Forward History.jpg'),
(20, 'Giày chạy bộ unisex Transport Modern', 1890000, 4, 'Giày chạy bộ unisex Transport Modern.jpg'),
(21, 'Giày VANS KNU SKOOL RETRO COLOR PINK/TRUE WHITE', 2500000, 5, 'Giày VANS KNU SKOOL RETRO COLOR PINKTRUE WHITE.jpg'),
(22, 'VANS OLD SKOOL CLASSIC BLACK/WHITE', 1850000, 5, 'VANS OLD SKOOL CLASSIC BLACKWHITE.jpg'),
(23, 'VANS SK8-HI CLASSIC NAVY/WHITE', 1850000, 5, 'VANS SK8-HI CLASSIC NAVY WHITE.jpg'),
(24, 'VANS CLASSIC AUTHENTIC RED', 1450000, 5, 'VANS CLASSIC AUTHENTIC RED.jpg'),
(25, 'VANS X NATIONAL GEOGRAPHIC AUTHENTIC OCEAN/TRUE WHITE', 1540000, 5, 'VANS X NATIONAL GEOGRAPHIC AUTHENTIC OCEAN TRUE WHITE.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hieugiay`
--

CREATE TABLE `hieugiay` (
  `IDHieuGiay` int(11) NOT NULL,
  `HieuGiay` varchar(100) NOT NULL,
  `GhiChu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hieugiay`
--

INSERT INTO `hieugiay` (`IDHieuGiay`, `HieuGiay`, `GhiChu`) VALUES
(1, 'Nike', ''),
(2, 'Adidas', ''),
(3, 'Biti\'s', ''),
(4, 'Puma', ''),
(5, 'Vans', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `iduser` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `hodem` varchar(30) NOT NULL,
  `ten` varchar(50) NOT NULL,
  `phanquyen` varchar(100) NOT NULL,
  `landangnhapcuoi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`iduser`, `username`, `password`, `hodem`, `ten`, `phanquyen`, `landangnhapcuoi`) VALUES
(1, 'thanh', 'thanh', 'Nguyễn Chí ', 'Thanh', 'SELECT, DELETE', '2024-03-20 07:46:21'),
(2, 'chithanh', 'chithanh', 'Nguyễn Chí', 'Thanh', 'Owner', '2024-03-20 07:48:42');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`IDGiay`),
  ADD KEY `HieuGiay` (`HieuGiay`);

--
-- Chỉ mục cho bảng `hieugiay`
--
ALTER TABLE `hieugiay`
  ADD PRIMARY KEY (`IDHieuGiay`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giay`
--
ALTER TABLE `giay`
  MODIFY `IDGiay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
