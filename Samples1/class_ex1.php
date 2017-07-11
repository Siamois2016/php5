<?php


// This will reverse everything after the "b"

$input1 = "this is better";
$input1_pos = strpos($input1, "b");
$input1_end = substr($input1, $input1_pos + 1);

echo substr($input1, 0, $input1_pos + 1);
echo strrev($input1_end);

echo "<hr>";

// This will get the 3 middle characters of a string.

$input2 = "abcde";

$middle = strlen($input2) / 2;
echo substr($input2, $middle - 1, $middle + 1);
