<?php


var_dump($_POST);

if ($_SERVER['REQUEST_METHOD']=="POST")
{
    if (!empty($_POST['frmName']) && !empty($_POST['frmPass']))
    {
        $name = $_POST['frmName'];
        $pass = $_POST['frmPass'];
    }
}

if ($_SERVER['REQUEST_METHOD']=="GET")
{
    if (!empty($_GET['frmName']) && !empty($_GET['frmPass']))
    {
        $name = $_GET['frmName'];
        $pass = $_GET['frmPass'];
    }
}

if (!empty($name) && !empty($pass))
{
    echo "Hello $name";
    echo "<br>Your password $pass was accepted";
}
else
{
    echo "ERROR: You must call this page from the HTML form.";
}


