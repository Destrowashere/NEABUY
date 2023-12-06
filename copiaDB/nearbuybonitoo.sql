-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2023 a las 21:17:06
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
-- Base de datos: `nearbuybonitoo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role` enum('Super Administrador','Administrador','Moderador') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `username`, `password`, `email`, `role`, `created_at`, `updated_at`) VALUES
(1, 'DWH', '$2y$10$ZG9IREgClSXnf4lTx.JBP.HSDq.7vMxM/dQNJhaY5CYD3xvFSDT0i', 'felixsantiagosantafe2017@gmail.com', 'Administrador', '2023-12-06 20:03:22', '2023-12-06 20:03:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `claves`
--

CREATE TABLE `claves` (
  `id_Cliente` int(30) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `contrasena` varchar(270) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `claves`
--

INSERT INTO `claves` (`id_Cliente`, `Correo`, `contrasena`) VALUES
(60, 'danguz@gmail.com', '$2y$10$UqPBErK9BqvTFazeCxuKO.CXyyCR7PH7QF0IxEp4ybSjBe4smpCiK'),
(63, 'juan@gmail.com', '$2y$10$9X3DWC/QCh29rhSKEv/1v.M1B/HNTtObevdqHZElxtOzlrqJ7TIAa'),
(64, 'dan@gmail.com', '$2y$10$H0djrcA99on4H3XZ/uhFHODJn3L48Ir1/PQRgbEblxO/VFAXhNTf6'),
(65, 'felix@gmail.com', '$2y$10$bIkKLjxzk7IA/a0nR2wHZOFD.lFRUkKwNpFqeb9O9cKtEjgIno79O'),
(66, 'mona@gmail.com', '$2y$10$z8jL9P2E.mqjl8kenlmJveEKNo8qAx4S8bxXYhec15Adk/a/54.b.'),
(67, 'diomede@gmail.com', '$2y$10$cakf8.o4.gMPSaGrpF4DFus1ZwBFskhU2qTJazkO71gUQDCI9mVR6'),
(68, 'diomede@gmail.com', '$2y$10$K7FSUsLezMPS8HzDEBswVuHLJ23E9n.smnyRWvZYFZ1jCZzIniZxe'),
(69, 'karfo@gmail.com', '$2y$10$rU02rRDNDyeLo8XAgeOBlO55jvvoCsI84GjjphbShl4C/HpJa2Uo.'),
(72, 'camilo@gmail.com', '$2y$10$uEokBqPny.J82QrMahumW.MB/ZoP.ZTVZxSwOnLDcpFGnjS87kxSG');

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
(59, 'Andres', 'Cardenas', 3257291332, 'asdads', '2023-11-26', 472941702),
(60, 'Daniel', 'Guzman', 3258129423, 'Tintal', '2023-11-27', 2011039265),
(63, 'juan', 'ortiz', 3157293132, 'Avenida guayacanes', '2023-11-28', 2931893282),
(64, 'Daniel', 'ortiz', 3258271323, 'Guayacanes', '2023-11-29', 1013827492),
(65, 'felix', 'santafe', 3223969154, 'calle 8a', '2023-11-30', 1011091547),
(66, 'Valentina', 'Velazquez', 314589329, 'Valladolid', '2023-11-30', 2938192372),
(67, 'diomedez', 'dias', 3232351354, 'CC Andino', '2023-11-30', 7493729311),
(68, 'diomedez', 'dias', 3232351354, 'CC Andino', '2023-11-30', 7493729311),
(69, 'karen', 'forero', 3112285480, 'nueva castilla', '2023-11-30', 3829372822),
(71, 'Carlos', 'ortiz', 3257333222, 'Villa alsacia', '2023-12-06', 47294444),
(72, 'camilo', 'mendoza', 321424273, 'Calle 8a', '2023-12-06', 203817472),
(73, 'Cecilia', 'ibarra', 3257294444, 'Villa alsacia', '2023-12-06', 472941222);

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
('Pan', '800', 'panpan', 5),
('panes', '500', 'panpanpan', 6),
('panes', '500', 'panpanpan', 7),
('panes', '500', 'panpanpan', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidor`
--

CREATE TABLE `repartidor` (
  `id_Cliente` int(11) NOT NULL,
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
(59, 'Tendero'),
(60, 'Repartidor'),
(63, 'Repartidor'),
(64, 'Repartidor'),
(66, 'Cliente'),
(67, 'Tendero'),
(68, 'Tendero'),
(69, 'Cliente'),
(72, 'Tendero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tendero`
--

CREATE TABLE `tendero` (
  `id_Cliente` int(11) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `NTienda` varchar(60) NOT NULL,
  `Id_Producto` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

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
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_Cliente`);

--
-- Indices de la tabla `tendero`
--
ALTER TABLE `tendero`
  ADD PRIMARY KEY (`id_Cliente`),
  ADD UNIQUE KEY `Id_Producto` (`Id_Producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_Cliente` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_Producto` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT de la tabla `repartidor`
--
ALTER TABLE `repartidor`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `tendero`
--
ALTER TABLE `tendero`
  MODIFY `id_Cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `claves`
--
ALTER TABLE `claves`
  ADD CONSTRAINT `claves_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id_Cliente`);

--
-- Filtros para la tabla `repartidor`
--
ALTER TABLE `repartidor`
  ADD CONSTRAINT `repartidor_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id_Cliente`);

--
-- Filtros para la tabla `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id_Cliente`);

--
-- Filtros para la tabla `tendero`
--
ALTER TABLE `tendero`
  ADD CONSTRAINT `tendero_ibfk_1` FOREIGN KEY (`id_Cliente`) REFERENCES `clientes` (`id_Cliente`),
  ADD CONSTRAINT `tendero_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `producto` (`Id_Producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
