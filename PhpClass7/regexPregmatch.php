<?php

$search1 = "/\w*\d{2}\w*/";
$search2 ="/\d{2}/";
$target = "abc12xyz";

echo "Search using first expression.<br>";
$matched1 = preg_match($search1,$target,$matches1);

$matched2 = preg_match($search2,$target,$matches2);

if($matched1){
    echo "Value found, the values are: ";
    print_r($matches1);
    echo "<br>";
}
else{
    echo 'The value was not found.<br>';
}

echo "<hr>";
echo "Search using second expression.<br>";
if($matched2){
  
    echo "Value found, the values are: ";
    print_r($matches2);
    echo "<br>";
}
else{
    echo 'The value was not found.<br>';
}
/*
echo "<hr>";

echo "Anti-test";
$matched3 = preg_match();
if($matched3){
  
    echo "Value found, the values are: ";
    print_r($matches3);
    echo "<br>";
}
else{
    echo 'The value was not found.<br>';
}

*/