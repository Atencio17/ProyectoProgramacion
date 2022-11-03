-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema proyecto
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 ;
USE `proyecto` ;

-- -----------------------------------------------------
-- Table `proyecto`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`clientes` (
  `idCliente` INT NOT NULL,
  `tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `fechaNacimiento` DATE NOT NULL,
  `telefonoCelular` VARCHAR(45) NOT NULL,
  `correoElectronico` VARCHAR(45) NOT NULL,
  `direccionResidencia` VARCHAR(45) NOT NULL,
  `reciboPublico` ENUM('si', 'no') NULL,
  `fechaNacimientoAcompañante` DATE NOT NULL,
  `telefonoAcompañante` VARCHAR(45) NOT NULL,
  `correoAcompañante` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCliente`, `tipoIdentificacion`),
  UNIQUE INDEX `correoElectronico_UNIQUE` (`correoElectronico` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`categorias` (
  `idCategoria` INT NOT NULL,
  `Categoria` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`servicios` (
  `idServicio` VARCHAR(15) NOT NULL,
  `nombreServicio` VARCHAR(45) NOT NULL,
  `costoServicio` INT NOT NULL,
  `descripcionServicio` LONGTEXT NOT NULL,
  `presionsistolica` INT NULL,
  `presiondiastolica` FLOAT NULL,
  `peso` FLOAT NULL,
  `idCategoria` INT NOT NULL,
  PRIMARY KEY (`idServicio`),
  UNIQUE INDEX `nombreServicio_UNIQUE` (`nombreServicio` ASC) ,
  INDEX `fk_servicios_categorias1_idx` (`idCategoria` ASC) ,
  CONSTRAINT `fk_servicios_categorias1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `proyecto`.`categorias` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`elementos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`elementos` (
  `idElemento` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `costo` INT NOT NULL,
  `descripcion` LONGTEXT NOT NULL,
  PRIMARY KEY (`idElemento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`empleados` (
  `idEmpleado` INT NOT NULL,
  `tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `Apellido` VARCHAR(45) NOT NULL,
  `tipoUsuario` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`idEmpleado`, `tipoIdentificacion`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`historiasclinicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`historiasclinicas` (
  `idHistoriaClinica` INT NOT NULL,
  `presionsistolica` INT NOT NULL,
  `presiondiastolica` INT NOT NULL,
  `peso` INT NOT NULL,
  `derivacion` LONGTEXT NULL,
  `diagnostico` LONGTEXT NULL,
  `numeroDeSesiones` INT NULL,
  `SesionesTotal` INT NULL,
  `historiaClinica` VARCHAR(45) NULL,
  `evolucion` VARCHAR(45) NOT NULL,
  `idCliente` INT NOT NULL,
  `tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idHistoriaClinica`),
  INDEX `fk_historiasclinicas_clientes1_idx` (`idCliente` ASC, `tipoIdentificacion` ASC) ,
  CONSTRAINT `fk_historiasclinicas_clientes1`
    FOREIGN KEY (`idCliente` , `tipoIdentificacion`)
    REFERENCES `proyecto`.`clientes` (`idCliente` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`citas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`citas` (
  `idcitas` INT NOT NULL,
  `cita` DATETIME NOT NULL,
  `idCliente` INT NOT NULL,
  `clientes_tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  `idEmpleado` INT NULL,
  `empleados_tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NULL,
  PRIMARY KEY (`idcitas`),
  INDEX `fk_citas_clientes1_idx` (`idCliente` ASC, `clientes_tipoIdentificacion` ASC) ,
  INDEX `fk_citas_empleados1_idx` (`idEmpleado` ASC, `empleados_tipoIdentificacion` ASC) ,
  CONSTRAINT `fk_citas_clientes1`
    FOREIGN KEY (`idCliente` , `clientes_tipoIdentificacion`)
    REFERENCES `proyecto`.`clientes` (`idCliente` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_citas_empleados1`
    FOREIGN KEY (`idEmpleado` , `empleados_tipoIdentificacion`)
    REFERENCES `proyecto`.`empleados` (`idEmpleado` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`estudios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`estudios` (
  `idEstudio` VARCHAR(12) NOT NULL,
  `estudio` LONGTEXT NOT NULL,
  `idEmpleado` INT NOT NULL,
  `tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idEstudio`),
  INDEX `fk_estudios_empleados1_idx` (`idEmpleado` ASC, `tipoIdentificacion` ASC) ,
  CONSTRAINT `fk_estudios_empleados1`
    FOREIGN KEY (`idEmpleado` , `tipoIdentificacion`)
    REFERENCES `proyecto`.`empleados` (`idEmpleado` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`experiencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`experiencia` (
  `idExperiencia` VARCHAR(45) NOT NULL,
  `experiencia` LONGTEXT NOT NULL,
  `idEmpleado` INT NOT NULL,
  `tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idExperiencia`),
  INDEX `fk_experiencia_empleados1_idx` (`idEmpleado` ASC, `tipoIdentificacion` ASC) ,
  CONSTRAINT `fk_experiencia_empleados1`
    FOREIGN KEY (`idEmpleado` , `tipoIdentificacion`)
    REFERENCES `proyecto`.`empleados` (`idEmpleado` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`usuarios` (
  `contraseña` VARBINARY(16) NOT NULL,
  `idCliente` INT NULL,
  `tipoIdentificacionCliente` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NULL,
  `idEmpleado` INT NULL,
  `tipoIdentificacionEmpleado` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NULL,
  INDEX `fk_usuarios_clientes1_idx` (`idCliente` ASC, `tipoIdentificacionCliente` ASC) ,
  INDEX `fk_usuarios_empleados1_idx` (`idEmpleado` ASC, `tipoIdentificacionEmpleado` ASC) ,
  CONSTRAINT `fk_usuarios_clientes1`
    FOREIGN KEY (`idCliente` , `tipoIdentificacionCliente`)
    REFERENCES `proyecto`.`clientes` (`idCliente` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_empleados1`
    FOREIGN KEY (`idEmpleado` , `tipoIdentificacionEmpleado`)
    REFERENCES `proyecto`.`empleados` (`idEmpleado` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`ventaEncabezado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`ventaEncabezado` (
  `idventaEncabezado` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `total` INT NOT NULL,
  `idCliente` INT NOT NULL,
  `tipoIdentificacion` ENUM('Cedula', 'tarjeta de identidad', 'cedula de extranjeria') NOT NULL,
  PRIMARY KEY (`idventaEncabezado`),
  INDEX `fk_ventaEncabezado_clientes1_idx` (`idCliente` ASC, `tipoIdentificacion` ASC) ,
  CONSTRAINT `fk_ventaEncabezado_clientes1`
    FOREIGN KEY (`idCliente` , `tipoIdentificacion`)
    REFERENCES `proyecto`.`clientes` (`idCliente` , `tipoIdentificacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`serviciosElementos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`serviciosElementos` (
  `idServicio` VARCHAR(15) NOT NULL,
  `idElemento` INT NOT NULL,
  PRIMARY KEY (`idServicio`, `idElemento`),
  INDEX `fk_servicios_has_elementos_elementos1_idx` (`idElemento` ASC) ,
  INDEX `fk_servicios_has_elementos_servicios1_idx` (`idServicio` ASC) ,
  CONSTRAINT `fk_servicios_has_elementos_servicios1`
    FOREIGN KEY (`idServicio`)
    REFERENCES `proyecto`.`servicios` (`idServicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicios_has_elementos_elementos1`
    FOREIGN KEY (`idElemento`)
    REFERENCES `proyecto`.`elementos` (`idElemento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`historiasclinicasServicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`historiasclinicasServicios` (
  `idHistoriaClinica` INT NOT NULL,
  `idServicio` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idHistoriaClinica`, `idServicio`),
  INDEX `fk_historiasclinicas_has_servicios_servicios1_idx` (`idServicio` ASC) ,
  INDEX `fk_historiasclinicas_has_servicios_historiasclinicas1_idx` (`idHistoriaClinica` ASC) ,
  CONSTRAINT `fk_historiasclinicas_has_servicios_historiasclinicas1`
    FOREIGN KEY (`idHistoriaClinica`)
    REFERENCES `proyecto`.`historiasclinicas` (`idHistoriaClinica`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_historiasclinicas_has_servicios_servicios1`
    FOREIGN KEY (`idServicio`)
    REFERENCES `proyecto`.`servicios` (`idServicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`ventaDetalle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`ventaDetalle` (
  `subtotal` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `precio` INT NOT NULL,
  `costo` FLOAT NOT NULL,
  `idventaEncabezado` INT NOT NULL,
  `idServicio` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`idventaEncabezado`, `idServicio`),
  INDEX `fk_ventaEncabezado_has_servicios_servicios1_idx` (`idServicio` ASC) ,
  INDEX `fk_ventaEncabezado_has_servicios_ventaEncabezado1_idx` (`idventaEncabezado` ASC) ,
  CONSTRAINT `fk_ventaEncabezado_has_servicios_ventaEncabezado1`
    FOREIGN KEY (`idventaEncabezado`)
    REFERENCES `proyecto`.`ventaEncabezado` (`idventaEncabezado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ventaEncabezado_has_servicios_servicios1`
    FOREIGN KEY (`idServicio`)
    REFERENCES `proyecto`.`servicios` (`idServicio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
