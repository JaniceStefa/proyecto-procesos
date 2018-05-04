-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2018 a las 04:35:12
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoprocesos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_MATERIAL` (IN `_cod_material` VARCHAR(7), IN `_Descripcion` VARCHAR(20), IN `_Precio` DECIMAL(6,2))  BEGIN
INSERT INTO material(cod_material, Descripcion, Precio)
VALUES (_cod_material, _Descripcion, _Precio);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRODUCTO` (IN `_cod_producto` VARCHAR(7), IN `_Descripcion` VARCHAR(20), IN `_Fecha_pago_parcial` DATE, IN `_Imagen` TEXT, IN `_cod_material` VARCHAR(7))  BEGIN
INSERT INTO producto(cod_producto, Descripcion, Fecha_pago_parcial,Imagen, cod_material) 
VALUES (_cod_producto,_Descripcion,_Fecha_pago_parcial, _Imagen, _cod_material);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_ApPaterno` VARCHAR(20), `_ApMaterno` VARCHAR(20), `_Nombres` VARCHAR(50), `_Direccion` VARCHAR(100), `_Telefono` VARCHAR(9), `_Email` VARCHAR(60), `_Contraseña` VARCHAR(20), `_Tipoacceso` BIT(1), `_Estado` BIT(1))  BEGIN
INSERT INTO usuario(DNI,ApPaterno,ApMaterno,Nombres,Direccion,Telefono,Email,Contraseña,Tipoacceso) 
VALUES (_DNI,_ApPaterno,_ApMaterno,_Nombres,_Direccion,_Telefono,_Email,_Contraseña, _Tipoacceso);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_MATERIAL` (IN `_cod_material` VARCHAR(7), IN `_Descripcion` VARCHAR(20), IN `_Precio` DECIMAL(6,2))  BEGIN
UPDATE producto
SET cod_material=_cod_material, Descripcion=_Descripcion, Precio=_Precio
WHERE cod_material=_cod_materia;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRODUCTO` (IN `_cod_producto` VARCHAR(7), IN `_Descripcion` VARCHAR(20), IN `_Fecha_pago_parcial` DATE, IN `_Imagen` TEXT, IN `_cod_material` VARCHAR(7))  BEGIN
UPDATE producto
SET cod_producto=_cod_producto, Descripcion=_Descripcion, Fecha_pago_parcial=_Fecha_pago_parcial, cod_material=_cod_material
WHERE cod_producto=_cod_producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_ApPaterno` VARCHAR(20), `_ApMaterno` VARCHAR(20), `_Nombres` VARCHAR(50), `_Direccion` VARCHAR(100), `_Telefono` VARCHAR(9), `_Email` VARCHAR(60), `_Contraseña` VARCHAR(20), `_Tipoacceso` BIT(1))  BEGIN
UPDATE usuario
SET ApPaterno=_ApPaterno,ApMaterno=_ApMaterno,Nombres=_Nombres,
Direccion=_Direccion,Telefono=_Telefono,Email=_Email,
Constraseña=_Constraseña,Tipoacceso=_Tipoacceso
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_MATERIAL` (IN `cod_producto` VARCHAR(7), IN `Estado` BIT(1))  BEGIN
UPDATE producto
SET Estado=_Estado
WHERE cod_producto=_cod_producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRODUCTO` (IN `Estado` BIT(1), IN `_cod_producto` VARCHAR(7))  BEGIN
UPDATE producto
SET Estado=_Estado
WHERE cod_producto=_cod_producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_Estado` BIT(1))  BEGIN
UPDATE usuario
SET Estado=_Estado
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_MATERIAL` ()  BEGIN
SELECT*FROM material;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PEDIDO` ()  BEGIN
SELECT*FROM pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRODUCTO` ()  BEGIN
SELECT*FROM producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_USUARIO` ()  BEGIN
SELECT*FROM usuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `cantidad` int(3) NOT NULL,
  `talla` varchar(2) NOT NULL,
  `cod_pedido` varchar(10) NOT NULL,
  `DNI_cliente` varchar(8) NOT NULL,
  `fecha_requerida` date NOT NULL,
  `cod_producto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `cod_material` varchar(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `precio` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` varchar(10) NOT NULL,
  `fecha_emision` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `DNI` varchar(10) NOT NULL,
  `ap_paterno` varchar(20) NOT NULL,
  `ap_materno` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `e-mail` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `cod_presupuesto` varchar(10) NOT NULL,
  `precio_total` int(3) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `precio_parcial` int(3) NOT NULL,
  `fecha_pago_parcial` date NOT NULL,
  `cod_pedido` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_producto` varchar(10) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `imagen` text NOT NULL,
  `cod_material` varchar(10) NOT NULL,
  `fech_pago_parcial` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(8) NOT NULL,
  `cod_usuario` varchar(10) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `Tipo_Acceso` bit(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `DNI_cliente` (`DNI_cliente`,`cod_producto`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `cod_pedido` (`cod_pedido`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`cod_material`),
  ADD KEY `precio` (`precio`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`cod_pedido`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD PRIMARY KEY (`cod_presupuesto`),
  ADD KEY `cod_pedido` (`cod_pedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_producto`),
  ADD KEY `cod_material` (`cod_material`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `DNI` (`DNI`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`DNI_cliente`) REFERENCES `persona` (`DNI`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`),
  ADD CONSTRAINT `detallepedido_ibfk_3` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`);

--
-- Filtros para la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD CONSTRAINT `presupuesto_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`cod_material`) REFERENCES `material` (`cod_material`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
