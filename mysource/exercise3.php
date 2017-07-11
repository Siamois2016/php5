<?php

/* 
 * Create the following multidimensional array with the following parameters;
1.List of car brands (keyed)
2.Within each brand, a list of models (keyed)
3.Within each model, a list of colors available (non keyed)
For a particular brand and model, show all the colors in a list.
Eg: Colors for Toyota YarisGreen, Yellow,
 */
$cars = array("1"=>"Toyota","2"=>"Honda","3"=>"Bmw");
//$carbrands = array_values($cars);


$toyo=array(
                "corolla"=>array("red","blue","silver"),  "yaris"=>array("red","blue","white","yellow")
        );
$hond= array(
                "civic"=>array("red","blue","green","yellow"),
                "suv"=>array("red","blue","green","yellow")
        );
$bm=array(
     "A5"=>array("red","blue","green","yellow"),
                "A6"=>array("red","blue","green","yellow")
);
//echo array_keys($toyo)[0][1]." ,".array_values($toyo)[0][1];
$modelskey =array("car1"=>array_keys($toyo),"car2"=>array_keys($hond),"car3"=>array_keys($bm)) ;
$modelsvalue =array("car1"=>array_values($toyo),"car2"=>array_values($hond),"car3"=>array_values($bm)) ;
$carbrands = array_values($modelsvalue);
$carmodels = array_values($modelskey);

echo $carmodels[0][1][1]. "  ".$carbrands[0][1][1];//blue toyota

//$value = $cars[0][0][0];
 //echo $carbrands[1]; 

