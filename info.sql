-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2020 lúc 07:13 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `scam`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info`
--

CREATE TABLE `info` (
  `id` int(5) NOT NULL,
  `taikhoan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `info`
--

INSERT INTO `info` (`id`, `taikhoan`, `pass`, `user_id`, `date`) VALUES
(11, '123123', '123123', 123123, '2020-10-26'),
(12, 'quyendz', 'quyendz', 123123, '2020-10-26'),
(13, '123123123', '123123', 123123, '2020-10-26'),
(14, '12312321312', '123123123123', 123123123, '2020-10-26'),
(15, '1231q', '123123', 123, '2020-10-26'),
(16, 'fsdfsd', 'sdfsdf', 423423, '2020-10-26'),
(17, '123weqeq', '123123', 123123, '2020-10-26'),
(18, '123123123qưe', '123123', 123123, '2020-10-26'),
(19, 'acac', 'cacaca', 123123, '2020-10-26'),
(20, '123123gfgf', '123123', 123123, '2020-10-26'),
(21, '123123dfdf', '123123', 123123123, '2020-10-26'),
(22, '1231312', '123123123', 123123123, '2020-10-26'),
(23, 'fasdsa', 'asdasda', 1231231, '2020-10-26'),
(24, '123123qweq', 'weqweq', 13123123, '2020-10-26');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `info`
--
ALTER TABLE `info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
