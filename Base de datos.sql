-- MySQL dump 10.13  Distrib 5.6.17, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: comercio
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `almacen`
--

DROP TABLE IF EXISTS `almacen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `almacen` (
  `idAlmacen` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAlmacen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `articulos`
--

DROP TABLE IF EXISTS `articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articulos` (
  `ARTICULO_ID` int(11) NOT NULL,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `CLAVE` varchar(45) DEFAULT NULL,
  `PRECIODELISTA` float DEFAULT NULL,
  `EXISTENCIA` int(11) DEFAULT NULL,
  `FECHA_HORA_ULT_MODIF` date DEFAULT NULL,
  `LINEA_ARTICULO_ID` int(11) DEFAULT NULL,
  `IMAGEN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ARTICULO_ID`),
  UNIQUE KEY `CLAVE_UNIQUE` (`CLAVE`),
  KEY `articulo_linea_idx` (`LINEA_ARTICULO_ID`),
  CONSTRAINT `articulo_linea` FOREIGN KEY (`LINEA_ARTICULO_ID`) REFERENCES `lineas_articulos` (`LINEA_ARTICULO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ciudad`
--

DROP TABLE IF EXISTS `ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudad` (
  `idCiudad` int(11) NOT NULL AUTO_INCREMENT,
  `Ciudad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCiudad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(45) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `zonacliente` varchar(45) DEFAULT NULL,
  `estado_id` int(11) DEFAULT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `notas` varchar(90) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  KEY `estado_cliente_idx` (`estado_id`),
  KEY `ciudad_cliente_idx` (`ciudad_id`),
  CONSTRAINT `ciudad_cliente` FOREIGN KEY (`ciudad_id`) REFERENCES `ciudad` (`idCiudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `estado_cliente` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`idEstado`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL AUTO_INCREMENT,
  `Estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idEstado`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `forma_pago`
--

DROP TABLE IF EXISTS `forma_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forma_pago` (
  `idForma_Pago` int(11) NOT NULL AUTO_INCREMENT,
  `FormaDePago` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idForma_Pago`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `grupos_articulos`
--

DROP TABLE IF EXISTS `grupos_articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupos_articulos` (
  `idGRUPOS_ARTICULOS` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `FECHA_HORA_ULT_MODIF` date DEFAULT NULL,
  PRIMARY KEY (`idGRUPOS_ARTICULOS`)
) ENGINE=InnoDB AUTO_INCREMENT=1301 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `lineas_articulos`
--

DROP TABLE IF EXISTS `lineas_articulos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lineas_articulos` (
  `LINEA_ARTICULO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(45) DEFAULT NULL,
  `GRUPO_LINEA_ID` int(11) DEFAULT NULL,
  `FECHA_HORA_ULT_MODIF` date DEFAULT NULL,
  PRIMARY KEY (`LINEA_ARTICULO_ID`),
  KEY `Lineas-Grupos_idx` (`GRUPO_LINEA_ID`),
  CONSTRAINT `Lineas-Grupos` FOREIGN KEY (`GRUPO_LINEA_ID`) REFERENCES `grupos_articulos` (`idGRUPOS_ARTICULOS`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1324 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pedidosdetalle`
--

DROP TABLE IF EXISTS `pedidosdetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosdetalle` (
  `DOCTO_ID_PEDIDO` int(11) NOT NULL AUTO_INCREMENT,
  `CLAVE_ART` varchar(45) DEFAULT NULL,
  `ARTICULO_ID` int(11) DEFAULT NULL,
  `unidades` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `POSICION` varchar(45) DEFAULT NULL,
  `TIPO_DOCUMENTO` varchar(45) DEFAULT NULL,
  `NOMBREU` varchar(45) DEFAULT NULL,
  `DESCUENTO` float DEFAULT NULL,
  `OBSERVACIONES` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`DOCTO_ID_PEDIDO`),
  KEY `pedido_articulo_idx` (`CLAVE_ART`,`ARTICULO_ID`),
  CONSTRAINT `pedido_articulo` FOREIGN KEY (`CLAVE_ART`, `ARTICULO_ID`) REFERENCES `articulos` (`CLAVE`, `ARTICULO_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `pedidosencabezado`
--

DROP TABLE IF EXISTS `pedidosencabezado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pedidosencabezado` (
  `idPedidosEncabezado` int(11) NOT NULL AUTO_INCREMENT,
  `clave_cliente` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `descuento` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `NOMBREU` varchar(45) DEFAULT NULL,
  `ALMACEN_ID` int(11) DEFAULT NULL,
  `ANTICIPO` float DEFAULT NULL,
  `TIPO_DOCUMENTO` varchar(45) DEFAULT NULL,
  `FORMA_COBRO_ID` int(11) DEFAULT NULL,
  `FACTURA` varchar(45) DEFAULT NULL,
  `observacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPedidosEncabezado`),
  KEY `pedido_idx` (`ALMACEN_ID`),
  KEY `pedido_pago_idx` (`FORMA_COBRO_ID`),
  KEY `pedido_cliente_idx` (`cliente_id`),
  KEY `pedido_cliente_idx1` (`cliente_id`,`clave_cliente`),
  KEY `pedido_cliente_idx2` (`clave_cliente`),
  CONSTRAINT `pedido_almacen` FOREIGN KEY (`ALMACEN_ID`) REFERENCES `almacen` (`idAlmacen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pedido_cliente` FOREIGN KEY (`clave_cliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `pedido_pago` FOREIGN KEY (`FORMA_COBRO_ID`) REFERENCES `forma_pago` (`idForma_Pago`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-24 21:37:49
