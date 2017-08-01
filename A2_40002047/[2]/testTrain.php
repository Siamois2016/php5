<?php

require 'car.php';
require_once 'train.php';

function hr(){
    echo "<hr>";
}
$c1 = new Car("Company 1", "Wheat");
$c2 = new Car("Company 2", "Flax Seed");
//$c3 = new Car("Company 3", "Milk");
$t1 = new Train();
//$t2 = new Train();
$t1->AddCar($c1);
$t1->AddCar($c2);
//$t2->AddCar($c3);
echo "Number of Cars in Train ID ".$t1->getTrain_number()."= ".$t1->CarCount()."<br>";
//echo "Number of Cars in Train# ".$t2->getTrain_number()."= ".$t2->CarCount();
hr();
$t1->ListCars();
hr();
echo "Sort Descending<br>";
$t1->sortDescending();
$t1->ListCars();
hr();
echo "Sort Ascending<br>";
$t1->sortAscending();
$t1->ListCars();
hr();

