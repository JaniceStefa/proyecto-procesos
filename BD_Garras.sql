-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2018 a las 20:28:56
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_garras`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_DETALLEPEDIDO` (IN `_cod_pedido` INT(3), IN `_cod_producto` VARCHAR(10), IN `_talla` VARCHAR(20), IN `_cod_material` INT(3), IN `_cantidad` INT(3), IN `_fecha_requerida` DATETIME, IN `_dni_cliente` VARCHAR(8))  INSERT INTO detallepedido (cod_pedido, cod_producto, talla, cod_material, cantidad, fecha_requerida, DNI_cliente)
values (_cod_pedido, _cod_producto, _talla, _cod_material, _cantidad, _fecha_requerida, _dni_cliente)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_MATERIAL` (IN `_descripcion` VARCHAR(20), IN `_precio` DECIMAL(6,2))  INSERT INTO material(descripcion, precio, estado) values(_descripcion, _precio, 1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PEDIDO` ()  INSERT INTO pedido(fecha_emision, estado) values(CURRENT_TIME, 1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PERSONA` (IN `_DNI` VARCHAR(8), IN `_ap_paterno` VARCHAR(20), IN `_ap_materno` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_direccion` VARCHAR(100), IN `_email` VARCHAR(100), IN `_telefono` VARCHAR(9), IN `_estado` BIT(1))  BEGIN
INSERT INTO
persona(DNI,ap_paterno,ap_materno,nombre,direccion, email, telefono, estado) 
VALUES (_DNI,_ap_paterno,_ap_materno,_nombre,_direccion,_email,_telefono,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_precio_total` DECIMAL(6,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(6,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10), IN `_estado` CHAR(8))  BEGIN
INSERT INTO presupuesto(cod_presupuesto,precio_total,fecha_entrega,precio_parcial,fecha_pago_parcial,cod_pedido,estado) 
VALUES (_cod_presupuesto,_precio_total,_fecha_entrega,_precio_parcial,_fecha_pago_parcial,_cod_pedido,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRODUCTO` (IN `_descripcion` VARCHAR(25), IN `_imagen` TEXT)  INSERT INTO producto(descripcion, imagen, estado)VALUES(_descripcion, _imagen, 1)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10), IN `_tipo_acceso` BIT(1), IN `_estado` BIT(1))  BEGIN
INSERT INTO usuario(DNI,contraseña,tipo_acceso,estado) 
VALUES (_DNI,_contrasenia,_tipo_acceso,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_MATERIAL` (IN `_cod_material` INT(3), IN `_descripcion` VARCHAR(20), IN `_precio` DECIMAL(6,2))  UPDATE material
set descripcion = _descripcion, precio=_precio
WHERE cod_material=_cod_material$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PERSONA` (IN `_DNI` VARCHAR(8), IN `_ap_paterno` VARCHAR(20), IN `_ap_materno` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_direccion` VARCHAR(100), IN `_email` VARCHAR(100), IN `_telefono` VARCHAR(9), IN `_estado` BIT(1))  BEGIN
UPDATE persona
SET DNI=_DNI,ap_paterno= _ap_paterno, ap_materno=_ap_materno, nombre=_nombre, direccion=_direccion, email=_email, telefono=_telefono, estado=_estado
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_precio_total` DECIMAL(6,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(6,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10))  BEGIN
UPDATE presupuesto
set precio_total=_precio_total,fecha_entrega=_fecha_entrega,precio_parcial=_precio_parcial,fecha_pago_parcial=_fecha_pago_parcial
WHERE cod_presupuesto=_cod_presupuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRODUCTO` (IN `_cod_producto` INT(3), IN `_descripcion` VARCHAR(25), IN `_imagen` TEXT)  UPDATE producto
set descripcion = _descripcion, imagen=_imagen
WHERE cod_producto = _cod_producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10), IN `_tipo_acceso` BIT(1), IN `_cod_usuario` VARCHAR(10))  BEGIN
UPDATE presupuesto
set DNI=_DNI,contraseña=_contrasenia,tipo_acceso=_tipo_acceso
WHERE cod_usuario=_cod_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_MATERIAL` (IN `_cod_material` INT)  UPDATE material
SET estado=0
WHERE cod_material=_cod_material$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PEDIDO` (IN `_cod_pedido` INT(3))  UPDATE pedido
SET estado=0
WHERE cod_pedido=_cod_pedido$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PERSONA` (IN `_DNI` VARCHAR(8))  BEGIN
UPDATE persona
SET estado=0
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_cod_pedido` VARCHAR(10), IN `_estado` CHAR(8))  BEGIN
UPDATE presupuesto
SET estado=_estado
WHERE cod_presupuesto=_cod_presupuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRODUCTO` (IN `_cod_producto` INT)  UPDATE producto
SET estado=0
WHERE cod_producto=_cod_producto$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_estado` BIT(1))  BEGIN
UPDATE usuario
SET estado=0
WHERE cod_usuario=_cod_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_DETALLEPEDIDO` ()  SELECT * FROM detallepedido$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_MATERIAL` ()  SELECT cod_material, descripcion, precio FROM material WHERE estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PEDIDO` ()  SELECT * FROM pedido WHERE estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PERSONA` ()  BEGIN
SELECT *
FROM persona
WHERE estado=1
ORDER BY ap_paterno ASC;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRESUPUESTO` ()  BEGIN
SELECT*FROM presupuesto ORDER BY cod_presupuesto and estado;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRODUCTO` ()  SELECT * FROM producto WHERE estado = 1$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_USUARIO` ()  BEGIN
SELECT*FROM usuario ORDER BY cod_usuario LIMIT 150;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `cod_pedido` int(3) NOT NULL,
  `cod_producto` int(3) NOT NULL,
  `talla` varchar(2) NOT NULL,
  `cod_material` int(3) NOT NULL,
  `cantidad` int(3) NOT NULL,
  `fecha_requerida` date NOT NULL,
  `DNI_cliente` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `cod_material` int(3) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`cod_material`, `descripcion`, `precio`, `estado`) VALUES
(1, 'Algodon', '10.00', b'1'),
(2, 'Sintético', '10.00', b'1'),
(3, 'Dryfit', '10.00', b'1'),
(4, 'Suplex', '10.00', b'1'),
(5, 'Polyster', '10.00', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `cod_pedido` int(3) NOT NULL,
  `fecha_emision` datetime NOT NULL,
  `estado` bit(1) NOT NULL
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
  `email` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presupuesto`
--

CREATE TABLE `presupuesto` (
  `cod_presupuesto` varchar(10) NOT NULL,
  `precio_total` decimal(6,2) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `precio_parcial` decimal(6,2) NOT NULL,
  `fecha_pago_parcial` date NOT NULL,
  `cod_pedido` int(3) NOT NULL,
  `estado` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_producto` int(3) NOT NULL,
  `descripcion` varchar(25) NOT NULL,
  `imagen` text NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `descripcion`, `imagen`, `estado`) VALUES
(1, 'Buzos', '', b'1'),
(2, 'Casacas', '', b'1'),
(3, 'Polos', '', b'1'),
(4, 'Shorts', '', b'1'),
(5, 'CD1: Buzos-Casacas', '', b'1'),
(6, 'CD2: Polos-Shorts', '', b'1'),
(7, 'CD3: Conjunto Completo', '', b'1'),
(8, 'CD3: Conjunto Comple', '', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(8) NOT NULL,
  `cod_usuario` varchar(10) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `tipo_acceso` bit(1) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `cod_pedido` (`cod_pedido`) USING BTREE,
  ADD KEY `DNI_cliente` (`DNI_cliente`) USING BTREE,
  ADD KEY `cod_material` (`cod_material`);

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
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`),
  ADD KEY `DNI` (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `material`
--
ALTER TABLE `material`
  MODIFY `cod_material` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `cod_pedido` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `cod_producto` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`DNI_cliente`) REFERENCES `persona` (`DNI`),
  ADD CONSTRAINT `detallepedido_ibfk_5` FOREIGN KEY (`cod_material`) REFERENCES `material` (`cod_material`),
  ADD CONSTRAINT `detallepedido_ibfk_6` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`),
  ADD CONSTRAINT `detallepedido_ibfk_7` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`);

--
-- Filtros para la tabla `presupuesto`
--
ALTER TABLE `presupuesto`
  ADD CONSTRAINT `presupuesto_ibfk_1` FOREIGN KEY (`cod_pedido`) REFERENCES `pedido` (`cod_pedido`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
