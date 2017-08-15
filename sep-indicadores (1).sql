-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2017 a las 04:53:48
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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
