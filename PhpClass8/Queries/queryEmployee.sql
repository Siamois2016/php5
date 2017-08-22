
CREATE SCHEMA `459_class7_jg` ;


CREATE TABLE `459_class7_jg`.`department` (
  `departmentid` INT NOT NULL,
  `departmentname` VARCHAR(45) NULL,
  PRIMARY KEY (`departmentid`));

CREATE TABLE `459_class7_jg`.`employee` (
  `employeeid` INT NOT NULL,
  `lastname` VARCHAR(45) NULL,
  `departmentid` INT NULL,
  PRIMARY KEY (`employeeid`));

insert into department values
(31,'sales'),
(33,'Engineering'),
(34,'Clerical'),
(35,'Marketing');



insert into employee values
(1,'Rafferty',31),
(2,'Jones',33),
(3,'Steinberg',33),
(4,'Robinson',34),
(5,'Smith',34),
(6,'john',NULL);

select * from employee e
inner join department d
ON  e.deparmentid = d.departmentid;

select * from employee e
natural join department d;



ALTER TABLE `459_class7_jg`.`employee`
CHANGE COLUMN `deparmentid` `departmentid` INT(11) NULL DEFAULT NULL ;

ALTER TABLE `459_class7_jg`.`employee` 
CHANGE COLUMN `employeeid` `employeeid` INT(11) NOT NULL AUTO_INCREMENT ;

/*    */

CREATE TABLE `cewp459_class7`.`sku` (
  `sku` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `price` VARCHAR(45) NOT NULL,
  `skucol` VARCHAR(45) NOT NULL,
  `skucol1` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`sku`));

