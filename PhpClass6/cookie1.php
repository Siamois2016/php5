<?php
$expire = time()+3600;
if(isset($_COOKIE["counter"])){
    
    $newvalue = $_COOKIE['counter'] +1;
    setcookie('counter', $newvalue,$expire); 
    echo 'It exist = '.$_COOKIE['counter'];
    
}else{
    
     setcookie('counter', 1); 
    echo "1" ; 
    
}
