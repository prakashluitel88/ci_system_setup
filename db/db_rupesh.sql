-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2014 at 01:57 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_db_format`
--

-- --------------------------------------------------------

--
-- Table structure for table `prak_group`
--

CREATE TABLE IF NOT EXISTS `prak_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=94 ;

--
-- Dumping data for table `prak_group`
--

INSERT INTO `prak_group` (`id`, `name`, `description`) VALUES
(4, 'admin', 'admin section of group'),
(5, 'marketing', 'This is for Marketing section ..........'),
(6, 'check', 'c heonaolav'),
(7, 'dsafas', 'dfasfasdfa'),
(8, 'sdafearatgdsa', 'asdfasdgasdfera'),
(9, 'dahythsdvs', 'fdasfdasdfasdfasfda'),
(10, 'thtis', 'this that'),
(12, 'dasf', 'asdfas'),
(13, 'sdfsaa', 'sdafasdf'),
(19, 'sasdfas', 's'),
(20, 'sasdfasdf', 's'),
(21, 'sasdfasd', 's'),
(22, 'sasdfa', 's'),
(24, 'dsafsadfasf', 'a@a.com'),
(25, 'aaaaaaa', 'aasfdasdfa'),
(26, 'dasfasdf', 'dasffdsaf'),
(27, 'dsafas', 'dasfasdfa'),
(28, 'sadfas', 'dsafasdfas'),
(29, 'refcdasf', 'asfasdfas'),
(30, 'dsafasdfas', 'fdsafasdfasfas'),
(31, 'aaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(32, 'dsafdsafasdfasdfas', 'fasdfasdfasdfa'),
(33, 'dasfa', 'dsafasdf'),
(34, 'aaaaaaaa', 'dasgasdfa'),
(35, 'sadfasdfa', 'dfasasdfasdfas'),
(36, 'dasfa', 'dasdfas'),
(37, 'sasfdasfasasfda', 'dsafasdfasdfa'),
(38, 'ddsafasd', 'fasdfasdfa'),
(39, 'dsafdsafasdf', 'dsafasdfa'),
(40, 'dsafa', 'dsafsdafa'),
(41, 'adsafas', 'dsafas'),
(42, 'dasfas', 'dasfasdfas'),
(43, 'dsafsaf', 'dfsafsafasdf'),
(44, 'dsafdsafasdf', 'dasfsadgasdfas'),
(45, 'fdsafas', 'dfsasdfasdfa'),
(49, 'dsfgfds', 'gsdfgsdfgs'),
(52, 'fdsgsd', 'fdsgsdfgs'),
(53, 'fasfdas', 'dsafasdfa'),
(54, 'dsafsadf', 'asdfasfasf'),
(55, 'dsafdasf', 'asfasdfas'),
(57, 'dfsafasdfas', 'dfasfasdfas'),
(58, 'dsafasdf', 'asdfasdfas'),
(60, 'dsafasdfasf', 'adsafasdfas'),
(61, 'fasdfasfd', 'dsfafas'),
(62, 'dsafas', 'dfsaasdfasdfa'),
(63, 'fdsafasdfdsafa', 'dsfdsafasdsafasdf'),
(64, 'dsafsadfas', 'fdsafasdfas'),
(65, 'adsaf', 'aasdf'),
(66, 'aaaa', 'aaaaa'),
(67, 'aaaa', 'sdfsfdsfsdfds'),
(68, 'sdafdsa', 'fasdfasdfa'),
(69, 'fsadfa', 'dfsafasdf'),
(70, 'dfsaf', 'fdsafasdfa'),
(71, 'afasdfasfdas', 'dfdsafasdfasdfas'),
(72, 'dsafdsafasd', 'fasfasdfas'),
(73, 'ddfsafsad', 'fsdafsdafasd'),
(74, 'test', 'testetest tset '),
(75, 'zzzz', 'zzzzzzzz zzzzz zzzz '),
(76, 'designer', 'test desiner'),
(77, 'testt', 'estet'),
(78, 'gropu', 'gropup desc'),
(79, 'gropu', 'gropup desc'),
(80, 'test', 'testest '),
(81, '143', '143 '),
(82, 'easy', 'test.group'),
(83, 'sdfdf', 'dfdfdfdfdffdfdfd'),
(84, 'sdfdf', 'dfdfdfdfdffdfdfd'),
(85, 'test', 'testst'),
(86, 'testestst', 'testst'),
(87, 'crtsdfxfgxtg', 'cfghcghchq'),
(88, 'dfdf', 'dfdfdf'),
(89, 'ttetet', 'tetetet'),
(90, 'dfdf', 'dfdfd'),
(91, 'dsfdf', 'dfdfd'),
(92, '2222222222', 'dfdfdfdf'),
(93, 'test', 'testt');

-- --------------------------------------------------------

--
-- Table structure for table `prak_language`
--

CREATE TABLE IF NOT EXISTS `prak_language` (
  `id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prak_language`
--

INSERT INTO `prak_language` (`id`, `language`, `locale`) VALUES
(1, 'english', 'en'),
(2, 'japan', 'jp'),
(3, 'french', 'fr');

-- --------------------------------------------------------

--
-- Table structure for table `prak_menu`
--

CREATE TABLE IF NOT EXISTS `prak_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `link_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'uri',
  `page_id` int(11) NOT NULL DEFAULT '0',
  `module_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `uri` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `prak_group_id` int(11) NOT NULL DEFAULT '0',
  `position` int(5) NOT NULL DEFAULT '0',
  `target` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_parent` tinyint(1) NOT NULL DEFAULT '0',
  `show_menu` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `prak_group_id - normal` (`prak_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `prak_menu`
--

INSERT INTO `prak_menu` (`id`, `title`, `link_type`, `page_id`, `module_name`, `url`, `uri`, `prak_group_id`, `position`, `target`, `parent_id`, `is_parent`, `show_menu`) VALUES
(1, 'Category 1', 'page', 1, '', 'http://www.category1.com', '', 1, 0, '', 0, 1, '1'),
(2, 'Category 2', 'page', 2, '', 'http://www.category2.com', '', 1, 0, '', 0, 0, '1'),
(3, 'Category 3', 'page', 3, '', 'http://www.category3.com', '', 1, 0, '', 0, 0, '1'),
(4, 'Category 4', 'page', 4, '', 'http://www.category4.com', '', 1, 0, '', 0, 0, '1'),
(5, 'Category 1 - 1', 'page', 5, '', 'http://www.category11.com', '', 1, 0, '', 1, 0, '1'),
(6, 'Category 1 - 2', 'page', 6, '', 'http://www.category12.com', '', 1, 0, '', 1, 1, '1'),
(7, 'Category 1 - 2 - 1', 'page', 7, '', 'http://www.category121.com', '', 1, 0, '', 6, 0, '1'),
(8, 'Category 1 - 2 - 2', 'page', 8, '', 'http://www.category122.com', '', 1, 0, '', 6, 1, '1'),
(9, 'Category 1 - 2 - 2 - 1', 'page', 9, '', 'http://www.category1221.com', '', 1, 0, '', 8, 0, '1'),
(10, 'Category 1 - 2 - 2 - 2', 'page', 10, '', 'http://www.category1222.com', '', 1, 0, '', 8, 0, '1'),
(11, 'Category 3 - 1', 'page', 11, '', 'http://www.category31.com', '', 1, 0, '', 3, 1, '1'),
(12, 'Category 3 - 2', 'page', 12, '', 'http://www.category32.com', '', 1, 0, '', 3, 0, '1'),
(13, 'Category 3 - 3', 'page', 13, '', 'http://www.category33.com', '', 1, 0, '', 3, 0, '1'),
(14, 'Category 3 - 4', 'page', 14, '', 'http://www.category34.com', '', 1, 0, '', 3, 0, '1'),
(15, 'Category 3 - 5', 'page', 15, '', 'http://www.category35.com', '', 1, 0, '', 3, 0, '1'),
(16, 'Category 3 - 6', 'page', 16, '', 'http://www.category36.com', '', 1, 0, '', 3, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `prak_menu_groups`
--

CREATE TABLE IF NOT EXISTS `prak_menu_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Navigation groupings. Eg, header, sidebar, footer, etc' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `prak_menu_groups`
--

INSERT INTO `prak_menu_groups` (`id`, `title`, `abbrev`) VALUES
(1, 'Header', 'header'),
(2, 'Sidebar', 'sidebar'),
(3, 'Footer', 'footer'),
(4, 'Topbar', 'topbar'),
(5, 'Sidebar1', 'sidebar1'),
(6, 'Sidebar2', 'sidebar2');

-- --------------------------------------------------------

--
-- Table structure for table `prak_role`
--

CREATE TABLE IF NOT EXISTS `prak_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `user_role_FK_1` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `prak_role`
--

INSERT INTO `prak_role` (`id`, `group_id`, `name`, `description`) VALUES
(1, 24, 'dsafdasf', 'sdfasdfasd'),
(2, 4, 'test', 'testt'),
(3, 4, 'aaaaa', 'aaaaaa'),
(4, 5, 'role_marketing', 'marketing description'),
(5, 5, 'role1_marketing', 'marketing1 description '),
(6, 5, 'role1_marketingd', 'marketing1 descriptiond '),
(7, 4, '1212', '121221'),
(8, 5, 'adfdf', 'adfdf'),
(9, 6, 'test', 'testest'),
(10, 74, 'testt', 'estest'),
(11, 76, 'jhelu', 'testing description '),
(12, 4, 'testt', 'testetesttest sat ates aset asetsa taset setas taset saetast saets at'),
(13, 6, 'sdfsdf', 'dsfdf'),
(14, 4, 'dfasdfdf', 'sdafsdfsdf'),
(15, 7, 'dfdfdf', 'dfdfdf'),
(16, 19, '', ''),
(17, 7, 'test', 'testetst'),
(18, 7, 'testset', 'testset'),
(19, 4, 'testst', 'testst'),
(20, 5, 'test', 'testset'),
(21, 5, 'test', 'testset'),
(22, 4, 'sdfdf', 'sdfsdf'),
(23, 4, 'sdfdf', 'sdfsdf'),
(24, 4, 'dfsdfdf', 'dfdfdfdf'),
(25, 4, 'dfsdfdf', 'dfdfdfdf'),
(26, 8, 'sdsd', 'sdsdsdsd'),
(27, 8, 'sdsd', 'sdsdsdsd'),
(28, 4, 'jhelu', 'jhelu\r\n'),
(29, 4, 'jhelu', 'jhelu\r\n'),
(30, 4, 'pakacha', 'pakacha'),
(31, 5, 'test', 'testt'),
(32, 4, 'sdfd', 'sdfsdf'),
(33, 4, 'asdfsdf', 'sdfsdf'),
(34, 5, 'sdfsdf', 'dsfdf'),
(35, 6, '', ''),
(36, 5, 'gvbjuju', 'bygbgbuy');

-- --------------------------------------------------------

--
-- Table structure for table `prak_sessions`
--

CREATE TABLE IF NOT EXISTS `prak_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `prak_sessions`
--

INSERT INTO `prak_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('409d1dbb40f046c2f8da5c7bbe13b987', '::1', 'Mozilla/5.0 (Windows NT 6.2; rv:32.0) Gecko/20100101 Firefox/32.0', 1410432032, ''),
('7df5d882af36a6923e86b9f4f0fae58a', '::1', 'Mozilla/5.0 (Windows NT 6.2; rv:32.0) Gecko/20100101 Firefox/32.0', 1410436625, 'a:5:{s:9:"user_data";s:0:"";s:6:"userid";s:2:"21";s:8:"username";s:6:"rupesh";s:5:"roles";s:1:"9";s:9:"validated";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `prak_user`
--

CREATE TABLE IF NOT EXISTS `prak_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `username_canonical` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_canonical` varchar(255) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '0',
  `salt` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) DEFAULT '0',
  `expired` tinyint(1) DEFAULT '0',
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `credentials_expired` tinyint(1) DEFAULT '0',
  `credentials_expire_at` datetime DEFAULT NULL,
  `roles` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `prak_user_U_1` (`username_canonical`),
  UNIQUE KEY `prak_user_U_2` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `prak_user`
--

INSERT INTO `prak_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `credentials_expired`, `credentials_expire_at`, `roles`) VALUES
(21, 'rupesh', 'dsaf', 'dsafsa', 'dsafsa', 1, 'dsafsa', '6dc51c0db6d309303c48eb429b8efbb3b3c87c64f1ea2f2a8e01f1d8932aaccabcdedf623925e5259a84959c134b4cbf018f06a03e3a42b3327e67f780d40366', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9'),
(22, 'test', NULL, NULL, NULL, 1, NULL, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9'),
(23, 'hello', NULL, NULL, NULL, 1, NULL, 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '13'),
(24, 'test', NULL, NULL, NULL, 1, NULL, '5f28fb0bf3e73fbead9742b87e4ba2e96678a5a58f666cc8b57f70c46a90f3126d6ba8053431829b80f96cc0d3813f9fe6585b819df5a7013a9343b074687e72', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4'),
(25, 'test', NULL, NULL, NULL, 1, NULL, 'cec7502182c074bb3d0c07f50d8e284fcb9bd275c530920152bc7a37151849eca85323d911bccc3f6c28b8ce9cc14fc462537bc3b54c64b47a44365c5cff028b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2'),
(26, 'vhvgyvct', NULL, NULL, NULL, 1, NULL, '74582d78e43926e1107ae48eb54b7772b00759fcf222f87006905799c6482caaca0766eb6e193081d09d92b259123da2fc63aeee4aebcd1757f50f6bfc2bb0f6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '17');

-- --------------------------------------------------------

--
-- Table structure for table `prak_user_group`
--

CREATE TABLE IF NOT EXISTS `prak_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `user_group_FI_2` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prak_user_profile`
--

CREATE TABLE IF NOT EXISTS `prak_user_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `salutation` varchar(15) DEFAULT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `given_names` varchar(100) DEFAULT NULL,
  `gender` varchar(1) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `dob` int(11) DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(30) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country_id` varchar(2) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `experience_id` int(3) NOT NULL DEFAULT '0',
  `organization_size` varchar(100) DEFAULT NULL,
  `organization_size_id` int(4) NOT NULL DEFAULT '0',
  `industry` varchar(128) DEFAULT NULL,
  `married` tinyint(1) NOT NULL DEFAULT '0',
  `children` int(2) DEFAULT '0',
  `stylesheet` varchar(255) DEFAULT NULL,
  `affiliate_id` int(11) DEFAULT NULL,
  `bounced_at` datetime DEFAULT NULL,
  `bounce_type` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `surname` (`surname`),
  KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prak_role`
--
ALTER TABLE `prak_role`
  ADD CONSTRAINT `user_role_FK_1` FOREIGN KEY (`group_id`) REFERENCES `prak_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prak_user_group`
--
ALTER TABLE `prak_user_group`
  ADD CONSTRAINT `user_group_FK_1` FOREIGN KEY (`user_id`) REFERENCES `prak_user` (`id`),
  ADD CONSTRAINT `user_group_FK_2` FOREIGN KEY (`group_id`) REFERENCES `prak_group` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
