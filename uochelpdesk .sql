-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2021 at 07:05 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uochelpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_body` text NOT NULL,
  `posted_by` varchar(60) NOT NULL,
  `posted_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `removed` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(68, 'I had the same issue. You can also aknowledge a batch rep.', 'Thavindu_ushan', 'Nimesh_nishamal', '2021-10-20 22:58:49', 'no', 153),
(69, 'You can contact marshalls office for this matter.', 'Nimesh_nishamal', 'Thavindu_ushan', '2021-10-20 23:00:59', 'no', 148),
(70, 'I dont think informing a batch rep is the best thing to do.', 'Sivamyouri_param', 'Nimesh_nishamal', '2021-10-20 23:01:46', 'no', 153),
(71, 'I received mahapola last month. but some havent', 'Sivamyouri_param', 'Nimesh_nishamal', '2021-10-20 23:02:20', 'no', 147),
(72, 'Test', 'Nimesh_nishamal', 'Lavinka_weerasekara', '2021-10-22 11:25:10', 'no', 149),
(73, 'test', 'Nimesh_nishamal', 'Nimesh_nishamal', '2021-11-03 18:25:09', 'no', 164);

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

DROP TABLE IF EXISTS `friend_requests`;
CREATE TABLE IF NOT EXISTS `friend_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friend_requests`
--

