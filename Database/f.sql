-- MySQL Script generated by MySQL Workbench
-- Tue Aug 15 02:47:09 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`monthYear`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`monthYear` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `month` VARCHAR(15) NOT NULL,
  `year` CHAR(4) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`roomSegmentation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`roomSegmentation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `roomType` VARCHAR(45) NOT NULL,
  `actualRNS` INT NOT NULL,
  `budgetRNS` INT NOT NULL,
  `lastYearRNS` INT NOT NULL,
  `actualARR` INT NOT NULL,
  `budgetARR` INT NOT NULL,
  `lastYearARR` INT NOT NULL,
  `growthRateRNS` INT NOT NULL,
  `growthRateARR` INT NOT NULL,
  `actualR` INT NOT NULL,
  `budgetR` INT NOT NULL,
  `lastYearR` INT NOT NULL,
  `growthRateR` INT NOT NULL,
  `monthYear_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_roomSegmentation_monthYear_idx` (`monthYear_id` ASC),
  CONSTRAINT `fk_roomSegmentation_monthYear`
    FOREIGN KEY (`monthYear_id`)
    REFERENCES `mydb`.`monthYear` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`roomFlash`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`roomFlash` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `roomRevenueActual` INT NOT NULL,
  `roomIndividualActual` INT NOT NULL,
  `roomGroupActual` INT NOT NULL,
  `roomOtherActual` INT NOT NULL,
  `roomAvailableActual` INT NOT NULL,
  `roomSoldActual` INT NOT NULL,
  `occupancyActual` INT NOT NULL,
  `adrActual` INT NOT NULL,
  `actualRevPAR` INT NOT NULL,
  `roomRevParActual` INT NOT NULL,
  `roomRevenueLF` INT NOT NULL,
  `roomIndividualLF` INT NOT NULL,
  `roomGroupLF` INT NOT NULL,
  `roomOtherLF` INT NOT NULL,
  `roomAvailableLF` INT NOT NULL,
  `roomSoldLF` INT NOT NULL,
  `occupancyLF` INT NOT NULL,
  `adrLF` INT NOT NULL,
  `roomRevParLF` INT NOT NULL,
  `roomRevenueBudget` INT NOT NULL,
  `roomIndividualBudget` INT NOT NULL,
  `roomOtherBudget` INT NOT NULL,
  `roomAvailableBudget` INT NOT NULL,
  `roomSoldBudget` INT NOT NULL,
  `occupancyBudget` INT NOT NULL,
  `adrBudget` INT NOT NULL,
  `roomRevParBudget` INT NOT NULL,
  `roomRevenueLY` INT NOT NULL,
  `roomIndividualLY` INT NOT NULL,
  `roomGroupLY` INT NOT NULL,
  `roomOtherLY` INT NOT NULL,
  `roomAvailableLY` INT NOT NULL,
  `roomSoldLY` INT NOT NULL,
  `occupancyLY` INT NOT NULL,
  `adrLY` INT NOT NULL,
  `roomRevParLY` INT NOT NULL,
  `roomRevenueVVB` INT NOT NULL,
  `roomIndividualVVB` INT NOT NULL,
  `roomGroupVVB` INT NOT NULL,
  `roomOtherVVB` INT NOT NULL,
  `roomAvailableVVB` INT NOT NULL,
  `roomSoldVVB` INT NOT NULL,
  `occupancyVVB` INT NOT NULL,
  `adrVVB` INT NOT NULL,
  `roomRevParVVB` INT NOT NULL,
  `roomRevenueVVLY` INT NOT NULL,
  `roomIndividualVVLY` INT NOT NULL,
  `roomGroupVVLY` INT NOT NULL,
  `roomOtherVVLY` INT NOT NULL,
  `roomAvailableVVLY` INT NOT NULL,
  `roomSoldVVLY` INT NOT NULL,
  `occupancyVVLY` INT NOT NULL,
  `adrVVLY` INT NOT NULL,
  `roomRevParVVLY` INT NOT NULL,
  `monthYear_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_roomFlash_monthYear1_idx` (`monthYear_id` ASC),
  CONSTRAINT `fk_roomFlash_monthYear1`
    FOREIGN KEY (`monthYear_id`)
    REFERENCES `mydb`.`monthYear` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
