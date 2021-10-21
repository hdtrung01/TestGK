-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 06:21 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blood_bank`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blood_donor`
--

CREATE TABLE `blood_donor` (
  `bd_id` char(3) NOT NULL,
  `bd_name` varchar(100) NOT NULL,
  `bd_Gender` tinyint(1) NOT NULL,
  `bd_age` int(11) NOT NULL,
  `bd_bgroup` tinyint(1) NOT NULL,
  `bd_reg_date` date NOT NULL,
  `bd_phno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `blood_donor`
--

INSERT INTO `blood_donor` (`bd_id`, `bd_name`, `bd_Gender`, `bd_age`, `bd_bgroup`, `bd_reg_date`, `bd_phno`) VALUES
('111', 'trung', 3, 12, 4, '2021-10-15', '0801231234'),
('002', 'ten moi', 3, 12, 3, '2021-10-06', '0963025080'),
('003', 'adq', 3, 12, 5, '2021-10-15', '0801231234'),
('012', 'hihi', 2, 33, 2, '2021-11-16', '0801231234'),
('125', 'ád', 2, 12, 2, '2021-10-04', '0801231234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
