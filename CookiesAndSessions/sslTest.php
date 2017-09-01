<?php

/* 
 * Validate if the current web browser is connected via
SSL.
 */
if($_SERVER["HTTPS"]!=='on'){
    die("Must be a secure connection.");
}else{
    echo "secure connection";
}
