-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2021-02-17 11:36:06
-- 服务器版本： 10.4.6-MariaDB
-- PHP 版本： 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ishop`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'Superadmin', 'superadmin@gmail.com', '17c4520f6cfd1ab53d8745e84681eb49', 'Active'),
(2, 'admin01', 'admin01@gmail.com', 'ef9ec39df300ab9cef8657af3cabe2db', 'Active'),
(3, 'Admin02', 'admin02@gmail.com', '9d74933b86ddb3b3f83d5285bb2133f9', 'Blocked'),
(4, 'admin05', 'dmin05@gmail.com', 'c0d107095acb294a1c97db68959ff218', 'Active');

-- --------------------------------------------------------

--
-- 表的结构 `brand`
--

CREATE TABLE `brand` (
  `Brand_ID` int(11) NOT NULL,
  `Brand_NAME` varchar(100) NOT NULL,
  `Product_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `brand`
--

INSERT INTO `brand` (`Brand_ID`, `Brand_NAME`, `Product_code`) VALUES
(1, 'Logitech', '#M101'),
(2, 'Logitech', '#M102'),
(3, 'Logitech', '#M103'),
(4, 'Logitech', '#M104'),
(5, 'Logitech', '#M105'),
(6, 'Logitech', '#K201'),
(7, 'Logitech', '#K203'),
(8, 'Logitech', '#K204'),
(9, 'Logitech', '#K205'),
(10, 'Logitech', '#K202'),
(11, 'Logitech', '#K206'),
(12, 'Logitech', '#H306'),
(13, 'Sony', '#H301'),
(14, 'Sony', '#H305'),
(15, 'Sony', '#S501'),
(16, 'Sony', '#S502'),
(17, 'Sony', '#S504'),
(18, 'Sony', '#S505'),
(19, 'Philips', '#H304\r\n'),
(20, 'Philips', '#S503\r\n'),
(21, 'Philips', '#MC601\r\n'),
(22, 'Kingstom', '#F401'),
(23, 'Kingstom', '#F402'),
(24, 'Kingstom', '#F403'),
(25, 'Kingstom', '#F404'),
(26, 'Kingstom', '#F405'),
(27, 'Beats', '#H303'),
(28, 'Beats', '#H302'),
(29, 'Tonor', '#MC602'),
(30, 'Tonor', '#MC603'),
(31, 'Microsoft', '#W701'),
(32, 'Microsoft', '#W702'),
(33, 'Microsoft', '#W603'),
(34, 'Philips', '#H307\r\n'),
(35, 'Philips', '#M106'),
(36, 'Beats', '#H308'),
(37, 'Tonor', '#MC604'),
(38, 'Tonor', '#MC605'),
(39, 'Tonor', '#MC606'),
(40, 'Microsoft', '#D801'),
(41, 'Microsoft', '#D802'),
(42, 'Microsoft', '#D803'),
(43, 'Microsoft', '#W703'),
(44, 'Philips', '#M106'),
(45, 'Sony', '#M106'),
(46, 'Logitech', '4444444444444'),
(47, 'Logitech', '#M106'),
(48, 'Logitech', '#M1065'),
(49, 'Logitech', '#M106555555');

-- --------------------------------------------------------

--
-- 表的结构 `cart`
--

