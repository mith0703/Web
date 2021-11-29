-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 06:24 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nadu`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_thiet_ke` varchar(30) NOT NULL,
  `chu_de` varchar(100) DEFAULT NULL,
  `dien_tich` int(11) NOT NULL,
  `mau` varchar(30) DEFAULT NULL,
  `cong_nghe` text DEFAULT NULL,
  `gia` int(11) NOT NULL,
  `img_product` text NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `ten_thiet_ke`, `chu_de`, `dien_tich`, `mau`, `cong_nghe`, `gia`, `img_product`, `mo_ta`) VALUES
(1, 'Không gian xanh', 'Hiện đại', 50, 'Xanh lá', ' in 3D, gỗ hiếm', 12000000, '/mvc/public/upload/product/img1 /img_1.jpg', 'luôn mang đến cho bạn một cảm giác tự tin và thời đại'),
(4, 'Mái ấm', 'Nguyên thủy', 50, 'Nâu tinh tế', 'in 3d', 19000000, '/mvc/public/upload/product/img2 /img_2.jpg', 'không chạy theo sự biến đổi toàn cầu, dừng lại và tận hưởng cuộc sống dân dã'),
(5, 'Nắng', 'Thiên nhiên', 321, 'Cam', 'Gỗ soài', 10000000, '/mvc/public/upload/product/img3/img_3.jpg', 'hòa mình với thiên nhiên để cảm nhận nguồn năng lượng vô tận'),
(6, 'Hiện đại', 'Đèn Neon', 222, 'Trắng', 'Hiện đại', 20000000, '/mvc/public/upload/product/img4/img_4.jpg', 'ánh đèn thành phố hiện đại, sáng bừng lên sự nhộn nhịp, đông đúc');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
