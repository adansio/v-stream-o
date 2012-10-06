-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2012 a las 01:10:31
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asig-prof`
--

CREATE TABLE IF NOT EXISTS `asig-prof` (
  `mail` varchar(50) NOT NULL,
  `cod_asignatura` varchar(10) NOT NULL,
  PRIMARY KEY (`mail`,`cod_asignatura`),
  KEY `cod_asignatura` (`cod_asignatura`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `cod_carrera` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cod_depto` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_carrera`),
  KEY `cod_depto` (`cod_depto`),
  KEY `cod_depto_2` (`cod_depto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_depto` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_depto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `id_hist` bigint(20) unsigned NOT NULL,
  `mail` varchar(50) NOT NULL,
  `id_video` bigint(20) NOT NULL,
  `fecha` datetime NOT NULL,
  PRIMARY KEY (`id_hist`),
  KEY `mail` (`mail`,`id_video`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `mail` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rut` varchar(9) NOT NULL,
  `oficina` varchar(10) NOT NULL,
  `telefono` int(10) NOT NULL,
  `about` text NOT NULL,
  PRIMARY KEY (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rol` int(10) NOT NULL,
  `cod_carrera` varchar(10) NOT NULL,
  PRIMARY KEY (`mail`),
  KEY `cod_carrera` (`cod_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id_video` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `duracion` varchar(10) NOT NULL,
  `descripcion` text NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id_video`),
  UNIQUE KEY `id` (`id_video`),
  UNIQUE KEY `id_2` (`id_video`),
  KEY `mail` (`mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asig-prof`
--
ALTER TABLE `asig-prof`
  ADD CONSTRAINT `asig@002dprof_ibfk_2` FOREIGN KEY (`cod_asignatura`) REFERENCES `asignatura` (`cod_asignatura`),
  ADD CONSTRAINT `asig@002dprof_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `profesor` (`mail`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`cod_depto`) REFERENCES `departamento` (`cod_depto`);

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`cod_depto`) REFERENCES `departamento` (`cod_depto`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `usuario` (`mail`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cod_carrera`) REFERENCES `carrera` (`cod_carrera`);

--
-- Filtros para la tabla `video`
--
ALTER TABLE `video`
  ADD CONSTRAINT `video_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `profesor` (`mail`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
