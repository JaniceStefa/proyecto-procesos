-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 02-05-2018 a las 14:16:12
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

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
DROP PROCEDURE IF EXISTS `SP_A_TABLA_USUARIO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_ApPaterno` VARCHAR(20), `_ApMaterno` VARCHAR(20), `_Nombres` VARCHAR(50), `_Direccion` VARCHAR(100), `_Telefono` VARCHAR(9), `_Email` VARCHAR(60), `_Contraseña` VARCHAR(20), `_Tipoacceso` BIT(1), `_Estado` BIT(1))  BEGIN
INSERT INTO usuario(DNI,ApPaterno,ApMaterno,Nombres,Direccion,Telefono,Email,Contraseña,Tipoacceso) 
VALUES (_DNI,_ApPaterno,_ApMaterno,_Nombres,_Direccion,_Telefono,_Email,_Contraseña, _Tipoacceso);
END$$

DROP PROCEDURE IF EXISTS `SP_C_TABLA_USUARIO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_ApPaterno` VARCHAR(20), `_ApMaterno` VARCHAR(20), `_Nombres` VARCHAR(50), `_Direccion` VARCHAR(100), `_Telefono` VARCHAR(9), `_Email` VARCHAR(60), `_Contraseña` VARCHAR(20), `_Tipoacceso` BIT(1))  BEGIN
UPDATE usuario
SET ApPaterno=_ApPaterno,ApMaterno=_ApMaterno,Nombres=_Nombres,
Direccion=_Direccion,Telefono=_Telefono,Email=_Email,
Contraseña=_Contraseña,Tipoacceso=_Tipoacceso
WHERE DNI=_DNI;
END$$

DROP PROCEDURE IF EXISTS `SP_E_TABLA_USUARIO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_Estado` BIT(1))  BEGIN
UPDATE usuario
SET Estado=_Estado
WHERE DNI=_DNI;
END$$

DROP PROCEDURE IF EXISTS `SP_M_TABLA_USUARIO`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_USUARIO` ()  BEGIN
SELECT*FROM usuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `DNI` varchar(8) NOT NULL,
  `ApellidoPaterno` varchar(20) NOT NULL,
  `ApellidoMaterno` varchar(20) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Dirección` varchar(100) DEFAULT NULL,
  `Telefono` varchar(9) DEFAULT NULL,
  `Email` varchar(60) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Tipo_acceso` bit(1) NOT NULL,
  `Estado` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
