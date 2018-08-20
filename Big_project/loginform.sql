-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 20, 2018 lúc 04:57 AM
-- Phiên bản máy phục vụ: 10.1.34-MariaDB
-- Phiên bản PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loginform`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `userinfo`
--

CREATE TABLE `userinfo` (
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `userinfo`
--

INSERT INTO `userinfo` (`user_name`, `user_email`, `user_pass`) VALUES
('NTH', 'exp@gmail.com', '$2y$10$pCVf3xknF5OUREmD4.aSh.OriBNkOk028doXYcRJG/ErFrPsOBT7u'),
('Kuro', 'exsp@gmail.com', '$2y$10$wXOvsZ7VG3SOKHkcZnq/5..KzTxXZyKn0oDPcouEb0b8D5Vyy8zxa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(1) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_bio` varchar(1000) NOT NULL,
  `user_phone` varchar(12) NOT NULL,
  `user_address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_fname`, `user_bio`, `user_phone`, `user_address`) VALUES
(1, 'Nguyá»…n Trung Hiáº¿u', 'nmbmnbmnbmnmn', '01235742265', '206/D2, ThÃ nh CÃ´ng, Ba ÄÃ¬nh');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
