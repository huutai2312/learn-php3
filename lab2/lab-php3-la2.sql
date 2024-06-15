-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3309
-- Thời gian đã tạo: Th5 17, 2024 lúc 07:48 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lab-php3-la2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitin`
--

CREATE TABLE `loaitin` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitin`
--

INSERT INTO `loaitin` (`id`, `ten`) VALUES
(1, 'tin hot');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tin`
--

CREATE TABLE `tin` (
  `id` int(11) NOT NULL,
  `tieuDe` varchar(255) NOT NULL,
  `xem` varchar(255) NOT NULL,
  `ngayDang` varchar(255) NOT NULL,
  `idLT` int(255) NOT NULL DEFAULT 0,
  `tomTat` varchar(255) ,
  `noiDung` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tin`
--

INSERT INTO `tin` (`id`, `tieuDe`, `xem`, `ngayDang`, `idLT`, `tomTat`, `noiDung`) VALUES
(1, 'Mẹo vặt cuộc sống bạn nên biết', '752', '2023-07-16', 1, 'tóm tắt', 'nội dung'),
(2, 'Công thức nấu ăn ngon mỗi ngày', '283', '2024-01-04', 1, 'tóm tắt', 'nội dung'),
(3, 'Tin tức nóng hổi trong ngày', '161', '2024-01-23', 1, 'tóm tắt', 'nội dung'),
(4, 'Du lịch khám phá thế giới', '956', '2023-11-29', 0, 'tóm tắt', 'nội dung'),
(5, 'Review phim bom tấn mới nhất', '297', '2024-01-01', 0, 'tóm tắt', 'nội dung'),
(6, 'Học tiếng Anh hiệu quả', '617', '2023-11-28', 0, 'tóm tắt', 'nội dung'),
(7, 'Kinh nghiệm làm đẹp cho phái nữ', '196', '2024-03-03', 0, 'tóm tắt', 'nội dung'),
(8, 'Công nghệ đột phá thay đổi thế giới', '130', '2023-10-05', 0, 'tóm tắt', 'nội dung'),
(9, 'Bí quyết thành công trong cuộc sống', '61', '2023-12-04', 0, 'tóm tắt', 'nội dung'),
(10, 'Chuyện lạ bốn phương', '915', '2023-12-23', 0, 'tóm tắt', 'nội dung');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tin`
--
ALTER TABLE `tin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loaitin`
--
ALTER TABLE `loaitin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tin`
--
ALTER TABLE `tin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
