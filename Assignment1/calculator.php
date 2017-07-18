<?php

/**
 * Description of Calculator:
 * This class performs all arithmetic operations
 * Addition,substraction, multiplication and division
 * It returns the result of the operation
 * @author josiane Gamgo
 */
class calculator {

    private $calcdata;

    
    /**
     * define a constructor with a calculatordata Object. 
     * Clear any previous calculation.
     */
    function __construct(calculatorData $calcdata) {
        if ($this->is_provided($calcdata) == TRUE) {
            $this->clear();
            $this->calcdata = $calcdata;
            $this->loadResult();
        } else {
            echo "<h3 color='red'>No argument provided. Please provide a Calculator Data</h3>";
        }
    }

//Defines Getters and setters for private members

    function getCalcdata() {
        return $this->calcdata;
    }

    function setCalcdata($calcdata) {

        $this->calcdata = $calcdata;
    }

//reset the calculator data 

    function clear() {
        unset($this->calcdata);
    }

    // method that calls the result function and returns the result of the calculation.

    function loadResult() {
        $cdata = $this->getCalcdata();
        $this->setCalcdata($cdata);
        return $this->result($cdata);
    }

//compute all arithmetic operation 

    function result(calculatorData $calcdata) {

        $op = $calcdata->getOperand();
        $n1 = $calcdata->getNumber1();
        $n2 = $calcdata->getNumber2();

        switch ($op) {
            case OperandEnum::ADD:
                $object = "The values added are: " . $n1 . " + " . $n2 . " = " . ($n1 + $n2);

                break;
            case OperandEnum::SUBSTRACT:
                $object = $this->substract($n1, $n2);
                break;
            case OperandEnum::MULTIPLY:
                $object = "The values multiplied are: " . $n1 . " * " . $n2 . " = " . $n1 * $n2;
                break;
            case OperandEnum::DIVIDE:
                $object = $this->divide($n1, $n2);

                break;
            default:

                break;
        }
        echo $object;
    }

//work around for the division by 0 
    function divide($a, $b) {
        if ($b == 0) {
            return 'Sorry!!! Division by 0';
        } else {
            return "The values divided are: " . $a . " / " . $b . " = " . $a / $b;
        }
    }

//function for the substraction of two numbers 
    function substract($a, $b) {
        if ($a >= $b) {
            return "The values substracted are: " . $a . " - " . $b . " = " . ($a - $b);
        } else {
            return "The values substracted are: " . $b . " - " . $a . " = " . ($b - $a);
        }
    }

    /**
     * Defines a method to verify if  a calculator data is 
     * If provided, return true
     * If it is an instance of calculatorData, return true
     * If the argument is not empty return true
     * If none of those : return false
     */
    function is_provided(&$cdata) {

        if (isset($cdata)) {
            return true;
        } else {
            if (($cdata instanceof calculatorData) && !empty($cdata)) {
                return true;
            } else {
                return false;
            }
        }
    }

}

//A class to enumerate the arithmetic operand to be used
class operandEnum {

    const __default = self::Add;
    const ADD = 0;
    const SUBSTRACT = 1;
    const MULTIPLY = 2;
    const DIVIDE = 3;

}
