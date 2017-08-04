<?php

$expire = time()+3600;
if(isset($_COOKIE["counter"])){
   $counter=$_COOKIE["counter"]+1;
    setcookie("counter", $counter,$expire);
    echo ("new value = ".$_COOKIE["counter"]);
    
}else{
    setcookie('counter', 1, $expire);
    echo (1);
}


