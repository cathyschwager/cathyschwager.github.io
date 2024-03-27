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
-- Table structure for table `subcategories`
--

DROP TABLE IF EXISTS `subcategories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subcategories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL,
  `description` varchar(48) DEFAULT '',
  `category_id` int unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` VALUES (1,'action','Action',3),(2,'crime','Crime',3),(3,'general','General',3),(4,'horror','Horror',3),(5,'mystery','Mystery',3),(6,'romance','Romance',3),(7,'saga','Saga',3),(8,'science','Science',3),(9,'thrillers','Thrillers',3),(10,'westerns','Westerns',3),(11,'arts','Arts',4),(12,'autobiography','Autobiography',4),(13,'cooking','Cooking',4),(14,'crafts','Crafts',4),(15,'education','Education',4),(16,'fantasy','Fantasy',3),(17,'gardening','Gardening',4),(18,'health','Health',4),(19,'hobbies','Hobbies',4),(20,'humour','Humour',4),(21,'outdoors','Outdoors',4),(22,'reference','Reference',4),(23,'religion','Religion',4),(24,'sports','Sports',4),(25,'technology','Technology',4),(26,'travel','Travel',4),(27,'world','World',4),(28,'antiques','Antiques Pre-1950',5),(29,'box_sets','Box Sets',5),(30,'classics','Classics',5),(31,'first_editions','First Editions',5),(32,'mills_and_boons','Mills & Boon',5),(33,'miscellaneous','Miscellaneous',5),(34,'national_geographic','National Geographic',5),(35,'penguin','Penguin',5),(36,'authors','Prolific Authors',5),(37,'readers_digest','Readers Digest Condensed',5),(38,'retro','Retro 1975 - 2000',5),(39,'series','Series',5),(40,'shakespeare','Shakespeare',5),(41,'vintage','Vintage 1950 - 1975',5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
