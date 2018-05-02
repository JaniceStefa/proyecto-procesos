-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2018 a las 17:48:33
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
-- Base de datos: `proyecto`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
