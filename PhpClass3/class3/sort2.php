<?php

$fruits = 
        array("d" => "lemon", "a" => "orange", 
            "b" => "banana", "c" => "apple");

ksort($fruits);

foreach($fruits as $key=>$fruit)
{
    echo "key: $key value : $fruit <br>";
}


