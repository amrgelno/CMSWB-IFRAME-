-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 05:24 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `ID` int(150) NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Box_id` int(150) DEFAULT NULL,
  `related_id` int(150) DEFAULT NULL,
  `relatedtopic_id` int(150) DEFAULT NULL,
  `cat_Name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `price` int(150) NOT NULL,
  `animeffect` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`ID`, `title`, `Image`, `ImageName`, `Box_id`, `related_id`, `relatedtopic_id`, `cat_Name`, `cat_type`, `Time`, `price`, `animeffect`, `style_type`) VALUES
(3, 'tagel', '', 'tagel.jpg', 1, 3, 0, '', 'Meest recentes britch', '2021-02-21 18:36:03', 0, 'wow fadeInRight', 'Overlay'),
(2, 'stukadoor', '', 'stukadoor.jpeg', 1, 3, 0, '', 'Meest recentes britch', '2021-02-21 18:36:03', 0, 'wow fadeInUp', 'Overlay'),
(1, 'Schilder', '', 'Schilder.jpg', 1, 3, 0, '<div class=\'clear\'></div>Meest recente berichten', 'Meest recentes britch', '2021-02-21 18:36:03', 0, 'wow fadeInLeft', 'Overlay'),
(5, 'plasterer', '', 'stukadoor-pp.jpg', 1, 3, 0, '', 'Meest recentes britch', '2021-02-21 18:36:03', 0, 'wow fadeInDown', 'Overlay'),
(4, 'gipsplaat', '', 'gipsplaat.jpg', 1, 3, 0, '', 'Meest recentes britch', '2021-02-21 18:36:03', 0, 'wow fadeInLeft', 'Overlay'),
(20, 'mobile1', '', 'download.jpg', 1, NULL, NULL, 'cars', 'cars', '2022-12-14 03:02:59', 20, '', 'productcard'),
(21, 'mobile2', '', 'ezgif.com-gif-maker (10).gif', 1, NULL, NULL, '', 'cars', '2022-12-14 03:02:59', 30, '', 'productcard'),
(22, 'mobile3', '', 'images copy.png', 1, NULL, NULL, '', 'cars', '2022-12-14 03:02:59', 40, '', 'productcard');

-- --------------------------------------------------------

--
-- Table structure for table `ch_pass`
--

CREATE TABLE `ch_pass` (
  `request_pass` int(225) NOT NULL,
  `user_id` int(225) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `ID` int(15) NOT NULL,
  `comp_Na` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Business` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tax_register` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tele_Number` int(30) NOT NULL,
  `fax` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path_pic` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`ID`, `comp_Na`, `Business`, `Tax_register`, `Email`, `Tele_Number`, `fax`, `country`, `City`, `street`, `path_pic`) VALUES
(1, 'trust-bedrijf', 'trust-bedrijf', '777777', 'Info@trust-bedrijf.nl', 633330410, '+31633330410', 'Holland', 'Holland', 'jagerskamp 15 westvoort 6932 BV', 'yourlogo.png');

-- --------------------------------------------------------

--
-- Table structure for table `cover`
--

