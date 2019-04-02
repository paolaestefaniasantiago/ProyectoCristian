-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-04-2019 a las 03:47:13
-- Versión del servidor: 5.7.21-log
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `users_upjr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alum_data`
--

CREATE TABLE `alum_data` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `matricula` int(11) NOT NULL,
  `carrera` varchar(100) NOT NULL,
  `f_e1` int(11) NOT NULL,
  `f_e2` int(11) NOT NULL,
  `f_e3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alum_data`
--

INSERT INTO `alum_data` (`id`, `nombre`, `apellidos`, `matricula`, `carrera`, `f_e1`, `f_e2`, `f_e3`) VALUES
(1, 'prueba', 'aa aa', 316030000, 'Redes y Telecomunicaciones', 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alum_data`
--
ALTER TABLE `alum_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alum_data`
--
ALTER TABLE `alum_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
