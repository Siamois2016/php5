<?php
function addNumbers($num1,$num2=10){
    return $num1 + $num2;
}

echo "1 + 2 = ". addNumbers(1,2);
echo "<br>";
echo "1 + ? = ". addNumbers(1);
echo "<br>";
echo "nothing = ". addNumbers();