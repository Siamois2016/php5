<?php

/**
 * Description of Train
 *
 * @author j_gamgo
 */
class Train {

    private $train_number;
    private $arrayOfCars = array();
    public static $trainCounter;

    // Constructor
    function __construct() {

        $this->train_number = ++Train::$trainCounter;
    }

//add a car
    public function addCar(Car $car) {

        array_push($this->arrayOfCars, $car);
    }

    //number of cars
    public function carCount() {

        return count($this->arrayOfCars);
    }

//list the cars 

    function listCars() {
        // $array = $this->getArrayOfCars();
        echo "<p>List of Cars as positioned in the train </p>";
        echo "<p>Train ID : " . $this->train_number . "</p>";

        foreach ($this->arrayOfCars as $car) {
            echo $car . "<br>";
        }
    }

//sorting the car in asc
    function sortAscending() {

        usort($this->arrayOfCars, function ($val1, $val2) {
            return ($val1->getCarID() == $val2->getCarID()) ? 0 : (($val1->getCarID() > $val2->getCarID()) ? 1 : -1);
        });
    }

//sort descending

    public function sortDescending() {
        usort($this->arrayOfCars, function($val1, $val2) {

            if ($val1->getCarID() == $val2->getCarID()) {
                return 0;
            }
            if ($val1->getCarID() < $val2->getCarID()) {
                return 1;
            } else {
                return -1;
            }
        });
    }

}
