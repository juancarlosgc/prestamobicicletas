

create Database `prestamobicicleta`;


CREATE TABLE `estacion` (
  `id_estacion` int(6) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `localizacion` varchar(30) NOT NULL,
  `nro_bicicletas` varchar(10) NOT NULL,
  `tipo_servicio` varchar(30) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `bicicleta` (
  `id_bicicleta` int(6) NOT NULL,
  `id_estacion` int(6) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `tamaño` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE `estacion`
  ADD PRIMARY KEY (`id_estacion`);


ALTER TABLE `bicicleta`
  ADD PRIMARY KEY (`id_bicicleta`),
  ADD KEY `id_estacion` (`id_estacion`);



ALTER TABLE `estacion`
  MODIFY `id_estacion` int(6) NOT NULL AUTO_INCREMENT;

ALTER TABLE `bicicleta`
  MODIFY `id_bicicleta` int(6) NOT NULL AUTO_INCREMENT;


ALTER TABLE `bicicleta`
  ADD CONSTRAINT `bicicleta_ibfk_1` FOREIGN KEY (`id_estacion`) REFERENCES `estacion` (`id_estacion`);


