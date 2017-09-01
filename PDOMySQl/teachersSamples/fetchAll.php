<?php

try
{
    //$db = new PDO('mysql:host=localhost:3306;dbname=459_class7','root', 'concordia');
    $db = new PDO('mysql:host=localhost:3306;dbname=cewp459_class7','root', 'concordia');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $db->query("select * from employee;");
    
    $rows = $result->fetchAll();
    
    foreach ($rows as $row)
    {
        echo $row['lastname'];
        echo "<br>";
    }
    
    echo "Rows ->" . count($rows);
    
    //echo "Rows :" . $result->rowCount();
}
catch (PDOException $e)
{
    echo $e;
}
