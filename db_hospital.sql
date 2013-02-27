-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 08, 2013 at 04:48 PM
-- Server version: 5.5.29
-- PHP Version: 5.3.10-1ubuntu3.5

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
  `estatus_adulto` varchar(1) NOT NULL DEFAULT '1',
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_adulto` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_adulto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_adulto`
--

INSERT INTO `tbl_adulto` (`id_adulto`, `cedula_adulto`, `nombre_adulto`, `apellido_adulto`, `numero_expediente_adulto`, `fechan_adulto`, `estadocivil_adulto`, `lugarn_adulto`, `direccion_adulto`, `telefono_adulto`, `sexo_adulto`, `fechai_adulto`, `instruccion_adulto`, `ocupacion_adulto`, `comunal_adulto`, `id_representante`, `estatus_adulto`, `id_usuario`, `fregistro_adulto`) VALUES
(2, '1234567', 'PABLO', 'ZAMORA', 'HOF-34535', '2012-08-03', '', 'VALERA EDO TRUJILLO', 'URBANIZACIÓN LAS ACACIAS, CALLE 18 CON AVENIDA 6, CASA #15-545, VALERA EDO TRUJILLO', '04241234567', 'MASCULINO', '2012-08-24', 'T.S.U.', 'ESTUDIA', 'LAS ACACIAS', 1, '1', 1, '2012-08-02 21:44:08');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_cargo`
--

INSERT INTO `tbl_cargo` (`id_cargo`, `nombre_cargo`, `id_usuario`, `fregistro_cargo`) VALUES
(11, 'TRABAJADOR SOCIAL', 1, '2012-08-01 15:23:21'),
(12, 'DIRECTOR', 1, '2012-08-01 15:23:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cierre`
--

