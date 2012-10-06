-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-10-2012 a las 18:40:49
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE IF NOT EXISTS `alumno` (
  `mail_al` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `rol` int(10) NOT NULL,
  `cod_carrera` varchar(10) NOT NULL,
  PRIMARY KEY (`mail_al`),
  KEY `cod_carrera` (`cod_carrera`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`mail_al`, `password`, `nombre`, `rol`, `cod_carrera`) VALUES
('adan.morales@alumnos.usm.cl', 'wena', 'adan patricio morales cabrera', 28300425, '3000'),
('langelog@me.com', 'wena-wena', 'Luis González', 29300097, '3000');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`cod_carrera`, `nombre`, `cod_depto`) VALUES
('3000', 'ING CIVIL TELEMATICA', 'ELO'),
('3199', 'ING CIVIL ELECTRONICA', 'ELO'),
('4199', 'ING CIVIL MECANICA', 'MEC'),
('4310', 'ING MECANICA INDUSTRIAL', 'MEC'),
('5199', 'ING CIVIL QUIMICA', 'QUI'),
('7399', 'ING CIVIL INFORMATICA', 'INF'),
('7405', 'ING EJEC INFORMATICA', 'INF'),
('8305', 'ING AMBIENTAL', 'QUI');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `cod_depto` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_depto`),
  KEY `cod_depto` (`cod_depto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`cod_depto`, `nombre`) VALUES
('ARQ', 'ARQUITECTURA'),
('CIV', 'OBRAS CIVILES'),
('DEW', 'DEFIDER'),
('ELI', 'ELECTRICIDAD'),
('ELO', 'ELECTRONICA'),
('FIS', 'FISICA'),
('IND', 'INDUSTRIAS'),
('INF', 'INFORMATICA'),
('MAT', 'MATEMATICA'),
('MEC', 'MECANICA'),
('QUI', 'QUIMICA');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE IF NOT EXISTS `inscripcion` (
  `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `mail_al` varchar(50) NOT NULL,
  `cod_ramo` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mail_al` (`mail_al`),
  KEY `cod_asignatura` (`cod_ramo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `mail_al`, `cod_ramo`) VALUES
(2, 'adan.morales@alumnos.usm.cl', 'TEL-332');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`mail_prof`, `nombre`, `rut`, `oficina`, `telefono`, `about`) VALUES
('cesar.hernandez@usm.cl', 'cesar hernandez', '123456789', 'porahi', 987654321, 'wena cabros!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramo`
--

CREATE TABLE IF NOT EXISTS `ramo` (
  `cod_ramo` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cod_depto` varchar(10) NOT NULL,
  PRIMARY KEY (`cod_ramo`),
  KEY `cod_depto` (`cod_depto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ramo`
--

INSERT INTO `ramo` (`cod_ramo`, `nombre`, `cod_depto`) VALUES
('ELO-212', 'LABORATORIO DE SISTEMAS DIGITALES', 'ELO'),
('ELO-250', 'CAMPOS ELECTROMAGNETICOS', 'ELO'),
('ELO-328', 'PROCESAMIENTO DIGITAL DE IMAGENES', 'ELO'),
('ILI-239', 'BASES DE DATOS', 'INF'),
('ILI-245', 'ARQUITECTURA DE COMPUTADORES', 'INF'),
('ILI-253', 'LENGUAJES DE PROGRAMACION', 'INF'),
('INF-343', 'SISTEMAS DISTRIBUIDOS', 'INF'),
('TEL-241', 'LABORATORIO DE REDES DE COMPUTADORES I', 'ELO'),
('TEL-332', 'MULTIMEDIOS', 'ELO'),
('TEL-341', 'SIMULACION DE REDES', 'ELO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramo_profe`
--

CREATE TABLE IF NOT EXISTS `ramo_profe` (
  `mail_prof` varchar(50) NOT NULL,
  `cod_ramo` varchar(10) NOT NULL,
  PRIMARY KEY (`mail_prof`,`cod_ramo`),
  KEY `cod_asignatura` (`cod_ramo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ramo_profe`
--

INSERT INTO `ramo_profe` (`mail_prof`, `cod_ramo`) VALUES
('cesar.hernandez@usm.cl', 'TEL-332');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `video`
--

INSERT INTO `video` (`id_video`, `mail_prof`, `nombre`, `duracion`, `descripcion`, `link`) VALUES
(1, 'cesar.hernandez@usm.cl', 'stream', '2:05', 'wena cabros!', '~/var/www/videos');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`cod_carrera`) REFERENCES `carrera` (`cod_carrera`);

--
-- Filtros para la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD CONSTRAINT `carrera_ibfk_1` FOREIGN KEY (`cod_depto`) REFERENCES `departamento` (`cod_depto`);

--
-- Filtros para la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD CONSTRAINT `inscripcion_ibfk_1` FOREIGN KEY (`mail_al`) REFERENCES `alumno` (`mail_al`),
  ADD CONSTRAINT `inscripcion_ibfk_2` FOREIGN KEY (`cod_ramo`) REFERENCES `ramo` (`cod_ramo`);

--
-- Filtros para la tabla `ramo`
--
ALTER TABLE `ramo`
  ADD CONSTRAINT `ramo_ibfk_1` FOREIGN KEY (`cod_depto`) REFERENCES `departamento` (`cod_depto`);

--
-- Filtros para la tabla `ramo_profe`
--
ALTER TABLE `ramo_profe`
  ADD CONSTRAINT `ramo_profe_ibfk_1` FOREIGN KEY (`mail_prof`) REFERENCES `profesor` (`mail_prof`),
  ADD CONSTRAINT `ramo_profe_ibfk_2` FOREIGN KEY (`cod_ramo`) REFERENCES `ramo` (`cod_ramo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
