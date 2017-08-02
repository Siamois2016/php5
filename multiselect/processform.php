<?php

$mychoice = $_POST['menu'];

//var_dump($mychoice);
echo "Your choice : <br>";
foreach ($mychoice as $choice) {
    switch ($choice)
    {
        case "1":
            echo "salad<br>";
            break;
        case "2":
            echo "Rice<br>";
            break;
        case "3":
            echo "Cake<br>";
            break;
        default:
            break;
    }
}