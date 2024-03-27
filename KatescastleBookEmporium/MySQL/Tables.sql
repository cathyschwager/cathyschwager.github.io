DROP TABLE IF EXISTS `book_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `book_type` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book_type`
--

INSERT INTO `book_type` VALUES (1,'Audio'),(2,'E-Book'),(3,'Hard Back'),(4,'Soft Cover');

/********************************************************************************************************************************/
/********************************************************************************************************************************/

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `author` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `price` int(10) unsigned zerofill NOT NULL,
  `weight` int(10) unsigned zerofill NOT NULL,
  `summary` varchar(1024) DEFAULT NULL,
  `image_filename` varchar(128) DEFAULT NULL,
  `category_id` int unsigned NOT NULL DEFAULT '0',
  `subcategory_id` int unsigned NOT NULL DEFAULT '0',
  `topic_id` int unsigned NOT NULL DEFAULT '0',
  `quantity` int unsigned NOT NULL DEFAULT '0',
  `type_id` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `att_UNIQUE` (`author`,`title`,`type_id`) /*!80000 INVISIBLE */
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

INSERT INTO `books` VALUES (1,'J.K.Rowling','Harry Potter & the Philosopher\'s Stone',0000000010,0000000220,'The novel introduces readers to the magical world of Hogwarts School of Witchcraft and Wizardry and follows the adventures of a young boy named Harry Potter. Harry Potter is an orphan who has been living with his cruel and neglectful relatives, the Dursleys, ever since his parents were killed by the dark wizard Lord Voldemort when he was just a baby. On his eleventh birthday, Harry receives a letter from a mysterious messenger informing him that he is a wizard and has been accepted to attend Hogwarts.','fiction/fantasy/images/HPPS220.jpg',3,16,155,1,4);

