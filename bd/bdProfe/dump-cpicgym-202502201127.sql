-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: cpicgym
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actividad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `centroformacion`
--

DROP TABLE IF EXISTS `centroformacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `centroformacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `centroformacion`
--

LOCK TABLES `centroformacion` WRITE;
/*!40000 ALTER TABLE `centroformacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `centroformacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `controlprogreso`
--

DROP TABLE IF EXISTS `controlprogreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `controlprogreso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fechaRealizacion` date NOT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  `cintura` decimal(10,0) DEFAULT NULL,
  `cadera` decimal(10,0) DEFAULT NULL,
  `musloDerecho` decimal(10,0) DEFAULT NULL,
  `musloIzquierdo` decimal(10,0) DEFAULT NULL,
  `brazoDerecho` decimal(10,0) DEFAULT NULL,
  `brazoIzquierdo` decimal(10,0) DEFAULT NULL,
  `antebrazoDerecho` decimal(10,0) DEFAULT NULL,
  `antebrazoIzquierdo` decimal(10,0) DEFAULT NULL,
  `pantorrillaDerecha` decimal(10,0) DEFAULT NULL,
  `pantorrillaIzquierda` decimal(10,0) DEFAULT NULL,
  `examenMedico` varchar(255) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `fechaExamen` date DEFAULT NULL,
  `fkIdUsuario` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdUser` (`fkIdUsuario`),
  CONSTRAINT `fkIdUser` FOREIGN KEY (`fkIdUsuario`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `controlprogreso`
--

LOCK TABLES `controlprogreso` WRITE;
/*!40000 ALTER TABLE `controlprogreso` DISABLE KEYS */;
/*!40000 ALTER TABLE `controlprogreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grupo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ficha` varchar(15) NOT NULL,
  `cantAprendices` tinyint(3) unsigned DEFAULT NULL,
  `estado` varchar(15) NOT NULL,
  `fechaIniLectiva` date DEFAULT NULL,
  `fechaFinLectiva` date DEFAULT NULL,
  `fkIdProgForm` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FkIdProgForm` (`fkIdProgForm`),
  CONSTRAINT `FkIdProgForm` FOREIGN KEY (`fkIdProgForm`) REFERENCES `programaformacion` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `programaformacion`
--

DROP TABLE IF EXISTS `programaformacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `programaformacion` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(15) DEFAULT NULL,
  `nombre` varchar(30) NOT NULL,
  `FkIdCentroFormacion` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FkIdCentroFormacion` (`FkIdCentroFormacion`),
  CONSTRAINT `FkIdCentroFormacion` FOREIGN KEY (`FkIdCentroFormacion`) REFERENCES `centroformacion` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `programaformacion`
--

LOCK TABLES `programaformacion` WRITE;
/*!40000 ALTER TABLE `programaformacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `programaformacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registroingreso`
--

DROP TABLE IF EXISTS `registroingreso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `registroingreso` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fechaIn` datetime NOT NULL,
  `fechaOut` datetime DEFAULT NULL,
  `fkIdUserGym` int(10) unsigned NOT NULL,
  `fkIdActividad` int(10) unsigned DEFAULT NULL,
  `fkIdTrainer` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdUserGymReg` (`fkIdUserGym`),
  KEY `fkIdActividad` (`fkIdActividad`),
  KEY `fkIdTrainer` (`fkIdTrainer`),
  CONSTRAINT `fkIdActividad` FOREIGN KEY (`fkIdActividad`) REFERENCES `actividad` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fkIdTrainer` FOREIGN KEY (`fkIdTrainer`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fkIdUserGymReg` FOREIGN KEY (`fkIdUserGym`) REFERENCES `usuario` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registroingreso`
--

LOCK TABLES `registroingreso` WRITE;
/*!40000 ALTER TABLE `registroingreso` DISABLE KEYS */;
/*!40000 ALTER TABLE `registroingreso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rol`
--

DROP TABLE IF EXISTS `rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rol` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rol`
--

LOCK TABLES `rol` WRITE;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
INSERT INTO `rol` VALUES (1,'admin'),(2,'trainer'),(3,'client'),(4,'store');
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipousuariogym`
--

DROP TABLE IF EXISTS `tipousuariogym`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipousuariogym` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipousuariogym`
--

LOCK TABLES `tipousuariogym` WRITE;
/*!40000 ALTER TABLE `tipousuariogym` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipousuariogym` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `tipoDocumento` char(2) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `email` varchar(80) NOT NULL,
  `genero` char(1) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `eps` varchar(20) DEFAULT NULL,
  `tipoSangre` char(3) DEFAULT NULL,
  `peso` decimal(10,0) DEFAULT NULL,
  `estatura` decimal(10,0) DEFAULT NULL,
  `telefonoEmergencia` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `observaciones` text DEFAULT NULL,
  `fkIdRol` int(10) unsigned NOT NULL,
  `fkIdGrupo` int(10) unsigned DEFAULT NULL,
  `fkIdCentroFormacion` int(10) unsigned DEFAULT NULL,
  `fkIdTipoUserGym` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fkIdRol` (`fkIdRol`),
  KEY `fkIdGrupo` (`fkIdGrupo`),
  KEY `fkIdCentroFormacion2` (`fkIdCentroFormacion`),
  KEY `fkIdTipoUserGym` (`fkIdTipoUserGym`),
  CONSTRAINT `fkIdCentroFormacion2` FOREIGN KEY (`fkIdCentroFormacion`) REFERENCES `centroformacion` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fkIdGrupo` FOREIGN KEY (`fkIdGrupo`) REFERENCES `grupo` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fkIdRol` FOREIGN KEY (`fkIdRol`) REFERENCES `rol` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `fkIdTipoUserGym` FOREIGN KEY (`fkIdTipoUserGym`) REFERENCES `tipousuariogym` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cpicgym'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-02-20 11:27:48
