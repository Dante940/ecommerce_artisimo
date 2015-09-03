-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Painting','2015-09-01 12:33:31','2015-09-01 12:33:31'),(2,'Sculpture','2015-09-01 13:02:52','2015-09-01 13:02:52'),(3,'Video game','2015-09-01 13:05:20','2015-09-01 13:05:20'),(6,'Book','2015-09-01 13:17:02','2015-09-01 13:17:02');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_has_merchandise`
--

DROP TABLE IF EXISTS `categories_has_merchandise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_has_merchandise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `merchandise_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_categories_has_merchandise_merchandise1_idx` (`merchandise_id`),
  KEY `fk_categories_has_merchandise_categories1_idx` (`category_id`),
  CONSTRAINT `fk_categories_has_merchandise_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_categories_has_merchandise_merchandise1` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_has_merchandise`
--

LOCK TABLES `categories_has_merchandise` WRITE;
/*!40000 ALTER TABLE `categories_has_merchandise` DISABLE KEYS */;
INSERT INTO `categories_has_merchandise` VALUES (1,1,25,'2015-09-02 13:56:14','2015-09-02 13:56:14'),(2,3,26,'2015-09-02 14:24:12','2015-09-02 14:24:12');
/*!40000 ALTER TABLE `categories_has_merchandise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors`
--

LOCK TABLES `colors` WRITE;
/*!40000 ALTER TABLE `colors` DISABLE KEYS */;
/*!40000 ALTER TABLE `colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colors_has_merchandise`
--

DROP TABLE IF EXISTS `colors_has_merchandise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colors_has_merchandise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_id` int(11) NOT NULL,
  `merchandise_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_colors_has_merchandise_merchandise1_idx` (`merchandise_id`),
  KEY `fk_colors_has_merchandise_colors1_idx` (`color_id`),
  CONSTRAINT `fk_colors_has_merchandise_colors1` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_colors_has_merchandise_merchandise1` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colors_has_merchandise`
--

LOCK TABLES `colors_has_merchandise` WRITE;
/*!40000 ALTER TABLE `colors_has_merchandise` DISABLE KEYS */;
/*!40000 ALTER TABLE `colors_has_merchandise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `merchandise_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_images_Merchandise1_idx` (`merchandise_id`),
  CONSTRAINT `fk_images_Merchandise1` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchandise`
--

DROP TABLE IF EXISTS `merchandise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchandise`
--

LOCK TABLES `merchandise` WRITE;
/*!40000 ALTER TABLE `merchandise` DISABLE KEYS */;
INSERT INTO `merchandise` VALUES (25,'Starry Night','Star painting',1999.99,'2015-09-02 13:56:14','2015-09-02 13:56:14'),(26,'Silent Hills','never happening',59.99,'2015-09-02 14:24:12','2015-09-02 14:24:12');
/*!40000 ALTER TABLE `merchandise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `merchandise_has_orders`
--

DROP TABLE IF EXISTS `merchandise_has_orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `merchandise_has_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merchandise_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_merchandise_has_orders_orders1_idx` (`order_id`),
  KEY `fk_merchandise_has_orders_merchandise1_idx` (`merchandise_id`),
  CONSTRAINT `fk_merchandise_has_orders_merchandise1` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_merchandise_has_orders_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `merchandise_has_orders`
--

LOCK TABLES `merchandise_has_orders` WRITE;
/*!40000 ALTER TABLE `merchandise_has_orders` DISABLE KEYS */;
INSERT INTO `merchandise_has_orders` VALUES (3,25,5,2,'2015-09-02 22:48:13','2015-09-02 22:48:13'),(4,26,5,4,'2015-09-02 22:48:13','2015-09-02 22:48:13'),(5,26,5,4,'2015-09-02 22:48:13','2015-09-02 22:48:13'),(6,25,6,2,'2015-09-03 10:43:13','2015-09-03 10:43:13'),(7,26,6,4,'2015-09-03 10:43:13','2015-09-03 10:43:13'),(8,26,6,4,'2015-09-03 10:43:13','2015-09-03 10:43:13'),(9,26,6,4,'2015-09-03 10:43:13','2015-09-03 10:43:13'),(10,26,6,4,'2015-09-03 10:43:13','2015-09-03 10:43:13');
/*!40000 ALTER TABLE `merchandise_has_orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ship_first_name` varchar(45) DEFAULT NULL,
  `ship_last_name` varchar(45) DEFAULT NULL,
  `ship_address_1` varchar(45) DEFAULT NULL,
  `ship_address_2` varchar(45) DEFAULT NULL,
  `ship_city` varchar(45) DEFAULT NULL,
  `ship_state` varchar(45) DEFAULT NULL,
  `ship_zipcode` varchar(45) DEFAULT NULL,
  `bill_first_name` varchar(45) DEFAULT NULL,
  `bill_last_name` varchar(45) DEFAULT NULL,
  `bill_address_1` varchar(45) DEFAULT NULL,
  `bill_address_2` varchar(45) DEFAULT NULL,
  `bill_city` varchar(45) DEFAULT NULL,
  `bill_state` varchar(45) DEFAULT NULL,
  `bill_zipcode` varchar(45) DEFAULT NULL,
  `card` int(11) DEFAULT NULL,
  `card_code` int(11) DEFAULT NULL,
  `card_month` int(11) DEFAULT NULL,
  `card_year` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Orders_Users_idx` (`user_id`),
  CONSTRAINT `fk_Orders_Users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (5,1,'dsf','dfa','dfg','dgag','dgag','dgag','123123','dgasdg','dgag','gasdgagd','egsadgag','gasdgadga','gadsgag','12313',2131,231,11,1234,'2015-09-02 22:48:13','2015-09-02 22:48:13',NULL),(6,1,'Eric','','','','','','','David','','','','','','',0,0,0,0,'2015-09-03 10:43:13','2015-09-03 10:43:13','Pending');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `street_address` varchar(45) DEFAULT NULL,
  `admin` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Eric','Zuniga','dante940@hotmail.com','testtest',NULL,1,'2015-08-31 17:30:19','2015-08-31 17:30:19'),(2,'Mark','Donahue','mdonahue@gmail.com','testtest',NULL,1,'2015-09-01 14:44:56','2015-09-01 14:44:56'),(3,'Luna','Solis','luna@luna.com','lunaluna',NULL,0,'2015-09-01 16:31:04','2015-09-01 16:31:04'),(4,'Serena','Solis','serena@serena.com','testtest',NULL,0,'2015-09-01 16:33:09','2015-09-01 16:33:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-03 10:52:21
