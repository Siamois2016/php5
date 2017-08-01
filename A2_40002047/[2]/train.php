<?php
/**
 * Description of train: The Train is an array of Cars. 
 * A Train should: 
* 1) Add cards with an AddCar method.
* 2) Return the number of cars with a CarCount() method.
* 3) List the cars (in their exact order) in either a table format or just a regular text list using ListCars().
* 4) Sort the cars contained within the train by train number with a SortAscending method. You probably
     want to use ksort here to sort objects within an array. See example at end.
* 5) Sort the cars contained within the train by train number with a SortDescending method.
 * 
 * @author jgamgo
 */
class Train {
   private $train_number;
   private static $trainCounter =0;
   var $trainCars = [];
   
   function __construct() {
       $this->train_number = Train::$trainCounter +1;
       Train::$trainCounter++;
   }
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
       self::$trainCounter = $trainCounter;
   }

//Add car to a train 
   
   public function AddCar(Car $c){
       $key = $c->getCarID(); 
       $this->trainCars[$key]= $c;
  
       return $this->trainCars;
   }
  //number of car in a train 
   
  public function CarCount(){
  $numberOfCars = count($this->trainCars);
  return $numberOfCars;
  }
  
  //list all cars
  public function ListCars(){
      echo "Train ID : ".$this->getTrain_number()."<br>Listing of Cars as positioned in the train;<br>";
      foreach ($this->trainCars as $cars) {
          echo $cars;
      }
  }
  //sort car in descending order
  public function sortDescending(){
     return arsort($this->trainCars);
  }
  
  //sort car in ascending order
  public function sortAscending(){
     return asort($this->trainCars);
  }
  
   
}

function compare(Car $a,Car $b){
    if($a->getCarID() <= $b->getCarID()){
        
      return 1;  
    }else{
        return 0;
    }
    
    
}
