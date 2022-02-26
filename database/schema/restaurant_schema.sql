-- MySQL dump 10.13  Distrib 8.0.14, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: restaurant_db
-- ------------------------------------------------------
-- Server version	8.0.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `category`
--
DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `category` (
                            `id` bigint(20) NOT NULL AUTO_INCREMENT,
                            `title` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `content` text COLLATE utf8mb4_unicode_ci,
                            `parentId` bigint(20) DEFAULT NULL,
                            PRIMARY KEY (`id`),
                            KEY `idx_category_parent` (`parentId`),
                            CONSTRAINT `fk_category_parent` FOREIGN KEY (`parentId`) REFERENCES `category` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order`
--
DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `order` (
                         `id` bigint(20) NOT NULL AUTO_INCREMENT,
                         `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `status` smallint(6) NOT NULL DEFAULT '0',
                         `subTotal` float NOT NULL DEFAULT '0',
                         `tax` float NOT NULL DEFAULT '0',
                         `shipping` float NOT NULL DEFAULT '0',
                         `total` float NOT NULL DEFAULT '0',
                         `customerName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `customerMobile` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `createdAt` datetime NOT NULL,
                         `updatedAt` datetime DEFAULT NULL,
                         `content` text COLLATE utf8mb4_unicode_ci,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `order_item`
--
DROP TABLE IF EXISTS `order_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `order_item` (
                              `id` bigint(20) NOT NULL AUTO_INCREMENT,
                              `menuItemId` bigint(20) NOT NULL,
                              `orderId` bigint(20) NOT NULL,
                              `price` float NOT NULL DEFAULT '0',
                              `discount` float NOT NULL DEFAULT '0',
                              `quantity` smallint(6) NOT NULL DEFAULT '0',
                              `createdAt` datetime NOT NULL,
                              `updatedAt` datetime DEFAULT NULL,
                              PRIMARY KEY (`id`),
                              KEY `idx_order_item_product` (`menuItemId`),
                              KEY `idx_order_item_order` (`orderId`),
                              CONSTRAINT `fk_order_item_order` FOREIGN KEY (`orderId`) REFERENCES `order` (`id`),
                              CONSTRAINT `fk_order_item_menu` FOREIGN KEY (`menuItemId`) REFERENCES `menu_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Table structure for table `product`
--
DROP TABLE IF EXISTS `menu_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `menu_item` (
                           `id` bigint(20) NOT NULL AUTO_INCREMENT,
                           `name` varchar(75) COLLATE utf8mb4_unicode_ci NOT NULL,
                           `price` float NOT NULL DEFAULT '0',
                           `createdAt` datetime NOT NULL,
                           `updatedAt` datetime DEFAULT NULL,
                           PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `product_category`
--
DROP TABLE IF EXISTS `menu_item_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
SET character_set_client = utf8mb4 ;
CREATE TABLE `menu_item_category` (
                                    `menuItemId` bigint(20) NOT NULL,
                                    `categoryId` bigint(20) NOT NULL,
                                    PRIMARY KEY (`menuItemId`,`categoryId`),
                                    KEY `idx_pc_category` (`categoryId`),
                                    KEY `idx_pc_menu_item` (`menuItemId`),
                                    CONSTRAINT `fk_pc_category` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`),
                                    CONSTRAINT `fk_pc_product` FOREIGN KEY (`menuItemId`) REFERENCES `menu_item` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

