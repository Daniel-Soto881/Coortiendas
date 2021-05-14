-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2021 a las 21:28:50
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
-- Base de datos: `coortiendas_f`
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
  `Pass_clie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id_clie`, `Est_clie`, `Nam_clie`, `email_clie`, `Pass_clie`) VALUES
(1001, 1, 'Jose Gonzales', 'Jg0zales18@gmail.com', 'JGON123'),
(1002, 2, 'Maria Mercedes', 'Marimer@gmail.com', 'MARILINDA123'),
(1003, 1, 'Carolina Herrera', 'caroherrera@Hotmail.com', 'carito123'),
(1004, 1, 'aaa aaaa aaa aaaa', 'aaa@gmail.com', '$2y$10$Fu9raIbrCI99sHp6HN7hnuY'),
(1007, 1, 'ccc ccc cccc ccc', 'ccc@gmail.com', '$2y$10$blwMZMJCD9bMV9jOmPqoI.FbJPz7B7Xfw/GC7CXSb//UXaqaT14vW'),
(1009, 1, 'zzzzz   zzzzz zzzz', 'zz@gmal.com', '$2y$10$DDB./XWmcWMsFraeXYIC1.rlrWkAGOD2FQvGSt6LCy/9z7.QkEvne'),
(1010, 1, 'bbb', 'bbb@gmail.com', '$2y$10$H/ENfMz56fg1bF1j.ITvl./rouofWGv2OF0ffmFyftPKpX5XFJ6.C'),
(1011, 1, 'xxx', 'xxxx@gmail.com', '$2y$10$z6nUG60VWUNKtQWfC4Lncuhr2dQtMTElG01aAY4VS/eDGI2fRd1Ly'),
(1012, 1, 'vvv', 'vvv@gmail.com', '$2y$10$9T0SotgDiGopCzBN/6lmH.0IONIL3DawUNIe8ZYOVar3w7DU6v33W'),
(1013, 1, 'lll', 'mm@gmail.com', '$2y$10$7CMeBQfqThDtFrCDrWdQdOMcmKuKmea3seszyfv241YH7Zkx4lfte'),
(1014, 1, 'fg', 'fg@gmail.com', '$2y$10$9DNWEMLa6/eACK.LuljBZeFRXKhnFUfQrjs9U9pEBW8tm01wm56d.'),
(1015, 1, 'dd', 'dd@gmail.com', '$2y$10$99uF/Tv8CMeBhePgPVz/O.wt4nTL.0/v8hycH56jrwzvJisv2sihS'),
(1016, 1, 'hh', 'hh@gmail.com', '$2y$10$sX9n.yV3NdS.DJZLi46DzOALFdV34rxBwempu6fPHm/9jwXjXcmYi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detal_fact`
--

CREATE TABLE `detal_fact` (
  `Id_comp` int(20) NOT NULL,
  `Num_fact` int(20) NOT NULL,
  `id_prod` int(20) NOT NULL,
  `Cant_prod` int(3) NOT NULL,
  `Desc %` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detal_fact`
--

INSERT INTO `detal_fact` (`Id_comp`, `Num_fact`, `id_prod`, `Cant_prod`, `Desc %`) VALUES
(1000, 1001, 100, 5, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `ID_empl` int(3) NOT NULL,
  `Est_usu` int(2) NOT NULL,
  `Sol_empl` int(8) NOT NULL,
  `Email_empl` varchar(40) NOT NULL,
  `Pass_emp` varchar(100) NOT NULL,
  `Obser_empl` varchar(225) NOT NULL,
  `Edad_empl` int(3) NOT NULL,
  `img_eml` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`ID_empl`, `Est_usu`, `Sol_empl`, `Email_empl`, `Pass_emp`, `Obser_empl`, `Edad_empl`, `img_eml`) VALUES
(1, 1, 71, 'Luis16M15@outlook.com', '123Luis', 'Buen trabajador', 20, NULL),
(2, 1, 72, 'Mariros@outlook.com', '$2y$10$cAFlUawnfYVhBWC8eCGXzO74.h1x0J1UAOi2Xkbm.75QHl6Xj1Fb.', 'Gran trabajador', 54, NULL),
(5, 1, 82, 'ccccc@gmail.com', '$2y$10$agZCBWyDuvoNp98iCEnuxeI6t.5PQilxCV/fRRk1FRkw34Gh8V7RC', 'Honestidad e integridad', 0, NULL),
(566, 1, 84, 'cd@gmail.com', '$2y$10$58DcJhT3.StoAAOiA6hrmO0fftT4cMUAWceR1GDcWrNYpQslqgCUq', 'integridad', 0, NULL),
(656, 1, 105, 'tyyttghy@gmail.com', '$2y$10$tRzK6kE6Bkp/u1xIY5VYbu3B3Nb7CVX5qRZR4RHGFDcMP35mSPb6G', 'yty', 0, NULL),
(5656, 1, 83, 'vvv@gmail.com', '$2y$10$.BDeGZSJLwwIGIrB6SirrOU4qlduwjOo7q9M3B9S.8hjUHCICz..2', 'honestidad', 0, NULL),
(5669, 1, 85, 'jj@gmail.com', '$2y$10$ojMN3bKrtN/yWejc./wsO.5TSFt45/N9yLkyaWGeWYSzDyHQkts/C', 'honestidad', 0, NULL),
(66667, 1, 108, 'jjj@gmail.com', '$2y$10$9dyp.hwzp08GPfGTfuuDb.rOrFyaqAf2.tCkrKSAQ/DoLPPvuHCNK', 'lindo', 0, NULL),
(78678, 1, 104, '7gdfggdgdfg', 'fgdfg', 'ujgjh', 0, NULL),
(159159, 1, 86, 'bbb@gmail.com', '$2y$10$6a9IlHdFcyx55hxgLjcZH.UiSr6m/Ub1ci9tOoK0vb71i2uXl2Ioq', 'lindo', 0, NULL),
(222000, 1, 80, 'sss@gmail.com', '$2y$10$P63nSNT5Kt9S.Ds4X2bKbellP14V9m4X75WTxhW/J5pjrFoxNckmm', 'Integridad y confianza', 0, NULL),
(369369, 1, 109, 'ddd@gmail.com', '$2y$10$F.rvy5bZXtEyh/mpul0WrOMN1YbrZjf6MpT2r96T4LudgRZS2i5Qi', 'confianza en mi mismo', 0, NULL),
(995623, 1, 110, 'hhhhh@gmail.com', '$2y$10$x/6xri7/vsHK26OOyogCKej2XsrRaQjyxzNn7T/ikFhF./DDXYTbG', 'lindoi', 0, NULL),
(56565656, 1, 103, 'wwwwer@gmail.com', '$2y$10$XG4nHeR8nEPB4w/oXQRIheGIKqzPUxonfvF8kBRAd9DcnlnFVP9Ty', 'ghfh', 0, NULL),
(1110001110, 1, 74, 'Andres@gmail.com', '$2y$10$6a9IlHdFcyx55hxgLjcZH.UiSr6m/Ub1ci9tOoK0vb71i2uXl2Ioq', 'Gran Administrador.', 34, NULL);

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
(3, 'CANCELADO')
(4, 'EFECTUANDO');

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
  `Tip_pag` int(2) NOT NULL COMMENT 'Manera de pago(tarjeta, contado...)',
  `Id_cliente` int(8) DEFAULT NULL,
  `eple_fact` int(3) NOT NULL,
  `Fecha_fact` datetime NOT NULL,
  `Fech_entrega` date DEFAULT NULL,
  `Caja_fact` int(3) NOT NULL,
  `Toral_val` decimal(10,2) NOT NULL COMMENT 'Totalidad monetaria de la suma, después del impuesto.',
  `Retenido_Fac` decimal(10,2) DEFAULT NULL COMMENT 'Impuesto total de la factura.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`Num_fact`, `Est_fact`, `Tip_pag`, `Id_cliente`, `eple_fact`, `Fecha_fact`, `Fech_entrega`, `Caja_fact`, `Toral_val`, `Retenido_Fac`) VALUES
(1001, 1, 3, 1002, 1, '2020-08-11 00:45:32', NULL, 1, '16000.00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `Entra_2` int(20) NOT NULL COMMENT 'Identificador que muestra el numero que representa el pod en el inventario',
  `Id_prod` int(20) DEFAULT NULL,
  `Limite_max` int(4) DEFAULT NULL COMMENT 'Tope max al cual las unidades pueden llegar',
  `Cost_ini` int(3) DEFAULT NULL COMMENT 'Costo inicial del prod antes de impuesto.',
  `Saldo_inv` int(3) DEFAULT NULL COMMENT 'Cantidad actial del prod',
  `Limite_min` int(4) NOT NULL COMMENT 'Tope min al cual las unidades pueden llegar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Entra_2`, `Id_prod`, `Limite_max`, `Cost_ini`, `Saldo_inv`, `Limite_min`) VALUES
(1, 100, 100, 25, 75, 0),
(2, 104, 30, 15, 15, 0),
(3, 101, 25, 7, 18, 0),
(4, 102, 7, 5, 2, 0),
(5, 103, 20, 5, 15, 0);

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
  `Tip_mov_inv` int(2) NOT NULL COMMENT 'Tipo o causa de el movimiento(venta, compra de prooveedores...)',
  `Est_mov_inv` int(2) NOT NULL,
  `Entra_2_inv` int(20) NOT NULL,
  `Entra_movi` int(8) NOT NULL COMMENT 'Cantidad que esta entrando al inventario, siempre y cuando sea este el caso',
  `Sali_movi` int(8) NOT NULL COMMENT 'Cantidad que esta saliendo del inventario, siempre y cuando sea este el caso',
  `Cant_mov_inv` int(3) NOT NULL,
  `Fecha_mov_inv` datetime NOT NULL,
  `Desc_mov_inv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `movi_inv`
--

INSERT INTO `movi_inv` (`Id_movi_inv`, `Tip_mov_inv`, `Est_mov_inv`, `Entra_2_inv`, `Entra_movi`, `Sali_movi`, `Cant_mov_inv`, `Fecha_mov_inv`, `Desc_mov_inv`) VALUES
(2001, 1, 1, 1, 0, 0, 100, '2020-08-24 10:35:10', '3000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `Id_prod` int(20) NOT NULL COMMENT 'Código designado por el usuario para reconocer el producto con ayuda del identificador de código de barras',
  `Est_prod` int(2) NOT NULL COMMENT 'Activo, Inactivo...',
  `Tip_prod` int(2) NOT NULL COMMENT 'representa al conjunto al que pertenece el producto. Ej. Lácteos, carnes...',
  `Prov` int(8) NOT NULL,
  `Nam_prod` varchar(30) NOT NULL,
  `Carac_prod` varchar(250) NOT NULL,
  `Puntua_prod` float NOT NULL,
  `Val_prod` decimal(10,2) NOT NULL COMM ENT 'Valor del producto antes de impuesto.',
  `Iva_prod` int(3) NOT NULL COMMENT 'Porcentaje(%) del impuesto establecido por el producto en venta.',
  `Dscuen_prod` int(3) NOT NULL COMMENT 'Descuento establecido para cada prod.',
  `UniMedi_prod` int(2) NOT NULL COMMENT 'La manera en la que se mide el tamaño de de dicho producto(g, l, ml, etc).',
  `Tam_prod` varchar(25) NOT NULL COMMENT 'Especificación del tamaño de producto por unidad, según sea el caso.',
  `Uni_x_venta` int(8) NOT NULL COMMENT 'Cantidades en las que se venda el producto como uno solo(paca de 6)',
  `img_prod` varchar(8) NOT NULL COMMENT 'extensión de la img sin incluir el punto(.)',
  `UniMedida_prod` int(2) NOT NULL COMMENT 'La manera en la que se mide el tamaño de de dicho producto(g, l, ml, etc).'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`Id_prod`, `Est_prod`, `Tip_prod`, `Prov`, `Nam_prod`, `Carac_prod`, `Puntua_prod`, `Val_prod`, `Iva_prod`, `Dscuen_prod`, `UniMedi_prod`, `Tam_prod`, `Uni_x_venta`, `img_prod`, `UniMedida_prod`) VALUES
(56, 1, 3, 1004, 'sss', 'lindo', 0, '400.00', 15, 0, 1, '25', 0, '?PNG\r\n\Z\n', 0),
(100, 1, 1, 1002, 'huevitos rico pollo', 'xxx', 0, '3000.00', 19, 0, 1, '1100ml', 0, '????\0JF', 0),
(101, 1, 9, 1000, 'aseo 1', 'www', 0, '100.00', 10, 0, 1, '115g', 0, '????\0JF', 0),
(102, 1, 4, 1003, 'Mortadela Tradicional Zenú', 'De gran calidad,', 0, '3500.00', 19, 0, 15, '450g', 0, '????\0JF', 0),
(103, 1, 5, 1002, 'Pan tajado Bimbo', 'Crocante', 0, '2800.00', 19, 0, 35, '600g', 0, '????\0JF', 0),
(104, 2, 1, 1002, 'Yogurt Alpina', 'cremoso', 0, '2000.00', 19, 0, 1, '200g', 0, '????\0JF', 0),
(111, 1, 2, 1004, 'chosiitos', 'hola', 0, '1000.00', 19, 0, 12, '10 ', 0, '????\0JF', 0),
(333, 1, 2, 1002, 'wqeqwe', 'qwe qwe', 0, '1000.00', 12, 0, 1, '150 kg', 0, '', 0),
(334, 1, 1, 1002, 'Leche alpina entera', 'gggdgf', 0, '3000.00', 19, 0, 2, '1100', 0, '', 0),
(335, 1, 1, 1002, 'Leche alpina entera', 'gggdgf', 0, '3000.00', 19, 0, 2, '1100', 0, '', 0),
(336, 1, 1, 1002, 'Leche alqueria entera', 'de gran calidad', 0, '3000.00', 19, 0, 1, '1100ml', 0, '', 0),
(444, 1, 3, 1002, 'xxx', 'xxx', 0, '111.00', 1100, 0, 1, '', 0, '', 0),
(9999, 1, 2, 1000, 'carnes deliciosas', 'www', 0, '10.00', 1, 0, 15, '45', 0, '', 0),
(486957, 1, 4, 1002, 'leche Margarita', 'descripcion x', 0, '2500.00', 19, 0, 1, '1000', 0, '????\0JF', 0);

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
(1004, 104, 1, 'Julia Herrera', 205857545, 4778988, 2147483647, 'Carrera 45 #57-67b', 'Excelentes productos comercializados'),
(1005, 104, 1, 'aaa', 111, 222, 123123, 'cra 23#25-A', 'Entrega Puntual, además es genial.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solic_emp`
--

CREATE TABLE `solic_emp` (
  `Id_sol_emp` int(8) NOT NULL,
  `Est_sol_emp` int(2) DEFAULT NULL,
  `Tip_usu` int(2) DEFAULT NULL,
  `Tip_doc_usu` int(2) DEFAULT NULL,
  `doc_usu` int(20) DEFAULT NULL,
  `Sol_emp` text DEFAULT NULL,
  `Email_sol` varchar(40) DEFAULT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Pass_sol` varchar(100) DEFAULT NULL,
  `Fecha_nac` datetime NOT NULL,
  `Fecha_sol` datetime DEFAULT NULL,
  `IMG` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `solic_emp`
--

INSERT INTO `solic_emp` (`Id_sol_emp`, `Est_sol_emp`, `Tip_usu`, `Tip_doc_usu`, `doc_usu`, `Sol_emp`, `Email_sol`, `Nombre`, `Pass_sol`, `Fecha_nac`, `Fecha_sol`, `IMG`) VALUES
(71, 1, 3, 1, NULL, 'Deseo ser un buen empleado y cumplir con todas mir responzabilidades.', NULL, '', NULL, '0000-00-00 00:00:00', NULL, ''),
(72, 1, 2, 1, NULL, 'Quiero ganarme el corazon de los clientes.', NULL, '', NULL, '0000-00-00 00:00:00', NULL, ''),
(73, 1, 2, 1, 1111111111, 'honestidad', 'zzz@gmail.com', 'zzz zzz', '$2y$10$M3c6BP8KDWqlGcLq0GeQVe5WNXtY1l6K0wtr47S47AmBz7tzMtvEi', '2000-01-20 00:00:00', '2020-10-10 13:38:46', ''),
(74, 1, 4, 1, 1110001110, 'Gran emprendedor', 'Andres@gmail.com', 'Andres Diaz', '$2y$10$cAFlUawnfYVhBWC8eCGXzO74.h1x0J1UAOi2Xkbm.75QHl6Xj1Fb.', '1987-06-17 00:00:00', '2020-10-11 20:52:34', ''),
(80, 1, 3, 1, 222000, 'Integridad y confianza', 'sss@gmail.com', 'sss sss', '$2y$10$P63nSNT5Kt9S.Ds4X2bKbellP14V9m4X75WTxhW/J5pjrFoxNckmm', '1996-02-07 00:00:00', '2020-10-13 15:47:02', ''),
(81, 2, 3, 1, 55555, 'integridad y compromiso', 'laumen@gmail.com', 'laura Mendoza', '$2y$10$43W.djEFhOeAQUERpZSyCO7he49j.qiPJ.DYsPo3J18l3/erfHnt.', '1995-06-14 00:00:00', '2020-10-13 16:48:18', ''),
(82, 1, 3, 1, 5, 'Honestidad e integridad', 'ccccc@gmail.com', 'ccc ccc cccc ccc', '$2y$10$agZCBWyDuvoNp98iCEnuxeI6t.5PQilxCV/fRRk1FRkw34Gh8V7RC', '1997-02-05 00:00:00', '2020-10-13 18:19:08', ''),
(83, 1, 3, 1, 5656, 'honestidad', 'vvv@gmail.com', 'vv', '$2y$10$.BDeGZSJLwwIGIrB6SirrOU4qlduwjOo7q9M3B9S.8hjUHCICz..2', '1977-01-04 00:00:00', '2020-10-19 12:07:47', ''),
(84, 1, 3, 1, 566, 'integridad', 'cd@gmail.com', 'c', '$2y$10$58DcJhT3.StoAAOiA6hrmO0fftT4cMUAWceR1GDcWrNYpQslqgCUq', '1989-05-10 00:00:00', '2020-10-19 18:28:38', ''),
(85, 1, 3, 1, 5669, 'honestidad', 'jj@gmail.com', 'jj', '$2y$10$ojMN3bKrtN/yWejc./wsO.5TSFt45/N9yLkyaWGeWYSzDyHQkts/C', '1985-01-15 00:00:00', '2020-10-20 15:33:38', ''),
(86, 1, 2, 1, 159159, 'lindo', 'bbb@gmail.com', 'bbb', '$2y$10$6a9IlHdFcyx55hxgLjcZH.UiSr6m/Ub1ci9tOoK0vb71i2uXl2Ioq', '2021-03-18 00:00:00', '2021-03-01 14:25:27', ''),
(103, 1, 1, 2, 56565656, 'ghfh', 'wwwwer@gmail.com', 'wwwwer', '$2y$10$XG4nHeR8nEPB4w/oXQRIheGIKqzPUxonfvF8kBRAd9DcnlnFVP9Ty', '2021-03-18 00:00:00', '2021-03-07 09:26:54', ''),
(104, 1, 4, 2, 78678, 'ujgjh', '7gdfggdgdfg', 'fgdgfg', 'fgdfg', '2021-03-03 19:47:59', '2021-03-25 19:47:59', 'jpg'),
(105, 1, 1, 1, 656, 'yty', 'tyyttghy@gmail.com', 'tyttgh', '$2y$10$tRzK6kE6Bkp/u1xIY5VYbu3B3Nb7CVX5qRZR4RHGFDcMP35mSPb6G', '2021-03-03 00:00:00', '2021-03-07 22:48:45', 'jpg '),
(106, 2, 1, 1, 6767, 'ghg', 'tyyttghhy@gmail.com', 'tyttgh', '$2y$10$VHZnbCKl45WFUEZZ80cozeNBZMsdxRwuVX8FRf4zt/0eCJk8fotaG', '2003-03-03 00:00:00', '2021-03-08 00:06:26', 'jpg '),
(107, 2, 3, 1, 54545463, 'Integridad en el momento de desarrollo de actividades ', 'cccc@gmail.com', 'cccc', '$2y$10$v0SzDFrD8gdzyWkzLVSRxeS4I9hik3VjJXf/rCuaISREgpT2FYqY.', '2002-01-18 00:00:00', '2021-03-10 08:52:34', 'jpg '),
(108, 1, 3, 1, 66667, 'lindo', 'jjj@gmail.com', '4445', '$2y$10$9dyp.hwzp08GPfGTfuuDb.rOrFyaqAf2.tCkrKSAQ/DoLPPvuHCNK', '1995-06-07 00:00:00', '2021-03-10 16:55:00', 'jpg '),
(109, 1, 2, 1, 369369, 'confianza en mi mismo', 'ddd@gmail.com', 'ddd', '$2y$10$F.rvy5bZXtEyh/mpul0WrOMN1YbrZjf6MpT2r96T4LudgRZS2i5Qi', '1999-02-03 00:00:00', '2021-04-05 18:36:55', 'png '),
(110, 1, 3, 1, 995623, 'lindoi', 'hhhhh@gmail.com', 'hhhhh', '$2y$10$x/6xri7/vsHK26OOyogCKej2XsrRaQjyxzNn7T/ikFhF./DDXYTbG', '1994-02-09 00:00:00', '2021-04-07 13:41:37', '');

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
(1, 'Cédula de ciuda'),
(2, 'Cédula de extra'),
(3, 'Tarjeta de iden');

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
 b 
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
  `nam_tip_usu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tip_usu`
--

INSERT INTO `tip_usu` (`Id_tip_usu`, `nam_tip_usu`) VALUES
(1, 'Supervisor'),
(2, 'Cajero'),
(3, 'Almacenista'),
(4, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unimedi_prod`
--

CREATE TABLE `unimedi_prod` (
  `Id_UniMedi_prod` int(2) NOT NULL,
  `Nam_UniMedi_prod` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`Id_comp`,`Num_fact`) USING BTREE,
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
  ADD KEY `fk_inve_prod` (`Id_prod`);

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
  ADD KEY `fk_Produc_EstProduc` (`Est_prod`),
  ADD KEY `fk_Produc_Prov` (`Prov`),
  ADD KEY `fk_Produc_Tip` (`Tip_prod`),
  ADD KEY `fk_Produc_UniMedi` (`UniMedida_prod`) USING BTREE;

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
-- Indices de la tabla `unimedi_prod`
--
ALTER TABLE `unimedi_prod`
  ADD PRIMARY KEY (`Id_UniMedi_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_clie` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1017;

--
-- AUTO_INCREMENT de la tabla `detal_fact`
--
ALTER TABLE `detal_fact`
  MODIFY `Id_comp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `ID_empl` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

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
  MODIFY `Id_prod` int(20) NOT NULL AUTO_INCREMENT COMMENT 'Código designado por el usuario para reconocer el producto con ayuda del identificador de código de barras', AUTO_INCREMENT=486958;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_prov` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT de la tabla `solic_emp`
--
ALTER TABLE `solic_emp`
  MODIFY `Id_sol_emp` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT de la tabla `tip_doc`
--
ALTER TABLE `tip_doc`
  MODIFY `Id_tip_doc` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `fk_inve_prod` FOREIGN KEY (`Id_prod`) REFERENCES `producto` (`Id_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `fk_Produc_EstProduc` FOREIGN KEY (`Est_prod`) REFERENCES `estad_prod` (`Id_estad_prod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Produc_Prov` FOREIGN KEY (`Prov`) REFERENCES `proveedor` (`Id_prov`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Produc_Tip` FOREIGN KEY (`Tip_prod`) REFERENCES `tip_prod` (`Id_tip_prod`),
  ADD CONSTRAINT `fk_Produc_Tiproduc` FOREIGN KEY (`Tip_prod`) REFERENCES `tip_prod` (`Id_tip_prod`) ON DELETE CASCADE ON UPDATE CASCADE;

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
