-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-10-2023 a las 05:45:38
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `citas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int NOT NULL,
  `nombre_paciente` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `medico_asignado` varchar(255) NOT NULL,
  `motivo` text,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `nombre_paciente`, `fecha`, `hora`, `medico_asignado`, `motivo`, `fecha_creacion`) VALUES
(1, 'eli', '2023-10-04', '03:07:00', 'paris', 'dolor de pecho\r\n', '2023-10-03 08:07:53'),
(2, 'maria leon', '2023-10-04', '03:07:00', 'paris', 'dolor de pecho\r\n', '2023-10-03 08:09:45'),
(3, 'maria leon', '2023-10-04', '03:07:00', 'paris', 'dolor de pecho\r\n', '2023-10-03 08:09:56'),
(4, 'maria mercedes angela gutierrez', '2023-10-05', '08:13:00', 'paris fernando leon lopez', 'dolor de pecho\r\ny del corazon\r\n', '2023-10-03 08:27:33'),
(5, 'eli', '2023-10-04', '03:07:00', 'paris', 'dolor de pecho\r\n', '2023-10-06 05:37:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
