<?php

//var_dump($_POST);
//$listOfValues = array();
$name=$_POST['name'];
$counter = 1;


//var_dump($listOfValues);
//sort($listOfValues);

foreach($_POST as $key=>$value){
    if(strcmp($key, "name")===0){
        echo "Hello ". $value."<br><br>";
      
    }
    else{
       $listOfValues[$key] = $value."<br>";
     $key = substr_replace($key, $counter, 0);
       echo "$key)  $value <br>"; 
       $counter= $counter+1;
    }
    
}



/*echo "<br>The value recieved, in order, are:<br>"; 

sort($listOfValues);

foreach ($listOfValues as $k=>$v) {
    echo "$k) $v<br>";
}
*/

