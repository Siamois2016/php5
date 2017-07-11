<?php

$original=array(1,2);
//array_push($original, 3);
$original[]=3;
print_r($original);

$original2=array();
$original2('key1')="test";
echo $original2[0];