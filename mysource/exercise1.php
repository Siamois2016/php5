<?php

//Hands-on :Display this programmatically
/*
for($i=1;$i<6;$i++){
 
   if($i==1 || $i==2 || $i==4 ||$i==5){
      echo str_repeat("*", $i)."<br>";
      continue;
  }
  
    
}
*/

 
  for($j=1;$j<=5;$j++){
      if($j==3){
          continue;     
      }
      else{
           echo str_repeat("*", $j)."<br>";
      }
  }
  
    
