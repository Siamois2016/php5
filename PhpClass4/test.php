<?php

class OperatorENUM // extends SplEnum
{
    const Add = 0;
    const Subtract = 1;
    const Multiply = 2;
    const Dividde = 3;
}

class CalcData
{
    private $val1;
    private $val2;
    private $operator;
    
    function __construct($val1, $val2, $operator) {
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->operator = $operator;
    }
    
    function getVal1() {
        return $this->val1;
    }

    function getVal2() {
        return $this->val2;
    }

    function getOperator() {
        return $this->operator;
    }

    function setVal1($val1) {
        $this->val1 = $val1;
    }

    function setVal2($val2) {
        $this->val2 = $val2;
    }

    function setOperator($operator) {
        $this->operator = $operator;
    }
}

class Calculator
{
    public function __construct($cd) {
        $this->calcData = $cd;
    }
    
    private $calcData;
    
    function getCalcData() {
        return $this->calcData;
    }

    function setCalcData($calcData) {
        $this->calcData = $calcData;
    }

    public function Clear()
    {
        unset($this->calcData);
    }
    
    public function __toString() {
        try
        {
            if (!empty($this->calcData))
            {
                $val1 = $this->calcData->getVal1();
                $val2 = $this->calcData->getVal2();
                $operator = $this->calcData->getOperator();

                switch ($operator)
                {
                    case OperatorENUM::Add:
                        return "The values added are " . ($val1 + $val2);
                    case OperatorENUM::Subtract:
                        return "The values subtracted are " . ($val1 - $val2);
                    case OperatorENUM::Multiply:
                        return "The values multiplied are " . ($val1 * $val2);
                    case OperatorENUM::Dividde:
                        if ($val2 == 0)
                        {
                            throw new Exception("Cannot divide by 0");
                        }
                        else
                        {
                            return "The values divided are " . ($val1 / $val2);
                        }      
                                
                }
            }
            else
            {
                return "Error: Calcdata must be present...";
            }
        }
        catch (Exception $e)
        {
            echo $e;
        }
        
    }
}


$cd = new CalcData(2,6,OperatorENUM::Add);
$c = new Calculator($cd);
echo $c;


//$c = new Calculator(null);
//echo $c;