/********************************************************************************************************************************/
/********************************************************************************************************************************/

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(48) DEFAULT NULL,
  `description` varchar(48) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idcategories_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` VALUES (1,'children','Children'),(2,'emporium','Emporium'),(3,'fiction','Fiction'),(4,'non_fiction','Non-fiction'),(5,'specialist','Specialist'),(6,'young_adults','Young adults');

/********************************************************************************************************************************/
/********************************************************************************************************************************/

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

/********************************************************************************************************************************/
/********************************************************************************************************************************/

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `topics` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(48) NOT NULL DEFAULT '',
  `description` varchar(48) NOT NULL DEFAULT '',
  `category_id` int unsigned NOT NULL DEFAULT '0',
  `subcategory_id` int unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=201 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` VALUES (1,'activity_books','Activity Books',1,0),(2,'board','Board Books',1,0),(3,'cocky','Cocky Circles',1,0),(4,'disney','Disney',1,0),(5,'golden','Golden Books',1,0),(6,'story','Story Books',1,0),(7,'gifts','Gifts',2,0),(8,'puzzles','Puzzles',2,0),(9,'games','Games',2,0),(10,'toys','Toys',2,0),(11,'miscellaneous','Miscellaneous',2,0),(12,'non_fiction','Non-fiction',6,0),(13,'fiction','Fiction',6,0),(14,'fantasy','Fantasy',6,0),(15,'mystery','Mystery',6,0),(16,'romance','Romance',6,0),(17,'series','Series',6,0),(18,'arts','Arts',4,11),(19,'dance','Dance',4,11),(20,'music','Music',4,11),(21,'photography','Photography',4,11),(22,'theatre','Theatre',4,11),(23,'australian','Australian',4,12),(24,'entertainment','Entertainment',4,12),(25,'popular','Popular',4,12),(26,'sports','Sports',4,12),(27,'true_crime','True Crime',4,12),(28,'drinks','Drinks',4,13),(29,'deserts','Deserts',4,13),(30,'food','Food',4,13),(31,'herbs','Herbs',4,13),(32,'microwave','Microwave Cooking',4,13),(33,'recipes','Recipes',4,13),(34,'traditional','Traditional',4,13),(35,'crotchet','Crochet',4,14),(36,'folk_art','Folk Art',4,14),(37,'knitting','Knitting',4,14),(38,'paper_craft','Paper Craft',4,14),(39,'quilting','Quilting',4,14),(40,'scrapbooking','Scrap Booking',4,14),(41,'sewing','Sewing',4,14),(42,'astronomy','Astronomy',4,14),(43,'biology','Biology',4,14),(44,'chemistry','Chemistry',4,14),(45,'English','english',4,14),(46,'geography','Geography',4,14),(47,'geology','Geology',4,14),(48,'maths','Maths',4,14),(49,'physics','Physics',4,14),(50,'psychology','Psychology',4,14),(51,'textbooks','Textbooks',4,14),(52,'climate','Climate',4,17),(53,'ecology','Ecology',4,17),(54,'farming','Farming',4,17),(55,'flowers','Flowers',4,17),(56,'productive','Productive',4,17),(57,'nature','Nature',4,17),(58,'plants','Plants',4,17),(59,'sustainability','Sustainability',4,17),(60,'trees','Trees',4,17),(61,'alternative','Alternative',4,18),(62,'beauty','Beauty',4,18),(63,'fitness','Fitness',4,18),(64,'medications','Medications',4,18),(65,'medical','Medical',4,18),(66,'wellbeing','Wellbeing',4,18),(67,'babies','Babies',4,18),(68,'children','Children',4,18),(69,'maternity','Maternity',4,18),(70,'men','Men',4,18),(71,'women','Women',4,18),(72,'collecting','Collecting',4,19),(73,'antiques','Antiques',4,19),(74,'coins','Coins',4,19),(75,'comics','Comic Books',4,19),(76,'stamps','Stamps',4,19),(77,'puzzles','Puzzle Books',4,19),(78,'planes','Planes',4,19),(79,'trains','Trains',4,19),(80,'Automobiles','Automobiles',4,19),(81,'trucks','Trucks',4,19),(82,'manuals','Shop Manuals',4,19),(83,'comedies','Comedies',4,20),(84,'jokes','Joke Books',4,20),(85,'building','Building',4,21),(86,'construction','Construction',4,21),(87,'diy','DIY',4,21),(88,'handyman','Handyman',4,21),(89,'atlases','Atlases',4,22),(90,'dictionaries','Dictionaries',4,22),(91,'encyclopedias','Encyclopedias',4,22),(92,'thesauruses','Thesauruses',4,22),(93,'alternative_religions','Alternative',4,23),(94,'astrology','Astrology',4,23),(95,'inspirational','Inspirational',4,23),(96,'new_age','New Age',4,23),(97,'occult','Occult',4,23),(98,'spiritual','Spiritual',4,23),(99,'tarot','Tarot',4,23),(100,'australia','Australia',4,27),(101,'business','Business',4,27),(102,'economics','Economics',4,27),(103,'finance','Finance',4,27),(104,'geography','Geography',4,27),(105,'history','History',4,27),(106,'law','Law',4,27),(107,'politics','Politics',4,27),(108,'guides','Guides',4,26),(109,'foreign_language','Foreign Language',4,26),(110,'maps','Maps',4,26),(111,'travel_stories','Travel Stories',4,26),(112,'automation','Automation',4,25),(113,'coding','Coding & Programming',4,25),(114,'cyber_security','Cyber Secrity',4,25),(115,'electronics','Electronics',4,25),(116,'gaming','Gaming',4,25),(117,'internet','Internet',4,25),(118,'networking','Networking',4,25),(119,'robotics','Robotics',4,25),(120,'software','Software',4,25),(121,'aquatics','Aquatics',4,24),(122,'athletics','Athletics',4,24),(123,'baseball','Baseball',4,24),(124,'basketball','Basketball',4,24),(125,'billiards','Billiards',4,24),(126,'boxing','Boxing',4,24),(127,'cricket','Cricket',4,24),(128,'equestrian','Equestrian',4,24),(129,'extreme','Extreme Sports',4,24),(130,'fishing','Fishing',4,24),(131,'football','Football',4,24),(132,'golf','Golf',4,24),(133,'martial_arts','Martial Arts',4,24),(134,'raquet','Racquet Sports',4,24),(135,'sailing','Sailing',4,24),(136,'pyschological','Pyschological',3,4),(137,'scientific','cientific',3,4),(138,'slasher','Slasher',3,4),(139,'supernatural','Supernatural',3,4),(140,'vampires_warewolves','Warewolves & Vampires',3,4),(141,'zombie','Zombie',3,4),(142,'espionage','Espionage',3,1),(143,'martial_arts','Martial Arts',3,1),(144,'disasters','Disasters',3,1),(145,'war','War',3,1),(146,'treasure','Treasure',3,1),(147,'drugs','Drugs',3,2),(148,'gangs','Gangs',3,2),(149,'hate','Hate',3,2),(150,'robbery','Robbery',3,2),(151,'terrorism','Terrorism',3,2),(152,'animals','Animals',3,16),(153,'computer_games','Computer Games',3,16),(154,'genies','Genies & Jinns',3,16),(155,'magic','Magic',3,16),(156,'literary','Literary',3,3),(157,'television','Television',3,3),(158,'movies','Movies',3,3),(159,'disappearance','Disappearance',3,5),(160,'murder','Murder',3,5),(161,'robbery','Robbery',3,5),(162,'best_friends','Best Friends',3,6),(163,'break_up','Break Up',3,6),(164,'forbidden','Forbidden',3,6),(165,'opposites_attract','Opposites Attract',3,6),(166,'reunion','Reunion',3,6),(167,'erotic','Erotic',3,6),(168,'ai','AI',3,8),(169,'disaster','Disaster',3,8),(170,'extratorrestrials','Extratorrestrials',3,8),(171,'history','History',3,8),(172,'military','Military',3,8),(173,'space','Space',3,8),(174,'time','Time',3,8),(175,'crime','Crime',3,9),(176,'espionage','Espionage',3,9),(177,'investigations','Investigations',3,9),(178,'murder','Murder',3,9),(179,'pursuits','Pursuits',3,9),(180,'supernatural','Supernatural',3,9),(181,'psychological','Psychological',3,9),(182,'terrorism','Terrorism',3,9),(183,'treasure','Treasure',3,9),(184,'civil_war','Civil War',3,10),(185,'indian_wars','Indian Wars',3,10),(186,'gold','Gold',3,10),(187,'outlaws','Outlaws',3,10),(188,'mexican_war','Mexican War',3,10),(189,'pioneers','Pioneers',3,10),(190,'authors','Authors',4,12),(191,'business','Business',4,12),(192,'chefs','Chefs',4,12),(193,'politicians','Politicians',4,12),(194,'scientists','Scientists',4,12),(195,'stars','Stars',4,12),(196,'academics','Academics',4,12),(197,'military','Miltary',4,12),(198,'','',4,12);

/********************************************************************************************************************************/
/********************************************************************************************************************************/

DROP TABLE IF EXISTS `invoices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoices` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(128) NOT NULL,
  `address` varchar(256) NOT NULL,
  `postage` decimal(10,0) NOT NULL DEFAULT '0',
  `total` decimal(10,0) NOT NULL DEFAULT '0',
  `paid` tinyint unsigned NOT NULL DEFAULT '0',
  `date_paid` date DEFAULT NULL,
  `sent` tinyint unsigned NOT NULL DEFAULT '0',
  `date_sent` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` VALUES (1,'2024-03-22 23:16:14','Greg Boyles','20 Bassets Road, Doreen, VIC, 3754',22,10,1,'2024-03-25',0,'2024-03-25');

/********************************************************************************************************************************/
/********************************************************************************************************************************/

DROP TABLE IF EXISTS `invoice_books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice_books` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int unsigned NOT NULL,
  `invoice_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice_books`
--

INSERT INTO `invoice_books` VALUES (1,1,1);

/********************************************************************************************************************************/
/********************************************************************************************************************************/

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

