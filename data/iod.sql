/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.25a : Database - iod
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`iod` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `iod`;

/*Table structure for table `iod_category` */

DROP TABLE IF EXISTS `iod_category`;

CREATE TABLE `iod_category` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `catename` varchar(30) CHARACTER SET latin1 NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `iod_category` */

insert  into `iod_category`(`id`,`catename`) values (1,'General'),(2,'Computer Scienses'),(3,'Networking'),(4,'Web Development'),(5,'Programming'),(6,'Database');

/*Table structure for table `iod_content` */

DROP TABLE IF EXISTS `iod_content`;

CREATE TABLE `iod_content` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `original` varchar(30) NOT NULL,
  `vietnamese` varchar(50) DEFAULT NULL,
  `japanese` varchar(50) DEFAULT NULL,
  `french` varchar(50) DEFAULT NULL,
  `description` text NOT NULL,
  `category` int(2) NOT NULL,
  `unknown` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `iod_content` */

insert  into `iod_content`(`id`,`original`,`vietnamese`,`japanese`,`french`,`description`,`category`,`unknown`) values (1,'Hello','Xin chào','こんにちは','Bonjour','Used as a greeting or to begin a telephone conversation',1,NULL),(2,'Adjustment','Điều Chỉnh',NULL,NULL,'Make S.T to perfect for S.T',1,NULL),(4,'Open','Mở',NULL,NULL,'Tính mở',3,NULL),(5,'Original','Bản gốc',NULL,NULL,'Bản đầu tiên',2,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
