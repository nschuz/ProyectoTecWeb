-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-01-2021 a las 06:11:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `nombre` varchar(20) CHARACTER SET ascii NOT NULL,
  `apaterno` varchar(20) CHARACTER SET ascii NOT NULL,
  `amaterno` varchar(20) CHARACTER SET ascii NOT NULL,
  `genero` int(2) NOT NULL,
  `email` varchar(30) CHARACTER SET ascii NOT NULL,
  `telefono` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nac` date NOT NULL,
  `calle` varchar(20) CHARACTER SET ascii NOT NULL,
  `numero` varchar(10) CHARACTER SET ascii NOT NULL,
  `colonia` varchar(30) CHARACTER SET ascii NOT NULL,
  `alcaldia_municipio` varchar(40) CHARACTER SET ascii NOT NULL,
  `estado` varchar(30) CHARACTER SET ascii NOT NULL,
  `escuela_procedencia` varchar(40) CHARACTER SET ascii DEFAULT NULL,
  `promedio` float DEFAULT NULL,
  `carrera` int(2) NOT NULL,
  `num_opcion` int(2) NOT NULL,
  `contrasena` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `apaterno`, `amaterno`, `genero`, `email`, `telefono`, `fecha_nac`, `calle`, `numero`, `colonia`, `alcaldia_municipio`, `estado`, `escuela_procedencia`, `promedio`, `carrera`, `num_opcion`, `contrasena`) VALUES
(1, 'Omar', 'Moreno', 'Lozano', 1, 'omarmorleno@gmail.com', '5615916079', '1999-08-05', 'Yucatan', '57', 'El Chamizal', 'Ecatepec de Morelos', 'Estado de Mexico', 'CECyT 1', 7.14, 1, 1, 'lechesaurio1');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
