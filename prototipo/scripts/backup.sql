-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `Categoria` varchar(45) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'masajes'),(2,'quiropractico'),(3,'sobos');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citas` (
  `idcitas` int(11) NOT NULL AUTO_INCREMENT,
  `cita` datetime NOT NULL,
  `idCliente` int(11) NOT NULL,
  `clientes_tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `empleados_tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') DEFAULT NULL,
  PRIMARY KEY (`idcitas`),
  KEY `fk_citas_clientes1_idx` (`idCliente`,`clientes_tipoIdentificacion`),
  KEY `fk_citas_empleados1_idx` (`idEmpleado`,`empleados_tipoIdentificacion`),
  CONSTRAINT `fk_citas_clientes1` FOREIGN KEY (`idCliente`, `clientes_tipoIdentificacion`) REFERENCES `clientes` (`idCliente`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_citas_empleados1` FOREIGN KEY (`idEmpleado`, `empleados_tipoIdentificacion`) REFERENCES `empleados` (`idEmpleado`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefonoCelular` varchar(45) NOT NULL,
  `correoElectronico` varchar(45) NOT NULL,
  `direccionResidencia` varchar(45) NOT NULL,
  `reciboPublico` enum('si','no') DEFAULT NULL,
  `fechaNacimientoAcompañante` date NOT NULL,
  `telefonoAcompañante` varchar(45) NOT NULL,
  `correoAcompañante` varchar(45) NOT NULL,
  PRIMARY KEY (`idCliente`,`tipoIdentificacion`),
  UNIQUE KEY `correoElectronico_UNIQUE` (`correoElectronico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1103858176,'Cedula','Isaac ','Gonzalez','2004-02-05','3005719154','isaac.gonzalezs@cecar.edu.co','calleisaac123','si','1998-07-15','330054512','gina@gmail.com'),(1103858555,'Cedula','andres','aaaaaaaaaa','1998-02-10','3005719154','djgg8660@gmail.com','aaaaaaaaa',NULL,'2022-11-09','5555555555555555','gina@gmail.com');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elementos`
--

DROP TABLE IF EXISTS `elementos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elementos` (
  `idElemento` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `costo` int(11) NOT NULL,
  `descripcion` longtext NOT NULL,
  PRIMARY KEY (`idElemento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elementos`
--

LOCK TABLES `elementos` WRITE;
/*!40000 ALTER TABLE `elementos` DISABLE KEYS */;
INSERT INTO `elementos` VALUES (1,'aceite',5000,'se usa para masajes'),(2,'agua',4000,'para tomar\r\n'),(3,'silla',20000,'para sentarse'),(4,'cama enfermeria',60000,'para acostarse'),(5,'boleadora',7000,'para masajes');
/*!40000 ALTER TABLE `elementos` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER costoElemento_au AFTER UPDATE 
ON elementos FOR EACH ROW  
BEGIN  
	declare vprecio int;
	declare vcosto int;
	declare vporcentaje int;
    declare vservicio int;
    
    select se.idServicio into vservicio from servicioselementos se, elementos e
	where (e.idElemento = se.idElemento) and se.idelemento = new.idelemento;

    select sum(e.costo) into vcosto
	from ServiciosElementos se, elementos e
	where se.idservicio = vservicio and se.idelemento = e.idelemento;

	select porcentajeGanancia into vporcentaje
	from servicios
	where idservicio = vservicio;

	set vprecio = vcosto + (vcosto*vporcentaje)/100;

	update servicios set precio = vprecio, costoServicio = vcosto
	where idServicio = vservicio;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  PRIMARY KEY (`idEmpleado`,`tipoIdentificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Cedula','Carlos','Gonzalez'),(2,'Cedula','frank','perez'),(3,'Cedula','joana','Martinez'),(4,'Cedula','pepe','gonzalez');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudios`
--

