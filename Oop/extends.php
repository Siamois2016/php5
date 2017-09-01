<?php


class Shape
{
    public $color;
    function GetColor()
    {
        echo __METHOD__;
        echo $this->color;
    }
}

class Square extends Shape
{
    public $side;
    function GetColor()
    {
        echo __method__;
        parent::GetColor();
        
        //echo __METHOD__;
        //echo $this->color;
    }
}

class Triangle extends Shape
{
    public $length;
    public $height;
}


$a = new Square;
$a->color = "Blue";
$a->GetColor();
