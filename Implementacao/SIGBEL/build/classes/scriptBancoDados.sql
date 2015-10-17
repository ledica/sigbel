-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema sigbel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sigbel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sigbel` DEFAULT CHARACTER SET latin1 ;
USE `sigbel` ;

-- -----------------------------------------------------
-- Table `sigbel`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigbel`.`Cliente` (
  `idCliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeCliente` CHAR(50) NOT NULL,
  `numeroCPF` CHAR(11) NULL DEFAULT NULL,
  `numeroRG` CHAR(12) NULL DEFAULT NULL,
  `endereco` CHAR(100) NULL DEFAULT NULL,
  `bairro` CHAR(30) NULL DEFAULT NULL,
  `cidade` CHAR(50) NULL DEFAULT NULL,
  `numeroEndereco` CHAR(10) NULL DEFAULT NULL,
  `telefone` CHAR(15) NULL DEFAULT NULL,
  `email` CHAR(30) NULL DEFAULT NULL,
  `dataNascimento` DATE NULL DEFAULT NULL,
  `dataCadastro` DATE NULL DEFAULT NULL,
  `sexo` VARCHAR(1) NULL DEFAULT NULL,
  `estadoCivil` VARCHAR(15) NULL DEFAULT NULL,
  `profissao` VARCHAR(45) NULL DEFAULT NULL,
  `ocupacao` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE INDEX `numeroCPF` (`numeroCPF` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 155428
DEFAULT CHARACTER SET = latin1
DELAY_KEY_WRITE = 1;


-- -----------------------------------------------------
-- Table `sigbel`.`Consulta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigbel`.`Consulta` (
  `idConsulta` INT(11) NOT NULL,
  `horarioInicio` TIME NULL DEFAULT NULL,
  `horarioFim` TIME NULL DEFAULT NULL,
  `observacao` VARCHAR(45) NULL DEFAULT NULL,
  `status` VARCHAR(1) NULL DEFAULT NULL,
  `dataConsulta` DATETIME NULL DEFAULT NULL,
  `idCliente` INT(11) NOT NULL,
  PRIMARY KEY (`idConsulta`),
  INDEX `fk_Consulta_Cliente_idx` (`idCliente` ASC),
  CONSTRAINT `fk_Consulta_Cliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `sigbel`.`Cliente` (`idCliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `sigbel`.`TipoAtendimento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigbel`.`TipoAtendimento` (
  `idTipoAtendimento` INT(11) NOT NULL,
  `descricao` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTipoAtendimento`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
