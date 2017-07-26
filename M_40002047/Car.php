<?php

/**
 * Description of Car
 *
 * @author j_gamgo
 */
class Car {
    //private members
    private static $staticCounter=0;
    private $carID;
    private $companyName;
    private $contents;
   //constructor
   function __construct($companyName, $contents) {
       $this->companyName = $companyName;
       $this->contents = $contents;
       $this->carID = Car::$staticCounter+1;
       Car::$staticCounter = Car::$staticCounter +1;
      
   }
   //mutators and accessors
   static function getStaticCounter() {
       return self::$staticCounter;
   }

   static function setStaticCounter($staticCounter) {
       self::$staticCounter = (self::$staticCounter+ $staticCounter);
   }

      function getCarID() {
       return $this->carID;
   }

   function getCompanyName() {
       return $this->companyName;
   }

   function getContents() {
       return $this->contents;
   }


   function setCarID($carID) {
      
       $this->carID = $carID;
       
   }

   function setCompanyName($companyName) {
       $this->companyName = $companyName;
   }

   function setContents($contents) {
       $this->contents = $contents;
   }
   //Printing the car info with toString method
   public function __toString() {
       $output = "Car #".$this->getCarID().", owned by ".$this->getCompanyName().", containing ".$this->getContents().".<br>";
       return $output;
   }




    
}
