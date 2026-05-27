-- MariaDB dump 10.19-11.1.2-MariaDB, for osx10.18 (arm64)
--
-- Host: 127.0.0.1    Database: 3047travelplannerproj
-- ------------------------------------------------------
-- Server version	11.1.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `3047travelplannerproj`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `3047travelplannerproj` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `3047travelplannerproj`;

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(64) NOT NULL,
  `customer_email` varchar(64) NOT NULL,
  `customer_topic` varchar(256) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiries`
--

LOCK TABLES `enquiries` WRITE;
/*!40000 ALTER TABLE `enquiries` DISABLE KEYS */;
INSERT INTO `enquiries` VALUES
(2,'dsfds','tyan0026@student.monash.edu','sfdaf'),
(3,'dsfds','tyan0026@student.monash.edu','fdsgf'),
(4,'tianning yang','tyan0026@student.monash.edu','fhjgvj'),
(5,'sean','sean.mullins@gmail.com','ppp'),
(6,'dfgtyui','abha0028@email.com','567890');
/*!40000 ALTER TABLE `enquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flight_data`
--

DROP TABLE IF EXISTS `flight_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flight_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departure` varchar(64) NOT NULL,
  `destination` varchar(64) NOT NULL,
  `departure_time` datetime NOT NULL,
  `destination_time` datetime NOT NULL,
  `flight_price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flight_data`
--

LOCK TABLES `flight_data` WRITE;
/*!40000 ALTER TABLE `flight_data` DISABLE KEYS */;
INSERT INTO `flight_data` VALUES
(1,'New York','London','2023-05-18 02:16:25','2023-05-18 16:18:25',1499.00),
(2,'Mumbai','Madrid','2023-05-19 07:50:59','2023-05-19 17:51:13',1250.00),
(3,'Seoul','Chicago','2023-05-20 03:07:57','2023-05-20 16:21:07',1799.00),
(4,'Shanghai','Perth','2023-05-21 05:30:46','2023-05-21 15:05:04',1200.00),
(5,'Kuala Lumpur','Miami','2023-05-21 06:06:03','2023-05-21 13:27:39',1300.00),
(6,'Brisbane','Perth','2023-05-22 10:12:13','2023-11-22 13:17:30',350.00),
(7,'Canberra','Perth','2023-05-25 13:38:23','2023-05-25 16:11:40',400.00),
(8,'Canberra','Perth','2023-05-25 07:14:52','2023-05-25 10:02:20',250.00),
(9,'Istanbul','Ho Chi Minh City','2023-05-27 18:20:32','2023-05-28 05:55:50',1800.00),
(10,'Chicago','Los Angels','2023-05-31 19:42:20','2023-05-31 23:35:08',300.00),
(11,'Pattaya','Beijing','2023-05-30 13:15:23','2023-05-30 18:49:43',500.00),
(12,'Perth','Hong Kong','2023-05-29 07:37:46','2023-05-29 16:48:03',1350.00),
(13,'Canberra','Los Angels','2023-06-15 01:15:30','2023-09-05 17:48:17',7345.96),
(14,'Orlando','Toronto','2023-11-22 13:56:06','2023-11-12 02:10:33',688.91),
(15,'Guarulhos','Taipei','2023-11-17 16:04:20','2023-06-16 08:42:25',4422.95),
(16,'Amsterdam','Perth','2023-05-27 14:16:48','2023-10-26 08:00:19',371.80),
(17,'Atlanta','Melbourne','2023-08-11 20:29:10','2023-05-27 08:26:53',3527.87),
(18,'Darwin','Atlanta','2023-05-26 06:13:30','2023-12-18 03:23:51',6137.80),
(19,'Orlando','Barcelona','2023-10-13 02:59:51','2023-10-25 04:50:11',7663.50),
(20,'Los Angels','Las Vegas','2023-06-22 05:22:46','2023-09-26 23:21:47',4722.89),
(21,'Atlanta','Frankfurt','2023-10-19 12:55:08','2023-11-24 05:28:35',9179.82),
(22,'Darwin','Osaka','2023-05-11 08:01:02','2023-05-24 21:25:42',2419.36),
(23,'Hanoi','Hong Kong','2023-09-21 09:27:31','2023-05-22 09:21:40',1758.08),
(24,'Taipei','Tokyo','2023-07-20 19:32:14','2023-11-28 04:01:43',1498.34),
(25,'Osaka','Brisbane','2023-07-21 15:30:15','2023-08-28 01:16:03',4563.01),
(26,'Kuala Lumpur','Phoenix','2023-09-24 10:41:15','2023-07-01 11:41:27',8945.59),
(27,'Paris','Phoenix','2023-11-13 01:53:04','2023-05-16 19:00:53',7814.65),
(28,'Paris','Mexico City','2023-08-25 18:17:16','2023-11-11 00:00:08',6322.19),
(29,'Kuala Lumpur','Brisbane','2023-12-16 11:40:04','2023-05-31 07:26:19',6451.70),
(30,'Singapore','Sydney','2023-07-24 06:56:50','2023-08-27 18:28:26',7866.28),
(31,'Sydney','Ho Chi Minh City','2023-12-09 04:00:45','2023-11-21 13:53:37',9478.29),
(32,'Hong Kong','Amsterdam','2023-06-27 08:12:22','2023-05-20 01:53:46',5295.80),
(33,'Orlando','Taipei','2023-10-16 12:51:32','2023-08-23 02:53:02',1989.38),
(34,'Hong Kong','Frankfurt','2023-08-07 18:05:40','2023-07-23 23:08:06',5876.63),
(35,'Osaka','Madrid','2023-07-24 23:28:31','2023-12-06 08:01:30',9399.55),
(36,'Barcelona','Ho Chi Minh City','2023-06-29 08:22:30','2023-08-10 12:26:41',3155.98),
(37,'Doha','Darwin','2023-10-27 05:56:11','2023-08-20 18:38:53',1137.52),
(38,'Pattaya','Mexico City','2023-12-13 00:39:02','2023-07-05 23:37:57',1368.45),
(39,'Amsterdam','Brisbane','2023-05-18 17:40:32','2023-06-12 20:41:00',3430.49),
(40,'Tangerang','Canberra','2023-12-01 03:00:20','2023-06-23 14:42:33',7080.69),
(41,'Pattaya','Hong Kong','2023-07-01 11:50:05','2023-06-18 18:19:27',5271.24),
(42,'Dallas','Las Vegas','2023-12-22 01:25:52','2023-07-08 12:54:27',9592.23),
(43,'Kuala Lumpur','Pattaya','2023-06-17 12:05:50','2023-09-25 09:17:28',4243.88),
(44,'Denver','Mexico City','2023-05-20 04:44:12','2023-10-20 05:57:39',8812.21),
(45,'Dallas','Tokyo','2023-09-15 09:55:28','2023-07-24 23:07:11',4254.28),
(46,'Hobart','Barcelona','2023-08-03 09:03:57','2023-08-21 13:47:01',8293.04),
(47,'Las Vegas','Orlando','2023-08-17 15:28:39','2023-05-31 09:35:28',288.15),
(48,'Denver','Hong Kong','2023-08-27 20:32:37','2023-10-04 00:11:57',4630.67),
(49,'Perth','Paris','2023-10-20 01:54:35','2023-10-18 07:07:14',6156.52),
(50,'Frankfurt','Dubai','2023-07-11 07:48:54','2023-05-27 15:48:41',104.49),
(51,'Perth','Dubai','2023-06-29 19:28:43','2023-07-30 01:55:15',1231.38),
(52,'Bangkok','Ho Chi Minh City','2023-09-13 09:14:33','2023-06-03 07:41:03',8632.34),
(53,'Hanoi','Perth','2023-09-12 06:16:04','2023-07-31 13:03:15',6268.11),
(54,'Miami','Hanoi','2023-12-25 20:58:00','2023-06-29 09:53:34',4151.95),
(55,'Adelaide','London','2023-10-06 08:39:01','2023-12-05 22:10:44',510.83),
(56,'Paris','Atlanta','2023-12-23 22:52:18','2023-12-09 18:23:16',1255.85),
(57,'Dallas','Beijing','2023-10-28 12:33:05','2023-08-20 01:16:26',9292.60),
(58,'Las Vegas','Denver','2023-12-01 22:54:10','2023-11-08 11:01:30',651.57),
(59,'Darwin','Tangerang','2023-12-16 17:43:35','2023-12-30 11:18:20',1278.86),
(60,'Tokyo','Hanoi','2023-12-22 02:07:38','2023-09-08 00:57:07',1775.20),
(61,'Dubai','Doha','2023-12-23 09:47:59','2023-06-27 13:45:41',5230.24),
(62,'Madrid','Adelaide','2023-10-19 09:18:57','2023-09-13 11:52:39',6432.64),
(63,'Perth','Tangerang','2023-06-26 15:16:44','2023-07-28 05:34:28',68.94),
(64,'Phoenix','Dallas','2023-06-19 00:21:36','2023-11-16 11:38:50',5608.93),
(65,'Phoenix','Taipei','2023-12-30 17:43:30','2023-05-24 05:57:11',5729.39),
(66,'Paris','Melbourne','2023-08-17 01:41:56','2023-12-19 16:22:04',3219.52),
(67,'Barcelona','Guarulhos','2023-11-30 18:36:37','2023-12-18 19:13:56',8396.93),
(68,'Beijing','Doha','2023-12-16 11:42:13','2023-08-31 19:02:44',6693.67),
(69,'Pattaya','Madrid','2023-11-07 20:41:05','2023-07-02 05:14:59',3215.12),
(70,'Frankfurt','Orlando','2023-07-30 15:51:36','2023-08-25 07:41:48',1727.30),
(71,'Paris','Chicago','2023-05-30 19:34:32','2023-08-21 05:37:39',2902.48),
(72,'Orlando','Delhi','2023-06-11 06:56:05','2023-08-24 19:43:30',1357.45),
(73,'Kuala Lumpur','London','2023-10-21 11:23:05','2023-06-08 15:32:11',1237.97),
(74,'Los Angels','Barcelona','2023-12-22 14:34:48','2023-10-05 17:24:55',6921.70),
(75,'Shanghai','Chicago','2023-11-10 18:27:40','2023-08-24 13:22:26',4259.25),
(76,'Shanghai','Hanoi','2023-10-08 09:13:14','2023-07-28 21:38:57',7855.82),
(77,'Shanghai','Chicago','2023-08-14 18:11:19','2023-12-31 22:36:10',6648.79),
(78,'Seoul','Hobart','2023-07-26 23:25:27','2023-10-28 08:00:35',9446.33),
(79,'Frankfurt','Tangerang','2023-05-10 14:29:56','2023-12-02 01:15:28',6135.45),
(80,'Denver','Darwin','2023-11-13 11:29:06','2023-11-01 13:05:45',4159.13),
(81,'Istanbul','Frankfurt','2023-07-24 17:39:57','2023-10-01 23:02:46',2959.39),
(82,'Istanbul','Singapore','2023-07-18 02:43:35','2023-12-10 10:22:02',4830.20),
(83,'Miami','Tangerang','2023-09-14 11:53:11','2023-05-16 22:44:39',1168.71),
(84,'Phoenix','Chicago','2023-10-19 17:07:17','2023-09-17 01:12:10',468.34),
(85,'Dallas','Denver','2023-06-18 15:58:36','2023-12-06 17:50:31',894.25),
(86,'Singapore','Doha','2023-07-08 17:22:09','2023-09-07 05:50:14',9951.89),
(87,'Istanbul','Phoenix','2023-12-11 06:03:09','2023-08-12 02:22:50',2567.80),
(88,'Los Angels','Madrid','2023-08-04 04:47:07','2023-09-27 06:38:03',9444.59),
(89,'Darwin','Denver','2023-05-27 16:58:49','2023-10-28 12:53:44',702.13),
(90,'Adelaide','Atlanta','2023-08-25 10:20:16','2023-06-15 06:33:10',1650.52),
(91,'Chicago','Canberra','2023-08-28 03:28:13','2023-12-29 02:26:10',5188.82),
(92,'Melbourne','Miami','2023-10-31 17:02:23','2023-06-14 10:41:10',2541.80),
(93,'Tokyo','Hong Kong','2023-07-14 18:43:10','2023-08-05 03:14:56',3800.86),
(94,'Adelaide','Hanoi','2023-05-26 00:56:03','2023-05-28 13:20:01',4611.24),
(95,'Guarulhos','Atlanta','2023-06-16 14:07:11','2023-09-02 02:12:23',6149.30),
(96,'Beijing','Los Angels','2023-11-13 09:50:39','2023-10-13 14:40:29',2376.24),
(97,'Singapore','Bangkok','2023-06-15 01:06:01','2023-08-23 15:48:22',58.02),
(98,'Amsterdam','Perth','2023-09-06 08:52:19','2023-08-30 11:47:21',5543.36),
(99,'Bangkok','Hong Kong','2023-08-05 21:55:36','2023-10-04 13:03:38',1977.00),
(100,'Tokyo','Mumbai','2023-12-13 08:32:32','2023-06-13 07:55:50',830.89),
(101,'Ho Chi Minh City','Chicago','2023-06-25 01:30:43','2023-12-27 01:37:08',7967.44),
(102,'Chicago','Istanbul','2023-06-07 15:24:16','2023-11-07 21:13:35',737.01),
(103,'Bangkok','Ho Chi Minh City','2023-09-20 02:13:04','2023-07-02 18:41:32',9606.34),
(104,'Orlando','Los Angels','2023-12-26 04:52:04','2023-08-05 18:04:25',8640.44),
(105,'Frankfurt','Tangerang','2023-10-11 16:34:45','2023-08-03 16:20:37',4812.49),
(106,'Perth','Pattaya','2023-10-07 05:16:41','2023-08-27 23:05:50',9363.09),
(107,'Los Angels','Chicago','2023-11-19 01:19:59','2023-12-28 03:15:16',6425.82),
(108,'Adelaide','Mexico City','2023-06-21 16:34:48','2023-10-09 21:35:55',5282.01),
(109,'Beijing','Paris','2023-06-19 10:31:14','2023-11-09 04:32:19',922.25),
(110,'Singapore','Hobart','2023-08-26 14:18:57','2023-10-12 00:46:28',4406.65),
(111,'Orlando','Brisbane','2023-09-27 20:59:24','2023-08-18 03:20:13',1117.67),
(112,'Pattaya','Doha','2023-10-10 19:00:57','2023-10-29 06:31:34',8904.43),
(113,'Mumbai','Guarulhos','2023-05-23 01:34:55','2023-09-30 09:06:19',1200.16),
(114,'Hobart','Istanbul','2023-10-30 12:45:19','2023-05-22 06:33:03',7537.54),
(115,'Atlanta','Guarulhos','2023-11-12 07:19:32','2023-11-19 09:44:09',549.30),
(116,'Hobart','Shanghai','2023-07-31 12:08:50','2023-06-04 01:06:32',9556.40),
(117,'Osaka','Mumbai','2023-09-25 19:38:14','2023-09-23 03:43:30',4884.43),
(118,'Atlanta','Osaka','2023-05-11 19:01:54','2023-09-27 00:22:58',4023.50),
(119,'Delhi','Adelaide','2023-11-18 11:38:00','2023-08-13 11:28:37',2887.07),
(120,'Doha','Orlando','2023-08-25 08:16:32','2023-11-18 07:18:06',7697.20),
(121,'Shanghai','Atlanta','2023-07-13 21:44:46','2023-07-13 03:44:16',6348.93),
(122,'Las Vegas','Sydney','2023-09-01 18:50:46','2023-05-16 19:10:06',1143.05),
(123,'Melbourne','Orlando','2023-10-29 19:54:05','2023-11-24 16:27:54',5068.86),
(124,'Denver','Phoenix','2023-05-30 17:10:50','2023-07-05 10:55:20',8909.77),
(125,'Tangerang','Ho Chi Minh City','2023-09-04 19:44:12','2023-10-08 00:06:30',4437.66),
(126,'Ho Chi Minh City','Mumbai','2023-08-18 07:09:13','2023-11-23 09:09:41',942.91),
(127,'Beijing','Atlanta','2023-09-14 14:04:43','2023-11-18 05:55:17',6681.83),
(128,'Pattaya','Atlanta','2023-12-01 03:41:39','2023-05-14 14:46:14',8076.61),
(129,'Chicago','Paris','2023-10-08 08:35:04','2023-05-24 08:25:45',5647.64),
(130,'Dubai','New York','2023-12-23 19:01:05','2023-09-29 21:01:00',5874.99),
(131,'Mexico City','Denver','2023-08-10 22:55:37','2023-11-10 01:53:30',9853.44),
(132,'Bangkok','Brisbane','2023-10-20 17:29:30','2023-05-22 16:28:30',8393.75),
(133,'Melbourne','Dubai','2023-10-22 06:53:33','2023-10-05 02:08:19',2278.62),
(134,'Hobart','Miami','2023-12-25 01:45:39','2023-07-09 21:03:08',8452.09),
(135,'Shanghai','Kuala Lumpur','2023-09-25 13:03:39','2023-05-29 10:13:36',1756.52),
(136,'Amsterdam','Atlanta','2023-09-30 21:35:47','2023-08-28 14:48:26',1152.16),
(137,'Phoenix','Delhi','2023-10-15 07:37:58','2023-09-29 09:55:20',3468.40),
(138,'Chicago','Perth','2023-11-30 01:13:38','2023-11-07 08:29:19',3054.95),
(139,'Guarulhos','Adelaide','2023-08-15 20:24:34','2023-09-15 14:04:33',7961.74),
(140,'Mumbai','Phoenix','2023-06-03 20:52:33','2023-06-18 01:50:49',9067.48),
(141,'Madrid','Delhi','2023-09-01 07:56:33','2023-11-20 13:30:13',9698.58),
(142,'Madrid','Beijing','2023-05-12 13:06:37','2023-08-22 23:29:20',3267.29),
(143,'Delhi','New York','2023-08-03 00:07:23','2023-05-26 01:42:06',8736.06),
(144,'Las Vegas','Dubai','2023-10-24 16:24:08','2023-05-20 02:23:08',6407.72),
(145,'Tangerang','Amsterdam','2023-07-23 17:21:26','2023-11-25 16:44:59',5628.87),
(146,'Darwin','Darwin','2023-08-23 02:34:31','2023-08-23 07:57:55',3165.89),
(147,'Sydney','Doha','2023-08-07 22:54:06','2023-11-29 14:50:37',7624.37),
(148,'Tokyo','Paris','2023-05-23 03:21:24','2023-06-01 00:12:22',2958.60),
(149,'Hobart','Amsterdam','2023-12-01 14:25:28','2023-05-30 04:13:02',8329.80),
(150,'Mumbai','Hong Kong','2023-09-12 18:22:26','2023-06-28 13:39:42',4220.56),
(151,'New York','Taipei','2023-08-28 11:18:01','2023-08-14 01:43:14',9312.39),
(152,'Atlanta','Mumbai','2023-07-26 18:19:07','2023-09-22 18:20:43',9544.98),
(153,'Seoul','Shanghai','2023-07-19 02:31:25','2023-11-27 07:36:57',6533.11),
(154,'Shanghai','Ho Chi Minh City','2023-05-21 08:16:39','2023-08-02 16:18:26',6984.51),
(155,'Hanoi','Orlando','2023-11-09 07:43:36','2023-09-05 04:41:16',7579.83),
(156,'Taipei','Beijing','2023-12-19 22:26:02','2023-12-14 22:21:53',1894.51),
(157,'Orlando','Frankfurt','2023-12-07 19:23:24','2023-12-28 15:11:47',68.16),
(158,'Melbourne','Tokyo','2023-10-07 01:33:08','2023-12-17 03:52:20',6580.15),
(159,'London','Guarulhos','2023-09-09 16:19:08','2023-08-16 02:14:40',8918.78),
(160,'Seoul','Tangerang','2023-08-03 10:14:39','2023-09-29 07:28:37',8181.75),
(161,'Chicago','Tangerang','2023-05-23 17:50:41','2023-07-10 21:36:38',1838.20),
(162,'Hanoi','Hanoi','2023-08-10 02:56:56','2023-10-09 03:32:26',1041.24),
(163,'Sydney','Beijing','2023-08-10 20:04:09','2023-08-13 04:47:33',8610.65),
(164,'Tokyo','Phoenix','2023-05-15 22:15:12','2023-09-29 18:02:59',6565.52),
(165,'Phoenix','Brisbane','2023-12-14 01:32:29','2023-06-15 01:59:58',7617.47),
(166,'Canberra','Hanoi','2023-11-19 10:43:08','2023-08-03 10:28:34',5710.00),
(167,'Singapore','Hobart','2023-06-30 23:02:44','2023-10-17 17:30:22',2688.77),
(168,'Amsterdam','Amsterdam','2023-06-15 11:40:57','2023-08-08 14:41:43',3071.17),
(169,'Dubai','Adelaide','2023-06-07 19:51:18','2023-05-28 16:18:05',4232.37),
(170,'Singapore','Melbourne','2023-12-23 08:10:37','2023-11-24 11:03:06',6140.93),
(171,'Kuala Lumpur','Dallas','2023-12-21 19:28:30','2023-10-31 10:58:55',9077.80),
(172,'Taipei','Denver','2023-06-07 19:16:52','2023-07-05 10:23:50',1713.86),
(173,'Hong Kong','Denver','2023-09-30 01:33:15','2023-05-21 13:44:41',2278.20),
(174,'Hanoi','London','2023-06-18 09:38:10','2023-05-12 09:04:52',9048.38),
(175,'Chicago','Guarulhos','2023-06-15 15:24:24','2023-12-23 16:59:58',4223.87),
(176,'Bangkok','Hobart','2023-09-24 19:40:03','2023-06-13 17:56:23',5996.31),
(177,'Mexico City','Hanoi','2023-07-29 14:27:10','2023-08-18 09:54:41',1766.49),
(178,'Delhi','Atlanta','2023-07-23 10:17:50','2023-12-22 01:45:45',392.73),
(179,'Las Vegas','Delhi','2023-06-07 19:59:28','2023-09-01 10:36:40',1673.52),
(180,'Beijing','Adelaide','2023-09-25 23:25:52','2023-10-28 02:16:46',8769.71),
(181,'Singapore','Paris','2023-09-20 14:08:07','2023-10-09 15:54:16',6717.84),
(182,'Chicago','Amsterdam','2023-11-07 21:33:47','2023-12-09 18:58:38',9662.60),
(183,'Toronto','Toronto','2023-06-28 08:08:22','2023-08-17 18:44:36',8844.91),
(184,'New York','Paris','2023-10-13 12:28:18','2023-11-09 23:34:49',6761.72),
(185,'Barcelona','Los Angels','2023-11-09 12:54:58','2023-11-26 09:09:26',2169.58),
(186,'London','Amsterdam','2023-09-01 02:43:35','2023-09-20 05:28:08',2711.74),
(187,'New York','Shanghai','2023-11-16 13:53:36','2023-08-31 13:22:51',9673.87),
(188,'Mumbai','Canberra','2023-07-08 17:45:36','2023-10-18 05:43:01',7783.07),
(189,'London','Mumbai','2023-05-22 07:18:42','2023-07-14 07:00:00',7854.43),
(190,'Darwin','Chicago','2023-12-29 18:58:51','2023-09-09 07:33:02',1950.29),
(191,'Bangkok','Mexico City','2023-12-04 05:13:15','2023-10-17 15:16:52',421.30),
(192,'Istanbul','Hong Kong','2023-09-23 19:49:37','2023-08-17 11:27:09',4519.22),
(193,'Frankfurt','Guarulhos','2023-09-23 02:57:36','2023-05-31 15:12:25',8689.99),
(194,'Guarulhos','London','2023-08-04 19:25:10','2023-11-27 05:15:19',1604.97),
(195,'Ho Chi Minh City','Denver','2023-10-16 13:27:00','2023-10-24 01:42:06',5512.53),
(196,'Dallas','Canberra','2023-12-25 03:17:17','2023-12-29 19:53:16',2795.08),
(197,'Barcelona','Shanghai','2023-06-28 14:10:46','2023-09-02 08:44:06',8084.70),
(198,'Hobart','Osaka','2023-09-13 05:35:45','2023-11-01 07:02:50',3525.84),
(199,'Singapore','Hobart','2023-12-23 00:39:56','2023-06-24 16:58:15',3704.03),
(200,'Osaka','Doha','2023-11-15 09:18:42','2023-12-03 02:36:28',8881.62);
/*!40000 ALTER TABLE `flight_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `flights`
--

