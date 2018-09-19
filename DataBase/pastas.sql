-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2018 a las 19:29:37
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pastas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `harina`
--

CREATE TABLE `harina` (
  `id_harina` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `harina`
--

INSERT INTO `harina` (`id_harina`, `tipo`) VALUES
(1, 'Integral'),
(2, 'Blanca'),
(3, 'Mandioca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasta`
--

CREATE TABLE `pasta` (
  `id_pasta` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fk_harina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pasta`
--

INSERT INTO `pasta` (`id_pasta`, `nombre`, `fk_harina`) VALUES
(1, 'Raviol', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `clave` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `harina`
--
ALTER TABLE `harina`
  ADD PRIMARY KEY (`id_harina`);

--
-- Indices de la tabla `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`id_pasta`),
  ADD KEY `fk_harina` (`fk_harina`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `harina`
--
ALTER TABLE `harina`
  MODIFY `id_harina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pasta`
--
ALTER TABLE `pasta`
  MODIFY `id_pasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pasta`
--
ALTER TABLE `pasta`
  ADD CONSTRAINT `pasta_ibfk_1` FOREIGN KEY (`fk_harina`) REFERENCES `harina` (`id_harina`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
