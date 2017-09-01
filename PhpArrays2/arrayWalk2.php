<?php

$nums = array(2=>2,3=>4,1=>6);

function multiply($val, $key)
{
    echo "key = $key";
    echo "value = $val";
    echo "<br>";
}

$return = array_walk($nums, 'multiply');

echo "<hr>";
