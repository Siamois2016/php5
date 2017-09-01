<?php

/**
 * Description of Car
 *
 * @author jgamgo
 */
class Car {

    private $carID;
    private $companyName;
    private $contents;
    public static $carCounter = 0;

    /*     * constructor to create a car object
     * The carID is automatically filled with the content of the carcounter
     * the carcounter is incremented each time a car object is created.
     */

    function __construct($companyName, $contents) {
        $this->companyName = $companyName;
        $this->contents = $contents;
        $this->carID = ++Car::$carCounter;
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

    static function getCarCounter() {
        return self::$carCounter;
    }

    public function __toString() {
        return "Car #" . $this->getCarID() .
                ", owned by" . $this->getCompanyName() .
                ", containing" . $this->getContents() .
                "<br>";
    }

}
