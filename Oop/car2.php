<?php
class Car{
    const CVal =6;
    public static $SVal=7;
    var  $val;
    
}
$c1 = new Car();
$c1->val =1;

echo Car::$SVal."<br>";
echo Car::CVal."<br>";
echo Car::CVal;



//$c2=new Car();
