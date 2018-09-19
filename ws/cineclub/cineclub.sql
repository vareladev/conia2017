-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2017 a las 03:22:00
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cineclub`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actorxpelicula`
--

CREATE TABLE `actorxpelicula` (
  `idActor` int(11) NOT NULL,
  `idPelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `director` varchar(200) DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id`, `nombre`, `pais`, `director`, `anio`, `duracion`, `imagen`) VALUES
(1, 'Forrest Gump', 'Estados Unidos', 'Rober Zemackis', 1994, 142, 'ruta'),
(2, 'Titanic', 'Estados Unidos', 'James Cameron', 1997, 195, 'ruta'),
(3, '', '', '', 0, 0, 'ruta'),
(4, 'Avatar', 'Estados Unidos', 'James Cameron', 2011, 125, 'ruta'),
(5, 'A', 'A', 'A', 1, 1, 'ruta'),
(6, 'npo', 'A', 'A', 1, 1, 'ruta'),
(7, 'q', 'q', 'q', 11, 1, 'ruta'),
(8, 'Hola', 'Mundo', 'HH', 12, 12, 'ruta'),
(10, 'Y', 'Y', 'Y', 2, 2, 'ruta'),
(11, '1', '1', '1', 1, 1, 'ruta'),
(12, 'fghj', 'fghj', 'cfghj', 56, 546, 'ruta'),
(13, 'f', 'gh', 'hj', 12, 12, 'ruta'),
(14, 'm', 'm', 'm', 9, 9, 'ruta'),
(15, 'p', 'p', 'p', 9, 9, 'ruta'),
(16, 'i', 'i', 'i', 7, 7, 'ruta'),
(17, 'o', 'o', 'o', 0, 0, 'ruta'),
(18, 'z', 'z', 'z', 2, 2, 'ruta'),
(19, 'n', 'n', 'n', 9, 9, 'ruta'),
(20, 'movie', 'country', 'director', 2000, 100, 'ruta'),
(21, '', '', '', 0, 0, 'ruta'),
(22, 'Mov', 'Yemen', 'dir', 1987, 100, 'ruta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `id` int(11) NOT NULL,
  `fecha` text NOT NULL,
  `hora` text NOT NULL,
  `idPelicula` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombreUsuario` varchar(200) NOT NULL,
  `contrasenia` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rol` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombreUsuario`, `contrasenia`, `apellidos`, `nombres`, `email`, `rol`) VALUES
('root', '123456', 'Rivera Cisco', 'César Alfredo', '00042114uca.edu.sv', b'1'),
('User', '123456', 'Apellidos', 'Nombres', 'correo@mail.com', b'0'),
('User2', 'ggizi', 'Hola', 'Hola', 'mail', b'0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actorxpelicula`
--
ALTER TABLE `actorxpelicula`
  ADD KEY `fk_idActor` (`idActor`),
  ADD KEY `fk_idPelicula2` (`idPelicula`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idPelicula` (`idPelicula`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombreUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actorxpelicula`
--
ALTER TABLE `actorxpelicula`
  ADD CONSTRAINT `fk_idActor` FOREIGN KEY (`idActor`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `fk_idPelicula2` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`id`);

--
-- Filtros para la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD CONSTRAINT `fk_idPelicula` FOREIGN KEY (`idPelicula`) REFERENCES `pelicula` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
