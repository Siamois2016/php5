<?php
//static call Student.Register(). 
//non static call $s = new Student;

class staticClass {
    const myValue="Hello";// this value is consider as a constant
    
    public static $myValue2="test";
    var $nonStaticValue;//this can get lost by instantiating
}
echo staticClass::myValue;
echo staticClass::$myValue2;