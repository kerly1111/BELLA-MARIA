-- MySQL dump 10.13  Distrib 5.6.24, for Win64 (x86_64)
--
-- Host: localhost    Database: bella-maria
-- ------------------------------------------------------
-- Server version	5.5.24-log

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
-- Table structure for table `imagenes`
--

DROP TABLE IF EXISTS `imagenes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagenes` (
  `id_imagen` varchar(10) NOT NULL,
  `ubi_imagen` varchar(45) NOT NULL,
  `nom_imagen` varchar(45) NOT NULL,
  `modulo_id_modulo` int(11) NOT NULL,
  PRIMARY KEY (`id_imagen`),
  UNIQUE KEY `id_imagenes_UNIQUE` (`id_imagen`),
  KEY `fk_imagenes_modulo_idx` (`modulo_id_modulo`),
  CONSTRAINT `fk_imagenes_modulo` FOREIGN KEY (`modulo_id_modulo`) REFERENCES `modulo` (`id_modulo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagenes`
--

LOCK TABLES `imagenes` WRITE;
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` VALUES ('1','../imagenes/modulos/','1.png',1),('10','../imagenes/modulos/','10.png',10),('10_1','../imagenes/modulos/','10_1.png',10),('10_2','../imagenes/modulos/','10_2.png',10),('11','../imagenes/modulos/','11.png',11),('11_1','../imagenes/modulos/','11_1.png',11),('12','../imagenes/modulos/','12.png',12),('12_1','../imagenes/modulos/','12_1.png',12),('13','../imagenes/modulos/','13.png',13),('14','../imagenes/modulos/','14.png',14),('14_1','../imagenes/modulos/','14_1.png',14),('15','../imagenes/modulos/','15.png',15),('15_1','../imagenes/modulos/','15_1.png',15),('15_2','../imagenes/modulos/','15_2.png',15),('15_3','../imagenes/modulos/','15_3.png',15),('16','../imagenes/modulos/','16.png',16),('17','../imagenes/modulos/','17.png',17),('17_1','../imagenes/modulos/','17_1.png',17),('17_2','../imagenes/modulos/','17_2.png',17),('17_3','../imagenes/modulos/','17_3.png',17),('18','../imagenes/modulos/','18.png',18),('18_1','../imagenes/modulos/','18_1.png',18),('18_2','../imagenes/modulos/','18_2.png',18),('1_1','../imagenes/modulos/','1_1.png',1),('2','../imagenes/modulos/','2.png',2),('3','../imagenes/modulos/','3.png',3),('3_1','../imagenes/modulos/','3_1.png',3),('4','../imagenes/modulos/','4.png',4),('4_1','../imagenes/modulos/','4_1.png',4),('4_2','../imagenes/modulos/','4_2.png',4),('4_3','../imagenes/modulos/','4_3.png',4),('4_4','../imagenes/modulos/','4_4.png',4),('5','../imagenes/modulos/','5.png',5),('5_1','../imagenes/modulos/','5_1.png',5),('5_2','../imagenes/modulos/','5_2.png',5),('6','../imagenes/modulos/','6.png',6),('6_1','../imagenes/modulos/','6_1.png',6),('6_2','../imagenes/modulos/','6_2.png',6),('6_3','../imagenes/modulos/','6_3.png',6),('7','../imagenes/modulos/','7.png',7),('7_1','../imagenes/modulos/','7_1.png',7),('7_2','../imagenes/modulos/','7_2.png',7),('8','../imagenes/modulos/','8.png',8),('8_1','../imagenes/modulos/','8_1.png',8),('8_2','../imagenes/modulos/','8_2.png',8),('8_3','../imagenes/modulos/','8_3.png',8),('9','../imagenes/modulos/','9.png',9),('9_1','../imagenes/modulos/','9_1.png',9);
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-04-27 22:50:11
