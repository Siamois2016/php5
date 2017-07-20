<?php


$p = "QC";

echo "The province name for $p is : ";

switch ($p)
{
    case "QC":
    case "PQ":
        echo "Quebéc";
        break;
    case "ON":
        echo "Ontario";
        break;
    default:
        echo "Unknown";
}

