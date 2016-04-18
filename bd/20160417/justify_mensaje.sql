CREATE DATABASE  IF NOT EXISTS `justify` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `justify`;
-- MySQL dump 10.13  Distrib 5.6.13, for osx10.6 (i386)
--
-- Host: 127.0.0.1    Database: justify
-- ------------------------------------------------------
-- Server version	5.6.13

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
-- Table structure for table `mensaje`
--

DROP TABLE IF EXISTS `mensaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje` (
  `idMensaje` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fecha` timestamp NULL DEFAULT NULL,
  `remitente` bigint(20) unsigned NOT NULL,
  `destinatario` bigint(20) unsigned NOT NULL,
  `mensaje` text,
  `leido` smallint(6) DEFAULT '0',
  PRIMARY KEY (`idMensaje`),
  KEY `remitente` (`remitente`),
  KEY `destinatario` (`destinatario`),
  CONSTRAINT `fk_destinatario` FOREIGN KEY (`destinatario`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_remitente` FOREIGN KEY (`remitente`) REFERENCES `usuario` (`idUsuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje`
--

LOCK TABLES `mensaje` WRITE;
/*!40000 ALTER TABLE `mensaje` DISABLE KEYS */;
INSERT INTO `mensaje` VALUES (1,'2016-04-15 04:46:02',25,27,'Hola mundo',1),(2,'2016-04-16 22:25:24',27,25,'Hola que hace?',1),(3,'2016-04-18 03:37:57',27,25,'Nada, aquí casual',1),(4,'2016-04-18 03:43:17',25,27,'Que bueno, me da mucho gusto',1),(5,'2016-04-18 04:00:16',25,27,'Si claro, este sería mi mensaje',1),(6,'2016-04-18 04:09:51',25,27,'Este es un mensaje ',1),(7,'2016-04-18 04:22:55',25,27,'Hola',1),(8,'2016-04-18 04:31:43',28,27,'asdf',1),(9,'2016-04-18 04:36:39',25,27,'Hola, tengo algunas dudas con respecto a un caso \n\nMe puede ayudar? ',1),(10,'2016-04-18 04:40:22',27,28,'Eeeee?',0),(11,'2016-04-18 04:40:50',27,25,'Perfecto',0),(12,'2016-04-18 04:41:14',27,25,'Claro que si, dígame en que le puedo servir',0);
/*!40000 ALTER TABLE `mensaje` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-17 23:46:40
