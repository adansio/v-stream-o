-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2012 a las 05:03:42
-- Versión del servidor: 5.1.41
-- Versión de PHP: 5.3.2-1ubuntu4.18

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `project`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `administrador`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig-prof`
--

CREATE TABLE IF NOT EXISTS `asig-prof` (
  `mail_prof` varchar(50) NOT NULL,
  `cod_asignatura` varchar(10) NOT NULL,
  PRIMARY KEY (`mail_prof`,`cod_asignatura`),
  KEY `cod_asignatura` (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `asig-prof`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE IF NOT EXISTS `asignatura` (
  `cod_asignatura` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cod_depto` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_asignatura`),
  KEY `cod_depto` (`cod_depto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `asignatura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `cod_carrera` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cod_depto` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_carrera`),
  KEY `cod_depto` (`cod_depto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `carrera`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_depto` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_depto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `departamento`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `id_hist` bigint(20) NOT NULL,
  `mail_al` varchar(50) NOT NULL,
  `id_video` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_hist`),
  KEY `mail` (`mail_al`,`id_video`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `historial`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id` bigint(10) NOT NULL,
  `mail_al` varchar(50) NOT NULL,
  `cod_asignatura` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mail_al` (`mail_al`),
  KEY `cod_asignatura` (`cod_asignatura`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `inscripcion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `mail_prof` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rut` varchar(9) NOT NULL COMMENT 'rut sin guion ni puntos',
  `oficina` varchar(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `about` mediumtext NOT NULL,
  PRIMARY KEY (`mail_prof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `profesor`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `mail_al` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rol` int(10) NOT NULL,
  `cod_carrera` varchar(10) NOT NULL,
  PRIMARY KEY (`mail_al`),
  KEY `cod_carrera` (`cod_carrera`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `usuario`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` bigint(20) NOT NULL,
  `mail_prof` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id_video`),
  KEY `mail_prof` (`mail_prof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `video`
--

