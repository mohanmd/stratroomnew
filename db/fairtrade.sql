-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 01:50 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairtrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL DEFAULT 'default.png',
  `description` text NOT NULL,
  `delete_status` int(11) DEFAULT 0 COMMENT '1 deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `image`, `description`, `delete_status`) VALUES
(1, 'Coffee', 'uploads/category/5dbbce8ac200c.jpg', 'Coffee is good', 0),
(2, 'Tea', 'uploads/category/5dbbc81690a31.jpg', 'Tea', 0),
(3, 'Cane sugar', 'uploads/category/5dc26872409ea.jpg', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CD', 'Democratic Republic of the Congo'),
(50, 'CG', 'Republic of Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GK', 'Guernsey'),
(85, 'GR', 'Greece'),
(86, 'GL', 'Greenland'),
(87, 'GD', 'Grenada'),
(88, 'GP', 'Guadeloupe'),
(89, 'GU', 'Guam'),
(90, 'GT', 'Guatemala'),
(91, 'GN', 'Guinea'),
(92, 'GW', 'Guinea-Bissau'),
(93, 'GY', 'Guyana'),
(94, 'HT', 'Haiti'),
(95, 'HM', 'Heard and Mc Donald Islands'),
(96, 'HN', 'Honduras'),
(97, 'HK', 'Hong Kong'),
(98, 'HU', 'Hungary'),
(99, 'IS', 'Iceland'),
(100, 'IN', 'India'),
(101, 'IM', 'Isle of Man'),
(102, 'ID', 'Indonesia'),
(103, 'IR', 'Iran (Islamic Republic of)'),
(104, 'IQ', 'Iraq'),
(105, 'IE', 'Ireland'),
(106, 'IL', 'Israel'),
(107, 'IT', 'Italy'),
(108, 'CI', 'Ivory Coast'),
(109, 'JE', 'Jersey'),
(110, 'JM', 'Jamaica'),
(111, 'JP', 'Japan'),
(112, 'JO', 'Jordan'),
(113, 'KZ', 'Kazakhstan'),
(114, 'KE', 'Kenya'),
(115, 'KI', 'Kiribati'),
(116, 'KP', 'Korea, Democratic People\'s Republic of'),
(117, 'KR', 'Korea, Republic of'),
(118, 'XK', 'Kosovo'),
(119, 'KW', 'Kuwait'),
(120, 'KG', 'Kyrgyzstan'),
(121, 'LA', 'Lao People\'s Democratic Republic'),
(122, 'LV', 'Latvia'),
(123, 'LB', 'Lebanon'),
(124, 'LS', 'Lesotho'),
(125, 'LR', 'Liberia'),
(126, 'LY', 'Libyan Arab Jamahiriya'),
(127, 'LI', 'Liechtenstein'),
(128, 'LT', 'Lithuania'),
(129, 'LU', 'Luxembourg'),
(130, 'MO', 'Macau'),
(131, 'MK', 'North Macedonia'),
(132, 'MG', 'Madagascar'),
(133, 'MW', 'Malawi'),
(134, 'MY', 'Malaysia'),
(135, 'MV', 'Maldives'),
(136, 'ML', 'Mali'),
(137, 'MT', 'Malta'),
(138, 'MH', 'Marshall Islands'),
(139, 'MQ', 'Martinique'),
(140, 'MR', 'Mauritania'),
(141, 'MU', 'Mauritius'),
(142, 'TY', 'Mayotte'),
(143, 'MX', 'Mexico'),
(144, 'FM', 'Micronesia, Federated States of'),
(145, 'MD', 'Moldova, Republic of'),
(146, 'MC', 'Monaco'),
(147, 'MN', 'Mongolia'),
(148, 'ME', 'Montenegro'),
(149, 'MS', 'Montserrat'),
(150, 'MA', 'Morocco'),
(151, 'MZ', 'Mozambique'),
(152, 'MM', 'Myanmar'),
(153, 'NA', 'Namibia'),
(154, 'NR', 'Nauru'),
(155, 'NP', 'Nepal'),
(156, 'NL', 'Netherlands'),
(157, 'AN', 'Netherlands Antilles'),
(158, 'NC', 'New Caledonia'),
(159, 'NZ', 'New Zealand'),
(160, 'NI', 'Nicaragua'),
(161, 'NE', 'Niger'),
(162, 'NG', 'Nigeria'),
(163, 'NU', 'Niue'),
(164, 'NF', 'Norfolk Island'),
(165, 'MP', 'Northern Mariana Islands'),
(166, 'NO', 'Norway'),
(167, 'OM', 'Oman'),
(168, 'PK', 'Pakistan'),
(169, 'PW', 'Palau'),
(170, 'PS', 'Palestine'),
(171, 'PA', 'Panama'),
(172, 'PG', 'Papua New Guinea'),
(173, 'PY', 'Paraguay'),
(174, 'PE', 'Peru'),
(175, 'PH', 'Philippines'),
(176, 'PN', 'Pitcairn'),
(177, 'PL', 'Poland'),
(178, 'PT', 'Portugal'),
(179, 'PR', 'Puerto Rico'),
(180, 'QA', 'Qatar'),
(181, 'RE', 'Reunion'),
(182, 'RO', 'Romania'),
(183, 'RU', 'Russian Federation'),
(184, 'RW', 'Rwanda'),
(185, 'KN', 'Saint Kitts and Nevis'),
(186, 'LC', 'Saint Lucia'),
(187, 'VC', 'Saint Vincent and the Grenadines'),
(188, 'WS', 'Samoa'),
(189, 'SM', 'San Marino'),
(190, 'ST', 'Sao Tome and Principe'),
(191, 'SA', 'Saudi Arabia'),
(192, 'SN', 'Senegal'),
(193, 'RS', 'Serbia'),
(194, 'SC', 'Seychelles'),
(195, 'SL', 'Sierra Leone'),
(196, 'SG', 'Singapore'),
(197, 'SK', 'Slovakia'),
(198, 'SI', 'Slovenia'),
(199, 'SB', 'Solomon Islands'),
(200, 'SO', 'Somalia'),
(201, 'ZA', 'South Africa'),
(202, 'GS', 'South Georgia South Sandwich Islands'),
(203, 'SS', 'South Sudan'),
(204, 'ES', 'Spain'),
(205, 'LK', 'Sri Lanka'),
(206, 'SH', 'St. Helena'),
(207, 'PM', 'St. Pierre and Miquelon'),
(208, 'SD', 'Sudan'),
(209, 'SR', 'Suriname'),
(210, 'SJ', 'Svalbard and Jan Mayen Islands'),
(211, 'SZ', 'Swaziland'),
(212, 'SE', 'Sweden'),
(213, 'CH', 'Switzerland'),
(214, 'SY', 'Syrian Arab Republic'),
(215, 'TW', 'Taiwan'),
(216, 'TJ', 'Tajikistan'),
(217, 'TZ', 'Tanzania, United Republic of'),
(218, 'TH', 'Thailand'),
(219, 'TG', 'Togo'),
(220, 'TK', 'Tokelau'),
(221, 'TO', 'Tonga'),
(222, 'TT', 'Trinidad and Tobago'),
(223, 'TN', 'Tunisia'),
(224, 'TR', 'Turkey'),
(225, 'TM', 'Turkmenistan'),
(226, 'TC', 'Turks and Caicos Islands'),
(227, 'TV', 'Tuvalu'),
(228, 'UG', 'Uganda'),
(229, 'UA', 'Ukraine'),
(230, 'AE', 'United Arab Emirates'),
(231, 'GB', 'United Kingdom'),
(232, 'US', 'United States'),
(233, 'UM', 'United States minor outlying islands'),
(234, 'UY', 'Uruguay'),
(235, 'UZ', 'Uzbekistan'),
(236, 'VU', 'Vanuatu'),
(237, 'VA', 'Vatican City State'),
(238, 'VE', 'Venezuela'),
(239, 'VN', 'Vietnam'),
(240, 'VG', 'Virgin Islands (British)'),
(241, 'VI', 'Virgin Islands (U.S.)'),
(242, 'WF', 'Wallis and Futuna Islands'),
(243, 'EH', 'Western Sahara'),
(244, 'YE', 'Yemen'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `enquirymasters`
--

CREATE TABLE `enquirymasters` (
  `id` int(11) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `delete_status` int(11) NOT NULL COMMENT '1 deleted'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquirymasters`
--

INSERT INTO `enquirymasters` (`id`, `subject`, `description`, `delete_status`) VALUES
(1, 'price', 'Enquiry for price of the product', 0);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `type` int(11) DEFAULT NULL COMMENT '1,Product Enquiry, 2 Post By requirement',
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL COMMENT '1 sent 2 viewed 3 replyed',
  `view_at` datetime DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `from_id`, `to_id`, `subject`, `description`, `type`, `category_id`, `subcategory_id`, `product_id`, `created_at`, `status`, `view_at`, `parent_id`) VALUES
(1, 32, 31, 'price', 'Enquiry for price of the product', 1, 1, 4, 1, '2019-11-13 11:13:34', 1, NULL, NULL),
(3, 32, 32, 'price', 'Enquiry for price of the product', 1, 2, 4, 3, '2019-11-14 05:07:27', 1, NULL, NULL),
(5, 32, 32, 'price', 'Enquiry for price of the product', 1, 2, 4, 2, '2019-11-14 05:17:21', 1, NULL, NULL),
(9, 32, 32, 'price', 'Enquiry for price of the product', 1, 1, 4, 6, '2019-11-29 06:28:22', 1, NULL, NULL),
(10, 32, 32, 'price', 'Enquiry for price of the product', 1, 1, 4, 6, '2019-11-29 06:38:33', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1571898171),
('m130524_201442_init', 1571898178),
('m140506_102106_rbac_init', 1574937517),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1574937517),
('m180523_151638_rbac_updates_indexes_without_prefix', 1574937517),
('m190124_110200_add_verification_token_column_to_user_table', 1571898178);

-- --------------------------------------------------------

--
-- Table structure for table `producerimage`
--

CREATE TABLE `producerimage` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 0 COMMENT '1 deleted',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 pending 1 approved 2 rejected'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producerimage`
--

INSERT INTO `producerimage` (`id`, `type_id`, `caption`, `image_name`, `producer_id`, `delete_status`, `status`) VALUES
(6, 1, 'farmers', 'frontend/web/img/image-gallery/5ddb9e00e10be.jpg', 32, 0, 0),
(7, 1, 'farmers', 'frontend/web/img/image-gallery/5ddba6af31435.jpg', 32, 0, 0),
(8, 1, 'farmers', 'frontend/web/img/image-gallery/5ddba6ff25895.jpg', 32, 0, 0),
(9, 2, 'projects', 'frontend/web/img/image-gallery/5ddba737901ed.jpg', 32, 0, 0),
(10, 3, 'products', 'frontend/web/img/image-gallery/5ddba7e0e0868.jpg', 32, 0, 0),
(11, 4, 'organization', 'frontend/web/img/image-gallery/5ddba81ea95a0.jpg', 32, 0, 0),
(12, 4, 'organization', 'frontend/web/img/image-gallery/5ddbb06903b88.jpg', 32, 0, 0),
(13, 2, 'project', 'frontend/web/img/image-gallery/5ddcac0c3a8d4.jpg', 32, 0, 0),
(14, 3, 'product', 'frontend/web/img/image-gallery/5ddcac0c440ce.jpg', 32, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `producerimage_types`
--

CREATE TABLE `producerimage_types` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(150) NOT NULL,
  `delete_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producerimage_types`
--

INSERT INTO `producerimage_types` (`id`, `name`, `description`, `delete_status`) VALUES
(1, 'Farmers', 'images of farmers', 0),
(2, 'Project', 'images of project', 0),
(3, 'Product', 'images of products', 0),
(4, 'Producer Organization', 'images of producer organization', 0);

-- --------------------------------------------------------

--
-- Table structure for table `producervideo`
--

CREATE TABLE `producervideo` (
  `id` int(11) NOT NULL,
  `caption` varchar(50) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 0 COMMENT '1 deleted',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 pending 1 approved 2 rejected'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producervideo`
--

INSERT INTO `producervideo` (`id`, `caption`, `video_url`, `producer_id`, `delete_status`, `status`) VALUES
(1, 'product', 'https://www.youtube.com/embed/tCk2yD9GEeA', 32, 0, 0),
(2, 'farmer', 'https://www.youtube.com/embed/F0a0tp93Bhw', 32, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `producer_details`
--

CREATE TABLE `producer_details` (
  `id` int(11) NOT NULL,
  `producer_id` int(11) NOT NULL,
  `founded_in` varchar(50) NOT NULL,
  `founded_since` varchar(50) NOT NULL,
  `producer_profile` varchar(255) NOT NULL,
  `fairtrade_impact` text NOT NULL,
  `organization` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `faircertsince` int(4) NOT NULL,
  `no_of_farmers` int(10) NOT NULL,
  `org_background` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producer_details`
--

INSERT INTO `producer_details` (`id`, `producer_id`, `founded_in`, `founded_since`, `producer_profile`, `fairtrade_impact`, `organization`, `service`, `faircertsince`, `no_of_farmers`, `org_background`) VALUES
(1, 31, 'Labore libero labore magnam qui ipsum ipsum sed et', 'Rerum non in vero qui itaque cupidatat adipisicing', 'Maiores dicta itaque molestiae alias aut neque ali', 'Fugiat non velit ape', 'Nieves and Webster Inc', 'Cillum excepteur non quia quo reiciendis tempore', 23, 23, 'Aute et nemo atque a'),
(2, 13, '323', '2323', 'Est ut omnis vel tempore rerum', 'Iure non eos soluta ', 'Home', 'Ut aliqua Sit tempora doloremque irure veniam co', 88, 8, 'Tempor aliquam aliqua Velit animi esse aut ut id quisquam et sunt dolor'),
(4, 17, 'Rerum mollitia et anim corporis sunt in ea', 'Minima iste autem nostrud et eum quia quas ex fugi', 'uploads/producerprofile/5dbd55d6ad4ef.png', 'Explicabo Qui amet', 'Grimes and Bender Plc', 'Assumenda blanditiis illo dolor reiciendis volupta', 2, 2, 'Consequatur sit soluta facere distinctio Sit elit aute consequuntur minus sint enim ea ut cumque iusto'),
(6, 32, '12', '12', 'frontend/web/producerprofile/5dc3e10e43ab6.jpg', '212', 'rgr', 'twrt', 23, 34, 'sf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `variety` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `specification` text NOT NULL,
  `volume` varchar(100) NOT NULL,
  `harvesting_period` varchar(150) NOT NULL,
  `region_grown` varchar(150) DEFAULT NULL,
  `processing` varchar(150) DEFAULT NULL,
  `texture` varchar(150) DEFAULT NULL,
  `flavour` varchar(150) DEFAULT NULL,
  `organic` varchar(150) DEFAULT NULL,
  `organic_certification` varchar(150) DEFAULT NULL,
  `delievary_time` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 0 COMMENT '1 deleted',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 pending 1 approved 2 rejected',
  `approved_by` int(11) DEFAULT NULL,
  `approved_at` datetime DEFAULT NULL,
  `annual_volume` varchar(150) DEFAULT NULL,
  `altitude` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category_id`, `subcategory_id`, `variety`, `description`, `specification`, `volume`, `harvesting_period`, `region_grown`, `processing`, `texture`, `flavour`, `organic`, `organic_certification`, `delievary_time`, `created_by`, `created_at`, `updated_at`, `delete_status`, `status`, `approved_by`, `approved_at`, `annual_volume`, `altitude`) VALUES
(1, 'Coffee Samples', 1, 4, 'rain.mountain,etc', 'Coffee Samples are collected from Mountains', 'special specification about coffee is it is natural', '1000 kg', 'JUNE TO AUGEST', 'Nilagiri', 'Finetuned', 'white', 'chocholate', 'yes', NULL, 'as soon as order', 31, '2019-11-06 09:56:42', '0000-00-00 00:00:00', 0, 1, 3, '2019-11-05 00:00:00', '1000 pounds', 'very high'),
(2, 'green tea', 2, 4, 'ayurvedic', 'made from best tea leaves', 'healthy,tasty', '1000kg', 'MAY-JULY', 'OOTY', 'fine tuned', 'green', 'tea', 'yes', 'ISO 3000', '3 to 4 days from order', 32, '2019-11-14 05:02:28', '0000-00-00 00:00:00', 0, 1, 3, '2019-11-14 10:06:05', '1000kg', 'HIGH'),
(3, 'china tea', 2, 4, 'ayurvedic', 'made from best tea leaves', 'healthy,tasty', '1000kg', 'MAY-JULY', 'OOTY', 'fine tuned', 'green', 'tea', 'yes', 'ISO 3000', '3 to 4 days from order', 32, '2019-11-14 05:02:50', '0000-00-00 00:00:00', 0, 1, 3, '2019-11-14 10:06:05', '1000kg', 'HIGH'),
(6, 'Arabic coffee', 1, 4, 'Arabic coffee', 'coffee beans from Arabia', 'good quality coffee', '100g', 'june to august', 'Arabia', 'fully processed', 'fine grinded', 'coffee', 'yes', 'ISO 3000', 'ASAP', 32, '2019-11-29 05:36:22', NULL, 0, 1, NULL, NULL, '400kg', 'high'),
(8, 'sugar cane', 1, 4, 'sugar', 'sugar', 'sugar', '100g', 'june to august', 'Arabia', 'fully processed', 'fine grinded', 'sweet', 'yes', 'ISO 3000', 'ASAP', 31, '2019-11-29 10:09:36', NULL, 0, 1, NULL, NULL, '400kg', 'high');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 0 COMMENT '0-active,1-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image_name`, `product_id`, `delete_status`) VALUES
(1, 'frontend/web/img/product/5de0ae565afb7.jpg', 6, 0),
(2, 'frontend/web/img/product/5de0ae5659be7.jpg', 6, 0),
(3, 'frontend/web/img/product/5de0ae5660986.jpg', 6, 0),
(4, 'frontend/web/img/product/5de0ae5661d45.jpg', 6, 0),
(5, 'admin/uploads/productimage/5de0ee60b935c.jpg', 8, 0),
(6, 'admin/uploads/productimage/5de0ee60ba5b9.jpg', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_updates`
--

CREATE TABLE `product_updates` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `variety` varchar(150) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `volume` varchar(150) DEFAULT NULL,
  `harvesting_period` varchar(150) DEFAULT NULL,
  `region_grown` varchar(150) DEFAULT NULL,
  `processing` varchar(150) DEFAULT NULL,
  `texture` varchar(150) DEFAULT NULL,
  `flavour` varchar(150) DEFAULT NULL,
  `delievary_time` varchar(150) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved_at` datetime NOT NULL,
  `approved_ by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 pending 1 approved 2 rejected'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(20) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `slug`, `description`) VALUES
(1, 'Admin', 'admin', NULL),
(2, 'Producers', 'producers', NULL),
(3, 'Users', 'users', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_type`
--

CREATE TABLE `role_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT 0 COMMENT '1 Deleted '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_type`
--

INSERT INTO `role_type` (`id`, `type_name`, `role_id`, `delete_status`) VALUES
(1, 'Fairtrade Producers', 2, 0),
(2, 'Fairtrade International', 3, 0),
(3, 'National Fairtrade Organization /Fairtrade Marketing Organizations', 3, 0),
(4, 'Fairtrade Buyers', 3, 0),
(5, 'Fairtrade Traders\r\n', 3, 0),
(6, 'Fairtrade Producer Networks', 3, 0),
(7, 'Non- Fairtrade Buyers/ Traders', 3, 0),
(8, 'Others ( Press, Donors, Media, Journalist, Consumers etc)', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategoryname` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'default.png',
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategoryname`, `image`, `description`, `category_id`) VALUES
(4, 'Arabica', 'uploads/subcategory/5dbbd31bcab84.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `country_id` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `flocertid` varchar(30) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL,
  `typeid` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL COMMENT 'store who creates the account',
  `delete_status` int(11) NOT NULL COMMENT '1 Deleted',
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0 waiting for approvel1 approved 2 rejected ',
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` int(255) NOT NULL,
  `verification_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `designation`, `country_id`, `email`, `mobile`, `flocertid`, `password`, `roleid`, `typeid`, `created_at`, `updated_at`, `created_by`, `delete_status`, `status`, `auth_key`, `password_hash`, `password_reset_token`, `verification_token`) VALUES
(3, '', NULL, 'bhaghya', '', 1, 'bhaghyasandar@xmediasolution.com', NULL, NULL, '', 1, NULL, 1572512447, 1572512447, 0, 0, 1, 'Oec4-JlTXx1173OMi2-Ep4_diL0zalN-', '$2y$13$562FNtvccprXYlGfZlWQPuM9vXZyTQ6eTXa1AaGTO5psT5b3MlpWO', 0, 'lV9XTOArTReYx4dsXWnaZRosfW3a2u-7_1572512447'),
(12, 'Zenaida', 'Pratt', 'masadeg', 'Ducimus impedit et dolorem d', 1, 'lofamowut@mailinator.com', 23, 'Voluptatem fugiat a dolores do', 'Pa$$w0rd!', 2, 1, 1572679547, 0, 3, 0, 1, '', '', 0, ''),
(13, 'Aquapurifier', 'sandar', 'xesipinito', 'Aut irure consectetur consequ', 100, 'bhaghyasandar2@xmediasolution.com', 2329316116, 'Dignissimos et dolorem deserun', 'Pa$$w0rd!', 2, 1, 1572683860, 0, 3, 0, 1, '', '', 0, ''),
(17, 'Orla', 'Fletcher', 'rykiz', 'Corporis blanditiis est tempo', 1, 'tuwyb@mailinator.net', 24, 'Pariatur Nisi ducimus eligen', 'Pa$$w0rd!', 2, 1, 1572688028, 1572691371, 3, 0, 1, '', '', 0, ''),
(18, 'Lee', 'Byers', 'sinoqy', 'Nostrum fugiat omnis alias hic', 1, 'linixynil@mailinator.com', 889, '', 'Pa$$w0rd!', 3, 8, 1572946170, 0, 3, 0, 2, 'USW5qwXwY3RzlWJ4UXjuyHaF8zLKouhd', '$2y$13$CeZ3l3lyHNz0H..suh/S7OwkprRMhuLAmeAo3Nc9xPeASl7HSF8jm', 0, 'lV9XTOArTReYx4dsXWnaZRosfW3a2u-7_1572512447'),
(19, 'Laurel', 'Duffy', 'tutevuxe', 'Quis eiusmod ea placeat iusto', 1, 'loneg@mailinator.com', 2322, 'Amet voluptates est possimus v', 'Pa$$w0rd!', 3, 8, 1572946217, 0, 3, 0, 2, '8KlEIUeEFG23BJGLaW_mFMjd64e2Ir_H', '$2y$13$UhwRjCSCYsz/9f4VqsgdlO1NZfVhXuUJVy7DK4FnHyul12IWrLX1m', 0, ''),
(21, 'Amir', 'Colon', 'kabufawyc', 'Incididunt magna consequatur A', 1, 'nywawob@mailinator.com', 5, '1212', 'Pa$$w0rd!', 3, 8, 1572946314, 0, 3, 0, 1, '6YZgiRNWV4ottLoWiM7RPRyoQMM2Krrw', '$2y$13$jTNyd7GLNd53RRApZ054xumBFEu2lAsFtm.EknB6/T/lEnL6ld./K', 0, ''),
(24, 'Samson', 'Evans', 'bytes', 'Est sint aut itaque dolor beat', 1, 'vazawapo@mailinator.com', 34, '', 'Pa$$w0rd!', 3, 8, 1572947102, 0, 3, 0, 2, 'k-9zM7FPtQxLIabi-K8FDPgNy2UUpq7g', '$2y$13$rle9AUMs5fyDRmL6AYV5qeqxyQdGyXqDBtYwrzsMi5ePlEVKoA6la', 0, ''),
(25, 'Echo', 'Hinton', 'zaroz', 'Esse veniam ex officia quam qu', 6, 'fivyby@mailinator.com', 445, 'wer', 'Pa$$w0rd!', 3, 2, 1572947454, 0, 3, 0, 1, 'y5aid5CtKNXv-kvNW80qHdiINkCCBCoM', '$2y$13$cXUq5MCfUKh3W/gRNNdxF.D98gkPe11mJpxp4Wh2TvIWemo01L5vy', 0, ''),
(26, 'Ivana', 'Hughes', 'tugod', 'Esse qui qui dignissimos ad hi', 1, 'cyjo@mailinator.net', 78, 'Possimus officiis sunt labore ', 'Pa$$w0rd!', 3, 3, 1572947481, 0, 3, 0, 1, 'tirNPLVH2be4ot2usX1XbQqrFHSQWLXD', '$2y$13$Pya5iZzt9u0ohe0OEw3zqOILtcNuaXcvzM/ny7qzKvdVpQCy6sIUq', 0, ''),
(27, 'Cameran', 'Craig', 'kikyma', 'Qui commodi et ex architecto i', 1, 'jyhemag@mailinator.com', 2323, 'Autem provident culpa est volu', 'chennai01', 3, 2, 1572958820, 0, 3, 0, 1, '6TJJcvFD2p6e0_R-fP5KkIzjVqsjCp7P', '$2y$13$4Mxu710sVCQ2Qv.k7JYnNeGL9649wITDya9zBh5oHRsBu5pjvnCFC', 0, ''),
(28, 'Winifred', 'Browning', 'pygomuk', 'Elit elit recusandae Conseq', 59, 'temonom@mailinator.com', 32323, 'pygomuk', 'Pa$$w0rd!', 3, 5, 1572959110, 0, 0, 0, 1, 'dnoMdMBW5hWLZZgPbxkuv_pF7z0MzwGN', '$2y$13$K8RWHGIIf9gAi5Kz1P1LLeoAuefZ7EhZNXgdmnJnD87331T05dqXa', 0, ''),
(29, 'Hakeem', 'Harvey', 'waqizuhule', 'Vitae illum voluptatem Hic d', 49, 'dozo@mailinator.com', 3232, 'yty', 'Pa$$w0rd!', 2, 1, 1572959503, 0, 0, 0, 1, 'UZSFv6-orug7NHKITq07cCAY-U3cLYBb', '$2y$13$0zXwoQX9GJyzw/e9usq2quu15wZPulSF53rW97YvK7TBAn5JsaRyu', 0, ''),
(30, 'Astra', 'Donovan', 'xyreda', 'Iusto voluptatem Laboris dolo', 109, 'gubyfylara@mailinator.com', 2323323, 'as', 'xyreda', 3, 2, 1572959636, 0, 0, 0, 1, 'QZb0DiW0UDQoCIYl3MyrilIaV0d7VWyJ', '$2y$13$.9vpjhNoZ4JPg0tRfxHE9ejAfbmyTfovDQFyEVqctrWYY5q.hB0dy', 0, ''),
(31, 'bhaghya', 'sandar', 'bhaghyasandar', 'Developer', 100, 'bhaghyasandar@xmedia.in', 95030030303, '1928127', 'chennai01', 2, 1, 1573019320, 0, 0, 0, 1, 'QzX8qdc1OkLVxSRR2oeUoLqtJP1u-zEP', '$2y$13$xWahVCEcw91sTE0mgsPP8.k0x17A4l5OILUL3jOdqgSvyDy699cfW', 0, ''),
(32, 'karthik', 'karthik', 'karthik', 'Developer', 100, 'pkarthik@xmediasolution.com', 7456645698, 'etyety', 'chennai01', 2, 1, 1573036477, 1573627593, 0, 0, 1, 'dmRTFOiEpuUIetNe5M3CWv81OcbkiMij', '$2y$13$E9WSZoi/2p94TyWY3TvSMeSVsR1Af2SNULz3zkDEPqpZlN5jthHP2', 0, ''),
(33, 'Muthu', 'kumar', 'muthu', 'Team Leader', 100, 'muthu@xbs.in', 7418076479, '', 'chennai01', 3, 8, 1573909096, 0, 0, 0, 0, 'w9H0gtpHkjupb1FuAo1AG_THIPmwkm60', '$2y$13$CeZ3l3lyHNz0H..suh/S7OwkprRMhuLAmeAo3Nc9xPeASl7HSF8jm', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user_profileupdate`
--

CREATE TABLE `user_profileupdate` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(150) DEFAULT NULL,
  `lastname` varchar(150) DEFAULT NULL,
  `designiation` varchar(150) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `emailid` varchar(150) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `approved_at` bigint(15) DEFAULT NULL,
  `status` int(11) NOT NULL COMMENT '0 pending 1 approved 2 rejected',
  `approved_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profileupdate`
--

INSERT INTO `user_profileupdate` (`id`, `user_id`, `firstname`, `lastname`, `designiation`, `mobile`, `emailid`, `password`, `requested_at`, `approved_at`, `status`, `approved_by`) VALUES
(4, 32, 'karthik', 'karthik', 'test', 9548756958, 'pkarthik@xmediasolution.com', NULL, '2019-11-13 05:08:51', 1573626165, 1, 3),
(5, 32, 'karthik', 'karthik', 'test', 7456645698, 'pkarthik@xmediasolution.com', 'chennai01', '2019-11-13 06:30:40', 1573627594, 1, 3),
(6, 32, 'karthik', 'karthik', 'test', 7456645698, 'pkarthik@xmediasolution.com', NULL, '2019-11-13 06:47:40', 1573628827, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquirymasters`
--
ALTER TABLE `enquirymasters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`),
  ADD KEY `from_id` (`from_id`),
  ADD KEY `to_id` (`to_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `producerimage`
--
ALTER TABLE `producerimage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer_id` (`producer_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `producerimage_types`
--
ALTER TABLE `producerimage_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producervideo`
--
ALTER TABLE `producervideo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producer_id` (`producer_id`);

--
-- Indexes for table `producer_details`
--
ALTER TABLE `producer_details`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `producer_id` (`producer_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `approved_by` (`approved_by`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `subcategory_id` (`subcategory_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productimgfk` (`product_id`);

--
-- Indexes for table `product_updates`
--
ALTER TABLE `product_updates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `approved_ by` (`approved_ by`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `role_type`
--
ALTER TABLE `role_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `roleid` (`roleid`),
  ADD KEY `typeid` (`typeid`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `user_profileupdate`
--
ALTER TABLE `user_profileupdate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `approved_by` (`approved_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `enquirymasters`
--
ALTER TABLE `enquirymasters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `producerimage`
--
ALTER TABLE `producerimage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `producerimage_types`
--
ALTER TABLE `producerimage_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `producervideo`
--
ALTER TABLE `producervideo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `producer_details`
--
ALTER TABLE `producer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_updates`
--
ALTER TABLE `product_updates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_type`
--
ALTER TABLE `role_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_profileupdate`
--
ALTER TABLE `user_profileupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `inbox`
--
ALTER TABLE `inbox`
  ADD CONSTRAINT `inbox_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `inbox_ibfk_2` FOREIGN KEY (`from_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `inbox_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `inbox_ibfk_4` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`),
  ADD CONSTRAINT `inbox_ibfk_5` FOREIGN KEY (`to_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `producerimage`
--
ALTER TABLE `producerimage`
  ADD CONSTRAINT `producerimage_ibfk_1` FOREIGN KEY (`producer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producerimage_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `producerimage_types` (`id`);

--
-- Constraints for table `producervideo`
--
ALTER TABLE `producervideo`
  ADD CONSTRAINT `producervideo_ibfk_1` FOREIGN KEY (`producer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `producer_details`
--
ALTER TABLE `producer_details`
  ADD CONSTRAINT `producer_details_ibfk_1` FOREIGN KEY (`producer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `con1` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `con2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `con3` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `con4` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `productimgfk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_updates`
--
ALTER TABLE `product_updates`
  ADD CONSTRAINT `product_updates_ibfk_1` FOREIGN KEY (`approved_ by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_updates_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_updates_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_type`
--
ALTER TABLE `role_type`
  ADD CONSTRAINT `role_type_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`roleid`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`typeid`) REFERENCES `role_type` (`id`);

--
-- Constraints for table `user_profileupdate`
--
ALTER TABLE `user_profileupdate`
  ADD CONSTRAINT `user_profileupdate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_profileupdate_ibfk_2` FOREIGN KEY (`approved_by`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
