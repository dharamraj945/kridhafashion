-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2023 at 11:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kridha_fashion`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection_page`
--

CREATE TABLE `collection_page` (
  `id` int(11) NOT NULL,
  `Category_Name` varchar(100) NOT NULL,
  `Category_Img` varchar(400) NOT NULL,
  `Category_Desc` varchar(400) NOT NULL,
  `collection_url_handler` varchar(500) NOT NULL,
  `cat_meta_title` varchar(200) NOT NULL,
  `cat_meta_description` varchar(200) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `session_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `collection_page`
--

INSERT INTO `collection_page` (`id`, `Category_Name`, `Category_Img`, `Category_Desc`, `collection_url_handler`, `cat_meta_title`, `cat_meta_description`, `Date`, `session_no`) VALUES
(11, 'Rings', '', '<p>Rings</p>', 'rings', '', '', '2022-11-30 05:43:31', 0),
(12, 'Bangles', '', '<p>Bangles</p>', 'bangles', '', '', '2022-11-30 17:35:01', 0),
(13, 'Pendants', '', '<p>Pendants</p>', 'pendants', '', '', '2022-11-30 17:35:28', 0),
(14, 'Earrings', '', '<p>Earrings</p>', 'earrings', '', '', '2022-11-30 17:35:56', 0),
(15, 'Hair Accessories', '', '<p>Hair Accessories</p>', 'hair-accessories', '', '', '2022-11-30 17:36:20', 0),
(16, 'Anklets', '', '<p>Anklets</p>', 'anklets', '', '', '2022-11-30 17:38:10', 0),
(17, 'Necklace with Earrings', '', '<p>Necklace with Earrings</p>', 'necklace-with-earrings', '', '', '2022-12-02 09:51:46', 0),
(18, 'Neck Chain', '', '<p>Neck Chain</p>', 'neck-chain', '', '', '2022-12-12 15:55:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(500) NOT NULL,
  `last_name` varchar(500) NOT NULL,
  `country` varchar(200) NOT NULL,
  `street-address-1` varchar(200) NOT NULL,
  `street-address-2` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `orders` int(200) NOT NULL,
  `spent` int(200) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `order_id_` varchar(200) NOT NULL,
  `customer_mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `country`, `street-address-1`, `street-address-2`, `city`, `pincode`, `email`, `orders`, `spent`, `date`, `order_id_`, `customer_mobile`) VALUES
