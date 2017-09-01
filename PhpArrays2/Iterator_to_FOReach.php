<?php

$ages = array('Person' => 'Age', 'Fred' => 35, 'Barney' => 30, 'Tigger' => 8, 'Pooh' => 40);
$count = 0;
//for($i=0;$i<array_count_values($ages);$i++)
foreach($ages as $name=>$age)
{
    if ($count == 0)
    {
        echo("<table><tr><th>$name</th><th>$age</th></tr>\n");
    }
    else
    {
        echo("<tr><td>$name</td><td>$age</td></tr>\n");
    }
    $count++;
}
echo("</table>");
