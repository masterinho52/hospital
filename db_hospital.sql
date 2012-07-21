-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-07-2012 a las 14:03:09
-- Versión del servidor: 5.5.24
-- Versión de PHP: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `db_hospital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_adulto`
--

CREATE TABLE IF NOT EXISTS `tbl_adulto` (
  `id_adulto` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_adulto` varchar(12) NOT NULL,
  `nombre_adulto` varchar(50) NOT NULL,
  `apellido_adulto` varchar(50) NOT NULL,
  `fechan_adulto` date NOT NULL,
  `lugarn_adulto` varchar(50) NOT NULL,
  `direccion_adulto` text NOT NULL,
  `telefono_adulto` varchar(12) NOT NULL,
  `sexo_adulto` varchar(10) NOT NULL,
  `fechai_adulto` date NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_adulto` datetime NOT NULL,
  PRIMARY KEY (`id_adulto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cargo`
--

CREATE TABLE IF NOT EXISTS `tbl_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cargo` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_cargo` datetime NOT NULL,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id_cargo`, `nombre_cargo`, `id_usuario`, `fregistro_cargo`) VALUES
(1, 'CONTADOR', 1, '2012-07-20 16:32:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE IF NOT EXISTS `tbl_departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_departamento` datetime NOT NULL,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupo_familiar`
--

CREATE TABLE IF NOT EXISTS `tbl_grupo_familiar` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_grupo` varchar(12) NOT NULL,
  `nombre_grupo` varchar(50) NOT NULL,
  `apellido_grupo` varchar(50) NOT NULL,
  `direccion_grupo` text NOT NULL,
  `telefono_grupo` varchar(12) NOT NULL,
  `representante_grupo` varchar(1) NOT NULL,
  `parentesco_grupo` varchar(50) NOT NULL,
  `id_adulto` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_grupo` datetime NOT NULL,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personal`
--

CREATE TABLE IF NOT EXISTS `tbl_personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_personal` varchar(12) NOT NULL,
  `nombre_personal` varchar(50) NOT NULL,
  `apellido_personal` varchar(50) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id_personal`, `cedula_personal`, `nombre_personal`, `apellido_personal`, `id_cargo`, `id_departamento`) VALUES
(1, 'V-10226656', 'JONHMER', 'BENCOMO', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_usuario` varchar(12) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `tipo_usuario` enum('Admin','Supervisor','Usuario') NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `cedula_usuario`, `nombre_usuario`, `tipo_usuario`, `login`, `password`) VALUES
(1, 'V-1688039', 'LEONARDO SUAREZ', 'Supervisor', '16882039', '45226bae7da31547fbdca1c62d24a8dd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
