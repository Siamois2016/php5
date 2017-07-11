<?php

$row_0 = array(1, 2, 3);
$row_1 = array(4, 5, 6);
$row_2 = array(7, 8, 9);
$multi = array($row_0, $row_1, $row_2);
$value = $multi[2][0]; // row 2, column 0. $value = 7
echo $value;
var_dump($multi);