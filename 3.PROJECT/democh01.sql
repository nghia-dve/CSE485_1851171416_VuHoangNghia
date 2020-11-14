-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2020 lúc 06:31 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `democh01`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baiviet`
--

CREATE TABLE `baiviet` (
  `id` mediumint(6) UNSIGNED NOT NULL,
  `tieu_de` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baiviet`
--

INSERT INTO `baiviet` (`id`, `tieu_de`, `noi_dung`, `image`) VALUES
(11, 'Lời chào mừng', 'Xin chào các cô giáo, thầy giáo, anh chị và các bạn ghé thăm trang web của Khoa CNTT!\r\n', 'khai-truong.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` mediumint(6) NOT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoidap`
--

CREATE TABLE `hoidap` (
  `id` mediumint(6) NOT NULL,
  `tieu_de` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `binh_luan_id` mediumint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` mediumint(6) UNSIGNED NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` char(60) NOT NULL,
  `registration_date` datetime NOT NULL,
  `activation_code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `chuc_nang` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `first_name`, `last_name`, `email`, `password`, `registration_date`, `activation_code`, `status`, `chuc_nang`) VALUES
(2, 'Mike1', 'Rosolt1', 'm1rosolf@someplace.com', '$2y$10$9lXam45bwNHu4/zbu5FdXuW243F1R0GkQBDJr/juvV8wYr6lMZbau', '2018-04-28 15:15:32', '', 0, 'user'),
(3, 'Tweedle', 'Dee-Deest', 'tdeedeest@themail.com', '$2y$10$.ewnSKbbeP6lSI4UF0BasOTnDyLzBH8mwcDM3wEM1hzoJAXYz2doK', '2018-04-28 15:17:29', '', 0, 'admin'),
(4, 'Annie', 'Versary', 'aversary@outcook.com', '$2y$10$5yz6IiFq/uZR4VdacjVRbOWTIA5tZCSLZ975mGZCoas3UHMMojN46', '2018-04-28 15:18:17', '', 0, 'user'),
(5, 'Charley', 'Farnsbarns', 'cfransnarns@outcook.com', '$2y$10$WFX630.YbR5WQcYNBnMMueIbjIbo5.C6aDkUKVUfXBC1oNrqasmWa', '2018-04-28 15:19:50', '', 0, 'user'),
(10, 'Dung', 'Kieu', 'dungkt@tlu.edu.vn', '$2y$10$O6rh7NZXmNotsqau5FFv4OqBvucgVg5VQwVCc6QyztPTTWfHVmIFe', '2020-09-29 14:25:03', '', 0, 'user'),
(11, 'Dung', 'Kieu', 'dungkt2@tlu.edu.vn', '$2y$10$UpkvSVR2B5JKBKUiOo5BxeV/4l6bqj.vRsBOWhpWxyEkwHCsBTGpi', '2020-09-29 14:25:27', '', 0, 'user'),
(12, 'Dung', 'Kieu', 'dungkt3@tlu.edu.vn', '$2y$10$F8.e/KHpkADc5BjhK0AtfeINt4aCdhjdxfAz6TsXvMX2iu6BGETaG', '2020-09-29 14:29:10', '', 0, 'user'),
(13, 'Dung', 'Kieu', 'dungkt@tlu.edu.vn', '$2y$10$IEmK57I/4D3Ji0qfJ2fmJudkmsf2GQAKV1nxf2bcxIyu/sFjZQtoG', '2020-09-29 14:30:17', '', 0, 'user'),
(14, 'Dung', 'Kieu', 'dungkt4@tlu.edu.vn', '$2y$10$8nOTWitFoH.HtDkuG8FvPu7JqXLtbmtiUeL5Aq5YI8M6HE4DfHF1a', '2020-09-29 14:39:34', '4e62e663232251c7', 0, 'admin'),
(15, 'Dung', 'Kieu', 'dungkt5@tlu.edu.vn', '$2y$10$5L1QcZSwPdP7Ta1ybDzzy.WMev/CAF9pbxRFuB64hYWiV2OGehRLG', '2020-09-29 14:57:05', 'f22629b8f47cbe95', 0, 'user'),
(17, 'Dung', 'Kieu', 'web2code2vn@gmail.com', '$2y$10$s8QjIaRO8hNFs95m4qtAHOVJFUjS8RKs6FwSO3KGQ9auMSWx5h3YO', '2020-09-29 14:59:38', 'ac24fd7825b082e7', 1, 'user'),
(18, 'Dung', 'Kieu', 'web2code2vn@gmail.com', '$2y$10$8StDjdyaMCbf1qwFk5uiCOrwrvAyG0b4UxfpfeHNok5YilXot.tM6', '2020-09-29 15:29:33', 'a0ea6930f393a9a0', 0, 'user'),
(19, 'nghia', 'vu', 'nghiapgs2@gmail.com', '$2y$10$LCOvdCX/vIarrE9qW/0KoOn8C3j/26T/fXIGPXOCjtDAHsBS3dhru', '2020-11-02 22:40:44', '483027c9384d3b81', 0, 'user'),
(20, 'nghia', 'vu', 'nghiapgs2@gmail.com', '$2y$10$sHhBJWudJfzPaSImFbYqie1VwGybY8kVUpEI0Fq5YP4R6qa/C4AdC', '2020-11-03 03:10:02', '4b90864f16c75298', 0, 'user'),
(21, 'nghia', 'vu', 'nghiapgs2@gmail.com', '$2y$10$e3yE4V34JF/.F4RkZLjRvuByZGtQCwdzbr6ac/nyMvxz0kPzymW0u', '2020-11-03 03:12:52', '916b707b4ed82813', 0, 'user'),
(22, 'nghia', 'vu', 'nghiapgs@gmail.com', '$2y$10$CCvHDDtG6r3uhQmaKTK7Ee1ALl1OspvMJYgHnuAimDN1yzpIiFIty', '2020-11-03 03:13:09', 'dfc66e6d0ef2f28d', 0, 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoidap`
--
ALTER TABLE `hoidap`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `binh_luan_id` (`binh_luan_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` mediumint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hoidap`
--
ALTER TABLE `hoidap`
  MODIFY `id` mediumint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoidap`
--
ALTER TABLE `hoidap`
  ADD CONSTRAINT `hoidap_ibfk_1` FOREIGN KEY (`binh_luan_id`) REFERENCES `binhluan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
