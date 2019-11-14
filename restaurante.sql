-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2019 a las 01:11:16
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombreProducto` varchar(60) NOT NULL,
  `precioProducto` int(11) NOT NULL,
  `fechaProducto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `precioProducto`, `fechaProducto`) VALUES
(1, 'Hamburguesa', 12000, '2019-11-12'),
(2, 'Hamburguesa', 2000, '2019-11-12'),
(3, 'Hamburguesa', 12000, '2019-11-11'),
(4, 'Pizza', 12000, '2019-11-13'),
(6, 'Pizza', 19000, '2019-11-13'),
(7, 'Pizza', 12000, '2019-11-13'),
(8, 'Pizza', 12000, '2019-11-13'),
(9, 'Pizza', 22000, '2019-11-13'),
(10, 'Pizza', 12000, '2019-11-13'),
(11, 'Pizza', 12000, '2019-11-13'),
(12, 'Pizza', 12000, '2019-11-13'),
(13, 'Pizza', 12000, '2019-11-13'),
(14, 'Pizza', 14000, '2019-11-13'),
(15, 'Pizza', 22000, '2019-11-13'),
(16, 'Pizza', 12000, '2019-11-13'),
(17, 'Pizza', 14000, '2019-11-13'),
(18, 'Hamburguesa', 14000, '2019-11-13'),
(19, 'Hamburguesa', 24000, '2019-11-13'),
(20, 'Pizza', 12000, '2019-11-13'),
(21, 'Hamgurguesa', 324234, '2019-11-08'),
(22, 'asdads', 32323, '2019-11-09'),
(23, 'asdads', 23332, '2019-11-07'),
(24, 'asdadads', 322332, '2019-11-03'),
(25, 'asdasd', 222, '2019-11-01'),
(26, 'Hamburguesa', 14000, '2019-11-13'),
(27, 'Pizza', 22000, '2019-11-13'),
(28, 'Hamburguesa', 24000, '2019-11-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
