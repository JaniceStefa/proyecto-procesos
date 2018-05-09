DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_A_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), IN `_precio_total` DECIMAL(4,2), IN `_fecha_entrega` DATE, IN `_precio_parcial` DECIMAL(4,2), IN `_fecha_pago_parcial` DATE, IN `_cod_pedido` VARCHAR(10), IN `_estado` CHAR(8))  BEGIN
INSERT INTO presupuesto(cod_presupuesto,precio_total,fecha_entrega,precio_parcial,fecha_pago_parcial,cod_pedido,estado) 
VALUES (_cod_presupuesto,_precio_total,_fecha_entrega,_precio_parcial,_fecha_pago_parcial,_cod_pedido,_estado);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_C_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), `_precio_total` DECIMAL(4,2), `_fecha_entrega` DATE, `_precio_parcial` DECIMAL(4,2), `_fecha_pago_parcial` DATE, `_cod_pedido` VARCHAR(10))  BEGIN
UPDATE presupuesto
set precio_total=_precio_total,fecha_entrega=_fecha_entrega,precio_parcial=_precio_parcial,fecha_pago_parcial=_fecha_pago_parcial
WHERE cod_presupuesto=_cod_presupuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_E_TABLA_PRESUPUESTO` (IN `_cod_presupuesto` VARCHAR(10), `_cod_pedido` VARCHAR(10), `_estado` CHAR(8))  BEGIN
UPDATE presupuesto
SET estado=_estado
WHERE cod_presupuesto=_cod_presuesto and cod_pedido=_cod_pedido;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_M_TABLA_PRESUPUESTO` ()  BEGIN
SELECT*FROM presupuesto ORDER BY cod_presupuesto LIMIT 50;
END$$

DELIMITER ;