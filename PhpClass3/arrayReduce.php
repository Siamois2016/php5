<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$a=array(2,4,6);

function addValues($total, $value){
    return $total + $value;
    
}
$callback='addValues';
echo array_reduce($a, $callback);

echo "<hr>";

function addV($a2, $b){
  $a2 = $a2 * $b;
    return $a2;
    
}
$z=array(1,2,3,4,5);
$x = array_reduce($z, 'addV',1);
echo $x;