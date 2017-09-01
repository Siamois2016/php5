<?php

$students = array(
    
    array("ID"=>2444737, "Name"=>"Brendan"),
    array("ID"=>3333333, "Name"=>"Sarah"),
    
    );

foreach($students as $student)
{
    echo "ID = " . $student['ID'] . " Name = " . $student['Name'];
    echo "<br>";
}
