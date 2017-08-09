<?php

$input_string = "A6";
$search ="/([A-Z])(\d)/"; // first letter and a digit
preg_match_all($search, $input_string, $matches);
print_r($matches);

$command = $matches[1];
$commandvalue = $matches[2];
