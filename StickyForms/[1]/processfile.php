<?php

$listOfValues = array();
$counter = 1;

//Extract the name from POST array
if (!empty($_POST['name'])) {
    $name = $_POST['name'];
} else {
    echo "name is not defined in POST";
}

echo "<p>Hello $name,</p>";

//Extract the array of values
foreach ($_POST as $key => $value) {

    if (substr($key, 0, 4) == "text") {
        array_push($listOfValues, $value);
    }
}

//sort the list alphabetically
sort($listOfValues);

//Display the sorted values
echo "<p>The values recieved, in order, are: </p>";
foreach ($listOfValues as $k => $v) {
    echo $counter++ . ")&nbsp; $v <br>";
}


