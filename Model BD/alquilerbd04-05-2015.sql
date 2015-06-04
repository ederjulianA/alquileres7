-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2015 a las 20:44:15
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alquileres`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `BarId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `BarNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`BarId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bodega`
--

CREATE TABLE IF NOT EXISTS `bodega` (
  `BodId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `BodNom` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`CatProId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE IF NOT EXISTS `ciudad` (
  `CiuId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `CiuNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`CiuId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `iva` int(11) NOT NULL,
  `precio_iva` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
  `EmpId` int(11) NOT NULL AUTO_INCREMENT,
  `EmpNom` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `EmpLogo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `EmpRazSoc` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `EmpDesc` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `EmpTel` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `EmpDir` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`EmpId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `PaisId` int(6) NOT NULL COMMENT 'Id país',
  `PaisNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre país',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`PedId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `PerfId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Id Perfil',
  `PerfNom` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre perfil',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`PerfId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `PermId` int(6) NOT NULL COMMENT 'Id perfil',
  `PermOpc` varchar(6) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Opción perfil',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`PermId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `ProId` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `ProRef` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `ProNom` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `ProDes` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `ProFot` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `ProIva` int(2) NOT NULL,
  `ProTiempo` time DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`RecId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `UsuTip` int(2) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `UsuTip`, `created_at`, `updated_at`) VALUES
(1, 'eder@gmail.com', '$2y$10$SvCL7dmsqRfImRzVbCllJeaxe//a9o1ATmqJbfF6VHW2zXFMCYVE2', 'GwzVKCxa9I6v4bnezTR9Uu2PT5DtS4o9MefRpyqfZrFcF2XaFAtxVivUTTOg', 1, '0000-00-00', '2015-04-28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
