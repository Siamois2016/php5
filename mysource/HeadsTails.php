<?php

/* 
 * Please write a program that flips a coin (potentially forever),
and detects when 3 heads or tails appears in a row.
Show coin tosses (H,T, H, etc...)
Display how many flips it took to get 3
 * Sample run:
H, T, H, H, H
It took 
5
roles to achieve 3 heads in a 
row.
Additionally, put a safeguard to limit tries to 20 turns.
Keep an eye out for style (no magic numbers!)
 */

define("H","{Heads}");
define("T","{Tails}");
$randomnr = rand(0,1);
$rolls=0;
$heads_count=0;
//when 3 heads or tails apear

while($heads_count<4){
    $randomnr = rand(0,1);
    echo  $randomnr ? "H" : "T";
    
}
