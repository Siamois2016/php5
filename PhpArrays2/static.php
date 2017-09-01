<?php

class staticClass
{
    const myValue = "Hello";
    
    public static $myValue2 = "123";
    
    var $nonStaticValue;
    
}

echo staticClass::myValue;

echo staticClass::$myValue2;


$sc = new staticClass;
//echo $sc->nonStaticValue;
//echo $sc->myValue;
//echo $sc->myValue2;