(62, 'Samgeeta', 'Rai', 'INDIA', ' Dwaraka Mode ', ' Near Metro Station Toilate ', 'New Delhi', '100008', 'Sangeeta@gmail.com', 1, 982, '2023-01-17 15:57:18', '', '1234567890'),
(63, 'Riya', 'Raj', 'INDIA', ' 3717 A 1  Street no 21', ' First Floor  Baljeet Nagar Patel Nagar', 'NEW DELHI', '110008', 'kanika@gmail.com', 1, 248, '2023-01-17 16:18:10', '', '08585972961'),
(64, 'kanika', 'Kumari', 'INDIA', ' New T Block Road Subhash Park Matiala, 3rd- E Nheru nagar', ' 3rd- E Nheru nagar', 'Patna', '805122', 'kanika@gmail.com', 1, 158, '2023-01-17 16:21:42', '', '08585972961'),
(65, 'dharamaj', 'kumar', 'INDIA', ' 2574 Galli Number 21 Baljit Nagar Patel Nagar', ' 3rd- E Nheru nagar', 'New Delhi', '110008', 'kumardharamraj2017@gmail.com', 1, 288, '2023-01-17 16:23:39', '', '08851096421'),
(66, 'Riya', 'Raj', 'INDIA', ' 3717 A 1  Street no 21', ' First Floor  Baljeet Nagar Patel Nagar', 'NEW DELHI', '110008', 'kanika@gmail.com', 1, 148, '2023-01-17 16:36:26', '', '08585972961'),
(67, 'dharamaj', 'kumar', 'INDIA', ' 2574 Galli Number 21 Baljit Nagar Patel Nagar', ' First Floor, Baljeet Nagar, Patel Nagar', 'New Delhi', '110008', 'kumardharamraj2017@gmail.com', 1, 148, '2023-01-17 16:37:46', '', '08851096421'),
(68, 'dharamaj', 'kumar', 'INDIA', ' 2574 Galli Number 21 Baljit Nagar Patel Nagar', ' 3rd- E Nheru nagar', 'New Delhi', '110008', 'kanika@gmail.com', 1, 148, '2023-01-17 16:39:24', '', '08851096421'),
(69, 'dharamaj', 'kumar', 'INDIA', ' 2574 Galli Number 21 Baljit Nagar Patel Nagar', ' 3rd- E Nheru nagar', 'New Delhi', '110008', 'kanika@gmail.com', 1, 148, '2023-01-17 16:40:18', '', '08851096421'),
(70, 'kanika', 'Kumari', 'INDIA', ' New T Block Road Subhash Park Matiala, 3rd- E Nheru nagar', ' 3rd- E Nheru nagar', 'Patna', '805122', 'kanika@gmail.com', 1, 148, '2023-01-17 16:40:30', '', '08585972961');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `order_method` varchar(100) NOT NULL,
  `customer_id` varchar(100) NOT NULL,
  `order_iteams` varchar(100) NOT NULL,
  `order_qty` int(100) NOT NULL,
  `order_price` int(100) NOT NULL,
  `order_notes` varchar(200) NOT NULL,
  `order_date` varchar(100) NOT NULL,
  `order_number` int(100) NOT NULL,
  `server_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `product_name`, `order_method`, `customer_id`, `order_iteams`, `order_qty`, `order_price`, `order_notes`, `order_date`, `order_number`, `server_date`) VALUES
(1000, '24', 'Two Shades Adjustable Ring (R003)', 'Online Payment', '62', '1', 2, 249, '', 'Tuesday 17th of January 2023 11:29:13 AM', 29, '2023-01-17 15:59:13'),
(1000, '21', 'Silver Aloy Ghunghroo Kada Bracelet (B004)', 'Online Payment', '62', '1', 1, 89, '', 'Tuesday 17th of January 2023 11:29:13 AM', 30, '2023-01-17 15:59:13'),
(1000, '35', 'Silver Mirror Adjustable Kada Bracelet (B002)', 'Online Payment', '62', '1', 2, 99, '', 'Tuesday 17th of January 2023 11:29:13 AM', 31, '2023-01-17 15:59:13'),
(1000, '40', 'Golden Plated Multicolour Anklets (A002)', 'Online Payment', '62', '1', 2, 69, '', 'Tuesday 17th of January 2023 11:29:13 AM', 32, '2023-01-17 15:59:13'),
(1001, '31', 'Silver Heart 2 in 1 Pendant (CP002)', 'Online Payment', '63', '1', 1, 189, '', 'Tuesday 17th of January 2023 11:48:54 AM', 33, '2023-01-17 16:18:54'),
(1002, '26', 'ChandBalis (E007)', 'Online Payment', '64', '1', 1, 99, '', 'Tuesday 17th of January 2023 11:52:08 AM', 34, '2023-01-17 16:22:08'),
(1003, '23', 'Flower Shape Stone Stud Adjustable Ring (R001)', 'Online Payment', '65', '1', 1, 229, '', 'Tuesday 17th of January 2023 11:53:58 AM', 35, '2023-01-17 16:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `customer_phone` varchar(100) NOT NULL,
  `payment_status` varchar(50) NOT NULL,
  `payment_id` varchar(50) NOT NULL,
  `payment_request_id` varchar(500) NOT NULL,
  `rezorpay_order_id` varchar(200) NOT NULL,
  `signature` varchar(200) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `amount`, `customer_phone`, `payment_status`, `payment_id`, `payment_request_id`, `rezorpay_order_id`, `signature`, `added_on`, `customer_id`) VALUES
(41, 'Samgeeta Rai', 982, '1234567890', 'SUCCESSFULL', 'MOJO3117K05A96332772', '4560faa568e84918b3c91048fae6fcaa', '', '', '2023-01-17 15:57:18', 62),
(42, 'Riya Raj', 248, '08585972961', 'SUCCESSFULL', 'MOJO3117L05A96332778', '3867921efe3840e1962b57af0ee3d9a0', '', '', '2023-01-17 16:18:10', 63),
(43, 'kanika Kumari', 158, '08585972961', 'SUCCESSFULL', 'MOJO3117A05A96332780', 'b525868af68b48e597358c665462ec4d', '', '', '2023-01-17 16:21:42', 64),
(44, 'dharamaj kumar', 288, '08851096421', 'SUCCESSFULL', 'MOJO3117F05A96332781', '4e501cc2f1b44849afec49c36d347acf', '', '', '2023-01-17 16:23:39', 65),
(45, 'Riya Raj', 148, '08585972961', 'PENDING', ' ', '8c710f5069d14d2bbf73648603b5d35b', '', '', '2023-01-17 16:36:26', 66),
(46, 'dharamaj kumar', 148, '08851096421', 'PENDING', ' ', '5cbae8fc6c8449ffa851f063432ae837', '', '', '2023-01-17 16:37:46', 67),
(47, 'dharamaj kumar', 148, '08851096421', 'PENDING', ' ', '81f980b12bab4fe299a30269661a1194', '', '', '2023-01-17 16:39:24', 68),
(48, 'dharamaj kumar', 148, '08851096421', 'PENDING', ' ', '0affbb3b890845feaf51c8168a148ecc', '', '', '2023-01-17 16:40:18', 69),
(49, 'kanika Kumari', 148, '08585972961', 'PENDING', ' ', 'd260936d656241889e6e95c9c6a477f3', '', '', '2023-01-17 16:40:30', 70);

-- --------------------------------------------------------

--
-- Table structure for table `product_page`
--

CREATE TABLE `product_page` (
  `productid` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `Compare_price` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product_img` varchar(200) NOT NULL,
  `product_img2` varchar(300) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `product_desc` longtext NOT NULL,
  `catalog_url` varchar(255) NOT NULL,
  `url_handler` varchar(500) NOT NULL,
  `product_meta_title` varchar(200) NOT NULL,
  `product_meta_description` varchar(200) NOT NULL,
  `collection_url_handler_2` varchar(500) NOT NULL,
  `product_tags` varchar(500) NOT NULL,
  `session_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_page`
