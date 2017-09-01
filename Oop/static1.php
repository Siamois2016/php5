<?php

class Car
{
    const CVal = 6;
    
    public static $SVal = 7;
    
    var $Val;
       
}

$c1 = new Car;
$c1->Val = 1;

echo Car::$SVal;
echo $c1::CVal;

echo Car::CVal;

$c2 = new Car;
$c2->Val = 2;



