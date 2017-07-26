<?php
/**
 * Description of TrainControl
 *
 * @author j_gamgo
 */

require 'Car.php';
require 'Train.php';

$c1 = new Car("Company1","wheat");
$c2 = new Car("Company2","Flax Seed");
echo $c1;
echo $c2;
$t1 = new Train();
$t1->addCar($c1);
$t1->addCar($c2);
echo "<hr> Number of Cars <br> <br>";
echo $t1->carCount();
echo "<hr> List Of Cars: <br> <br>";
$t1->listCars();
echo "<hr> Sort Descending:<br><br>";
$t1->sortDescending();
echo "<hr> Sort Ascending: <br><br>";
$t1->sortAscending();
