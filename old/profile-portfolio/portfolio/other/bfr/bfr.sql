-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: bfr
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.16-MariaDB

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
-- Table structure for table `registros`
--

DROP TABLE IF EXISTS `registros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correoElectronico` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `pecho_izquierdo` varchar(2) DEFAULT NULL,
  `pecho_derecho` varchar(2) DEFAULT NULL,
  `pez_izq` tinyint(1) DEFAULT NULL,
  `pez_der` tinyint(1) DEFAULT NULL,
  `total` varchar(2) DEFAULT NULL,
  `lech_mat` varchar(3) DEFAULT NULL,
  `lech_madre` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (2,'luis@gmail.com','1970-01-01','16:11:00','','',1,1,'','',''),(3,'luis@gmail.com','1970-01-01','16:11:00','','',1,1,'','',''),(4,'luis@gmail.com','1970-01-01','16:12:00','','',1,1,'','',''),(5,'luis@gmail.com','1970-01-01','16:14:00','','',1,1,'','',''),(6,'luis@gmail.com','1970-01-01','16:14:00','','',1,1,'','',''),(7,'luis@gmail.com','1970-01-01','16:14:00','','',1,1,'','',''),(8,'luis@gmail.com','1970-01-01','16:14:00','','',1,1,'','',''),(9,'luis@gmail.com','1970-01-01','16:14:00','','',1,1,'','',''),(10,'luis@gmail.com','1970-01-01','16:17:00','','',1,1,'','',''),(11,'luis@gmail.com','2016-11-16','16:19:00','','',1,1,'','',''),(12,'luis@gmail.com','1970-01-01','16:19:00','','',1,1,'','',''),(13,'ANITA@GMAIL.COM','2016-02-28','16:23:00','5','5',0,0,'10','',''),(14,'luis@gmail.com','2016-11-16','16:25:00','','8',1,1,'8','100','100'),(15,'luis@gmail.com','2016-11-16','17:09:00','','',1,1,'','',''),(16,'luis@gmail.com','2016-11-16','17:10:00','','',1,1,'','',''),(17,'carlos@email.com','2016-11-16','19:39:00','','',1,1,'','',''),(18,'carlos@email.com','2016-11-16','19:39:00','50','10',1,1,'60','',''),(19,'arturo@gmail.com','2016-11-16','19:54:00','2','2',1,1,'4','',''),(20,'arturo@gmail.com','2016-11-16','19:54:00','5','6',1,1,'11','10','14'),(21,'josipakovacprada@gmail.com','2016-11-16','20:04:00','15','20',0,0,'35','',''),(22,'luis@gmail.com','2016-11-16','22:21:00','8','12',1,1,'20','100','100'),(23,'arturito@gmil.com','2016-11-16','22:29:00','','',1,1,'','',''),(24,'usuario@gmail.com','2016-11-16','22:58:00','11','44',0,0,'55','','150');
/*!40000 ALTER TABLE `registros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correoElectronico` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (2,'luis@gmail.com'),(3,'luis2@gmail.com'),(4,'carlos@email.com'),(5,'arturo@gmail.com'),(6,'leandro@gmail.com'),(7,'josipakovacprada@gmail.com'),(8,'carmen@post.com'),(9,'carola@gmail.com'),(10,'car@mar.com'),(11,'arturito@gmil.com'),(12,'usuario@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-16 23:03:30
