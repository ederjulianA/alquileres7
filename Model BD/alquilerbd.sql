-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-04-2015 a las 23:08:34
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alquilerbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `BarId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `BarNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`BarId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE IF NOT EXISTS `bodega` (
  `BodId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `BodNom` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`BodId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_productos`
--

CREATE TABLE IF NOT EXISTS `categoria_productos` (
  `CatProId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `CatProNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `CatProTip` int(2) NOT NULL,
  PRIMARY KEY (`CatProId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `CiuId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `CiuNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`CiuId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `PaisId` int(6) NOT NULL COMMENT 'Id país',
  `PaisNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre país',
  PRIMARY KEY (`PaisId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `PedId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `PedEmp` varchar(60) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Empresa',
  `PedNomCon` varchar(60) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre Contacto',
  `PedDir` varchar(40) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección pedido',
  `PedTel` int(15) NOT NULL COMMENT 'Teléfono',
  `PedBar` varchar(40) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Barrio',
  `PedCorreo` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Correo electrónico',
  `PedDiaEve` datetime NOT NULL COMMENT 'Día del evento',
  `PedFinEve` datetime NOT NULL COMMENT 'Día de entrega',
  `PedEnt` datetime NOT NULL COMMENT 'Día de recogida',
  `PedEvePer` date NOT NULL COMMENT 'Evento periódico',
  `PedDesEvePer` varchar(45) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción evento periódico',
  `PedObs` varchar(80) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Observación',
  `PedConf` int(2) NOT NULL COMMENT 'Confirmación',
  `PedSubTot` int(6) NOT NULL COMMENT 'Subtotal',
  `PedDesc` int(6) NOT NULL COMMENT 'Descuento',
  `PedIva` int(6) NOT NULL COMMENT 'IVA',
  `PedDep` int(6) NOT NULL COMMENT 'Depósito',
  `PedAbo` int(6) NOT NULL COMMENT 'Abono',
  `PedTipCue` varchar(2) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo cuenta',
  `PedTram` varchar(1) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tramitado S/N',
  `PedEst` varchar(1) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado del pedido A/I',
  PRIMARY KEY (`PedId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `PerfId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Id Perfil',
  `PerfNom` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre perfil',
  PRIMARY KEY (`PerfId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `PermId` int(6) NOT NULL COMMENT 'Id perfil',
  `PermOpc` varchar(6) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Opción perfil',
  PRIMARY KEY (`PermId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `ProId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ProRef` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ProNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `ProDes` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `ProFot` year(4) NOT NULL,
  `ProIva` int(2) NOT NULL,
  `ProTiempo` time NOT NULL,
  PRIMARY KEY (`ProId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE IF NOT EXISTS `receta` (
  `RecId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `RecCant` int(3) NOT NULL COMMENT 'Cantidad receta',
  `RecPres` varchar(60) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Presentaciòn receta',
  PRIMARY KEY (`RecId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `UsuId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `UsuNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `UsuPass` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `UsuTip` int(2) NOT NULL,
  `UsuDir` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `UsuTel` int(15) NOT NULL,
  `UsuCorreo` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`UsuId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
