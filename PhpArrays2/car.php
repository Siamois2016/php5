<?php

/*
 * Create a class called “Car” and add the following attributes to it.
  Model
  Brand
  Highway gas milage
  Create some car objects (2 or 3).
  Display the properties of the cars.
 */

class Car {

    private $model;
    private $brand;
    private $hgmilage;
    private $price;
    function getPrice() {
        return $this->price;
    }

    function setPrice($price) {
        $this->price = $price;
    }

        /* function DisplayCar(){

      echo "Brand is :".$this->brand."Model is ".$this->model."<br> Milage is ".$this->hgmilage." km";
      }
     */

    public function getClass(){
        
        return __CLASS__;//this is a built-in function from PHP
    }
    
    //a constructor. there can only be one constructor in PHP
    
    public function __construct($model,$brand,$hgmilage){
        $this->model = $model;
        $this->brand = $brand;
        $this->hgmilage =$hgmilage;
        
    }
   function getModel() {
        return $this->model;
    }
    /*
   public function __get($attr) {
        echo "we are  'getting' the $attr here <br>";
        return $this->model;
    }
public function __set($attr, $value) {
    echo "setting $attr to $value <br>";
    $this->model=$value ;
}

*/
    function getBrand() {
        return $this->brand;
    }

    function getHgmilage() {
        return $this->hgmilage;
    }

   function setModel($model) {
        $this->model = $model;
    }

    function setBrand($brand) {
        $this->brand = $brand;
    }

    function setHgmilage($hgmilage) {
        $this->hgmilage = $hgmilage;
    }
    
    public function __toString(){
        return "HELLO";
    }

}

/*$c = new Car();


//$c->hgmilage =35000;
//$c->model="Corolla";

$c->setBrand("Toyota");
$c->setModel("Corolla");
$c->setHgmilage(35000);
echo $c->getBrand();
 * 

echo "<hr>";

echo $c->getClass(); // return the class name , helps in big project to know which class to call next.
/*echo "<hr>";
$c->model="abc";
echo $c->model;*/

//inheritance
class leasedCar extends Car{
    private $leaseRate;
    function getLeaseRate() {
        return $this->leaseRate;
    }

    function setLeaseRate($leaseRate) {
        $this->leaseRate = $leaseRate;
    }


    
}
echo "<hr>";
$c2 = new Car("CRV","Honda",12);
echo $c2->getBrand();