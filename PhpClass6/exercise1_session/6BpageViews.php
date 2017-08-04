<?php
//this can help to count the number of visit of a user
session_start();
if(isset($_SESSION['views'])){
    $_SESSION['views'] = $_SESSION['views'] +1;
    
}
else{
    $_SESSION['views'] =1;
}
echo "Page Views = ".$_SESSION['views'];



