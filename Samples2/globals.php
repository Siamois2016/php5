<?php

$a = 2;
$b = 3;
$c = 4;

function testGlobals()
{
    foreach($GLOBALS as $key => $val)
    {
        //echo $key . " " . $val . "<br>";
        print_r ($val);
    }
}


testGlobals();