/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.27 : Database - ci_db_format
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ci_db_format` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `ci_db_format`;

/*Table structure for table `pra_sessions` */

DROP TABLE IF EXISTS `pra_sessions`;

CREATE TABLE `pra_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `pra_sessions` */

LOCK TABLES `pra_sessions` WRITE;

insert  into `pra_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('5d6c10da89ee529fd0ddd3d1e3f6620a','::1','Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0',1407912284,'');

UNLOCK TABLES;

/*Table structure for table `prak_group` */

DROP TABLE IF EXISTS `prak_group`;

CREATE TABLE `prak_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roles` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `prak_group` */

LOCK TABLES `prak_group` WRITE;

UNLOCK TABLES;

/*Table structure for table `prak_user` */

DROP TABLE IF EXISTS `prak_user`;

CREATE TABLE `prak_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `username_canonical` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_canonical` varchar(255) DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT '0',
  `salt` varchar(255) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `prak_user` */

LOCK TABLES `prak_user` WRITE;

insert  into `prak_user`(`id`,`username`,`username_canonical`,`email`,`email_canonical`,`enabled`,`salt`,`password`,`last_login`,`locked`,`expired`,`expires_at`,`confirmation_token`,`password_requested_at`,`credentials_expired`,`credentials_expire_at`,`roles`) values (1,'prakash','','','',0,'prakash','prakash','0000-00-00 00:00:00',0,0,'0000-00-00 00:00:00','','0000-00-00 00:00:00',0,'0000-00-00 00:00:00','');

UNLOCK TABLES;

/*Table structure for table `prak_user_group` */

DROP TABLE IF EXISTS `prak_user_group`;

CREATE TABLE `prak_user_group` (
  `prak_user_id` int(11) NOT NULL,
  `prak_group_id` int(11) NOT NULL,
  `prak_user_profile_id` int(11) NOT NULL,
  PRIMARY KEY (`prak_user_id`,`prak_group_id`,`prak_user_profile_id`),
  KEY `prak_user_group_FI_2` (`prak_group_id`),
  KEY `prak_user_group_FK_3` (`prak_user_profile_id`),
  CONSTRAINT `prak_user_group_FK_1` FOREIGN KEY (`prak_user_id`) REFERENCES `prak_user` (`id`),
  CONSTRAINT `prak_user_group_FK_2` FOREIGN KEY (`prak_group_id`) REFERENCES `prak_group` (`id`),
  CONSTRAINT `prak_user_group_FK_3` FOREIGN KEY (`prak_user_profile_id`) REFERENCES `prak_user_profile` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `prak_user_group` */

LOCK TABLES `prak_user_group` WRITE;

UNLOCK TABLES;

/*Table structure for table `prak_user_profile` */

DROP TABLE IF EXISTS `prak_user_profile`;

CREATE TABLE `prak_user_profile` (
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

/*Data for the table `prak_user_profile` */

LOCK TABLES `prak_user_profile` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
