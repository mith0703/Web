-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 07:02 AM
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
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id_new` int(10) UNSIGNED NOT NULL,
  `tieu_de` varchar(100) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id_new`, `tieu_de`, `noi_dung`) VALUES
(1, 'Kiem tra', 'Kiem tra 10523213123213213213213213'),
(2, 'Kiem tra 2', 'Kiem tra 105232131232132132132132123232');

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

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(50) NOT NULL,
  `ho` varchar(50) DEFAULT NULL,
  `ten` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `dien_thoai` varchar(10) DEFAULT NULL,
  `mat_khau` varchar(1000) NOT NULL,
  `vai_tro` int(10) UNSIGNED NOT NULL,
  `img_profile` text DEFAULT NULL,
  `dia_chi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `ten_dang_nhap`, `ho`, `ten`, `email`, `dien_thoai`, `mat_khau`, `vai_tro`, `img_profile`, `dia_chi`) VALUES
(63, 'nhutanh', '1233', 'lenhutanh', 'cuibap@yopmail.com', '21323213', '$2y$10$4FNNT8r1h95Y4y8h4jgf2uERAYvzgZcN5aPEwsvGcdWIT8sX5YE0K', 0, '/mvc/public/upload/user/nhutanh/person_2.jpg', '40/20'),
(64, 'nhutanh1111', 'lenhutanh', '1233443534', 'cuibap@yopmail.com', '21323213', '$2y$10$j.nF0hyyArrApYpQ6MStUu1e8ynddw8l0nBti9belaeogxUhmwZZa', 0, '/mvc/public/upload/user/nhutanh111155555/person_1.jpg', '40/20'),
(68, 'nhutanh3', 'le', 'anh', 'cuibap@yopmail.com', '21323213', '$2y$10$tngQBKeMcpgBjOBTcjWr6eC2MqN/nZuJVFgUZbaqpB/KQ7/kmDWFu', 1, '/mvc/public/upload/user/nhutanh3/person_1.jpg', '40/20'),
(69, 'nhutanh22', 'lenhutanh', '1233', 'cuibap@yopmail.com', '21323213', '$2y$10$8k9eDh4wh31GIi2vcOXzNOjf3KxnR6FISPTQP1Qn7w0C5D/sNBK0W', 0, '/mvc/public/upload/user/nhutanh22/260659100_1235717313615041_7554221249981168257_n.png', '40/20'),
(70, 'nhutan66', 'lenhutanh', '1233', 'cuibap@yopmail.com', '21323213', '$2y$10$MuUXr9LHih5IDc/6wwIbMOdH3gLFQBAnZW9ql5Mza8RQD0UbGiTAG', 1, '/mvc/public/upload/user/nhutan66/person_1.jpg', '40/20'),
(71, 'user', 'lenhutanh', '1233', 'cuibap@yopmail.com', '0589903741', '$2y$10$Z01HSiu2mPQ2ISPX8z5NMOf/TnzH6dvEMJWf.9h3rYBVG3Z5/CWQi', 1, '/mvc/public/upload/user/user/person_2.jpg', '40/20'),
(72, 'anhle nhut', 'lenhutanh', '1233', 'cuibap@yopmail.com', '0589903741', '$2y$10$5GmATYvAODs/jr/3okaaMO8Ino7mKolMSo00cipISqc61sIP90feG', 1, '/mvc/public/upload/user/anhle nhut/person_1.jpg', '40/20'),
(73, '', '', '', '', '', '$2y$10$SJRYbfIP/oweTgne3I/bI.I/A6KO8K9ehKUlkxgrgdn4sJGvkNC6S', 0, '/mvc/public/upload/user//person_2.jpg', ''),
(74, 'caotri1108', 'Đoàn', 'Trí', 'tri.doan218138@hcmut.edu.vn', '0961094102', '$2y$10$R0nVJCe/Kx/1eazVN6KH/eeuQnNFrssLSwzEYkfGlY8lTmKZdsw46', 0, '/mvc/public/upload/user/caotri1108/ava.jpg', 'Tien Giang');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD UNIQUE KEY `ten_dang_nhap` (`ten_dang_nhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
