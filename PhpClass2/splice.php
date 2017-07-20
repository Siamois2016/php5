<?php


$replacement = array(7,7,7,7);
$a = array(1,2,3,4,5);

array_splice($a, 1, 3, $replacement);

print_r($a);