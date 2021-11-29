-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 03:34 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadu`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_new` int(10) UNSIGNED NOT NULL,
  `tieu_de` varchar(100) NOT NULL,
  `noi_dung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_new`, `tieu_de`, `noi_dung`) VALUES
(1, 'Kiem tra', 'Kiem tra 10523213123213213213213213'),
(2, 'Kiem tra 2', 'Kiem tra 105232131232132132132132123232');

-- --------------------------------------------------------

--
-- Table structure for table `product`
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
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten_thiet_ke`, `chu_de`, `dien_tich`, `mau`, `cong_nghe`, `gia`, `img_product`, `mo_ta`) VALUES
(1, 'THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠ', 'Không gian xanh', 50, 'Xanh lá', ' in 3D, gỗ hiếm', 12000000, '', ''),
(2, 'thiet ke', '', 0, '50', '', 0, '', ''),
(4, 'thiet ke 1', 'chu de 1', 50, 'den', 'in 3d', 100, '', ''),
(5, 'thu', '123', 321, '213', '4213', 31231, '/mvc/public/upload/product/321 /person_2.jpg', '1231'),
(6, 'thu 2', '123', 222, '213', '231', 21222, '/mvc/public/upload/product/thu 2/person_2.jpg', '1312');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `ten_dang_nhap`, `ho`, `ten`, `email`, `dien_thoai`, `mat_khau`, `vai_tro`, `img_profile`, `dia_chi`) VALUES
(63, 'nhutanh', '1233', 'lenhutanh', 'cuibap@yopmail.com', '21323213', '$2y$10$4FNNT8r1h95Y4y8h4jgf2uERAYvzgZcN5aPEwsvGcdWIT8sX5YE0K', 0, '/mvc/public/upload/user/nhutanh/person_2.jpg', '40/20'),
(64, 'nhutanh1111', 'lenhutanh', '1233443534', 'cuibap@yopmail.com', '21323213', '$2y$10$j.nF0hyyArrApYpQ6MStUu1e8ynddw8l0nBti9belaeogxUhmwZZa', 0, '/mvc/public/upload/user/nhutanh111155555/person_1.jpg', '40/20'),
(68, 'nhutanh3', 'le', 'anh', 'cuibap@yopmail.com', '21323213', '$2y$10$tngQBKeMcpgBjOBTcjWr6eC2MqN/nZuJVFgUZbaqpB/KQ7/kmDWFu', 1, '/mvc/public/upload/user/nhutanh3/person_1.jpg', '40/20'),
(69, 'nhutanh22', 'lenhutanh', '1233', 'cuibap@yopmail.com', '21323213', '$2y$10$8k9eDh4wh31GIi2vcOXzNOjf3KxnR6FISPTQP1Qn7w0C5D/sNBK0W', 0, '/mvc/public/upload/user/nhutanh22/260659100_1235717313615041_7554221249981168257_n.png', '40/20'),
(70, 'nhutan66', 'lenhutanh', '1233', 'cuibap@yopmail.com', '21323213', '$2y$10$MuUXr9LHih5IDc/6wwIbMOdH3gLFQBAnZW9ql5Mza8RQD0UbGiTAG', 1, '/mvc/public/upload/user/nhutan66/person_1.jpg', '40/20'),
(71, 'user', 'lenhutanh', '1233', 'cuibap@yopmail.com', '0589903741', '$2y$10$Z01HSiu2mPQ2ISPX8z5NMOf/TnzH6dvEMJWf.9h3rYBVG3Z5/CWQi', 1, '/mvc/public/upload/user/user/person_2.jpg', '40/20'),
(72, 'anhle nhut', 'lenhutanh', '1233', 'cuibap@yopmail.com', '0589903741', '$2y$10$5GmATYvAODs/jr/3okaaMO8Ino7mKolMSo00cipISqc61sIP90feG', 1, '/mvc/public/upload/user/anhle nhut/person_1.jpg', '40/20'),
(73, '', '', '', '', '', '$2y$10$SJRYbfIP/oweTgne3I/bI.I/A6KO8K9ehKUlkxgrgdn4sJGvkNC6S', 0, '/mvc/public/upload/user//person_2.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_new`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE,
  ADD UNIQUE KEY `ten_dang_nhap` (`ten_dang_nhap`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_new` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
