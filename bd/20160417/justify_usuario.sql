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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `idPerfil` smallint(5) unsigned NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contrasena` char(100) DEFAULT NULL,
  `registro` timestamp NULL DEFAULT NULL,
  `modificacion` timestamp NULL DEFAULT NULL,
  `ultimologin` timestamp NULL DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `index_perfilUsuario` (`idPerfil`),
  CONSTRAINT `fk_perfilUsuario` FOREIGN KEY (`idPerfil`) REFERENCES `perfil` (`idPerfil`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,1,'hugooluisss@gmail.com','c474172120640848b304bcf01b0d55c4','2016-03-02 16:15:31','2016-03-06 18:46:05',NULL,'A','Hugo Luis Santiago Altamirano','H'),(25,3,'hugooluisss@hotmail.com','c474172120640848b304bcf01b0d55c4','2016-03-28 20:45:16','2016-04-18 04:09:12',NULL,'A','Hugo Santiago','H'),(27,2,'pr1m3v3@hotmail.com','c474172120640848b304bcf01b0d55c4','2016-03-31 06:34:49','2016-04-13 05:03:17',NULL,'A','Abogados Asociados','H'),(28,3,'huguntu@miempresa.com','c474172120640848b304bcf01b0d55c4','2016-04-18 04:23:25','2016-04-18 04:39:11',NULL,'A','La empresa de huguntu','H');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
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
