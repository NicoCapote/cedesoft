-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contratos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id_ciudad` int(11) NOT NULL,
  `nom_ciudad` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_pais` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id_ciudad`, `nom_ciudad`, `id_pais`) VALUES
(1, 'Manhatan', 2),
(32, 'Cali', 1),
(33, 'Tokyo', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `id_contrato` int(3) NOT NULL,
  `id_proceso` int(10) NOT NULL,
  `tipo_contrato` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `fecha_crear` datetime NOT NULL,
  `fecha_fin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`id_contrato`, `id_proceso`, `tipo_contrato`, `id_empleado`, `id_empresa`, `fecha_crear`, `fecha_fin`) VALUES
<<<<<<< HEAD
(1, 1, 'contrato importacion', 2, 1, '2020-05-25 00:00:00', '2020-05-28 00:00:00');
=======
(1, 1, 'contrato importacion', 2, 1, '2020-06-10 00:00:00', '2020-06-28 00:00:00'),
(2, 2, 'contrato provee. insumo', 2, 2, '2020-01-15 00:00:00', '2020-01-25 00:00:00'),
(3, 0, 'contrato de aprendiz', 2, 2, '2020-05-18 13:52:19', '2020-05-23 13:52:19'),
(19, 0, 'venta', 1, 2, '2020-05-01 00:00:00', '2020-05-31 00:00:00'),
(33, 0, 'hola', 2, 1, '2020-05-26 00:00:00', '2020-05-30 00:00:00'),
(34, 0, 'contrato de convenios', 2, 1, '2020-07-26 00:00:00', '2020-08-29 00:00:00'),
(35, 0, 'comercial', 1, 1, '2020-06-01 00:00:00', '2020-06-06 00:00:00'),
(36, 0, 'judicial', 2, 1, '2020-05-31 00:00:00', '2020-06-12 00:00:00');
>>>>>>> 23ccd5c674057bedf383c4b5ca70f0ddf069299a

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratoxproceso`
--

CREATE TABLE `contratoxproceso` (
  `id_empleado` int(11) NOT NULL,
  `id_contrato` int(3) NOT NULL,
  `id_proceso` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `contratoxproceso`
--

INSERT INTO `contratoxproceso` (`id_empleado`, `id_contrato`, `id_proceso`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nom_empleado` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad_empleado` int(2) NOT NULL,
  `genero_empleado` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nom_empleado`, `usuario`, `password`, `correo`, `edad_empleado`, `genero_empleado`, `id_sucursal`, `fecha_ingreso`, `fecha_salida`) VALUES
(1, 'pito1', 'uwuqwe', '56566', 'mralejo@gmail.comaa', 54, 'f', 2, '2020-08-14', '2021-08-10'),
(2, 'Nombre', 'Uusuario', '$2y$12$8D5f4jTOk.KNp/gpt5ckT.ZaKlO8flwKjIVzaZVsTcJ5g8O7JFRrq', 'correo', 20, 'm', 1, '2020-05-11', '2020-05-06'),
(979, 'goku', 'sayajin', '$2y$12$id5tdAHacWIZYuYuEmo7hOyFfH6hd5NO/igNhzWqKeIb5C326.dYG', 'goku@dbz.com', 45, 'm', 2, '2020-05-20', '2020-08-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nom_empresa` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `nit` int(11) NOT NULL,
  `id_pais` int(3) NOT NULL,
  `desc_empresa` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nom_empresa`, `nit`, `id_pais`, `desc_empresa`) VALUES
(1, 'distribudoraXYZ.SAS', 123456789, 2, 'La empresa se encarga de ventas a nivel nacional.'),
(2, 'softwareXYZ', 987654321, 1, 'Empresa de Manejos de software.'),
(3, 'crunchyroll', 123456789, 3, 'Empresa de anime legal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `id_pais` int(3) NOT NULL,
  `nom_pais` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id_pais`, `nom_pais`) VALUES
(1, 'Colombia'),
(2, 'Estados Unidos'),
(3, 'Panama'),
(4, 'Japon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id_proceso` int(3) NOT NULL,
  `nom_proceso` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `desc_proceso` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id_proceso`, `nom_proceso`, `desc_proceso`) VALUES
(1, 'venta', 'ventas se efectuaron con un total de cien por dia'),
(2, 'surtido de insumos', 'se surtio en el dia de hoy, tres de marzo del dos mil veinte un total de docientos articulos de jugueteria'),
(3, 'compra', 'se hizo la compra de 100 computadores'),
(5, 'administracion financiera', 'departamento contable'),
(6, 'sistemas', 'cosas de sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(5) NOT NULL,
  `nit_proveedor` int(11) NOT NULL,
  `nom_proveedor` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `desc_proveedor` text COLLATE utf8_spanish_ci NOT NULL,
  `id_contrato` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nit_proveedor`, `nom_proveedor`, `desc_proveedor`, `id_contrato`) VALUES
