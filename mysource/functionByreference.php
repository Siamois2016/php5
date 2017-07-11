<?php

function add2(&$a){
    
 $a++;   
}

function add1($a){
    
 $a++;   
}
$a=5;
echo "before : $a";
add1($a);
echo "<br>after : $a<hr>";

echo "before : $a";
add2($a);
echo "<br>after passing by reference : $a";
