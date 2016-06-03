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
-- Table structure for table `mensaje_presidente`
--

DROP TABLE IF EXISTS `mensaje_presidente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensaje_presidente` (
  `id_mensaje_presidente` int(11) NOT NULL,
  `nom_img_mensaje_presidente` varchar(45) NOT NULL,
  `rut_img_mensaje_presidente` varchar(45) NOT NULL,
  `men_mensaje_presidente` varchar(2000) NOT NULL,
  `fra_mensaje_presidente` varchar(200) NOT NULL,
  `nom_pre_mensaje_presidente` varchar(100) NOT NULL,
  `pue_mensaje_presidente` varchar(100) NOT NULL,
  PRIMARY KEY (`id_mensaje_presidente`),
  UNIQUE KEY `id_mensaje_presidente_UNIQUE` (`id_mensaje_presidente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensaje_presidente`
--

LOCK TABLES `mensaje_presidente` WRITE;
/*!40000 ALTER TABLE `mensaje_presidente` DISABLE KEYS */;
INSERT INTO `mensaje_presidente` VALUES (1,'mensajePred.png','../imagenes/','Ante la necesidad urgente de atender la problemÃ¡tica que atraviesa nuestra parroquia en cuanto a su desarrollo local, hemos decidido afrontar un reto  que es la formulaciÃ³n del plan de desarrollo estratÃ©gico parroquial de BellamarÃ­a, proceso que ha sido una tarea dinÃ¡mica, participativa y de compromiso, porque han confluido factores de viabilidad polÃ­tica (gestiÃ³n del gobierno parroquial), participaciÃ³n ciudadana, cooperaciÃ³n externa (coordinaciÃ³n tÃ©cnica provincial) y concertaciÃ³n de propuestas de desarrollo entre los actores participantes.\n\n \n\nPensado en los nuevos desafÃ­os y oportunidades de nuestro territorio y de nuestra gente, se ha logrado formular y  disponer de una herramienta de gestiÃ³n del desarrollo local. GuÃ­a que va orientar la  inversiÃ³n y mejor distribuciÃ³n de los recursos del estado, con una visiÃ³n estratÃ©gica integral, que vaya mÃ¡s allÃ¡ de la infraestructura u obras de corto plazo, sino tambiÃ©n hacia la inversiÃ³n productiva, social, protecciÃ³n y conservaciÃ³n de los recursos naturales.\n\nEl Gobierno AutÃ³nomo Descentralizado Parroquial  de BellamarÃ­a Presenta  ante  la comunidad, local, nacional y internacional, la pÃ¡gina web institucional www.bellamariasantarosa.gob.ec  medio por el cual la ciudadanÃ­a y entes de control podrÃ¡n tener acceso a la informaciÃ³n pÃºblica, referente a la gestiÃ³n y manejo de los fondos pÃºblicos.\n\nEsta administraciÃ³n, serÃ¡ referencia del desarrollo Ã©tico y moral, por el  trabajo y lucha constante en busca de los sueÃ±os de nuestros moradores, sobre la base del plan de desarrollo y ordenamiento territorial y de los ejes del progreso de los pueblos como son: educaciÃ³n, salud, vialidad, seguridad, cultura, deporte, recreaciÃ³n, turismo, medio ambiente, vivienda; y, producciÃ³n, teniendo como resultado un Gobierno  Parroquial, comprometido con los mÃ¡s necesitados;  creando oportunidades que mejoren la calidad de vida de nuestros  habitantes de los diferentes recintos y barrios.','VIVIR NO ES SOLO EXITIR Y CREAR, SABER GOZAR Y SUFRIR Y NO DORMIR SIN SOÃ‘AR, DESCANSAR, ES EMPEZAR A MORIR.  GREGORIO MARAÃ‘ONâ€¦.','Sr. Jaime DurÃ¡n Chuchuca','Presidente del Gobierno parroquial de BellamarÃ­a 2009-2014');
/*!40000 ALTER TABLE `mensaje_presidente` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-02 19:42:07
