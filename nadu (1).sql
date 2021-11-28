-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 10:29 AM
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
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `ten_thiet_ke`, `chu_de`, `dien_tich`, `mau`, `cong_nghe`, `gia`) VALUES
(1, 'THIẾT KẾ NỘI THẤT BIỆT THỰ DƯƠ', 'Không gian xanh', 50, 'Xanh lá', ' in 3D, gỗ hiếm', 12000000),
(2, 'thiet ke', '', 0, '50', '', 0),
(4, 'thiet ke 1', 'chu de 1', 50, 'den', 'in 3d', 100);

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
(4, 'nhutanh5', '123', '456', 'nhut3@gmail', '09024902', '123456', 0, '', ''),
(5, 'nhutanh1', '123', '456', 'nhut3@gmail', '09024902', '123456', 0, '', ''),
(6, 'nhutanh2', '123', '456', 'nhut3@gmail', '09024902', '123456', 0, '', ''),
(7, '11111', '111', '1111', '11111', '1111', '1111', 0, '', ''),
(8, 'nhutanh4', '123', '456', 'nhut3@gmail', '09024902', '123456', 0, '', ''),
(9, 'nhutanh222', '0', '0', 'A@gmai.com]', '20392103', '123456', 0, '', '40/20'),
(47, '', '', '', '', '', '$2y$10$uTMZQ/Y0JQGQkd3Hop3lNeQ', 0, '', ''),
(63, 'nhutanh', 'lenhutanh', '1233', 'cuibap@yopmail.com', '21323213', '$2y$10$4FNNT8r1h95Y4y8h4jgf2uERAYvzgZcN5aPEwsvGcdWIT8sX5YE0K', 0, 'public/upload/user/nhutanh/person_1.jpg', '40/20'),
(64, 'nhutanh1111', 'lenhutanh', '1233443534', 'cuibap@yopmail.com', '21323213', '$2y$10$j.nF0hyyArrApYpQ6MStUu1e8ynddw8l0nBti9belaeogxUhmwZZa', 0, '/mvc/public/upload/user/nhutanh111155555/person_1.jpg', '40/20');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
