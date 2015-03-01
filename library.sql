-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2015 a las 09:59:24
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `library`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id_libro` int(11) NOT NULL,
  `book` varchar(1000) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `books`
--

INSERT INTO `books` (`id_libro`, `book`, `author`) VALUES
(1, 'Creadores de Riqueza', 'Alejandro Gómez'),
(2, 'El japonés que estrelló el tren para ganar tiempo', 'Gabriel Ginebra'),
(3, 'La inteligencia ejecutiva', 'José Antonio Marina'),
(4, 'La procrastinación eficiente', 'John Perry'),
(5, 'Lo que ahora importa', 'Gary Hamel'),
(6, 'Meditando el management…y la vida', 'Ventura Ruperti y Jordi Nadal'),
(7, 'Por qué fracasan los países', 'Daron Acemoglu y James Robinson'),
(8, '¿Puedo comprar una empresa?', 'Enrique Quemada Clariana'),
(9, 'Resonancia', 'Nancy Duarte'),
(10, '#socialholic', '#socialholic, de Fernando y Juan Luis Polo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_libro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `books`
--
ALTER TABLE `books`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