INSERT INTO `friend_requests` (`id`, `user_to`, `user_from`) VALUES
(16, 'Sivamyouri_param', 'Asela_pathirage'),
(17, 'Lavinka_weerasekara', 'Asela_pathirage'),
(18, 'Supun_Bhanuka', 'Asela_pathirage'),
(19, 'Hiruni_guruge', 'Asela_pathirage'),
(20, 'Nimesh_nishamal', 'Yohombu_abeysinghe'),
(21, 'Nimesh_nishamal', 'Hansy_nawanjana'),
(22, 'Nimesh_nishamal', 'Naduni_liyanage'),
(23, 'Naduni_liyanage', 'Nadun_chamod'),
(24, 'Nimesh_nishamal', 'Naween_raajan'),
(25, 'Nadun_chamod', 'Naween_raajan'),
(27, 'Hiruni_guruge', 'Udayantha_namal'),
(28, 'Nimesh_nishamal', 'Nithasha_pooliyadda'),
(29, 'Nimesh_nishamal', 'Sakuna_samaranaayaka'),
(30, 'Pamathi_gunarathne', 'Nimesh_nishamal');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `post_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `username`, `post_id`) VALUES
(46, 'Thavindu_ushan', 146),
(47, 'Nimesh_nishamal', 149),
(48, 'Thavindu_ushan', 153),
(49, 'Nimesh_nishamal', 154),
(50, 'Sivamyouri_param', 153),
(51, 'Sivamyouri_param', 147),
(56, 'Nimesh_nishamal', 164);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `date` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(121, 'Asela_pathirage', 'asela_pathirage', 'hello', '2021-10-22 11:27:05', 'yes', 'no', 'no'),
(122, 'Lavinka_weerasekara', 'nimesh_nishamal', 'hello', '2021-10-22 11:27:57', 'yes', 'no', 'no'),
(123, 'Asela_pathirage', 'nimesh_nishamal', 'ado', '2021-11-03 18:48:53', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_to` varchar(50) NOT NULL,
  `user_from` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `opened` varchar(3) NOT NULL,
  `viewed` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_to`, `user_from`, `message`, `link`, `datetime`, `opened`, `viewed`) VALUES
(22, 'Nimesh_nishamal', 'Thavindu_ushan', 'Thavindu_ushan liked your post', '../views/post.php?id=146', '2021-10-20 22:09:15', 'yes', 'yes'),
(23, 'Nimesh_nishamal', 'Thavindu_ushan', 'Thavindu_ushan commented on your post', '../views/post.php?id=146', '2021-10-20 22:09:19', 'yes', 'yes'),
(24, 'Lavinka_weerasekara', 'Nimesh_nishamal', 'Nimesh_nishamal liked your post', '../views/post.php?id=149', '2021-10-20 22:34:37', 'no', 'no'),
(25, 'Nimesh_nishamal', 'Thavindu_ushan', 'Thavindu_ushan liked your post', '../views/post.php?id=153', '2021-10-20 22:58:10', 'yes', 'yes'),
(26, 'Nimesh_nishamal', 'Thavindu_ushan', 'Thavindu_ushan commented on your post', '../views/post.php?id=153', '2021-10-20 22:58:49', 'yes', 'yes'),
(27, 'Pamathi_gunarathne', 'Nimesh_nishamal', 'Nimesh_nishamal liked your post', '../views/post.php?id=154', '2021-10-20 23:00:30', 'no', 'no'),
(28, 'Thavindu_ushan', 'Nimesh_nishamal', 'Nimesh_nishamal commented on your post', '../views/post.php?id=148', '2021-10-20 23:00:59', 'no', 'yes'),
(29, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param liked your post', '../views/post.php?id=153', '2021-10-20 23:01:22', 'yes', 'yes'),
(30, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param commented on your post', '../views/post.php?id=153', '2021-10-20 23:01:46', 'yes', 'yes'),
(31, 'Thavindu_ushan', 'Sivamyouri_param', 'Sivamyouri_param commented on a post you commented on', '../views/post.php?id=153', '2021-10-20 23:01:46', 'no', 'yes'),
(32, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param liked your post', '../views/post.php?id=147', '2021-10-20 23:01:56', 'yes', 'yes'),
(33, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param commented on your post', '../views/post.php?id=147', '2021-10-20 23:02:20', 'yes', 'yes'),
(34, 'Sivamyouri_param', 'Nimesh_nishamal', 'Nimesh_nishamal posted on your profile', '../views/post.php?id=162', '2021-10-21 05:33:44', 'no', 'no'),
(35, 'Lavinka_weerasekara', 'Nimesh_nishamal', 'Nimesh_nishamal commented on your post', '../views/post.php?id=149', '2021-10-22 11:25:10', 'no', 'no'),
(36, 'Lavinka_weerasekara', 'Nimesh_nishamal', 'Nimesh_nishamal posted on your profile', '../views/post.php?id=164', '2021-10-22 11:25:32', 'no', 'no'),
(37, 'Asela_pathirage', 'Nimesh_nishamal', 'Nimesh_nishamal liked your post', '../views/post.php?id=151', '2021-10-22 11:53:57', 'no', 'no'),
(38, 'Lavinka_weerasekara', 'Nimesh_nishamal', 'Nimesh_nishamal commented on your profile post', '../views/post.php?id=164', '2021-11-03 18:25:09', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=165 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`) VALUES
(147, 'Dear sir/madam, me along with many of my firend shavent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...', 'Nimesh_nishamal', 'none', '2021-10-20 22:29:17', 'no', 'no', 1),
(148, 'The Student and Staff Welfare Branch of the University conducts the elections under the guidance of the Deans of the respective Faculties. The Commission considered the request of CVCD and agreed with the CVCD proposal to hold the Studentsâ€™ Union Elections at the end of each academic year. Accordingly, elections are conducted at the end of each academic year. Each Faculty decides the dates for receiving nominations and holding elections and informs the Student and Staff Welfare Branch. ', 'Thavindu_ushan', 'none', '2021-10-20 22:30:50', 'no', 'no', 0),
(149, 'Dear sir/madam, I\'m facing a scholarship University conducts the elections under the guidance of the Deans of the respective Faculties. The Commission considered the request of CVCD and agreed with the CVCD proposal to hold the Studentsâ€™ Union Elections at the end of each academic year. Accordingly, elections are conducted at the end of each academic year. Each Faculty decides the dates for receiving nominations and holding elections and informs the Student and Staff Welfare Branch. ', 'Lavinka_weerasekara', 'none', '2021-10-20 22:32:14', 'no', 'no', 1),
(151, 'Applications are invited from the UCSC internal undergraduate students (CS, IS and SE) who will be graduating at the first attempt in this year (2021) with a First Class from the University of Colombo School of Computing for the above-mentioned award.', 'Asela_pathirage', 'none', '2021-10-20 22:36:23', 'no', 'no', 0),
(152, 'Sir I am from Anuradhapura and  currently  staying at my friend\'s place. Still I couldn\'t find a permanent resident. Can I have a chance to apply for hostels in UOC ? \n', 'Hiruni_guruge', 'none', '2021-10-20 22:37:51', 'no', 'no', 0),
(153, ' Sir What are the necessary steps that you are taking if someone face a mental harassment within the University ? Because my friend has faced an issue similar to that.', 'Nimesh_nishamal', 'none', '2021-10-20 22:38:46', 'no', 'no', 2),
(154, 'HTML à·€à¶½à·’à¶±à·Š web page à¶‘à¶šà¶šà¶§ background removed à¶´à·’à¶±à·Šà¶­à·–à¶»à¶ºà¶šà·Š à¶‘à¶šà¶­à·” à¶šà¶½à· à¶¸ à¶¸à·™à·„à·™à¶¸ à·€à·™à¶±à·Šà¶±à·š à¶‡à¶ºà·’?', 'Pamathi_gunarathne', 'none', '2021-10-20 22:51:25', 'no', 'no', 1),
(155, 'Anyone knows what is the last date for railway season card issues extended?', 'Hansy_nawanjana', 'none', '2021-10-21 00:18:54', 'no', 'no', 0),
(156, 'Is this monday our main library opening till 5.00.p.m?', 'Hansy_nawanjana', 'none', '2021-10-21 00:20:53', 'no', 'no', 0),
(157, 'Does anyone knows the procedure for applying MSC in German?', 'Naduni_liyanage', 'none', '2021-10-21 00:23:28', 'no', 'no', 0),
(158, 'how to join UOC football practises? when the date?\nAnyone please', 'Nadun_chamod', 'none', '2021-10-21 00:29:38', 'no', 'no', 0),
(159, 'any boarding available near to wellawaththa area? ', 'Naween_raajan', 'none', '2021-10-21 00:32:14', 'no', 'no', 0),
(160, 'How to get register ideathon that organized by sceince faculty of our university. more information please? ', 'Ranahansa_wickramarathne', 'none', '2021-10-21 00:37:40', 'no', 'no', 0),
(161, 'Anyone are sitting our university \"BITS\" program?\nwhat is the final date for the admission. And any other extra fees are added to the course exam fees? ', 'Nithasha_pooliyadda', 'none', '2021-10-21 00:46:18', 'no', 'no', 0),
(163, 'Test', 'Akila_maithripala', 'none', '2021-10-22 11:23:55', 'no', 'no', 0),
(164, 'Test question', 'Nimesh_nishamal', 'Lavinka_weerasekara', '2021-10-22 11:25:31', 'no', 'no', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resetpass`
--

DROP TABLE IF EXISTS `resetpass`;
CREATE TABLE IF NOT EXISTS `resetpass` (
  `recordId` int(5) NOT NULL AUTO_INCREMENT,
  `stdId` int(11) NOT NULL,
  `createdTime` datetime NOT NULL,
  `valueIdentity` varchar(50) NOT NULL,
  `active` char(1) DEFAULT 'a',
  PRIMARY KEY (`recordId`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpass`
--

INSERT INTO `resetpass` (`recordId`, `stdId`, `createdTime`, `valueIdentity`, `active`) VALUES
(8, 100, '2021-10-22 10:50:19', 'PUodN9L7Msta2ejnXmT4krp5iIhqlA', 'a'),
(9, 102, '2021-10-22 10:53:31', 'T0Zm56MnkrPSU98a3Njq2741IptgdQ', 'a'),
(10, 103, '2021-10-22 10:54:06', 'mT3Uk4SjePgnhQdAqLINi8XlYptrf2', 'a'),
(11, 104, '2021-10-22 11:22:31', 'M9tn6rePANfkg7cqXX5IlZjCs8SbYo', 'a'),
(12, 105, '2021-11-04 09:55:54', 'gtpiqnkQN7IZbYePLXj123sT6MrUm4', 'a'),
(13, 106, '2021-11-04 10:00:23', '9ZMAcn1IN5iQq6gs3Up4em0aLfklXX', 'a'),
(14, 0, '2021-11-05 12:54:09', 'ZTrAoXlIqS4n1Ua2YcN7tk3X0pg5jM', 'a'),
(15, 0, '2021-11-05 12:54:40', 'LX7MPg1Q6Cnp0j8A4tI9efi2ZabmY3', 'a'),
(16, 0, '2021-11-08 00:06:37', 'lsk1SQ5nX8Y6Z2Tr73p9gaqhjIPLtC', 'a'),
(17, 0, '2021-11-08 00:07:16', 'LS1I0fhZebC2jPYmlqoQA5UscXd7pk', 'a'),
(18, 0, '2021-11-08 00:07:59', '3C4beIYh6PXanoMLmStdiqQcr9XlUp', 'a'),
(19, 0, '2021-11-08 00:09:40', 'gnbAPhpk6aqI19f7rtocM8XeL3mS5s', 'a'),
(20, 0, '2021-11-08 00:11:38', '9IXYq1ljaTpZc7eb263NoMsiP5tmfg', 'a'),
(21, 0, '2021-11-08 00:29:16', 'm6XYn2XU5TMPlt4ShfQqI9A1di70Cs', 'a'),
(22, 0, '2021-11-08 00:30:14', 'bjLm7dMQ6fqgZkr08eYa13IsC2X9Tp', 'a'),
(23, 0, '2021-11-08 00:31:00', 'lIMcZ73nT4pbod50hsmqe16AgXraXQ', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `trends`
--

DROP TABLE IF EXISTS `trends`;
CREATE TABLE IF NOT EXISTS `trends` (
  `title` varchar(50) NOT NULL,
  `hits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `profile_pic` varchar(255) DEFAULT NULL,
  `num_posts` int(11) DEFAULT NULL,
  `num_likes` int(255) DEFAULT NULL,
  `user_closed` varchar(3) DEFAULT NULL,
  `friend_array` text,
  `user_roll` varchar(10) NOT NULL DEFAULT 'user',
  `teleNumber` int(10) DEFAULT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=107 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_by`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `user_roll`, `teleNumber`, `address`) VALUES
(82, 'Sivamyouri_param', '2018ab123@stu.fos.cmb.ac.lk', '104827e490dbbdbd83866776079d2cd0', '2021-10-20 00:00:00', '../../public/img/profile_pics/Sivamyouri_param397d98e57b5be99d92cca4b93b2078fbn.jpeg', 0, 0, 'no', ',Supun_bhanuka,Nimesh_nishamal,Thavindu_ushan,', 'user', NULL, ''),
(81, 'Supun_Bhanuka', '2019lac12@stu.foa.cmb.ac.lk', 'c28a340921221fc7cffbb81ae3a782cb', '2021-10-20 00:00:00', '../../public/img/profile_pics/nameaf0a706a6e66ebdeba0813bb7b8a24ean.jpeg', 0, 0, 'no', ',Sivamyouri_param,Nimesh_nishamal,', 'user', NULL, ''),
(80, 'Asela_pathirage', '2019is053@stu.ucsc.cmb.ac.lk', '9f640e36323b7bd08971f42f0a74b706', '2021-10-20 00:00:00', '../../public/img/profile_pics/Asela_pathirage73a3fbc1f8f789248ac90493377ecd11n.jpeg', 1, 0, 'no', ',Nimesh_nishamal,', 'user', NULL, ''),
(83, 'Pamathi_gunarathne', '2018abc123@stu.fmf.cmb.ac.lk', 'f18db8ecbf583e4f0bdf060b28216a01', '2021-10-20 00:00:00', '../../public/img/profile_pics/Pamathi_gunarathne9ef098daa2c62e8f9937de20a76c4daan.jpeg', 1, 1, 'no', ',', 'user', NULL, ''),
(77, 'name', '2019is087@stu.ucsc.cmb.ac.lk', '6b22d7909031638d7c568829bbb3e3f8', '2021-10-20 00:00:00', '../../public/img/profile_pics/name4e55016e871bb2600526c042d4a1922dn.jpeg', 2, 1, 'no', ',Nimesh_nishamal,', 'Admin', NULL, ''),
(76, 'Nimesh_nishamal', '2019is052@stu.ucsc.cmb.ac.lk', '76ac9e19c7a1602866b130771962d2ec', '2021-10-20 00:00:00', '../../public/img/profile_pics/Nimesh_nishamal8145e113e18cfdc4198f33b57de9b8c4n.jpeg', 5, 5, 'no', ',Thavindu_ushan,Lavinka_weerasekara,Supun_Bhanuka,Sivamyouri_param,Thavindu_ushan,Asela_pathirage,Udayantha_namal,', 'user', NULL, ''),
(78, 'Hiruni_guruge', '2019is031@stu.ucsc.cmb.ac.lk', '4cfb7678d9aa3e2f1fab5b2223bdcb00', '2021-10-20 00:00:00', '../../public/img/profile_pics/Hiruni_guruge4d3138a834e59dd74222107144b9b9c4n.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(79, 'Thavindu_ushan', '2019is050@stu.ucsc.cmb.ac.lk', 'ae96ec7f236356ad913a2f2b50f1690b', '2021-10-20 00:00:00', '../../public/img/profile_pics/Thavindu_ushand5a6c7548f05003c9c9cdb57398ec89an.jpeg', 1, 0, 'no', ',Nimesh_nishamal,Sivamyouri_param,', 'user', NULL, ''),
(84, 'Yohombu_abeysinghe', '2019is001@stu.ucsc.cmb.ac.lk', 'a5cb914b5f8ac751ded129866fbbf805', '2021-10-20 00:00:00', '../../public/img/profile_pics/Yohombu_abeysinghe413aa83d0d4229853e28d1a366e1c49an.jpeg', 0, 0, 'no', ',', 'user', NULL, ''),
(87, 'Hansy_nawanjana', '2018st044@stu.science.cmb.ac.lk', 'bdd45d2597667f853849c7c3239e83f6', '2021-10-21 00:00:00', '../../public/img/profile_pics/Hansy_nawanjana8c41f8a657a46a804d8b76e6e9a94eefn.jpeg', 2, 0, 'no', ',', 'user', NULL, ''),
(88, 'Naduni_liyanage', '2018st040@stu.stat.cmb.ac.lk', 'a5be7fd161991e79a3d93c1597f5ce1e', '2021-10-21 00:00:00', '../../public/img/profile_pics/Naduni_liyanagef06a9456b2d1a627a70dcfb0bf9791a8n.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(90, 'Nadun_chamod', '2020st004@stu.stat.cmb.ac.lk', '841dd5d6df643886698900112508fff0', '2021-10-21 00:00:00', '../../public/img/profile_pics/Nadun_chamod87a40ea6ede78d09eb644d999f6f0af6n.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(91, 'Naween_raajan', '2020is426@stu.ucsc.cmb.ac.lk', '5d2ae6efe9505c814e4b0ff9c26566a5', '2021-10-21 00:00:00', '../../public/img/profile_pics/Naween_raajan07d63e037c29765148329ba92a6dd12fn.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(92, 'Ranahansa_wickramarathne', '2017st016@stu.stat.cmb.ac.lk', '05c4c702c4050210c138943c32abbda8', '2021-10-21 00:00:00', '../../public/img/profile_pics/Ranahansa_wickramarathne0bc44ed9988fbb6e8b5a38394722a28dn.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(93, 'Udayantha_namal', '2017ss098@stu.ssp.cmb.ac.lk', 'cd1edf95498952bc3f1c3a551ff1f01b', '2021-10-21 00:00:00', '../../public/img/profile_pics/Udayantha_namal5182488cf433ce9efd01cba760e1773bn.jpeg', 0, 0, 'no', ',Nimesh_nishamal,', 'user', NULL, ''),
(94, 'Nithasha_pooliyadda', '2018fs067@stu.fos.cmb.ac.lk', '1561ac1be3e8dd2f3aebc6e546ed164b', '2021-10-21 00:00:00', '../../public/img/profile_pics/Nithasha_pooliyadda981799eee637fe5f0a61645eb88bdefan.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(95, 'Sakuna_samaranaayaka', '2016fa144@stu.fos.cmb.ac.lk', '1cf882cfd28a1ac3f1df68ac542e03cb', '2021-10-21 00:00:00', '../../public/img/profile_pics/Sakuna_samaranaayaka3fa431b2764f540f62b2e972f0710e29n.jpeg', 0, 0, 'no', ',', 'user', NULL, ''),
(106, 'Ridmi', 'Ridmi@stu.fmf.cmb.ac.lk', '036a4fdb4fdc09e3cde07e6200b2f24b', '2021-11-04 10:00:23', '../../public/img/profile_pics/defaults/head_deep_blue.png', 0, 0, 'P', ',', 'user', NULL, ''),
(104, 'Akila_maithripala', '2019is043@stu.ucsc.cmb.ac.lk', '77cb2899cf0a7a8d52eca93d410df665', '2021-10-22 11:22:31', '../../public/img/profile_pics/defaults/head_deep_blue.png', 1, 0, 'P', ',', 'user', NULL, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
