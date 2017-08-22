<?php



class OperandEnum // extends SplEnum
{
    const __default = self::Add;
    const Add = 0;
    const Subtract = 1;
    const Multiply = 2;
    const Divide = 3;
}

class CalcData
{
    public function __construct($val1, $val2, $op) {
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->operand = $operand;
    }
    
    var $val1;
    var $val2;
    var $operand;
}

$cd = new CalcData(2, 3, OperandEnum::Multiply);

class A
{
    
    function b(Person $p){}
    
}