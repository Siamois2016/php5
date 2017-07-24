<?php

/* 
 *Get the sum of the values of an array 
 * ONLY if the sales were in Quebec.
 */
function filterArray($a){
   $extract = array();
    foreach ($a as $key => $value) {
       
        if(strcmp($key, "QC")===0){
            $extract[][].=$value;
        }else{continue;}
next($extract);
    }
    unset($value);
    
    return $extract;
}

function totalQCValues($sum,$item){
     //$sum = $sum+$item;
     
    return($sum+  array_sum($item));
    
}


$a = array("QC"=>2333,
    "ON"=>223,
    "NB"=>4432,
    "QC"=>633,
    "BC"=>1,
    "QC"=>665,
    "ON"=>1000,
    "QC"=>2123,
    "BC"=>23432);
$filtered = filterArray($a);
var_dump($filtered);
echo "<hr>";
     echo (array_reduce($filtered, 'totalQCValues')); 

    
  

 

