# Host: localhost  (Version 5.5.5-10.1.25-MariaDB)
# Date: 2018-03-30 07:53:26
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "attaches"
#


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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (1,0,'{\"TH\":\"FEATURE VIDEO\",\"CH\":\"FEATURE VIDEO\"}','menu',1,'2018-03-28 15:40:39','2018-03-28 15:40:39');

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
  `content_type` varchar(20) NOT NULL,
  `content_sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "contents"
#


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
