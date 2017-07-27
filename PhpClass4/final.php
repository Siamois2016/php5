<?php

class Gadget
{
    var $name;
    
    final public function getName()
    {
        echo $this->name;
    }

}

class NicerGadget extends Gadget
{
    public function getName()
    {
        echo $this->name;
    }
}

$g = new NicerGadget();