-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 02, 2021 lúc 05:57 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `macnhom6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `id_sanpham` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `id_hoadon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `ma_hoa_don` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `id` int(11) NOT NULL,
  `tenloai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`id`, `tenloai`, `time`) VALUES(1, 'macbook', '2021-08-01 05:40:59');
INSERT INTO `loaisp` (`id`, `tenloai`, `time`) VALUES(2, 'ipad', '2021-08-01 05:40:59');
INSERT INTO `loaisp` (`id`, `tenloai`, `time`) VALUES(3, 'imac', '2021-08-01 05:40:59');
INSERT INTO `loaisp` (`id`, `tenloai`, `time`) VALUES(4, 'mouse', '2021-08-01 05:42:04');
INSERT INTO `loaisp` (`id`, `tenloai`, `time`) VALUES(5, 'keyboard', '2021-08-01 05:42:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `id_loai` int(11) NOT NULL,
  `ten_sp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `cpu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` int(11) NOT NULL,
  `o_cung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `card` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(1, 1, 'MacBook Pro 2020 13 inch (MYD82/MYDA2)', 6, 'Apple M1 8GB RAM 256GB SSD – NEW', 30990000, 'mac1.jpeg ', '2021-08-01 16:42:37', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 16, '256GB SSD', '256GB SSD');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(2, 1, 'MacBook Pro 2020 13 inch (MYD92/MYDC2)', 3, 'Apple M1 8GB RAM 256GB SSD – NEW', 35990000, 'mac2.jpeg ', '2021-08-01 16:42:37', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 16, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(3, 1, 'MacBook Pro 2020 13 inch (MXK32/MXK62)', 1, 'Core i5 1.4GHz 8GB RAM 256GB SSD – NEW', 23939000, 'mac4.jpeg', '2021-08-01 17:32:39', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 8, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(4, 1, 'MacBook Pro 2020 13 inch', 7, 'Apple M1 16GB RAM 256GB/512GB/1TB SSD - NEW', 37890000, 'mac4.jpeg', '2021-08-01 17:32:39', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 8, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(5, 1, 'MacBook Pro 2020 13 inch (MYD82/MYDA2)', 1, 'Apple M1 8GB RAM 256GB SSD – Like New', 28200000, 'mac5.jpeg', '2021-08-01 17:36:09', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 16, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(6, 1, 'MacBook Pro 2020 13 inch (MYD92/MYDC2)', 1, 'Apple M1 8GB RAM 512GB SSD – Like New', 31300000, 'mac6.jpeg', '2021-08-01 17:36:09', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 32, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(7, 2, 'MacBook Pro 2020 13 inch (MYD82/MYDA2)', 2, 'Apple M1 8GB RAM 256GB SSD – NEW', 30990000, 'ipad1.jpg', '2021-08-01 17:41:31', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 32, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(8, 2, 'MacBook Pro 2020 13 inch (MYD92/MYDC2)', 3, 'Apple M1 8GB RAM 512GB SSD – NEW', 35590000, 'ipad2.jpg', '2021-08-01 17:41:31', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 32, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(9, 3, 'MacBook Pro 2020 13 inch (MYD82/MYDA2)', 8, 'Apple M1 8GB RAM 256GB SSD – NEW', 30990000, 'imac1.jpeg', '2021-08-01 17:46:00', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 32, '256GB SSD', '8-core GPU');
INSERT INTO `sanpham` (`id`, `id_loai`, `ten_sp`, `soluong`, `mo_ta`, `price`, `images`, `time`, `cpu`, `ram`, `o_cung`, `card`) VALUES(10, 3, 'Apple M1 8GB RAM 256GB SSD – NEW', 1, 'Apple M1 8GB RAM 512GB SSD – NEW', 35590000, 'imac2.jpeg', '2021-08-01 17:46:00', 'Apple M1 chip with 8-core CPU, 8-core GPU, and 16-core Neural Engine', 32, '256GB SSD', '8-core GPU');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matKhau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` datetime NOT NULL,
  `phanquyen` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `matKhau`, `time`, `phanquyen`) VALUES(1, 'admin', 'admin@123', '123', '2021-08-01 05:30:34', b'01');
INSERT INTO `user` (`id`, `name`, `email`, `matKhau`, `time`, `phanquyen`) VALUES(2, 'DungNN', 'dungnn@gmail.com', '123', '2021-08-01 18:13:26', b'00');
INSERT INTO `user` (`id`, `name`, `email`, `matKhau`, `time`, `phanquyen`) VALUES(3, 'DanhHNT', 'danhhnt@gmail.com', '123', '2021-08-01 18:18:28', b'00');
INSERT INTO `user` (`id`, `name`, `email`, `matKhau`, `time`, `phanquyen`) VALUES(4, 'ngocdung1', 'tienphongcutin@gmail.com', '12345', '2021-08-02 17:36:46', b'00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_hoadon` (`id_hoadon`),
  ADD KEY `id_sanpham` (`id_sanpham`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_loai` (`id_loai`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_hoadon`) REFERENCES `hoa_don` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_sanpham`) REFERENCES `sanpham` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loaisp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
