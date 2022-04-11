-- MySQL dump 10.13  Distrib 8.0.24, for macos11 (x86_64)
--
-- Host: 127.0.0.1    Database: one-lam
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
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
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(355) DEFAULT NULL,
  `alias` varchar(355) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `active` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mario@gmail.com','modulor','2022-04-04 10:55:00',1),(3,'evelyn@gmail.com','eve','2022-04-04 15:29:46',1),(4,'alberto@gmail.com','alberto','2022-04-05 15:37:47',1),(5,'bus@gmail.com','bus','2022-04-05 16:12:20',1),(6,'modulor@gmail.com','modulor','2022-04-05 16:23:06',1),(7,'juan@gmail.com','yon','2022-04-06 09:08:18',1),(8,'guarumo@gmail.com','guarumo','2022-04-06 16:07:32',1),(9,'juno@gmail.com','juno','2022-04-06 16:08:25',1),(10,'kike@gmail.com','kike','2022-04-06 16:09:35',1),(11,'gio@gmail.com','gio','2022-04-09 11:42:01',1),(12,'fer@gmail.com','fer','2022-04-09 11:58:19',1),(13,'chrsm@gmail.com','chrism','2022-04-09 13:09:59',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_avatars`
--

DROP TABLE IF EXISTS `users_avatars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_avatars` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int DEFAULT NULL,
  `body` int DEFAULT NULL,
  `eyes` int DEFAULT NULL,
  `accessory` int DEFAULT NULL,
  `badge` int DEFAULT NULL,
  `background` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_avatars`
--

LOCK TABLES `users_avatars` WRITE;
/*!40000 ALTER TABLE `users_avatars` DISABLE KEYS */;
INSERT INTO `users_avatars` VALUES (3,1,2,2,2,2,2,'2022-04-05 12:41:52'),(4,4,1,1,2,2,2,'2022-04-05 15:38:07'),(5,5,2,2,2,2,2,'2022-04-05 16:12:30'),(6,6,2,2,2,2,2,'2022-04-05 16:47:28'),(7,7,2,2,2,2,2,'2022-04-06 09:08:28'),(8,8,1,2,1,2,1,'2022-04-06 16:07:44'),(9,9,2,1,1,1,1,'2022-04-06 16:08:31'),(10,10,2,2,2,2,2,'2022-04-06 16:09:43'),(11,11,4,4,5,5,4,'2022-04-09 11:56:51'),(12,12,3,2,5,6,3,'2022-04-09 12:02:26'),(13,13,2,5,3,5,1,'2022-04-09 13:10:15');
/*!40000 ALTER TABLE `users_avatars` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-11 11:51:11
