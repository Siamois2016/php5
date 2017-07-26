<?php

/**
 * Description of Train
 *
 * @author j_gamgo
 */


class Train {

    private $train_number;
    private $arrayOfCars = array();
    private static $trainCounter = 1;

    // Constructor
    function __construct() {

        $this->train_number = Train::$trainCounter ;
        Train::$trainCounter = Train::$trainCounter + 1;
    }

    //getters and setters
    function getTrain_number() {
        return $this->train_number;
    }

    static function getTrainCounter() {
        return self::$trainCounter;
    }

    function setTrain_number($train_number) {
        $this->train_number = $train_number;
    }

    static function setTrainCounter($trainCounter) {
        self::$trainCounter = (self::$trainCounter + $trainCounter);
    }

    function getArrayOfCars() {
        return $this->arrayOfCars;
    }

    function setArrayOfCars($arrayOfCars) {
        $this->arrayOfCars = $arrayOfCars;
    }

    public function __toString() {
        $output = "Train ID : " . $this->getTrain_number() . "<br>";
       
        return $output;
    }

//add a car
    function addCar(Car $car) {
       $array= $this->getArrayOfCars();
       // $car->setCarID(1);
       array_push($array, $car);
       $this->setArrayOfCars($array);
       
        
    }

    //number of cars
    function carCount() {
       
        return Car::getStaticCounter();
    }



//list the cars 
 
    function listCars() {
      $array = $this->getArrayOfCars();
      echo "List of Cars as positioned in the train <br>";
      echo "Train ID : " . $this->getTrain_number() . "<br>";

         foreach ($array as $car) {
            echo $car . "<br>";
        }

    }

//sorting the car in desc
    function sortAscending() {
       $array = $this->getArrayOfCars();
        
        ksort($array);
       foreach ($array as $car) {
            echo $car . "<br>";
        }
    }

//sort descending

    function sortDescending() {
        $array = $this->getArrayOfCars();
         krsort($array);
              foreach ($array as $car) {
            echo $car . "<br>";
        }
 
    }

}
   function compare($val1,$val2){
   
       if($val1->getCarID()<$val2->getCarID()){
       return -1;
   }
   else if($val1->getCarID()>$val2->getCarID()){return 1;
   
   }
   else{
       return 0;
   }
   
    
}
