<?php

//1. Repace all values of 1,2,3,4,5,6,7,8,9,0 with the respective word. (1 = “one”, 2= "two",...).  
function changeNumberToString($matches) {
    switch ($matches[0]) {
        case 1:
            return "one";
        case 2:
            return "two";
        case 3:
            return "three";
        case 4:
            return "four";
        case 5:
            return "five";
        case 6:
            return "six";
        case 7:
            return "seven";
        case 8:
            return "eight";
        case 9:
            return "nine";
        case 0:
            return "zero";
    }
}

echo preg_replace_callback("/\d/", 'changeNumberToString', "1,2,3,4,5,6,7,8,9,0");

//2. Get rid of all numbers in a string. (“abc123abc” = “abcabc”).
$string = "abc123abc";
$p = "/\d+/";
$replacement = "";
echo "<hr>";
echo preg_replace($p, $replacement, $string);
