<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Shape{
   public $color;
    function GetColor(){
       
       
   }
    
}

class Square extends Shape{
    public $side;
    function GetColor(){
        echo __METHOD__;
        parent::GetColor();
    }
    
}

class Rectangle extends Shape{
    public $height;
    function GetColor(){
        echo __METHOD__;
        parent::GetColor();
    }
    
}