<?php

function evenOrOdd($num){
    if($num%2==0){
        echo "even";
    }
    if($num%2!=0){
        echo "odd";
    }
    
}

$exple = 50;
echo "$exple is ";
echo evenOrOdd($exple);

function multiplyNum($a,$b){
    return $a*$b;
    
}
echo "<br> 5 times 2 is equal to: ".multiplyNum(5, 2);