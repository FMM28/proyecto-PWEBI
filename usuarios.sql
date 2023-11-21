CREATE SCHEMA IF NOT EXISTS `proyecto_PWEBI` DEFAULT CHARACTER SET utf8 ;
USE `proyecto_PWEBI` ;


CREATE TABLE IF NOT EXISTS `proyecto_PWEBI`.`usuarios` (
  `usuario` VARCHAR(45) NOT NULL,
  `contraseña` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`usuario`))