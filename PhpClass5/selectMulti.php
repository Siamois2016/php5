<?php

var_dump($_POST);
foreach($_POST['s1'] as $key=>$v){
    
    echo "you selected $v <br>";
}