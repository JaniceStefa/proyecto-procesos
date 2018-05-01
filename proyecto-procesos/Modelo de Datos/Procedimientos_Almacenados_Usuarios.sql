-- phpMyAdmin SQL Dump
-- version 4.7.4
-- 
https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- 
Tiempo de generación: 01-05-2018 a las 21:21:03
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_ApPaterno` VARCHAR(20), `_ApMaterno` VARCHAR(20), `_Nombres` VARCHAR(50), `_Direccion` VARCHAR(100), `_Telefono` VARCHAR(9), `_Email` VARCHAR(60), `_Contraseña` VARCHAR(20), `_Tipoacceso` BIT(1), `_Estado` BIT(1))  BEGIN
INSERT INTO usuario(DNI,ApPaterno,ApMaterno,Nombres,Direccion,Telefono,Email,Contraseña,Tipoacceso) 
VALUES (_DNI,_ApPaterno,_ApMaterno,_Nombres,_Direccion,_Telefono,_Email,_Contraseña, _Tipoacceso);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_ApPaterno` VARCHAR(20), `_ApMaterno` VARCHAR(20), `_Nombres` VARCHAR(50), `_Direccion` VARCHAR(100), `_Telefono` VARCHAR(9), `_Email` VARCHAR(60), `_Contraseña` VARCHAR(20), `_Tipoacceso` BIT(1))  BEGIN
UPDATE usuario
SET ApPaterno=_ApPaterno,ApMaterno=_ApMaterno,Nombres=_Nombres,
Direccion=_Direccion,Telefono=_Telefono,Email=_Email,
Constraseña=_Constraseña,Tipoacceso=_Tipoacceso
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_USUARIO` (IN `_DNI` VARCHAR(8), `_Estado` BIT(1))  BEGIN
UPDATE usuario
SET Estado=_Estado
WHERE DNI=_DNI;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_USUARIO` ()  BEGIN
SELECT*FROM usuario;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- 