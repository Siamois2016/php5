<?php

    define('EMPID', 4);
    define('DEPID', 34);

    $db = new PDO('mysql:host=localhost:3306;dbname=459_class7','root', 'concordia');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $db->prepare("SELECT * FROM employee" .
                        " WHERE employeeid=:empid AND departmentid=:depid");
    
    $stmt->bindValue(':empid', EMPID);
    $stmt->bindValue(':depid', DEPID);
    
    $stmt->execute();
    
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($rows);