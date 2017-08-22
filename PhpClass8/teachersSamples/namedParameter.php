<?php

$lname = '%n%';

    $db = new PDO('mysql:host=localhost:3306;dbname=459_class7','root', 'concordia');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SELECT * FROM E WHERE lastname like '%n%';
    
    $stmt = $db->prepare("SELECT * FROM employee" .
                        " WHERE lastname like :lname");
    
    $stmt->bindValue(':lname', $lname);
    $stmt->execute();
    
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($rows);