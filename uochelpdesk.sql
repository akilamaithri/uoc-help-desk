-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2021 at 05:15 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_body`, `posted_by`, `posted_to`, `date_added`, `removed`, `post_id`) VALUES
(68, 'I had the same issue. You can also aknowledge a batch rep.', 'Thavindu_ushan', 'Nimesh_nishamal', '2021-10-20 22:58:49', 'no', 153),
(69, 'You can contact marshalls office for this matter.', 'Nimesh_nishamal', 'Thavindu_ushan', '2021-10-20 23:00:59', 'no', 148),
(70, 'I dont think informing a batch rep is the best thing to do.', 'Sivamyouri_param', 'Nimesh_nishamal', '2021-10-20 23:01:46', 'no', 153),
(71, 'I received mahapola last month. but some havent', 'Sivamyouri_param', 'Nimesh_nishamal', '2021-10-20 23:02:20', 'no', 147),
(72, 'Test', 'Nimesh_nishamal', 'Lavinka_weerasekara', '2021-10-22 11:25:10', 'no', 149),
(73, 'test', 'Nimesh_nishamal', 'Nimesh_nishamal', '2021-11-03 18:25:09', 'no', 164),
(74, 'gg', 'Nimesh_nishamal', 'Nimesh_nishamal', '2021-11-25 14:32:14', 'no', 165),
(75, 'gg', 'Nimesh_nishamal', 'Nimesh_nishamal', '2021-11-25 14:34:54', 'no', 164),
(76, 'ddd', 'Nimesh_nishamal', 'Nimesh_nishamal', '2021-11-25 17:09:51', 'no', 166);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

DROP TABLE IF EXISTS `form`;
CREATE TABLE IF NOT EXISTS `form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(21, 'Nimesh_nishamal', 'Hansy_nawanjana'),
(22, 'Nimesh_nishamal', 'Naduni_liyanage'),
(23, 'Naduni_liyanage', 'Nadun_chamod'),
(24, 'Nimesh_nishamal', 'Naween_raajan'),
(25, 'Nadun_chamod', 'Naween_raajan'),
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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(121, 'Asela_pathirage', 'asela_pathirage', 'hello', '2021-10-22 11:27:05', 'yes', 'no', 'no'),
(122, 'Lavinka_weerasekara', 'nimesh_nishamal', 'hello', '2021-10-22 11:27:57', 'yes', 'no', 'no'),
(123, 'Asela_pathirage', 'nimesh_nishamal', 'ado', '2021-11-03 18:48:53', 'no', 'no', 'no'),
(124, 'Supun_Bhanuka', 'nimesh_nishamal', 'hi', '2021-11-25 14:30:44', 'no', 'no', 'no');

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

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
(38, 'Lavinka_weerasekara', 'Nimesh_nishamal', 'Nimesh_nishamal commented on your profile post', '../views/post.php?id=164', '2021-11-03 18:25:09', 'no', 'no'),
(39, 'Lavinka_weerasekara', 'Nimesh_nishamal', 'Nimesh_nishamal commented on your profile post', '../views/post.php?id=164', '2021-11-25 14:34:54', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(20) NOT NULL,
  `complainTitle` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `added_by` varchar(60) NOT NULL,
  `user_to` varchar(60) NOT NULL,
  `date_added` varchar(20) NOT NULL,
  `user_closed` varchar(3) NOT NULL,
  `deleted` varchar(3) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `complainTitle`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`) VALUES
(147, '', '', '', '', '', '', '', '', 0),
(148, '', '', '', '', '', '', '', '', 0),
(149, '', '', '', '', '', '', '', '', 0),
(151, '', '', '', '', '', '', '', '', 0),
(152, '', '', '', '', '', '', '', '', 0),
(153, '', '', '', '', '', '', '', '', 0),
(154, '', '', '', '', '', '', '', '', 0),
(155, '', '', '', '', '', '', '', '', 0),
(156, '', '', '', '', '', '', '', '', 0),
(157, '', '', '', '', '', '', '', '', 0),
(158, '', '', '', '', '', '', '', '', 0),
(159, '', '', '', '', '', '', '', '', 0),
(160, '', '', '', '', '', '', '', '', 0),
(161, '', '', '', '', '', '', '', '', 0),
(163, '', '', '', '', '', '', '', '', 0),
(164, '', '', '', '', '', '', '', '', 0),
(165, '', '', '', '', '', '', '', '', 0),
(169, 'Bursary Issues', 'this is important so consider', 'i\'m first year', 'Nimesh_nishamal', 'none', '2021-11-25 17:26:42', 'no', 'no', 0),
(170, 'Mahapola', 'Mahapola hambun nane ', 'mahapola dennkoo', 'Nimesh_nishamal', 'none', '2021-11-26 11:59:55', 'no', 'no', 0),
(171, 'Vehicle Pass', 'bbbb', 'sfsfsf', 'Nimesh_nishamal', 'none', '2021-11-26 22:35:00', 'no', 'no', 0),
(172, 'Vehicle Pass', 'vygvy', 'vyvyvy', 'Hiruni_guruge', 'none', '2021-11-27 08:01:10', 'no', 'no', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

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
(23, 0, '2021-11-08 00:31:00', 'lIMcZ73nT4pbod50hsmqe16AgXraXQ', 'a'),
(24, 0, '2021-11-22 15:50:01', 'o62har3qLpQYXIl98fCiX1sAUTnP0N', 'a'),
(25, 0, '2021-11-22 15:53:09', 'ljosi8L2CZ1Mp4Ierad7cXPtX3A96h', 'a'),
(26, 0, '2021-11-22 15:58:22', 'gnTm1SX7aqCdXLc08MZ3ofrPYAp6et', 'a'),
(27, 0, '2021-11-22 15:59:36', '7r9IamdPZ5CYje2ltgpkUXiqN3Mbc0', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `seasonticket`
--

DROP TABLE IF EXISTS `seasonticket`;
CREATE TABLE IF NOT EXISTS `seasonticket` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `year` int(20) NOT NULL,
  `subdate` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `streetone` varchar(255) NOT NULL,
  `streettwo` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip` int(20) NOT NULL,
  `num` int(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `male` varchar(255) NOT NULL,
  `female` varchar(255) NOT NULL,
  `start` varchar(255) NOT NULL,
  `end` varchar(255) NOT NULL,
  `distance` varchar(255) NOT NULL,
  `esign` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seasonticket`
--

INSERT INTO `seasonticket` (`id`, `year`, `subdate`, `name`, `streetone`, `streettwo`, `city`, `province`, `zip`, `num`, `mail`, `male`, `female`, `start`, `end`, `distance`, `esign`) VALUES
(4, 2020, '2021-12-02', 'a.l.g.weerasekara', '200', 'moratuwa', 'colombo', 'western', 10, 781413239, 'lavinka99@gmail.com', 'none', 'none', 'colombo', 'moratuwa', '55', 'grgrgrg'),
(3, 2021, '2021-11-30', 'w.p.monika croos', '44', 'new town', 'anurdhapura', 'north central', 14, 11737058, 'monika@gmail.com', 'none', 'none', 'colombo', 'anuradhapura', '33', 'wdwdw'),
(5, 2021, '2021-12-09', 'a.a.n.nishamal', '50', 'horana', 'kaluthara', 'western', 87, 789567481, 'hiruni@gmail.com', 'none', 'none', 'anurashapura', 'gampaha', '908', 'dwidhih'),
(6, 2023, '2021-12-16', 'a.a.hewagamage', '50', 'njn', 'uhuh', 'ij', 88, 112334455, 'hewa@gmail.com', 'none', 'none', 'gampaha', 'borella', '66', 'fniefnen');

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
(80, 'Asela_pathirage', '2019is053@stu.ucsc.cmb.ac.lk', '9f640e36323b7bd08971f42f0a74b706', '2021-10-20 00:00:00', '../../public/img/profile_pics/Asela_pathirage73a3fbc1f8f789248ac90493377ecd11n.jpeg', 1, 0, 'no', ',Nimesh_nishamal,Hiruni_guruge,', 'user', NULL, ''),
(83, 'Pamathi_gunarathne', '2018abc123@stu.fmf.cmb.ac.lk', 'f18db8ecbf583e4f0bdf060b28216a01', '2021-10-20 00:00:00', '../../public/img/profile_pics/Pamathi_gunarathne9ef098daa2c62e8f9937de20a76c4daan.jpeg', 1, 1, 'no', ',', 'user', NULL, ''),
(76, 'Nimesh_nishamal', '2019is052@stu.ucsc.cmb.ac.lk', '76ac9e19c7a1602866b130771962d2ec', '2021-10-20 00:00:00', '../../public/img/profile_pics/Nimesh_nishamal8145e113e18cfdc4198f33b57de9b8c4n.jpeg', 13, 5, 'no', ',Thavindu_ushan,Lavinka_weerasekara,Supun_Bhanuka,Sivamyouri_param,Thavindu_ushan,Asela_pathirage,Udayantha_namal,Yohombu_abeysinghe,', 'user', NULL, ''),
(78, 'Hiruni_guruge', '2019is031@stu.ucsc.cmb.ac.lk', '4cfb7678d9aa3e2f1fab5b2223bdcb00', '2021-10-20 00:00:00', '../../public/img/profile_pics/Hiruni_guruge4d3138a834e59dd74222107144b9b9c4n.jpeg', 2, 0, 'no', ',Asela_pathirage,Udayantha_namal,', 'user', NULL, ''),
(79, 'Thavindu_ushan', '2019is050@stu.ucsc.cmb.ac.lk', 'ae96ec7f236356ad913a2f2b50f1690b', '2021-10-20 00:00:00', '../../public/img/profile_pics/Thavindu_ushand5a6c7548f05003c9c9cdb57398ec89an.jpeg', 1, 0, 'no', ',Nimesh_nishamal,Sivamyouri_param,', 'user', NULL, ''),
(84, 'Yohombu_abeysinghe', '2019is001@stu.ucsc.cmb.ac.lk', 'a5cb914b5f8ac751ded129866fbbf805', '2021-10-20 00:00:00', '../../public/img/profile_pics/Yohombu_abeysinghe413aa83d0d4229853e28d1a366e1c49an.jpeg', 0, 0, 'no', ',Nimesh_nishamal,', 'user', NULL, ''),
(87, 'Hansy_nawanjana', '2018st044@stu.science.cmb.ac.lk', 'bdd45d2597667f853849c7c3239e83f6', '2021-10-21 00:00:00', '../../public/img/profile_pics/Hansy_nawanjana8c41f8a657a46a804d8b76e6e9a94eefn.jpeg', 2, 0, 'no', ',', 'user', NULL, ''),
(88, 'Naduni_liyanage', '2018st040@stu.stat.cmb.ac.lk', 'a5be7fd161991e79a3d93c1597f5ce1e', '2021-10-21 00:00:00', '../../public/img/profile_pics/Naduni_liyanagef06a9456b2d1a627a70dcfb0bf9791a8n.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(90, 'Nadun_chamod', '2020st004@stu.stat.cmb.ac.lk', '841dd5d6df643886698900112508fff0', '2021-10-21 00:00:00', '../../public/img/profile_pics/Nadun_chamod87a40ea6ede78d09eb644d999f6f0af6n.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(91, 'Naween_raajan', '2020is426@stu.ucsc.cmb.ac.lk', '5d2ae6efe9505c814e4b0ff9c26566a5', '2021-10-21 00:00:00', '../../public/img/profile_pics/Naween_raajan07d63e037c29765148329ba92a6dd12fn.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(92, 'Ranahansa_wickramarathne', '2017st016@stu.stat.cmb.ac.lk', '05c4c702c4050210c138943c32abbda8', '2021-10-21 00:00:00', '../../public/img/profile_pics/Ranahansa_wickramarathne0bc44ed9988fbb6e8b5a38394722a28dn.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(93, 'Udayantha_namal', '2017ss098@stu.ssp.cmb.ac.lk', 'cd1edf95498952bc3f1c3a551ff1f01b', '2021-10-21 00:00:00', '../../public/img/profile_pics/Udayantha_namal5182488cf433ce9efd01cba760e1773bn.jpeg', 0, 0, 'no', ',Nimesh_nishamal,Hiruni_guruge,', 'user', NULL, ''),
(94, 'Nithasha_pooliyadda', '2018fs067@stu.fos.cmb.ac.lk', '1561ac1be3e8dd2f3aebc6e546ed164b', '2021-10-21 00:00:00', '../../public/img/profile_pics/Nithasha_pooliyadda981799eee637fe5f0a61645eb88bdefan.jpeg', 1, 0, 'no', ',', 'user', NULL, ''),
(95, 'Sakuna_samaranaayaka', '2016fa144@stu.fos.cmb.ac.lk', '1cf882cfd28a1ac3f1df68ac542e03cb', '2021-10-21 00:00:00', '../../public/img/profile_pics/Sakuna_samaranaayaka3fa431b2764f540f62b2e972f0710e29n.jpeg', 0, 0, 'no', ',', 'user', NULL, ''),
(106, 'Ridmi', 'Ridmi@stu.fmf.cmb.ac.lk', '036a4fdb4fdc09e3cde07e6200b2f24b', '2021-11-04 10:00:23', '../../public/img/profile_pics/defaults/head_deep_blue.png', 0, 0, 'P', ',', 'user', NULL, ''),
(104, 'Akila_maithripala', '2019is043@stu.ucsc.cmb.ac.lk', '77cb2899cf0a7a8d52eca93d410df665', '2021-10-22 11:22:31', '../../public/img/profile_pics/defaults/head_deep_blue.png', 1, 0, 'P', ',', 'Admin', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `vehi_form`
--

DROP TABLE IF EXISTS `vehi_form`;
CREATE TABLE IF NOT EXISTS `vehi_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `zip` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `id_no` varchar(11) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `vehi_no` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2028 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehi_form`
--

INSERT INTO `vehi_form` (`id`, `year`, `name`, `address`, `city`, `province`, `zip`, `contact`, `id_no`, `faculty`, `gender`, `vehicle`, `vehi_no`, `date`) VALUES
(2026, 2020, 'Hiruni Guruge', 'vgvhjgvjhv', 'Kandy', 'Central Province', 20300, 165665, '154584', 'bjbj', 'male', 'vjhvjh', 567845, '2010-02-20'),
(2025, 2021, 'Hiruni Guruge', 'No.50, Alagalla Road', 'Kandy', 'Central Province', 20300, 165665, '154584', 'bjbj', 'female', 'vjhvjh', 112111, '2010-02-20'),
(2024, 2020, 'Hiruni Guruge', 'No.50, Alagalla Road, Kadugannawa', 'Kandy', 'Central Province', 20300, 165665, '154584', 'bjbj', 'none', 'vab', 567845, '2010-02-20'),
(2027, 2023, 'w.p.nishamal', '45', 'doranagoda', 'western', 56, 444343097, '53543v', 'science', 'male', 'car', 5539, '2021-12-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
