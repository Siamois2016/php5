<?php

echo preg_replace_callback(
'/\b[A-Za-z]/','changeToUpper','this is a test');



function changeToUpper ($matches) {

    return strtoupper($matches[0]);
    
    
    //$character = reset($matches);

    //return strtoupper($character);
}
