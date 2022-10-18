/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.18-MariaDB : Database - hotbeansbd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hotbeansbd` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `hotbeansbd`;

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

insert  into `categories`(`id`,`category`,`created_at`,`updated_at`) values 
(1,'HOT & ICED COFFEE',NULL,NULL),
(2,'FRAPPE',NULL,NULL),
(3,'HOT TEA',NULL,NULL),
(4,'ICED TEA',NULL,NULL),
(5,'HOT CHOCOLATE',NULL,NULL),
(6,'MILKSHAKES',NULL,NULL),
(7,'FRESH JUICE ',NULL,NULL),
(8,'SMOOTHIE',NULL,NULL),
(9,'MOCKTAILS ',NULL,NULL),
(10,'ADD ONS',NULL,NULL);

/*Table structure for table `food_items` */

DROP TABLE IF EXISTS `food_items`;

CREATE TABLE `food_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `food_items` */

insert  into `food_items`(`id`,`category_id`,`title`,`description`,`price`,`image`,`created_at`,`updated_at`) values 
(5,1,'Espresso [Single] ',NULL,140,NULL,NULL,NULL),
(6,1,'Espresso [Double] ',NULL,170,NULL,NULL,NULL),
(7,1,'Macchiato [Single]',NULL,160,NULL,NULL,NULL),
(8,1,'Macchiato [Double]',NULL,190,NULL,NULL,NULL),
(9,1,'Cappuccino [Small]',NULL,180,NULL,NULL,NULL),
(10,1,'Cappuccino [Regular]',NULL,290,NULL,NULL,NULL),
(11,1,'Latte [Small]',NULL,180,NULL,NULL,NULL),
(12,1,'Latte [Regular]',NULL,290,NULL,NULL,NULL),
(13,1,'Vanilla Latte/Hazelnut Latte/Mocha Latte [Small]',NULL,230,NULL,NULL,NULL),
(14,1,'Vanilla Latte/Hazelnut Latte/Mocha Latte [Regular]',NULL,310,NULL,NULL,NULL),
(15,1,'Salted Caramel Latte / White Mocha Latte / Tiramisu Latte [Small]',NULL,250,NULL,NULL,NULL),
(16,1,'Salted Caramel Latte / White Mocha Latte / Tiramisu Latte [Regular]',NULL,330,NULL,NULL,NULL),
(17,1,'Affogato ',NULL,220,NULL,NULL,NULL),
(18,2,'Mocha/Hazelnut/Caramel/Tiramisu ',NULL,330,NULL,NULL,NULL),
(19,3,'Green/Black/Mint/Orange ',NULL,150,NULL,NULL,NULL),
(20,4,'Lemon/Raspberry/Peach ',NULL,210,NULL,NULL,NULL),
(21,5,'Classic Hot Chocolate ',NULL,290,NULL,NULL,NULL),
(22,5,'Mint Hot Chocolate ',NULL,310,NULL,NULL,NULL),
(23,6,'Chocolate/Vanilla/Strawberry/Mango ',NULL,250,NULL,NULL,NULL),
(24,6,'Movenpick Ice Cream Shake (Premium Swiss Ice Cream) ',NULL,550,NULL,NULL,NULL),
(25,7,'Orange/Apple/Seasonal Fruit ',NULL,180,NULL,NULL,NULL),
(26,8,'Mango/Strawberry/Peach ',NULL,330,NULL,NULL,NULL),
(27,9,'Classic Mojito/Orange Mojito ',NULL,280,NULL,NULL,NULL),
(28,9,'Classic Lemonade/Strawberry Lemonade/Peach Lemonade ',NULL,250,NULL,NULL,NULL),
(29,9,'Virgin Pina Colada ',NULL,350,NULL,NULL,NULL),
(30,10,'Espresso Shot ',NULL,60,NULL,NULL,NULL),
(31,10,'Make It Iced ',NULL,50,NULL,NULL,NULL),
(32,10,'Extra Sauce ',NULL,70,NULL,NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`email`,`password`,`role`,`created_at`,`updated_at`) values 
(1,'admin@gmail.com','$2y$10$1q6CzgAz73o95zE.iiQIZuM0MmCciOlySeBlNuoLW/cRKVtdrUx2y',1,NULL,'2022-09-27 07:37:59'),
(2,'test3@gmail.com','$2y$10$4Bpb02IENMKM0oqUSoszWuH/CsSxEKCl7FxXrWdrI1kcF2W7bv1qC',1,'2022-09-27 07:45:29','2022-09-27 07:59:48'),
(3,'test2@gmail.com','$2y$10$1y5TX.y9cLHNMKmiaZCq0uYEJyCTr2zp27fzHJWdM.TFM6P7Gc0JW',1,'2022-09-27 07:51:55','2022-09-27 07:51:55');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
