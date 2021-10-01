-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-10-2021 a las 09:52:37
-- Versión del servidor: 10.5.12-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `u693577563_appsoftware`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE `company` (
  `idCompany` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `nit` int(11) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`idCompany`, `nombre`, `nit`, `telefono`, `direccion`, `correo`) VALUES
(1, 'appSoftware', 1234, '98765', 'avnd', 'appSoftware@appSoftware.com'),
(2, 'farmacia', 7383627, '8374643', 'falsa 123', 'farmacia@farmacia.com'),
(3, 'tienda', 844748, '74644536', '123', 'tienda@tienda.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historiasusuario`
--

CREATE TABLE `historiasusuario` (
  `idHu` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  `idProyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historiasusuario`
--

INSERT INTO `historiasusuario` (`idHu`, `nombre`, `estado`, `idProyecto`) VALUES
(1, 'login', 0, 1),
(2, 'registro', 0, 1),
(3, 'login', 0, 2),
(4, 'registro', 0, 2),
(5, 'validar saldo', 0, 3),
(6, 'consultar caja', 0, 2),
(7, 'consultar nomina', 0, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `idProyecto` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `idCompany` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`idProyecto`, `nombre`, `idCompany`) VALUES
(1, 'banco', 1),
(2, 'facturacion', 2),
(3, 'nomina', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `idTicket` int(11) NOT NULL,
  `comentario` varchar(40) NOT NULL,
  `estado` int(11) NOT NULL,
  `idHu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`idTicket`, `comentario`, `estado`, `idHu`) VALUES
(1, 'crear formulario', 2, 1),
(2, 'pruebas', 2, 1),
(3, 'fromulario', 1, 2),
(4, 'pruebas', 1, 2),
(5, 'crear form', 2, 3),
(6, 'pruebas', 2, 3),
(7, 'formulari reg', 1, 4),
(8, 'pruebas', 1, 4),
(9, 'consultar saldo', 1, 5),
(10, 'pruebas', 2, 5),
(11, 'form caja', 2, 6),
(12, 'form', 1, 7),
(13, 'pruebas', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `idCompany` int(11) NOT NULL,
  `tipoUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `usuario`, `contrasena`, `idCompany`, `tipoUsuario`) VALUES
(1, 'sebastiangiraldo0917@gmail.com', '202cb962ac59075b964b07152d234b70', 1, 2),
(2, 'prueba@prueba1.com', '202cb962ac59075b964b07152d234b70', 1, 1),
(3, 'prueba@prueba2.com', '202cb962ac59075b964b07152d234b70', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`idCompany`);

--
-- Indices de la tabla `historiasusuario`
--
ALTER TABLE `historiasusuario`
  ADD PRIMARY KEY (`idHu`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`idProyecto`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`idTicket`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `company`
--
ALTER TABLE `company`
  MODIFY `idCompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historiasusuario`
--
ALTER TABLE `historiasusuario`
  MODIFY `idHu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `idProyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `idTicket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
