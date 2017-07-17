<?php

/**
 * Description of Calculator:
 * This class performs all arithmetic operations
 * Addition,substraction, multiplication and division
 * @author josiane
 */
class calculator {

    private $calcdata;

//defines a constructor with a calculatordata Object. Clear any previous calculation.

    function __construct(calculatorData $calcdata) {
        $this->clear();
        $this->calcdata = $calcdata;
        $this->loadResult();
         
    }

//Defines Getters and setters for private members

    function getCalcdata() {
        return $this->calcdata;
    }

    function setCalcdata($calcdata) {

        $this->calcdata = $calcdata;
    }

    //verify if there is a calculator data is provided

    function is_emptycalc(calculatorData $cdata) {

        if (empty($cdata)) {
            echo 'No calculator Data found. Please provide one.';
            return 1;
        } else {
            return 0;
        }
    }
//reset the calculator data 

    function clear() {
        unset($this->calcdata);
    }

 //A controller method that calls the result function and return the result of the calculation.

    function loadResult() {
        $cdata = $this->getCalcdata();
        //verify if the calculator data is there 
        if ($this->is_emptycalc($cdata) == 1) {
            return 'No calculator Data found. Please provide one.';
        } else {
            $this->setCalcdata($cdata);
            return $this->result($cdata);
        }
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

}

//A class to enumerate the arithmetic operand to be used
class operandEnum {

    const __default = self::Add;
    const ADD = 0;
    const SUBSTRACT = 1;
    const MULTIPLY = 2;
    const DIVIDE = 3;

}
