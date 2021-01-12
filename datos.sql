-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-01-2021 a las 13:48:49
-- Versión del servidor: 5.7.23-23
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proye229_alumno`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(100) NOT NULL,
  `nombres` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apaterno` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amaterno` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `curp` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `genero` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `calle` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `colonia` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alcaldia_municipio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `escuela_procedencia` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localidad` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formacion_tecnica` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `carrera_aceptado` int(3) DEFAULT NULL,
  `semestre` int(3) DEFAULT NULL,
  `num_opcion` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
