<?php

/**
 *  The Train class  
 * @author jgamgo
 */
class Train {

    private $train_number;
    public static $trainCounter;
    var $trainCars = [];

    function __construct() {
        $this->train_number = ++Train::$trainCounter;
    }

    function getTrain_number() {
        return $this->train_number;
    }

//Add car to a train 

    public function AddCar(Car $c) {
        array_push($this->trainCars, $c);
    }

    //number of car in a train 

    public function CarCount() {

        return count($this->trainCars);
    }

    //list all cars
    public function ListCars() {
        echo "<p>Train ID : " . $this->getTrain_number() . "</p><p>Listing of Cars as positioned in the train;</p>";
        foreach ($this->trainCars as $cars) {
            echo $cars;
        }
    }

    //sort car in descending order
    public function sortDescending() {
        usort($this->trainCars, function($val1, $val2) {

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

    //sort car in ascending order
    public function sortAscending() {
        usort($this->trainCars, function($val1, $val2) {

            if ($val1->getCarID() == $val2->getCarID()) {
                return 0;
            }
            if ($val1->getCarID() < $val2->getCarID()) {
                return -1;
            } else {
                return 1;
            }
        });
    }

}
