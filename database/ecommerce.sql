-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 03:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admintest@gmail.com', 'admin1212');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `billing_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`billing_id`, `buyer_id`, `unique_id`, `first_name`, `last_name`, `company_name`, `address`, `country`, `city`, `state`, `postal_code`, `phone`, `email`) VALUES
(1, 0, 0, '', '', '', '', '', '', '', '', '', ''),
(2, 0, 123456789, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(3, 0, 123456789, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(4, 0, 123456789, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(5, 0, 123456789, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(6, 0, 655074804, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(7, 0, 655074804, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(8, 17, 655074804, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(9, 17, 655074804, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(10, 17, 655074804, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(11, 18, 263284925, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(12, 18, 430700672, 'Muhammad sattar', 'hassan', 'sattarand co', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(13, 20, 1509087045, 'Hamid Akhara', 'jamali', 'Company Seprate', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k3310@gmail.com'),
(14, 20, 1509087045, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(15, 13, 1378387320, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(16, 13, 1378387320, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(17, 21, 1068815509, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com'),
(18, 20, 269907650, 'Muhammad', 'hassan', 'compant', 'address1address2', 'Pakistan', 'Karachi', 'Sindh', '1234', '03330939019', 'sattar2k10@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `random_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `delivery_setting`
--

CREATE TABLE `delivery_setting` (
  `delivery_setting_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `shipping_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_setting`
--

INSERT INTO `delivery_setting` (`delivery_setting_id`, `vendor_id`, `shipping_amount`) VALUES
(1, 0, '10'),
(4, 19, '110');

-- --------------------------------------------------------

--
-- Table structure for table `main_catogories`
--

CREATE TABLE `main_catogories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_catogories`
--

INSERT INTO `main_catogories` (`cat_id`, `cat_name`, `icon`, `role`, `cat_image`, `type`) VALUES
(3, 'Electronic', 'icon-couch', '', '1604785050product-1.jpg', 'show_in_tab'),
(4, 'Furniture', 'icon-couch', '', '1604770386banner-5.jpg', 'show_in_tab'),
(5, 'Cooking', 'icon-concierge-bell', '', '1604784990banner-2.jpg', 'show_in_tab'),
(6, 'Clothing', 'icon-tshirt', '', '1604776211banner-1.jpg', 'show_in_tab'),
(7, 'Home Appliances', 'icon-blender', 'single_level_cat', '', 'show_in_tab'),
(8, 'Healthy & Beauty', 'icon-heartbeat', 'single_level_cat', '', ''),
(9, 'Shoes & Boots', 'icon-shoe-prints', 'single_level_cat', '', ''),
(10, 'Travel & Outdoor', 'icon-map-signs', 'single_level_cat', '', ''),
(11, 'TV & Audio', 'icon-tv', 'single_level_cat', '', ''),
(12, 'Backpack & Bag', 'icon-shopping-bag', 'single_level_cat', '', ''),
(13, 'Musical Instruments', 'icon-music', 'single_level_cat', '', ''),
(14, 'Gift', 'icon-gift', 'single_level_cat', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `multiples_images`
--

CREATE TABLE `multiples_images` (
  `image_id` int(11) NOT NULL,
  `product_random_id` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `multiples_images`
--

INSERT INTO `multiples_images` (`image_id`, `product_random_id`, `image_name`) VALUES
(35, '261947653', '1605106312product-5.jpg'),
(36, '261947653', '1605106312product-6.jpg'),
(37, '261947653', '1605106312product-7.jpg'),
(38, '1302886213', '1605119780product-4.jpg'),
(39, '1302886213', '1605119023product-6.jpg'),
(40, '1302886214', '1605119023product-7.jpg'),
(41, '1302886214', '1605119389product-1.jpg'),
(42, '1302886214', '1605119389product-3.jpg'),
(43, '1302886214', '1605119389product-4.jpg'),
(44, '1302886214', '1605119616product-1.jpg'),
(45, '1302886214', '1605119616product-6.jpg'),
(46, '1302886214', '1605119616product-7.jpg'),
(47, '1254202475', 'lap1.jpg'),
(48, '1302886215', '1605119780product-3.jpg'),
(49, '1254202476', 'lap2.jpg'),
(50, '9', '10a.jpg'),
(51, '10', '10b.jpg'),
(52, '11', '10c.jpg'),
(53, '12', '10d.jpg'),
(54, '13', 'c5.jpg'),
(55, '13', 'c1.jpg'),
(56, '14', 'c2.jpg'),
(57, '15', 'c3.jpg'),
(58, '16', 'c3.jpg'),
(59, '37', 'c5.jpg'),
(60, 'l1', 'l1.jpg'),
(61, 'l2', 'l2.jpg'),
(62, 'l3', 'l3.jpg'),
(63, 'l4', 'l4.jpg'),
(64, 'l5', 'l5.jpg'),
(65, 'k1', 'k1.jpg'),
(66, 'k2', 'k2.jpg'),
(67, 'k3', 'k3.jpg'),
(68, 'k4', 'k4.jpg'),
(69, 'k5', 'k5.jpg'),
(70, '1254202477\r\n', 'lap4.jpg'),
(71, '1254202478\r\n\r\n', 'lap5.jpg'),
(72, '1929163585', '1605433588Product-Image-1-16.jpg'),
(73, '1929163585', '1605433630Product-Image-1-16.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `buyer_id`, `unique_id`, `product_id`, `order_qty`, `order_date`, `order_status`) VALUES
(23, 0, '123456789', 24, 2, '08-Nov-2020', ''),
(24, 0, '123456789', 1, 1, '08-Nov-2020', ''),
(25, 0, '123456789', 1, 1, '08-Nov-2020', ''),
(26, 0, '655074804', 2, 2, '08-Nov-2020', ''),
(27, 0, '655074804', 1, 1, '08-Nov-2020', ''),
(28, 0, '655074804', 1, 1, '08-Nov-2020', ''),
(29, 17, '655074804', 2, 2, '08-Nov-2020', ''),
(30, 17, '655074804', 1, 1, '08-Nov-2020', ''),
(31, 17, '655074804', 1, 1, '08-Nov-2020', ''),
(32, 17, '655074804', 2, 2, '08-Nov-2020', ''),
(33, 17, '655074804', 1, 1, '08-Nov-2020', ''),
(34, 17, '655074804', 1, 1, '08-Nov-2020', ''),
(35, 17, '655074804', 10, 2, '08-Nov-2020', ''),
(36, 17, '655074804', 9, 1, '08-Nov-2020', ''),
(37, 17, '655074804', 8, 1, '08-Nov-2020', ''),
(38, 17, '655074804', 10, 2, '08-Nov-2020', ''),
(39, 17, '655074804', 9, 1, '08-Nov-2020', ''),
(40, 17, '655074804', 8, 1, '08-Nov-2020', ''),
(41, 18, '263284925', 10, 1, '08-Nov-2020', ''),
(42, 18, '263284925', 9, 1, '08-Nov-2020', ''),
(43, 18, '263284925', 8, 1, '08-Nov-2020', ''),
(44, 18, '430700672', 10, 1, '08-Nov-2020', ''),
(45, 18, '430700672', 9, 1, '08-Nov-2020', ''),
(46, 18, '430700672', 8, 1, '08-Nov-2020', ''),
(47, 20, '1509087045', 10, 1, '10-Nov-2020', ''),
(48, 20, '1509087045', 9, 1, '10-Nov-2020', ''),
(49, 20, '1509087045', 8, 1, '10-Nov-2020', ''),
(50, 20, '1509087045', 9, 1, '10-Nov-2020', ''),
(51, 20, '1509087045', 8, 1, '10-Nov-2020', ''),
(52, 13, '1378387320', 28, 5, '13-Nov-2020', ''),
(53, 13, '1378387320', 26, 1, '13-Nov-2020', ''),
(54, 13, '1378387320', 32, 1, '13-Nov-2020', ''),
(55, 13, '1378387320', 31, 1, '13-Nov-2020', ''),
(56, 13, '1378387320', 30, 1, '13-Nov-2020', ''),
(57, 13, '1378387320', 29, 1, '13-Nov-2020', ''),
(58, 13, '1378387320', 28, 1, '13-Nov-2020', ''),
(59, 21, '1068815509', 53, 1, '15-Nov-2020', 'Delivered'),
(60, 20, '269907650', 53, 1, '15-Nov-2020', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `product_random_id` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_catid` int(11) NOT NULL,
  `third_cat_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_des` text NOT NULL,
  `pro_price` varchar(255) NOT NULL,
  `sale` int(11) NOT NULL,
  `uploading_date` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `vendor_id`, `product_random_id`, `cat_id`, `sub_catid`, `third_cat_id`, `pro_name`, `pro_des`, `pro_price`, `sale`, `uploading_date`, `role`, `status`) VALUES
(24, 18, '261947653', 6, 7, 8, 'product number 9', 'Thie is descrition of web', '400', 20, '', 'recommendation', 0),
(25, 0, '1302886213', 6, 8, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', 'recommendation', 0),
(26, 0, '1254202475', 6, 6, 7, 'laptop', 'Description', '1000', 10, '11-Nov-2020', 'recommendation', 0),
(27, 0, '1302886215', 6, 9, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(28, 0, '9', 6, 10, 7, 'product number 7', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(29, 0, '10', 6, 10, 8, 'product number 9', 'Thie is descrition of web', '400', 20, '', '', 0),
(30, 0, '11', 6, 10, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(31, 0, '12', 6, 10, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(32, 0, '13', 6, 11, 7, 'product number 7', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(33, 0, '14', 6, 11, 8, 'product number 9', 'Thie is descrition of web', '400', 20, '', '', 0),
(34, 0, '15', 6, 11, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(35, 0, '16', 6, 11, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(36, 0, 'l1', 6, 12, 8, 'product number 9', 'Thie is descrition of web', '400', 20, '', '', 0),
(37, 0, 'l2', 6, 12, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(38, 0, 'l3', 6, 12, 7, 'product number 7', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(42, 0, '13', 6, 11, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(43, 0, '37', 6, 11, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(44, 0, 'l4', 6, 12, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(45, 0, 'l5', 6, 12, 7, 'product number 7', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(46, 0, 'k1', 6, 13, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(47, 0, 'k2', 6, 13, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(48, 0, 'k3', 6, 13, 9, 'product number 8', 'deschgdfjkghk', '500', 30, '11-Nov-2020', '', 0),
(49, 0, 'k4', 6, 13, 7, 'product number 7', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(50, 0, '1254202476', 6, 6, 7, 'Apple laptop ', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(51, 0, '1254202477\r\n', 6, 6, 7, 'Apple laptop Gray\r\n', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(52, 0, '1254202478\r\n\r\n', 6, 6, 7, 'Destop Computer', 'Description', '1000', 10, '11-Nov-2020', '', 0),
(53, 19, '1929163585', 3, 7, 7, 'speekers', 'this is description ', '1000', 50, '15-Nov-2020', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `set_currency`
--

CREATE TABLE `set_currency` (
  `currency_id` int(11) NOT NULL,
  `currecy_sign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_currency`
--

INSERT INTO `set_currency` (`currency_id`, `currecy_sign`) VALUES
(2, 'IND');

-- --------------------------------------------------------

--
-- Table structure for table `sub_catogory`
--

CREATE TABLE `sub_catogory` (
  `sub_cat_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sub_catname` varchar(255) NOT NULL,
  `sub_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_catogory`
--

INSERT INTO `sub_catogory` (`sub_cat_id`, `cat_id`, `sub_catname`, `sub_image`) VALUES
(6, 3, 'Laptop & Computer', ''),
(7, 3, 'Cell Phone', ''),
(8, 3, 'TV Video', ''),
(9, 3, 'Digital Camera', ''),
(10, 4, 'Bedroom', ''),
(11, 4, 'Office', ''),
(12, 4, 'Living Room', ''),
(13, 4, 'Kitchen & Dining', ''),
(14, 5, 'Cookware', ''),
(15, 5, 'Dinnerware and Tabletop', ''),
(16, 5, 'Cooking Appliance', ''),
(17, 6, 'Men\r\n', ''),
(18, 6, 'Women', '');

-- --------------------------------------------------------

--
-- Table structure for table `third_level_category`
--

CREATE TABLE `third_level_category` (
  `third_cat_id` int(11) NOT NULL,
  `sub_cat_id` int(11) NOT NULL,
  `third_catname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `third_level_category`
--

INSERT INTO `third_level_category` (`third_cat_id`, `sub_cat_id`, `third_catname`) VALUES
(1, 6, 'Desktop Computers'),
(2, 6, 'Monitors'),
(3, 7, 'TVs'),
(4, 7, 'Home Audio Speakers'),
(5, 8, 'Desktop Computers'),
(6, 8, 'Carrier Phones'),
(7, 9, 'Unlocked Phones'),
(8, 9, 'Home Audio Speakers'),
(9, 10, 'Bed Room 1'),
(10, 10, 'Bed Room 2'),
(11, 15, 'Microweave'),
(12, 16, 'Cookware'),
(13, 14, 'Plate'),
(14, 17, 'Men -1'),
(15, 17, 'Men -2'),
(16, 17, 'Men -3'),
(17, 17, 'Men -4'),
(18, 18, 'Women -1'),
(20, 18, 'Women -3'),
(21, 18, 'Women -4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_registration_date` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_pass`, `user_phone`, `user_image`, `user_registration_date`, `user_role`, `user_status`) VALUES
(13, 'test', 'test@gmail.com', 'sattar9944', '', '', '07-Nov-2020', '', 'Active'),
(14, 'halar', 'halar@gmail.com', 'halar9944', '', '', '07-Nov-2020', '', 'Active'),
(15, 'sattar', 'sattar2k10@gmail.com', 'sattar9944', '', '', '07-Nov-2020', '', '0'),
(16, 'sattar1', 'tete@gmail.com', '12345', '', '', '07-Nov-2020', '', '0'),
(17, 'test', 'tester@gmail.com', '1234', '13467836248', '', '07-Nov-2020', '', '0'),
(18, 'afan', 'afan@gmail.com', 'afan1122', '', '', '08-Nov-2020', '', '0'),
(19, 'sattar2k10@gmail.com', 'sattar2k110@gmail.com', 'sattarjamali', '', '', '10-Nov-2020', '', '0'),
(20, 'Hamid Akhtar', 'hamid_akhtar@gmail.con', 'sattar9944', '', '', '10-Nov-2020', '', '0'),
(21, 'nofail', 'nofail@gmail.com', '12345', '13467836248', '', '13-Nov-2020', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_first_name` varchar(255) NOT NULL,
  `vendor_last_name` varchar(255) NOT NULL,
  `vendor_ntn_number` varchar(255) NOT NULL,
  `vendor_company_name` varchar(255) NOT NULL,
  `vendor_cnic` varchar(255) NOT NULL,
  `vendor_password` varchar(255) NOT NULL,
  `vendor_address` text NOT NULL,
  `vendor_personal_address` text NOT NULL,
  `vendor_email` varchar(255) NOT NULL,
  `vendor_phone` varchar(255) NOT NULL,
  `vendor_status` varchar(255) NOT NULL,
  `uploadind_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_first_name`, `vendor_last_name`, `vendor_ntn_number`, `vendor_company_name`, `vendor_cnic`, `vendor_password`, `vendor_address`, `vendor_personal_address`, `vendor_email`, `vendor_phone`, `vendor_status`, `uploadind_date`) VALUES
(3, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(4, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(5, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(6, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(7, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(8, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(9, 'Muhammad', 'hassan', '1233343343333', '', 'compant', '', '45403478539899', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '14-Nov-2020'),
(10, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403478539899', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(11, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403478539899', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(12, 'Muhammad', 'hassan', '', 'compant', '45403478539899', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(13, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403-47853989-9', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(14, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403-47853989-9', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(15, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403-47853989-9', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(16, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403-47853989-9', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(17, 'Muhammad', 'hassan', '1233343343333', 'compant', '45403478539899', '', 'address1', 'address2', 'sattar2k10@gmail.com', '03330939019', '', '14-Nov-2020'),
(18, 'vendor one ', 'vendor last ', '1233343343333', 'vendor company name ', '1122333434343', '', 'Karachi Qayumabad', 'defense Karachii', 'test@gmail.com', '03330939019', '', '15-Nov-2020'),
(19, 'vendor two sahe', 'vendor two s', '1233343343333', 'Company Seprate', '4540347853989', 'sattar9944', 'address1', 'address2', 'sattartest@gmail.com', '03330939019', '', '15-Nov-2020');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_files`
--

CREATE TABLE `vendor_files` (
  `vendor_file_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `vendor_file_name` varchar(255) NOT NULL,
  `uploading_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_files`
--

INSERT INTO `vendor_files` (`vendor_file_id`, `vendor_id`, `vendor_file_name`, `uploading_date`) VALUES
(1, 10, '160537822410b.jpg', '14-Nov-2020'),
(2, 10, '160537822410c.jpg', '14-Nov-2020'),
(3, 10, '160537822410d.jpg', '14-Nov-2020'),
(4, 10, '160537838110b.jpg', '14-Nov-2020'),
(5, 10, '160537838110c.jpg', '14-Nov-2020'),
(6, 10, '160537838110d.jpg', '14-Nov-2020'),
(7, 10, '16053791871605103338product-4.jpg', '14-Nov-2020'),
(8, 10, '16053791871605103484product-2.jpg', '14-Nov-2020'),
(9, 10, '16053791871605103484product-3.jpg', '14-Nov-2020'),
(10, 18, '16054249081605103230product-4.jpg', '15-Nov-2020'),
(11, 19, '16054293451605103338product-2.jpg', '15-Nov-2020'),
(12, 19, '16054293451605103338product-3.jpg', '15-Nov-2020');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`) VALUES
(12, 1, 10),
(13, 1, 9),
(14, 1, 8),
(15, 16, 10),
(16, 17, 10),
(17, 17, 9),
(18, 17, 8),
(19, 18, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `delivery_setting`
--
ALTER TABLE `delivery_setting`
  ADD PRIMARY KEY (`delivery_setting_id`);

--
-- Indexes for table `main_catogories`
--
ALTER TABLE `main_catogories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `multiples_images`
--
ALTER TABLE `multiples_images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `set_currency`
--
ALTER TABLE `set_currency`
  ADD PRIMARY KEY (`currency_id`);

--
-- Indexes for table `sub_catogory`
--
ALTER TABLE `sub_catogory`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `third_level_category`
--
ALTER TABLE `third_level_category`
  ADD PRIMARY KEY (`third_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `vendor_files`
--
ALTER TABLE `vendor_files`
  ADD PRIMARY KEY (`vendor_file_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `billing_address`
--
ALTER TABLE `billing_address`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `delivery_setting`
--
ALTER TABLE `delivery_setting`
  MODIFY `delivery_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `main_catogories`
--
ALTER TABLE `main_catogories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `multiples_images`
--
ALTER TABLE `multiples_images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `set_currency`
--
ALTER TABLE `set_currency`
  MODIFY `currency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_catogory`
--
ALTER TABLE `sub_catogory`
  MODIFY `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `third_level_category`
--
ALTER TABLE `third_level_category`
  MODIFY `third_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `vendor_files`
--
ALTER TABLE `vendor_files`
  MODIFY `vendor_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
