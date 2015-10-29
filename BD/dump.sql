CREATE DATABASE  IF NOT EXISTS `grejaninexpress` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `grejaninexpress`;
-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: grejaninexpress
-- ------------------------------------------------------
-- Server version	5.6.17

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
-- Table structure for table `t_ge_fretes`
--

DROP TABLE IF EXISTS `t_ge_fretes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_ge_fretes` (
  `cod_frete` int(11) NOT NULL AUTO_INCREMENT,
  `nm_funcionario` varchar(120) NOT NULL,
  `ds_data` date NOT NULL,
  `nr_wb` varchar(120) NOT NULL,
  `ds_origem` varchar(20) NOT NULL,
  `ds_destino` varchar(20) NOT NULL,
  `vlr_recebido` double NOT NULL,
  `vlr_pago` double NOT NULL,
  `obs` varchar(260) NOT NULL,
  PRIMARY KEY (`cod_frete`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_ge_fretes`
--

LOCK TABLES `t_ge_fretes` WRITE;
/*!40000 ALTER TABLE `t_ge_fretes` DISABLE KEYS */;
INSERT INTO `t_ge_fretes` VALUES (1,'JosÃ© Augusto','2015-09-02','121312','Origem 1','Destino 1',300,150,'O MoÃ§o..'),(2,'JosÃ© Augusto','2015-09-01','asda','Origem 1','Destino 1',0,0,'asd'),(3,'JosÃ© Augusto','2015-09-08','123','Origem 1','Destino 1',1500,300,'');
/*!40000 ALTER TABLE `t_ge_fretes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_ge_usuarios`
--

DROP TABLE IF EXISTS `t_ge_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_ge_usuarios` (
  `cod_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(120) NOT NULL,
  `ds_email` varchar(120) NOT NULL,
  `ds_senha` varchar(12) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_ge_usuarios`
--

LOCK TABLES `t_ge_usuarios` WRITE;
/*!40000 ALTER TABLE `t_ge_usuarios` DISABLE KEYS */;
INSERT INTO `t_ge_usuarios` VALUES (1,'Mauricio de Oliveira','grejaninexpress@hotmail.com','vanhsc-8530');
/*!40000 ALTER TABLE `t_ge_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'grejaninexpress'
--

--
-- Dumping routines for database 'grejaninexpress'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-29 13:40:23
