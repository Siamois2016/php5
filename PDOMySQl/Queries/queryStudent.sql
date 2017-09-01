
/**
 * Author:  Josiane Gamgo
 * Created: 21-Aug-2017
 */
/*youngest student*/
select * from Student where age in (select  min(age) from Student ) ;

/*average student age*/

select  avg(age) from Student  ;

/*lastnames ending with re*/

select * from student where Lastname like '%re';

/*number of records*/

select count(*) from student;
/*create student type*/

CREATE TABLE `cewp459_class7`.`student_type` (
 `id` INT NOT NULL,
 `type` VARCHAR(2) NOT NULL,
 PRIMARY KEY (`id`));

/* add indexes*/
ALTER TABLE `cewp459_class7`.`student_type` 
ADD INDEX `INDEX` (`type` ASC);

ALTER TABLE `cewp459_class7`.`student` 
DROP INDEX `stypeIndex` ,
ADD INDEX `INDEX` (`stype` ASC);

/*Add foreign key*/

ALTER TABLE `cewp459_class7`.`student` 
ADD CONSTRAINT `fk1`
  FOREIGN KEY (`stype`)
  REFERENCES `cewp459_class7`.`student_type` (`type`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

/*add student types*/
UPDATE `cewp459_class7`.`student` SET `stype`='F' WHERE `ID`='1';
UPDATE `cewp459_class7`.`student` SET `stype`='P' WHERE `ID`='2';
UPDATE `cewp459_class7`.`student` SET `stype`='P' WHERE `ID`='3';
UPDATE `cewp459_class7`.`student` SET `stype`='F' WHERE `ID`='4';
UPDATE `cewp459_class7`.`student` SET `stype`='F' WHERE `ID`='5';
