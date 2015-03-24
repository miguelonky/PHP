-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-04-2014 a las 16:23:35
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `articulos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `articulo` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `validar` tinyint(1) NOT NULL DEFAULT '0',
  `autor` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barneario`
--

CREATE TABLE IF NOT EXISTS `barneario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baneario` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `tipo` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `barneario`
--

INSERT INTO `barneario` (`id`, `baneario`, `lugar`, `tipo`) VALUES
(1, 'LITORAL COSTERO AVENIDA ESPAÑA/LAS AMERICAS', 'MUNICIPIO ESTE', 5),
(2, 'MANANTIAL HIPODROMO V CENTENARIO', 'MUNICIPIO ESTE', 5),
(3, 'PLAYA MAROTA', 'SAN PEDRO DE MACORIS', 0),
(4, 'PLAYA LA CALLENA', 'NAGUA', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `fotoId` int(11) NOT NULL AUTO_INCREMENT,
  `crimenId` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`fotoId`),
  KEY `FK_fotos` (`crimenId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapa`
--

CREATE TABLE IF NOT EXISTS `mapa` (
  `mapaId` int(11) NOT NULL AUTO_INCREMENT,
  `ubicacion` varchar(200) NOT NULL,
  `aprobado` tinyint(1) NOT NULL DEFAULT '0',
  `ubicacionTxt` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`mapaId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trajedia`
--

CREATE TABLE IF NOT EXISTS `trajedia` (
  `trajediaId` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ubicacion` varchar(200) NOT NULL,
  `aprobado` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trajediaId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `clave`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'user', 'user1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
