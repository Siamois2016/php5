<?php

define("F", "Fizz");
define("B", "Buzz");

for ($x = 1; $x <= 100; $x ++)
{
    echo $x . ":";
    
    // Divisible by 3?
    if ($x % 3 == 0)
        echo F;
    
    if ($x % 5 == 0)
        echo B;
    
    echo "<br>";
}