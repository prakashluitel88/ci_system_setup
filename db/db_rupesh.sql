-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2014 at 01:35 PM
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
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `from` varchar(255) NOT NULL DEFAULT '',
  `to` varchar(255) NOT NULL DEFAULT '',
  `message` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `recd` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `to` (`to`),
  KEY `from` (`from`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `from`, `to`, `message`, `sent`, `recd`) VALUES
(68, 'rupesh', 'prakash', 'tst', '2014-09-19 13:34:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_name` varchar(64) DEFAULT NULL,
  `message` text,
  `post_time` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=182 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `user_id`, `user_name`, `message`, `post_time`) VALUES
(181, 46, 'rupesh', 'test', '5:19 PM');

-- --------------------------------------------------------

--
-- Table structure for table `prak_group`
--

CREATE TABLE IF NOT EXISTS `prak_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `prak_group`
--

INSERT INTO `prak_group` (`id`, `name`, `description`) VALUES
(4, 'admin', 'admin section of group'),
(5, 'marketing', 'This is for Marketing section ..........');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `prak_role`
--

INSERT INTO `prak_role` (`id`, `group_id`, `name`, `description`) VALUES
(3, 4, 'role3', 'aaaaaa'),
(23, 4, 'role2', 'sdfsdf'),
(29, 4, 'role1', 'jhelu\r\n');

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
('42b6955e55fd348dccb3977a0df02e5f', '::1', 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.120 Safari/537.36', 1411126488, ''),
('8effe149c9823d2d23a44bff9baeafd4', '::1', 'Mozilla/5.0 (Windows NT 6.2; rv:32.0) Gecko/20100101 Firefox/32.0', 1411126481, '');

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
  `enabled` tinyint(4) DEFAULT '0',
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `prak_user`
--

INSERT INTO `prak_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `credentials_expired`, `credentials_expire_at`, `roles`) VALUES
(46, 'rupesh', NULL, NULL, NULL, 0, NULL, '6dc51c0db6d309303c48eb429b8efbb3b3c87c64f1ea2f2a8e01f1d8932aaccabcdedf623925e5259a84959c134b4cbf018f06a03e3a42b3327e67f780d40366', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'roles'),
(47, 'prakash', NULL, NULL, NULL, 0, NULL, 'cef4817824cea8cf2bb83fa3f1e81b3f8aaf4be19ad563264e36102c0c1f87204fb66bc1e5a20698ab3692c985b861dcdbaa58f13dca5af0d55c1ffb9e90f5b2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'roles'),
(48, 'sumant', NULL, NULL, NULL, 0, NULL, 'b93c5f5c56f13709f72dd3e44d552745b627a83fd6089e6dc5a716eeea0a8d8823caf93f85bf8bb68d68fa5cfd12b5bdb999b00a43253cc9a3e27b1b5e3296be', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'roles'),
(49, 'bijesh', NULL, NULL, NULL, 0, NULL, 'e97d1d095e8316ff0921c10614793544641137060cfb631dd0e873c278c356a41023813da61fb01329787aec1349e233ea6887eed91d8b3a94cc59adad440358', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'roles');

-- --------------------------------------------------------

--
-- Table structure for table `prak_user_group`
--

CREATE TABLE IF NOT EXISTS `prak_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `user_group_FI_2` (`group_id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prak_user_group`
--

INSERT INTO `prak_user_group` (`user_id`, `group_id`, `role_id`) VALUES
(48, 4, 3),
(47, 4, 23),
(46, 4, 29),
(49, 4, 29);

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
  ADD CONSTRAINT `user_group_FK_2` FOREIGN KEY (`group_id`) REFERENCES `prak_group` (`id`),
  ADD CONSTRAINT `user_role_FK_22` FOREIGN KEY (`role_id`) REFERENCES `prak_role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
