-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2022 at 04:47 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_nhom4`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `user`, `password`, `level`) VALUES
(1, 'admin', '12345', 1),
(2, 'admin2', 'admin2', 1),
(3, 'admin3', 'admin3', 1),
(4, 'admin4', 'admin4', 1),
(5, 'admin5', 'admin5', 1),
(6, 'admin6', 'admin6', 1),
(7, 'admin7', 'admin7', 1),
(8, 'admin8', 'admin8', 1),
(9, 'admin9', 'admin9', 1),
(10, 'admin10', 'admin10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(5) NOT NULL,
  `brand_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Xiaomi'),
(2, 'Iphone'),
(3, 'SamSung'),
(4, 'Realme'),
(5, 'Vivo'),
(6, 'Oppo'),
(7, 'Nokia'),
(8, 'HTC'),
(9, 'Masstel'),
(10, 'Mobell');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `client_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_phone`, `email`) VALUES
(1, 'Bui Duy Thinh', '0954363541', 'buiduythinh@gmail.com'),
(2, 'Le Van Thuong', '0477515177', 'levanthuong@gmail.com'),
(3, 'Pham Van Quan', '0205029116', 'phamvanquan@gmail.com'),
(4, 'Tran Tuan Nghia', '0771205456', 'trantuannghia@gmail.com'),
(5, 'Tran Van Hieu', '0191941546', 'tranvanhieu@gmail.com'),
(6, 'Nguyen Duc Tung', '0902504316', 'nguyenductung@gmail.com'),
(7, 'Nguyen Vinh Quang', '0515034411', 'nguyenvinhquang@gmail.com'),
(8, 'Ha Loc An', '0158600235', 'halocan@gmail.com'),
(9, 'Lam Van Hung', '0857097486', 'lamvanhung@gmail.com'),
(10, 'Tran Van Hoang', '0718610176', 'tranvanhoang@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `deliver`
--

CREATE TABLE `deliver` (
  `deliver_id` int(11) NOT NULL,
  `deliver_phone` int(11) NOT NULL,
  `deliver_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliver`
--

INSERT INTO `deliver` (`deliver_id`, `deliver_phone`, `deliver_name`) VALUES
(1, 978489823, 'Do Van Hung'),
(2, 385296090, 'Le Thi Quyen'),
(3, 762994347, 'Nguyen Thanh Dat'),
(4, 174500348, 'Tran Tuan Kiet'),
(5, 708124479, 'Do Thi Trang'),
(6, 709926826, 'Nguyen Thi Thu Hien'),
(7, 961731163, 'Le Hai Anh'),
(8, 835605041, 'Nguyen Thi Thu Thao'),
(9, 384934363, 'Le Van Trong'),
(10, 782240377, 'Do Huu Thang');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `prd_id` int(11) NOT NULL,
  `prd_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_founded` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  ` total_money` int(12) NOT NULL,
  `dispatch_box` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deliver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `client_id`, `prd_id`, `prd_name`, `date_founded`, ` total_money`, `dispatch_box`, `note`, `deliver_id`) VALUES
(1, 1, 1, 'Iphone 11', '5/12', 18000000, 'Ho Tung Mau', 'Khong', 1),
(2, 2, 2, 'Iphone 11 Pro', '5/10', 20000000, 'Cau Giay', 'Khong', 2),
(3, 3, 3, 'SamSung S22', '1/2022', 21000000, 'Minh Khai', 'Khong', 3),
(4, 4, 4, 'SamSung A32', '7/2022', 7000000, 'Linh Nam', 'Khong', 4),
(5, 5, 5, 'Xiaomi Mi 8', '1/2022', 13000000, 'Tran Khat Chan', 'Khong', 5),
(6, 6, 6, 'Iphone 14', '12/2022', 20500000, 'Nguyen Chi Thanh', 'Khong', 6),
(7, 7, 7, 'Iphone 13 Pro Max', '12/2022', 36000000, 'Giai Phong', 'Khong', 7),
(8, 8, 8, 'Xiaomi Note 8', '1/2022', 7300000, 'Hoang Mai', 'Khong', 8),
(9, 9, 9, 'SamSung Note 20', '7/2022', 19000000, 'Tam Trinh', 'Khong', 9),
(10, 10, 10, 'Vivo V80', '3/2022', 19500000, 'Bach Mai', 'Khong', 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prd_id` int(5) NOT NULL,
  `prd_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` char(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `discription` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prd_id`, `prd_name`, `image`, `price`, `quantity`, `discription`, `brand_id`) VALUES
(5, 'Xiaomi-redmi-note-11-pro-5g', 'xiaomi-redmi-note-11-pro-5g.jpg', 4900000, 6, 'Thiết kế sang trọng', 1),
(6, 'Iphone 14 pro max 128GB', 'iphone-14-pro-vang.jpg', 32000000, 9, 'Màn hình Dynamic Island ', 2),
(8, 'Xiaomi note 10', 'xiaomi-redmi-note-10.jpg', 5900000, 2, 'Cấu hình mạnh mẽ', 1),
(9, 'iphone 14 pro max 1TB', 'iphone-14-pro-vang.jpg', 40000000, 20, 'Màn hình Dynamic Island ', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `deliver`
--
ALTER TABLE `deliver`
  ADD PRIMARY KEY (`deliver_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prd_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `deliver`
--
ALTER TABLE `deliver`
  MODIFY `deliver_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prd_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
