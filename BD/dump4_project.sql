-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-10-2012 a las 23:00:08
-- Versión del servidor: 5.5.24-0ubuntu0.12.04.1
-- Versión de PHP: 5.3.10-1ubuntu3.4

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
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `id` varchar(5) NOT NULL COMMENT 'cod_carrera',
  `nombre` varchar(50) NOT NULL,
  `departamento_id` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `departamento_id` (`departamento_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `nombre`, `departamento_id`) VALUES
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
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` varchar(10) NOT NULL COMMENT 'cod_depto',
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `nombre`) VALUES
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
-- Estructura de tabla para la tabla `historiales`
--

CREATE TABLE IF NOT EXISTS `historiales` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id_de_historial',
  `video_id` bigint(20) unsigned NOT NULL,
  `fecha` datetime NOT NULL,
  `user_username` varchar(50) NOT NULL COMMENT 'nombre_de_usario_que_ve_video',
  PRIMARY KEY (`id`),
  KEY `video_id` (`video_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramo-users`
--

CREATE TABLE IF NOT EXISTS `ramo-users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(10) unsigned NOT NULL COMMENT 'id_de_usuario',
  `ramo_id` varchar(10) CHARACTER SET latin1 NOT NULL COMMENT 'cod_ramo',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `ramo_id` (`ramo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ramos`
--

CREATE TABLE IF NOT EXISTS `ramos` (
  `id` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL COMMENT 'nobre_ramo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ramos`
--

INSERT INTO `ramos` (`id`, `nombre`) VALUES
('ELO-212', 'LABORATORIO DE SISTEMAS DIGITALES'),
('ELO-250', 'CAMPOS ELECTROMAGNETICOS'),
('ELO-328', 'PROCESAMIENTO DIGITAL DE IMAGENES'),
('ILI-239', 'BASES DE DATOS'),
('ILI-245', 'ARQUITECTURA DE COMPUTADORES'),
('ILI-253', 'LENGUAJES DE PROGRAMACION'),
('INF-343', 'SISTEMAS DISTRIBUIDOS'),
('TEL-241', 'LABORATORIO DE REDES DE COMPUTADORES I'),
('TEL-332', 'MULTIMEDIOS'),
('TEL-341', 'SIMULACION DE REDES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'mail_usuario',
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'nombre_usuario',
  `rut` varchar(9) CHARACTER SET latin1 NOT NULL,
  `rol` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `tipo` int(1) NOT NULL COMMENT '0:profe , 1:alumno , 2:admin',
  `carrera_id` varchar(10) CHARACTER SET latin1 NOT NULL,
  `oficina` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `about` text CHARACTER SET latin1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `carrera_id` (`carrera_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nombre`, `rut`, `rol`, `tipo`, `carrera_id`, `oficina`, `about`) VALUES
(1, 'coteto', '362688fa0b400e7f9dc94a0c225a53c211b4eded', 'jose', '4444', '76', 1, '7405', '', ''),
(2, 'jorquera', '362688fa0b400e7f9dc94a0c225a53c211b4eded', 'jose', '4567', '', 0, '7405', '87', 'uhjik'),
(4, 'antonio', '362688fa0b400e7f9dc94a0c225a53c211b4eded', 'jose', '123', '', 2, '7405', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(10) unsigned NOT NULL,
  `nombre` varchar(50) NOT NULL COMMENT 'nombre_video',
  `duracion` varchar(10) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD CONSTRAINT `carreras_ibfk_1` FOREIGN KEY (`departamento_id`) REFERENCES `departamentos` (`id`);

--
-- Filtros para la tabla `historiales`
--
ALTER TABLE `historiales`
  ADD CONSTRAINT `historiales_ibfk_1` FOREIGN KEY (`video_id`) REFERENCES `videos` (`id`);

--
-- Filtros para la tabla `ramo-users`
--
ALTER TABLE `ramo-users`
  ADD CONSTRAINT `ramo@002dusers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `ramo@002dusers_ibfk_2` FOREIGN KEY (`ramo_id`) REFERENCES `ramos` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`);

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
