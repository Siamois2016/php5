<?php

require_once 'OperatorENUM.php';

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