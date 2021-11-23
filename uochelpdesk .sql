-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2021 at 09:29 AM
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
(72, 'ihihio', 'Supun_Bhanuka', 'Nimesh_nishamal', '2021-10-22 13:14:47', 'no', 162),
(73, 'hi', 'Asela_pathirage', 'Asela_pathirage', '2021-11-22 14:47:39', 'no', 151);

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
(14, 'Thavindu_ushan', 'Sivamyouri_param'),
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
(26, 'Nimesh_nishamal', 'Udayantha_namal'),
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

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
(54, 'Nimesh_nishamal', 153);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_to`, `user_from`, `body`, `date`, `opened`, `viewed`, `deleted`) VALUES
(1, 'Lavinka_weerasekara', 'nimesh_nishamal', 'hhhihih', '2021-10-22 13:11:29', 'no', 'no', 'no'),
(2, 'Supun_Bhanuka', 'nimesh_nishamal', 'gguigiggg', '2021-10-22 13:11:57', 'yes', 'yes', 'no'),
(3, 'Supun_Bhanuka', 'nimesh_nishamal', 'nhkihhih', '2021-10-22 13:12:01', 'yes', 'yes', 'no');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

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
(28, 'Thavindu_ushan', 'Nimesh_nishamal', 'Nimesh_nishamal commented on your post', '../views/post.php?id=148', '2021-10-20 23:00:59', 'no', 'no'),
(29, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param liked your post', '../views/post.php?id=153', '2021-10-20 23:01:22', 'yes', 'yes'),
(30, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param commented on your post', '../views/post.php?id=153', '2021-10-20 23:01:46', 'yes', 'yes'),
(31, 'Thavindu_ushan', 'Sivamyouri_param', 'Sivamyouri_param commented on a post you commented on', '../views/post.php?id=153', '2021-10-20 23:01:46', 'no', 'no'),
(32, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param liked your post', '../views/post.php?id=147', '2021-10-20 23:01:56', 'yes', 'yes'),
(33, 'Nimesh_nishamal', 'Sivamyouri_param', 'Sivamyouri_param commented on your post', '../views/post.php?id=147', '2021-10-20 23:02:20', 'yes', 'yes'),
(34, 'Sivamyouri_param', 'Nimesh_nishamal', 'Nimesh_nishamal posted on your profile', '../views/post.php?id=162', '2021-10-21 05:33:44', 'no', 'no'),
(35, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka commented on your post', '../views/post.php?id=162', '2021-10-22 13:14:47', 'no', 'yes'),
(36, 'Sivamyouri_param', 'Supun_Bhanuka', 'Supun_Bhanuka commented on your profile post', '../views/post.php?id=162', '2021-10-22 13:14:47', 'no', 'no'),
(37, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:14:56', 'no', 'yes'),
(38, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:14:58', 'no', 'yes'),
(39, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:15:02', 'no', 'yes'),
(40, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:15:05', 'no', 'yes'),
(41, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:15:15', 'no', 'yes'),
(42, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:15:15', 'no', 'yes'),
(43, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:15:20', 'no', 'yes'),
(44, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=162', '2021-10-22 13:15:37', 'no', 'yes'),
(45, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=163', '2021-10-22 13:16:51', 'no', 'yes'),
(46, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=163', '2021-10-22 13:16:53', 'no', 'yes'),
(47, 'Nimesh_nishamal', 'Supun_Bhanuka', 'Supun_Bhanuka liked your post', '../views/post.php?id=163', '2021-10-22 13:17:00', 'no', 'yes');

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
) ENGINE=InnoDB AUTO_INCREMENT=164 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `added_by`, `user_to`, `date_added`, `user_closed`, `deleted`, `likes`) VALUES
(147, 'Dear sir/madam, me along with many of my firend shavent received mahapola scholarship for two months now. That is jue and july. As of the curren situation, its much hard to pay for all bills and stff. Also some of my firends at unveisroy of japura have recived mahapola...', 'Nimesh_nishamal', 'none', '2021-10-20 22:29:17', 'no', 'no', 1),
(148, 'The Student and Staff Welfare Branch of the University conducts the elections under the guidance of the Deans of the respective Faculties. The Commission considered the request of CVCD and agreed with the CVCD proposal to hold the Studentsâ€™ Union Elections at the end of each academic year. Accordingly, elections are conducted at the end of each academic year. Each Faculty decides the dates for receiving nominations and holding elections and informs the Student and Staff Welfare Branch. ', 'Thavindu_ushan', 'none', '2021-10-20 22:30:50', 'no', 'no', 0),
(149, 'Dear sir/madam, I\'m facing a scholarship University conducts the elections under the guidance of the Deans of the respective Faculties. The Commission considered the request of CVCD and agreed with the CVCD proposal to hold the Studentsâ€™ Union Elections at the end of each academic year. Accordingly, elections are conducted at the end of each academic year. Each Faculty decides the dates for receiving nominations and holding elections and informs the Student and Staff Welfare Branch. ', 'Lavinka_weerasekara', 'none', '2021-10-20 22:32:14', 'no', 'no', 1),
(151, 'Applications are invited from the UCSC internal undergraduate students (CS, IS and SE) who will be graduating at the first attempt in this year (2021) with a First Class from the University of Colombo School of Computing for the above-mentioned award.', 'Asela_pathirage', 'none', '2021-10-20 22:36:23', 'no', 'no', 0),
(152, 'Sir I am from Anuradhapura and  currently  staying at my friend\'s place. Still I couldn\'t find a permanent resident. Can I have a chance to apply for hostels in UOC ? \n', 'Hiruni_guruge', 'none', '2021-10-20 22:37:51', 'no', 'no', 0),
(153, ' Sir What are the necessary steps that you are taking if someone face a mental harassment within the University ? Because my friend has faced an issue similar to that.', 'Nimesh_nishamal', 'none', '2021-10-20 22:38:46', 'no', 'no', 3),
(154, 'HTML à·€à¶½à·’à¶±à·Š web page à¶‘à¶šà¶šà¶§ background removed à¶´à·’à¶±à·Šà¶­à·–à¶»à¶ºà¶šà·Š à¶‘à¶šà¶­à·” à¶šà¶½à· à¶¸ à¶¸à·™à·„à·™à¶¸ à·€à·™à¶±à·Šà¶±à·š à¶‡à¶ºà·’?', 'Pamathi_gunarathne', 'none', '2021-10-20 22:51:25', 'no', 'no', 1),
(155, 'Anyone knows what is the last date for railway season card issues extended?', 'Hansy_nawanjana', 'none', '2021-10-21 00:18:54', 'no', 'no', 0),
(156, 'Is this monday our main library opening till 5.00.p.m?', 'Hansy_nawanjana', 'none', '2021-10-21 00:20:53', 'no', 'no', 0),
(157, 'Does anyone knows the procedure for applying MSC in German?', 'Naduni_liyanage', 'none', '2021-10-21 00:23:28', 'no', 'no', 0),
(158, 'how to join UOC football practises? when the date?\nAnyone please', 'Nadun_chamod', 'none', '2021-10-21 00:29:38', 'no', 'no', 0),
(159, 'any boarding available near to wellawaththa area? ', 'Naween_raajan', 'none', '2021-10-21 00:32:14', 'no', 'no', 0),
(160, 'How to get register ideathon that organized by sceince faculty of our university. more information please? ', 'Ranahansa_wickramarathne', 'none', '2021-10-21 00:37:40', 'no', 'no', 0),
(161, 'Anyone are sitting our university \"BITS\" program?\nwhat is the final date for the admission. And any other extra fees are added to the course exam fees? ', 'Nithasha_pooliyadda', 'none', '2021-10-21 00:46:18', 'no', 'no', 0),
(162, 'fefefefef', 'Nimesh_nishamal', 'Sivamyouri_param', '2021-10-21 05:33:44', 'no', 'no', 0),
(163, 'yasitha', 'Nimesh_nishamal', 'none', '2021-10-22 13:09:49', 'no', 'no', 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resetpass`
--

