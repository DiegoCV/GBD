-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2018 a las 21:31:40
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `idADMINISTRADOR` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `APELLIDO` varchar(45) NOT NULL,
  `USUARIO` varchar(45) NOT NULL,
  `PASS` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`idADMINISTRADOR`, `NOMBRE`, `APELLIDO`, `USUARIO`, `PASS`) VALUES
(1, 'Diego', 'Carrascal', 'DiegoC', 'los'),
(2, 'Fresa', 'Roja', 'RF', 'de'),
(3, 'Alirio', 'Villamizar', 'av', 'av'),
(4, 'Diego', 'vre', 'a', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idCATEGORIA` int(11) NOT NULL,
  `NOMBRE_CATEGORIA` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idCATEGORIA`, `NOMBRE_CATEGORIA`) VALUES
(1, 'LACTEAOS DE SOYA DE VACA'),
(2, 'Jugos empacados'),
(3, 'Licor'),
(4, 'Nueces'),
(5, 'Congelados'),
(6, 'Frutos secos'),
(7, 'Refrescos'),
(8, 'Vinos'),
(9, 'Conservas de pescado'),
(10, 'Encurtidos salinos'),
(11, 'Productos típicos de otros países'),
(12, 'Conservas cárnicas'),
(13, 'Legumbres'),
(14, 'Conservas vegetales'),
(15, 'Congelados'),
(16, 'Lácteos'),
(17, 'Embutidos envasados'),
(18, 'Salsas'),
(19, 'Salazones'),
(20, 'Productos biológicos'),
(21, 'Café'),
(22, 'Galletas y chocolate'),
(23, 'Caramelos y bombones'),
(24, 'Conservas de fruta'),
(25, 'Zumos y néctares'),
(26, 'Alimentos para animales'),
(27, 'Miel'),
(28, 'Snacks'),
(29, 'Huevos'),
(30, 'Charcutería'),
(31, 'Quesos'),
(32, 'Carnicería'),
(33, 'Pescados y mariscos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCLIENTES` int(11) NOT NULL,
  `NOMBRE_CLIENTES` varchar(45) DEFAULT NULL,
  `DIRECCION_CLIENTES` varchar(45) DEFAULT NULL,
  `FECHANACIMIENTO_CLIENTES` date DEFAULT NULL,
  `EMAIL_CLIENTES` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCLIENTES`, `NOMBRE_CLIENTES`, `DIRECCION_CLIENTES`, `FECHANACIMIENTO_CLIENTES`, `EMAIL_CLIENTES`) VALUES
(1, 'Ordinario', 'Ordinario', '2018-06-21', 'gjhfgj'),
(2, 'El señor fia', '2018-06-13', '2018-06-13', 'fieiie@dsfd'),
(1587, 'Corredor', 'calle lopez 25 ', '2018-06-06', 'fieiie@dsfd'),
(4787, 'Su gran idea', 'calle de los farsantes', '2018-06-02', 'fieiie@dsfd'),
(100499, 'Su gran idea', 'calle de los farsantes', '2018-06-13', 'fieiie@dsfd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idPRODUCTOS` int(11) NOT NULL,
  `PROVEEDORES_idPROVEEDORES` int(11) DEFAULT NULL,
  `NOMBRE_PRODUCTO` varchar(45) DEFAULT NULL,
  `UNIDAD_PRODUCTO` varchar(45) DEFAULT NULL,
  `COSTO_PRODUCTO` varchar(45) DEFAULT NULL,
  `CANTIDAD_PRODUCTO` int(11) DEFAULT NULL,
  `PRECIOVENTA_PRODUCTO` varchar(45) DEFAULT NULL,
  `VALORMINIMO_PRODUCTO` varchar(45) DEFAULT NULL,
  `FECHAINGRESO_PRODUCTO` datetime DEFAULT NULL,
  `FECHAVENCIMIENTO_PRODUCTO` datetime DEFAULT NULL,
  `CATEGORIA_idCATEGORIA` int(11) NOT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idPRODUCTOS`, `PROVEEDORES_idPROVEEDORES`, `NOMBRE_PRODUCTO`, `UNIDAD_PRODUCTO`, `COSTO_PRODUCTO`, `CANTIDAD_PRODUCTO`, `PRECIOVENTA_PRODUCTO`, `VALORMINIMO_PRODUCTO`, `FECHAINGRESO_PRODUCTO`, `FECHAVENCIMIENTO_PRODUCTO`, `CATEGORIA_idCATEGORIA`, `TIENDA_idTIENDA`) VALUES
(56, 1, 'Freskolita', 'liytro', '2000', 200, '2500', '2300', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1),
(57, 3, 'CocaCola', 'Lt', '5000', 3, '5500', '5300', '2018-06-12 00:00:00', '2018-06-21 00:00:00', 2, 1),
(58, 3, 'CocaCola', 'Lt', '5000', 3, '5500', '5300', '2018-06-12 00:00:00', '2018-06-21 00:00:00', 2, 1),
(60, 3, 'sas', 'asa', 'sas', 0, '5000', '5000', '2018-05-31 00:00:00', '2018-06-14 00:00:00', 1, 1),
(70, 1, 'Huevos KIKE', 'Cartones', '100000', 20, '8000', '7500', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 29, 1),
(71, 1, 'Pepsi', 'botella ', '70000', 50, '2400', '2300', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 1),
(72, 1, 'Yogurt', 'Cartones', '100000', 20, '8000', '7500', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16, 3),
(73, 1, 'Leche', 'Bolsa', '70000', 50, '2400', '2300', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 16, 3),
(74, 1, 'Pollas en vinagre', 'Cartones', '100000', 20, '8000', '7500', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 17, 3),
(75, 1, 'Soya', 'Bolsa', '70000', 50, '2400', '2300', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 18, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idPROVEEDORES` int(11) NOT NULL,
  `NOMBREEMPRESA_PROVEEDORES` varchar(45) NOT NULL,
  `NOMBREEMPLEADO_PROVEEDORES` varchar(45) NOT NULL,
  `DESCUENTO_PROVEEDOR` varchar(45) NOT NULL,
  `FECHAINGRESO_PROVEEDORES` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idPROVEEDORES`, `NOMBREEMPRESA_PROVEEDORES`, `NOMBREEMPLEADO_PROVEEDORES`, `DESCUENTO_PROVEEDOR`, `FECHAINGRESO_PROVEEDORES`) VALUES
(1, 'Default', 'Default', '0', '2018-06-09'),
(2, 'Fresas a la carbonera', 'JOSE RODRIGUEZ', '56', '2018-06-07'),
(3, 'Postobon', 'Jimenez Beltran', '0.2', '0000-00-00'),
(4, 'Pajarito', 'Gordon macnilan', '0.2', '2018-06-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tienda`
--

CREATE TABLE `tienda` (
  `idTIENDA` int(11) NOT NULL,
  `NOMBRE_TIENDA` varchar(45) NOT NULL,
  `DIERECCION_TIENDA` varchar(45) NOT NULL,
  `NIT_TIENDA` varchar(45) NOT NULL,
  `DIRECCION_TIENDA` varchar(45) NOT NULL,
  `ADMINISTRADOR_idADMINISTRADOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`idTIENDA`, `NOMBRE_TIENDA`, `DIERECCION_TIENDA`, `NIT_TIENDA`, `DIRECCION_TIENDA`, `ADMINISTRADOR_idADMINISTRADOR`) VALUES
(1, 'Articulos El Angel exterminador', 'Calle falsa #123', '12345', 'Calle falsa #123', 1),
(2, 'Articulos El Angel exterminador', 'Calle falsa #123', '005', 'Calle falsa #123', 2),
(3, 'Cambio de estacion', 'Calle de los faroles', '15468', 'Calle de los faroles', 1),
(4, 'TIENDA MIXTA DE SABORES', 'no se', '458', 'no se', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `idVENDEDOR` int(11) NOT NULL,
  `NOMBRE_VENDEDOR` varchar(45) NOT NULL,
  `USUARIO_VENDEDOR` varchar(45) NOT NULL,
  `PASS_VENDEDOR` varchar(45) NOT NULL,
  `TIENDA_idTIENDA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`idVENDEDOR`, `NOMBRE_VENDEDOR`, `USUARIO_VENDEDOR`, `PASS_VENDEDOR`, `TIENDA_idTIENDA`) VALUES
(1, 'dfh', 'fdh', 'fdgh', 3),
(4, 'Diego', 'DiegoV', 'los', 3),
(7, 'sdfs', 'sdf', 'fsdf', 1),
(8, 'DIego', 'LOf', 'ñol', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVENTAS` int(11) NOT NULL,
  `IVA_VENTAS` varchar(45) DEFAULT NULL,
  `FECHACOMPRA_VENTAS` datetime DEFAULT NULL,
  `CLIENTES_idCLIENTES` int(11) NOT NULL,
  `VENDEDOR_idVENDEDOR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVENTAS`, `IVA_VENTAS`, `FECHACOMPRA_VENTAS`, `CLIENTES_idCLIENTES`, `VENDEDOR_idVENDEDOR`) VALUES
(1, 'fg', '2018-06-19 00:00:00', 1, 1),
(28, '0.19', '0000-00-00 00:00:00', 1, 4),
(29, '0.19', '0000-00-00 00:00:00', 1, 4),
(30, '0.19', '0000-00-00 00:00:00', 1, 4),
(31, '0.19', '0000-00-00 00:00:00', 1, 4),
(32, '0.19', '0000-00-00 00:00:00', 1587, 4),
(33, '0.19', '0000-00-00 00:00:00', 4787, 4),
(34, '0.19', '0000-00-00 00:00:00', 1, 4),
(35, '0.19', '0000-00-00 00:00:00', 4787, 4),
(36, '0.19', '0000-00-00 00:00:00', 4787, 4),
(37, '0.19', '0000-00-00 00:00:00', 4787, 4),
(38, '0.19', '0000-00-00 00:00:00', 4787, 4),
(39, '0.19', '0000-00-00 00:00:00', 1587, 4),
(40, '0.19', '0000-00-00 00:00:00', 1, 4),
(41, '0.19', '0000-00-00 00:00:00', 4787, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_has_productos`
--

CREATE TABLE `ventas_has_productos` (
  `VENTAS_idVENTAS` int(11) NOT NULL,
  `PRODUCTOS_idPRODUCTOS` int(11) NOT NULL,
  `cont` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas_has_productos`
--

INSERT INTO `ventas_has_productos` (`VENTAS_idVENTAS`, `PRODUCTOS_idPRODUCTOS`, `cont`) VALUES
(40, 56, 1),
(40, 56, 2),
(41, 56, 3),
(41, 56, 4),
(41, 56, 5),
(41, 56, 6);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idADMINISTRADOR`),
  ADD UNIQUE KEY `USUARIO_UNIQUE` (`USUARIO`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idCATEGORIA`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCLIENTES`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idPRODUCTOS`),
  ADD KEY `fk_PRODUCTOS_PROVEEDORES_idx` (`PROVEEDORES_idPROVEEDORES`),
  ADD KEY `fk_PRODUCTOS_CATEGORIA1_idx` (`CATEGORIA_idCATEGORIA`),
  ADD KEY `fk_PRODUCTOS_TIENDA1_idx` (`TIENDA_idTIENDA`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idPROVEEDORES`);

--
-- Indices de la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTIENDA`),
  ADD KEY `fk_TIENDA_ADMINISTRADOR1_idx` (`ADMINISTRADOR_idADMINISTRADOR`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`idVENDEDOR`),
  ADD KEY `fk_VENDEDOR_TIENDA1_idx` (`TIENDA_idTIENDA`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVENTAS`),
  ADD KEY `fk_VENTAS_CLIENTES1_idx` (`CLIENTES_idCLIENTES`),
  ADD KEY `fk_VENTAS_VENDEDOR1_idx` (`VENDEDOR_idVENDEDOR`);

--
-- Indices de la tabla `ventas_has_productos`
--
ALTER TABLE `ventas_has_productos`
  ADD PRIMARY KEY (`cont`),
  ADD KEY `fk_VENTAS_has_PRODUCTOS_PRODUCTOS1_idx` (`PRODUCTOS_idPRODUCTOS`),
  ADD KEY `fk_VENTAS_has_PRODUCTOS_VENTAS1_idx` (`VENTAS_idVENTAS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idADMINISTRADOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idCATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCLIENTES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100500;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idPRODUCTOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idPROVEEDORES` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idTIENDA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `idVENDEDOR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVENTAS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `ventas_has_productos`
--
ALTER TABLE `ventas_has_productos`
  MODIFY `cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_PRODUCTOS_CATEGORIA1` FOREIGN KEY (`CATEGORIA_idCATEGORIA`) REFERENCES `categoria` (`idCATEGORIA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRODUCTOS_PROVEEDORES` FOREIGN KEY (`PROVEEDORES_idPROVEEDORES`) REFERENCES `proveedores` (`idPROVEEDORES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PRODUCTOS_TIENDA1` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tienda`
--
ALTER TABLE `tienda`
  ADD CONSTRAINT `fk_TIENDA_ADMINISTRADOR1` FOREIGN KEY (`ADMINISTRADOR_idADMINISTRADOR`) REFERENCES `administrador` (`idADMINISTRADOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `fk_VENDEDOR_TIENDA1` FOREIGN KEY (`TIENDA_idTIENDA`) REFERENCES `tienda` (`idTIENDA`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `fk_VENTAS_CLIENTES1` FOREIGN KEY (`CLIENTES_idCLIENTES`) REFERENCES `clientes` (`idCLIENTES`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_VENTAS_VENDEDOR1` FOREIGN KEY (`VENDEDOR_idVENDEDOR`) REFERENCES `vendedor` (`idVENDEDOR`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ventas_has_productos`
--
ALTER TABLE `ventas_has_productos`
  ADD CONSTRAINT `fk_VENTAS_has_PRODUCTOS_PRODUCTOS1` FOREIGN KEY (`PRODUCTOS_idPRODUCTOS`) REFERENCES `productos` (`idPRODUCTOS`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_VENTAS_has_PRODUCTOS_VENTAS1` FOREIGN KEY (`VENTAS_idVENTAS`) REFERENCES `ventas` (`idVENTAS`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
