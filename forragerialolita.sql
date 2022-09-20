-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 19:37:49
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
-- Base de datos: `empleados`
--
CREATE DATABASE IF NOT EXISTS `empleados` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `empleados`;
--
-- Base de datos: `graficos`
--
CREATE DATABASE IF NOT EXISTS `graficos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `graficos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_venta` int(11) NOT NULL,
  `fechaVenta` date DEFAULT NULL,
  `montoVenta` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_venta`, `fechaVenta`, `montoVenta`) VALUES
(1, '2017-05-05', 10000),
(2, '2017-07-09', 12000),
(3, '2017-09-20', 20000),
(4, '2018-01-01', 50000),
(5, '2018-01-25', 8000),
(6, '2018-02-14', 10000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Volcado de datos para la tabla `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"polirubrololita\",\"table\":\"operacion\"},{\"db\":\"polirubrololita\",\"table\":\"articulo\"},{\"db\":\"polirubrololita\",\"table\":\"venta\"},{\"db\":\"polirubrololita\",\"table\":\"operacionpedido\"},{\"db\":\"polirubrololita\",\"table\":\"tipoart\"},{\"db\":\"polirubrololita\",\"table\":\"unidadmedida\"},{\"db\":\"polirubrololita\",\"table\":\"unidadcantidad\"},{\"db\":\"polirubrololita\",\"table\":\"tipoventa\"},{\"db\":\"polirubrololita\",\"table\":\"stock\"},{\"db\":\"polirubrololita\",\"table\":\"pedido\"}]');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Volcado de datos para la tabla `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'polirubrololita', 'articulo', '{\"sorted_col\":\"`id_articulo` ASC\"}', '2022-09-02 16:19:01'),
('root', 'polirubrololita', 'cuentacorriente', '{\"sorted_col\":\"`cuentacorriente`.`id_cuentaCorriente`  DESC\"}', '2022-08-30 00:51:28'),
('root', 'polirubrololita', 'operacion', '{\"sorted_col\":\"`id_operacion`  DESC\"}', '2022-08-27 03:21:47'),
('root', 'polirubrololita', 'operacionpedido', '{\"sorted_col\":\"`fecha` DESC\"}', '2022-09-02 16:01:24'),
('root', 'polirubrololita', 'stock', '{\"sorted_col\":\"`id_stock`  DESC\"}', '2022-09-02 16:19:18'),
('root', 'polirubrololita', 'unidadmedida', '{\"sorted_col\":\"`unidadmedida`.`id_unidad` ASC\"}', '2022-09-02 16:22:56'),
('root', 'polirubrololita', 'venta', '{\"sorted_col\":\"`venta`.`id_venta`  DESC\"}', '2022-08-27 21:44:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Volcado de datos para la tabla `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-09-16 17:37:34', '{\"lang\":\"es\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indices de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indices de la tabla `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indices de la tabla `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indices de la tabla `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indices de la tabla `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indices de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indices de la tabla `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indices de la tabla `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indices de la tabla `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indices de la tabla `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indices de la tabla `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indices de la tabla `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Base de datos: `polirubrololita`
--
CREATE DATABASE IF NOT EXISTS `polirubrololita` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `polirubrololita`;

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
(45, 'Mostaza Natura', 2, '150.0', '210', '0', '1', 'si', '-', 1, 0, '250.0', 2),
(46, 'Gatorade Sin Azucar', 7, '130.0', '182', '10', '1', 'si', 'descuento depues de 10 unidades', 1, 0, '500.0', 6),
(47, 'Tuy Sweet o calorias', 9, '200.0', '280', '0', '1', 'si', '-', 1, 0, '200.0', 6),
(48, 'La Virginia', 9, '500.0', '700', '0', '1', 'si', '-', 1, 0, '500.0', 2),
(49, 'Pure De Tomate Molto', 9, '75.0', '105', '0', '1', 'si', '-', 1, 0, '520.0', 2),
(50, 'Yerba Mate Cruz De Malta Hoja Mas Grande ', 10, '500.0', '700', '0', '1', 'si', '-', 1, 0, '500.0', 2),
(51, 'Yerba Mate Mas Sabor - Comp. Cascara de Limon', 10, '450.0', '630', '0', '1', 'no', '-', 1, 0, '500.0', 2),
(52, 'Avena Intantanea Egram ', 9, '80.0', '112', '0', '1', 'no', '-', 1, 0, '350.0', 2),
(53, 'Pure De Tomate La Campagnola', 9, '50.0', '70', '0', '1', 'si', '-\r\n', 1, 0, '520.0', 2),
(54, 'Polenta Instantanea Presto Pronta', 9, '60.0', '84', '0', '1', 'si', '-', 1, 0, '500.0', 2),
(55, 'Pedigri Cachorro', 1, '500.0', '700', '0', '2', 'si', 'sin descuento por ser suelto', 1, 1, '20.0', 1),
(56, 'Pedigri Cachorro', 1, '3500.0', '4900', '0', '1', 'si', 'pedigri cach', 1, 0, '20.0', 1);

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

--
-- Volcado de datos para la tabla `cierrecaja`
--

INSERT INTO `cierrecaja` (`id_cierre`, `id_usuario`, `turno`, `fecha`, `efectivo`, `tarjeta`, `cCorriente`, `canje`, `pagoEnCuentaC`, `Total`, `ganancia`) VALUES
(1, 1, 1, '2022-02-28', '10.0', '20.0', '30.0', '40.0', '50.0', '100.0', '60.0'),
(2, 1, 2, '2022-03-01', '0.0', '253.0', '4000.0', '0.0', '0.0', '4333.0', '2131.0'),
(3, 1, 2, '2022-03-01', '0.0', '253.0', '4000.0', '0.0', '0.0', '4333.0', '2131.0'),
(4, 1, 2, '2022-03-01', '0.0', '253.0', '4000.0', '0.0', '0.0', '4333.0', '2131.0'),
(5, 2, 1, '2022-03-07', '0.0', '0.0', '8220.0', '0.0', '0.0', '8220.0', '4060.0'),
(6, 1, 1, '2022-03-18', '0.0', '0.0', '624.0', '0.0', '424.0', '54718.0', '20280.0'),
(7, 1, 1, '2022-08-27', '0.0', '110.0', '65000.0', '3214.0', '0.0', '192650.0', '133140.0'),
(8, 1, 1, '2022-08-30', '0.0', '0.0', '328100.0', '0.0', '250400.0', '578500.0', '73600.0');

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
(1, 'Sin definir', 'Sin definir', '00001', 1),
(2, 'Balsamo Canteros', 'Pablo Nicolas', '3826-541085', 1),
(3, 'Mercado', 'Julio Franco', '3826-540099', 1),
(4, 'oliva', 'matias', '2003211', 1),
(5, 'caliva', 'mayra', '3826442018', 1),
(6, 'supermecado olguita', 'ivan', '3344555', 1),
(7, 'escudero', 'eduardo', '03826541085', 1),
(8, 'Nieto', 'Lucio', '33038983', 1),
(9, 'Corzo', 'Maria Antonia', '33038983', 1),
(10, 'Davila', 'Fabian', '12232323', 1),
(11, 'Vera', 'Daniel', '33038983', 1),
(12, 'Balsamo', 'Felipe', '33038983', 1),
(13, 'Toledo', 'Marcos', '44220', 1);

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

--
-- Volcado de datos para la tabla `cuentacorriente`
--

INSERT INTO `cuentacorriente` (`id_cuentaCorriente`, `operacion`, `monto`, `fecha`, `detalles`, `id_cliente`, `id_usuario`, `id_turno`) VALUES
(28, 99, '427.0', '2022-02-17', '-', '2', 0, 0),
(29, 100, '4190.0', '2022-02-17', '-', '2', 0, 0),
(30, 103, '8400.0', '2022-02-18', '-', '4', 0, 0),
(31, 0, '-3000.0', '2022-02-21', '--', '2', 0, 0),
(33, 0, '-600.0', '2022-02-22', 'entrega', '2', 0, 0),
(34, 0, '-500.0', '2022-02-22', 'entrega', '2', 0, 0),
(35, 0, '-600.0', '2022-02-22', 'entrega', '2', 0, 0),
(36, 109, '8400.0', '2022-02-22', '-', '2', 0, 0),
(37, 0, '-600.0', '2022-02-22', 'entrega', '3', 0, 0),
(38, 0, '-317.0', '2022-02-22', 'entrega', '2', 0, 0),
(39, 0, '-2000.0', '2022-02-22', 'entrega', '2', 0, 0),
(40, 110, '77.0', '2022-02-22', '-', '4', 0, 0),
(41, 117, '424.0', '2022-02-22', '-', '5', 0, 0),
(42, 118, '270.0', '2022-02-22', '-', '6', 0, 0),
(43, 119, '1020.0', '2022-02-22', '-', '6', 0, 0),
(44, 0, '-1000.0', '2022-02-22', 'entrega', '6', 0, 0),
(45, 0, '-1000.0', '2022-02-22', 'entrega', '2', 0, 0),
(46, 128, '300.0', '2022-02-28', '-', '2', 1, 2),
(47, 128, '40000.0', '2022-02-28', '-', '6', 1, 1),
(48, 129, '1120.0', '2022-02-28', '-', '5', 1, 1),
(49, 130, '0.0', '2022-02-28', '-', '5', 1, 1),
(50, 132, '23.0', '2022-02-28', '-', '4', 1, 2),
(51, 134, '225.0', '2022-02-28', '-', '2', 1, 2),
(52, 136, '534.0', '2022-02-28', '-', '5', 1, 2),
(53, 139, '178.0', '2022-02-28', '-', '4', 1, 2),
(54, 0, '-20000.0', '2022-02-28', 'entrega', '6', 1, 2),
(55, 0, '-290.0', '2022-02-28', 'entrega', '6', 1, 2),
(56, 0, '-5525.0', '2022-02-28', 'entrega', '2', 1, 2),
(57, 143, '4000.0', '2022-03-01', '-', '1', 1, 2),
(58, 144, '4220.0', '2022-03-07', '-', '6', 2, 1),
(59, 145, '1200.0', '2022-03-09', '-', '3', 2, 1),
(60, 0, '-600.0', '2022-03-13', 'entrega', '3', 1, 1),
(61, 0, '-240.0', '2022-03-14', 'entrega', '6', 1, 1),
(62, 0, '-2000.0', '2022-03-14', 'entrega', '5', 1, 1),
(63, 0, '-23000.0', '2022-03-14', 'entrega', '6', 1, 1),
(64, 0, '-678.0', '2022-03-14', 'entrega', '4', 1, 1),
(65, 188, '424.0', '2022-03-18', '-', '2', 1, 1),
(66, 0, '-424.0', '2022-03-18', 'entrega', '2', 1, 1),
(67, 0, '-78.0', '2022-08-23', 'entrega', '5', 1, 1),
(68, 0, '-80.0', '2022-08-23', 'entrega', '6', 1, 1),
(69, 0, '-80.0', '2022-08-23', 'entrega', '1', 1, 1),
(70, 272, '25000.0', '2022-08-27', '-', '1', 1, 1),
(71, 0, '-7000.0', '2022-08-29', 'entrega', '4', 1, 1),
(72, 0, '-900.0', '2022-08-29', 'entrega', '6', 1, 1),
(73, 0, '-500.0', '2022-08-29', 'entrega', '4', 1, 1),
(74, 0, '-80.0', '2022-08-29', 'entrega', '<br />', 1, 1),
(75, 0, '-28000.0', '2022-08-29', 'entrega', '<br />', 1, 1),
(76, 273, '67000.0', '2022-08-29', '-', '3', 1, 1),
(77, 0, '-7000.0', '2022-08-29', 'entrega', '<br />', 1, 1),
(78, 0, '-7000.0', '2022-08-29', 'entrega', '<br />', 1, 1),
(79, 0, '-7000.0', '2022-08-29', 'entrega', '<br />', 1, 1),
(80, 274, '6500.0', '2022-08-29', '-', '1', 1, 1),
(81, 275, '6400.0', '2022-08-29', '-', '5', 1, 1),
(82, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(83, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(84, 0, '-30000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(85, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(86, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(87, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(88, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(89, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(90, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(91, 0, '-7000.0', '2022-08-30', 'entrega', '<br />', 1, 1),
(92, 0, '-7000.0', '2022-08-30', 'entrega', '3', 1, 1),
(93, 0, '-7000.0', '2022-08-30', 'entrega', '3', 1, 1),
(94, 0, '-3000.0', '2022-08-30', 'entrega', '3', 1, 1),
(95, 0, '-50000.0', '2022-08-30', 'entrega', '5', 1, 1),
(96, 0, '-7000.0', '2022-08-30', 'entrega', '5', 1, 1),
(97, 0, '-35000.0', '2022-08-30', 'entrega', '1', 1, 1),
(98, 0, '-7000.0', '2022-08-30', 'entrega', '3', 1, 1),
(99, 0, '-40000.0', '2022-08-30', 'entrega', '3', 1, 1),
(100, 276, '3100.0', '2022-08-30', '-', '6', 1, 1),
(101, 0, '-900.0', '2022-08-30', 'entrega', '6', 1, 1),
(102, 0, '-500.0', '2022-08-30', 'entrega', '3', 1, 1),
(103, 277, '325000.0', '2022-08-30', '-', '3', 1, 1),
(104, 0, '-7000.0', '2022-09-03', 'entrega', '3', 1, 1),
(105, 0, '-28000.0', '2022-09-03', 'entrega', '3', 1, 1),
(106, 0, '-28000.0', '2022-09-03', 'entrega', '3', 1, 1),
(107, 0, '-200000.0', '2022-09-03', 'entrega', '3', 1, 1),
(108, 279, '210.0', '2022-09-03', '-', '1', 1, 1),
(109, 285, '3850.0', '2022-09-04', '-', '10', 1, 1),
(110, 286, '3850.0', '2022-09-04', '-', '10', 1, 1);

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
(1, 1, '2022-08-15', '500.0', '590.0'),
(2, 19, '0000-00-00', '50.0', '70.0'),
(3, 19, '0000-00-00', '10.0', '14.0'),
(4, 24, '0000-00-00', '10.0', '14.0'),
(5, 24, '0000-00-00', '10.0', '14.0'),
(6, 24, '0000-00-00', '10.0', '14.0'),
(7, 24, '0000-00-00', '10.0', '14.0'),
(8, 24, '0000-00-00', '12.0', '17.0'),
(9, 24, '0000-00-00', '12.0', '17.0'),
(10, 24, '0000-00-00', '12.0', '17.0'),
(11, 30, '0000-00-00', '12.0', '17.0'),
(12, 30, '0000-00-00', '34.0', '48.0'),
(13, 34, '0000-00-00', '90.0', '126.0'),
(14, 41, '0000-00-00', '200.0', '280.0'),
(15, 42, '0000-00-00', '700.0', '980.0'),
(16, 43, '0000-00-00', '150.0', '210.0'),
(17, 44, '0000-00-00', '2800.0', '3920.0'),
(18, 41, '0000-00-00', '250.0', '350.0'),
(19, 44, '0000-00-00', '3000.0', '4200.0'),
(20, 41, '2022-09-02', '400.0', '560.0'),
(21, 43, '2022-09-02', '200.0', '280.0'),
(22, 45, '2022-09-02', '150.0', '210.0'),
(23, 46, '2022-09-02', '130.0', '182.0'),
(24, 47, '2022-09-02', '200.0', '280.0'),
(25, 48, '2022-09-02', '500.0', '700.0'),
(26, 49, '2022-09-02', '75.0', '105.0'),
(27, 50, '2022-09-02', '500.0', '700.0'),
(28, 51, '2022-09-02', '450.0', '630.0'),
(29, 52, '2022-09-02', '80.0', '112.0'),
(30, 53, '2022-09-02', '50.0', '70.0'),
(31, 54, '2022-09-02', '60.0', '84.0'),
(32, 55, '2022-09-02', '500.0', '700.0'),
(33, 56, '2022-09-03', '3500.0', '4900.0');

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
(98, 1, '8400.0', '2021-01-17', '10.0', 'a domicilio', 1, '', 1, 0),
(99, 1, '427.0', '2022-02-17', '22.5', '', 3, '', 2, 0),
(100, 1, '9190.0', '2022-02-17', '0.0', '', 3, 'a domicilo', 2, 0),
(101, 1, '8400.0', '2022-02-18', '0.0', '10%desc', 2, '', 3, 0),
(102, 1, '150.0', '2022-02-18', '0.0', '', 3, '10%desc', 4, 0),
(103, 1, '8400.0', '2022-02-18', '0.0', '', 3, '10%desc', 4, 0),
(104, 1, '626.0', '2022-02-19', '0.0', '', 2, '', 4, 0),
(105, 1, '400.0', '2022-02-19', '0.0', '', 1, '', 1, 0),
(106, 1, '400.0', '2022-02-19', '0.0', '', 1, '', 2, 0),
(107, 1, '5378.4', '2022-02-19', '597.6', 'descuento en todos\r\nlos productos. solo cliente vip', 1, '', 2, 0),
(108, 1, '77.0', '2022-02-21', '0.0', '', 1, '', 1, 0),
(109, 1, '8400.0', '2022-02-22', '0.0', '', 3, '', 2, 0),
(110, 1, '77.0', '2022-02-22', '0.0', '', 3, '', 4, 0),
(111, 1, '225.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(112, 1, '2800.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(113, 1, '5600.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(114, 1, '2.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(115, 1, '21538.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(116, 1, '9822.0', '2022-02-22', '0.0', '', 1, '', 4, 0),
(117, 1, '1424.0', '2022-02-22', '0.0', '', 3, '', 5, 0),
(118, 1, '770.0', '2022-02-22', '0.0', '', 3, '', 6, 0),
(119, 1, '1020.0', '2022-02-22', '0.0', '', 3, '', 6, 0),
(120, 1, '178.0', '2022-02-22', '0.0', '', 1, '', 1, 0),
(121, 1, '360.0', '2022-02-22', '0.0', '', 1, '', 3, 0),
(122, 1, '336.0', '2022-02-22', '0.0', '', 1, '', 4, 0),
(123, 1, '1200.0', '2022-02-22', '0.0', '', 2, '', 4, 0),
(124, 1, '178.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(125, 1, '10.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(126, 1, '0.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(127, 1, '0.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(128, 1, '40000.0', '2022-02-28', '0.0', '', 3, '', 6, 1),
(129, 1, '1120.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(130, 1, '0.0', '2022-02-28', '0.0', '', 3, '', 5, 1),
(131, 2, '1200.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(132, 1, '23.0', '2022-02-28', '0.0', '', 3, '', 4, 2),
(133, 1, '8400.0', '2022-02-28', '0.0', '', 2, '', 4, 2),
(134, 1, '225.0', '2022-02-28', '0.0', '', 3, '', 2, 2),
(135, 1, '178.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(136, 1, '534.0', '2022-02-28', '0.0', '', 3, '', 5, 2),
(137, 1, '356.0', '2022-02-28', '0.0', '', 2, '', 4, 2),
(138, 1, '178.0', '2022-02-28', '0.0', '', 1, '', 1, 2),
(139, 1, '178.0', '2022-02-28', '0.0', '', 3, '', 4, 2),
(140, 1, '77.0', '2022-03-01', '0.0', '', 1, '', 2, 2),
(141, 1, '253.0', '2022-03-01', '0.0', '', 2, '', 1, 2),
(142, 1, '3.0', '2022-03-01', '0.0', '', 1, '', 1, 2),
(143, 1, '4000.0', '2022-03-01', '0.0', '', 3, '', 1, 2),
(144, 2, '8220.0', '2022-03-07', '0.0', '', 3, '', 6, 1),
(145, 2, '1200.0', '2022-03-09', '0.0', '', 3, '', 3, 1),
(146, 2, '600.0', '2022-03-09', '0.0', '', 1, '', 1, 1),
(147, 1, '6500.0', '2022-03-12', '0.0', '', 1, '', 1, 1),
(148, 1, '6500.0', '2022-03-12', '0.0', '', 1, '', 1, 1),
(149, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(150, 1, '1280.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(151, 1, '1480.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(152, 1, '360.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(153, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(154, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(155, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(156, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(157, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(158, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(159, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(160, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(161, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(162, 1, '650.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(163, 1, '640.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(164, 1, '0.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(165, 1, '1280.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(166, 1, '200.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(167, 1, '200.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(168, 1, '2500.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(169, 1, '100.0', '2022-03-13', '0.0', '', 1, '', 1, 1),
(170, 1, '2040.0', '2022-03-13', '0.0', '', 2, '', 3, 1),
(171, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(172, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(173, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(174, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(175, 1, '4500.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(176, 1, '6750.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(177, 1, '6750.0', '2022-03-17', '0.0', '', 1, '', 1, 1),
(178, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(179, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(180, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 4, 1),
(181, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(182, 1, '960.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(183, 1, '0.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(184, 1, '960.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(185, 1, '11250.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(186, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(187, 1, '6750.0', '2022-03-18', '0.0', '', 1, '', 1, 1),
(188, 1, '624.0', '2022-03-18', '36.0', '', 3, '', 2, 1),
(189, 1, '650.0', '2022-03-30', '0.0', '', 1, '', 4, 1),
(190, 1, '1300.0', '2022-04-01', '0.0', '', 1, '', 1, 1),
(191, 1, '50.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(192, 1, '50.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(193, 1, '50.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(194, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(195, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(196, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(197, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(198, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(199, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(200, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(201, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(202, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(203, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(204, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(205, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(206, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(207, 1, '2010.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(208, 1, '10000.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(209, 1, '80000.0', '2022-08-23', '0.0', '', 1, '', 1, 1),
(210, 1, '180.0', '2022-08-23', '0.0', '', 4, '', 3, 1),
(211, 1, '17.5', '2022-08-26', '0.0', '', 1, '', 1, 1),
(212, 1, '10.0', '2022-08-26', '0.0', '', 1, '', 1, 1),
(213, 1, '1.0', '2022-08-26', '0.0', '', 1, '', 1, 1),
(214, 1, '64.0', '2022-08-26', '0.0', '', 1, '', 1, 2),
(215, 1, '0.0', '2022-08-26', '0.0', '', 1, '', 1, 2),
(216, 1, '30.0', '2022-08-27', '0.0', '', 2, '', 2, 1),
(217, 1, '14.0', '2022-08-27', '0.0', '', 4, '', 5, 1),
(218, 1, '80.0', '2022-08-27', '0.0', '', 2, '', 5, 1),
(219, 1, '10.0', '2022-08-27', '0.0', '', 1, '', 3, 1),
(220, 1, '10.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(221, 1, '-6490.0', '2022-08-27', '6500.0', '', 1, '', 1, 1),
(222, 1, '1.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(223, 1, '1.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(224, 1, '2.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(225, 1, '10.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(226, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(227, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(228, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(229, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(230, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(231, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(232, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(233, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(234, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(235, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(236, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(237, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(238, 1, '6.0', '2022-08-27', '650.0', '', 1, '', 1, 1),
(239, 1, '6.0', '2022-08-27', '650.0', '', 1, '', 1, 1),
(240, 1, '6.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(241, 1, '6.0', '2022-08-27', '585.0', '', 1, '', 1, 1),
(242, 1, '6.0', '2022-08-27', '585.0', '', 1, '', 1, 1),
(243, 1, '6.0', '2022-08-27', '585.0', '', 1, '', 1, 1),
(244, 1, '6500.0', '2022-08-27', '585.0', '', 1, '', 1, 1),
(245, 1, '6500.0', '2022-08-27', '585.0', '', 1, '', 1, 1),
(246, 1, '5915.0', '2022-08-27', '585.0', '', 1, '', 1, 1),
(247, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(248, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(249, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(250, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(251, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(252, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(253, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(254, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(255, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(256, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(257, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(258, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(259, 1, '6305.0', '2022-08-27', '195.0', '', 1, '', 1, 1),
(260, 1, '5525.0', '2022-08-27', '975.0', '', 1, '', 1, 1),
(261, 1, '5525.0', '2022-08-27', '975.0', '', 1, '', 1, 1),
(262, 1, '576.0', '2022-08-27', '64.0', '', 1, '', 2, 1),
(263, 1, '900.0', '2022-08-27', '100.0', '', 1, '', 1, 1),
(264, 1, '-100.0', '2022-08-27', '100.0', '', 1, '', 1, 1),
(265, 1, '3100.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(266, 1, '544.0', '2022-08-27', '96.0', '', 1, '', 1, 1),
(267, 1, '544.0', '2022-08-27', '96.0', '', 1, '', 1, 1),
(268, 1, '6500.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(269, 1, '6500.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(270, 1, '180.0', '2022-08-27', '0.0', '', 1, '', 1, 1),
(271, 1, '3200.0', '2022-08-27', '0.0', '', 4, '', 1, 1),
(272, 1, '65000.0', '2022-08-27', '0.0', '', 3, '', 1, 1),
(273, 1, '67000.0', '2022-08-29', '0.0', '', 3, '', 3, 1),
(274, 1, '6500.0', '2022-08-29', '0.0', '', 3, '', 1, 1),
(275, 1, '6400.0', '2022-08-29', '0.0', '', 3, '', 5, 1),
(276, 1, '3100.0', '2022-08-30', '0.0', '', 3, '', 6, 1),
(277, 1, '325000.0', '2022-08-30', '0.0', '', 3, '', 3, 1),
(278, 1, '2700.0', '2022-08-30', '300.0', '', 2, '', 8, 1),
(279, 1, '210.0', '2022-08-03', '0.0', '', 3, '', 1, 1),
(280, 1, '1050.0', '2022-08-03', '0.0', '', 1, '', 1, 1),
(281, 1, '2940.0', '2022-09-03', '0.0', '', 2, '', 1, 1),
(282, 1, '5110.0', '2022-09-03', '0.0', '', 1, '', 1, 1),
(283, 1, '5222.0', '2022-09-04', '0.0', '', 1, '', 1, 1),
(284, 1, '23590.0', '2022-09-04', '0.0', '', 1, '', 1, 1),
(285, 1, '3850.0', '2022-09-04', '0.0', '', 3, '', 10, 1),
(286, 1, '3850.0', '2022-09-04', '0.0', '', 3, '', 10, 1),
(287, 1, '4900.0', '2022-09-04', '0.0', '', 1, '', 12, 1),
(288, 1, '20160.0', '2022-09-05', '0.0', '', 1, '', 1, 1),
(289, 1, '2618.0', '2022-09-05', '0.0', '', 1, '', 1, 1),
(290, 1, '2100.0', '2022-09-05', '0.0', '', 1, '', 1, 1),
(291, 1, '9100.0', '2022-09-06', '0.0', '', 1, '', 1, 1);

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

--
-- Volcado de datos para la tabla `operacionpedido`
--

INSERT INTO `operacionpedido` (`id_operacionPedido`, `id_usuario`, `id_proveedor`, `fecha`) VALUES
(1, 1, 1, '2022-03-10'),
(2, 2, 1, '2022-03-10'),
(3, 2, 1, '2022-03-10'),
(4, 2, 1, '2022-03-10'),
(5, 2, 5, '2022-03-10'),
(6, 1, 1, '2022-03-12'),
(7, 1, 1, '2022-03-12'),
(8, 1, 1, '2022-03-12'),
(9, 1, 1, '2022-03-12'),
(10, 1, 4, '2022-03-12'),
(11, 1, 1, '2022-03-12'),
(12, 1, 1, '2022-03-12'),
(13, 1, 1, '2022-03-12'),
(14, 1, 1, '2022-03-12'),
(15, 1, 1, '2022-03-12'),
(16, 1, 1, '2022-03-12'),
(17, 1, 1, '2022-03-12'),
(18, 1, 1, '2022-03-12'),
(19, 1, 1, '2022-03-12'),
(20, 1, 1, '2022-03-12'),
(21, 1, 1, '2022-03-12'),
(22, 1, 1, '2022-03-12'),
(23, 1, 1, '2022-03-12'),
(24, 1, 1, '2022-03-12'),
(25, 1, 1, '2022-03-12'),
(26, 1, 1, '2022-03-12'),
(27, 1, 1, '2022-03-12'),
(28, 1, 4, '2022-03-12'),
(29, 1, 1, '2022-03-12'),
(30, 1, 1, '2022-03-12'),
(31, 1, 5, '2022-03-12'),
(32, 1, 1, '2022-03-12'),
(33, 1, 1, '2022-03-12'),
(34, 1, 1, '2022-03-12'),
(35, 1, 1, '2022-03-12'),
(36, 1, 1, '2022-03-12'),
(37, 1, 1, '2022-03-12'),
(38, 1, 1, '2022-03-12'),
(39, 1, 1, '2022-03-12'),
(40, 1, 6, '2022-03-12'),
(41, 1, 1, '2022-03-13'),
(42, 1, 1, '2022-03-13'),
(43, 1, 1, '2022-03-14'),
(44, 1, 1, '2022-03-14'),
(45, 1, 1, '2022-03-18'),
(46, 1, 3, '2022-09-02'),
(47, 1, 1, '2022-09-02'),
(48, 1, 1, '2022-09-02'),
(49, 1, 1, '2022-09-02'),
(50, 1, 3, '2022-09-02'),
(51, 1, 1, '2022-09-02'),
(52, 1, 1, '0000-00-00'),
(53, 1, 1, '0000-00-00'),
(54, 1, 1, '2022-09-02');

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

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `operacionPedido`, `id_articulo`, `cantidad`, `fecha`) VALUES
(1, 3, 5, 10, '0000-00-00'),
(2, 4, 4, 25, '0000-00-00'),
(3, 5, 6, 10, '0000-00-00'),
(4, 5, 5, 2, '0000-00-00'),
(5, 5, 1, 1, '0000-00-00'),
(6, 5, 2, 10, '0000-00-00'),
(7, 6, 5, 25, '0000-00-00'),
(8, 6, 6, 10, '0000-00-00'),
(9, 7, 5, 10, '0000-00-00'),
(10, 8, 5, 10, '0000-00-00'),
(11, 9, 1, 25, '0000-00-00'),
(12, 10, 5, 10, '0000-00-00'),
(13, 11, 1, 25, '0000-00-00'),
(14, 12, 1, 10, '0000-00-00'),
(15, 13, 1, 10, '0000-00-00'),
(16, 14, 1, 10, '0000-00-00'),
(17, 15, 6, 10, '0000-00-00'),
(18, 16, 1, 10, '0000-00-00'),
(19, 17, 1, 10, '0000-00-00'),
(20, 18, 1, 10, '0000-00-00'),
(21, 19, 6, 2, '0000-00-00'),
(22, 20, 6, 10, '0000-00-00'),
(23, 21, 1, 10, '0000-00-00'),
(24, 22, 1, 10, '0000-00-00'),
(25, 23, 1, 10, '0000-00-00'),
(26, 24, 1, 10, '0000-00-00'),
(27, 25, 1, 10, '0000-00-00'),
(28, 26, 1, 10, '0000-00-00'),
(29, 27, 1, 10, '0000-00-00'),
(30, 28, 4, 10, '0000-00-00'),
(31, 29, 1, 10, '0000-00-00'),
(32, 30, 6, 10, '0000-00-00'),
(33, 31, 5, 10, '0000-00-00'),
(34, 32, 5, 10, '0000-00-00'),
(35, 33, 1, 10, '0000-00-00'),
(36, 34, 2, 10, '0000-00-00'),
(37, 35, 5, 10, '0000-00-00'),
(38, 36, 3, 10, '0000-00-00'),
(39, 37, 1, 10, '0000-00-00'),
(40, 37, 6, 25, '0000-00-00'),
(41, 37, 3, 10, '0000-00-00'),
(42, 37, 4, 10, '0000-00-00'),
(43, 38, 1, 10, '0000-00-00'),
(44, 39, 1, 10, '0000-00-00'),
(45, 39, 6, 10, '0000-00-00'),
(46, 39, 5, 10, '0000-00-00'),
(47, 40, 1, 10, '0000-00-00'),
(48, 40, 4, 10, '0000-00-00'),
(49, 40, 2, 10, '0000-00-00'),
(50, 40, 5, 25, '0000-00-00'),
(51, 41, 6, 10, '0000-00-00'),
(52, 42, 6, 10, '0000-00-00'),
(53, 43, 1, 10, '0000-00-00'),
(54, 44, 1, 2, '0000-00-00'),
(55, 44, 4, 1, '0000-00-00'),
(56, 45, 2, 45, '0000-00-00'),
(57, 45, 1, 50, '0000-00-00'),
(58, 45, 5, 40, '0000-00-00'),
(59, 45, 6, 45, '0000-00-00'),
(60, 46, 9, 10, '0000-00-00'),
(61, 46, 44, 10, '0000-00-00'),
(62, 47, 44, 10, '0000-00-00'),
(63, 47, 41, 1000, '0000-00-00'),
(64, 49, 43, 1, '2022-09-02'),
(65, 50, 41, 10, '2022-09-02'),
(66, 50, 43, 50, '2022-09-02'),
(67, 51, 41, 50, '2022-09-02'),
(68, 52, 41, 10, '2022-09-02'),
(69, 53, 47, 10, '2022-09-02'),
(70, 53, 45, 10, '2022-09-02'),
(71, 53, 48, 10, '2022-09-02'),
(72, 53, 50, 10, '2022-09-02'),
(73, 54, 47, 10, '2022-09-02'),
(74, 54, 45, 10, '2022-09-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidocar`
--

CREATE TABLE `pedidocar` (
  `id_pedidoCar` int(10) NOT NULL,
  `id_articulo` int(10) NOT NULL,
  `cantidad` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidocar`
--

INSERT INTO `pedidocar` (`id_pedidoCar`, `id_articulo`, `cantidad`) VALUES
(1, 46, 50);

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
(1, 'diarco', '3826- 541608', 'hipermercadomayorista', 'la rioja ruta 5', 'la rioja', 'riarco@dirco.com', 1),
(2, 'Bicicleria Balsamo', '382541085', 'ciclismo en general', 'hipolito yrigoyen 85', 'chammical', 'wer', 0),
(3, 'Coca Cola srl Ar', '1', 'distribuidora1', 'avenida federal 21', 'chamical-La rioja', 'coca@cococola-argentina.com', 1),
(4, 'guanpeando', '123442323', 'guanpa', 'calle siempreviva 246', 'esprinfil', 'baloguando@gila.com', 0),
(5, 'lola Roca', '03826541085', 'calado', 'HIPOLITO IRIGOYEN 85', 'CAMICAL', 'bicicleteria balsamo', 0),
(6, 'supermercado todo sucio', '2002002', 'de todo un poco', 'lejos de casa', 'localidad durA', 'mail', 1),
(7, 'lucas Maticce', '4354', '', '', '', '', 0),
(8, 'dfggfdf', '333', 'swer', 'wer', 'er', 'wer@ddd', 0),
(9, 'dfggfdf', '33355', 'swerergr', 'werggeded', 'errtger', 'wer@ddd.tgrt', 1);

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
(28, 45, '45.0', 6, 10),
(29, 46, '45.0', 3, 10),
(30, 47, '20.0', 1, 10),
(31, 48, '31.0', 1, 10),
(32, 49, '50.0', 1, 10),
(33, 50, '30.0', 1, 5),
(34, 51, '100.0', 1, 5),
(35, 52, '49.0', 1, 10),
(36, 53, '50.0', 1, 10),
(37, 54, '58.0', 1, 10),
(38, 55, '9.5', 1, 1),
(39, 56, '18.0', 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelto`
--

CREATE TABLE `suelto` (
  `id_suelto` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `suelto`
--

INSERT INTO `suelto` (`id_suelto`, `id_articulo`, `fecha`) VALUES
(1, 9, '2022-04-04'),
(2, 9, '2022-04-04'),
(3, 9, '2022-04-04'),
(4, 9, '2022-04-04'),
(5, 9, '2022-04-04'),
(6, 9, '2022-04-04'),
(7, 9, '2022-04-04'),
(8, 9, '2022-04-04'),
(9, 9, '2022-04-04'),
(10, 9, '2022-04-04'),
(11, 9, '2022-04-04'),
(12, 9, '2022-04-04'),
(13, 9, '2022-04-04'),
(14, 9, '2022-04-04'),
(15, 9, '2022-04-04'),
(16, 55, '2022-09-02'),
(17, 55, '2022-09-02'),
(18, 55, '2022-09-02'),
(19, 55, '2022-09-02'),
(20, 55, '2022-09-03'),
(21, 55, '2022-09-03');

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
(1, 'alimento balaceado', 'hola loquendo', 1),
(2, 'alimento', 'aderezo', 1),
(3, 'perfumeria', '-', 1),
(4, 'pañales', '-', 1),
(5, 'lacteo', '-}', 1),
(6, 'accesorio perro - gato-conejo', 'callares', 1),
(7, 'bebida', '-', 1),
(8, 'farmacia', '-', 1),
(9, 'almacen', '-', 1),
(10, 'Yerba Mate', 'Tipos', 1),
(11, 'Cereales', 'Varios', 1);

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
(2, 'lili', 'queloque', 'bruno', 'liliana', '0000');

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
(132, 2, '1.0', 112, '0.0', '0.0'),
(133, 2, '2.0', 113, '0.0', '0.0'),
(134, 15, '2.0', 114, '0.0', '0.0'),
(135, 1, '1.0', 115, '0.0', '0.0'),
(136, 2, '3.0', 115, '0.0', '0.0'),
(137, 3, '3.0', 115, '0.0', '0.0'),
(138, 4, '1.0', 115, '0.0', '0.0'),
(139, 20, '3.0', 115, '0.0', '0.0'),
(140, 22, '1.0', 115, '0.0', '0.0'),
(141, 24, '1.0', 115, '0.0', '0.0'),
(142, 2, '3.0', 116, '0.0', '0.0'),
(143, 15, '2.0', 116, '0.0', '0.0'),
(144, 22, '3.0', 116, '0.0', '0.0'),
(145, 25, '1.0', 116, '0.0', '0.0'),
(146, 3, '8.0', 117, '0.0', '0.0'),
(147, 1, '10.0', 118, '0.0', '0.0'),
(148, 22, '3.0', 119, '0.0', '0.0'),
(149, 3, '1.0', 120, '0.0', '0.0'),
(150, 26, '3.0', 121, '0.0', '0.0'),
(151, 24, '3.0', 122, '0.0', '0.0'),
(152, 25, '3.0', 123, '0.0', '0.0'),
(153, 3, '1.0', 124, '0.0', '0.0'),
(154, 15, '10.0', 125, '0.0', '0.0'),
(155, 19, '10.0', 128, '0.0', '0.0'),
(156, 24, '10.0', 129, '0.0', '0.0'),
(157, 26, '10.0', 131, '0.0', '0.0'),
(158, 15, '23.0', 132, '0.0', '0.0'),
(159, 2, '3.0', 133, '0.0', '0.0'),
(160, 4, '3.0', 134, '0.0', '0.0'),
(161, 3, '1.0', 135, '0.0', '0.0'),
(162, 3, '3.0', 136, '0.0', '0.0'),
(163, 3, '2.0', 137, '0.0', '0.0'),
(164, 3, '1.0', 138, '0.0', '0.0'),
(165, 3, '1.0', 139, '0.0', '0.0'),
(166, 1, '1.0', 140, '0.0', '0.0'),
(167, 3, '1.0', 141, '0.0', '0.0'),
(168, 4, '1.0', 141, '0.0', '0.0'),
(169, 15, '3.0', 142, '0.0', '0.0'),
(170, 19, '1.0', 143, '0.0', '0.0'),
(171, 1, '2.0', 144, '0.0', '0.0'),
(172, 19, '2.0', 144, '0.0', '0.0'),
(173, 6, '4.0', 145, '0.0', '0.0'),
(174, 6, '2.0', 146, '0.0', '0.0'),
(175, 1, '10.0', 147, '0.0', '0.0'),
(176, 1, '10.0', 148, '0.0', '0.0'),
(177, 1, '1.0', 149, '0.0', '0.0'),
(178, 2, '2.0', 150, '0.0', '0.0'),
(179, 2, '2.0', 151, '0.0', '0.0'),
(180, 4, '2.0', 151, '0.0', '0.0'),
(181, 3, '2.0', 152, '0.0', '0.0'),
(182, 1, '1.0', 162, '470.0', '650.0'),
(183, 2, '1.0', 163, '450.0', '640.0'),
(184, 2, '2.0', 165, '450.0', '640.0'),
(185, 5, '1.0', 166, '100.0', '200.0'),
(186, 5, '1.0', 167, '100.0', '200.0'),
(187, 4, '25.0', 168, '80.0', '100.0'),
(188, 4, '1.0', 169, '80.0', '100.0'),
(189, 2, '2.0', 170, '450.0', '640.0'),
(190, 3, '2.0', 170, '150.0', '180.0'),
(191, 4, '2.0', 170, '80.0', '100.0'),
(192, 5, '1.0', 170, '100.0', '200.0'),
(193, 7, '1.0', 171, '2800.0', '4500.0'),
(194, 7, '1.0', 172, '2800.0', '4500.0'),
(195, 7, '1.0', 173, '2800.0', '4500.0'),
(196, 7, '1.0', 174, '2800.0', '4500.0'),
(197, 7, '1.0', 175, '2800.0', '4500.0'),
(198, 7, '1.5', 176, '2800.0', '4500.0'),
(199, 7, '1.5', 177, '2800.0', '4500.0'),
(200, 7, '1.5', 178, '2800.0', '4500.0'),
(201, 7, '1.5', 179, '2800.0', '4500.0'),
(202, 7, '1.5', 180, '2800.0', '4500.0'),
(203, 7, '1.5', 181, '2800.0', '4500.0'),
(204, 2, '1.5', 182, '450.0', '640.0'),
(205, 2, '1.5', 184, '450.0', '640.0'),
(206, 7, '2.5', 185, '2800.0', '4500.0'),
(207, 7, '1.5', 186, '2800.0', '4500.0'),
(208, 7, '1.5', 187, '2800.0', '4500.0'),
(209, 3, '2.0', 188, '150.0', '180.0'),
(210, 6, '1.0', 188, '200.0', '300.0'),
(211, 1, '1.0', 189, '470.0', '650.0'),
(212, 1, '2.0', 190, '470.0', '650.0'),
(213, 2, '1000.0', 207, '450.0', '640.0'),
(214, 1, '10000.0', 208, '470.0', '650.0'),
(215, 8, '10000.0', 209, '400.0', '500.0'),
(216, 18, '10.0', 210, '180.0', '220.0'),
(217, 11, '1.5', 211, '2000.0', '3100.0'),
(218, 1, '10.0', 212, '5050.0', '6500.0'),
(219, 1, '1.0', 213, '5050.0', '6500.0'),
(220, 2, '32.0', 214, '450.0', '640.0'),
(221, 2, '10.0', 216, '450.0', '640.0'),
(222, 10, '1.0', 217, '200.0', '300.0'),
(223, 8, '10.0', 218, '400.0', '500.0'),
(224, 1, '10.0', 219, '5050.0', '6500.0'),
(225, 1, '10.0', 220, '5050.0', '6500.0'),
(226, 1, '10.0', 221, '5050.0', '6500.0'),
(227, 1, '1.0', 222, '5050.0', '6500.0'),
(228, 1, '1.0', 223, '5050.0', '6500.0'),
(229, 2, '1.0', 224, '450.0', '640.0'),
(230, 1, '10.0', 225, '5050.0', '6500.0'),
(231, 1, '1.0', 226, '5050.0', '6500.0'),
(232, 1, '1.0', 227, '5050.0', '6500.0'),
(233, 1, '1.0', 228, '5050.0', '6500.0'),
(234, 1, '1.0', 229, '5050.0', '6500.0'),
(235, 1, '1.0', 230, '5050.0', '6500.0'),
(236, 1, '1.0', 231, '5050.0', '6500.0'),
(237, 1, '1.0', 232, '5050.0', '6500.0'),
(238, 1, '1.0', 233, '5050.0', '6500.0'),
(239, 1, '1.0', 234, '5050.0', '6500.0'),
(240, 1, '1.0', 235, '5050.0', '6500.0'),
(241, 1, '1.0', 236, '5050.0', '6500.0'),
(242, 1, '1.0', 237, '5050.0', '6500.0'),
(243, 1, '1.0', 238, '5050.0', '6500.0'),
(244, 1, '1.0', 239, '5050.0', '6500.0'),
(245, 1, '1.0', 240, '5050.0', '6500.0'),
(246, 1, '1.0', 241, '5050.0', '6500.0'),
(247, 1, '1.0', 242, '5050.0', '6500.0'),
(248, 1, '1.0', 243, '5050.0', '6500.0'),
(249, 1, '1.0', 244, '5050.0', '6500.0'),
(250, 1, '1.0', 245, '5050.0', '6500.0'),
(251, 1, '1.0', 246, '5050.0', '6500.0'),
(252, 1, '1.0', 247, '5050.0', '6500.0'),
(253, 1, '1.0', 248, '5050.0', '6500.0'),
(254, 1, '1.0', 249, '5050.0', '6500.0'),
(255, 1, '1.0', 250, '5050.0', '6500.0'),
(256, 1, '1.0', 251, '5050.0', '6500.0'),
(257, 1, '1.0', 252, '5050.0', '6500.0'),
(258, 1, '1.0', 253, '5050.0', '6500.0'),
(259, 1, '1.0', 254, '5050.0', '6500.0'),
(260, 1, '1.0', 255, '5050.0', '6500.0'),
(261, 1, '1.0', 256, '5050.0', '6500.0'),
(262, 1, '1.0', 257, '5050.0', '6500.0'),
(263, 1, '1.0', 258, '5050.0', '6500.0'),
(264, 1, '1.0', 259, '5050.0', '6500.0'),
(265, 1, '1.0', 260, '5050.0', '6500.0'),
(266, 2, '1.0', 262, '450.0', '640.0'),
(267, 4, '10.0', 263, '80.0', '100.0'),
(268, 11, '1.0', 265, '2000.0', '3100.0'),
(269, 2, '1.0', 266, '450.0', '640.0'),
(270, 1, '1.0', 268, '5050.0', '6500.0'),
(271, 3, '1.0', 270, '150.0', '180.0'),
(272, 4, '32.0', 271, '80.0', '100.0'),
(273, 1, '10.0', 272, '5050.0', '6500.0'),
(274, 1, '10.0', 273, '5050.0', '6500.0'),
(275, 1, '1.0', 274, '5050.0', '6500.0'),
(276, 2, '10.0', 275, '450.0', '640.0'),
(277, 11, '1.0', 276, '2000.0', '3100.0'),
(278, 1, '50.0', 277, '5050.0', '6500.0'),
(279, 10, '10.0', 278, '200.0', '300.0'),
(280, 45, '1.0', 279, '150.0', '210.0'),
(281, 55, '1.5', 280, '500.0', '700.0'),
(282, 48, '1.0', 281, '500.0', '700.0'),
(283, 45, '1.0', 282, '150.0', '210.0'),
(284, 56, '1.0', 283, '3500.0', '4900.0'),
(285, 45, '1.0', 283, '150.0', '210.0'),
(286, 52, '1.0', 283, '80.0', '112.0'),
(287, 45, '29.0', 284, '150.0', '210.0'),
(288, 46, '50.0', 284, '130.0', '182.0'),
(289, 47, '30.0', 284, '200.0', '280.0'),
(290, 55, '5.5', 285, '500.0', '700.0'),
(291, 56, '1.0', 287, '3500.0', '4900.0'),
(292, 51, '32.0', 288, '450.0', '630.0'),
(293, 55, '3.5', 289, '500.0', '700.0'),
(294, 54, '2.0', 289, '60.0', '84.0'),
(295, 45, '10.0', 290, '150.0', '210.0'),
(296, 46, '50.0', 291, '130.0', '182.0');

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
  MODIFY `id_articulo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cierrecaja`
--
ALTER TABLE `cierrecaja`
  MODIFY `id_cierre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `cuentacorriente`
--
ALTER TABLE `cuentacorriente`
  MODIFY `id_cuentaCorriente` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `historialprecio`
--
ALTER TABLE `historialprecio`
  MODIFY `id_historial` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `id_operacion` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT de la tabla `operacionpedido`
--
ALTER TABLE `operacionpedido`
  MODIFY `id_operacionPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `pedidocar`
--
ALTER TABLE `pedidocar`
  MODIFY `id_pedidoCar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `stock`
--
ALTER TABLE `stock`
  MODIFY `id_stock` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `suelto`
--
ALTER TABLE `suelto`
  MODIFY `id_suelto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=297;
--
-- Base de datos: `sistema`
--
CREATE DATABASE IF NOT EXISTS `sistema` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(10) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `correo` varchar(250) NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id`, `nombre`, `correo`, `foto`) VALUES
(7, 'nicolas', 'balsamo2@balsamoTeam.com', '202223314520211213_155948.jpg'),
(8, 'Felipe', 'balsamo@balsamo.com', '2022150149Captura de pantalla (1).png'),
(9, 'Lynn', 'balsamo@balsamo.com', '202215191320220520_214509.jpg'),
(10, 'Felipe', 'balsamo@balsamo.com', '202221520520220311_215129.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
