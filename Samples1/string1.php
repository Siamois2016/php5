<?php

function hr()
{echo "<hr>";}


echo number_format("1000000",2)."<br>";

hr();

echo strcmp("Brendan", "Brendan");

hr();

$str = "age:30 weight:60kg";
sscanf($str,"age:%d weight:%dkg",$age,$weight);
// show types and values
var_dump($age,$weight);



hr();


echo str_ireplace("2000", "2017", "The year is 2000", $numbr);

echo "<br>";

echo $numbr;


hr();

echo substr("Brendan",2,2);

hr();

$text = "sadhfjksdah fkjhsad jkfh adjk fhdjksadhfjk hsad";

echo wordwrap($text, 5, "<br>", true);

