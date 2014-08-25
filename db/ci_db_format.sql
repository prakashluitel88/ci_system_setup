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

/*Table structure for table `prak_group` */

DROP TABLE IF EXISTS `prak_group`;

CREATE TABLE `prak_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

/*Data for the table `prak_group` */

LOCK TABLES `prak_group` WRITE;

insert  into `prak_group`(`id`,`name`,`description`) values (4,'admin','admin section of group'),(5,'marketing','This is for Marketing section ..........'),(6,'check','c heonaolav'),(7,'dsafas','dfasfasdfa'),(8,'sdafearatgdsa','asdfasdgasdfera'),(9,'dahythsdvs','fdasfdasdfasdfasfda'),(10,'thtis','this that'),(12,'dasf','asdfas'),(13,'sdfsaa','sdafasdf'),(19,'sasdfas','s'),(20,'sasdfasdf','s'),(21,'sasdfasd','s'),(22,'sasdfa','s'),(24,'dsafsadfasf','a@a.com'),(25,'aaaaaaa','aasfdasdfa'),(26,'dasfasdf','dasffdsaf'),(27,'dsafas','dasfasdfa'),(28,'sadfas','dsafasdfas'),(29,'refcdasf','asfasdfas'),(30,'dsafasdfas','fdsafasdfasfas'),(31,'aaaaaaaaaaaaaaaaaaaaa','aaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),(32,'dsafdsafasdfasdfas','fasdfasdfasdfa'),(33,'dasfa','dsafasdf'),(34,'aaaaaaaa','dasgasdfa'),(35,'sadfasdfa','dfasasdfasdfas'),(36,'dasfa','dasdfas'),(37,'sasfdasfasasfda','dsafasdfasdfa'),(38,'ddsafasd','fasdfasdfa'),(39,'dsafdsafasdf','dsafasdfa'),(40,'dsafa','dsafsdafa'),(41,'adsafas','dsafas'),(42,'dasfas','dasfasdfas'),(43,'dsafsaf','dfsafsafasdf'),(44,'dsafdsafasdf','dasfsadgasdfas'),(45,'fdsafas','dfsasdfasdfa'),(49,'dsfgfds','gsdfgsdfgs'),(52,'fdsgsd','fdsgsdfgs'),(53,'fasfdas','dsafasdfa'),(54,'dsafsadf','asdfasfasf'),(55,'dsafdasf','asfasdfas'),(57,'dfsafasdfas','dfasfasdfas'),(58,'dsafasdf','asdfasdfas'),(60,'dsafasdfasf','adsafasdfas'),(61,'fasdfasfd','dsfafas'),(62,'dsafas','dfsaasdfasdfa'),(63,'fdsafasdfdsafa','dsfdsafasdsafasdf'),(64,'dsafsadfas','fdsafasdfas'),(65,'adsaf','aasdf'),(66,'aaaa','aaaaa'),(67,'aaaa','sdfsfdsfsdfds'),(68,'sdafdsa','fasdfasdfa'),(69,'fsadfa','dfsafasdf'),(70,'dfsaf','fdsafasdfa'),(71,'afasdfasfdas','dfdsafasdfasdfas'),(72,'dsafdsafasd','fasfasdfas'),(73,'ddfsafsad','fsdafsdafasd');

UNLOCK TABLES;

/*Table structure for table `prak_language` */

DROP TABLE IF EXISTS `prak_language`;

CREATE TABLE `prak_language` (
  `id` int(11) NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `prak_language` */

LOCK TABLES `prak_language` WRITE;

insert  into `prak_language`(`id`,`language`,`locale`) values (1,'english','en'),(2,'japan','jp'),(3,'french','fr');

UNLOCK TABLES;

/*Table structure for table `prak_menu` */

DROP TABLE IF EXISTS `prak_menu`;

CREATE TABLE `prak_menu` (
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `prak_menu` */

LOCK TABLES `prak_menu` WRITE;

insert  into `prak_menu`(`id`,`title`,`link_type`,`page_id`,`module_name`,`url`,`uri`,`prak_group_id`,`position`,`target`,`parent_id`,`is_parent`,`show_menu`) values (1,'Category 1','page',1,'','http://www.category1.com','',1,0,'',0,1,'1'),(2,'Category 2','page',2,'','http://www.category2.com','',1,0,'',0,0,'1'),(3,'Category 3','page',3,'','http://www.category3.com','',1,0,'',0,0,'1'),(4,'Category 4','page',4,'','http://www.category4.com','',1,0,'',0,0,'1'),(5,'Category 1 - 1','page',5,'','http://www.category11.com','',1,0,'',1,0,'1'),(6,'Category 1 - 2','page',6,'','http://www.category12.com','',1,0,'',1,1,'1'),(7,'Category 1 - 2 - 1','page',7,'','http://www.category121.com','',1,0,'',6,0,'1'),(8,'Category 1 - 2 - 2','page',8,'','http://www.category122.com','',1,0,'',6,1,'1'),(9,'Category 1 - 2 - 2 - 1','page',9,'','http://www.category1221.com','',1,0,'',8,0,'1'),(10,'Category 1 - 2 - 2 - 2','page',10,'','http://www.category1222.com','',1,0,'',8,0,'1'),(11,'Category 3 - 1','page',11,'','http://www.category31.com','',1,0,'',3,1,'1'),(12,'Category 3 - 2','page',12,'','http://www.category32.com','',1,0,'',3,0,'1'),(13,'Category 3 - 3','page',13,'','http://www.category33.com','',1,0,'',3,0,'1'),(14,'Category 3 - 4','page',14,'','http://www.category34.com','',1,0,'',3,0,'1'),(15,'Category 3 - 5','page',15,'','http://www.category35.com','',1,0,'',3,0,'1'),(16,'Category 3 - 6','page',16,'','http://www.category36.com','',1,0,'',3,0,'1');

UNLOCK TABLES;

/*Table structure for table `prak_menu_groups` */

DROP TABLE IF EXISTS `prak_menu_groups`;

CREATE TABLE `prak_menu_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Navigation groupings. Eg, header, sidebar, footer, etc';

