
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2016 a las 18:29:18
-- Versión del servidor: 10.0.20-MariaDB
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `u518957755_bfr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correoElectronico` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `pecho_izquierdo` varchar(2) DEFAULT NULL,
  `pecho_derecho` varchar(2) DEFAULT NULL,
  `pez_izq` tinyint(1) DEFAULT NULL,
  `pez_der` tinyint(1) DEFAULT NULL,
  `total` varchar(2) DEFAULT NULL,
  `lech_mat` varchar(3) DEFAULT NULL,
  `lech_madre` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `correoElectronico`, `fecha`, `hora`, `pecho_izquierdo`, `pecho_derecho`, `pez_izq`, `pez_der`, `total`, `lech_mat`, `lech_madre`) VALUES
(41, 'ivan@josipa.com', '2016-11-12', '01:40:00', '15', '11', 0, 0, '26', '30', ''),
(40, 'ivan@josipa.com', '2016-11-11', '21:45:00', '16', '27', 0, 0, '43', '30', ''),
(39, 'ivan@josipa.com', '2016-11-11', '19:30:00', '25', '25', 0, 0, '50', '', ''),
(38, 'ivan@josipa.com', '2016-11-11', '17:30:00', '19', '20', 0, 0, '39', '30', ''),
(37, 'ivan@josipa.com', '2016-11-11', '15:30:00', '22', '17', 0, 0, '39', '30', ''),
(36, 'ivan@josipa.com', '2016-11-11', '12:50:00', '', '', 0, 0, '0', '60', ''),
(35, 'ivan@josipa.com', '2016-11-11', '10:15:00', '19', '26', 0, 0, '45', '30', ''),
(34, 'ivan@josipa.com', '2016-11-11', '08:15:00', '21', '16', 0, 0, '37', '', ''),
(33, 'ivan@josipa.com', '2016-11-11', '06:05:00', '15', '19', 0, 0, '34', '30', ''),
(32, 'ivan@josipa.com', '2016-11-11', '02:35:00', '20', '20', 0, 0, '40', '30', ''),
(31, 'ivan@josipa.com', '2016-11-10', '17:55:00', '15', '18', 0, 0, '33', '30', ''),
(30, 'ivan@josipa.com', '2016-11-10', '15:50:00', '17', '15', 0, 0, '32', '30', ''),
(29, 'ivan@josipa.com', '2016-11-10', '13:45:00', '22', '20', 0, 0, '42', '30', ''),
(28, 'ivan@josipa.com', '2016-11-10', '09:10:00', '20', '20', 0, 0, '40', '30', ''),
(27, 'ivan@josipa.com', '2016-11-10', '05:39:00', '20', '20', 0, 0, '40', '30', ''),
(26, 'ivan@josipa.com', '2016-11-10', '01:35:00', '30', '26', 0, 0, '56', '30', ''),
(42, 'ivan@josipa.com', '2016-11-12', '04:25:00', '18', '15', 0, 0, '33', '30', ''),
(43, 'ivan@josipa.com', '2016-11-12', '07:03:00', '20', '20', 0, 0, '40', '0', ''),
(44, 'ivan@josipa.com', '2016-11-12', '09:30:00', '20', '20', 0, 0, '40', '30', ''),
(45, 'ivan@josipa.com', '2016-11-12', '11:07:00', '20', '20', 0, 0, '40', '30', ''),
(46, 'ivan@josipa.com', '2016-11-12', '13:16:00', '20', '20', 0, 0, '40', '30', ''),
(47, 'ivan@josipa.com', '2016-11-12', '14:50:00', '20', '20', 0, 0, '40', '60', ''),
(48, 'ivan@josipa.com', '2016-11-12', '18:20:00', '20', '20', 0, 0, '40', '30', ''),
(49, 'ivan@josipa.com', '2016-11-12', '21:40:00', '15', '10', 0, 0, '25', '30', ''),
(50, 'ivan@josipa.com', '2016-11-13', '04:45:00', '12', '20', 0, 0, '32', '30', ''),
(51, 'ivan@josipa.com', '2016-11-13', '07:00:00', '20', '10', 0, 0, '30', '30', ''),
(52, 'ivan@josipa.com', '2016-11-13', '09:45:00', '', '', 0, 0, '0', '', '90'),
(53, 'ivan@josipa.com', '2016-11-13', '12:30:00', '15', '16', 0, 0, '31', '30', ''),
(54, 'ivan@josipa.com', '2016-11-13', '14:55:00', '7', '16', 0, 0, '23', '', ''),
(55, 'ivan@josipa.com', '2016-11-13', '15:45:00', '20', '25', 0, 0, '45', '30', ''),
(56, 'ivan@josipa.com', '2016-11-13', '19:30:00', '10', '0', 0, 0, '10', '', '70'),
(57, 'ivan@josipa.com', '2016-11-13', '21:45:00', '20', '20', 0, 0, '40', '40', ''),
(58, 'ivan@josipa.com', '2016-11-13', '01:30:00', '17', '13', 0, 0, '30', '30', ''),
(59, 'ivan@josipa.com', '2016-11-14', '04:20:00', '10', '20', 0, 0, '30', '30', ''),
(60, 'ivan@josipa.com', '2016-11-14', '06:30:00', '15', '21', 0, 0, '36', '30', ''),
(61, 'ivan@josipa.com', '2016-11-14', '09:45:00', '25', '25', 0, 0, '50', '30', ''),
(62, 'ivan@josipa.com', '2016-11-14', '11:30:00', '35', '35', 0, 0, '70', '30', ''),
(63, 'ivan@josipa.com', '2016-11-14', '13:45:00', '40', '40', 0, 0, '80', '30', ''),
(64, 'ivan@josipa.com', '2016-11-14', '16:25:00', '40', '40', 0, 0, '80', '30', ''),
(65, 'ivan@josipa.com', '2016-11-14', '18:15:00', '0', '0', 0, 0, '0', '60', ''),
(66, 'ivan@josipa.com', '2016-11-14', '21:15:00', '25', '25', 0, 0, '50', '30', ''),
(67, 'ivan@josipa.com', '2016-11-15', '02:20:00', '30', '30', 0, 0, '60', '30', ''),
(68, 'ivan@josipa.com', '2016-11-15', '04:55:00', '25', '25', 0, 0, '50', '30', ''),
(69, 'ivan@josipa.com', '2016-11-15', '10:55:00', '20', '12', 0, 0, '32', '30', ''),
(70, 'ivan@josipa.com', '2016-11-15', '13:10:00', '18', '22', 0, 0, '40', '30', ''),
(71, 'ivan@josipa.com', '2016-11-15', '15:00:00', '10', '05', 0, 0, '15', '', ''),
(72, 'ivan@josipa.com', '2016-11-15', '17:00:00', '20', '20', 0, 0, '40', '30', ''),
(73, 'ivan@josipa.com', '2016-11-15', '20:15:00', '20', '20', 0, 0, '40', '60', ''),
(74, 'ivan@josipa.com', '2016-11-16', '00:40:00', '17', '15', 0, 0, '32', '60', ''),
(75, 'ivan@josipa.com', '2016-11-16', '03:00:00', '25', '20', 0, 0, '45', '', ''),
(76, 'ivan@josipa.com', '2016-11-16', '06:00:00', '15', '15', 0, 0, '30', '30', ''),
(77, 'ivan@josipa.com', '2016-11-16', '08:05:00', '17', '18', 0, 0, '35', '30', ''),
(78, 'ivan@josipa.com', '2016-11-16', '11:50:00', '20', '25', 0, 0, '45', '60', ''),
(79, 'ivan@josipa.com', '2016-11-16', '15:00:00', '20', '18', 0, 0, '38', '60', ''),
(80, 'ivan@josipa.com', '2016-11-16', '18:00:00', '0', '0', 0, 0, '0', '', '90'),
(81, 'ivan@josipa.com', '2016-11-16', '20:30:00', '20', '20', 0, 0, '40', '30', ''),
(82, 'ivan@josipa.com', '2016-11-17', '00:50:00', '17', '17', 0, 0, '34', '30', ''),
(83, 'ivan@josipa.com', '2016-11-17', '04:00:00', '15', '15', 0, 0, '30', '30', ''),
(84, 'ivan@josipa.com', '2016-11-17', '07:00:00', '19', '21', 0, 0, '40', '30', ''),
(85, 'ivan@josipa.com', '2016-11-17', '10:10:00', '20', '20', 0, 0, '40', '30', ''),
(86, 'ivan@josipa.com', '2016-11-17', '12:25:00', '15', '20', 0, 0, '35', '30', ''),
(87, 'ivan@josipa.com', '2016-11-17', '13:55:00', '5', '7', 0, 0, '12', '30', ''),
(88, 'ivan@josipa.com', '2016-11-17', '16:53:00', '20', '15', 0, 0, '35', '30', ''),
(89, 'ivan@josipa.com', '2016-11-17', '18:55:00', '30', '20', 0, 0, '50', '30', ''),
(90, 'ivan@josipa.com', '2016-11-17', '21:53:00', '22', '19', 0, 0, '41', '60', ''),
(91, 'ivan@josipa.com', '2016-11-18', '04:40:00', '24', '27', 0, 0, '51', '30', ''),
(92, 'ivan@josipa.com', '2016-11-18', '08:15:00', '25', '25', 0, 0, '50', '60', ''),
(93, 'ivan@josipa.com', '2016-11-18', '11:28:00', '27', '20', 0, 0, '47', '30', ''),
(94, 'ivan@josipa.com', '2016-11-18', '15:40:00', '27', '25', 0, 0, '52', '30', ''),
(95, 'ivan@josipa.com', '2016-11-18', '17:50:00', '25', '25', 0, 0, '50', '30', ''),
(96, 'ivan@josipa.com', '2016-11-18', '20:00:00', '25', '25', 0, 0, '50', '', ''),
(97, 'juancolares@hotmail.com', '2016-11-18', '22:47:00', '23', '25', 1, 0, '48', '', ''),
(98, 'pablo.a.politi@gmail.com', '2016-02-28', '23:48:00', '', '', 1, 0, '', '', ''),
(99, 'ivan@josipa.com', '2016-11-18', '21:55:00', '25', '25', 0, 0, '50', '60', ''),
(100, 'ivan@josipa.com', '2016-11-19', '02:45:00', '25', '20', 0, 0, '45', '', ''),
(101, 'ivan@josipa.com', '2016-11-19', '06:45:00', '21', '25', 0, 0, '46', '60', ''),
(102, 'ivan@josipa.com', '2016-11-19', '09:05:00', '25', '1', 0, 0, '26', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correoElectronico` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correoElectronico`) VALUES
(2, 'luis@gmail.com'),
(3, 'luis2@gmail.com'),
(4, 'carlos@email.com'),
(5, 'arturo@gmail.com'),
(6, 'leandro@gmail.com'),
(7, 'josipakovacprada@gmail.com'),
(8, 'carmen@post.com'),
(9, 'carola@gmail.com'),
(10, 'car@mar.com'),
(11, 'arturito@gmil.com'),
(12, 'usuario@gmail.com'),
(13, 'lautaro@gmail.com'),
(14, 'leandroprada@gmail.com'),
(15, 'ivan@josipa.com'),
(16, 'juancolares@hotmail.com'),
(17, 'pablo.a.politi@gmail.com'),
(18, 'patrinan@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
