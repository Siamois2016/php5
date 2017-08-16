/*insert into department values
(31,'sales'),
(33,'Engineering'),
(34,'Clerical'),
(35,'Marketing');*/


/*insert into employee values
(1,'Rafferty',31),
(2,'Jones',33),
(3,'Steinberg',33),
(4,'Robinson',34),
(5,'Smith',34),
(6,'john',NULL);*/

select * from employee e
inner join department d
ON  e.deparmentid = d.departmentid;

select * from employee e
natural join department d;



ALTER TABLE `459_class7_jg`.`employee`
CHANGE COLUMN `deparmentid` `departmentid` INT(11) NULL DEFAULT NULL ;

ALTER TABLE `459_class7_jg`.`employee` 
CHANGE COLUMN `employeeid` `employeeid` INT(11) NOT NULL AUTO_INCREMENT ;
