<?php

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