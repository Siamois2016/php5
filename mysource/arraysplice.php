<?php
$replacement=array("Hello","Hi");
$a = array(1,2,3,4,5);
$b = array_splice($a, 1,3,$replacement);

print_r($a);    