<?php

$p = array(10,20,30,40,50);
$a = array("m"=>"Monday", "t"=>"Tuesday", "w"=>"Wednesday");

/*
$i1 = reset($p);
echo $i1;
echo "<br>";
echo next($p);
*/

$i1 = reset($a);

echo key($a);

//print_r($i1);