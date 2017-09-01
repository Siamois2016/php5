<?php

class Gadget{
    
    public $color;
    
    public function __construct($color) {
        $this->color=$color;
    }
   
    
}
 $g= new Gadget("red");
 $gadgetString = serialize($g);
 echo $gadgetString;
 
 
 // result = O:6:"Gadget":1:{s:5:"color";s:3:"red";}