<?php

$hello = function($who) {
    echo "<p>Hello, $who</p>";
};
echo $hello("Brendan<br>");

///


function test($num, $func) {
    while ($num) {
        $func($num);
        $num--;
    }
}

$anon = function () {
    echo "hello world <br \>";
};

test(5, $anon);
/////////////Exercise ////
/*
 * We need a function that accepts another function as a
  parameter.
   Function 1 : filterString(&$string, $filter)
   Inline 1 (filter): noCaps
   Inline 2 (filter): allCaps
 */
$string = "concordia";

function filterString(&$string, $filter) {

    $string = $filter($string);
}

$noCaps = function($a) {
    return strtolower($a);
};
$allCaps = function($a) {
    return strtoupper($a);
};

filterString($string, $allCaps);
echo $string;

/* Function Calc($v1,$v2, $fcn) add() and substract() functions are anonymous */

function calc($v1, $v2, $fcn) {
    return $fcn($v1, $v2);
}

$add = function($a, $b) {
    return $a + $b;
};
$substract = function($a, $b) {
    return $a - $b;
};

echo"<br >2+3 = " . calc(2, 3, $add);