DROP TABLE IF EXISTS `flights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `flights` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leaveFrom` varchar(64) NOT NULL,
  `goingTo` varchar(64) NOT NULL,
  `flight_departure_time` datetime NOT NULL,
  `flight_data_id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `flight_data_id` (`flight_data_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `flights`
--

LOCK TABLES `flights` WRITE;
/*!40000 ALTER TABLE `flights` DISABLE KEYS */;
INSERT INTO `flights` VALUES
(16,'New York','London','2023-04-27 23:01:22',3,0),
(17,'New York','London','2023-04-27 23:01:22',3,0),
(18,'New York','London','2023-05-10 07:40:33',11,0),
(19,'New York','London','2023-05-10 07:40:33',11,0),
(21,'Canberra','Perth','2023-06-07 07:14:52',8,0),
(22,'Brisbane','Perth','2023-12-23 10:12:13',6,0),
(23,'Mumbai','Madrid','2023-12-19 07:50:59',2,0),
(24,'New York','London','2023-12-05 02:16:25',1,0),
(25,'New York','London','2023-12-05 02:16:25',1,0),
(26,'New York','London','2023-12-05 02:16:25',1,1),
(27,'New York','London','2023-12-05 02:16:25',1,1),
(28,'New York','London','2023-12-05 02:16:25',1,1),
(29,'New York','London','2023-12-05 02:16:25',1,1),
(30,'New York','London','2023-12-05 02:16:25',1,6),
(31,'Seoul','Chicago','2023-05-20 03:07:57',3,7),
(32,'New York','London','2023-05-18 02:16:25',1,0),
(33,'New York','London','2023-05-18 02:16:25',1,1);
/*!40000 ALTER TABLE `flights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotel_data`
--

DROP TABLE IF EXISTS `hotel_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotel_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(64) NOT NULL,
  `hotel_price` decimal(9,2) NOT NULL,
  `hotel_address` varchar(64) NOT NULL,
  `hotel_city` varchar(64) NOT NULL,
  `hotel_country` varchar(64) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotel_data`
--

LOCK TABLES `hotel_data` WRITE;
/*!40000 ALTER TABLE `hotel_data` DISABLE KEYS */;
INSERT INTO `hotel_data` VALUES
(1,'Egestas Ligula Nullam LLP',350.00,'P.O. Box 853, 5684 Primis Avenue','Las Vegas','USA'),
(2,'Lorem Corp.',170.41,'Ap #981-8104 Elit Rd.','Tokyo','Japan'),
(3,'Congue In Limited',350.54,'9600 Sed, Avenue','Osaka','Japan'),
(4,'Nec Corp.',75.77,'P.O. Box 240, 2815 Semper St.','Toronto','Canada'),
(5,'Nec Quam Curabitur Ltd',150.43,'P.O. Box 507, 1990 Velit. Rd.','Kuala Lumpur','Malaysia'),
(6,'Arcu Et Pede LLC',400.00,'4276 Dapibus Av.','Toronto','Canada'),
(7,'Vitae Posuere At Incorporated',636.91,'P.O. Box 472, 150 Tellus Av.','Bangkok','Thailand'),
(8,'Aliquet Phasellus Institute',611.67,'P.O. Box 177, 2156 Eget, Road','Pattaya','Thailand'),
(9,'Velit LLC',700.63,'P.O. Box 148, 2708 Gravida Road','Guarulhos','Brazil'),
(10,'Sem Egestas LLC',977.34,'Ap #916-1782 Pede. Rd.','London','England'),
(11,'Nullam Limited',890.26,'Ap #855-635 Non, Rd.','Sydney','Australia'),
(12,'Pede Malesuada Foundation',1036.27,'Ap #959-1672 Tincidunt, Road','Adelaide','Australia'),
(13,'Vestibulum Neque Company',3762.79,'Ap #925-9169 Aliquet St.','Denver','Brazil'),
(14,'Sodales Limited',6.03,'835-3048 Penatibus St.','Miami','Aruba'),
(15,'Donec Company',9027.72,'116-9348 Turpis Av.','Osaka','United Kingdom (Great Britain)'),
(16,'Fringilla Cursus Corporation',4690.29,'P.O. Box 543, 7137 Tellus Avenue','Sydney','Heard Island and Mcdonald Islands'),
(17,'At Arcu Associates',6187.77,'Ap #903-513 Egestas St.','Canberra','Angola'),
(18,'Morbi Corporation',7707.09,'Ap #706-9457 Tristique Rd.','Beijing','Sri Lanka'),
(19,'Mauris Non Dui Inc.',1543.94,'P.O. Box 783, 561 Luctus. St.','Frankfurt','South Sudan'),
(20,'A Mi Fringilla LLP',9943.73,'Ap #839-6011 Dolor, Road','Osaka','Congo (Brazzaville)'),
(21,'Semper Associates',5318.40,'P.O. Box 994, 1374 Tempor Road','Orlando','Algeria'),
(22,'Non Enim Commodo Incorporated',1697.34,'224-6519 Ridiculus Avenue','Taipei','Saint Pierre and Miquelon'),
(23,'Nulla Vulputate Dui Foundation',4336.40,'329-4772 Semper Street','London','Antigua and Barbuda'),
(24,'Parturient Montes Company',1756.41,'Ap #115-8670 Mus. Road','Pattaya','Seychelles'),
(25,'Ac Limited',9303.18,'2954 Et, St.','Chicago','Panama'),
(26,'A Malesuada Id Limited',2982.36,'2620 Dignissim Rd.','Sydney','Senegal'),
(27,'Enim Etiam Gravida Incorporated',6048.34,'560-4662 Elit. Street','Bangkok','Papua New Guinea'),
(28,'Ante Lectus LLP',6968.51,'P.O. Box 714, 6050 Non, Road','Atlanta','Papua New Guinea'),
(29,'Odio A Purus PC',1119.45,'Ap #440-4244 Rhoncus Rd.','Kuala Lumpur','Belarus'),
(30,'Ac Nulla Inc.',3430.56,'P.O. Box 810, 6969 Non St.','Madrid','South Georgia and The South Sandwich Islands'),
(31,'Donec Est PC',4334.70,'Ap #655-7401 Magna. St.','Orlando','Kenya'),
(32,'Tincidunt Incorporated',7547.01,'2340 Enim. Avenue','London','Malaysia'),
(33,'Amet Company',2034.37,'Ap #245-7194 Dis Ave','Dallas','Hungary'),
(34,'Dapibus Quam Quis Associates',4506.48,'P.O. Box 185, 4321 Dolor Rd.','Dubai','Burkina Faso'),
(35,'Facilisi Sed Corp.',4718.96,'Ap #343-3570 Volutpat Av.','Denver','Lesotho'),
(36,'Pellentesque Ltd',9824.63,'Ap #242-4970 A, St.','Kuala Lumpur','Georgia'),
(37,'Senectus Et Netus Consulting',4999.87,'Ap #273-8204 Mauris Avenue','Dallas','Cayman Islands'),
(38,'Nisi Nibh Lacinia LLP',2913.14,'P.O. Box 789, 8123 Consectetuer Rd.','Ho Chi Minh City','Korea, North'),
(39,'Quis Corp.',7220.53,'873-8581 Nulla Street','Las Vegas','Togo'),
(40,'Mauris Incorporated',4201.90,'177-6023 Lectus. Avenue','Paris','Viet Nam'),
(41,'Eu Inc.',2815.51,'806-1540 Sagittis Av.','Mumbai','Micronesia'),
(42,'Gravida LLC',5326.23,'838-5922 Ullamcorper, St.','Kuala Lumpur','China'),
(43,'Erat Corp.',7050.58,'731-5787 Ornare, Rd.','Hobart','China'),
(44,'Aliquam Arcu Industries',4319.87,'Ap #210-2538 Ipsum. Rd.','Orlando','Myanmar'),
(45,'Aliquam Erat Inc.',8940.19,'Ap #226-9748 Luctus St.','Kuala Lumpur','Saint Martin'),
(46,'Eget Dictum Industries',3183.98,'P.O. Box 538, 7284 Aenean Avenue','Toronto','Japan'),
(47,'Arcu Imperdiet Ltd',6142.37,'684-3341 Luctus Rd.','Darwin','Saint Barthélemy'),
(48,'Enim Sed Industries',837.65,'611-1369 Vel Street','Brisbane','Montserrat'),
(49,'Sapien Imperdiet Ornare Corp.',7511.25,'P.O. Box 479, 7234 Vulputate Rd.','Atlanta','Serbia'),
(50,'Interdum Nunc Sollicitudin Inc.',4870.57,'P.O. Box 105, 3743 Parturient Ave','Hanoi','Papua New Guinea'),
(51,'Varius Ultrices Mauris Corporation',9655.22,'P.O. Box 142, 607 Vestibulum Road','New York','Ukraine'),
(52,'Cursus LLC',2337.85,'Ap #975-7423 In, Rd.','Shanghai','Palestine, State of'),
(53,'Lorem Semper Consulting',5529.52,'837-8038 Vulputate Avenue','Perth','Cayman Islands'),
(54,'A Ltd',18.32,'8516 Vitae Rd.','Paris','Korea, North'),
(55,'A Institute',2266.36,'Ap #730-8390 Consectetuer St.','Guarulhos','Kuwait'),
(56,'In Tincidunt LLC',8991.00,'P.O. Box 866, 3430 Auctor Rd.','Dubai','Uzbekistan'),
(57,'Auctor Associates',8100.61,'P.O. Box 693, 9114 Id, Rd.','Chicago','Syria'),
(58,'Vestibulum Massa LLP',1099.61,'202-6951 Non St.','Adelaide','Denmark'),
(59,'Vitae Limited',9540.16,'5473 Est Rd.','Orlando','China'),
(60,'Erat Institute',9824.98,'P.O. Box 260, 9556 Sem, Rd.','Mexico City','Cyprus'),
(61,'Mus Donec PC',2779.83,'129-3269 Dictum Ave','Chicago','Egypt'),
(62,'Tristique Pellentesque Tellus Incorporated',864.16,'5089 Nunc, Avenue','Hobart','Faroe Islands'),
(63,'Et Tristique Pellentesque Associates',4951.02,'9452 Pede St.','Istanbul','Chad'),
(64,'Leo Associates',2888.88,'124-4666 Lorem, Rd.','Bangkok','Marshall Islands'),
(65,'Curae Phasellus Ornare Institute',9541.30,'Ap #309-9787 Gravida Rd.','Brisbane','Kenya'),
(66,'Suspendisse Ac Industries',1178.47,'1482 Malesuada St.','Singapore','Turkmenistan'),
(67,'Aliquam Vulputate Ullamcorper Corp.',3420.19,'907-5862 Nec St.','Istanbul','New Caledonia'),
(68,'Quis Foundation',1254.70,'Ap #508-4712 Dolor. Road','Los Angels','Liberia'),
(69,'Torquent LLP',4752.89,'5358 Semper Street','Delhi','Malta'),
(70,'Nulla Aliquet Industries',290.92,'P.O. Box 572, 495 Mauris. Ave','Istanbul','Canada'),
(71,'Scelerisque LLC',8504.21,'3847 Vulputate St.','Guarulhos','Rwanda'),
(72,'Sollicitudin A LLC',735.03,'Ap #151-7080 Eu Rd.','Tokyo','Iraq'),
(73,'Egestas Inc.',9293.38,'671-4256 Dui. Ave','Orlando','Romania'),
(74,'Aliquam Inc.',9995.19,'Ap #827-1508 Dui. St.','Madrid','Saint Barthélemy'),
(75,'Auctor Velit Incorporated',2646.59,'Ap #847-3212 Dui Rd.','Istanbul','Guinea-Bissau'),
(76,'Suspendisse Non Leo Inc.',5737.76,'Ap #697-7186 Tortor. Rd.','Pattaya','Russian Federation'),
(77,'Vitae Sodales Incorporated',8987.15,'7490 Dignissim St.','Frankfurt','Honduras'),
(78,'Accumsan Institute',4463.99,'6125 Tincidunt St.','Taipei','Palau'),
(79,'Iaculis Odio Nam Institute',6823.13,'P.O. Box 452, 1092 Sed Road','Hong Kong','Spain'),
(80,'Elit Curabitur Sed Incorporated',2565.48,'7629 Class Road','Canberra','Yemen'),
(81,'Sed Congue Elit LLP',7802.64,'8876 Risus Ave','Toronto','Japan'),
(82,'Cursus Nunc Mauris Industries',312.66,'9541 Fermentum St.','Denver','Belize'),
(83,'Duis Mi Foundation',1481.22,'P.O. Box 969, 6253 Malesuada St.','Mexico City','India'),
(84,'Parturient Montes Institute',7649.08,'8127 Ullamcorper, St.','Istanbul','Grenada'),
(85,'Eu Institute',1887.59,'877-3851 Sociis Av.','Taipei','Tunisia'),
(86,'Mauris Elit Dictum Incorporated',444.66,'Ap #542-9892 Enim Road','Guarulhos','Liberia'),
(87,'Tellus Non Magna Institute',6026.90,'Ap #470-6992 Cras St.','Chicago','Cyprus'),
(88,'Diam Sed Consulting',7120.29,'Ap #588-3959 Mauris Rd.','Sydney','American Samoa'),
(89,'Eget Tincidunt Limited',9211.09,'P.O. Box 284, 2703 Elit Av.','Canberra','Australia'),
(90,'Cras Lorem LLP',1565.10,'998-4601 Eros Av.','Dallas','Namibia'),
(91,'Suscipit Nonummy Fusce Ltd',5235.05,'294 Lacus. Road','Istanbul','Macao'),
(92,'Metus Consulting',779.89,'7285 Fames St.','Miami','Burkina Faso'),
(93,'Semper Et Lacinia Corp.',8125.18,'Ap #114-1509 Cursus. Rd.','Paris','South Sudan'),
(94,'Eu Lacus Quisque Industries',4712.93,'Ap #480-3648 Fringilla Rd.','Doha','Korea, North'),
(95,'Purus Duis Institute',5241.56,'P.O. Box 883, 9505 Magnis Avenue','Hobart','Madagascar'),
(96,'Dictum Eu Inc.',4060.05,'Ap #409-8878 Libero Rd.','Tokyo','Croatia'),
(97,'Malesuada Malesuada Limited',9219.30,'Ap #573-7723 Mollis Rd.','New York','Bahrain'),
(98,'Nibh Donec Est LLC',8836.15,'6840 Nec Rd.','Phoenix','Brunei'),
(99,'Enim Inc.',5830.46,'Ap #541-9305 Adipiscing. Avenue','Madrid','Hong Kong'),
(100,'Ac LLP',3067.59,'P.O. Box 753, 8164 Non Rd.','Frankfurt','Korea, South'),
(101,'Pede Cras Vulputate Corp.',4371.20,'5947 Cras St.','Perth','Georgia'),
(102,'Aliquam Nec Corporation',923.03,'Ap #942-3466 In Road','Melbourne','Anguilla'),
(103,'Ullamcorper Company',8827.51,'P.O. Box 916, 4754 Ac Road','Brisbane','Cocos (Keeling) Islands'),
(104,'Magna Tellus Institute',6278.99,'Ap #626-8097 Libero. Ave','London','Monaco'),
(105,'Lacinia Institute',8990.98,'Ap #669-6724 Ac Rd.','Tangerang','Kuwait'),
(106,'Massa Suspendisse Associates',7865.57,'671-9626 Nec Street','Doha','Malawi'),
(107,'Nec Company',2803.80,'P.O. Box 711, 2611 Enim. St.','Hong Kong','Timor-Leste'),
(108,'Ornare Elit PC',4335.71,'Ap #812-8355 In Avenue','Barcelona','Georgia'),
(109,'Velit Pellentesque Corporation',986.44,'3264 Malesuada St.','Phoenix','Faroe Islands'),
(110,'Eros Nam PC',8529.06,'676-102 Aliquet Av.','Beijing','Wallis and Futuna'),
(111,'Quisque Institute',4616.64,'522-178 Nam Road','Las Vegas','Korea, South'),
(112,'Sit Company',7382.38,'563-4734 Mi Avenue','Osaka','Ukraine'),
(113,'Sed Libero Proin Corp.',5856.95,'P.O. Box 418, 1195 Dolor, St.','Las Vegas','Syria'),
(114,'Curabitur Industries',5456.34,'P.O. Box 757, 3048 Ligula. Rd.','Taipei','Belarus'),
(115,'Nec Ante Limited',8338.57,'725-353 Ultricies Road','Brisbane','Burkina Faso'),
(116,'Orci Lobortis Industries',8640.87,'868-507 Et, St.','Los Angels','Grenada'),
(117,'Magna Associates',6681.20,'5405 Vitae St.','Sydney','Aruba'),
(118,'Eros Nec LLC',5297.86,'711-1725 Dui. Rd.','Toronto','Cocos (Keeling) Islands'),
(119,'Gravida Incorporated',3067.55,'458-4331 Nullam Av.','Adelaide','Sierra Leone'),
(120,'Consequat Limited',2282.26,'P.O. Box 542, 9771 Quis Avenue','Pattaya','Poland'),
(121,'Tempor Augue Ac Incorporated',4269.36,'Ap #352-1997 Congue. Av.','Ho Chi Minh City','Venezuela'),
(122,'Ante Ltd',6821.82,'Ap #867-3350 Eget Ave','Adelaide','Cook Islands'),
(123,'Feugiat Nec LLC',5435.40,'520-6401 Lorem Avenue','Madrid','Wallis and Futuna'),
(124,'Metus Inc.',6557.53,'4623 Dolor, Rd.','Shanghai','Myanmar'),
(125,'Malesuada Ltd',2571.34,'2214 Ipsum Ave','Denver','Bangladesh'),
(126,'Ut Institute',2194.49,'586-3245 Id Av.','Canberra','El Salvador'),
(127,'Mauris Vestibulum Inc.',9911.67,'4959 Mauris Road','Doha','Lesotho'),
(128,'Quam Limited',6127.44,'Ap #587-5477 Ligula Rd.','Amsterdam','Germany'),
(129,'Ornare Lectus Ante Ltd',2049.73,'P.O. Box 663, 9169 Congue. Road','Mumbai','Burkina Faso'),
(130,'At Egestas A Associates',4647.26,'P.O. Box 138, 8398 Ultricies Ave','Los Angels','American Samoa'),
(131,'Posuere Enim Corp.',9695.29,'Ap #571-9648 Aliquam Avenue','Mumbai','Antigua and Barbuda'),
(132,'Fermentum Fermentum Arcu Ltd',9741.23,'Ap #165-8306 Adipiscing Rd.','Bangkok','Zambia'),
(133,'Elementum Sem Incorporated',2818.75,'204-2171 Nulla. Avenue','Shanghai','Malta'),
(134,'Erat Neque Ltd',3000.70,'P.O. Box 833, 5867 Gravida. Rd.','Osaka','Anguilla'),
(135,'Lectus Pede Ltd',2386.37,'1238 Diam. Avenue','Bangkok','Saint Martin'),
(136,'Phasellus Institute',4368.28,'485-573 Lorem, Road','Osaka','British Indian Ocean Territory'),
(137,'Eu Sem Company',1394.66,'Ap #803-8613 Mi St.','Adelaide','Korea, South'),
(138,'Fusce Aliquam LLP',4031.83,'984-7947 Posuere Avenue','Melbourne','Romania'),
(139,'Sit Limited',5804.82,'7797 Tristique Avenue','Mumbai','Sierra Leone'),
(140,'Facilisis Suspendisse Institute',6881.05,'4566 Parturient St.','Beijing','Brazil'),
(141,'Risus Consulting',1610.92,'185-8553 Id Rd.','Shanghai','Saint Lucia'),
(142,'Pede Limited',7413.28,'Ap #554-2284 Duis Avenue','Paris','Latvia'),
(143,'Arcu Nunc Consulting',5573.19,'P.O. Box 551, 2957 Dictum St.','Shanghai','Virgin Islands, British'),
(144,'Mus Proin PC',9741.91,'800-9022 Elit, Street','Amsterdam','Azerbaijan'),
(145,'Aliquam Nec Enim Ltd',8478.81,'791-3239 Magnis Rd.','Seoul','Haiti'),
(146,'Amet Dapibus Consulting',6657.75,'4206 Phasellus St.','Madrid','Malawi'),
(147,'Lacinia Vitae Sodales Corp.',4211.61,'Ap #923-7382 Aliquam Av.','Ho Chi Minh City','Oman'),
(148,'Adipiscing Mauris Molestie Consulting',139.18,'Ap #925-5755 Ridiculus Av.','Adelaide','Kazakhstan'),
(149,'Vitae Corporation',3372.80,'P.O. Box 774, 9963 Morbi St.','Guarulhos','Virgin Islands, United States'),
(150,'Metus Vitae Associates',5271.91,'P.O. Box 978, 9225 Auctor Street','Sydney','United Kingdom (Great Britain)'),
(151,'Lacus Etiam Bibendum Corp.',9073.37,'Ap #528-9010 Adipiscing Rd.','Brisbane','Bhutan'),
(152,'Aenean Eget Magna Corporation',6251.32,'P.O. Box 718, 9607 Urna St.','London','Norway'),
(153,'Lectus Quis Massa Incorporated',383.39,'5335 Metus. Rd.','Miami','Chad'),
(154,'Penatibus Foundation',1664.98,'Ap #334-3936 Quisque Street','Brisbane','Mongolia'),
(155,'Eget Varius Ultrices Institute',9508.48,'5981 Dis Rd.','Dubai','Moldova'),
(156,'Fusce Aliquet Magna Corp.',668.28,'7184 Etiam Ave','Frankfurt','India'),
(157,'Rhoncus Corp.',4552.84,'Ap #463-915 Orci. Avenue','Las Vegas','Belarus'),
(158,'Aliquam Eu Accumsan Foundation',8370.31,'8233 A Avenue','New York','United States'),
(159,'Consectetuer Adipiscing LLP',7480.04,'2329 Ornare. Ave','Toronto','India'),
(160,'Amet Faucibus Ut Corporation',1323.63,'Ap #811-6612 In, St.','Darwin','Gibraltar'),
(161,'Enim Curabitur Massa Corp.',3522.97,'905-7189 Sit Road','Amsterdam','Dominica'),
(162,'Ipsum Sodales Incorporated',9144.59,'Ap #956-6511 Erat St.','Osaka','South Georgia and The South Sandwich Islands'),
(163,'Nisi Limited',9024.34,'Ap #261-8099 Dictum Road','Shanghai','Cameroon'),
(164,'Litora Inc.',9964.50,'754-331 Purus. Ave','Los Angels','Italy'),
(165,'Sed Corp.',4003.06,'Ap #945-818 Mauris Avenue','Brisbane','Qatar'),
(166,'Cursus LLP',1518.81,'307 Commodo Ave','Istanbul','Bahrain'),
(167,'Mauris Blandit LLP',220.09,'910-575 Elementum, St.','Barcelona','Guadeloupe'),
(168,'Nulla Integer Urna Company',12.16,'2597 Nisi St.','Singapore','Andorra'),
(169,'Ac Sem Foundation',4267.61,'351-2909 Netus Rd.','Toronto','Sri Lanka'),
(170,'Magna Industries',3393.36,'9909 Vel, St.','New York','Bahrain'),
(171,'Tempus Corporation',2266.55,'P.O. Box 996, 8433 Eu, Av.','Mumbai','Hong Kong'),
(172,'Rutrum Associates',7255.07,'P.O. Box 709, 8381 Aliquet St.','Beijing','Djibouti'),
(173,'Lorem Ac Risus LLC',4745.19,'Ap #773-1658 At Av.','Miami','Morocco'),
(174,'Convallis Est Vitae Limited',1833.30,'224-1812 Torquent Street','Dallas','Benin'),
(175,'Mi Duis Associates',2531.56,'999 Porttitor St.','Brisbane','Viet Nam'),
(176,'Augue Corporation',8923.23,'P.O. Box 728, 8976 Tempus St.','Delhi','Czech Republic'),
(177,'Vel Nisl Industries',1123.42,'499-5310 Per Ave','Las Vegas','Sudan'),
(178,'Egestas Corporation',8394.91,'P.O. Box 748, 7273 Velit Rd.','Paris','Cayman Islands'),
(179,'Mattis Institute',2947.56,'369-172 Consectetuer St.','Perth','Sao Tome and Principe'),
(180,'Facilisis LLC',8147.41,'1326 Sed, Rd.','Brisbane','Myanmar'),
(181,'Magna Suspendisse Tristique Limited',458.02,'Ap #843-3581 Velit. Rd.','Chicago','Moldova'),
(182,'Ligula Nullam Corporation',5088.45,'P.O. Box 810, 2006 Egestas St.','Hong Kong','Gambia'),
(183,'Tellus Limited',7538.79,'2671 Dui. Avenue','Denver','Isle of Man'),
(184,'Lectus Institute',5683.24,'401-5232 Enim Avenue','Toronto','Burundi'),
(185,'Amet Consectetuer Adipiscing PC',8566.43,'P.O. Box 825, 6150 Vitae Street','Perth','Virgin Islands, United States'),
(186,'Dolor Donec Fringilla Limited',4483.40,'Ap #896-7392 Luctus Avenue','Istanbul','Austria'),
(187,'Tortor Integer Aliquam LLC',2059.43,'P.O. Box 162, 6950 Nulla Av.','Perth','Guinea'),
(188,'Placerat Cras Corporation',9305.74,'P.O. Box 714, 2219 Donec Rd.','Frankfurt','Andorra'),
(189,'Aliquet Metus Urna Corporation',6034.23,'838-9751 Ipsum St.','Tokyo','Bangladesh'),
(190,'In Hendrerit Incorporated',2961.63,'469-1456 Neque Rd.','Los Angels','Côte D\'Ivoire (Ivory Coast)'),
(191,'Nulla Tincidunt Neque Foundation',5300.97,'2992 Purus Rd.','Paris','Kyrgyzstan'),
(192,'Enim Consulting',737.77,'4217 Volutpat. Ave','Phoenix','Guadeloupe'),
(193,'Arcu Aliquam Ultrices Associates',9476.39,'254-6493 Scelerisque Street','Chicago','Russian Federation'),
(194,'Feugiat Tellus Lorem LLP',4033.73,'787-7836 Ac Road','Shanghai','Saudi Arabia'),
(195,'Mauris Elit Dictum Inc.',1949.06,'8300 Odio. Street','Denver','Moldova'),
(196,'Volutpat Nulla Dignissim Institute',6893.49,'Ap #551-2032 Aliquam St.','Pattaya','Myanmar'),
(197,'Pede Company',6202.19,'Ap #480-8523 Magna, St.','Darwin','Holy See (Vatican City State)'),
(198,'Proin Associates',9254.64,'P.O. Box 952, 7971 Facilisis Road','Singapore','Trinidad and Tobago'),
(199,'Fusce Associates',1081.82,'9169 Neque Road','Hanoi','Christmas Island'),
(200,'Leo In Lobortis PC',5052.61,'Ap #365-2849 Nunc Street','Paris','Fiji'),
(201,'Four Seaons',100.00,'dfgsfdsf','melbourne','australia'),
(202,'test1',100.00,'test1address','Melbourne','Australia');
/*!40000 ALTER TABLE `hotel_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(64) NOT NULL,
  `hotel_price` decimal(9,2) NOT NULL,
  `hotel_address` varchar(64) NOT NULL,
  `hotel_city` varchar(64) NOT NULL,
  `hotel_country` varchar(64) NOT NULL,
  `hotel_data_id` int(11) NOT NULL,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `hotel_data_id` (`hotel_data_id`) USING BTREE,
  CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`hotel_data_id`) REFERENCES `hotel_data` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hotels`
--

LOCK TABLES `hotels` WRITE;
/*!40000 ALTER TABLE `hotels` DISABLE KEYS */;
INSERT INTO `hotels` VALUES
(7,'Varius Ultrices Mauris Corporation',9655.22,'P.O. Box 142, 607 Vestibulum Road','New York','Ukraine',51,0),
(8,'Malesuada Malesuada Limited',9219.30,'Ap #573-7723 Mollis Rd.','New York','Bahrain',97,0),
(9,'Aliquam Eu Accumsan Foundation',8370.31,'8233 A Avenue','New York','United States',158,0),
(10,'Aliquam Eu Accumsan Foundation',8370.31,'8233 A Avenue','New York','United States',158,0),
(11,'Lorem Corp.',7741.41,'Ap #981-8104 Elit Rd.','Tokyo','Namibia',2,1),
(12,'Scelerisque LLC',8504.21,'3847 Vulputate St.','Guarulhos','Rwanda',71,1),
(13,'Varius Ultrices Mauris Corporation',9655.22,'P.O. Box 142, 607 Vestibulum Road','New York','Ukraine',51,6);
/*!40000 ALTER TABLE `hotels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `package_data`
--

DROP TABLE IF EXISTS `package_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `package_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `departure` varchar(64) NOT NULL,
  `destination` varchar(64) NOT NULL,
  `departure_time` datetime NOT NULL,
  `destination_time` datetime NOT NULL,
  `hotel_name` varchar(64) NOT NULL,
  `hotel_address` varchar(64) NOT NULL,
  `total_price` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `package_data`
--

LOCK TABLES `package_data` WRITE;
/*!40000 ALTER TABLE `package_data` DISABLE KEYS */;
INSERT INTO `package_data` VALUES
(1,'Seoul','New York','2023-12-26 13:10:20','2023-12-10 04:53:36','Luctus Incorporated','1905 Duis Road',7623.40),
(2,'New York','London','2023-04-28 00:06:08','2023-04-29 00:06:17','Four Seaons','London',400.00),
(3,'Bangkok','Guarulhos','2023-06-12 20:58:21','2023-07-12 10:06:15','Torquent Per Conubia LLC','350-8294 Venenatis Avenue',6347.50),
(4,'New York','London','2023-05-10 01:44:54','2023-05-10 01:44:54','London Hotel','London',400.00),
(5,'New York','London','2023-05-16 17:01:32','2023-05-17 17:01:36','test1','test1address',500.00),
(6,'Miami','Melbourne','2023-09-02 11:27:43','2023-06-03 20:07:49','Placerat Corp.','5920 Cum Avenue',4835.41),
(7,'Delhi','Chicago','2023-12-07 22:32:30','2023-12-26 01:32:25','Eleifend Vitae Erat Inc.','9422 Urna. Avenue',1182.96),
(8,'Ho Chi Minh City','Perth','2023-10-07 23:09:14','2023-08-19 23:09:30','Arcu Corporation','2009 Suspendisse Rd.',2420.20),
(9,'Dubai','Orlando','2023-07-04 16:47:37','2023-09-30 14:22:22','Urna Incorporated','P.O. Box 707, 5834 Eleifend, Street',2846.53),
(10,'Sydney','Mexico City','2023-06-04 12:05:40','2023-08-30 08:00:35','Vitae Semper Associates','Ap #171-305 Eleifend Rd.',5006.93),
(11,'Seoul','Hong Kong','2023-12-26 20:09:50','2023-06-30 12:53:10','Non Leo Company','7150 Mauris Rd.',5511.86),
(12,'Perth','Denver','2023-08-10 02:20:11','2023-07-17 23:14:03','Blandit Foundation','P.O. Box 974, 9536 Ac, St.',9062.56),
(13,'Istanbul','Mumbai','2023-09-19 20:11:05','2023-09-08 00:27:15','Tempus Non PC','P.O. Box 593, 3552 Interdum St.',1450.64),
(14,'Singapore','Guarulhos','2023-05-11 08:50:00','2023-05-13 21:22:18','Purus Maecenas Corp.','7376 Sed Av.',8662.36),
(15,'Hobart','Dallas','2023-09-24 03:01:20','2023-07-20 02:04:28','Vel Convallis Ltd','P.O. Box 558, 1026 Interdum. Rd.',3567.42),
(16,'Los Angels','Denver','2023-11-16 14:26:12','2023-05-19 07:04:08','Sed Sapien Company','640 Adipiscing Rd.',5385.30),
(17,'Los Angels','Denver','2023-11-07 15:15:29','2023-08-27 10:39:19','Erat Vivamus Nisi Incorporated','Ap #117-9287 Amet Avenue',7759.63),
(18,'Shanghai','Adelaide','2023-09-21 14:51:35','2023-06-13 07:21:01','Amet Lorem Semper Corp.','Ap #647-5604 Quis St.',4134.16),
(19,'Paris','Doha','2023-08-23 02:11:29','2023-08-07 01:39:40','Nibh Phasellus Associates','Ap #861-659 Erat St.',9856.73),
(20,'Ho Chi Minh City','Madrid','2023-11-15 03:58:52','2023-07-23 09:52:09','Et Ultrices Posuere Ltd','2861 Donec Rd.',6986.37),
(21,'Atlanta','Atlanta','2023-06-24 04:16:54','2023-09-11 16:50:57','Fermentum Vel Mauris Limited','9654 Nec Rd.',1452.53),
(22,'Tangerang','London','2023-07-01 04:17:50','2023-12-12 22:40:57','Sed Ltd','1213 Ac Rd.',5588.21),
(23,'Doha','Shanghai','2023-05-19 03:18:39','2023-05-24 10:42:43','Libero Inc.','290 Dolor. Rd.',7056.80),
(24,'Mexico City','Amsterdam','2023-07-01 22:21:46','2023-07-04 12:42:36','Eget Corp.','Ap #227-9141 Nulla Street',2690.56),
(25,'Beijing','New York','2023-09-18 19:15:12','2023-09-23 03:25:36','Dignissim Maecenas Ornare LLP','Ap #105-3824 Libero Avenue',6.19),
(26,'Beijing','Guarulhos','2023-12-01 05:09:28','2023-11-14 01:40:10','Dui Incorporated','525-9166 Adipiscing Av.',5771.67),
(27,'Brisbane','Los Angels','2023-05-25 07:40:04','2023-08-24 02:41:48','Vulputate Ullamcorper Foundation','449-5719 Eu, Avenue',9271.91),
(28,'Atlanta','Dallas','2023-12-17 21:19:36','2023-11-10 11:42:38','Scelerisque Dui Suspendisse Institute','1212 Orci St.',4240.05),
(29,'Delhi','Barcelona','2023-06-26 19:52:57','2023-05-31 04:43:48','A Magna Lorem PC','P.O. Box 502, 8420 Sed St.',8530.95),
(30,'Guarulhos','Dubai','2023-10-29 08:41:56','2023-07-26 18:05:40','Sollicitudin Commodo Foundation','8365 Dui, Street',3887.30),
(31,'Ho Chi Minh City','Darwin','2023-05-28 11:14:18','2023-07-30 10:49:30','Integer Tincidunt Incorporated','P.O. Box 286, 7079 Et Rd.',2138.87),
(32,'Toronto','Brisbane','2023-07-14 14:05:17','2023-11-05 15:07:04','Mus Proin Vel Foundation','9447 Aliquam Street',9783.25),
(33,'Ho Chi Minh City','Mumbai','2023-12-08 04:06:30','2023-11-26 08:21:48','Magna A Corporation','P.O. Box 178, 8632 Nulla Avenue',6212.71),
(34,'Barcelona','Taipei','2023-08-02 08:14:17','2023-06-13 20:32:43','Sit Amet Metus Corporation','P.O. Box 463, 9239 Metus. Street',2753.50),
(35,'Kuala Lumpur','Barcelona','2023-07-07 14:26:58','2023-12-31 14:31:01','Nisi LLC','P.O. Box 424, 8249 Metus. Ave',2887.89),
(36,'Ho Chi Minh City','Mexico City','2023-12-11 12:34:22','2023-10-18 02:51:10','Sit Amet Industries','6905 Quam Av.',2931.52),
(37,'Atlanta','Hong Kong','2023-11-12 17:53:50','2023-09-03 19:46:36','Porttitor Tellus Foundation','320-2535 Sem. Rd.',4501.01),
(38,'Melbourne','Hanoi','2023-08-23 14:30:32','2023-09-01 08:06:38','Sapien Imperdiet Ornare Industries','428-6506 Hendrerit Rd.',994.20),
(39,'Phoenix','Doha','2023-10-05 14:00:59','2023-06-20 07:41:42','In Industries','1203 Ullamcorper, Ave',1261.20),
(40,'London','Singapore','2023-05-30 22:37:45','2023-06-20 17:09:25','Senectus Corporation','493-611 Nec St.',1306.95),
(41,'Barcelona','Mumbai','2023-11-15 07:56:53','2023-06-28 20:35:53','Ac Turpis Egestas Incorporated','Ap #346-1959 Nam Rd.',1753.25),
(42,'Hobart','Seoul','2023-07-30 00:11:39','2023-09-10 09:16:28','Dolor LLP','762-6741 Eu Street',6391.56),
(43,'Madrid','Sydney','2023-07-08 10:03:30','2023-08-26 11:53:06','Gravida Mauris Ut Industries','Ap #286-166 Scelerisque Rd.',7174.09),
(44,'Phoenix','Atlanta','2023-12-26 15:31:13','2023-07-01 17:33:56','Et Malesuada Consulting','373-9377 Interdum. St.',2320.14),
(45,'Miami','Tokyo','2023-11-28 18:14:11','2023-08-30 04:20:14','Ante Consulting','889-1825 Nunc St.',6141.49),
(46,'Atlanta','Frankfurt','2023-07-28 21:26:51','2023-08-07 17:36:05','Egestas Associates','P.O. Box 811, 9952 Sem Rd.',1142.76),
(47,'Frankfurt','Miami','2023-12-09 07:33:52','2023-08-11 00:46:20','In LLP','5421 Sapien. Rd.',9244.05),
(48,'Shanghai','Singapore','2023-06-17 22:56:11','2023-11-29 05:05:03','Fringilla Mi Lacinia Corp.','P.O. Box 262, 396 Tincidunt Rd.',709.09),
(49,'Dubai','Osaka','2023-05-26 07:27:15','2023-07-31 11:40:54','Semper Rutrum Fusce Inc.','6257 Vel Avenue',7109.44),
(50,'Darwin','Las Vegas','2023-08-25 22:48:22','2023-09-09 17:51:34','Eget Metus In Limited','530-4025 Id, St.',4717.32),
(51,'Frankfurt','Dubai','2023-12-27 21:53:32','2023-11-26 19:49:43','Auctor Nunc Incorporated','Ap #538-9011 Cras Avenue',9989.04),
(52,'Darwin','Mexico City','2023-09-10 15:55:03','2023-06-14 14:02:26','Aliquam Industries','705-6354 Ut, Street',1688.35),
(53,'Los Angels','Kuala Lumpur','2023-11-16 21:07:49','2023-09-02 17:49:20','Odio Auctor Corp.','1400 Lectus St.',5803.58),
(54,'Las Vegas','Seoul','2023-08-02 03:34:10','2023-07-28 18:16:58','Viverra Incorporated','Ap #405-2046 Congue Street',3586.54),
(55,'Sydney','Canberra','2023-12-14 22:50:20','2023-10-22 11:15:05','Cursus Non Egestas Ltd','P.O. Box 397, 9181 Dictum Av.',1391.12),
(56,'Denver','Kuala Lumpur','2023-11-03 06:02:41','2023-06-28 02:35:00','Aliquam Arcu Industries','P.O. Box 619, 3739 Malesuada. Street',8013.45),
(57,'Phoenix','Brisbane','2023-05-14 16:01:12','2023-11-10 11:25:33','Accumsan Sed Facilisis Company','Ap #841-8799 At, St.',4328.26),
(58,'Shanghai','Kuala Lumpur','2023-11-17 20:01:53','2023-11-04 20:37:11','Eu Associates','4108 Faucibus Ave',3421.13),
(59,'Darwin','Dubai','2023-05-18 22:36:11','2023-10-22 13:13:07','Hymenaeos Mauris LLP','P.O. Box 185, 8874 Sem. Ave',9783.77),
(60,'Denver','Hanoi','2023-08-18 14:59:27','2023-11-19 15:35:54','Lorem Fringilla Ornare Industries','Ap #345-9851 Lorem Street',729.56),
(61,'Brisbane','Adelaide','2023-06-18 14:57:15','2023-08-25 23:38:52','Aenean Ltd','P.O. Box 246, 690 Nec, Av.',4318.61),
(62,'Mumbai','Tokyo','2023-07-21 20:42:37','2023-08-20 20:09:56','Dapibus Rutrum PC','9546 Libero. Avenue',1708.61),
(63,'Barcelona','Paris','2023-08-27 12:42:19','2023-10-06 20:18:44','Porttitor Vulputate Posuere Incorporated','177-8543 Metus Rd.',5675.12),
(64,'Los Angels','Singapore','2023-11-22 05:06:16','2023-07-24 11:39:51','Fermentum Convallis PC','9430 Aliquam Road',746.51),
(65,'Barcelona','Hanoi','2023-09-18 23:32:37','2023-12-28 20:07:25','Risus Duis Ltd','885-450 Orci, Av.',2371.18),
(66,'Kuala Lumpur','Amsterdam','2023-10-14 03:24:03','2023-06-01 09:21:54','Donec Nibh Quisque Corp.','P.O. Box 315, 7911 Rhoncus. St.',1517.24),
(67,'Ho Chi Minh City','Chicago','2023-08-02 02:51:59','2023-06-20 10:51:24','Molestie Sed Id Consulting','6921 Et Road',2814.56),
(68,'Hanoi','Darwin','2023-06-22 07:33:19','2023-09-26 10:51:11','In At Associates','7641 Tellus. Rd.',4221.31),
(69,'Amsterdam','Canberra','2023-11-01 08:05:55','2023-05-11 17:37:00','Nullam Ut Nisi LLC','461-687 Dolor. Rd.',4831.54),
(70,'Mumbai','Barcelona','2023-06-21 09:41:10','2023-08-15 20:07:28','Conubia LLP','2539 Justo. Street',3473.03),
(71,'Frankfurt','Las Vegas','2023-05-15 00:08:56','2023-07-24 19:54:53','Suspendisse Sagittis Nullam Corp.','976-4621 Mauris Ave',1664.63),
(72,'Guarulhos','Hobart','2023-10-15 02:52:52','2023-06-29 19:38:03','Cras Consulting','P.O. Box 602, 6922 Aliquam Rd.',6484.11),
(73,'Frankfurt','Orlando','2023-06-16 19:43:18','2023-07-31 12:58:32','Faucibus Limited','9750 Faucibus Rd.',4103.76),
(74,'Miami','Chicago','2023-06-21 05:34:35','2023-06-17 08:24:44','Justo Industries','P.O. Box 570, 8711 Mauris Ave',2175.09),
(75,'Melbourne','Madrid','2023-10-10 17:07:09','2023-10-12 19:57:55','Suspendisse Corp.','Ap #404-8306 Sed St.',9090.90),
(76,'Mexico City','Tangerang','2023-06-14 15:54:30','2023-09-06 11:21:57','Volutpat Nulla Dignissim Corporation','365-3410 Non, St.',633.68),
(77,'Pattaya','Madrid','2023-08-02 22:04:37','2023-11-11 23:07:52','Convallis Dolor Ltd','P.O. Box 204, 4476 Gravida. Avenue',7350.92),
(78,'Osaka','Denver','2023-11-20 15:24:59','2023-05-23 03:50:17','Mollis Industries','Ap #118-7733 Metus. St.',4623.60),
(79,'Mumbai','Los Angels','2023-12-03 06:38:18','2023-07-13 17:24:17','Elit Pharetra PC','297-1336 Cras St.',827.98),
(80,'Amsterdam','Paris','2023-10-16 01:09:18','2023-06-22 19:06:20','Cras Eu PC','Ap #901-3627 Auctor St.',1099.77),
(81,'Barcelona','Perth','2023-07-19 21:53:15','2023-07-11 13:53:33','Arcu PC','Ap #116-4400 Mauris Street',988.67),
(82,'London','Melbourne','2023-11-20 19:18:54','2023-12-25 06:41:23','Tellus Limited','2453 Vehicula Road',911.83),
(83,'Tangerang','Tangerang','2023-08-01 03:51:02','2023-07-04 21:30:54','Donec Non Ltd','Ap #130-9126 Lacus. St.',4436.44),
(84,'Frankfurt','Denver','2023-06-28 01:31:28','2023-12-21 07:50:14','Fringilla Ornare Incorporated','8418 Enim. St.',6969.03),
(85,'Frankfurt','London','2023-12-20 07:32:40','2023-06-14 20:41:40','Arcu Vivamus Sit PC','Ap #600-9594 At Avenue',2879.36),
(86,'Atlanta','Ho Chi Minh City','2023-11-15 20:29:33','2023-07-17 11:25:36','Fringilla Incorporated','Ap #257-1822 Ipsum Avenue',8953.23),
(87,'Mumbai','Shanghai','2023-11-23 23:42:09','2023-06-17 23:23:09','Donec Nibh Enim Company','P.O. Box 731, 4168 Tincidunt St.',3550.42),
(88,'New York','Pattaya','2023-06-18 12:03:30','2023-06-10 23:16:12','Sed LLP','P.O. Box 685, 5094 Ac Road',9680.59),
(89,'Adelaide','Singapore','2023-05-13 21:57:41','2023-10-17 04:16:05','Tempor Augue Inc.','P.O. Box 271, 595 Molestie Av.',9104.87),
(90,'Frankfurt','Tangerang','2023-05-18 00:59:01','2023-06-05 13:10:18','Augue PC','P.O. Box 154, 9063 Non, Street',2423.35),
(91,'Taipei','Darwin','2023-11-04 17:46:45','2023-11-16 18:08:26','Ut Nec Urna Inc.','606-8688 Dapibus Street',8159.67),
(92,'Sydney','Atlanta','2023-10-09 08:51:02','2023-12-24 20:37:38','Nisi Foundation','Ap #178-6984 Nullam Avenue',8826.87),
(93,'Toronto','Atlanta','2023-09-24 16:11:56','2023-09-05 08:40:33','Congue LLP','4856 Eu Rd.',3360.43),
(94,'Brisbane','Darwin','2023-11-22 07:40:39','2023-10-10 12:27:31','A Odio Semper Institute','P.O. Box 784, 3406 Erat. Road',7074.77),
(95,'Las Vegas','Chicago','2023-11-14 09:21:38','2023-12-27 04:31:32','Aenean Massa Corp.','P.O. Box 352, 6644 Fringilla, Rd.',3203.09),
(96,'Dallas','Tokyo','2023-08-06 19:51:34','2023-10-12 01:11:29','Non Justo Proin Institute','1856 Mauris Av.',1616.26),
(97,'Amsterdam','Ho Chi Minh City','2023-07-28 04:16:02','2023-12-23 03:13:11','Lorem Corp.','Ap #786-1633 Sed Road',1812.21),
(98,'Kuala Lumpur','Istanbul','2023-12-13 09:59:21','2023-05-17 23:28:43','Mollis LLP','1236 Ligula. Avenue',9651.00),
(99,'Paris','Doha','2023-06-29 17:38:51','2023-08-13 07:52:38','Diam Luctus Consulting','838-3508 Scelerisque Ave',5009.92),
(100,'Frankfurt','Las Vegas','2023-12-17 15:03:16','2023-07-25 03:18:39','Nunc Quis Corp.','Ap #131-4413 Sed St.',5403.13),
(101,'Hobart','New York','2023-05-13 09:12:47','2023-12-19 11:06:33','Non Associates','Ap #821-426 Mauris Rd.',8800.13),
(102,'New York','Osaka','2023-09-21 13:30:21','2023-07-06 02:33:04','Urna Justo Faucibus Industries','Ap #917-7084 Diam. Road',6065.49),
(103,'Seoul','Las Vegas','2023-07-19 10:56:12','2023-05-23 04:52:05','Non Bibendum Sed LLP','8937 Nec Road',1490.96),
(104,'Shanghai','Tangerang','2023-11-21 14:14:36','2023-09-05 09:09:31','Lacus Pede Company','983-1922 Lacinia. Rd.',6129.69),
(105,'Madrid','Denver','2023-11-06 12:42:58','2023-07-17 02:51:41','Mauris PC','932 Tortor Road',2947.38),
(106,'Darwin','Bangkok','2023-11-16 13:51:38','2023-09-02 04:00:43','Ornare Lectus Consulting','P.O. Box 834, 8076 Sit Av.',3257.82),
(107,'Denver','Frankfurt','2023-07-12 04:00:45','2023-08-19 08:46:57','Sem Vitae Aliquam Corp.','P.O. Box 969, 8146 At Rd.',4431.63),
(108,'Kuala Lumpur','Barcelona','2023-07-16 08:40:36','2023-07-16 21:50:40','Vehicula Risus Nulla PC','345-9071 Facilisis Rd.',2183.71),
(109,'Orlando','Melbourne','2023-12-05 17:30:35','2023-07-31 15:03:06','Ligula Limited','141-881 Cras Street',5915.11),
(110,'Singapore','Osaka','2023-05-13 00:19:19','2023-08-18 11:10:26','Nunc Sed LLC','P.O. Box 888, 9810 Risus. Road',2634.29),
(111,'Adelaide','London','2023-12-17 03:56:35','2023-09-13 21:06:26','Vivamus Nisi Mauris Ltd','Ap #459-8626 Non, Av.',6519.60),
(112,'Chicago','Seoul','2023-06-12 15:18:39','2023-10-25 21:55:13','Pharetra Ut Corp.','P.O. Box 825, 8485 Non St.',6771.91),
(113,'Frankfurt','Hobart','2023-10-06 11:30:18','2023-06-20 23:20:04','Nascetur Ridiculus Mus Institute','5916 Porttitor Street',3664.21),
(114,'Phoenix','Hanoi','2023-09-11 18:07:21','2023-09-08 05:30:55','Donec Porttitor Tellus LLP','190-3722 Arcu. Avenue',2510.05),
(115,'Amsterdam','Hong Kong','2023-06-18 07:07:48','2023-11-24 01:29:38','Consequat Dolor PC','931 Magna. Street',1075.46),
(116,'Istanbul','Guarulhos','2023-09-23 11:56:28','2023-10-04 04:21:26','Maecenas Mi Felis LLC','486-5017 Pede, Rd.',8736.47),
(117,'Perth','Taipei','2023-11-20 23:06:35','2023-10-05 03:40:48','Erat Vitae Risus Industries','9302 Nam Street',8493.50),
(118,'Las Vegas','Atlanta','2023-05-26 16:47:59','2023-08-24 20:04:56','Mauris Ut Corp.','P.O. Box 952, 9610 Quisque Street',972.72),
(119,'Perth','New York','2023-05-14 20:07:25','2023-07-15 02:44:14','Lorem Semper Incorporated','P.O. Box 619, 7281 Mauris Road',962.20),
(120,'Darwin','Atlanta','2023-12-27 13:08:17','2023-12-23 07:07:37','Elementum Company','603-8310 Non Avenue',575.94),
(121,'Barcelona','Seoul','2023-06-25 21:04:10','2023-11-09 13:35:28','Tristique Pharetra Inc.','9186 A Ave',8179.78),
(122,'Barcelona','Adelaide','2023-12-11 23:44:07','2023-08-10 15:14:00','Et Rutrum Industries','Ap #958-1484 Egestas Rd.',2563.09),
(123,'Atlanta','Paris','2023-09-26 23:43:07','2023-09-27 11:31:32','Quisque Libero Company','Ap #769-4310 Enim. Rd.',8227.48),
(124,'Barcelona','Atlanta','2023-11-27 12:03:35','2023-05-22 02:57:00','Non Enim Industries','6064 Dictum. Ave',2702.84),
(125,'Mumbai','Sydney','2023-06-01 17:09:01','2023-08-25 23:54:51','Sem Incorporated','244-8280 Sem Rd.',6602.17),
(126,'Beijing','Brisbane','2023-05-16 23:19:56','2023-11-15 14:26:31','Dictum Eleifend Institute','450-8979 Aliquet Av.',5076.14),
(127,'Los Angels','Kuala Lumpur','2023-11-29 07:00:14','2023-12-14 23:14:46','Ut LLC','9721 Primis Rd.',2817.95),
(128,'Frankfurt','Madrid','2023-11-14 05:06:05','2023-07-13 07:31:00','Curabitur Consequat Lectus Inc.','819-6487 Dui, St.',5210.21),
(129,'Brisbane','Denver','2023-08-31 10:59:34','2023-06-11 05:53:59','In Dolor Fusce LLP','P.O. Box 967, 7116 Neque. St.',172.77),
(130,'Seoul','New York','2023-10-05 06:25:06','2023-06-25 14:27:42','Semper Nam Tempor LLP','8418 Dictum Avenue',4524.36),
(131,'Chicago','Delhi','2023-06-13 01:52:46','2023-06-08 21:14:43','Aliquam Industries','9569 Tempor, Street',3730.04),
(132,'Hong Kong','Melbourne','2023-11-15 01:26:50','2023-08-02 08:14:25','Quam Ltd','1851 Erat, St.',583.88),
(133,'Dubai','Darwin','2023-09-05 11:17:01','2023-11-24 18:10:22','Nonummy Ipsum Associates','Ap #833-102 Nunc St.',4222.79),
(134,'Tangerang','Kuala Lumpur','2023-05-29 05:07:55','2023-12-11 15:19:16','Diam Eu Associates','254-3224 Ante Av.',9168.27),
(135,'Denver','Dallas','2023-06-20 20:57:21','2023-11-25 11:32:50','Non Ante Corporation','P.O. Box 833, 7370 Vitae St.',7713.07),
(136,'Osaka','Delhi','2023-09-18 04:50:44','2023-09-27 12:10:41','Lobortis Augue Industries','P.O. Box 479, 657 Lectus. St.',9532.80),
(137,'Delhi','Singapore','2023-06-20 18:46:05','2023-07-07 23:01:21','Eleifend Nec LLC','862-4699 Etiam Road',4955.84),
(138,'Hobart','Toronto','2023-12-06 23:07:54','2023-10-14 03:18:14','Nunc Interdum Feugiat Industries','P.O. Box 828, 5591 Placerat, St.',5193.88),
(139,'Phoenix','Beijing','2023-11-01 18:07:25','2023-07-05 05:28:36','Nunc Laoreet PC','376-1554 Risus. Rd.',3943.50),
(140,'Tangerang','Darwin','2023-07-31 13:40:46','2023-09-23 07:36:47','Ornare Industries','841-4513 Phasellus Road',7695.90),
(141,'Pattaya','Seoul','2023-08-24 01:00:09','2023-12-29 10:39:40','Aenean Egestas PC','Ap #988-6203 Egestas Avenue',2600.29),
(142,'Chicago','Brisbane','2023-06-03 06:59:20','2023-08-24 00:26:43','Neque Nullam Nisl Company','943-7979 Diam Ave',4283.18),
(143,'Perth','Phoenix','2023-11-28 01:29:45','2023-11-28 11:09:48','Dapibus Rutrum Foundation','P.O. Box 922, 9956 Taciti Ave',1651.56),
(144,'Denver','Shanghai','2023-07-12 14:57:28','2023-09-03 22:24:34','Ipsum Primis Incorporated','P.O. Box 248, 2616 Et Avenue',1020.27),
(145,'Bangkok','Tangerang','2023-10-01 14:25:45','2023-05-31 16:23:13','Ut Company','Ap #220-8135 Imperdiet St.',1003.55),
(146,'Shanghai','Atlanta','2023-08-09 13:21:53','2023-06-22 12:46:23','Mauris A Nunc Limited','Ap #908-4235 Dictum Street',3069.46),
(147,'Singapore','Las Vegas','2023-07-24 21:49:15','2023-11-23 09:37:28','Massa Non Inc.','412-7986 Turpis Street',4965.92),
(148,'Darwin','Brisbane','2023-11-27 14:09:10','2023-08-09 05:52:04','Cras Vehicula Foundation','5696 Aliquam Ave',9349.81),
(149,'Madrid','Ho Chi Minh City','2023-09-01 08:08:06','2023-11-06 01:45:54','Rutrum Eu Ultrices LLC','P.O. Box 809, 6561 In Street',5398.77),
(150,'Tangerang','Beijing','2023-06-26 08:10:03','2023-12-19 00:08:15','Tortor Nibh Incorporated','891-9221 Quisque St.',7435.19),
(151,'Sydney','Mexico City','2023-08-26 23:21:45','2023-12-15 07:43:20','Tellus Imperdiet PC','941-7268 Sem Road',4670.25),
(152,'Paris','Guarulhos','2023-05-28 13:08:51','2023-08-25 02:55:35','Sed Ltd','260-8419 Venenatis Av.',1675.39),
(153,'Delhi','Istanbul','2023-08-24 23:45:22','2023-10-30 01:49:07','In Condimentum Donec Industries','P.O. Box 502, 168 Diam. Rd.',497.40),
(154,'Guarulhos','Melbourne','2023-12-24 13:10:16','2023-05-15 00:00:55','Aliquet LLC','521-6258 Nunc Road',6211.29),
(155,'Frankfurt','Melbourne','2023-07-28 15:03:01','2023-11-11 16:00:02','Quis Accumsan Convallis Corporation','530-3793 Mauris. Ave',9194.08),
(156,'Taipei','Miami','2023-09-16 22:01:41','2023-08-22 14:14:39','Eleifend Nec Associates','611-4901 Arcu. Av.',1309.02),
(157,'Perth','Brisbane','2023-06-23 15:33:28','2023-09-08 05:46:59','Enim Mauris Quis Company','P.O. Box 922, 3759 Nunc Street',5366.16),
(158,'Adelaide','Los Angels','2023-07-07 14:40:45','2023-12-21 02:59:48','Nunc Ut Company','9105 Erat Road',378.72),
(159,'Phoenix','Denver','2023-12-01 01:21:45','2023-12-03 11:08:40','Pulvinar Ltd','6658 Aliquam Street',4376.80),
(160,'Beijing','Pattaya','2023-05-19 15:50:03','2023-06-29 11:03:02','Ornare Company','P.O. Box 509, 2157 Eget, Rd.',1209.32),
(161,'Mexico City','Los Angels','2023-09-28 04:08:23','2023-11-30 13:39:24','Sociis LLC','3463 Gravida Street',9208.57),
(162,'Atlanta','Beijing','2023-10-18 00:08:26','2023-05-10 10:35:02','Nunc Foundation','6110 Mus. Road',2204.11),
(163,'Hobart','Dubai','2023-06-30 08:33:32','2023-06-21 23:54:11','Pede Ultrices A Incorporated','3158 Nonummy. Ave',4392.71),
(164,'Perth','Darwin','2023-06-28 00:51:39','2023-09-09 05:47:27','Montes Nascetur Ridiculus Institute','261-5210 Morbi St.',4354.04),
(165,'Denver','Tangerang','2023-12-17 16:51:09','2023-06-09 01:56:30','Ultrices Inc.','126-6475 Ultrices Avenue',2086.66),
(166,'Hong Kong','Canberra','2023-07-31 12:10:48','2023-06-03 02:19:15','Tempus Mauris LLC','7022 Convallis Av.',2530.51),
(167,'Barcelona','Adelaide','2023-05-16 01:58:50','2023-05-30 01:27:33','Ipsum Primis Consulting','Ap #373-5626 Magna, Road',8417.37),
(168,'Madrid','Melbourne','2023-07-25 11:33:59','2023-11-19 06:08:22','Dui Cum Consulting','6160 Est. Street',7178.87),
(169,'Miami','Kuala Lumpur','2023-06-23 08:27:48','2023-10-02 03:03:31','Aenean Corp.','752-8866 Diam St.',8757.22),
(170,'Pattaya','Hong Kong','2023-05-16 11:31:50','2023-08-01 21:53:19','Parturient Montes Associates','Ap #905-6812 Urna Rd.',6036.33),
(171,'Tokyo','Dallas','2023-11-04 17:10:59','2023-09-20 11:59:04','Gravida Molestie Arcu Associates','P.O. Box 141, 714 Aliquam St.',6275.64),
(172,'Frankfurt','Dubai','2023-12-22 02:18:55','2023-12-10 06:36:58','Pede Sagittis Augue Foundation','P.O. Box 426, 6267 Sit Road',8451.95),
(173,'Chicago','Brisbane','2023-06-10 05:38:48','2023-11-22 11:44:07','Vitae Sodales Incorporated','P.O. Box 132, 1377 Volutpat. Av.',4691.32),
(174,'Dubai','London','2023-10-22 01:41:56','2023-07-06 08:10:34','Faucibus Limited','Ap #705-3436 Ac St.',6559.25),
(175,'Doha','Paris','2023-11-09 09:28:29','2023-10-02 20:19:12','Pretium PC','2981 Netus Av.',1573.23),
(176,'Taipei','Doha','2023-10-15 13:05:51','2023-12-06 07:04:42','Hendrerit Id Ante Corporation','Ap #364-3817 Neque. Rd.',4111.36),
(177,'Miami','Dallas','2023-06-01 07:32:49','2023-08-25 11:34:13','Elit Pretium Ltd','4929 Velit. St.',6909.39),
(178,'Doha','Shanghai','2023-11-06 23:16:41','2023-11-20 08:32:20','Mauris Ut Mi LLC','Ap #662-3955 Donec St.',400.29),
(179,'Orlando','Osaka','2023-10-19 18:47:37','2023-06-05 06:13:14','Mi Lorem Associates','824-1222 Ut, Ave',6750.49),
(180,'Seoul','Phoenix','2023-11-12 05:48:40','2023-11-02 13:00:26','Nulla Aliquet Institute','243-181 Magna. Av.',5321.78),
(181,'Chicago','Tangerang','2023-06-07 15:48:29','2023-07-07 17:12:27','Ridiculus Mus Institute','8237 Nullam Rd.',340.50),
(182,'Canberra','Istanbul','2023-07-07 17:57:39','2023-07-10 03:45:28','Erat Consulting','P.O. Box 933, 4832 Dignissim Rd.',6946.07),
(183,'Doha','Atlanta','2023-05-22 12:23:05','2023-07-21 08:42:08','Feugiat Metus Sit Associates','530 Sem Ave',9465.64),
(184,'Phoenix','Madrid','2023-08-17 07:50:29','2023-10-08 04:07:51','Vulputate Posuere Industries','412 Scelerisque Ave',7144.62),
(185,'Sydney','Dallas','2023-11-01 22:20:23','2023-07-06 01:21:32','Mus Donec Dignissim LLP','P.O. Box 648, 7178 Elit, Street',6390.61),
(186,'Los Angels','Canberra','2023-12-18 02:40:23','2023-06-11 04:34:20','Donec Luctus Institute','P.O. Box 660, 7396 Eros Ave',7409.53),
(187,'Tangerang','Delhi','2023-07-23 01:38:52','2023-08-07 08:07:30','Sit Amet Institute','Ap #378-7812 Quis Ave',9900.97),
(188,'Perth','Atlanta','2023-12-05 12:11:27','2023-12-21 07:21:25','Vel Corp.','235 Bibendum Rd.',2414.88),
(189,'Brisbane','Bangkok','2023-09-08 00:47:31','2023-06-22 05:33:23','Amet Corp.','P.O. Box 885, 8303 Odio. Rd.',5177.14),
(190,'Istanbul','Melbourne','2023-10-01 09:54:02','2023-08-25 09:11:08','Mauris Foundation','6691 Pellentesque St.',7208.32),
(191,'Tangerang','Melbourne','2023-11-02 08:51:15','2023-12-02 09:35:02','Cursus Nunc Mauris Associates','P.O. Box 376, 1314 Sit Road',9454.12),
(192,'Toronto','Los Angels','2023-07-14 16:39:21','2023-07-11 16:19:08','A Odio Semper PC','P.O. Box 164, 2019 In Ave',4174.81),
(193,'Taipei','Bangkok','2023-08-19 11:15:09','2023-12-11 12:01:17','Enim Non Nisi Ltd','Ap #295-6317 Faucibus St.',5250.06),
(194,'New York','Phoenix','2023-06-17 06:15:45','2023-12-10 20:37:34','Ridiculus Company','Ap #173-3485 Sit Av.',4273.55),
(195,'Las Vegas','Mumbai','2023-05-30 17:04:58','2023-11-19 05:04:04','Nisi Magna Sed Associates','755-3719 Aenean Ave',2298.95),
(196,'Darwin','London','2023-05-12 04:14:38','2023-12-04 15:27:39','Condimentum Eget LLP','1966 Vel, Rd.',3710.32),
(197,'Chicago','Dallas','2023-12-22 12:19:13','2023-08-16 14:14:30','Mus Aenean Eget Limited','378-8284 Non, St.',4614.34),
(198,'Atlanta','Osaka','2023-05-12 19:50:25','2023-06-08 10:12:51','Diam Lorem Auctor Corp.','P.O. Box 103, 3034 Elementum St.',9471.49),
(199,'Miami','Chicago','2023-10-24 18:40:19','2023-10-01 20:32:57','Lacus Consulting','P.O. Box 348, 3690 Id Ave',4663.65),
(200,'Delhi','Mexico City','2023-09-25 21:27:23','2023-10-14 01:17:54','Ac Consulting','8373 Purus Ave',2235.80);
/*!40000 ALTER TABLE `package_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packages`
--

DROP TABLE IF EXISTS `packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_desc` text NOT NULL,
  `package_data_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `package_data_id` (`package_data_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packages`
--

LOCK TABLES `packages` WRITE;
/*!40000 ALTER TABLE `packages` DISABLE KEYS */;
INSERT INTO `packages` VALUES
(15,'{\"leaveFrom\":\"New York\",\"goingTo\":\"London\",\"package_departure_time\":\"2023-05-10T01:44:54+00:00\",\"package_hotel_name\":\"London Hotel\",\"package_hotel_address\":\"London\"}',4,0),
(16,'{\"leaveFrom\":\"New York\",\"goingTo\":\"London\",\"package_departure_time\":\"2023-04-28T00:06:08+00:00\",\"package_hotel_name\":\"Four Seaons\",\"package_hotel_address\":\"London\"}',2,0),
(17,'{\"leaveFrom\":\"New York\",\"goingTo\":\"London\",\"package_departure_time\":\"2023-04-28T00:06:08+00:00\",\"package_hotel_name\":\"Four Seaons\",\"package_hotel_address\":\"London\"}',2,0),
(18,'{\"leaveFrom\":\"New York\",\"goingTo\":\"London\",\"package_departure_time\":\"2023-04-28T00:06:08+00:00\",\"package_hotel_name\":\"Four Seaons\",\"package_hotel_address\":\"London\"}',2,1);
/*!40000 ALTER TABLE `packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `payment_type` varchar(64) NOT NULL,
  `payment_account` varchar(64) NOT NULL,
  `payment_date` datetime NOT NULL,
  `payment_amount` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `customer_id` (`customer_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation_results`
--

DROP TABLE IF EXISTS `reservation_results`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation_results` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reservation_id` int(11) NOT NULL,
  `result_desc` varchar(256) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `reservation_id` (`reservation_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation_results`
--

LOCK TABLES `reservation_results` WRITE;
/*!40000 ALTER TABLE `reservation_results` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation_results` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `flight_id` int(11) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `reservation_type` varchar(64) NOT NULL,
  `trip_duration` varchar(64) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `customer_id` (`customer_id`) USING BTREE,
  KEY `flight_id` (`flight_id`) USING BTREE,
  KEY `hotel_id` (`hotel_id`) USING BTREE,
  KEY `service_id` (`service_id`) USING BTREE,
  KEY `package_id` (`package_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservations`
--

LOCK TABLES `reservations` WRITE;
/*!40000 ALTER TABLE `reservations` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(64) NOT NULL,
  `service_detail` varchar(64) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `nonce` char(128) DEFAULT NULL,
  `nonce_expiry` timestamp NULL DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'admin','admin','admin@email.com','$2y$10$dy30n0x6ESHutmqu0LTTteU7AKZ.VeU5bFjgGN2j8bqJBBnlA5DOi',NULL,NULL,'2023-05-09 08:12:06','2023-05-09 08:12:06'),
(3,'tianning','yang','tyan0026@student.monash.edu','$2y$10$FtDhvFxMJbMfkAMRO0qpF.F32UmYlHfKz0sCQJuMI2W/cwHwj9Qf.',NULL,NULL,'2023-05-09 08:12:06','2023-05-09 08:12:06'),
(4,'Arnav','Bhalla','arnie.bhalla@gmail.com','$2y$10$gsGHWyck/GrycIQLHz.JteEHtid5lkIaBhsn0k9EDwlHMsLb5qNaO',NULL,NULL,'2023-05-09 08:12:06','2023-05-09 08:12:06'),
(5,'Arnav','Bhalla','abha0028@student.monash.edu','$2y$10$oQSsaCUekeQkXTUP6BluVOt4ArgL40k0SEP77yccBiIRN.zoS6Wv.',NULL,NULL,'2023-05-09 08:13:09','2023-05-09 09:10:52'),
(6,'Jason','Yun','cyun0005@student.monash.edu','$2y$10$LJJV3ihD4QTNWlotNAgkA.KsQW/xJQvYi3cA9z/CDApF/BcM02dPu','329c583ce9992ce7257dda28a8e33efbd9eaed2fea0c971a80a3879d64c6cd40fefbe73511f8f3a18dbfec5fcb74d60073a7b089ed25bc17fd7bc7a65b8b495b','2023-05-16 14:19:08','2023-05-09 10:36:09','2023-05-09 14:19:08'),
(7,'tester','tester','testing123@email.com','$2y$10$1wJrE1615cvbNfoVYTNTkOfChP/.xWYYNelUB/B.yoPrmnnW28OZa',NULL,NULL,'2023-05-09 14:13:55','2023-05-09 14:13:55'),
(8,'sean','mullins','sean.mullins@monash.edu','$2y$10$VcR6xqbSxmRNQ8mz5SlnXOI02durqPFgG7Hkl4B6ZxlGTqMlIqqzW',NULL,NULL,'2023-05-10 07:42:14','2023-05-10 07:42:14'),
(9,'Liam','Hynes','lhyn0001@student.monash.edu','$2y$10$GLUtI/4KwY31JstYbiFnEejuO7huHtpCiIUbnYAEaVtNkuv29aK5u',NULL,NULL,'2023-05-10 22:36:16','2023-05-10 22:36:16'),
(10,'ab','c','test@example.com','$2y$10$dJ.Ty46e/UudcqNHirJmau.UTjUWuY8RNh26nVQqhIilD6XT2EUJq',NULL,NULL,'2023-05-18 00:16:32','2023-05-18 00:16:32');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database '3047travelplannerproj'
--

--
-- Dumping routines for database '3047travelplannerproj'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-05-27 23:50:36
