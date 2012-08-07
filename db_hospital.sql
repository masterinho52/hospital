-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-08-2012 a las 17:15:56
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
  `numero_expediente_adulto` varchar(12) NOT NULL,
  `fechan_adulto` date NOT NULL,
  `estadocivil_adulto` enum('CASADO(A)','CONCUBINO(A)','DIVORCIADO(A)','SOLTERO(A)','VIUDO(A)') NOT NULL,
  `lugarn_adulto` varchar(50) DEFAULT NULL,
  `direccion_adulto` text NOT NULL,
  `telefono_adulto` varchar(12) DEFAULT NULL,
  `sexo_adulto` enum('MASCULINO','FEMENINO') NOT NULL,
  `fechai_adulto` date NOT NULL,
  `instruccion_adulto` enum('INGENIERO','INGENIERA','LICENCIADO','LICENCIADA','T.S.U.','TEC.','BACHILLER','BÁSICA') NOT NULL,
  `ocupacion_adulto` enum('AMA DE CASA','ESTUDIA','TRABAJA','SIN OFICIO') NOT NULL,
  `comunal_adulto` varchar(50) NOT NULL,
  `id_representante` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_adulto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_adulto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_adulto`
--

INSERT INTO `tbl_adulto` (`id_adulto`, `cedula_adulto`, `nombre_adulto`, `apellido_adulto`, `numero_expediente_adulto`, `fechan_adulto`, `estadocivil_adulto`, `lugarn_adulto`, `direccion_adulto`, `telefono_adulto`, `sexo_adulto`, `fechai_adulto`, `instruccion_adulto`, `ocupacion_adulto`, `comunal_adulto`, `id_representante`, `id_usuario`, `fregistro_adulto`) VALUES
(2, '1234567', 'PABLO', 'ZAMORA', 'HOF-34535', '2012-08-03', 'CASADO(A)', 'VALERA EDO TRUJILLO', 'URBANIZACIÓN LAS ACACIAS, CALLE 18 CON AVENIDA 6, CASA #15-545, VALERA EDO TRUJILLO', '04241234567', 'MASCULINO', '2012-08-24', 'T.S.U.', 'ESTUDIA', 'LAS ACACIAS', 1, 1, '2012-08-02 21:44:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cargo`
--

CREATE TABLE IF NOT EXISTS `tbl_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cargo` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_cargo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id_cargo`, `nombre_cargo`, `id_usuario`, `fregistro_cargo`) VALUES
(11, 'TRABAJADOR SOCIAL', 1, '2012-08-01 15:23:21'),
(12, 'DIRECTOR', 1, '2012-08-01 15:23:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_departamento`
--

CREATE TABLE IF NOT EXISTS `tbl_departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_departamento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`id_departamento`, `nombre_departamento`, `id_usuario`, `fregistro_departamento`) VALUES
(9, 'TRABAJO SOCIAL', 1, '2012-08-01 15:24:32'),
(10, 'DIRECCIÓN', 1, '2012-08-01 15:24:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_grupo_familiar`
--

CREATE TABLE IF NOT EXISTS `tbl_grupo_familiar` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_grupo` varchar(12) NOT NULL,
  `nombre_grupo` varchar(50) NOT NULL,
  `apellido_grupo` varchar(50) NOT NULL,
  `fechan_grupo` date NOT NULL,
  `sexo_grupo` enum('MASCULINO','FEMENINO') NOT NULL,
  `instruccion_grupo` enum('INGENIERO','INGENIERA','LICENCIADO','LICENCIADA','T.S.U.','TEC.','BACHILLER','BÁSICA') NOT NULL,
  `ocupacion_grupo` enum('AMA DE CASA','ESTUDIA','TRABAJA','SIN OFICIO') NOT NULL,
  `ingreso_grupo` varchar(12) NOT NULL,
  `aporte_grupo` varchar(12) NOT NULL,
  `direccion_grupo` text NOT NULL,
  `telefono_grupo` varchar(12) NOT NULL,
  `parentesco_grupo` enum('PADRE','MADRE','PADRINO','MADRINA','TIO','TIA','HERMANO','HERMANA','SOBRINO','SOBRINA','AHIJADO','AHIJADA') NOT NULL,
  `id_adulto` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_grupo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_grupo_familiar`
