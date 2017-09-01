<?php

$a  = array(8,3,5,2,99,3);
function filterOdd($val){
    return $val%2==0 ? 1: 0;
}

$newa = array_filter($a, 'filterOdd');
print_r($newa);