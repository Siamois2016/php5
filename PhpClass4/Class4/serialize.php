<?php


class Gadget
{
    public $color;
    
    public function __construct($c) {
        $this->color = $c;
    }
}

$g = new Gadget("red");

$gadgetString = serialize($g);

echo $gadgetString;
// O:6:"Gadget":1:{s:5:"color";s:3:"red";}