--

INSERT INTO `tbl_grupo_familiar` (`id_grupo`, `cedula_grupo`, `nombre_grupo`, `apellido_grupo`, `fechan_grupo`, `sexo_grupo`, `instruccion_grupo`, `ocupacion_grupo`, `ingreso_grupo`, `aporte_grupo`, `direccion_grupo`, `telefono_grupo`, `parentesco_grupo`, `id_adulto`, `id_usuario`, `fregistro_grupo`) VALUES
(1, '23456789', 'JOSE', 'SANCHEZ', '1972-02-15', 'MASCULINO', 'INGENIERO', 'AMA DE CASA', '2560', 'NINGUNO', '<P>AVENIDA 13 CON CALLE 15, CASA #14-64, VALERA EDO. TRUJILLO</P>', '04161234567', 'HERMANO', 2, 1, '2012-08-03 20:46:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_personal`
--

CREATE TABLE IF NOT EXISTS `tbl_personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_personal` varchar(12) NOT NULL,
  `nombre_personal` varchar(50) NOT NULL,
  `apellido_personal` varchar(50) NOT NULL,
  `instruccion_personal` enum('LCDO.','LCDA.','T.S.U.','TEC.','BACHILLER.') NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_personal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tbl_personal`
--

INSERT INTO `tbl_personal` (`id_personal`, `cedula_personal`, `nombre_personal`, `apellido_personal`, `instruccion_personal`, `id_cargo`, `id_departamento`, `id_usuario`, `fregistro_personal`) VALUES
(1, '16882039', 'LEONARDO ', 'SUÁREZ', 'T.S.U.', 11, 9, 1, '2012-08-01 15:25:26'),
(2, '10426485', 'JHONMER', 'BENCOMO', 'LCDO.', 12, 10, 1, '2012-08-01 15:25:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_representante`
--

CREATE TABLE IF NOT EXISTS `tbl_representante` (
  `id_representante` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_representante` varchar(12) NOT NULL,
  `nombre_representante` varchar(50) NOT NULL,
  `apellido_representante` varchar(50) NOT NULL,
  `sexo_representante` enum('MASCULINO','FEMENINO') NOT NULL,
  `fechan_representante` date NOT NULL,
  `estadocivil_representante` enum('CASADO(A)','CONCUBINO(A)','DIVORCIADO(A)','SOLTERO(A)','VIUDO(A)') NOT NULL,
  `lugarn_representante` varchar(50) NOT NULL,
  `direccion_representante` text NOT NULL,
  `parentesco_representante` enum('PADRE','MADRE','PADRINO','MADRINA','TIO','TIA','HERMANO','HERMANA','SOBRINO','SOBRINA','AHIJADO','AHIJADA') NOT NULL,
  `telefono_representante` varchar(12) NOT NULL,
  `profesion_representante` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fregistro_representante` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_representante`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tbl_representante`
--

INSERT INTO `tbl_representante` (`id_representante`, `cedula_representante`, `nombre_representante`, `apellido_representante`, `sexo_representante`, `fechan_representante`, `estadocivil_representante`, `lugarn_representante`, `direccion_representante`, `parentesco_representante`, `telefono_representante`, `profesion_representante`, `id_usuario`, `fregistro_representante`) VALUES
(1, '2345678', 'PETRONILO', 'SINFOROSO', 'MASCULINO', '2012-08-21', 'DIVORCIADO(A)', 'TRUJILLO EDO. TRUJILLO', 'URB. LA BEATRIZ, BLOQUE 40, APTO 3C PISO 3', 'HERMANA', '26556565', 'NINGUNA', 1, '2012-08-16 04:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_usuario` varchar(12) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `tipo_usuario` enum('Administrador','Supervisor','Usuario') NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `password_confirmacion` varchar(50) NOT NULL,
  `fregistro_usuario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `cedula_usuario`, `nombre_usuario`, `tipo_usuario`, `login`, `password`, `password_confirmacion`, `fregistro_usuario`) VALUES
(1, '17', 'Marcos Orozco', 'Administrador', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2012-07-23 14:49:26'),
(3, '123456', 'USUARIO DOS', 'Supervisor', 'usuario', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2012-07-27 15:25:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
