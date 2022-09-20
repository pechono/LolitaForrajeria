-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2022 a las 17:58:56
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polirubrololita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` int(5) NOT NULL,
  `precio_inicial` decimal(11,1) NOT NULL,
  `precio_final` decimal(11,0) NOT NULL,
  `limites_descuento` varchar(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_unidadVenta` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `caducidad` varchar(2) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `suelto` tinyint(1) NOT NULL,
  `presentacion` decimal(11,1) NOT NULL,
  `id_unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `nombre`, `id_tipo`, `precio_inicial`, `precio_final`, `limites_descuento`, `id_unidadVenta`, `caducidad`, `detalles`, `activo`, `suelto`, `presentacion`, `id_unidad`) VALUES
(1, 'Talco Baby Extra Suave', 8, '280.0', '280', '0', '1', 'no', '-', 1, 0, '200.0', 2),
(2, ' Toallitas Humedas Ideal ', 8, '280.0', '280', '0', '1', 'no', '-', 1, 0, '50.0', 7),
(3, 'Estrella Oleo Calcareo', 8, '1150.0', '1150', '0', '1', 'no', '-', 1, 0, '950.0', 6),
(4, 'Shampoo Johnsons', 5, '450.0', '450', '0', '1', 'no', 'Variedades - Colores', 1, 0, '200.0', 6),
(5, 'Toallitas Humedas Johnsons', 5, '430.0', '430', '0', '1', 'no', '-', 1, 0, '44.0', 7),
(6, 'Toallitas Humedas BabySec Ult.', 5, '360.0', '360', '0', '1', 'no', 'con aloe Vera', 1, 0, '50.0', 7),
(7, 'Pañales Estrella baby P', 4, '1200.0', '1200', '0', '1', 'no', '-', 1, 0, '30.0', 7),
(8, 'Pañales Estrella baby M', 4, '2250.0', '2250', '0', '1', 'no', '-', 1, 0, '48.0', 7),
(9, 'Pañales Estrella baby G', 4, '2250.0', '2250', '0', '1', 'no', '-', 1, 0, '40.0', 7),
(10, 'Pañales Estrella baby XG', 4, '2250.0', '2250', '0', '1', 'no', '-', 1, 0, '36.0', 7),
(11, 'Pañales BabySec G', 4, '1350.0', '1350', '0', '1', 'no', '-', 1, 0, '44.0', 7),
(12, 'Pañales BabySec M', 4, '1350.0', '1350', '0', '1', 'no', '-', 1, 0, '44.0', 7),
(13, 'Pañales BabySec XG', 4, '1350.0', '1350', '0', '1', 'no', '-', 1, 0, '28.0', 7),
(14, 'Pañales BabySec XXG', 4, '1350.0', '1350', '0', '1', 'no', '.', 1, 0, '26.0', 7),
(15, 'Pañales Huggies Flex Confort XXG', 4, '2500.0', '2500', '0', '1', 'no', 'Verde ', 1, 0, '50.0', 7),
(16, 'Pañales Huggies Flex Confort xg ', 4, '2500.0', '2500', '0', '1', 'no', 'verde', 1, 0, '52.0', 7),
(17, 'Pañales Huggies Flex Confort M', 4, '2500.0', '2500', '0', '1', 'no', 'Verde', 1, 0, '68.0', 7),
(18, 'Pañales Huggies Triple Proteccion XXG', 4, '2150.0', '2150', '0', '1', 'no', 'Amarillo', 1, 0, '50.0', 7),
(19, 'Pañales Huggies Triple Proteccion XG ', 4, '2150.0', '2150', '0', '1', 'no', 'Amarillo ', 1, 0, '52.0', 7),
(20, 'Pañales Huggies Triple Proteccion G', 4, '2150.0', '2150', '0', '1', 'no', 'Amarillo ', 1, 0, '68.0', 7),
(21, 'Pañales Huggies Supreme Core M', 4, '2600.0', '2600', '0', '1', 'no', 'ROJO', 1, 0, '68.0', 7),
(22, 'Pañales Huggies Supreme Core G', 4, '2600.0', '2600', '0', '1', 'no', 'ROJO', 1, 0, '60.0', 7),
(23, 'Pañales Huggies Supreme Core XG', 4, '2600.0', '2600', '0', '1', 'no', 'Rojo', 1, 0, '52.0', 7),
(24, 'Pañales Huggies Supreme Core XXG', 4, '2600.0', '2600', '0', '1', 'no', 'ROJO', 1, 0, '50.0', 7),
(25, 'Pañales Huggies Active Sec G', 4, '2500.0', '2500', '0', '1', 'no', 'Verde', 1, 0, '68.0', 7),
(26, 'Pañales Pampers Confort Sec G', 4, '3000.0', '3000', '0', '1', 'no', 'VERDE', 1, 0, '72.0', 7),
(27, 'Pañales Pampers Confort Sec M', 4, '3000.0', '3000', '0', '1', 'no', 'Verde', 1, 0, '72.0', 7),
(28, 'Algodón Estrella Super', 8, '700.0', '700', '0', '1', 'no', '\r\n', 1, 0, '400.0', 2),
(29, 'Pañales Pampers SuperSec G', 4, '1300.0', '1300', '0', '1', 'no', 'Rojo\r\n', 1, 0, '40.0', 7),
(30, 'Pañales Pampers SuperSec M', 4, '1300.0', '1300', '0', '1', 'no', 'Rojo', 1, 0, '48.0', 7),
(31, 'Pañales Pampers SuperSec Xg', 4, '1300.0', '1300', '0', '1', 'no', 'Rojo', 1, 0, '32.0', 7),
(32, 'Pañales Pampers SuperSec xxg', 4, '1300.0', '1300', '0', '1', 'no', 'Rojo', 1, 0, '30.0', 7),
(33, 'Pañales Huggies triple Proteccion M', 4, '1300.0', '1300', '0', '1', 'no', 'Amarillo', 1, 0, '44.0', 7),
(34, 'Pañales Huggies triple Proteccion XG', 4, '1300.0', '1300', '0', '1', 'no', 'amarillo', 1, 0, '28.0', 7),
(35, 'Pañales DuFFy Cotton M', 4, '1300.0', '1300', '0', '1', 'no', 'Amarillo', 1, 0, '44.0', 7),
(36, 'Pañales DuFFy Cotton P', 4, '1300.0', '1300', '0', '1', 'no', 'Amarillo', 1, 0, '30.0', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `cantidad` decimal(10,1) NOT NULL,
  `id_art` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`cantidad`, `id_art`, `id`) VALUES
('10.0', 45, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cierrecaja`
--

