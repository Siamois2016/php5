<?php

$unsorted = array(8,3,5,2,99,3);
print_r($unsorted);

echo "<hr>";
sort($unsorted);
print_r($unsorted);

echo "<hr>";
rsort($unsorted);
print_r($unsorted);