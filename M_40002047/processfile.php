<?php

/**
 * Description of processfile
 *
 * @author j_gamgo
 * step1 : put $_POST[] ->$myArray
 *step2: myname ->$myName
 * text* -> put into $textArray\
 * read each text and put into the $textArray
 */


/*
$list = array();
$counter =0;
echo "<hr>";
 foreach($_POST as $k=>$v)
    {
     $counter++;
     
     echo "$counter)". " $v<br>";
     
      array_push($list, $v);
     
    }
*/


$textArray = array();
$counter = 1;
//extract the name
if(!empty($_POST['myName'])){
 $myName=$_POST['myName'];    
}else{
    echo "Error: my Name is not defined in POST";
}

//extract the aray values
foreach ($_POST as $k =>$v) {
   if(substr($k,0,4)=="text"){
       array_push($textArray, $v);
   } 
}

echo "Hello, $myName<br><br>";
 echo "The values in order are: <br><br>";
 sort($textArray);
 foreach($textArray as $k=>$v){
     echo $counter++.") $v <br>";
    
 }