DROP TABLE IF EXISTS `estudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudios` (
  `idEstudio` int(11) NOT NULL AUTO_INCREMENT,
  `estudio` longtext NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idEstudio`),
  KEY `fk_estudios_empleados1_idx` (`idEmpleado`,`tipoIdentificacion`),
  CONSTRAINT `fk_estudios_empleados1` FOREIGN KEY (`idEmpleado`, `tipoIdentificacion`) REFERENCES `empleados` (`idEmpleado`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudios`
--

LOCK TABLES `estudios` WRITE;
/*!40000 ALTER TABLE `estudios` DISABLE KEYS */;
INSERT INTO `estudios` VALUES (13,'secretaria',3,'Cedula'),(14,'profesional',2,'Cedula'),(15,'masajes',2,'Cedula'),(16,'administrador de empresas',4,'Cedula');
/*!40000 ALTER TABLE `estudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experiencias`
--

DROP TABLE IF EXISTS `experiencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experiencias` (
  `idExperiencia` int(11) NOT NULL AUTO_INCREMENT,
  `experiencia` longtext NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idExperiencia`),
  KEY `fk_experiencia_empleados1_idx` (`idEmpleado`,`tipoIdentificacion`),
  CONSTRAINT `fk_experiencia_empleados1` FOREIGN KEY (`idEmpleado`, `tipoIdentificacion`) REFERENCES `empleados` (`idEmpleado`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experiencias`
--

LOCK TABLES `experiencias` WRITE;
/*!40000 ALTER TABLE `experiencias` DISABLE KEYS */;
INSERT INTO `experiencias` VALUES (16,'secretaria',3,'Cedula'),(17,'profesional',2,'Cedula'),(18,'masajes',2,'Cedula'),(19,'administrador de empresas',4,'Cedula');
/*!40000 ALTER TABLE `experiencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `festivos`
--

DROP TABLE IF EXISTS `festivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `festivos` (
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `festivos`
--

LOCK TABLES `festivos` WRITE;
/*!40000 ALTER TABLE `festivos` DISABLE KEYS */;
INSERT INTO `festivos` VALUES ('2022-01-01'),('2022-01-10'),('2022-03-21'),('2022-04-14'),('2022-04-15'),('2022-05-01'),('2022-05-30'),('2022-06-20'),('2022-06-27'),('2022-07-04'),('2022-07-20'),('2022-08-07'),('2022-08-15'),('2022-10-17'),('2022-11-07'),('2022-11-14'),('2022-12-08'),('2022-12-25');
/*!40000 ALTER TABLE `festivos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historiasclinicas`
--

DROP TABLE IF EXISTS `historiasclinicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historiasclinicas` (
  `idHistoriaClinica` int(11) NOT NULL AUTO_INCREMENT,
  `presionsistolica` int(11) NOT NULL,
  `presiondiastolica` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `derivacion` longtext DEFAULT NULL,
  `diagnostico` longtext DEFAULT NULL,
  `numeroDeSesiones` int(11) DEFAULT NULL,
  `SesionesTotal` int(11) DEFAULT NULL,
  `evolucion` varchar(45) DEFAULT NULL,
  `idCliente` int(11) NOT NULL,
  `tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idHistoriaClinica`),
  KEY `fk_historiasclinicas_clientes1_idx` (`idCliente`,`tipoIdentificacion`),
  CONSTRAINT `fk_historiasclinicas_clientes1` FOREIGN KEY (`idCliente`, `tipoIdentificacion`) REFERENCES `clientes` (`idCliente`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historiasclinicas`
--

LOCK TABLES `historiasclinicas` WRITE;
/*!40000 ALTER TABLE `historiasclinicas` DISABLE KEYS */;
INSERT INTO `historiasclinicas` VALUES (1,85,76,80,'aaaaaaaa','no se',4,NULL,'Negativa',1,'Cedula');
/*!40000 ALTER TABLE `historiasclinicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historiasclinicasservicios`
--

DROP TABLE IF EXISTS `historiasclinicasservicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historiasclinicasservicios` (
  `idHistoriaClinica` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  KEY `fk_historiasclinicas_has_servicios_servicios1_idx` (`idServicio`),
  KEY `fk_historiasclinicas_has_servicios_historiasclinicas1_idx` (`idHistoriaClinica`),
  CONSTRAINT `fk_historiasclinicas_has_servicios_historiasclinicas1` FOREIGN KEY (`idHistoriaClinica`) REFERENCES `historiasclinicas` (`idHistoriaClinica`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_historiasclinicas_has_servicios_servicios1` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historiasclinicasservicios`
--

LOCK TABLES `historiasclinicasservicios` WRITE;
/*!40000 ALTER TABLE `historiasclinicasservicios` DISABLE KEYS */;
INSERT INTO `historiasclinicasservicios` VALUES (1,1),(1,2);
/*!40000 ALTER TABLE `historiasclinicasservicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `idServicio` int(11) NOT NULL,
  `nombreServicio` varchar(45) NOT NULL,
  `costoServicio` int(11) DEFAULT NULL,
  `descripcionServicio` longtext NOT NULL,
  `presionsistolica` int(11) DEFAULT NULL,
  `presiondiastolica` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `porcentajeGanancia` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  PRIMARY KEY (`idServicio`),
  UNIQUE KEY `nombreServicio_UNIQUE` (`nombreServicio`),
  KEY `fk_servicios_categorias1_idx` (`idCategoria`),
  CONSTRAINT `fk_servicios_categorias1` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`idCategoria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
INSERT INTO `servicios` VALUES (1,'dolores',11000,'Se hacen masajes para dolores',73,82,60,14300,30,1),(2,'traquear',NULL,'Se hacen masajes para dolores',NULL,NULL,NULL,NULL,25,2),(3,'yoquese',NULL,'tampocose',NULL,NULL,NULL,NULL,80,3);
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER evolucion_au AFTER UPDATE 
ON servicios FOR EACH ROW  
BEGIN  
	declare vpeso int;
	declare vpresiona int;
	declare vpresiond int;
    declare vservicio int;
    declare vhistoria int;
    declare vevolucion varchar(45);
    
    select idservicio into vservicio from servicios where idServicio = new.idServicio;
    
    select peso into vpeso from servicios where idServicio = new.idServicio;
    select presionsistolica into vpresiona from servicios where idServicio = new.idServicio;
    select presiondiastolica into vpresiond from servicios where idServicio = new.idServicio;
    
    select hs.idHistoriaClinica into vhistoria from historiasclinicas h, historiasclinicasservicios hs 
    where h.idHistoriaClinica = hs.idHistoriaClinica and hs.idServicio = vservicio;
    
    select if(peso < vpeso and presionsistolica < vpresiona and presiondiastolica < vpresiond, "Positiva", "Negativa") into vevolucion 
    from historiasclinicas where idHistoriaClinica = vhistoria;
    
    update historiasclinicas set evolucion = vevolucion
	where idHistoriaClinica = vhistoria;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `servicioselementos`
--

DROP TABLE IF EXISTS `servicioselementos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicioselementos` (
  `idServicio` int(11) NOT NULL,
  `idElemento` int(11) NOT NULL,
  KEY `fk_servicios_has_elementos_elementos1_idx` (`idElemento`),
  KEY `fk_servicios_has_elementos_servicios1_idx` (`idServicio`),
  CONSTRAINT `fk_servicios_has_elementos_elementos1` FOREIGN KEY (`idElemento`) REFERENCES `elementos` (`idElemento`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_servicios_has_elementos_servicios1` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicioselementos`
--

LOCK TABLES `servicioselementos` WRITE;
/*!40000 ALTER TABLE `servicioselementos` DISABLE KEYS */;
INSERT INTO `servicioselementos` VALUES (1,2),(1,5);
/*!40000 ALTER TABLE `servicioselementos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `contrasena` varbinary(16) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `tipoIdentificacionCliente` enum('Cedula','tarjeta de identidad','cedula de extranjeria') DEFAULT NULL,
  `idEmpleado` int(11) DEFAULT NULL,
  `tipoIdentificacionEmpleado` enum('Cedula','tarjeta de identidad','cedula de extranjeria') DEFAULT NULL,
  `tipo` enum('C','P','S','A','G') NOT NULL COMMENT 'C = cliente, P= profesional, S = secretario/a, A = administrador, G = gerente',
  KEY `fk_usuarios_clientes1_idx` (`idCliente`,`tipoIdentificacionCliente`),
  KEY `fk_usuarios_empleados1_idx` (`idEmpleado`,`tipoIdentificacionEmpleado`),
  CONSTRAINT `fk_usuarios_clientes1` FOREIGN KEY (`idCliente`, `tipoIdentificacionCliente`) REFERENCES `clientes` (`idCliente`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_usuarios_empleados1` FOREIGN KEY (`idEmpleado`, `tipoIdentificacionEmpleado`) REFERENCES `empleados` (`idEmpleado`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('gerente123',NULL,NULL,1,'Cedula','G'),('isaac123',1103858176,'Cedula',NULL,NULL,'C'),('isaac123',1103858176,'Cedula',NULL,NULL,'C'),('secretaria123',NULL,NULL,3,'Cedula','S'),('profesional123',NULL,NULL,2,'Cedula','P'),('administrador123',NULL,NULL,4,'Cedula','A'),('holahola',NULL,NULL,1,'Cedula',''),('holahola',NULL,NULL,2,'Cedula','P'),('holahola',1103858555,'Cedula',NULL,NULL,'C');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventadetalle`
--

DROP TABLE IF EXISTS `ventadetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventadetalle` (
  `precio` int(11) NOT NULL,
  `idventaEncabezado` int(11) NOT NULL,
  `idServicio` int(11) NOT NULL,
  PRIMARY KEY (`idventaEncabezado`,`idServicio`),
  KEY `fk_ventaEncabezado_has_servicios_servicios1_idx` (`idServicio`),
  KEY `fk_ventaEncabezado_has_servicios_ventaEncabezado1_idx` (`idventaEncabezado`),
  CONSTRAINT `fk_ventaEncabezado_has_servicios_servicios1` FOREIGN KEY (`idServicio`) REFERENCES `servicios` (`idServicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ventaEncabezado_has_servicios_ventaEncabezado1` FOREIGN KEY (`idventaEncabezado`) REFERENCES `ventaencabezado` (`idventaEncabezado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventadetalle`
--

LOCK TABLES `ventadetalle` WRITE;
/*!40000 ALTER TABLE `ventadetalle` DISABLE KEYS */;
INSERT INTO `ventadetalle` VALUES (8000,1,2),(8000,2,1);
/*!40000 ALTER TABLE `ventadetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventaencabezado`
--

DROP TABLE IF EXISTS `ventaencabezado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventaencabezado` (
  `idventaEncabezado` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `total` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `tipoIdentificacion` enum('Cedula','tarjeta de identidad','cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idventaEncabezado`),
  KEY `fk_ventaEncabezado_clientes1_idx` (`idCliente`,`tipoIdentificacion`),
  CONSTRAINT `fk_ventaEncabezado_clientes1` FOREIGN KEY (`idCliente`, `tipoIdentificacion`) REFERENCES `clientes` (`idCliente`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventaencabezado`
--

LOCK TABLES `ventaencabezado` WRITE;
/*!40000 ALTER TABLE `ventaencabezado` DISABLE KEYS */;
INSERT INTO `ventaencabezado` VALUES (1,'2022-11-24',8000,1,'Cedula'),(2,'2022-11-25',7000,1103858555,'Cedula');
/*!40000 ALTER TABLE `ventaencabezado` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER venta_bi BEFORE INSERT
ON ventaencabezado FOR EACH ROW  
BEGIN  
	declare fechafestiva int;
    
    select fecha into fechafestiva from festivos where fecha = new.fecha;
    
    if(dayname(new.fecha)= "Sunday" or dayname(new.fecha) = "Saturday" or 
    (dayname(new.fecha) = "Monday" and fechafestiva = new.fecha)) then
    SIGNAL SQLSTATE '45000' SET MESSAGE_TEXT = 'La empresa no vende fines de semana ni lunes festivos';
    end if;

END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping routines for database 'proyecto'
--
/*!50003 DROP PROCEDURE IF EXISTS `gestionarcategorias` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarcategorias`(poperacion int, pidcategoria int, pcategoria varchar(45))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from categorias
		  where idcategoria = pidcategoria;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  categorias
			  values(pidcategoria, pcategoria);
		  else   
			 update categorias set categoria = pcategoria  
			 where idcategoria = pidcategoria;
		 end if;  
    else
        Delete from categorias 
        where idcategoria = pidcategoria;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarcitas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarcitas`(poperacion int, pidcitas int, pcita datetime, pidcliente int, 
ptipoidentificacioncliente ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria'), pidempleado int,
ptipoidentificacionempleado ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria'))
BEGIN
Declare vnumeroregistros int;

   if (poperacion = 0) then

          Select count(1) into vnumeroregistros
          from citas
          where idcitas = pidcitas;

          if (vnumeroregistros = 0) then
             Insert Into 
              citas
              values(pidcitas, pcita, pidcliente,ptipoidentificacioncliente, pidempleado, ptipoidentificacionempleado);
          else
             update citas set cita = pcita, idcliente = pidcliente, clientes_tipoIdentificacion = ptipoidentificacioncliente, 
             idempleado = pidempleado, empleados_tipoIdentificacion = ptipoidentificacionempleado
             where idcitas = pidcitas;
         end if;
    else
        Delete from citas 
        where idcitas = pidcitas;
    end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarclientes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarclientes`(poperacion int,pidCliente int(11),
ptipoIdentificacion enum('Cedula','tarjeta de identidad','cedula de extranjeria'),pnombre varchar(45)
,papellido varchar(45),pfechaNacimiento date,ptelefonoCelular varchar(45) 
,pcorreoElectronico varchar(45) ,pdireccionResidencia varchar(45) ,preciboPublico enum('si','no') 
,pfechaNacimientoAcompañante date ,ptelefonoAcompañante varchar(45) ,pcorreoAcompañante varchar(45))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from clientes
		  where idcliente = pidcliente and tipoIdentificacion = ptipoIdentificacion;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  clientes
			  values(pidCliente,ptipoIdentificacion,pnombre,papellido,pfechaNacimiento,ptelefonoCelular
					 ,pcorreoElectronico,pdireccionResidencia,preciboPublico,pfechaNacimientoAcompañante
                     ,ptelefonoAcompañante,pcorreoAcompañante);
		  else   
			 update clientes set nombre = pnombre, apellido = papellido, fechanacimiento = pfechaNacimiento,
								 telefonocelular = ptelefonoCelular, correoelectronico = pcorreoElectronico,
                                 direccionresidencia = pdireccionResidencia, recibopublico = preciboPublico,
                                 fechanacimientoacompañante = pfechaNacimientoAcompañante, 
                                 telefonoacompañante = ptelefonoAcompañante, correoacompañante = pcorreoAcompañante
			 where idcliente = pidcliente and tipoIdentificacion = ptipoIdentificacion;
		 end if;  
    else
        Delete from clientes 
        where idcliente = pidcliente and tipoIdentificacion = ptipoIdentificacion;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarelementos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarelementos`(poperacion int, pidelemento int, pnombre varchar(45), pcosto int, pdescripcion longtext)
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from elementos
		  where idelemento = pidelemento;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  elementos
			  values(pidelemento, pnombre, pcosto, pdescripcion);
		  else   
			 update elementos set nombre = pnombre, costo = pcosto, descripcion = pdescripcion
			 where idelemento = pidelemento;
		 end if;  
    else
        Delete from elementos 
        where idelemento = pidelemento;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarempleados` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_AUTO_VALUE_ON_ZERO' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarempleados`(poperacion int,pidempleado int(11),
ptipoIdentificacion enum('Cedula','tarjeta de identidad','cedula de extranjeria'),pnombre varchar(45)
,papellido varchar(45))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from empleados
		  where idempleado = pidempleado and tipoIdentificacion = ptipoIdentificacion;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  empleados
			  values(pidempleado,ptipoIdentificacion,pnombre,papellido);
		  else   
			 update empleados set nombre = pnombre, apellido = papellido
			 where idempleado = pidempleado and tipoIdentificacion = ptipoIdentificacion;
		 end if;  
    else
        Delete from empleados 
        where idempleado = pidempleado and tipoIdentificacion = ptipoIdentificacion;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarestudios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarestudios`(poperacion int, pidestudio int, pestudio longtext, pidempleado int, 
										ptipoIdentificacion enum('Cedula','tarjeta de identidad','cedula de extranjeria'))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from estudios
		  where idestudio = pidestudio;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  estudios
			  values(pidestudio, pestudio, pidempleado, ptipoIdentificacion);
		  else   
			 update estudios set estudio = pestudio, idempleado = pidempleado, tipoIdentificacion = ptipoIdentificacion
			 where idestudio = pidestudio;
		 end if;  
    else
        Delete from estudios 
        where idestudio = pidestudio;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarexperiencias` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarexperiencias`(poperacion int, pidexperiencia int, pexperiencia longtext, pidempleado int, 
										ptipoIdentificacion enum('Cedula','tarjeta de identidad','cedula de extranjeria'))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from experiencias
		  where idexperiencia = pidexperiencia;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  experiencias
			  values(pidexperiencia, pexperiencia, pidempleado, ptipoIdentificacion);
		  else   
			 update experiencias set experiencia = pexperiencia, idempleado = pidempleado, tipoIdentificacion = ptipoIdentificacion
			 where idexperiencia = pidexperiencia;
		 end if;  
    else
        Delete from experiencias 
        where idexperiencia = pidexperiencia;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarhistoriasclinicas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarhistoriasclinicas`(poperacion int,pidHistoriaClinica int,
ppresionsistolica int(11) ,ppresiondiastolica int(11) ,ppeso int(11) ,pderivacion longtext ,pdiagnostico longtext ,
pnumeroDeSesiones int(11) ,pSesionesTotal int(11) ,pevolucion varchar(45) ,pidCliente int(11) 
,ptipoIdentificacion enum('Cedula','tarjeta de identidad','cedula de extranjeria'))
BEGIN
Declare vnumeroregistros int;
declare vhistoria int;

select idHistoriaClinica into vhistoria from historiasclinicas 
where idcliente = pidCliente and tipoIdentificacion = ptipoIdentificacion;

   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from historiasclinicas
		  where idHistoriaClinica = vhistoria;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  historiasclinicas
			  values(pidHistoriaClinica,ppresionsistolica,ppresiondiastolica,ppeso,pderivacion,pdiagnostico
					 ,pnumeroDeSesiones,pSesionesTotal,pevolucion,pidCliente,ptipoIdentificacion);
		  else   
			 update historiasclinicas set presionsistolica = ppresionsistolica, presiondiastolica = ppresiondiastolica,
								 peso = ppeso, derivacion = pderivacion, diagnostico = pdiagnostico
								,numerodesesiones = pnumeroDeSesiones, sesionestotal = pSesionesTotal
                                , evolucion = pevolucion, idcliente = pidCliente,tipoidentificacion = ptipoIdentificacion
			 where idHistoriaClinica = vhistoria;
		 end if;  
    else
        Delete from historiasclinicas 
        where idHistoriaClinica = vhistoria;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarhistoriasclinicasservicios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarhistoriasclinicasservicios`(poperacion int,pidHistoriaClinica int,pidServicio int)
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from historiasclinicasservicios
		  where idHistoriaClinica = pidHistoriaClinica and idservicio = pidServicio;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  historiasclinicasservicios
			  values(pidHistoriaClinica,pidServicio);
		  else   
			 update historiasclinicasservicios set idHistoriaClinica = pidHistoriaClinica, idservicio = pidServicio
			 where idHistoriaClinica = pidHistoriaClinica and idservicio = pidServicio;
		 end if;  
    else
        Delete from historiasclinicasservicios 
        where idHistoriaClinica = pidHistoriaClinica and idservicio = pidServicio;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarservicios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarservicios`(poperacion int, pidServicio int,pnombreServicio varchar(45),pcostoServicio int(11) 
,pdescripcionServicio longtext,ppresionsistolica int(11),ppresiondiastolica int,ppeso int,pprecio int
,pporcentajeGanancia int,pidCategoria int(11))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from servicios
		  where idServicio = pidServicio;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  servicios
			  values(pidServicio,pnombreServicio,pcostoServicio,pdescripcionServicio,ppresionsistolica,ppresiondiastolica,ppeso
					,pprecio,pporcentajeGanancia,pidCategoria);
		  else   
			 update servicios set nombreservicio = pnombreServicio,costoservicio = pcostoServicio
								,descripcionServicio = pdescripcionServicio,presionsistolica = ppresionsistolica
                                ,presiondiastolica = ppresiondiastolica,peso = ppeso,precio = pprecio
                                ,porcentajeGanancia = pporcentajeGanancia,idcategoria = pidCategoria
			 where idServicio = pidServicio;
		 end if;  
    else
        Delete from servicios 
        where idServicio = pidServicio;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarservicioselementos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarservicioselementos`(poperacion int,
pServicios_identificador int, pElementos_identificador int)
BEGIN

declare vprecio int;
declare vcosto int;
declare vporcentaje int;

if(poperacion = 0)then 

insert into servicioselementos values(pServicios_identificador,pElementos_identificador);

select sum(e.costo) into vcosto
from ServiciosElementos se, elementos e
where se.idservicio = pServicios_identificador and se.idelemento = e.idelemento;

select porcentajeGanancia into vporcentaje
from servicios
where idservicio = pServicios_identificador;

set vprecio = vcosto + (vcosto*vporcentaje)/100;

update servicios set precio = vprecio, costoServicio = vcosto
where idServicio = pServicios_identificador;

else if (poperacion = 1)then

delete from servicioselementos where idElemento = pElementos_identificador;

select sum(e.costo) into vcosto
from ServiciosElementos se, elementos e
where se.idservicio = pServicios_identificador and se.idelemento = e.idelemento;

select porcentajeGanancia into vporcentaje
from servicios
where idservicio = pServicios_identificador;

set vprecio = vcosto + (vcosto*vporcentaje)/100;

update servicios set precio = vprecio, costoServicio = vcosto
where idServicio = pServicios_identificador;

end if;

end if; 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarusuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarusuarios`(poperacion int, pcontrasena varbinary(16), pidCliente int(11), 
ptipoIdentificacionCliente enum('Cedula','tarjeta de identidad','cedula de extranjeria'), pidEmpleado int(11) 
,ptipoIdentificacionEmpleado enum('Cedula','tarjeta de identidad','cedula de extranjeria'), ptipo enum('C','P','S','A','G'))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from usuarios
		  where (idcliente = pidCliente and tipoIdentificacionCliente = ptipoIdentificacionCliente) and
          (idempleado = pidEmpleado and tipoIdentificacionEmpleado = ptipoIdentificacionEmpleado);
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  usuarios
			  values(pcontrasena,pidCliente,ptipoIdentificacionCliente,pidEmpleado,ptipoIdentificacionEmpleado,ptipo);
		  else   
			 update usuarios set contrasena = pcontrasena, idcliente = pidCliente,
             tipoIdentificacionCliente = ptipoIdentificacionCliente,idEmpleado = pidEmpleado,
             tipoIdentificacionEmpleado = ptipoIdentificacionEmpleado, tipo = ptipo 
			 where (idcliente = pidCliente and tipoIdentificacionCliente = ptipoIdentificacionCliente) and
          (idempleado = pidEmpleado and tipoIdentificacionEmpleado = ptipoIdentificacionEmpleado);
		 end if;  
    else
        Delete from usuarios 
		  where (idcliente = pidCliente and tipoIdentificacionCliente = ptipoIdentificacionCliente) and
          (idempleado = pidEmpleado and tipoIdentificacionEmpleado = ptipoIdentificacionEmpleado);
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarventadetalle` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarventadetalle`(poperacion int,pprecio int, pidventaEncabezado int, pidservicio int)
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from ventadetalle
		  where idventaEncabezado = pidventaEncabezado and idservicio = pidservicio;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  ventadetalle
			  values(pprecio, pidventaEncabezado, pidservicio);
		  else   
			 update ventadetalle set precio = pprecio, idventaEncabezado = pidventaEncabezado, idservicio = pidservicio
			 where idventaEncabezado = pidventaEncabezado and idservicio = pidservicio;
		 end if;  
    else
        Delete from ventadetalle 
        where idventaEncabezado = pidventaEncabezado and idservicio = pidservicio;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `gestionarventaencabezado` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `gestionarventaencabezado`(poperacion int, pidventaEncabezado int, pfecha date, ptotal int, pidcliente int,
ptipoIdentificacion enum('Cedula','tarjeta de identidad','cedula de extranjeria'))
BEGIN
Declare vnumeroregistros int;
   
   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from ventaencabezado
		  where idventaEncabezado = pidventaEncabezado;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  ventaencabezado
			  values(pidventaEncabezado, pfecha, ptotal, pidcliente,ptipoIdentificacion);
		  else   
			 update ventaencabezado set fecha = pfecha,total = ptotal,idcliente= pidcliente,tipoIdentificacion = ptipoIdentificacion
			 where idventaEncabezado = pidventaEncabezado;
		 end if;  
    else
        Delete from ventaencabezado 
        where idventaEncabezado = pidventaEncabezado;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-25 12:55:27
