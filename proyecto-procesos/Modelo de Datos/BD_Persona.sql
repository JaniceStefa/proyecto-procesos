-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2018 a las 19:44:18
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
-- Base de datos: `db_garras`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PERSONA` (IN `_DNI` VARCHAR(8), IN `_ap_paterno` VARCHAR(20), IN `_ap_materno` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_direccion` VARCHAR(100), IN `_email` VARCHAR(100), IN `_telefono` VARCHAR(9), IN `_estado` BIT(1))  BEGIN
INSERT INTO
persona(DNI,ap_paterno,ap_materno,nombre,direccion, email, telefono, estado) 
VALUES (_DNI,_ap_paterno,_ap_materno,_nombre,_direccion,_email,_telefono,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10), IN `_tipo_acceso` BIT(1), IN `_estado` BIT(1))  BEGIN
INSERT INTO usuario(DNI,contraseña,tipo_acceso,estado) 
VALUES (_DNI,_contrasenia,_tipo_acceso,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PERSONA` (IN `_DNI` VARCHAR(8), IN `_ap_paterno` VARCHAR(20), IN `_ap_materno` VARCHAR(20), IN `_nombre` VARCHAR(50), IN `_direccion` VARCHAR(100), IN `_email` VARCHAR(100), IN `_telefono` VARCHAR(9), IN `_estado` BIT(1))  BEGIN
UPDATE persona
SET DNI=_DNI,ap_paterno= _ap_paterno, ap_materno=_ap_materno, nombre=_nombre, direccion=_direccion, email=_email, telefono=_telefono, estado=_estado
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_contrasenia` VARCHAR(10), IN `_tipo_acceso` BIT(1), IN `_cod_usuario` VARCHAR(10))  BEGIN
UPDATE presupuesto
set DNI=_DNI,contraseña=_contrasenia,tipo_acceso=_tipo_acceso
WHERE cod_usuario=_cod_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PERSONA` (IN `_DNI` VARCHAR(8))  BEGIN
UPDATE persona
SET estado=0
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), IN `_estado` BIT(1))  BEGIN
UPDATE usuario
SET estado=0
WHERE cod_usuario=_cod_usuario;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PERSONA` ()  BEGIN
SELECT *
FROM persona
WHERE estado=1
ORDER BY ap_paterno ASC;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_USUARIO` ()  BEGIN
SELECT*FROM usuario ORDER BY cod_usuario LIMIT 150;
END$$

DELIMITER ;

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

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`DNI`, `ap_paterno`, `ap_materno`, `nombre`, `direccion`, `email`, `telefono`, `estado`) VALUES
('73947476', 'Meza', 'Garcia   ', 'Robert Jarod      ', 'Calle las Gaviotas Mz.B Lt.19      ', 'romega_2011@hotmail.com      ', '935993138', b'1'),
('75525121', 'sdfsdfsdsdfsd ', 'asdasasd ', 'asdasd ', 'sdfsdfds ', 'sddsf ', '123456 ', b'0'),
('80070020', 'Meza ', 'Navarro    ', 'Frescia Solange    ', 'Calle conquistadores    ', 'sf_chin@hotmail.com    ', '952365325', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `DNI` varchar(8) NOT NULL,
  `cod_usuario` int(10) NOT NULL,
  `contraseña` varchar(10) NOT NULL,
  `tipo_acceso` bit(1) NOT NULL,
  `estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`DNI`, `cod_usuario`, `contraseña`, `tipo_acceso`, `estado`) VALUES
('73947476', 2, '3452', b'1', b'0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`DNI`);

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
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
