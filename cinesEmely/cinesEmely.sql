-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: cinesemely
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Table structure for table `asientos`
--

DROP TABLE IF EXISTS `asientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asientos` (
  `id_asiento` int(3) NOT NULL,
  `localidad_asiento` varchar(3) NOT NULL,
  `id_sala` int(3) NOT NULL,
  PRIMARY KEY (`id_asiento`),
  KEY `sala-asiento_idx` (`id_sala`),
  CONSTRAINT `sala-asiento` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asientos`
--

LOCK TABLES `asientos` WRITE;
/*!40000 ALTER TABLE `asientos` DISABLE KEYS */;
/*!40000 ALTER TABLE `asientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `audio_pelicula`
--

DROP TABLE IF EXISTS `audio_pelicula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `audio_pelicula` (
  `id_audio` int(2) NOT NULL AUTO_INCREMENT,
  `audio_pelicula` varchar(30) NOT NULL,
  PRIMARY KEY (`id_audio`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `audio_pelicula`
--

LOCK TABLES `audio_pelicula` WRITE;
/*!40000 ALTER TABLE `audio_pelicula` DISABLE KEYS */;
INSERT INTO `audio_pelicula` VALUES (1,'Doblada(Espanol)'),(2,'Subtitulado(Espanol)'),(3,'Doblada(Gallego)'),(4,'Doblada(Ingles)'),(5,'Subtitulado(Ingles)'),(6,'Espanol'),(7,'Ingles'),(11,'');
/*!40000 ALTER TABLE `audio_pelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `id_ciudad` int(2) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(45) NOT NULL,
  PRIMARY KEY (`id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudad`
--

LOCK TABLES `ciudad` WRITE;
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` VALUES (1,'La Ceiba'),(2,'San Pedro Sula'),(3,'Tegucigalpa'),(4,'Choluteca'),(5,'Trujillo'),(8,'Tela');
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clasificados`
--

DROP TABLE IF EXISTS `clasificados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clasificados` (
  `id_clasificado` int(2) NOT NULL AUTO_INCREMENT,
  `nombre_clasificado` varchar(20) NOT NULL,
  `edad_minima` int(2) NOT NULL,
  PRIMARY KEY (`id_clasificado`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clasificados`
--

LOCK TABLES `clasificados` WRITE;
/*!40000 ALTER TABLE `clasificados` DISABLE KEYS */;
INSERT INTO `clasificados` VALUES (6,'Clasificado G',0),(7,'Clasificado PG',10),(8,'ClasificadoPG-13',13),(9,'Clasificado R',18),(10,'Clasificado NC-17',17),(11,'Sin Clasificados',0),(12,'Clasificados 12',12),(13,'Clasificados 15',15),(14,'prueba',22);
/*!40000 ALTER TABLE `clasificados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id_cliente` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `identidad` int(13) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telefono` int(8) NOT NULL,
  `edad` int(2) NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `franquicias`
--

DROP TABLE IF EXISTS `franquicias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `franquicias` (
  `id_franquicia` int(3) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(45) NOT NULL,
  `id_ciudad` int(2) NOT NULL,
  `activo` varchar(12) NOT NULL,
  PRIMARY KEY (`id_franquicia`),
  KEY `ciudad-franquicia_idx` (`id_ciudad`),
  KEY `franquicias-ciudad_idx` (`id_ciudad`),
  CONSTRAINT `franquicias-ciudad` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `franquicias`
--

LOCK TABLES `franquicias` WRITE;
/*!40000 ALTER TABLE `franquicias` DISABLE KEYS */;
INSERT INTO `franquicias` VALUES (9,'Mall Megaplaza Ba. Toronjal 2',1,'Activo'),(14,'Plaza Primier',1,'Inactivo'),(15,'Mall Cascada',3,'activo'),(16,'Mall City',2,'activo');
/*!40000 ALTER TABLE `franquicias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcion`
--

DROP TABLE IF EXISTS `funcion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcion` (
  `id_funcion` int(10) NOT NULL AUTO_INCREMENT,
  `id_preparacion` int(10) NOT NULL,
  `fecha_final_tanda` date NOT NULL,
  `hora` time NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id_funcion`),
  KEY `pre-funcion_idx` (`id_preparacion`),
  CONSTRAINT `pre-funcion` FOREIGN KEY (`id_preparacion`) REFERENCES `pre_lanzamiento` (`id_preparacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcion`
--

LOCK TABLES `funcion` WRITE;
/*!40000 ALTER TABLE `funcion` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genero_pelicula`
--

DROP TABLE IF EXISTS `genero_pelicula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `genero_pelicula` (
  `id_genero` int(2) NOT NULL AUTO_INCREMENT,
  `genero_pelicula` varchar(45) NOT NULL,
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genero_pelicula`
--

LOCK TABLES `genero_pelicula` WRITE;
/*!40000 ALTER TABLE `genero_pelicula` DISABLE KEYS */;
INSERT INTO `genero_pelicula` VALUES (1,'Comedia'),(2,'Terror'),(3,'Animada'),(4,'Romance/Comedia'),(9,'Accion/Comedia');
/*!40000 ALTER TABLE `genero_pelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mala`
--

DROP TABLE IF EXISTS `mala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mala` (
  `id_franquicia` int(3) NOT NULL,
  `localidad_franquicia` varchar(45) NOT NULL,
  `id_ciudad` int(2) NOT NULL,
  PRIMARY KEY (`id_franquicia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mala`
--

LOCK TABLES `mala` WRITE;
/*!40000 ALTER TABLE `mala` DISABLE KEYS */;
/*!40000 ALTER TABLE `mala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelicula`
--

DROP TABLE IF EXISTS `pelicula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelicula` (
  `id_pelicula` int(3) NOT NULL AUTO_INCREMENT,
  `nombre_pelicula` varchar(50) NOT NULL,
  `genero` int(2) NOT NULL,
  `audio` int(2) NOT NULL,
  `id_clasificado` int(2) NOT NULL,
  `descripcion` varchar(440) NOT NULL,
  `fecha_de_registro` date NOT NULL,
  `ruta_img` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pelicula`),
  KEY `genero-pelicula_idx` (`genero`),
  KEY `audio-pelicula_idx` (`audio`),
  KEY `clasificado-pelicula_idx` (`id_clasificado`),
  CONSTRAINT `audio-pelicula` FOREIGN KEY (`audio`) REFERENCES `audio_pelicula` (`id_audio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `clasificado-pelicula` FOREIGN KEY (`id_clasificado`) REFERENCES `clasificados` (`id_clasificado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `genero-pelicula` FOREIGN KEY (`genero`) REFERENCES `genero_pelicula` (`id_genero`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelicula`
--

LOCK TABLES `pelicula` WRITE;
/*!40000 ALTER TABLE `pelicula` DISABLE KEYS */;
INSERT INTO `pelicula` VALUES (7,'Deadpool 2',9,1,10,'El heroe que se cree villano busca venganza','2018-07-01','fotos/deadpool2.jpg'),(8,'Amor A La Deriva',4,2,12,'Un millonario que al perder su memoria se enamora ciegamente de una mujer humilde','2018-07-12','fotos/a la deriva.jpg');
/*!40000 ALTER TABLE `pelicula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pre_lanzamiento`
--

DROP TABLE IF EXISTS `pre_lanzamiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pre_lanzamiento` (
  `id_preparacion` int(10) NOT NULL,
  `id_pelicula` int(3) NOT NULL,
  `id_ciudad` int(2) NOT NULL,
  `id_franquicia` int(3) NOT NULL,
  `id_sala` int(3) NOT NULL,
  `fecha_estreno_esperada` date NOT NULL,
  PRIMARY KEY (`id_preparacion`),
  KEY `fran-pre_idx` (`id_franquicia`),
  KEY `sala-pre_idx` (`id_sala`),
  KEY `pelicula-pre_idx` (`id_pelicula`),
  CONSTRAINT `fran-pre` FOREIGN KEY (`id_franquicia`) REFERENCES `mala` (`id_franquicia`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `pelicula-pre` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sala-pre` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pre_lanzamiento`
--

LOCK TABLES `pre_lanzamiento` WRITE;
/*!40000 ALTER TABLE `pre_lanzamiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `pre_lanzamiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sala`
--

DROP TABLE IF EXISTS `sala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sala` (
  `id_sala` int(3) NOT NULL AUTO_INCREMENT,
  `nombre_sala` varchar(30) NOT NULL,
  `id_franquicia` int(2) NOT NULL,
  PRIMARY KEY (`id_sala`),
  KEY `sala-ubicacion_idx` (`id_franquicia`),
  CONSTRAINT `sala-ubicacion` FOREIGN KEY (`id_franquicia`) REFERENCES `mala` (`id_franquicia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sala`
--

LOCK TABLES `sala` WRITE;
/*!40000 ALTER TABLE `sala` DISABLE KEYS */;
/*!40000 ALTER TABLE `sala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tiket`
--

DROP TABLE IF EXISTS `tiket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tiket` (
  `num_tiket` int(10) NOT NULL AUTO_INCREMENT,
  `id_funcion` int(10) NOT NULL,
  `id_cliente` int(10) NOT NULL,
  `id_asiento` int(3) NOT NULL,
  `fecha_compra` date NOT NULL,
  `asiento` int(3) NOT NULL,
  PRIMARY KEY (`num_tiket`),
  KEY `cliente-tiket_idx` (`id_cliente`),
  KEY `funcion-tiket_idx` (`id_funcion`),
  KEY `asiento-tiket_idx` (`asiento`),
  CONSTRAINT `asiento-tiket` FOREIGN KEY (`asiento`) REFERENCES `asientos` (`id_asiento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `cliente-tiket` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `funcion-tiket` FOREIGN KEY (`id_funcion`) REFERENCES `funcion` (`id_funcion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tiket`
--

LOCK TABLES `tiket` WRITE;
/*!40000 ALTER TABLE `tiket` DISABLE KEYS */;
/*!40000 ALTER TABLE `tiket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `contrasena` varchar(45) NOT NULL,
  `estado` varchar(9) NOT NULL,
  `id_franquicia` int(3) NOT NULL,
  PRIMARY KEY (`id_usuario`),
  KEY `usuario-franquicias_idx` (`id_franquicia`),
  CONSTRAINT `usuario-franquicias` FOREIGN KEY (`id_franquicia`) REFERENCES `franquicias` (`id_franquicia`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (5,'ledinalvarado','1234567890','Activo',15),(6,'WillySantos','1234567890','Activo',9);
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

-- Dump completed on 2018-07-31 16:05:44