CREATE TABLE `cierrecaja` (
  `id_cierre` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `turno` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `efectivo` decimal(11,1) NOT NULL,
  `tarjeta` decimal(11,1) NOT NULL,
  `cCorriente` decimal(11,1) NOT NULL,
  `canje` decimal(11,1) NOT NULL,
  `pagoEnCuentaC` decimal(11,1) NOT NULL,
  `Total` decimal(11,1) NOT NULL,
  `ganancia` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(6) NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `apellido`, `nombre`, `telefono`, `activo`) VALUES
(1, 'Sin Definir', 'Sin Definir', 'Sin Definir', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentacorriente`
--

CREATE TABLE `cuentacorriente` (
  `id_cuentaCorriente` int(6) NOT NULL,
  `operacion` int(6) NOT NULL,
  `monto` decimal(11,1) NOT NULL,
  `fecha` date NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cliente` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_usuario` int(6) NOT NULL,
  `id_turno` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialprecio`
--

CREATE TABLE `historialprecio` (
  `id_historial` int(10) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `precio_inicial` decimal(11,1) NOT NULL,
  `precio_final` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historialprecio`
--

INSERT INTO `historialprecio` (`id_historial`, `id_articulo`, `fecha`, `precio_inicial`, `precio_final`) VALUES
(1, 1, '2022-09-19', '280.0', '280.0'),
(2, 2, '2022-09-19', '280.0', '280.0'),
(3, 3, '2022-09-19', '1150.0', '1150.0'),
(4, 4, '2022-09-19', '450.0', '450.0'),
(5, 5, '2022-09-19', '430.0', '430.0'),
(6, 6, '2022-09-19', '360.0', '360.0'),
(7, 7, '2022-09-19', '1200.0', '1200.0'),
(8, 8, '2022-09-19', '2250.0', '2250.0'),
(9, 9, '2022-09-19', '2250.0', '2250.0'),
(10, 10, '2022-09-19', '2250.0', '2250.0'),
(11, 11, '2022-09-19', '1350.0', '1350.0'),
(12, 12, '2022-09-19', '1350.0', '1350.0'),
(13, 13, '2022-09-19', '1350.0', '1350.0'),
(14, 14, '2022-09-19', '1350.0', '1350.0'),
(15, 15, '2022-09-19', '2500.0', '2500.0'),
(16, 16, '2022-09-19', '2500.0', '2500.0'),
(17, 17, '2022-09-19', '2500.0', '2500.0'),
(18, 18, '2022-09-19', '2150.0', '2150.0'),
(19, 19, '2022-09-19', '2150.0', '2150.0'),
(20, 20, '2022-09-19', '2150.0', '2150.0'),
(21, 21, '2022-09-19', '2600.0', '2600.0'),
(22, 22, '2022-09-19', '2600.0', '2600.0'),
(23, 23, '2022-09-19', '2600.0', '2600.0'),
(24, 24, '2022-09-19', '2600.0', '2600.0'),
(25, 25, '2022-09-19', '2500.0', '2500.0'),
(26, 26, '2022-09-19', '3000.0', '3000.0'),
(27, 27, '2022-09-19', '3000.0', '3000.0'),
(28, 28, '2022-09-19', '700.0', '700.0'),
(29, 29, '2022-09-19', '1300.0', '1300.0'),
(30, 30, '2022-09-19', '1300.0', '1300.0'),
(31, 31, '2022-09-19', '1300.0', '1300.0'),
(32, 32, '2022-09-19', '1300.0', '1300.0'),
(33, 33, '2022-09-19', '1300.0', '1300.0'),
(34, 34, '2022-09-19', '1300.0', '1300.0'),
(35, 35, '2022-09-19', '1300.0', '1300.0'),
(36, 36, '2022-09-19', '1300.0', '1300.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `id_operacion` int(10) NOT NULL,
  `id_usuario` int(5) NOT NULL,
  `venta` decimal(11,1) NOT NULL,
  `fecha` date NOT NULL,
  `descuento` decimal(5,1) NOT NULL,
  `detalle` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipoVenta` int(6) NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_cliente` int(6) NOT NULL,
  `turno` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`id_operacion`, `id_usuario`, `venta`, `fecha`, `descuento`, `detalle`, `id_tipoVenta`, `detalles`, `id_cliente`, `turno`) VALUES
(1, 1, '387.0', '2022-09-19', '43.0', '', 1, '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacionpedido`
--

CREATE TABLE `operacionpedido` (
  `id_operacionPedido` int(10) NOT NULL,
  `id_usuario` int(10) NOT NULL,
  `id_proveedor` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(10) NOT NULL,
  `operacionPedido` int(10) NOT NULL,
  `id_articulo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidocar`
--

CREATE TABLE `pedidocar` (
  `id_pedidoCar` int(10) NOT NULL,
  `id_articulo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rubro` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `telefono`, `rubro`, `direccion`, `localidad`, `mail`, `activo`) VALUES
(1, 'Sin Definir', 'Sin Definir', 'Sin Definir', 'Sin Definir', 'Sin Definir', 'Sin Definir', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `id_stock` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad` decimal(11,1) NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `stockMinimo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id_stock`, `id_articulo`, `cantidad`, `id_proveedor`, `stockMinimo`) VALUES
(1, 1, '2.0', 1, 1),
(2, 2, '12.0', 1, 1),
(3, 3, '9.0', 1, 1),
(4, 4, '5.0', 1, 1),
(5, 5, '8.0', 1, 1),
(6, 6, '23.0', 1, 5),
(7, 7, '2.0', 1, 1),
(8, 8, '3.0', 1, 1),
(9, 9, '6.0', 1, 1),
(10, 10, '4.0', 1, 1),
(11, 11, '4.0', 1, 1),
(12, 12, '10.0', 1, 1),
(13, 13, '10.0', 1, 1),
(14, 14, '13.0', 1, 1),
(15, 15, '8.0', 1, 1),
(16, 16, '3.0', 1, 1),
(17, 17, '4.0', 1, 1),
(18, 18, '2.0', 1, 1),
(19, 19, '4.0', 1, 1),
(20, 20, '4.0', 1, 1),
(21, 21, '4.0', 1, 1),
(22, 22, '3.0', 1, 1),
(23, 23, '4.0', 1, 1),
(24, 24, '3.0', 1, 1),
(25, 25, '3.0', 1, 1),
(26, 26, '1.0', 1, 1),
(27, 27, '5.0', 1, 1),
(28, 28, '16.0', 1, 5),
(29, 29, '10.0', 1, 5),
(30, 30, '5.0', 1, 1),
(31, 31, '6.0', 1, 1),
(32, 32, '8.0', 1, 1),
(33, 33, '16.0', 1, 10),
(34, 34, '14.0', 1, 10),
(35, 35, '4.0', 1, 5),
(36, 36, '4.0', 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelto`
--

CREATE TABLE `suelto` (
  `id_suelto` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoart`
--

CREATE TABLE `tipoart` (
  `id_tipoArt` int(11) NOT NULL,
  `tipoArti` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `activo` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipoart`
--

INSERT INTO `tipoart` (`id_tipoArt`, `tipoArti`, `detalles`, `activo`) VALUES
(1, 'alimento balaceado', '-', 1),
(2, 'alimento', '-', 1),
(3, 'perfumeria', '-', 1),
(4, 'pañales', '-', 1),
(5, 'Igiene', '-', 1),
(6, 'accesorio perro - gato-conejo', '-', 1),
(7, 'bebida', '-', 1),
(8, 'farmacia', '-', 1),
(9, 'almacen', '-', 1),
(10, 'Yerba Mate', '-', 1),
(11, 'jabon liquido', '-', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoventa`
--

CREATE TABLE `tipoventa` (
  `id_tipoventa` int(11) NOT NULL,
  `tipoventa` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `detalles` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `interes` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tipoventa`
--

INSERT INTO `tipoventa` (`id_tipoventa`, `tipoventa`, `detalles`, `interes`) VALUES
(1, 'Contado Efectivo', '--', 0),
(2, 'Tarjeta', '--', 15),
(3, 'Cuenta Coriente', '--', 20),
(4, 'Canje', '--', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadcantidad`
--

CREATE TABLE `unidadcantidad` (
  `id` int(11) NOT NULL,
  `unidadVenta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidadcantidad`
--

INSERT INTO `unidadcantidad` (`id`, `unidadVenta`) VALUES
(1, 'Unidad'),
(2, 'Kilo'),
(3, 'Litro'),
(4, 'Bolsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedida`
--

CREATE TABLE `unidadmedida` (
  `umedida` varchar(20) NOT NULL,
  `id_unidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidadmedida`
--

INSERT INTO `unidadmedida` (`umedida`, `id_unidad`) VALUES
('Kilo', 1),
('Gramo', 2),
('Metro', 3),
('Centimetro', 4),
('Litro', 5),
('Mililitro', 6),
('Unidades', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(6) NOT NULL,
  `usuario` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `apellido`, `nombre`, `telefono`) VALUES
(1, 'pascui', 'pascui', 'albornos', 'matias', '0000'),
(2, 'Graciela', 'Graciela', 'Diaz', 'Graciela', '0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cantidad` decimal(10,1) NOT NULL,
  `id_operacion` int(11) NOT NULL,
  `precioI` decimal(11,1) NOT NULL,
  `precioF` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_articulo`, `cantidad`, `id_operacion`, `precioI`, `precioF`) VALUES
(1, 5, '1.0', 1, '430.0', '430.0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cierrecaja`
--
ALTER TABLE `cierrecaja`
  ADD PRIMARY KEY (`id_cierre`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cuentacorriente`
--
ALTER TABLE `cuentacorriente`
  ADD PRIMARY KEY (`id_cuentaCorriente`);

--
-- Indices de la tabla `historialprecio`
--
ALTER TABLE `historialprecio`
  ADD PRIMARY KEY (`id_historial`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`id_operacion`);

--
-- Indices de la tabla `operacionpedido`
--
ALTER TABLE `operacionpedido`
  ADD PRIMARY KEY (`id_operacionPedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `pedidocar`
--
ALTER TABLE `pedidocar`
  ADD PRIMARY KEY (`id_pedidoCar`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id_stock`);

--
-- Indices de la tabla `suelto`
--
ALTER TABLE `suelto`
  ADD PRIMARY KEY (`id_suelto`);

--
-- Indices de la tabla `tipoart`
--
ALTER TABLE `tipoart`
  ADD PRIMARY KEY (`id_tipoArt`);

--
-- Indices de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  ADD PRIMARY KEY (`id_tipoventa`);

--
-- Indices de la tabla `unidadcantidad`
--
ALTER TABLE `unidadcantidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  ADD PRIMARY KEY (`id_unidad`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cierrecaja`
--
ALTER TABLE `cierrecaja`
  MODIFY `id_cierre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuentacorriente`
--
ALTER TABLE `cuentacorriente`
  MODIFY `id_cuentaCorriente` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historialprecio`
--
ALTER TABLE `historialprecio`
  MODIFY `id_historial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id_operacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `operacionpedido`
--
ALTER TABLE `operacionpedido`
  MODIFY `id_operacionPedido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidocar`
--
ALTER TABLE `pedidocar`
  MODIFY `id_pedidoCar` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `suelto`
--
ALTER TABLE `suelto`
  MODIFY `id_suelto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipoart`
--
ALTER TABLE `tipoart`
  MODIFY `id_tipoArt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipoventa`
--
ALTER TABLE `tipoventa`
  MODIFY `id_tipoventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidadcantidad`
--
ALTER TABLE `unidadcantidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidadmedida`
--
ALTER TABLE `unidadmedida`
  MODIFY `id_unidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
