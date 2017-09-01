<?php

$add = function($n1, $n2)
{
    return $n1 + $n2;
};

$subtract = function($n1, $n2)
{
    return $n1 - $n2;
};

function calc($n1, $n2, $method)
{
    return $method($n1, $n2);
}

echo "5 - 10 is " . calc(5, 10, $subtract);