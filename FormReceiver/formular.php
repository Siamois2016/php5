<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    
    if(isset($_POST['name'])&isset($_POST['cie'])){
       $name = $_POST['name'];
       $cie =  $_POST['cie'];
    }
}
else if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET['name'])&isset($_GET['cie'])){
       $name = $_GET['name'];
       $cie =  $_GET['cie'];
    }
}
else{
    echo "Please call this form using form using POST or GET";
}
echo "This page was call using ". $_SERVER['REQUEST_METHOD']." recieved values are: <hr>";
    foreach ($_POST as $key=>$value) {
        echo "Key= $key => Value= $value<br>";
    }

echo "<hr>";
echo "<p>Welcome $name</p>";
echo "<p>Your company: $cie</p>";