CREATE TABLE `cover` (
  `ID` int(150) NOT NULL,
  `cover` blob NOT NULL,
  `Cover_Name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_id` int(150) DEFAULT NULL,
  `box_ID` int(150) DEFAULT NULL,
  `relatedtopic_id` int(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cover`
--

INSERT INTO `cover` (`ID`, `cover`, `Cover_Name`, `cover_title`, `cover_id`, `box_ID`, `relatedtopic_id`) VALUES
(13, '', '2.png', '', NULL, NULL, 1),
(14, '', 'engineer-road-male-rural-agricultural-meadow-business-man-holding-yellow-hardhat-safety-workers-sunny-45775815.jpg', '', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fav_product`
--

CREATE TABLE `fav_product` (
  `ID` int(11) NOT NULL,
  `PROD_ID` text NOT NULL,
  `FAV_ID` text NOT NULL,
  `QU` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `ID` int(11) NOT NULL,
  `Form` text NOT NULL,
  `related_id` int(11) NOT NULL,
  `Box_id` int(11) NOT NULL,
  `relatedtopic_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`ID`, `Form`, `related_id`, `Box_id`, `relatedtopic_id`) VALUES
(1, '<h1> contact-form <h1><form  action=\"index.php \"  method=\"post \" > <input type=\"text\"     name=\"username\"  placeholder=\"insert your name\" class=\"user_name\" style=\"color:red; font-size: 25px;\"><br/><br/><input type=\"text\"      name=\"Email\"    placeholder=\"insert your Email\" class=\"Email\"  style=\"color:red; font-size: 25px;\"><br/><br/><textarea      name=\"massage\"  placeholder=\"insert massage\" class=\"massage1\" style=\"color:red; font-size: 25px;\" cols=\"50\" rows=\"10\"> </textarea><br/><br/><input type=\"submit\"    value=\" ارسال \"   name=\"submit\" style=\"background:#999;   font-size:30px;\"></Form>', 1, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(150) NOT NULL,
  `product_id` int(150) NOT NULL,
  `product_ver` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quentity` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` int(150) NOT NULL,
  `purchaser_id` int(150) NOT NULL,
  `time` varchar(150) NOT NULL,
  `total` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inv_cards`
--

CREATE TABLE `inv_cards` (
  `ID` int(150) NOT NULL,
  `product_ID` int(150) NOT NULL,
  `product_ver` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(150) NOT NULL,
  `quantity` int(150) NOT NULL,
  `total` int(150) NOT NULL,
  `seller_id` int(150) NOT NULL,
  `purchaser_id` int(150) NOT NULL,
  `purchaser_visa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_visa` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--
-- Error reading structure for table cms.keywords: #1932 - Table 'cms.keywords' doesn't exist in engine
-- Error reading data for table cms.keywords: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cms`.`keywords`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `marque`
--

CREATE TABLE `marque` (
  `ID` int(15) NOT NULL,
  `News` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `News_id` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marque`
--

INSERT INTO `marque` (`ID`, `News`, `News_id`) VALUES
(1, 'adasdsadsad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int(150) NOT NULL,
  `UserName` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `distantion` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prof_pic` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_pic` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `instgram` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `olx` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `market_Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `market_Type` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `VISA` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Token_ID` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `UserName`, `Email`, `password`, `mobile`, `country`, `distantion`, `user_type`, `user_role`, `prof_pic`, `cover_pic`, `facebook`, `instgram`, `olx`, `market_Name`, `market_Type`, `VISA`, `Token_ID`) VALUES
(1, 'AlIALI', 'Amrrockstar@gmail.com', '+01097116128', '01019970655', 'Egypt', 'دار السلام بالقاهرة', 'seller', 'Admin', '', '', '', '', '', '', '', '', '789AFCRFGHMSQxlxkweopswesfhj01019970655AlIALI');

-- --------------------------------------------------------

--
-- Table structure for table `member_pr`
--

CREATE TABLE `member_pr` (
  `ID` int(150) NOT NULL,
  `product_cat` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_ver` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(250) NOT NULL,
  `distantion` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_dis` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image1` varchar(400) NOT NULL,
  `Image2` varchar(250) NOT NULL,
  `Image3` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image4` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_rel` int(150) NOT NULL,
  `Time` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `perioud` varchar(250) NOT NULL,
  `Data` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PAGE_ID` int(150) NOT NULL,
  `Box_id` int(150) NOT NULL,
  `paypal` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(150) NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(250) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `Email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distantion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMG_sender` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_id` int(150) NOT NULL,
  `recevier_id` int(250) NOT NULL,
  `bg_color` varchar(18) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `DIR` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paragraph`
--

CREATE TABLE `paragraph` (
  `ID` int(150) NOT NULL,
  `Paragraph` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paragraphstyle` varchar(23) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Paragraph_id` int(150) DEFAULT NULL,
  `box_ID` int(150) DEFAULT NULL,
  `relatedtopic_id` int(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paragraph`
--

INSERT INTO `paragraph` (`ID`, `Paragraph`, `paragraphstyle`, `Paragraph_id`, `box_ID`, `relatedtopic_id`) VALUES
(7, '<p>sakldjklsajdklasjdklasjdkaxm,zcm,zxncmnzxmcnmzcn</p>', 'paragraphstyle2', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `payer_id` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `ID` int(150) NOT NULL,
  `p_username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_IMG_sender` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_comment` varchar(950) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `P_eva` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchaser_id` int(150) NOT NULL,
  `seller_id` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slidecard`
--

CREATE TABLE `slidecard` (
  `ID` int(150) NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Box_id` int(150) NOT NULL,
  `related_id` int(150) NOT NULL,
  `relatedtopic_id` int(150) NOT NULL,
  `cat_Name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_type` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `price` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slidecard`
--

INSERT INTO `slidecard` (`ID`, `title`, `Image`, `ImageName`, `Box_id`, `related_id`, `relatedtopic_id`, `cat_Name`, `cat_type`, `Time`, `price`) VALUES
(3, 'BOX', '', 'tagel.jpg', 1, 0, 0, '', 'SlideBox', '2021-02-21 18:36:03', 0),
(2, 'Box2', '', 'stukadoor.jpeg', 1, 0, 0, '', 'SlideBox', '2021-02-21 18:36:03', 0),
(1, 'BOX1', '', 'Schilder.jpg', 1, 0, 0, 'slideBox', 'SlideBox', '2021-02-21 18:36:03', 0),
(5, 'Box5', '', 'stukadoor-pp.jpg', 1, 0, 0, '', 'SlideBox', '2021-02-21 18:36:03', 0),
(4, 'Box4', '', 'gipsplaat.jpg', 1, 0, 0, '', 'SlideBox', '2021-02-21 18:36:03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `ID` int(50) NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageName` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `Case` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_id` int(11) DEFAULT NULL,
  `box_ID` int(11) DEFAULT NULL,
  `relatedtopic_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`ID`, `title`, `Image`, `ImageName`, `Case`, `slide_id`, `box_ID`, `relatedtopic_id`) VALUES
(1, 'slider1', '', 'ezgif.com-gif-maker (24).gif', 'active', 1, NULL, NULL),
(2, 'slider2', '', 'ezgif.com-gif-maker (21).gif', '', 1, NULL, NULL),
(3, 'slider3', '', 'ezgif.com-gif-maker (22).gif', '', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `ID` int(15) NOT NULL,
  `social_icon` varchar(150) NOT NULL,
  `fa-icon` varchar(300) DEFAULT NULL,
  `links` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`ID`, `social_icon`, `fa-icon`, `links`) VALUES
(14, 'facebook.png', '<i  width=\"37px\" height=\"30px\" aria-hidden=\"true\" class=\"fa brands fa-facebook\"></i>', 'https://www.facebook.com	'),
(15, 'linkedin.png', ' <i  width=\"37px\" height=\"30px\" aria-hidden=\"true\" class=\"fa brands fa-linkedin\"></i>', 'https://www.linkedin.com	'),
(16, 'Youtube.png', '<i  width=\"37px\" height=\"30px\" aria-hidden=\"true\" class=\"fa brands fa-youtube\"></i>', 'https://www.youtube.com	'),
(18, 'twitter.png', ' <i  width=\"37px\" height=\"30px\" aria-hidden=\"true\" class=\"fa brands fa-twitter\"></i>', 'https://www.twitter.com	');

-- --------------------------------------------------------

--
-- Table structure for table `static`
--

CREATE TABLE `static` (
  `ID` int(150) NOT NULL,
  `title` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_Num` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageName` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `related_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `relatedtopic_id` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_Name` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `static_type` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `static`
--

INSERT INTO `static` (`ID`, `title`, `static_Num`, `ImageName`, `static_id`, `related_id`, `relatedtopic_id`, `static_Name`, `static_type`, `Time`, `price`) VALUES
(7, 'st.one', '30', 'R.jfif', '1', '', '', '', 'honxel', '2021-12-30 13:19:15', ''),
(8, 'st.two', '40', 'R.jfif', '1', '', '', '', 'honxel', '2021-12-30 13:19:15', ''),
(6, 'st.Three', '10', 'R.jfif', '1', '', '', 'honxel', 'honxel', '2021-12-30 13:19:15', '');

-- --------------------------------------------------------

--
-- Table structure for table `submenu`
--

CREATE TABLE `submenu` (
  `ID` int(15) NOT NULL,
  `sub1menu` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `submenuico` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SUBMENUID` int(150) DEFAULT NULL,
  `parent_id` int(150) DEFAULT NULL,
  `footer` int(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `submenu`
--

INSERT INTO `submenu` (`ID`, `sub1menu`, `submenuico`, `SUBMENUID`, `parent_id`, `footer`) VALUES
(7, 'tagel', '', NULL, 4, NULL),
(6, 'stukadoor', '', NULL, 4, 6),
(5, 'Schilder', '', NULL, 4, NULL),
(4, 'Meest recente berichten', 'categories-colorful-icon-symbol-premium-quality-vector-17405189.png', NULL, NULL, 4),
(3, 'CONTACT', 'images copy.png', NULL, NULL, NULL),
(2, 'OVER ONS', 'TRANS2.png', NULL, NULL, NULL),
(1, 'Huis', 'pen_stroke_sketch_doodle_lineart_67-128.png', NULL, NULL, NULL),
(8, 'Cine wall', '', 9, 0, NULL),
(9, 'gipsplaat', '', NULL, 4, 9),
(10, 'plasterer', '', NULL, 4, NULL),
(19, 'FLCO', '', 6, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `ID` int(100) NOT NULL,
  `subject` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_id` int(150) DEFAULT NULL,
  `box_ID` int(150) DEFAULT NULL,
  `relatedtopic_id` int(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`ID`, `subject`, `content`, `Image`, `ImageName`, `content_id`, `box_ID`, `relatedtopic_id`) VALUES
(1, 'asdasdasd', '<p class=\"MsoNormal\" style=\"text-align: left;\"><span style=\"font-size: 20.0pt; line-height: 115%;\"><span style=\"font-family: impact, sans-serif; font-size: 8pt;\"> You can position the text box anywhere in the document. Use the Drawing Tools tab to change the formatting of the pull quote text box.]</span></span></p>', '', 'Schilder.jpg', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(25) NOT NULL,
  `username` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_TYPE` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `profilepic` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profilename` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `lastname`, `password`, `email`, `user_TYPE`, `profilepic`, `profilename`) VALUES
(1, 'your', 'company', '123456', 'yourcompany@gmail.com', 'Admin', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `ID` int(150) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VIDOName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `VIDO_ID` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_id` int(20) DEFAULT NULL,
  `relatedtopic_id` int(11) DEFAULT NULL,
  `cat_Name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Time` datetime NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `ID` int(15) NOT NULL,
  `Fontstyle` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fontsize` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `ulcolor` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fontcolor` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FontType` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub1color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub2color` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`ID`, `Fontstyle`, `Fontsize`, `ulcolor`, `Fontcolor`, `FontType`, `width`, `height`, `sub1color`, `sub2color`, `font_id`) VALUES
(1, 'normal', 'medium ', '#d1eebe', '#dcdbdb', 'Verdana, Geneva, sans-serif', '200px', '50px', '#f5f0f0', '#e26f6f', ''),
(2, 'normal', 'medium ', '#5adf58', '#ffffff', 'Verdana, Geneva, sans-serif', '', '', '#ebebeb', '#fafafa', ''),
(3, 'normal', 'medium ', 'linear-gradient(45deg, #ffc107, #c0e5f3)', '##428bca', 'cursive', '', '', '#4dff6a', '#38fa45', '');

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--
-- Error reading structure for table cms.widget: #1932 - Table 'cms.widget' doesn't exist in engine
-- Error reading data for table cms.widget: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `cms`.`widget`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ch_pass`
--
ALTER TABLE `ch_pass`
  ADD PRIMARY KEY (`request_pass`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cover`
--
ALTER TABLE `cover`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fav_product`
--
ALTER TABLE `fav_product`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv_cards`
--
ALTER TABLE `inv_cards`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member_pr`
--
ALTER TABLE `member_pr`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `paragraph`
--
ALTER TABLE `paragraph`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slidecard`
--
ALTER TABLE `slidecard`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `static`
--
ALTER TABLE `static`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `static` ADD FULLTEXT KEY `title` (`title`);

--
-- Indexes for table `submenu`
--
ALTER TABLE `submenu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ch_pass`
--
ALTER TABLE `ch_pass`
  MODIFY `request_pass` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cover`
--
ALTER TABLE `cover`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fav_product`
--
ALTER TABLE `fav_product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inv_cards`
--
ALTER TABLE `inv_cards`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marque`
--
ALTER TABLE `marque`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member_pr`
--
ALTER TABLE `member_pr`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `paragraph`
--
ALTER TABLE `paragraph`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slidecard`
--
ALTER TABLE `slidecard`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `static`
--
ALTER TABLE `static`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `submenu`
--
ALTER TABLE `submenu`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `ID` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;