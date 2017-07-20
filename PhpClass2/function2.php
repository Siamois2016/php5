<?php

/*
function add1(&$a)
{
   $a++; 
}
*/

function add1($a)
{
   $a++; 
}

$a = 5;
echo "before : $a";

add1($a);

echo "<br>after : $a";
