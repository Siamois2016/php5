<?php

class Gadget
{
    public $color;
    
    public function __construct($c) {
        $this->color = $c;
    }
}

$rawValue = 'O:6:"Gadget":1:{s:5:"color";s:3:"red";}';

$myGadget = unserialize($rawValue);

echo $myGadget->color;

