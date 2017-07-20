<?php
//Access associative array positionally.
//$a = array("a"=>"x", "b"=>"y", "z"=>"z");
//$b = array_values($a);
//echo $b[1];

$cars = array(
    "honda"=>array("Civic"=>array("red", "blue"), "CRV"=>array("gray")),
    "toyota"=>array("corolla"=>array("silver")),
    "bmw"=>array()  
);

foreach ($cars as $key1=>$makes)
{
    echo $key1 . "<br>";
    
    foreach ($makes as $key2=>$models)
    {
        echo "->" . $key2 . "(" . implode($models, ", ");
        echo ")<br>";
    }
}