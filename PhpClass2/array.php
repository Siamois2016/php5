<?php

$row_0 = array(1, 2, 3);
$row_1 = array(4, 5, 6);
$row_2 = array(7, 8, 9);
$multi = array($row_0, $row_1, $row_2);


var_dump($multi);

echo $multi[1][0];




$array = $multi[1];



echo $array[0];