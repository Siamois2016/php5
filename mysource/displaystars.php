<?php

//Hands-on :Display this programmatically
for($i=1;$i<6;$i++){
  echo str_repeat("*", $i)."<br>"; 

    
}
echo "<hr>";
for($i=1;$i<6;$i++){
  echo str_repeat("<img src ='https://files-cloud.enjin.com/smiley/317_22.png'/>", $i)."<br>"; 
    
}
echo "<hr>";
//other methods reverse
for($x=0;$x<5;$x++){
    for($y=5;$y>=$x;$y--){
        echo "*";
        
    }
   
     for($y=5;$y>=$x;$y--){
        echo "<img src ='https://files-cloud.enjin.com/smiley/317_22.png'/>";
        
    }
    echo "<br>";
    
}