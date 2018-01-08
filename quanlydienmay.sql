-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th1 07, 2018 lúc 04:38 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlydienmay`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdondathang`
--

DROP TABLE IF EXISTS `chitietdondathang`;
CREATE TABLE IF NOT EXISTS `chitietdondathang` (
  `MaChiTietDonDatHang` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(11) DEFAULT NULL,
  `GiaBan` int(11) DEFAULT NULL,
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `MaSanPham` int(11) NOT NULL,
  PRIMARY KEY (`MaChiTietDonDatHang`),
  KEY `fk_ChiTietDonDatHang_DonDatHang1_idx` (`MaDonDatHang`),
  KEY `fk_ChiTietDonDatHang_SanPham1_idx` (`MaSanPham`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dondathang`
--

DROP TABLE IF EXISTS `dondathang`;
CREATE TABLE IF NOT EXISTS `dondathang` (
  `MaDonDatHang` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `NgayLap` datetime DEFAULT NULL,
  `TongThanhTien` int(11) DEFAULT NULL,
  `MaTaiKhoan` int(11) NOT NULL,
  `MaTinhTrang` int(11) NOT NULL,
  PRIMARY KEY (`MaDonDatHang`),
  KEY `fk_DonDatHang_TaiKhoan1_idx` (`MaTaiKhoan`),
  KEY `fk_DonDatHang_TinhTrang1_idx` (`MaTinhTrang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dondathang`
--

INSERT INTO `dondathang` (`MaDonDatHang`, `NgayLap`, `TongThanhTien`, `MaTaiKhoan`, `MaTinhTrang`) VALUES
('081012001', '2012-10-08 00:00:00', 380000, 1, 1),
('081012002', '2012-10-08 00:00:00', 380000, 1, 1),
('081012003', '2012-10-08 00:00:00', 440000, 1, 1),
('131212001', '2012-12-13 00:00:00', 640000, 1, 1),
('131212002', '2012-12-13 00:00:00', 700000, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hangsanxuat`
--

DROP TABLE IF EXISTS `hangsanxuat`;
CREATE TABLE IF NOT EXISTS `hangsanxuat` (
  `MaHangSanXuat` int(11) NOT NULL AUTO_INCREMENT,
  `TenHangSanXuat` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LogoURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`MaHangSanXuat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hangsanxuat`
--

INSERT INTO `hangsanxuat` (`MaHangSanXuat`, `TenHangSanXuat`, `LogoURL`, `BiXoa`) VALUES
(1, 'Panasonic', NULL, 0),
(2, 'LG', NULL, 0),
(3, 'ToShiBa', NULL, 0),
(4, 'SamSung', NULL, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

DROP TABLE IF EXISTS `loaisanpham`;
CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `MaLoaiSanPham` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiSanPham` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`MaLoaiSanPham`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLoaiSanPham`, `TenLoaiSanPham`, `BiXoa`) VALUES
(1, 'TiVi', 0),
(2, 'Tủ lạnh', 0),
(3, 'Máy giặt', 0),
(4, 'Máy lạnh', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaitaikhoan`
--

DROP TABLE IF EXISTS `loaitaikhoan`;
CREATE TABLE IF NOT EXISTS `loaitaikhoan` (
  `MaLoaiTaiKhoan` int(11) NOT NULL AUTO_INCREMENT,
  `TenLoaiTaiKhoan` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaLoaiTaiKhoan`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaitaikhoan`
--

INSERT INTO `loaitaikhoan` (`MaLoaiTaiKhoan`, `TenLoaiTaiKhoan`) VALUES
(1, 'User'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSanPham` int(11) NOT NULL AUTO_INCREMENT,
  `TenSanPham` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HinhURL` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GiaSanPham` int(11) DEFAULT NULL,
  `NgayNhap` datetime DEFAULT NULL,
  `SoLuongTon` int(11) DEFAULT NULL,
  `SoLuongBan` int(11) DEFAULT NULL,
  `SoLuocXem` int(11) DEFAULT NULL,
  `MoTa` text COLLATE utf8_unicode_ci,
  `BiXoa` tinyint(1) DEFAULT '0',
  `MaLoaiSanPham` int(11) NOT NULL,
  `MaHangSanXuat` int(11) NOT NULL,
  PRIMARY KEY (`MaSanPham`),
  KEY `fk_SanPham_LoaiSanPham1_idx` (`MaLoaiSanPham`),
  KEY `fk_SanPham_HangSanXuat1_idx` (`MaHangSanXuat`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSanPham`, `TenSanPham`, `HinhURL`, `GiaSanPham`, `NgayNhap`, `SoLuongTon`, `SoLuongBan`, `SoLuocXem`, `MoTa`, `BiXoa`, `MaLoaiSanPham`, `MaHangSanXuat`) VALUES
(1, 'Smart Tivi LG 4K 65 inch 65UJ632T', 'TiViLG4K65.png', 3100000, '2017-12-10 00:00:00', 120, 0, 0, 'Smart Tivi LG 4K 65 inch 65UJ632T mang trong mình kiểu dáng hiện đại, đầy phong cách với tông đen sang trọng, mạnh mẽ, làm nên điểm nhấn ấn tượng trong phong cách thiết kế nội thất cho ngôi nhà bạn.\r\n\r\nBên cạnh đó, chân đế của tivi cũng được tạo kiểu hình chữ V úp ngược hài hòa, cho phép tivi có thể trụ vững trên nhiều dạng mặt phẳng khác nhau.', 0, 1, 2),
(2, 'Tủ lạnh Panasonic inverter 491', 'TulanhPanasonic491.png', 27390000, '2017-12-19 00:00:00', 200, 0, 0, 'TỦ LẠNH INVERTER\r\nTiện lợi với ngăn cấp đông mềm Prime Fresh, bảo quản thực phẩm ở nhiệt độ thấp.\r\nBảo vệ sức khỏe và độ tươi ngon của thực phẩm với tính năng kháng khuẩn Ag Clean.\r\nCảm biến Econavi tiết kiệm điện năng hiệu quả, giảm chi phí cho gia đình.\r\nCông nghệ Paronama làm lạnh tối ưu.', 0, 2, 1),
(3, 'Máy lạnh Samsung Inverter 1.0 HP', 'maylanhSamSung.png', 7490000, '2017-12-10 00:00:00', 100, 0, 0, 'Tiết kiệm đến 26% điện năng tiêu thụ với chế độ một người dùng.\r\nCông nghệ Inverter tiết kiệm điện, giúp máy hoạt động bền bỉ, ổn định.\r\nBộ 3 bảo vệ tăng cường giúp gia tăng độ bền, tránh hư hỏng.', 0, 4, 4),
(4, 'Máy giặt Toshiba 8.2 kg AW-F920LV WB', 'MaygiatToShiBa1.png', 5190000, '2017-12-19 00:00:00', 110, 0, 0, 'Lồng giặt ngôi sao pha lê nâng cao hiệu quả chà xát áo quần.\r\nMega Power Wash với luồng nước ba chiều đánh bật các vết bẩn.\r\nTính năng giặt cô đặc bằng bọt khí tẩy sạch bụi bẩn từ trong sợi vải.', 0, 3, 3),
(5, 'Smart Tivi Samsung 4K 65 inch UA65MU6100', 'TiviSamSung4K65.png', 34890000, '2017-12-15 00:00:00', 200, 0, 0, 'Độ phân giải chuẩn UHD tinh tế sắc nét với hơn 8 triệu điểm ảnh.\r\nCông nghệ PurColor màu sắc sống động với hệ màu mở rộng.\r\nOne Remote điều khiển các thiết bị đi kèm chỉ với 1 remote thông minh.\r\nChế độ xem thông minh Smart View chia sẻ nội dung giữa tivi và điện thoại.', 0, 1, 4),
(6, 'Tủ lạnh Samsung 548 lít RS552NRUA9M/SV', 'tulanhSamSung1.png', 32900000, '2017-12-10 00:00:00', 50, 0, 0, 'Tủ lạnh Samsung RS552NRUA9M/SV là chiếc tủ lạnh side by side vừa ra mắt trong năm 2016 của hãng gia dụng nổi tiếng Hàn Quốc Samsung. Tủ nổi bật với thiết kế mặt kính phẳng sang trọng đi cùng mức dung tích rất lớn 548 lít phù hợp với những gia đình đông thành viên (trên 7 người).', 0, 2, 4),
(7, 'Máy giặt LG Twinwash Inverter F2721HTTV', 'maygiatLG1.png', 47690000, '2017-12-12 00:00:00', 50, 0, 0, 'Độc đáo với 2 lồng giặt, khối lượng giặt lớn, giải quyết nhu cầu giặt sấy cho gia đình đông thành viên.\r\nCông nghệ TurboWash 2.0 thế hệ mới, tiết kiệm thời gian, công sức và giặt sạch hiệu quả.', 0, 3, 2),
(8, 'Máy lạnh Panasonic 1.0 HP CU/CS-N9SKH-8', 'maylanhPanasonic.png', 8490000, '2017-12-05 00:00:00', 100, 0, 0, 'Máy lạnh Panasonic CU/CS-N9SKH-8 sở hữu thiết kế nhỏ gọn và tinh tế, cùng gam màu trắng hài hòa, tô điểm cho không gian nội thất sang trọng của gia đình bạn. Với công suất làm lạnh 1HP - 9040 BTU, chiếc máy lạnh này là lựa chọn phù hợp với những căn phòng có diện tích vừa và nhỏ, dưới 15 m2 (từ 30 - 45 m3)', 0, 4, 1),
(9, 'Smart Tivi Panasonic 49 inch TH-49EX600V', 'tiviPanasonic.png', 14990000, '2017-12-05 00:00:00', 50, 0, 0, 'Thiết kế của Smart Tivi Panasonic 49 inch TH-49EX600V mang chiều hướng tối giản nhưng cũng không kém phần sang trọng, giúp tôn lên mọi không gian nhà ở.', 0, 1, 1),
(10, 'Tủ lạnh LG 187 lít GN-L205S', 'tulanhLG.png', 5190000, '2017-12-10 00:00:00', 20, 0, 0, 'Tủ lạnh LG 187 lít GN-L205S sở hữu thiết kế sang trọng, đẳng cấp. Chiếc tủ lạnh này sẽ làm cho căn  phòng của bạn thêm phần hiện đại. Tủ lạnh có dung tích 187 lít, rất phù hợp với gia đình có từ 3-5 người.', 0, 2, 2),
(11, 'Máy giặt Panasonic 9kg NA-F90V5LMX', 'maygiatPanasonic.png', 7790000, '2017-12-12 00:00:00', 30, 0, 0, 'Công nghệ StainMaster giặt nước nóng 60˚C.\r\nCông nghệ ActiveFoam System tạo bọt mịn.\r\nMâm giặt Active Wave mang đến hiệu quả giặt vượt trội.\r\nLoại bỏ cặn bột giặt hơn nhờ hộp đánh bột giặt mới.', 0, 3, 1),
(12, 'Máy lạnh LG Inverter 1 HP V10ENQ', 'maylanhLG.jpg', 7590000, '2017-12-05 00:00:00', 30, 0, 0, 'Chiếc máy lạnh LG 1 HP V10ENQ của hãng sản xuất Hàn Quốc có kiểu dáng khá sang trọng và bắt mắt. Dễ dàng phù hợp với nhiều không gian phòng.', 0, 4, 2),
(13, 'Smart Tivi Toshiba 40 inch 40L5650', 'tiviToShiBa1.png', 8490000, '2017-12-05 00:00:00', 150, 0, 0, 'Thiết kế kim loại chắc chắn, đẹp mắt.\r\nTái hiện hình ảnh Full HD sắc nét, chân thực với CEVO Engine.\r\nCông nghệ Dolby Digital Plus cho âm thanh vòm mạnh mẽ, bùng nổ.\r\nGiao diện Opera TV đẹp, dễ sử dụng, nhiều tính năng giải trí.', 0, 1, 3),
(14, 'Tủ lạnh Toshiba 186 lít GR-M25VMBZ(UKG)', 'tulanhToShiBa1.png', 6490000, '2017-12-12 00:00:00', 50, 0, 0, 'Công nghệ inverter thế hệ mới tiết kiệm đến 40% điện năng tiêu thụ.\r\nBộ khử mùi Hybrid Bio diệt khuẩn khử mùi hiệu quả.\r\nCông nghệ làm lạnh tuần hoàn luân chuyển luồng khí lạnh đến mọi ngóc ngách.\r\nCánh cửa với chất liệu mới Uni Glass phong cách sang trọng, tinh tế.', 0, 2, 3),
(15, 'Máy giặt Samsung 9 kg WA90M5120SW', 'maygiatS2.jpg', 5190000, '2017-12-22 00:00:00', 100, 0, 0, 'Máy giặt Samsung WA90M5120SW/SV được thiết kế mang phong cách mới mẻ và hiện đại, gam màu trắng trang nhã phù hợp với không gian nội thất sang trọng, cùng bảng điều khiển nút nhấn thông minh và màn hình hiển thị hướng tới sự tiện dụng, thân thiện cho người dùng. Với khối lượng giặt 9 kg, sản phẩm này là lựa chọn phù hợp cho những gia đình có trên 6 thành viên', 0, 3, 4),
(16, 'Máy lạnh Toshiba 1.0 HP RAS-H10QKSG-V', 'maylanhToShiBa1.png', 7690000, '2017-12-22 00:00:00', 50, 0, 0, 'Lớp phủ đặc biệt Magic Coil giúp kháng khuẩn, khử mùi.\r\nCông nghệ tinh lọc không khí IAQ giúp ngăn ngừa virus, vi khuẩn cực tốt.\r\nLàm lạnh nhanh chóng nhờ trang bị hệ thống trao đổi nhiệt mới.\r\nMôi chất làm lạnh thế hệ mới R32 thân thiện với môi trường, tiết kiệm điện năng.\r\n', 0, 4, 3),
(17, 'Smart Tivi LG 32 inch 32LJ571D', 'tiviLG1.png', 6990000, '2017-12-15 00:00:00', 40, 0, 0, 'Hệ điều hành Web OS cung cấp tích hợp nhiều trò chơi hấp dẫn.\r\nCông nghệ âm thanh vòm - Virtual Surround mở rộng không gian giải trí.\r\nThưởng thức hoặc xem các nội dung yêu thích từ USB.', 0, 1, 2),
(18, 'Tivi LG 49 inch 49LJ510T', 'tiviLG2.png', 11900000, '2017-12-14 00:00:00', 50, 0, 0, 'Nâng cấp chất lượng hình ảnh từ nhiều nguồn nội dung khác nhau.\r\nCông nghệ âm thanh vòm - Virtual Surround mở rộng không gian giải trí.\r\nThưởng thức hoặc xem các nội dung yêu thích từ USB.\r\nThỏa thích chơi game trên tivi.\r\n', 0, 1, 2),
(19, 'Smart Tivi OLED LG 55 inch 55C7T', 'tiviLG3.png', 57000000, '2017-12-14 00:00:00', 20, 0, 0, 'Thiết kế khung gương siêu mỏng, sang trọng và tinh tế.\r\nCông nghệ màn hình Oled hiển thị hình ảnh rõ nét, chân thực.\r\nCông nghệ âm thanh đỉnh cao Dolby Atmos.\r\nGiao diện WebOS thông minh dể sử dụng.\r\nRemote thông minh đa nhiệm giúp thao tác nhanh.', 0, 1, 2),
(20, 'Tivi Panasonic 40 inch TH-40E400V', 'tiviP4.png', 7990000, '2017-12-14 00:00:00', 40, 0, 0, '- Công nghệ Dot giảm nhiễu, tinh lọc hình ảnh.\r\n- Công nghệ âm thanh vòm ảo V-audio.\r\n- Kết nối USB chia sẻ hình ảnh, xem phim, nghe nhạc.', 0, 1, 1),
(21, 'Smart Tivi Panasonic 40 inch TH-40ES501V', 'tiviPana1.png', 8490000, '2017-12-05 00:00:00', 100, 0, 0, 'Công nghệ tái tạo màu sắc Hexa Chroma Drive cho hình ảnh trung thực.\r\nTấm nền tăng cường độ sáng và làm rõ chi tiết hình ảnh.\r\nGiao diện My Home Screen thú vị, dễ dàng sử dụng', 0, 1, 1),
(22, 'Smart Tivi Panasonic 32 inch TH-32ES500V', 'tiviPa2.jpg', 6290000, '2017-12-05 00:00:00', 50, 0, 0, 'Công nghệ Hexa Chroma Drive PRO cho màu sắc rực rỡ.\r\nTrải nghiệm âm thanh vòm ảo sống động, bùng nổ.\r\nGiao diện My Home Screen cùng nhiều ứng dụng giải trí hấp dẫn.', 0, 1, 1),
(23, 'Internet Tivi Panasonic 49 inch TH-49DX400V', 'tiviP3.jpg', 12990000, '2017-12-10 00:00:00', 50, 0, 0, 'Độ phân giải Ultra HD 4K cho hình ảnh sắc nét.\r\nCông nghệ Adaptive Backlight Dimming cho màu đen sâu hơn.\r\nTấm nền IPS bền bỉ theo thời gian.', 0, 1, 1),
(24, 'Smart Tivi Samsung 4K 43 inch UA43MU6400', 'tiviS1.png', 13890000, '2017-12-10 00:00:00', 20, 0, 0, 'Độ phân giải Ultra HD tinh tế sắc nét với hơn 8 triệu điểm ảnh.\r\nCông nghệ PurColor màu sắc sống động với hệ màu mở rộng.\r\nOne Remote điều khiển các thiết bị đi kèm chỉ với 1 remote thông minh.\r\nChế độ xem thông minh Smart View giúp chia sẻ nội dung giữa Tivi và thiết bị di động', 0, 1, 4),
(25, 'Máy giặt Samsung AddWash inverter 8 kg', 'maygiatS1.png', 10990000, '2017-12-05 00:00:00', 50, 0, 0, 'hiết kế hiện đại, sang trọng\r\nMáy giặt Samsung AddWash Inverter WW80K5410WW/SV là dòng sản phẩm máy giặt AddWash của Samsung mới ra mắt cuối năm 2016, sở hữu thiết kế hiện đại, đẳng cấp cùng đường nét tinh tế, gam màu trắng sang trọng phù hợp với không gian nội thất sang trọng của gia đình bạn. Sản phẩm này có khối lượng giặt 8 kg, thích hợp với những gia đình có 4 - 5 thành viên.', 0, 3, 4),
(26, 'Smart Tivi Samsung 43 inch UA43M5500', 'tiviS2.png', 10890000, '2017-12-10 00:00:00', 40, 0, 0, 'Tivi Samsung 43 inch sở hữu độ phân giải màn hình Full HD giúp bạn trải nghiệm nội dung sắc nét đến từng chi tiết.', 0, 1, 4),
(27, 'Máy giặt Panasonic 8 kg NA-F80VS9GRV', 'maygiatP2.jpg', 5190000, '2017-12-10 00:00:00', 80, 0, 0, 'Máy giặt Panasonic NA-F80VS9GRV là chiếc máy giặt cửa trên quen thuộc đối với người tiêu dùng. Thiết kế thân máy chữ nhật góc cạnh kết hợp với nắp máy làm từ kính chịu lực sẽ mang đến vẻ đẹp  mạnh mẽ, cứng cáp cho máy. Chiếc máy giặt Panasonic được trang bị khối lượng giặt 8 kg sẽ là sự lựa chọn đáng cân nhắc cho gia đình từ 4 đến 5 thành viên', 0, 3, 1),
(28, 'Tủ lạnh LG Inverter 613 lít GR-B247JDS', 'tulanhLG1.png', 19490000, '2017-12-20 00:00:00', 40, 0, 0, 'Công nghệ làm lạnh đa chiều giúp khí lạnh đến từng ngóc ngách bên trong tủ.\r\nBộ lọc khử mùi và kháng khuẩn Nano Carbon giúp thực phẩm tươi ngon.\r\nBảng điều khiển cảm ứng bên ngoài cửa tủ sang trọng và thuận tiện.\r\nNgăn rau củ kích thước lớn có khả năng cân bằng độ ẩm.', 0, 2, 2),
(29, 'Tủ lạnh LG 601 lít GR-D247JS', 'tulanhLG2.png', 37390000, '2017-12-20 00:00:00', 20, 0, 0, 'Công nghệ Hygiene Fresh+™ khử mùi và diệt khuẩn mạnh mẽ.\r\nHệ thống làm đá trên cánh tủ thuận tiện khi lấy đá.\r\nBình chứa nước bên trong dễ dàng tháo lắp.\r\nMáy nén Linear Inverter vận hàng êm ái, bền bỉ, tiết kiệm điện.', 0, 2, 2),
(30, 'Máy lạnh LG Inverter 2.5 HP V24END', 'maylanhLG1', 21590000, '2017-12-20 00:00:00', 100, 0, 0, 'Chức năng thổi gió dễ chịu bảo vệ sức khỏe tốt hơn cho người già và trẻ nhỏ.\r\nTấm lọc bảo vệ đa năng công nghệ 3M kháng khuẩn khử mùi hiệu quả.\r\nCông nghệ Inverter tiết kiệm điện năng, vận hành êm ái, mang đến giấc ngủ ngon cho gia đình.', 0, 4, 2),
(31, 'Máy lạnh Samsung Inverter 2 HP', 'maylanhS1.jpg', 12190000, '2017-12-14 00:00:00', 10, 0, 0, 'Thiết kế tam diện cho hiệu quả làm mát nhanh hơn, xa hơn & tỏa đều khắp phòng.\r\nĐộng cơ Digital Inverter 4 cực tiết kiệm điện, vận hành bền bỉ, ổn định.', 0, 4, 4),
(32, 'Máy lạnh Panasonic Inverter 2 HP CU', 'maylanhP1.png', 19190000, '2017-12-20 00:00:00', 50, 0, 0, 'Tiết kiệm điện năng hao phí nhờ công nghệ inverter.\r\nBộ lọc kháng khuẩn Nanoe-G giúp bảo vệ sức khỏe cho cả gia đình bạn.\r\nChế độ làm lạnh nhanh chóng giúp mang đến không khí lạnh thoải mái, dễ chịu ngay tức thì.', 0, 4, 1),
(33, 'Tivi Toshiba 49 inch 49L3650', 'tiviT1.jpg', 10490000, '2018-01-02 00:00:00', 50, 0, 0, 'Độ phân giải Full HD cho hình ảnh sắc nét, rõ ràng.\r\nCông nghệ CEVO Engine tái tạo hình ảnh chân thực.\r\nCông nghệ Dolby Digital Plus cho âm thanh vòm sống động.', 0, 1, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `MaTaiKhoan` int(11) NOT NULL AUTO_INCREMENT,
  `TenDangNhap` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TenHienThi` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DiaChi` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `BiXoa` tinyint(1) DEFAULT '0',
  `MaLoaiTaiKhoan` int(11) NOT NULL,
  PRIMARY KEY (`MaTaiKhoan`),
  KEY `fk_TaiKhoan_LoaiTaiKhoan_idx` (`MaLoaiTaiKhoan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`MaTaiKhoan`, `TenDangNhap`, `MatKhau`, `TenHienThi`, `DiaChi`, `DienThoai`, `Email`, `BiXoa`, `MaLoaiTaiKhoan`) VALUES
(1, 'nhut', '123456', 'Minh Nhựt', '227 - Nguyễn Văn Cừ - Q.5', '01234567890', 'nhuttran97tphcm@gmail.com', 0, 1),
(5, 'admin', 'admin', 'Admin', 'Zty Shop', '01655068022', 'admin@ztyshop.vn', 0, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tinhtrang`
--

DROP TABLE IF EXISTS `tinhtrang`;
CREATE TABLE IF NOT EXISTS `tinhtrang` (
  `MaTinhTrang` int(11) NOT NULL AUTO_INCREMENT,
  `TenTinhTrang` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`MaTinhTrang`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tinhtrang`
--

INSERT INTO `tinhtrang` (`MaTinhTrang`, `TenTinhTrang`) VALUES
(1, 'Đặt hàng'),
(2, 'Đang giao hàng'),
(3, 'Thanh toán'),
(4, 'Hủy');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdondathang`
--
ALTER TABLE `chitietdondathang`
  ADD CONSTRAINT `fk_ChiTietDonDatHang_DonDatHang1` FOREIGN KEY (`MaDonDatHang`) REFERENCES `dondathang` (`MaDonDatHang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ChiTietDonDatHang_SanPham1` FOREIGN KEY (`MaSanPham`) REFERENCES `sanpham` (`MaSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `dondathang`
--
ALTER TABLE `dondathang`
  ADD CONSTRAINT `fk_DonDatHang_TaiKhoan1` FOREIGN KEY (`MaTaiKhoan`) REFERENCES `taikhoan` (`MaTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DonDatHang_TinhTrang1` FOREIGN KEY (`MaTinhTrang`) REFERENCES `tinhtrang` (`MaTinhTrang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_SanPham_HangSanXuat1` FOREIGN KEY (`MaHangSanXuat`) REFERENCES `hangsanxuat` (`MaHangSanXuat`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_SanPham_LoaiSanPham1` FOREIGN KEY (`MaLoaiSanPham`) REFERENCES `loaisanpham` (`MaLoaiSanPham`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD CONSTRAINT `fk_TaiKhoan_LoaiTaiKhoan` FOREIGN KEY (`MaLoaiTaiKhoan`) REFERENCES `loaitaikhoan` (`MaLoaiTaiKhoan`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
