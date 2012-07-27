-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2012 at 11:24 AM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adulto`
--

CREATE TABLE IF NOT EXISTS `tbl_adulto` (
  `id_adulto` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_adulto` varchar(12) NOT NULL,
  `nombre_adulto` varchar(50) NOT NULL,
  `apellido_adulto` varchar(50) NOT NULL,
  `fechan_adulto` date NOT NULL,
  `lugarn_adulto` varchar(50) DEFAULT NULL,
  `direccion_adulto` text NOT NULL,
  `telefono_adulto` varchar(12) DEFAULT NULL,
  `sexo_adulto` enum('MASCULINO','FEMENINO') NOT NULL,
  `fechai_adulto` date NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_adulto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_adulto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_adulto`
--

INSERT INTO `tbl_adulto` (`id_adulto`, `cedula_adulto`, `nombre_adulto`, `apellido_adulto`, `fechan_adulto`, `lugarn_adulto`, `direccion_adulto`, `telefono_adulto`, `sexo_adulto`, `fechai_adulto`, `id_usuario`, `fregistro_adulto`) VALUES
(4, '123456', 'MARCOS', 'OROZCO', '1935-07-24', 'TRUJILLO', '<P>TRUJILLO</P>', '8732463', 'MASCULINO', '2011-02-15', 1, '2012-07-27 15:27:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cargo`
--

CREATE TABLE IF NOT EXISTS `tbl_cargo` (
  `id_cargo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cargo` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_cargo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cargo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id_cargo`, `nombre_cargo`, `id_usuario`, `fregistro_cargo`) VALUES
(10, 'CARGO', 1, '2012-07-27 15:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departamento`
--

CREATE TABLE IF NOT EXISTS `tbl_departamento` (
  `id_departamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_departamento` varchar(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_departamento` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_departamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`id_departamento`, `nombre_departamento`, `id_usuario`, `fregistro_departamento`) VALUES
(8, 'DEPARTAMENTO XXXXXXXXX', 1, '2012-07-27 15:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grupo_familiar`
--

CREATE TABLE IF NOT EXISTS `tbl_grupo_familiar` (
  `id_grupo` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_grupo` varchar(12) NOT NULL,
  `nombre_grupo` varchar(50) NOT NULL,
  `apellido_grupo` varchar(50) NOT NULL,
  `direccion_grupo` text NOT NULL,
  `telefono_grupo` varchar(12) NOT NULL,
  `representante_grupo` enum('SI','NO') NOT NULL DEFAULT 'SI',
  `parentesco_grupo` varchar(50) NOT NULL,
  `familiar_grupo` enum('SI','NO') NOT NULL DEFAULT 'SI',
  `id_adulto` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_grupo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_grupo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_grupo_familiar`
--

INSERT INTO `tbl_grupo_familiar` (`id_grupo`, `cedula_grupo`, `nombre_grupo`, `apellido_grupo`, `direccion_grupo`, `telefono_grupo`, `representante_grupo`, `parentesco_grupo`, `familiar_grupo`, `id_adulto`, `id_usuario`, `fregistro_grupo`) VALUES
(1, '123456', 'JUAN', 'BRICEÑO', '<P>VALERA</P>', '65436121221', 'SI', 'HERMANO', 'SI', 4, 1, '2012-07-27 15:32:10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal`
--

CREATE TABLE IF NOT EXISTS `tbl_personal` (
  `id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_personal` varchar(12) NOT NULL,
  `nombre_personal` varchar(50) NOT NULL,
  `apellido_personal` varchar(50) NOT NULL,
  `id_cargo` int(11) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_personal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_personal`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_personal`
--

INSERT INTO `tbl_personal` (`id_personal`, `cedula_personal`, `nombre_personal`, `apellido_personal`, `id_cargo`, `id_departamento`, `id_usuario`, `fregistro_personal`) VALUES
(2, '14460452', 'JJJJJJJ', 'JHGJHAGDJHSA', 10, 8, 1, '2012-07-27 15:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuario`
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
-- Dumping data for table `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`id_usuario`, `cedula_usuario`, `nombre_usuario`, `tipo_usuario`, `login`, `password`, `password_confirmacion`, `fregistro_usuario`) VALUES
(1, '17', 'Marcos Orozco', 'Administrador', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2012-07-23 14:49:26'),
(3, '123456', 'USUARIO DOS', 'Supervisor', 'usuario', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2012-07-27 15:25:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
