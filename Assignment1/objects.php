
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="stylesheet" href="css/style.css"/>
        <title>Assignment1_part4-5</title>
    </head>
    <body>
        <div  id="box2">
            <h3>Assignment 1.6 : OBJECTS</h3>
            <?php
            $data = new CalculatorData(OperandEnum::Add,2,4);
            $calc= new Calculator($data);
            Echo "The values added are ". $calc;
            ?>
        </div>
    </body>
</html>
<?php

class CalculatorData {

    //Defining private members
    private $number1;
    private $number2;
    private $operand;

//Defining a constructor accepting the Enum operand and two numberrs

    function __construct(OperandEnum $operand, $number1, $number2) {
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

/*
 * *The operand enumerator class :
 *  */

class OperandEnum extends SplEnum{

    //extends means inherit from the parent class
    //splEnum is the skeleton for enumeration class
    const __default = self::Add;
    const Add = 0;
    const Substract = 1;
    const Multiply = 2;
    const Divide = 3;

}

/*
 * *The calculator class to perform arithmetic operations
 */

class Calculator {

    private $calcdata;
    
    //define a constructor to call with a calculatordata Object
    
    function __construct(CalculatorData $calcdata) {
        $this->calcdata = $calcdata;
    }
    function getCalcdata() {
        return $this->calcdata;
    }

    function setCalcdata($calcdata) {
        
        $this->calcdata = $calcdata;
    }

 function clear(){
     unset($this->calcdata);
     
 }

}
