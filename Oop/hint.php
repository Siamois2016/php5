<?php

$a = array(1,2,3,4);
try
{
// Assume array is array of int.
function displayArray(Array $a)
{
    $sum = array_sum($a);
    
    return $sum;
}


echo displayArray(4);

//echo displayArray($a);
}
catch (Exception $e)
{
    echo $e->getLine();
}