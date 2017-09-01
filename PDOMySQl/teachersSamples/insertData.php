<?php

    $email = $_POST['email'];


    $db = new PDO('mysql:host=localhost:3306;dbname=459_class7','root', 'concordia');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $lname = "Skywalker";
    $depid = 33;
    
    $stmt = $db->prepare("INSERT INTO employee (lastname, departmentid) " .
                        " values (:lname, :depid);");
    
    $stmt->bindValue(':lname', $email);
    $stmt->bindValue(':depid', $depid);
    
    $stmt->execute();
    
    $last_inserted_id = $db->lastInsertId();
    
    echo "Last ID inserted was $last_inserted_id <br>";