CREATE TABLE IF NOT EXISTS `tbl_cierre` (
  `id_cierre` int(11) NOT NULL AUTO_INCREMENT,
  `id_adulto` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `lapso_cierre` varchar(200) NOT NULL,
  `sintesis_cierre` text NOT NULL,
  `motivo_cierre` text NOT NULL,
  `fecha_cierre` date NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `fregistro_cierre` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cierre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tbl_cierre`
--

INSERT INTO `tbl_cierre` (`id_cierre`, `id_adulto`, `id_personal`, `lapso_cierre`, `sintesis_cierre`, `motivo_cierre`, `fecha_cierre`, `id_usuario`, `fregistro_cierre`) VALUES
(10, 2, 2, 'SDFDS', 'SDFDS', 'SDFDS', '2013-02-20', 1, '2013-02-06 14:50:50'),
(11, 2, 2, 'JG JAGSD JHGASJ D', 'JSAHG JHGSA DJHAG SJDGASJD', 'AS KJDH AKJHD KJASH DKAS', '2013-02-13', 1, '2013-02-06 14:52:33'),
(12, 2, 2, 'SDDFSF', 'SDFDSF', 'SDFDS', '2013-02-13', 3, '2013-02-06 14:54:45'),
(13, 2, 2, 'FSDFSD', 'SDFDSFDS', 'DSFDSF', '2013-02-21', 1, '2013-02-06 15:11:13'),
(14, 2, 1, 'JHG DJHASG DJHA SJHDA', 'KJH SAKJHD KJAH KDHAKDA', 'KJAHSD KJASH DKJAH KDJHA KJD', '2013-02-06', 1, '2013-02-06 15:12:06'),
(15, 2, 1, 'JHDSF JHDSG FJHDS', 'KHDS KFJDSH KF', 'KJSDHF KJDSHF KJHDS KJFSD', '2013-02-06', 1, '2013-02-06 15:14:31'),
(16, 2, 2, 'KJH FKJDHFD SKJHF KSD', 'K SJDHFKJD S', 'KJSHD FKJHKDS', '2013-02-06', 1, '2013-02-06 15:15:06'),
(17, 2, 1, 'DFDSFDS', 'SDFDSF', 'SDFDSF', '2013-02-06', 1, '2013-02-06 15:29:31'),
(18, 2, 1, 'DSFKJDSHF KSJKHSDKF', 'JKSHD FKJHDS KJFHDSK', 'KSJDHF KJDSH FKJDS', '2013-02-06', 1, '2013-02-06 15:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ci_sessions`
--

CREATE TABLE IF NOT EXISTS `tbl_ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_departamento`
--

INSERT INTO `tbl_departamento` (`id_departamento`, `nombre_departamento`, `id_usuario`, `fregistro_departamento`) VALUES
(9, 'TRABAJO SOCIAL', 1, '2012-08-01 15:24:32'),
(10, 'DIRECCIÓN', 1, '2012-08-01 15:24:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grupo_familiar`
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
-- Dumping data for table `tbl_grupo_familiar`
--

INSERT INTO `tbl_grupo_familiar` (`id_grupo`, `cedula_grupo`, `nombre_grupo`, `apellido_grupo`, `fechan_grupo`, `sexo_grupo`, `instruccion_grupo`, `ocupacion_grupo`, `ingreso_grupo`, `aporte_grupo`, `direccion_grupo`, `telefono_grupo`, `parentesco_grupo`, `id_adulto`, `id_usuario`, `fregistro_grupo`) VALUES
(1, '23456789', 'JOSE', 'SANCHEZ', '1972-02-15', 'MASCULINO', 'INGENIERO', 'AMA DE CASA', '2560', 'NINGUNO', '<P>AVENIDA 13 CON CALLE 15, CASA #14-64, VALERA EDO. TRUJILLO</P>', '04161234567', 'HERMANO', 2, 1, '2012-08-03 20:46:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_personal`
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
-- Dumping data for table `tbl_personal`
--

INSERT INTO `tbl_personal` (`id_personal`, `cedula_personal`, `nombre_personal`, `apellido_personal`, `instruccion_personal`, `id_cargo`, `id_departamento`, `id_usuario`, `fregistro_personal`) VALUES
(1, '16882039', 'LEONARDO ', 'SUÁREZ', 'T.S.U.', 11, 9, 1, '2012-08-01 15:25:26'),
(2, '10426485', 'JHONMER', 'BENCOMO', 'LCDO.', 12, 10, 1, '2012-08-01 15:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_receptoria`
--

CREATE TABLE IF NOT EXISTS `tbl_receptoria` (
  `id_receptoria` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_receptoria` datetime NOT NULL,
  `referido_receptoria` varchar(50) NOT NULL,
  `a_receptoria` varchar(50) NOT NULL,
  `asunto_receptoria` varchar(100) NOT NULL,
  `id_adulto` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `vivienda_receptoria` enum('','Óptimas condiciones','Sin lujos, espaciosa','Buenas condiciones sanitarias, espacios reducidos','Ambientes espaciosos o reducidos con deficiencias sanitarias','Rancho con espacios reducidos') NOT NULL,
  `profesion_receptoria` enum('','Universitario o alto comerciante','Técnico o medio productor','Sin profesión, pequeño comerciante, propietario con buena remuneración','Obrero especializado, chofer, albañil','Obrero no especializado, buhonero, servicio domestico') NOT NULL,
  `madre_receptoria` enum('','Universitaria o su equivalente','Secundaria completa o Técnica Superior','Secundaria incompleta o Técnica Medio','Primaria o Alfabeta','Analfabeta') NOT NULL,
  `fuente_receptoria` enum('','Herencia','Ganancias, beneficios, honorarios profesionales','Sueldo mensual','Salario semanal o por día','Donaciones de orden público') NOT NULL,
  `sintesis_receptoria` text NOT NULL,
  `diagnostico_receptoria` text NOT NULL,
  `gestiones_receptoria` text NOT NULL,
  `vobo_receptoria` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fregistro_receptoria` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_receptoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_receptoria`
--

INSERT INTO `tbl_receptoria` (`id_receptoria`, `fecha_receptoria`, `referido_receptoria`, `a_receptoria`, `asunto_receptoria`, `id_adulto`, `id_personal`, `vivienda_receptoria`, `profesion_receptoria`, `madre_receptoria`, `fuente_receptoria`, `sintesis_receptoria`, `diagnostico_receptoria`, `gestiones_receptoria`, `vobo_receptoria`, `id_usuario`, `fregistro_receptoria`) VALUES
(1, '2012-08-20 11:59:28', 'DR. OSCAR ALFONSO CEBALLOS FERNANDEZ', 'DR. LEONARDO ANTONIO GONZALEZ HERNANDEZ', 'FRACTURA DE TIBIA Y PERONÉ', 2, 1, 'Óptimas condiciones', 'Obrero especializado, chofer, albañil', 'Primaria o Alfabeta', 'Donaciones de orden público', 'SFGGSFSFJSFJKSFHSFH SF SF SUEFHSF SIHFSUIFH SFIU SFU SFUISFHUISF SUIF SUIF HSFIS BFISF BISF SIF BSFSFJSFISE FUISE EIUFSEH3WH 345J34 IJ3 2IU HWF WEFIW U DFU UI WUIR H5 5U34 53U5 H345 32UH 3WRU WUIF WUR WH3UR W3R WU3RH AU SIU WIJAD WUE WIU EUID WHW3 W3 RWRWRJQWHWJR 24 2 W WA WAYUD WAYUDGHWUIGHQWD QWGQW YQW GDQW GDWQ DG WDYWQ DGWQYD GWQDY WGDYUQW GDYQW DGQWYDGQWUHDGQWHJDQWUY AUYD GQW QUD QD QD GQD GQUYD GQYD QU DQ D', 'SFGGSFSFJSFJKSFHSFH SF SF SUEFHSF SIHFSUIFH SFIU SFU SFUISFHUISF SUIF SUIF HSFIS BFISF BISF SIF BSFSFJSFISE FUISE EIUFSEH3WH 345J34 IJ3 2IU HWF WEFIW U DFU UI WUIR H5 5U34 53U5 H345 32UH 3WRU WUIF WUR WH3UR W3R WU3RH AU SIU WIJAD WUE WIU EUID WHW3 W3 RWRWRJQWHWJR 24 2 W WA WAYUD WAYUDGHWUIGHQWD QWGQW YQW GDQW GDWQ DG WDYWQ DGWQYD GWQDY WGDYUQW GDYQW DGQWYDGQWUHDGQWHJDQWUY AUYD GQW QUD QD QD GQD GQUYD GQYD QU DQ D', 'SFGGSFSFJSFJKSFHSFH SF SF SUEFHSF SIHFSUIFH SFIU SFU SFUISFHUISF SUIF SUIF HSFIS BFISF BISF SIF BSFSFJSFISE FUISE EIUFSEH3WH 345J34 IJ3 2IU HWF WEFIW U DFU UI WUIR H5 5U34 53U5 H345 32UH 3WRU WUIF WUR WH3UR W3R WU3RH AU SIU WIJAD WUE WIU EUID WHW3 W3 RWRWRJQWHWJR 24 2 W WA WAYUD WAYUDGHWUIGHQWD QWGQW YQW GDQW GDWQ DG WDYWQ DGWQYD GWQDY WGDYUQW GDYQW DGQWYDGQWUHDGQWHJDQWUY AUYD GQW QUD QD QD GQD GQUYD GQYD QU DQ D', 'ARQUIMEDEZ D. GALINDO FIGUERA', 1, '2012-08-28 03:13:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_representante`
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
-- Dumping data for table `tbl_representante`
--

INSERT INTO `tbl_representante` (`id_representante`, `cedula_representante`, `nombre_representante`, `apellido_representante`, `sexo_representante`, `fechan_representante`, `estadocivil_representante`, `lugarn_representante`, `direccion_representante`, `parentesco_representante`, `telefono_representante`, `profesion_representante`, `id_usuario`, `fregistro_representante`) VALUES
(1, '2345678', 'PETRONILO', 'SINFOROSO', 'MASCULINO', '2012-08-21', 'DIVORCIADO(A)', 'TRUJILLO EDO. TRUJILLO', 'URB. LA BEATRIZ, BLOQUE 40, APTO 3C PISO 3', 'HERMANA', '26556565', 'NINGUNA', 1, '2012-08-16 04:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE IF NOT EXISTS `tbl_social` (
  `id_social` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_social` datetime NOT NULL,
  `referido_social` varchar(50) NOT NULL,
  `a_social` varchar(50) NOT NULL,
  `asunto_social` varchar(100) NOT NULL,
  `id_adulto` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `caracteristica_vivienda` enum('','Rural','Urbana') NOT NULL,
  `tipo_vivienda` enum('','Casa','Apartamento','Rancho') NOT NULL,
  `tenencia_vivienda` enum('','Propia','Alquilada','Comodato') NOT NULL,
  `tenencia_otro_vivienda` varchar(50) DEFAULT NULL,
  `ambiente_vivienda_u` enum('','Si','No') NOT NULL,
  `ambiente_vivienda_b` enum('','Si','No') NOT NULL,
  `ambiente_vivienda_c` enum('','Si','No') NOT NULL,
  `ambiente_vivienda_d` enum('','Si','No') NOT NULL,
  `ambiente_vivienda_s` enum('','Si','No') NOT NULL,
  `ambiente_vivienda_co` enum('','Si','No') NOT NULL,
  `ambiente_otro_vivienda` varchar(50) DEFAULT NULL,
  `techo_vivienda` enum('','Platabanda','Láminas','Tejas') NOT NULL,
  `techo_otro_vivienda` varchar(50) DEFAULT NULL,
  `piso_vivienda` enum('','Cerámica','Cemento','Tierra') NOT NULL,
  `piso_otro_vivienda` varchar(50) DEFAULT NULL,
  `pared_vivienda` enum('','Bloque','Bahareque','Zinc') NOT NULL,
  `pared_otro_vivienda` varchar(50) DEFAULT NULL,
  `excreta_vivienda` enum('','Red de Cloacas','Pozo Séptico') NOT NULL,
  `excreta_otro_vivienda` varchar(50) DEFAULT NULL,
  `alumbrado_vivienda` enum('','Eléctrico','Lámpara / Kerosene') NOT NULL,
  `alumbrado_otro_vivienda` varchar(50) DEFAULT NULL,
  `basura_vivienda` enum('','Aseo urbano','Quemaderos') NOT NULL,
  `basura_otro_vivienda` varchar(50) DEFAULT NULL,
  `agua_vivienda` enum('','Tubería','Cisterna','Tanque','Quebrada') NOT NULL,
  `agua_otro_vivienda` varchar(50) DEFAULT NULL,
  `acceso_vivienda` enum('','Pavimentada','Carretera abierta','Camino de Tierra','Gradas') NOT NULL,
  `transporte_vivienda` enum('','Público','Privado') NOT NULL,
  `telefono_vivienda` enum('','Público','Residencial','Celular') NOT NULL,
  `vivienda_analisis` varchar(12) NOT NULL,
  `transporte_analisis` varchar(12) NOT NULL,
  `servicios_analisis` varchar(12) NOT NULL,
  `medicina_analisis` varchar(12) NOT NULL,
  `alimentacion_analisis` varchar(12) NOT NULL,
  `otro_analisis` varchar(12) DEFAULT NULL,
  `ingreso_analisis` varchar(12) NOT NULL,
  `conclusion_analisis` text NOT NULL,
  `sintesis_social` text NOT NULL,
  `diagnostico_social` text NOT NULL,
  `recomendacion_social` text NOT NULL,
  `vobo_social` varchar(50) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fregistro_social` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_social`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id_social`, `fecha_social`, `referido_social`, `a_social`, `asunto_social`, `id_adulto`, `id_personal`, `caracteristica_vivienda`, `tipo_vivienda`, `tenencia_vivienda`, `tenencia_otro_vivienda`, `ambiente_vivienda_u`, `ambiente_vivienda_b`, `ambiente_vivienda_c`, `ambiente_vivienda_d`, `ambiente_vivienda_s`, `ambiente_vivienda_co`, `ambiente_otro_vivienda`, `techo_vivienda`, `techo_otro_vivienda`, `piso_vivienda`, `piso_otro_vivienda`, `pared_vivienda`, `pared_otro_vivienda`, `excreta_vivienda`, `excreta_otro_vivienda`, `alumbrado_vivienda`, `alumbrado_otro_vivienda`, `basura_vivienda`, `basura_otro_vivienda`, `agua_vivienda`, `agua_otro_vivienda`, `acceso_vivienda`, `transporte_vivienda`, `telefono_vivienda`, `vivienda_analisis`, `transporte_analisis`, `servicios_analisis`, `medicina_analisis`, `alimentacion_analisis`, `otro_analisis`, `ingreso_analisis`, `conclusion_analisis`, `sintesis_social`, `diagnostico_social`, `recomendacion_social`, `vobo_social`, `id_usuario`, `fregistro_social`) VALUES
(1, '2012-08-13 16:30:00', 'DR. OSCAR NAVA RULLO', 'DR. IGNACIO PÉREZ LEÓN', 'FRACTURA DE TIBIA Y PERONÉ', 2, 1, 'Urbana', 'Apartamento', 'Alquilada', NULL, 'No', 'Si', 'Si', 'Si', 'Si', 'Si', NULL, 'Platabanda', NULL, 'Cerámica', NULL, 'Bloque', NULL, 'Red de Cloacas', NULL, 'Eléctrico', NULL, 'Aseo urbano', NULL, 'Tubería', NULL, 'Pavimentada', 'Público', 'Público', '600', '200', '0', '1200', '800', NULL, '3500', '', 'FSFSF FSFSEFD SEJ EHSAJK HSF EFS EIS FIUSE FISEF HSI E  FIUEHFUIESHF ESUI FEU EI SEIF GSEFS FUSI FSIHF SIHF  SFSU FSIF JH GSF GSGHF SIF SF S', '2342535346 J HJ GHFSFSF FSFSEFD SEJ EHSAJK HSF EFS EIS FIUSE FISEF HSI E  FIUEHFUIESHF ESUI FEU EI SEIF GSEFS FUSI FSIHF SIHF  SFSU FSIF JH GSF GSGHF SIF SF S', 'AAAAAAAAAAAAJFHEJFHEJF  EFJE HE   FSFSF FSFSEFD SEJ EHSAJK HSF EFS EIS FIUSE FISEF HSI E  FIUEHFUIESHF ESUI FEU EI SEIF GSEFS FUSI FSIHF SIHF  SFSU FSIF JH GSF GSGHF SIF SF S', 'TSU. JOSÉ ALFONSO HERNÁNDEZ FERNÁNDEZ', 1, '2012-09-01 02:29:03');

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
(1, '17', 'Marcos Orozco', 'Administrador', 'admin', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2012-07-23 14:49:26'),
(3, '123456', 'USUARIO DOS', 'Supervisor', 'usuario', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '2012-07-27 15:25:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
