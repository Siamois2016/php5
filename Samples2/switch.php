<?php

/*
 * if ($i == 0)
{	echo "i equals 0";}
elseif ($i == 1)
{	echo "i equals 1";}
elseif ($i == 2)
{	echo "i equals 2";}

 */

$i = 2;

echo $i . " equals ";

switch ($i)
{
    case 0:
        echo "zero";
        break;
    case 1:
        echo "one";
        break;
    case 2:
        echo "two";
        break;
    case 3:
        echo "three";
        break;
    default:
        echo "Unknown";
}
