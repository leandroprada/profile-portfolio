-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: tandm50
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
  `correoElectronico` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fecha` date NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cuerpo` text CHARACTER SET latin1 NOT NULL,
  `idioma_que_hablo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `idioma_a_practicar` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registros`
--

LOCK TABLES `registros` WRITE;
/*!40000 ALTER TABLE `registros` DISABLE KEYS */;
INSERT INTO `registros` VALUES (1,'user@user.com','2016-12-03','TITULO DE PRUEBA','CUERPO DE PRUEBA','Afrikaans','Acoli'),(2,'user@user.com','2016-12-03','HOLA QUIERO PRACTICAR','DONDE PODEMOS VERNOS?','Afrikaans','Acoli'),(3,'user@user.com','2016-12-03','hello','dahdahdhhdahad','Afrikaans','English'),(5,'arthur@email.com','2016-12-04','hello1','this is a test','English','Español'),(6,'arthur@email.com','2016-12-04','hello2','this is a test','English','Español'),(7,'arthur@email.com','2016-12-04','djoadajsda AOIUóíá{{{{ñññññ','+´+o+óóáé´r','Español','English'),(8,'arthur@email.com','2016-12-04','´+´+aááááá´´aa','óóó´´oóññññññ','Español','English'),(9,'leandroprada@gmail.com','2016-12-04','BOK','Evo ovo je  \r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Croata','Español'),(10,'andres@email.com','2016-12-04','Este es un titulo','Aquie va el cuerpo \r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Español','Inglés'),(11,'luis@email.com','2016-12-04','Der Deustcher Es Valinder','\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','Español','Alemán');
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
  `usuario` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correoElectronico` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `idioma_a_practicar` varchar(50) NOT NULL,
  `idioma_que_hablo` varchar(50) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'UsuarioPrueba','$2y$10$L.27WhtfG0XqEzZfIt0owuxK.qtwvTQM6We3jCqnpli3UdWBb/WZq','UserName','UserLastName','user@user.com','55555666888','masculino','Acoli','Afrikaans','Bangladesh','UMPA LMPA'),(2,'UsuariodePrueba2','$2y$10$jWDr1PTQT03dnd0T4FI.mOMMRURIkWqG76SPUoguQdwywQBIervNu','Arthur','Locke','arthur@email.com','12224456632','femenino','English','Español','Alandia (Åland)','GOOK'),(3,'SuperUser','$2y$10$NpV/s8Wjsm8GD0bPl12yQ.hpPJApSvYPAAtvcOQtFEGl0Z4WCq9si','Leandro','Prada','leandroprada@gmail.com','55555','masculino','Español','Croata','Argentina','CABA'),(4,'usuarioENGSPA','$2y$10$KrfxxneezAFqzphFV.vvSOrwpT9DfOqJiWNvb8DOkZs2nwqWppKDO','Andres','Lucerno','andres@email.com','4444455877','femenino','Inglés','Español','Barbados','Barbados'),(5,'usuario123','$2y$10$4iHJiF7qeXPYpNCGPcopEOt.2gwsw22TnhuB6j9lz0w7XUxetrHC6','luis','gomex','luis@email.com','4446848648','masculino','Alemán','Español','Alemania ','Colonia'),(6,'username111','$2y$10$pz/jijQPX8l7kqmzl794G.DFuw2mAKKNkwnm3WZ8jgPiIxTnZlQrm','John','Smith','john@email.com','81818198','masculino','Afrikaans','Albano','Brasil','SaoPaulo');
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

-- Dump completed on 2016-12-04 12:34:13
