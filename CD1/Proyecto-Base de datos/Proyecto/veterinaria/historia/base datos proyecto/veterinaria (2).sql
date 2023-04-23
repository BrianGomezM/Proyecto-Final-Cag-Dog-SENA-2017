-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 03-12-2015 a las 23:03:56
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `veterinaria`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `agenda`
-- 

CREATE TABLE `agenda` (
  `id_agenda` int(50) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `hora` int(20) NOT NULL,
  `id_tiempo` int(5) NOT NULL,
  `id_mascota` int(50) NOT NULL,
  `motivo` varchar(50) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_agenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- 
-- Volcar la base de datos para la tabla `agenda`
-- 


-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `desparacitacion`
-- 

CREATE TABLE `desparacitacion` (
  `id_despa` int(5) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `id_mascota` int(5) NOT NULL,
  `actividad` varchar(50) collate utf8_spanish2_ci NOT NULL,
  `id_propietario` int(5) NOT NULL,
  PRIMARY KEY  (`id_despa`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=4 ;

-- 
-- Volcar la base de datos para la tabla `desparacitacion`
-- 

INSERT INTO `desparacitacion` VALUES (1, '2015-11-10', 1, 'se le administro via oral el desparacitante', 1);
INSERT INTO `desparacitacion` VALUES (2, '2015-11-17', 1, 'se le administro via oral el desparacitante penici', 2);
INSERT INTO `desparacitacion` VALUES (3, '2015-11-30', 0, 'final3', 0);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `especie`
-- 

CREATE TABLE `especie` (
  `id_especie` int(5) NOT NULL auto_increment,
  `especie` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_especie`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `especie`
-- 

INSERT INTO `especie` VALUES (1, 'Perro');
INSERT INTO `especie` VALUES (2, 'Gato');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estado`
-- 

CREATE TABLE `estado` (
  `id_estado` int(5) NOT NULL auto_increment,
  `estado` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `estado`
-- 

INSERT INTO `estado` VALUES (1, 'vivo');
INSERT INTO `estado` VALUES (2, 'muerto');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `genero`
-- 

CREATE TABLE `genero` (
  `id_genero` int(5) NOT NULL auto_increment,
  `genero` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_genero`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `genero`
-- 

INSERT INTO `genero` VALUES (1, 'Macho');
INSERT INTO `genero` VALUES (2, 'Hembra');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `historia_clinica`
-- 

CREATE TABLE `historia_clinica` (
  `id_historial` int(30) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `id_mascota` int(5) NOT NULL,
  `motivos` varchar(50) collate utf8_spanish2_ci default NULL,
  `piel_anexos` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `ganglios_linfaticos` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `aparato_respiratorio` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `aparato_reproductor` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `mucosa` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `plan_sanitario` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `organos_sentidos` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `aparato_neurologico` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `signos_clinicos` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `examen_muscoesqueletico` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `aparato_cardiovascular` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `aparato_digestivo` varchar(2) collate utf8_spanish2_ci NOT NULL,
  `frecuencia_cardiaca` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `frecuencia_respiratoria` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `pulso` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `temperatura_rectal` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `phc` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `caprologia` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `citologias` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `quimicass_serica` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `imagenologia` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `rspaje_koh` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `uroanalisis` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `patologias` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `test_diagnostico` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `d_diferencial` varchar(50) collate utf8_spanish2_ci NOT NULL,
  `d_definitivo` varchar(50) collate utf8_spanish2_ci NOT NULL,
  `tratamiento` varchar(50) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_historial`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=13 ;

-- 
-- Volcar la base de datos para la tabla `historia_clinica`
-- 

INSERT INTO `historia_clinica` VALUES (3, '2015-11-10', 2, 'accidente', 'on', '', '', 'on', '', '', 'on', '', '', 'on', '', '', '2 ', '4', '3', '5 ', 'dasd', 'adas ', 'dasd ', 'ad', 'ada ', 'dad', 'ada', 'sdasd', 'adad ', 'dadad', 'dadasd', '');
INSERT INTO `historia_clinica` VALUES (10, '2015-12-26', 2, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `historia_clinica` VALUES (12, '2015-12-06', 2, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `mascota`
-- 

CREATE TABLE `mascota` (
  `id_mascota` int(50) NOT NULL auto_increment,
  `nombre` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `color` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `peso_kg` int(20) NOT NULL,
  `raza` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `id_genero` int(5) NOT NULL,
  `id_especie` int(5) NOT NULL,
  `id_estado` int(5) NOT NULL,
  `id_propietario` int(5) NOT NULL,
  PRIMARY KEY  (`id_mascota`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `mascota`
-- 

INSERT INTO `mascota` VALUES (1, 'alucard', '2015-11-09', 'blanco', 10, 'golden', 1, 1, 1, 1);
INSERT INTO `mascota` VALUES (2, 'lucas', '2015-12-24', 'cafe', 10, 'pincher', 1, 1, 1, 2);
INSERT INTO `mascota` VALUES (4, 'firulais', '2015-11-09', 'Blanco', 12, 'golden', 1, 1, 1, 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `propietario`
-- 

CREATE TABLE `propietario` (
  `id_propietario` int(5) NOT NULL auto_increment,
  `p_nombre` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `s_nombre` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `p_apellido` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `s_apellido` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `id_tipo_docu` int(5) NOT NULL,
  `numero_tipo` int(10) NOT NULL,
  `clave` varchar(10) collate utf8_spanish2_ci NOT NULL,
  `celular` varchar(14) collate utf8_spanish2_ci NOT NULL,
  `direccion` varchar(40) collate utf8_spanish2_ci NOT NULL,
  `email` varchar(20) collate utf8_spanish2_ci NOT NULL,
  `id_roll` int(5) NOT NULL,
  `id_estado` int(5) NOT NULL,
  `online` int(2) NOT NULL,
  PRIMARY KEY  (`id_propietario`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `propietario`
-- 

INSERT INTO `propietario` VALUES (1, 'Katerine', '', 'Garzon', 'Paz', 1, 1061766025, 'x123', '3207111271', 'la piedra 21', 'k_te93@hotmail.com', 1, 1, 1);
INSERT INTO `propietario` VALUES (2, 'Owen', '', 'Uchiha', '', 1, 1061779331, 'x132', '3104665574', 'Cra 4B 70 N 45', 'uchiha@hotmail.com', 1, 1, 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `roll`
-- 

CREATE TABLE `roll` (
  `id_roll` int(5) NOT NULL auto_increment,
  `roll` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_roll`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `roll`
-- 

INSERT INTO `roll` VALUES (1, 'veterinario');
INSERT INTO `roll` VALUES (2, 'propietario');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tiempo`
-- 

CREATE TABLE `tiempo` (
  `id-tiempo` int(5) NOT NULL auto_increment,
  `tiempo` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id-tiempo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `tiempo`
-- 

INSERT INTO `tiempo` VALUES (1, 'am');
INSERT INTO `tiempo` VALUES (2, 'pm');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipo_document`
-- 

CREATE TABLE `tipo_document` (
  `id_tipo_docu` int(5) NOT NULL auto_increment,
  `tipo` varchar(20) collate utf8_spanish2_ci NOT NULL,
  PRIMARY KEY  (`id_tipo_docu`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `tipo_document`
-- 

INSERT INTO `tipo_document` VALUES (1, 'CC');
INSERT INTO `tipo_document` VALUES (2, 'TD');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `vacunacion`
-- 

CREATE TABLE `vacunacion` (
  `id_vacuna` int(5) NOT NULL auto_increment,
  `fecha` date NOT NULL,
  `id_mascota` int(5) NOT NULL,
  `actividad` int(50) NOT NULL,
  `id_propietario` int(5) NOT NULL,
  PRIMARY KEY  (`id_vacuna`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `vacunacion`
-- 

INSERT INTO `vacunacion` VALUES (1, '2015-11-13', 0, 0, 0);
INSERT INTO `vacunacion` VALUES (2, '2015-11-02', 0, 0, 0);
