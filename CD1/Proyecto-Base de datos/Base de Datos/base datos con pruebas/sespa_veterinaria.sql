-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-06-2016 a las 16:22:00
-- Versión del servidor: 5.7.10-log
-- Versión de PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sespa_veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(50) NOT NULL,
  `fecha_fin` date NOT NULL,
  `hora` time NOT NULL,
  `id_mascota` int(50) NOT NULL,
  `motivo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado_agenda` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `fecha_fin`, `hora`, `id_mascota`, `motivo`, `fecha_registro`, `estado_agenda`) VALUES
(30, '2016-03-10', '00:02:00', 19, 'Beta', '2016-03-08', 1),
(31, '2016-03-12', '10:30:00', 24, 'REFUERZO VACUNACION ANUAL', '2016-03-09', 1),
(32, '2016-03-12', '10:35:00', 25, 'REFUERZO VACUNACION ANUAL', '2016-03-09', 1),
(33, '2016-03-17', '00:01:00', 23, 'en una semana', '2016-03-11', 1),
(34, '2016-04-26', '10:11:00', 19, 'Desparacitacion', '2016-04-20', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desparacitacion`
--

CREATE TABLE `desparacitacion` (
  `id_despa` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `id_mascota` int(5) NOT NULL,
  `actividad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_propietario` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `desparacitacion`
--

INSERT INTO `desparacitacion` (`id_despa`, `fecha`, `id_mascota`, `actividad`, `id_propietario`) VALUES
(1, '2015-11-23', 1, 'Pulgas', 2),
(2, '2016-01-05', 23, 'Desparacitario', 2),
(3, '2016-01-21', 26, 'Cuadrupe', 2),
(4, '2016-01-28', 24, 'Pulgoso', 1),
(5, '2016-02-13', 19, 'Gusanos', 19),
(6, '2016-04-18', 1, 'despa', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especie`
--

CREATE TABLE `especie` (
  `id_especie` int(5) NOT NULL,
  `especie` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `especie`
--

INSERT INTO `especie` (`id_especie`, `especie`) VALUES
(1, 'Canino'),
(2, 'Felino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(5) NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
(1, 'vivo'),
(2, 'muerto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_agenda`
--

CREATE TABLE `estado_agenda` (
  `estado_agenda` int(5) NOT NULL,
  `estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_agenda`
--

INSERT INTO `estado_agenda` (`estado_agenda`, `estado`) VALUES
(1, 'Pendiente'),
(2, 'Realizado'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_propi`
--

CREATE TABLE `est_propi` (
  `id_est_propi` int(5) NOT NULL,
  `estado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `est_propi`
--

INSERT INTO `est_propi` (`id_est_propi`, `estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(5) NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `genero`) VALUES
(1, 'Macho'),
(2, 'Hembra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `id_historial` int(30) NOT NULL,
  `fecha` date NOT NULL,
  `id_mascota` int(5) NOT NULL,
  `motivos` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `piel_anexos` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `ganglios_linfaticos` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `aparato_respiratorio` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `aparato_reproductor` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `mucosa` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `plan_sanitario` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `organos_sentidos` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `aparato_neurologico` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `signos_clinicos` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `examen_muscoesqueletico` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `aparato_cardiovascular` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `aparato_digestivo` varchar(2) COLLATE utf8_spanish2_ci NOT NULL,
  `frecuencia_cardiaca` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `frecuencia_respiratoria` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pulso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `temperatura_rectal` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `phc` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `caprologia` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `citologias` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `quimicass_serica` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `imagenologia` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `rspaje_koh` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `uroanalisis` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `patologias` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `test_diagnostico` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `d_diferencial` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `d_definitivo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `tratamiento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `historia_clinica`
--

INSERT INTO `historia_clinica` (`id_historial`, `fecha`, `id_mascota`, `motivos`, `piel_anexos`, `ganglios_linfaticos`, `aparato_respiratorio`, `aparato_reproductor`, `mucosa`, `plan_sanitario`, `organos_sentidos`, `aparato_neurologico`, `signos_clinicos`, `examen_muscoesqueletico`, `aparato_cardiovascular`, `aparato_digestivo`, `frecuencia_cardiaca`, `frecuencia_respiratoria`, `pulso`, `temperatura_rectal`, `phc`, `caprologia`, `citologias`, `quimicass_serica`, `imagenologia`, `rspaje_koh`, `uroanalisis`, `patologias`, `test_diagnostico`, `d_diferencial`, `d_definitivo`, `tratamiento`) VALUES
(20, '2016-04-12', 0, '', '', '', '', '', '', '', '', '', '', ' ', '', '', ' ', '', '', ' ', '', ' ', ' ', '', ' ', '', '', '', ' ', '', '', ''),
(1, '2016-04-07', 1, NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(18, '2016-04-30', 23, '', '', '', '', '', '', '', '', '', '', ' ', '', '', ' ', '', '', ' ', '', ' ', ' ', '', ' ', '', '', '', ' ', '', '', ''),
(19, '2016-04-06', 19, 'ACCIDENTE', 'on', '', '', '', '', '', '', '', '', ' ', '', 'on', ' ', '', '', ' ', '', ' ', ' ', '', ' ', '', '', '', ' ', '', '', 'ESTAR EN UN PROCESO DE ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id_mascota` int(50) NOT NULL,
  `nombre` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `color` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `peso_kg` int(20) NOT NULL,
  `raza` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_genero` int(5) NOT NULL,
  `id_especie` int(5) NOT NULL,
  `id_estado` int(5) NOT NULL,
  `id_propietario` int(5) NOT NULL,
  `fecha_actu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id_mascota`, `nombre`, `fecha_nacimiento`, `color`, `peso_kg`, `raza`, `id_genero`, `id_especie`, `id_estado`, `id_propietario`, `fecha_actu`) VALUES
(1, 'Princesa', '2012-09-14', 'Sal y pimienta', 6, 'Schnauzer', 2, 1, 1, 2, '2016-03-09'),
(19, 'ruyyo', '2011-12-17', 'amarillo', 15, 'golden', 1, 1, 1, 19, '2016-04-06'),
(23, 'Nano', '2016-03-17', 'Blanco', 5, 'Poodle', 1, 1, 1, 2, '2016-03-09'),
(24, 'Nacno', '2014-11-20', 'Blanco', 5, 'Poodle', 1, 1, 1, 1, '2016-03-09'),
(26, 'YAGO', '2016-04-04', 'NEGRO', 12, 'GOLDEN', 1, 1, 1, 2, '2016-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id_propietario` int(5) NOT NULL,
  `p_nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `s_nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `p_apellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `s_apellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `id_tipo_docu` int(5) NOT NULL,
  `numero_tipo` int(10) NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(14) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `id_roll` int(5) NOT NULL,
  `id_est_propi` int(5) NOT NULL,
  `online` int(2) NOT NULL,
  `codigo` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id_propietario`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `id_tipo_docu`, `numero_tipo`, `clave`, `celular`, `direccion`, `email`, `id_roll`, `id_est_propi`, `online`, `codigo`) VALUES
(1, 'Jair', 'Dario', 'Quintana', 'Solano', 1, 98568372, 'MTkwMw==', '3172868447', 'cra 8 17a N 46', 'cmvsanroque@hotmail.es', 1, 1, 1, 1),
(2, 'Sandro', 'Javier', 'Llanten', '', 1, 1061779331, 'MTg5MA==', '326559', 'la paz', 'dj_javier.net@hotmail.com', 1, 1, 2, 2),
(19, 'Doris', '', 'Ordo&#241;es', '', 1, 25285951, 'NzUwMg==', '3015442579', 'sena', 'domaty@misena.edu.co', 2, 1, 2, 19),
(29, 'user', '', '', '', 0, 0, 'c2VuYQ==', '', '', 'user@hotmail.com', 1, 1, 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roll`
--

CREATE TABLE `roll` (
  `id_roll` int(5) NOT NULL,
  `roll` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `roll`
--

INSERT INTO `roll` (`id_roll`, `roll`) VALUES
(1, 'veterinario'),
(2, 'propietario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_document`
--

CREATE TABLE `tipo_document` (
  `id_tipo_docu` int(5) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_document`
--

INSERT INTO `tipo_document` (`id_tipo_docu`, `tipo`) VALUES
(1, 'CC'),
(2, 'TD'),
(4, 'pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacunacion`
--

CREATE TABLE `vacunacion` (
  `id_vacuna` int(5) NOT NULL,
  `fecha` date NOT NULL,
  `id_mascota` int(5) NOT NULL,
  `actividad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `id_propietario` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vacunacion`
--

INSERT INTO `vacunacion` (`id_vacuna`, `fecha`, `id_mascota`, `actividad`, `id_propietario`) VALUES
(1, '2014-01-02', 1, 'Cuadrupeda', 2),
(2, '2014-01-05', 23, 'Vacuna Antirrabica', 2),
(3, '2014-01-08', 26, 'Vacuna antirrabica', 2),
(4, '2015-01-02', 1, '2 dosis ', 2),
(5, '2015-01-05', 23, 'Vacuna Octuple', 2),
(6, '2015-01-08', 26, '2 vacuna Octuple', 2),
(7, '2016-01-02', 1, 'Vac', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indices de la tabla `desparacitacion`
--
ALTER TABLE `desparacitacion`
  ADD PRIMARY KEY (`id_despa`);

--
-- Indices de la tabla `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id_especie`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `est_propi`
--
ALTER TABLE `est_propi`
  ADD PRIMARY KEY (`id_est_propi`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id_propietario`);

--
-- Indices de la tabla `roll`
--
ALTER TABLE `roll`
  ADD PRIMARY KEY (`id_roll`);

--
-- Indices de la tabla `tipo_document`
--
ALTER TABLE `tipo_document`
  ADD PRIMARY KEY (`id_tipo_docu`);

--
-- Indices de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  ADD PRIMARY KEY (`id_vacuna`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `desparacitacion`
--
ALTER TABLE `desparacitacion`
  MODIFY `id_despa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `especie`
--
ALTER TABLE `especie`
  MODIFY `id_especie` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `est_propi`
--
ALTER TABLE `est_propi`
  MODIFY `id_est_propi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `id_historial` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id_mascota` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id_propietario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `roll`
--
ALTER TABLE `roll`
  MODIFY `id_roll` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tipo_document`
--
ALTER TABLE `tipo_document`
  MODIFY `id_tipo_docu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `vacunacion`
--
ALTER TABLE `vacunacion`
  MODIFY `id_vacuna` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
