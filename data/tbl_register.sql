-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th4 06, 2023 lúc 04:28 AM
-- Phiên bản máy phục vụ: 8.0.31
-- Phiên bản PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tbl_register`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_register`
--

DROP TABLE IF EXISTS `tbl_register`;
CREATE TABLE IF NOT EXISTS `tbl_register` (
  `Username` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Password` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Repassword` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Tinhthanh` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Nameuser` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Address` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Sdt` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `Email` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL,
  `birthOfday` varchar(20) CHARACTER SET utf32 COLLATE utf32_vietnamese_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_register`
--

INSERT INTO `tbl_register` (`Username`, `Password`, `Repassword`, `Tinhthanh`, `Nameuser`, `Address`, `Sdt`, `Email`, `birthOfday`) VALUES
('khanhyou2018', ' 123456', '123456', 'Tiền Giang', 'Nguyễn Võ Khánh', '39 Nguyễn Huệ,Kp2,Ph', '0965558473', 'khanhyou2018@gmail.c', '18/03/2002'),
('khanhyou2018', ' 123456', '123456', 'Tiền Giang', 'Nguyễn Võ Khánh', '39 Nguyễn Huệ,Kp2,Ph', '0965558473', 'khanhyou2018@gmail.c', '18/03/2002'),
('helloworld', 'helloworld', 'helloworld', 'helloworld', 'helloworld', 'helloworld', 'helloworld', 'helloworld', 'helloworld'),
('helloworld1', ' helloworld1', 'helloworld1', 'Tiền Giang', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1'),
('helloworld1', ' helloworld1', 'helloworld1', 'Tiền Giang', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1'),
('helloworld1', ' helloworld1', 'helloworld1', 'Tiền Giang', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1'),
('helloworld1', ' helloworld1', 'helloworld1', 'Tiền Giang', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1', 'helloworld1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
