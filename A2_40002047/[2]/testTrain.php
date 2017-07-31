<?php

require 'car.php';
require_once 'train.php';

function hr(){
    echo "<hr>";
}
$c1 = new Car("Company 1", "Wheat");
$c2 = new Car("Company 2", "Flax Seed");
$t1 = new Train();
$t1->AddCar($c1);
$t1->AddCar($c2);
echo $t1->CarCount();
hr();
$t1->ListCars();
hr();
$t1->sortDescending();
$t1->ListCars();
hr();
$t1->sortAscending();
$t1->ListCars();
hr();

