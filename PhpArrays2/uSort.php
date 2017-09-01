<?php

$fruits = 
        array("d" => "lemon", "a" => "orange", 
            "b" => "banana", "c" => "apple");

ursort($fruits, 'compare');

function compare($val1, $val2)
{
    if($val1 < $val2)
        return -1;
    
    if($val1 > $val2)
        return 1;
    
    if ($val1 == $val2)
        return 0;
}

//ksort($fruits);

foreach($fruits as $key=>$fruit)
{
    echo "key: $key value : $fruit <br>";
}


