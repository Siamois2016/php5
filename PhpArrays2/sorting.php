<?php
function hr(){echo "<hr>";}
$unsorted = array(8,3,5,2,99,3);
$fruits= array("d"=>"lemon","a"=>"orange","b"=>"banana", "c"=>"apple");
print_r($unsorted);

//normal sort
hr();
sort($unsorted);
print_r($unsorted);
//reverse sort
hr();

rsort($unsorted);

print_r($unsorted);
hr();
//sorts by values
 asort($fruits);

foreach ($fruits as $key => $value) {
    echo "key: $key value: $value <br>";
}
hr();
//sort by keys
 ksort($fruits);
foreach ($fruits as $key => $value) {
    echo "key: $key value: $value <br>";
}

hr();
//$usorted= usort($fruits, 'sortAlgo');


//sort using a function 
hr();
function compare($val1,$val2){
   if($val1<$val2){
       return -1;
   }
   else if($val1>$val2){return 1;
   
   }
   else{
       return 0;
   }
   
    
}
 usort($fruits, 'compare');
foreach ($fruits as $key => $value) {
    echo "key: $key value: $value <br>";
}