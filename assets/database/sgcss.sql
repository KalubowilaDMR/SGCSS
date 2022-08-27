-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2021 at 12:02 AM
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
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE IF NOT EXISTS `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fkey` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

DROP TABLE IF EXISTS `availability`;
CREATE TABLE IF NOT EXISTS `availability` (
  `id` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `status`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE IF NOT EXISTS `complain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nic` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(10) NOT NULL,
  `complain_text` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `head`, `body`, `category`, `date_time`) VALUES
(1, 'This is the Notice 01', 'Est dolor eum qui qui harum voluptatem id eveniet', 'Notice', '2021-09-24 06:26:08'),
(5, 'This is the job news', 'Repudiandae impedit nihil est consectetur modi in id reprehenderit magni vitae suscipit non magna perspiciatis', 'Job', '2021-09-24 06:34:28'),
(6, 'Sit obcaecati ab optio ipsam veniam mollitia ea veritatis officia dolore excepteur nulla voluptate', 'Qui voluptatem nemo magna id iusto nulla cillum eu repellendus Doloribus consequatur', 'Notice', '2021-09-25 01:43:13');

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
  `phone` int(10) NOT NULL,
  `email` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `status` char(7) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'enable',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `first_name`, `last_name`, `gender`, `address`, `nic`, `phone`, `email`, `password`, `user_type`, `status`, `date`) VALUES
(13, 'Ora', 'Powers', 'Male', 'Molestias ipsum aut qui error deserunt modi at sed nesciunt accusamus sint aliqua Incididunt recusandae Et voluptatum reiciendis', '24586524524v', 117853698, 'saman@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-09-24 02:39:01'),
(15, 'Igor', 'Paul', 'Male', 'Vitae iste sint dolore et dolore labore cillum doloribus quia sint lorem necessitatibus laboris maiores doloribus adipisci voluptate Nam quibusdam', '285674682v', 447758445, 'janith@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'gs', 'enable', '2021-09-24 02:45:35'),
(16, 'Abdul', 'Clements', 'Male', 'Doloremque commodi doloribus unde omnis inventore qui amet minima saepe', '985674562v', 227825864, 'kasun@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'admin', 'enable', '2021-09-24 02:48:38'),
(17, 'Anjolie', 'Mcleod', 'Male', 'Aut enim excepturi ut ea sit officiis dignissimos cupiditate do', '00012567825v', 4568524, 'charith@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'admin', 'enable', '2021-09-24 03:06:42'),
(18, 'Maneesha', 'Klaubowila', 'Male', '122/a, pinnawala, waga', '982576252v', 775862489, 'rasodh@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'user', 'enable', '2021-09-25 03:53:33'),
(19, 'Dora', 'Roth', 'Male', 'Tempor consectetur totam at earum tempor sit ut provident', '96778552685v', 117658286, 'newo@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'user', 'enable', '2021-10-02 18:52:42');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `Fkey` FOREIGN KEY (`user_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