<<<<<<< HEAD
(1, 11111111, 'interneteeee', 'proveedor a cargo de RED', 1),
(4, 234234, 'asdasda', 'asdas', 1);
=======
(1, 1234567890, 'internet', 'proveedor a cargo de RED', 2),
(2, 987654321, 'papeleria', 'proveedor a cargo de papeleria ', 2),
(3, 123456789, 'Los negros del ataud', 'Te bailan si no te ciudas', 36),
(10, 123456789, 'cecep', 'Institucion', 34);
>>>>>>> 23ccd5c674057bedf383c4b5ca70f0ddf069299a

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(1) NOT NULL,
  `nom_rol` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `desc_rol` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nom_rol`, `desc_rol`) VALUES
(1, 'visitante', 'el visitante podra visualizar los servicios que ofrece nuestra aplicación web'),
(2, 'admin', 'tiene permitido el acceso al sistema para gestiones del mismo'),
(3, 'gestor_de_empresa', 'Gestionar sucursales, empleados y procesos'),
(4, 'jefe_de_procesos', 'Un empleado puede ser j.procesos'),
(5, 'empleado', 'la verdad no se que puede hacer'),
(6, 'sucursales', 'la verdad no se que puede hacer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

CREATE TABLE `sucursal` (
  `id_sucursal` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`id_sucursal`, `id_empresa`, `id_ciudad`, `nombre`) VALUES
(1, 1, 1, 'tienda'),
(2, 1, 32, 'tienda 2'),
(3, 3, 32, 'anime pirata'),
(4, 3, 33, 'Beautiful Hentai');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(1) NOT NULL,
  `id_empleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `password`, `correo`, `id_rol`, `id_empleado`) VALUES
(3, 'daniel', '1234', 'dani@gmail.com', 2, 1),
(4, 'rafa', '1234', 'rafa@correo.com', 3, 1),
(5, 'nicole', '1234', 'nico@correo.com', 4, 2),
(6, 'empleado_x', '1234', 'empleadox@correo.com', 5, 2),
(7, 'sucursal', '1234', 'empleadoy@correo.com', 6, 2),
(8, 'prieto_comun', '1234', 'miprieto@yahoo.com', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `id_empleado` (`id_empleado`),
  ADD KEY `id_empresa` (`id_empresa`),
  ADD KEY `id_proceso` (`id_proceso`);

--
-- Indices de la tabla `contratoxproceso`
--
ALTER TABLE `contratoxproceso`
  ADD KEY `id_contrato` (`id_contrato`,`id_proceso`),
  ADD KEY `id_proceso` (`id_proceso`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `id_sucursal` (`id_sucursal`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id_proceso`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `id_contrato` (`id_contrato`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD PRIMARY KEY (`id_sucursal`),
  ADD KEY `id_ciudad` (`id_ciudad`),
  ADD KEY `id_ciudad_2` (`id_ciudad`),
  ADD KEY `id_empresa` (`id_empresa`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_rol_2` (`id_rol`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id_contrato` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=980;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `id_pais` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id_proceso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `sucursal`
--
ALTER TABLE `sucursal`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `ciudad_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contratoxproceso`
--
ALTER TABLE `contratoxproceso`
  ADD CONSTRAINT `contratoxproceso_ibfk_1` FOREIGN KEY (`id_proceso`) REFERENCES `procesos` (`id_proceso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contratoxproceso_ibfk_2` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contratoxproceso_ibfk_3` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `empleado_ibfk_2` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursal` (`id_sucursal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`id_contrato`) REFERENCES `contrato` (`id_contrato`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `sucursal`
--
ALTER TABLE `sucursal`
  ADD CONSTRAINT `sucursal_ibfk_1` FOREIGN KEY (`id_ciudad`) REFERENCES `ciudad` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sucursal_ibfk_2` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
<<<<<<< HEAD
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
=======
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);
COMMIT;
>>>>>>> 23ccd5c674057bedf383c4b5ca70f0ddf069299a

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
