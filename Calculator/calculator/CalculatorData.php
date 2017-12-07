<?php

/**
 * Description of CalculatorData
 *
 * @author josigam15
 */
class CalculatorData {

    //Defining private members
    private $number1;
    private $number2;
    private $operand;

//Defining a constructor accepting the Enum operand and two numberrs

    function __construct($operand, $number1, $number2) {

        $this->operand = $operand;
        $this->number1 = $number1;
        $this->number2 = $number2;
    }

    //Defining getters and setters
    function getNumber1() {
        return $this->number1;
    }

    function getNumber2() {
        return $this->number2;
    }

    function getOperand() {
        return $this->operand;
    }

    function setNumber1($number1) {
        $this->number1 = $number1;
    }

    function setNumber2($number2) {
        $this->number2 = $number2;
    }

    function setOperand($operand) {
        $this->operand = $operand;
    }

}
