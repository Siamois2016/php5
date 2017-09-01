<?php
//HOw to build multiple constructors
class Student
{
public function __construct() {}
public $id;
public $ssn;

public static function withID( $id ) {
$instance = new self();
$instance->id=  $id ;
return $instance;
}
public static function withIDandSSN( $id,$ssn ) {
$instance = new self();
$instance->id=  $id ;
$instance->ssn=  $ssn ;
return $instance;
}


}

$s = Student::withID(55555);
$ssn = Student::withIDandSSN(12345, 123123123);

echo $ssn->id . "<br> ssn: ";
echo $ssn->ssn;
