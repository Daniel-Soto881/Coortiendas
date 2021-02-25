-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2020 a las 00:14:40
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `coortiendas_a`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_clie` int(8) NOT NULL,
  `Est_clie` int(2) NOT NULL,
  `Nam_clie` varchar(25) NOT NULL,
  `email_clie` varchar(40) NOT NULL,
  `Pass_clie` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_clie`, `Est_clie`, `Nam_clie`, `email_clie`, `Pass_clie`) VALUES
(1001, 1, 'Jose Gonzales', 'Jg0zales18@gmail.com', 'JGON123'),
(1002, 2, 'Maria Mercedes', 'Marimer@gmail.com', 'MARILINDA123'),
(1003, 1, 'Carolina Herrera', 'caroherrera@Hotmail.com', 'carito123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detal_fact`
--

CREATE TABLE `detal_fact` (
  `Id_comp` int(20) NOT NULL,
  `Num_fact` int(20) NOT NULL,
  `id_prod` int(20) NOT NULL,
  `Cant_prod` int(3) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detal_fact`
--

INSERT INTO `detal_fact` (`Id_comp`, `Num_fact`, `id_prod`, `Cant_prod`, `Subtotal`) VALUES
(1000, 1001, 100, 5, '15000.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_empl` int(3) NOT NULL,
  `Est_usu` int(2) NOT NULL,
  `Sol_empl` int(8) NOT NULL,
  `Nam_empl` varchar(25) NOT NULL,
  `Email_empl` varchar(40) NOT NULL,
  `Pass_emp` varchar(30) NOT NULL,
  `Img_emp` bit(1) DEFAULT NULL,
  `Obser_empl` varchar(225) NOT NULL,
  `Edad_empl` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_empl`, `Est_usu`, `Sol_empl`, `Nam_empl`, `Email_empl`, `Pass_emp`, `Img_emp`, `Obser_empl`, `Edad_empl`) VALUES
(1, 1, 71, 'Luis Morales', 'Luis16M15@outlook.com', '123Luis', NULL, 'Buen trabajador', 20),
(2, 1, 72, 'Maria Rosendo', 'Mariros@outlook.com', 'Mri456', NULL, 'Gran trabajador', 54);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empre_prov`
--

CREATE TABLE `empre_prov` (
  `Id_empre_prov` int(2) NOT NULL,
  `Nam_empre_prov` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empre_prov`
--

INSERT INTO `empre_prov` (`Id_empre_prov`, `Nam_empre_prov`) VALUES
(101, 'ALPINA'),
(102, 'BIMBO'),
(103, 'DORIA'),
(104, 'SUPER RICAS'),
(105, 'ZENÚ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estad_mov`
--

CREATE TABLE `estad_mov` (
  `Id_estad_mov` int(2) NOT NULL,
  `Nam_estad_mov` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estad_mov`
--

INSERT INTO `estad_mov` (`Id_estad_mov`, `Nam_estad_mov`) VALUES
(1, 'EN PROCESO'),
(2, 'TERMINADO'),
(3, 'CANCELADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estad_prod`
--

CREATE TABLE `estad_prod` (
  `Id_estad_prod` int(2) NOT NULL,
  `Nam_estad_prod` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estad_prod`
--

INSERT INTO `estad_prod` (`Id_estad_prod`, `Nam_estad_prod`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO'),
(3, 'SIN EXISTENCIAS'),
(4, 'EN DESCUENTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_fact`
--

CREATE TABLE `est_fact` (
  `Id_est_fact` int(2) NOT NULL,
  `Nam_est_fact` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `est_fact`
--

INSERT INTO `est_fact` (`Id_est_fact`, `Nam_est_fact`) VALUES
(1, 'REALIZADA'),
(2, 'EN PROCESO'),
(3, 'CANCELADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_prov`
--

CREATE TABLE `est_prov` (
  `Id_est_prov` int(2) NOT NULL,
  `Nam_est_prov` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `est_prov`
--

INSERT INTO `est_prov` (`Id_est_prov`, `Nam_est_prov`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_sol`
--

CREATE TABLE `est_sol` (
  `Id_est_sol` int(2) NOT NULL,
  `nam_est_sol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `est_sol`
--

INSERT INTO `est_sol` (`Id_est_sol`, `nam_est_sol`) VALUES
(1, 'ACEPTADA'),
(2, 'DENEGADA'),
(3, 'EN PROCESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_usu`
--

CREATE TABLE `est_usu` (
  `Id_est_usu` int(3) NOT NULL,
  `name_est_usu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `est_usu`
--

INSERT INTO `est_usu` (`Id_est_usu`, `name_est_usu`) VALUES
(1, 'ACTIVO'),
(2, 'INACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Num_fact` int(20) NOT NULL,
  `Est_fact` int(2) NOT NULL,
  `Tip_pag` int(2) NOT NULL,
  `Id_cliente` int(8) DEFAULT NULL,
  `eple_fact` int(3) NOT NULL,
  `Fecha_fact` datetime NOT NULL,
  `Caja_fact` int(3) NOT NULL,
  `det_fac` int(20) NOT NULL,
  `Neto_val` decimal(10,2) NOT NULL,
  `Iva` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Num_fact`, `Est_fact`, `Tip_pag`, `Id_cliente`, `eple_fact`, `Fecha_fact`, `Caja_fact`, `det_fac`, `Neto_val`, `Iva`) VALUES
(1001, 1, 3, 1002, 1, '2020-08-11 00:45:32', 1, 1000, '16000.00', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Entra_2` int(20) NOT NULL,
  `Id_prod` int(20) DEFAULT NULL,
  `Tip_prod` int(2) DEFAULT NULL,
  `Entr_inv` int(3) DEFAULT NULL,
  `Sal_inv` int(3) DEFAULT NULL,
  `Saldo_inv` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Entra_2`, `Id_prod`, `Tip_prod`, `Entr_inv`, `Sal_inv`, `Saldo_inv`) VALUES
(1, 100, 1, 100, 25, 75),
(2, 104, 1, 30, 15, 15),
(3, 101, 9, 25, 7, 18),
(4, 102, 2, 7, 5, 2),
(5, 103, 5, 20, 5, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inve_has_detfac`
--

CREATE TABLE `inve_has_detfac` (
  `Entra_2` int(20) NOT NULL,
  `Id_comp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inve_has_detfac`
--

INSERT INTO `inve_has_detfac` (`Entra_2`, `Id_comp`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movi_inv`
--

CREATE TABLE `movi_inv` (
  `Id_movi_inv` int(13) NOT NULL,
  `Tip_mov_inv` int(2) NOT NULL,
  `Est_mov_inv` int(2) NOT NULL,
  `Entra_2_inv` int(20) NOT NULL,
  `Fecha_mov_inv` datetime NOT NULL,
  `Desc_mov_inv` varchar(250) NOT NULL,
  `Cant_mov_inv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movi_inv`
--

INSERT INTO `movi_inv` (`Id_movi_inv`, `Tip_mov_inv`, `Est_mov_inv`, `Entra_2_inv`, `Fecha_mov_inv`, `Desc_mov_inv`, `Cant_mov_inv`) VALUES
(2001, 1, 1, 1, '2020-08-24 10:35:10', '3000', 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_prod` int(20) NOT NULL,
  `Est_prod` int(2) NOT NULL,
  `Tip_prod` int(2) NOT NULL,
  `Prov` int(8) NOT NULL,
  `Nam_prod` varchar(30) NOT NULL,
  `Img_prod` bit(1) NOT NULL,
  `Carac_prod` varchar(250) NOT NULL,
  `Puntua_prod` float NOT NULL,
  `Val_prod` decimal(10,2) NOT NULL,
  `Iva_prod` int(3) NOT NULL,
  `Presen_prod` varchar(25) NOT NULL,
  `Tam_prod` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_prod`, `Est_prod`, `Tip_prod`, `Prov`, `Nam_prod`, `Img_prod`, `Carac_prod`, `Puntua_prod`, `Val_prod`, `Iva_prod`, `Presen_prod`, `Tam_prod`) VALUES
(100, 1, 1, 1002, 'Leche alpina entera', b'1', 'Leche alpina entera de 1100ml por unidad', 5, '3000.00', 19, 'Bolsa de 1100ml', '1100ml'),
(101, 1, 9, 1004, 'Super ricas polllo', b'1', 'Paquete Super Ricas de Pollo 115g', 4, '1500.00', 19, 'Paquete 115g', '115g'),
(102, 2, 2, 1003, 'Mortadela Tradicional Zenú', b'1', 'Paquete de mortadela tradicional Zenú de 450g', 4.5, '3500.00', 19, 'Paquete 450g', '450g'),
(103, 1, 5, 1002, 'Pan tajado Bimbo', b'1', 'Paquete de pan tajado bimbo de 600g', 4, '2800.00', 19, 'Paquete 600g', '600g'),
(104, 2, 1, 1002, 'Yogurt Alpina', b'1', 'Yogurt individual Alpina de 200g', 3.8, '2000.00', 19, 'Paquete 200g', '200g');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_prov` int(20) NOT NULL,
  `Empre_prov` int(2) NOT NULL,
  `Est_prov` int(2) NOT NULL,
  `Nam_prov` varchar(30) NOT NULL,
  `Cel_prov` int(10) DEFAULT NULL,
  `Tel_prov` int(10) DEFAULT NULL,
  `Cedu_prov` int(13) NOT NULL,
  `Dir_prov` varchar(30) NOT NULL,
  `Notas_prov` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`Id_prov`, `Empre_prov`, `Est_prov`, `Nam_prov`, `Cel_prov`, `Tel_prov`, `Cedu_prov`, `Dir_prov`, `Notas_prov`) VALUES
(1000, 101, 1, 'Juan Mendez', 2147483647, 4475867, 1234567890, 'Carrera 55 #78-7 norte', 'Gracias amores'),
(1001, 103, 2, 'Laura Dominguez', 452317945, 6775658, 2147483647, 'Calle 100 # 78-45', 'Llega temprano'),
(1002, 102, 1, 'Maicol Martinez', 402345678, 4504788, 2147483647, 'Carrera 34 #58b', 'No confiar en el'),
(1003, 105, 2, 'Rogrigo Jimenez', 125795678, 4505657, 2147483647, 'Calle 55-7 # 88b', 'Mala entrega'),
(1004, 104, 1, 'Julia Herrera', 205857545, 4778988, 2147483647, 'Carrera 45 #57-67b', 'Excelentes productos comercializados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solic_emp`
--

CREATE TABLE `solic_emp` (
  `Id_sol_emp` int(8) NOT NULL,
  `Est_sol_emp` int(2) DEFAULT NULL,
  `Tip_usu` int(2) DEFAULT NULL,
  `Tip_doc_usu` int(2) DEFAULT NULL,
  `Sol_emp` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solic_emp`
--

INSERT INTO `solic_emp` (`Id_sol_emp`, `Est_sol_emp`, `Tip_usu`, `Tip_doc_usu`, `Sol_emp`) VALUES
(71, 1, 3, 1, 'Deseo ser un buen empleado y cumplir con todas mir responzabilidades.'),
(72, 1, 2, 1, 'Quiero ganarme el corazon de los clientes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_doc`
--

CREATE TABLE `tip_doc` (
  `Id_tip_doc` int(2) NOT NULL,
  `Nam_tip_doc` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_doc`
--

INSERT INTO `tip_doc` (`Id_tip_doc`, `Nam_tip_doc`) VALUES
(1, 'Cedula de ciuda'),
(2, 'Cedula de extra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_mov`
--

CREATE TABLE `tip_mov` (
  `Id_tip_mov` int(2) NOT NULL,
  `Nam_tip_mov` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_mov`
--

INSERT INTO `tip_mov` (`Id_tip_mov`, `Nam_tip_mov`) VALUES
(1, 'ENTRADA'),
(2, 'SALIDA'),
(3, 'DEVOLUCION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_pag`
--

CREATE TABLE `tip_pag` (
  `Id_tip_pag` int(2) NOT NULL,
  `Nam_tip_pag` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_pag`
--

INSERT INTO `tip_pag` (`Id_tip_pag`, `Nam_tip_pag`) VALUES
(1, 'TARJETA DEBITO'),
(2, 'TARJETA CREDITO'),
(3, 'EFECTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_prod`
--

CREATE TABLE `tip_prod` (
  `Id_tip_prod` int(2) NOT NULL,
  `Nam_tip_prod` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_prod`
--

INSERT INTO `tip_prod` (`Id_tip_prod`, `Nam_tip_prod`) VALUES
(1, 'Lacteos'),
(2, 'Embutidos'),
(3, 'Aseo'),
(4, 'Pollo Carnes y Pescados'),
(5, 'Panadería y Repostería'),
(6, 'Aceite y Mantequilla'),
(7, 'Vinos y Licores'),
(8, 'Granos'),
(9, 'Snacks');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tip_usu`
--

CREATE TABLE `tip_usu` (
  `Id_tip_usu` int(2) NOT NULL,
  `nam_tip_usu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_usu`
--

INSERT INTO `tip_usu` (`Id_tip_usu`, `nam_tip_usu`) VALUES
(1, 'Supervisor'),
(2, 'Cajero'),
(3, 'Almacenista'),
(4, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_clie`),
  ADD KEY `fk_clieest` (`Est_clie`);

--
-- Indices de la tabla `detal_fact`
--
ALTER TABLE `detal_fact`
  ADD PRIMARY KEY (`Id_comp`) USING BTREE,
  ADD KEY `fk_prodeta` (`id_prod`),
  ADD KEY `fk_facehmpl` (`Num_fact`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`ID_empl`),
  ADD KEY `fk_eplest` (`Est_usu`),
  ADD KEY `fk_eplesol` (`Sol_empl`);

--
-- Indices de la tabla `empre_prov`
--
ALTER TABLE `empre_prov`
  ADD PRIMARY KEY (`Id_empre_prov`);

--
-- Indices de la tabla `estad_mov`
--
ALTER TABLE `estad_mov`
  ADD PRIMARY KEY (`Id_estad_mov`);

--
-- Indices de la tabla `estad_prod`
--
ALTER TABLE `estad_prod`
  ADD PRIMARY KEY (`Id_estad_prod`);

--
-- Indices de la tabla `est_fact`
--
ALTER TABLE `est_fact`
  ADD PRIMARY KEY (`Id_est_fact`);

--
-- Indices de la tabla `est_prov`
--
ALTER TABLE `est_prov`
  ADD PRIMARY KEY (`Id_est_prov`);

--
-- Indices de la tabla `est_sol`
--
ALTER TABLE `est_sol`
  ADD PRIMARY KEY (`Id_est_sol`);

--
-- Indices de la tabla `est_usu`
--
ALTER TABLE `est_usu`
  ADD PRIMARY KEY (`Id_est_usu`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Num_fact`),
  ADD KEY `fk_facempl` (`eple_fact`),
  ADD KEY `fk_estfac_2` (`Id_cliente`),
  ADD KEY `Est_fact` (`Est_fact`),
  ADD KEY `fk_pago` (`Tip_pag`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Entra_2`),
  ADD KEY `fk_inve_prod` (`Id_prod`),
  ADD KEY `fk_inve_tiprod` (`Tip_prod`);

--
-- Indices de la tabla `inve_has_detfac`
--
ALTER TABLE `inve_has_detfac`
  ADD KEY `fk_invedetfac_a` (`Entra_2`),
  ADD KEY `fk_invedetfac_b` (`Id_comp`);

--
-- Indices de la tabla `movi_inv`
--
ALTER TABLE `movi_inv`
  ADD PRIMARY KEY (`Id_movi_inv`),
  ADD KEY `fk_movtip` (`Tip_mov_inv`),
  ADD KEY `fk_movest` (`Est_mov_inv`),
  ADD KEY `fk_moventr` (`Entra_2_inv`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`Id_prod`),
  ADD KEY `fk_Produc_Tiproduc` (`Tip_prod`),
  ADD KEY `fk_Produc_EstProduc` (`Est_prod`),
  ADD KEY `fk_Produc_Prov` (`Prov`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_prov`),
  ADD KEY `fk_provempre` (`Empre_prov`),
  ADD KEY `fk_prove_est` (`Est_prov`);

--
-- Indices de la tabla `solic_emp`
--
ALTER TABLE `solic_emp`
  ADD PRIMARY KEY (`Id_sol_emp`),
  ADD KEY `fk_estsol` (`Est_sol_emp`),
  ADD KEY `fk_Tip_usu` (`Tip_usu`),
  ADD KEY `fk_tip_doc` (`Tip_doc_usu`);

--
-- Indices de la tabla `tip_doc`
--
ALTER TABLE `tip_doc`
  ADD PRIMARY KEY (`Id_tip_doc`);

--
-- Indices de la tabla `tip_mov`
--
ALTER TABLE `tip_mov`
  ADD PRIMARY KEY (`Id_tip_mov`);

--
-- Indices de la tabla `tip_pag`
--
ALTER TABLE `tip_pag`
  ADD PRIMARY KEY (`Id_tip_pag`);

--
-- Indices de la tabla `tip_prod`
--
ALTER TABLE `tip_prod`
  ADD PRIMARY KEY (`Id_tip_prod`);

--
-- Indices de la tabla `tip_usu`
--
ALTER TABLE `tip_usu`
  ADD PRIMARY KEY (`Id_tip_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_clie` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT de la tabla `detal_fact`
--
ALTER TABLE `detal_fact`
  MODIFY `Id_comp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_empl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empre_prov`
--
ALTER TABLE `empre_prov`
  MODIFY `Id_empre_prov` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de la tabla `estad_mov`
--
ALTER TABLE `estad_mov`
  MODIFY `Id_estad_mov` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estad_prod`
--
ALTER TABLE `estad_prod`
  MODIFY `Id_estad_prod` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `est_fact`
--
ALTER TABLE `est_fact`
  MODIFY `Id_est_fact` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `est_prov`
--
ALTER TABLE `est_prov`
  MODIFY `Id_est_prov` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `est_sol`
--
ALTER TABLE `est_sol`
  MODIFY `Id_est_sol` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `est_usu`
--
ALTER TABLE `est_usu`
  MODIFY `Id_est_usu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Num_fact` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT de la tabla `movi_inv`
--
ALTER TABLE `movi_inv`
  MODIFY `Id_movi_inv` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `Id_prod` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_prov` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT de la tabla `solic_emp`
--
ALTER TABLE `solic_emp`
  MODIFY `Id_sol_emp` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `tip_doc`
--
ALTER TABLE `tip_doc`
  MODIFY `Id_tip_doc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tip_mov`
--
ALTER TABLE `tip_mov`
  MODIFY `Id_tip_mov` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tip_pag`
--
ALTER TABLE `tip_pag`
  MODIFY `Id_tip_pag` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tip_prod`
--
ALTER TABLE `tip_prod`
  MODIFY `Id_tip_prod` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tip_usu`
--
ALTER TABLE `tip_usu`
  MODIFY `Id_tip_usu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_clieest` FOREIGN KEY (`Est_clie`) REFERENCES `est_usu` (`Id_est_usu`);

--
-- Filtros para la tabla `detal_fact`
--
ALTER TABLE `detal_fact`
  ADD CONSTRAINT `fk_facehmpl` FOREIGN KEY (`Num_fact`) REFERENCES `factura` (`Num_fact`),
  ADD CONSTRAINT `fk_prodeta` FOREIGN KEY (`id_prod`) REFERENCES `inventario` (`Id_prod`);

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_eplesol` FOREIGN KEY (`Sol_empl`) REFERENCES `solic_emp` (`Id_sol_emp`),
  ADD CONSTRAINT `fk_eplest` FOREIGN KEY (`Est_usu`) REFERENCES `est_usu` (`Id_est_usu`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`Est_fact`) REFERENCES `est_fact` (`Id_est_fact`),
  ADD CONSTRAINT `fk_estfac_2` FOREIGN KEY (`Id_cliente`) REFERENCES `cliente` (`Id_clie`),
  ADD CONSTRAINT `fk_facempl` FOREIGN KEY (`eple_fact`) REFERENCES `empleados` (`ID_empl`),
  ADD CONSTRAINT `fk_pago` FOREIGN KEY (`Tip_pag`) REFERENCES `tip_pag` (`Id_tip_pag`);

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `fk_inve_prod` FOREIGN KEY (`Id_prod`) REFERENCES `producto` (`Id_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_inve_tiprod` FOREIGN KEY (`Tip_prod`) REFERENCES `producto` (`Tip_prod`);

--
-- Filtros para la tabla `inve_has_detfac`
--
ALTER TABLE `inve_has_detfac`
  ADD CONSTRAINT `fk_invedetfac_a` FOREIGN KEY (`Entra_2`) REFERENCES `inventario` (`Entra_2`),
  ADD CONSTRAINT `fk_invedetfac_b` FOREIGN KEY (`Id_comp`) REFERENCES `detal_fact` (`Id_comp`);

--
-- Filtros para la tabla `movi_inv`
--
ALTER TABLE `movi_inv`
  ADD CONSTRAINT `fk_moventr` FOREIGN KEY (`Entra_2_inv`) REFERENCES `inventario` (`Entra_2`),
  ADD CONSTRAINT `fk_movest` FOREIGN KEY (`Est_mov_inv`) REFERENCES `estad_mov` (`Id_estad_mov`),
  ADD CONSTRAINT `fk_movtip` FOREIGN KEY (`Tip_mov_inv`) REFERENCES `tip_mov` (`Id_tip_mov`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_Produc_EstProduc` FOREIGN KEY (`Est_prod`) REFERENCES `estad_prod` (`Id_estad_prod`),
  ADD CONSTRAINT `fk_Produc_Prov` FOREIGN KEY (`Prov`) REFERENCES `proveedor` (`Id_prov`),
  ADD CONSTRAINT `fk_Produc_Tiproduc` FOREIGN KEY (`Tip_prod`) REFERENCES `tip_prod` (`Id_tip_prod`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `fk_prove_est` FOREIGN KEY (`Est_prov`) REFERENCES `est_prov` (`Id_est_prov`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_provempre` FOREIGN KEY (`Empre_prov`) REFERENCES `empre_prov` (`Id_empre_prov`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `solic_emp`
--
ALTER TABLE `solic_emp`
  ADD CONSTRAINT `fk_Tip_usu` FOREIGN KEY (`Tip_usu`) REFERENCES `tip_usu` (`Id_tip_usu`),
  ADD CONSTRAINT `fk_estsol` FOREIGN KEY (`Est_sol_emp`) REFERENCES `est_sol` (`Id_est_sol`),
  ADD CONSTRAINT `fk_tip_doc` FOREIGN KEY (`Tip_doc_usu`) REFERENCES `tip_doc` (`Id_tip_doc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