INSERT INTO `resetpass` (`recordId`, `stdId`, `createdTime`, `valueIdentity`, `active`) VALUES
(1, 97, '2021-11-03 21:11:50', 'bp3aTkt0XM9Pj7hCLZnir1g8S6sIcd', 'a'),
(2, 98, '2021-11-03 21:14:06', 'Afo70jS3neimrk1IaQX9PcU45th2bX', 'a'),
(3, 99, '2021-11-03 21:23:58', '2XmAYSTQ870XMr1hoPqkC5cdNapItn', 'a'),
(4, 100, '2021-11-03 21:26:01', 'YnsfS0MQLrI3Ntqb68T2o1Xc59AZhC', 'a'),
(5, 101, '2021-11-03 21:26:34', 'U3iPc6MT1L0pesfZ85jrlaYCS4XQd9', 'a'),
(6, 102, '2021-11-03 21:31:17', '2bX7aorYM1SfQ6lUZP3hnLpA8kNqms', 'a'),
(7, 103, '2021-11-03 21:32:33', 'XsbML1n5CXcUr0hA7ZqNafdmoT4i6j', 'a'),
(8, 104, '2021-11-03 21:34:29', '1l2ANh7jebYUg98f0nPIp4qt3Xr5Md', 'a'),
(9, 105, '2021-11-03 21:39:26', 'pPlhAInkY0e1soUbC6fmtaNLXqMZ38', 'a'),
(10, 106, '2021-11-03 21:41:01', 'ekPo9LmScf1MYbd0Anl4s2NTp56Qq7', 'a'),
(11, 107, '2021-11-03 21:43:02', 'nX0NeI6Pld2pf9cmaSqTAb7YCohjZ3', 'a'),
(12, 108, '2021-11-03 21:49:54', 'U9ILQrZtTCdc4SN10sP5pAMmiah763', 'a'),
(13, 109, '2021-11-03 22:12:31', 'kp59rtm7ah83I2PndsXl4i6cgCjNoq', 'a'),
(14, 110, '2021-11-04 09:50:08', 'Ql9Id870qon16pcCAMeU4r3mTXSjs5', 'a'),
(15, 0, '2021-11-22 11:16:02', 'TZofl6ie4397brkc0QpXNYqtIgnLCs', 'a'),
(16, 0, '2021-11-22 11:18:12', 'N1j38l4YsZ2SXCQ6r0iPdf5kLAMUha', 'a'),
(17, 0, '2021-11-22 11:30:31', '2YTtaeN9skfI8MjLP6g7ZnU4A1Qihr', 'a'),
(18, 0, '2021-11-22 13:54:42', '1ISfPrq65joT0bAXUm42CZkYdcMa78', 'a'),
(19, 0, '2021-11-22 13:58:34', 'arX3gY9dMNiefAI5Tkl8ojns1C7U0t', 'a'),
(20, 0, '2021-11-22 14:06:30', '1XNhbC4mpo6T9dUsg50lLqaeX27IZr', 'a'),
(21, 0, '2021-11-22 14:07:49', '8roie1Sl3La795Qp4XT6AjXthbZCIU', 'a'),
(22, 0, '2021-11-22 14:08:24', 'ibpLorXjaX23c780q5mNPT1ntS6QfU', 'a'),
(23, 0, '2021-11-22 14:11:20', '3XA6edbjg1toN9i7TXp4ChLmfUrS0n', 'a'),
(24, 0, '2021-11-22 14:14:51', 'C8rjQm9dUYTi7Zn2p3MteAPl6cqfoN', 'a'),
(25, 0, '2021-11-22 14:21:04', 'i2XmrQtPLeY1bsadfChcp4MkTn0qAS', 'a'),
(26, 0, '2021-11-22 14:23:05', 'q5Ue47jCZbScpInP2QLtXhrl8gdXA0', 'a'),
(27, 0, '2021-11-22 14:26:02', 'Xa68i5h0231UTqQpX9bjlAPgM7Irnd', 'a'),
(28, 0, '2021-11-22 14:28:28', '0QXo1d3mfNreL4ZUIgT9pX25kPlat7', 'a'),
(29, 0, '2021-11-22 14:29:02', 'jXqNZfb0oQdn97rmhA4els25aM1Tcg', 'a'),
(30, 0, '2021-11-22 14:30:31', '9ZIh1nY3soAmfSgd5rTicQ06tpj4Mq', 'a'),
(31, 111, '2021-11-22 14:34:09', 'abZY6Ls4fAitjImM3dgUcXk05CeqnP', 'a'),
(32, 112, '2021-11-22 14:34:26', 'qgni1T6LCkcp2I5UXrsY7o4maPh0bS', 'a'),
(33, 113, '2021-11-22 14:35:17', 'j0N3IlkQmhL2TAa9pYsoX5PcCfnXgM', 'a'),
(34, 114, '2021-11-22 14:36:06', 'Uo8L69sm0NcjpZ7IXq3ftT14lhXMgd', 'a'),
(35, 115, '2021-11-22 14:37:40', 'fZlqpCisPAagX8r35jY1742nLQMct9', 'a');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_by`, `profile_pic`, `num_posts`, `num_likes`, `user_closed`, `friend_array`, `user_roll`) VALUES
(82, 'Sivamyouri_param', '2018ab123@stu.fos.cmb.ac.lk', '104827e490dbbdbd83866776079d2cd0', '2021-10-20 00:00:00', '../../public/img/profile_pics/Sivamyouri_param397d98e57b5be99d92cca4b93b2078fbn.jpeg', 0, 0, 'no', ',Supun_bhanuka,Nimesh_nishamal,', 'user'),
(81, 'Supun_Bhanuka', '2019lac12@stu.foa.cmb.ac.lk', 'c28a340921221fc7cffbb81ae3a782cb', '2021-10-20 00:00:00', '../../public/img/profile_pics/nameaf0a706a6e66ebdeba0813bb7b8a24ean.jpeg', 0, 0, 'no', ',Sivamyouri_param,Nimesh_nishamal,', 'user'),
(80, 'Asela_pathirage', '2019is053@stu.ucsc.cmb.ac.lk', '9f640e36323b7bd08971f42f0a74b706', '2021-10-20 00:00:00', '../../public/img/profile_pics/Asela_pathirage73a3fbc1f8f789248ac90493377ecd11n.jpeg', 1, 0, 'no', ',', 'user'),
(83, 'Pamathi_gunarathne', '2018abc123@stu.fmf.cmb.ac.lk', 'f18db8ecbf583e4f0bdf060b28216a01', '2021-10-20 00:00:00', '../../public/img/profile_pics/Pamathi_gunarathne9ef098daa2c62e8f9937de20a76c4daan.jpeg', 1, 1, 'no', ',', 'user'),
(77, 'Lavinka_weerasekara', '2019is087@stu.ucsc.cmb.ac.lk', '6b22d7909031638d7c568829bbb3e3f8', '2021-10-20 00:00:00', '../../public/img/profile_pics/Lavinka_weerasekara2d6e6b59ccb6f8da27f46cdfe62c8ba9n.jpeg', 2, 1, 'no', ',Nimesh_nishamal,', 'user'),
(76, 'Nimesh_nishamal', '2019is052@stu.ucsc.cmb.ac.lk', '76ac9e19c7a1602866b130771962d2ec', '2021-10-20 00:00:00', '../../public/img/profile_pics/Nimesh_nishamal6d3dad16cf1daad56827990297fbfbffn.jpeg', 5, 5, 'no', ',Thavindu_ushan,Lavinka_weerasekara,Supun_Bhanuka,Sivamyouri_param,Thavindu_ushan,', 'user'),
(78, 'Hiruni_guruge', '2019is031@stu.ucsc.cmb.ac.lk', '4cfb7678d9aa3e2f1fab5b2223bdcb00', '2021-10-20 00:00:00', '../../public/img/profile_pics/Hiruni_guruge4d3138a834e59dd74222107144b9b9c4n.jpeg', 1, 0, 'no', ',', 'user'),
(79, 'Thavindu_ushan', '2019is050@stu.ucsc.cmb.ac.lk', 'ae96ec7f236356ad913a2f2b50f1690b', '2021-10-20 00:00:00', '../../public/img/profile_pics/Thavindu_ushand5a6c7548f05003c9c9cdb57398ec89an.jpeg', 1, 0, 'no', ',Nimesh_nishamal,', 'user'),
(84, 'Yohombu_abeysinghe', '2019is001@stu.ucsc.cmb.ac.lk', 'a5cb914b5f8ac751ded129866fbbf805', '2021-10-20 00:00:00', '../../public/img/profile_pics/Yohombu_abeysinghe413aa83d0d4229853e28d1a366e1c49an.jpeg', 0, 0, 'no', ',', 'user'),
(87, 'Hansy_nawanjana', '2018st044@stu.science.cmb.ac.lk', 'bdd45d2597667f853849c7c3239e83f6', '2021-10-21 00:00:00', '../../public/img/profile_pics/Hansy_nawanjanaedb3009c8a45d73d5d547abe4555a7b3n.jpeg', 2, 0, 'no', ',', 'user'),
(88, 'Naduni_liyanage', '2018st040@stu.stat.cmb.ac.lk', 'a5be7fd161991e79a3d93c1597f5ce1e', '2021-10-21 00:00:00', '../../public/img/profile_pics/Naduni_liyanagef06a9456b2d1a627a70dcfb0bf9791a8n.jpeg', 1, 0, 'no', ',', 'user'),
(90, 'Nadun_chamod', '2020st004@stu.stat.cmb.ac.lk', '841dd5d6df643886698900112508fff0', '2021-10-21 00:00:00', '../../public/img/profile_pics/Nadun_chamod87a40ea6ede78d09eb644d999f6f0af6n.jpeg', 1, 0, 'no', ',', 'user'),
(91, 'Naween_raajan', '2020is426@stu.ucsc.cmb.ac.lk', '5d2ae6efe9505c814e4b0ff9c26566a5', '2021-10-21 00:00:00', '../../public/img/profile_pics/Naween_raajan3f3bcf5b012e1a11c66495aae427631dn.jpeg', 1, 0, 'no', ',', 'user'),
(92, 'Ranahansa_wickramarathne', '2017st016@stu.stat.cmb.ac.lk', '05c4c702c4050210c138943c32abbda8', '2021-10-21 00:00:00', '../../public/img/profile_pics/Ranahansa_wickramarathne49ee8c2b122be50ba5426648e326d257n.jpeg', 1, 0, 'no', ',', 'user'),
(93, 'Udayantha_namal', '2017ss098@stu.ssp.cmb.ac.lk', 'cd1edf95498952bc3f1c3a551ff1f01b', '2021-10-21 00:00:00', '../../public/img/profile_pics/Udayantha_namal5182488cf433ce9efd01cba760e1773bn.jpeg', 0, 0, 'no', ',', 'user'),
(94, 'Nithasha_pooliyadda', '2018fs067@stu.fos.cmb.ac.lk', '1561ac1be3e8dd2f3aebc6e546ed164b', '2021-10-21 00:00:00', '../../public/img/profile_pics/Nithasha_pooliyadda6d0a9551a8cb9ad4b55ea4bd9fe0423fn.jpeg', 1, 0, 'no', ',', 'user'),
(95, 'Sakuna_samaranaayaka', '2016fa144@stu.fos.cmb.ac.lk', '1cf882cfd28a1ac3f1df68ac542e03cb', '2021-10-21 00:00:00', '../../public/img/profile_pics/Sakuna_samaranaayaka3fa431b2764f540f62b2e972f0710e29n.jpeg', 0, 0, 'no', ',', 'user'),
(104, 'Lalanka', '2014ss098@stu.ssp.cmb.ac.lk', '862aff11ea708c00ba1e9ecb8b72a419', '2021-11-03 21:34:29', '../../public/img/profile_pics/defaults/head_emerald.png', 0, 0, 'P', ',', 'user'),
(107, 'Sethi', 'Sethi@stu.ucsc.cmb.ac.lk', '90c3665c7786286b3e1492e728b1a3e2', '2021-11-03 21:43:02', '../../public/img/profile_pics/defaults/head_emerald.png', 0, 0, 'P', ',', 'user'),
(110, 'Akila', '2019is043@stu.ucsc.cmb.ac.lk', '77cb2899cf0a7a8d52eca93d410df665', '2021-11-04 09:50:08', '../../public/img/profile_pics/defaults/head_emerald.png', 0, 0, 'P', ',', 'Admin'),
(111, 'Naveen', '2019is041@stu.ucsc.cmb.ac.lk', '3ae5d705bccf25d99ba4a3720237f455', '2021-11-22 14:34:09', '../../public/img/profile_pics/defaults/head_emerald.png', 0, 0, 'P', ',', ''),
(112, 'Naveen', '2019is041@stu.ucsc.cmb.ac.lk', 'naveen123', '2021-11-22 14:34:26', '../../public/img/profile_pics/defaults/head_emerald.png', 0, 0, 'P', ',', ''),
(113, 'Naveen', '2019is041@stu.ucsc.cmb.ac.lk', 'naveen123', '2021-11-22 14:35:17', '../../public/img/profile_pics/defaults/head_emerald.png', 0, 0, 'P', ',', ''),
(114, 'Naveen', '2019is041@stu.ucsc.cmb.ac.lk', 'naveen123', '2021-11-22 14:36:06', '../../public/img/profile_pics/defaults/head_deep_blue.png', 0, 0, 'P', ',', ''),
(115, 'Nish', 'Nnimeshnishamal1999@gmail.com', 'ecef945b299e6e44151345ea4aebf932', '2021-11-22 14:37:40', '../../public/img/profile_pics/defaults/head_deep_blue.png', 0, 0, 'P', ',', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
