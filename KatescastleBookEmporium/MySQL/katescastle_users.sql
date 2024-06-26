-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: www.find-a-tradie.com.au    Database: katescastle
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `surname` varchar(64) NOT NULL DEFAULT ' ',
  `given_names` varchar(64) NOT NULL DEFAULT ' ',
  `unit` varchar(64) NOT NULL DEFAULT ' ',
  `street` varchar(64) NOT NULL DEFAULT ' ',
  `suburb` varchar(32) NOT NULL DEFAULT ' ',
  `state` varchar(3) NOT NULL DEFAULT ' ',
  `postcode` varchar(4) NOT NULL DEFAULT ' ',
  `phone` varchar(8) NOT NULL DEFAULT ' ',
  `mobile` varchar(10) NOT NULL DEFAULT ' ',
  `email` varchar(128) NOT NULL DEFAULT ' ',
  `username` varchar(16) NOT NULL DEFAULT ' ',
  `password` varchar(256) NOT NULL DEFAULT ' ',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

INSERT INTO `users` VALUES (1,'Schwagger','Cathy',' ',' ',' ',' ',' ',' ',' ',' ','admin','{\"ct\":\"0TLTmg3q2GvaSkxJ4wjUcg==\",\"iv\":\"b3808a7eaf55301fb942f8c08b200d82\",\"s\":\"e5bc26a27a204851\"}');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
