-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: tt2
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `wtcr_currencies`
--

DROP TABLE IF EXISTS `wtcr_currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_currencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_name` varchar(45) DEFAULT NULL,
  `wtcr_currency_provider_id` int(11) DEFAULT NULL,
  `abbreviation` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_currencies`
--

LOCK TABLES `wtcr_currencies` WRITE;
/*!40000 ALTER TABLE `wtcr_currencies` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_currency_provider_rates`
--

DROP TABLE IF EXISTS `wtcr_currency_provider_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_currency_provider_rates` (
  `id` int(11) NOT NULL,
  `wtcr_currencies_id` int(11) DEFAULT NULL,
  `wtcr_currency_provider_id` int(11) DEFAULT NULL,
  `rate` float DEFAULT NULL,
  `timestamp` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_currency_provider_rates`
--

LOCK TABLES `wtcr_currency_provider_rates` WRITE;
/*!40000 ALTER TABLE `wtcr_currency_provider_rates` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_currency_provider_rates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_currency_providers`
--

DROP TABLE IF EXISTS `wtcr_currency_providers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_currency_providers` (
  `id` int(11) NOT NULL,
  `currency_provider_name` varchar(45) DEFAULT NULL,
  `wtcr_currencies_id` int(11) DEFAULT NULL,
  `update_freq` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_currency_providers`
--

LOCK TABLES `wtcr_currency_providers` WRITE;
/*!40000 ALTER TABLE `wtcr_currency_providers` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_currency_providers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_marketplace_templates`
--

DROP TABLE IF EXISTS `wtcr_marketplace_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_marketplace_templates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marketplace_id` varchar(45) NOT NULL,
  `template_data` longtext,
  PRIMARY KEY (`id`,`marketplace_id`),
  UNIQUE KEY `marketplace_id_UNIQUE` (`marketplace_id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_marketplace_templates`
--

LOCK TABLES `wtcr_marketplace_templates` WRITE;
/*!40000 ALTER TABLE `wtcr_marketplace_templates` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_marketplace_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_marketplaces`
--

DROP TABLE IF EXISTS `wtcr_marketplaces`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_marketplaces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `marketplace_name` varchar(45) NOT NULL,
  `wtcr_sales_vehicle_template_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`marketplace_name`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_marketplaces`
--

LOCK TABLES `wtcr_marketplaces` WRITE;
/*!40000 ALTER TABLE `wtcr_marketplaces` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_marketplaces` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtcr_product_categories`
--

DROP TABLE IF EXISTS `wtcr_product_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_product_categories` (
  `id` int(11) NOT NULL,
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
-- Table structure for table `wtcr_product_map`
--

DROP TABLE IF EXISTS `wtcr_product_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_product_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'A unique ID for the product',
  `wtcr_vendor_id` int(11) NOT NULL COMMENT 'The Supplier that offers the product',
  `mfg_part_num` varchar(40) NOT NULL COMMENT 'Part # The Manufacturer Uses',
  `wtcrsku` varchar(40) DEFAULT NULL COMMENT 'The SKU used by WTCR to identify the product',
  `wtcr_product_category_id` int(11) NOT NULL COMMENT 'The category the product falls in',
  `description` varchar(500) DEFAULT NULL COMMENT 'A description of the product',
  `wtcr_vendor_sku` varchar(40) NOT NULL COMMENT 'The SKU used by the supplier to identify the product',
  `supplierstock` varchar(40) NOT NULL COMMENT 'The product stock the supplier has advertised',
  `autoupdate` int(11) NOT NULL COMMENT '1 if Product Should Auto Update Price, 0 otherwise.',
  `suggestedprice` varchar(40) DEFAULT NULL COMMENT 'The Price Suggested based on Current Markup',
  `suggestedmarkup` varchar(40) DEFAULT NULL COMMENT 'The Suggested Markup Percentage for a Product',
  `wtcrprice` varchar(40) DEFAULT NULL COMMENT 'The Price WTCR Charges',
  `createnode` int(11) NOT NULL COMMENT '0 if no node, 1 if the product has a node',
  `wtcr_nid` varchar(10) DEFAULT NULL COMMENT 'The NID of the Product on WTCRs Website',
  `lastupdated` datetime NOT NULL COMMENT 'The date/time this product was last updated from supplier',
  PRIMARY KEY (`id`,`createnode`,`wtcr_product_category_id`),
  UNIQUE KEY `suppliersku` (`wtcr_vendor_sku`),
  UNIQUE KEY `manufacturersku` (`mfg_part_num`),
  UNIQUE KEY `nid` (`wtcr_nid`)
) ENGINE=InnoDB AUTO_INCREMENT=9695 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_product_map`
--

LOCK TABLES `wtcr_product_map` WRITE;
/*!40000 ALTER TABLE `wtcr_product_map` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_product_map` ENABLE KEYS */;
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
  `wtcr_category_id` int(11) DEFAULT NULL,
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
-- Table structure for table `wtcr_vendors`
--

DROP TABLE IF EXISTS `wtcr_vendors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wtcr_vendors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(45) DEFAULT NULL,
  `update_freq_hours` int(11) DEFAULT '24',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`vendor_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtcr_vendors`
--

LOCK TABLES `wtcr_vendors` WRITE;
/*!40000 ALTER TABLE `wtcr_vendors` DISABLE KEYS */;
/*!40000 ALTER TABLE `wtcr_vendors` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-04 21:00:51
