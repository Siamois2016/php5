<?php

class Gadget
{
    public $v1;
    public $v2;
    public $v3;
    
}

$g1 = new Gadget();
$g1->v1 = "ONE";
$g1->v2 = "TWO";
$g1->v3 = "THREE";

foreach ($g1 as $k=>$v)
{
    echo "k: $k, v: $v <br>";
}