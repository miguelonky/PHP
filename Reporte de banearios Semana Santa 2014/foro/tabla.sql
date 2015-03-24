-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-07-2011 a las 23:58:15
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de datos: `usuarios1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foro1`
--

CREATE TABLE IF NOT EXISTS `foro1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha` int(11) NOT NULL,
  `respuestas` int(11) NOT NULL,
  `identificador` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `foro1`
--

INSERT INTO `foro1` (`id`, `autor`, `titulo`, `mensaje`, `fecha`, `respuestas`, `identificador`) VALUES
(1, 'Daniel', 'Pelicula', 'me gusto la pelicula de Transformers', 1310168478, 1, 0),
(2, 'Roberto', 'Si', 'a mi me gusto mucho tambien', 1310168502, 0, 1);