/*Data for the table `prak_menu_groups` */

LOCK TABLES `prak_menu_groups` WRITE;

insert  into `prak_menu_groups`(`id`,`title`,`abbrev`) values (1,'Header','header'),(2,'Sidebar','sidebar'),(3,'Footer','footer'),(4,'Topbar','topbar'),(5,'Sidebar1','sidebar1'),(6,'Sidebar2','sidebar2');

UNLOCK TABLES;

/*Table structure for table `prak_role` */

DROP TABLE IF EXISTS `prak_role`;

CREATE TABLE `prak_role` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `user_role_FK_1` (`group_id`),
  CONSTRAINT `user_role_FK_1` FOREIGN KEY (`group_id`) REFERENCES `prak_group` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `prak_role` */

LOCK TABLES `prak_role` WRITE;

UNLOCK TABLES;

/*Table structure for table `prak_sessions` */

DROP TABLE IF EXISTS `prak_sessions`;

CREATE TABLE `prak_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `user_agent` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `prak_sessions` */

LOCK TABLES `prak_sessions` WRITE;

insert  into `prak_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('0eba1110c89a0abd40f30ef23b0b12bd','::1','0',1408946566,''),('1ccdb467cca1f9d60afb68fe840dbfc6','::1','0',1408946186,''),('29e6597653ad72b831e33b1733480489','::1','0',1408945341,''),('7094ac99439580e3914312bafa8635ed','::1','0',1408945253,''),('81442709b14464500a935c29acaf0480','::1','0',1408946548,''),('881d3a68d901151ea18e05087aed3ffb','::1','0',1408946228,''),('8ae526eca6f2ed27f77b10f6718250be','::1','0',1408944180,''),('8b75da74f41941d22951433509ab7cf7','::1','0',1408946416,''),('8da9a5a31ea2b737624be6821af8058c','::1','0',1408946486,''),('8e04747939921affe3b70ec862813b1d','::1','Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0',1408948680,''),('8e31fcd45cd6c37ab4a78f044780a4c6','::1','0',1408945462,''),('8edd12cd3a4cab79be0e4b202d209618','::1','0',1408946185,''),('8f23a883a7e870b4ba0f150b2ccf45e9','::1','0',1408945454,''),('9c19aba0e9a260bc54a5943ab9522f41','::1','0',1408944201,''),('a1d24264489d6502b0ea71738468653b','::1','0',1408946519,''),('a9f46009d4570255abbab41e099c1f4c','::1','0',1408946005,''),('b0d5a20a938181bb9be156fa3969932b','::1','0',1408944945,''),('b0e7b6e2dced1528fc9e7be6ed6cfd1d','::1','0',1408946475,''),('b1ba5fff137d9cf8ec615c3f450326aa','::1','0',1408944604,''),('b1d32c125b60e28792d5cfb8ee738060','::1','0',1408946514,''),('c91aad73edc482b6014b388aefae76c0','::1','0',1408945166,''),('cca4db9de80b75257b3878326745e508','::1','0',1408944205,''),('d5b4e56eb18d1bc928234421369721bd','::1','Mozilla/5.0 (Windows NT 6.1; rv:31.0) Gecko/20100101 Firefox/31.0',1408944358,''),('e34469edf904acfb64683996c2e1301d','::1','0',1408945996,'');

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
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `user_group_FI_2` (`group_id`),
  CONSTRAINT `user_group_FK_1` FOREIGN KEY (`user_id`) REFERENCES `prak_user` (`id`),
  CONSTRAINT `user_group_FK_2` FOREIGN KEY (`group_id`) REFERENCES `prak_group` (`id`)
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
