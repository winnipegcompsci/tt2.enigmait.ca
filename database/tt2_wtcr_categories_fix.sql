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

--
-- Table structure for table `wtcr_vendor_products`
--

DROP TABLE IF EXISTS `wtcr_vendor_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_vendor_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(45) DEFAULT NULL,
  `wtcr_vendor_id` int(11) DEFAULT NULL,
  `wtcr_vendor_sku` varchar(45) DEFAULT NULL,
  `mfg_part_num` varchar(45) DEFAULT NULL,
  `vendor_price` float DEFAULT NULL,
  `wtcr_product_category_id` int(11) DEFAULT NULL,
  `last_updated` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_vendor_products`
--

LOCK TABLES `wtcr_vendor_products` WRITE;
/*!40000 ALTER TABLE `wtcr_vendor_products` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_vendor_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_product_categories`
--

DROP TABLE IF EXISTS `wtcr_product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(45) DEFAULT NULL,
  `default_markup` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_product_categories`
--

LOCK TABLES `wtcr_product_categories` WRITE;
/*!40000 ALTER TABLE `wtcr_product_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_product_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_inventory`
--

DROP TABLE IF EXISTS `wtcr_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_inventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `wtcr_sku` varchar(45) NOT NULL,
  `product_name` varchar(45) NOT NULL,
  `wtcr_product_category_id` int(11) NOT NULL,
  `mfg_part_number` varchar(45) NOT NULL,
  `wtcr_vendor_id` int(11) NOT NULL,
  `vendor_sku` varchar(45) DEFAULT NULL,
  `vendor_price` float NOT NULL,
  `received_date` datetime NOT NULL,
  `markup` float DEFAULT NULL,
  `serial_numbers` longtext,
  `order_details` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_inventory`
--

LOCK TABLES `wtcr_inventory` WRITE;
/*!40000 ALTER TABLE `wtcr_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_inventory` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-10 11:27:43
