<?php

function hr(){
    echo "<hr>";
}
for($i=0; $i<10; $i++)
{
  
if($i == 5)
{
echo "Reached five<br>";
continue;
//break;
}
  echo $i . "<br>";
}

hr();


for($j=0; $j<6; $j++)
{
 
if($j== 3)
{
//echo "Reached three<br>";
continue;
//break;
}
echo str_repeat("*",$j); 
echo " <br>";
}