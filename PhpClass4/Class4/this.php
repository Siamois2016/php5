<?php


class Gadget
{
    public $color;
    
    public function __construct($c) {
        $this->color = $c;
    }
}

$g = new Gadget("red");

$g->color = "blue";


