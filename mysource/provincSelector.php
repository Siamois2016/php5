<?php

function selectprovince($provinc) {

    echo "The province name of $provinc is : ";
    switch ($provinc) {
        case "QC":
            echo "Quebec";
            break;
        case "ON":
            echo "Ontario";
            break;
        case "AB":
            echo "Alberta";
            break;
        case "BC":
            echo "British Columbia";
            break;
        case "PEI":
            echo "Prince Edward Island";
            break;
        case "MB":
            echo "Manitoba";
            break;
        case "NB":
            echo "New Brunswick";
            break;
        case "NS":
            echo "Nova Scotia";
            break;
        case "SK":
            echo "Saskatchewan";
            break;
        case "NL":
            echo "Newfoundland and Labrador";
            break;

        default:
            echo "Unknown";
    }
}

echo selectprovince("QC");
echo "<br>";
echo selectprovince("ON");
echo "<br>";
echo selectprovince("XY");
