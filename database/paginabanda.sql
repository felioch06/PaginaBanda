-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-05-2020 a las 04:44:53
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
-- Base de datos: `paginabanda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotaciones`
--

CREATE TABLE `anotaciones` (
  `id_anotacion` int(11) NOT NULL,
  `titulo_anotacion` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `anotacion` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id_cancion` int(11) NOT NULL,
  `nombre_cancion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `letra_disponible` tinyint(1) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `letras`
--

CREATE TABLE `letras` (
  `id_letra` int(11) NOT NULL,
  `letra` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `fk_cancion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partituras`
--

CREATE TABLE `partituras` (
  `id_partitura` int(11) NOT NULL,
  `imagen_partitura` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8_unicode_ci NOT NULL,
  `fk_cancion` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(45) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD PRIMARY KEY (`id_anotacion`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_cancion`),
  ADD KEY `fk_usuario` (`fk_usuario`);

--
-- Indices de la tabla `letras`
--
ALTER TABLE `letras`
  ADD PRIMARY KEY (`id_letra`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_cancion` (`fk_cancion`);

--
-- Indices de la tabla `partituras`
--
ALTER TABLE `partituras`
  ADD PRIMARY KEY (`id_partitura`),
  ADD KEY `fk_usuario` (`fk_usuario`),
  ADD KEY `fk_cancion` (`fk_cancion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  MODIFY `id_anotacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_cancion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `letras`
--
ALTER TABLE `letras`
  MODIFY `id_letra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `partituras`
--
ALTER TABLE `partituras`
  MODIFY `id_partitura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anotaciones`
--
ALTER TABLE `anotaciones`
  ADD CONSTRAINT `anotaciones_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD CONSTRAINT `canciones_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`);

--
-- Filtros para la tabla `letras`
--
ALTER TABLE `letras`
  ADD CONSTRAINT `letras_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `letras_ibfk_2` FOREIGN KEY (`fk_cancion`) REFERENCES `canciones` (`id_cancion`);

--
-- Filtros para la tabla `partituras`
--
ALTER TABLE `partituras`
  ADD CONSTRAINT `partituras_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `partituras_ibfk_2` FOREIGN KEY (`fk_cancion`) REFERENCES `canciones` (`id_cancion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
