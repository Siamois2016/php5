
/**
 * Author:  Josiane Gamgo <your.name at your.org>
 * Created: 2017-08-23
 */
CREATE DATABASE `CEWP459_A3`;

CREATE TABLE `CEWP459_A3`.`Products` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Price` DECIMAL(10,2) NULL,
  PRIMARY KEY (`ID`));

CREATE TABLE `CEWP459_A3`.`WebInquiries` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(45) NOT NULL,
  `FirstName` VARCHAR(45) NOT NULL,
  `LastName` VARCHAR(45) NULL,
  `Phone` VARCHAR(15) NOT NULL,
  `ProductId` INT NULL,
  `Question` LONGTEXT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `FK_ProductID_idx` (`ProductId` ASC),
  CONSTRAINT `FK_ProductID`
    FOREIGN KEY (`ProductId`)
    REFERENCES `CEWP459_A3`.`Products` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

Use CEWP459_A3 ;

insert into CEWP459_A3.Products (Name, Price)
values
('3 man all season tent', 149.99),
('3 man deluxe all season tent', 189.99),
('Camping Stove', 79.99),
('Electric Lantern', 49.99),
('Gas Lantern', 89.99);
