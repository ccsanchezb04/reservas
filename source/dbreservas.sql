-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2017 a las 03:17:10
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbreservas`
--
CREATE DATABASE IF NOT EXISTS `dbreservas` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbreservas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`clie_id` int(11) NOT NULL,
  `clie_nume_docu` text NOT NULL,
  `clie_nombre` text NOT NULL,
  `clie_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
`rese_id` int(11) NOT NULL,
  `rese_clie_id` int(11) NOT NULL,
  `rese_fecha` date NOT NULL,
  `rese_valo_tota` int(11) NOT NULL,
  `rese_observaciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rese_deta`
--

CREATE TABLE IF NOT EXISTS `rese_deta` (
`rd_id` int(11) NOT NULL,
  `rd_rese_id` int(11) NOT NULL,
  `rd_cantidad` int(11) NOT NULL,
  `rd_serv_id` int(11) NOT NULL,
  `rd_valo_unit` int(11) NOT NULL,
  `rd_valo_tota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
`serv_id` int(11) NOT NULL,
  `ser_nombre` text NOT NULL,
  `ser_descripcion` text NOT NULL,
  `ser_valo_serv` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`usua_id` int(11) NOT NULL,
  `usua_login` text NOT NULL,
  `usua_contrasena` text NOT NULL,
  `usua_estado` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`clie_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
 ADD PRIMARY KEY (`rese_id`);

--
-- Indices de la tabla `rese_deta`
--
ALTER TABLE `rese_deta`
 ADD PRIMARY KEY (`rd_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
 ADD PRIMARY KEY (`serv_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`usua_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `clie_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
MODIFY `rese_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rese_deta`
--
ALTER TABLE `rese_deta`
MODIFY `rd_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `usua_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
