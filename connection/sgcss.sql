-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 13, 2022 at 01:22 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sgcss`
--

-- --------------------------------------------------------

--
-- Table structure for table `abroadpeople`
--

DROP TABLE IF EXISTS `abroadpeople`;
CREATE TABLE IF NOT EXISTS `abroadpeople` (
  `ab_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `ab_year` date NOT NULL,
  PRIMARY KEY (`ab_id`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `abroadpeople`
--

INSERT INTO `abroadpeople` (`ab_id`, `h_no`, `full_name`, `nic`, `country`, `course`, `ab_year`) VALUES
(1, '333', 'MAHESH SATHSARA', '876664401V', 'AMERICA', 'Designer', '2021-12-14'),
(3, '145', 'KASUN KUMARA', '940846521V', 'AUSTRALIA', 'Accountant', '2020-10-21'),
(4, '135', 'RAMESH KUMARA', '784567872V', 'FDASFASDVFAS', 'dasvasdvgsad', '2021-12-14'),
(5, '123', 'CHINTHAKA SANDARUWAN', '958135672V', 'AUSTRALIA', 'Web Developer', '2020-12-23'),
(6, '128', 'DINESH MADUSANKA', '958317652V', 'AMERICA', 'Backend Developer', '2020-11-10'),
(7, '128', 'SUDESH MENAKA', '884572165V', 'CANADA', 'technition', '2019-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1500) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  `acceptance` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `view` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `Fkey` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `phone`, `category`, `text`, `date_time`, `acceptance`, `view`) VALUES
(6, 13, '770311660', 'à¶´à·à¶¸à·’à¶«à·“à¶¸ à·ƒà·„ à¶´à·’à¶§à·€à·“à¶¸', 'sample', '2021-11-18 07:14:28', 'accepted', 1),
(7, 44, '760870490', 'à¶´à·à¶¸à·’à¶«à·“à¶¸ à·ƒà·„ à¶´à·’à¶§à·€à·“à¶¸', 'test', '2021-12-17 14:00:00', 'accepted', 1),
(8, 21, '771498257', 'à¶…à·€à·ƒà¶»à¶´à¶­à·Šâ€à¶» à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', 'sample', '2021-11-18 03:14:29', 'rejected', 1),
(9, 18, '774796532', 'à¶‰à¶©à¶¸à·Š à¶´à·’à·…à·’à¶¶à¶¯ à¶šà¶»à·”à¶«à·”', 'this is the first appointmnet', '2021-11-27 14:00:00', 'accepted', 1),
(10, 23, '118732678', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', '', '2021-11-25 10:00:00', 'rejected', 0),
(11, 13, '118724695', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', 'this is the sample appointment', '2021-11-30 11:10:07', 'rejected', 1),
(12, 13, '118724695', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', 'this is the sample appointment', '2021-11-25 09:00:00', 'rejected', 1),
(13, 13, '775468965', 'à¶…à·€à·ƒà¶»à¶´à¶­à·Šâ€à¶» à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', 'sample text', '2021-11-23 12:00:00', 'accepted', 1),
(14, 13, '444511565', 'à¶´à·à¶¸à·’à¶«à·“à¶¸ à·ƒà·„ à¶´à·’à¶§à·€à·“à¶¸', 'sample appointment', '2021-12-15 14:00:00', 'accepted', 1),
(15, 13, '770468254', 'à¶ à¶»à·’à¶­ à·ƒà·„à¶­à·’à¶š/ à¶´à¶¯à·’à¶‚à¶ à·’ à·ƒà·„à¶­à·’à¶š à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', 'second appointment', '2021-11-23 13:00:00', 'accepted', 1),
(16, 21, '774856786', 'à¶‰à¶©à¶¸à·Š à¶´à·’à·…à·’à¶¶à¶¯ à¶šà¶»à·”à¶«à·”', 'sample text', '2021-11-25 12:00:00', 'rejected', 0),
(17, 44, '770946582', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', 'sample appointment', '2021-11-30 12:00:00', 'accepted', 1),
(18, 13, '765279586', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', '', '2021-12-30 11:00:00', 'accepted', 1),
(19, 44, '772585758', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', '', '2022-01-18 11:00:00', 'accepted', 1),
(20, 44, '784395872', 'à¶‰à¶©à¶¸à·Š à¶´à·’à·…à·’à¶¶à¶¯ à¶šà¶»à·”à¶«à·”', 'get some information of my land', '2022-01-15 14:00:00', 'accepted', 1),
(21, 44, '784395872', 'à¶‰à¶©à¶¸à·Š à¶´à·’à·…à·’à¶¶à¶¯ à¶šà¶»à·”à¶«à·”', 'get some information of my land', '2022-01-15 14:00:00', 'rejected', 1),
(22, 44, '112858981', 'à¶…à·€à·ƒà¶»à¶´à¶­à·Šâ€à¶» à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', '', '2021-12-30 10:00:00', 'rejected', 1),
(23, 44, '778778952', 'à¶…à·€à·ƒà¶»à¶´à¶­à·Šâ€à¶» à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', '', '2021-12-30 10:00:00', 'rejected', 1),
(24, 46, '0770511660', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', '', '2022-01-27 15:00:00', 'accepted', 1),
(25, 13, '0770384568', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', 'sample', '2022-01-18 14:00:00', 'accepted', 1),
(26, 13, '0760435289', 'à¶…à·€à·ƒà¶»à¶´à¶­à·Šâ€à¶» à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', 'sample appointmemnt', '2022-01-20 13:00:00', 'accepted', 1),
(27, 13, '0770311660', 'à¶ à¶»à·’à¶­ à·ƒà·„à¶­à·’à¶š/ à¶´à¶¯à·’à¶‚à¶ à·’ à·ƒà·„à¶­à·’à¶š à¶½à¶¶à·à¶œà·à¶±à·“à¶¸ à·ƒà¶¯à·„', 'this is the sample appointmnet', '2022-01-20 13:00:00', 'rejected', 1),
(28, 51, '0763819316', 'à·€à·Šâ€à¶ºà·à¶´à¶» à¶½à·’à¶ºà·à¶´à¶¯à·’à¶‚à¶ à·’à¶šà·’à¶»à·“à¶¸ à·ƒà¶¯à·„à·', '', '2022-01-18 13:00:00', 'accepted', 1);

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `id` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `status`) VALUES
(2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `comp_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `phone` int(10) NOT NULL,
  `complain_text` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`comp_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`comp_id`, `user_id`, `phone`, `complain_text`, `date`) VALUES
(1, 13, 774652184, 'fgsdgsdgsdgsgd', '2021-11-21 22:42:20'),
(2, 13, 774652184, 'fgsdgsdgsdgsgd', '2021-11-22 12:38:03'),
(3, 13, 772579563, 'sample complain', '2021-11-11 12:39:35'),
(4, 44, 117854236, 'this is the first complain', '2021-11-22 17:17:47'),
(5, 18, 771358468, 'nest complain', '2021-11-22 17:19:00'),
(6, 13, 770311660, 'this is the sample complain', '2022-01-10 13:54:02'),
(7, 51, 763819316, 'This is the complain', '2022-01-11 10:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `cultivate_land`
--

DROP TABLE IF EXISTS `cultivate_land`;
CREATE TABLE IF NOT EXISTS `cultivate_land` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owner_name` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `land_name` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `l_number` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `cultivation` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `land_size` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `l_number` (`l_number`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cultivate_land`
--

INSERT INTO `cultivate_land` (`c_id`, `h_no`, `owner_name`, `nic`, `land_name`, `l_number`, `cultivation`, `land_size`) VALUES
(1, '145', 'SAMAN KUMARA', '895467552V', 'SAMAN KUMARA LAND', 'LD524564654155465', 'à¶­à·š', '120PERCH'),
(2, '172', 'SAMPATH WEERASINGHE', '724806532V', 'WEERASIGHE LAND', 'LP27693152', 'à·€à·™à¶±à¶­à·Š à·€à¶œà·', '50 PERCH');

-- --------------------------------------------------------

--
-- Table structure for table `death_list`
--

DROP TABLE IF EXISTS `death_list`;
CREATE TABLE IF NOT EXISTS `death_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `d_date` date NOT NULL,
  `d_place` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `h_address` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `d_age` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `d_reason` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  `info_name` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `info_address` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `death_list`
--

INSERT INTO `death_list` (`id`, `h_no`, `d_date`, `d_place`, `h_address`, `full_name`, `gender`, `d_age`, `nic`, `job`, `d_reason`, `info_name`, `info_address`) VALUES
(1, '425', '2021-04-28', 'AT HOSTPITAL', 'vadvadsvadv', 'vavadva', 'à¶´à·”à¶»à·”à·‚', '72', '481650176V', 'svsdvsbns', 'ngdjnyjf', 'acacav', 'vdasvdashbfh'),
(2, '258', '2022-01-02', 'jvjascjhb', 'jbjkbkvjbascn m,a', 'jlvjsdvnbjlsnbvljnbsa', 'à¶´à·”à¶»à·”à·‚', 'kjhvbgshvgshv', '528160459V', 'avckjbavcavc', 'vaadhthjdhn', 'favcfazvcz', 'hfdsbedrfafaszv'),
(3, '231', '2021-12-12', 'ascavav', 'vavavafad', 'cazcafafad', 'à·ƒà·Šà¶­à·Šâ€à¶»à·“', 'vdasvasva', '617508462X', 'vsdavsdvsv', 'vsvsvszv', 'vbsgbsvbs', 'svvssgsvs'),
(4, '183', '2021-11-09', 'à¶±à·’à·€à·ƒ à¶­à·”à·…à¶¯à·“', '183/B,PINNAWALA,WAGA', 'HEMANTHA PERERA', 'à¶´à·”à¶»à·”à·‚', '53', '685375196V', 'Teaching', 'Cancer', 'SAMAN KUMARARATHNE', '183/B,PINNAWALA,WAGA');

-- --------------------------------------------------------

--
-- Table structure for table `edu_people`
--

DROP TABLE IF EXISTS `edu_people`;
CREATE TABLE IF NOT EXISTS `edu_people` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `edu_people`
--

INSERT INTO `edu_people` (`id`, `h_no`, `fullname`, `nic`, `course`, `duration`) VALUES
(1, '144', 'RAMESH BANDARA', '947804693V', 'AUTOCAD', '3 YEAR'),
(2, '133', 'SANDUN PUSHPAKUMARA', '972807653V', 'Graphic Design', '6 MONTHS'),
(3, '151', 'PASAN KODITHUWAKKU', '894504762V', 'Automobile', '4 YEAR'),
(4, '144', 'SANDUN MADUSANKA', '982105786V', 'Graphic design', '6 MONTHS');

-- --------------------------------------------------------

--
-- Table structure for table `home_animal`
--

DROP TABLE IF EXISTS `home_animal`;
CREATE TABLE IF NOT EXISTS `home_animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ani_type` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `ani_count` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `h_no` (`h_no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_animal`
--

INSERT INTO `home_animal` (`id`, `h_no`, `ani_type`, `ani_count`) VALUES
(2, '125', 'DOG', '2 DOGE'),
(4, '144', 'GOAT', '20 GOAT');

-- --------------------------------------------------------

--
-- Table structure for table `home_info`
--

DROP TABLE IF EXISTS `home_info`;
CREATE TABLE IF NOT EXISTS `home_info` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `h_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `wall_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `floor_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `roof_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `current_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `water_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `toilet_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tel_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`h_id`),
  UNIQUE KEY `h_no` (`h_no`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_info`
--

INSERT INTO `home_info` (`h_id`, `h_no`, `h_type`, `wall_type`, `floor_type`, `roof_type`, `current_type`, `water_type`, `toilet_type`, `tel_type`, `phone`) VALUES
(1, '122', 'à¶­à¶±à·’à¶¸à·„à¶½à·Š', 'à·ƒà·’à¶¸à·™à¶±à·Šà¶­à·’', 'à·ƒà·’à¶¸à·™à¶±à·Šà¶­à·’', 'à¶‡à·ƒà·Šà¶¶à·à·ƒà·Šà¶§à·œà·ƒà·Š', 'à¶‡à¶­', 'à·…à·’à¶¯', 'à¶¢à¶½à¶¸à·”à¶¯à·Šà¶»à·’à¶­', 'à¶‡à¶­', '0112858788'),
(4, '135', 'à¶­à·™à¶¸à·„à¶½à·Š', 'à¶¸à·à¶§à·’', 'à¶§à¶ºà·’à¶½à·Š', 'à¶§à¶šà¶»à¶±à·Š', 'à¶±à·à¶­', 'à¶±à¶½à¶¢à¶½à¶º', 'à¶¢à¶½à¶¸à·”à¶¯à·Šà¶»à·’à¶­', 'à¶±à·à¶­', '0118795325'),
(5, '153', 'à¶­à¶±à·’à¶¸à·„à¶½à·Š', 'à·ƒà·’à¶¸à·™à¶±à·Šà¶­à·’', 'à¶§à¶ºà·’à¶½à·Š', 'à¶‡à·ƒà·Šà¶¶à·à·ƒà·Šà¶§à·œà·ƒà·Š', 'à¶‡à¶­', 'à¶´à·œà¶¯à·” à·…à·’à¶¯', 'à¶¢à¶½à¶¸à·”à¶¯à·Šà¶»à·’à¶­', 'à¶‡à¶­', '0118465320');

-- --------------------------------------------------------

--
-- Table structure for table `home_land`
--

DROP TABLE IF EXISTS `home_land`;
CREATE TABLE IF NOT EXISTS `home_land` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `owner_name` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(450) COLLATE utf8_unicode_ci NOT NULL,
  `l_size` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `l_office` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `l_number` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `l_authoffice` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`l_id`),
  UNIQUE KEY `h_no` (`h_no`),
  UNIQUE KEY `l_number` (`l_number`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_land`
--

INSERT INTO `home_land` (`l_id`, `h_no`, `owner_name`, `l_name`, `l_size`, `l_office`, `l_number`, `l_authoffice`) VALUES
(1, '135', 'SURESH KUMARA', 'RAJAGAHAUYANA LAND', '25PERCH', 'GOVERNMENT OFFICE', 'L89546257855', 'à¶±à·’à·€à·à·ƒ à¶…à¶°à·’à¶šà·à¶»à·’à¶º'),
(2, '127', 'KASUN MADURANGA', 'KASUN LAND', '50 PERCH', 'GOVERNMENT OFFICE', 'L564654', 'à¶‰à¶©à¶¸à·Š à¶´à·Šâ€à¶»à¶­à·’à·ƒà·ƒà·Šà¶šà¶»à¶± à¶šà·œà¶¸à·’à·ƒà¶¸à·Š à·ƒà¶·à·à·€'),
(3, '163', 'RAMESH MADARA', 'JAYASINGHE LAND', '65 PERCH', 'GOVERNMENT OFFICE', 'LP27695135', 'à¶±à·’à·€à·à·ƒ à¶…à¶°à·’à¶šà·à¶»à·’à¶º');

-- --------------------------------------------------------

--
-- Table structure for table `infirmpeople`
--

DROP TABLE IF EXISTS `infirmpeople`;
CREATE TABLE IF NOT EXISTS `infirmpeople` (
  `inf_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `inf_date` date NOT NULL,
  PRIMARY KEY (`inf_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infirmpeople`
--

INSERT INTO `infirmpeople` (`inf_id`, `h_no`, `full_name`, `nic`, `reason`, `inf_date`) VALUES
(1, '134', 'KUMARA GUNATHILAKA', '907521345V', 'Accident', '2019-07-16'),
(2, '131', 'SISIRA KUMARA', '917854632V', 'accident', '2021-12-01'),
(3, '128', 'LAKSHMAN KUMARA', '817654823V', 'accident', '2021-12-15'),
(4, '124', 'NIMESHA KUMARI', '908134657V', 'paralice', '2021-12-08'),
(5, '135', 'MALKANTHI KUMARI', '785428763V', 'paralice', '2020-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `head` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `body` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'notice',
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head`, `body`, `category`, `date_time`) VALUES
(5, 'This is the job news', 'Repudiandae impedit nihil est consectetur modi in id reprehenderit magni vitae suscipit non magna perspiciatis', 'Job', '2021-09-24 06:34:28'),
(7, 'sample news', 'this is the sample news publish for villagers', 'Notice', '2022-01-09 06:43:42'),
(8, 'sample news 02', 'this is the sample news publish for villagers', 'Notice', '2022-01-09 06:54:00'),
(9, 'job news 2', 'sample job news publish for villagers', 'Notice', '2022-01-09 06:55:18'),
(11, 'sample news 03', 'this is the sample news', 'Notice', '2022-01-10 13:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE IF NOT EXISTS `personal_details` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `spouse` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `edu` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `job_place` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `edu_grade` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`p_id`),
  UNIQUE KEY `nic` (`nic`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`p_id`, `h_no`, `address`, `full_name`, `gender`, `nation`, `religion`, `dob`, `nic`, `status`, `spouse`, `edu`, `job`, `job_place`, `edu_grade`) VALUES
(1, '122', '122/A, PINNWALA, WAGA.', 'Isuru Kalubowila', 'à¶´à·”à¶»à·”à·‚', 'à·ƒà·’à¶‚à·„à¶½', 'à¶¶à·”à¶¯à·Šà¶°à·à¶œà¶¸', '1994-04-08', '942854563V', 'à¶…à·€à·’à·€à·à·„à¶šà¶ºà·’', '', 'à¶‹à·ƒà·ƒà·Šà¶´à·™à·… à·ƒà¶¸à¶­à·Š', 'teacher', '', ''),
(5, '125', '125/C, Pinnawala,Waga', 'à¶¸à·šà¶±à¶šà· à¶šà¶»à·”à¶±à·à¶»à¶­à·Šà¶±', 'à·ƒà·Šà¶­à·Šâ€à¶»à·“', 'à¶¯à·™à¶¸à·…', 'à·„à·’à¶‚à¶¯à·” à¶†à¶œà¶¸', '1997-10-12', '974254746X', 'à¶…à·€à·’à·€à·à·„à¶šà¶ºà·’', '', 'à¶‹à¶´à·à¶°à·’à¶°à·à¶»à·’', 'Teaching', '', ''),
(6, '132', '132/A,Pinnawala,Waga', 'à¶»à¶‚à¶œ à¶šà·”à¶¸à·à¶»à·ƒà·’à¶‚à·„', 'à¶´à·”à¶»à·”à·‚', 'à¶¯à·™à¶¸à·…', 'à¶šà·Šâ€à¶»à·’à·ƒà·Šà¶­à·’à¶ºà·à¶±à·’ à¶†à¶œà¶¸', '2007-04-13', '669134657V', 'à·€à·’à·€à·à·„à¶šà¶ºà·’', 'à·€à·’à¶±à·Šà¶¯à·’ à¶šà·”à¶¸à·à¶»à·’', 'à¶‹à·ƒà·ƒà·Šà¶´à·™à·… à·ƒà¶¸à¶­à·Š', 'à¶šà·…à¶¸à¶«à·à¶šà¶»à·”', 'Orange corporation', ''),
(8, '115', '115/A,Pinnawla,Waga.', 'MAHESH THEEKSHANA', 'à¶´à·”à¶»à·”à·‚', 'à·ƒà·’à¶‚à·„à¶½', 'à¶¶à·”à¶¯à·Šà¶°à·à¶œà¶¸', '1948-09-18', '977682430V', 'à·€à·à¶±à·Šà¶¯à¶¹à·”', '', 'à·ƒà¶¸à·à¶±à·Šâ€à¶ºà¶´à·™à·…à¶§ à¶…à¶©à·”', '', '', ''),
(9, '122', '122/A,Pinnawala,Waga', 'MANEESHA KALUBOWILA', 'à¶´à·”à¶»à·”à·‚', 'à·ƒà·’à¶‚à·„à¶½', 'à¶¶à·”à¶¯à·Šà¶°à·à¶œà¶¸', '1998-10-17', '982911761V', 'à¶…à·€à·’à·€à·à·„à¶šà¶ºà·’', '', 'à¶‹à·ƒà·ƒà·Šà¶´à·™à·… à·ƒà¶¸à¶­à·Š', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sports_info`
--

DROP TABLE IF EXISTS `sports_info`;
CREATE TABLE IF NOT EXISTS `sports_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `spots` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sports_info`
--

INSERT INTO `sports_info` (`id`, `h_no`, `name`, `spots`) VALUES
(1, '131', 'RAMESH KUMAR', 'cricket'),
(2, '143', 'SADUN MADUSANKA', 'Foot Ball'),
(5, '139', 'KASUN SUDHANTHA KAUSHALYA', 'swimming');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `status` char(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'disable',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_name`, `last_name`, `gender`, `address`, `nic`, `phone`, `email`, `password`, `user_type`, `status`, `date`) VALUES
(13, 'Saman', 'Kurunarathne', 'female', '102/D,Pinnawala,waga', '925865245V', '0117853698', 'saman@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-09-24 02:39:01'),
(15, 'Madhushrini Dewika', 'Wanigathunge', 'Female', '291, Arukwaththa Road, Padukka', '805674682V', '0715510058', 'janith@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'gs', 'enable', '2021-09-24 02:45:35'),
(17, 'Kasun', 'Madusanka', 'Male', 'Molestias ipsum aut qui error deserunt modi at sed nesciunt accusamus sint aliqua Incididunt recusandae Et voluptatum reiciendis', '981348076V', '0770843572', 'charith@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'admin', 'enable', '2021-09-24 03:06:42'),
(18, 'kalum', 'Ariyawansa', 'male', 'Molestias ipsum aut qui error deserunt modi at sed nesciunt accusamus sint aliqua Incididunt recusandae Et voluptatum reiciendis', '982912961V', '0117853698', 'rasodh@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-09-25 03:53:33'),
(21, 'navod', 'kalhara', 'Male', 'walsmulla,matara', '978256384V', '0770890765', 'navod@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-10-29 17:33:05'),
(23, 'lakshan', 'karunadhara', 'Female', 'Rerum sapiente distinctio Atque eum ex maiores soluta quasi aliquid lorem quia autem aute', '199587652458', '0118579652', 'lakshan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-10-29 19:39:36'),
(24, 'Chinthaka', 'Kalhara', 'Male', 'lakshan Karunadhara, kadawatha', '958756842V', '0718457956', 'karunadhara@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'blocked', '2021-10-29 20:00:11'),
(25, 'Aileen', 'Ochoa', 'Male', 'Incidunt aute qui irure ut mollitia quo voluptate nulla obcaecati commodo', '789458214V', '0117845896', 'ridma@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2022-01-08 19:30:00'),
(26, 'Yael', 'Beasley', 'Male', 'Dolorem cumque ut laboriosam perferendis qui a eligendi iste assumenda cumque omnis numquam duis officia voluptatem Quisquam', '985268752V', '0767884067', 'amarasenagcs@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-10-29 20:56:06'),
(27, 'Cyrus', 'Alvarez', 'Male', 'Rerum excepteur veritatis hic in a a minima mollitia fugit dolore totam', '816786524V', '0775267981', 'lakshitha@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 'enable', '2021-11-15 03:09:38'),
(28, 'Irma', 'Terry', 'Male', 'Consequatur Unde reiciendis ut rerum tempora', '942572525V', '0118546895', 'amre@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-11-13 18:30:00'),
(31, 'Stephen', 'Bolton', 'Male', 'Est officiis ut expedita nostrum nostrud consequatur adipisci ad quia aut eum minima quia delectus modi sint dolor eligendi', '987524525V', '0770879652', 'fagesi@mailinator.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'blocked', '2021-11-10 06:50:26'),
(44, 'Maneesha', 'Rasodh', 'male', 'Quas saepe fugiat blanditiis sunt id voluptas', '947581242V', '0770894657', 'maneesharasodh795@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-11-14 18:30:00'),
(46, 'Dhinidhu', 'Heshan', 'Male', '145/C, Pinnawla, Waga.', '199901870367', '0763814507', 'happyworld049@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'disable', '2022-01-05 01:08:54'),
(47, 'acaca', 'cacaca', 'Male', 'vavavav', '199130121652', '0770316589', 'manesh@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'disable', '2022-01-08 07:02:21'),
(48, 'adascd', 'cacac', 'Male', 'vadvdafad', '199408040846', '072365782', 'madhushika@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 'enable', '2022-01-08 07:20:47'),
(49, 'saman', 'satharasinghe', 'male', '321/C, Pinnawala, Waga', '958934628V', '0768246924', 'gchinthakasa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2022-01-08 07:27:47'),
(50, 'Tumanga', 'Nisansala', 'Female', 'Orange', '999999999X', '9999999999', 'orange@orange.orange', '25d55ad283aa400af464c76d713c07ad', 'user', 'disable', '2022-01-11 10:09:33'),
(51, 'Maneesha', 'Kalubowila', 'male', '122/APinnawla,Waga', '982911761V', '0763819317', 'maneeshakalubowila266@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2022-01-11 10:16:09');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

DROP TABLE IF EXISTS `vehicle_info`;
CREATE TABLE IF NOT EXISTS `vehicle_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `h_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `owner` varchar(650) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `vehi_type` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `reg_year` date NOT NULL,
  `made_year` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`id`, `h_no`, `owner`, `nic`, `vehi_type`, `reg_year`, `made_year`) VALUES
(1, '122', 'ISURU KALUBOWILA', '948575235V', 'TOYOTA AQUA', '2020-11-18', '2019-11-19'),
(5, '251', 'LAKSHAN MADUSANKA', '985554525V', 'FORD RANGER RAPTOR', '2021-12-23', '2019-10-15');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `Fkey` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
