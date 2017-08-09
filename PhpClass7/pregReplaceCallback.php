<?php
echo preg_replace_callback(
'/[A-Z]+/',
function ($matches) {
$character = reset($matches);
return strtolower($character);
},
'AaBbCcDd');



function changeToLower($matches) {
$character = reset($matches); //pull the first element from the itertor
return strtolower($character);
}



echo "<hr>";

function changeNumberToString($matches) {
    switch ($matches[0]) {
        case 1:
            return "One";
        case 2:
            return "Two";
        case 3:
            return "Three";
        case 4:
            return "Four";
        case 5:
            return "Five";
        case 6:
            return "Six";
        case 7:
            return "Seven";
        case 8:
            return "Eight";
        case 9:
            return "Nine";
          case 0:
            return "Zero";
    }
}


echo preg_replace_callback("/\d/", 'changeNumberToString', "I have 3 apples.");