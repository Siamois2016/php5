<?php

var_dump($_POST);
foreach($_POST['s1'] as $key=>$v){
    
    echo "<br> you selected $v <br>";
}