<?php

/* 
 * Make an array that contains this:
“Civic” -> 24000
“CRV” -> 32000
“Fit” -> 17000
Then write a function that adds a transportation fee of $500 + 5% of the cost.
Then display the results (using that function).
 */

$cars =array("Civic"=>24000,"CRV"=>32000,"Fit"=>17000);
define("TAX",0.05);
define("FEE",500);
function transportation($val){
    $transport = FEE + (TAX*$val)+  $val;
    echo "Transportation Fee = ".$transport ."<br>";
}
array_walk($cars, 'transportation');