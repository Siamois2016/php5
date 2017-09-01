<?php

class Car
{
    private $model;
    private $brand;
    private $mileage;
    private $price;
    
    function getPrice() {
        return $this->price;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    public function __construct($model, $brand, $mileage) {
        $this->model = $model;
        $this->brand = $brand;
        $this->mileage = $mileage;
    }
    
    function getModel() {
        return $this->model;
    }

    function getBrand() {
        return $this->brand;
    }

    function getMileage() {
        return $this->mileage;
    }

    function setModel($model) {
        $this->model = $model;
    }

    function setBrand($brand) {
        $this->brand = $brand;
    }

    function setMileage($mileage) {
        $this->mileage = $mileage;
    }

    public function __toString() {
        return "HELLO";
    }
    
}


class LeasedCar extends Car
{
    private $leaseRate;
    
    function getLeaseRate() {
        return $this->leaseRate;
    }

    function setLeaseRate($leaseRate) {
        $this->leaseRate = $leaseRate;
    }
}

$c = new Car("CRV", "Honda", 12);

echo $c->getMileage();

echo $c;