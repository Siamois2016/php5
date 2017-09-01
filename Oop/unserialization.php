<?php
class Gadget{
    
    public $color;
    
    public function __construct($color) {
        $this->color=$color;
    }
   
    
}
$rawvalue ='O:6:"Gadget":1:{s:5:"color";s:3:"red";}';
$myGadget = unserialize($rawvalue);// unserialize need to have access to the gadget class
echo $myGadget->color;

