<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$p = array(10,20,30,40);
$a = array("m"=>"Monday", "t"=>"Tuesday", "w"=>"Wednesday");

$i1= reset($p);
echo $i1;
echo "<br>";
echo next($p);
echo "<br>";

$i2 = reset($a);
print_r($i2);
echo "<br>key = ".key($a)."<br>";
