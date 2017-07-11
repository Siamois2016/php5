<?php

/* 
 * Hands-On
This hands-on also tests for redundant programming and 
style.  It's a popular interview question.  
Write a program that counts from 1 to 100.

When the value is divisible by 3 Output “Fizz”

When the value is divisible by 5, Output “Buzz”

When the value is divisible by BOTH, Output “FizzBuzz” 
(eg 15)
 */

define("F", "Fizz");
define("B", "Buzz");

for($i=1;$i<=100;$i++){
    echo $i.". ";
    echo ($i%3 ==0) ?constant("F") : ( ($i%5==0) ? constant("B"):constant("F").constant("B"));
    echo "<br>";
}