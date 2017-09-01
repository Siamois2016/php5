<?php

define('FIXEDCOST', 500);
define('TAXPERCNT', 0.05);

$cars = array
(
"Civic" => 24000,
"CRV" => 32000,
"Fit" => 17000
);

function displayTotal($price, $model)
{
    $tax = $price * TAXPERCNT;
    
    echo "The total for a $model is : ";
    
    echo FIXEDCOST + $tax + $price;
    
    echo "<br>";
}

array_walk($cars, 'displayTotal');