<?php

$input_string = "A6";
$search ="/([A-Z])(\d)/"; // first letter and a digit
preg_match_all($search, $input_string, $matches);
print_r($matches);

$command = $matches[1];
$commandvalue = $matches[2];
echo ' <br>'.'command ='.$matches[1][0].' <br>';
echo 'commandvalue = '.$matches[2][0].' <br>';

echo 'input ='.$matches[0][0].' <br>';