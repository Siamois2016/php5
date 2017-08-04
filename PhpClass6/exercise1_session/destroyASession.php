<?php

session_start();
if(isset($_SESSION['views']))
    unset ($_SESSION['views']);//destroy the session variable

session_destroy(); // destroy session
