<?php




$test_string = "I have 1 apple";

$pattern = "/\d/";

echo preg_replace_callback($pattern, 'toStringNumber', $test_string);

function toStringNumber($match)
{
    switch($match[0])
    {
        case "1":
            return "One";
        case "2":
            return "Two";
        // ETC...
    }
}

