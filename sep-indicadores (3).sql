-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-08-2017 a las 14:57:36
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sep-indicadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `años`
--

CREATE TABLE `años` (
  `Años` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `años`
--

INSERT INTO `años` (`Años`, `Status`) VALUES
('2015', 1),
('2016', 1),
('2017', 0),
('2018', 1),
('2019', 1),
('2020', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active, 0=Block'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `title`, `date`, `created`, `modified`, `status`) VALUES
(1, 'examen de mate', '2017-06-19', '2017-06-26 05:12:24', '2017-06-27 05:13:05', 0),
(2, 'no se', '2017-06-27', '2017-06-27 07:00:00', '2017-06-27 08:00:00', 1),
(3, 'no se 2', '2017-06-27', '2017-06-27 13:00:00', '2017-06-27 14:00:00', 1),
(4, 'prueba', '2017-01-17', '2017-01-19 08:00:00', '2017-01-26 15:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indaño`
--

CREATE TABLE `indaño` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Año` int(11) NOT NULL,
  `Valor` double DEFAULT NULL,
  `User` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indaño`
--

INSERT INTO `indaño` (`ID`, `Nombre`, `Año`, `Valor`, `User`) VALUES
(1, 'Absorción', 2015, 100, 'cobach1'),
(2, 'Absorción', 2016, 100, 'cobach1'),
(3, 'Cobertura', 2017, 56, 'cobach1'),
(4, 'Absorción', 2017, 80, 'cobach1'),
(5, 'Cobertura', 2015, 11, 'cobach1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE `indicadores` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Definición` text NOT NULL,
  `Interpretación` text NOT NULL,
  `Información_requerida` text NOT NULL,
  `Forma_de_Calculo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`ID`, `Nombre`, `Definición`, `Interpretación`, `Información_requerida`, `Forma_de_Calculo`) VALUES
(1, 'Absorción', 'Muestra el indice de transicion de los alumnos de un nivel educativo a otro. Es decir indica el porcentaje de alumnos que se inscriben en un nivel educativo, con respecto al numero de alumnos que egresaron del nivel educativo inmediato anterior, cuyo ciclo recién termino.', 'Es el porcentaje de alumnos que ingresan al nivel medio superior, con respecto al numero de alumnos que egresaron del nivel inmediato anterior cuyo ciclo recién termino.', 'A1t =Matricula de inicio a primer grado en el ciclo escolar (t). Aent-1Total alumnos egresados del nivel educativo inmediato anterior.', '1+2'),
(2, 'Cobertura', 'Indica el porcentaje de alumnos atendidos en un nivel educativo, con respecto a la población que representan la edad para cursar dicho nivel. ', 'Muestra el porcentaje de la población atendida con una relación a la población con edad para cursar dicho nivel en el ciclo escolar. ', 'At-Matricula de inicio en el ciclo escolar (t). Pext Total de la población con edad \'X\' para cursar dicho nivel en el ciclo escolar (t). Donde: x = 15 a 17 años de edad (Media superior)', ''),
(3, 'Aprobación', 'Porcentaje de alumnos que han aprobado la totalidad de asignaturas y / o modulos establecidos al final del ciclo escolar. ', 'Muestra el porcentaje de alumnos que han aprobado la totalidad de asignaturas y modulos durante el ciclo escolar respecto a los alumnos inscritos en el mismo. Los valores cercanos a 100 que un mayor porcentaje de alumnos cumplieron con los requisitos. ', 'Pt= Numero de alumnos aprobados del ciclo escolar (t).  Pmt= Número de alumnos aprobados a la mitad del ciclo escolar At=Matrícula de inicio en el ciclo escolar (t) Amt=Número de alumnos a la mitad del ciclo escolar.', ''),
(4, 'Deserción', 'Es el porcentaje de alumnos que abandonan las actividades escolares en el ciclo escolar, con respecto a la matrícula de inicio del mismo.', 'Es el porcentaje de alumnos que abandonan las actividades escolares durante el ciclo escolar (desertores intracurriculares) y se encuentran en este nivel (desertores con respecto al total de alumnos inscritos al inicio del ciclo escolar. Los valores cercanos a cero muestran que un mayor porcentaje de alumnos continuò con sus estudios', 'At1= Matrícula de inicio en el ciclo escolar (t + 1). Ani1t+1= Matricula de nuevo ingreso a primer grado en el ciclo escolar (t + 1). Aet Numero de alumnos que egresaron en el ciclo escolar (t). At= matrícula de inicio en el ciclo escolar (t).', ''),
(5, 'Eficiecia Terminal', 'Porcentaje de alumnos que terminan el nivel educativo de forma regular dentro del tiempo ideal establecido. ', 'Permite conocer el porcentaje de alumnos, de una cohorte dada, que terminan el nivel educativo dentro del tiempo ideal establecido. Los valores cercanos a 100 que un mayor porcentaje de alumnos cumplio con los requisitos del plan de estudios en el tiempo ideal establecido.', 'Aec1= Numero de alumnos que egresaron de la misma generacion en el ciclo escolar (t). Anit-m= Matrícula de nuevo ingreso plantel en el ciclo escolar (tm). T=ciclo escolar. T-m= ciclos escolares anteriores. M =numero de anos del tiempo ideal establecido menos uno', ''),
(6, 'Estudiantes con discapacidad', '', '', '', ''),
(7, 'Matrícula por Género', '', '', '', ''),
(8, 'Aprovechamiento', 'Porcentaje de alumnos que han aprobado la totalidad de asignaturas y / o modulos establecidos al final del ciclo escolar.', 'Muestra el porcentaje de alumnos que han aprobado la totalidad de asignaturas y / o modulos durante el ciclo escolar respecto a los alumnos inscritos en el mismo. Los valores cercanos a 100 que un mayor porcentaje de alumnos cumplieron con los requisitos.', 'Pt= Número de alumnos aprobados al final del ciclo escolar (t). Pmt=Número de alumnos aprobados a la mitad del ciclo escolar At=Matrícula de inicio en el ciclo escolar (t) Amt= Número de alumnos a la mitad del ciclo escolar', ''),
(9, 'Utilización de la Capacidad Instalada', '', '', '', ''),
(10, 'Costo por Alumno', 'Es la relación del presupuesto ejercido por el plantel entre la matrícula de inicio en el ciclo escolar. ', 'Permite identificar el costo por alumno de cada plante educativo. ', 'Peat= Presupuesto ejercido en el ciclo escolar (t) At= Matricula de inicio en el ciclo escolar (t)', ''),
(11, 'Reprobación', '', '', '', ''),
(12, 'Seguimiento de Egresados', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebacargar`
--

CREATE TABLE `pruebacargar` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Profesion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pruebacargar`
--

INSERT INTO `pruebacargar` (`id`, `Nombre`, `Edad`, `Profesion`) VALUES
(1, 'William', 21, 'Informatico'),
(2, 'Andre', 22, 'Dise?ador'),
(3, 'Sauri', 21, 'Informatico'),
(4, 'William', 21, 'Informatico'),
(5, 'as', 22, 'Dise?ador'),
(6, 'sss', 21, 'Informatico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Usuario` varchar(100) NOT NULL,
  `PW` varchar(50) NOT NULL,
  `Rol` varchar(200) NOT NULL DEFAULT 'Nivel1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Nombre`, `Usuario`, `PW`, `Rol`) VALUES
(1, 'William Cauich', 'admin', '1024', 'Nivel4'),
(2, 'Jose Ernesto', 'admin2', '1024', 'Nivel3'),
(3, 'Colegio de Bachilleres 1', 'cobach1', '1234', 'Nivel1'),
(4, 'Colegio de Bachilleres Estatal', 'cobachEsta', '1234', 'Nivel2'),
(5, 'Delegado SEP', 'delegado', '1234', 'Nivel4'),
(6, 'reya', 'sad', '1234567', 'Nivel1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `indaño`
--
ALTER TABLE `indaño`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `pruebacargar`
--
ALTER TABLE `pruebacargar`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `indaño`
--
ALTER TABLE `indaño`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `pruebacargar`
--
ALTER TABLE `pruebacargar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
