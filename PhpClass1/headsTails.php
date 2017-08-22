<?php

$rolls = 0;
$head_count = 0;
$tail_count = 0;

define ("H","{HEADS}"); define ("T","{TAILS}");

while ($head_count < 3 && $tail_count < 3)
{
    $currentRoll = rand(0,1);
    echo $currentRoll ? H : T;
    
    if($currentRoll)
    {
        $head_count++; // 1 = Heads
        $tail_count = 0;
    }
    else
    {
        $tail_count++;
        $head_count = 0;
    }
    
    $rolls++;
    
    if ($rolls > 20) break;
}

echo "<p>After $rolls rolls, we got 3 ";
echo ($head_count == 3) ? "heads" : "tails" ;
echo "</p>";