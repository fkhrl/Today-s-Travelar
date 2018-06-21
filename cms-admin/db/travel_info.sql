-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2016 at 01:11 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `travel_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(20) NOT NULL,
  `image` text,
  `details` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `image`, `details`, `priority`, `date`, `status`) VALUES
(1, 'image_upload__1481836450_1481836450.jpg', 'On behalf of Today&amp;rsquo;s Traveler, Today&amp;rsquo;s Traveler is committed to offering\r\n an informative, user-friendly website with competitive rates of various\r\n hotels, guest house and resorts of Bangladesh. Our goal is to provide \r\nbusiness and leisure travelers worldwide with a pleasant, efficient and \r\ncost-effective way to book hotel accommodation. Today&amp;rsquo;s Traveler is \r\nspecialized in offering you the best hotel deal, which is always \r\nup-to-date to find out the most charming independent hotels for \r\nindividual person''s choice. On this latest version of our web site, we \r\nhave created a user-friendly site which clearly presented most of the \r\nmajor hotels profiles with detailed information about their location, \r\nservices, and facilities along with room profiles where the travelers \r\ncan compare different hotels facilities and easily take the decision to \r\nchoose which hotel will be best according to their requirement. We know \r\nthat Today''s Traveler need useful information and professional \r\nconsultation, regardless of whether they stay is for business or for \r\nleisure. Do not hesitate to contact us. Today&amp;rsquo;s Traveler is a Tour \r\nOperator and Travel Agency being managed by a team of professionals with\r\n several years of experience in the field of Tours &amp;amp; Travel trade \r\nand in the field of hospitality in Bangladesh. As a Bangladeshi Tours \r\n&amp;amp; Travel Agency, we are offering service of International &amp;amp; \r\nDomestic Air Ticketing on different Airlines (Online/Offline) and to \r\ndifferent destinations. Holidays Tours &amp;amp; Travels also under take \r\nHotel &amp;amp; Ticket Reservations all over Bangladesh, Transportations for\r\n ground handling and Hotel reservations. Today&amp;rsquo;s Traveler always intends\r\n to provide the best possible Hotel accommodation to our clients in \r\ndifferent destinations at very reasonable cost. Today&amp;rsquo;s Traveler is \r\nlargest hotel directory in Bangladesh. We are provide Online Hotel \r\nBooking, Hotel reservation in Bangladesh, Holiday package tours in \r\nBangladesh, Travel Package in Bangladesh, Sight Seeing, Discount Travel \r\nPackages, Car Rental Services, Railway Tickets, Bus Ticket, Online \r\nTravel Reservations, Air Tickets to Bangladesh, VISA Assistance, Inbound\r\n &amp;amp; Outbound Tour Package, Foreign Mobile SIM. All things are depend \r\non our client requirement.\r\n                                cruise', 1, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `about_us_view`
--
CREATE TABLE IF NOT EXISTS `about_us_view` (
`id` int(20)
,`image` text
,`details` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

CREATE TABLE IF NOT EXISTS `authorize_user` (
  `id` int(20) NOT NULL,
  `pc_name` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorize_user`
--

