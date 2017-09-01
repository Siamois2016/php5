<?php



$mychoices = $_POST['s1'];

foreach($mychoices as $choice)
{
    switch($choice)
    {
        case "1":
            echo "Ice Cream<br>";
            break;
        case "2":
            echo "Pecan Pie<br>";
            break;
        case "3":
            echo "Apple<br>";
            break;
    }
}

