-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2023 a las 04:33:07
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
-- Base de datos: `nearbuy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE `claves` (
  `id_Cliente` int(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `claves`
--

INSERT INTO `claves` (`id_Cliente`, `Correo`, `contrasena`) VALUES
(7, 'felixsantiagosantafe@gmail.com', '$2y$10$5o07HWEuO0Hs/vUO1FXsKORiPfY/e0BAcBjPZjhXOKK'),
(8, 'felix@gmail.com', '$2y$10$f/W0z/ugE7.7Rh3AjGDuZOJaCyMgqRz5Ccnoesg7kpL'),
(9, 'andre@gmail.com', '$2y$10$w1VazuTr.VgS0K9os2BWzeBDprHu.G3.fa2zI7BxkSK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_Cliente` int(30) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` bigint(10) NOT NULL,
  `Direccion` varchar(60) NOT NULL,
  `Fecha` date NOT NULL,
  `Cedula` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_Cliente`, `Nombre`, `Apellido`, `Telefono`, `Direccion`, `Fecha`, `Cedula`) VALUES
(1, 'Felix', 'Santafe', 3223969154, 'rerere', '2023-09-13', 1011091547),
(5, 'Juan', 'Hernandez', 32135221, 'Calle 8a 92-71 M5 L3', '2023-09-20', 10238213),
(6, 'Raul', 'Poveda', 3223969154, 'Calle 8a 92-71', '2023-09-20', 1011091547),
(7, 'Felix', 'Santafe', 3223969154, 'calle 8a', '2023-09-22', 1011091547),
(8, 'Felix', 'Santafe', 3223969154, 'calle 8a', '2023-09-22', 1011091547),
(9, 'Andres', 'Leon', 3142759521, 'Melgar', '2023-09-22', 1202132134);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Nombre` varchar(30) NOT NULL,
  `Precio` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Id_Producto` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Nombre`, `Precio`, `Descripcion`, `Id_Producto`) VALUES
('Pan', '400', 'Panes', 1),
('Pan', '300', 'pna pna', 2),
('Pan', '', '', 3),
('Pan', '', '', 4),
('Pan', '800', 'panpan', 5),
('panes', '500', 'panpanpan', 6),
('panes', '500', 'panpanpan', 7),
('panes', '500', 'panpanpan', 8),
('Gomitas', '500', 'Dulce', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidor`
--

CREATE TABLE `repartidor` (
  `id_repartidor` int(11) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `medioTrasp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_Cliente` int(11) NOT NULL,
  `Rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_Cliente`, `Rol`) VALUES
(9, 'Repartidor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tendero`
--

CREATE TABLE `tendero` (
  `id_tendero` int(11) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `NTienda` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `claves`
--
ALTER TABLE `claves`
  ADD UNIQUE KEY `id_Cliente` (`id_Cliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- Indices de la tabla `repartidor`
--
ALTER TABLE `repartidor`
  ADD PRIMARY KEY (`id_repartidor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `tendero`
--
ALTER TABLE `tendero`
  ADD PRIMARY KEY (`id_tendero`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_Cliente` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `repartidor`
--
ALTER TABLE `repartidor`
  MODIFY `id_repartidor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tendero`
--
ALTER TABLE `tendero`
  MODIFY `id_tendero` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `claves`
--
ALTER TABLE `claves`
  ADD CONSTRAINT `claves_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
