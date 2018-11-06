-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2017 a las 04:48:38
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `qinventiva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `IdCategoria` int(11) NOT NULL,
  `Precio` float NOT NULL,
  `Descripción` varchar(400) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `Nombre`, `IdCategoria`, `Precio`, `Descripción`, `imagen`) VALUES
(7, 'Bola de Unicel 30 mm', 1, 41, '', '/Qinventiva/bola.jpg'),
(8, 'Borrador para Pizarrón', 1, 30, '', 'Qinventiva/borrador.jpg'),
(9, 'Borrador de Repuesto 2pzas', 1, 23, '', 'Qinventiva/brepuesto.jpg'),
(10, 'carboncillo medianos 6mm', 1, 50, '', 'Qinventiva/carboncillo.jpg'),
(11, 'Compas micrometrico', 1, 28, '', 'Qinventiva/compas.jpg'),
(12, 'Compas para encerado', 1, 35, '', 'Qinventiva/compas2.jpg'),
(13, 'Cuaderno cosido', 1, 25, '', 'Qinventiva/cuaderno.jpg'),
(14, 'Difumino marca artist', 1, 15, '', 'Qinventiva/difumino.jpg'),
(15, 'Folder de Plastico F-06 con Clip', 1, 12, '', 'Qinventiva/folder.jpg'),
(16, 'Juego de Geometria', 1, 22, '', 'Qinventiva/juegogeo.jpg'),
(17, 'Pegamento en barra marca liderpapel', 1, 18, '', 'Qinventiva/pegamento.jpg'),
(18, 'Pegamento adhesivo extra fuerte', 1, 30, '', 'Qinventiva/padhesivo.jpg'),
(19, 'Tinta china artist negra', 1, 80, '', 'Qinventiva/tintachina.jpg'),
(20, 'Plantilla csp de Rotulación', 1, 28, '', 'Qinventiva/plantilla.jpg'),
(21, 'Plastilina de barrita', 1, 23, '', 'Qinventiva/plastilina.jpg'),
(22, 'Tijera Barrilito 146-5 Escolar', 1, 12, '', 'Qinventiva/tijeras.jpg'),
(23, 'Portaplanos plastico extensible', 1, 65, '', 'Qinventiva/portaplanos.jpg'),
(24, 'Regla acrilica liderpapel', 1, 26, '', 'Qinventiva/reglacrilica.jpg'),
(25, 'Rotulador artline con 4 unidades', 1, 85, '', 'Qinventiva/rotulador.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Password` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `idArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
