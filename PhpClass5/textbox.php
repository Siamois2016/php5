<?php

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(!empty($_GET['input1'])){
        $input1 = $_GET['input1'];
        
    }
    else{
        echo "Expected input";
    }
}