INSERT INTO `authorize_user` (`id`, `pc_name`, `date`, `status`) VALUES
(1, 'SUL-LABPC-11', '2015-09-15', 1),
(2, 'fahad-PC', NULL, NULL),
(4, 'Khairul-PC', NULL, NULL),
(5, 'SUL-Soft-PC', '2015-11-25', 1),
(7, 'USER-PC-Monira', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `bottom_ad`
--

CREATE TABLE IF NOT EXISTS `bottom_ad` (
  `id` int(20) NOT NULL,
  `image` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bottom_ad`
--

INSERT INTO `bottom_ad` (`id`, `image`, `priority`, `date`, `status`) VALUES
(1, 'image_upload__1482432265_1482432265.gif', 1, '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `bottom_ad_view`
--
CREATE TABLE IF NOT EXISTS `bottom_ad_view` (
`id` int(20)
,`image` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `custom_table_field`
--

CREATE TABLE IF NOT EXISTS `custom_table_field` (
  `id` int(20) NOT NULL,
  `table_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_table_field`
--

INSERT INTO `custom_table_field` (`id`, `table_id`, `name`, `date`, `status`) VALUES
(112, 25, 'site_name', '2016-12-14', 1),
(113, 25, 'site_logo', '2016-12-14', 1),
(114, 25, 'address', '2016-12-14', 1),
(115, 25, 'email', '2016-12-14', 1),
(116, 25, 'mobile_number', '2016-12-14', 1),
(117, 25, 'telephone_number', '2016-12-14', 1),
(118, 25, 'hotline_number', '2016-12-14', 1),
(119, 25, 'facebook_link', '2016-12-14', 1),
(120, 25, 'twitter_link', '2016-12-14', 1),
(121, 25, 'google_plus_link', '2016-12-14', 1),
(122, 25, 'linkedin_link', '2016-12-14', 1),
(123, 26, 'image', '2016-12-14', 1),
(124, 27, 'name_', '2016-12-14', 1),
(125, 27, 'priority', '2016-12-14', 1),
(135, 29, 'image', '2016-12-14', 1),
(136, 29, 'details', '2016-12-14', 1),
(137, 29, 'priority', '2016-12-14', 1),
(138, 30, 'image', '2016-12-14', 1),
(139, 30, 'details', '2016-12-14', 1),
(140, 30, 'priority', '2016-12-14', 1),
(150, 32, 'details', '2016-12-15', 1),
(151, 32, 'priority', '2016-12-15', 1),
(154, 34, 'location_id', '2016-12-15', 1),
(155, 34, 'image', '2016-12-15', 1),
(156, 34, 'days', '2016-12-15', 1),
(157, 34, 'duration', '2016-12-15', 1),
(158, 34, 'destination', '2016-12-15', 1),
(159, 34, 'price', '2016-12-15', 1),
(160, 34, 'package_included', '2016-12-15', 1),
(161, 34, 'package_exclude', '2016-12-15', 1),
(162, 34, 'support_number', '2016-12-15', 1),
(163, 34, 'priority', '2016-12-15', 1),
(164, 35, 'name', '2016-12-16', 1),
(165, 35, 'priority', '2016-12-16', 1),
(166, 36, 'gallery_name', '2016-12-16', 1),
(167, 36, 'image', '2016-12-16', 1),
(168, 36, 'image_details', '2016-12-16', 1),
(169, 36, 'priority', '2016-12-16', 1),
(170, 37, 'name', '2016-12-16', 1),
(171, 37, 'priority', '2016-12-16', 1),
(172, 38, 'service_id', '2016-12-16', 1),
(173, 38, 'name', '2016-12-16', 1),
(174, 38, 'priority', '2016-12-16', 1),
(175, 39, 'image', '2016-12-23', 1),
(176, 39, 'priority', '2016-12-23', 1),
(177, 40, 'image', '2016-12-23', 1),
(178, 40, 'priority', '2016-12-23', 1),
(179, 41, 'image', '2016-12-23', 1),
(180, 41, 'priority', '2016-12-23', 1),
(181, 42, 'image', '2016-12-23', 1),
(182, 42, 'priority', '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `blood_group`, `dob`, `contactnumber`, `address`, `username`, `password`, `date`, `status`) VALUES
(3, 'CMS Admin', '1', '1', '2015-12-09', '01927608261', 'asdS', 'cms', '7e8a32176a113a7ba3d2b1f85834e828', '2015-09-13', 1),
(4, 'Shanto', '1', '1', '1988-08-16', '13231312', 'wesaqweqw', 'shanto', '7e8a32176a113a7ba3d2b1f85834e828', '2015-11-25', 1),
(5, 'Sirajum Munira', '1', '1', '1986-08-29', '01923318408', 'adasdsad', 'munira', '7e8a32176a113a7ba3d2b1f85834e828', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_name`
--

CREATE TABLE IF NOT EXISTS `gallery_name` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_name`
--

INSERT INTO `gallery_name` (`id`, `name`, `priority`, `date`, `status`) VALUES
(1, 'Nature', 1, '2016-12-16', 1),
(2, 'Tour''s ', 2, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gallery_name_view`
--
CREATE TABLE IF NOT EXISTS `gallery_name_view` (
`id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_photo`
--

CREATE TABLE IF NOT EXISTS `gallery_photo` (
  `id` int(20) NOT NULL,
  `gallery_name` int(20) DEFAULT NULL,
  `image` text,
  `image_details` text CHARACTER SET utf8,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_photo`
--

INSERT INTO `gallery_photo` (`id`, `gallery_name`, `image`, `image_details`, `priority`, `date`, `status`) VALUES
(2, 1, 'image_upload__1481880855_1481880855.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 1, '2016-12-16', 1),
(3, 1, 'image_upload__1481880875_1481880875.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 2, '2016-12-16', 1),
(4, 1, 'image_upload__1481880888_1481880888.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 3, '2016-12-16', 1),
(5, 1, 'image_upload__1481880903_1481880903.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 4, '2016-12-16', 1),
(6, 1, 'image_upload__1481880915_1481880915.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 5, '2016-12-16', 1),
(7, 1, 'image_upload__1481880926_1481880926.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 6, '2016-12-16', 1),
(8, 2, 'image_upload__1481881082_1481881082.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 1, '2016-12-16', 1),
(9, 2, 'image_upload__1481881099_1481881099.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 2, '2016-12-16', 1),
(10, 2, 'image_upload__1481881124_1481881124.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 3, '2016-12-16', 1),
(11, 2, 'image_upload__1481881151_1481881151.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 5, '2016-12-16', 1),
(12, 2, 'image_upload__1481881179_1481881179.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 4, '2016-12-16', 1),
(13, 2, 'image_upload__1481881199_1481881199.jpg', 'Neque porro quisquam est, qui dolorem ipsum \r\n                        quia dolor sit amet, consectetur, adipisci velit, \r\n                        sed quia non numquam eius modi tempora incidunt ut\r\n                        labore et dolore magnam aliquam quaerat voluptatem.', 6, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `gallery_photo_view`
--
CREATE TABLE IF NOT EXISTS `gallery_photo_view` (
`id` int(20)
,`gallery_name` int(20)
,`image` text
,`image_details` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `left_ad`
--

CREATE TABLE IF NOT EXISTS `left_ad` (
  `id` int(20) NOT NULL,
  `image` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `left_ad`
--

INSERT INTO `left_ad` (`id`, `image`, `priority`, `date`, `status`) VALUES
(1, 'image_upload__1482432333_1482432333.gif', 1, '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `left_ad_view`
--
CREATE TABLE IF NOT EXISTS `left_ad_view` (
`id` int(20)
,`image` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(20) NOT NULL,
  `name_` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name_`, `priority`, `date`, `status`) VALUES
(1, 'SINGAPORE', 1, '2016-12-14', 1),
(2, 'KOLKATA TO KULLU', 2, '2016-12-14', 1),
(3, 'DARJEELING', 3, '2016-12-14', 1),
(4, 'THIMPU', 4, '2016-12-14', 1),
(5, 'BANDARBAN', 5, '2016-12-14', 1),
(6, 'COX''BAZAR', 6, '2016-12-14', 1),
(7, 'SYLHET', 7, '2016-12-14', 1),
(8, 'SENTMARTIN', 8, '2016-12-14', 1),
(9, 'MALAYSIA', 9, '2016-12-14', 1),
(10, 'MALDIV', 10, '2016-12-14', 1),
(11, 'THAILAND', 11, '2016-12-14', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `location_view`
--
CREATE TABLE IF NOT EXISTS `location_view` (
`id` int(20)
,`name_` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
--
CREATE TABLE IF NOT EXISTS `login` (
`id` int(20)
,`name` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `our_service`
--

CREATE TABLE IF NOT EXISTS `our_service` (
  `id` int(20) NOT NULL,
  `details` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_service`
--

INSERT INTO `our_service` (`id`, `details`, `priority`, `date`, `status`) VALUES
(1, 'Today&amp;rsquo;s Traveler is an established &amp;amp; reputed Travel Agency handling \r\ncorporate clientele and other travels agents from various cities of \r\nBangladesh for all their travel / related acts. We are easily accessible\r\n to the traveling public in the heart of the bustling city and are \r\npromoted by well experience professional in the travel field. Since its \r\ninception, the company has established a reputation for itself as a \r\nsupplier of quality service. We focus on quality and aim to achieve \r\ntotal customer satisfaction, both in the products we offer and in the \r\nservice that follows. We take pride in giving personalized services.', 1, '2016-12-15', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `our_service_view`
--
CREATE TABLE IF NOT EXISTS `our_service_view` (
`id` int(20)
,`details` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `our_team`
--

CREATE TABLE IF NOT EXISTS `our_team` (
  `id` int(20) NOT NULL,
  `image` text,
  `details` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_team`
--

INSERT INTO `our_team` (`id`, `image`, `details`, `priority`, `date`, `status`) VALUES
(1, 'image_upload__1481836413_1481836413.jpg', 'Each and every one of our employees represents the spirit of our \r\ncompany: driven, committed, and acutely aware of how limitless Hanover&amp;rsquo;s\r\n potential is to grow. We go to great lengths to identify self-starters \r\nwith diverse experience and skill sets to produce not just an effective \r\nworkforce, but a well-rounded, talented and complementary team. Click \r\nthrough our Employee Spotlights to learn more about our team and what \r\nmotivates them. ', 1, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `our_team_view`
--
CREATE TABLE IF NOT EXISTS `our_team_view` (
`id` int(20)
,`image` text
,`details` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(20) NOT NULL,
  `location_id` int(20) DEFAULT NULL,
  `image` text,
  `days` varchar(255) DEFAULT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `package_included` text CHARACTER SET utf8,
  `package_exclude` text CHARACTER SET utf8,
  `support_number` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `location_id`, `image`, `days`, `duration`, `destination`, `price`, `package_included`, `package_exclude`, `support_number`, `priority`, `date`, `status`) VALUES
(2, 5, 'image_upload__1481811104_1481811104.jpg', '5 Night''s, 6 Day''s', 'Dhaka', 'Bandarban', '12,300 BDT', '', '', '+8801973363361', 1, '2016-12-15', 1),
(3, 6, 'image_upload__1481811159_1481811159.jpg', '2 Night''s 3 Day''s', 'Dhaka', 'Cox''s Bazar', '7,000 BDT', '', '', '+8801973363361', 2, '2016-12-15', 1),
(4, 8, 'image_upload__1481811247_1481811247.jpg', '4 Nights and 3 Days', '', 'Sentmartin', '7500/9500 (non AC/AC Bus) ', '', '', '+8801973363361', 3, '2016-12-15', 1),
(5, 7, 'image_upload__1481811326_1481811326.jpg', '3 Day''s 4 Night''s', 'Dhaka', 'Sylhet', '8,999 BDT', '&lt;p id="include" style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#00539f;font-family:''Open Sans'', Arial, sans-serif;"&gt;&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Return Bus Ticket ( Business Class)&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Stay in 3 star Hotel With Breakfast&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Sight Seeing&lt;/p&gt;&lt;div&gt;&lt;br /&gt;&lt;br /&gt;&lt;/div&gt;', '', '+8801973363361', 4, '2016-12-15', 1),
(6, 9, 'image_upload__1481811513_1481811513.jpg', '3 Night', 'Dhaka', 'Malaysia', '38,000 BDT', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Air ticket And All Transport on SIC&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*2 Nights'' Accommodation in Kuala Lumpur&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;3 Star hotel with Breakfast&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Half day Kuala Lumpur city tour&lt;/p&gt;', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Visa Fee BDT : 4000.00 per person&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Service Charge per person BDT: 2,000.00 per person&lt;/p&gt;', '+8801973363361', 5, '2016-12-15', 1),
(7, 10, 'image_upload__1481811480_1481811480.jpg', '2 Night''s 3 Day''s', '', 'Maldiv', '47,999 BDT', '&lt;span style="color:#888888;font-family:''Open Sans'', Arial, sans-serif;font-size:13px;"&gt;*Return air ticket up to Maldives on Mihin Lanka including taxes&lt;/span&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*02 Nights Hotel accommodation at Hulhumale Island, Male, Maldives in 3 Star Hotel twin/double share basis&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Everyday complimentary breakfast&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Airport-Hotel transfer service (SIC basis).&lt;/p&gt;', '&lt;span style="color:#888888;font-family:''Open Sans'', Arial, sans-serif;font-size:13px;"&gt;*Service Charge BDT: 2,000.00 per person&lt;/span&gt;', '+8801973363361', 6, '2016-12-15', 1),
(8, 11, 'image_upload__1481811651_1481811651.jpg', '3 Night''s 4 Day''s', 'Dhaka', 'Thailand', '38,000 BDT', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Round Trip Air Tickets And Airport Pickup&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Buffet Breakfast, City Tour , Whole Day Safari World&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Tour with Lunch in Bangkok&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;Visa Assistance and All Taxes&lt;/p&gt;', '', '+8801973363361', 7, '2016-12-15', 1),
(9, 1, 'image_upload__1481811854_1481811854.jpg', '4 Night''s 5 Day''s', 'Dhaka', 'Singapore', '31,500 BDT', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Half day SIN city tour&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Airport ? hotel ? Airport Transport&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;&lt;/p&gt;', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;Air ticket And Visa Fee&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;Service Charge per person BDT: 1,500 per person (for invitation 5000 tk)&lt;/p&gt;', '+8801973363361', 8, '2016-12-15', 1),
(10, 2, 'image_upload__1481812049_1481812049.jpg', '10 Night''s 11 Day''s', 'Dhaka', 'Kolkata To Kullu', '31,500 BDT', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Kolkata-Delhi-Chandigare-Simla-Manali-Kullu (Tour Itinerary)&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Per Person-31,500/- (Minimum 4 Person ) 11 Days 10 N- By Road&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Per Person-36,500/- (Minimum 2 Person) 11 Days 10 N- By Road&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Insurance And Indian E-Token&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Visa 600 BDT, Gov Tax 500 BDT, Border Trips&lt;/p&gt;', '', '+8801973363361', 9, '2016-12-15', 1),
(11, 3, 'image_upload__1481812220_1481812220.jpg', '4 Days, 5 Nights', 'Dhaka', 'Darjeeling', '10,500 BDT', '&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*Dhaka to Burimari by A/C Bus With Return Tickets&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*All Transport by Local/Reserve Transport.&lt;/p&gt;&lt;p style="box-sizing:border-box;margin-bottom:0px;padding-right:0px;padding-left:0px;border:0px;font-size:13px;vertical-align:baseline;color:#888888;font-family:''Open Sans'', Arial, sans-serif;"&gt;*3 Nights Accommodation at Darjeeling on Twin Share Basis With Breakfast&lt;/p&gt;', '&lt;span style="color:#888888;font-family:''Open Sans'', Arial, sans-serif;font-size:13px;"&gt;*Visa fee, E-Token, Travel Tax, Lunch, Dinner&lt;/span&gt;&lt;br style="box-sizing:border-box;color:#888888;font-family:''Open Sans'', Arial, sans-serif;font-size:13px;" /&gt;&lt;span style="color:#888888;font-family:''Open Sans'', Arial, sans-serif;font-size:13px;"&gt;*Tourist Places Entry Ticket, Personal Expenses etc.&lt;br /&gt;&lt;/span&gt;', '+8801973363361', 11, '2016-12-15', 1),
(12, 4, 'image_upload__1481812303_1481812303.jpg', '2 Nights 3 Days', 'Dhaka', 'Thimpu And Paru', '31,999 BDT', '', '&lt;span style="color:#888888;font-family:''Open Sans'', Arial, sans-serif;font-size:13px;"&gt;Service Charge: 1000 tk&lt;/span&gt;', '+8801973363361', 12, '2016-12-15', 1),
(13, 1, 'image_upload__1481813643_1481813643.jpg', '5 Night''s, 6 Day''s', 'Dhaka', 'Singapore', '38,000 BDT', '&lt;p&gt;aaaaaaaaaaaaaaaaaaaaaa&lt;/p&gt;&lt;p&gt;aaaaaaaaaaaaaaaaa&lt;/p&gt;&lt;p&gt;aaaaaaaaaaaaaaaa&lt;/p&gt;', '&lt;p&gt;ssssssssssssssssssssss&lt;/p&gt;&lt;p&gt;sssssssssss&lt;/p&gt;&lt;p&gt;sssssssssssss&lt;/p&gt;', '+8801973363361', 4, '2016-12-15', 1),
(14, 1, 'image_upload__1481832003_1481832003.jpg', '4days', 'dhaka', 'singapore', '1000000000000000000', '&lt;p&gt;jdkjfksjfkjsdklfjsdf&lt;/p&gt;&lt;p&gt;dkfkjdkjsdlkfjlksd&lt;/p&gt;&lt;p&gt;kfksjkfsjdklfs&lt;/p&gt;', '&lt;p&gt;kkjfklajfkajlkfja&lt;/p&gt;&lt;p&gt;kafkakfjakljfklasf&lt;/p&gt;&lt;p&gt;afkakfkajfkljk&lt;/p&gt;', '34234', 1, '2016-12-16', 1),
(15, 1, 'image_upload__1481832519_1481832519.jpg', '4days', '4 Days, 5 Nights', 'singapore', '10,500 BDT', 'adsda', 'asdad', '34234', 1, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `package_view`
--
CREATE TABLE IF NOT EXISTS `package_view` (
`id` int(20)
,`location_id` int(20)
,`image` text
,`days` varchar(255)
,`duration` varchar(255)
,`destination` varchar(255)
,`price` varchar(255)
,`package_included` text
,`package_exclude` text
,`support_number` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE IF NOT EXISTS `page_info` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_name_view` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `name`, `page_name`, `page_name_view`, `menu_name`, `date`, `status`) VALUES
(25, 'site_basic_info', 'site_basic_info.php', '', 'site_basic_info', '2016-12-14', 1),
(26, 'slider', 'slider.php', '', 'Slider', '2016-12-14', 1),
(27, 'location', 'location.php', '', 'Location', '2016-12-14', 1),
(29, 'our_team', 'our_team.php', '', 'OUR TEAM', '2016-12-14', 1),
(30, 'about_us', 'about_us.php', '', 'About us', '2016-12-14', 1),
(32, 'our_service', 'our_service.php', '', 'Our Service', '2016-12-15', 1),
(34, 'package', 'package.php', '', 'Package', '2016-12-15', 1),
(35, 'gallery_name', 'gallery_name.php', '', 'Gallery Name', '2016-12-16', 1),
(36, 'gallery_photo', 'gallery_photo.php', '', 'Gallery Photo', '2016-12-16', 1),
(37, 'service_name', 'service_name.php', '', 'Service Name', '2016-12-16', 1),
(38, 'service_list', 'service_list.php', '', 'Service List', '2016-12-16', 1),
(39, 'left_ad', 'left_ad.php', '', 'Left Ad', '2016-12-23', 1),
(40, 'top_ad', 'top_ad.php', '', 'Top Ad', '2016-12-23', 1),
(41, 'right_ad', 'right_ad.php', '', 'Right Ad', '2016-12-23', 1),
(42, 'bottom_ad', 'bottom_ad.php', '', 'Bottom Ad', '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `right_ad`
--

CREATE TABLE IF NOT EXISTS `right_ad` (
  `id` int(20) NOT NULL,
  `image` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `right_ad`
--

INSERT INTO `right_ad` (`id`, `image`, `priority`, `date`, `status`) VALUES
(1, 'image_upload__1482432351_1482432351.gif', 1, '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `right_ad_view`
--
CREATE TABLE IF NOT EXISTS `right_ad_view` (
`id` int(20)
,`image` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE IF NOT EXISTS `service_list` (
  `id` int(20) NOT NULL,
  `service_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`id`, `service_id`, `name`, `priority`, `date`, `status`) VALUES
(1, 1, 'PACKAGE TOUR', 1, '2016-12-16', 1),
(2, 1, 'PRIVATE TOUR', 2, '2016-12-16', 1),
(3, 1, 'GUIDED TOUR', 3, '2016-12-16', 1),
(4, 1, 'RIVER CRUISE', 4, '2016-12-16', 1),
(5, 2, 'AIRPORT PICKUP & DROP', 1, '2016-12-16', 1),
(6, 2, 'TRANSPORT RENTAL ', 2, '2016-12-16', 1),
(7, 2, 'RENT-A-CAR SERVICE ', 3, '2016-12-16', 1),
(8, 2, 'INTERNATIONAL AND DOMESTIC TICKET', 4, '2016-12-16', 1),
(9, 2, 'BOOKING', 5, '2016-12-16', 1),
(10, 3, 'BUSINESS TOUR', 1, '2016-12-16', 1),
(11, 3, 'STUDY TOUR', 3, '2016-12-16', 1),
(12, 3, 'SPECIAL INTEREST TOUR FOR FAMILIES', 4, '2016-12-16', 1),
(13, 3, 'UNIVERSITY AND OTHER ORGANIZATIONS ', 5, '2016-12-16', 1),
(14, 3, 'CORPORATE TOUR', 6, '2016-12-16', 1),
(15, 4, 'HOTEL RESERVATION', 1, '2016-12-16', 1),
(16, 4, 'LANGUAGE GUIDE ', 2, '2016-12-16', 1),
(17, 4, 'HOME STAY SERVICE ', 3, '2016-12-16', 1),
(18, 4, 'EVENT MANAGEMENT ', 4, '2016-12-16', 1),
(19, 4, 'VISA ASSISTANCE', 5, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `service_list_view`
--
CREATE TABLE IF NOT EXISTS `service_list_view` (
`id` int(20)
,`service_id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `service_name`
--

CREATE TABLE IF NOT EXISTS `service_name` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_name`
--

INSERT INTO `service_name` (`id`, `name`, `priority`, `date`, `status`) VALUES
(1, 'TOUR LIST', 1, '2016-12-16', 1),
(2, 'TRANSPORT SERVICES', 2, '2016-12-16', 1),
(3, 'SPECIAL TOUR SERVICES', 3, '2016-12-16', 1),
(4, 'OTHER SPECIAL SERVICES', 4, '2016-12-16', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `service_name_view`
--
CREATE TABLE IF NOT EXISTS `service_name_view` (
`id` int(20)
,`name` varchar(255)
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `site_basic_info`
--

CREATE TABLE IF NOT EXISTS `site_basic_info` (
  `id` int(20) NOT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  `site_logo` text,
  `address` text,
  `email` text,
  `mobile_number` varchar(255) DEFAULT NULL,
  `telephone_number` varchar(255) DEFAULT NULL,
  `hotline_number` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_plus_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_basic_info`
--

INSERT INTO `site_basic_info` (`id`, `site_name`, `site_logo`, `address`, `email`, `mobile_number`, `telephone_number`, `hotline_number`, `facebook_link`, `twitter_link`, `google_plus_link`, `linkedin_link`, `date`, `status`) VALUES
(1, 'Todays Travelar', 'site_logo_upload__1482432549_1482432549.jpg', '&lt;p&gt;&lt;span style="color:#777777;font-family:''Open Sans'', sans-serif;font-size:13.51px;"&gt;House#10, Road #9, (Zohirul Islam Avenu),&lt;/span&gt;&lt;span style="color:#777777;font-family:''Open Sans'', sans-serif;font-size:13.51px;"&gt;Pallabi, Dhaka - 1216,&lt;/span&gt;&lt;span style="color:#777777;font-family:''Open Sans'', sans-serif;font-size:13.51px;"&gt;Bangladesh&lt;/span&gt;&lt;/p&gt;', '&lt;p&gt;&lt;span style="color:#777777;font-family:''Open Sans'', sans-serif;font-size:13.51px;"&gt;todaystravelerbd@gmail.com,&amp;nbsp;&lt;/span&gt;&lt;span style="color:#777777;font-family:''Open Sans'', sans-serif;font-size:13.51px;"&gt;mailme@todaystravelerbd.com&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style="color:#777777;font-family:''Open Sans'', sans-serif;font-size:13.51px;"&gt;&lt;/span&gt;&lt;/p&gt;', '+8801711943701,+880197336336 1', '+88-02-8001535 ', '+88-01911-222-786', '#', '#', '#', '#', '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `site_basic_info_view`
--
CREATE TABLE IF NOT EXISTS `site_basic_info_view` (
`id` int(20)
,`site_name` varchar(255)
,`site_logo` text
,`address` text
,`email` text
,`mobile_number` varchar(255)
,`telephone_number` varchar(255)
,`hotline_number` varchar(255)
,`facebook_link` varchar(255)
,`twitter_link` varchar(255)
,`google_plus_link` varchar(255)
,`linkedin_link` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(20) NOT NULL,
  `image` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `date`, `status`) VALUES
(1, 'image_upload__1481914128_1481914128.jpg', '2016-12-17', 1),
(2, 'image_upload__1481914136_1481914136.jpg', '2016-12-17', 1),
(3, 'image_upload__1481914143_1481914143.jpg', '2016-12-17', 1),
(4, 'image_upload__1481914150_1481914150.jpg', '2016-12-17', 1),
(5, 'image_upload__1481914157_1481914157.jpg', '2016-12-17', 1),
(6, 'image_upload__1481914163_1481914163.jpg', '2016-12-17', 1),
(7, 'image_upload__1481914174_1481914174.jpg', '2016-12-17', 1),
(8, 'image_upload__1481914180_1481914180.jpg', '2016-12-17', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `slider_view`
--
CREATE TABLE IF NOT EXISTS `slider_view` (
`id` int(20)
,`image` text
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `top_ad`
--

CREATE TABLE IF NOT EXISTS `top_ad` (
  `id` int(20) NOT NULL,
  `image` text,
  `priority` int(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_ad`
--

INSERT INTO `top_ad` (`id`, `image`, `priority`, `date`, `status`) VALUES
(1, 'image_upload__1482432375_1482432375.gif', 1, '2016-12-23', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `top_ad_view`
--
CREATE TABLE IF NOT EXISTS `top_ad_view` (
`id` int(20)
,`image` text
,`priority` int(20)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Structure for view `about_us_view`
--
DROP TABLE IF EXISTS `about_us_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `about_us_view` AS select `about_us`.`id` AS `id`,`about_us`.`image` AS `image`,`about_us`.`details` AS `details`,`about_us`.`priority` AS `priority`,`about_us`.`date` AS `date`,`about_us`.`status` AS `status` from `about_us`;

-- --------------------------------------------------------

--
-- Structure for view `bottom_ad_view`
--
DROP TABLE IF EXISTS `bottom_ad_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `bottom_ad_view` AS select `bottom_ad`.`id` AS `id`,`bottom_ad`.`image` AS `image`,`bottom_ad`.`priority` AS `priority`,`bottom_ad`.`date` AS `date`,`bottom_ad`.`status` AS `status` from `bottom_ad`;

-- --------------------------------------------------------

--
-- Structure for view `gallery_name_view`
--
DROP TABLE IF EXISTS `gallery_name_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gallery_name_view` AS select `gallery_name`.`id` AS `id`,`gallery_name`.`name` AS `name`,`gallery_name`.`priority` AS `priority`,`gallery_name`.`date` AS `date`,`gallery_name`.`status` AS `status` from `gallery_name`;

-- --------------------------------------------------------

--
-- Structure for view `gallery_photo_view`
--
DROP TABLE IF EXISTS `gallery_photo_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `gallery_photo_view` AS select `gallery_photo`.`id` AS `id`,`gallery_photo`.`gallery_name` AS `gallery_name`,`gallery_photo`.`image` AS `image`,`gallery_photo`.`image_details` AS `image_details`,`gallery_photo`.`priority` AS `priority`,`gallery_photo`.`date` AS `date`,`gallery_photo`.`status` AS `status` from `gallery_photo`;

-- --------------------------------------------------------

--
-- Structure for view `left_ad_view`
--
DROP TABLE IF EXISTS `left_ad_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `left_ad_view` AS select `left_ad`.`id` AS `id`,`left_ad`.`image` AS `image`,`left_ad`.`priority` AS `priority`,`left_ad`.`date` AS `date`,`left_ad`.`status` AS `status` from `left_ad`;

-- --------------------------------------------------------

--
-- Structure for view `location_view`
--
DROP TABLE IF EXISTS `location_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `location_view` AS select `location`.`id` AS `id`,`location`.`name_` AS `name_`,`location`.`priority` AS `priority`,`location`.`date` AS `date`,`location`.`status` AS `status` from `location`;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `login` AS select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee`;

-- --------------------------------------------------------

--
-- Structure for view `our_service_view`
--
DROP TABLE IF EXISTS `our_service_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `our_service_view` AS select `our_service`.`id` AS `id`,`our_service`.`details` AS `details`,`our_service`.`priority` AS `priority`,`our_service`.`date` AS `date`,`our_service`.`status` AS `status` from `our_service`;

-- --------------------------------------------------------

--
-- Structure for view `our_team_view`
--
DROP TABLE IF EXISTS `our_team_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `our_team_view` AS select `our_team`.`id` AS `id`,`our_team`.`image` AS `image`,`our_team`.`details` AS `details`,`our_team`.`priority` AS `priority`,`our_team`.`date` AS `date`,`our_team`.`status` AS `status` from `our_team`;

-- --------------------------------------------------------

--
-- Structure for view `package_view`
--
DROP TABLE IF EXISTS `package_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `package_view` AS select `package`.`id` AS `id`,`package`.`location_id` AS `location_id`,`package`.`image` AS `image`,`package`.`days` AS `days`,`package`.`duration` AS `duration`,`package`.`destination` AS `destination`,`package`.`price` AS `price`,`package`.`package_included` AS `package_included`,`package`.`package_exclude` AS `package_exclude`,`package`.`support_number` AS `support_number`,`package`.`priority` AS `priority`,`package`.`date` AS `date`,`package`.`status` AS `status` from `package`;

-- --------------------------------------------------------

--
-- Structure for view `right_ad_view`
--
DROP TABLE IF EXISTS `right_ad_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `right_ad_view` AS select `right_ad`.`id` AS `id`,`right_ad`.`image` AS `image`,`right_ad`.`priority` AS `priority`,`right_ad`.`date` AS `date`,`right_ad`.`status` AS `status` from `right_ad`;

-- --------------------------------------------------------

--
-- Structure for view `service_list_view`
--
DROP TABLE IF EXISTS `service_list_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `service_list_view` AS select `service_list`.`id` AS `id`,`service_list`.`service_id` AS `service_id`,`service_list`.`name` AS `name`,`service_list`.`priority` AS `priority`,`service_list`.`date` AS `date`,`service_list`.`status` AS `status` from `service_list`;

-- --------------------------------------------------------

--
-- Structure for view `service_name_view`
--
DROP TABLE IF EXISTS `service_name_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `service_name_view` AS select `service_name`.`id` AS `id`,`service_name`.`name` AS `name`,`service_name`.`priority` AS `priority`,`service_name`.`date` AS `date`,`service_name`.`status` AS `status` from `service_name`;

-- --------------------------------------------------------

--
-- Structure for view `site_basic_info_view`
--
DROP TABLE IF EXISTS `site_basic_info_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `site_basic_info_view` AS select `site_basic_info`.`id` AS `id`,`site_basic_info`.`site_name` AS `site_name`,`site_basic_info`.`site_logo` AS `site_logo`,`site_basic_info`.`address` AS `address`,`site_basic_info`.`email` AS `email`,`site_basic_info`.`mobile_number` AS `mobile_number`,`site_basic_info`.`telephone_number` AS `telephone_number`,`site_basic_info`.`hotline_number` AS `hotline_number`,`site_basic_info`.`facebook_link` AS `facebook_link`,`site_basic_info`.`twitter_link` AS `twitter_link`,`site_basic_info`.`google_plus_link` AS `google_plus_link`,`site_basic_info`.`linkedin_link` AS `linkedin_link`,`site_basic_info`.`date` AS `date`,`site_basic_info`.`status` AS `status` from `site_basic_info`;

-- --------------------------------------------------------

--
-- Structure for view `slider_view`
--
DROP TABLE IF EXISTS `slider_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `slider_view` AS select `slider`.`id` AS `id`,`slider`.`image` AS `image`,`slider`.`date` AS `date`,`slider`.`status` AS `status` from `slider`;

-- --------------------------------------------------------

--
-- Structure for view `top_ad_view`
--
DROP TABLE IF EXISTS `top_ad_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top_ad_view` AS select `top_ad`.`id` AS `id`,`top_ad`.`image` AS `image`,`top_ad`.`priority` AS `priority`,`top_ad`.`date` AS `date`,`top_ad`.`status` AS `status` from `top_ad`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `authorize_user`
--
ALTER TABLE `authorize_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bottom_ad`
--
ALTER TABLE `bottom_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_name`
--
ALTER TABLE `gallery_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_photo`
--
ALTER TABLE `gallery_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `left_ad`
--
ALTER TABLE `left_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_team`
--
ALTER TABLE `our_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_info`
--
ALTER TABLE `page_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `right_ad`
--
ALTER TABLE `right_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_name`
--
ALTER TABLE `service_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_basic_info`
--
ALTER TABLE `site_basic_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_ad`
--
ALTER TABLE `top_ad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `authorize_user`
--
ALTER TABLE `authorize_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bottom_ad`
--
ALTER TABLE `bottom_ad`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery_name`
--
ALTER TABLE `gallery_name`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery_photo`
--
ALTER TABLE `gallery_photo`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `left_ad`
--
ALTER TABLE `left_ad`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `our_team`
--
ALTER TABLE `our_team`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `right_ad`
--
ALTER TABLE `right_ad`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `service_name`
--
ALTER TABLE `service_name`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `site_basic_info`
--
ALTER TABLE `site_basic_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `top_ad`
--
ALTER TABLE `top_ad`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