CREATE TABLE `cart` (
  `Cart_ID` int(64) NOT NULL,
  `Member_ID` int(64) NOT NULL,
  `Product_ID` int(64) NOT NULL,
  `Product_QTY` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `cart`
--

INSERT INTO `cart` (`Cart_ID`, `Member_ID`, `Product_ID`, `Product_QTY`) VALUES
(24, 1, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE `category` (
  `Category_ID` int(11) NOT NULL,
  `Category_NAME` varchar(100) NOT NULL,
  `Product_code` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`Category_ID`, `Category_NAME`, `Product_code`) VALUES
(1, 'Mouse', '#M101'),
(2, 'Mouse', '#M102'),
(3, 'Mouse', '#M103'),
(4, 'Mouse', '#M104'),
(5, 'Mouse', '#M105'),
(6, 'Keyboard', '#K201'),
(7, 'Keyboard', '#K202'),
(8, 'Keyboard', '#K203'),
(9, 'Keyboard', '#K204'),
(10, 'Keyboard', '#K205'),
(11, 'Keyboard', '#K206'),
(12, 'Headphone', '#H301'),
(13, 'Headphone', '#H302'),
(14, 'Headphone', '#H303'),
(15, 'Headphone', '#H304'),
(16, 'Headphone', '#H305'),
(17, 'Headphone', '#H306'),
(18, 'Headphone', '#H307'),
(19, 'Headphone', '#H308'),
(20, 'Keyboard', '#M106'),
(21, 'Flash Drive', '#F401'),
(22, 'Flash Drive', '#F402'),
(23, 'Flash Drive', '#F403'),
(24, 'Flash Drive', '#F404'),
(25, 'Flash Drive', '#F405'),
(26, 'Speaker', '#S501'),
(27, 'Speaker', '#S502'),
(28, 'Speaker', '#S503'),
(29, 'Speaker', '#S504'),
(30, 'Speaker', '#S505'),
(31, 'Microphone', '#MC601'),
(32, 'Microphone', '#MC602'),
(33, 'Microphone', '#MC603'),
(34, 'Microphone', '#MC604'),
(35, 'Microphone', '#MC605'),
(36, 'Microphone', '#MC606'),
(37, 'Webcam', '#W701'),
(38, 'Webcam', '#W702'),
(39, 'Webcam', '#W703'),
(40, 'Display Adapter', '#D801'),
(41, 'Display Adapter', '#D802'),
(42, 'Display Adapter', '#D803'),
(43, 'Keyboard', '#M106'),
(44, 'Headphone', '#M106'),
(45, 'Mouse', '4444444444444'),
(46, 'Mouse', '#M106'),
(47, 'Mouse', '#M1065'),
(48, 'Mouse', '#M106555555');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

CREATE TABLE `contact` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`) VALUES
(2, 'LEE JIA YI', 'lee52934870@gmail.com', 184675055, 'Shipping', 'Do ishop have free shipping service?', 'contact'),
(3, 'Ramli', 'ramlimuddin225@yahoo.com', 125582218, 'Return', 'Do ishop return product?', 'replied');

-- --------------------------------------------------------

--
-- 表的结构 `member`
--

CREATE TABLE `member` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phone` varchar(64) NOT NULL,
  `address` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `postcode` int(64) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `password`, `phone`, `address`, `state`, `city`, `postcode`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '018955625894', '56,jalan tembikai,21', 'johor', 'johor bahru', 81100, 'Active'),
(2, 'lee', 'lee52934870@gmail.com', '71ee711610c4343c86cccc6f38cde8f4', '0195565996', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'Active'),
(3, 'admin000', 'admin000@gmail.com', 'bd6fddd42278812354823774c428b159', '0155804841', '31,jalan ganjar 20', 'johor', 'johor bahru', 81200, 'Blocked');

-- --------------------------------------------------------

--
-- 表的结构 `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Order_ID` int(240) NOT NULL,
  `Member_ID` int(11) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Product_QTY` int(11) NOT NULL,
  `Order_AMOUNT` int(11) NOT NULL,
  `Order_STATUS` varchar(11) NOT NULL,
  `Order_RECIPIENT` varchar(100) NOT NULL,
  `Order_PHONE` varchar(100) NOT NULL,
  `Order_ADDRESS` varchar(100) NOT NULL,
  `Order_STATE` varchar(100) NOT NULL,
  `Order_CITY` varchar(100) NOT NULL,
  `Order_POSTCODE` int(11) NOT NULL,
  `Order_CARDBANK` varchar(100) NOT NULL,
  `Order_CARDNUM` varchar(100) NOT NULL,
  `Order_CARDNAME` varchar(100) NOT NULL,
  `Order_CARDMM` varchar(100) NOT NULL,
  `Order_CARDYYYY` varchar(100) NOT NULL,
  `Order_CARDCVV` int(11) NOT NULL,
  `Order_DATE` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `orderdetail`
--

INSERT INTO `orderdetail` (`Order_ID`, `Member_ID`, `Product_ID`, `Product_QTY`, `Order_AMOUNT`, `Order_STATUS`, `Order_RECIPIENT`, `Order_PHONE`, `Order_ADDRESS`, `Order_STATE`, `Order_CITY`, `Order_POSTCODE`, `Order_CARDBANK`, `Order_CARDNUM`, `Order_CARDNAME`, `Order_CARDMM`, `Order_CARDYYYY`, `Order_CARDCVV`, `Order_DATE`) VALUES
(1, 2, 1, 1, 178, 'Confirmed', 'lee', '01587496894', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'RHB Bank', '2147483647', 'kkkkkkkkkkkkk', '10', '36', 444, '2021-01-29 12:15:21.000000'),
(2, 2, 1, 1, 178, 'Paid', 'lee', '01587496894', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'RHB Bank', '2147483647', 'k', '08', '36', 454, '2021-01-29 13:04:56.000000'),
(3, 2, 1, 1, 178, 'Paid', 'lee', '01587496894', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'Public Bank', '2147483647', 'kk', '10', '35', 425, '2021-01-29 13:14:55.000000'),
(4, 2, 1, 1, 178, 'Cancelled', 'lee', '01587496894', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'Maybank', '455', 'Lee Jia Yi', '09', '35', 452, '2021-01-29 13:16:25.000000'),
(5, 2, 1, 1, 178, 'Shipped', 'lee', '0185626330', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'Hong Leong Bank', '5196203594826595', 'Lee Jia Yi', '09', '37', 454, '2021-01-29 13:17:39.000000'),
(6, 1, 4, 1, 1030, 'Paid', 'Admin', '018955625894', '56,jalan tembikai,21', 'johor', 'johor bahru', 81100, 'RHB Bank', '539800639400536', 'Lee Jia Yi', '03', '23', 553, '2021-02-01 14:24:05.000000'),
(7, 2, 8, 1, 120, 'Paid', 'lee', '01587496894', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'Maybank', '5196445655234452', 'Lee Jia Yi', '10', '24', 562, '2021-02-01 17:11:21.000000'),
(9, 2, 1, 2, 356, 'Shipped', 'lee', '', '24,jalan durian 63', 'melaka', 'melaka', 81500, 'RHB Bank', '2560864804684840065', 'Lee Jia Yi', '01', '21', 555, '2021-02-17 15:09:46.000000');

-- --------------------------------------------------------

--
-- 表的结构 `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `password_resets`
--

INSERT INTO `password_resets` (`id`, `email`, `token`) VALUES
(1, 'lee52934870@gmail.com', '3bc886cc00de6e95a3937e643446f6bca6c6c99ff8000b9a7f2c51f20e746c66c7567cb780709e1a9683b0c8de31dbd6439c'),
(2, 'lee52934870@gmail.com', 'e0584926bb4cbd1b1b316af386b2388536769c717d8b9cb7402e03982953d22d68b7cdf9bff03ead66b23ced217d6af22ee5'),
(3, 'lee52934870@gmail.com', '2328e6f37c0ff53db003cef367ecde1b0b878a5703c68b1af93383c2196f13bd333ea1fa333fac00c6d445bd2390c8ef4edf'),
(4, 'lee52934870@gmail.com', '54454288fa5fa17ed2a1f2d20b6007be7bce28c80986111acba0f1713a656a933b6a4ebbace260f933c4e4e03aa386d4f5ff'),
(5, 'lee52934870@gmail.com', '5192581de9decb9faff8413800493cc7a5ddf125accb54235c6fbe197ceeaad5cb98882d9e5f487f8e984bdb743ff920b3df'),
(6, 'lee52934870@gmail.com', 'aa9e93000eace3d3b277348f293630c56ff8b4b2d7575a933afe073136ac442765138c4cdc87963d631b2a6dc3e7deda0eb7'),
(7, 'lee52934870@gmail.com', '72c9e46a614b68819bcdc1662068b7fea11f0eb14b8ab77a60cf68bd0d36103f64bc295e5b00cc54abccff6178d0722468c0'),
(8, 'lee52934870@gmail.com', '7e548e9c6174cb2b4398954fd3e247e202d67bfbed284fde0f294aa49924eff9d5148bc4de840584f91d8bd6ef3e6ea60d19'),
(9, 'lee52934870@gmail.com', 'e95707d34c471ac597a03310de7a0d7741270a6be04e1d72f04ac699ccd359af93842c63dfedcad52ab0bfa2b96c12e3692c');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE `product` (
  `Product_ID` int(11) NOT NULL,
  `Product_NAME` varchar(250) NOT NULL,
  `Product_DESCRIPTION` varchar(250) NOT NULL,
  `Product_PIC` blob NOT NULL,
  `Product_PRICE` int(11) NOT NULL,
  `Product_STOCK` int(11) NOT NULL,
  `Product_Code` varchar(100) DEFAULT NULL,
  `Product_Status` varchar(100) DEFAULT NULL,
  `Product_Connectivity` varchar(100) DEFAULT NULL,
  `Product_CATEGORY` varchar(100) NOT NULL,
  `Product_BRAND` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`Product_ID`, `Product_NAME`, `Product_DESCRIPTION`, `Product_PIC`, `Product_PRICE`, `Product_STOCK`, `Product_Code`, `Product_Status`, `Product_Connectivity`, `Product_CATEGORY`, `Product_BRAND`) VALUES
(1, 'GPRO WIRELESS GAMING MOUSE', 'PRO Wireless was designed to be the ultimate gaming mouse for esports professionals. ', 0x472050524f20576972656c6573732047616d696e67204d6f7573652e6a7067, 178, 17, '#M101', 'Available', 'Bluetooth', 'Mouse', 'Logitech'),
(2, 'G502 LIGHTSPEED WIRELESS OPTICAL GAMING MOUSE', 'G502 is an icon, topping the charts through every generation, and the mouse of choice for serious gamers.', 0x47203530324d2e6a7067, 178, 25, '#M102', 'Available', 'Bluetooth', 'Mouse', 'Logitech'),
(3, 'M185 COMPACT WIRELESS MOUSE', 'The  M185 COMPACT WIRELESS MOUSE works with Window®, Mac, Chrome OS™ or Linux®-based computers. So small and unobtrusive, you can plug it into a USB port and forget about it. Plus, you can say good-bye to worries about lost receivers.', 0x4d31383520436f6d7061637420576972656c657373204d6f7573652c2044757261626c6520262044657369676e20666f72204c6170746f702e706e67, 30, 35, '#M103', 'Available', 'Bluetooth', 'Mouse', 'Logitech'),
(4, 'M557 BLUETOOTH MOUSE FOR WINDOWS & MAC', 'The 1000 dpi, high-definition optical sensor delivers smooth, responsive cursor control, so you can work with precision and confidence on a wide variety of surfaces.', 0x4d35353720426c7565746f6f7468204d6f75736520666f722057696e646f77732026204d61632e706e67, 27, 29, '#M104', 'Available', 'Bluetooth ', 'Mouse', 'Logitech'),
(5, 'G102 PRODIGY USB BLACK GAMING MOUSE', 'A true gaming mouse that allows you to enjoy high quality RGB lighting featuring 16.5 million colours.', 0x473130324d2e6a7067, 25, 30, '#M105', 'Available', 'Bluetooth & USB Unifying', 'Mouse', 'Logitech'),
(6, 'G613 WIRELESS MECHANICAL GAMING KEYBOARD', 'Six dedicated G-keys can be programmed with custom macros and in-app commands. Execute complex actions, simply and quickly, with a keystroke. G-keys can be assigned per game or app profile for customizability and convenience.', 0x4736313320576972656c657373204d656368616e6963616c2047616d696e67204b6579626f6172642e706e67, 150, 20, '#K201', 'Available', 'USB Unifying', 'KEYBOARD', 'Logitech'),
(7, 'CORDED KEYBOARD K280E', 'Solid construction ensures extended durability and 3-year limited hardware warranty provides for long-term use.', 0x436f72646564204b6579626f617264204b323830652e706e67, 90, 30, '#K202', 'Available', 'Bluetooth & USB Unifying', 'Keyboard', 'Logitech'),
(8, 'G213 PRODIGY GAMING KEYBOARD', 'The G213 gaming keyboard features Logitech G Mech-Dome keys that are specially tuned to deliver a superior tactile response and overall performance profile similar to a mechanical keyboard.', 0x473231332050726f646967792047616d696e67204b6579626f617264207769746820524742204c69676874696e67202620416e74692d47686f7374696e672e706e67, 120, 29, '#K203', 'Available', 'Bluetooth & USB Unifying', 'Keyboard', 'Logitech'),
(9, 'K360 COMPUTER WIRELESS KEYBOARD WITH HOT KEYS', 'Perfect for tight workspaces, or smaller frames, so you can place your mouse closer for less reaching and better body posture.', 0x4b3336302e706e67, 100, 35, '#K204', 'Available', 'Bluetooth & USB Unifying', 'Keyboard', 'Logitech'),
(10, 'K740 ILLUMINATED USB KEYBOARD WITH BUILT-IN PLAM REST', 'Perfect for tight workspaces, or smaller frames, so you can place your mouse closer for less reaching and better body posture.', 0x4b37343020696c6c756d696e6174656420555342204b6579626f6174642077697468204275696c742d696e2050616c6d20526573742e706e67, 100, 30, '#K205', 'Available', 'Bluetooth & USB Unifying', 'Keyboard', 'Logitech'),
(11, 'H340 USB COMPUTER HEADSET', 'Works with Common calling applications across almost all platforms and operating systems\r\nWindows® or macOS or Chrome OS™ and USB port (Type A port or adapter).', 0x483334302055534220434f4d505554455220484541445345542e706e67, 50, 30, '#H301', 'Available', 'USB', 'Headphone', 'Sony'),
(12, 'MX Keys for Mac- Wireless illuminated Keyboard', 'MX Keys for Mac – designed to work seamlessly on your Mac and iPad. ', 0x4d58204b65797320666f72204d61632d20576972656c65737320696c6c756d696e61746564204b6579626f6172642e706e67, 100, 35, '#K206', 'Available', 'USB Unifying', 'Keyboard', 'Logitech'),
(13, 'BEATS SOLO 3 WIRELESS', 'Enjoy award-winning Beats sound with Class 1 Bluetooth wireless listening freedom.', 0x426561747320536f6c6f204d2e6a7067, 175, 30, '#H302', 'Available', 'Bluetooth ', 'Headphone', 'Beats'),
(14, 'BEATS SOLO PRO WIRELESS', 'Beats Solo Pro wireless on-ear headphones have Active Noise Cancelling, powerful sound, Class 1 bluetooth, and up to 40 hours of battery life.', 0x536f6c6f5f48442e706e67, 180, 20, '#H303', 'Available', 'Bluetooth', 'Headphone', 'Beats'),
(15, 'PC HEADSET SHM7110U/97', 'This sleek PC solution lets you tailor your headset with customizable earshells.', 0x504320486561647365742053484d37313130552d39372e6a7067, 50, 40, '#H304', 'Available', 'Bluetooth', 'Headphone', 'Philips'),
(16, 'H540 USB COMPUTER HEADSET', 'This plug-and-play headset can be used with any PC or Mac computer with a USB-A port or adapter without the need to install software.', 0x483534302055534220434f4d505554455220484541445345542e706e67, 45, 30, '#H305', 'Available', 'USB', 'Headphone', 'Sony'),
(17, 'LOGITECH ZONE WIRELESS', 'Logitech Zone Wireless is designed for office use all day, every day.', 0x4c4f474954454348205a4f4e452057495245442e706e67, 70, 25, '#H306', 'Available', 'Bluetooth', 'Headphone', 'Logitech'),
(18, 'DATA TRAVELER 80 USB FLASH DRIVE', 'Kingston’s Data Traveler 80 is a high-performance USB flash drive that supports Type-C laptops, desktops, smartphones and tablets without the need for an adapter.', 0x4461746154726176656c65722038302055534220466c6173682044726976652e6a7067, 25, 50, '#F401', 'Available', 'USB(Type-C)', 'Flash Drive', 'Kingstom'),
(19, 'DATA TRAVELER 100 G3 USB FLASH DRIVE', 'Kingston’s Data Traveler 100 G3 (DT100G3) USB Flash drive is compliant with USB 3.0 specifications1 to take advantage of technology in newer notebooks, desktop PCs and digital devices.', 0x4461746154726176656c6572203130302047332055534220466c6173682044726976652e6a7067, 20, 50, '#F402', 'Available', 'USB', 'Flash Drive', 'Kingstom'),
(20, 'DATA TRAVELER MICRODUO 3C USB FLASH DRIVE', 'Data Traveler microDuo 3C has a dual interface that works with both standard USB and USB Type-C®1 ports. ', 0x4461746154726176656c6572204d6963726f44756f2033432055534220466c6173682044726976652e6a7067, 30, 50, '#F403', 'Available', 'USB(TYPE-C)', 'Flash Drive', 'Kingstom'),
(21, 'DATA TRAVELER SE9 USB FLASH DRIVE', 'Kingston’s Data Traveler SE9 USB Flash drive has a stylish metal casing with a large ring so it will attach easily. ', 0x4461746154726176656c6572205345392055534220466c6173682044726976652e6a7067, 20, 50, '#F404', 'Available', 'USB ', 'Flash Drive', 'Kingstom'),
(22, 'DT VAULT PRIVACY ENCYPTED USB FLASH DRIVE', 'Kingston’s Data Traveler Vault Privacy 3.0 USB Flash drive provides affordable business-grade security with 256-bit AES hardware-based encryption in XTS mode. ', 0x4454205661756c74205072697661637920456e637279707465642055534220466c6173682044726976652e6a7067, 25, 50, '#F405', 'Available', 'USB', 'Flash Drive', 'Kingstom'),
(23, 'PORTABLE WIRELESS BULETOOTH-WIFI SPEAKER', 'A smooth surface and clean lines ensure this sleek beauty blends into the background, yet still draws attention for its minimalist refinement.', 0x506f727461626c6520576972656c65737320424c5545544f4f54482d57692d466920537065616b65722e6a7067, 180, 30, '#S501', 'Available', 'Bluetooth & WIFI', 'Speaker', 'Sony'),
(24, 'STEREO BOOKSHELF SPEAKER', 'These speakers include new super tweeters with wide directionality.', 0x53746572656f20426f6f6b7368656c6620537065616b6572732e6a7067, 120, 25, '#S502', 'Available', 'Bluetooth & WIFI', 'Speaker', 'Sony'),
(25, 'USB NOTEBOOK SPEAKERS SPA200/00', ' A pair of speakers for notebook computers that are powered and audio-connected to the computer via USB.', 0x555342204e6f7465626f6f6b20737065616b6572732053504132302d30302e6a7067, 100, 25, '#S503', 'Available', 'USB', 'Speaker', 'Philips'),
(26, 'XB23 EXTRA BASS PORTABLE BLUETOOTH SPEAKER', 'Compact, lightweight and easy to carry, the SRS-XB23 combines punchy bass sound with a tough, durable, go-anywhere design.', 0x58423233204558545241204241535320506f727461626c6520424c5545544f4f544820537065616b65722e6a7067, 150, 30, '#S504', 'Available', 'Bluetooth ', 'Speaker', 'Sony'),
(27, 'XB41 EXTRA BASS PORTABLE BLUETOOTH SPEAKER', 'Get the ultimate three-dimensional music festival experience, wherever you go with the SRS-XB41.', 0x58423431204558545241204241535320506f727461626c6520424c5545544f4f544820537065616b65722e6a7067, 160, 40, '#S505', 'Available', 'Bluetooth', 'Speaker', 'Sony'),
(28, 'PC MICROPHONE SHM1000/97', 'This sensitive microphone is ideal for heavy online users.', 0x50436d6963726f70686f6e6553484d313030302d39372e6a7067, 145, 25, '#MC601', 'Available', 'USB', 'Microphone', 'Philips'),
(29, 'Tonor TC30 USB Microphone', 'TC30 is compatible with Windows, macOS and Linux. Ideal for gaming, podcasting, zoom meeting, streaming, Skype chatting, online conference. ', 0x544f4e4f522d54432d3737372e706e67, 50, 25, '#MC602', 'Available', 'USB', 'Microphone', 'Tonor'),
(30, 'TONOR TC-777 USB Computer Condenser PC Podcast Gaming Microphone', 'Condenser microphones are well-known for their excellent audio quality and sensitivity. ', 0x546333302e6a7067, 100, 40, '#MC603', 'Available', 'USB', 'Microphone', 'Tonor'),
(31, 'LIFECAM CINEMA', 'Don’t miss a thing—enjoy high-quality 720p HD widescreen video together with crystal clear audio, with the LifeCam Cinema. ', 0x4c69666543616d2043696e656d612e6a7067, 60, 35, '#W701', 'Available', 'USB', 'Webcam', 'Microsoft'),
(32, 'LIFECAM STUDIO', 'LifeCam Studio gets you the closest to being there Shoot with great accuracy in wide angle with the LifeCam precision glass element lens. ', 0x4c69666543616d2053747564696f2e6a7067, 50, 40, '#W702', 'Available', 'USB', 'Webcam', 'Microsoft'),
(33, 'LIFECAM HD-3000', 'TrueColor technology provides superior color and brightness in almost all lighting conditions, including low light and backlight. ', 0x4c6966652063616d2e6a7067, 80, 35, '#W703', 'Available', 'USB', 'Webcam', 'Microsoft'),
(34, 'PC Headset SHM1900/00', 'Philips SHM1900 are lightweight over-ear PC headsets that provide the ultimate in comfort.', 0x5068696c69707320486561647365742e6a7067, 150, 50, '#H307', 'Available', 'USB', 'Headphone', 'Philips'),
(35, 'Wired gaming mouse with Ambiglow', 'This momentum gaming mouse has 7 programmable buttons and adjustable DPI up to 16,400 for ultimate performance.', 0x47616d696e67204d6f75736520416d6269646c6f772e6a7067, 100, 35, '#M106', 'Available', 'USB', 'Mouse', 'Philips'),
(36, 'Beats Studio 3', 'Beats Studio 3 Wireless over-ear headphones delivers premium sound while blocking external noise with Active Noise Cancelling', 0x53747564696f20332e706e67, 190, 25, '#H308', 'Available', 'Bluetooth & Micro USB port', 'Headphone', 'Beats'),
(37, 'TONOR Q9 USB Computer Condenser Microphone Streaming Podcast PC Gaming Mic', 'Q9 microphone is easy to connect with both Mac and Windows computer, no need any extra driver software or sound card. ', 0x51392e6a7067, 70, 30, '#MC604', 'Available', 'USB', 'Microphone', 'Tonor'),
(38, 'TONOR TC-2030 USB Microphone Kit', 'Gold-plated 14MM large-diaphragm makes the microphone sound range of low and high frequency wider and the sound quality more exquisite.', 0x54432d323033302e6a7067, 80, 34, '#MC605', 'Available', 'USB', 'Microphone', 'Tonor'),
(39, 'TONOR TC20 XLR Microphone Kit', 'The microphone adopts a cardioid polar pattern with excellent off-axis sound suppression capabilities, it also has a low-noise FET preamplifier.', 0x5443323020584c522e6a7067, 68, 28, '#MC606', 'Available', 'USB', 'Microphone', 'Tonor'),
(40, 'Microsoft 4K Wireless Display Adapter', 'Discover the strong, reliable way to project your content, photos and videos on the big screen. HDMI (powered through USB), compatible with HDCP 2.2 and HDCP 1.4', 0x344b20776972656c6573732044412e706e67, 200, 36, '#D801', 'Available', 'HDMI', 'Display Adapter', 'Microsoft'),
(41, 'Microsoft USB-C Travel Hub', 'Turn your laptop into a productivity companion with this elegant, multi-port adapter.', 0x5553422d432054726176656c204875622e6a7067, 289, 20, '#D802', 'Available', 'USB(Type-C)', 'Display Adapter', 'Microsoft'),
(42, 'P3Q-00010 Wireless Display Adapter', 'Stream movies, view personal photos, or display a presentation on a big screen ï¿½ all wirelessly.', 0x576972656c65737320446973706c617920416461707465722e6a7067, 200, 2, '#D803', 'Available', 'USB and HDMI', 'Display Adapter', 'Microsoft');

--
-- 转储表的索引
--

--
-- 表的索引 `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_ID`);

--
-- 表的索引 `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- 表的索引 `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Category_ID`);

--
-- 表的索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Order_ID`);

--
-- 表的索引 `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用表AUTO_INCREMENT `brand`
--
ALTER TABLE `brand`
  MODIFY `Brand_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- 使用表AUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_ID` int(64) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 使用表AUTO_INCREMENT `category`
--
ALTER TABLE `category`
  MODIFY `Category_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- 使用表AUTO_INCREMENT `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- 使用表AUTO_INCREMENT `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Order_ID` int(240) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
