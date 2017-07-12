
<?php

class OperandEnum extends SplEnum {
 //extends means inherit from the parent class
    //splEnum is the skeleton for enumeration class
    const __default = self::Add;
    const Add = 0 ;  
  const Substract = 1; 
const Multiply = 2 ;
const Divide =3 ;

}
$r = operandEnum::Add;

class CalcData {
   //public function __construct($val1,$val2,$op)
    public function __construct($val1,$val2,  OperandEnum $op) {
        $this->val1 = $val1;
        $this->val2 = $val2;
        $this->operand = $op;
    }
    var $val1;
    var $val2;
    var $operand; 
    
}
$cd = new calcData(2,3,  OperandEnum::Multiply);