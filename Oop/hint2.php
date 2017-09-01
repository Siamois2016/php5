<?php

interface IShape
{
    public function getColor();
}

class Shape implements IShape
{
    public function getColor();
}

class Square extends Shape
{}

class Triangle extends Shape
{}

function processShape(IShape $val){}
