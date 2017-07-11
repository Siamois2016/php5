<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Reverse everything after first "b";
$word="this is better";
$needle="b";
$afterb = strstr($word, $needle);
echo "Nr.1<br>";
echo "result =  ".strrev(substr($afterb, 1));
echo "<hr>";

// GEt 3 middle characters in a String
echo "Nr.2<br>";
$i="abcde";
$middle = (int)(strlen($i/2));
echo "result =  ".substr($i,$middle-1,$middle+1);
echo "<hr>";