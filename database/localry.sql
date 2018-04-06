# Host: localhost  (Version 5.5.5-10.1.28-MariaDB)
# Date: 2018-04-06 21:58:47
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "attaches"
#

DROP TABLE IF EXISTS `attaches`;
CREATE TABLE `attaches` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) NOT NULL,
  `attach_file` mediumtext NOT NULL,
  `attach_sort` int(11) DEFAULT '0',
  `attach_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "attaches"
#

INSERT INTO `attaches` VALUES (1,15,'{\"TH\":\"youtube-thumbnail-1522995085.jpg\"}',0,'content-thumbnail','2018-04-06 13:11:26','2018-04-06 13:11:26'),(2,16,'{\"TH\":\"youtube-thumbnail-1522995147.jpg\"}',0,'content-thumbnail','2018-04-06 13:12:28','2018-04-06 13:12:28'),(3,17,'{\"TH\":\"youtube-thumbnail-1522995230.jpg\"}',0,'content-thumbnail','2018-04-06 13:13:50','2018-04-06 13:13:50'),(4,19,'{\"TH\":\"youtube-thumbnail-1522995749.jpg\"}',0,'content-thumbnail','2018-04-06 13:22:30','2018-04-06 13:22:30'),(5,20,'{\"TH\":\"youtube-thumbnail-1522995781.jpg\"}',0,'content-thumbnail','2018-04-06 13:23:01','2018-04-06 13:23:01'),(6,21,'{\"TH\":\"youtube-thumbnail-1522995823.jpg\"}',0,'content-thumbnail','2018-04-06 13:23:43','2018-04-06 13:23:43'),(7,22,'{\"TH\":\"youtube-thumbnail-1522995888.jpg\"}',0,'content-thumbnail','2018-04-06 13:24:52','2018-04-06 13:24:52'),(8,23,'{\"TH\":\"youtube-thumbnail-1522996525.jpg\"}',0,'content-thumbnail','2018-04-06 13:35:25','2018-04-06 13:35:25'),(9,24,'{\"TH\":\"youtube-thumbnail-1522996609.jpg\"}',0,'content-thumbnail','2018-04-06 13:36:49','2018-04-06 13:36:49'),(10,25,'{\"TH\":\"youtube-thumbnail-1522997766.jpg\"}',0,'content-thumbnail','2018-04-06 13:56:07','2018-04-06 13:56:07'),(11,26,'{\"TH\":\"youtube-thumbnail-1522997800.jpg\"}',0,'content-thumbnail','2018-04-06 13:56:40','2018-04-06 13:56:40'),(12,27,'{\"TH\":\"youtube-thumbnail-1522997826.jpg\"}',0,'content-thumbnail','2018-04-06 13:57:07','2018-04-06 13:57:07'),(13,28,'{\"TH\":\"youtube-thumbnail-1522997855.jpg\"}',0,'content-thumbnail','2018-04-06 13:57:36','2018-04-06 13:57:36');

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ref_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `category_type` varchar(20) NOT NULL,
  `category_sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,0,'{\"TH\":\"FEATURE VIDEO\",\"CH\":\"\\u529f\\u80fd\\u8996\\u983b\"}','menu',1,'2018-03-28 15:40:39','2018-04-06 10:13:35'),(2,0,'{\"TH\":\"FASHION & BEAUTY\",\"CH\":\"\\u6642\\u5c1a\\u8207\\u7f8e\\u5bb9\"}','menu',2,'2018-04-06 10:10:55','2018-04-06 10:13:09'),(3,0,'{\"TH\":\"FOOD\",\"CH\":\"\\u9910\\u98f2\"}','menu',3,'2018-04-06 10:11:07','2018-04-06 10:12:36'),(4,0,'{\"TH\":\"TRAVEL\",\"CH\":\"\\u65c5\\u884c\"}','menu',4,'2018-04-06 10:12:08','2018-04-06 10:12:08'),(5,0,'{\"TH\":\"MUSIC\",\"CH\":\"\\u97f3\\u6a02\"}','menu',5,'2018-04-06 10:13:58','2018-04-06 10:13:58'),(6,0,'{\"TH\":\"PEOPLE\",\"CH\":\"\\u4eba\"}','menu',6,'2018-04-06 10:14:32','2018-04-06 10:14:32');

#
# Structure for table "contents"
#

