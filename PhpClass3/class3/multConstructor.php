<?php

class Student
{
    private function __construct() {}

    public $id;
    public $ssn;
    
    public static function withId( $id ) {
    	$instance = new self();
    	$instance->id = $id;
    	return $instance;
    }

    public static function withIdandSSN( $id, $ssn ) {
    	$instance = new self();
    	$instance->id=$id;
        $instance->ssn = $ssn;
    	return $instance;
    }
}

$s = Student::withIdandSSN(12345, 123123123);

echo $s->ssn;

