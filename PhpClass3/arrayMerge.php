<?php

$a  = array(8,3,5,2,99,3);
$b= array(2,6);
$c =  array_merge($a, $b);
print_r($c); // print 6 at the end of the array
echo "<hr>";
$x= array(1,2);
$y = array(2,3);
$z = array_diff($y, $x);

print_r($z);//print 3
