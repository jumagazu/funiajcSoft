CREATE TABLE `tipo_persona` (
  `tip_id` varchar(1) NOT NULL,
  `tip_nombre` varchar(30) NOT NULL COMMENT 'Tipo de persona que esta en el sistema',
  `tip_prioridad` char(1) DEFAULT NULL COMMENT 'A:Alta, M:Media, B:Baja',
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `personal` (
  `per_id` varchar(15) NOT NULL,
  `per_tipoid` char(1) NOT NULL COMMENT 'El tipo de identificación (C:Cédula, E:Cédula de extranjería, T:Tarjeta de Identidad, R:Registro Civil, P:Pasaporte)',
  `per_nombre` varchar(25) NOT NULL,
  `per_apellidos` varchar(25) NOT NULL,
  `per_sexo` char(1) NOT NULL DEFAULT 'M' COMMENT 'Sexo M:Masculino, F:Femenino',
  `per_direccion` varchar(60) DEFAULT NULL,
  `per_celular` varchar(15) DEFAULT NULL,
  `per_fechanac` date DEFAULT NULL,
  `per_tipoper` varchar(1) NOT NULL,
  `per_correo` varchar(100) DEFAULT '@',
  `per_libretamilitar` varchar(15) DEFAULT NULL,
  `per_estracto` tinyint(1) NOT NULL,
  `per_tipoestudiante` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`per_id`),
  KEY `fk_tipopersona_persona_idx` (`per_tipoper`),
  CONSTRAINT `fk_tipopersona_persona` FOREIGN KEY (`per_tipoper`) REFERENCES `tipo_persona` (`tip_id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

