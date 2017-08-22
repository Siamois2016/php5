<?php

try
{
    $db = new PDO('mysql:host=localhost:3306;dbname=459_class7','root', 'concordia');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $result = $db->query("select * from employee;");
    while ($row = $result->fetch())
    {
        echo $row['lastname'];
        echo "<br>";
    }
    
    /*
    foreach ($db->query("select * from employee;") as $row)
    {
        echo $row['lastname'];
        echo "<br>";
    }
    */
}
catch (PDOException $e)
{
    echo $e;
}
