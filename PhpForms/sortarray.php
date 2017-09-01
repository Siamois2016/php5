<?php
$a = array("a"=>"apple","z"=>"tree","p"=>"Peter");
function sortArray($a,$b){
    //var_dump($a);
   // var_dump($b);
    if($a==$b)
        return 0;
    return $a>$b? -1:1;
}
 foreach($a as $key=>$value){
        echo "Key= ".$key." Value= ".$value."<br>";
    }

uksort($a, 'sortArray');