--

INSERT INTO `product_page` (`productid`, `product_name`, `Compare_price`, `price`, `product_img`, `product_img2`, `collection_id`, `sub_category_id`, `product_desc`, `catalog_url`, `url_handler`, `product_meta_title`, `product_meta_description`, `collection_url_handler_2`, `product_tags`, `session_id`, `status`, `added_date`) VALUES
(21, 'Silver Aloy Ghunghroo Kada Bracelet (B004)', 349, 89, '42022065258PM226456khgkahsfk.jpg', '42022065258PM929487sdfs.jpg', 12, 0, '<p>Silver Oxidised Ghunghroo Collection<br>-Adjustable<br>-Easy to Wear<br>-Cheapest Price<br>-Latest and Trendy</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/6210627132284072/919210353400', 'silver-aloy-ghunghroo-kada-bracelet-b004', '', '', 'bangles', '', 0, 0, '2022-11-30 17:43:44'),
(22, 'Silver Oxidised Cufflinks Kada Bracelet (B003)', 349, 89, '42022065629PM328195lfl.jpg', '42022065629PM1217916rsglo.jpg', 12, 0, '<p>Silver Oxidised Jewellery with Cuff and Ghunghroo with beads&nbsp;<br>-Adjustable<br>-Easy to wear<br>-Trendy&nbsp;<br>-Latest collection</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5863629150325334/919210353400', 'silver-oxidised-cufflinks-kada-bracelet-b003', '', '', 'bangles', '', 0, 0, '2022-11-30 17:50:38'),
(23, 'Flower Shape Stone Stud Adjustable Ring (R001)', 699, 229, '42022065830PM830642xcxxxc.jpg', '42022065830PM975825cvZVZXV.jpg', 11, 0, '<p>Beautiful Ring with silver Stones<br>-Adjustable<br>-Best Quality Products<br>-Non Corrosive<br>-Anti Tarnish<br>-Best Price Assurance</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5952013111509457/919210353400', 'flower-shape-stone-stud-adjustable-ring-r001', '', '', 'rings', '', 0, 0, '2022-12-02 09:13:44'),
(24, 'Two Shades Adjustable Ring (R003)', 659, 249, '42022070036PM246146tasda.jpg', '42022070036PM798028cZCC.jpg', 11, 0, '<p>Beautiful Ring with Silver and Purple Shades With <strong>American Diamonds</strong> Round Shaped Ring&nbsp;<br>-Adjustable with Best Quality</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5530132733690042/919210353400', 'two-shades-adjustable-ring-r003', '', '', 'rings', '', 0, 0, '2022-12-02 09:25:45'),
(25, 'Silver Round Zircon Elegance Ring (R002)', 499, 188, '42022070303PM435665dvzz.jpg', '42022070303PM1294638dvzzfzs.jpg', 11, 0, '<p>Round Shape American Diamonds with stone stud in middle looks elegant, Casual Wear Ring, Classy look with any outfit.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/6635344253148599/919210353400', 'silver-round-zircon-elegance-ring-r002', '', '', 'rings', '', 0, 0, '2022-12-02 09:34:49'),
(26, 'ChandBalis (E007)', 599, 99, '42022070701PM389402cvsdvd.jpg', '42022070701PM434054vsdvasdvavsv.jpg', 14, 0, '<p>Silver Oxidised ChandBalis with Ghungroo and Stones...<strong>Inspired by \"Tu vi Royega\" song.</strong></p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5589672507782689/919210353400', 'chandbalis-e007', '', '', 'earrings', '', 0, 0, '2022-12-02 09:40:06'),
(27, 'ChandBalis (E006)', 499, 99, '42022070939PM271564cxvcvcvz.jpg', '42022070939PM1571658cxvcvcvz.jpg', 14, 0, '<p>Peacock ChandBalis with White and Green pearls.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5810841645695727/919210353400', 'chandbalis-e006', '', '', 'earrings', '', 0, 0, '2022-12-02 09:43:22'),
(28, 'ChandBalis (E006)', 499, 99, '42022071131PM160200mffgx.jpg', '42022071131PM766236mffgx.jpg', 14, 0, '<p>Peacock ChandBalis with White and Red pearls.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5810841645695727/919210353400', 'chandbalis-e006-v2', '', '', 'earrings', '', 0, 0, '2022-12-02 09:45:43'),
(29, 'ChandBalis (E006)', 499, 99, '42022071146PM555118jhdkjsljsfl.jpg', '42022071146PM661095jhdkjsljsfl.jpg', 14, 0, '<p>Peacock ChandBalis with White and Brown pearls.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5810841645695727/919210353400', 'chandbalis-e006-v3', '', '', 'earrings', '', 0, 0, '2022-12-02 09:47:50'),
(30, 'Golden Heart Chain Pendant (CP003)', 899, 198, '42022071520PM748038mgkhkfjf.jpg', '42022071520PM644149krhuurdf.jpg', 13, 0, '<p>Gold heart Pendant with American Diamonds Elegant and &nbsp;Sparkling Pendant.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5686933141372583/919210353400', 'golden-heart-chain-pendant-cp003', '', '', 'pendants', '', 0, 0, '2022-12-02 09:55:05'),
(31, 'Silver Heart 2 in 1 Pendant (CP002)', 999, 189, '42022071734PM460907vzxv.jpg', '42022071824PM256015xzxzxzx.jpg', 13, 0, '<p>Silver Chain Pendant Magnetic work openable and closeable design, 2 in 1 Pendant with...<br>-Stainless steel<br>-Best Quality<br>-Non Corrosive<br>-Anti-Tarnish Item</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5405651106223792/919210353400', 'silver-heart-2-in-1-pendant-cp002', '', '', 'pendants', '', 0, 0, '2022-12-02 09:58:49'),
(32, 'Women Sparkling Elegance Zircon necklace with earrings (N001)', 2999, 699, '42022072154PM858571gh.jpg', '42022072154PM299272gffgdg.jpg', 17, 0, '<p>Zircon American Diamonds Silver plated Neckpiece with perfect look.<br>Wear traditionally or casually as you like.</p><p>Color: Silver</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5198556456917121/919210353400', 'women-sparkling-elegance-zircon-necklace-with-earrings-n001', '', '', 'necklace-with-earrings', '', 0, 0, '2022-12-02 10:04:53'),
(33, 'Women Sparkling Elegance Zircon necklace with earrings (N001)', 2999, 699, '42022072306PM558683uiyiy.jpg', '42022072306PM1832399twtgeuhtweuht.jpg', 17, 0, '<p>Zircon American Diamonds Silver plated Neckpiece with perfect look.<br>Wear traditionally or casually as you like.</p><p>Color - Golden</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5198556456917121/919210353400', 'women-sparkling-elegance-zircon-necklace-with-earrings-n001', '', '', 'necklace-with-earrings', '', 0, 0, '2022-12-02 10:08:25'),
(34, 'ChandBalis Earrings (E005)', 759, 89, '42022071325PM171189fgzvcc.jpg', '42022071325PM444136xfgs.jpg', 14, 0, '<p>Shell ChandBalis Silver Oxidised Earrings with Peacock Design Latest collection.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5586955011419628/919210353400', 'chandbalis-earrings-e005', '', '', 'earrings', '', 0, 0, '2022-12-02 10:13:18'),
(35, 'Silver Mirror Adjustable Kada Bracelet (B002)', 879, 99, '42022074238PM811297cxdzz.jpg', '42022074238PM1534155dhz.jpg', 12, 0, '<p>Kada Bracelet with Mirror and Ghunghroo work, give u decent look.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5889846774392626/919210353400', 'silver-mirror-adjustable-kada-bracelet-b002', '', '', 'bangles', '', 0, 0, '2022-12-02 10:18:05'),
(36, 'Golden Cat Look Chain Pendant (CP001)', 849, 199, '42022071945PM630307sdgksgdkdg.jpg', '42022071945PM387506zvcvz.jpg', 13, 0, '<p>Cute Chain Pendant with Cat look Design, Stainless steel with best quality never turn black, Non Corrosive and Anti-Tarnish Neckpiece.</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/8347532115319954/919210353400', 'golden-cat-look-chain-pendant-cp001', '', '', 'pendants', '', 0, 0, '2022-12-02 10:22:05'),
(37, 'Beautiful Star Sparkling Hairpin (H001)', 599, 119, '42022072839PM345214fjfjdjddfjjfjhfj.jpg', '122022034104PM1969062hairpin.jpg', 15, 0, '<p>Golden Sparkling Stones Hair Accessories<br>-Easy to wear<br>-Latest Collection<br>-Affordable and Attractive Accessories</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/6083584951660730/919210353400', 'beautiful-star-sparkling-hairpin-h001', '', '', 'hair-accessories', '', 0, 0, '2022-12-02 13:08:38'),
(38, 'Golden Pearl Hair Accessories (H002)', 849, 129, '42022073222PM920447jykjyijh.jpg', '42022073222PM1326405fghfgh.jpg', 15, 0, '<p>Set of 2 Pieces Pearl &nbsp;Golden Hair Accessories<br>-Best Quality Ever<br>-At Affordable Prices<br>-Trustable Brand</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/6312035262157655/919210353400', 'golden-pearl-hair-accessories-h002', '', '', 'hair-accessories', '', 0, 0, '2022-12-02 13:12:08'),
(39, 'Golden Plated Anklets (A001)', 399, 68, '42022073904PM920971thsdh.jpg', '42022073904PM648347dgsgd.jpg', 16, 0, '<p>Golden Plated with tiny stones and Ghungroo Drop Anklets<br>-Casual Wear<br>-Daily use<br>-Occasionally Wear<br>-Best Quality Products<br>-At Affordable Prices</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/5569367029805636/919210353400', 'golden-plated-anklets-a001', '', '', 'anklets', '', 0, 0, '2022-12-02 13:15:41'),
(40, 'Golden Plated Multicolour Anklets (A002)', 369, 69, '42022073637PM208114dsvsdf.jpg', '42022073637PM1917491sdgsdgd.jpg', 16, 0, '<p>Golden Plated Sparkling Multicolour Womens Anklets<br>-Casual Wear<br>-Best quality Product<br>-At Cheapest Price<br>-Occasionally Wear</p><p><strong>Care &amp; Handling</strong></p><p>We know how much you love your jewellery so here are sharing some tips as to how you can make your jewellery last longer.<br>Jewellery gets tarnished when it comes in contact with moisture, oil, salt and acid. If you want to keep your jewellery tarnish free so make sure to keep it dry.<br>Keep your jewellery at a soft and dry place to avoid damage due to moisture in the air.</p>', 'https://wa.me/p/6366579000023501/919210353400', 'golden-plated-multicolour-anklets-a002', '', '', 'anklets', '', 0, 0, '2022-12-02 13:17:53'),
(42, 'Multi Face-Expression Hard Mate Cases & Covers - Happy Face', 599, 299, '222023111155AM573393Yelow Face.jpg', '222023111155AM1952190Blue Face.jpg', 18, 0, '<ul><li>High quality printing</li><li>Free access to buttons</li><li>All side design</li><li><strong>Eligible For Cash On Delivery</strong></li><li>Designs Are Exactly Same As Shown</li><li>Impact Resistant and Highly Durable Polycarbonate.&nbsp;Durable Hard Plastic Case with Matte Finish</li><li>Need Help Placing Order Whatsaapp Us 9266887788</li><li>&nbsp;</li></ul>', 'N/A', 'multi-face-expression-hard-mate-cases-&-covers---happy-face', '0', 'Multi Face-Expression Hard Mate Cases & Covers ', 'neck-chain', '', 0, 1, '2023-01-22 10:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `signuplogin`
--

CREATE TABLE `signuplogin` (
  `sno` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `Mobileno` varchar(13) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signuplogin`
--

INSERT INTO `signuplogin` (`sno`, `name`, `companyname`, `Mobileno`, `emailid`, `password`, `date`) VALUES
(63, 'dharamraj kumar', 'shoponcliq', '8851096421', 'admin', 'admin', '2022-03-06 06:35:53'),
(64, 'Kunal Kumar ', 'Kunal', '9625732118', 'Kunal@gmail.com', '1234', '2022-03-06 08:46:31'),
(65, 'kunal kumar', 'kunal kumar', '9910706198', 'kunalkumar@gmail.com', '1234', '2022-03-09 11:14:53');

-- --------------------------------------------------------

--
-- Table structure for table `slider_page`
--

CREATE TABLE `slider_page` (
  `sno` int(11) NOT NULL,
  `slider_name` varchar(300) NOT NULL,
  `slider_desc` varchar(600) NOT NULL,
  `slider_cat` int(11) NOT NULL,
  `slider_img` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_page`
--

INSERT INTO `slider_page` (`sno`, `slider_name`, `slider_desc`, `slider_cat`, `slider_img`) VALUES
(1, 'Mobile Covers ', 'Purchase Premier Mobile Covers In Low Price From Shoponcliq and Get 10% off on purchase 5 covers ', 43, '20201013_100625.jpg'),
(18, 'new slider ', ' new sllider ', 45, 'garena_free_fire_most_downloaded_game_october_2021_garena_international_1637064558280.webp'),
(19, 'Slider 3', 'Slider 3', 45, 'freefire banned in india 2022.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sno` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_cat_name` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection_page`
--
ALTER TABLE `collection_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_page`
--
ALTER TABLE `product_page`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `signuplogin`
--
ALTER TABLE `signuplogin`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `emailid` (`emailid`),
  ADD UNIQUE KEY `Mobileno` (`Mobileno`);

--
-- Indexes for table `slider_page`
--
ALTER TABLE `slider_page`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection_page`
--
ALTER TABLE `collection_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `product_page`
--
ALTER TABLE `product_page`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `signuplogin`
--
ALTER TABLE `signuplogin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `slider_page`
--
ALTER TABLE `slider_page`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
