-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2021 a las 15:49:22
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `zapas_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id producto` varchar(300) NOT NULL,
  `precio` int(200) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `id_usuario` int(255) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id producto` int(50) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `precio` int(200) NOT NULL,
  `stock` int(200) NOT NULL,
  `titulo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id producto`, `imagen`, `precio`, `stock`, `titulo`) VALUES
(1, 'hombre araña.jpg', 2500, 50, 'hombre araña'),
(2, 'adidas.jpg', 2500, 30, 'adidas'),
(3, 'guillermina nena.jpg', 2300, 50, 'guillermina nena'),
(4, 'zapatilla niño.jpg', 2800, 30, 'zapatilla niño'),
(5, 'zapatilla bebe.jpg', 1500, 50, 'zapatilla bebe'),
(6, 'zapato niño.jpg', 2400, 30, 'zapato niño'),
(7, 'mickey.jpg', 1900, 50, 'mickey');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(256) NOT NULL,
  `habilitado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `dni`, `email`, `contrasena`, `habilitado`) VALUES
('Cintia', 'Cocuzza', '31124743', 'cintiagcocuzza@gmail.com', 'sofia2015', 0),
('Cintia', 'Cocuzza', '31124743', 'cintiagcocuzza@gmail.com', 'sofia2015', 0),
('', '', '', '', '', 1),
('', '', '', '', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id producto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
