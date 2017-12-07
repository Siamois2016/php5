<?php

/**
 * Description of Calculator:
 * This class performs all arithmetic operations
 * Addition,substraction, multiplication and division
 * It returns the result of the operation
 * @author  @author josigam15
 */
require_once 'operandEnum.php';

class Calculator {

    private $calcdata;

    /**
     * define a constructor with a calculatordata Object. 
     * Clear any previous calculation.
     */
    function __construct(CalculatorData $calcdata) {
        $this->clear();
        try {
            $this->calcdata = $calcdata;
            //verify if the argument is provided and is a Calculator Data
            if ($this->is_provided($this->calcdata)) {

                $this->getResult($this->calcdata);
            } else {
                
                return "A calculator Data must be provided";
            }
        } catch (Exception $exc) {
            echo $exc;
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

//compute all arithmetic operation 

    function getResult(CalculatorData $calcdata) {


        $op = $calcdata->getOperand();
        $n1 = $calcdata->getNumber1();
        $n2 = $calcdata->getNumber2();

        switch ($op) {
            case OperandEnum::ADD:
                return "The values added are: " . $n1 . " + " . $n2 . " = " . ($n1 + $n2);

            case OperandEnum::SUBSTRACT:
                return  $this->substract($n1, $n2);

            case OperandEnum::MULTIPLY:
                return "The values multiplied are: " . $n1 . " * " . $n2 . " = " . $n1 * $n2;

            case OperandEnum::DIVIDE:
                return $this->divide($n1, $n2);

            default:
                return "No operand provided";
        }
    }

//work around for the division by 0 
    function divide($a, $b) {
        
        if ($b == 0) {
            return 'Sorry!!! Division by 0';
        } else {
            
            return  sprintf("The values divided are:  $a / $b = $ %.3f", $a / $b);
        }
    }

//function for the substraction of two numbers 
    function substract($a, $b) {
            $text = "The values substracted are:";
        if ($a >= $b) {
            return $text . $a . " - " . $b . " = " . ($a - $b);
        } else {
            return $text . $b . " - " . $a . " = " . ($b - $a);
        }
    }

    /**
     * Defines a method to verify if  a calculator data is 
     * If provided, return true
     * If it is an instance of calculatorData, return true
     * If the argument is not empty return true
     * If none of those : return false
     */
    function is_provided($cdata) {

        if (isset($cdata)) {
            return true;
        } else {
            if (($cdata instanceof CalculatorData) && !empty($cdata)) {
                return true;
            } else {
                return false;
            }
        }
    }

    function __toString() {
        return  $this->getResult($this->getCalcdata());
    }

}
