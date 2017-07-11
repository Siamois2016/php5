<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function hr(){echo"<hr>";}
$today = date("F j, Y, g:i a"); 
$today2 = date("Y-m-d H:i:s");
echo date("B");
hr();
echo $today;
hr();
echo $today2;
hr();
$a = date_create("2017-01-24 22:15:20");
$b = date_create("2017-01-28");
$c = date_diff($a, $b);

var_dump($a);

hr();

var_dump($c);
hr();

echo date_format($a,"Y");