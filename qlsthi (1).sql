-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 26, 2024 lúc 10:41 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsthi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anhdanhgia`
--

CREATE TABLE `anhdanhgia` (
  `MALINKANH` int(11) NOT NULL,
  `LINKANHDG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MAHOADON` int(11) NOT NULL,
  `MASP` varchar(10) NOT NULL,
  `SOLUONGSP` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietphieunhap`
--

CREATE TABLE `chitietphieunhap` (
  `MAPHIEUNHAP` int(11) NOT NULL,
  `MASP` varchar(10) NOT NULL,
  `SOLUONG` int(11) DEFAULT NULL,
  `DONGIA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhgiasp`
--

CREATE TABLE `danhgiasp` (
  `EMAIL` varchar(70) NOT NULL,
  `MASP` varchar(10) NOT NULL,
  `MALINKANH` int(11) NOT NULL,
  `NOIDUNGDG` varchar(300) DEFAULT NULL,
  `LINKANHDG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaohang`
--

CREATE TABLE `giaohang` (
  `MATP` varchar(20) NOT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `PHIGIAO` int(11) DEFAULT NULL,
  `GHICHU` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHOADON` int(11) NOT NULL,
  `MAKM` varchar(10) DEFAULT NULL,
  `EMAIL` varchar(70) NOT NULL,
  `MAPT` varchar(20) NOT NULL,
  `NGAYLAP` datetime DEFAULT NULL,
  `TRANGTHAIHOADON` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MAKM` varchar(10) NOT NULL,
  `PHANTRAMKM` decimal(10,0) DEFAULT NULL,
  `DIEUKIENKM` int(11) DEFAULT NULL,
  `NGAYBD` date DEFAULT NULL,
  `NGAYKT` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MALOAI` varchar(10) NOT NULL,
  `TENLOAI` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MALOAI`, `TENLOAI`) VALUES
('01', 'Trái cây'),
('02', 'Hải sản'),
('03', 'Thịt '),
('04', 'Trứng'),
('05', 'Rau'),
('06', 'Đồ cho thú cưng'),
('07', 'Mì'),
('08', 'Vật dụng gia đình'),
('09', 'Nước uống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `EMAIL` varchar(70) NOT NULL,
  `MATKHAU` varchar(70) NOT NULL,
  `DIACHI` varchar(100) NOT NULL,
  `TEN` varchar(50) NOT NULL,
  `SDT` varchar(12) NOT NULL,
  `PHANQUYEN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`EMAIL`, `MATKHAU`, `DIACHI`, `TEN`, `SDT`, `PHANQUYEN`) VALUES
('duybii922002@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cần Thơ', 'Yii', '09398260244', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacungcap`
--

CREATE TABLE `nhacungcap` (
  `MANCC` int(11) NOT NULL,
  `TENNCC` varchar(100) NOT NULL,
  `DIACHI` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `MANSX` varchar(10) NOT NULL,
  `TENNSX` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`MANSX`, `TENNSX`) VALUES
('NSX1', 'Thực Phẩm Aloe Food - Công Ty Cổ Phần Sản Xuất Thực Phẩm Aloe Food'),
('NSX2', 'Trái Cây Sấy Thuận Hương - Công Ty TNHH Thương Mại Sản Xuất Thuận Hương'),
('NSX3', 'Thực Phẩm Tân Vĩnh Phát - Công Ty TNHH Sản Xuất Thương Mại Thực Phẩm Tân Vĩnh Phát'),
('NSX4', 'Thực Phẩm Dasaque - Công Ty TNHH Dasaque'),
('NSX5', 'Trà Thảo Mộc Cát Tường - Cơ Sở Kim Chi Cát Tường'),
('NSX6', 'Nông Sản Nam Đô - Công Ty Cổ Phần Nông Sản Nam Đô'),
('NSX7', 'Thực Phẩm Phúc Đạt - Công Ty TNHH XNK Quốc Tế Phúc Đạt'),
('NSX8', 'Thực Phẩm Đông Lạnh Global Golden Foods - Công Ty TNHH Xuất Nhập Khẩu Global Golden Foods'),
('NSX9', 'Công ty CP Chăn nuôi CP Việt Nam');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieunhap`
--

CREATE TABLE `phieunhap` (
  `MAPHIEUNHAP` int(11) NOT NULL,
  `MANCC` int(11) NOT NULL,
  `TENPHIEUNHAP` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuongthuctt`
--

CREATE TABLE `phuongthuctt` (
  `MAPT` varchar(20) NOT NULL,
  `TENPT` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` varchar(10) NOT NULL,
  `MANSX` varchar(10) NOT NULL,
  `MALOAI` varchar(10) NOT NULL,
  `TENSP` varchar(100) NOT NULL,
  `DONGIABANSP` varchar(100) NOT NULL,
  `MOTA` varchar(300) NOT NULL,
  `LINKANH` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `MANSX`, `MALOAI`, `TENSP`, `DONGIABANSP`, `MOTA`, `LINKANH`) VALUES
('HS1', 'NSX6', '02', 'Tôm hùm Bình Ba, Khánh Hòa', '800000', 'Đây là một loại hải sản', 'tom1.jpg'),
('HS10', 'NSX6', '02', 'Cua hoàng đế', '1500000', 'Đây là một loại hải sản', 'cua1.jpg'),
('HS11', 'NSX6', '02', 'Cua hoàng đế 2', '2500000', 'Đây là một loại hải sản', 'cua2.jpg'),
('HS2', 'NSX6', '02', 'Tôm tít Cà Mau', '600000', 'Đây là một loại hải sản', 'tom2.jpg'),
('HS3', 'NSX6', '02', 'Sò huyết đầm Ô Loan, Phú Yên', '30000', 'Đây là một loại hải sản', 'so1.jpg'),
('HS4', 'NSX6', '02', 'Cá ngừ đại dương Phú Yên', '95000', 'Đây là một loại hải sản', 'cangu1.jpg'),
('HS5', 'NSX6', '02', 'Sá sùng Quan Lạn, Quảng Ninh', '500000', 'Đây là một loại hải sản', 'sasung.jpg'),
('HS6', 'NSX6', '02', 'Mực nhảy Cửa Lò, Nghệ An', '1400000', 'Đây là một loại hải sản', 'muc1.jpg'),
('HS7', 'NSX6', '02', 'Mực một nắng Phan Thiết', '400000', 'Đây là một loại hải sản', 'muc2.jpg'),
('HS8', 'NSX6', '02', 'Ốc vú nàng Côn Đảo', '90000', 'Đây là một loại hải sản', 'oc1.jpg'),
('HS9', 'NSX6', '02', 'Bào ngư Bạch Long Vĩ, Hải Phòng', '2000000', 'Đây là một loại hải sản', 'baongu1.jpg'),
('T1', 'NSX8', '03', 'Thịt ba gội heo', '159900', 'Đây là một loại thịt', 'heo1.jpg'),
('T10', 'NSX8', '03', 'Vịt Nguyên Con', '145000', 'Đây là một loại thịt', 'vit1.jpg'),
('T11', 'NSX8', '03', 'Vịt luộc', '135000', 'Đây là một loại thịt', 'vit2.jpg'),
('T12', 'NSX8', '03', 'Vịt nấu chao', '150000', 'Đây là một loại thịt', 'vit3.jpg'),
('T2', 'NSX8', '03', 'Thịt nạc vai heo', '129900', 'Đây là một loại thịt', 'heo2.jpg'),
('T3', 'NSX8', '03', 'Thịt đùi heo', '119900', 'Đây là một loại thịt', 'heo3.jpg'),
('T4', 'NSX8', '03', 'Thịt nạc nọng heo', '416900', 'Đây là một loại thịt', 'heo4.jpg'),
('T5', 'NSX8', '03', 'Gà Nguyên Con', '145000', 'Đây là một loại thịt', 'ga1.jpg'),
('T6', 'NSX8', '03', 'Đùi gà', '45000', 'Đây là một loại thịt', 'ga2.jpg'),
('T7', 'NSX8', '03', 'Chân gà', '38000', 'Đây là một loại thịt', 'ga3.jpg'),
('T8', 'NSX8', '03', 'Đầu gà', '15900', 'Đây là một loại thịt', 'ga4.jpg'),
('T9', 'NSX8', '03', 'Mề gà', '52000', 'Đây là một loại thịt', 'ga5.jpg'),
('TC1', 'NSX2', '01', 'Chuối xanh', '7000', 'Đây là một loại trái cây', 'chuoi1.jpg'),
('TC10', 'NSX1', '01', 'Sầu riêng chuồng bò', '80000', 'Đây là một loại trái cây', 'saurieng2.jpg'),
('TC11', 'NSX1', '01', 'Sầu riêng khổ qua', '30000', 'Đây là một loại trái cây', 'saurieng3.jpg'),
('TC12', 'NSX1', '01', 'Sầu riêng Cái Mơn', '90000', 'Đây là một loại trái cây', 'saurieng4.jpg'),
('TC13', 'NSX1', '01', 'Sầu riêng ruột đỏ', '200000', 'Đây là một loại trái cây', 'saurieng5.jpg'),
('TC14', 'NSX1', '01', 'Sầu riêng Musang King', '500000', 'Đây là một loại trái cây', 'saurieng6.jpg'),
('TC15', 'NSX1', '01', 'Sầu riêng Thái', '120000', 'Đây là một loại trái cây', 'saurieng7.jpg'),
('TC16', 'NSX1', '01', 'Xoài cát Hòa Lộc', '70000', 'Đây là một loại trái cây', 'xoai1.jpg'),
('TC17', 'NSX1', '01', 'Xoài keo', '30000', 'Đây là một loại trái cây', 'xoai2.jpg'),
('TC18', 'NSX1', '01', 'Xoài cát chu', '80000', 'Đây là một loại trái cây', 'xoai3.jpg'),
('TC19', 'NSX1', '01', 'Xoài tượng', '30000', 'Đây là một loại trái cây', 'xoai4.jpg'),
('TC2', 'NSX2', '01', 'Chuối tây', '12000', 'Đây là một loại trái cây', 'chuoi2.jpg'),
('TC20', 'NSX1', '01', 'Xoài Úc', '19000', 'Đây là một loại trái cây', 'xoai5.jpg'),
('TC21', 'NSX1', '01', 'Xoài tứ quý', '45000', 'Đây là một loại trái cây', 'xoai6.jpg'),
('TC22', 'NSX1', '01', 'Xoài giống Đài Loan đỏ', '79000', 'Đây là một loại trái cây', 'xoai7.jpg'),
('TC23', 'NSX1', '01', 'Xoài Thanh Ca', '15000', 'Đây là một loại trái cây', 'xoai8.jpg'),
('TC24', 'NSX1', '01', 'Xoài bao tử', '25000', 'Đây là một loại trái cây', 'xoai9.jpg'),
('TC25', 'NSX1', '01', 'Dâu tây Nhật Bản', '480000', 'Đây là một loại trái cây', 'dautay1.jpg'),
('TC26', 'NSX1', '01', 'Dâu tây Hàn Quốc', '250000', 'Đây là một loại trái cây', 'dautay2.jpg'),
('TC27', 'NSX1', '01', 'Dâu tây Mỹ', '600000', 'Đây là một loại trái cây', 'dautay3.jpg'),
('TC28', 'NSX1', '01', 'Dâu tây Úc', '349000', 'Đây là một loại trái cây', 'dautay4.jpg'),
('TC29', 'NSX1', '01', 'Dâu tây New Zealand', '200000', 'Đây là một loại trái cây', 'dautay5.jpg'),
('TC3', 'NSX2', '01', 'Chuối cau', '30000', 'Đây là một loại trái cây', 'chuoi3.jpg'),
('TC30', 'NSX1', '01', 'Cam Sành', '5000', 'Đây là một loại trái cây', 'cam1.jpg'),
('TC31', 'NSX1', '01', 'Cam Vinh', '40000', 'Đây là một loại trái cây', 'cam2.jpg'),
('TC32', 'NSX1', '01', 'Cam Cao Phong', '39000', 'Đây là một loại trái cây', 'cam3.jpg'),
('TC33', 'NSX1', '01', 'Cam Mật', '30000', 'Đây là một loại trái cây', 'cam4.jpg'),
('TC34', 'NSX1', '01', 'Cam Xoàn', '55000', 'Đây là một loại trái cây', 'cam5.jpg'),
('TC35', 'NSX1', '01', 'Cam Canh', '30000', 'Đây là một loại trái cây', 'cam6.jpg'),
('TC36', 'NSX1', '01', 'Nho xanh', '120000', 'Đây là một loại trái cây', 'nho1.jpg'),
('TC37', 'NSX1', '01', 'Nho tím', '75000', 'Đây là một loại trái cây', 'nho2.jpg'),
('TC38', 'NSX1', '01', 'Nho đỏ', '90000', 'Đây là một loại trái cây', 'nho3.jpg'),
('TC39', 'NSX1', '01', 'Bưởi Năm Roi', '32000', 'Đây là một loại trái cây', 'buoi1.jpg'),
('TC4', 'NSX2', '01', 'Chuối ngự', '35000', 'Đây là một loại trái cây', 'chuoi4.jpg'),
('TC40', 'NSX1', '01', 'Bưởi Da Xanh', '100000', 'Đây là một loại trái cây', 'buoi2.jpg'),
('TC41', 'NSX1', '01', 'Bưởi Diễn', '25000', 'Đây là một loại trái cây', 'buoi3.jpg'),
('TC42', 'NSX1', '01', 'Bưởi Đoan Hùng', '25000', 'Đây là một loại trái cây', 'buoi4.jpg'),
('TC43', 'NSX1', '01', 'Bưởi Phúc Trạch', '45000', 'Đây là một loại trái cây', 'buoi5.jpg'),
('TC44', 'NSX3', '01', 'Bơ Sáp', '20000', 'Đây là một loại trái cây', 'bo1.jpg'),
('TC45', 'NSX3', '01', 'Bơ Hass', '100000', 'Đây là một loại trái cây', 'bo2.jpg'),
('TC46', 'NSX3', '01', 'Bơ Booth', '210000', 'Đây là một loại trái cây', 'bo3.jpg'),
('TC47', 'NSX3', '01', 'Bơ Tứ Quý', '60000', 'Đây là một loại trái cây', 'bo4.jpg'),
('TC48', 'NSX3', '01', 'Bơ Reed', '90000', 'Đây là một loại trái cây', 'bo5.jpg'),
('TC49', 'NSX3', '01', 'Bơ Fuerte', '70000', 'Đây là một loại trái cây', 'bo6.jpg'),
('TC5', 'NSX2', '01', 'Chuối tiêu', '15000', 'Đây là một loại trái cây', 'chuoi5.jpg'),
('TC6', 'NSX2', '01', 'Chuối xiêm', '28000', 'Đây là một loại trái cây', 'chuoi6.jpg'),
('TC7', 'NSX2', '01', 'Chuối hột', '100000', 'Đây là một loại trái cây', 'chuoi7.jpg'),
('TC8', 'NSX2', '01', 'Chuối bơm', '10000', 'Đây là một loại trái cây', 'chuoi8.jpg'),
('TC9', 'NSX1', '01', 'Sầu riêng Ri 6', '115000', 'Đây là một loại trái cây', 'saurieng1.jpg'),
('TR1', 'NSX9', '04', 'Trứng gà', '2400', 'Đây là một loại trứng', 'trung1.jpg'),
('TR2', 'NSX9', '04', 'Trứng vịt tươi', '3500', 'Đây là một loại trứng', 'trung2.jpg'),
('TR3', 'NSX9', '04', 'Trứng vịt lộn', '3500', 'Đây là một loại trứng', 'trung3.jpg'),
('TR4', 'NSX9', '04', 'Trứng cút', '1100', 'Đây là một loại trứng', 'trung4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhpho`
--

CREATE TABLE `thanhpho` (
  `MATP` varchar(20) NOT NULL,
  `TENTP` varchar(70) DEFAULT NULL,
  `PHIGIAO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thanhpho`
--

INSERT INTO `thanhpho` (`MATP`, `TENTP`, `PHIGIAO`) VALUES
('TP1', 'Cần Thơ', 5000),
('TP10', 'Bạc Liêu', 15000),
('TP11', 'Cà Mau', 25000),
('TP12', 'Vĩnh Long', 25000),
('TP13', 'Đà Nẵng', 35000),
('TP14', 'Hậu Giang', 15000),
('TP15', 'Vũng Tàu', 35000),
('TP16', 'Hà Nội', 45000),
('TP2', 'Hồ Chí Minh', 25000),
('TP3', 'Long An', 15000),
('TP4', 'Tiền Giang', 15000),
('TP5', 'Bến Tre', 15000),
('TP6', 'Sóc Trăng', 15000),
('TP7', 'Đồng Tháp', 15000),
('TP8', 'An Giang', 15000),
('TP9', 'Kiên Giang', 15000);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anhdanhgia`
--
ALTER TABLE `anhdanhgia`
  ADD PRIMARY KEY (`MALINKANH`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MAHOADON`,`MASP`),
  ADD KEY `FK_CHITIETGIOHANG` (`MASP`);

--
-- Chỉ mục cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD PRIMARY KEY (`MAPHIEUNHAP`,`MASP`),
  ADD KEY `FK_RELATIONSHIP_15` (`MASP`);

--
-- Chỉ mục cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD KEY `FK_ANHCUADANHGIA` (`MALINKANH`),
  ADD KEY `FK_DANHGIACUANGUOIDUNG` (`EMAIL`),
  ADD KEY `FK_DANHGIACUASP` (`MASP`);

--
-- Chỉ mục cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD PRIMARY KEY (`MATP`,`EMAIL`),
  ADD KEY `FK_GIAOHANGND` (`EMAIL`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHOADON`),
  ADD KEY `FK_HOADONCUAKHACH` (`EMAIL`),
  ADD KEY `FK_KHUYENMAI_HOADON` (`MAKM`),
  ADD KEY `FK_PTTHANHTOANCUAHD` (`MAPT`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MAKM`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MALOAI`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`EMAIL`);

--
-- Chỉ mục cho bảng `nhacungcap`
--
ALTER TABLE `nhacungcap`
  ADD PRIMARY KEY (`MANCC`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`MANSX`);

--
-- Chỉ mục cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD PRIMARY KEY (`MAPHIEUNHAP`),
  ADD KEY `FK_DANGKI` (`MANCC`);

--
-- Chỉ mục cho bảng `phuongthuctt`
--
ALTER TABLE `phuongthuctt`
  ADD PRIMARY KEY (`MAPT`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_LOAICUASP` (`MALOAI`),
  ADD KEY `FK_SANPHAMSANXUAT` (`MANSX`);

--
-- Chỉ mục cho bảng `thanhpho`
--
ALTER TABLE `thanhpho`
  ADD PRIMARY KEY (`MATP`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_CHITIETGIOHANG` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`),
  ADD CONSTRAINT `FK_GIOHANG_CTGIOHANG` FOREIGN KEY (`MAHOADON`) REFERENCES `hoadon` (`MAHOADON`);

--
-- Các ràng buộc cho bảng `chitietphieunhap`
--
ALTER TABLE `chitietphieunhap`
  ADD CONSTRAINT `FK_RELATIONSHIP_14` FOREIGN KEY (`MAPHIEUNHAP`) REFERENCES `phieunhap` (`MAPHIEUNHAP`),
  ADD CONSTRAINT `FK_RELATIONSHIP_15` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `danhgiasp`
--
ALTER TABLE `danhgiasp`
  ADD CONSTRAINT `FK_ANHCUADANHGIA` FOREIGN KEY (`MALINKANH`) REFERENCES `anhdanhgia` (`MALINKANH`),
  ADD CONSTRAINT `FK_DANHGIACUANGUOIDUNG` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`),
  ADD CONSTRAINT `FK_DANHGIACUASP` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `giaohang`
--
ALTER TABLE `giaohang`
  ADD CONSTRAINT `FK_GIAOHANGND` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`),
  ADD CONSTRAINT `FK_KHUVUC_GIAOHANG` FOREIGN KEY (`MATP`) REFERENCES `thanhpho` (`MATP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HOADONCUAKHACH` FOREIGN KEY (`EMAIL`) REFERENCES `nguoidung` (`EMAIL`),
  ADD CONSTRAINT `FK_KHUYENMAI_HOADON` FOREIGN KEY (`MAKM`) REFERENCES `khuyenmai` (`MAKM`),
  ADD CONSTRAINT `FK_PTTHANHTOANCUAHD` FOREIGN KEY (`MAPT`) REFERENCES `phuongthuctt` (`MAPT`);

--
-- Các ràng buộc cho bảng `phieunhap`
--
ALTER TABLE `phieunhap`
  ADD CONSTRAINT `FK_DANGKI` FOREIGN KEY (`MANCC`) REFERENCES `nhacungcap` (`MANCC`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_LOAICUASP` FOREIGN KEY (`MALOAI`) REFERENCES `loaisanpham` (`MALOAI`),
  ADD CONSTRAINT `FK_SANPHAMSANXUAT` FOREIGN KEY (`MANSX`) REFERENCES `nhasanxuat` (`MANSX`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
