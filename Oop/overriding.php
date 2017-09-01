<?php

class Class1 {

    function func1() {
        echo "a1<br>";
    }

}

class Class2 extends Class1 {

    function func1() {
        echo "a2<br>";
    }

    function func2() {
        
        $this->func1();
        parent::func1();// call the parent method of function1
        
    }

}

$obj = new Class2();
$obj->func2();
