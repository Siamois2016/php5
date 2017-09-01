<?php

function addv($a, $b)  
{
  $a = $a * $b;
  return $a;
}  

$z = array(1,2,3,4,5);

$x=array_reduce($z,"addv", 1);

echo $x; // 600
