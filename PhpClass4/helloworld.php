<?php

//var_dump($_POST);
//echo "<hr>";

if ($_SERVER['REQUEST_METHOD'] == "POST") {


    if (!empty($_POST['frmName']) && !empty($_POST['frmPass'])) {
        $name = $_POST['frmName'];
        $pass = $_POST['frmPass'];
    }
}
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    if (!empty($_GET['frmName']) && !empty($_GET['frmPass'])) {
        $name = $_GET['frmName'];
        $pass = $_GET['frmPass'];
    }
}

echo "Hello $name";
echo "<br> Your password $pass was accepted";




// url = http://localhost:8080/php5/PhpClass4/helloworld.php?frmName=josiane