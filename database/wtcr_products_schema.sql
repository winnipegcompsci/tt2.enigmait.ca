CREATE DATABASE  IF NOT EXISTS `TT2` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `TT2`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: tt2
-- ------------------------------------------------------
-- Server version	5.6.17-log

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
-- Table structure for table `wtcr_products`
--

DROP TABLE IF EXISTS `wtcr_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'A unique ID for the product',
  `mfg_part_num` varchar(40) NOT NULL COMMENT 'Part # The Manufacturer Uses',
  `wtcrsku` varchar(40) NOT NULL COMMENT 'The SKU used by WTCR to identify the product',
  `wtcr_product_category_id` int(11) DEFAULT '1' COMMENT 'The category the product falls in',
  `wtcr_product_name` varchar(45) DEFAULT NULL,
  `description` longtext COMMENT 'A description of the product',
  `autoupdate` int(11) NOT NULL DEFAULT '1' COMMENT '1 if Product Should Auto Update Price, 0 otherwise.',
  `static_price` float DEFAULT NULL COMMENT 'The Price Suggested based on Current Markup',
  `suggestedmarkup` float DEFAULT '0.5' COMMENT 'The Suggested Markup Percentage for a Product',
  `wtcrprice` float DEFAULT NULL COMMENT 'The Price WTCR Charges',
  `wtcr_nid` varchar(10) DEFAULT NULL COMMENT 'The NID of the Product on WTCRs Website',
  `lastupdated` datetime NOT NULL COMMENT 'The date/time this product was last updated from supplier',
  `marketplace_data` longtext,
  `pictures` longtext,
  PRIMARY KEY (`id`,`mfg_part_num`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `mfg_part_num_UNIQUE` (`mfg_part_num`),
  UNIQUE KEY `nid` (`wtcr_nid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_products`
--

LOCK TABLES `wtcr_products` WRITE;
/*!40000 ALTER TABLE `wtcr_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-14 12:29:14
