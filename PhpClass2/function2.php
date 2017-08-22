<?php


function add0(&$a)
{
   $a++; 
}


function add1($a)
{
   $a++; 
}

$a = 5;
echo "before : $a";
add0($a);
//add1($a);

echo "<br>after : $a";
