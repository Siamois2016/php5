<?php

$a = array(
    
    array(1,2,3),
    array(2,3,4),
    array(3,4,5)
    
);


array_walk_recursive($a, 'displayVal');


function displayVal($v)
{
    echo "The value is $v <br>";
}