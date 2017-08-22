<?php

function convertToUppercase(&$stringValue)
{
    try
    {
        $stringValue = strtoupper($stringValue);
        
        throw new Exception();
        
        return true;
    }
    catch (Exception $e)
    {
        return false;
    }
}

$string = "Hello";

if (convertToUppercase($string))
{
    echo $string;
}
else
{
    echo "Your string cannot be converted.";
}