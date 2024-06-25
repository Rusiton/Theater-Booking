-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2024 a las 02:04:50
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `teatherbooking`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asientos`
--

CREATE TABLE `asientos` (
  `id_asiento` int(11) NOT NULL,
  `num_piso` int(11) NOT NULL,
  `booked` varchar(5) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asientos`
--

INSERT INTO `asientos` (`id_asiento`, `num_piso`, `booked`, `id_usuario`) VALUES
(1, 1, 'false', 0),
(2, 1, 'false', 0),
(3, 1, 'false', 2),
(4, 1, 'true', 2),
(5, 1, 'false', 0),
(6, 1, 'true', 2),
(7, 1, 'false', 0),
(8, 1, 'true', 2),
(9, 1, 'false', 0),
(10, 1, 'false', 0),
(11, 1, 'false', 0),
(12, 1, 'true', 0),
(13, 1, 'false', 0),
(14, 1, 'false', 0),
(15, 1, 'true', 2),
(16, 1, 'false', 0),
(17, 1, 'true', 2),
(18, 1, 'false', 0),
(19, 1, 'true', 2),
(20, 1, 'false', 0),
(21, 1, 'false', 0),
(22, 1, 'false', 0),
(23, 2, 'false', 0),
(24, 2, 'false', 0),
(25, 2, 'false', 0),
(26, 2, 'false', 0),
(27, 2, 'false', 0),
(28, 2, 'false', 0),
(29, 2, 'false', 0),
(30, 2, 'true', 2),
(31, 2, 'false', 0),
(32, 2, 'false', 0),
(33, 2, 'false', 0),
(34, 2, 'false', 0),
(35, 2, 'false', 0),
(36, 2, 'false', 0),
(37, 2, 'false', 0),
(38, 2, 'false', 0),
(39, 2, 'false', 0),
(40, 2, 'false', 0),
(41, 2, 'false', 0),
(42, 2, 'false', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `num_piso` int(11) NOT NULL,
  `cant_asientos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`num_piso`, `cant_asientos`) VALUES
(1, 80),
(2, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `email`, `password`) VALUES
(1, 'galassosantiago05@gmail.com', '7815696ecbf1c96e6894b779456d330e'),
(2, 'hola@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asientos`
--
ALTER TABLE `asientos`
  ADD PRIMARY KEY (`id_asiento`,`num_piso`);

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`num_piso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asientos`
--
ALTER TABLE `asientos`
  MODIFY `id_asiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `num_piso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
