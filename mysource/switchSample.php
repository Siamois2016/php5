<?php
/*$i=1;
switch ($i) {
    case 0:
        echo "i equals 0";
        break;
    case 1:
        echo "i equals 1";
        break;
    case 2:
        echo "i equals 2";
        break;
    default:
        echo "Unknown";
}
*/
$provinc="QC";
    
   echo "the province name of $provinc is : ";
switch ($provinc) {
    case "QC":
        echo "Quebec";
        break;
    case "ON":
        echo "Ontario";
        break;
    
    default:
        echo "Unknown";
} 

$val=100;
switch(true){
    case($val%2==0):
        echo "<br> even";
        break;
    case($val%2 !=0):
        echo "<br>odd";
        break;
    
}


