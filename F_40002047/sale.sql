
/**
 * Author:  j_gamgo
 * Created: Aug 22, 2017

SQL statements that creates a sale table and insert 4 rows into it.
 */


CREATE TABLE sale (
  id INT NOT NULL AUTO_INCREMENT,
  itemname VARCHAR(35) NULL,
  cadprice DECIMAL(10,2) NULL,
  PRIMARY KEY (id));


INSERT INTO sale(itemname,cadprice) 
VALUES ('radio', '78.01'),
 ('tv', '499.97'),
 ('4k tv', '1399.99'),
  ('computer', '2000.00');

