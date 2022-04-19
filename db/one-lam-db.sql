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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (26,'juliet.aragones@adidas.com','juliet','2022-04-19 10:58:36',1),(27,'santiago.morenohueyo@adidas.com','hueyo','2022-04-19 10:59:34',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_allowed`
--

DROP TABLE IF EXISTS `users_allowed`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_allowed` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(355) DEFAULT NULL,
  `firstname` varchar(355) DEFAULT NULL,
  `lastname` varchar(355) DEFAULT NULL,
  `position` varchar(355) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_allowed`
--

LOCK TABLES `users_allowed` WRITE;
/*!40000 ALTER TABLE `users_allowed` DISABLE KEYS */;
INSERT INTO `users_allowed` VALUES (1,'pablo.lamo@adidas-group.com','Pablo','Lamo','GM Argentina'),(2,'mariacecilia.yad@adidas.com ','Maria Cecilia ','Yad ','Sr. Director Finance'),(3,'anabel.papouchado@adidas.com','Anabel','Papouchado','Sr. Director SCM'),(4,'francisco.morello@adidas.com','Francisco','Morello','Sr Manager Legal & Compliance'),(5,'fernando.colombo@adidas-group.com','Fernando ','Colombo','Sr Director Brand Activation adidas'),(6,'juliet.aragones@adidas.com','Juliet ','Aragones','Sr. Director DTC'),(7,'fernanda.gazal@adidas.com','Fernanda ','Gazal','Sr. Director Human Resources'),(8,'mariafernanda.capilla@adidas.com','María Fernanda','Capilla','Director IT'),(9,'federico.borsani@adidas.com','Federico','Borsani','Sr. Director Sales'),(10,'andrea.pellicani@adidas.com','Andrea','Pellicani','Director Business Development'),(11,'santiago.morenohueyo@adidas.com','Santiago','Moreno Hueyo','Director Country Affairs'),(12,'olivier.gianina@adidas.com','Olivier','Gianina','GM Brazil'),(13,'pedro.mello@adidas.com','Mello','Pedro','Director Business Development'),(14,'daniela.valsani@adidas.com','Daniela','Valsani','Sr. Director Brand Activation'),(15,'diogo.figueiredo@adidas-group.com','Diogo ','Figueiredo','Sr. Director SCM'),(16,'jane.jose@adidas.com','Jane ','Jose ','Director IT'),(17,'federico.balducci@adidas-group.com','Federico','Balducci ','Director Operations Mngmt FTW'),(18,'fernando.shimizu@adidas-group.com','Fernando','Shimizu','Senior Director Finance'),(19,'carla.salvador@adidas.com','Carla ','Salvador ','Sr. Director Sales'),(20,'silene.rodrigues@adidas.com','Silene','Rodrigues','Senior HR Director'),(21,'joao.meyer@adidas.com','Joao ','Meyer','Sr. Director DTC'),(22,'jerome.leveque@adidas.com','Jerome ','Leveque','GM Chile'),(23,'alejandro.chahud@adidas.com','Alejandro','Chahud','Sr. Director DTC'),(24,'cristian.correa@adidas.com','Cristian ','Correa','Sr. Director Sales'),(25,'pablo.cavallaro@adidas.com','Pablo','Cavallaro','Sr. Director Brand Activation (adidas)'),(26,'xavier.espinosa@adidas.com','Xavier ','Espinosa','Director Business Development'),(27,'margaret.hirsch@adidas-group.com','Margaret','Hirsch','Director Legal & Compliance'),(28,'maria.elena.alarcon@adidas-group.com','Maria Elena ','Alarcon','Director Finance'),(29,'irene.schlechter@adidas.com','Irene','Schlechter','Director Human Resources'),(30,'shyon.endara@adidas-group.com','Shyon','Endara','Sr. Director SCM'),(31,'markus.morent@adidas-group.com','Markus','Morent','GM Colombia'),(32,'liz.monroy@adidas.com','Liz','Monroy','Director HR'),(33,'veronica.roldan@adidas.com','Veronica ','Roldan','Director SCM'),(34,'juan.motta@adidas-group.com','Juan','Motta','Director Brand Activation (adidas)'),(35,'rakesh.joshi@adidas-group.com','Rakesh','Joshi','Sr. Director DTC'),(36,'carolina.martinez@adidas.com','Carolina ','Martinez','Director Business Development'),(37,'sergio.pinzon@adidas.com','Sergio','Pinzon','Director Finance'),(38,'antonio.justino@adidas.com','Antonio','Justino','Director IT Management'),(39,'janice.cruzalegui@adidas.com','Janice','Cruzalegui L','Director Sales'),(40,'anaximena.diaz@adidas-group.com','Ana Ximena','Diaz','Director Legal & Compliance'),(41,'jorge.dionne@adidas-group.com','Jorge','Dionne','GM Mexico'),(42,'ericka.meixueiro@adidas-group.com','Ericka','Meixueiro','Director Legal & Compliance'),(43,'mariasilvia.saba@adidas.com','Maria Silvia','Saba','IT Director'),(44,'sergio.flores@adidas-group.com','Sergio','Flores','Director DTC'),(45,'bruno.yoshida@adidas.com','Bruno','Yoshida','Sr. Director Sales'),(46,'andres.rubio@adidas.com','Andrés','Rubio','Director Business Development'),(47,'carlos.osorio@adidas-group.com','Carlos','Osorio','Director Key City'),(48,'miguel.jimenez@adidas.com','Miguel','Jiménez','Sr. Director SCM'),(49,'graziela.schultz@adidas.com','Graziela ','Schultz','Sr. Director Finance'),(50,'mariana.coronado@adidas-group.com','Mariana ','Coronado','Director Human Resources'),(51,'ana.fernandez@adidas.com','Ana Belen ','Fernandez','Sr Director Brand Activation (adidas)'),(52,'raul.marcenaro@adidas.com','Raul','Marcenaro','GM Peru'),(53,'guillermo.byrne@adidas.com','Guillermo','Byrne','Director Brand Activation (adidas)  '),(54,'cecilia.pomar@adidas-group.com','Cecilia ','Pomar','Director Human Resources'),(55,'eduardo.ticeran@adidas.com','Eduardo','Ticeran','Sr. Manager Legal & Compliance'),(56,'gonzalo.delarosatoro@adidas-group.com','Gonzalo','De la Rosa Toro','Director SCM'),(57,'alvaro.taboada@adidas.com','Alvaro ','Taboada','Sr. Director Sales'),(58,'mayte.velaochaga@adidas.com','Mayte','Velaochaga','Director Business Development'),(59,'julio.nunez@adidas.com','Julio','Nunez','Director Finance'),(60,'claudia.tricerri@adidas.com','Claudia ','Tricerri M','Director DTC'),(61,'salvador.mothe@adidas-group.com','Salvador','Mothe','Sr. Director Commercial CAC'),(62,'rosana.duran@adidas.com','Rosana','Duran','Finance Director CAC '),(63,'juanjose.roque@adidas.com','Juan Jose ','Roque','Director Commercial '),(64,'fabio.strutz@adidas.com','Fabio ','Strutz','Sr. Manager Digital'),(65,'luz.garzon@adidas.com','Luz ','Garzon','Director SCM'),(66,'edwin.zapata@adidas-group.com','Edwin ','Zapata','Director Legal & Compliance'),(67,'leslie.lushman@adidas.com','Leslie','Lushman','Director Business Development'),(68,'mariacarolina.vega@adidas.com','MariaCarolina','Vega','Sr. Manager HR'),(69,'flavia.bittencourt@adidas.com','Flavia','Bittencourt','Managing Director'),(70,'bas.van.dorp@adidas.com','Bas','Van Dorp','VP adidas Brand'),(71,'iza.restom@adidas.com','Iza ','Restom','Sr. Director Training & Core Apparel'),(72,'fidel.gonzalez@adidas.com','Jesus Fidel','Gonzalez','Sr. Director CTC Merchandising'),(73,'nathan.colopy@adidas-group.com','Nathan','Colopy','Sr. Director Running & Core Footwear'),(74,'sara.camargo@adidas.com','Sara','Camargo','Director Marketing Operations'),(75,'paulo.ziliotto@adidas.com','Paulo','Ziliotto','Sr. Director Newsroom'),(76,'juan.ignacio.arrieta@adidas.com','Juan Ignacio ','Arrieta ','Director HBS/BB/Out'),(77,'tristan.merkaert@adidas.com','Tristan','Merkaert','Sr. Director Originals'),(78,'renier.benson@adidas-group.com','Renier','Benson','Director Rewards'),(79,'cecilia.nascimento@adidas.com','Cecilia ','Nascimento ','Sr. Manager HR Initiative'),(80,'daniza.nunez@adidas.com','Daniza','Nuñez','Sr. Director Human Resources'),(81,'sabrina.cruz@adidas.com','Sabrina','Cruz','Director Talent'),(82,'doyna.bordanea@adidas.com','Doyna','Bordanea','Sr. Manager Workplace Management'),(83,'angelica.velandia@adidas.com','Angelica','Velandia','Director HR Services LAM'),(84,'odette.beattie@adidas.com','Odette','Beattie ','Director Talent Acquisition'),(85,'michael.slofstra@adidas.com','Michael','Slofstra','VP Finance'),(86,'michael.sadowskij@adidas.com','Michael','Sadowskij','Director Non Trade Procurement'),(87,'martin.chiappe@adidas.com','Martin','Chiappe','Director DP'),(88,'edward.ostojich@adidas.com','Edward','Ostojich','Sr. Director FP&A'),(89,'eric.levert@adidas.com','Eric','Levert','DirectorTax'),(90,'sofia.becerra@adidas.com','Sofia','Becerra','Director IC PP'),(91,'javier.vela@adidas-group.com','Javier ','Vela','VP SCM'),(92,'guido.giovannucci@adidas.com','Guido','Giovannucci','Sr. Director Purchasing'),(93,'melanie.de.leon@adidas-group.com','Melanie','De Leon','Director Logistics'),(94,'javier.julia@adidas-group.com','Javier ','Julia','Director Franchise Operations'),(95,'rohit.kumar2@adidas.com','Rohit ','Kumar','Director Buying & Trading'),(96,'karin.hugger@adidas-group.com','Karin','Hugger','Director Store Development & Real Estate'),(97,'julien.vassalini@adidas-group.com','Julien','Vassalini','VP Digital'),(98,'alejandro.warnken@adidas-group.com','Alejandro ','Warnken','Director Digital Operations'),(99,'juan.carlos.osorio.ortiz@adidas.com','Juan Carlos ','Osorio','Director Digital Analytics'),(100,'jonatan.ospina@adidas.com','Jonatan ','Ospina','Sr. Manager Program Delivery'),(101,'danilo.casarin@adidas.com','Danilo','Casarin','Sr. Director IT'),(102,'giselle.velarde@adidas-group.com','Giselle','Velarde','Director Business Intelligence '),(103,'alfredo.molina@adidas.com','Alfredo ','Molina','Sr. Manager Business Solutions'),(104,'ken.leon@adidas-group.com','Ken','Leon','Director IT Management'),(105,'marcelo.pereira@adidas.com','Marcelo','Pereira','Director Service Management'),(106,'alexander.mejia@adidas.com','Alexander','Mejia','Director Projects and Programs'),(107,'javier.landa@adidas-group.com','Javier ','Landa','VP Wholesale'),(108,'fernando.arruk@adidas.com','Fernando','Arruk','Director Sales Development KAM'),(109,'lelia.andeol@adidas.com','Lelia','Andeol ','Director Customer Service '),(110,'fernando.testa@adidas.com','Fernando','Testa','Sr. Manager Digital Wholesale Solutions'),(111,'genoveva.wong@reebok.com','Wong','Genoveva','Director DPC'),(112,'marlene.muhlbacher@adidas.com','Marlene','Muhlbacher','Sr. Director Business Development'),(113,'alvaro.rodriguez@adidas.com','Alvaro ','Rodriguez','Director Strategy Execution'),(114,'bianca.plag@adidas.com','Bianca ','Plag','Senior Manager Strategy Planning'),(115,'alvaro.olavarria@adidas.com','Alvaro ','Olavarria','Director Sustainability'),(116,'kadine.hurtado@adidas-group.com','Kadine','Hurtado','VP Legal'),(117,'felipe.savone@adidas.com','Felipe','Savone','Managing Editor LAM'),(118,'jacqueline.mcleod@adidas.com','Jacqueline','Mcleod','Manager Strategy Planning'),(119,'andres.olaya@adidas.com','Andres ','Olaya','Executive Assistant'),(120,'valentina.gonzalez@adidas.com','Valentina','Gonzalez','Manager Internal Comms'),(121,'cesibel.castillo@adidas.com','Cesibel','Castillo','Sr. Manager Strategy Execution'),(122,'gabriela.velazquez@adidas.com','Gabriela','Velazquez','Manager NTP'),(123,'sebastian.gonzalez@piknik.com.mx','Sebastian','Gonzalez','Piknik'),(124,'elisa.moreno@piknik.com.mx','Elisa','Moreno','Piknik'),(125,'fernada.broca@piknik.com.mx','Fernanda ','Broca','Piknik'),(126,'gustavo.jordan@piknik.com.mx','Gustavo','Jordán','Piknik'),(127,'braulio.gaytan@piknik.com.mx ','Braulio','Gaytán','Piknik'),(128,'paola.llaguno@piknik.com.mx','Paola','Llaguno','Piknik'),(129,'jonathan.torres@piknik.com.mx ','Jonathan','Torres','Piknik'),(130,'barbara.torres@piknik.com.mx ','Barbara ','Torres','Piknik'),(131,'piknikprojectattak@gmail.com ','Extra','Extra','Piknik');
/*!40000 ALTER TABLE `users_allowed` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_avatars`
--

LOCK TABLES `users_avatars` WRITE;
/*!40000 ALTER TABLE `users_avatars` DISABLE KEYS */;
INSERT INTO `users_avatars` VALUES (3,1,2,2,2,2,2,'2022-04-05 12:41:52'),(4,4,1,1,2,2,2,'2022-04-05 15:38:07'),(5,5,2,2,2,2,2,'2022-04-05 16:12:30'),(6,6,2,2,2,2,2,'2022-04-05 16:47:28'),(7,7,2,2,2,2,2,'2022-04-06 09:08:28'),(8,8,1,2,1,2,1,'2022-04-06 16:07:44'),(9,9,2,1,1,1,1,'2022-04-06 16:08:31'),(10,10,2,2,2,2,2,'2022-04-06 16:09:43'),(11,11,4,4,5,5,4,'2022-04-09 11:56:51'),(12,12,3,2,5,6,3,'2022-04-09 12:02:26'),(13,13,2,5,3,5,1,'2022-04-09 13:10:15'),(14,15,4,4,3,5,4,'2022-04-12 09:17:32'),(15,16,2,4,3,6,4,'2022-04-12 09:33:45'),(16,17,2,2,1,3,3,'2022-04-13 11:51:42'),(17,18,2,4,3,6,5,'2022-04-13 13:06:12'),(18,21,1,2,5,2,3,'2022-04-13 13:11:46'),(19,25,4,5,4,6,4,'2022-04-15 09:18:23'),(20,26,2,3,4,5,4,'2022-04-19 10:58:54'),(21,27,3,2,5,5,2,'2022-04-19 10:59:51');
/*!40000 ALTER TABLE `users_avatars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_rates`
--

DROP TABLE IF EXISTS `users_rates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_rates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `users_id` int DEFAULT NULL,
  `total_stars` int DEFAULT NULL,
  `experience_name` varchar(45) DEFAULT NULL,
  `day` int DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `city` varchar(355) DEFAULT NULL,
  `region` varchar(355) DEFAULT NULL,
  `country` varchar(355) DEFAULT NULL,
  `device_os` varchar(355) DEFAULT NULL,
  `device_browser` varchar(355) DEFAULT NULL,
  `device_type` varchar(355) DEFAULT NULL,
  `like_most` text,
  `rather_change` text,
  `device` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_rates`
--

LOCK TABLES `users_rates` WRITE;
/*!40000 ALTER TABLE `users_rates` DISABLE KEYS */;
INSERT INTO `users_rates` VALUES (7,16,5,'sports',1,'2022-04-12 18:46:43',NULL,NULL,NULL,'iPhone',NULL,'MOBILE','five stars !!',NULL,NULL),(8,16,3,'sports',1,'2022-04-12 18:49:18',NULL,NULL,NULL,'iPhone',NULL,'MOBILE','tres estrellas',NULL,'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'),(9,16,4,'sports',1,'2022-04-12 18:53:53',NULL,NULL,NULL,'iPhone',NULL,'MOBILE','cuatro estrellas que onda...',NULL,'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'),(10,1,4,'business',4,'2022-04-13 10:12:51',NULL,NULL,NULL,'iPhone',NULL,'MOBILE','cuatro estrellas business dia 4',NULL,'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1'),(11,1,3,'connect',3,'2022-04-13 10:19:50',NULL,NULL,NULL,'iPhone',NULL,'MOBILE','TRES ESTRELLAS CONNECT DIA 3',NULL,'Mozilla/5.0 (iPhone; CPU iPhone OS 13_2_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Mobile/15E148 Safari/604.1');
/*!40000 ALTER TABLE `users_rates` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-19 16:03:30
