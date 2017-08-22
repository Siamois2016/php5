<?php

/*
Function 1 : filterString(&$string, $filter)
Inline 1 (filter): noCaps
Inline 2 (filter): allCaps
*/

function filterString(&$string, $filter)
{
    $string = $filter($string);
}

$allCaps = function($a)
{   return strtoupper($a);};

$noCaps = function($a) {  
    return strtolower($a);};

$string = "Brendan";

// Convert to UPPERCASE
filterString($string, $noCaps);
echo $string;