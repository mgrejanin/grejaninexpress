CREATE DATABASE  IF NOT EXISTS `mgrejanin1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mgrejanin1`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mgrejanin1
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
-- Temporary view structure for view `v_fretes`
--

DROP TABLE IF EXISTS `v_fretes`;
/*!50001 DROP VIEW IF EXISTS `v_fretes`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `v_fretes` AS SELECT 
 1 AS `cod_frete`,
 1 AS `ds_data`,
 1 AS `nr_wb`,
 1 AS `vlr_recebido`,
 1 AS `vlr_pago`,
 1 AS `ds_obs`,
 1 AS `nm_origem`,
 1 AS `nm_destino`,
 1 AS `nm_colaborador`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `tb_ge_colaborador`
--

DROP TABLE IF EXISTS `tb_ge_colaborador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ge_colaborador` (
  `cod_colaborador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_colaborador` varchar(120) NOT NULL,
  `ds_email` varchar(120) NOT NULL,
  `ds_carro` varchar(20) DEFAULT NULL,
  `ds_tamanho_carro` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_colaborador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ge_colaborador`
--

LOCK TABLES `tb_ge_colaborador` WRITE;
/*!40000 ALTER TABLE `tb_ge_colaborador` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ge_colaborador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ge_destino`
--

DROP TABLE IF EXISTS `tb_ge_destino`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ge_destino` (
  `cod_destino` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_destino` varchar(120) NOT NULL,
  `ds_sigla` varchar(15) NOT NULL,
  `ds_obs` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_destino`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ge_destino`
--

LOCK TABLES `tb_ge_destino` WRITE;
/*!40000 ALTER TABLE `tb_ge_destino` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ge_destino` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ge_frete`
--

DROP TABLE IF EXISTS `tb_ge_frete`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ge_frete` (
  `cod_frete` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ds_data` date NOT NULL,
  `nr_wb` varchar(200) NOT NULL,
  `vlr_recebido` double NOT NULL,
  `vlr_pago` double DEFAULT NULL,
  `ds_obs` varchar(250) DEFAULT NULL,
  `cod_origem` int(10) unsigned NOT NULL,
  `cod_destino` int(10) unsigned NOT NULL,
  `cod_colaborador` int(10) unsigned NOT NULL,
  PRIMARY KEY (`cod_frete`),
  KEY `FK_TB_GE_FRETE_ORIGEM` (`cod_origem`),
  KEY `FK_TB_GE_FRETE_DESTINO` (`cod_destino`),
  KEY `FK_TB_GE_FRETE_COLABORADOR` (`cod_colaborador`),
  CONSTRAINT `FK_TB_GE_FRETE_ORIGEM` FOREIGN KEY (`cod_origem`) REFERENCES `tb_ge_origem` (`cod_origem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_TB_GE_FRETE_DESTINO` FOREIGN KEY (`cod_destino`) REFERENCES `tb_ge_destino` (`cod_destino`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_TB_GE_FRETE_COLABORADOR` FOREIGN KEY (`cod_colaborador`) REFERENCES `tb_ge_colaborador` (`cod_colaborador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ge_frete`
--

LOCK TABLES `tb_ge_frete` WRITE;
/*!40000 ALTER TABLE `tb_ge_frete` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ge_frete` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ge_origem`
--

DROP TABLE IF EXISTS `tb_ge_origem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ge_origem` (
  `cod_origem` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_origem` varchar(120) NOT NULL,
  `ds_sigla` varchar(15) NOT NULL,
  `ds_obs` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`cod_origem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ge_origem`
--

LOCK TABLES `tb_ge_origem` WRITE;
/*!40000 ALTER TABLE `tb_ge_origem` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ge_origem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_ge_usuario`
--

DROP TABLE IF EXISTS `tb_ge_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_ge_usuario` (
  `cod_usuario` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(120) NOT NULL,
  `ds_email` varchar(120) NOT NULL,
  `ds_senha` varchar(32) NOT NULL,
  PRIMARY KEY (`cod_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_ge_usuario`
--

LOCK TABLES `tb_ge_usuario` WRITE;
/*!40000 ALTER TABLE `tb_ge_usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_ge_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mgrejanin1'
--

--
-- Dumping routines for database 'mgrejanin1'
--

--
-- Final view structure for view `v_fretes`
--

/*!50001 DROP VIEW IF EXISTS `v_fretes`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_fretes` AS select `f`.`cod_frete` AS `cod_frete`,`f`.`ds_data` AS `ds_data`,`f`.`nr_wb` AS `nr_wb`,`f`.`vlr_recebido` AS `vlr_recebido`,`f`.`vlr_pago` AS `vlr_pago`,`f`.`ds_obs` AS `ds_obs`,`o`.`nm_origem` AS `nm_origem`,`d`.`nm_destino` AS `nm_destino`,`c`.`nm_colaborador` AS `nm_colaborador` from (((`tb_ge_frete` `f` join `tb_ge_origem` `o` on((`f`.`cod_origem` = `o`.`cod_origem`))) join `tb_ge_destino` `d` on((`f`.`cod_destino` = `d`.`cod_destino`))) join `tb_ge_colaborador` `c` on((`f`.`cod_colaborador` = `c`.`cod_colaborador`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-31 15:47:10
