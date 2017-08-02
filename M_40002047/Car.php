<?php

/**
 * Description of Car
 *
 * @author j_gamgo
 */
class Car {
    //private members
    public static $staticCounter=0;
    private $carID;
    private $companyName;
    private $contents;
   //constructor
   function __construct($companyName, $contents) {
       $this->companyName = $companyName;
       $this->contents = $contents;
       $this->carID = ++Car::$staticCounter;
      
   }
   //mutators and accessors
 
      function getCarID() {
       return $this->carID;
   }

   function getCompanyName() {
       return $this->companyName;
   }

   function getContents() {
       return $this->contents;
   }

/* no setters nedeed
*/
   //Printing the car info with toString method
   public function __toString() {
       $output = "Car #".$this->carID.", owned by ".$this->companyName.", containing ".$this->contents.".<br>";
       return $output;
   }




    
}
