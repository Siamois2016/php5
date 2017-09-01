<?php

require 'car.php';
require_once 'train.php';

function hr(){
    echo "<hr>";
}
//create car object
$c1 = new Car("Company 1", "Wheat");
$c2 = new Car("Company 2", "Flax Seed");

//create a train object and add cars into it
$t1 = new Train();
$t1->AddCar($c1);
$t1->AddCar($c2);
echo "Number of Cars in the train= ".$t1->CarCount()."<br>";

hr();
//list the cars in a train
$t1->ListCars();
hr();
//sort descending 
$t1->sortDescending();
$t1->ListCars();
hr();
//sort ascending 
$t1->sortAscending();
$t1->ListCars();


