-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-05-2018 a las 19:14:04
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_precio_total` DECIMAL(6,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(6,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10), IN `_estado` CHAR(8))  BEGIN
INSERT INTO presupuesto(cod_presupuesto,precio_total,fecha_entrega,precio_parcial,fecha_pago_parcial,cod_pedido,estado) 
VALUES (_cod_presupuesto,_precio_total,_fecha_entrega,_precio_parcial,_fecha_pago_parcial,_cod_pedido,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_precio_total` DECIMAL(6,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(6,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10))  BEGIN
UPDATE presupuesto
set precio_total=_precio_total,fecha_entrega=_fecha_entrega,precio_parcial=_precio_parcial,fecha_pago_parcial=_fecha_pago_parcial
WHERE cod_presupuesto=_cod_presupuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_cod_pedido` VARCHAR(10), IN `_estado` CHAR(8))  BEGIN
UPDATE presupuesto
SET estado=_estado
WHERE cod_presupuesto=_cod_presupuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRESUPUESTO` ()  BEGIN
SELECT*FROM presupuesto ORDER BY cod_presupuesto and estado;
END$$

DELIMITER ;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
