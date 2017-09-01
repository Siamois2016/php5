<?php

print_r($_SERVER);//this prints the server infos 

/* */
if(isSecure()){
    die('Must be a secured connection');
}else{
    echo "server is Http only.";
}


function isSecure(){
    return (
            (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS']!=='off') ) ||
            $_SERVER['SERVER_PORT']==443;
           
    
}