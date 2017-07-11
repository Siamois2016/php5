<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$ages = array('Person' => 'Age', 'Fred' => 35, 'Barney' => 30, 'Tigger' => 8, 'Pooh' => 40);
// start table and print heading
reset($ages);
List($c1, $c2) = each($ages);
echo("<table><tr><th>$c1</th><th>$c2</th></tr>\n");
// print the rest of the values
while (list($c1,$c2) = each($ages)) {
echo("<tr><td>$c1</td><td>$c2</td></tr>\n");
}
// end the table
echo("</table>");

echo"<hr>";

$count=0;
echo("<table>");
foreach ($ages as $key => $value) {
    if($count==0){
        echo("<tr><th>$key</th><th>$value</th></tr>\n"); 
    }
    else{
        echo("<tr><td>$key</th><th>$value</td></tr>\n");  
    }
   
}
// end the table
echo("</table>");

/*
 * *another way 
 * $firstrecord= array_keys($ages);
 * $first=$firstrecord[0];
 */