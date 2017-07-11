<?php

function convertToUppercase(&$stringvalue){
    try{
     $stringvalue=  strtoupper($stringvalue);   
     return true;
    }
    catch(Exception $e){
     return false;   
    }
}

$string="Hello";
if(convertToUppercase($string)){
    echo $string;
}
else{
    echo "Your String cannot be converted.";
}