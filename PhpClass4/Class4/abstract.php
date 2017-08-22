<?php

abstract class Car
{
    var $name;
    abstract function getName();
}

class SportsCar extends Car
{
    public function getName() {
        echo $this->name;
    }
}

