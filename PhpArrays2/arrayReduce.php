<?php

$a = array(2,4,6);

function addValues($total, $value)
{
    return $total + $value;
}

echo array_reduce($a, 'addValues');