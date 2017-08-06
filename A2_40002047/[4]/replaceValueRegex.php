<?php

/* 
 * 1. Repace all values of 1,2,3,4,5,6,7,8,9,0 
 * with the respective word. (1 = “one”).
2. Get rid of all numbers in a string. (“abc123abc” = “abcabc”).
 */
//1

$subject = [1,2,3,4,5,6,7,8,9,0];
$pattern = ["one","two","three","four","five","six","seven","height","nine","zero"];


//2
$string = "abc123abc";
$p = "/\d+/";
$replacement ="";
echo "<hr>";
echo preg_replace($p, $replacement, $string);
