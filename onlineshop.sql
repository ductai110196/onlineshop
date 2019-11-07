-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2019 lúc 07:21 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `onlineshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `about`
--

CREATE TABLE `about` (
  `ID` bigint(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaTitle` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` longtext CHARACTER SET utf8mb4,
  `Image` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Detail` longtext,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) DEFAULT NULL,
  `ModifileDate` datetime DEFAULT NULL,
  `ModifileBy` varchar(50) DEFAULT NULL,
  `MetaKeywords` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaDescriptions` char(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `ID` bigint(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaTitle` varchar(250) DEFAULT NULL,
  `ParentID` bigint(20) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT '0',
  `SeoTitle` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) DEFAULT NULL,
  `ModifileDate` datetime DEFAULT NULL,
  `ModifileBy` varchar(50) DEFAULT NULL,
  `MetaKeywords` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaDescriptions` char(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `ShowOnHome` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`ID`, `Name`, `MetaTitle`, `ParentID`, `DisplayOrder`, `SeoTitle`, `CreateDate`, `CreateBy`, `ModifileDate`, `ModifileBy`, `MetaKeywords`, `MetaDescriptions`, `Status`, `ShowOnHome`) VALUES
(1, 'Tin Thế Giới', 'tin-the-gioi', NULL, 1, NULL, '2018-08-24 13:29:10', NULL, NULL, NULL, NULL, NULL, 1, 0),
(2, 'Tin Trong Nước', 'tin-trong-nuoc', NULL, 2, NULL, '2018-08-24 13:30:27', NULL, NULL, NULL, NULL, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Content` longtext,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `content`
--

