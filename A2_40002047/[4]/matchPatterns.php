<?php

/* 
 *  1. Contains the word “blue”.
    2. Starts with “br”.
    3. Starts with “a” and finishes with “z”.
    4. Starts with 2 numbers.
    5. Contains 2 numbers anywhere.
 */
function matchRegex($pattern,$word){
   $matches=array();
    if(preg_match($pattern, $word, $matches)){
        echo "Match was found.<br>";
        foreach($matches as $k=>$value) {
           echo "Match $k = ".$value."<br>"; 
        }
        
        hr();
    }
    else{
        echo "No match found.<br>";
        hr();
    }
    
}
function hr(){echo "<hr>";}


$word1="bright blue sky and lighter";
$word2="abuzz";
$word3="123hfs46l*jk87";
$word4="h890jh21l12ere78";

$pattern1="/blue/";
matchRegex($pattern1, $word1);

$pattern2 ="/^br/";
matchRegex($pattern2, $word1);

$pattern3="/(^a)\w*(z$)/";
matchRegex($pattern3, $word2);

$pattern4="/^\d{2}/";
matchRegex($pattern4, $word3);

$pattern5="/[0-9]{2}/";
//matchRegex($pattern5, $word3);
matchRegex($pattern5, $word4);
