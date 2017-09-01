<?php

$nums = array(2,4,6);

function getDouble($val)
{
    echo $val * 2;
    return $val * 2;
}


$return = array_walk($nums, 'getDouble');

echo "<hr>";

echo $return;
