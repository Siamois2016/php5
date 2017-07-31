<?php


class BaseClass {
    var $name;    
    public function test() {
        echo "BaseClass::test() called\n";
        }
        final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
        echo $this->name;
        }
}
class ChildClass extends BaseClass {
        public function moreTesting() {
        echo "ChildClass::moreTesting() called\n";
        echo $this->name;
        }
        //Fatal error: Cannot override final method BaseClass::moreTesting() 
}