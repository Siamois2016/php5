<?php

//version1
$nums=array(2,4,6);
function getDouble($val){
    echo $val*2;
    echo "<br >";
}
array_walk($nums, 'getDouble');

echo("<hr>");
//version2

$nums2= array("2"=>1,"3"=>4,"1"=>6);

function multiply($key,$val){
    echo "value = ".$val;
        echo "<br >";
    echo "key = ". $key;
//echo $key * $val;
    echo "<br >";
    
}
$return = array_walk($nums2,'multiply');
echo $return;