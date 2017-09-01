 <?php

//step1
define('EMPID',4);
define('DEPTID',34);
//$lname = '%n%';

$lname='skyrock';
$depid =33;
//$db = new PDO('mysql:host=localhost;dbname=459_class7_jg', 'root', 'concordia');
$db = new PDO('mysql:host=localhost;dbname=459_class7_jg', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE,  PDO::ERRMODE_EXCEPTION);

//$stmt = $db->prepare("SELECT * FROM employee WHERE employeeid=:empid AND deparmentid =:dptid");

//$stmt = $db->prepare("SELECT * FROM employee WHERE lastname like :empname");
$stmt = $db->prepare("INSERT INTO employee(lastname,departmentid) "
        . "values(:lname, :depid);");


//$stmt->bindValue(':empid',EMPID,PDO::PARAM_INT);
//$stmt->bindValue(':dptid', DEPTID,PDO::PARAM_STR);
$stmt->bindValue(':lname', $lname);
$stmt->bindValue(':depid', $depid);
$stmt->execute();

//$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

$last_inserted_id = $db->lastInsertId();

echo "Last ID inserted was $last_inserted_id"; 
//print_r($rows);

