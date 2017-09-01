
/**
 * Author:  Josiane Gamgo
 * Created: 21-Aug-2017
 */
CREATE SCHEMA `cewp459_class7` DEFAULT CHARACTER SET utf8 ;

DROP TABLE Student;

/*Create table*/
CREATE TABLE Student(
ID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
Firstname VARCHAR(45) NOT NULL,
Lastname VARCHAR(45) NOT NULL,
 Age INT NOT NULL

);

insert into Student(Firstname,Lastname,Age)
values('John','Does',45),
('Mary','Smith',44), 
('Glen','Quagmire',49),
('Roger','Waters',33),
('David','Gilmore',45);
