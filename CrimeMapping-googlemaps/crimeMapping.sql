/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.24-log : Database - crimemapping
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`crimemapping` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crimemapping`;

/*Table structure for table `crimenes` */

DROP TABLE IF EXISTS `crimenes`;

CREATE TABLE `crimenes` (
  `crimenId` int(11) NOT NULL AUTO_INCREMENT,
  `detalles` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `aprobado` tinyint(1) NOT NULL DEFAULT '0',
  `ubicacionTxt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`crimenId`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

/*Data for the table `crimenes` */

insert  into `crimenes`(`crimenId`,`detalles`,`fecha`,`ubicacion`,`aprobado`,`ubicacionTxt`) values (26,'Ejemplo valido','2014-03-12','(18.5204892, -69.82260250000002)',0,'Invimosa, calle E, Santo Domingo, RepÃºblica Dominicana'),(35,'Robo de autos.  Los ladrones etan utilizando metodos mas sofisticados para el robo de vehiculos. mas informacion en el Listin Diario.','2014-03-21','(18.5038087, -69.82251339999999)',1,'Villa Carmen, Santo Domingo Este. R.D.'),(41,'Asesinaron a alguien.','2014-03-25','(18.5180864, -69.82104420000002)',1,'Calle e, Invimosa, Santo Domingo Este'),(43,'Asesinato','2014-03-22','(18.5129601, -69.82046589999999)',1,'Parque de Invivienda, Santo Domingo Este'),(44,'Crimen','2014-03-20','(18.5084192, -69.86504539999999)',1,'Los mina, santo domingo Este');

/*Table structure for table `fotos` */

DROP TABLE IF EXISTS `fotos`;

CREATE TABLE `fotos` (
  `fotoId` int(11) NOT NULL AUTO_INCREMENT,
  `crimenId` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`fotoId`),
  KEY `FK_fotos` (`crimenId`),
  CONSTRAINT `FK_fotos` FOREIGN KEY (`crimenId`) REFERENCES `crimenes` (`crimenId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `fotos` */

insert  into `fotos`(`fotoId`,`crimenId`,`nombre`) values (28,35,'nfs.jpg'),(29,35,'nfsC.png'),(30,35,'nfscop.jpg'),(32,41,'crimen-300x300.jpg'),(33,43,'crimen-300x300.jpg'),(34,44,'crimen-300x300.jpg');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unq_usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`clave`) values (2,'abi','202cb962ac59075b964b07152d234b70'),(4,'abo','202cb962ac59075b964b07152d234b70'),(6,'abe','250cf8b51c773f3f8dc8b4be867a9a02'),(8,'adamix','202cb962ac59075b964b07152d234b70');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
