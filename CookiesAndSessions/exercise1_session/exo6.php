<?php

/* 
 * [6] Write just one web page that creates a session at
the beginning, then it creates a session variable
called “name” with your name in it, then READ the
session variable called “name” and display it to the
screen.
 */

session_start();
$_SESSION['name']="Josiane";
echo $_SESSION['name'];
?>
<html>
    
</html>