-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-01-2014 a las 17:59:52
-- Versión del servidor: 5.5.34-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `gestos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `url_imagen` text NOT NULL,
  `url_video` text NOT NULL,
  `id_categoria_padre` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre`, `url_imagen`, `url_video`, `id_categoria_padre`, `status`) VALUES
(29, 'Abecedario', '1366x768saucy.png', '', 0, 1),
(30, 'Números', '../resources/categories/1366x768saucy.png', '../resources/categories/', 0, 1),
(31, 'Vocabulario', '../resources/categories/thecityofathousandminarzz0.jpg', '../resources/categories/Cuenta Nómina.webm', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplo`
--

CREATE TABLE IF NOT EXISTS `ejemplo` (
  `id_ejemplo` int(11) NOT NULL AUTO_INCREMENT,
  `id_gesto` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `url_imagen` text NOT NULL,
  PRIMARY KEY (`id_ejemplo`),
  KEY `fk_ejemplo_gesto_idx` (`id_gesto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gesto`
--

CREATE TABLE IF NOT EXISTS `gesto` (
  `id_gesto` int(11) NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `definicion` varchar(45) DEFAULT NULL,
  `url_video` text NOT NULL,
  PRIMARY KEY (`id_gesto`),
  KEY `fk_gest_categoria_idx` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejemplo`
--
ALTER TABLE `ejemplo`
  ADD CONSTRAINT `fk_ejemplo_gesto` FOREIGN KEY (`id_gesto`) REFERENCES `gesto` (`id_gesto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gesto`
--
ALTER TABLE `gesto`
  ADD CONSTRAINT `fk_gest_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
