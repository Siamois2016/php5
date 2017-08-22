<?php

$a = date_create("2017-06-20 22:30:11");
$b = date_create("2017-06-22");

$c = date_diff($a, $b);



echo date_format($a, "Y");

//var_dump($c);