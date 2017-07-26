<?php

/**
 * Description of processfile
 *
 * @author j_gamgo
 */

var_dump($_POST);
$list = array();
$counter =0;
echo "<hr>";
 foreach($_POST as $k=>$v)
    {
     $counter++;
     
     echo "$counter)". " $v<br>";
     
      array_push($list, $v);
     
    }


