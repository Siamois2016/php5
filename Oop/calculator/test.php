<?php

require_once 'Calculator.php';  // reuquire ENUM
require_once 'CalculatorData.php';

$cd = new CalcData(2,6,OperatorENUM::Add);
$c = new Calculator($cd);
echo $c;