CREATE TABLE `content` (
  `ID` bigint(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaTitle` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` longtext CHARACTER SET utf8mb4,
  `Images` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CategoryID` bigint(20) DEFAULT NULL,
  `Detail` longtext,
  `Warranty` int(11) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) DEFAULT NULL,
  `ModifileDate` datetime DEFAULT NULL,
  `ModifileBy` varchar(50) DEFAULT NULL,
  `MetaKeywords` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaDescriptions` char(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `TopHot` datetime DEFAULT NULL,
  `ViewCount` int(11) DEFAULT '0',
  `Tags` varchar(500) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contenttag`
--

CREATE TABLE `contenttag` (
  `ContentID` bigint(20) NOT NULL,
  `TagID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Phone` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Address` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Content` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `ID` varchar(50) NOT NULL,
  `Content` longtext,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu`
--

CREATE TABLE `menu` (
  `ID` int(11) NOT NULL,
  `Text` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Link` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT '1',
  `Target` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL,
  `TypeID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menutype`
--

CREATE TABLE `menutype` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `ID` bigint(20) NOT NULL,
  `CreateDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `CustomerID` bigint(20) DEFAULT NULL,
  `ShipName` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ShipMobile` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ShipAddress` text CHARACTER SET utf8mb4,
  `ShipEmail` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `ProductID` bigint(20) NOT NULL,
  `OrderID` bigint(20) NOT NULL,
  `Quantity` int(1) DEFAULT NULL,
  `Price` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `ID` bigint(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Code` varchar(10) DEFAULT NULL,
  `MetaTitle` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` longtext CHARACTER SET utf8mb4,
  `Images` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MoreImages` text,
  `Price` bigint(20) DEFAULT '0',
  `PromotionPrice` bigint(20) DEFAULT NULL,
  `Promotion` tinyint(4) DEFAULT '0',
  `IncludeVAT` tinyint(1) DEFAULT NULL,
  `Quantity` int(11) DEFAULT '0',
  `CategoryID` bigint(20) DEFAULT NULL,
  `Detail` longtext CHARACTER SET utf8mb4,
  `Warranty` int(11) DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ModifileDate` datetime DEFAULT NULL,
  `ModifileBy` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaKeywords` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaDescriptions` char(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '1',
  `TopHot` datetime DEFAULT CURRENT_TIMESTAMP,
  `ViewCount` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`ID`, `Name`, `Code`, `MetaTitle`, `Description`, `Images`, `MoreImages`, `Price`, `PromotionPrice`, `Promotion`, `IncludeVAT`, `Quantity`, `CategoryID`, `Detail`, `Warranty`, `CreateDate`, `CreateBy`, `ModifileDate`, `ModifileBy`, `MetaKeywords`, `MetaDescriptions`, `Status`, `TopHot`, `ViewCount`) VALUES
(2, 'iPhone Xs Max 64GB', 'A8999909', 'iphone-xs-max-64gb', '<p style=\"text-align:justify\"><span style=\"color:#e74c3c\">iPhone Xs Max 64GB</span> <strong>l&agrave; chiếc iPhone c&oacute; m&agrave;n h&igrave;nh lớn nhất từ trước đến nay, mang đến những trải nghiệm tuyệt vời về m&agrave;n h&igrave;nh v&agrave; thời lượng pin.</strong></p>\r\n', '/onlineshop/data/images/mota/636748771945393060_iPhone-Xs-Max-gold.png.jpg', NULL, 28000000, 26040000, 10, 3, 100, 15, '<p><strong><span style=\"font-size:22px\">Th&ocirc;ng Số Kỹ Thuật</span></strong></p>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh : 6.5 inchs, 1242 x 2688 Pixels</li>\r\n	<li>Camera trước : 7.0 MP</li>\r\n	<li>Camera sau : Dual Camera 12.0 MP</li>\r\n	<li>RAM : 4 GB</li>\r\n	<li>Bộ nhớ trong : 64 GB</li>\r\n	<li>CPU : Apple A12 Bionic, 6, Đang cập nhật</li>\r\n	<li>GPU : Apple GPU 4 nh&acirc;n</li>\r\n	<li>Dung lượng pin : L&acirc;u hơn iPhone X 1,5h</li>\r\n	<li>Hệ điều h&agrave;nh : iOS 12</li>\r\n	<li>Thẻ SIM : eSIM v&agrave; NanoSIM, 1 Sim</li>\r\n</ul>\r\n', 12, '2019-08-10 13:22:33', 'Nguy?n ??c T?i', '2019-08-10 21:21:57', 'Nguyễn Đức Tài', NULL, NULL, 1, '2019-08-10 20:22:33', 0),
(3, 'Samsung Galaxy A80', 'A5099999', 'samsung-galaxy-a80', '<div class=\"characteristics\">\r\n<h2><span style=\"font-size:28px\"><strong>Samsung Galaxy A80</strong></span> l&agrave; chiếc smartphone mang trong m&igrave;nh rất nhiều đột ph&aacute; của Samsung v&agrave; hứa hẹn sẽ l&agrave; &quot;ngọn cờ đầu&quot; cho những chiếc smartphone sở hữu một m&agrave;n h&igrave;nh tr&agrave;n viền thật sự.</h2>\r\n</div>\r\n\r\n<h2>&nbsp;</h2>\r\n', '/onlineshop/data/images/mota/samsung-galaxy-a80-gold-400x460.png', NULL, 12000000, 11160000, 10, 3, 100, 12, '<h2><span style=\"font-size:36px\"><strong>Th&ocirc;ng số kỹ thuật</strong></span></h2>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-super-amoled-la-gi-905770\" target=\"_blank\">Super AMOLED</a>, 6.7&quot;, <a href=\"https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#fullhd\" target=\"_blank\">Full HD+</a></div>\r\n	</li>\r\n	<li>Hệ điều h&agrave;nh:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-android-90-pie-va-nhung-tinh-nang-moi-noi-1107119\" target=\"_blank\">Android 9.0 (Pie)</a></div>\r\n	</li>\r\n	<li>Camera sau:\r\n	<div>Ch&iacute;nh 48 MP &amp; Phụ 8 MP, TOF 3D</div>\r\n	</li>\r\n	<li>Camera trước:\r\n	<div>Ch&iacute;nh 48 MP &amp; Phụ 8 MP, TOF 3D</div>\r\n	</li>\r\n	<li>CPU:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-qualcomm-snapdragon-730-1174819\" target=\"_blank\">Snapdragon 730 8 nh&acirc;n</a></div>\r\n	</li>\r\n	<li>RAM:\r\n	<div>8 GB</div>\r\n	</li>\r\n	<li>Bộ nhớ trong:\r\n	<div>128 GB</div>\r\n	</li>\r\n	<li>Thẻ SIM:\r\n	<div class=\"isim\"><a href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-cac-loai-sim-thong-dung-sim-thuong-micro--590216#nanosim\" target=\"_blank\">2 Nano SIM</a>, <a href=\"https://www.thegioididong.com/hoi-dap/4g-la-gi-731757\" target=\"_blank\">Hỗ trợ 4G</a></div>\r\n\r\n	<div class=\"ibsim\"><strong>HOT</strong><a href=\"https://www.thegioididong.com/sim-so-dep/viettel?t=73\">SIM VIETTEL G&Ocirc;G&Ocirc; 4G (3GB data/ th&aacute;ng)</a>. Gi&aacute; từ <strong>190.000đ</strong></div>\r\n	</li>\r\n	<li>Dung lượng pin:\r\n	<div>3700 mAh, c&oacute; sạc nhanh</div>\r\n	</li>\r\n</ul>\r\n', 12, '2019-08-10 14:10:23', 'Nguy?n ??c T?i', '2019-08-23 08:06:01', 'Nguyễn Đức Tài', NULL, NULL, 1, '2019-08-10 21:10:23', 0),
(4, 'Giầy Cao Gót Mũi Nhọn', 'TGN091', 'giay-cao-got-mui-nhon', '', '/onlineshop/data/images/product/Giay-Cao-Got-Mui-Nhon-Thanh-Lich-Senko-Size-35.jpg', NULL, 200000, 192000, 5, 1, 100, 16, '', 1, '2019-08-14 13:40:05', 'Nguyễn Đức Tài', NULL, NULL, NULL, NULL, 1, '2019-08-14 20:40:05', 0),
(5, 'Giầy Cao Gót ', 'TG092', 'giay-cao-got', '', '/onlineshop/data/images/product/Giay-Cao-Got-Dinh-Ngoc-Trai-Size-35.jpg', NULL, 180000, 171000, 5, 0, 100, 16, '', 1, '2019-08-14 13:41:15', 'Nguyễn Đức Tài', NULL, NULL, NULL, NULL, 1, '2019-08-14 20:41:15', 0),
(6, 'Giầy Cao Gót Quai Chèo', 'TG093', 'giay-cao-got-quai-cheo', '', '/onlineshop/data/images/product/Giay-Cao-Got-Quai-Cheo-Cach-Dieu-Cg007_1.jpg', NULL, 280000, 266000, 5, 0, 100, 16, '', 1, '2019-08-14 13:42:27', 'Nguyễn Đức Tài', '2019-08-23 08:07:28', 'Nguyễn Đức Tài', NULL, NULL, 1, '2019-08-14 20:42:27', 0),
(7, 'Giầy Cao Gót Viền Vàng', 'TG094', 'giay-cao-got-vien-vang', '', '/onlineshop/data/images/product/Giay-Cao-Got-Vien-Vang-Charm-Gold-Cg011-Size-36.jpg', NULL, 285000, 270750, 5, 0, 100, 16, '', 1, '2019-08-14 13:43:33', 'Nguyễn Đức Tài', '2019-08-23 08:07:45', 'Nguyễn Đức Tài', NULL, NULL, 1, '2019-08-14 20:43:33', 0),
(8, 'Samsung Galaxy Note 10', 'AS102019', 'samsung-galaxy-note-10', '<p>Nếu như từ trước tới nay d&ograve;ng Galaxy Note của <a href=\"https://www.thegioididong.com/dtdd-samsung\" target=\"_blank\" title=\"Tham khảo giá điện thoại smartphone Samsung chính hãng, giá rẻ\" type=\"Tham khảo giá điện thoại smartphone Samsung chính hãng, giá rẻ\">Samsung</a> thường &iacute;t được c&aacute;c bạn nữ sử dụng bởi k&iacute;ch thước m&agrave;n h&igrave;nh kh&aacute; lớn khiến việc cầm nắm trở n&ecirc;n kh&oacute; khăn th&igrave;&nbsp;<a href=\"https://www.thegioididong.com/dtdd/samsung-galaxy-note-10\" target=\"_blank\" title=\"Tham khảo điện thoại Samsung Galaxy Note 10 chính hãng, giá rẻ\" type=\"Tham khảo điện thoại Samsung Galaxy Note 10 chính hãng, giá rẻ\">Samsung Galaxy Note 10</a>&nbsp;sẽ l&agrave; chiếc smartphone nhỏ gọn, ph&ugrave; hợp với cả những bạn c&oacute; b&agrave;n tay nhỏ</p>\r\n', '/onlineshop/data/images/mota/samsung-galaxy-note-10-pink-400x460.png', NULL, 23000000, 21850000, 10, 5, 100, 12, '<p>Th&ocirc;ng số kỹ thuật</p>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/cong-nghe-ma-hinh-dynamic-amoled-co-gi-noi-bat-1151123\" target=\"_blank\">Dynamic AMOLED</a>, 6.3&quot;, <a href=\"https://www.thegioididong.com/tin-tuc/do-phan-giai-man-hinh-qhd-hd-fullhd-2k-4k-la-gi--592178#fullhd\" target=\"_blank\">Full HD+</a></div>\r\n	</li>\r\n	<li>Hệ điều h&agrave;nh:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-android-90-pie-va-nhung-tinh-nang-moi-noi-1107119\" target=\"_blank\">Android 9.0 (Pie)</a></div>\r\n	</li>\r\n	<li>Camera sau:\r\n	<div>Ch&iacute;nh 12 MP &amp; Phụ 12 MP, 16 MP</div>\r\n	</li>\r\n	<li>Camera trước:\r\n	<div>10 MP</div>\r\n	</li>\r\n	<li>CPU:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-exynos-9825-1187140\" target=\"_blank\">Exynos 9825 8 nh&acirc;n 64-bit</a></div>\r\n	</li>\r\n	<li>RAM:\r\n	<div>8 GB</div>\r\n	</li>\r\n	<li>Bộ nhớ trong:\r\n	<div>256 GB</div>\r\n	</li>\r\n	<li>Thẻ SIM:\r\n	<div class=\"isim\"><a href=\"https://www.thegioididong.com/tin-tuc/tim-hieu-cac-loai-sim-thong-dung-sim-thuong-micro--590216#nanosim\" target=\"_blank\">2 Nano SIM</a>, <a href=\"https://www.thegioididong.com/hoi-dap/4g-la-gi-731757\" target=\"_blank\">Hỗ trợ 4G</a></div>\r\n\r\n	<div class=\"ibsim\"><strong>HOT</strong><a href=\"https://www.thegioididong.com/sim-so-dep/viettel?t=73\">SIM VIETTEL G&Ocirc;G&Ocirc; 4G (3GB data/ th&aacute;ng)</a>. Gi&aacute; từ <strong>190.000đ</strong></div>\r\n	</li>\r\n	<li>Dung lượng pin:\r\n	<div>3500 mAh, c&oacute; sạc nhanh</div>\r\n	</li>\r\n</ul>\r\n', 9, '2019-08-23 05:02:39', 'Nguyễn Đức Tài', NULL, NULL, NULL, NULL, 1, '2019-08-23 12:02:39', 0),
(9, 'iPhone Xs Max 256GB', 'ASP102019', 'iphone-xs-max-256gb', '<p>Sau 1 năm mong chờ, chiếc&nbsp;<a href=\"https://www.thegioididong.com/dtdd\" target=\"_blank\" title=\"Tham khảo các dòng điện thoại tại Thegioididong.com\" type=\"Tham khảo các dòng điện thoại tại Thegioididong.com\">smartphone</a>&nbsp;cao cấp nhất của Apple đ&atilde; ch&iacute;nh thức ra mắt mang t&ecirc;n&nbsp;<a href=\"https://www.thegioididong.com/dtdd/iphone-xs-max-256gb\" target=\"_blank\" title=\"Chi tiết điện thoại iPhone XS Max 256GB\" type=\"Chi tiết điện thoại iPhone XS Max 256GB\">iPhone Xs Max</a>. M&aacute;y&nbsp;c&aacute;c trang bị c&aacute;c t&iacute;nh năng cao cấp nhất từ chip A12 Bionic, d&agrave;n loa đa chiều cho tới camera k&eacute;p t&iacute;ch hợp tr&iacute; tuệ nh&acirc;n tạo.</p>\r\n', '/onlineshop/data/images/mota/iphone-xs-max-256gb-white-400x460.png', NULL, 37000000, 35150000, 10, 5, 100, 15, '<p><span style=\"font-size:24px\">Th&ocirc;ng số kỹ thuật</span></p>\r\n\r\n<ul>\r\n	<li>M&agrave;n h&igrave;nh:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-oled-la-gi-905762\" target=\"_blank\">OLED</a>, 6.5&quot;, <a href=\"https://www.thegioididong.com/hoi-dap/man-hinh-super-retina-la-gi-1152045\" target=\"_blank\">Super Retina</a></div>\r\n	</li>\r\n	<li>Hệ điều h&agrave;nh:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-ve-he-dieu-hanh-ios-12-1172136\" target=\"_blank\">iOS 12</a></div>\r\n	</li>\r\n	<li>Camera sau:\r\n	<div>Ch&iacute;nh 12 MP &amp; Phụ 12 MP</div>\r\n	</li>\r\n	<li>Camera trước:\r\n	<div>7 MP</div>\r\n	</li>\r\n	<li>CPU:\r\n	<div><a href=\"https://www.thegioididong.com/hoi-dap/tim-hieu-chip-apple-a12-bionic-con-chip-7nm-dau-1171937\" target=\"_blank\">Apple A12 Bionic 6 nh&acirc;n</a></div>\r\n	</li>\r\n	<li>RAM:\r\n	<div>4 GB</div>\r\n	</li>\r\n	<li>Bộ nhớ trong:\r\n	<div>256 GB</div>\r\n	</li>\r\n	<li>Thẻ SIM:\r\n	<div class=\"isim\"><a href=\"https://www.thegioididong.com/hoi-dap/esim-la-gi-esim-co-su-dung-duoc-o-viet-nam-khong-1118062\" target=\"_blank\">Nano SIM &amp; eSIM</a>, <a href=\"https://www.thegioididong.com/hoi-dap/4g-la-gi-731757\" target=\"_blank\">Hỗ trợ 4G</a></div>\r\n\r\n	<div class=\"ibsim\"><strong>HOT</strong><a href=\"https://www.thegioididong.com/sim-so-dep/viettel?t=73\">SIM VIETTEL G&Ocirc;G&Ocirc; 4G (3GB data/ th&aacute;ng)</a>. Gi&aacute; từ <strong>190.000đ</strong></div>\r\n	</li>\r\n	<li>Dung lượng pin:\r\n	<div>3174 mAh, c&oacute; sạc nhanh</div>\r\n	</li>\r\n</ul>\r\n', 12, '2019-08-23 05:13:55', 'Nguyễn Đức Tài', '2019-08-23 12:15:09', 'Nguyễn Đức Tài', NULL, NULL, 1, '2019-08-23 12:13:55', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productcategory`
--

CREATE TABLE `productcategory` (
  `ID` bigint(20) NOT NULL,
  `Name` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaTitle` varchar(250) DEFAULT NULL,
  `ParentID` bigint(20) DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT '0',
  `SeoTitle` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ModifileDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `ModifileBy` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaKeywords` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `MetaDescriptions` char(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) DEFAULT '1',
  `ShowOnHome` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `productcategory`
--

INSERT INTO `productcategory` (`ID`, `Name`, `MetaTitle`, `ParentID`, `DisplayOrder`, `SeoTitle`, `CreateDate`, `CreateBy`, `ModifileDate`, `ModifileBy`, `MetaKeywords`, `MetaDescriptions`, `Status`, `ShowOnHome`) VALUES
(8, 'Thời Trang', 'thoi-trang', 0, 0, NULL, '2019-08-02 07:57:36', 'Nguyễn Đức Tài', '2019-08-02 14:57:36', NULL, NULL, NULL, 1, 1),
(9, 'Điện Thoại', 'dien-thoai', 0, 0, NULL, '2019-08-02 07:57:51', 'Nguyễn Đức Tài', '2019-08-02 14:57:51', NULL, NULL, NULL, 1, 1),
(10, 'Quần Nam', 'quan-nam', 8, 0, NULL, '2019-08-02 07:58:08', 'Nguyễn Đức Tài', '2019-08-02 00:00:00', 'Nguyễn Đức Tài', NULL, NULL, 1, 1),
(12, 'Sam Sung', 'sam-sung', 9, 0, NULL, '2019-08-02 08:24:07', 'Nguyễn Đức Tài', '2019-08-02 15:24:07', NULL, NULL, NULL, 1, 1),
(13, 'Máy Tính', 'may-tinh', 0, 0, NULL, '2019-08-02 08:24:30', 'Nguyễn Đức Tài', '2019-08-02 15:24:30', NULL, NULL, NULL, 1, 1),
(14, 'Phụ Kiện', 'phu-kien', 0, 0, NULL, '2019-08-02 08:25:07', 'Nguyễn Đức Tài', '2019-08-02 15:25:07', NULL, NULL, NULL, 1, 1),
(15, 'Apple', 'apple', 9, 0, NULL, '2019-08-10 13:07:30', 'Nguyễn Đức Tài', '2019-08-10 20:07:30', NULL, NULL, NULL, 1, 1),
(16, 'Giầy Nữ', 'giay-nu', 8, 0, NULL, '2019-08-14 13:12:42', 'Nguyễn Đức Tài', '2019-08-14 20:12:42', NULL, NULL, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `ID` int(11) NOT NULL,
  `Image` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `DisplayOrder` int(11) DEFAULT '1',
  `Link` varchar(250) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Description` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) DEFAULT NULL,
  `ModifileDate` datetime DEFAULT NULL,
  `ModifileBy` varchar(50) DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `systemconfig`
--

CREATE TABLE `systemconfig` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `Value` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `ID` varchar(50) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` bigint(20) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Address` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Email` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Phone` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `CreateDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `CreateBy` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `ModifileDate` datetime DEFAULT CURRENT_TIMESTAMP,
  `ModifileBy` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `Username`, `Password`, `Name`, `Address`, `Email`, `Phone`, `CreateDate`, `CreateBy`, `ModifileDate`, `ModifileBy`, `Status`) VALUES
(4, 'admin', '202cb962ac59075b964b07152d234b70', 'Nguyễn Đức Tài', 'TIền Giang', 'tai9331@gmail.com', '0972985101', NULL, NULL, '2018-08-22 21:38:47', NULL, 1),
(35, 'khai123', '827ccb0eea8a706c4c34a16891f84e7b', 'Trần Đắc Khải', 'Tiền Giang', 'trandackhai@gmail.com', '08787787889', NULL, NULL, '2019-07-30 00:00:00', 'Nguyễn Đức Tài', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `contenttag`
--
ALTER TABLE `contenttag`
  ADD PRIMARY KEY (`ContentID`,`TagID`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `menutype`
--
ALTER TABLE `menutype`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`ProductID`,`OrderID`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `systemconfig`
--
ALTER TABLE `systemconfig`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
