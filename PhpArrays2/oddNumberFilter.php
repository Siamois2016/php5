<?php

$a = array(1,2,3,4);


function filterOdd($val)
{
    return $val % 2 == 0 ? 1 : 0;
}

$newArray = array_filter($a, 'filterOdd');

print_r($newArray);


