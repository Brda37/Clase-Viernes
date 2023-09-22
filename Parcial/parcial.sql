-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-09-2023 a las 06:45:00
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carta`
--

CREATE TABLE `carta` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `documento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carta`
--

INSERT INTO `carta` (`id`, `nombre`, `documento`) VALUES
(1, 'Bandeja paisa $12000', NULL),
(2, 'Cubios $ 10000', NULL),
(3, 'Bandeja paisa $12000', NULL),
(4, 'Bandeja paisa $12000', NULL),
(5, 'Bandeja paisa $12000', NULL),
(6, 'Bandeja paisa $12000', NULL),
(7, 'Bandeja paisa $12000', NULL),
(8, 'Bandeja paisa $12000', NULL),
(9, 'Bandeja paisa $12000', NULL),
(10, 'Bandeja paisa $12000', NULL),
(11, 'Bandeja paisa $12000', NULL),
(12, 'Bandeja paisa $12000', NULL),
(13, 'Bandeja paisa $12000', NULL),
(14, 'Bandeja paisa $12000', NULL),
(15, 'Bandeja paisa $12000', NULL),
(16, 'Bandeja paisa $12000', NULL),
(17, 'Bandeja paisa $12000', NULL),
(18, 'Bandeja paisa $12000', NULL),
(19, 'Bandeja paisa $12000', NULL),
(20, 'Bandeja paisa $12000', NULL),
(21, 'Bandeja paisa $12000', NULL),
(22, 'Bandeja paisa $12000', NULL),
(23, 'Bandeja paisa $12000', NULL),
(24, 'Bandeja paisa $12000', NULL),
(25, 'Bandeja paisa $12000', NULL),
(26, 'Bandeja paisa $12000', NULL),
(27, 'Bandeja paisa $12000', NULL),
(28, 'Ajiaco $ 7000', NULL),
(29, 'Churrasco $ 15000', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parcial`
--

CREATE TABLE `parcial` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `documento` int(11) NOT NULL,
  `genero` varchar(50) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `parcial`
--

INSERT INTO `parcial` (`nombre`, `apellido`, `documento`, `genero`, `nacimiento`, `correo`, `contrasena`) VALUES
('Diego', 'Bernal', 1, 'Masculino', '2023-01-02', 'enviar@gmail.com', '123'),
('Diego', 'Bernal', 2, 'Masculino', '2023-01-02', 'enviar@gmail.com', '123'),
('Diego', 'Bernal', 3, 'Masculino', '2023-01-01', 'enviar@gmail.com', '123'),
('Diego', 'Bernal', 5, 'Masculino', '0001-01-01', 'enviar@gmail.com', '1234'),
('Diego', 'Bernal', 10, 'Masculino', '2023-12-31', 'enviar@gmail.com', '123456'),
('Diego', 'Bernal', 11, 'Masculino', '2023-01-31', 'enviar@gmail.com', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documento` (`documento`);

--
-- Indices de la tabla `parcial`
--
ALTER TABLE `parcial`
  ADD PRIMARY KEY (`documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carta`
--
ALTER TABLE `carta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carta`
--
ALTER TABLE `carta`
  ADD CONSTRAINT `carta_ibfk_1` FOREIGN KEY (`documento`) REFERENCES `parcial` (`documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
