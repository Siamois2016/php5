<?php

if (isset($_COOKIE['counter']))
{
    $newvalue = $_COOKIE['counter'] + 1;
    setcookie('counter', $newvalue, time()+3600);
    echo $_COOKIE['counter'];
}
else
{
    setcookie('counter', 1);
    echo "1";
}