DROP TABLE IF EXISTS `contents`;
CREATE TABLE `contents` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `tags` mediumtext NOT NULL,
  `video_link` mediumtext NOT NULL,
  `subject` mediumtext NOT NULL,
  `detail` text NOT NULL,
  `published` enum('Y','N') NOT NULL DEFAULT 'Y',
  `content_type` varchar(20) NOT NULL,
  `content_sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

#
# Data for table "contents"
#

INSERT INTO `contents` VALUES (15,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?time_continue=6&v=hh3pkA_ovyA\",\"CH\":\"\"}','{\"TH\":\"\\u0e15\\u0e37\\u0e48\\u0e19\\u0e2d\\u0e22\\u0e39\\u0e48\\u0e43\\u0e19\\u0e43\\u0e08\",\"CH\":\"\"}','{\"TH\":\"\",\"CH\":\"\"}','Y','content',0,'2018-04-06 13:11:25','2018-04-06 13:11:25'),(16,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=5f5AiG9BIP4&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"Heart Sale : \\u0e02\\u0e19\\u0e21\\u0e44\\u0e17\\u0e22\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e01\\u0e48\\u0e32 10 \\u0e1a\\u0e32\\u0e17\\u0e2d\\u0e23\\u0e48\\u0e2d\\u0e22\\u0e02\\u0e32\\u0e14\\u0e43\\u0e08\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>Heart Sale : \\u0e02\\u0e19\\u0e21\\u0e44\\u0e17\\u0e22\\u0e01\\u0e23\\u0e38\\u0e07\\u0e40\\u0e01\\u0e48\\u0e32 10 \\u0e1a\\u0e32\\u0e17\\u0e2d\\u0e23\\u0e48\\u0e2d\\u0e22\\u0e02\\u0e32\\u0e14\\u0e43\\u0e08<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:12:27','2018-04-06 13:12:27'),(17,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=1HFB0ShdnJc&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=9\",\"CH\":\"\"}','{\"TH\":\"\\u0e28\\u0e34\\u0e25\\u0e1b\\u0e34\\u0e19 \\u0e28\\u0e34\\u0e25\\u0e1b\\u0e30 \\u0e2a\\u0e31\\u0e08\\u0e08\\u0e30\\u0e41\\u0e25\\u0e30\\u0e0a\\u0e35\\u0e27\\u0e34\\u0e15\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>\\u0e28\\u0e34\\u0e25\\u0e1b\\u0e34\\u0e19 \\u0e28\\u0e34\\u0e25\\u0e1b\\u0e30 \\u0e2a\\u0e31\\u0e08\\u0e08\\u0e30\\u0e41\\u0e25\\u0e30\\u0e0a\\u0e35\\u0e27\\u0e34\\u0e15<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:13:49','2018-04-06 13:13:49'),(19,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=brl0NAEucCc&index=24&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"_Rasmee Isan Soul \\u0e2a\\u0e37\\u0e1a\\u0e17\\u0e2d\\u0e14\\u0e08\\u0e34\\u0e15\\u0e27\\u0e34\\u0e0d\\u0e0d\\u0e32\\u0e13\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e2d\\u0e35\\u0e2a\\u0e32\\u0e19\\u0e23\\u0e48\\u0e27\\u0e21\\u0e2a\\u0e21\\u0e31\\u0e22\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>EveryThink: Rasmee Isan Soul \\u0e2a\\u0e37\\u0e1a\\u0e17\\u0e2d\\u0e14\\u0e08\\u0e34\\u0e15\\u0e27\\u0e34\\u0e0d\\u0e0d\\u0e32\\u0e13\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e2d\\u0e35\\u0e2a\\u0e32\\u0e19\\u0e23\\u0e48\\u0e27\\u0e21\\u0e2a\\u0e21\\u0e31\\u0e22<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:22:29','2018-04-06 13:22:29'),(20,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=KM4yygzaDoQ&index=104&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"EveryThink: \\u0e1d\\u0e31\\u0e19\\u0e23\\u0e49\\u0e32\\u0e22\\u0e02\\u0e2d\\u0e07 Kabu\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>EveryThink: \\u0e1d\\u0e31\\u0e19\\u0e23\\u0e49\\u0e32\\u0e22\\u0e02\\u0e2d\\u0e07 Kabu<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:23:01','2018-04-06 13:23:01'),(21,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=xsPdMNyA0o4&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=106\",\"CH\":\"\"}','{\"TH\":\"EveryThink: Elephant Nature Park \\u0e28\\u0e39\\u0e19\\u0e22\\u0e4c\\u0e2d\\u0e20\\u0e34\\u0e1a\\u0e32\\u0e25\\u0e0a\\u0e49\\u0e32\\u0e07 \\u0e17\\u0e35\\u0e48\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e21\\u0e32\\u0e01\\u0e01\\u0e27\\u0e48\\u0e32\\u0e1a\\u0e49\\u0e32\\u0e19\\u0e02\\u0e2d\\u0e07\\u0e2a\\u0e31\\u0e15\\u0e27\\u0e4c\\u0e17\\u0e38\\u0e01\\u0e15\\u0e31\\u0e27\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>EveryThink: Elephant Nature Park \\u0e28\\u0e39\\u0e19\\u0e22\\u0e4c\\u0e2d\\u0e20\\u0e34\\u0e1a\\u0e32\\u0e25\\u0e0a\\u0e49\\u0e32\\u0e07 \\u0e17\\u0e35\\u0e48\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e21\\u0e32\\u0e01\\u0e01\\u0e27\\u0e48\\u0e32\\u0e1a\\u0e49\\u0e32\\u0e19\\u0e02\\u0e2d\\u0e07\\u0e2a\\u0e31\\u0e15\\u0e27\\u0e4c\\u0e17\\u0e38\\u0e01\\u0e15\\u0e31\\u0e27<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:23:43','2018-04-06 13:23:43'),(22,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=hX3OqvnSGAw&index=172&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"People : \\u0e17\\u0e33\\u0e43\\u0e19\\u0e2a\\u0e34\\u0e48\\u0e07\\u0e17\\u0e35\\u0e48\\u0e23\\u0e31\\u0e01 \\u0e41\\u0e25\\u0e30\\u0e1e\\u0e34\\u0e2a\\u0e39\\u0e08\\u0e19\\u0e4c\\u0e43\\u0e2b\\u0e49\\u0e17\\u0e38\\u0e01\\u0e04\\u0e19\\u0e40\\u0e2b\\u0e47\\u0e19\\u0e14\\u0e49\\u0e27\\u0e22\\u0e04\\u0e27\\u0e32\\u0e21\\u0e2a\\u0e33\\u0e40\\u0e23\\u0e47\\u0e08\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>People : \\u0e17\\u0e33\\u0e43\\u0e19\\u0e2a\\u0e34\\u0e48\\u0e07\\u0e17\\u0e35\\u0e48\\u0e23\\u0e31\\u0e01 \\u0e41\\u0e25\\u0e30\\u0e1e\\u0e34\\u0e2a\\u0e39\\u0e08\\u0e19\\u0e4c\\u0e43\\u0e2b\\u0e49\\u0e17\\u0e38\\u0e01\\u0e04\\u0e19\\u0e40\\u0e2b\\u0e47\\u0e19\\u0e14\\u0e49\\u0e27\\u0e22\\u0e04\\u0e27\\u0e32\\u0e21\\u0e2a\\u0e33\\u0e40\\u0e23\\u0e47\\u0e08<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:24:48','2018-04-06 13:24:48'),(23,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=39sCtQV06ng&index=163&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"EveryThink: \\u0e16\\u0e36\\u0e07\\u0e40\\u0e27\\u0e25\\u0e32\\u0e17\\u0e35\\u0e48\\u0e42\\u0e25\\u0e01\\u0e15\\u0e49\\u0e2d\\u0e07\\u0e40\\u0e0b\\u0e34\\u0e49\\u0e07\\u0e44\\u0e1b\\u0e01\\u0e31\\u0e1a\\u0e27\\u0e07\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e41\\u0e2b\\u0e48\\u0e07\\u0e28\\u0e15\\u0e27\\u0e23\\u0e23\\u0e29\\u0e17\\u0e35\\u0e48 21\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>EveryThink: \\u0e16\\u0e36\\u0e07\\u0e40\\u0e27\\u0e25\\u0e32\\u0e17\\u0e35\\u0e48\\u0e42\\u0e25\\u0e01\\u0e15\\u0e49\\u0e2d\\u0e07\\u0e40\\u0e0b\\u0e34\\u0e49\\u0e07\\u0e44\\u0e1b\\u0e01\\u0e31\\u0e1a\\u0e27\\u0e07\\u0e2b\\u0e21\\u0e2d\\u0e25\\u0e33\\u0e41\\u0e2b\\u0e48\\u0e07\\u0e28\\u0e15\\u0e27\\u0e23\\u0e23\\u0e29\\u0e17\\u0e35\\u0e48 21<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:35:25','2018-04-06 13:35:25'),(24,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=kEtDS7YQkWo&index=142&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"\'\\u0e19\\u0e27\\u0e22\\u0e19\\u0e32\\u0e14\' \\u0e1c\\u0e25\\u0e34\\u0e15\\u0e20\\u0e31\\u0e13\\u0e11\\u0e4c\\u0e17\\u0e35\\u0e48\\u0e40\\u0e23\\u0e34\\u0e48\\u0e21\\u0e08\\u0e32\\u0e01 0\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>\\\\\'\\u0e19\\u0e27\\u0e22\\u0e19\\u0e32\\u0e14\\\\\' \\u0e1c\\u0e25\\u0e34\\u0e15\\u0e20\\u0e31\\u0e13\\u0e11\\u0e4c\\u0e17\\u0e35\\u0e48\\u0e40\\u0e23\\u0e34\\u0e48\\u0e21\\u0e08\\u0e32\\u0e01 0<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:36:49','2018-04-06 13:36:49'),(25,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=hQftLO6oJeo&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=138\",\"CH\":\"\"}','{\"TH\":\"DoGood : Toolmorrow\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>DoGood : Toolmorrow<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:56:06','2018-04-06 13:56:06'),(26,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=LuhNvUs_-tE&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=122\",\"CH\":\"\"}','{\"TH\":\"EveryThink : \\u0e43\\u0e04\\u0e23\\u0e27\\u0e48\\u0e32\\u0e1c\\u0e39\\u0e49\\u0e2b\\u0e0d\\u0e34\\u0e07...\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e40\\u0e1e\\u0e28\\u0e17\\u0e35\\u0e48\\u0e2d\\u0e48\\u0e2d\\u0e19\\u0e41\\u0e2d\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>EveryThink : \\u0e43\\u0e04\\u0e23\\u0e27\\u0e48\\u0e32\\u0e1c\\u0e39\\u0e49\\u0e2b\\u0e0d\\u0e34\\u0e07...\\u0e40\\u0e1b\\u0e47\\u0e19\\u0e40\\u0e1e\\u0e28\\u0e17\\u0e35\\u0e48\\u0e2d\\u0e48\\u0e2d\\u0e19\\u0e41\\u0e2d<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:56:40','2018-04-06 13:56:40'),(27,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=0EgWdBuZNhM&index=102&list=UU1VYUW6GefdgZ7Z5E5X82Ug\",\"CH\":\"\"}','{\"TH\":\"EveryThink: Breeder \\u0e1c\\u0e39\\u0e49\\u0e01\\u0e2d\\u0e1a\\u0e01\\u0e39\\u0e49\\u0e41\\u0e21\\u0e27\\u0e44\\u0e17\\u0e22\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>EveryThink: Breeder \\u0e1c\\u0e39\\u0e49\\u0e01\\u0e2d\\u0e1a\\u0e01\\u0e39\\u0e49\\u0e41\\u0e21\\u0e27\\u0e44\\u0e17\\u0e22<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:57:06','2018-04-06 13:57:06'),(28,1,'','{\"TH\":\"https:\\/\\/www.youtube.com\\/watch?v=tY8gLt9GNcI&list=UU1VYUW6GefdgZ7Z5E5X82Ug&index=83\",\"CH\":\"\"}','{\"TH\":\"Everythink: TUFF \\u0e19\\u0e27\\u0e21\\u0e44\\u0e17\\u0e22\\u0e42\\u0e01\\u0e2d\\u0e34\\u0e19\\u0e40\\u0e15\\u0e2d\\u0e23\\u0e4c\",\"CH\":\"\"}','{\"TH\":\"<div>\\r\\n<div>Everythink: TUFF \\u0e19\\u0e27\\u0e21\\u0e44\\u0e17\\u0e22\\u0e42\\u0e01\\u0e2d\\u0e34\\u0e19\\u0e40\\u0e15\\u0e2d\\u0e23\\u0e4c<\\/div>\\r\\n<\\/div>\",\"CH\":\"\"}','N','content',0,'2018-04-06 13:57:35','2018-04-06 13:57:35');

#
# Structure for table "langs"
#

DROP TABLE IF EXISTS `langs`;
CREATE TABLE `langs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL,
  `name` varchar(60) NOT NULL,
  `lang_sort` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "langs"
#

INSERT INTO `langs` VALUES (1,'TH','THAILAND',1,'2018-03-28 07:57:53','2018-03-28 14:10:52'),(3,'CH','CHINESE',2,'2018-03-28 10:23:42','2018-03-28 14:10:44');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2018_03_27_213745_create_langs_table',2),('2018_03_27_215114_create_categories_table',2),('2018_03_27_215138_create_contents_table',2),('2018_03_27_222918_create_playlists_table',2),('2018_03_27_223713_create_attaches_table',2);

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "password_resets"
#


#
# Structure for table "playlists"
#

DROP TABLE IF EXISTS `playlists`;
CREATE TABLE `playlists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "playlists"
#


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `active` enum('N','Y','D') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (2,'admin','info@admin.com','$2y$10$Yo6D4nIQe2dY//.quL/8fuMDBdicfyKS8tgtiR03fpL1SboJFiZ6O','Administrator','095-3439818','admin','admin','Y',NULL,'2018-03-27 23:26:17','2018-03-27 23:26:17');
